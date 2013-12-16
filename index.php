<?php get_header(); ?>
	
<!-- featured image -->

	<div class="band">
		<div class="featured container">
		
		<?php if (function_exists('slideshow')) { slideshow($output = true, $gallery_id = false, $post_id = false, $params = array()); } ?>
		
		</div><!--end container -->
	</div><!-- end band -->
	
<!-- main content -->
<div class="main content band">
<div class="primary content container">		
	<div class="ten columns">
	
	<!-- Start the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<article>
			<h4><a href="<?php the_permalink() ?>"><?php the_category(); ?></a></h4>
			<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<?php the_author_posts_link() ?> <?php the_time('F jS, Y') ?>
			<a href="<?php the_permalink() ?>">
			
			<?php if ( function_exists('has_post_thumbnail') &&
				has_post_thumbnail($post->ID)) {
					$thumbnail =
						wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
				?>
			
				<img src="<?php echo $thumbnail[0];  ?>"alt="" />
				
			<?php }else{ ?>
					
				<img src="<?php echo get_template_directory_uri(); ?>/images/knog1.jpg" alt="knog light">
				
			<?php } ?>
			
			</a><!-- end permalink -->
			
			<?php the_content(); ?><!--more-->
					</article>
	
	<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	
	<?php endif; ?>
	<?php if(function_exists('tw_pagination')) tw_pagination(); ?>
				
	
	</div><!-- end ten columns -->
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>