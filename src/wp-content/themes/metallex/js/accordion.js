(function($) {
      "use strict"
      // Accordion Toggle Items
      var iconOpen = 'fa fa-minus',
      iconClose = 'fa fa-plus';
      $(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function (e) {
      var $target = $(e.target);
      $target.siblings('.accordion-heading').find('em').toggleClass(iconOpen + ' ' + iconClose);
      if(e.type == 'show') {
      jQuery('#accordion2 em.icon-fixed-width').removeClass(iconOpen);
      jQuery('#accordion2 em.icon-fixed-width').addClass(iconClose);
      jQuery('#accordion2 .accordion-toggle').removeClass('active');
      jQuery('#accordion2 .accordion-body.collapse').removeClass('in');
      $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
      $target.prev('.accordion-group').find('.accordion-body.collapse').addClass('in');
      $target.siblings('.accordion-heading').find('em').addClass('fa-minus');
      $target.siblings('.accordion-heading').find('em').removeClass('fa-plus');
      }
      if(e.type == 'hide') {
      jQuery('#accordion2 em.icon-fixed-width').removeClass(iconOpen);
      jQuery('#accordion2 em.icon-fixed-width').addClass(iconClose);
      jQuery('#accordion2 .accordion-toggle').removeClass('active');
      jQuery('#accordion2 .accordion-body.collapse').removeClass('in');
      $(this).find('.accordion-toggle').not($target).removeClass('active');
      $target.siblings('.accordion-heading').find('em').addClass('fa-plus');
      $target.siblings('.accordion-heading').find('em').removeClass('fa-minus');
      }
      });
      })(jQuery);