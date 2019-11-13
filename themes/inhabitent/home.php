<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php
	$args = array(
		'order' => 'ASC',
		'posts_per_page' => 8,
		'post_type' => 'post',
	   );
	   $journal = new WP_Query( $args );
?>	   
	   <?php if ( $journal->have_posts() ) : ?>
	   <?php while ( $journal->have_posts() ) : $journal->the_post(); ?>
		   <h1><?php the_title(); ?></h1>
		   <?php the_content(); ?>
		   <?php the_post_thumbnail()?>
		<?php endwhile; ?>
		<?php the_posts_navigation(); ?>
		<?php wp_reset_postdata(); ?>
		<?php else : ?> 
		<h2>Nothing found!</h2>
	   <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
