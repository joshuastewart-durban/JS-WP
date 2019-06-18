<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joshua_Stewart_Portfolio
 */

?>
<div class="container">
	<div class="row">

		<!-- Begin Fixed Left Share -->
		<div class="col-md-2 col-xs-12">
			<div class="share">
				<p>
					Share
				</p>
				<ul>
					<li>
						<a target="_blank" href="https://twitter.com/intent/tweet?text='<?php the_title() ?>'&amp;url='<?php get_permalink() ?>'">
						<i class="fa fa-twitter fa-lg"></i>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='<?php get_permalink() ?>'">
							<i class="fa fa-facebook fa-lg"></i>
						</a>
					</li>
				</ul>
				<div class="sep">
				</div>
			</div>
		</div>
		<!-- End Fixed Left Share -->


		<!-- Begin Post -->
		<div class="col-md-8 col-md-offset-2 col-xs-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="mainheading">

					<?php
					if (is_singular()) :
						the_title('<h1 class="posttitle">', '</h1>');
					else :
						the_title('<h2 class="posttitle"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
					endif; ?>
				</header><!-- .entry-header -->
				<div class="article-post">
					<?php
					the_content(sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'jlush'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					));
					?>
				</div><!-- .entry-content -->
				<div class="after-post-tags">
					<ul class="tags">
						<?php
						$tags = get_tags();
						if ($tags) :
							foreach ($tags as $tag) : ?>
								<li><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a></li>
							<?php endforeach; ?>
						<?php endif; ?>
					</ul>
				</div>
				<footer class="entry-footer">
					<?php
					if ('post' === get_post_type()) :
						?>
						<div class="entry-meta">
							<?php
							jlush_posted_on();
							jlush_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
		<!-- End Post -->
	</div>
</div>