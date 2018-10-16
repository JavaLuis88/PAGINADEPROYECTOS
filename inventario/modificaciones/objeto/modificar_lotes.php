<?php
include '../../funcionesA.php';
$objeConexion = conectarBD();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <style type="text/css">
            body {
                font-family: verdana;
                color: white;
                margin: 0px;
                padding: 0px;
            }
            #carac {
                width: 200px;
                padding: 5px 0px 5px 5px;
                margin-right: 10px;
                -webkit-border-radius: 5px;
                border-radius: 5px;
            }
            #contenedor input[type="text"] {
                width: 300px;
                height: 26px;
                -webkit-border-radius: 5px;
                border-radius: 5px;
                display: none;
            }
            #contenedor #submit {
                width: 70px;
                height: 30px;
                display: inline;
            }
            #selecttipo, #selectdep {
                display: none;
                width: 200px;
                padding: 5px 0px 5px 5px;
                margin-right: 10px;
                -webkit-border-radius: 5px;
                border-radius: 5px;
            }
            #tabla {
                float: left;
                color: white;
                border: 1px solid white;
                width: 100%;
            }
            #tabla tr {
                border: 1px solid white;
            }
            .bg0 {
                background-color: #030;
                font-size: 11px;
            }
            .bg1 {
                background-color: #060;
                font-size: 10px;
            }

            #tr:hover td {
                background-color: red;
            }
            .bg2 {
                font-size: 10px;
            }
            .imprimir {
                float: left;
                background: #060;
                color: white;
                border: 1px solid black;
                margin: 0px;
                padding: 5px;
                width: 98%;
                cursor: pointer;
                text-align: center;
            }
            .imprimir:hover {
                background: #0F0;
            }
            .mano:hover {
                cursor:pointer;
            }
            .enviarA{
                width: 40%;
                float: left;
            }
            .formPpal{
                width: 60%;
                float: left;
            }
        </style>
        <script type="text/javascript">
            function selector(nombre) {
                var inputtexto = document.getElementById('texto');
                var ttipo = document.getElementById('selecttipo');
                var tdep = document.getElementById('selectdep');
                if (nombre != 'sel') {

                    inputtexto.style.display = 'inline';
                    ttipo.style.display = 'none';
                    tdep.style.display = 'none';
                }
            }

            function cambioHidden(sel) {
                var hidden = document.getElementById('hidd');
                hidden.value = sel;
            }


            function clik(id) {
                var idobjeto = id;
                var f = document.getElementById('formulario');
                var docuemnto = document.getElementById('Variable').value = idobjeto;
                f.submit();
            }
            function marcaTodos(source) {
                checkboxes = document.getElementsByName('seleccionado[]');
                for (i in checkboxes) {
                    checkboxes[i].checked = source.checked;
                }
            }
        </script>
    </head>
    <body>


        <div id="contenedor">
            <h3>Elija las caracter&iacute;sticas</h3>
            <form method="POST" class="formPpal" action="modificar_lotes.php">
                <select id="carac" onchange="selector(this.value)" name='caracteristicas'>
                    <option name='sel' value="sel">- Seleccione caracter&iacute;stica -</option>
                    <option name='desc' value="desc">Descripci&oacute;n</option>
                    <option name='nserie' value="nserie">N&uacute;mero de serie</option>
                    <option name='cod' value="cod">C&oacute;digo de barras</option>
                    <option name='sala' value="sala">Sala</option>

                </select>
                <input id="texto" name="cajatexto" type="text" />



                <input id="hidd" type="hidden" name="hidden" value="">
                    <input id="submit" type="submit" value="Enviar" />
            </form>


            <form method="POST" id="formulario">
                <?php
                $carac = "";

                if (isset($_POST['caracteristicas'])) {
                    $carac = $_POST['caracteristicas'];
                }
                $consulta = "";

                if ($carac == 'desc') {
                    $consulta = 'select * from  objetos where `elemento` like \'%' . $_POST['cajatexto'] . '%\'';
                    $parametro = 'LISTADO POR DESCRIPCIÓN: ' . $_POST['cajatexto'];
                }
                if ($carac == 'nserie') {
                    $consulta = 'select * from  objetos where nserie = \'' . $_POST['cajatexto'] . '\'';
                    $parametro = 'LISTADO POR NÚMERO DE SERIE: ' . $_POST['cajatexto'];
                }
                if ($carac == 'cod') {
                    $consulta = 'select * from  objetos where cod_barras = \'' . $_POST['cajatexto'] . '\'';
                    $parametro = 'LISTADO POR CÓDIGO BARRAS: ' . $_POST['cajatexto'];
                }
                if ($carac == 'sala') {
                    $consulta = 'select * from  objetos where sala = \'' . $_POST['cajatexto'] . '\'';
                    $parametro = 'LISTADO POR Sala: ' . $_POST['cajatexto'];
                }

                if ($consulta != "") {
                    $sql = mysqli_query($objeConexion, $consulta);
                    $datos = "";
                    ?>
                    <div class="enviarA">
                        <label>Enviar estos elementos a la sala: </label>
                        <select name="salaSelect">
                            <?php
                            $resultado = mysqli_query($objeConexion, "select distinct nombre from habitaculo;");
                            while ($row = mysqli_fetch_array($resultado)) {
                                ?>
                                <option value="<?php echo $row['nombre']; ?>" ><?php echo $row['nombre']; ?></option>
                                <?php
                            }
                            ?>

                        </select>
                        <input type="submit" value="Enviar" name="btnEnviar"/><br/>
                        <input type="submit" value="Dar de baja estos elementos" name="btnBaja"/>
             
                        
                    </div>
                    <?php
                    $fila = 1;
                    echo utf8_decode("<table id='tabla'>
			<tr class='bg0'>                       
                        <th><input type='checkbox' onclick='marcaTodos(this);'</th>
			<th>C&oacute;digo de barras</th>
			<th>Uds</th>
			<th>N&uacute;mero de serie</th>
			<th>Elemento</th>
			<th>Descripci&oacute;n</th>
			<th>Fecha alta</th>
                        <th>
			</tr>");

                    while ($r = mysqli_fetch_array($sql)) {
                        $datos[$fila][0] = $r['cod_barras'];
                        $datos[$fila][1] = $r['uds'];
                        $datos[$fila][2] = $r['nserie'];
                        $datos[$fila][3] = $r['elemento'];
                        $datos[$fila][4] = substr($r['desc'], 0, 50);
                        $datos[$fila][5] = $r['f_alta'];
                        $datos[$fila][6] = $r['id'];
                        if ($fila % 2 == 0) {
                            ?>                        
                            <tr class='bg1' style='cursor: pointer;'>
                                <td><input type="checkbox" name="seleccionado[]" value="<?php echo $r['id']; ?>"></td>
                                <td><?php echo $r['cod_barras'] ?></td>
                                <td><?php echo $r['uds']; ?></td>
                                <td><?php echo $r['nserie']; ?></td>
                                <td><?php echo $r['elemento']; ?></td>
                                <td><?php echo $r['desc']; ?></td>
                                <td><?php echo $r['f_alta']; ?></td>
                                <td><?php echo $r['id']; ?></td>
                            </tr>
                            <?php
                        } else {
                            ?>
                            <tr class='bg1' style='cursor: pointer;'>
                                <td><input type="checkbox" name="seleccionado[]" value="<?php echo $r['id']; ?>"></td>
                                <td><?php echo $r['cod_barras'] ?></td>
                                <td><?php echo $r['uds']; ?></td>
                                <td><?php echo $r['nserie']; ?></td>
                                <td><?php echo $r['elemento']; ?></td>
                                <td><?php echo $r['desc']; ?></td>
                                <td><?php echo $r['f_alta']; ?></td>
                                <td><?php echo $r['id']; ?></td>
                            </tr>
                            <?php
                        }
                        $fila++;
                    }
                    ?>
                    </table>

                    <?php
                    $json = "";
                    if ($datos == null || $datos == "") {
                        echo 'Lo siento, su busqueda no devolvió ningún resultado.';
                    } else {
                        $json = json_encode($datos);
                    }
                    echo "<input type='hidden' name='json' value='" . $json . "' />";
                    echo "<input type='hidden' name='param' value='" . $parametro . "' />";
                    if (isset($_GET['sala'])) {
                        echo "<input type='hidden' name='aula' value='" . $_GET['sala'] . "' />";
                    } else {
                        echo "<input type='hidden' name='aula' value='0' />";
                    }
                }
                ?>

        </div>

        </form>
    </body>
</html>

<?php
if (isset($_POST['btnEnviar'])) {
    $sala = $_POST['salaSelect'];
    $cadena = "";
    $objeConexion = conectarBD();
    if ($sala != null || $sala != "") {
        foreach ($_POST['seleccionado'] as $selecc) {
            $cadena .= " " . $selecc . ",";
            $sql = "update objetos set sala='" . $sala . "' where id = " . $selecc . ";";
            mysqli_query($objeConexion, $sql);
        }
        echo "<div style='clear:both;' class='clear'>Los siguientes elementos" . $cadena . " han sido enviados a la sala " . $sala . "</div>";
        $_SESSION["estado"] = 0;
    } else {
        ?>
        <script type="text/javascript">
            alert('Debe seleccionar una sala');
        </script>
        <?php
    }
}
if (isset($_POST['btnBaja'])) {
    $cadena = "";
    $objeConexion = conectarBD();
    foreach ($_POST['seleccionado'] as $selecc) {
        $cadena .= " " . $selecc . ",";
        $sql = "update objetos set sala='ALM' where id = " . $selecc . ";";
        mysqli_query($objeConexion, $sql);
    }
    echo "<div style='clear:both;' class='clear'>Los siguientes elementos" . $cadena . " han sido dados de baja</div>";
}
?>

