<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>



<div id="page-banner" class="<?php if(get_field('banner')) : ?>has-banner<?php endif; ?>" style="background: <?php if(get_field('banner')) : ?>url('<?php the_field('banner'); ?>') no-repeat scroll <?php the_field('bg_position'); ?> / cover transparent;<?php else: ?>#212121<?php endif; ?>;">
  <div class="inner">
    <h1><?php the_title(); ?></h1>
  </div><!--inner-->
</div><!--page-banner-->

<?php if( have_rows('section') ): ?>
<?php while ( have_rows('section') ) : the_row(); ?>

       <?php if( get_row_layout() == 'about_section' ): ?>
<!--about-->

      <section class="cp-section about-section bgsection">
      	<div class="inner">
      	  <div class="row align-items-lg-center">
      	  	<div class="col-lg-6<?php if(get_sub_field('image_position')) : ?> order-lg-2<?php endif; ?>">
      	  	  <img src="<?php the_sub_field('image'); ?>" class="img-fluid aligncenter" />	
      	  	</div><!--col-->
      	  	<div class="col-lg-6">

			  <div class="section-entry">
				  <div class="cp-title">
					 <h2><?php the_sub_field('title'); ?></h2> 
				  </div><!--cp-title-->	
				  <?php the_sub_field('content'); ?>	  
				  
			  </div>
				
			

      	  	</div><!--col-->
      	  </div><!--row-->	
      	</div><!--inner-->
      </section>

<!--/bout-->

	   <?php elseif( get_row_layout() == 'get_started_section' ): ?>
<!--get_started_section-->

	  <section class="qta-section cp-section section_bg" style="background-image:url('<?php the_sub_field('background'); ?>');">
        <div class="inner">
          <div class="cp-title text-center">
			 <h2><?php the_sub_field('title'); ?></h2> 
			 <div class="subtitle"><?php the_sub_field('content'); ?></div>  
		  </div><!--cp-title-->	
            <div class="text-center">
                
		      	<div class="qta-btn text-center">
      	  		  <?php if( have_rows('button') ): ?>	
				   <?php while ( have_rows('button') ) : the_row(); ?> 	
					<a href="<?php the_sub_field('url'); ?>" class="global-btn<?php if(get_sub_field('button_style')) : ?> btn-solid<?php endif; ?>"><?php the_sub_field('button_text'); ?></a>
				   <?php  endwhile; ?>	
				  <?php endif; ?>
					
				</div><!--qta-btn-->                             
            </div>
        </div>
      </section>

	  <section class="cp-section negativemargintop nopaddingtop bgsection">
        <div class="inner">
          <div class="no-gutters row align-items-lg-stretch"><?php if( have_rows('box_section') ): ?>	
				<?php while ( have_rows('box_section') ) : the_row(); ?><div class="col-lg col-box<?php if(get_sub_field('background_type')) : ?> col-box-bg<?php endif; ?>"<?php if(get_sub_field('background_type')) : ?> style="background:url('<?php the_sub_field('image'); ?>') no-repeat scroll top center / cover;"<?php endif; ?>>
			  	<div class="col-box-entry text-center">
					<h3>
						<?php the_sub_field('title'); ?>
					</h3>
					<?php the_sub_field('content'); ?>
					<a href="<?php the_sub_field('url'); ?>" class="global-btn<?php if(get_sub_field('button_type')) : ?> btn-solid<?php endif; ?><?php if(!get_sub_field('background_type')) : ?> light<?php endif; ?>"><?php the_sub_field('button_text'); ?></a>
				</div>  
			  </div><!--col--><?php  endwhile; ?><?php endif; ?></div><!--row-->
		  <div class="section-more-content">
			  <div class="cp-title">
			    <h2><?php the_sub_field('additional_title'); ?></h2> 
		  	  </div><!--cp-title-->	
			  <div class="row justify-content-between align-items-center">
				  <div class="col-lg-9">
					  <?php the_sub_field('additional_content'); ?>
				  </div>
				  <div class="col-lg-auto">
					  <a href="<?php the_sub_field('additional_url'); ?>" class="global-btn"><?php the_sub_field('additional_button_text'); ?></a>
				  </div>
			  </div>
		  </div><!--section-more-content--> 
