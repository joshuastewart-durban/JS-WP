<?php
/* Template Name: Portfolio */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main container-fluid">
            <?php
                get_template_part( 'template-parts/content', 'portfolio' );
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();