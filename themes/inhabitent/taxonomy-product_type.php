<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main  width-restriction taxonomy-product_type" role="main">
			<div class="shop-nav-container">
				<h1 class="shop-categories"><?php echo single_term_title(); ?></h1>
				<p><?php echo term_description();?></p>
			</div>
			<section class="shop-container width-restriction">
				<?php
					$args = array(
						'order' => 'ASC',
						'posts_per_page' => 16,
						'post_type' => 'product',
						'tax_query' => array(
							array (
								'taxonomy' => 'product_type',
								'field' => 'slug',
								'terms' => get_queried_object(),
							)
						),
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
