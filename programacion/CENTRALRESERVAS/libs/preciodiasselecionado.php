<?php
header("Content-type:text/json\n\n");
$directorioraiz=dirname(__FILE__,2);
include_once "$directorioraiz/config/config.php";
include_once 'logica.php';
include_once 'ClearData.php';


$cadenafechaentrada = "";
$cadenafechasalida = "";
$fechaentrada = NULL;
$fechasalida = NULL;
$retval = NULL;





if (DEPURACION == TRUE) {

    if (isset($_GET["datos"])) {

        $cadenafechaentrada = json_decode($_GET["datos"]);
    }
} else {
    if (isset($_POST["datos"])) {
        $cadenafechaentrada = json_decode($_POST["datos"]);
    }
}



$retval = calcularpreciodias($cadenafechaentrada->fechaentrada, $cadenafechaentrada->fechasalida, $cadenafechaentrada->idrecinto);




print($retval);
?>