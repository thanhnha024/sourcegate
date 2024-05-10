(function($) { 
"use strict"; 
jQuery(window).scroll(function() {
      if (jQuery(this).scrollTop() > 120){
      jQuery('.nav_col').removeClass('slideIn animated');
      jQuery('.nav_col').addClass("sticky_header slideInDown animated");
      }
      else{
      jQuery('.nav_col ').removeClass('sticky_header slideInDown animated');
      jQuery('.nav_col ').addClass('slideIn animated');
      }
      });
})(jQuery);