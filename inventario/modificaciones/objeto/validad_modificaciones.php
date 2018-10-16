<html>
    <head>
        <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <?php $Prove = htmlspecialchars($_POST['Prove']); ?>
        <?php $Departamento = htmlspecialchars($_POST['Departamento']); ?>
        <?php $Sala = ($_POST['Sala']); ?>
        <?php $Tipo = htmlspecialchars($_POST['Tipo']); ?>
        <?php $Descripcion = htmlspecialchars($_POST['Descripcion']); ?>
        <?php $Numserie = htmlspecialchars($_POST['Numserie']); ?>
        <?php $Unidades = htmlspecialchars($_POST['Unidades']); ?>
        <?php $Elemento = htmlspecialchars($_POST['Elemento']); ?>
        <?php $Obs = htmlspecialchars($_POST['Obse']); ?>
        <?php $Cuenta = htmlspecialchars($_POST['Cuenta']); ?>
        <?php $Factura = htmlspecialchars($_POST['Factura']); ?>
        <?php $Salavieja = htmlspecialchars($_POST['Salavieja']); ?>
        <?php $ID = htmlspecialchars($_POST['ID']); ?>
        <?php $codigo_barras = $Departamento . " - " . $Tipo . " " . $ID . " - " . $Sala; ?>
        <h2 align="center">Resumen del objeto</h2>
        <div class="container theme-showcase" role="main">
            <div class="jumbotron">
                <p>Has seleccionado el siguiente proveedor: <?php echo $Prove ?></p>
                <p>Has seleccionado la Departamento: <?php echo $Departamento ?></p>
                <p>Has seleccionado la sala: <?php echo $Sala ?></p>
                <p>Has seleccionado el tipo: <?php echo $Tipo ?></p>
                <p>El nº de serie del producto elegido es: <?php echo $Numserie ?></p>
                <p>La descripcion del producto es la siguiente: <?php echo $Descripcion ?></p>
                <p>El elemento es: <?php echo $Elemento ?> </p>
                <p>Unidades: <?php echo $Unidades ?></p>
                <p>Cuenta de gestion: <?php echo $Cuenta ?> </p>
                <p>Observaciones: <?php echo $Obs ?> </p>
                <p>Nº Factura <?php echo $Factura ?> </p>
                <p>codibarr <?php echo $codigo_barras ?> </p>
                <p><h3>¿Es correcta la informacion?</h3></p>
                <a href="<?php
                echo htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>" class="btn btn-danger">No, volver a atrás</a>

                <a href="enviar_modificaciones.php?Departamento=<?php echo $Departamento; ?>
                   &Sala=<?php echo $Sala; ?>
                   &Tipo=<?php echo $Tipo; ?>
                   &Descripcion=<?php echo $Descripcion; ?>
                   &Numserie=<?php echo $Numserie; ?>
                   &Unidades=<?php echo $Unidades; ?>
                   &Elemento=<?php echo $Elemento; ?>
                   &Obs=<?php echo $Obs; ?>
                   &Prove=<?php echo $Prove; ?>
                   &Cuenta=<?php echo $Cuenta; ?>
                   &Factura=<?php echo $Factura; ?>
                   &Salavieja=<?php echo $Salavieja; ?>
                   &ID=<?php echo $ID; ?>
                   " class="btn btn-success">Si, estoy de acuerdo</a> 
            </div>
        </div>
    </body>
</html>