<?php
$enlace;

function conectarBD() {
    global $enlace;
    $enlace = mysqli_connect("localhost", "admininvsc", "admin2013", "inventariosc");
    if ($enlace == null) {
        die('Error de ConexiÃ³n (' . mysqli_connect_errno() . ') ' . mysqli_connect_error() . '<br/>');
    }
    mysqli_select_db($enlace, "inventariosc");
    return $enlace;
    global $link;
    $link = $enlace;
}

function cerrarBD() {
    global $enlace;
    mysqli_close($enlace);
}

function hayLogin() {
    if (!$_SESSION["usuario"]) {
        ?> 
        <script type="text/javascript">
            alert('Área Restringida, por favor inicie sesión.')
            location.href = "/inventario/login.php";
        </script> 
        <?php
    } else {
        ?>
        <div id="barraSuperior">
            <form>
                <p class="nombreSuperior">Hola <?php echo $_SESSION["usuario"] ?> </p>
                <input type="button" class="cerrar btn-xs" onclick="location.href = '/inventario/login.php'" value="Cerrar Sesión" name="cerrar"/>
            </form>
        </div>
        <?php
    }
}

function login($usuario, $password) {
    $enlace = conectarBD();
    $sql = "SELECT * FROM user WHERE username = '" . $usuario . "';";
    $result = mysqli_query($enlace, $sql) or die(mysqli_error());
    cerrarBD();
    if ($row = mysqli_fetch_array($result)) {
        if ($row["password"] == $password) {
            $_SESSION["usuario"] = $row["username"];
            $_SESSION["estado"] = 1;
            ?> 
            <script languaje="javascript">
                location.href = "index.php";
            </script> 
            <?php
        } else {
            ?>
            <script languaje="javascript">
                alert("La contraseña no se corresponde con el usuario indicado");
                location.href = "login.php";
            </script>
            <?php
        }
    } else {
        ?>
        <script languaje="javascript">
            alert("Este usuario no existe");
        </script> 
        <?php
    }
}
?>