<%-- 
    Document   : index
    Created on : 03-nov-2017, 9:51:14
    Author     : Usuario01
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%--CABECERA--%>

<jsp:include page="templates/publicheader.jsp">
    <jsp:param name="descripcion" value="Página de inicio para clientes"/>
    <jsp:param name="plabrasclave" value="clientes, ahorro, tickets, guardar, intercambiar, descuentos"/>
    <jsp:param name="autor" value="Super Eñe"/>
    <jsp:param name="titulo" value="CRUMP-Guarda tus vales y ahorra"/>
    <jsp:param name="cabecera" value="CRUMP"/>
    <jsp:param name="subcabecera" value="Guarda tus vales y ahorra"/>
    <jsp:param name="clientstabclass" value="activegreen"/>
    <jsp:param name="bussinestabclass" value=""/>
    <jsp:param name="contacttabclass" value=""/>
    <jsp:param name="locationtabclass" value=""/>


</jsp:include>
<%--CABECERA--%>
<%--CUERPO--%>
<section class="espaciadosuperior2per">


    <article class="container-fluid row">
        <article class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-xs-5 col-sm-5 col-md-5 bordesredondos cuadroprimario espaciadosuperior1per espaciadoinferior1per">
            <header class="text-center">

                <h4><strong>Ahorra tu dinero. Guarda tus vales.</strong></h4>

            </header>

            <figure>



                <img src="img/hucha-movil.jpg" srcset="img/hucha-movilhd.jpg 2x, img/hucha-tablet.jpg 768w, img/hucha-tablethd.jpg 768w 2x, img/hucha-large.jpg 1200w, img/hucha-largehd.jpg 1200w 2x" alt="Huchas de ceramica" class="img-responsive img-rounded center-block espaciadoinferior1per">





            </figure> 
            <p class="text-center">
                Cada vez que tiras un vale de descuento, estás tirando una oportunidad de ahorrar. 
            </p>

        </article>
        <article class="margensizquierdo col-xs-5 col-sm-5 col-md-5 bordesredondos cuadrosecundario espaciadosuperior1per espaciadoinferior1per">
            <header class="text-center">

                <h4><strong>Guardalos y usalos de forma fácil.</strong></h4>

            </header>

            <figure>

               
                     <img src="img/codigoqr-movil.jpg" srcset="img/codigoqr-movilhd.jpg 2x, img/codigoqr-tablet.jpg 768w, img/codigoqr-tablethd.jpg 768w 2x, img/codigoqr-large.jpg 1200w, img/codigoqr-largehd.jpg 1200w 2x" alt="Código QR en un móvil" class="img-responsive img-rounded center-block espaciadoinferior1per">
            </figure> 
            <p class="text-center">
                En los comercios afines y sin necesidad de tarjeta, todos ellos almacenados en el móvil. 
            </p>  
        </article>

    </article>

    <article class="container-fluid row espaciadosuperior1per">
        <article class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-xs-5 col-sm-5 col-md-5 bordesredondos cuadrosecundario espaciadosuperior1per espaciadoinferior1per">
            <header class="text-center">

                <h4><strong>Consigue mejores ticket fácilmente.</strong></h4>

            </header>

            <figure>
             
                <img src="img/ticket-movil.jpg" srcset="img/ticket-movilhd.jpg 2x, img/ticket-tablet.jpg 768w, img/ticket-tablethd.jpg 768w 2x, img/ticket-large.jpg 1200w, img/ticket-largehd.jpg 1200w 2x" alt="Ticket" class="img-responsive img-rounded center-block espaciadoinferior1per">
             


            </figure> 
            <p class="text-center">

                Puedes obtener mejores tickets de descuento dando información a las tiendas donde compras.
                De forma fácil y con total seguridad.
            </p>

        </article>
        <article class="margensizquierdo col-xs-5 col-sm-5 col-md-5 bordesredondos cuadroprimario espaciadosuperior1per espaciadoinferior1per">
            <header class="text-center">

                <h4><strong>Usalos en internet o compártelos.</strong></h4>

            </header>

            <figure>

                <img src="img/mujerordenador-movil.jpg" srcset="img/mujerordenador-movilhd.jpg 2x, img/mujerordenador-tablet.jpg 768w, img/mujerordenador-tablethd.jpg 768w 2x, img/mujerordenador-large.jpg 1200w, img/mujerordenador-largehd.jpg 1200w 2x" alt="Código QR en un móvil" class="img-responsive img-rounded center-block espaciadoinferior1per">

            </figure> 
            <p class="text-center">
                Usalos en tus compras en los comercios asociados. O si no los usas daselos a otra persona facilmente.


            </p>  
        </article>

    </article>


    <article class="container-fluid espaciadosuperior1per cuadrosecundario margensuperior1per">
        <header class="text-center">

            <h4><strong>No desperdicies la oportunidad.</strong></h4>

        </header>
        <p class="text-center">
            Empieza a guardar tickets y ahorrar desde ahora mismo, registrate gratis y sin limitaciónes.

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
