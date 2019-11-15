<?php
/**
 * The template for displaying the home
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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
		    <div class="journal-entry">
				<div class="journal-title-wrapper">
					<h1 class="journal-title"><?php the_title(); ?></h1>
				</div>
				<div class="journal-thumbnail">
					<?php the_post_thumbnail(array(760,520))?>
				</div>
				<p>
					<?php echo get_the_date();?>
					/
					<?php echo get_comments_number();?> Comments
					/
					<?php echo get_the_author_meta('first_name');?>
					<?php echo get_the_author_meta('last_name');?>
	    		</p>
				<?php the_content(); ?>
	    	</div>
		<?php endwhile; ?>
		<?php the_posts_navigation(); ?>
		<?php wp_reset_postdata(); ?>
		<?php else : ?> 
		<h2>Nothing found!</h2>
	   <?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
