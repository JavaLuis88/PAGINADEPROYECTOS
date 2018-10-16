<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Alta de habitáculos";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Sección de alta de habitáculos en el inventario";
$_PARAMETERS['keywords'] = "Inventario, Altas, Habitáculos";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";
$_PARAMETERS['clasemenualtas'] = "active";
//$_PARAMETERS['clasemenualtasobjeto'] = "active";
//$_PARAMETERS['clasemenualtastipo'] = "active";
//$_PARAMETERS['clasemenualtasprovedor'] = "active";
$_PARAMETERS['clasemenualtashabitaculo'] = "active";
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
            <h2 class="text-center"><strong>Alta de habitaculo</strong></h2>

        </header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                    <form action="validad_habitaculo.php" method="post" autocomplete="off" class="form-horizontal">


                        <div class="form-group">
                            <label  class="col-xs-2 control-label">Nombre del habitáculo</label>
                            <div class="col-xs-10">
                                <input type="text" name="habit" class="form-control miestilo" title="habit" placeholder="Nombre Habitaculo" required pattern="[A-Za-z0-9]{15,18}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-xs-2 control-label">Descripcion</label>
                            <div class="col-xs-10">
                                <textarea name="descrip"  rows="2" cols="50" class="form-control miestilo"  placeholder="Escribe una descripcion"></textarea> 
                            </div>
                        </div>
                        <input class="btn btn-info" type="submit"/>




                    </form> 


                </div>
            </div>
        </div>




    </article>



</section>

<?php

include_once 'plantilla/intranetfooter.php';
?>
   