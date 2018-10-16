<?php
header("Content-type:text/json");
$directorioraiz=dirname(__FILE__,2);
include_once 'controlsesion.php';
include_once "$directorioraiz/config/config.php";
include_once 'logica.php';
include_once 'ClearData.php';


$retval=NULL;


 if (isset($_SESSION['usuario'])) {
$retval=mostrarreservasusuario($_SESSION['usuario']);
 }

print(json_encode($retval));
//print($retval);




?>