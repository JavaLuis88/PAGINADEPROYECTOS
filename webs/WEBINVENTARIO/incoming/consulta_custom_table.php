<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Consulta personalizada";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Sección de consulta personalizada";
$_PARAMETERS['keywords'] = "Consulta, personlizad, criterio";
$_PARAMETERS['author'] = "Super Eñe";

//$_PARAMETERS['clasemenualtas'] = "active";
//$_PARAMETERS['clasemenualtasobjeto'] = "active";
//$_PARAMETERS['clasemenualtastipo'] = "active";
//$_PARAMETERS['clasemenualtasprovedor'] = "active";
//$_PARAMETERS['clasemenualtashabitaculo'] = "active";
//$_PARAMETERS['clasemenualtasusuarios'] = "active";
$_PARAMETERS['clasemenuconsultas'] = "active";
//$_PARAMETERS['clasemenuconsultashabitaculo'] = "active";
//$_PARAMETERS['clasemenuconsultaspor'] = "active";
$_PARAMETERS['clasemenuconsultaspersonalizada'] = "active";
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
            <h2 class="text-center"><strong>Consulta Personalizada</strong></h2>
        </header>
        <div id="contenedor">

            <div id="consulta">

                <form method="POST" action="consulta_custom.php" accept-charset="utf-8">
                    <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">

                        <table class="table">
                            <tr class="bg1">
                                <td>SELECCIONE COLUMNAS A MOSTRAR</td>
                                <td>SELECCIONE CL&Aacute;USULAS WHERE</td>
                            </tr>
                            <tr>


                                <!--
                                                                <td>
                                                                    <input class='check' type='checkbox' name='columna[]' value='id'>id<br/><input class='check' type='checkbox' name='columna[]' value='Id_old'>Id_old<br/><input class='check' type='checkbox' name='columna[]' value='cod_barras'>cod_barras<br/><input class='check' type='checkbox' name='columna[]' value='uds'>uds<br/><input class='check' type='checkbox' name='columna[]' value='nserie'>nserie<br/><input class='check' type='checkbox' name='columna[]' value='elemento'>elemento<br/><input class='check' type='checkbox' name='columna[]' value='desc'>desc<br/><input class='check' type='checkbox' name='columna[]' value='prov'>prov<br/><input class='check' type='checkbox' name='columna[]' value='f_alta'>f_alta<br/><input class='check' type='checkbox' name='columna[]' value='f_baja'>f_baja<br/><input class='check' type='checkbox' name='columna[]' value='dept'>dept<br/><input class='check' type='checkbox' name='columna[]' value='sala'>sala<br/><input class='check' type='checkbox' name='columna[]' value='cuentagest'>cuentagest<br/><input class='check' type='checkbox' name='columna[]' value='obs'>obs<br/><input class='check' type='checkbox' name='columna[]' value='Tipo'>Tipo<br/><input class='check' type='checkbox' name='columna[]' value='Factura'>Factura<br/>                                        
                                                                </td>
                                -->
                                <td>


                                    <div class="form-check">

                                        <input class='form-check-input' type='checkbox' name='columna[]' value='id'>
                                        <label class="form-check-label">id</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='Id_old'>
                                        <label class="form-check-label" for="inlineCheckbox2">Id_old</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='cod_barras'>
                                        <label class="form-check-label" for="inlineCheckbox3">cod_barras</label>
                                    </div>


                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='uds'>

                                        <label class="form-check-label" for="inlineCheckbox3">uds</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='nserie'>


                                        <label class="form-check-label" for="inlineCheckbox3">nserie</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='elemento'>

                                        <label class="form-check-label" for="inlineCheckbox3">elemento</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='desc'>

                                        <label class="form-check-label" for="inlineCheckbox3">desc</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='prov'>

                                        <label class="form-check-label" for="inlineCheckbox3">prov</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='f_alta'>

                                        <label class="form-check-label" for="inlineCheckbox3">f_alta</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='f_baja'>

                                        <label class="form-check-label" for="inlineCheckbox3">f_baja</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='dept'>

                                        <label class="form-check-label" for="inlineCheckbox3">dept</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='sala'>
                                        <label class="form-check-label" for="inlineCheckbox3">sala</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='cuentagest'>
                                        <label class="form-check-label" for="inlineCheckbox3">cuentagest</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='obs'>

                                        <label class="form-check-label" for="inlineCheckbox3">obs</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='Tipo'>

                                        <label class="form-check-label" for="inlineCheckbox3">Tipo</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' type='checkbox' name='columna[]' value='Factura'>
                                        <label class="form-check-label" for="inlineCheckbox3">Factura</label>
                                    </div>




                                </td>



                                <td>

                                    <div class="form-group">
                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='cod_barras'/>cod_barras=   
                                        <input class='form-control tex' type='text' name='cod_barras'/>
                                    </div>
                                    <div class="form-group">

                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='uds'/>uds=   
                                        <input class='form-control tex' type='text' name='uds'/>
                                    </div>
                                    <div class="form-group">

                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='nserie'/>nserie=   
                                        <input class='form-control tex' type='text' name='nserie'/>
                                    </div>
                                    <div class="form-group">

                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='elemento'/>elemento like 
                                        <input class='form-control tex' placeholder='Admite comodines %, &' type='text' name='elemento'/>
                                    </div>
                                    <div class="form-group">

                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='desc'/>desc like 
                                        <input class='form-control tex' placeholder='Admite comodines %, &' type='text' name='desc'/>
                                    </div>
                                    <div class="form-group">

                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='prov'/>prov=             
                                        <select class="form-control seltab" name='tprov'>
                                            <option id='sel' value="sel">- Seleccione proveedor -</option>
                                            <option id='prov' value="">
                                            </option>
                                            <option id='prov' value="1024 LOW EMISSION">
                                                1024 LOW EMISSION                                                            </option>
                                            <option id='prov' value="3E">
                                                3E                                                            </option>
                                            <option id='prov' value="3M">
                                                3M                                                            </option>
                                            <option id='prov' value="ABROTES">
                                                ABROTES                                                            </option>
                                            <option id='prov' value="ACEROCHA">
                                                ACEROCHA                                                            </option>
                                            <option id='prov' value="ALCATEL">
                                                ALCATEL                                                            </option>
                                            <option id='prov' value="ALECOP">
                                                ALECOP                                                            </option>
                                            <option id='prov' value="ALPA COPIADORAS">
                                                ALPA COPIADORAS                                                            </option>
                                            <option id='prov' value="ANCORA AUDIOVISUAL S.A. BARCELONA">
                                                ANCORA AUDIOVISUAL S.A. BARCELONA                                                            </option>
                                            <option id='prov' value="ANTIGUO">
                                                ANTIGUO                                                            </option>
                                            <option id='prov' value="AOC">
                                                AOC                                                            </option>
                                            <option id='prov' value="AUDIOLUZ">
                                                AUDIOLUZ                                                            </option>
                                            <option id='prov' value="BALLESTEROS">
                                                BALLESTEROS                                                            </option>
                                            <option id='prov' value="BAZAR CANARIAS">
                                                BAZAR CANARIAS                                                            </option>
                                            <option id='prov' value="BBC">
                                                BBC                                                            </option>
                                            <option id='prov' value="BIBLIOTECA">
                                                BIBLIOTECA                                                            </option>
                                            <option id='prov' value="BLAS-TONI">
                                                BLAS-TONI                                                            </option>
                                            <option id='prov' value="BOAR">
                                                BOAR                                                            </option>
                                            <option id='prov' value="C-SYSTEM">
                                                C-SYSTEM                                                            </option>
                                            <option id='prov' value="C.PORRAS PASAMONTES">
                                                C.PORRAS PASAMONTES                                                            </option>
                                            <option id='prov' value="CACCO">
                                                CACCO                                                            </option>
                                            <option id='prov' value="CANON SISTEMAS DE OFICINA CANON">
                                                CANON SISTEMAS DE OFICINA CANON                                                            </option>
                                            <option id='prov' value="CARLIN ARANDA">
                                                CARLIN ARANDA                                                            </option>
                                            <option id='prov' value="CASA MANOLO">
                                                CASA MANOLO                                                            </option>
                                            <option id='prov' value="CENTRO">
                                                CENTRO                                                            </option>
                                            <option id='prov' value="CINCO D">
                                                CINCO D                                                            </option>
                                            <option id='prov' value="CIRILO MART">
                                                CIRILO MART                                                            </option>
                                            <option id='prov' value="CISS">
                                                CISS                                                            </option>
                                            <option id='prov' value="COCINA ECON">
                                                COCINA ECON                                                            </option>
                                            <option id='prov' value="CODISA">
                                                CODISA                                                            </option>
                                            <option id='prov' value="COMPAS 21">
                                                COMPAS 21                                                            </option>
                                            <option id='prov' value="COPIADORAS DE ARANDA">
                                                COPIADORAS DE ARANDA                                                            </option>
                                            <option id='prov' value="COPIADOS DEL CFIE">
                                                COPIADOS DEL CFIE                                                            </option>
                                            <option id='prov' value="CORTE INGLES">
                                                CORTE INGLES                                                            </option>
                                            <option id='prov' value="CREATUR TOOLS">
                                                CREATUR TOOLS                                                            </option>
                                            <option id='prov' value="CTX">
                                                CTX                                                            </option>
                                            <option id='prov' value="CYL-EL CORTE INGLES">
                                                CYL-EL CORTE INGLES                                                            </option>
                                            <option id='prov' value="DANISOFT">
                                                DANISOFT                                                            </option>
                                            <option id='prov' value="DECATHLON">
                                                DECATHLON                                                            </option>
                                            <option id='prov' value="DEMESTRES">
                                                DEMESTRES                                                            </option>
                                            <option id='prov' value="DEPORTES MALPASO (ZONA SPORT)">
                                                DEPORTES MALPASO (ZONA SPORT)                                                            </option>
                                            <option id='prov' value="DIDACIENCIA">
                                                DIDACIENCIA                                                            </option>
                                            <option id='prov' value="DIDACTRONICA">
                                                DIDACTRONICA                                                            </option>
                                            <option id='prov' value="DISTESA">
                                                DISTESA                                                            </option>
                                            <option id='prov' value="DIVIGAR">
                                                DIVIGAR                                                            </option>
                                            <option id='prov' value="DNA CONSULTORES">
                                                DNA CONSULTORES                                                            </option>
                                            <option id='prov' value="DPTO ADM">
                                                DPTO ADM                                                            </option>
                                            <option id='prov' value="DREMEL">
                                                DREMEL                                                            </option>
                                            <option id='prov' value="EDUCTRADE">
                                                EDUCTRADE                                                            </option>
                                            <option id='prov' value="EL SECRETARIO">
                                                EL SECRETARIO                                                            </option>
                                            <option id='prov' value="ELECTROSON">
                                                ELECTROSON                                                            </option>
                                            <option id='prov' value="EMA">
                                                EMA                                                            </option>
                                            <option id='prov' value="ENOSA">
                                                ENOSA                                                            </option>
                                            <option id='prov' value="EUROCIENCIA">
                                                EUROCIENCIA                                                            </option>
                                            <option id='prov' value="EXPERT">
                                                EXPERT                                                            </option>
                                            <option id='prov' value="FCI">
                                                FCI                                                            </option>
                                            <option id='prov' value="FEB">
                                                FEB                                                            </option>
                                            <option id='prov' value="FERRETER">
                                                FERRETER                                                            </option>
                                            <option id='prov' value="FLUKE">
                                                FLUKE                                                            </option>
                                            <option id='prov' value="FOR- INFO">
                                                FOR- INFO                                                            </option>
                                            <option id='prov' value="FORMACION 3000 INFORMATICA">
                                                FORMACION 3000 INFORMATICA                                                            </option>
                                            <option id='prov' value="FUJITSU">
                                                FUJITSU                                                            </option>
                                            <option id='prov' value="GAS CASTILLA Y LE">
                                                GAS CASTILLA Y LE                                                            </option>
                                            <option id='prov' value="GLAXO">
                                                GLAXO                                                            </option>
                                            <option id='prov' value="GOLDSTAR">
                                                GOLDSTAR                                                            </option>
                                            <option id='prov' value="GRUNDIG">
                                                GRUNDIG                                                            </option>
                                            <option id='prov' value="HENER">
                                                HENER                                                            </option>
                                            <option id='prov' value="HIARES">
                                                HIARES                                                            </option>
                                            <option id='prov' value="HIFISON">
                                                HIFISON                                                            </option>
                                            <option id='prov' value="HISPANOFIL">
                                                HISPANOFIL                                                            </option>
                                            <option id='prov' value="ICE">
                                                ICE                                                            </option>
                                            <option id='prov' value="Idatel Networks S.L.">
                                                Idatel Networks S.L.                                                            </option>
                                            <option id='prov' value="INEM">
                                                INEM                                                            </option>
                                            <option id='prov' value="INFO ARANDA">
                                                INFO ARANDA                                                            </option>
                                            <option id='prov' value="IVIVA">
                                                IVIVA                                                            </option>
                                            <option id='prov' value="JCYL">
                                                JCYL                                                            </option>
                                            <option id='prov' value="JCYL-SOFICAS">
                                                JCYL-SOFICAS                                                            </option>
                                            <option id='prov' value="JM">
                                                JM                                                            </option>
                                            <option id='prov' value="JUNTA CASTILLA Y LEON">
                                                JUNTA CASTILLA Y LEON                                                            </option>
                                            <option id='prov' value="LABTEC">
                                                LABTEC                                                            </option>
                                            <option id='prov' value="LEISTER">
                                                LEISTER                                                            </option>
                                            <option id='prov' value="LIBRER">
                                                LIBRER                                                            </option>
                                            <option id='prov' value="LUCAS-N">
                                                LUCAS-N                                                            </option>
                                            <option id='prov' value="LUIS BONILLA">
                                                LUIS BONILLA                                                            </option>
                                            <option id='prov' value="MACASVER(APP)">
                                                MACASVER(APP)                                                            </option>
                                            <option id='prov' value="MAGISTERIO SCALA">
                                                MAGISTERIO SCALA                                                            </option>
                                            <option id='prov' value="MARE NOSTRUM">
                                                MARE NOSTRUM                                                            </option>
                                            <option id='prov' value="MASTECH">
                                                MASTECH                                                            </option>
                                            <option id='prov' value="MC GRAW HILL">
                                                MC GRAW HILL                                                            </option>
                                            <option id='prov' value="MEC">
                                                MEC                                                            </option>
                                            <option id='prov' value="MEDIAMARK">
                                                MEDIAMARK                                                            </option>
                                            <option id='prov' value="MICROSOFT">
                                                MICROSOFT                                                            </option>
                                            <option id='prov' value="MISCO">
                                                MISCO                                                            </option>
                                            <option id='prov' value="MORAL CAYUELA">
                                                MORAL CAYUELA                                                            </option>
                                            <option id='prov' value="MTO EDUCACION NACIONAL">
                                                MTO EDUCACION NACIONAL                                                            </option>
                                            <option id='prov' value="NEXT-FOR">
                                                NEXT-FOR                                                            </option>
                                            <option id='prov' value="NOVOTEST">
                                                NOVOTEST                                                            </option>
                                            <option id='prov' value="O.SAISS">
                                                O.SAISS                                                            </option>
                                            <option id='prov' value="OFIMAQ">
                                                OFIMAQ                                                            </option>
                                            <option id='prov' value="OFISERVICE">
                                                OFISERVICE                                                            </option>
                                            <option id='prov' value="ORACLE">
                                                ORACLE                                                            </option>
                                            <option id='prov' value="PANTEC">
                                                PANTEC                                                            </option>
                                            <option id='prov' value="PATINALIA">
                                                PATINALIA                                                            </option>
                                            <option id='prov' value="PCE GROUP">
                                                PCE GROUP                                                            </option>
                                            <option id='prov' value="PHILIPS">
                                                PHILIPS                                                            </option>
                                            <option id='prov' value="PIRELLI">
                                                PIRELLI                                                            </option>
                                            <option id='prov' value="PREVENTION WORLD">
                                                PREVENTION WORLD                                                            </option>
                                            <option id='prov' value="PRODEL SA (MEGA)">
                                                PRODEL SA (MEGA)                                                            </option>
                                            <option id='prov' value="PRODUCCION ENOSA REALIZACI">
                                                PRODUCCION ENOSA REALIZACI                                                            </option>
                                            <option id='prov' value="PROMAX">
                                                PROMAX                                                            </option>
                                            <option id='prov' value="RA">
                                                RA                                                            </option>
                                            <option id='prov' value="RADIOLA">
                                                RADIOLA                                                            </option>
                                            <option id='prov' value="RANKING.SL">
                                                RANKING.SL                                                            </option>
                                            <option id='prov' value="RED.ES                   ">
                                                RED.ES                                                                               </option>
                                            <option id='prov' value="REDCOON ELECTRONIC TRADE S. L.">
                                                REDCOON ELECTRONIC TRADE S. L.                                                            </option>
                                            <option id='prov' value="REGEM SISTE  MECMS">
                                                REGEM SISTE  MECMS                                                            </option>
                                            <option id='prov' value="REGINO FRANCO">
                                                REGINO FRANCO                                                            </option>
                                            <option id='prov' value="ROYCON">
                                                ROYCON                                                            </option>
                                            <option id='prov' value="S.L.M. SUM DEPORTIVOS DOS P ARROS">
                                                S.L.M. SUM DEPORTIVOS DOS P ARROS                                                            </option>
                                            <option id='prov' value="SACAI, SA">
                                                SACAI, SA                                                            </option>
                                            <option id='prov' value="SAGITRON">
                                                SAGITRON                                                            </option>
                                            <option id='prov' value="SAMSUNG">
                                                SAMSUNG                                                            </option>
                                            <option id='prov' value="SANCHA">
                                                SANCHA                                                            </option>
                                            <option id='prov' value="SANDOVAL EDICIONES">
                                                SANDOVAL EDICIONES                                                            </option>
                                            <option id='prov' value="SCHNEIDER ELECTRIC">
                                                SCHNEIDER ELECTRIC                                                            </option>
                                            <option id='prov' value="SET POINT">
                                                SET POINT                                                            </option>
                                            <option id='prov' value="SICERONT">
                                                SICERONT                                                            </option>
                                            <option id='prov' value="SIDAC">
                                                SIDAC                                                            </option>
                                            <option id='prov' value="SIEMENS">
                                                SIEMENS                                                            </option>
                                            <option id='prov' value="SOFT WAREHOUSE">
                                                SOFT WAREHOUSE                                                            </option>
                                            <option id='prov' value="SOFTELECT">
                                                SOFTELECT                                                            </option>
                                            <option id='prov' value="SOGERESA">
                                                SOGERESA                                                            </option>
                                            <option id='prov' value="SPORT GARRIDO">
                                                SPORT GARRIDO                                                            </option>
                                            <option id='prov' value="STEINEL">
                                                STEINEL                                                            </option>
                                            <option id='prov' value="SUNSHINE (ALECOP)">
                                                SUNSHINE (ALECOP)                                                            </option>
                                            <option id='prov' value="TARGA">
                                                TARGA                                                            </option>
                                            <option id='prov' value="TECNOLOG">
                                                TECNOLOG                                                            </option>
                                            <option id='prov' value="TELEVES">
                                                TELEVES                                                            </option>
                                            <option id='prov' value="UNED">
                                                UNED                                                            </option>
                                            <option id='prov' value="URENDE (VALLADOLID)">
                                                URENDE (VALLADOLID)                                                            </option>
                                            <option id='prov' value="VIDRIERA ARANDINA">
                                                VIDRIERA ARANDINA                                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">

                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='f_alta'/>f_alta=   
                                        <input class='form-control tex' placeholder='aaaa-mm-dd' type='text' name='f_alta'/>
                                    </div>       
                                    <div class="form-group">

                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='f_baja'/>f_baja=   
                                        <input class='form-control tex' placeholder='aaaa-mm-dd' type='text' name='f_baja'/>
                                    </div>
                                    <div class="form-group">

                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='dept'/>dept=                                                       
                                        <select name='tdep' class="form-control">
                                            <option id='sel' value="sel">- Seleccione departamento -</option>
                                            <option id='dept' value="">
                                            </option>
                                            <option id='dept' value="ADM">
                                                ADM                                                            </option>
                                            <option id='dept' value="AFD">
                                                AFD                                                            </option>
                                            <option id='dept' value="BIB">
                                                BIB                                                            </option>
                                            <option id='dept' value="CEN">
                                                CEN                                                            </option>
                                            <option id='dept' value="CON">
                                                CON                                                            </option>
                                            <option id='dept' value="CU-FOL">
                                                CU-FOL                                                            </option>
                                            <option id='dept' value="DIB">
                                                DIB                                                            </option>
                                            <option id='dept' value="ECEN">
                                                ECEN                                                            </option>
                                            <option id='dept' value="ELE">
                                                ELE                                                            </option>
                                            <option id='dept' value="FOL">
                                                FOL                                                            </option>
                                            <option id='dept' value="FYQ">
                                                FYQ                                                            </option>
                                            <option id='dept' value="GEH">
                                                GEH                                                            </option>
                                            <option id='dept' value="INF                   ">
                                                INF                                                                               </option>
                                            <option id='dept' value="ISI">
                                                ISI                                                            </option>
                                            <option id='dept' value="JEF">
                                                JEF                                                            </option>
                                            <option id='dept' value="MAT">
                                                MAT                                                            </option>
                                            <option id='dept' value="ORI">
                                                ORI                                                            </option>
                                            <option id='dept' value="PDS">
                                                PDS                                                            </option>
                                            <option id='dept' value="QFD">
                                                QFD                                                            </option>
                                            <option id='dept' value="SEC">
                                                SEC                                                            </option>
                                            <option id='dept' value="TEC">
                                                TEC                                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">

                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='sala'/>sala=                                                       
                                        <select name='tsala' class="form-control">
                                            <option id='sel' value="sel">- Seleccione sala -</option>
                                            <option id='sala' value="">
                                            </option>
                                            <option id='sala' value="001">
                                                001                                                            </option>
                                            <option id='sala' value="002">
                                                002                                                            </option>
                                            <option id='sala' value="003">
                                                003                                                            </option>
                                            <option id='sala' value="004">
                                                004                                                            </option>
                                            <option id='sala' value="005">
                                                005                                                            </option>
                                            <option id='sala' value="006">
                                                006                                                            </option>
                                            <option id='sala' value="007">
                                                007                                                            </option>
                                            <option id='sala' value="008">
                                                008                                                            </option>
                                            <option id='sala' value="009">
                                                009                                                            </option>
                                            <option id='sala' value="011">
                                                011                                                            </option>
                                            <option id='sala' value="012">
                                                012                                                            </option>
                                            <option id='sala' value="013">
                                                013                                                            </option>
                                            <option id='sala' value="014">
                                                014                                                            </option>
                                            <option id='sala' value="016">
                                                016                                                            </option>
                                            <option id='sala' value="018">
                                                018                                                            </option>
                                            <option id='sala' value="019">
                                                019                                                            </option>
                                            <option id='sala' value="020">
                                                020                                                            </option>
                                            <option id='sala' value="022">
                                                022                                                            </option>
                                            <option id='sala' value="024">
                                                024                                                            </option>
                                            <option id='sala' value="026">
                                                026                                                            </option>
                                            <option id='sala' value="028">
                                                028                                                            </option>
                                            <option id='sala' value="101                                      ">
                                                101                                                                                                  </option>
                                            <option id='sala' value="102">
                                                102                                                            </option>
                                            <option id='sala' value="103">
                                                103                                                            </option>
                                            <option id='sala' value="104">
                                                104                                                            </option>
                                            <option id='sala' value="105">
                                                105                                                            </option>
                                            <option id='sala' value="106">
                                                106                                                            </option>
                                            <option id='sala' value="106b">
                                                106b                                                            </option>
                                            <option id='sala' value="107                                      ">
                                                107                                                                                                  </option>
                                            <option id='sala' value="109">
                                                109                                                            </option>
                                            <option id='sala' value="111">
                                                111                                                            </option>
                                            <option id='sala' value="201">
                                                201                                                            </option>
                                            <option id='sala' value="201b">
                                                201b                                                            </option>
                                            <option id='sala' value="202">
                                                202                                                            </option>
                                            <option id='sala' value="203">
                                                203                                                            </option>
                                            <option id='sala' value="204">
                                                204                                                            </option>
                                            <option id='sala' value="205">
                                                205                                                            </option>
                                            <option id='sala' value="206">
                                                206                                                            </option>
                                            <option id='sala' value="207">
                                                207                                                            </option>
                                            <option id='sala' value="208">
                                                208                                                            </option>
                                            <option id='sala' value="209">
                                                209                                                            </option>
                                            <option id='sala' value="301">
                                                301                                                            </option>
                                            <option id='sala' value="304">
                                                304                                                            </option>
                                            <option id='sala' value="305">
                                                305                                                            </option>
                                            <option id='sala' value="306">
                                                306                                                            </option>
                                            <option id='sala' value="307">
                                                307                                                            </option>
                                            <option id='sala' value="308                   ">
                                                308                                                                               </option>
                                            <option id='sala' value="309">
                                                309                                                            </option>
                                            <option id='sala' value="310">
                                                310                                                            </option>
                                            <option id='sala' value="311">
                                                311                                                            </option>
                                            <option id='sala' value="311b">
                                                311b                                                            </option>
                                            <option id='sala' value="ALM">
                                                ALM                                                            </option>
                                            <option id='sala' value="Hall">
                                                Hall                                                            </option>
                                            <option id='sala' value="MICHELIN">
                                                MICHELIN                                                            </option>
                                            <option id='sala' value="MONTECILLO">
                                                MONTECILLO                                                            </option>
                                            <option id='sala' value="PABELLON">
                                                PABELLON                                                            </option>
                                            <option id='sala' value="PAS000">
                                                PAS000                                                            </option>
                                            <option id='sala' value="PAS100">
                                                PAS100                                                            </option>
                                            <option id='sala' value="PAS200">
                                                PAS200                                                            </option>
                                            <option id='sala' value="PAS300">
                                                PAS300                                                            </option>
                                            <option id='sala' value="PASILLO">
                                                PASILLO                                                            </option>
                                            <option id='sala' value="PISCINA">
                                                PISCINA                                                            </option>
                                            <option id='sala' value="PRINCIPE">
                                                PRINCIPE                                                            </option>
                                            <option id='sala' value="SUM">
                                                SUM                                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='cuentagest'/>cuentagest=                                                        
                                        <select class="form-control seltab" name='tcg'>
                                            <option id='sel' value="sel">- Seleccione Cuenta Gesti&oacute;n -</option>
                                            <option id='cg' value="0">
                                                0 - Sin Cuenta de Gestion                                                            </option>
                                            <option id='cg' value="201">
                                                201 - REP. Y CONS. EDIFICIOS Y OTRAS CONSTRUCCIONES                                                            </option>
                                            <option id='cg' value="202">
                                                202 - REP. Y CONS. MAQUINARIA, INSTALACIONES Y UTILLAJE                                                            </option>
                                            <option id='cg' value="204">
                                                204 - REP. Y CONS. MOBILIARIO Y ENSERE                                                            </option>
                                            <option id='cg' value="205">
                                                205 - REP. Y CONS. EQUIPOS INFORM                                                            </option>
                                            <option id='cg' value="206">
                                                206 - MATERIAL DE OFICINA                                                            </option>
                                            <option id='cg' value="207">
                                                207 - MOBILIARIO Y EQUIPO                                                            </option>
                                            <option id='cg' value="208">
                                                208 - SUMINISTROS                                                            </option>
                                            <option id='cg' value="209">
                                                209 - COMUNICACIONES                                                            </option>
                                            <option id='cg' value="210">
                                                210 - TRANSPORTES                                                            </option>
                                            <option id='cg' value="212">
                                                212 - GASTOS DIVERSOS                                                            </option>
                                            <option id='cg' value="213">
                                                213 - TRABAJOS REALIZADOS POR OTRAS EMPRESAS                                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">

                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='obs'/>obs like 
                                        <input class='form-control tex' placeholder='Admite comodines %, &' type='text' name='obs'/>
                                    </div>
                                    <div class="form-group">

                                        <input class='form-check-input' type='checkbox' name='columnaw[]' value='Tipo'/>Tipo=                                                        
                                        <select class="form-control seltab" name='ttipo'>
                                            <option id='sel' value="sel">- Seleccione tipo -</option>
                                            <option id='tipo' value="EQ">
                                                EQ                                                            </option>
                                            <option id='tipo' value="HE">
                                                HE                                                            </option>
                                            <option id='tipo' value="MA">
                                                MA                                                            </option>
                                            <option id='tipo' value="MD">
                                                MD                                                            </option>
                                            <option id='tipo' value="MO">
                                                MO                                                            </option>
                                            <option id='tipo' value="SO">
                                                SO                                                            </option>
                                        </select>
                                    </div>  

                                </td>



                            </tr>
                        </table>
                    </div>
                    <input id="hidd" type="hidden" name="hidden" value="">
                    <input id="submit" type="submit" value="Hacer consulta" /><br />
                </form>
            </div>
        </div>



    </article>




</section>

<?php

include_once 'plantilla/intranetfooter.php';
?>
   