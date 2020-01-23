<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<section class= "page-header">

			<h1>SHOP STUFF</h1>
				<?php 
				
				$terms = get_terms('product_taxonomy');
				?>

			<ul class="product-type-list">
				<?php foreach($terms as $term):?>
					<li> <a href="<?php echo esc_url(get_term_link($term));?>"><?php echo $term->name;?></a></li>
				<?php endforeach; ?>
			</ul>

			</section>

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

<!-- <?php get_sidebar(); ?>  -->
<?php get_footer(); ?>
