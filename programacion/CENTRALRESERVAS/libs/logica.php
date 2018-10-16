<?php

$directorioraiz = dirname(__FILE__, 2);

use PHPMailer\PHPMailer\PHPMailer;
include_once './vendor/autoload.php';
include_once "$directorioraiz/config/config.php";
include_once 'DBconection.php';
include_once 'DBresult.php';
include_once 'ClearData.php';
include_once 'CasasRurales.php';
include_once 'Imagenes.php';
include_once 'Precio.php';
include_once 'redsys/RedSysHandler.php';

function obtenerimagenescasa($conexion, $id) {
    $sql = "SELECT `id`, `RUTA`, `DESCRIPCION`, `IDCASA`, `EXTENSION` FROM `imagenes` WHERE `IDCASA`=?";
    $idrecinto = 0;
    $ruta = "";
    $descripcion = "";
    $idcasa = 0;
    $extesion = "";
    $retval = array();
    if ($stmt = mysqli_prepare($conexion, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $idrecinto, $ruta, $descripcion, $idcasa, $extesion);
        while (mysqli_stmt_fetch($stmt)) {
            $retval[] = new Imagenes($idrecinto, $ruta, $descripcion, $idcasa, $extesion);
        }
        mysqli_stmt_close($stmt);
    }



    return $retval;
}

function obtenerrecintossinreservar($fechaentrada, $fechasalida) {

    $registros = array();
    $registros2 = array();
    $sql = "";
    $conexion = NULL;
    $id = 0;
    $ref = "";
    $nombrecinto = "";
    $direccion = "";
    $ciudad = "";
    $correorecinto = "";
    $descripcion = "";
    $borrado = TRUE;
    $precioahabitual = 0;
    $cadenafecha = "";
    $hoy = NULL;
    $stmt = NULL;
    $continuar = TRUE;
    $cuenta = 0;
    $claves = array();
    $retval = NULL;
    $sql = "SELECT `id`, `REF`, `NOMBRERECINTO`, `DIRECCION`, `CIUDAD`, `CORREORECINTO`, `DESCRIPCION`, `BORRADO`, `PRECIOHABITUAL` FROM `casasrurales` WHERE ID NOT IN (SELECT IDCASARURAL FROM `diasreserva` WHERE DIA=?);";

    $retval = new DBresult(0, array());




    $conexion = DBConnection::getDBConnection();
    $hoy = new DateTime();

    if ($conexion != NULL) {


        while ($fechaentrada <= $fechasalida && $continuar == TRUE) {


            if ($stmt = mysqli_prepare($conexion, $sql)) {
                $cadenafecha = $fechaentrada->format("Y-m-d");
                mysqli_stmt_bind_param($stmt, "s", $cadenafecha);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $id, $ref, $nombrecinto, $direccion, $ciudad, $correorecinto, $descripcion, $borrado, $precioahabitual);
                while (mysqli_stmt_fetch($stmt)) {
                    $registros[$id] = new CasasRurales($id, $ref, $nombrecinto, $direccion, $ciudad, $correorecinto, $descripcion, $borrado, $precioahabitual, array());
                }
                mysqli_stmt_close($stmt);
            } else {

                $continuar = FALSE;
            }





            $fechaentrada->add(new DateInterval("P1D"));
        }


        if ($continuar == TRUE) {



            $claves = array_keys($registros);
            $cuenta = count($claves);

            for ($i = 0; $i < $cuenta; $i++) {

                $registros[$claves[$i]]->imagenes = obtenerimagenescasa($conexion, $claves[$i]);
                $registros2[] = $registros[$claves[$i]];
            }


            $retval->setResultado($registros2);
        } else {
            $retval->setCodigo(1);
        }
    } else {
        $retval->setCodigo(1);
    }



    return $retval;
}

function existecasarural($conexion, $idcasarural) {


    $sql = "";
    $cantidadcasas = 0;
    $retval = TRUE;

    $sql = "SELECT count(*) as cantidadcasas FROM `casasrurales` WHERE ID=?;";


    if ($stmt = mysqli_prepare($conexion, $sql)) {

        mysqli_stmt_bind_param($stmt, "i", $idcasarural);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $cantidadcasas);
        if (mysqli_stmt_fetch($stmt) === TRUE) {

            if ($cantidadcasas >= 1) {

                $retval = TRUE;
            } else {
                $retval = FALSE;
            }
        } else {

            $retval = FALSE;
        }
        mysqli_stmt_close($stmt);
    } else {

        $retval = FALSE;
    }

    return $retval;
}

