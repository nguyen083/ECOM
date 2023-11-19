<?php
/**
 * Block Filters
 *
 * @package next_bakery
 * @since 1.0
 */

function next_bakery_block_wrapper( $block_content, $block ) {

	if ( 'core/button' === $block['blockName'] ) {
		
		if( isset( $block['attrs']['className'] ) && strpos( $block['attrs']['className'], 'has-arrow' ) ) {
			$block_content = str_replace( '</a>', next_bakery_get_svg( array( 'icon' => esc_attr( 'caret-circle-right' ) ) ) . '</a>', $block_content );
			return $block_content;
		}
	}

	if( ! is_single() ) {
	
		if ( 'core/post-terms'  === $block['blockName'] ) {
			if( 'post_tag' === $block['attrs']['term'] ) {
				$block_content = str_replace( '<div class="taxonomy-post_tag wp-block-post-terms">', '<div class="taxonomy-post_tag wp-block-post-terms flex">' . next_bakery_get_svg( array( 'icon' => esc_attr( 'tags' ) ) ), $block_content );
			}

			if( 'category' ===  $block['attrs']['term'] ) {
				$block_content = str_replace( '<div class="taxonomy-category wp-block-post-terms">', '<div class="taxonomy-category wp-block-post-terms flex">' . next_bakery_get_svg( array( 'icon' => esc_attr( 'category' ) ) ), $block_content );
			}
			return $block_content;
		}
		if ( 'core/post-date' === $block['blockName'] ) {
			$block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . next_bakery_get_svg( array( 'icon' => esc_attr( 'calendar' ) ) ), $block_content );
			return $block_content;
		}
		if ( 'core/post-author' === $block['blockName'] ) {
			$block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . next_bakery_get_svg( array( 'icon' => esc_attr( 'user' ) ) ), $block_content );
			return $block_content;
		}
	}
	if( is_single() ){

		// Add chevron icon to the navigations
		if ( 'core/post-navigation-link' === $block['blockName'] ) {
			if( isset( $block['attrs']['type'] ) && 'previous' === $block['attrs']['type'] ) {
				$block_content = str_replace( '<span class="post-navigation-link__label">', '<span class="post-navigation-link__label">' . next_bakery_get_svg( array( 'icon' => esc_attr( 'prev' ) ) ), $block_content );
			}
			else {
				$block_content = str_replace( '<span class="post-navigation-link__label">Next Post', '<span class="post-navigation-link__label">Next Post' . next_bakery_get_svg( array( 'icon' => esc_attr( 'next' ) ) ), $block_content );
			}
			return $block_content;
		}

	}
    return $block_content;
}
	
add_filter( 'render_block', 'next_bakery_block_wrapper', 10, 2 );
