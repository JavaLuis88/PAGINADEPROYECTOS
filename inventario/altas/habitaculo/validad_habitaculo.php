<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
<link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php $Habit = htmlspecialchars($_POST['habit']); ?>
<?php $Descrip= htmlspecialchars($_POST['descrip']); ?>




<h1 align="center">Resumen del Habitáculo</h1>
<div class="container theme-showcase" role="main">
        <div class="jumbotron">

<p>Nombre del habitaculo: <?php echo $Habit ?></p>
<p>Descripcion del habitaculo: <?php echo $Descrip?></p>

<p><h3>¿Es correcta la informacion?</h3></p>
<a href="<?php
  echo htmlspecialchars($_SERVER['HTTP_REFERER']);
?>" class="btn btn-danger">No, volver a atrás</a>

<a href="envia_habitaculo.php?habit=<?php echo $Habit; ?>
&descrip=<?php echo $Descrip;?>
" class="btn btn-success">
Si, estoy de acuerdo</a> 

</div>
</div>
</body>
</html>