function obtenerdatoscasa($conexion, $idcasarural) {

    $sql = "";
    $id = 0;
    $ref = "";
    $nombrecinto = "";
    $direccion = "";
    $ciudad = "";
    $correorecinto = "";
    $descripcion = "";
    $borrado = TRUE;
    $precioahabitual = 0;
    $retval = NULL;



    $sql = "SELECT `id`, `REF`, `NOMBRERECINTO`, `DIRECCION`, `CIUDAD`, `CORREORECINTO`, `DESCRIPCION`, `BORRADO`, `PRECIOHABITUAL` FROM `casasrurales` WHERE ID=?";


    if ($stmt = mysqli_prepare($conexion, $sql)) {

        mysqli_stmt_bind_param($stmt, "i", $idcasarural);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id, $ref, $nombrecinto, $direccion, $ciudad, $correorecinto, $descripcion, $borrado, $precioahabitual);
        if (mysqli_stmt_fetch($stmt) === TRUE) {

            $retval = new CasasRurales($id, $ref, $nombrecinto, $direccion, $ciudad, $correorecinto, $descripcion, $borrado, $precioahabitual, array());
            mysqli_stmt_close($stmt);
            $retval->imagenes = obtenerimagenescasa($conexion, $idcasarural);
        }
    }

    return $retval;
}

function obtenerdatosdiasecinto($month, $year, $idrecinto) {

    $conexion = NULL;
    $datosdias = NULL;
    $fecha = NULL;
    $retval = array();
    $i = 0;

    $conexion = DBConnection::getDBConnection();
    if ($conexion != NULL) {


        $i = 1;
        $datosdias = TRUE;

        while ($i <= 31 && $datosdias !== NULL) {




            $fecha = new \DateTime();
            $fecha->setDate($year, $month, $i);
            $retval[$i] = 0;
            $datosdias = tieneoferta($conexion, $fecha, $idrecinto);

            if ($datosdias !== NULL) {

                if ($datosdias === TRUE) {
                    $retval[$i] = 1;
                }

                $datosdias = estareservado($conexion, $fecha, $idrecinto);

                if ($datosdias !== NULL) {

                    if ($datosdias === TRUE) {
                        $retval[$i] = 2;
                    }
                }
            }




            $i++;
        }
    } else {

        $retval = NULL;
    }

    return $retval;
}

function tieneoferta($conexion, $fecha, $idrecinto) {


    $sql = "";
    $cuenta = 0;
    $cadenafecha = "";
    $retval = NULL;



    $sql = "SELECT count(*) as cuenta FROM `precios` WHERE `DIA`=? AND `IDCASA`=?";

    if ($stmt = mysqli_prepare($conexion, $sql)) {


        $cadenafecha = $fecha->format('Y-m-d');
        mysqli_stmt_bind_param($stmt, "ss", $cadenafecha, $idrecinto);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $cuenta);
        if (mysqli_stmt_fetch($stmt) === TRUE) {
            if ($cuenta >= 1) {

                $retval = TRUE;
            } else {

                $retval = FALSE;
            }
        }

        mysqli_stmt_close($stmt);
    }
    return $retval;
}

function estareservado($conexion, $fecha, $idrecinto) {
    $sql = "";
    $cuenta = 0;
    $cadenafecha = "";
    $retval = NULL;




    $sql = "SELECT count(*) as cuenta FROM `diasreserva` WHERE `DIA`=? AND `IDCASARURAL`=?";

    if ($stmt = mysqli_prepare($conexion, $sql)) {
        $cadenafecha = $fecha->format('Y-m-d');
        mysqli_stmt_bind_param($stmt, "ss", $cadenafecha, $idrecinto);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $cuenta);
        if (mysqli_stmt_fetch($stmt) === TRUE) {
            if ($cuenta >= 1) {

                $retval = TRUE;
            } else {

                $retval = FALSE;
            }
        }
        mysqli_stmt_close($stmt);
    }
    return $retval;
}

function obtenerpreciosmesrecinto($month, $year, $idrecinto) {

    $conexion = NULL;
    $datosdias = NULL;
    $datoscasa = NULL;


    $fecha = NULL;
    $retval = NULL;
    $i = 0;

    $conexion = DBConnection::getDBConnection();
    if ($conexion != NULL) {


        $i = 1;
        $datosdias = TRUE;


        $retval = array();

        while ($i <= 31 && $datosdias !== NULL) {




            $fecha = new \DateTime();
            $fecha->setDate($year, $month, $i);

            $datosdias = preciodiacasa($conexion, $fecha, $idrecinto);

            if ($datosdias !== NULL) {


                $retval[$i] = $datosdias;
            }




            $i++;
        }

        if ($datosdias === NULL) {

            $retval = NULL;
        }
    }

    return $retval;
}

