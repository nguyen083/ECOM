<?php
 /**
  * Title: Banner Section
  * Slug: next-bakery/banner-section
  * Categories: next-bakery, featured
  */
?>
<!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"banner-section"} -->
<div class="wp-block-columns banner-section" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"color":{"text":"#223333"},"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"#223333"}}},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"small-title","fontFamily":"poppins"} -->
<p class="small-title has-text-color has-link-color has-poppins-font-family" style="color:#223333;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:14px"><a href="#"><?php echo esc_html__('Watch Video', 'next-bakery'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"textTransform":"capitalize"},"color":{"text":"#223322"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"large","fontFamily":"playfair-display"} -->
<h2 class="wp-block-heading has-text-color has-playfair-display-font-family has-large-font-size" style="color:#223322;margin-top:var(--wp--preset--spacing--30);text-transform:capitalize"><?php echo esc_html__('The ideal prepared cake regular!', 'next-bakery'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","lineHeight":"1.8"},"color":{"text":"#223333"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-poppins-font-family" style="color:#223333;margin-top:var(--wp--preset--spacing--30);font-size:15px;line-height:1.8"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'next-bakery'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"border":{"radius":"8px"},"color":{"background":"#f2360a"}},"fontFamily":"poppins"} -->
<div class="wp-block-button has-poppins-font-family"><a class="wp-block-button__link has-white-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px;background-color:#f2360a"><?php echo esc_html__('Read More', 'next-bakery'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"8px"},"color":{"text":"#223322"}},"className":"is-style-outline","fontFamily":"poppins"} -->
<div class="wp-block-button is-style-outline has-poppins-font-family"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="border-radius:8px;color:#223322"><?php echo esc_html__('Order Now', 'next-bakery'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":180,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/banner.png" alt="" class="wp-image-180"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->