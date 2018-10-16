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
            </style>
            <script type="text/javascript">
                function selector(nombre) {
                    //alert(nombre);
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

            </script>
    </head>
    <body>
        <div id="contenedor">
            <h3>Elija las caracter&iacute;sticas</h3>
            <form method="POST" action="modificar_proveedor.php">
                <select id="carac" onchange="selector(this.value)" name='caracteristicas'>
                    <option name='sel' value="sel">- Seleccione caracter&iacute;stica -</option>
                    <option name='desc' value="desc">Nombre</option>
                    <option name='cod' value="cod">CIF</option>

                </select>
                <input id="texto" name="cajatexto" type="text" />

                <?php
                include '../../funcionesA.php';
                $objeConexion = conectarBD();
                ?>


                <input id="hidd" type="hidden" name="hidden" value="">
                    <input id="submit" type="submit" value="Enviar" />
            </form>
            <form method="POST" action="modificar_formulario_proveedor.php" id="formulario">
                <input id="Variable" type="text" name="Varible" value=""></input>

            </form>
            <?php
            $carac = "";
            //$parametro = "param";
            if (isset($_POST['caracteristicas'])) {
                $carac = $_POST['caracteristicas'];
            }
            $consulta = "";

            if ($carac == 'desc') {
                $consulta = 'select * from  proveedores where nombre like \'%' . $_POST['cajatexto'] . '%\'';
                $parametro = 'LISTADO POR DESCRIPCIÓN: ' . $_POST['cajatexto'];
            }
            if ($carac == 'cod') {
                $consulta = 'select * from  proveedores where CIF = \'' . $_POST['cajatexto'] . '\'';
                $parametro = 'LISTADO POR CÓDIGO BARRAS: ' . $_POST['cajatexto'];
            }

            //echo $parametro;
            //echo $consulta;
            //echo $_POST['caracteristicas'] . "<br />";
            //echo $_POST[$_POST['hidden']] . "<br />";
            //echo $_POST['cajatexto'] . "<br />";
            if ($consulta != "") {
                $sql = mysqli_query($objeConexion,$consulta);


                $fila = 1;
                echo utf8_decode("<table id='tabla'>
			<tr class='bg0'>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>CIF</th>
			</tr>");

                while ($r = mysqli_fetch_array($sql)) {
                    $datos[$fila][0] = $r['Nombre'];
                    $datos[$fila][1] = $r['Descripcion'];
                    $datos[$fila][2] = $r['CIF'];

                    //$rows[] = $r;
                    if ($fila % 2 == 0) {
                        echo "<tr class='bg1' style='cursor: pointer;' onclick='clik(" . $r['ID'] . ")'>" .
                        "<td>" . $r['Nombre'] . "</td>" .
                        "<td>" . $r['Descripcion'] . "</td>" .
                        "<td>" . $r['CIF'] . "</td>" .
                        "</tr>";
                    } else {
                        echo "<tr class='bg2' style='cursor: pointer;' onclick='clik(" . $r['ID'] . ")'>" .
                        "<td>" . $r['Nombre'] . "</td>" .
                        "<td>" . $r['Descripcion'] . "</td>" .
                        "<td>" . $r['CIF'] . "</td>" .
                        "</tr>";
                    }
                    $fila++;
                }
                echo "</table>";
                $json = json_encode($datos);
                echo "<input type='hidden' name='json' value='" . $json . "' />";
                echo "<input type='hidden' name='param' value='" . $parametro . "' />";
                if (isset($_GET['sala'])) {
                    echo "<input type='hidden' name='aula' value='" . $_GET['sala'] . "' />";
                } else {
                    echo "<input type='hidden' name='aula' value='0' />";
                }
            }

            //echo $json;
            ?>


        </div>

    </body>
</html>
