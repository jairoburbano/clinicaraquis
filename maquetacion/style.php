<?php
/**
 *
 *
 * @package		clinicaraquis
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = '';
$subpage = '';
$type = 'page';
$title = ' ';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap">
    <h1 class="title">Titulo de página</h1><!-- /.title -->
    <h1>H1: Grumpy wizards make toxic brew for the evil Queen and Jack</h1>
    <h2>H2: grumpy wizards make toxic brew for the evil queen and jack</h2>
    <h3>H3: Grumpy wizards make toxic brew for the evil Queen and Jack</h3>
    <h4>H4: Grumpy wizards make toxic brew for the evil Queen and Jack</h4>
    <h5>H5: Grumpy wizards make toxic brew for the evil Queen and Jack</h5>
    <h6>H6: Grumpy wizards make toxic brew for the evil Queen and Jack</h6>
    <p>
        In tempus condimentum convallis. Nunc nec dolor blandit, auctor elit nec, sollicitudin lectus. Nunc placerat urna non sem vestibulum, a viverra massa mollis. Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
    </p>
    <p>
        Nunc <a href="#">finibus lacus</a> nec tempus venenatis. <strong>Fusce pulvinar tincidunt quam ut luctus.</strong> Proin in risus id est sollicitudin eleifend. Vivamus ut porttitor est. Vivamus et malesuada neque. Quisque <b>consequat dictum</b> posuere.
    </p>
    <blockquote>
        “100% Natural: sin medicamentos ni cirugía, todo los que necesitamos está en nuestro organismo”
    </blockquote>
    <ol>
        <li>
            In tempus condimentum convallis. Nunc nec dolor blandit, auctor elit nec, sollicitudin lectus.
        </li>
        <li>
            Nunc placerat urna non sem vestibulum, a viverra massa mollis.    
        </li>
        <li>
            Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
            <ul>
                <li>
                    Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                </li>
                <li>
                    Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                </li>
            </ul>
        </li>
        <li>
            Nunc finibus lacus nec tempus venenatis. Fusce pulvinar tincidunt quam ut luctus. Proin in risus id est sollicitudin eleifend. Vivamus ut porttitor est.
            <ol>
                <li>
                    Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                </li>
                <li>
                    Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                </li>
            </ol>
        </li>
    </ol>
    <ul>
        <li>
            In tempus condimentum convallis. Nunc nec dolor blandit, auctor elit nec, sollicitudin lectus.
        </li>
        <li>
            Nunc placerat urna non sem vestibulum, a viverra massa mollis.    
        </li>
        <li>
            Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
            <ul>
                <li>
                    Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                </li>
                <li>
                    Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                </li>
            </ul>
        </li>
        <li>
            Nunc finibus lacus nec tempus venenatis. Fusce pulvinar tincidunt quam ut luctus. Proin in risus id est sollicitudin eleifend. Vivamus ut porttitor est.
            <ol>
                <li>
                    Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                </li>
                <li>
                    Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                </li>
            </ol>
        </li>
    </ul>
    <div class="container container--news">
        <!--NOTE: Noticia destacada-->
        <div class="item__news item__news--dest">
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
        <!--NOTE: Noticia normal-->
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
                <h2>¿Quiénes pueden practicar Pilates? Es una buena pregunta</h2>
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
                <h2>¿Quiénes pueden practicar Pilates? Es una buena pregunta asdadkkasd asdkjnadjnasd</h2>
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
                <h2>¿Quiénes pueden practicar Pilates? Es una buena pregunta</h2>
                <a href="single.php" title="Leer más" class="btn btn--border">Leer más</a>
            </div><!-- /.item__news__content -->
        </div><!-- /.item__news -->
    </div><!-- /.container container--news -->
    <div class="container container--especialistas">
        <div class="item__doc">
            <a href="single-especialista.php" title="Titulo" class="item__doc__media">
                <img src="assets/doc.png" alt="Titulo">
            </a>
            <h3>Francisco Ubilla Benghi</h3>
            <p>Kinesiólogo, COMT, MOMT, DC</p>
            <a href="#" class="btn btn--border">Ver perfil</a>
        </div><!-- /.item__doc -->
        <div class="item__doc">
            <a href="single-especialista.php" title="Titulo" class="item__doc__media">
                <img src="assets/doc.png" alt="Titulo">
            </a>
            <h3>Francisco Ubilla Benghi</h3>
            <p>Kinesiólogo, COMT, MOMT, DC</p>
            <a href="#" class="btn btn--border">Ver perfil</a>
        </div><!-- /.item__doc -->
        <div class="item__doc">
            <a href="single-especialista.php" title="Titulo" class="item__doc__media">
                <img src="assets/doc.png" alt="Titulo">
            </a>
            <h3>Francisco Ubilla Benghi</h3>
            <p>Kinesiólogo, COMT, MOMT, DC</p>
            <a href="#" class="btn btn--border">Ver perfil</a>
        </div><!-- /.item__doc -->
    </div><!-- /.container container--especialistas -->
    <div class="container container--centros">
        <div class="item__centros">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
        <div class="item__centros">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
        <div class="item__centros">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
    </div><!-- /.container container--centros -->
    <svg><use xlink:href="#shape-icon-blockquote" /></svg>
    <svg><use xlink:href="#shape-icon-dislike" /></svg>
    <svg><use xlink:href="#shape-icon-engranaje" /></svg>
    <svg><use xlink:href="#shape-icon-fullscreen" /></svg>
    <svg><use xlink:href="#shape-icon-phone" /></svg>
    <svg><use xlink:href="#shape-icon-place" /></svg>
    <svg><use xlink:href="#shape-icon-reloj" /></svg>
    <svg><use xlink:href="#shape-icon-sq-facebook" /></svg>
    <svg><use xlink:href="#shape-icon-sq-instagram" /></svg>
    <svg><use xlink:href="#shape-icon-sq-linkedin" /></svg>
    <svg><use xlink:href="#shape-icon-sq-twitter" /></svg>
    <svg><use xlink:href="#shape-icon-facebook" /></svg>
    <svg><use xlink:href="#shape-icon-twitter" /></svg>
    <svg><use xlink:href="#shape-icon-mail" /></svg>
    <a href="#" class="btn btn--cat">Category</a>
    <a href="#" class="btn btn--border">Ver perfil</a>
    <a href="#" class="btn btn--border btn--big">Más infomación</a>
    <a href="#" class="btn btn--border btn--disabled">Ver perfil</a>
    <a href="#" class="btn btn--more">Ver más noticias</a>
    <a href="#" class="btn btn--more btn--disabled">Ver más noticias</a>
    <div class="btn__group">
        <a href="#" class="btn btn--more">Ver más noticias</a>
    </div><!-- /.btn__group -->
    <div class="btn__group btn__group--small">
        <a href="#" class="btn btn--more" title="Cargar más">Cargar más</a>
    </div><!-- /.btn__group -->
    <div class="btn__group btn__group--big">
        <a href="#" class="btn btn--more">Conoce a nuestros especialistas</a>
    </div><!-- /.btn__group -->
    <form action="" class="formulario">
        <div class="input-group normal--group">
            <label for="">Input label</label>
            <input type="text">
        </div><!-- /.input-group -->
        <div class="input-group normal--group valid">
            <label for="">Valid label</label>
            <input type="text">
        </div><!-- /.input-group -->
        <div class="input-group normal--group error">
            <label for="">Error label</label>
            <input type="text">
            <p class="error">Feedback validación error</p><!-- /.error -->
        </div><!-- /.input-group -->
        <div class="input-group select--group">
            <label for="">Select label</label>
            <div class="style-select">
                <select name="" id="">
                    <option value="default">Selecciona una opción</option>
                    <option value="2">Otra opcion</option>
                </select>
            </div><!-- /.style-select -->
        </div><!-- /.input-group -->
        <div class="input-group textarea--group">
            <label for="">textarea label</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div><!-- /.input-group -->
        <div class="message"><p>Mensaje de éxito</p></div><!-- /.message -->
        <div class="message msg-error"><p>Mensaje de error</p></div><!-- /.message -->
        <div class="send-group">
            <input type="submit" value="Enviar" class="btn btn--send">
        </div><!-- /.send-group -->
    </form><!-- /.formulario -->
    <div class="container container--column">
        <div class="item--column">
            <img src="assets/convenios/convenio_anfus.png" alt="Titulo">
        </div><!-- /.item--column -->
        <div class="item--column">
            <img src="assets/convenios/convenio_duoc.png" alt="Titulo">
        </div><!-- /.item--column -->
        <div class="item--column">
            <img src="assets/convenios/convenio_emprender.png" alt="Titulo">
        </div><!-- /.item--column -->
        <div class="item--column">
            <img src="assets/convenios/convenio_go.png" alt="Titulo">
        </div><!-- /.item--column -->
        <div class="item--column">
            <img src="assets/convenios/convenio_hcm.png" alt="Titulo">
        </div><!-- /.item--column -->
        <div class="item--column">
            <img src="assets/convenios/convenio_muni_provi.png" alt="Titulo">
        </div><!-- /.item--column -->
        <div class="item--column">
            <img src="assets/convenios/convenio_sheruns.png" alt="Titulo">
        </div><!-- /.item--column -->
        <div class="item--column">
            <img src="assets/convenios/convenio_soyrunner.png" alt="Titulo">
        </div><!-- /.item--column -->
    </div><!-- /.container -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>