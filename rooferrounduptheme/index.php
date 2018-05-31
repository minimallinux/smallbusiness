<?php
/**
 * The main template file

 */

get_header(); ?>
<div id="page-banner" class="<?php if(get_field('banner','option')) : ?>has-banner<?php endif; ?>" style="background: <?php if(get_field('banner','option')) : ?>url('<?php the_field('banner','option'); ?>') no-repeat scroll <?php the_field('bg_position','option'); ?> / cover transparent;<?php else: ?>#212121<?php endif; ?>;">
  <div class="inner">
    <h1>Blog</h1>
  </div><!--inner-->
</div><!--page-banner-->

<div id="cp-container" class="cp-section">
  <div class="inner">
      <div class="full-content">
		<?php if ( have_posts() ) : ?>


			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>


<?php
	$side_img = get_field('featured_image');
	$sizeimg = "img_1000x600"; // (thumbnail, medium, large, full or custom size)
	$side_image = wp_get_attachment_image_src( $side_img, $sizeimg );
	$content = get_the_excerpt();
?>


      	  	<div class="col-lg-4">
      	  		<div class="blog-item">
				 <?php if(get_field('featured_image')): ?>	
      	  			<div class="blog-img">
      	  				<a href="<?php the_permalink(); ?>"><img src="<?php echo $side_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid" /></a>
      	  			</div>
				 <?php endif; ?>	
      	  			<div class="blog-entry">
      	  				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      	  				<p><?php echo string_limit_words($content,15); ?>...</p>
						<a href="<?php the_permalink(); ?>" class="global-btn btn-small">Read More</a>
      	  			</div>
      	  		</div><!--blog-item-->
      	  	</div><!--col-->

			<?php endwhile; ?>


			<?php wp_pagenavi(); ?>

		<?php
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>	
      </div>
  </div><!--inner-->
</div><!--cp-container-->


<script>

	var divs = jQuery(".col-lg-4");
	for(var i = 0; i < divs.length; i+=3) {
	  divs.slice(i, i+3).wrapAll("<div class='row'></div>");
	}	

</script>

<?php get_footer();
