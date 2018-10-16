<html>
<head> 
<link rel="stylesheet" type="text/css" href="inventario.css" title="style" />
<style>
body {
  font-family: Verdana;
  color: white;
}
</style>
</head> 
<body> 
 <?php

$v3=strtoupper($_POST['pv3']); 
$v4=$_POST['pv4'];
$valido=0;
$c=mysql_connect("localhost","admininv","admin2013");
$base="inventario";  
$tabla="user";  
echo  "$v3";
echo "</br>";
echo "$v4";

mysql_select_db($base,$c);  
mysql_query("select username,password from $tabla where username='$v3' and password='$v4';" ); 

if (mysql_errno($c)!=0 )
{  
			$numerror=mysql_errno($c);  
            $descrerror=mysql_error($c);  
            echo "Se ha producido un error nº $numerror que corresponde a: $descrerror";  
			echo "Vuelva a introducir los datos o póngase en contacto con el administrador" ;
			// enlace a formulario
			?>
			<a href="nuevosusuarios.php">Volver a introducir los datos</a>
			<?php
			 }
  
 else if(mysql_errno($c)==0 )
{
	  echo "<h2>Usuario correcto</b></H2>";
	  //enlace a la pagina
	  echo "enlace a la pagina principal";
	  ?>
	  <a href="index.HTML"> Entrar</a>
	  <?php
	 
}
/*
elseif  ($intentos>3)
{
	echo "Usuario no valido";
	echo "Ha agotado todos los intentos";
	echo "Pongase en contacto con el administrador para darse de alta con el usuario";
}     
*/
mysql_close();


?>