<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header site-nav" role="banner">
				<div class="site-branding">
					<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
							<h1 class="site-title screen-reader-text"></h1>
					</a>
					</div>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>


					<!-- <form role="search" method="get" id="searchform"
						class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div>
							<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
							<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
							<input type="submit" id="searchsubmit"
								value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
						</div>
					</form> -->

					
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
