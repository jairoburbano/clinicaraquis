<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		clinicaraquis
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="wrap wrap--destacado">
    <div class="destacado--home">
        <div class="destacado--home__media" style="background-image: url(assets/chiropractic-adjustment.jpg);"></div><!-- /.destacado--home__media -->
        <div class="destacado--home__container">
            <h1 class="title">Quienes Somos</h1><!-- /.title -->
            <div class="destacado--home__content">
                <p>
                    La Quiropráctica es una profesión sanitaria, reconocida por la Organización Mundial de la Salud, dedicada al cuidado de la salud de forma natural, que pone énfasis en la relación existente entre la columna vertebral y el correcto funcionamiento del sistema nervioso.
                </p>
            </div><!-- /.destacado--home__content -->
            <a href="page-quienes-somos.php" title="Leer más" class="btn btn--border">Leer más</a>
        </div><!-- /.destacado--home__container -->
    </div><!-- /.destacado--home -->
    <a href="http://agendamiento.softwaredentalink.com/agendas/online/93acf75076f8628c4a58b409561c93d08b7866c7" target="_blank" title="Reserva tu hora" class="reserva" style="background-image: url(assets/reserva.jpg);">
        <p>
            Reserva tu hora
        </p>
    </a><!-- /.reserva -->
</div><!-- /.wrap wrap--destacado -->
<div class="wrap quiro--home">
    <div class="container">
        <h1 class="title">¿Qué es la Quiropráctica?</h1><!-- /.title -->
        <div class="content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
            </p>
            <a href="page-quiropractica.php" title="Conoce más de la quiropraxia" class="btn btn--more">Conoce más de la quiropraxia</a>
        </div><!-- /.content -->
    </div><!-- /.container -->
    <div class="content--columna">
        <?php include 'columna.php'; ?>
    </div><!-- /.content--columna -->
</div><!-- /.wrap -->
<div class="wrap home--block">
   <h1 class="title">Destacado del blog</h1><!-- /.title -->
    <div class="item--home">
        <div class="item__news item__news--home">
            <a href="single.php" title="Titulo" class="item__news__media">
                <!--NOTE: 760*530-->
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
    </div><!-- /.item--home -->
    <div class="container container--news">
        <div class="item__news item__news--normal">
            <a href="single.php" title="Titulo" class="item__news__media">
                <!--NOTE: 350*240-->
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
    <div class="btn__group">
        <a href="page-blog.php" title="Ver más noticias" class="btn btn--more">Ver más noticias</a>
    </div><!-- /.btn__group -->
