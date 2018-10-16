<?php
include_once 'libs/WebInputs.php';
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

        <link rel="stylesheet" href="bower_components/bootstrap/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="css/hoja.css">
        <script src="bower_components/tether/dist/js/tether.js"></script>
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/popper.js/dist/umd/popper.js"></script>
        <script src="bower_components/bootstrap/js/bootstrap.js"></script>
        <!--<script src="bower_components/font-awesome/css/font-awesome.min.css"></script>-->
        <script src="js/logica.js"></script>
    </head>
    <body id="cuerpoparteintranet">

        <header id="cabeceracontenidoparteintranet" class="container-fluid coloresprimarios">
            <div class="row">
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">

                    <figure class="pt-3">

                        <picture>
                            <source srcset="img/logotipo-movil.png" media="(max-width: 767px)" >
                            <source srcset="img/logotipo-tablet.png" media="(min-width: 768px) and (max-width: 991px)">
                            <source srcset="img/logotipo-large.png" media="(min-width: 992px) and (max-width: 1199px)">
                            <source srcset="img/logotipo-tv.png" media="(min-width: 1200px)">
                            <img src="img/logotipo-movil.png" alt="Logotipo">
                        </picture>


                    </figure>


                </div>

                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9" >
                    <h1 id="cabeceraprincipalpartepublica" class="pt-4 pl-3">
                        <strong>C.I.F.P Santa Catalina</strong>
                    </h1>


                </div>


            </div>





        </header>

        <nav id="navegacionparteintranet" class="navbar navbar-expand-lg navbar-light coloresprimarios">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenuamoayudaaltas', '')); ?>">
                        <a class="nav-link" href="ayuda.php">Altas</a>
                    </li>
                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenuamoayudaconsultas', '')); ?>">
                        <a class="nav-link" href="ayudaconsultas.php">Consulta</a>
                    </li>

                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenuamoayudamodificaciones', '')); ?>">
                        <a class="nav-link" href="ayudamodificaciones.php">Modificaciones</a>
                    </li>


                    <li class="nav-item dropdown <?php print(WebInputs::getParamenters('clasemenuayudaacercade', '')); ?>">
                        <a class="nav-link" href="ayudaacercade.php">Acerca De</a>

                    </li>                       

                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenuamoayudavolver', '')); ?>">
                        <a class="nav-link" href="login.php">Volver</a>
                    </li>












                </ul>

            </div>


        </nav>



        <!--
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        
     
    </nav>
        
        -->