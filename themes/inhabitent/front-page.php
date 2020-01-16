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
		<h2> SHOP STUFF</h2>
	</section>




<?php get_sidebar(); ?>
<?php get_footer(); ?>
