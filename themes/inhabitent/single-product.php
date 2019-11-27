<?php
/**
 * The template for displaying all product posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="product-container width-restriction">
						<?php the_post_thumbnail();?>
						<div class="product-details">
							<h2><?php the_title();?></h2>
							<p class="product-price">$<?php the_field('price'); ?></p>
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
									'after'  => '</div>',
								) );
							?>
							<div class="product-social">
								<p class="themed-button-white"><a href="#"><i class="fab fa-facebook-f"></i> Like</a></p>
								<p class="themed-button-white"><a href="#"><i class="fab fa-twitter"></i> Tweet</a></p>
								<p class="themed-button-white"><a href="#"><i class="fab fa-pinterest"></i> Pin</a></p>
							</div>
						</div>
					</div><!-- .entry-content -->
				<?php endwhile; // End of the loop. ?>
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
