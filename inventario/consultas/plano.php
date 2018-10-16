<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="../inventario.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	body {
		background-color: white;
		width: 670px;
		height: 410px;	
	}
	#imagen {
		margin: 0px;
	}
	#imagen img {
		margin: 0px;
	}
	#atras {
		position: fixed;
		top: 0px;
		left: 0px;
		background: #060;
		color: white;
		border: 1px solid black;
		margin: 0px;
		padding: 5px;
		width: 100%;
		cursor: pointer;
		text-align: center;
		z-index:100;
	}
	#atras:hover {
		background: #0F0;
	}
	.habi {
		/*border: 1px solid red;*/
		cursor: pointer;
	}
	#a009 {
		position: absolute;
		top: 678px;
		left: 28px;
		height: 130px;
		width: 136px;
	}
	#a007 {
		position: absolute;
		top: 678px;
		left: 168px;
		height: 130px;
		width: 113px;
	}
	#a005 {
		position: absolute;
		top: 678px;
		left: 285px;
		height: 130px;
		width: 105px;
	}
	#a003 {
		position: absolute;
		top: 678px;
		left: 395px;
		height: 130px;
		width: 77px;
	}
	#a002 {
		position: absolute;
		top: 584px;
		left: 567px;
		height: 33px;
		width: 32px;
	}
	#a011 {
		position: absolute;
		top: 617px;
		left: 31px;
		height: 57px;
		width: 81px;
	}
	#a013 {
		position: absolute;
		top: 428px;
		left: 35px;
		height: 185px;
		width: 175px;
	}
	#a024 {
		position: absolute;
		top: 428px;
		left: 214px;
		height: 118px;
		width: 184px;
	}
	#a026 {
		position: absolute;
		top: 428px;
		left: 404px;
		height: 65px;
		width: 67px;
	}
	#a028 {
		position: absolute;
		top: 497px;
		left: 404px;
		height: 30px;
		width: 67px;
	}
	#a030 {
		position: absolute;
		top: 531px;
		left: 404px;
		height: 82px;
		width: 67px;
	}

	#a004 {
		position: absolute;
		top: 475px;
		left: 531px;
		height: 79px;
		width: 139px;
	}
	#a006 {
		position: absolute;
		top: 436px;
		left: 531px;
		height: 35px;
		width: 35px;
	}
	#a008 {
		position: absolute;
		top: 413px;
		left: 570px;
		height: 58px;
		width: 100px;
	}
	#a010 {
		position: absolute;
		top: 362px;
		left: 531px;
		height: 47px;
		width: 139px;
	}
	#a012 {
		position: absolute;
		top: 299px;
		left: 531px;
		height: 59px;
		width: 139px;
	}
	#a014 {
		position: absolute;
		top: 141px;
		left: 478px;
		height: 154px;
		width: 192px;
	}
	#a016 {
		position: absolute;
		top: 103px;
		left: 272px;
		height: 282px;
		width: 202px;
	}
	#a018 {
		position: absolute;
		top: 195px;
		left: 42px;
		height: 190px;
		width: 226px;
	}
	#a020 {
		position: absolute;
		top: 61px;
		left: 47px;
		height: 130px;
		width: 221px;
	}
	#a022 {
		position: absolute;
		top: 390px;
		left: 39px;
		height: 34px;
		width: 171px;
	}
	#conserjeria {
		position: absolute;
		top: 710px;
		left: 473px;
		height: 98px;
		width: 68px;
	}

	#a111 {
		position: absolute;
		top: 526px;
		left: 29px;
		height: 54px;
		width: 83px;
	}
	#a109 {
		position: absolute;
		top: 584px;
		left: 19px;
		height: 130px;
		width: 145px;
	}
	#a107 {
		position: absolute;
		top: 584px;
		left: 168px;
		height: 130px;
		width: 146px;
	}
	#a105 {
		position: absolute;
		top: 584px;
		left: 319px;
		height: 130px;
		width: 151px;
	}
	#a103 {
		position: absolute;
		top: 588px;
		left: 475px;
		height: 126px;
		width: 195px;
	}
	#a101 {
		position: absolute;
		top: 528px;
		left: 561px;
		height: 58px;
		width: 109px;
	}
	#a102 {
		position: absolute;
		top: 374px;
		left: 531px;
		height: 82px;
		width: 140px;
	}
	#a104 {
		position: absolute;
		top: 220px;
		left: 531px;
		height: 149px;
		width: 140px;
	}
	#a106 {
		position: absolute;
		top: 46px;
		left: 479px;
		height: 169px;
		width: 191px;
	}

	#a209 {
		position: absolute;
		top: 527px;
		left: 37px;
		height: 51px;
		width: 76px;
	}
	#a207 {
		position: absolute;
		top: 582px;
		left: 23px;
		height: 126px;
		width: 145px;
	}
	#a205 {
		position: absolute;
		top: 582px;
		left: 171px;
		height: 126px;
		width: 142px;
	}
	#a203 {
		position: absolute;
		top: 582px;
		left: 317px;
		height: 126px;
		width: 146px;
	}
	#a201b {
		position: absolute;
		top: 582px;
		left: 468px;
		height: 127px;
		width: 66px;
	}
	#a201a {
		position: absolute;
		top: 528px;
		left: 539px;
		height: 180px;
		width: 118px;
	}
	#a202 {
		position: absolute;
		top: 312px;
		left: 523px;
		height: 147px;
		width: 134px;
	}
	#a204 {
		position: absolute;
		top: 278px;
		left: 523px;
		height: 30px;
		width: 91px;
		z-index: 10;
	}
	#a206 {
		position: absolute;
		top: 230px;
		left: 523px;
		height: 78px;
		width: 134px;
		z-index: 5;
	}
	#a208 {
		position: absolute;
		top: 37px;
		left: 471px;
		height: 189px;
		width: 186px;
	}

	#a311 {
		position: absolute;
		top: 520px;
		left: 28px;
		height: 186px;
		width: 165px;
	}
	#a309 {
		position: absolute;
		top: 578px;
		left: 197px;
		height: 128px;
		width: 113px;
	}
	#a307 {
		position: absolute;
		top: 578px;
		left: 316px;
		height: 128px;
		width: 148px;
	}
	#a305 {
		position: absolute;
		top: 585px;
		left: 468px;
		height: 122px;
		width: 194px;
	}
	#a301 {
		position: absolute;
		top: 522px;
		left: 552px;
		height: 58px;
		width: 110px;
	}
	#a302 {
		position: absolute;
		top: 370px;
		left: 525px;
		height: 81px;
		width: 137px;
	}
	#a304 {
		position: absolute;
		top: 301px;
		left: 525px;
		height: 65px;
		width: 137px;
	}
	#a306 {
		position: absolute;
		top: 217px;
		left: 525px;
		height: 80px;
		width: 137px;
	}
	#a308 {
		position: absolute;
		top: 133px;
		left: 525px;
		height: 80px;
		width: 137px;
	}
	#a310 {
		position: absolute;
		top: 22px;
		left: 473px;
		height: 107px;
		width: 188px;
	}

	#a009, #a007, #a005, #a003, #a002, #a011, #a013, #a024, #a026, #a028, #a030, #a004, #a006, #a008, #a010, #a012, #a014, #a016, #a018, #a020, #a022, #conserjeria, #a111, #a109, #a107, #a105, #a103, #a101, #a102, #a104, #a106, #a209, #a207, #a205, #a203, #a201a, #a201b, #a202, #a204, #a206, #a208, #a311, #a309, #a307, #a305, #a301, #a302, #a304, #a306, #a308, #a310 {
		-webkit-transition: background 2s ease;
		-moz-transition: background 2s ease;
		-ms-transition: background 2s ease;
		-o-transition: background 2s ease;
		transition: background 2s ease;
	}
	#a009:hover, #a007:hover, #a005:hover, #a003:hover, #a002:hover, #a011:hover, #a013:hover, #a024:hover, #a026:hover, #a028:hover, #a030:hover, #a004:hover, #a006:hover, #a008:hover, #a010:hover, #a012:hover, #a014:hover, #a016:hover, #a018:hover, #a020:hover, #a022:hover, #conserjeria:hover, #a111:hover, #a109:hover, #a107:hover, #a105:hover, #a103:hover, #a101:hover, #a102:hover, #a104:hover, #a106:hover, #a209:hover, #a207:hover, #a205:hover, #a203:hover, #a201a:hover, #a201b:hover, #a202:hover, #a204:hover, #a206:hover, #a208:hover, #a311:hover, #a309:hover, #a307:hover, #a305:hover, #a301:hover, #a302:hover, #a304:hover, #a306:hover, #a308:hover, #a310:hover {
		background-color: red;
	    opacity: 0.4;
	    -moz-opacity: 0.4;
	    filter: alpha(opacity=40);
	}

