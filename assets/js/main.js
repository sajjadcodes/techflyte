jQuery(document).ready(function($){
   $('.nav-menu-btn').click(function () {
        $('header').toggleClass('is-active');
    });
    $('.search-btn').click(function () {
        $('.search-bar').toggleClass('is-active');
    });

    });

