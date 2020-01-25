<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>



<div id="primary" class="content-area journal">


	<section class=" find-us">
	
    <?php if(have_posts()) : ?>
	<h1>SEARCH RESULTS FOR: <span> <?php echo $_GET['s']; ?> </span></h1>
			<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php if ( 'post' === get_post_type() ) : ?>
				<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
			<?php endif; ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>

		</div><!-- .entry-summary -->
		<a class= "second-button" href="<?php echo get_permalink(); ?>" rel="bookmark">Read Entry</a>
		
	<?php else : 
		echo '<h1> No results, try again...</h1>';
		
		get_search_form();?>
		
		      <!-- Display "Posts not found" message here -->
    <?php endif; ?>
	</section>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

