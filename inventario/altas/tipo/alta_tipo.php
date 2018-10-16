<?php
include '../../funcionesA.php';
$objeConexion = conectarBD();
?>
<head>
    <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .miestilo { width: 400px; }
        body {background-color: #1B9E02;}
    </style>
</head>
<body>

    <h3 align="center">Alta Tipo</h3>

    <div class="container">
        <form action="validad_tipo.php" method="post" autocomplete="off" class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-xs-2 control-label">Nombre del Tipo </label>
                <div class="col-xs-10">
                    <input type="text" name="Nombre" size="40" class="form-control miestilo" placeholder="Escribe el Nombre del Tipo" required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-2 control-label">Abreviatura del tipo </label>
                <div class="col-xs-10">
                    <input type="text" name="Abrev" size="40" maxlength="3" class="form-control miestilo" placeholder="Escribe la abreviatura" required />
                </div>
            </div>
            <input class="btn btn-default" type="submit" style="Position:Absolute; left:75%;"/>
        </form>
    </div>

</body>
</html>