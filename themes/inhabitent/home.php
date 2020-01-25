
<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div id="primary" class="content-area journal">

			<ul class="post-content">
				<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
				<li>
					<header class="entry-header">
						<img class = "wp-post-image" src = "<?php echo get_the_post_thumbnail_url(); ?>">
						<h2> <a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php echo get_the_title() ?></a></h2>

						<span class="entry-meta">
							<?php
							$date = new DateTime(get_the_date());
								echo $date->format('d F Y');
							 ?> 
							/ <?php echo get_comments_number(); ?> COMMENTS
							/ by <?php echo get_author_name(); ?>
						</span>

					</header>

					<div class="entry-content"> 
						<p>	<?php echo wp_trim_words( get_the_content(), $num_words = 51, $more = '[...]' );?> </p>
						<p><a class= "second-button" href="<?php echo get_permalink(); ?>" rel="bookmark">Read Entry</a></p>

					</div>

					

					<?php endforeach; wp_reset_postdata(); ?>
					</li>

			</ul>
			
	
				<?php get_sidebar(); ?>
	
		
</div><!-- #primary -->
<?php get_footer(); ?>
