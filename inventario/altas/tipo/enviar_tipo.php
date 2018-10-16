<html>
    <head>
        <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <?php
        include '../../funcionesA.php';
        $objeConexion = conectarBD();

        $Nombre = ($_GET['Nombre']);
        $Abrev = ($_GET['Abrev']);



        $sql = "INSERT INTO Tipos (Tipo, Nombre)
VALUES ('" . $Abrev . "',
 '" . $Nombre . "')";

        $result = mysqli_query($objeConexion, $sql) or die(mysqli_error());
        ;
        ?>
    </head>
    <body>
        <div class="container theme-showcase" role="main">
            <div class="jumbotron">

                <p><h3> Se ha insertado correctamente el Tipo de Objeto </h3></p>

            </div>
        </div>

    </body>
</html>