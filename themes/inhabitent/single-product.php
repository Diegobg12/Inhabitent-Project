<?php
/**
* The template for displaying all single posts.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area journal">
   <main id="main" class="site-main " role="main">
   <?php while ( have_posts() ) : the_post(); ?>

   <article class="single-product">
         <div class="product-image-wrapper">
            <img  class="wp-post-image" src="<?php echo CFS()->get('image'); ?>" alt="">
         </div>

         <div class="product-content-wrapper">
            <header class="entry-header">
               <h1 class="entry-title"><?php echo get_the_title() ?></h1>
            </header>
            
            <div class="entry-content">
               <p class="price"><?php echo CFS()->get('price');?></p>
               <p><?php echo get_the_content();?></p>
               <div class="social-buttons">
                  <a type="button" class="second-button"><i class="fa fa-facebook"></i> Like</a>
                  <a type="button" class="second-button"><i class="fa fa-twitter"></i> Tweet</a>
                  <a type="button" class="second-button"><i class="fa fa-pinterest"></i> Pin</a>
               </div>

            </div>

      </div>

   </article>
   <?php endwhile; // End of the loop. ?>

   </main>
</div>



<?php get_footer(); ?>
