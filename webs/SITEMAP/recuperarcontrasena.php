<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Recuperación De Contraseña - Sol Manga";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Página de recuperación de contraseña";
$_PARAMETERS['keywords'] = "Recuperación, contraseña";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOARCHIVE, NOODP, NOYDIR";
include_once 'templates/publicheader.php';
?>


<section class="espaciadoinferior1per">


    <form action="index.php" method="post" name="formulariorecuperarcontrasena" id="formulariorecuperarcontrasena" class="form-horizontal">

        <article class="form-group has-feedback">
            <label for="correo" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label etiquetasformulario">Correo Electrónico</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <input name="correo" type="email" class="form-control" id="correo" size="16" maxlength="48" value="" placeholder="Correo Electrónico" required>
                <div id="correoerror" class="textoerror">
                </div>  
            </div>
        </article> 

       

        <article class="espaciadosuperior2per form-group">
            <div class="col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-xs-5 col-sm-5 col-md-5">
                <button type="submit" class="btn btn-info">Recuperar Contraseña</button>
                <button type="reset" class="btn btn-default">Borrar</button>
            </div>
        </article>





    </form>

</section>

<?php
include_once 'templates/publicfooter.php';
?>   
</html>