<?php if( have_rows('services') ): ?>			
		<div class="divider"></div><!--divider-->
		 <div class="services-section">
	        <div class="services-info">
	            <div class="row clearfix justify-content-between">
				   <?php while ( have_rows('services') ) : the_row(); ?> 	
					<!--Info BLock-->
					<div class="info-block col-xl col-lg-3 col-sm-4 col-6">
					    <a href="<?php the_sub_field('url'); ?>"><div class="icon-box"><img src="<?php the_sub_field('image'); ?>" class="img-fluid" /></div></a>
					    <div class="text"><div class="title"><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('title'); ?></a></div></div>
					</div>					
				   <?php  endwhile; ?>		               

	            </div><!--row-->
	        </div><!--services-info-->
		  </div><!--services section-->
<?php endif; ?>				
			
        </div><!--inner-->

      </section>
<!--/get_started_section-->

	   <?php elseif( get_row_layout() == 'gallery_section' ): ?>
<!--gallery_section-->
      <section class="project-section section_bgdark">
<?php if( get_sub_field('title') ): ?>	        	  
      	  <div class="cp-title text-center">
			 <span><?php the_sub_field('subtitle'); ?></span>
			 <h2><?php the_sub_field('title'); ?></h2>
		  </div><!--cp-title-->	
<?php endif; ?>			  
		  <div class="project-carousel owl-carousel">   
<?php 
$images = get_sub_field('gallery');
$size = 'img_1000x1000'; // (thumbnail, medium, large, full or custom size)
$size_full = 'full'; // (thumbnail, medium, large, full or custom size)				  
if( $images ): ?>
        <?php foreach( $images as $image ): ?> 
			  <div class="project-item">
		  	  <a href="<?php echo $image['url']; ?>" data-lightbox="project-set"><img src="<?php echo $image['sizes']['img_400x400']; ?>" class="img-fluid" /></a>
		  	  <a href="<?php echo $image['url']; ?>" data-lightbox="project-set"><div class="overlay-box">
                 <div class="overlay-inner">
                    <div class="content">
                        <span class="icon fa fa-expand"></span>
                    </div>
                 </div>
              </div></a>			
		  	</div><!--project-item-->
        <?php endforeach; ?>
<?php endif; ?>
		  </div><!--owl-carousel-->	
      </section>

<!--/gallery_section-->

	   <?php elseif( get_row_layout() == 'testimonial_section' ): ?>
<!--testimonial_section-->
	  <section class="testimonial-section cp-section">
        <div class="inner">
      	  <div class="cp-title text-center">
			 <span><?php the_sub_field('subtitle'); ?></span>
			 <h2><?php the_sub_field('title'); ?></h2>
		  </div><!--cp-title-->	
	        <div class="testimonial-slide owl-carousel">  
  <?php while ( have_rows('testimonials') ) : the_row(); ?>   
<?php 

$image = get_sub_field('image');
$size = 'img_80x80'; // (thumbnail, medium, large, full or custom size)

?>			
				<div class="slide-item">
                    <div class="inner-box">
                        <div class="info-outer clearfix">
                            <h2>“</h2>
                            <div class="text"><?php the_sub_field('content'); ?></div>
                        </div>
                        <figure class="author-image img-circle">
<?php
if( $image ) {

	echo wp_get_attachment_image( $image, $size );

}							
?>
						</figure>
                        <div class="author-info">
                            <h4><?php the_sub_field('name'); ?></h4>
                        </div>
                    </div>
         		</div><!--slide-item-->	 
  <?php endwhile; ?>	      	
	        </div><!--owl-->	
        </div><!--inner-->  	
      </section>
<!--/testimonial_section-->
	   <?php elseif( get_row_layout() == 'counter_section' ): ?>
