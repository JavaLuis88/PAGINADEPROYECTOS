<html>
    <head>
        <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <?php
        include '../../funcionesA.php';
        $objeConexion = conectarBD();

        $Nombre = ($_GET['Nombre']);
        $Direc = ($_GET['Direccion']);
        $Tele = ($_GET['Tele']);
        $CIF = ($_GET['CIF']);
        $Email = ($_GET['Email']);
        $Descri = ($_GET['Descripcion']);



        $sql = "INSERT INTO Proveedores (Nombre, Descripcion, Direccion, Telefono, CIF, `E-mail`)
VALUES ('" . $Nombre . "',
 '" . $Descri . "',
 '" . $Direc . "',
 '" . $Tele . "',
 '" . $CIF . "',
 '" . $Email . "')";

        $result = mysqli_query($objeConexion, $sql) or die(mysqli_error());
        ;
        ?>

    </head>
    <body>

        <div class="container theme-showcase" role="main">
            <div class="jumbotron">

                <p><h3> Se ha insertado correctamente el Proveedor </h3></p>

            </div>
        </div>

    </body>
</html>