<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	
    <link href="<?php echo get_template_directory_uri(); ?>/npm/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/npm/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/npm/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/npm/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/npm/js/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/npm/css/lightbox.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans: 300,400,400i,600,700,700i,800,900" rel="stylesheet">

<?php if(get_field('activate_custom_color','option')):?>
    <link href="<?php echo get_template_directory_uri(); ?>/npm/inc/style-color.css" rel="stylesheet">
<?php endif; ?>
	
    <link rel="icon" href="<?php the_field('favicon', 'option') ?>" sizes="32x32">	

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="status_load"></div><!--for loading only-->
 	<div id="cp-wrapper" class="has-blur">

      <div id="cp-top">
      	<div class="inner">
			<div class="row align-items-sm-center">
			  <div class="col-sm-3">
				<a class="cp-logo" href="<?php echo home_url(); ?>">
				  <?php if(get_field('logo', 'option')) : ?>	
					<img src="<?php the_field('logo', 'option') ?>" />
				  <?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/npm/images/logo.png" />
				  <?php endif; ?>	
			    </a>
			  </div><!--col-->	
			  <div class="col-sm-9">
			  	<div class="row justify-content-end align-items-md-center">
				  <div class="col-sm-auto d-none d-lg-block">
				  	<div class="top-item has-divider">
				  	  <div class="d-inline top-icon">
				  	  	<a href="tel:<?php the_field('phone', 'option') ?>"><i class="fa fa-phone"></i></a>
				  	  </div>
				  	  <div class="d-inline top-info">
				  	  	<a href="tel:<?php the_field('phone', 'option') ?>">
						  <?php if(get_field('phone', 'option')) : ?>		
							<?php the_field('phone', 'option') ?>
						  <?php else : ?>
							+123-456-789
						  <?php endif; ?>	
						</a>
				  	  	<span>Phone</span>
				  	  </div>	
				  	</div><!--top-item-->
				  </div><!--col-->	
				  <div class="col-sm-auto d-none d-lg-block">
				  	<div class="top-item has-divider">
				  	  <div class="d-inline top-icon">
				  	  	<a href="mailto:<?php the_field('email', 'option') ?>"><i class="fa fa-envelope-open"></i></a>
				  	  </div>
				  	  <div class="d-inline top-info">
				  	  	<a href="mailto:<?php the_field('email', 'option') ?>">
						  <?php if(get_field('email', 'option')) : ?>		
							<?php the_field('email', 'option') ?>
						  <?php else : ?>
							info@offlinesharks.com
						  <?php endif; ?>	
						</a>
				  	  	<span>Email</span>
				  	  </div>	
				  	</div><!--top-item-->
				  </div><!--col-->	
				  <div class="col-sm-auto d-none d-sm-block">
				  	<div class="top-item top-btn">
				  	  <a href="<?php the_field('get_started_url', 'option') ?>"><?php if(get_field('get_started_text', 'option')) : ?><?php the_field('get_started_text', 'option') ?><?php else: ?>Get Started<?php endif; ?> <i class="fa fa-angle-right"></i></a>
				  	</div><!--top-item-->
				  </div><!--col-->				  		
			  	</div><!--row-->
			  </div><!--col-->	
			</div><!--row-->
      	</div><!--inner-->
      </div><!--cp-top-->
      
      <header>
      	<div id="cp-header">
      	  <div class="inner">
		     <nav class="navbar navbar-expand-lg navbar-dark">
		       <div class="nav-social d-lg-none d--block d-xl-none">
		          <ul>
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
		        </div><!--nav-social-->
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainanv">
			      <span class="navbar-toggler-icon"></span>
			    </button>	
			 
		      <div class="collapse navbar-collapse" id="mainanv">

				<?php if ( has_nav_menu( 'top' ) ) : ?>
					<?php wp_nav_menu( array(
							'theme_location' => 'top',
							'menu_id'        => 'top-menu',
							'container'		 => '',
							'items_wrap' 	 => '<ul id="%1$s" class="%2$s navbar-nav mr-auto">%3$s</ul>',
					 ) ); ?>	
				<?php else : ?>
				<ul class="navbar-nav">
					<li><a href="<?php echo home_url(); ?>">Home</a></li>
				</ul>
				<?php endif; ?>					  
				  
				  
			
		        <div class="nav-social d-none d-lg-block">
		          <ul>
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
		        </div><!--nav-social-->
		      </div><!--collapse-->
		    </nav>     	  	
      	  </div><!--inner-->	
      	</div><!--cp-header-->
      </header>