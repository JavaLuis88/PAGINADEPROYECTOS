<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Ediciones epeciales y rarezas de comics - Sol Manga";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Pagina de inicio la tienda de comics Sol Manga";
$_PARAMETERS['keywords'] = "Inicio, Noticias Recientes, Mangas Originales, Tebeos";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOARCHIVE, NOODP, NOYDIR";
include_once 'templates/publicheader.php';
?>


<section>
    <div id="contenedor" class="container">
        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <div class="carousel-inner">
                <div class="active item"><img  src="images/cr1.jpg" class="center-block" alt="carrusel 1" /></div>
                <div class="item"><img  src="images/cr2.jpg" class="center-block" alt="carrusel 2" /></div>
                <div class="item"><img  src="images/cr3.jpg" class="center-block" alt="carrusel 3" /></div>
                <div class="item"><img  src="images/cr4.jpg" class="center-block" alt="carrusel 4" /></div>
                <div class="item"><img  src="images/cr5.jpg" class="center-block" alt="carrusel 5" /></div>
            </div>

            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>

    <article class="espaciadosuperior1per espaciadoinferior1per content-fluid row">
       
            <div class="col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-xs-4 col-sm-3 col-md-3">
                <a href="registro.php" class="btn btn-success center-block">
                    Registro
                </a>
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4">
                <a href="identificacion.php" class="btn btn-success center-block">
                    Acceso

                </a>
            </div>
        
         <div class="col-xs-4 col-sm-3 col-md-3">
                <a href="" class="btn btn-success center-block">
                    Jumbotrom
                </a>
            </div>
       
        
    </article>
        
    </section>

<?php
include_once 'templates/publicfooter.php';
?>  
</html>