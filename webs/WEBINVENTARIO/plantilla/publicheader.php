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
    <body id="cuerpopartepublica">

        <header id="cabeceracontenidopartepublica" class="container-fluid coloresprimarios">
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

