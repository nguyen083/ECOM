<?php
 /**
  * Title: Hidden 404
  * Slug: next-bakery/hidden-404
  * Categories: next-bakery, featured
  */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"100px","right":"100px"}}},"className":"error-page","layout":{"inherit":true}} -->
<main class="wp-block-group error-page" 
	style="
		padding-top: 80px;
		padding-right: 100px;
		padding-bottom: 80px;
		padding-left: 100px;
	">
	<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"700","lineHeight":"1","fontStyle":"normal"},"color":{"text":"#222222"}},"className":"has-text-align-center"} -->
<h2 class="has-text-align-center has-text-color" style="color:#222222;font-size:clamp(4rem, 40vw, 20rem);font-style:normal;font-weight:700;line-height:1"> <?php echo esc_html__('4', 'next-bakery'); ?><mark style="background-color: rgba(0, 0, 0, 0);color:#F17216" class="has-inline-color"><?php echo esc_html__('0', 'next-bakery'); ?></mark><?php echo esc_html__('4', 'next-bakery'); ?> </h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__('This page could not be found. Maybe try a search?', 'next-bakery'); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":75,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","backgroundColor":"primary","textColor":"light"} /--></main>
<!-- /wp:group -->