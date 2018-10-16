<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Registro De Usuario - Sol Manga";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Página de registro de usuarios en la tienda";
$_PARAMETERS['keywords'] = "Registro, usuario, creación de cuentas, contraseña";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOARCHIVE, NOODP, NOYDIR";
include_once 'templates/publicheader.php';
?>


<section class="espaciadoinferior1per">


    <form action="jumbotron.php" method="post" name="formularioregistro" id="formularioregistro" class="form-horizontal" novalidate>

        <article class="form-group has-feedback">
            <label for="nombre" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Nombre</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <input name="nombre" type="text" class="form-control" id="nombre" size="16" maxlength="16" value="" placeholder="Nombre" required>
                <div id="nombreerror" class="textoerror">
                </div>    

            </div>
        </article> 
        <article class="form-group has-feedback">
            <label for="apellidos" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Apellidos</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <input name="apellidos" type="text" class="form-control" id="apellidos" size="16" maxlength="25" value="" placeholder="Apellidos" required>
                <div id="apellidoserror" class="textoerror">
                </div>  
            </div>
        </article> 

        <article class="form-group form-group has-feedback">
            <label for="sexo" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Sexo</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <select name="sexo" class="form-control" id="sexo" size="1" required>
                    <option value="">Seleciona tu sexo</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
                  <div id="sexoerror" class="textoerror">
                </div>  
            </div>

        </article> 

        <article class="form-group has-feedback">
            <label for="usuario" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Usuario</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <input name="usuario" type="text" class="form-control" id="usuario" size="12" maxlength="12" value="" placeholder="Usuario" required>
                <div id="usuarioerror" class="textoerror">
                </div>  
            </div>
        </article> 


        <article class="form-group has-feedback">
            <label for="correo" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Correo Electrónico</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <input name="correo" type="email" class="form-control" id="correo" size="16" maxlength="48" value="" placeholder="Correo Electrónico" required>
                <div id="correoerror" class="textoerror">
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

        <article class="form-group has-feedback">
            <label for="pwd2" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Re Contraseña</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                <input name="pwd2" type="password" class="form-control" id="pwd2" size="16" maxlength="16" value="" placeholder="Re Contraseña" required>
                <div id="pwd2error" class="textoerror">
                </div>  
            </div>
        </article>

        <article class="espaciadosuperior2per form-group">
            <div class="col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-xs-5 col-sm-5 col-md-5">
                <button type="submit" class="btn btn-info">Registrarse</button>
                <button type="reset" class="btn btn-default">Borrar</button>
            </div>
        </article>





    </form>

</section>

<?php
include_once 'templates/publicfooter.php';
?>   
</html>