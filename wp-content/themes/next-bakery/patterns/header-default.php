<?php
 /**
  * Title: Header Default
  * Slug: next-bakery/header-default
  * Categories: next-bakery, featured
  */
?>
<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|80","bottom":"var:preset|spacing|40","left":"var:preset|spacing|80"}}},"className":"header-section"} -->
<div class="wp-block-columns alignfull header-section" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:site-title {"style":{"typography":{"fontSize":"25px"}},"textColor":"black","fontFamily":"playfair-display"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:navigation {"customTextColor":"#223322","layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small","fontFamily":"poppins"} -->
    <!-- wp:navigation-link {"label":"<?php echo esc_html__('Home', 'next-bakery'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php echo esc_html__('About', 'next-bakery'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php echo esc_html__('Menu', 'next-bakery'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php echo esc_html__('Reservation', 'next-bakery'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php echo esc_html__('Order', 'next-bakery'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php echo esc_html__('Contact', 'next-bakery'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"text":"#223322"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-outline","fontSize":"small","fontFamily":"poppins"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-text-color wp-element-button" style="color:#223322;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">My Account</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->