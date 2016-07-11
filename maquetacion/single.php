<?php
/**
 *
 *
 * @package		clinicaraquis
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'blog';
$subpage = 'single';
$type = 'page';
$title = 'Single Blog';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap single--blog">
    <div class="blog__meta">
        <p>26/03/2016</p>
        <span>|</span>
        <p>Por <a href="#" title="Titulo">Rodrigo Polidura</a></p>
    </div><!-- /.blog__meta -->
    <h1 class="blog__title">¿Cuál es la diferencia entre Quiropráctica y Quiropraxia?</h1><!-- /.blog__title -->
    <div class="wrap--single">
        <div class="blog__media">
            <img src="assets/blog.jpg" alt="Titulo">
            <div class="blog__media__caption">
                <p>Pie de foto - Lorem ipsum dolor amet</p>
            </div><!-- /.blog__media__caption -->
        </div><!-- /.blog__media -->
        <div class="wrap--single--small">
            <div class="content content__blog">
                <div class="blog__bajada">
                    <p>
                        La Quiropráctica es una profesión sanitaria, reconocida por la Organización Mundial de la Salud, dedicada al cuidado de la salud de forma natural, que pone énfasis en la relación existente entre la columna vertebral y el correcto funcionamiento del sistema nervioso.
                    </p>
                </div><!-- /.blog__bajada -->
                <p>
                    La Quiropráctica es la ciencia que trabaja sobre la columna vertebral para corregir sus problemas mecánicos y mejorar así el funcionamiento del sistema nervioso y por tanto, la salud de todo el organismo.
                </p>
                <p>
                    El sistema más importante que tenemos es el sistema nervioso, ya que éste controla el funcionamiento de cada célula, cada tejido y cada órgano… debido a un continuo flujo de información desde el cerebro. Una vértebra mal alineada (lo que se conoce como subluxación) puede alterar la función de los nervios que parten de la médula espinal y que se ramifican a través de sus orificios a todas las partes de nuestro cuerpo, produciéndose trastornos y determinados desequilibrios.
                    Pero no siempre estos trastornos se manifiestan con síntomas. El síntoma es el final del proceso, es la forma que tiene nuestro organismo de avisarnos de que hay algo que no funciona bien, pero se puede tener subluxaciones sin dolor y sin sintomatología.
                </p>
                <p>
                    Tenemos la capacidad de regenerarnos y de regularnos por nosotros mismos. La salud puede alcanzarse de una forma natural, ya que el cuerpo tiene una capacidad innata de restablecerse y de auto regenerarse.
                    La Quiropráctica es la primera profesión de salud natural en el mundo y la segunda en EE.UU. y seguro que con el tiempo, será la primera opción para la mayor parte del mundo.
                </p>
                <div class="gallery">
                    <div class="slider__gallery js-slider__gallery">
                        <ul class="slides">
                            <li>
                                <img src="assets/blog.jpg" alt="Tenemos la capacidad de regenerarnos y de regularnos por nosotros mismos. La salud puede alcanzarse de una forma natural, ya que el cuerpo tiene una capacidad innata de restablecerse y de auto regenerarse.La Quiropráctica es la primera profesión de salud natural en el mundo y la segunda en EE.UU. y seguro que con el tiempo, será la primera opción para la mayor parte del mundo.">
                            </li>
                            <li>
                                <img src="http://im.rediff.com/movies/2016/jan/14dabboo-ratnani8.jpg" alt="texto 2">
                            </li>
                            <li>
                                <img src="assets/blog.jpg" alt="texto 3">
                            </li>
                        </ul><!--.slides-->
                    </div><!-- /.slider__gallery js-slider__gallery -->
                    <div class="gallery__content">
                        <div class="custom-controls-container">
                            <div class="gallery__number">
                                <span class="current-slide"></span>/
                                <span class="total-slides"></span>
                            </div>
                        </div>
                        <div class="gallery__text">
                            <p></p>
                        </div><!-- /.gallery__text -->
                    </div><!-- /.gallery__content -->
                    <div class="gallery__fullscreen">
                        <img src="img/fullscreen.svg" alt="Fullscreen">
                    </div><!-- /.gallery__fullscreen -->
                </div><!--.gallery-->
                <p>
                    Tenemos la capacidad de regenerarnos y de regularnos por nosotros mismos. La salud puede alcanzarse de una forma natural, ya que el cuerpo tiene una capacidad innata de restablecerse y de auto regenerarse.
                    La Quiropráctica es la primera profesión de salud natural en el mundo y la segunda en EE.UU. y seguro que con el tiempo, será la primera opción para la mayor parte del mundo.
                </p>
                <div class="blog__doc">
                    <div class="doc__media">
                       <!--NOTE: 100*100 -->
                        <img src="assets/doc.png" alt="Titulo">
                    </div><!-- /.doc__media -->
                    <div class="doc__content">
                        <span>Por</span>
                        <p>Francisco Ubilla Benghi</p>
                    </div><!-- /.doc__content -->
                </div><!-- /.blog__doc -->
            </div><!-- /.content content__blog -->
            <div class="share">
                <div class="share__content">
                    <p>Compartir</p>
                    <a target="_blank" class="popup" href="http://www.facebook.com/sharer.php?u={{post.permalink}}&t={{post.title}}"><svg><use xlink:href="#shape-icon-facebook" /></svg></a>
                    <a target="_blank" class="popup" href="http://twitter.com/share?url={{post.permalink}}&text={{post.title}}"><svg><use xlink:href="#shape-icon-twitter" /></svg></a>
                    <a target="_blank" class="popup" href="mailto:jairo@reactor.cl"><svg><use xlink:href="#shape-icon-mail" /></svg></a>
                </div><!-- /.share__content -->
            </div><!-- /.share -->
        </div><!-- /.wrap--single--small -->
    </div><!-- /.wrap--single -->
    <h2 class="small">Artículos relacionados</h2><!-- /.small -->
    <div class="container container--news related">
        <div class="item__news item__news--normal">
            <a href="single.php" title="Titulo" class="item__news__media">
               <!--NOTE: 350*240 -->
                <img src="assets/news.jpg" alt="Titulo">
            </a>
            <div class="item__news__content">
                <a href="category.php" title="Titulo" class="btn btn--cat">Category</a>
                <div class="item__news__meta">
                    <p>26/03/2016</p>
                    <span>|</span>
                    <p>Por <a href="author.php" title="Tiutlo">Rodrigo Polidura</a></p>
                </div><!-- /.item__news__meta -->
                <h2>¿Quiénes pueden practicar Pilates?</h2>
                <a href="single.php" title="Leer más" class="btn btn--border">Leer más</a>
            </div><!-- /.item__news__content -->
        </div><!-- /.item__news -->
        <div class="item__news item__news--normal">
            <a href="single.php" title="Titulo" class="item__news__media">
                <img src="assets/news.jpg" alt="Titulo">
            </a>
            <div class="item__news__content">
                <a href="category.php" title="Titulo" class="btn btn--cat">Category</a>
                <div class="item__news__meta">
                    <p>26/03/2016</p>
                    <span>|</span>
                    <p>Por <a href="author.php" title="Tiutlo">Rodrigo Polidura</a></p>
                </div><!-- /.item__news__meta -->
                <h2>¿Quiénes pueden practicar Pilates?</h2>
                <a href="single.php" title="Leer más" class="btn btn--border">Leer más</a>
            </div><!-- /.item__news__content -->
        </div><!-- /.item__news -->
    </div><!-- /.container container--news -->
    <a href="page-blog.php" title="Volver al Blog" class="bt btn--back">Volver al blog</a>
</div><!-- /.wrap single--blog -->
<?php include 'footer.php'; ?>