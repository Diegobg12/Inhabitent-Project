<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="product-grid">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="product-grid-item">	
						<div class="thumbnail-wrapper">
							<a href='<?php echo get_permalink(); ?>'>
								<img  class="wp-post-image" src="<?php echo CFS()->get('image'); ?>" alt="">

							</a>
						</div>

						<div class="product">
							<h2 class="entry-title">
								
								<?php echo get_the_title() ?>
							</h2>
							
							<span class="price"><?php echo CFS()->get('price');?></span>
						</div>

						</div>

			<?php endwhile; ?>
			</div>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
