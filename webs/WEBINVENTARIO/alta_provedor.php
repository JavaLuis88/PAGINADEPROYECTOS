<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Alta de proveedores";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Sección de alta de proveedores en el inventario";
$_PARAMETERS['keywords'] = "Inventario, Altas, Proveedores";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";
$_PARAMETERS['clasemenualtas'] = "active";
//$_PARAMETERS['clasemenualtasobjeto'] = "active";
//$_PARAMETERS['clasemenualtastipo'] = "active";
$_PARAMETERS['clasemenualtasprovedor'] = "active";
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
            <h2 class="text-center"><strong class="border">Alta de Provedor</strong></h2>
            
        </header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    
        <form action="validad_provee.php" method="post" autocomplete="off" class="form-horizontal">
                <div class="form-group">
                    <label class="col-xs-2 control-label">Nombre del proveedor </label>
                    <div class="col-xs-10">
                        <input type="text" name="Nombre" size="40" class="form-control miestilo" placeholder="Escribe el Nombre del proveedor" required pattern="[A-Za-z0-9]{12,20}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label">Direccion </label>
                    <div class="col-xs-10">
                        <input type="text" name="Direc" size="40" class="form-control miestilo" placeholder="Escribe la dirección" required pattern="[A-Za-z0-9]{20,40}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label">Telefono </label>
                    <div class="col-xs-10">
                        <input type="tel" name="Tele" size="40" class="form-control miestilo" placeholder="Escribe el número" required pattern="[0-9]{5,15}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label">CIF </label>
                    <div class="col-xs-10">
                        <input type="text" name="CIF" size="40" class="form-control miestilo" placeholder="Escribe el CIF" required pattern="[A-Za-z0-9]{9,15}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label">E-mail </label>
                    <div class="col-xs-10">
                        <input type="email" name="Email" size="40" class="form-control miestilo" placeholder="Escribe el E-mail" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label">Descripcion </label>
                    <div class="col-xs-10">
                        <textarea name="Descri" rows="2" cols="50"  class="form-control miestilo" placeholder="Escribe una descripcion"></textarea> 
                    </div>
                </div>
                
                 <input class="btn btn-info" type="submit" />
                
             </form>

                </div>
            </div>
        </div>




    </article>



</section>

<?php

include_once 'plantilla/intranetfooter.php';
?>
   