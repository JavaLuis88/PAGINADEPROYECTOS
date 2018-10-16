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
//$_PARAMETERS['clasemenuamodificacionestipo'] = "active";
$_PARAMETERS['clasemenuamodificacionesproveedor'] = "active";
//$_PARAMETERS['clasemenuamodificacioneslotes'] = "active";
//$_PARAMETERS['clasemenuamodificacionescodigo'] = "active";
//$_PARAMETERS['clasemenuamoayuda'] = "active";




include_once 'plantilla/intranetheader.php';
?>

<section id="seccionparteintranet">




    <article>
        <header>
            <h2 class="text-center"><strong>Modificar Proveedor</strong></h2>
        </header>
        <div id="contenedor">
       
			
			
            <form method="POST" action="modificar_proveedor.php" class="form-horizontal">
        
			  <div class="container pt-2">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
		
    <div class="form-group">
	
	
	
	
                            <label  class="col-xs-2 control-label">Elija las caracter&iacute;sticas</label>
							
					
							
							
                            <div class="col-xs-10">
							
									    <select class="form-control" id="carac" onchange="selector(this.value)" name='caracteristicas'>
											<option  value="sel">- Seleccione caracter&iacute;stica -</option>
											<option  value="desc">Nombre</option>
											<option  value="cod">CIF</option>

										</select>

							
							</div>
							</div>

    
                
				
				  <div class="form-group">
                            <label  class="col-xs-2 control-label">Escriba la característica</label>
							
					
							
							
                            <div class="col-xs-10">
							<input id="texto" name="cajatexto" class="form-control" required type="text" />


				

							
							</div>
							</div>
				
                
                <input id="hidd" type="hidden" name="hidden" value="">
                    <input id="submit" type="submit" value="Enviar" class="btn btn-info" />
					</div>
					</div>
					</div>
            </form>


            <form method="POST" action="modificar_formulario_proveedor.php" id="formulario" class="d-none">

                <input id="Variable" type="text" name="Varible" value="">

            </form>
			
			<div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
			
            <table id='tabla' class="table mt-2">
			<tr class='bg0'>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>CIF</th>
			</tr><tr class='bg2' style='cursor: pointer;' onclick='clik(1)'><td></td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(2)'><td>1024 LOW EMISSION</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(3)'><td>3E</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(4)'><td>3M</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(5)'><td>ABROTES</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(6)'><td>ACEROCHA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(7)'><td>ALCATEL</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(8)'><td>ALECOP</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(9)'><td>ANCORA AUDIOVISUAL S.A. BARCELONA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(10)'><td>AOC</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(11)'><td>AUDIOLUZ</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(12)'><td>BALLESTEROS</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(13)'><td>BAZAR CANARIAS</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(14)'><td>BBC</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(15)'><td>BIBLIOTECA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(16)'><td>BLAS-TONI</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(17)'><td>BOAR</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(18)'><td>C-SYSTEM</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(19)'><td>C.PORRAS PASAMONTES</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(20)'><td>CACCO</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(21)'><td>CARLIN ARANDA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(22)'><td>CASA MANOLO</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(23)'><td>CENTRO</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(24)'><td>CINCO D</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(25)'><td>CIRILO MART</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(26)'><td>CISS</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(27)'><td>COCINA ECON</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(28)'><td>CODISA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(29)'><td>COMPAS 21</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(30)'><td>COPIADORAS DE ARANDA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(31)'><td>COPIADOS DEL CFIE</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(32)'><td>CORTE INGLES</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(33)'><td>CREATUR TOOLS</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(34)'><td>CTX</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(35)'><td>CYL-EL CORTE INGLES</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(36)'><td>DANISOFT</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(37)'><td>DECATHLON</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(38)'><td>DEMESTRES</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(39)'><td>DEPORTES MALPASO (ZONA SPORT)</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(40)'><td>DIDACIENCIA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(41)'><td>DIDACTRONICA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(42)'><td>DISTESA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(43)'><td>DIVIGAR</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(44)'><td>DNA CONSULTORES</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(45)'><td>DPTO ADM</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(46)'><td>DREMEL</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(47)'><td>EDUCTRADE</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(48)'><td>EL SECRETARIO</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(49)'><td>ELECTROSON</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(50)'><td>EMA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(51)'><td>ENOSA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(52)'><td>EUROCIENCIA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(53)'><td>EXPERT</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(54)'><td>FCI</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(55)'><td>FEB</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(56)'><td>FERRETER</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(57)'><td>FLUKE</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(58)'><td>FOR- INFO</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(59)'><td>FORMACION 3000 INFORMATICA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(60)'><td>FUJITSU</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(61)'><td>GAS CASTILLA Y LE</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(62)'><td>GLAXO</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(63)'><td>GOLDSTAR</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(64)'><td>GRUNDIG</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(65)'><td>HENER</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(66)'><td>HIARES</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(67)'><td>HIFISON</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(68)'><td>HISPANOFIL</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(69)'><td>ICE</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(70)'><td>INEM</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(71)'><td>INFO ARANDA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(72)'><td>IVIVA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(73)'><td>JCYL</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(74)'><td>JCYL-SOFICAS</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(75)'><td>JM</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(76)'><td>JUNTA CASTILLA Y LEON</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(77)'><td>LABTEC</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(78)'><td>LEISTER</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(79)'><td>LIBRER</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(80)'><td>LUCAS-N</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(81)'><td>LUIS BONILLA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(82)'><td>MACASVER(APP)</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(83)'><td>MAGISTERIO SCALA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(84)'><td>MARE NOSTRUM</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(85)'><td>MASTECH</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(86)'><td>MC GRAW HILL</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(87)'><td>MEC</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(88)'><td>MEDIAMARK</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(89)'><td>MICROSOFT</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(90)'><td>MISCO</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(91)'><td>MORAL CAYUELA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(92)'><td>MTO EDUCACION NACIONAL</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(93)'><td>NEXT-FOR</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(94)'><td>NOVOTEST</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(95)'><td>O.SAISS</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(96)'><td>OFIMAQ</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(97)'><td>OFISERVICE</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(98)'><td>ORACLE</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(99)'><td>PANTEC</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(100)'><td>PATINALIA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(101)'><td>PCE GROUP</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(102)'><td>PHILIPS</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(103)'><td>PIRELLI</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(104)'><td>PREVENTION WORLD</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(105)'><td>PRODEL SA (MEGA)</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(106)'><td>PRODUCCION ENOSA REALIZACI</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(107)'><td>PROMAX</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(108)'><td>RA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(109)'><td>RADIOLA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(110)'><td>RANKING.SL</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(111)'><td>RED.ES</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(112)'><td>REDCOON ELECTRONIC TRADE S. L.</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(113)'><td>REGEM SISTE  MECMS</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(114)'><td>REGINO FRANCO</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(115)'><td>ROYCON</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(116)'><td>S.L.M. SUM DEPORTIVOS DOS P ARROS</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(117)'><td>SACAI, SA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(118)'><td>SAGITRON</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(119)'><td>SAMSUNG</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(120)'><td>SANCHA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(121)'><td>SANDOVAL EDICIONES</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(122)'><td>SCHNEIDER ELECTRIC</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(123)'><td>SET POINT</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(124)'><td>SICERONT</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(125)'><td>SIDAC</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(126)'><td>SIEMENS</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(127)'><td>SOFT WAREHOUSE</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(128)'><td>SOFTELECT</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(129)'><td>SOGERESA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(130)'><td>SPORT GARRIDO</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(131)'><td>STEINEL</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(132)'><td>SUNSHINE (ALECOP)</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(133)'><td>TARGA</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(134)'><td>TECNOLOG</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(135)'><td>TELEVES</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(136)'><td>UNED</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(137)'><td>URENDE (VALLADOLID)</td><td></td><td></td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(138)'><td>VIDRIERA ARANDINA</td><td></td><td></td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(140)'><td>ANTIGUO</td><td></td><td>a1</td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(141)'><td>CANON SISTEMAS DE OFICINA CANON</td><td>FOTOCOPIADORAS</td><td>B09405655</td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(142)'><td>ALPA COPIADORAS</td><td>COPIADORAS EN ALQUILER</td><td>B-47403043</td></tr><tr class='bg1' style='cursor: pointer;' onclick='clik(143)'><td>IDATEL NETWORKS, S.L.</td><td></td><td>B47502083</td></tr><tr class='bg2' style='cursor: pointer;' onclick='clik(144)'><td>QQQQQQQQQQQ</td><td>QQQQQQQQQQQQQQ</td><td>QQQQQQQQ</td></tr>
			</table>
		    <!--
			<input type='hidden' name='json' value='{"1":["","",""],"2":["1024 LOW EMISSION","",""],"3":["3E","",""],"4":["3M","",""],"5":["ABROTES","",""],"6":["ACEROCHA","",""],"7":["ALCATEL","",""],"8":["ALECOP","",""],"9":["ANCORA AUDIOVISUAL S.A. BARCELONA","",""],"10":["AOC","",""],"11":["AUDIOLUZ","",""],"12":["BALLESTEROS","",""],"13":["BAZAR CANARIAS","",""],"14":["BBC","",""],"15":["BIBLIOTECA","",""],"16":["BLAS-TONI","",""],"17":["BOAR","",""],"18":["C-SYSTEM","",""],"19":["C.PORRAS PASAMONTES","",""],"20":["CACCO","",""],"21":["CARLIN ARANDA","",""],"22":["CASA MANOLO","",""],"23":["CENTRO","",""],"24":["CINCO D","",""],"25":["CIRILO MART","",""],"26":["CISS","",""],"27":["COCINA ECON","",""],"28":["CODISA","",""],"29":["COMPAS 21","",""],"30":["COPIADORAS DE ARANDA","",""],"31":["COPIADOS DEL CFIE","",""],"32":["CORTE INGLES","",""],"33":["CREATUR TOOLS","",""],"34":["CTX","",""],"35":["CYL-EL CORTE INGLES","",""],"36":["DANISOFT","",""],"37":["DECATHLON","",""],"38":["DEMESTRES","",""],"39":["DEPORTES MALPASO (ZONA SPORT)","",""],"40":["DIDACIENCIA","",""],"41":["DIDACTRONICA","",""],"42":["DISTESA","",""],"43":["DIVIGAR","",""],"44":["DNA CONSULTORES","",""],"45":["DPTO ADM","",""],"46":["DREMEL","",""],"47":["EDUCTRADE","",""],"48":["EL SECRETARIO","",""],"49":["ELECTROSON","",""],"50":["EMA","",""],"51":["ENOSA","",""],"52":["EUROCIENCIA","",""],"53":["EXPERT","",""],"54":["FCI","",""],"55":["FEB","",""],"56":["FERRETER","",""],"57":["FLUKE","",""],"58":["FOR- INFO","",""],"59":["FORMACION 3000 INFORMATICA","",""],"60":["FUJITSU","",""],"61":["GAS CASTILLA Y LE","",""],"62":["GLAXO","",""],"63":["GOLDSTAR","",""],"64":["GRUNDIG","",""],"65":["HENER","",""],"66":["HIARES","",""],"67":["HIFISON","",""],"68":["HISPANOFIL","",""],"69":["ICE","",""],"70":["INEM","",""],"71":["INFO ARANDA","",""],"72":["IVIVA","",""],"73":["JCYL","",""],"74":["JCYL-SOFICAS","",""],"75":["JM","",""],"76":["JUNTA CASTILLA Y LEON","",""],"77":["LABTEC","",""],"78":["LEISTER","",""],"79":["LIBRER","",""],"80":["LUCAS-N","",""],"81":["LUIS BONILLA","",""],"82":["MACASVER(APP)","",""],"83":["MAGISTERIO SCALA","",""],"84":["MARE NOSTRUM","",""],"85":["MASTECH","",""],"86":["MC GRAW HILL","",""],"87":["MEC","",""],"88":["MEDIAMARK","",""],"89":["MICROSOFT","",""],"90":["MISCO","",""],"91":["MORAL CAYUELA","",""],"92":["MTO EDUCACION NACIONAL","",""],"93":["NEXT-FOR","",""],"94":["NOVOTEST","",""],"95":["O.SAISS","",""],"96":["OFIMAQ","",""],"97":["OFISERVICE","",""],"98":["ORACLE","",""],"99":["PANTEC","",""],"100":["PATINALIA","",""],"101":["PCE GROUP","",""],"102":["PHILIPS","",""],"103":["PIRELLI","",""],"104":["PREVENTION WORLD","",""],"105":["PRODEL SA (MEGA)","",""],"106":["PRODUCCION ENOSA REALIZACI","",""],"107":["PROMAX","",""],"108":["RA","",""],"109":["RADIOLA","",""],"110":["RANKING.SL","",""],"111":["RED.ES","",""],"112":["REDCOON ELECTRONIC TRADE S. L.","",""],"113":["REGEM SISTE  MECMS","",""],"114":["REGINO FRANCO","",""],"115":["ROYCON","",""],"116":["S.L.M. SUM DEPORTIVOS DOS P ARROS","",""],"117":["SACAI, SA","",""],"118":["SAGITRON","",""],"119":["SAMSUNG","",""],"120":["SANCHA","",""],"121":["SANDOVAL EDICIONES","",""],"122":["SCHNEIDER ELECTRIC","",""],"123":["SET POINT","",""],"124":["SICERONT","",""],"125":["SIDAC","",""],"126":["SIEMENS","",""],"127":["SOFT WAREHOUSE","",""],"128":["SOFTELECT","",""],"129":["SOGERESA","",""],"130":["SPORT GARRIDO","",""],"131":["STEINEL","",""],"132":["SUNSHINE (ALECOP)","",""],"133":["TARGA","",""],"134":["TECNOLOG","",""],"135":["TELEVES","",""],"136":["UNED","",""],"137":["URENDE (VALLADOLID)","",""],"138":["VIDRIERA ARANDINA","",""],"139":["ANTIGUO","","a1"],"140":["CANON SISTEMAS DE OFICINA CANON","FOTOCOPIADORAS","B09405655"],"141":["ALPA COPIADORAS","COPIADORAS EN ALQUILER","B-47403043"],"142":["IDATEL NETWORKS, S.L.","","B47502083"],"143":["QQQQQQQQQQQ","QQQQQQQQQQQQQQ","QQQQQQQQ"]}' /><input type='hidden' name='param' value='LISTADO POR DESCRIPCIÓN: ' /><input type='hidden' name='aula' value='0' />
-->
		</div>
</div>





    </article>



</section>
<script>
	function clik(id){
		location.href="modificar_formulario_proveedor.php"

	}
</script>
<?php

include_once 'plantilla/intranetfooter.php';
?>
   