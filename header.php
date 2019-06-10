<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Joshua_Stewart_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'jlush'); ?></a>

		<header id="masthead" class="site-header">

			<nav id="site-navigation" class="main-navigation navbar navbar-expand-md fixed-top navbar-light bg-white mediumnavigation">
				<a class="navbar-brand navbar-brand-font" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo('name'); ?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php
				wp_nav_menu([
					'menu'            => 'primary',
					'theme_location'  => 'menu-1',
					'container'       => 'div',
					'container_id'    => 'navbarCollapse',
					'container_class' => 'collapse navbar-collapse',
					'menu_id'         => 'primary-menu',
					'menu_class'      => 'navbar-nav mr-auto',
					'depth'           => 0,
					'fallback_cb'     => 'bs4navwalker::fallback',
					'walker'          => new bs4navwalker()
				]);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">