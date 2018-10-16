<html> 
<head> 
<link rel="stylesheet" type="text/css" href="inventario.css" title="style" />
<style>
body {
  font-family: Verdana;
  color: white;
}
</style>
<title>Formulario para usuarios</title> 
</head> 

<body> 

<form name="verificacionusuarios" method="POST" action="consultarusuarios.php" > 
<table bgcolor="#339933" align=center border=2> 
<td align="right">	Usuario: </td> 
<td align="left"> <input type="text" name="pv3" value="" size=15></td><tr> 
<td align="right"> Clave: </td> 
<td align="left"> <input type="password" name="pv4" value="" size=15></td><tr> 
<td align=center><input type=submit value="Enviar"></td> 
<td align=center><input type=reset value="Borrar"></td>

<!--colocamos los botones de enviar y borrar //--> 

</form> 
</table> 
</body> 
</html> 

