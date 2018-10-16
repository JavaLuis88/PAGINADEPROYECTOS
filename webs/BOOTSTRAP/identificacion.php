<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Identificación De Usuario - Sol Manga";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Página de identificación de usuarios en la tienda";
$_PARAMETERS['keywords'] = "Identificación, usuario, acceso a usuarios";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOARCHIVE, NOODP, NOYDIR";
include_once 'templates/publicheader.php';
?>


<section class="espaciadoinferior1per">


    <form action="index.php" method="post" name="formularioidentificacion" id="formularioidentificacion" class="form-horizontal" novalidate>

        <article class="form-group has-feedback">
            <label for="usuario" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Usuario</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <input name="usuario" type="text" class="form-control" id="usuario" size="12" maxlength="12" value="" placeholder="Nombre" required>
                <div id="usuarioerror" class="textoerror">
                </div> 
            </div>
        </article> 

        <article class="form-group has-feedback">
            <label for="pwd" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Contraseña</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                <input name="pwd" type="password" class="form-control" id="pwd" size="16" maxlength="16" value="" placeholder="Contraseña" required>
                <div id="pwderror" class="textoerror">
                </div> 
            </div>
        </article> 

        <article class="col-xs-offset-3 col-sm-offset-4 col-md-offset-4">
            <label for="registrarusuario">
                <input type="checkbox" name="registrarusuario" id="registrarusuario" value="SI">
                Registrar usuario
            </label>
        </article>


        <article class="col-xs-offset-3 col-sm-offset-4 col-md-offset-4">
            <label for="recuperarcontrasena">
                <input type="checkbox" name="recuperarcontrasena" id="recuperarcontrasena" value="SI">
                Recuperar contraseña
            </label>

        </article>

        <article class="espaciadosuperior2per form-group">
            <div class="col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-xs-5 col-sm-5 col-md-5">
                <button type="submit" class="btn btn-info">Identificarse</button>
                <button type="reset" class="btn btn-default">Borrar</button>
            </div>
        </article>





    </form>

</section>

<?php
include_once 'templates/publicfooter.php';
?>   
</html>