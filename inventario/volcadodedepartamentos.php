<?php
$enlace = mysqli_connect("localhost", "admininv", "admin2013", "inventario");
				if($enlace){
					echo "Conexion exitosa";	//si la conexion fue exitosa nos muestra este mensaje como prueba, despues lo puedes poner comentarios de nuevo: //
				}else{
					die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
				}
				
				
$insert;
$contador=0;


$datosobjeto="select distinct sala from objetos;";
$sentencia=mysqli_query($enlace, $datosobjeto);
while ($row =mysqli_fetch_array($sentencia)) {
$sala=$row['sala'];
$insert="INSERT INTO `habitaculo`(`nombre`) VALUES ('".$sala."');";
$insertado=mysqli_query($enlace, $insert);
$contador++;
echo("ha pasado ".$contador." veces ");

}  
mysqli_close($enlace);




	 
?>