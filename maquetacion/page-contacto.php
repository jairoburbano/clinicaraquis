<?php
/**
 *
 *
 * @package		clinicaraquis
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'contacto';
$subpage = '';
$type = 'page';
$title = 'Contacto';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap contact-form">
    <h1 class="title">Contacto</h1><!-- /.title -->
    <div class="content content--small text-center">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
        </p>
    </div><!-- /.content content--small text-center -->
    <form action="" class="formulario formulario--contacto">
        <div class="input-group normal--group">
            <label for="username">Nombre</label>
            <input type="text" id="username" name="username">
        </div><!-- /.input-group -->
        <div class="input-group normal--group">
            <label for="lastname">Apellido</label>
            <input type="text" id="lastname" name="lastname">
        </div><!-- /.input-group -->
        <div class="input-group normal--group">
            <label for="subject">Asunto</label>
            <input type="text" id="subject" name="subject">
        </div><!-- /.input-group -->
        <div class="input-group normal--group">
            <label for="correo">Mail</label>
            <input type="email" id="correo" name="correo">
        </div><!-- /.input-group -->
        <div class="input-group textarea--group">
            <label for="message">Mensaje</label>
            <textarea name="message" id="message"></textarea>
        </div><!-- /.input-group -->
        <div class="send-group">
            <input type="submit" value="Enviar" class="btn btn--send">
        </div><!-- /.send-group -->
    </form><!-- /.formulario -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>