</style>

<script type="text/javascript">
	function volver() {
		this.location = "consulta_habitaculo.php";
	}
	function consulta(sala) {
		//alert("ver_habitaculo.php/?sala=" + sala)
		this.location = "ver_habitaculo.php/?sala=" + sala;
	}
</script>
</head>

<body>
<p id="atras" onclick="volver();">Atr&aacute;s</p>
<div id="imagen">
<?php 
	$planta = $_GET['planta'];
	echo '<img width="670px" src="images/planta' . $planta . '.png" />';
	if ($planta == 0) {
		echo '<div id="a009" onclick="consulta(009);" class="habi"></div>';
		echo '<div id="a007" onclick="consulta(007);" class="habi"></div>';
		echo '<div id="a005" onclick="consulta(005);" class="habi"></div>';
		echo '<div id="a003" onclick="consulta(003);" class="habi"></div>';
		echo '<div id="a002" onclick="consulta(002);" class="habi"></div>
			<div id="a011" onclick="consulta(011);" class="habi"></div>
			<div id="a013" onclick="consulta(013);" class="habi"></div>
			<div id="a024" onclick="consulta(024);" class="habi"></div>
			<div id="a026" onclick="consulta(026);" class="habi"></div>
			<div id="a028" onclick="consulta(028);" class="habi"></div>
			<div id="a030" onclick="consulta(030);" class="habi"></div>';
		echo '<div id="a004" onclick="consulta(004);" class="habi"></div>
			<div id="a006" onclick="consulta(006);" class="habi"></div>
			<div id="a008" onclick="consulta(008);" class="habi"></div>
			<div id="a010" onclick="consulta(010);" class="habi"></div>
			<div id="a012" onclick="consulta(012);" class="habi"></div>';
		echo '<div id="a014" onclick="consulta(014);" class="habi"></div>
			<div id="a016" onclick="consulta(016);" class="habi"></div>
			<div id="a018" onclick="consulta(018);" class="habi"></div>
			<div id="a020" onclick="consulta(020);" class="habi"></div>
			<div id="a022" onclick="consulta(022);" class="habi"></div>';
		echo '<div id="conserjeria" onclick="consulta(conserjeria);" class="habi"></div>';
	}
	if ($planta == 1) {
		echo '<div id="a111" onclick="consulta(111);" class="habi"></div>
			<div id="a109" onclick="consulta(109);" class="habi"></div>
			<div id="a107" onclick="consulta(107);" class="habi"></div>
			<div id="a105" onclick="consulta(105);" class="habi"></div>
			<div id="a103" onclick="consulta(103);" class="habi"></div>';
		echo '<div id="a101" onclick="consulta(101);" class="habi"></div>
			<div id="a102" onclick="consulta(102);" class="habi"></div>
			<div id="a104" onclick="consulta(104);" class="habi"></div>
			<div id="a106" onclick="consulta(106);" class="habi"></div>';
	}
	if ($planta == 2) {
		echo '<div id="a209" onclick="consulta(209);" class="habi"></div>
			<div id="a207" onclick="consulta(207);" class="habi"></div>
			<div id="a205" onclick="consulta(205);" class="habi"></div>
			<div id="a203" onclick="consulta(203);" class="habi"></div>
			<div id="a201b" onclick="consulta(\'201b\');" class="habi"></div>';
		echo '<div id="a201a" onclick="consulta(\'201a\');" class="habi"></div>
			<div id="a202" onclick="consulta(202);" class="habi"></div>
			<div id="a204" onclick="consulta(204);" class="habi"></div>
			<div id="a206" onclick="consulta(206);" class="habi"></div>
			<div id="a208" onclick="consulta(208);" class="habi"></div>';
	}
	if ($planta == 3) {
		echo '<div id="a311" onclick="consulta(311);" class="habi"></div>
			<div id="a309" onclick="consulta(309);" class="habi"></div>
			<div id="a307" onclick="consulta(307);" class="habi"></div>
			<div id="a305" onclick="consulta(305);" class="habi"></div>
			<div id="a301" onclick="consulta(301);" class="habi"></div>';
		echo '<div id="a302" onclick="consulta(302);" class="habi"></div>
			<div id="a304" onclick="consulta(304);" class="habi"></div>
			<div id="a306" onclick="consulta(306);" class="habi"></div>
			<div id="a308" onclick="consulta(308);" class="habi"></div>
			<div id="a310" onclick="consulta(310);" class="habi"></div>';
	}
?>
<!--
	<div id="a009" class="habi"></div>
	<div id="a007" class="habi"></div>
	<div id="a005" class="habi"></div>
	<div id="a003" class="habi"></div>
	<div id="a002" class="habi"></div>
	<div id="a011" class="habi"></div>
	<div id="a013" class="habi"></div>
	<div id="a024" class="habi"></div>
	<div id="a026" class="habi"></div>
	<div id="a028" class="habi"></div>
	<div id="a030" class="habi"></div>
-->
</div>

</body>
</html>