$('#aliados_slide').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: 100,
    autoplayHoverPause: false,   
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
    autoplay: 100,
    autoplayHoverPause: false, 
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
    autoplay: true,
    autoplayTimeout: 2000,
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