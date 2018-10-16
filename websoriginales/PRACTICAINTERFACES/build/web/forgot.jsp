<%-- 
    Document   : index
    Created on : 03-nov-2017, 9:51:14
    Author     : Usuario01
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%--CABECERA--%>

<jsp:include page="templates/publicheader.jsp">
    <jsp:param name="titulo" value="CRUMP Guarda tus vales y ahorra - Recuperar contraseña"/>
    <jsp:param name="cabecera" value="CRUMP"/>
    <jsp:param name="subcabecera" value="Recuperar contraseña"/>
    <jsp:param name="clientstabclass" value=""/>
    <jsp:param name="bussinestabclass" value=""/>
    <jsp:param name="contacttabclass" value=""/>
    <jsp:param name="locationtabclass" value=""/>
</jsp:include>
<%--CABECERA--%>
<%--CUERPO--%>
<section class="espaciadosuperior2per">

    <form action="register" method="post" class="form-horizontal" role="form">

        <article class="form-group">
            <label for="usuario" class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label">Usuario</label>
            <div class="col-xs-8 col-sm-5 col-md-5">
                <input name="usuario" type="text" class="form-control" id="usuario" size="16" maxlength="16" value="" placeholder="Usuario" required>
            </div>
        </article>   



        <article class="col-xs-offset-3 col-sm-offset-4 col-md-offset-4">
            <label for="cliente">
                <input type="radio" name="tipousuario" id="cliente" value="cliente" checked>
                Soy un cliente
            </label>
        </article>


        <article class="col-xs-offset-3 col-sm-offset-4 col-md-offset-4">
            <label for="adminsistrador">
                <input type="radio" name="tipousuario" id="administrador" value="administrador">
                Soy un trabajador de una empresa
            </label>

        </article>


        <article class="espaciadosuperior2per form-group">
            <div class="col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-xs-5 col-sm-5 col-md-5">
                <button type="submit" class="btn btn-info">Enviar</button>
                <button type="reset" class="btn btn-default">Borrar</button>
            </div>
        </article>


    </form>



</article>



</section>



<%--CUERPO--%>



<%--PIE--%>

<jsp:include page="templates/publicfooter.jsp"/>

<%--PIE--%>
