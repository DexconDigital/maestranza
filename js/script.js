// Boton de subir
$(document).ready(function() {

    $('.subir').click(function() {
        $('body, html').animate({
            scrollTop: '0px'
        }, 500);
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.subir').fadeIn(500);
            
        } else {
            $('.subir').fadeOut(500);
            
        }
    });

    $('#aliados_slide').owlCarousel({
        loop: true,
        margin: 10,
     //   autoplay: 100,
      //  autoplayHoverPause: false,   
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });

    $('#aliados2').owlCarousel({
        loop: true,
        margin: 10,
    //    autoplay: 100,
    //    autoplayHoverPause: false, 
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $('#aliados_slide1').owlCarousel({
        loop: true,
        margin: 10,
      //  autoplay: true,
       // autoplayTimeout: 2000,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });
    
});
// fin de boton subir

