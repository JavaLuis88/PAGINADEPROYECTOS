<?php
include '../../funcionesA.php';
$objeConexion = conectarBD();
?>
<link rel="stylesheet" type="text/css" href="inventario.css" title="style" />
<style>
    body {
        font-family: Verdana;
        color: white;
    }
</style>

<?php
global $v1;
global $v2;
global $v3;
global $v4;
$v1 = strtoupper($_POST['pv1']);
$v2 = strtoupper($_POST['pv2']);
$v3 = strtoupper($_POST['pv3']);
$v4 = $_POST['pv4'];


if ($v1 == "" || $v2 == "" || $v3 == "") {
    echo "Se ha producido un error. Se deben introducir todos los datos";
    ?>
    <a href="formulario.php">Introducir los datos</a>
    <?php
} else {

    $sql = "INSERT INTO user (username, password, depart,permisos)
VALUES ('" . $v1 . "',
 '" . $v2 . "',
 '" . $v3 . "',
 '" . $v4 . "'
 )";

    $result = mysqli_query($objeConexion, $sql);
    ;

    echo "Ha introducido un nuevo usuario";
}
?>