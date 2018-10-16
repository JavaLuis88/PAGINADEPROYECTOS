<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Confimación de datos - Sol Manga";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Confimación de los datos de registo";
$_PARAMETERS['keywords'] = "Confirmación, registro usuario";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOARCHIVE, NOODP, NOYDIR";
include_once 'templates/publicheader.php';
?>


<section class="espaciadoinferior1per">

    <div class="jumbotron">
        <div class="container">
            <h2>¿Son correctos estos datos?</h2>
            <p id="textojumbotron"></p>
            <p><a href="index.php" class="btn btn-success btn-lg" role="button">Aceptar</a> <a href="index.php" class="btn btn-info btn-lg" role="button">Abandonar</a></p>
            <p></p>
        </div>
    </div>


</section>

<?php
include_once 'templates/publicfooter.php';
?>   
</html>