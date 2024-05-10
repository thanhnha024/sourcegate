(function($) { 
"use strict"; 
jQuery(window).scroll(function() {
  if (jQuery(this).scrollTop() > 120){  
  jQuery('.hdr_variation2').removeClass('slideIn animated');
    jQuery('.hdr_variation2').addClass("sticky_header slideInDown animated");
  }
  else{
  jQuery('.hdr_variation2 ').removeClass('sticky_header slideInDown animated');
     jQuery('.hdr_variation2 ').addClass('slideIn animated');
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