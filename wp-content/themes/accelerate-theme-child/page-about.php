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


			<article class = "case-study">
				<aside class = "case-study-sidebar">
				<h2><?php the_title(); ?></h2> 	
				
					<?php while ( have_posts() ) : the_post(); 
					$services_1_image= get_field('services 1 image');
					$services_1_title= get_field('services 1 title')
					$services_1_description= get_field('services 1 description');
					$services_2_image= get_field('services 2 image');
					$services_2_title= get_field('services 2 title');	
					$services_2_description= get_field('services 2 description');
					$services_3_image= get_field('services 3 image');
					$services_3_title= get_field('services 3 title');
					$services_3_description= get_field('services 3 description');
					$services_4_image= get_field('services 4 image');
					$services_4_title= get_field('services 4 title');
					$services_4_description= get_field('services 4 description'); ?>
	 	
	
					  <section class="about-section">
                        <figure class="service-image align-left">
                                <?php echo wp_get_attachment_image( $services_1_image, $size ); ?>
                        </figure>
                        <div class="service-description">
                                <h2><?php echo $services_1_title; ?></h2>
                                <p><?php echo $services_1_description; ?></p>
                        </div>
                </section>

                <section class="about-section">
                        <figure class="service-image align-right">
                                <?php echo wp_get_attachment_image( $services_2_image, $size ); ?>
                        </figure>
                        <div class="service-description">
                                <h2><?php echo $services_2_title; ?></h2>
                                <p><?php echo $services_2_description; ?></p>
                        </div>
                </section>
                    
                <section class="about-section">
                        <figure class="service-image align-right">
                                <?php echo wp_get_attachment_image( $services_3_image, $size ); ?>
                        </figure>
                        <div class="service-description">
                                <h2><?php echo $services_3_title; ?></h2>
                                <p><?php echo $services_3_description; ?></p>
                        </div>
                </section>
                
                    <section class="about-section">
                        <figure class="service-image align-right">
                                <?php echo wp_get_attachment_image( $services_4_image, $size ); ?>
                        </figure>
                        <div class="service-description">
                                <h2><?php echo $services_4_title; ?></h2>
                                <p><?php echo $services_4_description; ?></p>
                        </div>
                </section>
	
							
				<?php the_content(); ?>
				
				<p><a href ="<?php echo $link; ?>">Site Link</a></p> 
				</aside>
				
						
<?php endwhile; // end of the loop. ?>
			
		
	
		
</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>