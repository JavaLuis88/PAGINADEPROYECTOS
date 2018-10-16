<?php
session_start();
include '../funcionesA.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Inventario Santa Catalina</title>
        <script type="text/javascript" language="javascript">
            function modificarObjeto() {
                document.getElementById("ifr").src = "objeto/modificar_objeto.php";
            }
            function modificarTipo() {
                document.getElementById("ifr").src = "tipo/modificar_tipo.php";
            }
            function modificarProveedor() {
                document.getElementById("ifr").src = "proveedor/modificar_proveedor.php";
            }
            function modificarPorLotes() {
                document.getElementById("ifr").src = "objeto/modificar_lotes.php";
            }
			function modificarCod() {
				document.getElementById("ifr").disabled = true;
				document.getElementById("ifr").src="modificarEtiquetasf.php";
				
			}	
            function atras() {
                window.location = "../index.html";
            }
        </script>
        <link rel="stylesheet" type="text/css" href="../inventario.css" title="style" />
        <style type="text/css">
            #menu {
                float:left;
                width: 152px;
                height: 434px;
            }
            #menu .selector {
                height: 50px;
                border: 1px solid #000;
                float: none;
                padding: 5px;
                width: 140px;
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
                height: 700px;
                width: 746px;
            }
        </style>

    </head>

    <body>
        <?php
       // hayLogin();
		
        ?>
        <div id="contenedor">
            <div id="header">
                <img src="../images/logo.gif" width="80" height="80" alt="logo" />
                <p>Inventario C.I.F.P. Santa Catalina</p>
            </div>
            <div id="contenido">
                <div id="menu">
                    <p class="selector" onClick="modificarObjeto();">Objeto</p>
                    <p class="selector" onclick="modificarTipo();">Tipo</p>
                    <p class="selector" onclick="modificarProveedor();">Proveedor</p>
                    <p class="selector" onclick="modificarPorLotes();">Lotes</p>
					<p class="selector" onClick="modificarCod();">C&oacute;digos </p>
					<p class="selector" onclick="atras();">Atr&aacute;s</p>
                </div>
                <div id="frame"><iframe id="ifr" src="modificaciones_info.html" width="746" height="700" seamless></div>
            </div>
        </div>
    </body>
</html>
