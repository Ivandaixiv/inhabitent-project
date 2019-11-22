<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<div class="widget-area-container">
		<aside class="widget-contact">
			<h2>Contact Info</h2>
			<i class="fas fa-phone-alt"><a href="tel:7784567891"> 778-456-7891</a></i>
			<i class="fas fa-envelope"><a href="mailto:info@inhabitent.com"> info@inhabitent.com</a></i>
			<i class="fas fa-map-marker-alt"> <span>1490 W Broadway<br>Vancouver, BC V6H 1H5</span></i>
		</aside>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div><!-- #secondary -->
