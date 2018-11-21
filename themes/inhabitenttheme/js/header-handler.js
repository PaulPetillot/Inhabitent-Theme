$(document).ready(function() {
    if (window.location.pathname == '/Inhabitent/') {
        var header = $("header");
        $('.site-nav').removeClass('site-header');
        $('.site-nav').addClass('site-header-nav');
        $(document).scroll(function() {    
            var scroll = $(document).scrollTop();
            if (scroll > $(window).height()) {
            header.removeClass('site-header-nav').addClass("site-header");
            } else {
            header.removeClass("site-header").addClass('site-header-nav');
            }
           });
    }else if(window.location.pathname == '/Inhabitent/about/'){
        var header = $("#masthead");
        $(document).scroll(function() {    
            var scroll = $(document).scrollTop();
            if (scroll > $(window).height()) {
            header.removeClass('site-header-nav').addClass("site-header");
            } else {
            header.removeClass("site-header").addClass('site-header-nav');
            }
           });
        $('.site-nav').removeClass('site-header');
        $('.site-nav').addClass('site-header-nav');
}});

