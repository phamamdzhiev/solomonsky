//init homepage slider
$('.homepage-slider').slick({
    dots: false,
    arrows:false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 3000,
});

$(document).ready(function () {
    let navigationMenu = $('#toggled-menu');
    //navigation toggle function
    $('#toggle-mobile-nav').on('click', function (){
        $(this).toggleClass('active');
        navigationMenu.toggleClass('active')
    });

});
