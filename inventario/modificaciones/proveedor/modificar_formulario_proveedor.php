<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include '../../funcionesA.php';
$enlace = conectarBD();
?>
<head>
    <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .miestilo { width: 400px; }
        body {background-color: #1B9E02;}
    </style>
    <?php
    $Variable = ($_POST['Varible']);

    $query = "select * from proveedores where id=" . $Variable;

    $result = mysqli_query($enlace, $query) or die(mysqli_error());
    while ($row = mysqli_fetch_array($result)) {
        $Nombre = $row['Nombre'];
        $Descripcion = $row['Descripcion'];
        $Direccion = $row['Direccion'];
        $Telefono = $row['Telefono'];
        $CIF = $row['CIF'];
        $Email = $row['E-mail'];
    }
    ?>
</head>
<body>

    <br>

    <div class="container">
        <form action="validad_modificacionesprove.php" method="post" autocomplete="off" class="form-horizontal" role="form">
            <div class="form-group">
                <div class="form-group">
                    <label class="col-xs-2 control-label">Nombre del proveedor </label>
                    <div class="col-xs-10">
                        <input type="text" name="Nombre" size="40" class="form-control miestilo" value="<?php echo $Nombre; ?>" placeholder="Escribe el Nombre del proveedor" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label">Direccion </label>
                    <div class="col-xs-10">
                        <input type="text" name="Direc" size="40" class="form-control miestilo" value="<?php echo $Direccion; ?>" placeholder="Escribe la dirección" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label">Telefono </label>
                    <div class="col-xs-10">
                        <input type="number" name="Tele" size="40" class="form-control miestilo" value="<?php echo $Telefono; ?>" placeholder="Escribe el número" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label">CIF </label>
                    <div class="col-xs-10">
                        <input type="text" name="CIF" size="40" class="form-control miestilo" value="<?php echo $CIF; ?>" placeholder="Escribe el CIF" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label">E-mail </label>
                    <div class="col-xs-10">
                        <input type="email" name="Email" size="40" class="form-control miestilo" value="<?php echo $Email; ?>" placeholder="Escribe el E-mail" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label">Descripcion </label>
                    <div class="col-xs-10">
                        <textarea name="Descri" rows="2" cols="50" maxlength="" class="form-control miestilo" value="<?php echo $Email; ?>" placeholder="Escribe una descripcion"></textarea> 
                    </div>
                </div>

                <input type="hidden" name="ID" value="<?php echo $Variable ?>"/>
                <div class="form-group">

                    <input class="btn btn-default" type="submit" style="Position:Absolute; left:75%;"/>

                </div>

        </form>
    </div>
</body>
</html>