</div><!-- /.wrap -->
<div class="banner--home">
    <!--NOTE: background image = 1440*700-->
    <div class="banner--home__media" style="background-image: url(assets/banner-home.jpg);"></div><!-- /.banner--home__media -->
    <div class="banner--home__content">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="33.3px" height="60.9px" viewBox="0 0 33.3 60.9" enable-background="new 0 0 33.3 60.9" xml:space="preserve"><g id="XMLID_1_"><path id="XMLID_5_" fill="#FFFFFF" d="M16.7,6.2C2.9,6.2,0,16.8,0,29.8c0,13,3.2,23.6,16.7,23.6c13.5,0,16.7-10.6,16.7-23.6 C33.3,16.8,30.4,6.2,16.7,6.2z M20.9,23.4c0,1.1-0.9,1.4-2,1.4s-2-0.2-2-1.4s0.9-1.4,2-1.4S20.9,22.2,20.9,23.4z M19.4,18.1 c0,1.1-0.9,1.4-2,1.4s-2-0.2-2-1.4s0.9-1.4,2-1.4S19.4,17,19.4,18.1z M17.7,33.8c1.5,0,2.7,0.4,2.7,1.9c0,1.6-1.2,1.9-2.7,1.9 S15,37.3,15,35.7C15,34.1,16.2,33.8,17.7,33.8z M11.9,9c0-1,0.7-1.2,1.7-1.2c0.9,0,1.7,0.2,1.7,1.2s-0.7,1.2-1.7,1.2 C12.6,10.2,11.9,10,11.9,9z M13.6,13.1c0-1.1,0.8-1.3,1.8-1.3s1.8,0.2,1.8,1.3s-0.8,1.3-1.8,1.3S13.6,14.2,13.6,13.1z M13.9,42.8 c0-1.6,1.2-1.9,2.7-1.9c1.5,0,2.7,0.4,2.7,1.9c0,1.6-1.2,1.9-2.7,1.9C15.1,44.8,13.9,44.4,13.9,42.8z M17.7,51.9 c-1.7,0-3-0.4-3-2.1c0-1.8,1.4-2.1,3-2.1c1.7,0,3,0.4,3,2.1S19.4,51.9,17.7,51.9z M19.3,31.1c-1.3,0-2.4-0.3-2.4-1.7 c0-1.4,1.1-1.7,2.4-1.7s2.4,0.3,2.4,1.7C21.8,30.8,20.7,31.1,19.3,31.1z"/><path id="XMLID_4_" fill="#FFFFFF" d="M18.7,54.6c-1.7,0.2-3,0.6-3,2.1c0.1,2,4,4.2,5.5,4.2c1.3,0,0.8-4.3,0.7-4.7 C21.8,54.7,20.8,54.4,18.7,54.6z"/><path id="XMLID_3_" fill="#FFFFFF" d="M12.8,5.4c0.9,0,1.6-0.2,1.6-1.1c0-0.9-0.7-1.1-1.6-1.1s-1.6,0.2-1.6,1.1 C11.2,5.2,11.9,5.4,12.8,5.4z"/><path id="XMLID_2_" fill="#FFFFFF" d="M12.7,1.5c0.6,0,1.1-0.1,1.1-0.8S13.3,0,12.7,0c-0.6,0-1.1,0.1-1.1,0.8S12.1,1.5,12.7,1.5z"/></g></svg>
        <p>Centro Clinica Uno</p>
        <a href="page-centros.php" title="Conoce nuestros centros" class="btn btn--more">Conoce nuestros centros</a>
    </div><!-- /.banner__content -->
</div><!-- /.banner--home -->
<div class="wrap">
    <h1 class="title">Nuestros especialistas</h1><!-- /.title -->
    <div class="container container--especialistas">
        <div class="item__doc">
            <a href="single-especialista.php" title="Titulo" class="item__doc__media">
                <!--NOTE: 200*200-->
                <img src="assets/doc.png" alt="Titulo">
            </a>
            <h3>Francisco Ubilla Benghi</h3>
            <p>Kinesiólogo, COMT, MOMT, DC</p>
            <a href="single-especialista.php" class="btn btn--border">Ver perfil</a>
        </div><!-- /.item__doc -->
        <div class="item__doc">
            <a href="single-especialista.php" title="Titulo" class="item__doc__media">
                <img src="assets/doc.png" alt="Titulo">
            </a>
            <h3>Francisco Ubilla Benghi</h3>
            <p>Kinesiólogo, COMT, MOMT, DC</p>
            <a href="single-especialista.php" class="btn btn--border">Ver perfil</a>
        </div><!-- /.item__doc -->
        <div class="item__doc">
            <a href="single-especialista.php" title="Titulo" class="item__doc__media">
                <img src="assets/doc.png" alt="Titulo">
            </a>
            <h3>Francisco Ubilla Benghi</h3>
            <p>Kinesiólogo, COMT, MOMT, DC</p>
            <a href="single-especialista.php" class="btn btn--border">Ver perfil</a>
        </div><!-- /.item__doc -->
    </div><!-- /.container container--especialistas -->
    <div class="btn__group btn__group--big">
        <a href="page-especialistas.php" class="btn btn--more" title="Conoce a nuestros especialistas">Conoce a nuestros especialistas</a>
    </div><!-- /.btn__group -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>
<script>
    $('.shade').hover(function() {
        var vertebra = $(this).attr('data-vertebra');
        var xaxis = $(this).attr('data-xaxis');
        $('#columna').css('background-position', xaxis + 'px 0');
        $('.show').removeClass('active');
        $('#' + vertebra).addClass('active');
    });
</script>