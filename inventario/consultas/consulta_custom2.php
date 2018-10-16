<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
            <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
                <style type="text/css">
                    body {
                        font-family: verdana;
                        color: white;
                        margin: 0px;
                        padding: 0px;
                        background: none;
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
                    }
                    #contenedor #submit {
                        width: 150px;
                        height: 30px;
                        display: inline;
                        text-align: center;
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

                    .separador {
                        width: 100%;
                        height: 2px;
                        background-color: white;
                        margin-top:10px;
                        margin-bottom: 10px;
                    }
                    #consulta {
                        border: 1px solid white;
                    }
                    #consulta input.check {
                        width: 30px;
                        height: 15px;
                    }
                    #consulta input.tex {
                        margin-top: 5px;
                        width: 270px;
                        color:black;
                    }
                    #consulta select {
                        margin-top: 5px;
                        width: 270px;
                        color:black;
                    }
                    #consulta table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    #consulta table td {
                        padding: 5px;
                        border: 1px solid white;
                    }
                    .seltab {
                        width: 300px;
                    }
                    #consulta #enviar {
                        width: 100%;
                        color: black;
                        height: 30px;
                        line-height: 30px;

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

                        <div id="consulta">
                            <form method="POST" action="consulta_custom.php" accept-charset="utf-8">
                                <table>
                                    <tr class="bg1">
                                        <td>SELECCIONE COLUMNAS A MOSTRAR</td>
                                        <td>SELECCIONE CL&Aacute;USULAS WHERE</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php
                                            include '../funcionesA.php';
                                            $objeConexion = conectarBD();
                                            $sql = mysqli_query($objeConexion,"SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='inventario' AND `TABLE_NAME`='objetos'");

                                            while ($r = mysqli_fetch_array($sql)) {
                                                echo "<input class='check' type='checkbox' name='columna[]' value='" . $r['COLUMN_NAME'] . "'>" . $r['COLUMN_NAME'] . "<br/>";
                                            }
                                            ?>
                                        </td>
                                        <td width="450px">
                                            <?php
                                            $sql = mysqli_query($objeConexion,"SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='inventario' AND `TABLE_NAME`='objetos'");

                                            while ($r = mysqli_fetch_array($sql)) {
                                                if ($r['COLUMN_NAME'] == 'elemento' || $r['COLUMN_NAME'] == 'desc' || $r['COLUMN_NAME'] == 'obs') {
                                                    echo "<input class='check' type='checkbox' name='columnaw[]' value='" . $r['COLUMN_NAME'] . "'/>" . $r['COLUMN_NAME'] . " like " . "<input class='tex' placeholder='Admite comodines %, &' type='text' name='" . $r['COLUMN_NAME'] . "'/>" . "<br/>";
                                                }
                                                if ($r['COLUMN_NAME'] == 'cod_barras' || $r['COLUMN_NAME'] == 'uds' || $r['COLUMN_NAME'] == 'nserie') {
                                                    echo "<input class='check' type='checkbox' name='columnaw[]' value='" . $r['COLUMN_NAME'] . "'/>" . $r['COLUMN_NAME'] . "=   " . "<input class='tex' type='text' name='" . $r['COLUMN_NAME'] . "'/>" . "<br/>";
                                                }
                                                if ($r['COLUMN_NAME'] == 'f_alta' || $r['COLUMN_NAME'] == 'f_baja') {
                                                    echo "<input class='check' type='checkbox' name='columnaw[]' value='" . $r['COLUMN_NAME'] . "'/>" . $r['COLUMN_NAME'] . "=   " . "<input class='tex' placeholder='aaaa-mm-dd' type='text' name='" . $r['COLUMN_NAME'] . "'/>" . "<br/>";
                                                }

                                                if ($r['COLUMN_NAME'] == 'dept') {
                                                    echo "<input class='check' type='checkbox' name='columnaw[]' value='" . $r['COLUMN_NAME'] . "'/>" . $r['COLUMN_NAME'] . "=   ";
                                                    ?>
                                                    <select name='tdep'>
                                                        <option name='sel' value="sel">- Seleccione departamento -</option>
                                                        <?php
                                                        $sql1 = mysqli_query($objeConexion,'select distinct dept from objetos');

                                                        while ($t = mysqli_fetch_array($sql1)) {
                                                            ?>
                                                            <option name='dept' value="<?php echo $t['dept'] ?>">
                                                                <?php echo $t['dept'] ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php
                                                    echo "<br />";
                                                }
                                                if ($r['COLUMN_NAME'] == 'sala') {
                                                    echo "<input class='check' type='checkbox' name='columnaw[]' value='" . $r['COLUMN_NAME'] . "'/>" . $r['COLUMN_NAME'] . "=   ";
                                                    ?>
                                                    <select name='tsala'>
                                                        <option name='sel' value="sel">- Seleccione sala -</option>
                                                        <?php
                                                        $sql1 = mysqli_query($objeConexion,'select distinct sala from objetos');

                                                        while ($t = mysqli_fetch_array($sql1)) {
                                                            ?>
                                                            <option name='sala' value="<?php echo $t['sala'] ?>">
                                                                <?php echo $t['sala'] ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php
                                                    echo "<br />";
                                                }
                                                if ($r['COLUMN_NAME'] == 'Tipo') {
                                                    echo "<input class='check' type='checkbox' name='columnaw[]' value='" . $r['COLUMN_NAME'] . "'/>" . $r['COLUMN_NAME'] . "=    ";
                                                    ?>
                                                    <select class="seltab" name='ttipo'>
                                                        <option name='sel' value="sel">- Seleccione tipo -</option>
                                                        <?php
                                                        $sql1 = mysqli_query($objeConexion,'select distinct tipo from tipos');

                                                        while ($t = mysqli_fetch_array($sql1)) {
                                                            ?>
                                                            <option name='tipo' value="<?php echo $t['tipo'] ?>">
                                                                <?php echo $t['tipo'] ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php
                                                    echo "<br />";
                                                }
                                                if ($r['COLUMN_NAME'] == 'prov') {
                                                    echo "<input class='check' type='checkbox' name='columnaw[]' value='" . $r['COLUMN_NAME'] . "'/>" . $r['COLUMN_NAME'] . "=    ";
                                                    ?>
                                                    <select class="seltab" name='tprov'>
                                                        <option name='sel' value="sel">- Seleccione proveedor -</option>
                                                        <?php
                                                        $sql1 = mysqli_query($objeConexion,'select distinct prov from objetos');

                                                        while ($t = mysqli_fetch_array($sql1)) {
                                                            ?>
                                                            <option name='prov' value="<?php echo $t['prov'] ?>">
                                                                <?php echo $t['prov'] ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php
                                                    echo "<br />";
                                                }
                                                if ($r['COLUMN_NAME'] == 'cuentagest') {
                                                    echo "<input class='check' type='checkbox' name='columnaw[]' value='" . $r['COLUMN_NAME'] . "'/>" . $r['COLUMN_NAME'] . "=    ";
                                                    ?>
                                                    <select class="seltab" name='tcg'>
                                                        <option name='sel' value="sel">- Seleccione Cuenta Gesti&oacute;n -</option>
                                                        <?php
                                                        $sql1 = mysqli_query($objeConexion,'select distinct id_cuenta, denominacion from `cuentas gestion`');

                                                        while ($t = mysqli_fetch_array($sql1)) {
                                                            ?>
                                                            <option name='cg' value="<?php echo $t['id_cuenta'] ?>">
                                                                <?php echo $t['id_cuenta'] . " - " . $t['denominacion']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php
                                                    echo "<br />";
                                                }
                                            }
                                            ?>	
                                        </td>
                                    </tr>
                                </table>
                                <input id="hidd" type="hidden" name="hidden" value="">
                                    <input id="submit" type="submit" value="Hacer consulta" /><br /></form>
                            <form id="formulario" method="post" action="generarlistado22.php" target="_blank">
                                <p class="imprimir" onclick="generarlistado();">Imprimir en PDF</p>

                        </div>

                        <?php
                        if (isset($_POST['columna'])) {
                            $consulta = "SELECT ";
                            $columnas = $_POST['columna'];
                            foreach ($columnas as $col) {
                                $consulta = $consulta . '`' . $col . '`' . ", ";
                            }
                            $consulta = substr($consulta, 0, count($consulta) - 3);
                            $consulta = $consulta . " FROM objetos ";

                            if (isset($_POST['columnaw'])) {
                                $consulta = $consulta . " WHERE ";
                                $columnas2 = $_POST['columnaw'];
                                foreach ($columnas2 as $col1) {
                                    if ($col1 == 'desc') {
                                        $consulta = $consulta . '`desc`' . " LIKE '" . $_POST[$col1] . "' AND ";
                                    }
                                    if ($col1 == 'elemento' || $col1 == 'obs') {
                                        $consulta = $consulta . $col1 . " LIKE '" . $_POST[$col1] . "' AND ";
                                    }
                                    if ($col1 == 'cod_barras' || $col1 == 'uds' || $col1 == 'nserie' || $col1 == 'f_alta' || $col1 == 'f_baja') {
                                        $consulta = $consulta . $col1 . " = '" . $_POST[$col1] . "' AND ";
                                    }
                                    if ($col1 == 'dept') {
                                        $consulta = $consulta . $col1 . " = '" . $_POST['tdep'] . "' AND ";
                                    }
                                    if ($col1 == 'sala') {
                                        $consulta = $consulta . $col1 . " = '" . $_POST['tsala'] . "' AND ";
                                    }
                                    if ($col1 == 'Tipo') {
                                        $consulta = $consulta . $col1 . " = '" . $_POST['ttipo'] . "' AND ";
                                    }
                                    if ($col1 == 'prov') {
                                        $consulta = $consulta . $col1 . " = '" . $_POST['tprov'] . "' AND ";
                                    }
                                    if ($col1 == 'cuentagest') {
                                        $consulta = $consulta . $col1 . " = '" . $_POST['tcg'] . "' AND ";
                                    }
                                }
                                $consulta = substr($consulta, 0, count($consulta) - 5);
                            }

                            if ($consulta != "") {
                                $sql = mysqli_query($objeConexion,$consulta);
                                echo utf8_decode("<table id='tabla'>
				<tr class='bg0'>");
                                foreach ($columnas as $col3) {
                                    echo utf8_decode("<td>" . $col3 . "</td>");
                                    $datoscolumna[] = $col3;
                                }
                                echo "</tr>";

                                $fila = 1;
                                while ($r = mysqli_fetch_array($sql)) {
                                    if ($fila % 2 == 0) {
                                        echo "<tr class='bg1'>";
                                        foreach ($columnas as $col4) {
                                            echo utf8_decode("<td>" . $r[$col4] . "</td>");
                                            $datos[$fila][] = $r[$col4];
                                        }
                                        echo "</tr>";
                                    } else {
                                        echo "<tr class='bg2'>";
                                        foreach ($columnas as $col5) {
                                            echo utf8_decode("<td>" . $r[$col5] . "</td>");
                                            $datos[$fila][] = $r[$col5];
                                        }
                                        echo "</tr>";
                                    }
                                    $fila++;
                                }

                                echo "</table>";
                            }
                        }
                        if (isset($datos)) {
                            $json = json_encode($datos);
                            $jsoncol = json_encode($datoscolumna);
                        } else {
                            $json = null;
                            $jsoncol = null;
                            echo " no hay datos";
                        }
                        echo "<input type='hidden' name='json' value='" . $json . "'/>";
                        echo "<input type='hidden' name='jsoncol' value='" . $jsoncol . "'/>";
                        ?>
                        </form>
                    </div>

                </body>
                </html>