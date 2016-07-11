<?php
/**
 *
 *
 * @package		clinicaraquis
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'quiropractica';
$subpage = '';
$type = 'page';
$title = 'Que es la quiropractica';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner--somos">
    <!--NOTE: background-image= 1440*450-->
    <div class="banner__image" style="background-image: url(assets/slide-somos.jpg);"></div><!-- /.banner__image -->
    <h1 class="title">¿Que es la quiropractica?</h1>
</div><!-- /.banner--somos -->
<div class="wrap">
    <div class="content content--small">
        <p>
            <strong>
                La Quiropráctica es una profesión sanitaria, reconocida por la Organización Mundial de la Salud, dedicada al cuidado de la salud de forma natural, que pone énfasis en la relación existente entre la columna vertebral y el correcto funcionamiento del sistema nervioso.
            </strong>
        </p>
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
    </div><!-- /.content -->
</div><!-- /.wrap -->
<div class="content__slider">
   <!--NOTE: background-image= 1440*450-->
    <div class="slider__media" style="background-image: url(assets/slide-somos.jpg);"></div><!-- /.slider__media -->
    <ul class="slides">
        <li>
            <div class="content">
                “100% Natural: sin medicamentos ni cirugía, todo los que necesitamos está en nuestro organismo”
            </div><!-- /.content -->
        </li>
        <li>
            <div class="content">
                “100% Natural: sin medicamentos ni cirugía, todo los que necesitamos está en nuestro organismo”
            </div><!-- /.content -->
        </li>
        <li>
            <div class="content">
                “100% Natural: sin medicamentos ni cirugía, todo los que necesitamos está en nuestro organismo”
                “100% Natural: sin medicamentos ni cirugía, todo los que necesitamos está en nuestro organismo”
                “100% Natural: sin medicamentos ni cirugía, todo los que necesitamos está en nuestro organismo”
                “100% Natural: sin medicamentos ni cirugía, todo los que necesitamos está en nuestro organismo”
            </div><!-- /.content -->
        </li>
    </ul><!-- /.slide -->
</div><!-- /.content__slider -->
<div class="wrap">
    <div class="quiro__columna">
        <h1 class="title">Columna Interactiva</h1><!-- /.title -->
        <?php include 'columna.php';?>
    </div><!-- /.quiro_columna -->
</div><!-- /.wrap -->
<div class="wrap">
    <h1 class="title">Quiropráctica: Ciencia, Arte y Filosofía</h1><!-- /.title -->
    <div class="content content--quiro">
        <p>
            La palabra Quiropráctica es una combinación de las palabras Griegas <strong>"chiros" = manos y "praktikos" = hecho o práctica</strong>. Esto quiere decir <strong>HECHO POR LAS MANOS</strong>.
        </p>
        <img src="assets/quiro.jpg" alt="Titulo">
        <p>
            Ciencia por su formación universitaria y los conocimientos científicos en los que se basa. Arte por el largo aprendizaje de años que requiere la realización del ajuste manual específico. Pero la identidad y particularidad de la quiropráctica reside sobre todo en su filosofía, en su visión del ser humano, ya que de ella deriva su ejercicio.
        </p>
        <p>
            <strong>La Quiropráctica</strong> reconoce que el cuerpo es mucho más que la máquina más perfecta y sofisticada del universo: dispone de una capacidad de auto-regeneración que en ámbitos quiroprácticos se conoce como inteligencia innata. Esa misma inteligencia, esa misma fuerza que a partir de la unión de dos células ha podido construir un ser humano, es la mejor situada para curar ese mismo cuerpo y mantenerlo sano a lo largo de su vida.
        </p>
        <p>
            Esa inteligencia se expresa a través del sistema nervioso: el cerebro y las redes de comunicación que lo conectan al resto del cuerpo.
            La misión del Quiropráctico consiste en asegurarse que esta inteligencia innata, esta capacidad del mismo cuerpo para curarse y estar sano, puede expresarse plenamente, libre de interferencias que pudieran mermar esa capacidad. Las interferencias, producidas por varios factores, se forman principalmente en la columna vertebral, por lo que el Quiropráctico concentra la mayor parte de su atención en esta zona.
        </p>
        <p>
            <strong>En español, el término adecuado es Quiropráctica y no el de Quiropraxia</strong>, que viene derivado del francés “chiropraxie”.
            Los Doctores en Quiropráctica siempre utilizan en español el término Quiropráctica y no Quiropraxia, que suele ser utilizado erróneamente por personas ajenas a la profesión.
            El Quiropráctico recibe el titulo de “Doctor en Quiropráctica” tras completar una carrera de un mínimo de 6 años en la universidad.
        </p>
    </div><!-- /.content content--quiro -->
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