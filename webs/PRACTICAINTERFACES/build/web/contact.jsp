<%-- 
    Document   : index
    Created on : 03-nov-2017, 9:51:14
    Author     : Usuario01
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%--CABECERA--%>

<jsp:include page="templates/publicheader.jsp">
    <jsp:param name="descripcion" value="Página de contactos"/>
    <jsp:param name="plabrasclave" value="Contacto,dudas"/>
    <jsp:param name="autor" value="Super Eñe"/>
    <jsp:param name="titulo" value="CRUMP-Contacto"/>
    <jsp:param name="cabecera" value="CRUMP"/>
    <jsp:param name="subcabecera" value="Contacta con nosotros"/>
    <jsp:param name="clientstabclass" value=""/>
    <jsp:param name="bussinestabclass" value=""/>
    <jsp:param name="contacttabclass" value="activegreen"/>
    <jsp:param name="locationtabclass" value=""/>
</jsp:include>
<%--CABECERA--%>
<%--CUERPO--%>

<section class="espaciadosuperior2per">

    <article class="articuloprincipal">

        <!--
                <header class="cabeceraarticuloprincipal">
                    <h1 class="text-center">CONTACTA CON NOSOTROS</h1>    
        
                </header>-->
        <div class="text-center cuerpoarticulopricipal">

            Utiliza este formulario para contactar con nosotros y te resolveremos todas tus dudas.<br>

        </div>
    </article>

    <form action="contact.php" method="post" class="form-horizontal" role="form">

        <article class="form-group">
            <label for="nombre" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Nombre</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <input name="nombre" type="text" class="form-control" id="nombre" size="12" maxlength="12" value="" placeholder="Nombre" required>
            </div>
        </article>   

        <article class="form-group">
            <label for="apellidos" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Apellidos</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <input name="apellidos" type="text" class="form-control" id="apellidos" size="12" maxlength="25" value="" placeholder="Apellidos" required>
            </div>
        </article> 


        <article class="form-group">
            <label for="correo" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">E-mail</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <input name="correo" type="email" class="form-control" id="correo" size="12" maxlength="25" value="" placeholder="E-mail" required>
            </div>
        </article>   

        <article class="form-group">
            <label for="telefono" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Teléfono</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <input name="telefono" type="tel" class="form-control" id="telefono" size="12" maxlength="12" value="" placeholder="Teléfono">
            </div>
        </article>   

        <article class="form-group">
            <label for="mensaje" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Mensaje</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje" cols="20" rows="5">
                </textarea>
            </div>
        </article>   

        <article class="form-group">
            <div class="col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-xs-5 col-sm-5 col-md-5">
                <button type="submit" class="btn btn-info">Enviar</button>
                <button type="reset" class="btn btn-default">Borrar</button>
            </div>
        </article>


    </form>

</section>


<%--CUERPO--%>

<%--PIE--%>

<jsp:include page="templates/publicfooter.jsp"/>

<%--PIE--%>

