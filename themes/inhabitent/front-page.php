<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<section  style =" background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(<?php echo get_the_post_thumbnail_url()?>) no-repeat top ;background-size: cover,cover;" class= "about-hero">

		<div class= "home-item">
		
			<img src= "<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-full.svg" alt="">				
			
		</div>

	</section>

	

	<section>

	<h2>SHOP STUFF</h2>
	<section >

		<ul class="product-info">
		<?php $terms = get_terms('product_taxonomy');?>
			<?php foreach($terms as $term):?>
				<li class="info_wrapper">
					<img src= "<?php echo get_template_directory_uri();?>/assets/images/product-type-icons/<?php echo $term->name;?>.svg" alt="">				
					<p><?php echo $term->description;?></p>
					<a class="btn" href="<?php echo esc_url(get_term_link($term));?>"><?php echo $term->name;?> STUFF</a>
				</li>
			<?php endforeach; ?>

		</ul>
		
	</section>

	<section class="latest-entries">

	<div class= "container">

	
			<h2>INHABITENT JOURNAL</h2>

			<?php
				$args = array( 'post_type' => 'post', 'numberposts' => '3' );
				$posts = get_posts( $args ); // returns an array of posts
			?>
				<ul >
				<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
					<li>
						<div class= "thumbnail-wrapper">
							<img class = "wp-post-image" src = "<?php echo get_the_post_thumbnail_url(); ?>">
						</div>

						<div class="post-info-wrapper">
							<span class="entry-meta">

							
							<span> <?php echo get_the_date() ?>
							 <?php $comments_count = get_comments(); ?>
							 <?php $comments_count; ?></span>

							 </span>
							<h3> <a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php echo get_the_title() ?></a></h3>
							<div>

								<a class= "second-button" href="<?php echo get_permalink(); ?>" rel="bookmark">Read Entry</a>

							</div>

						</div>

					</li>

					<?php endforeach; wp_reset_postdata(); ?>
					</div>

				</ul>

	</div>		

	</section>

	<section>
		<h2>LATEST ADVENTURES</h2>

	</section>




	</section>

<?php get_footer(); ?>
