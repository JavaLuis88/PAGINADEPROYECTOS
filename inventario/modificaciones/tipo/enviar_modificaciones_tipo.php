<html>
    <head>
        <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <?php
        include '../../funcionesA.php';
        $objeConexion = conectarBD();

        $Nombre = ($_GET['Nombre']);
        $Abrev = ($_GET['Abrev']);



        $sql = "Update tipos set Tipo ='" . $Abrev . "', Nombre='" . $Nombre . "' where Nombre='" . $Nombre . "'";

        $result = mysqli_query($objeConexion, $sql) or die(mysqli_error());
        ;
        ?>
    </head>
    <body>
        <div class="container theme-showcase" role="main">
            <div class="jumbotron">

                <p><h3> Se ha actualizado correctamente el tipo </h3></p>

            </div>
        </div>

    </body>
</html>