(function ($) {
    $.validator.addMethod("customemail", 
                          function(value, element) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(value);
    }, 
                          "Tu correo no es válido"
                         );
    /**
     * Validación del formulario usando jQuery Validate
     */
    function validacionFormulario() {
        $('<div class="message"></div>').appendTo('.formulario--contacto');
        $('.formulario--contacto').validate({
            rules: {
                username: "required",
                lastname: "required",
                subject: "required",
                correo: {
                    required: {
                        depends: function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        } 
                    },
                    customemail: true
                },
                message: {
                    required: true,
                    minlength: 8
                }
            },
            messages: {
                username: "Este campo es requerido",
                lastname: "Este campo es requerido",
                subject: "Este campo es requerido",
                correo: {
                    required: "Este campo es requerido",
                    email: "Correo inválido"
                },
                message: {
                    required: "Ingresa un mensaje",
                    minlength: "Ingresa al menos 8 caracteres"
                }
            },
            errorElement: 'p',
            errorClass: 'error',
            validClass: 'valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.input-group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.input-group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                $('.contact-form .loading').css({opacity: 0}).animate({opacity: 1});
                $('.formulario--contacto-submit').text('Enviando...');
                $('.formulario--contacto-submit').prop('disabled', true);
                var form = $('.formulario--contacto'),
                    formURL = form.attr("action");

                var formData = new FormData($('.formulario--contacto')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        $('.formulario--contacto .message').addClass('msg-error').html('<p>Mensaje de error</p>').fadeIn().delay(3000).fadeOut().removeClass('msg-error');
                    },
                    success : function(result) {
                        var obj = result;
                        if (obj.exito === 'exito') {
                            $('.contact-form .loading').fadeOut();
                            $('.contact-form .message').html('<p>Mensaje de éxito</p>').fadeIn().delay(3000).fadeOut();
                            $('.formulario--contacto').find('.valid').removeClass('valid');
                            $('.formulario--contacto')[0].reset();
                            $('.formulario--contacto-submit').prop('disabled', false);
                        } else {
                            $('.formulario--contacto .message').addClass('msg-error').html('<p>'+obj.message+'</p>').fadeIn().delay(3000).fadeOut().removeClass('msg-error');
                        }
                    }
                } );
                return false;
            }
        });
    }
    validacionFormulario();
})(jQuery);