<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Alta de usuarios";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Sección de alta de usuarios";
$_PARAMETERS['keywords'] = "Inventario, Altas, Usuarios";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";
$_PARAMETERS['clasemenualtas'] = "active";
//$_PARAMETERS['clasemenualtasobjeto'] = "active";
//$_PARAMETERS['clasemenualtastipo'] = "active";
//$_PARAMETERS['clasemenualtasprovedor'] = "active";
//$_PARAMETERS['clasemenualtashabitaculo'] = "active";
$_PARAMETERS['clasemenualtasusuarios'] = "active";
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
            <h2 class="text-center"><strong class="border">Alta de usuarios</strong></h2>

        </header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                    <div class="container">
                        <form action="usnuevo.php" method="post" autocomplete="off" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-xs-2 control-label">Usuario: </label>
                                <div class="col-xs-10">
                                    <input type="text" name="pv1" size="15" class="form-control miestilo" placeholder="Escribe el Nombre del usuario" required pattern="[A-Za-z0-9]{8,15}" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-2 control-label">Contraseña: </label>
                                <div class="col-xs-10">
                                    <input type="text" name="pv2" size="15" class="form-control miestilo" placeholder="Escribe la Contraseña del usuario" required pattern="[A-Za-z0-9]{8,15}" />
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-xs-2 control-label">Departamento </label>
                                <div class="col-xs-10">
                                    <select name="pv3" class="form-control miestilo" required>
                                        <option value="">Elige Departamento </option>
                                        <option value="AFD">AFD</option> 
                                        <option value="ELE">ELE</option> 
                                        <option value="INF">INF</option>
                                        <option value="FOL">FOL</option> 
                                        <option value="CU-FOL">CU-FOL</option>
                                        <option value="ADM">ADM</option>
                                        <option value="BIB">BIB</option>
                                        <option value="CEN">CEN</option>
                                    </select></div>
                            </div>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pv4" value="1">
                                    <label class="form-check-label">Acceso Total</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pv4" value="0" checked>
                                    <label class="form-check-label">Acceso De Solo lectura</label>
                                </div>
                            </div>

                            <input class="btn btn-info" type="submit" />
                            <input class="btn btn-danger" type="reset" />
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
   