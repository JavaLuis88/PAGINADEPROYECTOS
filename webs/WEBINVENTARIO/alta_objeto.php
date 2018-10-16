<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Alta de objetos";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Sección de alta de objetos en el inventario";
$_PARAMETERS['keywords'] = "Inventario, Altas, Objetos";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";
$_PARAMETERS['clasemenualtas'] = "active";
$_PARAMETERS['clasemenualtasobjeto'] = "active";
//$_PARAMETERS['clasemenualtastipo'] = "active";
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
            <h2 class="text-center"><strong class="border">Alta de objetos</strong></h2>
            
        </header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <form action="validad.php" method="post" autocomplete="off" class="form-horizontal">
                        <div class="form-group">
                            <label  class="col-xs-2 control-label">Proveedor</label>
                            <div class="col-xs-10">
                                <select name="Prove" title="Proveedor" class="form-control miestilo" required>
                                    <option value="">Elige Proveedor </option>
                                    <!--<option title="" value=""> 


                                    </option>-->
                                    <option title="1024 LOW EMISSION" value="1024 LOW EMISSION"> 

                                        1024 LOW EMISSION 
                                    </option>
                                    <option title="3E" value="3E"> 

                                        3E 
                                    </option>
                                    <option title="3M" value="3M"> 

                                        3M 
                                    </option>
                                    <option title="ABROTES" value="ABROTES"> 

                                        ABROTES 
                                    </option>
                                    <option title="ACEROCHA" value="ACEROCHA"> 

                                        ACEROCHA 
                                    </option>
                                    <option title="ALCATEL" value="ALCATEL"> 

                                        ALCATEL 
                                    </option>
                                    <option title="ALECOP" value="ALECOP"> 

                                        ALECOP 
                                    </option>
                                    <option title="ALPA COPIADORAS" value="ALPA COPIADORAS"> 

                                        ALPA COPIADORAS 
                                    </option>
                                    <option title="ANCORA AUDIOVISUAL S.A. BARCELONA" value="ANCORA AUDIOVISUAL S.A. BARCELONA"> 

                                        ANCORA AUDIOVISUAL S.A. BARCELONA 
                                    </option>
                                    <option title="ANTIGUO" value="ANTIGUO"> 

                                        ANTIGUO 
                                    </option>
                                    <option title="AOC" value="AOC"> 

                                        AOC 
                                    </option>
                                    <option title="AUDIOLUZ" value="AUDIOLUZ"> 

                                        AUDIOLUZ 
                                    </option>
                                    <option title="BALLESTEROS" value="BALLESTEROS"> 

                                        BALLESTEROS 
                                    </option>
                                    <option title="BAZAR CANARIAS" value="BAZAR CANARIAS"> 

                                        BAZAR CANARIAS 
                                    </option>
                                    <option title="BBC" value="BBC"> 

                                        BBC 
                                    </option>
                                    <option title="BIBLIOTECA" value="BIBLIOTECA"> 

                                        BIBLIOTECA 
                                    </option>
                                    <option title="BLAS-TONI" value="BLAS-TONI"> 

                                        BLAS-TONI 
                                    </option>
                                    <option title="BOAR" value="BOAR"> 

                                        BOAR 
                                    </option>
                                    <option title="C-SYSTEM" value="C-SYSTEM"> 

                                        C-SYSTEM 
                                    </option>
                                    <option title="C.PORRAS PASAMONTES" value="C.PORRAS PASAMONTES"> 

                                        C.PORRAS PASAMONTES 
                                    </option>
                                    <option title="CACCO" value="CACCO"> 

                                        CACCO 
                                    </option>
                                    <option title="CANON SISTEMAS DE OFICINA CANON" value="CANON SISTEMAS DE OFICINA CANON"> 

                                        CANON SISTEMAS DE OFICINA CANON 
                                    </option>
                                    <option title="CARLIN ARANDA" value="CARLIN ARANDA"> 

                                        CARLIN ARANDA 
                                    </option>
                                    <option title="CASA MANOLO" value="CASA MANOLO"> 

                                        CASA MANOLO 
                                    </option>
                                    <option title="CENTRO" value="CENTRO"> 

                                        CENTRO 
                                    </option>
                                    <option title="CINCO D" value="CINCO D"> 

                                        CINCO D 
                                    </option>
                                    <option title="CIRILO MART" value="CIRILO MART"> 

                                        CIRILO MART 
                                    </option>
                                    <option title="CISS" value="CISS"> 

                                        CISS 
                                    </option>
                                    <option title="COCINA ECON" value="COCINA ECON"> 

                                        COCINA ECON 
                                    </option>
                                    <option title="CODISA" value="CODISA"> 

                                        CODISA 
                                    </option>
                                    <option title="COMPAS 21" value="COMPAS 21"> 

                                        COMPAS 21 
                                    </option>
                                    <option title="COPIADORAS DE ARANDA" value="COPIADORAS DE ARANDA"> 

                                        COPIADORAS DE ARANDA 
                                    </option>
                                    <option title="COPIADOS DEL CFIE" value="COPIADOS DEL CFIE"> 

                                        COPIADOS DEL CFIE 
                                    </option>
                                    <option title="CORTE INGLES" value="CORTE INGLES"> 

                                        CORTE INGLES 
                                    </option>
                                    <option title="CREATUR TOOLS" value="CREATUR TOOLS"> 

                                        CREATUR TOOLS 
                                    </option>
                                    <option title="CTX" value="CTX"> 

                                        CTX 
                                    </option>
                                    <option title="CYL-EL CORTE INGLES" value="CYL-EL CORTE INGLES"> 

                                        CYL-EL CORTE INGLES 
                                    </option>
                                    <option title="DANISOFT" value="DANISOFT"> 

                                        DANISOFT 
                                    </option>
                                    <option title="DECATHLON" value="DECATHLON"> 

                                        DECATHLON 
                                    </option>
                                    <option title="DEMESTRES" value="DEMESTRES"> 

                                        DEMESTRES 
                                    </option>
                                    <option title="DEPORTES MALPASO (ZONA SPORT)" value="DEPORTES MALPASO (ZONA SPORT)"> 

                                        DEPORTES MALPASO (ZONA SPORT) 
                                    </option>
                                    <option title="DIDACIENCIA" value="DIDACIENCIA"> 

                                        DIDACIENCIA 
                                    </option>
                                    <option title="DIDACTRONICA" value="DIDACTRONICA"> 

                                        DIDACTRONICA 
                                    </option>
                                    <option title="DISTESA" value="DISTESA"> 

                                        DISTESA 
                                    </option>
                                    <option title="DIVIGAR" value="DIVIGAR"> 

                                        DIVIGAR 
                                    </option>
                                    <option title="DNA CONSULTORES" value="DNA CONSULTORES"> 

                                        DNA CONSULTORES 
                                    </option>
                                    <option title="DPTO ADM" value="DPTO ADM"> 

                                        DPTO ADM 
                                    </option>
                                    <option title="DREMEL" value="DREMEL"> 

                                        DREMEL 
                                    </option>
                                    <option title="EDUCTRADE" value="EDUCTRADE"> 

                                        EDUCTRADE 
                                    </option>
                                    <option title="EL SECRETARIO" value="EL SECRETARIO"> 

                                        EL SECRETARIO 
                                    </option>
                                    <option title="ELECTROSON" value="ELECTROSON"> 

                                        ELECTROSON 
                                    </option>
                                    <option title="EMA" value="EMA"> 

                                        EMA 
                                    </option>
                                    <option title="ENOSA" value="ENOSA"> 

                                        ENOSA 
                                    </option>
                                    <option title="EUROCIENCIA" value="EUROCIENCIA"> 

                                        EUROCIENCIA 
                                    </option>
                                    <option title="EXPERT" value="EXPERT"> 

                                        EXPERT 
                                    </option>
                                    <option title="FCI" value="FCI"> 

                                        FCI 
                                    </option>
                                    <option title="FEB" value="FEB"> 

                                        FEB 
                                    </option>
                                    <option title="FERRETER" value="FERRETER"> 

                                        FERRETER 
                                    </option>
                                    <option title="FLUKE" value="FLUKE"> 

                                        FLUKE 
                                    </option>
                                    <option title="FOR- INFO" value="FOR- INFO"> 

                                        FOR- INFO 
                                    </option>
                                    <option title="FORMACION 3000 INFORMATICA" value="FORMACION 3000 INFORMATICA"> 

                                        FORMACION 3000 INFORMATICA 
                                    </option>
                                    <option title="FUJITSU" value="FUJITSU"> 

                                        FUJITSU 
                                    </option>
                                    <option title="GAS CASTILLA Y LE" value="GAS CASTILLA Y LE"> 

                                        GAS CASTILLA Y LE 
                                    </option>
                                    <option title="GLAXO" value="GLAXO"> 

                                        GLAXO 
                                    </option>
                                    <option title="GOLDSTAR" value="GOLDSTAR"> 

                                        GOLDSTAR 
                                    </option>
                                    <option title="GRUNDIG" value="GRUNDIG"> 

                                        GRUNDIG 
                                    </option>
                                    <option title="HENER" value="HENER"> 

                                        HENER 
                                    </option>
                                    <option title="HIARES" value="HIARES"> 

                                        HIARES 
                                    </option>
                                    <option title="HIFISON" value="HIFISON"> 

                                        HIFISON 
                                    </option>
                                    <option title="HISPANOFIL" value="HISPANOFIL"> 

                                        HISPANOFIL 
                                    </option>
                                    <option title="ICE" value="ICE"> 

                                        ICE 
                                    </option>
                                    <option title="IDATEL NETWORKS, S.L." value="IDATEL NETWORKS, S.L."> 

                                        IDATEL NETWORKS, S.L. 
                                    </option>
                                    <option title="INEM" value="INEM"> 

                                        INEM 
                                    </option>
                                    <option title="INFO ARANDA" value="INFO ARANDA"> 

                                        INFO ARANDA 
                                    </option>
                                    <option title="IVIVA" value="IVIVA"> 

                                        IVIVA 
                                    </option>
                                    <option title="JCYL" value="JCYL"> 

                                        JCYL 
                                    </option>
                                    <option title="JCYL-SOFICAS" value="JCYL-SOFICAS"> 

                                        JCYL-SOFICAS 
                                    </option>
                                    <option title="JM" value="JM"> 

                                        JM 
                                    </option>
                                    <option title="JUNTA CASTILLA Y LEON" value="JUNTA CASTILLA Y LEON"> 

                                        JUNTA CASTILLA Y LEON 
                                    </option>
                                    <option title="LABTEC" value="LABTEC"> 

                                        LABTEC 
                                    </option>
                                    <option title="LEISTER" value="LEISTER"> 

                                        LEISTER 
                                    </option>
                                    <option title="LIBRER" value="LIBRER"> 

                                        LIBRER 
                                    </option>
                                    <option title="LUCAS-N" value="LUCAS-N"> 

                                        LUCAS-N 
                                    </option>
                                    <option title="LUIS BONILLA" value="LUIS BONILLA"> 

                                        LUIS BONILLA 
                                    </option>
                                    <option title="MACASVER(APP)" value="MACASVER(APP)"> 

                                        MACASVER(APP) 
                                    </option>
                                    <option title="MAGISTERIO SCALA" value="MAGISTERIO SCALA"> 

                                        MAGISTERIO SCALA 
                                    </option>
                                    <option title="MARE NOSTRUM" value="MARE NOSTRUM"> 

                                        MARE NOSTRUM 
                                    </option>
                                    <option title="MASTECH" value="MASTECH"> 

                                        MASTECH 
                                    </option>
                                    <option title="MC GRAW HILL" value="MC GRAW HILL"> 

                                        MC GRAW HILL 
                                    </option>
                                    <option title="MEC" value="MEC"> 

                                        MEC 
                                    </option>
                                    <option title="MEDIAMARK" value="MEDIAMARK"> 

                                        MEDIAMARK 
                                    </option>
                                    <option title="MICROSOFT" value="MICROSOFT"> 

                                        MICROSOFT 
                                    </option>
                                    <option title="MISCO" value="MISCO"> 

                                        MISCO 
                                    </option>
                                    <option title="MORAL CAYUELA" value="MORAL CAYUELA"> 

                                        MORAL CAYUELA 
                                    </option>
                                    <option title="MTO EDUCACION NACIONAL" value="MTO EDUCACION NACIONAL"> 

                                        MTO EDUCACION NACIONAL 
                                    </option>
                                    <option title="NEXT-FOR" value="NEXT-FOR"> 

                                        NEXT-FOR 
                                    </option>
                                    <option title="NOVOTEST" value="NOVOTEST"> 

                                        NOVOTEST 
                                    </option>
                                    <option title="O.SAISS" value="O.SAISS"> 

                                        O.SAISS 
                                    </option>
                                    <option title="OFIMAQ" value="OFIMAQ"> 

                                        OFIMAQ 
                                    </option>
                                    <option title="OFISERVICE" value="OFISERVICE"> 

                                        OFISERVICE 
                                    </option>
                                    <option title="ORACLE" value="ORACLE"> 

                                        ORACLE 
                                    </option>
                                    <option title="PANTEC" value="PANTEC"> 

                                        PANTEC 
                                    </option>
                                    <option title="PATINALIA" value="PATINALIA"> 

                                        PATINALIA 
                                    </option>
                                    <option title="PCE GROUP" value="PCE GROUP"> 

                                        PCE GROUP 
                                    </option>
                                    <option title="PHILIPS" value="PHILIPS"> 

                                        PHILIPS 
                                    </option>
                                    <option title="PIRELLI" value="PIRELLI"> 

                                        PIRELLI 
                                    </option>
                                    <option title="PREVENTION WORLD" value="PREVENTION WORLD"> 

                                        PREVENTION WORLD 
                                    </option>
                                    <option title="PRODEL SA (MEGA)" value="PRODEL SA (MEGA)"> 

                                        PRODEL SA (MEGA) 
                                    </option>
                                    <option title="PRODUCCION ENOSA REALIZACI" value="PRODUCCION ENOSA REALIZACI"> 

                                        PRODUCCION ENOSA REALIZACI 
                                    </option>
                                    <option title="PROMAX" value="PROMAX"> 

                                        PROMAX 
                                    </option>
                                    <option title="RA" value="RA"> 

                                        RA 
                                    </option>
                                    <option title="RADIOLA" value="RADIOLA"> 

                                        RADIOLA 
                                    </option>
                                    <option title="RANKING.SL" value="RANKING.SL"> 

                                        RANKING.SL 
                                    </option>
                                    <option title="RED.ES" value="RED.ES"> 

                                        RED.ES 
                                    </option>
                                    <option title="REDCOON ELECTRONIC TRADE S. L." value="REDCOON ELECTRONIC TRADE S. L."> 

                                        REDCOON ELECTRONIC TRADE S. L. 
                                    </option>
                                    <option title="REGEM SISTE  MECMS" value="REGEM SISTE  MECMS"> 

                                        REGEM SISTE  MECMS 
                                    </option>
                                    <option title="REGINO FRANCO" value="REGINO FRANCO"> 

                                        REGINO FRANCO 
                                    </option>
                                    <option title="ROYCON" value="ROYCON"> 

                                        ROYCON 
                                    </option>
                                    <option title="S.L.M. SUM DEPORTIVOS DOS P ARROS" value="S.L.M. SUM DEPORTIVOS DOS P ARROS"> 

                                        S.L.M. SUM DEPORTIVOS DOS P ARROS 
                                    </option>
                                    <option title="SACAI, SA" value="SACAI, SA"> 

                                        SACAI, SA 
                                    </option>
                                    <option title="SAGITRON" value="SAGITRON"> 

                                        SAGITRON 
                                    </option>
                                    <option title="SAMSUNG" value="SAMSUNG"> 

                                        SAMSUNG 
                                    </option>
                                    <option title="SANCHA" value="SANCHA"> 

                                        SANCHA 
                                    </option>
                                    <option title="SANDOVAL EDICIONES" value="SANDOVAL EDICIONES"> 

                                        SANDOVAL EDICIONES 
                                    </option>
                                    <option title="SCHNEIDER ELECTRIC" value="SCHNEIDER ELECTRIC"> 

                                        SCHNEIDER ELECTRIC 
                                    </option>
                                    <option title="SET POINT" value="SET POINT"> 

                                        SET POINT 
                                    </option>
                                    <option title="SICERONT" value="SICERONT"> 

                                        SICERONT 
                                    </option>
                                    <option title="SIDAC" value="SIDAC"> 

                                        SIDAC 
                                    </option>
                                    <option title="SIEMENS" value="SIEMENS"> 

                                        SIEMENS 
                                    </option>
                                    <option title="SOFT WAREHOUSE" value="SOFT WAREHOUSE"> 

                                        SOFT WAREHOUSE 
                                    </option>
                                    <option title="SOFTELECT" value="SOFTELECT"> 

                                        SOFTELECT 
                                    </option>
                                    <option title="SOGERESA" value="SOGERESA"> 

                                        SOGERESA 
                                    </option>
                                    <option title="SPORT GARRIDO" value="SPORT GARRIDO"> 

                                        SPORT GARRIDO 
                                    </option>
                                    <option title="STEINEL" value="STEINEL"> 

                                        STEINEL 
                                    </option>
                                    <option title="SUNSHINE (ALECOP)" value="SUNSHINE (ALECOP)"> 

                                        SUNSHINE (ALECOP) 
                                    </option>
                                    <option title="TARGA" value="TARGA"> 

                                        TARGA 
                                    </option>
                                    <option title="TECNOLOG" value="TECNOLOG"> 

                                        TECNOLOG 
                                    </option>
                                    <option title="TELEVES" value="TELEVES"> 

                                        TELEVES 
                                    </option>
                                    <option title="UNED" value="UNED"> 

                                        UNED 
                                    </option>
                                    <option title="URENDE (VALLADOLID)" value="URENDE (VALLADOLID)"> 

                                        URENDE (VALLADOLID) 
                                    </option>
                                    <option title="VIDRIERA ARANDINA" value="VIDRIERA ARANDINA"> 

                                        VIDRIERA ARANDINA 
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-xs-2 control-label">Departamento</label>
                            <div class="col-xs-10">
                                <select name="Departamento" title="Departamento" class="form-control miestilo" required>
                                    <option value="">Elige Departamento </option>
                                    <!--<option title="" value=""> 

                                    </option>-->
                                    <option title="ADM" value="ADM"> 
                                        ADM 
                                    </option>
                                    <option title="AFD" value="AFD"> 
                                        AFD 
                                    </option>
                                    <option title="BIB" value="BIB"> 
                                        BIB 
                                    </option>
                                    <option title="CEN" value="CEN"> 
                                        CEN 
                                    </option>
                                    <option title="CON" value="CON"> 
                                        CON 
                                    </option>
                                    <option title="CU-FOL" value="CU-FOL"> 
                                        CU-FOL 
                                    </option>
                                    <option title="DIB" value="DIB"> 
                                        DIB 
                                    </option>
                                    <option title="ECEN" value="ECEN"> 
                                        ECEN 
                                    </option>
                                    <option title="ELE" value="ELE"> 
                                        ELE 
                                    </option>
                                    <option title="FOL" value="FOL"> 
                                        FOL 
                                    </option>
                                    <option title="FYQ" value="FYQ"> 
                                        FYQ 
                                    </option>
                                    <option title="GEH" value="GEH"> 
                                        GEH 
                                    </option>
                                    <option title="INF                   " value="INF                   "> 
                                        INF                    
                                    </option>
                                    <option title="ISI" value="ISI"> 
                                        ISI 
                                    </option>
                                    <option title="JEF" value="JEF"> 
                                        JEF 
                                    </option>
                                    <option title="MAT" value="MAT"> 
                                        MAT 
                                    </option>
                                    <option title="ORI" value="ORI"> 
                                        ORI 
                                    </option>
                                    <option title="PDS" value="PDS"> 
                                        PDS 
                                    </option>
                                    <option title="QFD" value="QFD"> 
                                        QFD 
                                    </option>
                                    <option title="SEC" value="SEC"> 
                                        SEC 
                                    </option>
                                    <option title="TEC" value="TEC"> 
                                        TEC 
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-2 control-label">Sala</label>
                            <div class="col-xs-10">
                                <select name="Sala" title="Sala" class="form-control miestilo" required>
                                    <option value="">Elige Sala </option>
                                    <!--<option title="" value=""> 


                                    </option>-->
                                    <option title="001" value="001"> 

                                        001 
                                    </option>
                                    <option title="002" value="002"> 

                                        002 
                                    </option>
                                    <option title="003" value="003"> 

                                        003 
                                    </option>
                                    <option title="004" value="004"> 

                                        004 
                                    </option>
                                    <option title="005" value="005"> 

                                        005 
                                    </option>
                                    <option title="006" value="006"> 

                                        006 
                                    </option>
                                    <option title="007" value="007"> 

                                        007 
                                    </option>
                                    <option title="008" value="008"> 

                                        008 
                                    </option>
                                    <option title="009" value="009"> 

                                        009 
                                    </option>
                                    <option title="011" value="011"> 

                                        011 
                                    </option>
                                    <option title="012" value="012"> 

                                        012 
                                    </option>
                                    <option title="013" value="013"> 

                                        013 
                                    </option>
                                    <option title="014" value="014"> 

                                        014 
                                    </option>
                                    <option title="016" value="016"> 

                                        016 
                                    </option>
                                    <option title="018" value="018"> 

                                        018 
                                    </option>
                                    <option title="019" value="019"> 

                                        019 
                                    </option>
                                    <option title="020" value="020"> 

                                        020 
                                    </option>
                                    <option title="022" value="022"> 

                                        022 
                                    </option>
                                    <option title="024" value="024"> 

                                        024 
                                    </option>
                                    <option title="026" value="026"> 

                                        026 
                                    </option>
                                    <option title="028" value="028"> 

                                        028 
                                    </option>
                                    <option title="101" value="101"> 

                                        101 
                                    </option>
                                    <option title="102" value="102"> 

                                        102 
                                    </option>
                                    <option title="103" value="103"> 

                                        103 
                                    </option>
                                    <option title="104" value="104"> 

                                        104 
                                    </option>
                                    <option title="105" value="105"> 

                                        105 
                                    </option>
                                    <option title="106" value="106"> 

                                        106 
                                    </option>
                                    <option title="106b" value="106b"> 

                                        106b 
                                    </option>
                                    <option title="107" value="107"> 

                                        107 
                                    </option>
                                    <option title="109" value="109"> 

                                        109 
                                    </option>
                                    <option title="111" value="111"> 

                                        111 
                                    </option>
                                    <option title="201" value="201"> 

                                        201 
                                    </option>
                                    <option title="201a" value="201a"> 

                                        201a 
                                    </option>
                                    <option title="201b" value="201b"> 

                                        201b 
                                    </option>
                                    <option title="202" value="202"> 

                                        202 
                                    </option>
                                    <option title="203" value="203"> 

                                        203 
                                    </option>
                                    <option title="204" value="204"> 

                                        204 
                                    </option>
                                    <option title="205" value="205"> 

                                        205 
                                    </option>
                                    <option title="206" value="206"> 

                                        206 
                                    </option>
                                    <option title="207" value="207"> 

                                        207 
                                    </option>
                                    <option title="208" value="208"> 

                                        208 
                                    </option>
                                    <option title="209" value="209"> 

                                        209 
                                    </option>
                                    <option title="301" value="301"> 

                                        301 
                                    </option>
                                    <option title="302" value="302"> 

                                        302 
                                    </option>
                                    <option title="304" value="304"> 

                                        304 
                                    </option>
                                    <option title="305" value="305"> 

                                        305 
                                    </option>
                                    <option title="306" value="306"> 

                                        306 
                                    </option>
                                    <option title="307" value="307"> 

                                        307 
                                    </option>
                                    <option title="308" value="308"> 

                                        308 
                                    </option>
                                    <option title="309" value="309"> 

                                        309 
                                    </option>
                                    <option title="310" value="310"> 

                                        310 
                                    </option>
                                    <option title="311" value="311"> 

                                        311 
                                    </option>
                                    <option title="311b" value="311b"> 

                                        311b 
                                    </option>
                                    <option title="AFD" value="AFD"> 

                                        AFD 
                                    </option>
                                    <option title="ALM" value="ALM"> 

                                        ALM 
                                    </option>
                                    <option title="Hall" value="Hall"> 

                                        Hall 
                                    </option>
                                    <option title="MICHELIN" value="MICHELIN"> 

                                        MICHELIN 
                                    </option>
                                    <option title="MONTECILLO" value="MONTECILLO"> 

                                        MONTECILLO 
                                    </option>
                                    <option title="PABELLON" value="PABELLON"> 

                                        PABELLON 
                                    </option>
                                    <option title="PAS000" value="PAS000"> 

                                        PAS000 
                                    </option>
                                    <option title="PAS100" value="PAS100"> 

                                        PAS100 
                                    </option>
                                    <option title="PAS200" value="PAS200"> 

                                        PAS200 
                                    </option>
                                    <option title="PAS300" value="PAS300"> 

                                        PAS300 
                                    </option>
                                    <option title="PASILLO" value="PASILLO"> 

                                        PASILLO 
                                    </option>
                                    <option title="PISCINA" value="PISCINA"> 

                                        PISCINA 
                                    </option>
                                    <option title="PR" value="PR"> 

                                        PR 
                                    </option>
                                    <option title="PRINCIPE" value="PRINCIPE"> 

                                        PRINCIPE 
                                    </option>
                                    <option title="SUM" value="SUM"> 

                                        SUM 
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-2 control-label">Tipo</label>
                            <div class="col-xs-10">
                                <select name="Tipo" title="Tipo" class="form-control miestilo" required>
                                    <option value="">Elige Tipo </option>
                                    <option title="Equipo                        " value="EQ"> 

                                        Equipo                         
                                    </option>
                                    <option title="Herramientas" value="HE"> 

                                        Herramientas 
                                    </option>
                                    <option title="Material Audivisual" value="MA"> 

                                        Material Audivisual 
                                    </option>
                                    <option title="Material Deportivo            " value="MD"> 

                                        Material Deportivo             
                                    </option>
                                    <option title="Mobiliario                   " value="MO"> 

                                        Mobiliario                    
                                    </option>
                                    <option title="Software" value="SO"> 

                                        Software 
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-2 control-label" >Elemento</label>
                            <div class="col-xs-10">
                                <input type="text" name="Elemento" class="form-control miestilo" title="Elemento" placeholder="Elemento" required pattern="[A-Za-z0-9]{8,16}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-xs-2 control-label">Descripcion</label>
                            <div class="col-xs-10">
                                <textarea name="Descripcion"  rows="2" cols="50" class="form-control miestilo"  placeholder="Escribe una descripcion"></textarea> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-2 control-label">Numserie</label>
                            <div class="col-xs-10">
                                <input type="text" name="Numserie" size="33" class="form-control miestilo" placeholder="Escribe el número de serie" required pattern="[0-9]{8,16}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-2 control-label">Unidades</label>
                            <div class="col-xs-10">
                                <input type="number" name="Unidades" size="33" min="1" max="99" value="1" class="form-control miestilo" placeholder="Escribe el número de unidades" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-xs-2 control-label">Cuenta de gestion</label>
                            <div class="col-xs-10">
                                <select name="Cuenta" title="Cuenta Gestion" class="form-control miestilo" required>
                                    <option value="">Elige la cuenta de gestion  </option>
                                    <option title="0" value="0"> 

                                        0 
                                    </option>
                                    <option title="201" value="201"> 

                                        201 
                                    </option>
                                    <option title="202" value="202"> 

                                        202 
                                    </option>
                                    <option title="204" value="204"> 

                                        204 
                                    </option>
                                    <option title="205" value="205"> 

                                        205 
                                    </option>
                                    <option title="206" value="206"> 

                                        206 
                                    </option>
                                    <option title="207" value="207"> 

                                        207 
                                    </option>
                                    <option title="208" value="208"> 

                                        208 
                                    </option>
                                    <option title="209" value="209"> 

                                        209 
                                    </option>
                                    <option title="210" value="210"> 

                                        210 
                                    </option>
                                    <option title="212" value="212"> 

                                        212 
                                    </option>
                                    <option title="213" value="213"> 

                                        213 
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-xs-2 control-label">Nº Factura</label>
                            <div class="col-xs-10">
                                <input type="text" name="Factura" size="33" class="form-control miestilo" placeholder="Escribe el número de factura" required pattern="[0-9]{8,16}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-2 control-label">Observaciones</label>
                            <div class="col-xs-10">
                                <textarea name="Obse" rows="2" cols="50"  placeholder="Escribe las observaciones" class="form-control miestilo"></textarea>
                            </div>
                        </div>
                        <!--<div class="form-group">-->

                    <!--<input class="btn btn-default" type="submit" style="Position:Absolute; left:75%;"/>-->
                        <!--</div>-->
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
   