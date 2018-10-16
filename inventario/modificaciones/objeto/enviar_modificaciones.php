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
$Salavieja = ($_GET['Salavieja']);
$ID = ($_GET['ID']);
$Fecha = date("Y-m-d");



$sql = "UPDATE `inventariosc`.`objetos` SET uds='" . $Unidades . "',
 nserie ='" . $Numserie . "',
 elemento ='" . $Elemento . "',
 Tipo ='" . $Tipo . "',
 `desc`='" . $Descripcion . "',
 prov='" . $Prove . "',
 dept='" . $Depart . "',
 sala ='" . $Sala . "',
 cuentagest ='" . $Cuenta . "',
 obs ='" . $Obs . "',
 Factura ='" . $Factura . "' 
 where `objetos`.`id`=" . $ID . "";


$result = mysqli_query($enlace, $sql);

$sql2 = "select id from objetos order by id DESC limit 1";
$resultado = mysqli_query($enlace, $sql2);

while ($registro = mysqli_fetch_row($resultado)) {
    foreach ($registro as $clave) {
        
    }
}
$codigo_barras = $Depart . " - " . $Tipo . " " . $ID . " - " . $Sala;

$sql3 = "Update objetos set id_old=" . $clave . ", cod_barras='" . $codigo_barras . "' where id=" . $clave . ";";
$resultado2 = mysqli_query($enlace, $sql3);


if ($Sala != $Salavieja) {
    $Fecha = date("Y-m-d H:i:s");
    $sql4 = "Insert into movimientos (id, fecha, sala) values (
'" . $clave . "',
'" . $Fecha . "',
'" . $Sala . "')";
    $resultado3 = mysqli_query($enlace, $sql4);
    ;
}
?>
<html>
    <head>
        <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>


        <div class="container theme-showcase" role="main">
            <div class="jumbotron">
                <p><h3> <?php echo "El proceso de actualización finalizó de forma exitosa"; ?></h3></p>

                <a href="modificar_objeto.php "class="btn btn-success"> Registro actualizado </a> 


            </div>
        </div>
    </body>
</html>