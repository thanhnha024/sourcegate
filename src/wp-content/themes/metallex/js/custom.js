/***************************************************************************************************************
||||||||||||||||||||||||||||         CUSTOM SCRIPT FOR CHARITY HOME            ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
||||||||||||||||||||||||||||              TABLE OF CONTENT                  ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
****************************************************************************************************************

1 revolutionSliderActiver
2 galleryMasonaryLayout
3 LightBox / Fancybox
4 Gallery Filters
5 accrodion
6 pieChart RoundCircle
7 progressBarConfig
8 teamCarosule
9 testiCarosule
10 clientsCarosule
11 owlCarosule
12 CounterNumberChanger
13 stickyHeader
14 contactFormValidation
15 event slider
16 Common CssJs
17 selectInput
18 datePicker
19 gMap
20 mobileMenu

****************************************************************************************************************
||||||||||||||||||||||||||||            End TABLE OF CONTENT                ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************/

(function($) { 
"use strict"; 

/*=====================*/
	/* 8 - LIGHT-BOX */
	/*=====================*/
	
	/*activity indicator functions*/
	var activityIndicatorOn = function(){
		jQuery('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
	};
	var activityIndicatorOff = function(){
		jQuery('#imagelightbox-loading').remove();
	};
	
	/*close button functions*/
	var closeButtonOn = function(instance){
		jQuery('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function(){ jQuery(this).remove(); instance.quitImageLightbox(); return false; });
	};
	var closeButtonOff = function(){
		jQuery('#imagelightbox-close').remove();
	};
	
	/*overlay*/
	var overlayOn = function(){jQuery('<div id="imagelightbox-overlay"></div>').appendTo('body');};
	var overlayOff = function(){jQuery('#imagelightbox-overlay').remove();};
	
	/*caption*/
	var captionOff = function(){jQuery('#imagelightbox-caption').remove();};
	var captionOn = function(){
		var description = jQuery('a[href="' + jQuery('#imagelightbox').attr('src') + '"]').data('title');
		if(description.length)
			jQuery('<div id="imagelightbox-caption">' + description +'</div>').appendTo('body');
	};

	/*arrows*/
    var arrowsOn = function(instance, selector) {
        var jQueryarrows = jQuery('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"><i class="fa fa-chevron-left"></i></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"><i class="fa fa-chevron-right"></i></button>');
        jQueryarrows.appendTo('body');
        jQueryarrows.on('click touchend', function(e) {
            e.preventDefault();
            var jQuerythis = jQuery(this);
            if( jQuerythis.hasClass('imagelightbox-arrow-left')) {
                instance.loadPreviousImage();
            } else {
                instance.loadNextImage();
            }
            return false;
        });
    };	
	var arrowsOff = function(){jQuery('.imagelightbox-arrow').remove();};	
			
	var selectorG = '.lightbox';
	if(jQuery(selectorG).length){
		var instanceG = jQuery(selectorG).imageLightbox({
			quitOnDocClick:	false,
			onStart:		function() {arrowsOn(instanceG, selectorG);overlayOn(); closeButtonOn(instanceG);},
			onEnd:			function() {arrowsOff();captionOff(); overlayOff(); closeButtonOff(); activityIndicatorOff();},
			onLoadStart: 	function() {captionOff(); activityIndicatorOn();},
			onLoadEnd:	 	function() {jQuery('.imagelightbox-arrow').css('display', 'block');captionOn(); activityIndicatorOff();}
		});		
	}			


// 6 pieChart RoundCircle
function expertizeRoundCircle () {
	var rounderContainer = jQuery('.piechart.style-one');
	if (rounderContainer.length) {
		rounderContainer.each(function () {
			var Self = jQuery(this);
			var value = Self.data('value');
			var size = Self.parent().width();
			var color = Self.data('fg-color');

			Self.find('span').each(function () {
				var expertCount = jQuery(this);
				expertCount.appear(function () {
					expertCount.countTo({
						from: 1,
						to: value*100,
						speed: 3000
					});
				});

			});
			Self.appear(function () {					
				Self.circleProgress({
					value: value,
					size: 142,
					thickness: 10,
					emptyFill: 'rgba(208,104,63,1)',
					animation: {
						duration: 3000
					},
					fill: {
						color: color
					}
				});
			});
		});
	};
}

function stickyHeader () {
  if (jQuery('.stricky').length) {
    var strickyScrollPos = jQuery('.stricky').next().offset().top;
    if(jQuery(window).scrollTop() > strickyScrollPos) {
      jQuery('.stricky').removeClass('slideIn animated');
      jQuery('.stricky').addClass('stricky-fixed slideInDown animated');
    }
    else if(jQuery(this).scrollTop() <= strickyScrollPos) {
      jQuery('.stricky').removeClass('stricky-fixed slideInDown animated');
      jQuery('.stricky').addClass('slideIn animated');
    }
  };
}




// Dom Ready Function
jQuery(document).on('ready', function () {
	(function (jQuery) {
		expertizeRoundCircle();
	})(jQuery);
});





})(jQuery);