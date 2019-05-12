<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Joshua_Stewart_Portfolio
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
      <div class="container">
	  <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jlush' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'jlush' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jlush' ), 'jlush', '<a href="http://underscores.me/">Joshua Stewart</a>' );
				?>
		</div><!-- .site-info -->
      </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
