<?php
/**
* The template for displaying all single posts.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area journal">

	<ul class="post-content">
		
		<main id="main" class="site-main " role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<p>
			<a class= "second-button" href="<?php echo get_permalink(); ?>" rel="bookmark"> <span class="fa fa-facebook"></span> Like</a>
			<a class= "second-button" href="<?php echo get_permalink(); ?>" rel="bookmark"><span class="fa fa-twitter"></span> Tweet</a>
			<a class= "second-button" href="<?php echo get_permalink(); ?>" rel="bookmark"><span class="fa fa-pinterest "></span> pin</a>
		</p>

		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
		comments_template();
		endif;
		?>
		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</ul>

   <?php get_sidebar(); ?>
   </div><!-- #primary -->




<?php get_footer(); ?>
