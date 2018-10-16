<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Identificación";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Pagina de identificación del inventario del CIFP SANTA CATALINA";
$_PARAMETERS['keywords'] = "Inventario, Altas, Bajas";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";
include_once 'plantilla/publicheader.php';
?>

<section id="seccionpartepublica">

    <article class="container">


        <!--
      Guillermo he puesto el metodo post par asimular la autentifacion
      y otros procesos de la gestion de la sesion de usuarios desde javascript 
        -->


        <form action="login.php" name="formulariologin" id="formulariologin" method="get" class="form-horizontal pt-4">
            <!--
                    <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
            
            -->

            <div class="form-group container-fluid row justify-content-center">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">

                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row justify-content-center">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12"  placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="offset-4 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-2 col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <label for="salvar">
                        <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                    </label>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="offset-4 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-2 col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <input name="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
            </div>
        </form>



    </article>

    <article>
        <i class="fa fa-angle-double-left">
        </i>
    </article>



    <!--aqui-->






    <!--
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>


v
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>



    </article>
    
    <article class="container">


   
        <form action="login.php" method="post" class="form-horizontal pt-3" role="form">
         

            <div class="form-group container-fluid row">
                <label for="username" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Usuario:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  
                    <input name="username"  id="username" type="text" value="" size="12" maxlength="12"  placeholder="Usuario" pattern="[A-Za-z0-9.]{8,12}" required class="form-control">
                </div>
            </div>
            <div class="form-group container-fluid row">

                <label for="password" class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label text-right">Contraseña:</label>
                <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                     <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <input name="password"  id="password" type="password" value="" size="12" maxlength="12" min="1" placeholder="Contraseña" pattern="(.){8,12}" required class="form-control">
                </div>

            </div>
            <div class="form-check row">
                <label for="salvar" class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 form-check-label">
                    <input name="salvar" id="salvar" type="checkbox" class="form-check-input" value="1"> Mantener sesion abierta
                </label>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <input name="enviar" id="enviar" type="submit" value=" Enviar" class="btn btn-info">
                    <input type="reset" value="Borrar" class="btn btn-danger">
                </div>
        </form>

    -->




    <!--aqui-->º




</section>

<?php

include_once 'plantilla/publicfooter.php';
?>
   