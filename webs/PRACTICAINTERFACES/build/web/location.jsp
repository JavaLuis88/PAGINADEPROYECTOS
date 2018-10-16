<%-- 
    Document   : index
    Created on : 03-nov-2017, 9:51:14
    Author     : Usuario01
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%--CABECERA--%>

<jsp:include page="templates/publicheader.jsp">
        <jsp:param name="descripcion" value="Localización de la empresa"/>
    <jsp:param name="plabrasclave" value="localización, donde, estamos, sedes"/>
    <jsp:param name="autor" value="Super Eñe"/>
    <jsp:param name="titulo" value="CRUMP Guarda tus vales y ahorra-¿Dónde estamos?"/>
    <jsp:param name="cabecera" value="CRUMP"/>
    <jsp:param name="subcabecera" value=""/>
    <jsp:param name="clientstabclass" value=""/>
    <jsp:param name="bussinestabclass" value=""/>
    <jsp:param name="contacttabclass" value=""/>
    <jsp:param name="locationtabclass" value="activegreen"/>
</jsp:include>
<%--CABECERA--%>
<%--CUERPO--%>
<section class="espaciadosuperior2per">

    <article class="container-fluid row">
        <header class="espaciadoinferior1per">
         
                <h2 class="text-center"><strong>Nuestras oficinas</strong></h2>

         
        </header>
        <article class="col-xs-4 col-sm-4 col-md-4 bordedondestamos">

   

                <h4 class="text-center">Oficina Central</h4>

   
            <address class="text-center">
                CIFP Santa catalina<br>
                Calle Montelatorre 11<br>
                09400 Aranda de duero (Burgos)
            </address>
        </article>
        <article class="col-xs-4 col-sm-4 col-md-4 bordedondestamos">
   
                <h4 class="text-center">Oficina Valladolid</h4>

   
            <address class="text-center">
                Calle Gondomar 11<br>
                47011 Valladolid (Valladolid)
            </address>
        </article>

        <article class="col-xs-4 col-sm-4 col-md-4">
   
                <h4 class="text-center">Oficina Burgos</h4>

   
            <address class="text-center">
                Calle Santiago 8<br>
                09700 Burgos(Burgos)
            </address>
        </article>
    </article>


 <article class="container-fluid espaciadosuperior1per espaciadoinferior1per">
     
    
       <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2980.287308832271!2d-3.6790116850554826!3d41.671138086320134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd442665e65459fd%3A0x3552211194fc2637!2sCalle+Montelatorre%2C+11%2C+09400+Aranda+de+Duero%2C+Burgos!5e0!3m2!1ses!2ses!4v1510761267596" width="1%" height="1em" class="mapa" frameborder="0" style="border:0" allowfullscreen></iframe>-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2980.287308832271!2d-3.6790116850554826!3d41.671138086320134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd442665e65459fd%3A0x3552211194fc2637!2sCalle+Montelatorre%2C+11%2C+09400+Aranda+de+Duero%2C+Burgos!5e0!3m2!1ses!2ses!4v1510761267596" width="700" height="120" class="mapa"  allowfullscreen></iframe>
     
     
     
 </article>   


</section>



<%--CUERPO--%>



<%--PIE--%>

<jsp:include page="templates/publicfooter.jsp"/>

<%--PIE--%>
