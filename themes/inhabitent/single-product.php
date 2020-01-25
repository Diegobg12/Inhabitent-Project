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
               <div >
                  <a href="" class="second-button"><span class="fa fa-facebook"></span> Like</a>
                  <a  href="" class="second-button"><span class="fa fa-twitter"></span> Tweet</a>
                  <a  href="" class="second-button"><span class="fa fa-pinterest"></span> Pin</a>
               </div>

            </div>

      </div>

   </article>
   <?php endwhile; // End of the loop. ?>

   </main>
   <?php get_footer(); ?>
</div>




