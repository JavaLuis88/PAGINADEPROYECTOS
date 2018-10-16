<?php
include '../../funcionesA.php';
$enlace = conectarBD();


$Prove = ($_GET['Prove']);
$Depart = ($_GET['Departamento']);
$Sala = ($_GET['Sala']);
$Tipo = ($_GET['Tipo']);
$Descripcion = ($_GET['Descripcion']);
$Numserie = ($_GET['Numserie']);
$Unidades = ($_GET['Unidades']);
$Obs = ($_GET['Obs']);
$Cuenta = ($_GET['Cuenta']);
$Factura = ($_GET['Factura']);
$Elemento = ($_GET['Elemento']);
$Fecha = date("Y-m-d");





$sql = "INSERT INTO objetos (uds, nserie, elemento, Tipo, `desc`,prov, f_alta, dept,sala, cuentagest, obs, Factura)
VALUES (
 '" . $Unidades . "',
 '" . $Numserie . "',
 '" . $Elemento . "',
 '" . $Tipo . "',
 '" . $Descripcion . "',
 '" . $Prove . "',
 '" . $Fecha . "',
 '" . $Depart . "',
 '" . $Sala . "',
 '" . $Cuenta . "',
 '" . $Obs . "',
 '" . $Factura . "')";

$result = mysqli_query($enlace, $sql) or die(mysqli_error());
;

$sql2 = "select id from objetos order by id DESC limit 1";
$resultado = mysqli_query($enlace, $sql2) or die(mysqli_error());
;

while ($registro = mysqli_fetch_row($resultado)) {
    foreach ($registro as $clave) {
        
    }
}
$codigo_barras = $Depart . " - " . $Tipo . " " . $clave . " - " . $Sala;

$sql3 = "Update objetos set id_old=" . $clave . ", cod_barras='" . $codigo_barras . "' where id=" . $clave . ";";
$resultado2 = mysqli_query($enlace, $sql3) or die(mysqli_error());
;
//printf("El ultimo registro insertado tiene el id %d\n", mysql_insert_id());

$Fecha = date("Y-m-d H:i:s");
$sql4 = "Insert into movimientos (id, fecha, sala) values (
'" . $clave . "',
'" . $Fecha . "',
'" . $Sala . "')";
$resultado3 = mysqli_query($enlace, $sql4) or die(mysqli_error());
;
?>
<html>
    <head>
        <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>


        <div class="container theme-showcase" role="main">
            <div class="jumbotron">

                <p><h3> Se ha insertado correctamente el nuevo objeto </h3></p>

            </div>
        </div>
    </body>
</html>