<?php
session_start();
if (!isset($_POST['enviar'])) {
    session_destroy();
}
?>
<html>
    <head>
	
		<meta charset="UTF-8">

        <title>Login</title>
        <style type="text/css">
            body{
                color: white;
                background-color: #003c00;
            }
            #main{
                width: 50%;
                margin: 0 auto;
                border-radius: 15px;
                border: 2px solid white;
                background-color: #1b9e02;
                text-align: center;
            }
            #main img{
                width: 80%;
                margin: 0 auto;
            }
            label, input[type="text"],input[type="password"]{
                height: 50px;
                font-size: 40px;
                width: 80%;
                margin-top: 10px;
            }
            input[type="submit"],input[type="reset"] {
                height: 43px;
                font-weight: bolder;
                margin-top: 10px;
                width: 60%;
                border-radius: 5px;
            }
        </style>        
    </head>
    <body>
        <div id="main">
            <form action="" method="post">
                <img src="images/inventario.png" alt="Inventario Santa Catalina"/>
                <br/>
                <label>Usuario :</label><br/>
                <input name="username" placeholder="Usuario" type="text" /><br/>
                <label>Contraseña :</label><br/>
                <input name="password" placeholder="Contraseña" type="password"><br/>
                <input name="enviar" type="submit" value=" Enviar " /><br/>
                <input type="reset" value=" Borrar " />
            </form>
        </div>
    </body>
</html>
<?php
if (isset($_POST['enviar'])) {
    include 'funcionesA.php';
    login($_POST['username'], $_POST['password']);
}
?>