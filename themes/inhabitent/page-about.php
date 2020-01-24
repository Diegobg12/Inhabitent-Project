
<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

 
get_header(); ?>
	<section  class= "about-hero">

	<div class= "home-item">

	<h1><?php echo get_the_title(); ?> </h1>
			
	</div>

	</section>


<div style="padding-top: 0;" id="primary" class="content-area about-wrapper">
		<main id="main" class="site-main about-page-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
