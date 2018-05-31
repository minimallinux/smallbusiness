<?php if(get_field('hide_overlay_map', 'option')) : ?>
<style type="text/css">
	.acf-map:after{
		display: none;	
	}
</style>
<?php endif; ?>

<?php if(get_field('map_overlay_color', 'option')) : ?>		
<style type="text/css">
	.acf-map:after{
		background: <?php the_field('map_overlay_color', 'option') ?>90;	
	}
</style>
<?php endif; ?>


<?php 

$location = get_field('map', 'option');

if( !empty($location) && !is_page_template('contact.php') ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>


<footer>
      	<div id="footer">
      	  <div class="inner">
			<div class="row justify-content-between">	  
	      	  <div class="col-lg-5">
	      	  	<div class="footer-widget">
	      	  		<h3><?php if(get_field('about_title', 'option')) : ?><?php the_field('about_title', 'option') ?><?php else: ?>About Us<?php endif; ?></h3>
	      	  		<p><?php if(get_field('about_content', 'option')) : ?><?php the_field('about_content', 'option') ?><?php else: ?>Lorem ipsum dolor sit amet, nunc wisi neque malesuada ultricies, praesent tellus nam lacus vestibulum.<?php endif; ?></p>
	      	  		<ul class="footer-info">
	      	  			<?php if(get_field('phone', 'option')) : ?>	<li><a href="tel:<?php the_field('phone', 'option') ?>"><i class="fa fa-phone"></i> 
							<?php the_field('phone', 'option') ?>
							</a></li><?php endif; ?>	
	      	  			<?php if(get_field('email', 'option')) : ?>		<li>
							<a href="mailto:<?php the_field('email', 'option') ?>">
								<i class="fa fa-envelope"></i> 
							<?php the_field('email', 'option') ?>
						  							
							</a>
						</li><?php endif; ?>		
						<?php if(get_field('address', 'option')) : ?>	
	      	  			<li><i class="fa fa-map-marker"></i> <?php the_field('address', 'option') ?></li><?php endif; ?>	
	      	  		</ul>      	  		
	      	  	</div><!--footer-widget-->
	      	  </div><!--col-->	
	      	  
	      	  <div class="col-lg-auto">
	      	  	<div class="footer-widget">
	      	  		<h3>Services</h3>
					
				<?php if ( has_nav_menu( 'services' ) ) : ?>
					<?php wp_nav_menu( array(
							'theme_location' => 'services',
							'menu_id'        => 'top-menu',
							'container'		 => '',
							'items_wrap' 	 => '<ul>%3$s</ul>',
					 ) ); ?>
				<?php else : ?>
				<ul >
					<li><a href="<?php echo home_url(); ?>/services">Services</a></li>
				</ul>
				<?php endif; ?>	
					

	      	  	</div><!--footer-widget-->
	      	  </div><!--col-->	

	      	  <div class="col-lg-auto">
	      	  	<div class="footer-widget">
	      	  		<h3>Quick Links</h3>
					<?php if ( has_nav_menu( 'top' ) ) : ?>
					<?php wp_nav_menu( array(
							'theme_location' => 'top',
							'menu_id'        => 'top-menu',
							'container'		 => '',
							'items_wrap' 	 => '<ul>%3$s</ul>',
					 ) ); ?>
				<?php else : ?>
				<ul >
					<li><a href="<?php echo home_url(); ?>">Home</a></li>
				</ul>
				<?php endif; ?>				

	      	  	</div><!--footer-widget-->
	      	  </div><!--col-->	
	      	  
	      	  <div class="col-lg-auto">
	      	  	<div class="footer-widget footer-copyright">
					
	      	  		<a href="<?php echo home_url(); ?>">
					  <?php if(get_field('footer_logo', 'option')) : ?>	
						<img src="<?php the_field('footer_logo', 'option') ?>" class="img-fluid"  />
					  <?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/npm/images/logo.png" class="img-fluid" />
					  <?php endif; ?>							
						
					</a>
	      	  		<p><?php if(get_field('copyright_text', 'option')) : ?><?php the_field('copyright_text', 'option') ?><?php else: ?>&copy; <?php echo date('Y'); ?>. All Rights Reserved<?php endif; ?>	</p>
	      	  		<ul class="footer-social">
<?php if(get_field('facebook', 'option')) : ?>
	      	      		<li><a href="<?php the_field('facebook', 'option') ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
<?php endif; ?>	
<?php if(get_field('google', 'option')) : ?>
	      	      		<li><a href="<?php the_field('google', 'option') ?>" target="_blank"><i class="fa fa-google"></i></a></li>
<?php endif; ?>	
<?php if(get_field('linkedin', 'option')) : ?>
	      	      		<li><a href="<?php the_field('linkedin', 'option') ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<?php endif; ?>	
<?php if(get_field('yelp', 'option')) : ?>
	      	      		<li><a href="<?php the_field('yelp', 'option') ?>" target="_blank"><i class="fa fa-yelp"></i></a></li>
<?php endif; ?>	
<?php if(get_field('twitter', 'option')) : ?>
	      	      		<li><a href="<?php the_field('twitter', 'option') ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
<?php endif; ?>	
<?php if(get_field('instagram', 'option')) : ?>
	      	      		<li><a href="<?php the_field('instagram', 'option') ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
<?php endif; ?>	
<?php if(get_field('youtube', 'option')) : ?>
	      	      		<li><a href="<?php the_field('youtube', 'option') ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
<?php endif; ?>	
      	  	  	    </ul>	
	      	  		
	      	  	</div><!--footer-widget-->
	      	  </div><!--col-->	
	      	  
	      	</div><!--row-->    
 		  </div><!--inner-->	
      	</div><!--footer-->
      </footer>
	  

	</div><!--wrapper-->  

	<a class="scroll backtotop" href="#cp-wrapper"><i class="fa fa-angle-up"></i></a>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/npm/js/popper.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/npm/js/bootstrap.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/npm/js/imagesloaded.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/npm/js/isotope.pkgd.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/npm/js/lightbox.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/npm/js/owl.carousel.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/npm/js/script.js"></script>

<?php wp_footer(); ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARhHVwWAThafW1eF_4w-cNeDJBT8OY2dM"></script>
<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>

</body>
</html>
