<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section class= "home-hero">

		<div class= "home-item">
		
			<img src= "<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-full.svg" alt="">				
			
		</div>

	</section>




	<section>

	<h2>SHOP STUFF</h2>
	<section class="product-info">

			<?php 

			$terms = get_terms('product_taxonomy');
			?>

			<ul>

			<?php foreach($terms as $term):?>
				<li> <a href="<?php echo esc_url(get_term_link($term));?>"><?php echo $term->name;?></a></li>
			<?php endforeach; ?>
			</ul>

	</section>
	


		

		<div class="product-info">
			<div class="info_wrapper">
			<img src= "<?php echo get_template_directory_uri();?>/assets/images/product-type-icons/do.svg" alt="">				
				<p> Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
			</div>
			<div class="info_wrapper">
				<img src= "<?php echo get_template_directory_uri();?>/assets/images/product-type-icons/eat.svg" alt="">				

				<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
				<a class= "first-button" href="">EAT STUFF</a>
			</div>
			<div class="info_wrapper">
				<img src= "<?php echo get_template_directory_uri();?>/assets/images/product-type-icons/sleep.svg" alt="">				
				<p>Get a good night's rest in the wild in a home away from home that travels well</p>
				<a class= "first-button" href="">SLEEP STUFF</a>
			</div>
			<div class="info_wrapper">
			<img src= "<?php echo get_template_directory_uri();?>/assets/images/product-type-icons/wear.svg" alt="">				
				<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
				<a class= "first-button" href="">WEAR STUFF</a>
			</div>
		</div>
		
	</section>

	<section class="container">

			<h2>INHABITENT JOURNAL</h2>

	<?php
		   $args = array( 'post_type' => 'post', 'numberposts' => '3' );
		   $posts = get_posts( $args ); // returns an array of posts
	?>
		<ul class = "content-wrap">
		<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
			<li>
				<div class= "image_wrapper">
					<img class = "" src = "<?php echo get_the_post_thumbnail_url(); ?>">
				</div>

				<div>
					<span></span>
						<a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php echo get_the_title() ?></a>
					<div>

						<a class= "second-button" href="<?php echo get_permalink(); ?>" rel="bookmark">Read Entry</a>

					</div>

				</div>

			</li>

			<?php endforeach; wp_reset_postdata(); ?>
			</div>

		</ul>

			

	</section>

	<section>
		<h2>LATEST ADVENTURES</h2>

	</section>




	</section>

<?php get_footer(); ?>
