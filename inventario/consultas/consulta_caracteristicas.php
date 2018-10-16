<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
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
                #contenedor input {
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

                #contenedor #nobaja {
                    display: inline;
                    width: auto;
                    height: auto;
                }
            </style>
            <script type="text/javascript">
                function selector(nombre) {
                    //alert(nombre);
                    var inputtexto = document.getElementById('texto');
                    var ttipo = document.getElementById('selecttipo');
                    var tdep = document.getElementById('selectdep');
                    if (nombre != 'sel') {
                        if (nombre == 'tipo') {
                            inputtexto.style.display = 'none';
                            ttipo.style.display = 'inline';
                            tdep.style.display = 'none';
                        }
                        else {
                            if (nombre == 'dep') {
                                inputtexto.style.display = 'none';
                                ttipo.style.display = 'none';
                                tdep.style.display = 'inline';
                            }
                            else {
                                inputtexto.style.display = 'inline';
                                ttipo.style.display = 'none';
                                tdep.style.display = 'none';
                            }
                        }
                    }
                }

                function cambioHidden(sel) {
                    var hidden = document.getElementById('hidd');
                    hidden.value = sel;
                }
                function generarlistado() {
                    var f = document.getElementById('formulario');
                    f.submit();
                }

            </script>
    </head>
    <body>
        <div id="contenedor">
            <h3>Elija las caracter&iacute;sticas</h3>
            <form method="POST" action="consulta_caracteristicas.php">
                <select id="carac" onchange="selector(this.value)" name='caracteristicas'>
                    <option name='sel' value="sel">- Seleccione caracter&iacute;stica -</option>
                    <option name='tipo' value="tipo">Tipo</option>
                    <option name='desc' value="desc">Descripci&oacute;n</option>
                    <option name='nserie' value="nserie">N&uacute;mero de serie</option>
                    <option name='cod' value="cod">C&oacute;digo de barras</option>
                    <option name='dep' value="dep">Departamento</option>
                </select>
                <input id="texto" name="cajatexto" type="text" />

                <?php
                include '../funcionesA.php';
                $objeConexion = conectarBD();
                ?>
                <select id="selecttipo" name='ttipo' onchange="cambioHidden('ttipo')">
                    <option name='sel' value="sel">- Seleccione tipo -</option>
                    <?php
                    $sql = mysqli_query($objeConexion, 'select tipo from tipos;');

                    while ($r = mysqli_fetch_array($sql)) {
                        ?>
                        <option name='tipo' value="<?php echo $r['tipo'] ?>">
                            <?php echo $r['tipo'] ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
                <select id="selectdep" name='tdep' onchange="cambioHidden('tdep')">
                    <option name='sel' value="sel">- Seleccione departamento -</option>
                    <?php
                    $sql = mysqli_query($objeConexion, 'select distinct dept from objetos');

                    while ($r = mysqli_fetch_array($sql)) {
                        ?>
                        <option name='dept' value="<?php echo $r['dept'] ?>">
                            <?php echo $r['dept'] ?>
                        </option>
                        <?php
                    }
                    mysqli_close($objeConexion);
                    ?>
                </select>
                <input id="hidd" type="hidden" name="hidden" value="">
                    <input id="submit" type="submit" value="Enviar" /><br />
                    <input id="nobaja" type='checkbox' name='nobaja' value='nobaja' /> No está dado de baja
            </form>
            <form id="formulario" method="post" action="generarlistado2.php" target="_blank">
                <p class="imprimir" onclick="generarlistado();">Imprimir en PDF</p>
                <?php
                $carac = "";
                //$parametro = "param";
                if (isset($_POST['caracteristicas'])) {
                    $carac = $_POST['caracteristicas'];
                }
                $consulta = "";

                if ($carac == 'tipo') {
                    $consulta = 'select * from  objetos where tipo = \'' . $_POST[$_POST['hidden']] . '\'';
                    $parametro = 'LISTADO POR TIPO: ' . $_POST[$_POST['hidden']];
                }
                if ($carac == 'desc') {
                    $consulta = 'select * from  objetos where `desc` like \'%' . $_POST['cajatexto'] . '%\'';
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
                if ($carac == 'dep') {
                    $consulta = 'select * from  objetos where dept = \'' . $_POST[$_POST['hidden']] . '\'';
                    $parametro = 'LISTADO POR DEPARTAMENTO: ' . $_POST[$_POST['hidden']];
                }
                if (isset($_POST['nobaja'])) {
                    //echo $carac . "<br />";
                    $consulta = $consulta . "AND `obs` NOT LIKE '%BAJA%' AND
										`obs` NOT LIKE '%OBSOLET%' AND
										`obs` NOT LIKE '%Averiado%' AND
										`obs` NOT LIKE '%Baja%' AND
										`obs` NOT LIKE '%baja%' AND
										`obs` NOT LIKE '%Despiece%' AND
										`obs` NOT LIKE '%DONAR%' AND
										`obs` NOT LIKE '% FUNCIONA%' AND
										`obs` NOT LIKE '%MAL ESTADO%' AND
										`obs` NOT LIKE '%DETERIORAD%' AND
										`obs` NOT LIKE '%INAPROPIAD' AND
										`obs` NOT LIKE '%AGOTADO%' AND
										`f_baja` = ''";
                    $parametro = $parametro . " NO EST�? DADO DE BAJA";
                }
                if ($consulta != "") {
                    $objeConexion = conectarBD();
                    $sql = mysqli_query($objeConexion, $consulta);


                    $fila = 1;
                    echo utf8_decode("<table id='tabla'>
			<tr class='bg0'>
			<th>C&oacute;digo de barras</th>
			<th>Uds</th>
			<th>N&uacute;mero de serie</th>
			<th>Elemento</th>
			<th>Descripci&oacute;n</th>
			<th>Fecha alta</th>
			</tr>");

                    while ($r = mysqli_fetch_array($sql)) {
                        $datos[$fila][0] = $r['cod_barras'];
                        $datos[$fila][1] = $r['uds'];
                        $datos[$fila][2] = $r['nserie'];
                        $datos[$fila][3] = $r['elemento'];
                        $datos[$fila][4] = substr($r['desc'], 0, 50);
                        $datos[$fila][5] = $r['f_alta'];
                        //$rows[] = $r;
                        if ($fila % 2 == 0) {
                            echo "<tr class='bg1'>" .
                            "<td>" . $r['cod_barras'] . "</td>" .
                            "<td>" . $r['uds'] . "</td>" .
                            "<td>" . $r['nserie'] . "</td>" .
                            "<td>" . $r['elemento'] . "</td>" .
                            "<td>" . $r['desc'] . "</td>" .
                            "<td>" . $r['f_alta'] . "</td>" .
                            "</tr>";
                        } else {
                            echo "<tr class='bg2'>" .
                            "<td>" . $r['cod_barras'] . "</td>" .
                            "<td>" . $r['uds'] . "</td>" .
                            "<td>" . $r['nserie'] . "</td>" .
                            "<td>" . $r['elemento'] . "</td>" .
                            "<td>" . $r['desc'] . "</td>" .
                            "<td>" . $r['f_alta'] . "</td>" .
                            "</tr>";
                        }
                        $fila++;
                    }
                    echo "</table>";


                    if (isset($datos)) {
                        $json = json_encode($datos);
                    } else {
                        $json = null;
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
            </form>
        </div>

    </body>
</html>
