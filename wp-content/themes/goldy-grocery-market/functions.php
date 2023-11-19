<?php
/**
 * goldy-grocery-market functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package goldy-grocery-market
 */

global $goldy_mex_default;
// include_once( 'inc/kirki/kirki.php' );

if ( ! defined( '_GOLDY_GROCERY_MARKET_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_GOLDY_GROCERY_MARKET_VERSION', '1.0.0' );
}

function goldy_grocery_wpdocs_setup_theme() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'goldy_grocery_wpdocs_setup_theme' );

/**
 * Customizer additions.
 */

require get_stylesheet_directory() . '/inc/goldy-about.php';

function goldy_grocery_market_customizer_css() {

    wp_enqueue_style( 'goldy-grocery-market-customize-controls-style', get_stylesheet_directory_uri() . '/assets/css/goldy-grocery-market-customizer-admin.css' );
}
add_action( 'admin_enqueue_scripts', 'goldy_grocery_market_customizer_css',0 );

add_action('wp_head','goldy_custom_css');
function goldy_custom_css(){
	if (!is_plugin_active('slivery-extender/slivery-extender.php')) {?>
		<style type="text/css">
			.site-branding {
				bottom: 0;
			}
			.contact_data {
				display: none;
			}
			.header_detail_info {
				width: auto;
			}
		</style>
		<?php
	}
}

