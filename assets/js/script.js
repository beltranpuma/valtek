   $(window).on('load', function(){
            $("#precarga").fadeOut('slow');
});




$(document).ready(function(){
    $('.slider-producto').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        // autoplaySpeed: 5000,
        speed: 1000,
        fade: true,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        arrows: true,
        dots: false,
        pauseOnHover: false,
        draggable: false,
        swipe: false
    });
});