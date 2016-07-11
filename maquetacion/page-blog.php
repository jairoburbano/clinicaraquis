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
$subpage = '';
$type = 'page';
$title = 'blog';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap wrap--blog">
    <div class="filters">
        <p>Categorias:</p>
        <div class="filters__select">
            <select onChange="window.location.href=this.children[this.selectedIndex].getAttribute('href');">
                <option value="default" href="http://www.google.com">Categoria de nombre largo</option>
                <option value="Categoria Uno" href="http://www.facebook.com">Categoria Uno</option>
            </select>
        </div><!-- /.filters__select -->
    </div><!-- /.filters -->
    <h1 class="title">Blog</h1><!-- /.title -->
</div><!-- /.wrap wrap--blog -->
<!--NOTE: Noticia destacada-->
<div class="item__news item__news--dest">
    <a href="single.php" title="Titulo" class="item__news__media">
        <!--NOTE: 1200*800 -->
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
<div class="wrap">
    <div class="container container--news">
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
    </div><!-- /.container container--news -->
    <ul class="paginador">
        <li>
            <a href="#" title="Anterior">
                <svg><use xlink:href="#shape-icon-prev" /></svg>
            </a>
        </li>
        <li>
            <a href="#" title="1" class="current">1</a>
        </li>
        <li>
            <a href="#" title="2">2</a>
        </li>
        <li>
            <a href="#" title="3">3</a>
        </li>
        <li>
            <a href="#" title="4">4</a>
        </li>
        <li>
            <a href="#" title="5">5</a>
        </li>
        <li>
            <a href="#" title="6">6</a>
        </li>
        <li>
            -
        </li>
        <li>
            <a href="#" title="12">12</a>
        </li>
        <li>
            <a href="#" title="Siguiente">
                <svg><use xlink:href="#shape-icon-next" /></svg>
            </a>
        </li>
    </ul><!-- /.paginador -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>