<php?
<form action="nueva.php" method="get">
<h3>Rango horario</h3>
Fecha inicio:<br/> 
<input type="text" name="fechaInicio" value="-" /><br/>
Fecha Fin:<br/> 
<input type="text" name="fechaFin" value="-"/>
<h3>Elija la sala</h3>
<select name='sala'>
		<?php
			mysql_connect("localhost","admininv","admin2013");
			mysql_select_db("inventario");
			$sql=mysql_query('select sala from objetos group by sala');

			while($r = mysql_fetch_array($sql)) {
		?>
		<option name='sala' value="<?php echo $r['sala'] ?>">
			<?php echo $r['sala'] ?>
		</option>
		<?php
			}
		?>
    	<?php 
			$query = "select sala from objetos group by sala";
			$result = mysqli_query($objeConexion->conectarse(), $query) or die(mysqli_error());;
			while($row = mysqli_fetch_array($result)){
		?>
		<option title="sala" value="<?php echo $row["sala"]."";?>"> 
			<?php echo $row["sala"]?> 
        </option>
		<?php	
			}
		?>
	</select>
<h3>Usuario</h3>
<input type="text" name="Usuario" value="-" /><br/>
?>