function preciodiacasa($conexion, $fecha, $idrecinto) {
    $sql = "";
    $datoscasa = NULL;
    $estareservado = FALSE;
    $id = 0;
    $precio = 0;
    $dia = NULL;
    $oferta = FALSE;
    $motivooferta = NULL;
    $preciocasa = NULL;
    $idcasa = 0;


    $sql = "SELECT `id`, `PRECIO`, `DIA`, `OFERTA`, `MOTIVOOFERTA`, `IDCASA` FROM precios WHERE `DIA`=? AND `IDCASA`=?";

    $retval = NULL;


    $datoscasa = obtenerdatoscasa($conexion, $idrecinto);
    $estareservado = estareservado($conexion, $fecha, $idrecinto);
    if ($datoscasa !== NULL && $estareservado === FALSE) {
        $retval = new Precio(0, $datoscasa->precioahabitual, $fecha, 2, "Precio habitual", $idrecinto);


        if ($stmt = mysqli_prepare($conexion, $sql)) {
            $cadenafecha = $fecha->format('Y-m-d');
            mysqli_stmt_bind_param($stmt, "ss", $cadenafecha, $idrecinto);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $id, $precio, $dia, $oferta, $motivooferta, $idcasa);
            if (mysqli_stmt_fetch($stmt) === TRUE) {


                $cadenafecha = $fecha->format('Y-m-d');
                mysqli_stmt_bind_param($stmt, "ss", $cadenafecha, $idrecinto);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $id, $precio, $dia, $oferta, $motivooferta, $idcasa);
                if (mysqli_stmt_fetch($stmt) === TRUE) {
                    if ($motivooferta === NULL) {

                        $motivooferta = "";
                    }
                    $retval = new Precio($id, $precio, $fecha, 2, $motivooferta, $idrecinto);
                }

                mysqli_stmt_close($stmt);
            }
        }
    } elseif ($estareservado === TRUE) {

        $retval = "RESERVADO";
    }

    return $retval;
}

function calcularpreciodias($cadenafechaentrada, $cadenafechasalida, $idrecinto) {

    $fechaentrada = NULL;
    $fechasalida = NULL;
    $hoy = NULL;
    $idrecinro = 0;
    $conexion = NULL;
    $datosdias = NULL;
    $retval = NULL;
    $i = 0;




    $fechaentrada = new DateTime($cadenafechaentrada);
    $fechasalida = new DateTime($cadenafechasalida);
    $hoy = new DateTime();
    if ($fechaentrada >= $fechasalida || $fechaentrada <= $hoy || $fechasalida <= $hoy) {

        $retval = -1;
    } else {



        $conexion = DBConnection::getDBConnection();
        if ($conexion != NULL) {


            $i = 1;
            $datosdias = 8;

            $retval = 0;

            while ($fechaentrada <= $fechasalida && $datosdias !== NULL && $datosdias !== "RESERVADO") {





                $datosdias = preciodiacasa($conexion, $fechaentrada, $idrecinto);

                if ($datosdias !== NULL && $datosdias !== "RESERVADO") {


                    $retval = $retval + $datosdias->precio;
                } else if ($datosdias === "RESERVADO") {

                    $retval = -1;
                }




                $fechaentrada->add(new DateInterval("P1D"));
            }
        }
    }

    $retval = json_encode($retval);
    return $retval;
}

function registrarusuario($nombre, $apellidos, $telefono, $correo, $contrasena) {

    $conexion = NULL;
    $sql = "";
    $cuenta = 0;
    $retval = "";

    $sql = "SELECT count(*) as cuenta FROM `clientes` WHERE `CORREOELECTRONICO`=?";
    $retval = "";


    $conexion = DBConnection::getDBConnection();
    if ($conexion != NULL) {

        if ($stmt = mysqli_prepare($conexion, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $correo);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $cuenta);
            if (mysqli_stmt_fetch($stmt) === TRUE) {



                if ($cuenta <= 0) {

                    mysqli_stmt_close($stmt);
                    $sql = "INSERT INTO `clientes`(`NOMBRE`, `CORREOELECTRONICO`, `CONTRASENA`, `APELLIDOS`, `TELEFONO`) VALUES (?,?,?,?,?)";


                    if ($stmt = mysqli_prepare($conexion, $sql)) {
                        mysqli_stmt_bind_param($stmt, "sssss", $nombre, $correo, $contrasena, $apellidos, $telefono);
                        mysqli_stmt_execute($stmt);
                        if (mysqli_affected_rows($conexion) >= 1) {

                            enviarcorreo(SMTPSERVERSENDERADDRESS, $correo, "Registro en ReservaDuero", "Te has registrado correctamente en  Reservaduero, los datos de tu cuenta son: <br> correo electrónico $correo<br> contraseña $contrasena");
                            $_SESSION['usuario'] = $correo;
                        } else {
                            $retval = "Error Inesperado";
                        }
                        mysqli_stmt_close($stmt);
                    } else {
                        $retval = "Error Inesperado";
                    }
                } else {



                    $retval = "Ya existe un usuario con ese correo electrónico";
                }
            } else {
                mysqli_stmt_close($stmt);
                $retval = "Error Inesperado";
            }
        } else {
            mysqli_stmt_close($stmt);
            $retval = "Error Inesperado";
        }
    } else {
        $retval = "Error Inesperado";
    }


    return $retval;
}

