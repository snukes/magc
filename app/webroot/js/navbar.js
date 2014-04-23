$(function() {
    var pull         = $('#mobile-nav-button');
        menu         = $('nav ul');
        menuHeight    = menu.height();
        banner        = $('.banner');
                               
    $(pull).on('click', function(e) {
        e.preventDefault();
        
        menu.slideToggle();
        banner.toggleClass('mobile-banner-expand');
    });
             
    $(window).resize(function(){
        var w = $(window).width();
        if(w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
});
