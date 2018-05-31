<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>



<div id="page-banner" style="background: #212121">
  <div class="inner">
    <?php the_archive_title( '<h1>', '</h1>' ); ?>
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
      	  				<h2 class="our-blog-date"><?php echo get_the_date('j'); ?><span><?php echo get_the_date('F'); ?> <?php echo get_the_date('Y'); ?></span></h2>
      	  			</div>
				 <?php endif; ?>	
      	  			<div class="blog-entry">
      	  				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      	  				<p><?php echo string_limit_words($content,15); ?>...</p>
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
