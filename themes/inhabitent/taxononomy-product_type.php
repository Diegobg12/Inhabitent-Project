<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class= "page-header">

			<h1>SHOP STUFF</h1>
				<?php 
				$terms = get_terms('product_taxonomy');
				?>

			<ul class="product-type-list">
				<?php foreach($terms as $term):?>
					<li> <a href="<?php echo esc_url(get_term_link($term));?>"><?php echo $term->name;?></a></li>
				<?php endforeach; ?>
			</ul>

			</header>

			<?php $wpb_all_query = new WP_Query(array('post_type'=>'product', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?> 


			<div class="product-grid">

				
			<?php if ($wpb_all_query->have_posts() ) : ?>
				
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

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


				<?php else : ?>
    				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>


			</main><!-- #main -->

		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
