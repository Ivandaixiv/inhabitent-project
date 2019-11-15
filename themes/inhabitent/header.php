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

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->
				</div><!-- .site-branding -->

				<div class="navigation-wrapper ">
					<nav id="site-navigation" class="main-navigation width-restriction" role="navigation">
						<div class="navigation-home">
							<a href="<?php echo home_url();?>">
								<div class="logo-button" style="background-image: url('<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-tent.svg');">
								</div>
								<!-- <img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-tent-white.svg" alt="Inhabitent Logo" class="logo-button">
								<h1>Inhabitent</h1> -->
							</a>
						</div>
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
						<div class="navigation-bar-wrapper">
							<div class="navigation-bar">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
								<a href="#" id="search-icon"><i class="fa fa-search search-icon"></i></a>
							</div>
							<div class="navigation-form">
								<?php echo get_search_form();?>
							</div>
						</div>	
					</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->
			<div class="site-wrapper width-restriction" id="site-wrapper">
				<div id="content" class="site-content width-restriction">
					<!-- <div class="banner-image" style=" background-image: linear-gradient(rgba(0, 0, 0, .35),rgba(0, 0, 0, .35)), url(<?php
					if ( has_post_thumbnail() ) {
						echo get_the_post_thumbnail_url();
					} 
					?>); background-size: cover; " >
					</div> -->
