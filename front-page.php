get_header(); ?>

<div id="primary" class="content-area">
 <main id="main" class="site-main">
 <?php
 // the loop
 while ( have_posts() ) : the_post();
 get_template_part( 'template-parts/content', 'frontpage' );
 
 endwhile; // End of the loop.
 ?>

</main><!-- #main -->
 </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();