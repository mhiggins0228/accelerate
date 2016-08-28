<?php
/**
 * The template for displaying the About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
			 	$services_1_image = get_field ('services_1_image');
				$services_2_image = get_field ('services_2_image');
				$services_3_image = get_field ('services_3_image');
				$services_4_image = get_field ('services_4_image');
				
				$services_1_text = get_field ('services_1_text');
				$services_2_text = get_field ('services_2_text');
				$services_3_text = get_field ('services_3_text');
				$services_4_text = get_field ('services_4_text');
				?> 
			
			<article class = "case-study">
				<aside class = "case-study-sidebar">
				<h2><?php the_title(); ?></h2> 	
				<h5><?php echo $services; ?></h5>
	
							
				<?php the_content(); ?>
				
				<p><a href ="<?php echo $link; ?>">Site Link</a></p> 
				</aside>
				
				<div class="about-images">
					<img src="<?php echo $services_1_image; ?>" />
					<img src="<?php echo $services_2_image; ?>" />
					<img src="<?php echo $services_3_image; ?>" />
					<img src="<?php echo $services_4_image; ?>" />
				
				</div>		
				<div class="about-text">
					<img src="<?php echo $services_1_text; ?>" />
					<img src="<?php echo $services_2_text; ?>" />
					<img src="<?php echo $services_3_text; ?>" />
					<img src="<?php echo $services_4_text; ?>" />
				
				</div>		
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>