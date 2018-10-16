<?php
$directorioraiz=dirname(__FILE__,2);
include_once "$directorioraiz/libs/controlsesion.php";
include_once "$directorioraiz/libs/WebInputs.php";
?>
<!DOCTYPE html>
<html lang="<?php echo(WebInputs::getParamenters('language', 'es')); ?>" id="#inciopartepublica">
    <head>
        <title><?php echo(WebInputs::getParamenters('title', '')); ?></title>
        <meta charset="<?php echo(WebInputs::getParamenters('charset', 'utf-8')); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        if (WebInputs::getParamenters('description', '') != '') {
            ?>

            <meta name="description" content="<?php echo(WebInputs::getParamenters('description', '')); ?>">
            <?php
        }
        ?>
        <?php
        if (WebInputs::getParamenters('keywords', '') != '') {
            ?>
            <meta name="keywords" content="<?php echo(WebInputs::getParamenters('keywords', '')); ?>">
            <?php
        }
        ?>
        <?php
        if (WebInputs::getParamenters('author', '') != '') {
            ?>
            <meta name="author" content="<?php echo(WebInputs::getParamenters('author', '')); ?>">
            <?php
        }
        ?>
        <?php
        if (WebInputs::getParamenters('robots', '') != '') {
            ?>
            <meta name="robots" content="<?php echo(WebInputs::getParamenters('robots', '')); ?>">
            <?php
        }
        ?>

        <link rel="stylesheet" href="../bower_components/bootstrap/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="../css/comun.css">
        <link rel="stylesheet" href="../css/publica.css">
        <link rel="stylesheet" href="../css/modificacionesboostrap.css">
        <link rel="icon" href="https://www.reservaduero.es/templates/reservaduero/favicon.ico">
        <script src="../bower_components/tether/dist/js/tether.js"></script>
        <script src="../bower_components/jquery/dist/jquery.js"></script>
        <script src="../bower_components/popper.js/dist/umd/popper.js"></script>
        <script src="../bower_components/bootstrap/js/bootstrap.js"></script>
        <script src=../config/config.js></script>
        <script src="../js/AJAXURL.js"></script>

        <script src="../js/logica.js"></script>
    </head>
    <body id="cuerpopartepublica">

        <header id="cabeceracontenidopartepublica" class="container-fluid text-center coloresprimarios bg-light">

            <h1 class="d-inline">

                <strong>

                    <span class="text-danger">Reserva</span><span class="text-info">Duero</span>


                </strong>

            </h1>
            <h2 class="d-inline">
                <strong>Central de reservas</strong><span class="d-none d-lg-inline d-xl-inline"> de la Ribera del Duero</span>
            </h2>


        </header>

        <nav id="navegacionparteintranet" class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">




                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenuincio', '')); ?>">
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenureservar', '')); ?>">
                        <a class="nav-link" href="../reservar.php">Reservar</a>
                    </li>
                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenucontacto', '')); ?>">
                        <a class="nav-link" href="../contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenudondeestamos', '')); ?>">
                        <a class="nav-link" href="../dondeestamos.php">Donde Estamos</a>
                    </li>









                </ul>

                <ul class="navbar-nav ml-auto">
                    <!--
                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenuamoayuda', '')); ?>">
                        <a class="nav-link" href="ayuda.php">Ayuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Salir</a>
                    </li>

                    -->
                    <!--
                     <form action="identificarse.php" class="form-inline">
                        <input class="form-control ml-1 mt-1" name="correoelectronico" type="email" placeholder="Correo Electronico" aria-label="Correo Electronico" required>
                        <input class="form-control ml-1 mt-1" name="contrasena" type="text" maxlength="12" placeholder="Contraseña" aria-label="Contraseña" required pattern="[A-Za-z0-9]{8,12}">
                        <button class="btn btn-outline ml-1 mt-1 coloressecundarios" type="submit">Identificarse</button>  
                        <a href="registrase.php" class="btn btn-outline ml-1 mt-1 coloressecundarios">Regitrarse</a>
                        <a href="recuperar.php" class="ml-1 mt-1">Recuperar Contraseña</a>
                      
                     </form>
                    -->




                    <!--
                    
                     <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    
                    -->
                    <!--
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        ?>
                             <li class="ml-1 mt-1 mr-1"><?php print($_SESSION['usuario']); ?></li>
                                <li><a href="reservas.php" class="btn btn-outline ml-1 mt-1 coloressecundarios">Reservas</a></li>
                                <li><a href="../cerrarsesion.php" class="btn btn-outline ml-1 mt-1 coloressecundarios">Cerrar Sesión</a></li>
           
                        <?php
                    } else {
                        ?>


                                <li><a href="identificarse.php" class="btn btn-outline ml-1 mt-1 coloressecundarios">Identificarse</a></li>
                                <li><a href="registarse.php" class="btn btn-outline ml-1 mt-1 coloressecundarios">Registrarse</a></li>
                        <?php
                    }
                    ?>
                    
                    -->
                    <li class="ml-1 mt-1 mr-1"><?php print($_SESSION['usuario']); ?></li>
                    <li><a href="../cerrarsesion.php" class="btn btn-outline ml-1 mt-1 coloressecundarios">Cerrar Sesión</a></li>

                </ul>

            </div>


        </nav>

