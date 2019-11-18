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
		<i class="fas fa-phone-alt"></i>
		<i class="fas fa-envelope"></i>
		<i class="fas fa-map-marker-alt"></i> 1490 W Broadway <br>
		Vancouver, BC V6H 1H5
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div><!-- #secondary -->
