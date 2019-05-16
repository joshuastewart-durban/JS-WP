<?php
/* Template Name: Portfolio */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main container">
            <?php
            // the loop
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'portfolio' );

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();