<?php get_header(); ?>
		
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
				
				<img src="<?php echo $thumbnail[0]; ?>"alt="" />
			
			<?php }else{ ?>				
			<?php } ?>
			
			</a><!-- end permalink -->
			
			<?php the_content(); ?>
					</article>
	
	<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	
	<?php endif; ?>
	
	</div><!-- end ten columns -->
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>