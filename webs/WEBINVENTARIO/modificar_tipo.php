<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Listado de habitáculos";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Sección listado de habitáculos";
$_PARAMETERS['keywords'] = "Consulta,Listado,habitáculo";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";

//$_PARAMETERS['clasemenualtas'] = "active";
//$_PARAMETERS['clasemenualtasobjeto'] = "active";
//$_PARAMETERS['clasemenualtastipo'] = "active";
//$_PARAMETERS['clasemenualtasprovedor'] = "active";
//$_PARAMETERS['clasemenualtashabitaculo'] = "active";
//$_PARAMETERS['clasemenualtasusuarios'] = "active";
//$_PARAMETERS['clasemenuconsultas'] = "active";
//$_PARAMETERS['clasemenuconsultashabitaculo'] = "active";
//$_PARAMETERS['clasemenuconsultaspor'] = "active";
//$_PARAMETERS['clasemenuconsultaspersonalizada'] = "active";
$_PARAMETERS['clasemenuamodificaciones'] = "active";
//$_PARAMETERS['clasemenuamodificacionesobjeto'] = "active";
$_PARAMETERS['clasemenuamodificacionestipo'] = "active";
//$_PARAMETERS['clasemenuamodificacionesproveedor'] = "active";
//$_PARAMETERS['clasemenuamodificacioneslotes'] = "active";
//$_PARAMETERS['clasemenuamodificacionescodigo'] = "active";
//$_PARAMETERS['clasemenuamoayuda'] = "active";




include_once 'plantilla/intranetheader.php';
?>

<section id="seccionparteintranet">




    <article>
        <header>
            <h2 class="text-center"><strong>Modificar Tipo</strong></h2>
        </header>
        <div id="contenedor">
            <form action="modificar_formulario_tipo.php" method="post" autocomplete="off"  role="form" class="form-horizontal">
                <div class="container pt-2">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                            <div class="form-group">

                                <label  class="col-xs-2 control-label">Selecciona el tipo</label>




                                <div class="col-xs-10">




                                    <select name="Tipo" title="Tipo" id="selectdep" class="form-control" required>
                                        <option value="">Elige Tipo </option>
                                        <option title="Equipo                        " value="Equipo                        "> 

                                            Equipo                         
                                        </option>
                                        <option title="Herramientas" value="Herramientas"> 

                                            Herramientas 
                                        </option>
                                        <option title="Material Audivisual" value="Material Audivisual"> 

                                            Material Audivisual 
                                        </option>
                                        <option title="Material Deportivo            " value="Material Deportivo            "> 

                                            Material Deportivo             
                                        </option>
                                        <option title="Mobiliario                   " value="Mobiliario                   "> 

                                            Mobiliario                    
                                        </option>
                                        <option title="qqqqqqqqq" value="qqqqqqqqq"> 

                                            qqqqqqqqq 
                                        </option>
                                        <option title="Software" value="Software"> 

                                            Software 
                                        </option>
                                    </select>
                                </div>
                                <input id="submit" type="submit" value="Enviar" class="btn btn-info" />

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>




    </article>



</section>

<?php

include_once 'plantilla/intranetfooter.php';
?>
   