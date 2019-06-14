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
						<a target="_blank" href="https://twitter.com/home?status=http%3A//www.wowthemes.net">
							<svg class="svgIcon-use" width="29" height="29" viewbox="0 0 29 29">
								<path d="M21.967 11.8c.018 5.93-4.607 11.18-11.177 11.18-2.172 0-4.25-.62-6.047-1.76l-.268.422-.038.5.186.013.168.012c.3.02.44.032.6.046 2.06-.026 3.95-.686 5.49-1.86l1.12-.85-1.4-.048c-1.57-.055-2.92-1.08-3.36-2.51l-.48.146-.05.5c.22.03.48.05.75.08.48-.02.87-.07 1.25-.15l2.33-.49-2.32-.49c-1.68-.35-2.91-1.83-2.91-3.55 0-.05 0-.01-.01.03l-.49-.1-.25.44c.63.36 1.35.57 2.07.58l1.7.04L7.4 13c-.978-.662-1.59-1.79-1.618-3.047a4.08 4.08 0 0 1 .524-1.8l-.825.07a12.188 12.188 0 0 0 8.81 4.515l.59.033-.06-.59v-.02c-.05-.43-.06-.63-.06-.87a3.617 3.617 0 0 1 6.27-2.45l.2.21.28-.06c1.01-.22 1.94-.59 2.73-1.09l-.75-.56c-.1.36-.04.89.12 1.36.23.68.58 1.13 1.17.85l-.21-.45-.42-.27c-.52.8-1.17 1.48-1.92 2L22 11l.016.28c.013.2.014.35 0 .52v.04zm.998.038c.018-.22.017-.417 0-.66l-.498.034.284.41a8.183 8.183 0 0 0 2.2-2.267l.97-1.48-1.6.755c.17-.08.3-.02.34.03a.914.914 0 0 1-.13-.292c-.1-.297-.13-.64-.1-.766l.36-1.254-1.1.695c-.69.438-1.51.764-2.41.963l.48.15a4.574 4.574 0 0 0-3.38-1.484 4.616 4.616 0 0 0-4.61 4.613c0 .29.02.51.08.984l.01.02.5-.06.03-.5c-3.17-.18-6.1-1.7-8.08-4.15l-.48-.56-.36.64c-.39.69-.62 1.48-.65 2.28.04 1.61.81 3.04 2.06 3.88l.3-.92c-.55-.02-1.11-.17-1.6-.45l-.59-.34-.14.67c-.02.08-.02.16 0 .24-.01 2.12 1.55 4.01 3.69 4.46l.1-.49-.1-.49c-.33.07-.67.12-1.03.14-.18-.02-.43-.05-.64-.07l-.76-.09.23.73c.57 1.84 2.29 3.14 4.28 3.21l-.28-.89a8.252 8.252 0 0 1-4.85 1.66c-.12-.01-.26-.02-.56-.05l-.17-.01-.18-.01L2.53 21l1.694 1.07a12.233 12.233 0 0 0 6.58 1.917c7.156 0 12.2-5.73 12.18-12.18l-.002.04z"></path>
							</svg>
						</a>
					</li>
					<li>
						<a target="_blank" href="">
						<i class="fab fa-github"></i>
						</a>
					</li>
				</ul>
				<div class="sep">
				</div>
				<p>
					Talk
				</p>
				<ul>
					<li>
						<a href="#comments">
							42<br />
							<svg class="svgIcon-use" width="29" height="29" viewbox="0 0 29 29">
								<path d="M21.27 20.058c1.89-1.826 2.754-4.17 2.754-6.674C24.024 8.21 19.67 4 14.1 4 8.53 4 4 8.21 4 13.384c0 5.175 4.53 9.385 10.1 9.385 1.007 0 2-.14 2.95-.41.285.25.592.49.918.7 1.306.87 2.716 1.31 4.19 1.31.276-.01.494-.14.6-.36a.625.625 0 0 0-.052-.65c-.61-.84-1.042-1.71-1.282-2.58a5.417 5.417 0 0 1-.154-.75zm-3.85 1.324l-.083-.28-.388.12a9.72 9.72 0 0 1-2.85.424c-4.96 0-8.99-3.706-8.99-8.262 0-4.556 4.03-8.263 8.99-8.263 4.95 0 8.77 3.71 8.77 8.27 0 2.25-.75 4.35-2.5 5.92l-.24.21v.32c0 .07 0 .19.02.37.03.29.1.6.19.92.19.7.49 1.4.89 2.08-.93-.14-1.83-.49-2.67-1.06-.34-.22-.88-.48-1.16-.74z"></path>
							</svg>
						</a>
					</li>
				</ul>
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