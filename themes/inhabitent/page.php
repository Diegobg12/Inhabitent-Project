
<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>




<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<h1>hakjhahlsdflh</h1>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
