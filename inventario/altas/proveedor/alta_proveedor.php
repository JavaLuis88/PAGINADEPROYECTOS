<?php
include '../../funcionesA.php';
$objeConexion = conectarBD();
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .miestilo { width: 400px; }
        body {background-color: #1B9E02;}

    </style>
</head>
<body>

    <h3 align="center">Alta Proveedor</h3>

    <div class="container">
        <form action="validad_provee.php" method="post" autocomplete="off" class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-xs-2 control-label">Nombre del proveedor </label>
                <div class="col-xs-10">
                    <input type="text" name="Nombre" size="40" class="form-control miestilo" placeholder="Escribe el Nombre del proveedor" required/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-2 control-label">Direccion </label>
                <div class="col-xs-10">
                    <input type="text" name="Direc" size="40" class="form-control miestilo" placeholder="Escribe la dirección" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-2 control-label">Telefono </label>
                <div class="col-xs-10">
                    <input type="number" name="Tele" size="40" class="form-control miestilo" placeholder="Escribe el número" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-2 control-label">CIF </label>
                <div class="col-xs-10">
                    <input type="text" name="CIF" size="40" class="form-control miestilo" placeholder="Escribe el CIF" required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-2 control-label">E-mail </label>
                <div class="col-xs-10">
                    <input type="email" name="Email" size="40" class="form-control miestilo" placeholder="Escribe el E-mail" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-2 control-label">Descripcion </label>
                <div class="col-xs-10">
                    <textarea name="Descri" rows="2" cols="50" maxlength="" class="form-control miestilo" placeholder="Escribe una descripcion"></textarea> 
                </div>
            </div>
            <input class="btn btn-default" type="submit" style="Position:Absolute; left:75%;"/>
        </form>
    </div>

</body>
</html>