add_action("init","goldy_grocery_market_theme_limit_set",11);
function goldy_grocery_market_theme_limit_set(){
	global $goldy_grocery_market_themetype, $goldy_mex_themetype;

	if (is_plugin_active('slivery-extender/slivery-extender.php')) {

		//  Header
		new \Kirki\Field\Color(
			[
				'settings'    => 'header_logo_bg_color',
				'label'       => __( 'Logo/ Contact Background Color', 'goldy-grocery-market' ),
				'section'     => 'header_section',
				'default'     => '#72bb05',
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.main_site_header:before, .contact_data',
						'property' => 'background-color',
					),
				),
			],
		);

		new \Kirki\Field\Color(
			[
				'settings'    => 'header_border_color',
				'label'       => __( 'Border Color', 'goldy-grocery-market' ),
				'section'     => 'header_section',
				'default'     => '#ffca00',
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.main_site_header:after',
						'property' => 'background-color',
					),
				),
			],
		);

		// Our Portfolio
		new \Kirki\Field\Color(
			[
				'settings'    => 'our_portfolio_container_background_color',
				'label'       => __( 'Container Background Color', 'goldy-grocery-market' ),
				'section'     => 'our_portfolio_section',
				'default'     => 'rgb(82 136 44 / 39%)',
				'priority'    => 90,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.our_port_containe',
						'property' => 'background',
					),
				),
			]
		);

		// About 
		new \Kirki\Field\Color(
			[
				'settings'    => 'about_section_img_border_color',
				'label'       => __( 'Border Color', 'goldy-grocery-market' ),
				'section'     => 'about_section',
				'default'     => '#6abe83;',
				'priority' => 60,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.about_pic:before',
						'property' => 'border-color',
					),
				),
			]
		);

		// book an appointment
		
		new \Kirki\Field\Color(
			[
				'settings' => 'goldy_book_an_appointment_form_bg_color',
				'label'    => esc_html__( 'Form Background color', 'goldy-grocery-market' ),
				'section'  => 'book_an_appoinment_section',
				'default'  => '#ffffff',
				'priority' => 55,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.appointment_data',
						'property' => 'background',
					),
				),
			]
		);

		// Our Services 
		new \Kirki\Field\Color(
			[
				'settings'    => 'our_services_text_color',
				'label'       => __( 'Text Color', 'goldy-grocery-market' ),
				'section'     => 'our_services_section',
				'default'     => '#404040',
				'priority' 	  => 95,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.service_data',
						'property' => 'color',
					),
				),
			]
		);

		new \Kirki\Field\Color(
			[
				'settings'    => 'our_services_first_widget_contain_bg_color',
				'label'       => __( 'Widget Content Background Color', 'goldy-grocery-market' ),
				'section'     => 'our_services_section',
				'default'     => '#F3F4F8',
				'priority' 	  => 115,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.first_widget_desc',
						'property' => 'background-color',
					),
				),
			]
		);

		new \Kirki\Field\Color(
			[
				'settings'    => 'our_services_second_widget_contain_bg_color',
				'label'       => __( 'Widget Content Background Color', 'goldy-grocery-market' ),
				'section'     => 'our_services_section',
				'default'     => '#F3F4F8',
				'priority' 	  => 130,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.two_widget_desc',
						'property' => 'background-color',
					),
				),
			]
		);

		new \Kirki\Field\Color(
			[
				'settings'    => 'our_services_third_widget_contain_bg_color',
				'label'       => __( 'Widget Content Background Color', 'goldy-grocery-market' ),
				'section'     => 'our_services_section',
				'default'     => '#F3F4F8',
				'priority' 	  => 145,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.inner_table_data',
						'property' => 'background-color',
					),
				),
			]
		);

		new \Kirki\Field\Text(
			[
				'settings'    => 'our_services_widget_contain_padding',
				'label'       => __( 'Widget Content Padding', 'goldy-grocery-market' ),
				'description' => __( 'in px', 'goldy-grocery-market' ),
				'section'     => 'our_services_section',
				'default'     => '25px',
				'priority' 	  => 150,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.first_widget_desc, .two_widget_desc, .inner_table_data',
						'property' => 'padding',
					),
				),
			]
		);
	}

	remove_action('goldy_header_topbar_loop','goldy_mex_header_topbar_loop',5); 
	remove_action('goldy_main_header_loop','goldy_mex_main_header_loop',5); 
	remove_action( 'goldy_our_portfolio_loop', 'goldy_mex_our_portfolio_loop',5 );
	remove_action( 'goldy_featured_section_loop', 'goldy_mex_featured_section_loop',5 );
	remove_action( 'goldy_our_testimonial_loop', 'goldy_mex_our_testimonial_loop',5 );
	remove_action( 'goldy_our_team_loop', 'goldy_mex_our_team_loop',5 );

	$goldy_grocery_market_themetype['themtypeis']='normal';
	if (is_plugin_active('slivery-extender/slivery-extender.php') ) {
		$goldy_grocery_market_themetype['pluginactive']="yes";
	}else{
		$goldy_grocery_market_themetype['pluginactive']="no";
	}

	$goldy_grocery_market_themetype['recommended_plugins_name'] = 'goldy_grocery_market';
	$goldy_grocery_market_themetype['goldy_documentation_Upsell_Section']= "https://www.inverstheme.com/goldy-grocery-market-documentation/";
	$goldy_grocery_market_themetype['pro_section_custom_control']= "https://www.inverstheme.com/theme/goldy-grocery-market-pro/";
	
	$goldy_grocery_market_themetype['header_top_bar_bg_color']= "#efefef";
	$goldy_grocery_market_themetype['header_top_bar_bg_color_element']= ".top_bar_info";
	$goldy_grocery_market_themetype['header_text_color']= "#ffffff";
	$goldy_grocery_market_themetype['header_text_color_element']= ".main_site_header, header#masthead p.site-description";
	$goldy_grocery_market_themetype['header_bg_color']= "#18191b";
	$goldy_grocery_market_themetype['header_bg_color_element']= ".main_site_header";
	$goldy_grocery_market_themetype['mob_nav_menu_activ_color']= "#6abe83";
	$goldy_grocery_market_themetype['mob_nav_menu_activ_color_element']= "header#masthead.site-header .current-menu-ancestor > a, header#masthead.site-header .current-menu-item > a, header#masthead.site-header .current_page_item > a";
	$goldy_grocery_market_themetype['mob_menu_link_color']= "#ffffff";
	$goldy_grocery_market_themetype['mob_menu_link_color_element']= ".mobile_menu #primary-menu li a";
	$goldy_grocery_market_themetype['container_bg_color']= "#f9f3f2";
	$goldy_grocery_market_themetype['container_text_color']= "#000000";
	$goldy_grocery_market_themetype['_boxed_layout_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['_content_boxed_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['_sidebar_heading_bg_color']= "#202020";
	$goldy_grocery_market_themetype['_sidebar_heading_text_color']= "#ffffff";
	$goldy_grocery_market_themetype['mob_sub_menu_bg_color']= "#6abe83";
	$goldy_grocery_market_themetype['mob_sub_menu_bg_color_element']= ".main-navigation .sub-menu li, .main-navigation ul ul ul.toggled-on li";
	$goldy_grocery_market_themetype['link_color']= "#ffffff";
	$goldy_grocery_market_themetype['link_color_element']= ".main_site_header a";
	$goldy_grocery_market_themetype['link_hover_color']= "#6abe83";
	$goldy_grocery_market_themetype['link_hover_color_element']= "#masthead .main_site_header a:hover";
	$goldy_grocery_market_themetype['_menu_active_color']= "#6abe83";
	$goldy_grocery_market_themetype['_menu_active_color_element']= "header#masthead.site-header .current-menu-ancestor > a, header#masthead.site-header .current-menu-item > a, header#masthead.site-header .current_page_item > a, footer#colophon .current-menu-item > a, .current_page_item > a";
	$goldy_grocery_market_themetype['desk_submenu_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['desk_submenu_bg_color_element']= ".main-navigation .nav-menu ul.sub-menu, .main-navigation .nav-menu ul.children";
	$goldy_grocery_market_themetype['mob_nav_menu_bg_color']= "#273641";
	$goldy_grocery_market_themetype['mob_nav_menu_bg_color_element']= ".mobile_menu";
	$goldy_grocery_market_themetype['silvery_social_icon_color']= "#6abe83";
	$goldy_grocery_market_themetype['silvery_social_icon_color_element']= "header#masthead a.social_icon";
	$goldy_grocery_market_themetype['silvery_social_icon_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['silvery_social_icon_bg_color_element']= ".social_icon i";
	$goldy_grocery_market_themetype['silvery_social_icon_hover_color']= "#6abe83";
	$goldy_grocery_market_themetype['silvery_social_icon_hover_color_element']= "header#masthead a.social_icon:hover";
	$goldy_grocery_market_themetype['silvery_social_icon_hover_bg_color']= "#111";
	$goldy_grocery_market_themetype['silvery_social_icon_hover_bg_color_element']= ".social_icon i:hover";
	$goldy_grocery_market_themetype['button_bg_color']= "#6abe83";
	$goldy_grocery_market_themetype['button_bg_color_element']= 'button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button , .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled';
	$goldy_grocery_market_themetype['_button_bg_hover_color']= "rgba(6, 62, 49, 0.5)";
	$goldy_grocery_market_themetype['_button_bg_hover_color_element']= 'button::before, input[type="button"]::before, input[type="reset"]::before, input[type="submit"]::before, input[type="submit"]::after, .wp-block-search .wp-block-search__button::before, .wp-block-search .wp-block-search__button::after, .nav-previous a::before, .nav-previous a::after, .nav-next a::before, .nav-next a::after, .buttons::before, .buttons::after ,.woocommerce a.button::before, .woocommerce button::before, .woocommerce .single-product button::before, .woocommerce button.button.alt::before, .woocommerce a.button.alt::before,.woocommerce button.button.alt.disabled::before';
	$goldy_grocery_market_themetype['_button_text_color']= "#ffffff";
	$goldy_grocery_market_themetype['_button_text_color_element']= 'button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button , .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled';
	$goldy_grocery_market_themetype['_button_texthover_color']= "#ffffff";
	$goldy_grocery_market_themetype['_button_texthover_color_element']= 'button:hover, input[type="button"]:hover , input[type="reset"]:hover , input[type="submit"]:hover , .wp-block-search .wp-block-search__button:hover, .nav-previous a:hover, .buttons:hover, .nav-next a:hover, .woocommerce a.button:hover, .woocommerce button:hover, .woocommerce .single-product button:hover, .woocommerce button.button.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt.disabled:hover';
	$goldy_grocery_market_themetype['_button_border_radius']= "5px";
	$goldy_grocery_market_themetype['_button_border_color']= "#6abe83";
	$goldy_grocery_market_themetype['_button_border_color_element']= 'button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button , .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled';
	$goldy_grocery_market_themetype['_scroll_button_bg_color']= "#6abe83";
	$goldy_grocery_market_themetype['_scroll_button_color']= "#ffffff";
	$goldy_grocery_market_themetype['_scroll_button_bg_hover_color']= "#774079";
	$goldy_grocery_market_themetype['_scroll_button_text_hover_color']= "#ffffff";
	$goldy_grocery_market_themetype['silvery_featured_slider_text_color']= "#ffffff";
	$goldy_grocery_market_themetype['silvery_featured_slider_arrow_text_color']= "#ffffff";
	$goldy_grocery_market_themetype['silvery_featured_slider_arrow_bg_color']= "#72bb05";
	$goldy_grocery_market_themetype['silvery_featured_slider_arrow_text_hover_color']= "#ffffff";
	$goldy_grocery_market_themetype['silvery_featured_slider_arrow_bg_hover_color']= "#4f2d4f";
	$goldy_grocery_market_themetype['featured_section_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['featured_section_text_color']= "#333333";
	$goldy_grocery_market_themetype['featured_section_contain_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['featured_section_contain_bg_color_element']= ".section-featured-wrep";
	$goldy_grocery_market_themetype['featured_section_bg_hover_color']= "#6ABE83";
	$goldy_grocery_market_themetype['featured_section_bg_hover_color_element']= ".section-featured-wrep:before, .section-featured-wrep:hover:before";
	$goldy_grocery_market_themetype['featured_section_contain_text_color']= "#273641";
	$goldy_grocery_market_themetype['featured_section_contain_text_color_element']= ".section-featured-wrep, .section-featured-wrep:hover";
	$goldy_grocery_market_themetype['featured_section_icon_color']= "#6ABE83";
	$goldy_grocery_market_themetype['featured_section_icon_color_element']= ".featured-section_data .featured_content .featured-icon";
	$goldy_grocery_market_themetype['featured_section_icon_hover_color']= "#273641";
	$goldy_grocery_market_themetype['featured_section_icon_hover_color_element']= ".featured-section_data .section-featured-wrep:hover i";
	$goldy_grocery_market_themetype['featured_section_icon_bg_color']= "#fcf5f4";
	$goldy_grocery_market_themetype['featured_section_icon_bg_color_element']= ".featured-section_data .featured_content .featured-icon";
	$goldy_grocery_market_themetype['featured_section_icon_bg_hover_color']= "#fcf5f4";
	$goldy_grocery_market_themetype['featured_section_icon_bg_hover_color_element']= ".section-featured-wrep:hover .featured-icon";
	$goldy_grocery_market_themetype['featured_section_border_color']= "#301007";
	$goldy_grocery_market_themetype['featured_section_border_color_background_element']= ".featured-section_data .featured_content .featured-thumbnail:after";
	$goldy_grocery_market_themetype['featured_section_border_color_border_element']= ".section-featured-wrep .fea-brd";
	$goldy_grocery_market_themetype['featured_section_icon_size']= "60px";
	$goldy_grocery_market_themetype['_book_an_appointment_bg_color']= "#f1f5fe";
	$goldy_grocery_market_themetype['_book_an_appointment_title_color']= "#404040";
	$goldy_grocery_market_themetype['about_section_bg_color']= "#f0f9fb";
	$goldy_grocery_market_themetype['about_section_bg_color_element']= ".about_section_info";
	$goldy_grocery_market_themetype['about_section_title_text_color']= "#333333";
	$goldy_grocery_market_themetype['our_portfolio_bg_color']= "#f0f8f2";
	$goldy_grocery_market_themetype['our_portfolio_bg_color_element']= ".our_portfolio_info";
	$goldy_grocery_market_themetype['our_portfolio_title_color']= "#333333";
	$goldy_grocery_market_themetype['our_portfolio_text_color']= "#333333";
	$goldy_grocery_market_themetype['our_portfolio_text_color_element']= ".our_portfolio_info";
	$goldy_grocery_market_themetype['our_portfolio_icon_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_portfolio_icon_bg_color_element']= ".our_portfolio_btn a i";
	$goldy_grocery_market_themetype['our_portfolio_icon_color']= "#6abe83";
	$goldy_grocery_market_themetype['our_portfolio_icon_color_element']= ".our_portfolio_btn a i";
	$goldy_grocery_market_themetype['our_portfolio_border_color']= "#ed8a63";
	$goldy_grocery_market_themetype['our_portfolio_border_color_background_element']= ".our_port_containe .our_portfolio_title i";
	$goldy_grocery_market_themetype['our_portfolio_border_color_color_element']= ".our_port_containe .our_portfolio_title i";
	$goldy_grocery_market_themetype['our_portfolio_border_hover_color']= "#fd6047";
	$goldy_grocery_market_themetype['our_portfolio_border_hover_color_background_element']= ".our_portfolio_info .our_portfolio_caption .our_portfolio_container:hover .our_portfolio_title i";
	$goldy_grocery_market_themetype['our_portfolio_border_hover_color_color_element']= ".our_portfolio_info .our_portfolio_caption .our_portfolio_container:hover .our_portfolio_title i";
	$goldy_grocery_market_themetype['our_portfolio_container_text_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_portfolio_container_text_color_element']= ".our_portfolio_info .our_portfolio_container";
	$goldy_grocery_market_themetype['our_team_bg_color']= "#f0f9fb";
	$goldy_grocery_market_themetype['our_team_bg_color_element']= ".our_team_section";
	$goldy_grocery_market_themetype['our_team_text_color']= "#333333";
	$goldy_grocery_market_themetype['our_team_text_color_element']= ".our_team_section .our_team_main_title";
	$goldy_grocery_market_themetype['our_team_container_text_hover_color']= "#3686ad";
	$goldy_grocery_market_themetype['our_team_container_text_hover_color_element']= ".our_team_container:hover .our_team_title a, .our_team_container:hover .our_team_headline p";
	$goldy_grocery_market_themetype['our_team_link_color']= "#72bb05";
	$goldy_grocery_market_themetype['our_team_link_color_element']= ".our_team_icon_contain a";
	$goldy_grocery_market_themetype['our_team_link_hover_color']= "#6abe83";
	$goldy_grocery_market_themetype['our_team_link_hover_color_element']= ".our_team_icon_contain .our_team_title a:hover";
	$goldy_grocery_market_themetype['our_testimonial_bg_color']= "#f6f6f6";
	$goldy_grocery_market_themetype['our_testimonial_bg_color_element']= ".our_testimonial_section";
	$goldy_grocery_market_themetype['our_testimonial_text_color']= "#333333";
	$goldy_grocery_market_themetype['our_testimonial_text_color_element']= ".our_testimonial_section .testimonial_title h2, .our_testimonial_section .our_testimonial_main_disc p";
	$goldy_grocery_market_themetype['our_testimonial_quote_color']= "#dedddd";
	$goldy_grocery_market_themetype['our_testimonial_quote_color_element']= ".our_testimonial_icon i, .our_testimonial_data_info:before, .our_testimonial_data_info:after";
	$goldy_grocery_market_themetype['our_testimonial_quote_hover_color']= "#6abe83";
	$goldy_grocery_market_themetype['our_testimonial_quote_hover_color_element']= ".our_testimonial_icon i:hover, .testimonials_title h3:hover:before";
	$goldy_grocery_market_themetype['our_testimonial_img_hover_border_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_testimonial_img_hover_border_color_element']= ".image_testimonials img:hover";
	$goldy_grocery_market_themetype['our_testimonial_contain_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_testimonial_contain_bg_color_element']= ".our_testimonial_section .our_testimonial_info .testinomial_owl_slider .our_testimonial_data_info";
	$goldy_grocery_market_themetype['our_testimonial_contain_bg_color_border_element']= ".testimonials_data .testinomial_description p:before";
	$goldy_grocery_market_themetype['our_testimonial_contain_description_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_testimonial_contain_description_bg_color_element']= ".testinomial_description";
	$goldy_grocery_market_themetype['our_testimonial_container_description_color']= "#000000";
	$goldy_grocery_market_themetype['our_testimonial_container_description_color_element']= ".testinomial_description p";
	$goldy_grocery_market_themetype['our_testimonial_headline_text_color']= "#6abe83";
	$goldy_grocery_market_themetype['our_testimonial_headline_text_color_element']= ".our_testimonial_section .testinomial_owl_slider .testimonials_title h3";
	$goldy_grocery_market_themetype['our_testimonial_subheadline_text_color']= "#404040";
	$goldy_grocery_market_themetype['our_testimonial_subheadline_text_color_element']= ".our_testimonial_section .testinomial_owl_slider .testimonials_title h4";
	$goldy_grocery_market_themetype['our_testimonial_arrow_bg_color']= "#6abe83";
	$goldy_grocery_market_themetype['our_testimonial_arrow_bg_color_element']= ".our_testimonial_section .testinomial_owl_slider .owl-nav button";
	$goldy_grocery_market_themetype['our_testimonial_arrow_text_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_testimonial_arrow_text_color_element']= ".our_testimonial_section .testinomial_owl_slider .owl-nav button";
	$goldy_grocery_market_themetype['our_testimonial_arrow_text_hover_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_testimonial_arrow_text_hover_color_element']= ".our_testimonial_section button.owl-prev:hover, .our_testimonial_section button.owl-next:hover";
	$goldy_grocery_market_themetype['our_testimonial_arrow_bg_hover_color']= "#5c355d";
	$goldy_grocery_market_themetype['our_testimonial_arrow_bg_hover_color_element']= ".our_testimonial_section button.owl-prev:hover, .our_testimonial_section button.owl-next:hover";
	$goldy_grocery_market_themetype['our_sponsors_text_color']= "#000000";
	$goldy_grocery_market_themetype['our_sponsors_text_color_element']= ".our_sponsors_section";
	$goldy_grocery_market_themetype['our_sponsors_bg_color']= "#f0f9fb";
	$goldy_grocery_market_themetype['our_sponsors_bg_color_element']= ".our_sponsors_section";
	$goldy_grocery_market_themetype['our_sponsors_arrow_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_sponsors_arrow_color_element']= ".our_sponsors_section .our_sponsors_contain .owl-nav button";
	$goldy_grocery_market_themetype['our_sponsors_arrow_bg_color']= "#273641";
	$goldy_grocery_market_themetype['our_sponsors_arrow_bg_color_element']= ".our_sponsors_section .our_sponsors_contain .owl-nav button";
	$goldy_grocery_market_themetype['our_sponsors_arrow_text_hover_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_sponsors_arrow_text_hover_color_element']= ".our_sponsors_section .our_sponsors_contain button.owl-prev:hover, .our_sponsors_section .our_sponsors_contain button.owl-next:hover";
	$goldy_grocery_market_themetype['our_sponsors_arrow_bghover_color']= "#4f2d4f";
	$goldy_grocery_market_themetype['our_sponsors_arrow_bghover_color_element']= ".our_sponsors_section .our_sponsors_contain button.owl-prev:hover, .our_sponsors_section .our_sponsors_contain button.owl-next:hover";
	$goldy_grocery_market_themetype['our_services_bg_color']= "#F3F4F8";
	$goldy_grocery_market_themetype['our_services_bg_color_element']= ".services_section";
	$goldy_grocery_market_themetype['our_services_first_widget_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_services_first_widget_bg_color_element']= ".widget_section_one";
	$goldy_grocery_market_themetype['our_services_first_widget_text_color']= "#000000";
	$goldy_grocery_market_themetype['our_services_first_widget_text_color_element']= ".widget_section_one";
	$goldy_grocery_market_themetype['our_services_second_widget_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_services_second_widget_bg_color_element']= ".widget_section_two";
	$goldy_grocery_market_themetype['our_services_second_widget_text_color']= "#000000";
	$goldy_grocery_market_themetype['our_services_second_widget_text_color_element']= ".widget_section_two";
	$goldy_grocery_market_themetype['our_services_third_widget_bg_color']= "#ffffff";
	$goldy_grocery_market_themetype['our_services_third_widget_bg_color_element']= ".widget_section_three";
	$goldy_grocery_market_themetype['our_services_third_widget_text_color']= "#000000";
	$goldy_grocery_market_themetype['our_services_third_widget_text_color_element']= ".widget_section_three";
	$goldy_grocery_market_themetype['_footer_bg_color']= "#202020";
	$goldy_grocery_market_themetype['_footer_bg_color_element']= "footer#colophon";
	$goldy_grocery_market_themetype['_footer_text_color']= "#6abe83";
	$goldy_grocery_market_themetype['_footer_text_color_element']= "footer#colophon";
	$goldy_grocery_market_themetype['footer_link_color']= "#c1c5ca";
	$goldy_grocery_market_themetype['footer_link_color_element']= "footer#colophon a";
	$goldy_grocery_market_themetype['_footer_link_hover_color']= "#6abe83";
	$goldy_grocery_market_themetype['_footer_link_hover_color_element']= "footer#colophon a:hover";
	$goldy_grocery_market_themetype['design_underline_color']= "#273641";
	$goldy_grocery_market_themetype['silvary_breadcrumb_bg_color']= "#c8c9cb";
	$goldy_grocery_market_themetype['silvary_breadcrumb_bg_color_element']= ".breadcrumb_info";
	$goldy_grocery_market_themetype['silvary_breadcrumb_text_color']= "#333333";
	$goldy_grocery_market_themetype['silvary_breadcrumb_text_color_element']= ".breadcrumb_info";
	$goldy_grocery_market_themetype['silvary_breadcrumb_link_color']= "#273641";
	$goldy_grocery_market_themetype['silvary_breadcrumb_link_color_element']= "section#breadcrumb-section a";
	if (is_plugin_active('slivery-extender/slivery-extender.php')) {
		$goldy_grocery_market_themetype['global_ordering_default'] = array(
			'goldy_mex_featuredimage_slider',
			'goldy_mex_our_portfolio_section',
			'goldy_mex_about_section',
			'goldy_mex_featured_section',
			'goldy_mex_appointment_section',
			'goldy_mex_our_team_section',
			'goldy_mex_our_testimonial_section',
			'goldy_mex_our_sponsors_section',
			'goldy_mex_services_section',
		);
	}else{
		$goldy_grocery_market_themetype['global_ordering_default'] = array(
			'goldy_mex_featuredimage_slider',
			'goldy_mex_featured_section',
			'goldy_mex_our_sponsors_section',
		);
	}
	$goldy_mex_themetype = $goldy_grocery_market_themetype;
}

/* enqueue script for parent theme stylesheeet */        
function goldy_grocery_market_childtheme_parent_styles() {
 
 // enqueue style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'goldy-grocery-market' ) );
}
add_action( 'wp_enqueue_scripts', 'goldy_grocery_market_childtheme_parent_styles');


/**
 * Callback sections.
 */
add_action("goldy_header_topbar_loop",'goldy_grocery_market_header_topbar_loop',5);
function goldy_grocery_market_header_topbar_loop($goldy_mex_default){
?>
	<div class="header_top_bar">
		<?php if(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time'])){ ?>
		<?php if(!empty(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time']))){ ?>
				<div class="opening_time_data">
					<div class="opening_icon">
						<i class="fa fa-clock-o"></i>
					</div>
					<div class="opening_info">
						<a href="<?php echo esc_html(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time'] )); ?>"><p><?php echo esc_html(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time'] )); ?></p></a>
					</div>
				</div>
				
		<?php } }
		if(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] )){
			if(!empty(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] ))){ ?>
			<div class="email_data">
				<div class="email_icon">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="email_info">
					<a href="mailto:<?php echo esc_html(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] )); ?>"><p><?php echo esc_html(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] )); ?></p></a>
				</div>
			</div>
		<?php } 
	}?>
	</div>
	<div class="header_social_icon">
		<?php 
		if(get_theme_mod( 'goldy_mex_display_social_icon',$goldy_mex_default['options']['goldy_mex_display_social_icon']) != ''){ 
			?>
				<div class="social_icon_info">
					<div class="social_data">
						<?php 
						$social_icon_section_content  = get_theme_mod( 'goldy_mex_social_icon_section_content',$goldy_mex_default['options']['goldy_mex_social_icon_section_content']);
						if ( ! empty( $social_icon_section_content ) ) {
							// $social_icon_section_content = json_decode( $social_icon_section_content );
							foreach ( $social_icon_section_content as $info_item ) {
								if(get_theme_mod( 'goldy_mex_social_icon_section_content',$goldy_mex_default['options']['goldy_mex_social_icon_section_content']) != ''){
									if(!empty($info_item['link_url'])){
									?>
									<a class="social_icon" href="<?php echo esc_attr($info_item['link_url']);?>" target="_blank">
										<i class="fa <?php echo esc_attr($info_item['icon_value']);?>"></i>
									</a>
									<?php
									}
								}
							}
						} ?>
					</div>
				</div>
			
			<?php 
		}
		?>
		</div>
	<?php
}