function identificarusuario($correo, $contrasena) {

    $conexion = NULL;
    $sql = "";
    $contrasena2 = "";
    $cuenta = 0;

    $retval = "";

    $sql = "SELECT `CONTRASENA` FROM `clientes` WHERE `CORREOELECTRONICO`=?";
    $retval = "";


    $conexion = DBConnection::getDBConnection();
    if ($conexion != NULL) {

        if ($stmt = mysqli_prepare($conexion, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $correo);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $contrasena2);
            if (mysqli_stmt_fetch($stmt) === TRUE) {

                if ($contrasena == $contrasena2) {

                    $_SESSION['usuario'] = $correo;
                } else {
                    $retval = "Error, el correo electrónico o la contraseña especificada no son válidos";
                }
            } else {
                mysqli_stmt_close($stmt);
                $retval = "Error, el correo electrónico o la contraseña especificada no son válidos";
            }
        } else {
            mysqli_stmt_close($stmt);
            $retval = "Error Inesperdo2";
        }
    } else {
        $retval = "Error Inesperado";
    }


    return $retval;
}

function obtenerdatosuario($conexion, $correo) {


    $sql = "";
    $contrasena2 = "";
    $cuenta = 0;

    $retval = "";

    $sql = "SELECT `id`, `NOMBRE`, `CORREOELECTRONICO`, `CONTRASENA`, `APELLIDOS`, `TELEFONO` FROM `clientes` WHERE `CORREOELECTRONICO`=?";
    $retval = NULL;




    if ($stmt = mysqli_prepare($conexion, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $correo);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id, $nombre, $correoelectronico, $contrasena, $apellidos, $telefono);
        if (mysqli_stmt_fetch($stmt) === TRUE) {


            $retval = array();
            $retval['id'] = $id;
            $retval['nombre'] = $nombre;
            $retval['correolectronico'] = $correoelectronico;
            $retval['contrasena'] = $contrasena;
            $retval['apellidos'] = $apellidos;
            $retval['telefono'] = $telefono;


            mysqli_stmt_close($stmt);
        }
    }



    return $retval;
}

