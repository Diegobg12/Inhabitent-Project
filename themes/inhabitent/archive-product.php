<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
// http://localhost:8888/wordpress%202/index.php/product_type/

get_header(); ?>

<section>

				<?php 
				
				$terms = get_terms('product_taxonomy');
				?>

			<ul>




				<?php foreach($terms as $term):?>
					<li> <a href="<?php echo esc_url(get_term_link($term));?>"><?php echo $term->name;?></a></li>
				<?php endforeach; ?>
			</ul>
			
</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
