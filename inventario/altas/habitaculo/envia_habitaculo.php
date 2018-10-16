<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
    <head>
        <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <?php
        include '../../funcionesA.php';
        $objeConexion = conectarBD();

        $Habit = ($_GET['habit']);
        $Descrip = ($_GET['descrip']);

        $sql = "INSERT INTO habitaculo (nombre, descripcion) VALUES ('" . $Habit . "', '" . $Descrip . "')";

        $result = mysqli_query($objeConexion, $sql) or die(mysqli_error());
        ;
        ?>
    </head>
    <body>

        <div class="container theme-showcase" role="main">
            <div class="jumbotron">

                <p><h3> Se ha insertado correctamente el Habitáculo</h3></p>

            </div>
        </div>
    </body>
</html>