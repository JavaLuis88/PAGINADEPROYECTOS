<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
<link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php $Nombre = htmlspecialchars($_POST['Nombre']); ?>
<?php $Direccion= htmlspecialchars($_POST['Direc']); ?>
<?php $Tele = ($_POST['Tele']); ?>
<?php $CIF = htmlspecialchars($_POST['CIF']); ?>
<?php $Email = htmlspecialchars($_POST['Email']);?>
<?php $Descripcion = htmlspecialchars($_POST['Descri']); ?>
<?php $ID = htmlspecialchars ($_POST['ID']); ?>


<h1 align="center">Resumen del Proveedor</h1>
<div class="container theme-showcase" role="main">
        <div class="jumbotron">
<p>Nombre de proveedor: <?php echo $Nombre ?></p>
<p>Direccion del proveedor: <?php echo $Direccion?></p>
<p>Telefono del proveedor: <?php echo $Tele?></p>
<p>CIF: <?php echo $CIF?></p>
<p>Email: <?php echo $Email?></p>
<p>La descripcion del producto es la siguiente: <?php echo $Descripcion?></p>
<p><h3>¿Es correcta la informacion?</h3></p>

<a href="<?php
  echo htmlspecialchars($_SERVER['HTTP_REFERER']);
?>" class="btn btn-danger">No, volver a atrás</a>
<a href="enviar_modificaciones_prove.php?Nombre=<?php echo $Nombre; ?>
&Direccion=<?php echo $Direccion;?>
&Tele=<?php echo $Tele;?>
&CIF=<?php echo $CIF;?>
&Email=<?php echo $Email;?>
&Descripcion=<?php echo $Descripcion;?>
&ID=<?php echo $ID;?>
" class="btn btn-success">
Si, estoy de acuerdo</a> 

</div>
        </div>


</body>
</html>