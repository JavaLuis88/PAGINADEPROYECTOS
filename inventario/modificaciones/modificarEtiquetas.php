<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
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
		display: none;
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


<?php 
$enlace = mysqli_connect("localhost", "admininvsc", "admin2013", "inventariosc");
				if($enlace){
					//echo "Conexion exitosa";	//si la conexion fue exitosa nos muestra este mensaje como prueba, despues lo puedes poner comentarios de nuevo: //
				}else{
					die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
				}

$query = "select id,Tipo,sala,dept,cod_barras from objetos ";
						$result = mysqli_query($enlace, $query) or die(mysqli_error());;
						while($row = mysqli_fetch_array($result)){
							
							$codigo_barras = $row[3]." - ".$row[1] ." ".$row[0]." - " .$row[2];
							$clave= $row[0];
							$Sala= $row[2];
														
								 echo " ".$codigo_barras  ; ?> <br>   </br><?php  echo "  ".$row[4];  ?> <br>   </br>  <?php     
								$sql3 = "Update `objetos` set  cod_barras='".$codigo_barras."' where `id`= $row[0] ";
                               mysqli_query($enlace, $sql3 );
												}
					?>
  

<?php
$Fecha = date("Y-m-d H:i:s");
$sql4 = "Insert into movimientos (id, fecha, sala) values (
'".$clave."',
'".$Fecha."',
'".$Sala."')";
$resultado3 = mysqli_query($enlace, $sql4) or die (mysqli_error());;


?>
<html>
<head>
<link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


<div class="container theme-showcase" role="main">
        <div class="jumbotron">
		
		<p><h3> Se han actualizado las etiquetas </h3></p>
		
		</div>
</div>
</body>
</html>