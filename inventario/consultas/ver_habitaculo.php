<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css">
            body {
                font-family: verdana;
                margin: 0px;
            }
            #tabla {
                float: left;
                width: 100%;
                color: white;
                border: 1px solid white;
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
            .atras {
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
            .atras:hover {
                background: #0F0;
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
            function volver() {
                this.location = "./perspectiva.php";
            }
            function generarlistado() {
                var f = document.getElementById('formulario');
                f.submit();
            }
            function loadOrderedData(orderBy, sala) {
                this.location = 'ver_habitaculo.php?orderBy=' + orderBy + '&sala=' + sala;
            }
        </script>
    </head>
    <body>
        <form id="formulario" method="post" action="generarlistado.php" target="_blank">
            <p class="imprimir" onclick="generarlistado();">Imprimir en PDF</p>


            <?php
            include '../funcionesA.php';
            $objeConexion = conectarBD();
            if (isset($_GET['orderBy'])) {
                $sql = mysqli_query($objeConexion,'select * from  objetos where sala = \'' . $_GET['sala'] . '\' ORDER BY ' . $_GET['orderBy'] . ' ASC');
            } else {
                $sql = mysqli_query($objeConexion,'select * from  objetos where sala = \'' . $_GET['sala'] . '\'');
            }



            $fila = 1;
            echo utf8_decode("<table id='tabla'>
			<tr class='bg0'>
			<th onclick='loadOrderedData(\"cod_barras\", " . $_GET['sala'] . ")'>C&oacute;digo de barras</th>
			<th onclick='loadOrderedData(\"uds\", " . $_GET['sala'] . ")'>Uds</th>
			<th onclick='loadOrderedData(\"nserie\", " . $_GET['sala'] . ")'>N&uacute;mero de serie</th>
			<th onclick='loadOrderedData(\"elemento\", " . $_GET['sala'] . ")'>Elemento</th>
			<th onclick='loadOrderedData(\"`desc`\", " . $_GET['sala'] . ")'>Descripci&oacute;n</th>
			<th onclick='loadOrderedData(\"f_alta\", " . $_GET['sala'] . ")'>Fecha alta</th>
			</tr>");

            while ($r = mysqli_fetch_array($sql)) {
                $datos[$fila][0] = $r['cod_barras'];
                $datos[$fila][1] = $r['uds'];
                $datos[$fila][2] = $r['nserie'];
                $datos[$fila][3] = $r['elemento'];
                $datos[$fila][4] = $r['desc'];
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
            $json = json_encode($datos);
            echo "<input type='hidden' name='json' value='" . $json . "' />";
            echo "<input type='hidden' name='aula' value='" . $_GET['sala'] . "' />";

            ?>
        </form>
        <a class="atras" href="consulta_habitaculo.php">Atr&aacute;s</p>
    </body>
</html>