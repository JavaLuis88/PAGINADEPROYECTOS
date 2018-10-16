<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Consulta de habitáculo";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Sección de consulta de habitáculo";
$_PARAMETERS['keywords'] = "Consulta, habitáculo";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";
//$_PARAMETERS['clasemenualtas'] = "active";
//$_PARAMETERS['clasemenualtasobjeto'] = "active";
//$_PARAMETERS['clasemenualtastipo'] = "active";
//$_PARAMETERS['clasemenualtasprovedor'] = "active";
//$_PARAMETERS['clasemenualtashabitaculo'] = "active";
//$_PARAMETERS['clasemenualtasusuarios'] = "active";
$_PARAMETERS['clasemenuconsultas'] = "active";
$_PARAMETERS['clasemenuconsultashabitaculo'] = "active";
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
            <h2 class="text-center"><strong>Consulta de habitáculo</strong></h2>
        </header>
        <p class="text-center pt-2">
            Seleccione el habitáculo
            
            <!--desde el formulario de abajo o desde el <a href="perspectiva.php">mapa de salas</a>-->


        </p>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                    <!--AQUI-->

                    <form action="ver_habitaculo.php" method="get" autocomplete="off" class="form-horizontal">

                        <div class="form-group">
                            <label  class="col-xs-2 control-label">Elija la sala</label>
                            <div class="col-xs-10">

                                <select name="sala" title="Sala" class="form-control miestilo" required>
                                    <option value="">Elige la sala </option>
                                    <option  value="001">
                                        001                            </option>
                                    <option  value="002">
                                        002                            </option>
                                    <option  value="003">
                                        003                            </option>
                                    <option  value="004">
                                        004                            </option>
                                    <option  value="005">
                                        005                            </option>
                                    <option  value="006">
                                        006                            </option>
                                    <option  value="007">
                                        007                            </option>
                                    <option  value="008">
                                        008                            </option>
                                    <option  value="009">
                                        009                            </option>
                                    <option  value="011">
                                        011                            </option>
                                    <option  value="012">
                                        012                            </option>
                                    <option  value="013">
                                        013                            </option>
                                    <option  value="014">
                                        014                            </option>
                                    <option  value="016">
                                        016                            </option>
                                    <option  value="018">
                                        018                            </option>
                                    <option  value="019">
                                        019                            </option>
                                    <option  value="020">
                                        020                            </option>
                                    <option  value="022">
                                        022                            </option>
                                    <option  value="024">
                                        024                            </option>
                                    <option  value="026">
                                        026                            </option>
                                    <option  value="028">
                                        028                            </option>
                                    <option  value="101">
                                        101                            </option>
                                    <option  value="102">
                                        102                            </option>
                                    <option  value="103">
                                        103                            </option>
                                    <option  value="104">
                                        104                            </option>
                                    <option  value="105">
                                        105                            </option>
                                    <option  value="106">
                                        106                            </option>
                                    <option  value="106b">
                                        106b                            </option>
                                    <option  value="107">
                                        107                            </option>
                                    <option  value="109">
                                        109                            </option>
                                    <option  value="111">
                                        111                            </option>
                                    <option  value="201">
                                        201                            </option>
                                    <option  value="201a">
                                        201a                            </option>
                                    <option  value="201b">
                                        201b                            </option>
                                    <option  value="202">
                                        202                            </option>
                                    <option  value="203">
                                        203                            </option>
                                    <option  value="204">
                                        204                            </option>
                                    <option  value="205">
                                        205                            </option>
                                    <option  value="206">
                                        206                            </option>
                                    <option  value="207">
                                        207                            </option>
                                    <option  value="208">
                                        208                            </option>
                                    <option  value="209">
                                        209                            </option>
                                    <option  value="301">
                                        301                            </option>
                                    <option  value="302">
                                        302                            </option>
                                    <option  value="304">
                                        304                            </option>
                                    <option  value="305">
                                        305                            </option>
                                    <option  value="306">
                                        306                            </option>
                                    <option  value="307">
                                        307                            </option>
                                    <option  value="308">
                                        308                            </option>
                                    <option  value="309">
                                        309                            </option>
                                    <option  value="310">
                                        310                            </option>
                                    <option  value="311">
                                        311                            </option>
                                    <option  value="311b">
                                        311b                            </option>
                                    <option  value="AFD">
                                        AFD                            </option>
                                    <option  value="ALM">
                                        ALM                            </option>
                                    <option  value="Hall">
                                        Hall                            </option>
                                    <option  value="MICHELIN">
                                        MICHELIN                            </option>
                                    <option  value="MONTECILLO">
                                        MONTECILLO                            </option>
                                    <option  value="PABELLON">
                                        PABELLON                            </option>
                                    <option  value="PAS000">
                                        PAS000                            </option>
                                    <option  value="PAS100">
                                        PAS100                            </option>
                                    <option  value="PAS200">
                                        PAS200                            </option>
                                    <option  value="PAS300">
                                        PAS300                            </option>
                                    <option  value="PASILLO">
                                        PASILLO                            </option>
                                    <option  value="PISCINA">
                                        PISCINA                            </option>
                                    <option  value="PR">
                                        PR                            </option>
                                    <option  value="PRINCIPE">
                                        PRINCIPE                            </option>
                                    <option  value="SUM">
                                        SUM                            </option>

                                </select>

                            </div>
                            <input type="submit" class="btn btn-info"/>


                        </div>













                    </form>

                    <!--AQUI-->

                </div>

            </div>





        </div>




    </article>



</section>

<?php

include_once 'plantilla/intranetfooter.php';
?>
   