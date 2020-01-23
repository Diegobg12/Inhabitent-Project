<?php
/**
* The template for displaying all single posts.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area journal">

	<section class="find-us">
		
		<main id="main" class="site-main " role="main">
		<h1><?php echo get_the_title(); ?> </h1>

		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5207.366639653124!2d-123.13816800000001!3d49.263448!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490%20W%20Broadway%2C%20Vancouver%2C%20BC%20V6H%204E8!5e0!3m2!1sen!2sca!4v1579771538903!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

		<?php while ( have_posts() ) : the_post(); ?>

			<!-- <?php get_template_part( 'template-parts/content', 'single' ); ?> -->

		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
		
	</section>

	<?php get_sidebar(); ?>



   </div><!-- #primary -->



<?php get_footer(); ?>
