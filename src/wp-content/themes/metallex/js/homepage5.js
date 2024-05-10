(function($) { 
"use strict"; 

jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 120){  
    jQuery('.var5_header ').removeClass('slideIn animated');
      jQuery('.var5_header').addClass("sticky_header slideInDown animated");
    }
    else{
    jQuery('.var5_header ').removeClass('sticky_header slideInDown animated');
       jQuery('.var5_header ').addClass('slideIn animated');
    }
});
 jQuery(document).ready(function(){
    jQuery(".mob_drop_arrow").click(function(){

      jQuery(this).parent().find(".submenu").toggleClass("show_sub_menu")
	  jQuery(this).parent().find(".nav_drop_ar").toggleClass("show")
	  jQuery(this).parent().find(".mob_drop_arrow").toggleClass("active")
	  
	  

    })
jQuery(".hdr_search .btn").click(function(){
		jQuery(".search_overlay").addClass("show")  
	  })
	  
	 jQuery(".close_search").click(function(){
		jQuery(".search_overlay").removeClass("show")  
	  }) 
  })

 })(jQuery);