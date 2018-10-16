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



                                <td>
                                    <input class='check' type='checkbox' name='columna[]' value='id'>id<br/><input class='check' type='checkbox' name='columna[]' value='Id_old'>Id_old<br/><input class='check' type='checkbox' name='columna[]' value='cod_barras'>cod_barras<br/><input class='check' type='checkbox' name='columna[]' value='uds'>uds<br/><input class='check' type='checkbox' name='columna[]' value='nserie'>nserie<br/><input class='check' type='checkbox' name='columna[]' value='elemento'>elemento<br/><input class='check' type='checkbox' name='columna[]' value='desc'>desc<br/><input class='check' type='checkbox' name='columna[]' value='prov'>prov<br/><input class='check' type='checkbox' name='columna[]' value='f_alta'>f_alta<br/><input class='check' type='checkbox' name='columna[]' value='f_baja'>f_baja<br/><input class='check' type='checkbox' name='columna[]' value='dept'>dept<br/><input class='check' type='checkbox' name='columna[]' value='sala'>sala<br/><input class='check' type='checkbox' name='columna[]' value='cuentagest'>cuentagest<br/><input class='check' type='checkbox' name='columna[]' value='obs'>obs<br/><input class='check' type='checkbox' name='columna[]' value='Tipo'>Tipo<br/><input class='check' type='checkbox' name='columna[]' value='Factura'>Factura<br/>                                        
                                </td>
                                <td>

<!--
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


