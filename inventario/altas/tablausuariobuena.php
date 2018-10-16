<?php
$enlace = mysqli_connect("localhost", "admininv", "admin2013", "inventario");
				if($enlace){
					//echo "Conexion exitosa";	//si la conexion fue exitosa nos muestra este mensaje como prueba, despues lo puedes poner comentarios de nuevo: //
				}else{
					die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
				}
				
				
$insert;
$contador=0;
//$crear="CREATE TABLE IF NOT EXISTS Movimientos (id INT,fecha DATE, sala Varchar(25) ,PRIMARY KEY (id,fecha));";
//$resultado=mysqli_query($objeConexion->conectarse(), $crear) or die(mysqli_error());

$datosobjeto="select id, sala from objetos where 1=1;";
$sentencia=mysqli_query($enlace, $datosobjeto);
while ($row =mysqli_fetch_array($sentencia)) {
$id=$row['id'];
$sala=$row['sala'];
$fecha= date("Y-m-d H:i:s");

$insert="INSERT INTO `movimientos`(`id`,`fecha`,`sala`) VALUES ('".$id."', '".$fecha."', '".$sala."');";
$insertado=mysqli_query($enlace, $insert);
$contador++;
echo("ha pasado ".$contador." veces ");

}  
mysqli_close($enlace);




	 
?>