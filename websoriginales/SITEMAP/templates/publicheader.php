<!DOCTYPE html> 
<!--CABECERA-->
<html lang="es" id="inciopartepublica">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content="Practica de bootsrap">   
        <meta name="keywords" content="Practica, botstrasp, equeleto pagina">
        <meta name="author" content="Super Eñe">
        <link reL="icon" href="images/favicon.ico">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">

        <!--[if lt IE 9]>
           <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
           <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->
        <link rel="stylesheet" href="css/hoja.css"> 
        <script type="text/javascript" src="js/partepublica.js">
        </script>    

        <title>Sol Manga</title>
    </head>

    <body id="cuerpopartepublica">
        <header id="cabecerapublica">

            <hgroup>
                <h1 class="text-center"><strong>Sol Manga</strong></h1>
                <!--<h2 class="text-center"><strong>SUBTITULO</strong></h2>-->
            </hgroup>
        </header>



        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Desplegar navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Usuarios <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="identificacion.php">Acceso de usuario</a></li>
                            <li><a href="registro.php">Registro de usuario</a></li>
                            <li><a href="recuperarcontrasena.php">Olvido contraseña </a></li>

                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Datos <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="jumbotron.php">Jumbotron</a></li>
                            <li><a href="listado.php">Listados</a></li>
                        </ul>
                    </li>


                </ul>






                <ul class="nav navbar-nav navbar-right">
                    <li><button id="btnacceso" type="button" class="btn btn-default navbar-btn">Acceso</button></li>
                    <li><button id="btnregistro" type="button" class="btn btn-info navbar-btn">Registro</button></li>
                </ul>
            </div>
        </nav>



        <!--CABECERA-->












