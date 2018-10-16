<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %>
<!DOCTYPE html> 
<html lang="es"> 
    <head>   
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="${param.descripcion}">   
        <meta name="keywords" content="${param.plabrasclave}">
        <meta name="author" content="${param.autor}">
        <meta name="robots" content="${param.robots}">
        <link rel="icon" href="img/favicon.ico">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <!--[if lt IE 9]>
           <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
           <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->
        <link rel="stylesheet" href="css/appbootstrap.css"> 
        <link rel="stylesheet" href="css/hoja.css"> 



        <c:forEach begin="1" end="${param.stylecount}" var="stylenumber">

            <c:set var="filenumber">

                style${stylenumber}

            </c:set>

            <link rel="stylesheet" href="${param[filenumber]}">     




        </c:forEach>    



        <c:forEach begin="1" end="${param.scriptcount}" var="scriptnumber">

            <c:set var="filenumber">

                script${scriptnumber}

            </c:set>

            <script type="text/javascript" src="${param[filenumber]}">
            </script>


        </c:forEach>  

        <title>${param.titulo}</title>
    </head>
    <body class="content-fluid"> 

        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Desplegar navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="${param.clientstabclass}"> <a href="index.jsp">Clientes</a></li>
                    <li class="${param.bussinestabclass}"><a href="business.jsp">Empresas</a></li>
                    <li class="${param.contacttabclass}"><a href="contact.jsp">Contacto</a></li>
                    <li class="${param.locationtabclass}"><a href="location.jsp">Donde estamos</a></li>
                </ul>

            </div>
        </nav>


        <header class="row">




            <div class="col-xs-2 col-sm-2 col-md-2">

                <figure>
                    <img src="img/logotipo.png" alt="Logotipo" >


                </figure>  
            </div>



            <div class="col-xs-7 col-sm-7 text-center">
                <h1 class="cabecerapagina">${param.cabecera}</h1>
                <c:if test="${(param.subcabecera!=null) && (param.subcabecera!='')}">

                    <h2 class="subcabecerapagina"> ${param.subcabecera}</h2>

                </c:if>  
            </div>


            <div class="col-xs-3 col-sm-3 col-md-3 pull-right">

                <form action="login.jsp" method="post" class="form-inline pull-right">

                    <div class="form-group">

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">                      
                                <input name="login" type="text" size="16" maxlength="16" value="" placeholder="Usuario" class="form-control" required>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <input name="pwd" type="text" size="16" maxlength="16" value="" placeholder="Contraseña" class="form-control" required>
                            </div>



                            <div class="col-xs-12 col-sm-12 col-md-12r">                      
                                <button type="submit" class="btn btn-success margenderecho3per">Entrar</button>

                                <a href="register.jsp" class="btn btn-info">Registrase</a>

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <a href="forgot.jsp" ><small>¿Olvidaste tu contraseña?</small></a>

                            </div>
                        </div>
                    </div>







                </form>


            </div>

        </header>


































