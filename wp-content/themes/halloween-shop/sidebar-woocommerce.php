<?php
/**
 * side bar template
 *
 * @package Halloween Shop
 */
?>
<?php if ( ! is_active_sidebar( 'halloween-shop-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('halloween-shop-woocommerce-sidebar'); ?>
	</div>
</div>