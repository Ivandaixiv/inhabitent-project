<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-has-thumbnail">
		<main id="main" class="site-main" role="main">
		<div class="banner-image" style=" background-image: linear-gradient(rgba(0, 0, 0, .4),rgba(0, 0, 0, .4)), url(<?php if ( has_post_thumbnail() ) {echo get_the_post_thumbnail_url();} ?>); background-size: cover; " >
		</div>
		<!-- <h1 class="about-title">About</h1> -->
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main> <!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
