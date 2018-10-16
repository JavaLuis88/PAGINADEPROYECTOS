<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Mapa del sitio - Sol Manga";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Página del mapa del sitio";
$_PARAMETERS['keywords'] = "Mapa, sitio";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOARCHIVE, NOODP, NOYDIR";
include_once 'templates/publicheader.php';
?>


<section class="espaciadoinferior1per">

    <article class="container-fluid row">
        <header class="text-center">
            <h2><strong>Mapa de la web</strong></h2>

        </header>

        <article class="col-xs-4 col-sm-4 col-md-4">

            <header class="text-center">
                <h3><strong>Inicio</strong></h3>

            </header>
            <ul class="list-unstyled">
                <li class="text-center"><a href="index.php" >Inicio</a></li>
            </ul>
        </article>

        <article class="col-xs-4 col-sm-4 col-md-4">

            <header>
                <h3 class="text-center"><strong>Usuarios</strong></h3>

            </header>
            <ul class="list-unstyled">
                <li class="text-center"><a href="identificacion.php">Acceso de usuario</a></li>
                <li class="text-center"><a href="registro.php">Registro de usuario</a></li>
                <li class="text-center"><a href="recuperarcontrasena.php">Olvido contraseña </a></li>

            </ul>
        </article>

        <article class="col-xs-4 col-sm-4 col-md-4">

            <head>
            <h3 class="text-center"><strong>Datos</strong></h3>

            </head>
            <ul class="list-unstyled">
                <li class="text-center"><a href="jumbotron.php">Jumbotron</a></li>
                <li class="text-center"><a href="listado.php">Listados</a></li>

            </ul>
        </article>

    </article>


</section>

<?php
include_once 'templates/publicfooter.php';
?>   
</html>