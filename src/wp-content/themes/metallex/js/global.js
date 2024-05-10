/*-------------------------------------------------------------------------------------------------------------------------------*/
/*This is main JS file that contains custom style rules used in this template*/
/*-------------------------------------------------------------------------------------------------------------------------------*/
/* Template Name: Site Title*/
/* Version: 1.0 Initial Release*/
/* Build Date: 22-04-2015*/
/* Author: Unbranded*/
/* Website: http://moonart.net.ua/site/ 
/* Copyright: (C) 2015 */
/*-------------------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------*/
/* TABLE OF CONTENTS: */
/*--------------------------------------------------------*/
/* 01 - VARIABLES */
/*-------------------------------------------------------------------------------------------------------------------------------*/

jQuery(function($) {

	"use strict";

	/*================*/
	/* 01 - VARIABLES */
	/*================*/
	var swipers = [], winW, winH, winScr, $container, _isresponsive, smPoint = 768, mdPoint = 992, lgPoint = 1200, addPoint = 1600, _ismobile = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);

	/*========================*/
	/* 02 - page calculations */
	/*========================*/
	function pageCalculations(){
		winW = $(window).width();
		winH = $(window).height();
		if($('.menu-button').is(':visible')) _isresponsive = true;
		else _isresponsive = false;
	}

	/*=================================*/
	/* 03 - function on document ready */
	/*=================================*/
	pageCalculations();

	/*============================*/
	/* 04 - function on page load */
	/*============================*/
	$(window).load(function(){
		initSwiper();

		if($('.isotope').length){
			var initValue = $('.isotope-nav').find('.selected a').attr('data-filter');
			$container.isotope({itemSelector: '.isotope-item', filter: initValue,masonry:{gutter:0,columnWidth:'.grid-sizer'}});			
		}

	});

	/*==============================*/
	/* 05 - function on page scroll */
	/*==============================*/	
	$(window).on("scroll", function() {
		var headerH = $(".tt-header-1").height();
		winScr = $(window).scrollTop();
		if (winScr > 49){
			$(".tt-header-1").addClass("stick");
		} else {
			$(".tt-header-1").removeClass("stick");
		}	
	});		

	/*==============================*/
	/* 06 - function on page resize */
	/*==============================*/
	function resizeCall(){
		pageCalculations();

		$('.swiper-container.initialized[data-slides-per-view="responsive"]').each(function(){
			var thisSwiper = swipers['swiper-'+$(this).attr('id')], $t = $(this), slidesPerViewVar = updateSlidesPerView($t);
			thisSwiper.params.slidesPerView = slidesPerViewVar;
			thisSwiper.reInit();
			var paginationSpan = $t.find('.pagination span');
			var paginationSlice = paginationSpan.hide().slice(0,(paginationSpan.length+1-slidesPerViewVar));
			if(paginationSlice.length<=1 || slidesPerViewVar>=$t.find('.swiper-slide').length) $t.addClass('pagination-hidden');
			else $t.removeClass('pagination-hidden');
			paginationSlice.show();
		});
	}
	if(!_ismobile){
		$(window).resize(function(){
			resizeCall();
		});
	} else{
		window.addEventListener("orientationchange", function() {
			resizeCall();
		}, false);
	}

	/*=====================*/
	/* 07 - swiper sliders */
	/*=====================*/
	function initSwiper(){
		var initIterator = 0;
		$('.swiper-container').each(function(){								  
			var $t = $(this);								  

			var index = 'swiper-unique-id-'+initIterator;

			$t.addClass('swiper-'+index + ' initialized').attr('id', index);
			$t.find('.pagination').addClass('pagination-'+index);

			var autoPlayVar = parseInt($t.attr('data-autoplay'),10);
			var centerVar = parseInt($t.attr('data-center'),10);
			var simVar = ($t.closest('.circle-description-slide-box').length)?false:true;

			var slidesPerViewVar = $t.attr('data-slides-per-view');
			if(slidesPerViewVar == 'responsive'){
				slidesPerViewVar = updateSlidesPerView($t);
			}
			else if(slidesPerViewVar!='auto') slidesPerViewVar = parseInt(slidesPerViewVar, 10);

			var loopVar = parseInt($t.attr('data-loop'),10);
			var speedVar = parseInt($t.attr('data-speed'),10);

			swipers['swiper-'+index] = new Swiper('.swiper-'+index,{
				speed: speedVar,
				pagination: '.pagination-'+index,
				loop: loopVar,
				paginationClickable: true,
				autoplay: autoPlayVar,
				slidesPerView: slidesPerViewVar,
				keyboardControl: true,
				calculateHeight: true, 
				simulateTouch: simVar,
				centeredSlides: centerVar,
				roundLengths: true,
				onSlideChangeEnd: function(swiper){
					var activeIndex = (loopVar===true)?swiper.activeIndex:swiper.activeLoopIndex;
					var qVal = $t.find('.swiper-slide-active').attr('data-val');
					$t.find('.swiper-slide[data-val="'+qVal+'"]').addClass('active');
				},
				onSlideChangeStart: function(swiper){
					$t.find('.swiper-slide.active').removeClass('active');
				},
				onSlideClick: function(swiper){

				}
			});
			swipers['swiper-'+index].reInit();
			if($t.attr('data-slides-per-view')=='responsive'){
				var paginationSpan = $t.find('.pagination span');
				var paginationSlice = paginationSpan.hide().slice(0,(paginationSpan.length+1-slidesPerViewVar));
				if(paginationSlice.length<=1 || slidesPerViewVar>=$t.find('.swiper-slide').length) $t.addClass('pagination-hidden');
				else $t.removeClass('pagination-hidden');
				paginationSlice.show();
			}
			initIterator++;
		});

	}

	function updateSlidesPerView(swiperContainer){
		if(winW>=addPoint) return parseInt(swiperContainer.attr('data-add-slides'),10);
		else if(winW>=lgPoint) return parseInt(swiperContainer.attr('data-lg-slides'),10);
		else if(winW>=mdPoint) return parseInt(swiperContainer.attr('data-md-slides'),10);
		else if(winW>=smPoint) return parseInt(swiperContainer.attr('data-sm-slides'),10);
		else return parseInt(swiperContainer.attr('data-xs-slides'),10);
	}

	//swiper arrows
	$('.swiper-arrow-left').on('click', function(){
		swipers['swiper-'+$(this).parent().attr('id')].swipePrev();
	});

	$('.swiper-arrow-right').on('click', function(){
		swipers['swiper-'+$(this).parent().attr('id')].swipeNext();
	});

	/*==============================*/
	/* 07 - buttons, clicks, hovers */
	/*==============================*/
	//menu
	$('.cmn-toggle-switch').on('click', function(e){
		$(this).toggleClass('active');
		$(this).siblings('.toggle-block').slideToggle();
		e.preventDefault();
	});
	$('.main-nav .menu-toggle').on('click', function(e){
		$(this).closest('li').addClass('open').siblings('.open').removeClass('active');
		$(this).closest('li').siblings('.parent').find('ul').slideUp();
		$(this).parent().siblings('ul').slideToggle();
		e.preventDefault();
	});
	$('.main-nav .menu-toggle-inner').on('click', function(e){
		$(this).closest('li').addClass('open').siblings('.open').removeClass('open');
		$(this).closest('li').siblings('li').find('ul').slideUp();
		$(this).parent().siblings('ul').slideToggle();
		e.preventDefault();
	});	

    //Tabs
	var tabFinish = 0;
	$('.tt-nav-tab-item').on('click', function(e){		
	    var $t = $(this);
	    if(tabFinish || $t.hasClass('active')) e.preventDefault();
	    tabFinish = 1;
	    $t.closest('.tt-nav-tab').find('.tt-nav-tab-item').removeClass('active');
	    $t.addClass('active');
	    var index = $t.parent().parent().find('.tt-nav-tab-item').index(this);
	    $t.parents('.tt-tab-wrapper').find('.tt-tab-select select option:eq('+index+')').prop('selected', true);
	    $t.closest('.tt-tab-wrapper').find('.tt-tab-info:visible').fadeOut(500, function(){
	    	var $tabActive  = $t.closest('.tt-tab-wrapper').find('.tt-tab-info').eq(index);
	    	$tabActive.css('display','block').css('opacity','0');
	    	$tabActive.animate({opacity:1});
	    	 tabFinish = 0;
	    });
	});
	$('.tt-tab-select select').on('change', function(e){
	    var $t = $(this);
	    if(tabFinish) e.preventDefault();
	    tabFinish = 1;    
	    var index = $t.find('option').index($(this).find('option:selected'));
	    $t.closest('.tt-tab-wrapper').find('.tt-nav-tab-item').removeClass('active');
	    $t.closest('.tt-tab-wrapper').find('.tt-nav-tab-item:eq('+index+')').addClass('active');
	    $t.closest('.tt-tab-wrapper').find('.tt-tab-info:visible').fadeOut(500, function(){
	    	var $tabActive  = $t.closest('.tt-tab-wrapper').find('.tt-tab-info').eq(index);
	    	$tabActive.css('display','block').css('opacity','0');
	    	$tabActive.animate({opacity:1});
	    	 tabFinish = 0;
	    });
	});

	//tabs from hash
	var hash = location.hash.replace('#', '');
	if(hash){
		hashTab();
	}
	function hashTab(){
		var $tabSel = $('.tt-nav-tab-item[data-tab="' +hash+ '"]').addClass('active');
	    $tabSel.closest('.tt-nav-tab').find('.tt-nav-tab-item').removeClass('active');
	    $tabSel.addClass('active');
	    var index = $tabSel.parent().parent().find('.tt-nav-tab-item').index($tabSel);
	    $tabSel.parents('.tt-tab-wrapper').find('.tt-tab-select select option:eq('+index+')').prop('selected', true);
	    $tabSel.closest('.tt-tab-wrapper').find('.tt-tab-info:visible').fadeOut(500, function(){
	    	var $tabActive  = $tabSel.closest('.tt-tab-wrapper').find('.tt-tab-info').eq(index);
	    	$tabActive.css('display','block').css('opacity','0');
	    	$tabActive.animate({opacity:1});
	    });	
	}
	$(window).on("hashchange", function() {
	    if(window.location.hash) {
	        hash = location.hash.replace('#', '');
	        hashTab();
	    }		
	});	

	/*revolution slider*/
	if ($('.rev_slider_wrapper').length) {
		$(".rev_slider").revolution({
			sliderType:"standard",
			sliderLayout:"auto",
			delay:5000,
			navigation: {
				arrows:{enable:true} 
			},
			responsiveLevels:[1920,1200],
			gridwidth:[1300,1170],
			gridheight:[650,650]
		});
	}		

	/*==================================================*/
	/* 09 - form elements - checkboxes and radiobuttons */
	/*==================================================*/

	//isotope filter
	$container = $('.isotope-content');
	$('.isotope-nav').on( 'click', 'a', function(e) {
		var filterValue = $(this).attr('data-filter');
		var $buttonGroup = $(this).parent().parent();
		var index = $buttonGroup.find('li').index($(this).parent());
		$buttonGroup.siblings('.isotope-select').find('option:eq('+index+')').prop('selected', true);
		$container.isotope({ filter: filterValue });
		$buttonGroup.find('.selected').removeClass('selected');
		$(this).parent().addClass('selected');
		e.preventDefault();
	});
	$('.isotope-select select').on( 'change', function() {
		var filterValue = $(this).find('option:selected').val();
		var index = $(this).find('option').index($(this).find('option:selected'));
		$container.isotope({ filter: filterValue });
		var $buttonGroup = $(this).parents('.isotope-select').siblings('.isotope-nav');
		$buttonGroup.find('.selected').removeClass('selected');
		$buttonGroup.find('li').eq(index).addClass('selected');
	});

	/*=====================*/
	/* 8 - LIGHT-BOX */
	/*=====================*/
	
	/*activity indicator functions*/
	var activityIndicatorOn = function(){
		$('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
	};
	var activityIndicatorOff = function(){
		$('#imagelightbox-loading').remove();
	};
	
	/*close button functions*/
	var closeButtonOn = function(instance){
		$('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function(){ $(this).remove(); instance.quitImageLightbox(); return false; });
	};
	var closeButtonOff = function(){
		$('#imagelightbox-close').remove();
	};
	
	/*overlay*/
	var overlayOn = function(){$('<div id="imagelightbox-overlay"></div>').appendTo('body');};
	var overlayOff = function(){$('#imagelightbox-overlay').remove();};
	
	/*caption*/
	var captionOff = function(){$('#imagelightbox-caption').remove();};
	var captionOn = function(){
		var description = $('a[href="' + $('#imagelightbox').attr('src') + '"]').data('title');
		if(description.length)
			$('<div id="imagelightbox-caption">' + description +'</div>').appendTo('body');
	};

	/*arrows*/
    var arrowsOn = function(instance, selector) {
        var $arrows = $('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"><i class="fa fa-chevron-left"></i></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"><i class="fa fa-chevron-right"></i></button>');
        $arrows.appendTo('body');
        $arrows.on('click touchend', function(e) {
            e.preventDefault();
            var $this = $(this);
            if( $this.hasClass('imagelightbox-arrow-left')) {
                instance.loadPreviousImage();
            } else {
                instance.loadNextImage();
            }
            return false;
        });
    };	
	var arrowsOff = function(){$('.imagelightbox-arrow').remove();};	
			
	var selectorG = '.lightbox';
	if($(selectorG).length){
		var instanceG = $(selectorG).imageLightbox({
			quitOnDocClick:	false,
			onStart:		function() {arrowsOn(instanceG, selectorG);overlayOn(); closeButtonOn(instanceG);},
			onEnd:			function() {arrowsOff();captionOff(); overlayOff(); closeButtonOff(); activityIndicatorOff();},
			onLoadStart: 	function() {captionOff(); activityIndicatorOn();},
			onLoadEnd:	 	function() {$('.imagelightbox-arrow').css('display', 'block');captionOn(); activityIndicatorOff();}
		});		
	}			


});