add_action('goldy_main_header_loop','goldy_grocery_market_main_header_loop',5); 
function goldy_grocery_market_main_header_loop($goldy_mex_default){
?>
	<div class="header_info">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
			<div class="header_logo">
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				endif;
				$sharp_tian_description = get_bloginfo( 'description', 'display' );
				if ( $sharp_tian_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo esc_html($sharp_tian_description); ?></p>
				<?php endif; ?>
			</div>
		</div><!-- .site-branding -->
		<div class="header_detail_info">
			<div class="menu_call_button">
				<div class="call_button_info">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" id="navbar-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="fa fa-bars"></i>
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>							
					</nav>
					<div class="mobile_menu main-navigation" id="mobile_primary">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
						<button class="menu-toggle" id="mobilepop"  aria-expanded="false">
							<i class="fa fa-close"></i>
						</button>


						<div class="header_topbar_info">
							<?php
							if ( is_plugin_active('slivery-extender/slivery-extender.php') ) {?>
								<?php  
									do_action("goldy_header_topbar_loop",$goldy_mex_default);
								?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<?php if(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number'])){ ?>
			<?php if(!empty(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number']))){ ?>
					<div class="contact_data">
						<div class="contact_icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="contact_info">
							<a href="tel:<?php echo esc_html(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number'] )); ?>"><p><?php echo esc_html(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number'] )); ?></p></a>
						</div>
					</div>
					
			<?php } } ?>
		</div>
	</div>
<?php
}

add_action('goldy_our_portfolio_loop','goldy_grocery_market_our_portfolio_loop',5);
function goldy_grocery_market_our_portfolio_loop($info_item){
?>
<div class="protfolio_img_main">
	<div class="protfolio_images">
		<?php if(!empty( $info_item['image'])){ ?>
			<img src="<?php echo esc_url($info_item['image']); ?>" alt="The Last of us">
		<?php }else{
			?>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us"> 
			<?php
		} 
		?>
	</div>
</div>
<div class="our_port_containe">
	<div class="our_portfolio_title" >
		<!-- <i class="fa fa-window-minimize" aria-hidden="true"></i> -->
		<h3><?php echo $info_item['title'];?></h3>
		<p><?php //echo $info_item->subtitle; ?></p>
		<p class="our_portfolio_desc"><?php echo wp_kses_post($info_item['text']); ?></p>
	</div>	
	<div class="our_portfolio_btn">
	<?php if(!empty($info_item['link_url'])){ ?>
		<a href="<?php echo $info_item['link_url']; ?>">
			<i class="fa fa-arrow-right"></i> 
		</a>
	<?php } ?>
	</div>
</div>
<?php
}

add_action('goldy_featured_section_loop','goldy_grocery_market_featured_section_loop',5);
function goldy_grocery_market_featured_section_loop($info_item){
?>
<div class="featured_content_inner">
	<?php if(!empty($info_item['icon_value'])){ ?>
		<div class="featured-icon">
			<i class="fa <?php echo esc_attr($info_item['icon_value'])?>"></i>
		</div>
	<?php } ?>
		<div class="featured-title"> 
			<h4>
				<?php echo esc_attr($info_item['title']); ?>
			</h4>
			<p><?php echo wp_kses_post($info_item['text']); ?></p>
		</div>
</div>
<?php
}

add_action('goldy_our_testimonial_loop','goldy_grocery_market_our_testimonial_loop',5);
function goldy_grocery_market_our_testimonial_loop($info_item){ 
?>
<div class="our_testimonial_data_info">
	<div class="testimonials_center_border"></div>
	<div class="testimonials_content">
		<div class="our_testimonials_container">
			<div class="testimonials_image">
				<div class="image_testimonials">
					<?php
					if(!empty($info_item['image'])){
						?>
						<img src="<?php echo esc_url($info_item['image']);  ?>" alt="">
						<?php
					}else{
						?>
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="">								
						<?php
					}
					?>
				</div>
			</div>
			<div class="our_testimonial_icon">
		      <i class="fa fa-quote-left"></i>
		   </div>
		   <div class="testinomial_description">
				<p><?php echo wp_kses_post($info_item['text']) ?></p>
			</div>
			<div class="testimonials_title">
				<h3><?php echo esc_html($info_item['title']) ?></h3>
				<h4><?php echo  esc_attr($info_item['subtitle']) ?></h4>
			</div>
			
		</div>
	</div>												
</div>	
<?php 
}

add_action('goldy_our_team_loop','goldy_grocery_market_our_team_loop',5);
function goldy_grocery_market_our_team_loop($info_item){
?>
<div class="our_team_container_data">
	<div class="out_team_single_img">	
		<div class="our_team_img">
			<div class="out_team_pic">
				<?php
				if(!empty( $info_item['image'])){
					?>
					<img src="<?php echo esc_url($info_item['image']); ?>">
					<?php
				}else{
					?>
					<img class="our_team_main_image" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us">
					<?php
				}
				?>
			</div>
		</div>
	</div>
	<div class="our_team_icon_contain">
		<div class="our_teams_contain">
			<div class="our_team_title">
				<a href="<?php echo esc_html($info_item['link_url']); ?>">
					<h3><?php echo esc_html($info_item['title']); ?></h3>
				</a>
			</div>
			<div class="our_team_headline">
				<p><?php echo esc_html($info_item['subtitle']);?></p>
			</div>
		</div>
		
	</div>	
</div>
<?php 
}