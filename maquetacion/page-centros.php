<?php
/**
 *
 *
 * @package		clinicaraquis
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'centros-clinicos';
$subpage = '';
$type = 'page';
$title = 'Centros Clinicos';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="filtros">
    <nav class="filtros__group">
        <button value="zona-norte">Zona Norte</button>
        <button value="zona-centro">Zona Centro</button>
        <button value="zona-sur">Zona Sur</button>
    </nav><!-- /.filtros__group -->
</div><!-- /.filtros -->
<div class="wrap wrap--single--centros">
    <h1 class="title">Nuestros centros Clínicos</h1><!-- /.title -->
    <div class="loader">
        <img src="img/raquis-loader.gif" alt="Loader">
    </div><!-- /.loader -->
    <div class="container container--centros">
        <div class="item__centros" data-zona="zona-norte">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
               <!--NOTE: 370*290 -->
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
        <div class="item__centros" data-zona="zona-norte">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
        <div class="item__centros" data-zona="zona-norte">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
        <div class="item__centros" data-zona="zona-centro">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
        <div class="item__centros" data-zona="zona-norte">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
        <div class="item__centros" data-zona="zona-centro">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
        <div class="centro__message">
            <p>Por el momento no hay clínicas en esta zona. Muy pronto estaremos cerca tuyo.</p>
        </div><!-- /.centro__message -->
    </div><!-- /.container container--centros -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>