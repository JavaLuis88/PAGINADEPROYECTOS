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
</head>
<body>

    <br>

    <div class="container">
        <form action="validad.php" method="post" autocomplete="off" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Proveedor</label>
                <div class="col-xs-10">
                    <select name="Prove" title="Proveedor" class="form-control miestilo" required>
                        <option value="">Elige Proveedor </option>
                        <?php
                        $query = "select nombre from proveedores order by nombre";
                        $result = mysqli_query($enlace, $query) or die(mysqli_error());
                        ;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <option title="<?php echo $row["nombre"] . ""; ?>" value="<?php echo $row["nombre"] . ""; ?>"> 

                                <?php echo $row["nombre"] ?> 
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Departamento</label>
                <div class="col-xs-10">
                    <select name="Departamento" title="Departamento" class="form-control miestilo" required>
                        <option value="">Elige Departamento </option>
                        <?php
                        $query = "select DISTINCT  dept from objetos order by dept";
                        $result = mysqli_query($enlace, $query) or die(mysqli_error());
                        ;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <option title="<?php echo $row["dept"] . ""; ?>" value="<?php echo $row["dept"] . ""; ?>"> 
                                <?php echo $row["dept"] ?> 
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Sala</label>
                <div class="col-xs-10">
                    <select name="Sala" title="Sala" class="form-control miestilo" required>
                        <option value="">Elige Sala </option>
                        <?php
                        $query = "select nombre from habitaculo order by nombre";
                        $result = mysqli_query($enlace, $query) or die(mysqli_error());
                        ;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <option title="<?php echo $row["nombre"] . ""; ?>" value="<?php echo $row["nombre"] . ""; ?>"> 

                                <?php echo $row["nombre"] ?> 
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Tipo</label>
                <div class="col-xs-10">
                    <select name="Tipo" title="Tipo" class="form-control miestilo" required>
                        <option value="">Elige Tipo </option>
                        <?php
                        $query = "select Tipo, Nombre from tipos order by Nombre";
                        $result = mysqli_query($enlace, $query) or die(mysqli_error());
                        ;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <option title="<?php echo $row["Nombre"] . ""; ?>" value="<?php echo $row["Tipo"] . ""; ?>"> 

                                <?php echo $row["Nombre"] ?> 
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label" >Elemento</label>
                <div class="col-xs-10">
                    <input type="text" name="Elemento" class="form-control miestilo" title="Elemento" placeholder="Elemento" required  />
                </div>
            </div>

            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Descripcion</label>
                <div class="col-xs-10">
                    <textarea name="Descripcion" maxlength="" rows="2" cols="50" class="form-control miestilo"  placeholder="Escribe una descripcion"></textarea> 
                </div>
            </div>

            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Numserie</label>
                <div class="col-xs-10">
                    <input type="text" name="Numserie" size="33" class="form-control miestilo" placeholder="Escribe el número de serie" />
                </div>
            </div>

            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Unidades</label>
                <div class="col-xs-10">
                    <input type="number" name="Unidades" size="33" class="form-control miestilo" placeholder="Escribe el número de unidades" required />
                </div>
            </div>

            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Cuenta de gestion</label>
                <div class="col-xs-10">
                    <select name="Cuenta" title="Cuenta Gestion" class="form-control miestilo" >
                        <option value="">Elige la cuenta de gestion  </option>
                        <?php
                        $query = "select ID_Cuenta  from `cuentas gestion` order by ID_cuenta";
                        $result = mysqli_query($enlace, $query) or die(mysqli_error());
                        ;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <option title="<?php echo $row["ID_Cuenta"] . ""; ?>" value="<?php echo $row["ID_Cuenta"] . ""; ?>"> 

                                <?php echo $row["ID_Cuenta"] ?> 
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Nº Factura</label>
                <div class="col-xs-10">
                    <input type="text" name="Factura" size="33" class="form-control miestilo" placeholder="Escribe el número de factura" />
                </div>
            </div>

            <div class="form-group">
                <label for="inputText3" class="col-xs-2 control-label">Observaciones</label>
                <div class="col-xs-10">
                    <textarea name="Obse" rows="2" cols="50" maxlength="" placeholder="Escribe las observaciones" class="form-control miestilo"></textarea>
                </div>
            </div>
            <div class="form-group">

                <input class="btn btn-default" type="submit" style="Position:Absolute; left:75%;"/>

            </div>

        </form>
    </div>
</body>
</html>
