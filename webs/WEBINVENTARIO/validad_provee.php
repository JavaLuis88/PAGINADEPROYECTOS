<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Alta de proveedores";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Resumen del alta del proveedor";
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
            <h2 class="text-center"><strong>Alta de Provedor</strong></h2>
            <h3 class="text-center">Resumen del Provedor</h3>
        </header>
        <!-- 
         <div class="container">
            <div class="row justify-content-center">
                 <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
        
         <div class="d-flex justify-content-center bg-purple theme-showcase" role="main">
       
        -->   


        <div class="container theme-showcase" role="main">
            <div class="jumbotron">

                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                        <p>Nombre de proveedor: </p>
                        <p>Direccion del proveedor: </p>
                        <p>Telefono del proveedor: </p>
                        <p>CIF: </p>
                        <p>Email: </p>
                        <p>La descripcion del producto es la siguiente: </p>
                        <h3>¿Es correcta la informacion?</h3>
                        <a href="alta_provedor.php" class="btn btn-danger">No, volver a atrás</a>
                        <a href="enviar_proveedor.php?Nombre=&Direccion=&Tele=&CIF=&Email=&Descripcion=" class="btn btn-info">
                            Si, estoy de acuerdo</a> 


                    </div>
                </div>

            </div>
        </div>








        <!--</div>
    </div>
</div>-->




    </article>



</section>

<?php

include_once 'plantilla/intranetfooter.php';
?>
   