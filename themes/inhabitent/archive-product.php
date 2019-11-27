<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="shop-nav-container">
				<h2 class="frontpage-title">Shop Stuff</h2>
				<?php
				$terms = get_terms( array(
					'taxonomy' => 'product_type',
					'hide_empty' => 0,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
				?>
				<span class="shop-categories-nav">
					<?php foreach ( $terms as $term ) : ?>
						<p class="shop-categories"><a href="<?php echo get_term_link($term);?>"><?php echo $term->name; ?></a></p>
						<!-- 
							Needs to link to the pages sorted by only the categories
						-->
					<?php endforeach; ?>
				</span>
				<?php endif; ?>
			</div>
			<section class="shop-container width-restriction">
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
					<div class="shop-content">
						<a href="<?php echo get_the_permalink();?>">
							<span class="product-image">
								<?php the_post_thumbnail()?>
							</span>
							<div class="product-info">
								<p class=product-title><?php the_title(); ?></p>
								<p>
									$<?php   
										$post = get_post(); 
										$price = $post->price;
										echo $price;
									?>
								</p>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
				<?php else : ?> 
					<h2>Nothing found!</h2>
				<?php endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
