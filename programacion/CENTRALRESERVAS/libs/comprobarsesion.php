<?php
header("Content-type:text/json\n\n");
include_once 'controlsesion.php';
$retval=TRUE;

if (isset($_SESSION['usuario'])) {
    
    $retval=TRUE;
    
}
else {
    
    $retval=false;
}
print(json_encode($retval));
?>