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
        $ID = ($_GET['ID']);
        $sql = "UPDATE Proveedores SET Nombre='" . $Nombre . "',
 Descripcion ='" . $Descri . "',
 Direccion = '" . $Direc . "',
 Telefono = '" . $Tele . "',
 CIF= '" . $CIF . "',
`E-mail`= '" . $Email . "' where ID =" . $ID . ";";



        $result = mysqli_query($objeConexion, $sql) or die(mysqli_error());
        ;
        ?>

    </head>
    <body>

        <div class="container theme-showcase" role="main">
            <div class="jumbotron">

                <p><h3> Se ha modificado correctamente el Proveedor </h3></p>

            </div>
        </div>

    </body>
</html>