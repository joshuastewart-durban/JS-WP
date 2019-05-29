<?php
/**
 * The frontpage template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joshua_Stewart_Portfolio
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main container-fluid">
            <div class="row">
                <div class="col mainheading landing-blurb">
                    <h1 class="sitetitle">Online Portfolio</h1>
                    <p class="lead">
                        Find out more about my creations.
                    </p>
                </div>
                <div class="col">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/dan-rogers-1560459-unsplash.jpg"/>
                </div>
            </div>
            <?php
            // the loop
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'frontpage');

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();