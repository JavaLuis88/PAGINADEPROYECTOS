<%-- 
    Document   : index
    Created on : 03-nov-2017, 9:51:14
    Author     : Usuario01
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%--CABECERA--%>

<jsp:include page="templates/publicheader.jsp">
    <jsp:param name="descripcion" value="Página de incio para empresas"/>
    <jsp:param name="plabrasclave" value="empresas, intercambio, datos, estrategias, asociación"/>
    <jsp:param name="autor" value="Super Eñe"/>
    <jsp:param name="robots" value="NOARCHIVE, NOODP, NOYDIR"/>
    <jsp:param name="titulo" value="CRUMP-Ofrece descuentos, obtén información"/>
    <jsp:param name="cabecera" value="CRUMP"/>
    <jsp:param name="subcabecera" value="Ofrece descuentos, obtén información"/>
    <jsp:param name="clientstabclass" value=""/>
    <jsp:param name="bussinestabclass" value="activegreen"/>
    <jsp:param name="contacttabclass" value=""/>
    <jsp:param name="locationtabclass" value=""/>
</jsp:include>
<%--CABECERA--%>
<%--CUERPO--%>
<section class="espaciadosuperior2per">


    <article class="container-fluid row">
        <article class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-xs-5 col-sm-5 col-md-5 bordesredondos cuadroprimario espaciadosuperior1per espaciadoinferior1per">
            <header class="text-center">

                <h4><strong>Una empresa necesita información.</strong></h4>

            </header>

            <figure>
                <img src="img/informacion-movil.jpg" srcset="img/informacion-movilhd.jpg 2x, img/informacion-tablet.jpg 768w, img/informacion-tablethd.jpg 768w 2x, img/informacion-large.jpg 1200w, img/informacion-largehd.jpg 1200w 2x" alt="Datos Binarios" class="img-responsive img-rounded center-block espaciadoinferior1per">




            </figure> 
            <p class="text-center">

                Al ofrecer descuentos puedes conocer mejor a tus clients y así idear estrategias que te puedan dar una ventaja competitiva.

            </p>

        </article>
        <article class="margensizquierdo col-xs-5 col-sm-5 col-md-5 bordesredondos cuadrosecundario espaciadosuperior1per espaciadoinferior1per">
            <header class="text-center">

                <h4><strong>Crea una red con otras empresas.</strong></h4>

            </header>

            <figure>

                <img src="img/saludo-movil.jpg" srcset="img/saludo-movilhd.jpg 2x, img/saludo-tablet.jpg 768w, img/saludo-tablethd.jpg 768w 2x, img/saludo-large.jpg 1200w, img/saludo-largehd.jpg 1200w 2x" alt="Saludo" class="img-responsive img-rounded center-block espaciadoinferior1per">

            </figure> 
            <p class="text-center">
                Asociate con otras empresas para compartir datos y así obtener una imagen más completa del entorno.</p>  
        </article>

    </article>

    <article class="container-fluid row espaciadosuperior1per">
        <article class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-xs-5 col-sm-5 col-md-5 bordesredondos cuadrosecundario espaciadosuperior1per espaciadoinferior1per">
            <header class="text-center">

                <h4><strong>Cocina tus datos facilmente.</strong></h4>

            </header>

            <figure>
                <img src="img/cocina-movil.jpg" srcset="img/cocina-movilhd.jpg 2x, img/cocina-tablet.jpg 768w, img/cocina-tablethd.jpg 768w 2x, img/cocina-large.jpg 1200w, img/cocina-largehd.jpg 1200w 2x" alt="Cocina" class="img-responsive img-rounded center-block espaciadoinferior1per">




            </figure> 
            <p class="text-center">

                Con las herramientas simplificadas de análisis, podrás cruzar tus datos fácilmente y obtener información fidedigna. 

            </p>

        </article>
        <article class="margensizquierdo col-xs-5 col-sm-5 col-md-5 bordesredondos cuadroprimario espaciadosuperior1per espaciadoinferior1per">
            <header class="text-center">

                <h4><strong>Integración fácil.</strong></h4>

            </header>

            <figure>

                <img src="img/programacion-movil.jpg" srcset="img/programacion-movilhd.jpg 2x, img/programacion-tablet.jpg 768w, img/programacion-tablethd.jpg 768w 2x, img/programacion-large.jpg 1200w, img/programacion-largehd.jpg 1200w 2x" alt="Código de programación JAVA" class="img-responsive img-rounded center-block espaciadoinferior1per">

            </figure> 
            <p class="text-center">

                Tienes a tus disposición herramientas para poder realizar la integración en tus progrmas o página web.

            </p>  
        </article>

    </article>


    <article class="container-fluid espaciadosuperior1per cuadrosecundario margensuperior1per">
        <header class="text-center">

            <h4><strong>No pierdas la oportunidad</strong></h4>

        </header>
        <p class="text-center">
            Registrate y empieza a conocer mejor a tus clientes.
        <p>
        <p class="text-center espaciadosuperior1per">

            <a href="register.jsp" class="btn btn-success">Registrarse</a>
        </p>
    </article>


</section>




<%--CUERPO--%>



<%--PIE--%>

<jsp:include page="templates/publicfooter.jsp"/>

<%--PIE--%>
