<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %>
<!DOCTYPE html> 
<html lang="es"> 
    <head>   
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content="Practica de interfaces">   
        <meta name="keywords" content="Practica, interfaces,botstrasp, proyect, final">
        <meta name="author" content="Super Eñe">
        <link ref="icon" href="img/favicon.ico">
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
    <body class="cuerpoapp content-fluid"> 



        <header class="row">




            <div class="col-xs-2 col-sm-2 col-md-2">

                <figure>
                    <img src="img/logotipo.png" alt="Logotipo" >


                </figure>  
            </div>



            <hgroup class="col-xs-7 col-sm-7 text-center">
                <h1 class="cabecerapagina">${param.cabecera}</h1>
                <h2 class="subcabecerapagina"> ${param.subcabecera}</h2>
            </hgroup>


            <div class="col-xs-3 col-sm-3 col-md-3 pull-right cajafle">

                <form action="index.jsp" method="post" class="form-inline pull-right margensuperior2per">
                    <button type="submit" class="btn btn-success margenderecho3per">Cerrar Session</button>




                </form>
            </div>

        </header>


































