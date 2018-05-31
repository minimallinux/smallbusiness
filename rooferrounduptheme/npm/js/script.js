$window = jQuery(window);

jQuery(document).ready(function(){

	var windowWidth = $window.width();
	

	function resize_load(){		

	//banner
	var cpBannerContent = jQuery('.cp-banner-content').height();
		jQuery('#cp-banner .banner').height(cpBannerContent);
		
	}//resize
	
	resize_load();
	$window.resize(function(){
		resize_load();
	});

	
	jQuery('section li').prepend('<i class="fa fa-check-square-o"></i>');
	jQuery('section ul').addClass('checkmark');

	//menu	
		jQuery('.menu-item-has-children').each(function () {
			jQuery(this).find('a:first').append('<i class="fa fa-angle-down" />');
		});
		
		jQuery('li .menu-item-has-children').each(function () {
			jQuery(this).find('a:first').append('<i class="fa fa-angle-right" />');
		});
		
		jQuery('.menu-item-has-children').each(function () {
			jQuery(this).prepend('<i class="fa fa-chevron-down toggle-down" /><i class="fa fa-chevron-up toggle-down" />');
		});

		jQuery('.toggle-down').click(function () {
			jQuery(this).parent().toggleClass('active');
			jQuery(this).parent().find('ul.sub-menu:first').slideToggle(200);
		});	

//header fix
jQuery(window).scroll(function() {
		var scrollDistance = jQuery(window).scrollTop();

		// Show/hide menu on scroll
		if (scrollDistance >= 200) {
				jQuery('#cp-header').addClass("active");
		} else {
				jQuery('#cp-header').removeClass("active");
		}
}).scroll();

	//checklist
	
	jQuery('ul.checklists li').prepend('<i class="fa fa-check" />');


	//carousel
	jQuery('.carousel').carousel({
	  interval: 3500,
	  pause: 'hover'
	})

//Two Column Carousel Slider
	if (jQuery('.testimonial-slide').length) {
		jQuery('.testimonial-slide').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 6000,
			autoHeight : true,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:2
				},
				1024:{
					items:2
				}
			}
		});    		
	}
	jQuery('.project-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			smartSpeed: 500,
			autoplay: 6000,
			autoHeight : true,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1024:{
					items:5
				}
			}
	});    	
		

 
		
	//scroll
	jQuery(function() {
			  jQuery('a.scroll[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = jQuery(this.hash);
			      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        jQuery('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
	});	//end scroll		

        //back to top
        var offsetbacktotop = 500;
		jQuery('.backtotop').css({right: '-50px'});
        jQuery(window).scroll(function () {
                    if (jQuery(window).scrollTop() > offsetbacktotop) {
						jQuery('.backtotop').css({right: '0'});
                    }
                    else {
						jQuery('.backtotop').css({right: '-50px'});
                    }
        });	


  //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
  function autoPlayYouTubeModal() {
      var trigger = jQuery("body").find('[data-toggle="modal"]');
      trigger.click(function () {
          var theModal = jQuery(this).data("target"),
              videoSRC = jQuery(this).attr("data-theVideo"),
              videoSRCauto = videoSRC + "?title=0&amp;byline=0&amp;portrait=0&amp;rel=0&amp;controls=0&amp;autoplay=1";
          jQuery(theModal + ' iframe').attr('src', videoSRCauto);
          jQuery(theModal + ' button.close').click(function () {
              jQuery(theModal + ' iframe').attr('src', videoSRC);
          });
          jQuery('.modal').click(function () {
              jQuery(theModal + ' iframe').attr('src', videoSRC);
          });
      });
  }
  autoPlayYouTubeModal();	

});

jQuery(window).load(function() { // makes sure the whole site is loaded
	jQuery('#status_load').delay(350).fadeOut(); // will first fade out the loading animation
	jQuery('#cp-wrapper').delay(380).removeClass('has-blur');
});

//gallery
(function($) {
    "use strict";

    $(window).load(function() {
        // init Isotope
        
        var $grid = $(".grid");
        $grid.imagesLoaded(function () {
		    $grid.isotope({
		        itemSelector: '.grid-item',
        	   	layoutMode: 'masonry',
        	   	filter: '.gal1'
		    });
		    $grid.isotope();
		});

             
        // filter functions
        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function () {
                var number = $(this).find('.number').text();
                return parseInt(number, 10) > 50;
            },
            // show if name ends with -ium
            ium: function () {
                var name = $(this).find('.name').text();
                return name.match(/ium$/);
            }
        };
        // bind filter button click
        $('.filter-tabs').on('click', '.filter', function () {
            var filterValue = $(this).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[filterValue] || filterValue;
            $grid.isotope({filter: filterValue});
        });
        // change is-checked class on buttons
        $('.button-group').each(function (i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', '.filter', function () {
                $buttonGroup.find('.active').removeClass('active');
                $(this).addClass('active');
            });
        });

    });

})(jQuery);






