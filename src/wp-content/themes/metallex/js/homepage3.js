(function($) { 
"use strict"; 
    jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 120){  
    jQuery('.var3_header ').removeClass('slideIn animated');
      jQuery('.var3_header ').addClass("sticky_header slideInDown animated");
    }
    else{
    jQuery('.var3_header  ').removeClass('sticky_header slideInDown animated');
       jQuery('.var3_header  ').addClass('slideIn animated');
    }
});
  jQuery(document).ready(function(){
   
jQuery(".hdr_search .btn").click(function(){
    jQuery(".search_overlay").addClass("show")  
    })
    
   jQuery(".close_search").click(function(){
    jQuery(".search_overlay").removeClass("show")  
    }) 
  })

})(jQuery);