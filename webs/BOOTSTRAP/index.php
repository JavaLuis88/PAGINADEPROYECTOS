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

    <div style="display:none;">
          <span itemscope itemtype="http://schema.org/Review" >
            <span itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing">
                <span itemprop="name">Sol Manga</span>
                <span itemprop="description">Tienda donde encontrar materail dificil de localizar</span>	



            </span>
            <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                <span itemprop="name">Jose Luis</span>
            </span>
            <span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                Rating:
                <span itemprop="ratingValue">4</span> de
                <span itemprop="bestRating">5</span>
            </span>

            <span itemprop="reviewBody">En esta tieda puedes encontar tediciones exclusivas e tebeo y ediciones raras, tambien es increible  la seccion dedicada a juegos de cartas de rol</span>	
            <meta itemprop="datePublished" content="2018-01-01">January 1, 2018	
        </span>
     

    </div>
    <article class="espaciadoizquierdo25per espaciadosuperior1per espaciadoinferior1per">


        <a href="registro.php" class="btn btn-success">
            Registro de usuario
        </a>


        <a href="identificacion.php" class="btn btn-success">
            Acceso

        </a>


        <a href="" class="btn btn-success">
            Recuperar contraseña
        </a>

        <a href="" class="btn btn-success">
            Jumbotrom
        </a>

    </article>
</section>


<?php
include_once 'templates/publicfooter.php';
?>

</html>