<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php
	$side_img = get_field('featured_image');
	$sizeimg = "full"; // (thumbnail, medium, large, full or custom size)
	$side_image = wp_get_attachment_image_src( $side_img, $sizeimg );
	$content = get_the_excerpt();
?>

<div id="page-banner" class="<?php if(get_field('featured_image')) : ?>has-banner blog-banner<?php endif; ?>" style="background: <?php if(get_field('featured_image')) : ?>url('<?php echo $side_image[0]; ?>') no-repeat scroll center center / cover transparent;<?php else: ?>#212121<?php endif; ?>;">
  <div class="inner">
    <h1><?php the_title(); ?></h1>
  </div><!--inner-->
</div><!--page-banner-->


<div id="cp-container" class="cp-section">
  <div class="inner">
    <div class="blog-content">
	  <div class="row">
	   <div class="col-lg-8">
		
		<?php while ( have_posts() ) : the_post(); ?>
		   
			<h2 class="blog-date"><?php echo get_the_date('j'); ?><span><?php echo get_the_date('F'); ?> <?php echo get_the_date('Y'); ?></span></h2>
		   
			<div class="cp-entry">
				<?php the_content(); ?>
			</div><!--cp-entry-->
		    <div class="cp-cpmment">
				<?php 				
					if ( comments_open() || get_comments_number() ) :
					comments_template(); endif;	 
				?>
			</div><!--cp-entry-->

		<?php endwhile; ?>
	   </div><!--col-->	    

	    	      <div class="col-md-4">
	    	      	<div class="sidebar sidebar-blog">
	    	      	  <?php dynamic_sidebar( 'sidebar-blog' ); ?>
				
			  <aside>
				<div class="widget side-post">
					<h5 class="widget-title">Recent Posts</h5>

		
<?php $cpost = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '4' ) );
 
if ( $cpost->have_posts() ) : ?>
	<?php while ( $cpost->have_posts() ) : $cpost->the_post(); ?>
<?php
	$side_img = get_field('featured_image');
	$sizeimg = "img_400x400"; // (thumbnail, medium, large, full or custom size)
	$side_image = wp_get_attachment_image_src( $side_img, $sizeimg );
?>


					<div class="side-post">
<?php if($side_image!="") : ?>
					<a href="<?php the_permalink(); ?>"><img src="<?php echo $side_image[0]; ?>" alt="<?php echo get_the_title(get_field('featured_image')) ?>" class="img-fluid" /></a>
<?php endif; ?>
						<div class="side-post-entry" <?php if($side_image=="") : ?>style="margin-left: 0;"<?php endif; ?>>
							<h4 <?php if($side_image=="") : ?>style="margin-bottom: 4px;"<?php endif; ?>><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h4>
							<div class="date-time item"><i class="fa fa-calendar-o"></i> <?php echo get_the_date(); ?></div>
						</div>
					</div>

	<?php endwhile; wp_reset_postdata(); ?>

<?php endif; ?>   	

				</div>
			  </aside>

	
	    	      	</div><!--sidebar-->
	    	      </div><!--col-md-4-->		  
		  
	  </div><!--row-->	  
    </div><!--blog-content-->
  </div><!--inner-->
</div><!--cp-container-->



<script>
	jQuery('#cp-container img').addClass('img-fluid');
</script>

<?php get_footer();