-->

                                </td>

                                <!--
                                <td>
                                    <input class='check' type='checkbox' name='columna[]' value='id'>id<br/><input class='check' type='checkbox' name='columna[]' value='Id_old'>Id_old<br/><input class='check' type='checkbox' name='columna[]' value='cod_barras'>cod_barras<br/><input class='check' type='checkbox' name='columna[]' value='uds'>uds<br/><input class='check' type='checkbox' name='columna[]' value='nserie'>nserie<br/><input class='check' type='checkbox' name='columna[]' value='elemento'>elemento<br/><input class='check' type='checkbox' name='columna[]' value='desc'>desc<br/><input class='check' type='checkbox' name='columna[]' value='prov'>prov<br/><input class='check' type='checkbox' name='columna[]' value='f_alta'>f_alta<br/><input class='check' type='checkbox' name='columna[]' value='f_baja'>f_baja<br/><input class='check' type='checkbox' name='columna[]' value='dept'>dept<br/><input class='check' type='checkbox' name='columna[]' value='sala'>sala<br/><input class='check' type='checkbox' name='columna[]' value='cuentagest'>cuentagest<br/><input class='check' type='checkbox' name='columna[]' value='obs'>obs<br/><input class='check' type='checkbox' name='columna[]' value='Tipo'>Tipo<br/><input class='check' type='checkbox' name='columna[]' value='Factura'>Factura<br/>                                        
                                </td>
                                -->




                                <td width="450px">
                                    <input class='check' type='checkbox' name='columnaw[]' value='cod_barras'/>cod_barras=   <input class='tex' type='text' name='cod_barras'/><br/><input class='check' type='checkbox' name='columnaw[]' value='uds'/>uds=   <input class='tex' type='text' name='uds'/><br/><input class='check' type='checkbox' name='columnaw[]' value='nserie'/>nserie=   <input class='tex' type='text' name='nserie'/><br/><input class='check' type='checkbox' name='columnaw[]' value='elemento'/>elemento like <input class='tex' placeholder='Admite comodines %, &' type='text' name='elemento'/><br/><input class='check' type='checkbox' name='columnaw[]' value='desc'/>desc like <input class='tex' placeholder='Admite comodines %, &' type='text' name='desc'/><br/><input class='check' type='checkbox' name='columnaw[]' value='prov'/>prov=                                                        <select class="seltab" name='tprov'>
                                        <option name='sel' value="sel">- Seleccione proveedor -</option>
                                        <option name='prov' value="">
                                        </option>
                                        <option name='prov' value="1024 LOW EMISSION">
                                            1024 LOW EMISSION                                                            </option>
                                        <option name='prov' value="3E">
                                            3E                                                            </option>
                                        <option name='prov' value="3M">
                                            3M                                                            </option>
                                        <option name='prov' value="ABROTES">
                                            ABROTES                                                            </option>
                                        <option name='prov' value="ACEROCHA">
                                            ACEROCHA                                                            </option>
                                        <option name='prov' value="ALCATEL">
                                            ALCATEL                                                            </option>
                                        <option name='prov' value="ALECOP">
                                            ALECOP                                                            </option>
                                        <option name='prov' value="ALPA COPIADORAS">
                                            ALPA COPIADORAS                                                            </option>
                                        <option name='prov' value="ANCORA AUDIOVISUAL S.A. BARCELONA">
                                            ANCORA AUDIOVISUAL S.A. BARCELONA                                                            </option>
                                        <option name='prov' value="ANTIGUO">
                                            ANTIGUO                                                            </option>
                                        <option name='prov' value="AOC">
                                            AOC                                                            </option>
                                        <option name='prov' value="AUDIOLUZ">
                                            AUDIOLUZ                                                            </option>
                                        <option name='prov' value="BALLESTEROS">
                                            BALLESTEROS                                                            </option>
                                        <option name='prov' value="BAZAR CANARIAS">
                                            BAZAR CANARIAS                                                            </option>
                                        <option name='prov' value="BBC">
                                            BBC                                                            </option>
                                        <option name='prov' value="BIBLIOTECA">
                                            BIBLIOTECA                                                            </option>
                                        <option name='prov' value="BLAS-TONI">
                                            BLAS-TONI                                                            </option>
                                        <option name='prov' value="BOAR">
                                            BOAR                                                            </option>
                                        <option name='prov' value="C-SYSTEM">
                                            C-SYSTEM                                                            </option>
                                        <option name='prov' value="C.PORRAS PASAMONTES">
                                            C.PORRAS PASAMONTES                                                            </option>
                                        <option name='prov' value="CACCO">
                                            CACCO                                                            </option>
                                        <option name='prov' value="CANON SISTEMAS DE OFICINA CANON">
                                            CANON SISTEMAS DE OFICINA CANON                                                            </option>
                                        <option name='prov' value="CARLIN ARANDA">
                                            CARLIN ARANDA                                                            </option>
                                        <option name='prov' value="CASA MANOLO">
                                            CASA MANOLO                                                            </option>
                                        <option name='prov' value="CENTRO">
                                            CENTRO                                                            </option>
                                        <option name='prov' value="CINCO D">
                                            CINCO D                                                            </option>
                                        <option name='prov' value="CIRILO MART">
                                            CIRILO MART                                                            </option>
                                        <option name='prov' value="CISS">
                                            CISS                                                            </option>
                                        <option name='prov' value="COCINA ECON">
                                            COCINA ECON                                                            </option>
                                        <option name='prov' value="CODISA">
                                            CODISA                                                            </option>
                                        <option name='prov' value="COMPAS 21">
                                            COMPAS 21                                                            </option>
                                        <option name='prov' value="COPIADORAS DE ARANDA">
                                            COPIADORAS DE ARANDA                                                            </option>
                                        <option name='prov' value="COPIADOS DEL CFIE">
                                            COPIADOS DEL CFIE                                                            </option>
                                        <option name='prov' value="CORTE INGLES">
                                            CORTE INGLES                                                            </option>
                                        <option name='prov' value="CREATUR TOOLS">
                                            CREATUR TOOLS                                                            </option>
                                        <option name='prov' value="CTX">
                                            CTX                                                            </option>
                                        <option name='prov' value="CYL-EL CORTE INGLES">
                                            CYL-EL CORTE INGLES                                                            </option>
                                        <option name='prov' value="DANISOFT">
                                            DANISOFT                                                            </option>
                                        <option name='prov' value="DECATHLON">
                                            DECATHLON                                                            </option>
                                        <option name='prov' value="DEMESTRES">
                                            DEMESTRES                                                            </option>
                                        <option name='prov' value="DEPORTES MALPASO (ZONA SPORT)">
                                            DEPORTES MALPASO (ZONA SPORT)                                                            </option>
                                        <option name='prov' value="DIDACIENCIA">
                                            DIDACIENCIA                                                            </option>
                                        <option name='prov' value="DIDACTRONICA">
                                            DIDACTRONICA                                                            </option>
                                        <option name='prov' value="DISTESA">
                                            DISTESA                                                            </option>
                                        <option name='prov' value="DIVIGAR">
                                            DIVIGAR                                                            </option>
                                        <option name='prov' value="DNA CONSULTORES">
                                            DNA CONSULTORES                                                            </option>
                                        <option name='prov' value="DPTO ADM">
                                            DPTO ADM                                                            </option>
                                        <option name='prov' value="DREMEL">
                                            DREMEL                                                            </option>
                                        <option name='prov' value="EDUCTRADE">
                                            EDUCTRADE                                                            </option>
                                        <option name='prov' value="EL SECRETARIO">
                                            EL SECRETARIO                                                            </option>
                                        <option name='prov' value="ELECTROSON">
                                            ELECTROSON                                                            </option>
                                        <option name='prov' value="EMA">
                                            EMA                                                            </option>
                                        <option name='prov' value="ENOSA">
                                            ENOSA                                                            </option>
                                        <option name='prov' value="EUROCIENCIA">
                                            EUROCIENCIA                                                            </option>
                                        <option name='prov' value="EXPERT">
                                            EXPERT                                                            </option>
                                        <option name='prov' value="FCI">
                                            FCI                                                            </option>
                                        <option name='prov' value="FEB">
                                            FEB                                                            </option>
                                        <option name='prov' value="FERRETER">
                                            FERRETER                                                            </option>
                                        <option name='prov' value="FLUKE">
                                            FLUKE                                                            </option>
                                        <option name='prov' value="FOR- INFO">
                                            FOR- INFO                                                            </option>
                                        <option name='prov' value="FORMACION 3000 INFORMATICA">
                                            FORMACION 3000 INFORMATICA                                                            </option>
                                        <option name='prov' value="FUJITSU">
                                            FUJITSU                                                            </option>
                                        <option name='prov' value="GAS CASTILLA Y LE">
                                            GAS CASTILLA Y LE                                                            </option>
                                        <option name='prov' value="GLAXO">
                                            GLAXO                                                            </option>
                                        <option name='prov' value="GOLDSTAR">
                                            GOLDSTAR                                                            </option>
                                        <option name='prov' value="GRUNDIG">
                                            GRUNDIG                                                            </option>
                                        <option name='prov' value="HENER">
                                            HENER                                                            </option>
                                        <option name='prov' value="HIARES">
                                            HIARES                                                            </option>
                                        <option name='prov' value="HIFISON">
                                            HIFISON                                                            </option>
                                        <option name='prov' value="HISPANOFIL">
                                            HISPANOFIL                                                            </option>
                                        <option name='prov' value="ICE">
                                            ICE                                                            </option>
                                        <option name='prov' value="Idatel Networks S.L.">
                                            Idatel Networks S.L.                                                            </option>
                                        <option name='prov' value="INEM">
                                            INEM                                                            </option>
                                        <option name='prov' value="INFO ARANDA">
                                            INFO ARANDA                                                            </option>
                                        <option name='prov' value="IVIVA">
                                            IVIVA                                                            </option>
                                        <option name='prov' value="JCYL">
                                            JCYL                                                            </option>
                                        <option name='prov' value="JCYL-SOFICAS">
                                            JCYL-SOFICAS                                                            </option>
                                        <option name='prov' value="JM">
                                            JM                                                            </option>
                                        <option name='prov' value="JUNTA CASTILLA Y LEON">
                                            JUNTA CASTILLA Y LEON                                                            </option>
                                        <option name='prov' value="LABTEC">
                                            LABTEC                                                            </option>
                                        <option name='prov' value="LEISTER">
                                            LEISTER                                                            </option>
                                        <option name='prov' value="LIBRER">
                                            LIBRER                                                            </option>
                                        <option name='prov' value="LUCAS-N">
                                            LUCAS-N                                                            </option>
                                        <option name='prov' value="LUIS BONILLA">
                                            LUIS BONILLA                                                            </option>
                                        <option name='prov' value="MACASVER(APP)">
                                            MACASVER(APP)                                                            </option>
                                        <option name='prov' value="MAGISTERIO SCALA">
                                            MAGISTERIO SCALA                                                            </option>
                                        <option name='prov' value="MARE NOSTRUM">
                                            MARE NOSTRUM                                                            </option>
                                        <option name='prov' value="MASTECH">
                                            MASTECH                                                            </option>
                                        <option name='prov' value="MC GRAW HILL">
                                            MC GRAW HILL                                                            </option>
                                        <option name='prov' value="MEC">
                                            MEC                                                            </option>
                                        <option name='prov' value="MEDIAMARK">
                                            MEDIAMARK                                                            </option>
                                        <option name='prov' value="MICROSOFT">
                                            MICROSOFT                                                            </option>
                                        <option name='prov' value="MISCO">
                                            MISCO                                                            </option>
                                        <option name='prov' value="MORAL CAYUELA">
                                            MORAL CAYUELA                                                            </option>
                                        <option name='prov' value="MTO EDUCACION NACIONAL">
                                            MTO EDUCACION NACIONAL                                                            </option>
                                        <option name='prov' value="NEXT-FOR">
                                            NEXT-FOR                                                            </option>
                                        <option name='prov' value="NOVOTEST">
                                            NOVOTEST                                                            </option>
                                        <option name='prov' value="O.SAISS">
                                            O.SAISS                                                            </option>
                                        <option name='prov' value="OFIMAQ">
                                            OFIMAQ                                                            </option>
                                        <option name='prov' value="OFISERVICE">
                                            OFISERVICE                                                            </option>
                                        <option name='prov' value="ORACLE">
                                            ORACLE                                                            </option>
                                        <option name='prov' value="PANTEC">
                                            PANTEC                                                            </option>
                                        <option name='prov' value="PATINALIA">
                                            PATINALIA                                                            </option>
                                        <option name='prov' value="PCE GROUP">
                                            PCE GROUP                                                            </option>
                                        <option name='prov' value="PHILIPS">
                                            PHILIPS                                                            </option>
                                        <option name='prov' value="PIRELLI">
                                            PIRELLI                                                            </option>
                                        <option name='prov' value="PREVENTION WORLD">
                                            PREVENTION WORLD                                                            </option>
                                        <option name='prov' value="PRODEL SA (MEGA)">
                                            PRODEL SA (MEGA)                                                            </option>
                                        <option name='prov' value="PRODUCCION ENOSA REALIZACI">
                                            PRODUCCION ENOSA REALIZACI                                                            </option>
                                        <option name='prov' value="PROMAX">
                                            PROMAX                                                            </option>
                                        <option name='prov' value="RA">
                                            RA                                                            </option>
                                        <option name='prov' value="RADIOLA">
                                            RADIOLA                                                            </option>
                                        <option name='prov' value="RANKING.SL">
                                            RANKING.SL                                                            </option>
                                        <option name='prov' value="RED.ES                   ">
                                            RED.ES                                                                               </option>
                                        <option name='prov' value="REDCOON ELECTRONIC TRADE S. L.">
                                            REDCOON ELECTRONIC TRADE S. L.                                                            </option>
                                        <option name='prov' value="REGEM SISTE  MECMS">
                                            REGEM SISTE  MECMS                                                            </option>
                                        <option name='prov' value="REGINO FRANCO">
                                            REGINO FRANCO                                                            </option>
                                        <option name='prov' value="ROYCON">
                                            ROYCON                                                            </option>
                                        <option name='prov' value="S.L.M. SUM DEPORTIVOS DOS P ARROS">
                                            S.L.M. SUM DEPORTIVOS DOS P ARROS                                                            </option>
                                        <option name='prov' value="SACAI, SA">
                                            SACAI, SA                                                            </option>
                                        <option name='prov' value="SAGITRON">
                                            SAGITRON                                                            </option>
                                        <option name='prov' value="SAMSUNG">
                                            SAMSUNG                                                            </option>
                                        <option name='prov' value="SANCHA">
                                            SANCHA                                                            </option>
                                        <option name='prov' value="SANDOVAL EDICIONES">
                                            SANDOVAL EDICIONES                                                            </option>
                                        <option name='prov' value="SCHNEIDER ELECTRIC">
                                            SCHNEIDER ELECTRIC                                                            </option>
                                        <option name='prov' value="SET POINT">
                                            SET POINT                                                            </option>
                                        <option name='prov' value="SICERONT">
                                            SICERONT                                                            </option>
                                        <option name='prov' value="SIDAC">
                                            SIDAC                                                            </option>
                                        <option name='prov' value="SIEMENS">
                                            SIEMENS                                                            </option>
                                        <option name='prov' value="SOFT WAREHOUSE">
                                            SOFT WAREHOUSE                                                            </option>
                                        <option name='prov' value="SOFTELECT">
                                            SOFTELECT                                                            </option>
                                        <option name='prov' value="SOGERESA">
                                            SOGERESA                                                            </option>
                                        <option name='prov' value="SPORT GARRIDO">
                                            SPORT GARRIDO                                                            </option>
                                        <option name='prov' value="STEINEL">
                                            STEINEL                                                            </option>
                                        <option name='prov' value="SUNSHINE (ALECOP)">
                                            SUNSHINE (ALECOP)                                                            </option>
                                        <option name='prov' value="TARGA">
                                            TARGA                                                            </option>
                                        <option name='prov' value="TECNOLOG">
                                            TECNOLOG                                                            </option>
                                        <option name='prov' value="TELEVES">
                                            TELEVES                                                            </option>
                                        <option name='prov' value="UNED">
                                            UNED                                                            </option>
                                        <option name='prov' value="URENDE (VALLADOLID)">
                                            URENDE (VALLADOLID)                                                            </option>
                                        <option name='prov' value="VIDRIERA ARANDINA">
                                            VIDRIERA ARANDINA                                                            </option>
                                    </select>
                                    <br /><input class='check' type='checkbox' name='columnaw[]' value='f_alta'/>f_alta=   <input class='tex' placeholder='aaaa-mm-dd' type='text' name='f_alta'/><br/><input class='check' type='checkbox' name='columnaw[]' value='f_baja'/>f_baja=   <input class='tex' placeholder='aaaa-mm-dd' type='text' name='f_baja'/><br/><input class='check' type='checkbox' name='columnaw[]' value='dept'/>dept=                                                       <select name='tdep'>
                                        <option name='sel' value="sel">- Seleccione departamento -</option>
                                        <option name='dept' value="">
                                        </option>
                                        <option name='dept' value="ADM">
                                            ADM                                                            </option>
                                        <option name='dept' value="AFD">
                                            AFD                                                            </option>
                                        <option name='dept' value="BIB">
                                            BIB                                                            </option>
                                        <option name='dept' value="CEN">
                                            CEN                                                            </option>
                                        <option name='dept' value="CON">
                                            CON                                                            </option>
                                        <option name='dept' value="CU-FOL">
                                            CU-FOL                                                            </option>
                                        <option name='dept' value="DIB">
                                            DIB                                                            </option>
                                        <option name='dept' value="ECEN">
                                            ECEN                                                            </option>
                                        <option name='dept' value="ELE">
                                            ELE                                                            </option>
                                        <option name='dept' value="FOL">
                                            FOL                                                            </option>
                                        <option name='dept' value="FYQ">
                                            FYQ                                                            </option>
                                        <option name='dept' value="GEH">
                                            GEH                                                            </option>
                                        <option name='dept' value="INF                   ">
                                            INF                                                                               </option>
                                        <option name='dept' value="ISI">
                                            ISI                                                            </option>
                                        <option name='dept' value="JEF">
                                            JEF                                                            </option>
                                        <option name='dept' value="MAT">
                                            MAT                                                            </option>
                                        <option name='dept' value="ORI">
                                            ORI                                                            </option>
                                        <option name='dept' value="PDS">
                                            PDS                                                            </option>
                                        <option name='dept' value="QFD">
                                            QFD                                                            </option>
                                        <option name='dept' value="SEC">
                                            SEC                                                            </option>
                                        <option name='dept' value="TEC">
                                            TEC                                                            </option>
                                    </select>
                                    <br /><input class='check' type='checkbox' name='columnaw[]' value='sala'/>sala=                                                       <select name='tsala'>
                                        <option name='sel' value="sel">- Seleccione sala -</option>
                                        <option name='sala' value="">
                                        </option>
                                        <option name='sala' value="001">
                                            001                                                            </option>
                                        <option name='sala' value="002">
                                            002                                                            </option>
                                        <option name='sala' value="003">
                                            003                                                            </option>
                                        <option name='sala' value="004">
                                            004                                                            </option>
                                        <option name='sala' value="005">
                                            005                                                            </option>
                                        <option name='sala' value="006">
                                            006                                                            </option>
                                        <option name='sala' value="007">
                                            007                                                            </option>
                                        <option name='sala' value="008">
                                            008                                                            </option>
                                        <option name='sala' value="009">
                                            009                                                            </option>
                                        <option name='sala' value="011">
                                            011                                                            </option>
                                        <option name='sala' value="012">
                                            012                                                            </option>
                                        <option name='sala' value="013">
                                            013                                                            </option>
                                        <option name='sala' value="014">
                                            014                                                            </option>
                                        <option name='sala' value="016">
                                            016                                                            </option>
                                        <option name='sala' value="018">
                                            018                                                            </option>
                                        <option name='sala' value="019">
                                            019                                                            </option>
                                        <option name='sala' value="020">
                                            020                                                            </option>
                                        <option name='sala' value="022">
                                            022                                                            </option>
                                        <option name='sala' value="024">
                                            024                                                            </option>
                                        <option name='sala' value="026">
                                            026                                                            </option>
                                        <option name='sala' value="028">
                                            028                                                            </option>
                                        <option name='sala' value="101                                      ">
                                            101                                                                                                  </option>
                                        <option name='sala' value="102">
                                            102                                                            </option>
                                        <option name='sala' value="103">
                                            103                                                            </option>
                                        <option name='sala' value="104">
                                            104                                                            </option>
                                        <option name='sala' value="105">
                                            105                                                            </option>
                                        <option name='sala' value="106">
                                            106                                                            </option>
                                        <option name='sala' value="106b">
                                            106b                                                            </option>
                                        <option name='sala' value="107                                      ">
                                            107                                                                                                  </option>
                                        <option name='sala' value="109">
                                            109                                                            </option>
                                        <option name='sala' value="111">
                                            111                                                            </option>
                                        <option name='sala' value="201">
                                            201                                                            </option>
                                        <option name='sala' value="201b">
                                            201b                                                            </option>
                                        <option name='sala' value="202">
                                            202                                                            </option>
                                        <option name='sala' value="203">
                                            203                                                            </option>
                                        <option name='sala' value="204">
                                            204                                                            </option>
                                        <option name='sala' value="205">
                                            205                                                            </option>
                                        <option name='sala' value="206">
                                            206                                                            </option>
                                        <option name='sala' value="207">
                                            207                                                            </option>
                                        <option name='sala' value="208">
                                            208                                                            </option>
                                        <option name='sala' value="209">
                                            209                                                            </option>
                                        <option name='sala' value="301">
                                            301                                                            </option>
                                        <option name='sala' value="304">
                                            304                                                            </option>
                                        <option name='sala' value="305">
                                            305                                                            </option>
                                        <option name='sala' value="306">
                                            306                                                            </option>
                                        <option name='sala' value="307">
                                            307                                                            </option>
                                        <option name='sala' value="308                   ">
                                            308                                                                               </option>
                                        <option name='sala' value="309">
                                            309                                                            </option>
                                        <option name='sala' value="310">
                                            310                                                            </option>
                                        <option name='sala' value="311">
                                            311                                                            </option>
                                        <option name='sala' value="311b">
                                            311b                                                            </option>
                                        <option name='sala' value="ALM">
                                            ALM                                                            </option>
                                        <option name='sala' value="Hall">
                                            Hall                                                            </option>
                                        <option name='sala' value="MICHELIN">
                                            MICHELIN                                                            </option>
                                        <option name='sala' value="MONTECILLO">
                                            MONTECILLO                                                            </option>
                                        <option name='sala' value="PABELLON">
                                            PABELLON                                                            </option>
                                        <option name='sala' value="PAS000">
                                            PAS000                                                            </option>
                                        <option name='sala' value="PAS100">
                                            PAS100                                                            </option>
                                        <option name='sala' value="PAS200">
                                            PAS200                                                            </option>
                                        <option name='sala' value="PAS300">
                                            PAS300                                                            </option>
                                        <option name='sala' value="PASILLO">
                                            PASILLO                                                            </option>
                                        <option name='sala' value="PISCINA">
                                            PISCINA                                                            </option>
                                        <option name='sala' value="PRINCIPE">
                                            PRINCIPE                                                            </option>
                                        <option name='sala' value="SUM">
                                            SUM                                                            </option>
                                    </select>
                                    <br /><input class='check' type='checkbox' name='columnaw[]' value='cuentagest'/>cuentagest=                                                        <select class="seltab" name='tcg'>
                                        <option name='sel' value="sel">- Seleccione Cuenta Gesti&oacute;n -</option>
                                        <option name='cg' value="0">
                                            0 - Sin Cuenta de Gestion                                                            </option>
                                        <option name='cg' value="201">
                                            201 - REP. Y CONS. EDIFICIOS Y OTRAS CONSTRUCCIONES                                                            </option>
                                        <option name='cg' value="202">
                                            202 - REP. Y CONS. MAQUINARIA, INSTALACIONES Y UTILLAJE                                                            </option>
                                        <option name='cg' value="204">
                                            204 - REP. Y CONS. MOBILIARIO Y ENSERE                                                            </option>
                                        <option name='cg' value="205">
                                            205 - REP. Y CONS. EQUIPOS INFORM                                                            </option>
                                        <option name='cg' value="206">
                                            206 - MATERIAL DE OFICINA                                                            </option>
                                        <option name='cg' value="207">
                                            207 - MOBILIARIO Y EQUIPO                                                            </option>
                                        <option name='cg' value="208">
                                            208 - SUMINISTROS                                                            </option>
                                        <option name='cg' value="209">
                                            209 - COMUNICACIONES                                                            </option>
                                        <option name='cg' value="210">
                                            210 - TRANSPORTES                                                            </option>
                                        <option name='cg' value="212">
                                            212 - GASTOS DIVERSOS                                                            </option>
                                        <option name='cg' value="213">
                                            213 - TRABAJOS REALIZADOS POR OTRAS EMPRESAS                                                            </option>
                                    </select>
                                    <br /><input class='check' type='checkbox' name='columnaw[]' value='obs'/>obs like <input class='tex' placeholder='Admite comodines %, &' type='text' name='obs'/><br/><input class='check' type='checkbox' name='columnaw[]' value='Tipo'/>Tipo=                                                        <select class="seltab" name='ttipo'>
                                        <option name='sel' value="sel">- Seleccione tipo -</option>
                                        <option name='tipo' value="EQ">
                                            EQ                                                            </option>
                                        <option name='tipo' value="HE">
                                            HE                                                            </option>
                                        <option name='tipo' value="MA">
                                            MA                                                            </option>
                                        <option name='tipo' value="MD">
                                            MD                                                            </option>
                                        <option name='tipo' value="MO">
                                            MO                                                            </option>
                                        <option name='tipo' value="SO">
                                            SO                                                            </option>
                                    </select>
                                    <br />	
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
   