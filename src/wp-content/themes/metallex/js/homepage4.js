(function($) { 
"use strict";

jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 120){  
    jQuery('.var4_main_menu_wrapper').removeClass('slideIn animated');
      jQuery('.var4_main_menu_wrapper').addClass("sticky_header slideInDown animated");
    }
    else{
    jQuery('.var4_main_menu_wrapper ').removeClass('sticky_header slideInDown animated');
       jQuery('.var4_main_menu_wrapper ').addClass('slideIn animated');
    }
});

jQuery(document).on('ready', function() {
	if (jQuery('.our-project-home-4-carousel').length) {
        jQuery('.our-project-home-4-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,            
            dots: false,
            autoWidth: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                480: {
                    items: 1,
                    autoWidth: false
                },
                600: {
                    items: 2,
                    autoWidth: false
                },
                1000: {
                    items: 4,
                    autoWidth: false
                },
                1200: {
                    items: 4,
                    autoWidth: false
                },
                1400: {
                    items: 4,
                    autoWidth: false
                }
            }
        });
    };
});

})(jQuery);