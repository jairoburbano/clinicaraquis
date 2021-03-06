<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		clinicaraquis
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body class="<?php if($page == 'page-404') echo 'page-404'; ?>">
        <?php include('svg-defs.svg'); ?>
        <div class="page-wrap">
            <header class="header">
                <div class="header--top">
                    <a href="index.php" class="header--logo">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="430.5px" height="120.9px" viewBox="0 0 430.5 120.9" enable-background="new 0 0 430.5 120.9" xml:space="preserve">
                            <defs>
                            </defs>
                            <g>
                                <path fill="#424243" d="M125.3,75.4L107,50.6h-4.2v24.8h-8.9V18h19.7c9.1,0,18.9,3.2,18.9,16c0,8.1-3.7,15.3-15.3,16.4l18.7,25 H125.3z M114.1,24.8h-11.3v19h11.4c6.7,0,9.3-4.3,9.3-9.9C123.5,28.2,120.3,24.8,114.1,24.8z"/>
                                <path fill="#A5582E" d="M245,77c-19.9,0-25.9-13-25.9-30.1c0-17,6.7-30,26-30c19.2,0,25.6,12.5,25.6,30C270.7,64,264.1,77,245,77z M245,23.8c-12.1,0-16.8,8-16.8,23.2c0,15.5,4.6,23.3,16.8,23.3c12.4,0,16.5-8.8,16.5-23.3C261.5,31.7,257,23.8,245,23.8z M261.5,87l-19.4-2.9l3.1-5.1l19.4,1.8L261.5,87z"/>
                                <path fill="#424243" d="M314.6,77c-16.1,0-23.2-7.5-23.2-22.8V18h8.9v35.3c0,13.8,5.4,16.9,14.3,16.9c8.4,0,13.1-4.3,13.1-16.9V18 h8.9v36.4C336.7,69.6,329.1,77,314.6,77z"/>
                                <path fill="#424243" d="M361.8,75.4V18h8.9v57.4H361.8z"/>
                                <path fill="#424243" d="M407.7,77c-5,0-11.4-1.3-16.3-2.7l2.8-7.5c4.3,1.6,8.9,3.4,13.6,3.4c7,0,13.6-1.9,13.6-9.5 c0-6.5-6.4-8.7-13.3-11.3c-8-2.9-16.7-6.3-16.7-17c0-11.1,10.1-15.4,20.7-15.4c3.9,0,10.1,0.8,14.8,2.4l-2.8,7.5 c-3.3-1.4-6.6-3.1-12.1-3.1c-8.3,0-11.5,3.6-11.5,8.6c0,5.1,5.1,7,11.1,9.1c8.5,3,18.9,6.3,18.9,19C430.5,73.8,419.6,77,407.7,77z" />
                                <g>
                                    <polygon fill="#424243" points="165.7,61.4 166.5,59.2 166.5,59.2 169.8,50.3 177.9,28.3 185.3,49.7 185.3,49.7 185.3,49.7 186.3,52.5 186.3,52.5 189.3,61.4 189.3,61.4 194.2,75.4 204,75.4 182.3,18 174.5,18 151.1,75.4 160.5,75.4 165.7,61.4 		"/>
                                </g>
                                <g>
                                    <path fill="#A5582E" d="M35.9,108.8c-3.3,0.4-5.9,1.1-5.7,4c0.2,3.8,7.7,8.1,10.5,8.1c2.5,0,1.5-8.3,1.4-9 C42,109,39.9,108.3,35.9,108.8z"/>
                                    <path fill="#A5582E" d="M32,14.3C5.6,14.3,0,34.6,0,59.7s6.1,45.4,32,45.4c26,0,32-20.3,32-45.4C64,34.6,58.4,14.3,32,14.3z M40.2,49.6c0,2.2-1.7,2.7-3.8,2.7s-3.8-0.5-3.8-2.7s1.7-2.7,3.8-2.7C38.5,46.8,40.2,47.4,40.2,49.6z M37.3,39.4 c0,2.2-1.7,2.7-3.8,2.7s-3.8-0.5-3.8-2.7s1.7-2.7,3.8-2.7C35.5,36.7,37.3,37.2,37.3,39.4z M34,68.3c2.9,0,5.2,0.7,5.2,3.7 s-2.3,3.7-5.2,3.7S28.8,75,28.8,72C28.8,68.9,31.1,68.3,34,68.3z M22.8,20.5c0-1.9,1.4-2.3,3.2-2.3s3.2,0.4,3.2,2.3 s-1.4,2.3-3.2,2.3C24.2,22.7,22.8,22.3,22.8,20.5z M26,29.8c0-2,1.6-2.5,3.5-2.5s3.5,0.5,3.5,2.5s-1.6,2.5-3.5,2.5 C27.5,32.3,26,31.8,26,29.8z M26.7,84c0-3,2.3-3.7,5.2-3.7s5.2,0.7,5.2,3.7s-2.3,3.7-5.2,3.7S26.7,87,26.7,84z M34,100.5 c-3.2,0-5.8-0.7-5.8-4.1s2.6-4.1,5.8-4.1s5.8,0.8,5.8,4.1C39.8,99.8,37.2,100.5,34,100.5z M37.1,63.2c-2.6,0-4.7-0.6-4.7-3.3 c0-2.7,2.1-3.3,4.7-3.3s4.7,0.6,4.7,3.3S39.7,63.2,37.1,63.2z"/>
                                    <path fill="#A5582E" d="M24.6,11.5c1.7,0,3.1-0.4,3.1-2.2s-1.4-2.2-3.1-2.2c-1.7,0-3.1,0.4-3.1,2.2S22.9,11.5,24.6,11.5z"/>
                                    <path fill="#A5582E" d="M24.4,2.8c1.1,0,2-0.3,2-1.4c0-1.2-0.9-1.4-2-1.4s-2,0.3-2,1.4C22.3,2.5,23.2,2.8,24.4,2.8z"/>
                                </g>
                                <path fill="#424243" d="M98.9,114.6c-3.6,0-5-2.3-5-5.7c0-3,1.2-5.6,5.1-5.6c0.9,0,2,0.2,2.9,0.4l-0.7,1.8 c-0.7-0.3-1.4-0.6-2.2-0.6c-2.1,0-2.9,1.5-2.9,4c0,2.7,0.7,4.1,2.8,4.1c0.9,0,1.6-0.3,2.4-0.7l0.7,1.8 C100.9,114.4,100.1,114.6,98.9,114.6z"/>
                                <path fill="#424243" d="M106.6,114.3v-10.8h2.1v9.2h4.5v1.7h-6.6V114.3z"/>
                                <polygon fill="#424243" points="118.8,101.4 117.5,101.4 119.1,99.5 121,99.5 	"/>
                                <rect x="117.2" y="103.4" fill="#424243" width="2.1" height="10.8"/>
                                <path fill="#424243" d="M130.6,114.3l-3.8-8.3v8.3h-2v-10.8h3.1l3.8,8.3v-8.3h2.1v10.8H130.6z"/>
                                <path fill="#424243" d="M139.2,114.3v-10.8h2.1v10.8H139.2z"/>
                                <path fill="#424243" d="M151.2,114.6c-3.6,0-5-2.3-5-5.7c0-3,1.2-5.6,5.1-5.6c0.9,0,2,0.2,2.9,0.4l-0.7,1.8 c-0.7-0.3-1.4-0.6-2.2-0.6c-2.1,0-2.9,1.5-2.9,4c0,2.7,0.7,4.1,2.8,4.1c0.9,0,1.6-0.3,2.4-0.7l0.7,1.8 C153.3,114.4,152.4,114.6,151.2,114.6z"/>
                                <path fill="#424243" d="M165.9,114.3l-1-2.9H161l-1,2.9h-2.2l4.4-10.8h1.9l4.1,10.8H165.9z M163.1,105.8l-1.4,4h2.7L163.1,105.8z" />
                                <path fill="#424243" d="M175.5,114.6c-0.9,0-2.3-0.3-3.2-0.5l0.7-1.8c0.8,0.3,1.7,0.7,2.6,0.7c1.4,0,2.3-0.3,2.3-1.5 s-1.3-1.5-2.7-2.1c-1.4-0.6-2.9-1.3-2.9-3.2c0-2.1,2.2-3,4.2-3c0.7,0,2.2,0.2,3,0.5l-0.7,1.8c-0.6-0.3-1.4-0.6-2.4-0.6 c-1.6,0-2,0.7-2,1.4c0,0.9,1,1.2,2.2,1.6c1.6,0.6,3.4,1.3,3.4,3.6C180,114.1,177.8,114.6,175.5,114.6z"/>
                                <path fill="#424243" d="M196.8,114.6c-3.9,0-5.1-2.4-5.1-5.7c0-3.2,1.3-5.7,5.1-5.7c3.7,0,5,2.3,5,5.7 C201.8,112.1,200.6,114.6,196.8,114.6z M196.8,104.8c-2,0-2.9,1.2-2.9,4.1c0,3,0.9,4.1,2.9,4.1c2.1,0,2.9-1.4,2.9-4.1 C199.7,106,198.7,104.8,196.8,104.8z M199.9,116.7l-3.8-0.6l0.7-1.2l3.8,0.4L199.9,116.7z"/>
                                <path fill="#424243" d="M211.5,114.6c-3.1,0-4.6-1.4-4.6-4.3v-6.8h2.1v6.7c0,2.4,1.1,2.9,2.5,2.9c1.3,0,2.3-0.7,2.3-2.9v-6.7h2.1 v6.9C215.9,113.2,214.3,114.6,211.5,114.6z"/>
                                <path fill="#424243" d="M221.3,114.3v-10.8h2.1v10.8H221.3z"/>
                                <path fill="#424243" d="M234.8,114.3l-3.3-4.5H231v4.5h-2.1v-10.8h4.1c1.7,0,3.7,0.6,3.7,3.1c0,1.5-0.7,2.8-2.7,3.1l3.4,4.6 L234.8,114.3L234.8,114.3z M233,105.1h-2v3.1h2c1,0,1.4-0.7,1.4-1.6C234.5,105.7,234,105.1,233,105.1z"/>
                                <path fill="#424243" d="M246.6,114.6c-3.9,0-5.1-2.4-5.1-5.7c0-3.2,1.3-5.7,5.1-5.7c3.7,0,5,2.3,5,5.7 C251.7,112.1,250.4,114.6,246.6,114.6z M246.6,104.8c-2,0-2.9,1.2-2.9,4.1c0,3,0.9,4.1,2.9,4.1c2.1,0,2.9-1.4,2.9-4.1 C249.5,106,248.6,104.8,246.6,104.8z"/>
                                <path fill="#424243" d="M260.8,110h-1.9v4.2h-2.1v-10.8h3.8c2.2,0,3.8,0.8,3.8,3.2C264.4,109.1,262.9,110,260.8,110z M260.5,105.1 h-1.7v3.3h1.7c0.9,0,1.6-0.4,1.6-1.7C262.3,105.2,261.4,105.1,260.5,105.1z"/>
                                <path fill="#424243" d="M275.2,114.3l-3.3-4.5h-0.5v4.5h-2.1v-10.8h4.1c1.7,0,3.7,0.6,3.7,3.1c0,1.5-0.7,2.8-2.7,3.1l3.4,4.6 L275.2,114.3L275.2,114.3z M273.4,105.1h-2v3.1h2c1,0,1.4-0.7,1.4-1.6C274.9,105.7,274.4,105.1,273.4,105.1z"/>
                                <polygon fill="#424243" points="287.3,101.4 286,101.4 287.7,99.5 289.5,99.5 	"/>
                                <path fill="#424243" d="M287.8,103.4h-1.9l-4.4,10.8h2.2l1-2.9h3.9l1,2.9h2.3L287.8,103.4z M285.3,109.8l1.4-4l1.3,4H285.3z"/>
                                <path fill="#424243" d="M300.9,114.6c-3.6,0-5-2.3-5-5.7c0-3,1.2-5.6,5.1-5.6c0.9,0,2,0.2,2.9,0.4l-0.7,1.8 c-0.7-0.3-1.4-0.6-2.2-0.6c-2.1,0-2.9,1.5-2.9,4c0,2.7,0.7,4.1,2.8,4.1c0.9,0,1.6-0.3,2.4-0.7l0.7,1.8 C303,114.4,302.1,114.6,300.9,114.6z"/>
                                <path fill="#424243" d="M312.5,105.1v9.2h-2.1v-9.2h-3v-1.6h8.1v1.6H312.5z"/>
                                <path fill="#424243" d="M319.7,114.3v-10.8h2.1v10.8H319.7z"/>
                                <path fill="#424243" d="M331.7,114.6c-3.6,0-5-2.3-5-5.7c0-3,1.2-5.6,5.1-5.6c0.9,0,2,0.2,2.9,0.4l-0.7,1.8 c-0.7-0.3-1.4-0.6-2.2-0.6c-2.1,0-2.9,1.5-2.9,4c0,2.7,0.7,4.1,2.8,4.1c0.9,0,1.6-0.3,2.4-0.7l0.7,1.8 C333.8,114.4,332.9,114.6,331.7,114.6z"/>
                                <path fill="#424243" d="M346.4,114.3l-1-2.9h-3.9l-1,2.9h-2.2l4.4-10.8h1.9l4.1,10.8H346.4z M343.6,105.8l-1.4,4h2.7L343.6,105.8z" />
                                <path fill="#424243" d="M356,114.6c-0.9,0-2.3-0.3-3.2-0.5l0.7-1.8c0.8,0.3,1.7,0.7,2.6,0.7c1.4,0,2.3-0.3,2.3-1.5 s-1.3-1.5-2.7-2.1s-2.9-1.3-2.9-3.2c0-2.1,2.2-3,4.2-3c0.7,0,2.2,0.2,3,0.5l-0.7,1.8c-0.6-0.3-1.4-0.6-2.4-0.6c-1.6,0-2,0.7-2,1.4 c0,0.9,1,1.2,2.2,1.6c1.6,0.6,3.4,1.3,3.4,3.6C360.5,114.1,358.3,114.6,356,114.6z"/>
                            </g>
                        </svg>
                    </a><!-- /.header--logo -->
                    <div class="header__menu js-icon-menu">
                        <span>Menu</span>
                        <div class="header__menu__icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="36.7px" height="36.7px" viewBox="0 0 36.7 36.7" enable-background="new 0 0 36.7 36.7" xml:space="preserve"><defs></defs><g id="Header_copia"><circle id="XMLID_4_" fill="none" stroke="#BC5827" stroke-width="2" stroke-miterlimit="10" cx="18.3" cy="18.3" r="17.3"/><rect id="XMLID_3_" x="10.8" y="12.3" fill="#404041" width="15" height="2"/><rect id="XMLID_2_" x="10.8" y="17.3" fill="#404041" width="15" height="2"/><rect id="XMLID_1_" x="10.8" y="22.3" fill="#404041" width="15" height="2"/></g></svg>
                        </div><!-- /.header__menu__icon -->
                    </div><!-- /.header__menu -->
                </div><!-- /.header--top -->
                <div class="header--bottom js-menu">
                    <nav class="nav">
                        <a href="page-quienes-somos.php" class="menu-item <?php if($page == 'quienes-somos') echo 'current-menu-item'; ?>" title="Quiénes somos">Quiénes somos</a>
                        <a href="page-centros.php" class="menu-item <?php if($page == 'centros-clinicos') echo 'current-menu-item'; ?>" title="Centros Clínicos">Centros Clínicos</a>
                        <a href="page-quiropractica.php" class="menu-item <?php if($page == 'quiropractica') echo 'current-menu-item'; ?>" title="Quiropráctica">Quiropráctica</a>
                        <a href="page-especialistas.php" class="menu-item <?php if($page == 'especialistas') echo 'current-menu-item'; ?>" title="Especialistas">Especialistas</a>
                        <a href="page-blog.php" class="menu-item <?php if($page == 'blog') echo 'current-menu-item'; ?>" title="Blog">Blog</a>
                        <a href="page-preguntas-frecuentes.php" class="menu-item <?php if($page == 'preguntas-frecuentes') echo 'current-menu-item'; ?>" title="Preguntas frecuentes">Preguntas frecuentes</a>
                    </nav><!-- /.nav -->
                    <div class="menu">
                        <div class="menu__links">
                            <a href="page-contacto.php" class="menu__item <?php if($page == 'contacto') echo 'current-menu-item'; ?>" title="Contacto">Contacto</a>
                            <a href="page-convenios.php" class="menu__item <?php if($page == 'convenios') echo 'current-menu-item'; ?>" title="Convenios">Convenios</a>
                        </div><!-- /.menu__links -->
                        <a href="http://agendamiento.softwaredentalink.com/agendas/online/93acf75076f8628c4a58b409561c93d08b7866c7" target="_blank" class="menu__item--fill" title="Reserva tu hora">
                            <svg><use xlink:href="#shape-icon-reloj" /></svg>
                            Reserva tu hora
                        </a>
                    </div><!-- /.menu -->
                </div><!-- /.header--bottom -->
            </header><!-- /.header -->