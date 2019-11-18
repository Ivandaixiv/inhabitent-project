<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->
		</div>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info" style="background-image: url(<?php echo get_template_directory_uri();?>/images/dark-wood.png)">
					<div class="footer-wrapper">
						<div class="contact-info">
							<ul>
								<li><h2>Contact Info</h2></li>
								<li><i class="fas fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></li>
								<li><i class="fas fa-phone-alt"></i><a href="tel:778-456-7891">778-456-7891</a></li>
							</ul>
							<ul>
								<li class="social-media"><i class="fab fa-facebook-square"></i></li>
								<li class="social-media"><i class="fab fa-twitter-square"></i></li>
								<li class="social-media"><i class="fab fa-google-plus-square"></i></li>
							</ul>
						</div>
						<div class="biz-hours">
							<ul>
								<li><h2>Business Hours</h2></li>
								<li><span class="opening-days">Monday-Friday: </span>9AM to 5PM</li>
								<li><span class="opening-days">Saturday: </span>10am to 2pm</li>
								<li><span class="opening-days">Sunday: </span>Closed</li>
							</ul>
						</div>
						<div class="footer-logo">
							<img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo">
						</div>
						<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
					</div>
					<p class="copyright">COPYRIGHT &copy 2019 INHABITENT</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?> 
	</body>
</html>
