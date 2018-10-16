<?
include('conex.php');
if(!$_POST) {
?>

 <center><h2>Tabla <br>Formulario de alta de usuarios<h2></center> 
 <form action="<? $_POST ?>" method="post" target="_parent">
 
<form name="consultas" method="POST" action="usnuevo.php"> 
<table bgcolor="#339933" align=center border=2> 
<td align="right">	Username: </td> 
<td align="left"> <input type="text" name="pv1" value="" size=15></td><tr> 
<td align="right">password: </td> 
<td align="left"> <input type="password" name="pv2" value="" size=15></td><tr> 
<td align="right">Departamento: </td> 
<td align="left"> <input type="text" name="pv3" value="" size=15></td><tr> 
<td align="right">Permisos de acceso: </td> 
<td align="left"> <input type="radio" name="pv4" value="1"  size=15> Total <input type="radio" name="pv4" value="0" checked size=15> S&oacute;lo lectura </td><tr>
<!--colocamos los botones de enviar y borrar //--> 
<td align=center><input type=submit value="Enviar"></td> 
<td align=center><input type=reset value="Borrar"></td> 
</form>
<?
} else {
    $usuario = $_POST['pv1'];
    $password = $_POST['pv2'];
	$departamento = $_POST['pv3'];
    $permiso = $_POST['PV4'];
    if(!$usuario || !$password || !$departamento) {
        echo "Debe llenar los campos Usuario, Password y Departamento";
        exit;
    }
  /*  
   $objeConexion = new Conexion();
    
    $buscar = "SELECT * FROM user WHERE usuario='$usuario' and password='$password' and departamento='$departamento'"; 


	
    $resultado = mysqli_query($buscar, $db); 
    
    if (mysqli_num_rows($resultado)!= 0){
	
        session_start();
        session_register("registrado");
        $registrado = "SI";
        header ("Location: esfuerzo.php");
		
	$sql_add = "INSERT INTO USER (username,password,depart,permisos) VALUES ('$usuario','$password','$departamento','$permisos')";
    }else {
        header("Location: index.php?errorusuario=si target: _self");
    }
  /*  mysql_free_result($resultado);*/
    /*mysql_close($db); */
}
?>
