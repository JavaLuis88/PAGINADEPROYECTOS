<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Listado de habitáculos";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Sección listado de habitáculos";
$_PARAMETERS['keywords'] = "Consulta,Listado,Habitáculo";
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
            <h2 class="text-center"><strong>Consulta de habitaculo</strong></h2>
        </header>

        <!--
                <div class="container">
        
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
        
                           
        
                        </div>
        
                    </div>
        
        
        
        
        
                </div>
        -->


        <div class="container-fluid">
            <form id="formulario" method="post" action="generarlistado.php" target="_blank">

                <p class="imprimir" onclick="generarlistado();">Imprimir en PDF</p>

                <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                    <table id='tabla' class="table">
                        <tr class='bg0'>
                            <th onclick='loadOrderedData("cod_barras", 001)'>C&oacute;digo de barras</th>
                            <th onclick='loadOrderedData("uds", 001)'>Uds</th>
                            <th onclick='loadOrderedData("nserie", 001)'>N&uacute;mero de serie</th>
                            <th onclick='loadOrderedData("elemento", 001)'>Elemento</th>
                            <th onclick='loadOrderedData("`desc`", 001)'>Descripci&oacute;n</th>
                            <th onclick='loadOrderedData("f_alta", 001)'>Fecha alta</th>
                        </tr><tr class='bg2'><td>CON - EQ 1129 - 001</td><td>1</td><td></td><td>TEL</td><td>TEL</td><td></td></tr><tr class='bg1'><td>CON - EQ 1133 - 001</td><td>1</td><td></td><td>RAT</td><td>RAT</td><td></td></tr><tr class='bg2'><td>CON - EQ 1134 - 001</td><td>2</td><td></td><td>ALTAVOZ</td><td>ALTAVOZ DE ORDENADOR</td><td></td></tr><tr class='bg1'><td>CON - EQ 1138 - 001</td><td>1</td><td></td><td>VENTILADOR</td><td>VENTILADOR ORBEGOZO</td><td></td></tr><tr class='bg2'><td>CON - EQ 1280 - 001</td><td>1</td><td>923 NW</td><td>MONITOR</td><td>PANTALLA SAMSUNG</td><td></td></tr><tr class='bg1'><td>CON - EQ 1281 - 001</td><td>1</td><td>M-P-03-0602-001620</td><td>HUB</td><td>HUB CONCEPTRONIC 4 PUERTA VSB 2.0</td><td></td></tr><tr class='bg2'><td>CON - EQ 2150 - 001</td><td>1</td><td>X11-45374</td><td>ORDENADOR</td><td>ORDENADOR DELL (PARA UTILIZAR LA PANTALLA INFORMATIVA)</td><td></td></tr><tr class='bg1'><td>CON - EQ 2151 - 001</td><td>1</td><td></td><td>ORDENADOR</td><td>CPU ASUS. PENTIUM (R) DUAL-CORE. 2,60 GHZ RAM 2GB</td><td></td></tr><tr class='bg2'><td>CON - EQ 2152 - 001</td><td>1</td><td></td><td>TECLADO</td><td>TECLADO DELUXE</td><td></td></tr><tr class='bg1'><td>CON - EQ 2154 - 001</td><td>1</td><td>970010100</td><td>CALEFACTOR</td><td>CALEFACTOR FAGOR INNOVATION</td><td></td></tr><tr class='bg2'><td>CON - HE 2522 - 001</td><td>2</td><td></td><td>Herramientas</td><td>PORTA-CELLOS</td><td></td></tr><tr class='bg1'><td>CON - HE 2523 - 001</td><td>4</td><td></td><td>Herramientas</td><td>GRAPADORAS</td><td></td></tr><tr class='bg2'><td>CON - HE 2524 - 001</td><td>2</td><td></td><td>Herramientas</td><td>QUITAGRAPAS</td><td></td></tr><tr class='bg1'><td>CON - HE 2525 - 001</td><td>2</td><td></td><td>Herramientas</td><td>TIJERAS</td><td></td></tr><tr class='bg2'><td>CON - HE 2526 - 001</td><td>1</td><td></td><td>Herramientas</td><td>ENCUADERNADORA ESPIRAL (IBICO)</td><td></td></tr><tr class='bg1'><td>CON - HE 2528 - 001</td><td>1</td><td></td><td>Herramientas</td><td>GUILLOTINA (IDEAL 2035 A)</td><td></td></tr><tr class='bg2'><td>CON - HE 2529 - 001</td><td>1</td><td></td><td>Herramientas</td><td>CALCULADORA (CASIO)</td><td></td></tr><tr class='bg1'><td>CON - HE 2530 - 001</td><td>1</td><td></td><td>Herramientas</td><td>TALADRADORA DE PAPEL (PETRUS 62</td><td></td></tr><tr class='bg2'><td>CON - HE 2531 - 001</td><td>1</td><td></td><td>Herramientas</td><td>SELLO "RECIBI"</td><td></td></tr><tr class='bg1'><td>CON - HE 2532 - 001</td><td>1</td><td></td><td>Herramientas</td><td>FECHADOR</td><td></td></tr><tr class='bg2'><td>CON - HE 2533 - 001</td><td>0</td><td></td><td>Herramientas</td><td>LLAVES DE DIVERSAS PUERTAS</td><td></td></tr><tr class='bg1'><td>CON - MA 3229 - 001</td><td>0</td><td></td><td></td><td>TRANSPARENCIAS PARA FOTOCOPIADORAS</td><td></td></tr><tr class='bg2'><td>CON - MA 3234 - 001</td><td>0</td><td></td><td></td><td>ESPIRALES PARA ENCUADERNAR</td><td></td></tr><tr class='bg1'><td>CON - MA 3235 - 001</td><td>0</td><td></td><td></td><td>CANUTILLOS PARA ENCUADERNAR</td><td></td></tr><tr class='bg2'><td>CON - MA 3236 - 001</td><td>0</td><td></td><td></td><td>PASTAS DE ENCUADERNAR</td><td></td></tr><tr class='bg1'><td>CON - MA 3240 - 001</td><td>0</td><td></td><td></td><td>MEDICANTES BOTIQU</td><td></td></tr><tr class='bg2'><td>CON - MA 3243 - 001</td><td>0</td><td></td><td></td><td>ALMOHADILLA DE SELLOS</td><td></td></tr><tr class='bg1'><td>CON - MO 3903 - 001</td><td>1</td><td></td><td>MOBILIARIO</td><td>ESTANTER</td><td></td></tr><tr class='bg2'><td>CON - MO 3904 - 001</td><td>1</td><td></td><td>MOBILIARIO</td><td>CAJA PORTALLAVES</td><td></td></tr><tr class='bg1'><td>CON - MO 3905 - 001</td><td>1</td><td></td><td>MOBILIARIO</td><td>ENCIMERA EN FORMA DE ESCUADRA</td><td></td></tr><tr class='bg2'><td>CON - MO 3906 - 001</td><td>4</td><td></td><td>MOBILIARIO</td><td>CAJONERAS CON CINCO CAJONES CADA UNA</td><td></td></tr><tr class='bg1'><td>CON - MO 3907 - 001</td><td>4</td><td></td><td>MOBILIARIO</td><td>BANDEJAS MET</td><td></td></tr><tr class='bg2'><td>CON - MO 3908 - 001</td><td>1</td><td></td><td>MOBILIARIO</td><td>CORCHERA</td><td></td></tr><tr class='bg1'><td>CON - MO 3909 - 001</td><td>2</td><td></td><td>MOBILIARIO</td><td>SILLA</td><td></td></tr><tr class='bg2'><td>CON - MO 3910 - 001</td><td>1</td><td></td><td>MOBILIARIO</td><td>SILLONES</td><td></td></tr><tr class='bg1'><td>CON - MO 3911 - 001</td><td>1</td><td></td><td>MOBILIARIO</td><td>MESA AMARILLA PEQUE</td><td></td></tr><tr class='bg2'><td>CON - MO 3912 - 001</td><td>1</td><td></td><td>MOBILIARIO</td><td>CAJA FUERTE DE CAUDALES</td><td></td></tr><tr class='bg1'><td>CON - MO 3913 - 001</td><td>2</td><td></td><td>MOBILIARIO</td><td>PAPELERAS</td><td></td></tr><tr class='bg2'><td>CON - MO 4190 - 001</td><td>1</td><td></td><td>MOBILIARIO</td><td>CAJA DE DIFERENCIALES</td><td></td></tr><tr class='bg1'><td>CON - MO 4191 - 001</td><td>1</td><td></td><td>MOBILIARIO</td><td>ESPEJO</td><td></td></tr><tr class='bg2'><td>CON - EQ 4535 - 001</td><td>1</td><td>GAA01134</td><td>FOTOCOPIADORA</td><td>FOTOCOPIADORA SHARP MX-M550U</td><td>2014-05-15</td></tr><tr class='bg1'><td>CEN - EQ 4577 - 001</td><td>1</td><td>05089756</td><td>FOTOCOPIADORA</td><td>FOTOCOPIADORA SHARP MX 2301N</td><td>2014-05-21</td></tr><tr class='bg2'><td>ADM - HE 4804 - 001</td><td>2</td><td>QQ</td><td>QQ</td><td>QQ</td><td>2018-01-20</td></tr>
                    </table>
                </div>
                <!--
                <input type='hidden' name='json' value='{"1":["CON - EQ 1129 - 001","1","","TEL","TEL",""],"2":["CON - EQ 1133 - 001","1","","RAT","RAT",""],"3":["CON - EQ 1134 - 001","2","","ALTAVOZ","ALTAVOZ DE ORDENADOR",""],"4":["CON - EQ 1138 - 001","1","","VENTILADOR","VENTILADOR ORBEGOZO",""],"5":["CON - EQ 1280 - 001","1","923 NW","MONITOR","PANTALLA SAMSUNG",""],"6":["CON - EQ 1281 - 001","1","M-P-03-0602-001620","HUB","HUB CONCEPTRONIC 4 PUERTA VSB 2.0",""],"7":["CON - EQ 2150 - 001","1","X11-45374","ORDENADOR","ORDENADOR DELL (PARA UTILIZAR LA PANTALLA INFORMATIVA)",""],"8":["CON - EQ 2151 - 001","1","","ORDENADOR","CPU ASUS. PENTIUM (R) DUAL-CORE. 2,60 GHZ RAM 2GB",""],"9":["CON - EQ 2152 - 001","1","","TECLADO","TECLADO DELUXE",""],"10":["CON - EQ 2154 - 001","1","970010100","CALEFACTOR","CALEFACTOR FAGOR INNOVATION",""],"11":["CON - HE 2522 - 001","2","","Herramientas","PORTA-CELLOS",""],"12":["CON - HE 2523 - 001","4","","Herramientas","GRAPADORAS",""],"13":["CON - HE 2524 - 001","2","","Herramientas","QUITAGRAPAS",""],"14":["CON - HE 2525 - 001","2","","Herramientas","TIJERAS",""],"15":["CON - HE 2526 - 001","1","","Herramientas","ENCUADERNADORA ESPIRAL (IBICO)",""],"16":["CON - HE 2528 - 001","1","","Herramientas","GUILLOTINA (IDEAL 2035 A)",""],"17":["CON - HE 2529 - 001","1","","Herramientas","CALCULADORA (CASIO)",""],"18":["CON - HE 2530 - 001","1","","Herramientas","TALADRADORA DE PAPEL (PETRUS 62",""],"19":["CON - HE 2531 - 001","1","","Herramientas","SELLO \"RECIBI\"",""],"20":["CON - HE 2532 - 001","1","","Herramientas","FECHADOR",""],"21":["CON - HE 2533 - 001","0","","Herramientas","LLAVES DE DIVERSAS PUERTAS",""],"22":["CON - MA 3229 - 001","0","","","TRANSPARENCIAS PARA FOTOCOPIADORAS",""],"23":["CON - MA 3234 - 001","0","","","ESPIRALES PARA ENCUADERNAR",""],"24":["CON - MA 3235 - 001","0","","","CANUTILLOS PARA ENCUADERNAR",""],"25":["CON - MA 3236 - 001","0","","","PASTAS DE ENCUADERNAR",""],"26":["CON - MA 3240 - 001","0","","","MEDICANTES BOTIQU",""],"27":["CON - MA 3243 - 001","0","","","ALMOHADILLA DE SELLOS",""],"28":["CON - MO 3903 - 001","1","","MOBILIARIO","ESTANTER",""],"29":["CON - MO 3904 - 001","1","","MOBILIARIO","CAJA PORTALLAVES",""],"30":["CON - MO 3905 - 001","1","","MOBILIARIO","ENCIMERA EN FORMA DE ESCUADRA",""],"31":["CON - MO 3906 - 001","4","","MOBILIARIO","CAJONERAS CON CINCO CAJONES CADA UNA",""],"32":["CON - MO 3907 - 001","4","","MOBILIARIO","BANDEJAS MET",""],"33":["CON - MO 3908 - 001","1","","MOBILIARIO","CORCHERA",""],"34":["CON - MO 3909 - 001","2","","MOBILIARIO","SILLA",""],"35":["CON - MO 3910 - 001","1","","MOBILIARIO","SILLONES",""],"36":["CON - MO 3911 - 001","1","","MOBILIARIO","MESA AMARILLA PEQUE",""],"37":["CON - MO 3912 - 001","1","","MOBILIARIO","CAJA FUERTE DE CAUDALES",""],"38":["CON - MO 3913 - 001","2","","MOBILIARIO","PAPELERAS",""],"39":["CON - MO 4190 - 001","1","","MOBILIARIO","CAJA DE DIFERENCIALES",""],"40":["CON - MO 4191 - 001","1","","MOBILIARIO","ESPEJO",""],"41":["CON - EQ 4535 - 001","1","GAA01134","FOTOCOPIADORA","FOTOCOPIADORA SHARP MX-M550U","2014-05-15"],"42":["CEN - EQ 4577 - 001","1","05089756","FOTOCOPIADORA","FOTOCOPIADORA SHARP MX 2301N","2014-05-21"],"43":["ADM - HE 4804 - 001","2","QQ","QQ","QQ","2018-01-20"]}' /><input type='hidden' name='aula' value='001' />        
                -->
</form>
        </div>

        <a class="atras" href="consulta_habitaculo.php">Atr&aacute;s</a>





    </article>



</section>

<?php

include_once 'plantilla/intranetfooter.php';
?>
   