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
$subpage = 'single-centros';
$type = 'page';
$title = 'Single Centro Clinico';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap">
    <h1 class="title">Centro Clínico Santiago centro</h1><!-- /.title -->
</div><!-- /.wrap -->
<div class="reverse-column">
    <div class="banner">
        <!--NOTE: Siempre van 4 imagenes con este orden-->
        <div class="banner--dest">
            <!--NOTE: 720*480 -->
            <img src="assets/banner/1.jpg" alt="Titulo">
        </div><!-- /.banner--dest -->
        <div class="banner__image">
            <div class="banner__media">
                <!--NOTE: 560*440 -->
                <img src="assets/banner/2.jpg" alt="Titulo">
            </div><!-- /.banner__media -->
            <div class="banner__media">
                <!--NOTE: 290*190 -->
                <img src="assets/banner/3.jpg" alt="Titulo">
            </div><!-- /.banner__media -->
            <div class="banner__media">
                <!--NOTE: 290*190 -->
                <img src="assets/banner/4.jpg" alt="Titulo">
            </div><!-- /.banner__media -->
        </div><!-- /.banner__image -->
    </div><!-- /.banner -->
    <div class="wrap">
        <div class="content content--small--wide">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
            </p>
        </div><!-- /.content content--small--wide -->
    </div><!-- /.wrap -->
</div><!-- /.reverse-column -->
<div class="wrap reverse-column centro-mapa">
    <a href="www.maps.google.com" target="_blank" class="btn btn--more btn--icon" title="Como llegar?">
        <svg><use xlink:href="#shape-icon-place" /></svg>
        <span>¿Como llegar?</span>
    </a>
    <a href="#" target="_blank" class="btn btn--more btn--abs" title="Reserva tu hora">Reserva tu hora</a>
    <div id="map"></div><!-- /#map -->
</div><!-- /.wrap -->
<div class="wrap">
    <h2 class="small">Otros centros Raquis</h2><!-- /.small -->
    <div class="container container--centros related">
        <div class="item__centros" data-zona="zona-norte">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
        <div class="item__centros" data-zona="zona-sur">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
        <div class="item__centros" data-zona="zona-sur">
            <a href="single-centros.php" class="item__centros__media" title="titulo">
                <img src="assets/centros.jpg" alt="Titulo">
            </a>
            <p>Santiago, Región metropolitana</p>
            <h4>Centro clínico raquis Santiago centro</h4>
            <a href="single-centros.php" class="btn btn--border" title="Más información">Más información</a>
        </div><!-- /.item__centros -->
    </div><!-- /.container container--centros -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    function initialize() {
        //MAPA
        var myLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var thisLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var myOptions = {
            zoom: 15, //nivel de zoom
            center: myLatlng,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            keyboardShortcuts: false,
            zoomControl: true,
            draggable: false,
            zoomControlOptions: {
                position: google.maps.ControlPosition.TOP_LEFT
            },
            streetViewControl: false,
        }
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var marker = new google.maps.Marker({
            position: thisLatlng,
            map: map,
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>