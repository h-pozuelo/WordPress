function mostrarFormulario() {
    document.getElementsByClassName('formulario')[0].style.display = 'block';
}

function ocultarFormulario() {
    document.getElementsByClassName('formulario')[0].style.display = 'none';
}

$(document).ready(function () {

    var offset = '80%';

    $('.animacion-mostrar').css('opacity', '0');
    $('.animacion-mostrar').each(function () {
        let elemento = $(this);
        $(elemento).waypoint(function (direction) {
            mostrarElemento($(elemento));
        }, { offset });
    });

    cssElemento($('.animacion-deslizar-arriba'), 'top');
    $('.animacion-deslizar-arriba').each(function () {
        let elemento = $(this);
        $(elemento).waypoint(function (direction) {
            deslizarElemento($(elemento), 'top');
        }, { offset });
    });

    cssElemento($('.animacion-deslizar-derecha'), 'right');
    $('.animacion-deslizar-derecha').each(function () {
        let elemento = $(this);
        $(elemento).waypoint(function (direction) {
            deslizarElemento($(elemento), 'right');
        }, { offset });
    });

    cssElemento($('.animacion-deslizar-izquierda'), 'left');
    $('.animacion-deslizar-izquierda').each(function () {
        let elemento = $(this);
        $(elemento).waypoint(function (direction) {
            deslizarElemento($(elemento), 'left');
        }, { offset });
    });

    function cssElemento($element, direction) {
        var cssProps = {};
        cssProps[direction] = '100px';
        cssProps['opacity'] = '0';
        $element.css(cssProps);
    };

    function mostrarElemento($element) {
        $element.delay(300).animate({
            'opacity': '1',
        }, 600);
    };

    function deslizarElemento($element, direction) {
        var animProps = {};
        animProps[direction] = '0px';
        animProps['opacity'] = '1';
        $element.delay(300).animate(animProps, 600);
    };

    hljs.initHighlightingOnLoad();

    $('body .banner-superior > .fila .formulario form').validation({
        autocomplete: 'off',
        liveValidation: false,
        formInvalidAlertWarning: 'Corrige los errores antes de enviar este formulario.',
        requiredMessage: function () {
            return 'Este es un campo obligatorio.';
        }
    });

    $('body .apartado-video .reproductor-de-video .controles-de-reproduccion button').magnificPopup({
        items: {
            src: 'https://www.youtube.com/embed/AaRhB3hOb3E?rel=0&autoplay=1',
        },
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 400,
        preloader: false,
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com',
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/AaRhB3hOb3E?rel=0&autoplay=1',
                },
            },
        },
    });

});