function registrarseserva($idcarural, $cadenafechaentrada, $cadenafechasalida) {
    $conexion = NULL;
    $fechaentrada = NULL;
    $fechasalida = NULL;
    $datosuario = NULL;
    $datoscasarurales = NULL;
    $preciototal = 0;
    $preciosdelosdias = array();
    $preciodia = NULL;
    $cadenafechadia = "";
    $codigotrnsaccion = 0;
    $idcliente = 0;
    $idconsulta = 0;
    $hoy = NULL;
    $retval = "";


    $conexion = DBConnection::getDBConnection();
    if ($conexion != NULL) {


        $fechaentrada = new DateTime($cadenafechaentrada);
        $fechasalida = new DateTime($cadenafechasalida);
        $datosuario = obtenerdatosuario($conexion, $_SESSION['usuario']);

        $datoscasarurales = obtenerdatoscasa($conexion, $idcarural);
        $preciototal = json_decode(calcularpreciodias($cadenafechaentrada, $cadenafechasalida, $idcarural));

        $hoy = new \DateTime();
        if ($datosuario !== NULL && $datoscasarurales != NULL && $preciototal !== NULL && $preciototal > 0) {
            if ($fechaentrada >= $fechasalida || $fechaentrada <= $hoy || $fechasalida <= $hoy) {

                $retval = "Las fechas elegidas no son válidas";
            } else {
                $preciodia = 0;
                while ($fechaentrada <= $fechasalida && $preciodia !== NULL && $preciodia !== "RESERVADO") {





                    $preciodia = preciodiacasa($conexion, $fechaentrada, $idcarural);

                    if ($preciodia !== NULL && $preciodia !== "RESERVADO") {


                        $preciosdelosdias[$fechaentrada->format("Y-m-D")] = $preciodia->precio;
                    }



                    $fechaentrada->add(new DateInterval("P1D"));
                }


                if ($preciodia === NULL) {

                    $retval = "Error Inesperado";
                } else if ($preciodia === "RESERVADO") {

                    $retval = "Hay días reservados en la fecha";
                } else {
                    $fechaentrada = new DateTime($cadenafechaentrada);
                    $fechasalida = new DateTime($cadenafechasalida);
                    mysqli_autocommit($conexion, FALSE);
                    $sql = "INSERT INTO `reservascliente`(`PRECIO`, `CODIGOTRANSACCION`, `ESTADOTRANSACCION`, `ESTADORESERVA`, `IDCLIENTE`, `IDCASARURAL`) VALUES (?,?,?,?,?,?)";
                    if ($stmt = mysqli_prepare($conexion, $sql)) {
                        $codigotrnsaccion = time();
                        $idcliente = $datosuario["id"];
                        $estadotransaccion = 0;
                        $estadoreserva = 1;
                        mysqli_stmt_bind_param($stmt, "dsiiii", $preciototal, $codigotrnsaccion, $estadotransaccion, $estadoreserva, $idcliente, $idcarural);
                        mysqli_stmt_execute($stmt);
                        $idconsulta = mysqli_insert_id($conexion);
                        mysqli_stmt_close($stmt);

                        while ($fechaentrada <= $fechasalida && $retval == "") {
                            $sql = "INSERT INTO `diasreserva`(`DIA`, `PRECIO`, `IDRESERVA`, `IDCASARURAL`) VALUES (?,?,?,?)";
                            if ($stmt = mysqli_prepare($conexion, $sql)) {
                                $cadenafechadia = $fechaentrada->format("Y-m-d");
                                $preciodia = $preciosdelosdias[$fechaentrada->format("Y-m-D")];
                                mysqli_stmt_bind_param($stmt, "sdii", $cadenafechadia, $preciodia, $idconsulta, $idcarural);
                                mysqli_stmt_execute($stmt);
                                mysqli_stmt_close($stmt);
                            } else {
                                $retval = "Error Inesperado";
                            }

                            $fechaentrada->add(new DateInterval("P1D"));
                        }

                        if ($retval !== "") {
                            mysqli_rollback($conexion);
                            mysqli_autocommit($conexion, TRUE);
                        } else {
                            if (mysqli_commit($conexion)) {

                                mysqli_autocommit($conexion, TRUE);
                                enviarcorreo(SMTPSERVERSENDERADDRESS, $datosuario['correolectronico'], "ReservaDuero reserva  de casa rural", "Has realizado una reserva " . urldecode($datoscasarurales->nombrecinto) . "para las fechas " . $cadenafechaentrada . " - " . $cadenafechasalida . " por " . $preciototal);
                            } else {
                                mysqli_rollback($conexion);
                                mysqli_autocommit($conexion, TRUE);
                                $retval = "Error Inesperado";
                            }
                        }
                    } else {
                        $retval = "Error Inesperado";
                    }
                }
            }
        } else {
            if ($preciototal == -1) {

                $retval = "Hay días reservados en la fecha";
            } else {
                $retval = "Error Inesperado";
            }
        }
    } else {
        $retval = "Error Inesperado";
    }

    if (trim($retval) === "") {


        $numeropedido = 0;

        $numeropedido = time();

        $retval = new RedSysHandler();
        $retval->setFuc(REDSYSFUC);
        $retval->setTerminal(REDSYSTERMINAL);
        $retval->setKey(REDSYSKEY);
        $retval->setId($codigotrnsaccion);
        $retval->setMoneda("978");
        $retval->setAmount($preciototal);
        $retval->setTrans(REDSYTRANS);
        $retval->setUrlprocess(REDSYSURLPROCCESS);
        $retval->setUrlOK(REDSYSURLOK);
        $retval->setUrlKO(REDSYSURLKO);
        $retval->setProduccion(ENTORNOPRODUCCION);
    }

    return $retval;
}

function recuperarusuario($correo) {

    $conexion = NULL;
    $sql = "";
    $contrasena = "";
    $cuenta = 0;

    $retval = "";

    $sql = "SELECT `CONTRASENA` FROM `clientes` WHERE `CORREOELECTRONICO`=?";
    $retval = "";


    $conexion = DBConnection::getDBConnection();
    if ($conexion != NULL) {

        if ($stmt = mysqli_prepare($conexion, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $correo);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $contrasena);
            if (mysqli_stmt_fetch($stmt) === TRUE) {


                enviarcorreo(SMTPSERVERSENDERADDRESS, $correo, "ReservaDuero recuperación de cuenta", "La contraseña de la cuenta: $correo es: $contrasena");

                mysqli_stmt_close($stmt);
            } else {
                mysqli_stmt_close($stmt);
                $retval = "No existe la cuenta especificada";
            }
        } else {
            mysqli_stmt_close($stmt);
            $retval = "Error Inesperado";
        }
    } else {
        $retval = "Error Inesperado";
    }


    return $retval;
}

