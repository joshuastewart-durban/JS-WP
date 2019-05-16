<?php
/**
 * Template part for displaying the fontpage
 * Prepared for Page Builder
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package petj-17
 */
?>

<div class="container">
    <div class="mainheading">
        <h1 class="sitetitle">Mediumish</h1>
        <p class="lead">
            Bootstrap theme, medium style, simply perfect for bloggers
        </p>
    </div>
</div>
<section class="featured-posts">
    <div class="section-title">
        <h2><span>Featured</span></h2>
    </div>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_content(); ?>
    </article> <!-- #post-<?php the_ID(); ?> -->
</section>