<!--counter_section-->

	  <section class="qta-section cp-section section_bg" style="background-image:url('<?php the_sub_field('background'); ?>');">
        <div class="inner">
			<?php if(get_sub_field('title')): ?>
				  <div class="cp-title text-center">
					 <h2><?php the_sub_field('title'); ?></h2> 
					   <span><?php the_sub_field('subtitle'); ?></span> 
				  </div><!--cp-title-->	
			<?php endif; ?>
			<div class="row justify-content-between">
			 <?php while ( have_rows('counter') ) : the_row(); ?> 		
				<div class="col-md">
				  <div class="counter">
					 <i class="fa <?php the_sub_field('icon'); ?>"></i> 
					 <h3>
						 <?php the_sub_field('title'); ?>
					  </h3>
						  <?php the_sub_field('subtitle'); ?>
				  </div>	
				</div>
			 <?php  endwhile; ?>		
			</div>                         
        </div>
      </section>
<!--/counter_section-->
	   <?php elseif( get_row_layout() == 'widget_section' ): ?>
<!--widget_section-->

	  <section class="qta-section cp-section section_bg" style="background-image:url('<?php the_sub_field('background'); ?>');">
        <div class="inner">
			<?php if(get_sub_field('title')): ?>
				  <div class="cp-title text-center">
					 <h2><?php the_sub_field('title'); ?></h2> 
					   <span><?php the_sub_field('subtitle'); ?></span> 
				  </div><!--cp-title-->	
			<?php endif; ?>
			<div class="row justify-content-between">
			 <?php while ( have_rows('widget') ) : the_row(); ?> 		
				<div class="col-md">
				  <div class="widget-lists">
					 <i class="fa <?php the_sub_field('icon'); ?>"></i> 
					 <h3>
						 <?php the_sub_field('title'); ?>
					  </h3>
						  <?php the_sub_field('subtitle'); ?>
				  </div>	
				</div>
			 <?php  endwhile; ?>		
			</div>                         
        </div>
      </section>
<!--/widget_section-->
	   <?php elseif( get_row_layout() == 'three_column_section' ): ?>
<!--three_column_section-->

	  <section class="qta-section cp-section bgcolor">
        <div class="inner">
			<?php if(get_sub_field('title')): ?>
				  
			<?php endif; ?>
			<div class="row justify-content-between align-items-lg-center">
			<div class="col-lg-5">
				<div class="cp-title">
					 <h2><?php the_sub_field('title'); ?></h2> 
					   <span><?php the_sub_field('subtitle'); ?></span> 
			    </div><!--cp-title-->		
			</div>	
			<div class="col-lg-7">
			 <div class="row justify-content-between">	
			 <?php while ( have_rows('column') ) : the_row(); ?> 		
				<div class="col-md-4">
				  <div class="column-lists">
					 <i class="fa <?php the_sub_field('icon'); ?>"></i> 
					 <h3>
						 <?php the_sub_field('title'); ?>
					  </h3>
						  <?php the_sub_field('subtitle'); ?>
				  </div>	
				</div>
			 <?php  endwhile; ?>		
			 </div>	 
			</div>
	
			</div>                         
        </div>
      </section>
<!--/three_column_section-->
	   <?php elseif( get_row_layout() == 'default_section' ): ?>
<!--default_section-->

      <section class="cp-section about-section bgsection">
      	<div class="inner">
      	  <div class="row align-items-lg-center">
      	  	<div class="col-lg-auto">
				  <div class="cp-title">
					  <span><?php the_sub_field('subtitle'); ?></span> 
					 <h2><?php the_sub_field('title'); ?></h2> 
					  
				  </div><!--cp-title-->	
      	  	</div><!--col-->
      	  	<div class="col-lg">

			  <div class="section-entry">
				  <?php the_sub_field('content'); ?>	  
			  </div>
				
			

      	  	</div><!--col-->
      	  </div><!--row-->	
      	</div><!--inner-->
      </section>

