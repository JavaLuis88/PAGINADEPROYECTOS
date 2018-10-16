<?php
include_once 'libs/WebInputs.php';
?>
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
  
                <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" media="screen">
        <link rel="stylesheet" href="css/hoja.css">
        <script src="vendor/tether/dist/js/tether.js"></script>
        <script src="vendor/jquery/dist/jquery.js"></script>
        <script src="vendor/popper.js/dist/umd/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>

            
            
            
            
   </head>
    <body id="cuerpopartepublica">


        <header id="cabeceracontenidopartepublica" class="row align-items-center coloresprimarios">

            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <picture>
                    <source srcset="images/logotipo-movil.png" media="(max-width: 767px)" >
                    <source srcset="images/logotipo-tablet.png" media="(min-width: 768px) and (max-width: 991px)">
                    <source srcset="images/logotipo-large.png" media="(min-width: 992px) and (max-width: 1199px)">
                    <source srcset="images/logotipo-tv.png" media="(min-width: 1200px)">
                    <img src="images/logotipo-movil.png" alt="Logotipo C.I.F.P Santa Catalina">
                </picture> 

            </div>

            <div class="col-10 col-sm-10 col-md-10 col-lg-9 col-xl-10">
                <h1 id="textocabecerapagina" class="text-center">

                    <strong class="bold">C.I.F.P SANTA CATALINA</strong>

                </h1> 
            </div>



        </header>