<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Alta de tipos";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Sección de alta de tipos en el inventario";
$_PARAMETERS['keywords'] = "Inventario, Altas, Tipos";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";
$_PARAMETERS['clasemenualtas'] = "active";
//$_PARAMETERS['clasemenualtasobjeto'] = "active";
$_PARAMETERS['clasemenualtastipo'] = "active";
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
            <h2 class="text-center"><strong class="border">Alta de tipos</strong></h2>

        </header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                    <div class="container">
                        <form action="validad_tipo.php" method="post" autocomplete="off" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-xs-2 control-label">Nombre del Tipo </label>
                                <div class="col-xs-10">
                                    <input type="text" name="Nombre" size="40" class="form-control miestilo" placeholder="Escribe el Nombre del Tipo" required pattern="[A-Za-z0-9]{8,40}" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-2 control-label">Abreviatura del tipo </label>
                                <div class="col-xs-10">
                                    <input type="text" name="Abrev" size="40" maxlength="3" class="form-control miestilo" placeholder="Escribe la abreviatura" required />
                                </div>
                            </div>
                            <input class="btn btn-info" type="submit" />
                        </form>


                    </div>
                </div>
            </div>
        </div>



    </article>



</section>

<?php

include_once 'plantilla/intranetfooter.php';
?>
   