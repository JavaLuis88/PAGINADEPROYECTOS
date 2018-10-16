<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Alta de objetos";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Exito en el alta del objeto";
$_PARAMETERS['keywords'] = "Inventario, Altas, Objetos, Exito";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";
$_PARAMETERS['clasemenualtas'] = "active";
$_PARAMETERS['clasemenualtasobjeto'] = "active";
//$_PARAMETERS['clasemenualtastipo'] = "active";
//$_PARAMETERS['clasemenualtasprovedor'] = "active";
//$_PARAMETERS['clasemenualtashabitaculo'] = "active";
//$_PARAMETERS['clasemenualtasusuarios'] = "active";
//$_PARAMETERS['clasemenuconsultas'] = "active";
//$_PARAMETERS['clasemenuconsultashabitaculo'] = "active";
//$_PARAMETERS['clasemenuconsultaspor'] = "active";
//$_PARAMETERS['clasemenuconsultaspersonalizada'] = "active";
//$_PARAMETERS['clasemenuamodificaciones'] = "active";
//$_PARAMETERS['clasemenuamodificacionesobjeto'] = "active";
//$_PARAMETERS['clasemenuamodificacionestipo'] = "active";
//$_PARAMETERS['clasemenuamodificacionesproveedor'] = "active";
//$_PARAMETERS['clasemenuamodificacioneslotes'] = "active";
//$_PARAMETERS['clasemenuamodificacionescodigo'] = "active";
//$_PARAMETERS['clasemenuamoayuda'] = "active";




include_once 'plantilla/intranetheader.php';
?>

<section id="seccionparteintranet">




    <article>
        <header>
            <h2 class="text-center"><strong>Alta de objetos</strong></h2>

        </header>

        <div class="container theme-showcase" role="main">
            <div class="jumbotron">

                <h2 class="text-center"> Se ha insertado correctamente el nuevo objeto </h2>
                <p class="text-center">
                    <a href="alta_objeto.php" class="btn btn-info">Volver a atrás</a>

                </p>
            </div>
        </div>








    </article>



</section>

<?php

include_once 'plantilla/intranetfooter.php';
?>
   