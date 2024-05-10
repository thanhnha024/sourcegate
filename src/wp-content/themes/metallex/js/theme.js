(function($) { 
"use strict"; 
function bootstrapAnimatedLayer() {

    /* Demo Scripts for Bootstrap Carousel and Animate.css article
     * on SitePoint by Maria Antonietta Perna
     */

    //Function to animate slider captions 
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function() {
            var jQuerythis = jQuery(this),
                jQueryanimationType = jQuerythis.data('animation');
            jQuerythis.addClass(jQueryanimationType).one(animEndEv, function() {
                jQuerythis.removeClass(jQueryanimationType);
            });
        });
    }

    //Variables on page load 
    var jQuerymyCarousel = jQuery('#minimal-bootstrap-carousel'),
        jQueryfirstAnimatingElems = jQuerymyCarousel.find('.item:first').find("[data-animation ^= 'animated']");

    //Initialize carousel 
    jQuerymyCarousel.carousel({
        interval: 7000
    });

    //Animate captions in first slide on page load 
    doAnimations(jQueryfirstAnimatingElems);

    //Pause carousel  
    jQuerymyCarousel.carousel('pause');


    //Other slides to be animated on carousel slide event 
    jQuerymyCarousel.on('slide.bs.carousel', function(e) {
        var jQueryanimatingElems = jQuery(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations(jQueryanimatingElems);
    });
}
function maineNavToggle() {
    if (jQuery('#main-navigation-wrapper .navbar-nav li .dropdown-submenu').length) {
        jQuery('#main-navigation-wrapper .navbar-nav li .dropdown-submenu').parent('li').children('a').append(function() {
            return '<button class="dopdown-nav-toggler"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>';
        });
        jQuery('#main-navigation-wrapper .navbar-nav .dopdown-nav-toggler').on('click', function() {
            if(jQuery(this).hasClass("dopdown-nav-toggler-active"))
            {
                jQuery(this).removeClass("dopdown-nav-toggler-active");
                
                jQuery('#main-navigation-wrapper .navbar-nav li ul.dropdown-submenu').fadeOut();
            }
            else
            {
                jQuery('#main-navigation-wrapper .navbar-nav .dopdown-nav-toggler').removeClass("dopdown-nav-toggler-active");
                jQuery('#main-navigation-wrapper .nav > li').removeClass("active_sub_tab");
                jQuery('#main-navigation-wrapper .navbar-nav li ul.dropdown-submenu').hide();
                var Self = jQuery(this);
                Self.addClass("dopdown-nav-toggler-active");
                Self.parent().parent().children('.dropdown-submenu').slideToggle();
                Self.parent().parent().addClass("active_sub_tab");
            }
            
            return false;
        });
        

    };
}

function thmOwlCarousel () {
    if (jQuery('.brand-carousel').length) {
        jQuery('.brand-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            dots: false,
            autoWidth: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2,
                    autoWidth: false
                },
                480: {
                    items: 3,
                    autoWidth: false
                },
                600: {
                    items: 4,
                    autoWidth: false
                },
                1000: {
                    items: 6,
                    autoWidth: false
                }
            }
        });
    };
}

// instance of fuction while Document ready event   
jQuery(document).on('ready', function() {
    (function(jQuery) {       
        maineNavToggle();       
        bootstrapAnimatedLayer();
        thmOwlCarousel();

    })(jQuery);
});

// instance of fuction while Window Load event
jQuery(window).on('load', function() {
    (function(jQuery) {

    })(jQuery);
});

// instance of fuction while Window Scroll event
jQuery(window).on('scroll', function() {
    (function(jQuery) {
        
    })(jQuery);
});

})(jQuery);