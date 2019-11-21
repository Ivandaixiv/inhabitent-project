<?php
/**
 * The template for displaying the front page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="banner-image" style=" background-image: linear-gradient(rgba(0, 0, 0, .4),rgba(0, 0, 0, .4)), url(<?php if ( has_post_thumbnail() ) {echo get_the_post_thumbnail_url();} ?>); background-size: cover; " >
			</div>
			<section class="product-info container">
            <h2>Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
         </section>
			<img class="full-logo" src=" <?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-full.svg);">
				<?php
			$args = array(
				'order' => 'ASC',
				'posts_per_page' => 3,
				'post_type' => 'post',
			);
			$journal = new WP_Query( $args );
		?>	   
			<?php if ( $journal->have_posts() ) : ?>
			<?php while ( $journal->have_posts() ) : $journal->the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_post_thumbnail(array(375,250))?>
				<?php endwhile; ?>
				<?php the_posts_navigation(); ?>
				<?php wp_reset_postdata(); ?>
				<?php else : ?> 
				<h2>Nothing found!</h2>
			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
