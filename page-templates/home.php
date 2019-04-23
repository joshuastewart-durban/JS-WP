<?php
/**
 * Template Name: Home Page
 *
 *  For displaying the home page content
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="full-width-page-wrapper">

    <div class="<?php echo esc_attr($container); ?>" id="content">
        <div class="row">

            <div class="col-md-12">
                <h2>Joshua Stewart</h1>
            </div><!-- #primary -->

        </div><!-- .row end -->
        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main" role="main">

                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part('loop-templates/content', 'page'); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>

                    <?php endwhile; 
                ?>

                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row end -->

    </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>