function mostrarreservasusuario($correo) {

    $conexion = NULL;
    $sql = "";
    $registro = array();
    $cuenta = 0;




    $retval = NULL;


    $sql = "SELECT  t1.`id` as idreserva,t1.`NOMBRERECINTO`,t2.`PRECIO`, t2.`ESTADOTRANSACCION`, t2.`ESTADORESERVA`, t2.`id`, MIN(t3.`DIA`) as fechaentrada, MAX(t3.`DIA`) as fechasalida ,t4.`CORREOELECTRONICO` FROM casasrurales t1 INNER JOIN reservascliente t2 ON t1.id = t2.IDCASARURAL INNER JOIN diasreserva t3 ON t1.id = t3.IDCASARURAL INNER JOIN clientes t4 ON t2.IDCLIENTE = t4.id WHERE t4.CORREOELECTRONICO=? GROUP BY t2.id ";




    //if (isset($_SESSION['usuario'])) {
    $conexion = DBConnection::getDBConnection();
    if ($conexion != NULL) {



        if ($stmt = mysqli_prepare($conexion, $sql)) {
            $retval = array();
            $cuenta = 0;
            mysqli_stmt_bind_param($stmt, "s", $correo);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $idrecinto, $nombrerecinto, $precio, $estadotransaccion, $estadoreserva, $idreserva, $fechaentrada, $fechasalida, $correousuario);
            while (mysqli_stmt_fetch($stmt)) {

                $registro = array();

                $registro['idrecinto'] = $idrecinto;
                $registro['nombrerecinto'] = urlencode($nombrerecinto);
                $registro['precio'] = $precio;

                if ($estadotransaccion == 0) {

                    $registro['estadotransaccion'] = "Pendiente";
                } else if ($estadotransaccion == 1) {

                    $registro['estadotransaccion'] = "Pagado";
                } else {
                    $registro['estadotransaccion'] = "Error";
                }

                if ($estadoreserva == 0) {

                    $registro['estadoreserva'] = "Cancelada usaurio";
                } else if ($estadoreserva == 1) {

                    $registro['estadoreserva'] = "Activa";
                } else {
                    $registro['estadoreserva'] = "Cancelada administrador";
                }


                $registro['estadotransaccion'] = urldecode($registro['estadotransaccion']);
                $registro['estadoreserva'] = urldecode($registro['estadoreserva']);
                $registro['idreserva'] = $idreserva;
                $registro['fechaentrada'] = $fechaentrada;
                $registro['fechasalida'] = $fechasalida;
                $retval[$cuenta] = $registro;
                $cuenta++;
            }

            mysqli_stmt_close($stmt);
        }
    }
//}


    return $retval;
}

function borrarreserva($idreserva) {
    $conexion = NULL;
    $estadoreserva = 0;
    $registros = NULL;
    $registro = NULL;
    $cuenta = 0;
    $retval = FALSE;


    $estadoreserva = 0;
    $sql = "UPDATE `reservascliente` SET `ESTADORESERVA`=? WHERE id=?";
    $retval = FALSE;


    $conexion = DBConnection::getDBConnection();
    if ($conexion != NULL) {

        if ($stmt = mysqli_prepare($conexion, $sql)) {
            mysqli_stmt_bind_param($stmt, "ii", $estadoreserva, $idreserva);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            //$retval = TRUE;

            $retval = leerregistrosreservacancelada($conexion, $idreserva);

            if ($retval !== FALSE) {

                $retval = escribirregistrosreservacancelada($conexion, $idreserva, $retval);
                if ($retval !== FALSE) {
                    $retval = leerregistrosdiasreservacancelada($conexion, $idreserva);

                    if ($retval !== FALSE) {
                        $retval = escribirregistrosdiasreservacancelada($conexion, $idreserva, $retval);
                        if ($retval !== FALSE) {

                            if (borrarreservacancelada($conexion, $idreserva)!==FALSE && borrardiasreservacancelada($conexion, $idreserva)!==FALSE) {
                                
                             $retval = TRUE;
                                
                            }
                            
                            
                            
                        }
                    }
                }
            }
        }
    }

    return $retval;
}

