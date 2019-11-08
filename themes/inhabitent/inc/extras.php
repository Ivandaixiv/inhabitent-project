<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_logo_link() {
	return homeurl();
}

add_filter('login_headerurl', 'inhabitent_logo_link');

// function inhabitent_logo() {
// 	wp_enqueue_style('inhabitent-logo', get_stylesheet_uri() );
// }

// add_action('wp_enqueue_scripts','inhabitent_logo');
?>

<style type="text/css">
	body.login div#login h1 a {
		background-image: url("<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-tent.svg");
	}
</style>


