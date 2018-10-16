<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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


</style>
</head>
<body>

    <h3 align="center">Alta Habitáculo</h3>
    <div class="container">
        <form action="validad_habitaculo.php" method="post" autocomplete="off" class="form-horizontal" role="form">


            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Nombre del habitáculo</label>
                <div class="col-xs-10">
                    <input type="text" name="habit" class="form-control miestilo" title="habit" placeholder="Nombre Habitaculo" required/>
                </div>
            </div>

            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Descripcion</label>
                <div class="col-xs-10">
                    <textarea name="descrip" maxlength="" rows="2" cols="50" class="form-control miestilo"  placeholder="Escribe una descripcion"></textarea> 
                </div>
            </div>



            <div class="form-group">
                <div float:right>
                    <input class="btn btn-default" type="submit" style="position:Absolute; left:75%;"/>
                </div>
            </div>

        </form> 
    </div>
</body>
</html>