<?php acf_form_head(); ?>
<?php
/**
 * Template Name: Contact
 */

get_header(); ?>



<div id="page-banner" class="<?php if(get_field('banner')) : ?>has-banner<?php endif; ?>" style="background: <?php if(get_field('banner')) : ?>url('<?php the_field('banner'); ?>') no-repeat scroll <?php the_field('bg_position'); ?> / cover transparent;<?php else: ?>#212121<?php endif; ?>;">
  <div class="inner">
    <h1><?php the_title(); ?></h1>
  </div><!--inner-->
</div><!--page-banner-->

<div id="cp-container" class="cp-section contact-page">
  <div class="inner">
      <div class="row no-gutters align-items-stretch">
	   <div class="col-lg-6">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="cp-entry">
						    <div class="contact-form">
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
			</div><!--cp-entry-->
		<?php endwhile; ?>		   
	   </div><!--col-->  
	   <div class="col-lg-6">
		<?php 

		$location = get_field('map','option');

		if( !empty($location) ):
		?>
		<div class="acf-map">
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
		</div>
		<?php endif; ?>		
	   
	   </div><!--col-->  
      </div>
  </div><!--inner-->
</div><!--cp-container-->



<script>
	jQuery('img').addClass('img-fluid');
</script>

<?php get_footer();
