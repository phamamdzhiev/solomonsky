$(document).ready(function () {
    let navigationMenu = $('#toggled-menu');
    //navigation toggle function
    $('#toggle-mobile-nav').on('click', function () {
        $(this).toggleClass('active');
        navigationMenu.toggleClass('active')
    });
})
