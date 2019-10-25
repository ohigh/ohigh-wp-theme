<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OHIGH_v1.0
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
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'ohigh'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding d-none d-lg-block">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$ohigh_description = get_bloginfo('description', 'display');
				if ($ohigh_description || is_customize_preview()) :
					?>
					<h2 class="site-description"><?php echo $ohigh_description; /* WPCS: xss ok. */ ?></h2>
				<?php endif; ?>
			</div><!-- .site-branding -->
		</header><!-- #masthead -->

		<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light sticky-top">
			<div class="container">
			<a href="http://websites.web/cph_wordpress/shop/" class="custom-logo-link d-lg-none" rel="home">
			<img src="http://websites.web/cph_wordpress/shop/wp-content/uploads/2017/12/jo5beb0s.bmp" class="custom-logo" alt="Kamerasikring" ></a>	
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php
				wp_nav_menu(array(
					'theme_location'    => 'menu-1',
					'menu_id'        => 'primary-menu',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav col-12 justify-content-around',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				));
				?>
			</div>
			<!-- </nav> -->
		</nav><!-- #site-navigation -->


		<div id="content" class="site-content">