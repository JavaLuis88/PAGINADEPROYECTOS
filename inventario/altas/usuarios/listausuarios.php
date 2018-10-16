<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include('conex.php');
$objeConexion = new Conexion();
?>
<head>
<style type="text/css">
h2 {font-family: verdana;
width: 300px;
margin: 2%;}
table {background-color: green;
font-family: verdana;
width: 200px;
margin-bottom: 20%;
margin-left: 20%;
padding: 1%;
}
</style>
</head>
<body>
<?php
echo "<h2>Lista de usuarios</h2>";
$sql="select * from user";
$result = mysqli_query($objeConexion->conectarse(), $sql);;
echo "<table border = '1'> \n"; 
while($row = mysqli_fetch_array($result,MYSQLI_NUM))
{
 echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr> \n"; 
echo "<br>";
}
 echo "</table> \n"; 
?>
</body>