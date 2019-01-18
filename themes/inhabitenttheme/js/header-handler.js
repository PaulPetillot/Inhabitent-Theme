$(document).ready(function() {
    const $header = $('header');
    const $siteNav =  $('.site-nav');
    if (window.location.pathname === '/Inhabitent/') {
        $('.site-nav').removeClass('site-header');
        $('.site-nav').addClass('site-header-nav');
        $(document).scroll(function() {    
            let $scroll = $(document).scrollTop();
            if ($scroll > $(window).height()) {
            $header.removeClass('site-header-nav').addClass('site-header');
            } else {
            $header.removeClass('site-header').addClass('site-header-nav');
            }
           });
    }else if(window.location.pathname === '/Inhabitent/about/'|| window.location.pathname.includes('/adventure/')){
        $siteNav.removeClass('site-header');
        $siteNav.addClass('site-header-nav');
        $(document).scroll(function() {    
            let $scroll = $(document).scrollTop();
            if ($scroll > $(window).height()) {
                $siteNav.removeClass('site-header-nav').addClass('site-header');
            } else {
                $siteNav.removeClass('site-header').addClass('site-header-nav');
            }
           });
}
});

