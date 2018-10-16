<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
<link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php $Nombre = htmlspecialchars($_POST['Nombre']); ?>
<?php $Abrev= htmlspecialchars($_POST['Abrev']); ?>




<h1 align="center">Resumen del tipo de objeto</h1>
<div class="container theme-showcase" role="main">
        <div class="jumbotron">
<p>Nombre del tipo: <?php echo $Nombre ?></p>
<p>Abreviatura del tipo: <?php echo $Abrev?></p>

<p><h3>¿Es correcta la informacion?</h3></p>
<a href="<?php
  echo htmlspecialchars($_SERVER['HTTP_REFERER']);
?>" class="btn btn-danger">No, volver a atrás</a>
<a href="enviar_tipo.php?Nombre=<?php echo $Nombre; ?>
&Abrev=<?php echo $Abrev;?>
" class="btn btn-success">
Si, estoy de acuerdo</a> 


</div>
</div>


</body>
</html>