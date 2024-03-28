$(document).ready(function () {
    $('#burgerMenu').click(function () {
        $('body').toggleClass('sidebar');
    })

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true
    });
    $('.play').on('click', function () {
        owl.trigger('play.owl.autoplay', [6000])
    })
    $('.stop').on('click', function () {
        owl.trigger('stop.owl.autoplay')
    })
})


