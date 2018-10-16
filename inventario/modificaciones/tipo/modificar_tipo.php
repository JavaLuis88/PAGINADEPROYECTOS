<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">
<?php
include '../../funcionesA.php';
$enlace = conectarBD();

?>


<style type="text/css">
	body {
		font-family: verdana;
		color: white;
		margin: 0px;
		padding: 0px;
	}
	#carac {
		width: 200px;
		padding: 5px 0px 5px 5px;
		margin-right: 10px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
	}
	#contenedor input {
		width: 300px;
		height: 26px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
		display: none;
	}
	#contenedor #submit {
		width: 70px;
		height: 30px;
		display: inline;
	}
	#selecttipo, #selectdep {
		width: 200px;
		padding: 5px 0px 5px 5px;
		margin-right: 10px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
	}
	#tabla {
		float: left;
		color: white;
		border: 1px solid white;
		width: 100%;
	}
	#tabla tr {
		border: 1px solid white;
	}
	.bg0 {
		background-color: #030;
		font-size: 11px;
	}
	.bg1 {
		background-color: #060;
		font-size: 10px;
	}
	
	#tr:hover td {
	background-color: red;
	}
	.bg2 {
		font-size: 10px;
	}
	.imprimir {
		float: left;
		background: #060;
		color: white;
		border: 1px solid black;
		margin: 0px;
		padding: 5px;
		width: 98%;
		cursor: pointer;
		text-align: center;
	}
	.imprimir:hover {
		background: #0F0;
	}
	.mano:hover {
		cursor:pointer;
	}
</style>

<head>
<meta charset="utf-8">

</head>
<body>

<div id="contenedor">
<form action="modificar_formulario_tipo.php" method="post" autocomplete="off"  role="form">
<h3>Selecciona el tipo</h3>

      <select name="Tipo" title="Tipo" id="selectdep" required>
   <option value="">Elige Tipo </option>
                	<?php 
						$query = "select Tipo, Nombre from tipos order by Nombre";
						$result = mysqli_query($enlace, $query) or die(mysqli_error());;
						while($row = mysqli_fetch_array($result)){
							?>
							<option title="<?php echo $row["Nombre"]."";?>" value="<?php echo $row["Nombre"]."";?>"> 
							
								<?php echo $row["Nombre"]?> 
                            </option>
						<?php	
						}
					?>
</select>

<input id="submit" type="submit" value="Enviar" />

</div>
</form>


</body>
</html>