<!--/default_section-->

	 <?php elseif( get_row_layout() == 'services_section' ): ?>   
      <section class="cp-section cp-services-section bgsection">
      	<div class="inner">
      	  <div class="cp-title">
      	  	<h2><?php the_sub_field('title'); ?></h2>
      	  	<?php the_sub_field('content'); ?>
      	  </div>	
      	  <div class="row_wrap">
			<?php if( have_rows('Services') ): ?>	
				   <?php while ( have_rows('Services') ) : the_row(); ?> 	
			<div class="col-lg">
			  <div class="cp-services">
			  	<div class="services-content">
					<img src="<?php the_sub_field('image'); ?>" />
				  	<h4><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('title'); ?></a></h4>
				  	<?php the_sub_field('content'); ?>
				  	<div class="services-btn">
				  		<a href="<?php the_sub_field('url'); ?>" class="global-btn btn-solid">Read More</a>		
				  	</div><!--services-btn--> 		
			  	</div><!--services-content-->
			  </div><!--cp-services-->	
			</div><!--col-->
				   <?php  endwhile; ?>	
			<?php endif; ?>		  
      	  </div><!--row-->	
      	</div><!--inner-->
      </section>

       <?php elseif( get_row_layout() == 'masonry_gallery' ): ?>
<!--gallery-->
	  <section id="section<?php echo $co; ?>" class="gallery-section cp-section">
	    <div class="inner">
<?php if( get_sub_field('title') ): ?>	        
	        <!--Sec Title-->
	        <div class="cp-title text-center">
				<span><?php the_sub_field('subtitle'); ?></span>
				<h2><?php the_sub_field('title'); ?></h2>
				
	        </div>
<?php endif; ?>			
	                <!--Sortable Masonry-->
	        <div class="sortable-masonry mixed-gallery-section">
	            
	            <!--Filter-->
	            <div class="filters text-center">
	                <ul class="filter-tabs filter-btns button-group clearfix">
<?php while ( have_rows('gallery') ) : the_row(); $g++; ?>
	                    <li class="filter <?php if($g==1):?>active<?php endif; ?>" data-role="button" data-filter=".gal<?php echo $g; ?>"><?php the_sub_field('title'); ?></li>
<?php endwhile; ?>
	    			</ul>
	            </div>


<?php if( have_rows('gallery') ): ?>
	            <div class="items-container grid clearfix">
    <?php while ( have_rows('gallery') ) : the_row(); $gi++; ?>


<?php 
$images = get_sub_field('gallery');
if( $images ): ?>

        <?php foreach( $images as $image ): ?>
		            <div class="default-portfolio-item masonry-item grid-item col-lg-4 col-md-4 col-6 small-block gal<?php echo $gi; ?>">
		                <div class="inner-box">
		                    <figure class="image-box">
		                    	<img src="<?php echo $image['url']; ?>" class="img-fluid" />
		                   	</figure>
		                    <!--Overlay Box-->
		                    <div class="overlay-box">
		                        <div class="overlay-inner">
		                            <div class="content">
		                                <h3><?php the_sub_field('title'); ?></h3>
		                                <a href="<?php echo $image['url']; ?>" class="lightbox-image image-link" data-lightbox="gallery-set"><span class="icon fa fa-plus-square-o"></span></a>
		                            </div><!--content-->
		                        </div><!--overlay-inner-->
		                    </div><!--overlay-box-->
		                </div><!--inner-box-->
	                </div><!--item-->

        <?php endforeach; ?>

<?php endif; ?>



    <?php endwhile; ?>
</div><!--grid-->
<?php endif; ?>
	            

	        </div><!--End Sortable Masonry-->
	    </div><!--inner-->
	  </section>
<!--end gallery-->
<!--our_gallery-->

		<?php
		//end get_row_layout
		 endif; ?>

  	<?php  endwhile; ?>


<?php else : ?>
<div id="cp-container" class="cp-section">
	<section>
  <div class="inner">
      <div class="full-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="cp-entry">
				<?php the_content(); ?>
			</div><!--cp-entry-->
		<?php endwhile; ?>
      </div>
  </div><!--inner-->
		</section>
</div><!--cp-container-->
<?php endif; ?>




<script>
	var divs = jQuery(".row_wrap .col-lg");
	for(var i = 0; i < divs.length; i+=3) {
	  divs.slice(i, i+3).wrapAll("<div class='row'></div>");
	}		
</script>


<script>
	jQuery('#cp-container img').addClass('img-fluid');
</script>

<?php get_footer();
