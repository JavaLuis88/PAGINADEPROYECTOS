<?php
include '../../funcionesA.php';
$enlace = conectarBD();

//$Nombre= ($_GET['Nombre']);
//$Abrev= ($_GET['Abrev']); 



//$sql= "Update tipos set Tipo ='".$Abrev."', Nombre='".$Nombre."' where Nombre='".$Nombre."'";
 
$result = mysqli_query($enlace, $sql) or die(mysqli_error());;


/*
$enlace = mysqli_connect("localhost", "admininvsc", "admin2013", "inventariosc");
				if($enlace){
					echo "Conexion exitosa";	//si la conexion fue exitosa nos muestra este mensaje como prueba, despues lo puedes poner comentarios de nuevo: //
				}else{
					die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
				}
*/
$Prove= ($_GET['Prove']);
$Depart= ($_GET['Departamento']); 
$Sala = ($_GET['Sala']);
$Tipo = ($_GET['Tipo']);
$Descripcion = ($_GET['Descripcion']);
$Numserie = ($_GET['Numserie']);
$Unidades = ($_GET['Unidades']);
$Obs = ($_GET['Obs']);
$Cuenta = ($_GET['Cuenta']);
$Factura = ($_GET['Factura']);
$Elemento = ($_GET['Elemento']);
$Salavieja = ($_GET['Salavieja']);
$ID = ($_GET['ID']);
$Fecha =date("Y-m-d");
echo $Prove;




$sql= "UPDATE OBJETOS SET uds='".$Unidades."', nserie ='".$Numserie."', elemento = '".$Elemento."', Tipo = '".$Tipo."', `desc`= '".$Descripcion."', prov= '".$Prove."', dept= '".$Depart."', sala =  '".$Sala."', cuentagest =  '".$Cuenta."', obs = '".$Obs."', Factura =  '".$Factura."' where id=".$ID.";";

$result = mysqli_query($enlace, $sql) or die(mysqli_error());;

$sql2 = "select id from objetos order by id DESC limit 1";
$resultado = mysqli_query($enlace, $sql2) or die (mysqli_error());;

while ($registro = mysqli_fetch_row($resultado)){
       foreach($registro  as $clave){
} 
} 
$codigo_barras = $Depart." - ". $Tipo ." ".$clave." - " . $Sala;

$sql3 = "Update objetos set id_old=".$clave.", cod_barras='".$codigo_barras."' where id=".$clave.";";
$resultado2 = mysqli_query($enlace, $sql3) or die (mysqli_error());;


if($Sala != $Salavieja)
{
$Fecha = date("Y-m-d H:i:s");
$sql4 = "Insert into movimientos (id, fecha, sala) values (
'".$clave."',
'".$Fecha."',
'".$Sala."')";
$resultado3 = mysqli_query($enlace, $sql4) or die (mysqli_error());;
}

?>
<html>
<head>
<link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


<div class="container theme-showcase" role="main">
        <div class="jumbotron">
		
		<p><h3> Registro actualizado</h3></p>
		
		</div>
</div>
</body>
</html>