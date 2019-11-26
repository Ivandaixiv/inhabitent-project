<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h2 class="frontpage-title">Shop Stuff</h2>
			<section class="shop-container">
				<?php
					$args = array(
						'order' => 'ASC',
						'posts_per_page' => 16,
						'post_type' => 'product',
					);
					$shop = new WP_Query( $args );
				?>	   
				<?php if ( $shop->have_posts() ) : ?>
				<?php while ( $shop->have_posts() ) : $shop->the_post(); ?>
					<div class="featured-journals-box">
						<span class="featured-journals-image">
							<?php the_post_thumbnail()?>
						</span>
						<div class="featured-journals-info">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
					<?php   $post = get_post(); 
							$price = $post->price;
							echo $price;
					?>
					<?php endwhile; ?>
					<?php the_posts_navigation(); ?>
					<?php wp_reset_postdata(); ?>
					<?php else : ?> 
					<h2>Nothing found!</h2>
				<?php endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