function leerregistrosreservacancelada($conexion, $idreserva) {
    $sql = "SELECT `id`, `PRECIO`, `CODIGOTRANSACCION`, `ESTADOTRANSACCION`, `ESTADORESERVA`, `IDCLIENTE`, `IDCASARURAL` FROM `reservascliente` WHERE `id`=?";
    $registros = array();
    $registro = array();
    $cuenta = 0;
    $retval = FALSE;

    if ($stmt = mysqli_prepare($conexion, $sql)) {
        $retval = array();


        mysqli_stmt_bind_param($stmt, "i", $idreserva);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id, $precio, $codigotransaccion, $estadotransaccion, $estadoreserva, $idcliente, $idcasarural);

        while (mysqli_stmt_fetch($stmt)) {



            $registro["id"] = $id;
            $registro["precio"] = $precio;
            $registro["codigotransaccion"] = $codigotransaccion;
            $registro["estadotransaccion"] = $estadotransaccion;
            $registro["estadoreserva"] = $estadoreserva;
            $registro["idcliente"] = $idcliente;
            $registro["idcasarural"] = $idcasarural;
            $registros[$cuenta] = $registro;
        }
        $retval = $registros;
        mysqli_stmt_close($stmt);
    }
    return $retval;
}

function escribirregistrosreservacancelada($conexion, $idreserva, $registros) {
    $sql = "";
    $regisro = NULL;
    $cuenta = 0;
    $retval = TRUE;
    $i = 0;


    $sql = "INSERT INTO `reservasclientecanceladas`(`id`, `PRECIO`, `CODIGOTRANSACCION`, `ESTADOTRANSACCION`, `ESTADORESERVA`, `IDCLIENTE`, `IDCASARURAL`) VALUES (?,?,?,?,?,?,?)";
    $cuenta = count($registros);
    $i = 0;
    while ($i < $cuenta && $retval == TRUE) {

        $registro = $registros[$i];
        $id = $registro["id"];
        $precio = $registro["precio"];
        $codigotransaccion = $registro["codigotransaccion"];
        $estadotransaccion = $registro["estadotransaccion"];
        $estadoreserva = $registro["estadoreserva"];
        $idcliente = $registro["idcliente"];
        $idcasarural = $registro["idcasarural"];



        if ($stmt = mysqli_prepare($conexion, $sql)) {

            mysqli_stmt_bind_param($stmt, "idsiiii", $id, $precio, $codigotransaccion, $estadotransaccion, $estadoreserva, $idcliente, $idcasarural);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        } else {
            $retval = FALSE;
        }
        $i++;
    }

    return $retval;
}

function leerregistrosdiasreservacancelada($conexion, $idreserva) {
    $sql = "SELECT `id`, `DIA`, `PRECIO`, `IDRESERVA`, `IDCASARURAL` FROM `diasreserva` WHERE `IDRESERVA`=?";
    $registros = array();
    $registro = array();
    $cuenta = 0;
    $retval = FALSE;

    if ($stmt = mysqli_prepare($conexion, $sql)) {


        $registro = array();
        $cuenta = 0;

        mysqli_stmt_bind_param($stmt, "i", $idreserva);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id, $dia, $precio, $idreservacasa, $idcasarural);

        while (mysqli_stmt_fetch($stmt)) {



            $registro["id"] = $id;
            $registro["dia"] = $dia;
            $registro["precio"] = $precio;
            $registro["idreserva"] = $idreservacasa;
            $registro["idcasa"] = $idcasarural;

            $registros[$cuenta] = $registro;
            $cuenta++;
        }
        $retval = $registros;
        mysqli_stmt_close($stmt);
    }
    return $retval;
}

function escribirregistrosdiasreservacancelada($conexion, $idreserva, $registros) {

    $sql = "";
    $regisro = NULL;
    $cuenta = 0;
    $retval = TRUE;
    $i = 0;


    $sql = "INSERT INTO `diasreservacanceladas`(`id`, `DIA`, `PRECIO`, `IDRESERVA`, `IDCASARURAL`) VALUES (?,?,?,?,?)";
    $cuenta = count($registros);
    $i = 0;
    while ($i < $cuenta && $retval == TRUE) {

        $registro = $registros[$i];
        
        $id = $registro["id"];
        $dia = $registro["dia"];
        $precio = $registro["precio"];
        $idreservacasa = $registro["idreserva"];
        $idcasarural = $registro["idcasa"];


        if ($stmt = mysqli_prepare($conexion, $sql)) {

            mysqli_stmt_bind_param($stmt, "isdii", $id, $dia, $precio, $idreservacasa, $idcasarural);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        } else {
            $retval = FALSE;
        }
        $i++;
    }

    return $retval;
}


