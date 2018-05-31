<?php acf_form_head(); ?>
<?php
/**
 * The front page template file
 */

get_header(); ?>

<?php if(get_field('hide_contact_form', 'option')) : ?>		
<style type="text/css">
	.cp-banner-content .inner{min-height: inherit; padding: 0 40px;}
	.cp-banner-content .inner .row{min-height: inherit;}
</style>
<?php endif; ?>

<?php if(get_field('type', 'option')) : ?>	
<style type="text/css">
	.cp-banner-content{position: relative; height: 100%;}
	.cp-banner-content:after{content: '';background: rgba(0,0,0,.5);width: 100%;height: 100%;display: block; position: absolute; top:0;left: 0;}
	.cp-banner-content .inner{position: relative; z-index: 100;}
</style>
<?php endif; ?>



<?php if( have_rows('slides', 'option') ): ?>
      <section>
      	<div id="cp-banner">
		  <div id="cp-slide" class="carousel slide" data-ride="carousel">

<?php if(!get_field('type', 'option')) : ?>				  
			  <div class="carousel-inner">
  			   <?php while ( have_rows('slides', 'option') ) : the_row(); $x++; ?>
			    <div class="carousel-item <?php if($x==1):?>active<?php endif; ?>">
		      	  <div class="banner" style="background: url('<?php the_sub_field('images', 'option'); ?>') no-repeat scroll top / cover transparent;">	      	  	
		      	  </div><!--banner-->
			    </div><!--item-->
  			   <?php endwhile; ?>				    
			  </div><!--carousel-inner-->
<?php endif; ?>
			  
			  
			  
			  <div class="cp-banner-content"<?php if(get_field('type', 'option')) : ?>	style="background: url('<?php the_field('banner_background', 'option'); ?>') no-repeat fixed top / cover transparent;"<?php endif; ?>>
		       <div class="inner">	  
					  <div class="row align-items-center">
					    <div class="col-lg-7">
						  <div class="banner-entry">
						   <?php if(!get_field('content_type', 'option')) : ?>		  
						    <h1>
							  	<?php the_field('title', 'option'); ?>
						    </h1>	       
						    <?php the_field('content', 'option'); ?> 
						   <?php else : ?>
							<div class="video-embed">
								<?php the_field('video', 'option'); ?>
							</div>
						   <?php endif; ?>	  
						  </div><!--banner-entry-->
					    </div><!--col-->
<?php if(!get_field('hide_contact_form', 'option') && !get_field('custom_contact_form', 'option')) : ?>			  
						  <div class="col-lg-5">
						    <div class="banner-form">
								<h3>
									<?php if(get_field('form_title', 'option')) : ?>		  
									<?php the_field('form_title', 'option'); ?>
									<?php else : ?>
									Request a Free  <br />Quote Today!
									<?php endif; ?>	  
								</h3>
								<span class="subtitle">
									<?php if(get_field('form_subtitle', 'option')) : ?>		  
									<?php the_field('form_subtitle', 'option'); ?>
									<?php else : ?>
									Our strategies are proven and effective.
									<?php endif; ?>	 
								</span>
								<?php acf_form(array(
									'post_id'		=> 'new_post',
									'new_post'		=> array(
										'post_type'		=> 'contacts',
										'post_status'		=> 'publish'
									),
									'post_title' => true,
									'post_content' => false,
									'field_groups' => array('group_5afa83798873d'),
								   'form'               => true,
								   'html_before_fields' => '',
								   'html_after_fields'  => '',
								   'html_after_fields' => '',
								   'submit_value'       => 'Submit',
								   'updated_message' => __("Message Sent", 'acf'),
								   'html_updated_message'	=> '<div class="alert alert-success" role="alert">%s</div>',
								   'uploader' 			 => 'wp',
								)); ?>									
							</div>	      
					      </div><!--col-->
						  
<?php elseif(get_field('custom_contact_form', 'option')) : ?>		
		<?php
			$c_form = get_field('contact_form', 'option');			  
		?>
		<?php echo do_shortcode($c_form); ?>		  
<?php endif; ?>						  
					  </div><!--row-->			      	  	    	  	
		       </div><!--inner-->   				  
			  </div><!--cp-banner-content-->
		  </div><!--cp-banner-->   	  
      	  
      	</div><!--cp-banner-->
      </section>
<?php endif; ?>      
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
<section>
	<div class="cp-section">
		<div class="inner text-center">
    		No layout found
		</div><!--inner-->
	</div><!--cp-section-->
</section>	
<?php endif;  ?>


<script>
	jQuery('label[for="acf-_post_title"]').html("Name <span class='acf-required'>*</span>");
</script>
<?php get_footer();
