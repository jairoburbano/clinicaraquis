(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width();
    function menuMobile() {
        var icon = $('.js-icon-menu'),
            menu = $('.js-menu');
        icon.click(function() {
            menu.stop().slideToggle();
        });
    }
    function menuDesktop() {
        var header = $('.header'),
            scroll = $(window).scrollTop(),
            menuItem = $('.menu__item'),
            menuTop = $('.menu');
        if (scroll >= 80) {
            header.addClass('menu--fixed');
        } else {
            header.removeClass("menu--fixed");
        }
    }
    function focusInput() {
        var input = $('.input-group input, .input-group select, .input-group textarea')
        input.focusin(function() {
            $(this).parent().addClass('focus');
        });
        input.blur(function() {
            $(this).parent().removeClass('focus');
        });
    }
    function itemsNews() {
        var item = $('.item__news--normal .item__news__content'),
            image = $('.item__news--normal .item__news__media'),
            altura = 0,
            altura_elem;
        item.each(function () {
            $this = $(this);
            if ( $this.height() > altura ) {
                altura_elem = this;
                altura = $this.height();
            }
        });
        item.height(altura);
        if(windowSize > 1100) {
            image.height(altura + 60);
        }
    }
    function filtroZona() {
        var group = $('.filtros'), 
            filtroGroup = $('.filtros__group'),
            filtro = $('.filtros__group button'),
            item = $('.item__centros'),
            loader = $('.loader');
        if(windowSize < 740) {
            group.append('<select class="filtros--select"><option value="default">Filtrar por</option></select>');
            filtroGroup.hide();
            filtro.each(function() {
                var select = $('.filtros--select'),
                    valor = $(this).val(),
                    texto = $(this).text();
                select.append('<option value="'+valor+'">'+texto+'</option>')
            });
            $('.filtros--select').change(function() {
                var valor = $(this).val();
                loader.stop().slideDown().delay(700).slideUp();
                item.fadeOut(300);
                item.each(function() {
                    var items = $(this).attr('data-zona');
                    console.log(items);
                    if(valor == items) {
                        $(this).delay(1000).slideDown(300);
                    } else {
                        $(this).delay(1000).hide(300);
                    }
                });
                $('.centro__message').hide();
                setTimeout(function(){
                    if($('.container--centros').children(':visible').length == 0) {
                        $('.centro__message').slideDown();
                    }
                },1100);
            });
        }
        filtro.click(function() {
            var valor = $(this).val();
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            loader.stop().slideDown().delay(700).slideUp();
            item.fadeOut(300);
            item.each(function() {
                var items = $(this).attr('data-zona');
                if(valor == items) {
                    $(this).delay(1000).slideDown(300);
                } else {
                    $(this).delay(1000).hide(300);
                }
            });
            $('.centro__message').hide();
            setTimeout(function(){
                if($('.container--centros').children(':visible').length == 0) {
                    $('.centro__message').slideDown();
                }
            },1100);
        });
    }
    function filtroFixed() {
        var group = $('.filtros'),    
            scroll = $(window).scrollTop();
        if (scroll >= 80) {
            group.addClass('filtros--fixed');
        } else {
            group.removeClass("filtros--fixed");
        }
    }
    function singleDoc() {
        var cargo = $('.cargo'),
            media = $('.single__media');
        if(cargo.length) {
            var cargoTop = cargo.offset().top - 90;
            media.css('top', cargoTop);
        }
    }
    function gallery() {
        var slide = $('.js-slider__gallery'),
            texto = $('.gallery__text p'),
            fullscreen = $('.gallery__fullscreen');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                controlNav: false,
                controlsContainer: $(".custom-controls-container"),
                prevText: '<svg><use xlink:href="#shape-icon-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-icon-next" /></svg>',
                start: function(slider) {
                    $('.total-slides').text(slider.count);
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                },
                after: function(slider) {
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                }
            });
        });
        fullscreen.click(function() {
            $('.gallery').toggleClass('fullscreen');
            slide.resize();
        });
    }
    function slides() {
        var slide = $('.content__slider');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                directionNav: false
            });
        });
    }
    function imageSomos() {
        var content = $('.somos__media'),
            images = content.find('img').length;
        if(images == 1) {
            content.addClass('one-image')
        }
    }
    function accordeon() {
        var title = $('.expand__title');
        title.click(function() {
            $(this).parent().toggleClass('expand--open');
            $(this).parent().siblings().removeClass('expand--open');
            $(this).parent().siblings().find('.expand__content').slideUp();
            $(this).parent().find('.expand__content').stop().slideToggle();
        });
    }
    function popupLinks(){
        var $trigger = $('.popup');
        $trigger.on('click', function(e) {
            e.preventDefault();
            var width  = 575,
                height = 400,
                left   = ($window.width()  - width)  / 2,
                top    = ($window.height() - height) / 2,

                opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;

            window.open(this.href,'compartir', opts);
        });
    }
    if(windowSize < 1100) {
        menuMobile();
    }
    if(windowSize > 740) {
        $(window).ready(function() {
            itemsNews();
        });
    }
    if(windowSize > 1100) {
        menuDesktop();
        singleDoc();
        $(window).scroll(function() {
            menuDesktop();
            filtroFixed();
        });
    }
    filtroZona();
    focusInput();
    gallery();
    slides();
    imageSomos();
    accordeon();
    popupLinks();
})(jQuery);