function borrarreservacancelada($conexion, $idreserva) {
    
    $sql = "";
    $retval = TRUE;
    $i = 0;


    $sql = "DELETE FROM `reservascliente` WHERE `id`=?";
   
   

        if ($stmt = mysqli_prepare($conexion, $sql)) {

            mysqli_stmt_bind_param($stmt, "i", $idreserva);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        } else {
            $retval = FALSE;
        }
   

    return $retval;
    
}


function borrardiasreservacancelada($conexion, $idreserva) {
    
    $sql = "";
    $retval = TRUE;
    $i = 0;


    $sql = "DELETE FROM `diasreserva` WHERE `IDRESERVA`=?";
   
   

        if ($stmt = mysqli_prepare($conexion, $sql)) {

            mysqli_stmt_bind_param($stmt, "i", $idreserva);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        } else {
            $retval = FALSE;
        }
   

    return $retval;
    
}

function cambiarestadotransaccion($transaccion, $estadotransaccion) {
    $conexion = NULL;
    $estadoreserva = 0;
    $retval = FALSE;


    $estadoreserva = 0;
    $sql = "UPDATE `reservascliente` SET `ESTADOTRANSACCION`=? WHERE CODIGOTRANSACCION=?";
    $retval = FALSE;




    $conexion = DBConnection::getDBConnection();
    if ($conexion != NULL) {

        if ($stmt = mysqli_prepare($conexion, $sql)) {
            mysqli_stmt_bind_param($stmt, "ii", $estadotransaccion, $transaccion);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            $sql = "SELECT  t1.`id` as idreserva,t1.`NOMBRERECINTO`,t2.`PRECIO`, t2.`ESTADOTRANSACCION`, t2.`ESTADORESERVA`, t2.`id`,t2.`CODIGOTRANSACCION`, MIN(t3.`DIA`) as fechaentrada, MAX(t3.`DIA`) as fechasalida ,t4.`CORREOELECTRONICO` FROM casasrurales t1 INNER JOIN reservascliente t2 ON t1.id = t2.IDCASARURAL INNER JOIN diasreserva t3 ON t1.id = t3.IDCASARURAL INNER JOIN clientes t4 ON t2.IDCLIENTE = t4.id WHERE t2.CODIGOTRANSACCION=? GROUP BY t2.id ";
            if ($stmt = mysqli_prepare($conexion, $sql)) {

                mysqli_stmt_bind_param($stmt, "s", $transaccion);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $idrecinto, $nombrerecinto, $precio, $estadotransaccion, $estadoreserva, $idreserva, $codigotransaccion, $fechaentrada, $fechasalida, $correousuario);
                if (mysqli_stmt_fetch($stmt)) {
                    enviarcorreo(SMTPSERVERSENDERADDRESS, $correousuario, "Pago de reserva en ReservaDuero", "El pago de la reserva en: $nombrerecinto ha sido realizado");
                    mysqli_stmt_close($stmt);
                    $retval = TRUE;
                }
            }
        }

        return $retval;
    }
}

function enviarcorreo($de, $para, $asunto, $mensaje) {



    $mail = new PHPMailer;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->isSMTP();
    $mail->CharSet="UTF-8";
    $mail->SMTPDebug = 0;
    $mail->Host = SMTPSERVERADDRESS;
    $mail->Port = SMTPSERVERPORT;
    $mail->SMTPSecure = SMTPSERVERSECURITY;
    $mail->SMTPAuth = true;
    $mail->Username = SMTPSERVERUSER;
    $mail->Password = SMTPSERVERPASSWORD;
    $mail->setFrom($de, $de);
    $mail->addReplyTo($de, $de);
    $mail->addAddress($para, $para);
    $mail->addBCC($de);
    $mail->Subject = $asunto;
    $mail->Body = $mensaje;
    $mail->AltBody = strip_tags($mensaje);


    return $mail->send();
}

//SELECT  t1.`id` as idreserva,t1.`NOMBRERECINTO`,t2.`PRECIO`, t2.`ESTADOTRANSACCION`, t2.`ESTADORESERVA`, t2.`id`, MIN(t3.`DIA`) as fechaentrada, MAX(t3.`DIA`) as fechasalida ,t4.`CORREOELECTRONICO` FROM casasrurales t1 INNER JOIN reservascliente t2 ON t1.id = t2.IDCASARURAL INNER JOIN diasreserva t3 ON t1.id = t3.IDCASARURAL INNER JOIN clientes t4 ON t2.IDCLIENTE = t4.id WHERE t4.CORREOELECTRONICO='imunoz@gmail.com' GROUP BY t2.id 
?>