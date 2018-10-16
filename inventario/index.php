<?php
session_start();
include 'funcionesA.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >


<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		
		<meta charset="UTF-8">

        <title>Inventario Santa Catalina</title>
        <link rel="stylesheet" type="text/css" href="inventario.css" title="style" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
            <style type="text/css">
                                    #contenido .selector {
                                        margin-top: 15px;
                                        padding: 5px;
                                        width: 60%;
                                        line-height: 40px;
                                        clear: none;
                                        text-align: center;
                                        margin: 0 auto;
                                        cursor: pointer;
                                    }
                
                                    #contenido .selector:hover {
                                        background-color: #023e0c;
                                        color: #FFF;
                                        box-shadow: 0px 0px 5px white;
                                    }
            </style>
            <script type="text/javascript">
                function ir(pag) {
                    window.location = pag;
                }
            </script>
    </head>

    <body>
        <?php
        hayLogin();
        ?>
        <div id="contenedor">
            <div id="header">
                <img src="images/logo.gif" width="80" height="80" alt="logo" />
                <p>Inventario C.I.F.P. Santa Catalina</p>
            </div>
            <div id="contenido" class="btn-group-vertical mainmenu">
                
                <a class="selector btn-default col-md-8 col-lg-offset-2 btn" href="altas/altas.php">Altas</a>
                <a class="selector btn-default col-md-8 col-lg-offset-2 btn" href="consultas/consultas.php">Consultas</a>
                <a class="selector btn-default col-md-8 col-lg-offset-2 btn" href="modificaciones/modificaciones.php">Modificaciones</a>
                <a class="selector btn-default col-md-8 col-lg-offset-2 btn" href="ayuda.php">Ayuda</a>
                <a class="selector btn-default col-md-8 col-lg-offset-2 btn" href="login.php">Salir</a>
            </div>
        </div>
    </body>
</html>
