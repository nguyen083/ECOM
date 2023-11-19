<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package next_bakery
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function next_bakery_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'next-bakery-padding-0',
				'label' => esc_html__( 'No Padding', 'next-bakery' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'next-bakery-post-author-card',
				'label' => esc_html__( 'Theme Style', 'next-bakery' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'next-bakery-button',
				'label'        => esc_html__( 'Plain', 'next-bakery' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'next-bakery-post-comments',
				'label'        => esc_html__( 'Theme Style', 'next-bakery' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'next-bakery-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'next-bakery' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'next-bakery-wp-table',
				'label'        => esc_html__( 'Theme Style', 'next-bakery' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'next-bakery-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'next-bakery' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'next-bakery-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'next-bakery' ),
			)
		);
	}
	add_action( 'init', 'next_bakery_register_block_styles' );
}
