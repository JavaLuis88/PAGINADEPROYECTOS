<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="ISO-8859-1">
            <style type="text/css">
                body {
                    font-family: Verdana, Geneva, sans-serif;
                    color: white;
                }
                #contenedor {
                    width: 690px;
                    height: 410px;
                }
                #formulario {
                    width: 200px;
                    float: left;
                    margin-left: 50px;
                    overflow: hidden;
                }
                #imagen {
                    width: 	390px;
                    float: left;
                    margin-right: 50px;
                    overflow: hidden;
                }
                #formulario h3 {
                    color: white;	
                }
                #planta3 {
                    position: relative;
                    top: 80px;
                    left: 80px;
                    height: 75px;
                    width: 300px;
                    /* border: 1px solid black; */
                }
                #planta3 p a, #planta2 p a, #planta1 p a, #planta0 p a, #exterior p a {
                    font-family: Verdana, Geneva, sans-serif;
                    font-size: 40px;
                    text-decoration:none;
                    font-weight: bold;
                    text-align: center;
                    vertical-align: middle;
                    position: absolute;
                    top: 0px;
                    width: 300px;
                    height: 70px;
                    cursor: pointer;
                    /* border: 1px solid #f0f; */
                }
                #planta3 p a:hover, #planta2 p a:hover, #planta1 p a:hover, #planta0 p a:hover, #exterior p a:hover {
                    color: red;
                }

                #planta3 p a:visited, #planta2 p a:visited, #planta1 p a:visited, #planta0 p a:visited, #exterior p a:visited {
                    color: black;
                }
                #planta2 {
                    position: relative;
                    top: 65px;
                    left: 80px;
                    height: 75px;
                    width: 300px;
                }
                #planta1 {
                    position: relative;
                    top: 45px;
                    left: 80px;
                    height: 75px;
                    width: 300px;
                }
                #planta0 {
                    position: relative;
                    top: 20px;
                    left: 80px;
                    height: 75px;
                    width: 300px;
                }
                #exterior {
                    position: relative;
                    top: 20px;
                    left: -30px;
                    height: 75px;
                    width: 300px;
                }
                #cons {
                    width: 50%;
                    float: left;
                }
                #cons a {
                    color: white;
                    font-weight: bolder;
                    text-align: center;
                }
                #cons a:hover {
                    color: yellow;
                }
                img {
                    width: 100%;
                }
            </style>
    </head>
    <body>
        <div id="contenedor">
            <div id="formulario">
                <form action="ver_habitaculo.php" method="get">
                    <h3>Elija la sala</h3>

                    <select name='sala'>
                        <?php
                        include '../funcionesA.php';
                        $objeConexion = conectarBD();
                        $query = "select nombre from habitaculo ;";
                        $result = mysqli_query($objeConexion, $query) or die(mysqli_error());

                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <option name='sala' value="<?php echo $row['nombre']; ?>">
                                <?php echo $row['nombre'] ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>

                    <p><input type="submit"/></p>
                </form>

            </div>
            <div id="cons">
                <h3> O seleccione el habit&aacute;culo desde el gr&aacute;fico:</h3>
                <p><a href="perspectiva.php">Ir al gr&aacute;fico</a></p>
            </div>
            <img src="../images/inventario.png" />
        </div>
    </body>
</html>
