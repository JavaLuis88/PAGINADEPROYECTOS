<?php
session_start();
include '../funcionesA.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type"  charset="UTF-8"" />
        <title>Inventario Santa Catalina</title>
        <script type="text/javascript" language="javascript">
            function consultaHabitaculo() {
                document.getElementById("ifr").src = "consulta_habitaculo.php";
            }
            function consultaCaracteristicas() {
                document.getElementById("ifr").src = "consulta_caracteristicas.php";
            }
            function consultaCustom() {
                document.getElementById("ifr").src = "consulta_custom.php";
            }
            function atras() {
                window.location = "../index.html";
            }
        </script>
        <link rel="stylesheet" type="text/css" href="../inventario.css" title="style" />
        <style type="text/css">
            #menu {
                float:left;
                width: 192px;
                height: 434px;
            }
            #menu .selector {
                height: 50px;
                border: 1px solid #000;
                float: none;
                padding: 5px;
                width: 180px;
                text-align: center;
                font-variant: small-caps;
                font-weight: bold;
                background-color: #FFF;
                cursor: pointer;
                margin: 0px;
                line-height: 50px;
            }

            #menu .selector:hover {
                background-color: #023e0c;
                color: #FFF;
            }
            #frame {
                float: left;
                height: 434px;
                width: 706px;
            }
        </style>

    </head>

    <body>
        <?php
        hayLogin();
        ?>
        <div id="contenedor">
            <div id="header">
                <img src="../images/logo.gif" width="80" height="80" alt="logo" />
                <p>Inventario C.I.F.P. Santa Catalina</p>
            </div>
            <div id="contenido">
                <div id="menu">
                    <p class="selector" onClick="consultaHabitaculo();">Por habitáculo</p>
                    <p class="selector" onclick="consultaCaracteristicas();">Por características</p>
                    <p class="selector" onclick="consultaCustom();">Personalizada</p>
                    <p class="selector" onclick="atras();">Atr&aacute;s</p>
                </div>
                <div id="frame"><iframe id="ifr" src="consultas_info.html" width="704" height="700" seamless></div>
            </div>
            <div id="footer">Programado por:</div>
        </div>
    </body>
</html>
