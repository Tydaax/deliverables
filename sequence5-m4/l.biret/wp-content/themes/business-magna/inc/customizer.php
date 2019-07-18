<?php
/**
 * business_magna Theme Customizer
 *
 * @package business_magna
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function business_magna_customize_register( $wp_customize ) {

	global $business_magnaPostsPagesArray, $business_magnaYesNo, $business_magnaSliderType, $business_magnaServiceLayouts, $business_magnaAvailableCats, $business_magnaBusinessLayoutType;

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'business_magna_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'business_magna_customize_partial_blogdescription',
		) );
	}
	
	$wp_customize->add_panel( 'business_magna_general', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'title'      => __('General Settings', 'business-magna'),
		'active_callback' => '',
	) );

	$wp_customize->get_section( 'title_tagline' )->panel = 'business_magna_general';
	$wp_customize->get_section( 'background_image' )->panel = 'business_magna_general';
	$wp_customize->get_section( 'background_image' )->title = __('Site background', 'business-magna');
	$wp_customize->get_section( 'header_image' )->panel = 'business_magna_general';
	$wp_customize->get_section( 'header_image' )->title = __('Header Settings', 'business-magna');
	$wp_customize->get_control( 'header_image' )->priority = 20;
	$wp_customize->get_control( 'header_image' )->active_callback = 'business_magna_show_wp_header_control';	
	$wp_customize->get_section( 'static_front_page' )->panel = 'business_magna_panel';
	$wp_customize->get_section( 'static_front_page' )->title = __('Select frontpage type', 'business-magna');
	$wp_customize->get_section( 'static_front_page' )->priority = 9;
	$wp_customize->remove_section('colors');
	$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'background_color', 
			array(
				'label'      => __( 'Background Color', 'business-magna' ),
				'section'    => 'background_image',
				'priority'   => 9
			) ) 
	);
	//$wp_customize->remove_section('static_front_page');	
	//$wp_customize->remove_section('header_image');	

	/* Upgrade */	
	$wp_customize->add_section( 'business_magna_business_upgrade', array(
		'priority'       => 8,
		'capability'     => 'edit_theme_options',
		'title'      => __('Upgrade to PRO', 'business-magna'),
		'active_callback' => '',
	) );		
	$wp_customize->add_setting( 'business_magna_show_sliderr',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);	
	$wp_customize->add_control( new business_magna_Customize_Control_Upgrade(
		$wp_customize,
		'business_magna_show_sliderr',
		array(
			'label'      => __( 'Show headerr?', 'business-magna' ),
			'settings'   => 'business_magna_show_sliderr',
			'priority'   => 10,
			'section'    => 'business_magna_business_upgrade',
			'choices' => '',
			'input_attrs'  => 'yes',
			'active_callback' => ''			
		)
	) );
	
	/* Usage guide */	
	$wp_customize->add_section( 'business_magna_business_usage', array(
		'priority'       => 9,
		'capability'     => 'edit_theme_options',
		'title'      => __('Theme Usage Guide', 'business-magna'),
		'active_callback' => '',
	) );		
	$wp_customize->add_setting( 'business_magna_show_sliderrr',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);	
	$wp_customize->add_control( new business_magna_Customize_Control_Guide(
		$wp_customize,
		'business_magna_show_sliderrr',
		array(

			'label'      => __( 'Show headerr?', 'business-magna' ),
			'settings'   => 'business_magna_show_sliderrr',
			'priority'   => 10,
			'section'    => 'business_magna_business_usage',
			'choices' => '',
			'input_attrs'  => 'yes',
			'active_callback' => ''				
		)
	) );
	
	/* Header Section */
	$wp_customize->add_setting( 'business_magna_show_slider',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_yes_no_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_show_slider',
		array(
			'label'      => __( 'Show header?', 'business-magna' ),
			'settings'   => 'business_magna_show_slider',
			'priority'   => 10,
			'section'    => 'header_image',
			'type'    => 'select',
			'choices' => $business_magnaYesNo,
		)
	) );	
	$wp_customize->add_setting( 'business_magna_header_type',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_slider_type_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_header_type',
		array(
			'label'      => __( 'Header type :', 'business-magna' ),
			'settings'   => 'business_magna_header_type',
			'priority'   => 11,
			'section'    => 'header_image',
			'type'    => 'select',
			'choices' => $business_magnaSliderType,
		)
	) );
	
	$wp_customize->add_setting( 'business_magna_slider_cat',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_cat_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_slider_cat',
		array(
			'label'      => __( 'Select a category for owl slider :', 'business-magna' ),
			'settings'   => 'business_magna_slider_cat',
			'priority'   => 20,
			'section'    => 'header_image',
			'type'    => 'select',
			'choices' => $business_magnaAvailableCats,
			'active_callback' => 'business_magna_show_owl_control'
		)
	) );	
	
	
	/* Business page panel */
	$wp_customize->add_panel( 'business_magna_panel', array(
		'priority'       => 20,
		'capability'     => 'edit_theme_options',
		'title'      => __('Home/Front Page Settings', 'business-magna'),
		'active_callback' => '',
	) );
	
	$wp_customize->add_section( 'business_magna_layout_selection', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'title'      => __('Select FrontPage Layout', 'business-magna'),
		'active_callback' => 'business_magna_front_page_sections',
		'panel'  => 'business_magna_panel',
	) );
	$wp_customize->add_setting( 'business_magna_layout_type',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_layout_type',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_layout_type',
		array(
			'label'      => __( 'Layout type :', 'business-magna' ),
			'settings'   => 'business_magna_layout_type',
			'priority'   => 10,
			'section'    => 'business_magna_layout_selection',
			'type'    => 'select',
			'choices' => $business_magnaBusinessLayoutType,
		)
	) );	
	
	$wp_customize->add_section( 'business_magna_layout_one', array(
		'priority'       => 30,
		'capability'     => 'edit_theme_options',
		'title'      => __('One settings', 'business-magna'),
		'active_callback' => 'business_magna_front_page_sections',
		'panel'  => 'business_magna_panel',
	) );
	$wp_customize->add_setting( 'business_magna_one_welcome_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_one_welcome_post',
		array(
			'label'      => __( 'Welcome post :', 'business-magna' ),
			'settings'   => 'business_magna_one_welcome_post',
			'priority'   => 10,
			'section'    => 'business_magna_layout_one',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );
	
	$wp_customize->add_setting( 'business_magna_one_services_cat',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_cat_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_one_services_cat',
		array(
			'label'      => __( 'Select a category :', 'business-magna' ),
			'settings'   => 'business_magna_one_services_cat',
			'priority'   => 20,
			'section'    => 'business_magna_layout_one',
			'type'    => 'select',
			'choices' => $business_magnaAvailableCats,
		)
	) );	
	
	$wp_customize->add_setting( 'business_magna_one_services_num',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_one_services_num',
		array(
			'label'      => __( 'Number of posts :', 'business-magna' ),
			'settings'   => 'business_magna_one_services_num',
			'priority'   => 20,
			'section'    => 'business_magna_layout_one',
			'type'    => 'text',
		)
	) );	
	
	$wp_customize->add_section( 'business_magna_layout_two', array(
		'priority'       => 30,
		'capability'     => 'edit_theme_options',
		'title'      => __('Two settings', 'business-magna'),
		'active_callback' => 'business_magna_front_page_sections',
		'panel'  => 'business_magna_panel',
	) );
	$wp_customize->add_setting( 'business_magna_two_welcome_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_six_welcome_post',
		array(
			'label'      => __( 'Welcome post :', 'business-magna' ),
			'settings'   => 'business_magna_two_welcome_post',
			'priority'   => 10,
			'section'    => 'business_magna_layout_two',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );
	
	$wp_customize->add_setting( 'business_magna_two_services_cat',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_cat_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_two_services_cat',
		array(
			'label'      => __( 'Select a category :', 'business-magna' ),
			'settings'   => 'business_magna_two_services_cat',
			'priority'   => 20,
			'section'    => 'business_magna_layout_two',
			'type'    => 'select',
			'choices' => $business_magnaAvailableCats,
		)
	) );	
	
	$wp_customize->add_setting( 'business_magna_two_services_num',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_two_services_num',
		array(
			'label'      => __( 'Number of posts :', 'business-magna' ),
			'settings'   => 'business_magna_two_services_num',
			'priority'   => 20,
			'section'    => 'business_magna_layout_two',
			'type'    => 'text',
		)
	) );
	
	$wp_customize->add_setting( 'business_magna_two_portfolio_title',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_two_portfolio_title',
		array(
			'label'      => __( 'Portfolio section title :', 'business-magna' ),
			'settings'   => 'business_magna_two_portfolio_title',
			'priority'   => 20,
			'section'    => 'business_magna_layout_two',
			'type'    => 'text',
		)
	) );	
	
	$wp_customize->add_setting( 'business_magna_two_portfolio_cat',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_cat_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_two_portfolio_cat',
		array(
			'label'      => __( 'Select a category :', 'business-magna' ),
			'settings'   => 'business_magna_two_portfolio_cat',
			'priority'   => 20,
			'section'    => 'business_magna_layout_two',
			'type'    => 'select',
			'choices' => $business_magnaAvailableCats,
		)
	) );	
	
	$wp_customize->add_setting( 'business_magna_two_portfolio_num',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_two_portfolio_num',
		array(
			'label'      => __( 'Number of posts :', 'business-magna' ),
			'settings'   => 'business_magna_two_portfolio_num',
			'priority'   => 20,
			'section'    => 'business_magna_layout_two',
			'type'    => 'text',
		)
	) );	
	
	$wp_customize->add_section( 'business_magna_layout_wooone', array(
		'priority'       => 60,
		'capability'     => 'edit_theme_options',
		'title'      => __('Woo One settings', 'business-magna'),
		'active_callback' => 'business_magna_front_page_sections',
		'panel'  => 'business_magna_panel',
	) );

	$wp_customize->add_setting( 'business_magna_wooone_welcome_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_wooone_welcome_post',
		array(
			'label'      => __( 'Welcome post :', 'business-magna' ),
			'settings'   => 'business_magna_wooone_welcome_post',
			'priority'   => 10,
			'section'    => 'business_magna_layout_wooone',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );
	$wp_customize->add_setting( 'business_magna_wooone_latest_heading',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_wooone_latest_heading',
		array(
			'label'      => __( 'Products Heading :', 'business-magna' ),
			'settings'   => 'business_magna_wooone_latest_heading',
			'priority'   => 20,
			'section'    => 'business_magna_layout_wooone',
			'type'    => 'text',
		)
	) );
	$wp_customize->add_setting( 'business_magna_wooone_latest_text',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_wooone_latest_text',
		array(
			'label'      => __( 'Products Text :', 'business-magna' ),
			'settings'   => 'business_magna_wooone_latest_text',
			'priority'   => 30,
			'section'    => 'business_magna_layout_wooone',
			'type'    => 'text',
		)
	) );
	
	$wp_customize->add_section( 'business_magna_layout_seven', array(
		'priority'       => 30,
		'capability'     => 'edit_theme_options',
		'title'      => __('Seven settings', 'business-magna'),
		'active_callback' => 'business_magna_front_page_sections',
		'panel'  => 'business_magna_panel',
	) );
	$wp_customize->add_setting( 'business_magna_seven_welcome_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_seven_welcome_post',
		array(
			'label'      => __( 'Welcome post :', 'business-magna' ),
			'settings'   => 'business_magna_seven_welcome_post',
			'priority'   => 10,
			'section'    => 'business_magna_layout_seven',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );
	$wp_customize->add_setting( 'business_magna_seven_work_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_seven_work_post',
		array(
			'label'      => __( 'Work post :', 'business-magna' ),
			'settings'   => 'business_magna_seven_work_post',
			'priority'   => 20,
			'section'    => 'business_magna_layout_seven',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );
	$wp_customize->add_setting( 'business_magna_seven_portfolio_cat',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_cat_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_seven_portfolio_cat',
		array(
			'label'      => __( 'Select a category for portfolio:', 'business-magna' ),
			'settings'   => 'business_magna_seven_portfolio_cat',
			'priority'   => 30,
			'section'    => 'business_magna_layout_seven',
			'type'    => 'select',
			'choices' => $business_magnaAvailableCats,
		)
	) );
	$wp_customize->add_setting( 'business_magna_seven_work_num',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_seven_work_num',
		array(
			'label'      => __( 'Number of posts :', 'business-magna' ),
			'settings'   => 'business_magna_seven_work_num',
			'priority'   => 40,
			'section'    => 'business_magna_layout_two',
			'type'    => 'text',
		)
	) );	
	$wp_customize->add_setting( 'business_magna_seven_about_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_seven_about_post',
		array(
			'label'      => __( 'About post :', 'business-magna' ),
			'settings'   => 'business_magna_seven_about_post',
			'priority'   => 50,
			'section'    => 'business_magna_layout_seven',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );
	/* nine */
	$wp_customize->add_section( 'business_magna_layout_nine', array(
		'priority'       => 40,
		'capability'     => 'edit_theme_options',
		'title'      => __('Nine settings', 'business-magna'),
		'active_callback' => 'business_magna_front_page_sections',
		'panel'  => 'business_magna_panel',
	) );
	$wp_customize->add_setting( 'business_magna_nine_service_one_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_nine_service_one_post',
		array(
			'label'      => __( 'Service 1 :', 'business-magna' ),
			'settings'   => 'business_magna_nine_service_one_post',
			'priority'   => 10,
			'section'    => 'business_magna_layout_nine',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );
	$wp_customize->add_setting( 'business_magna_nine_service_two_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_nine_service_two_post',
		array(
			'label'      => __( 'Service 2 :', 'business-magna' ),
			'settings'   => 'business_magna_nine_service_two_post',
			'priority'   => 20,
			'section'    => 'business_magna_layout_nine',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );
	$wp_customize->add_setting( 'business_magna_nine_service_three_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_nine_service_three_post',
		array(
			'label'      => __( 'Service 3 :', 'business-magna' ),
			'settings'   => 'business_magna_nine_service_three_post',
			'priority'   => 30,
			'section'    => 'business_magna_layout_nine',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );
	$wp_customize->add_setting( 'business_magna_nine_quote_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_nine_quote_post',
		array(
			'label'      => __( 'Quote', 'business-magna' ),
			'description' => __( 'Select a post/page you want to show in quote section', 'business-magna' ),
			'settings'   => 'business_magna_nine_quote_post',
			'priority'   => 40,
			'section'    => 'business_magna_layout_nine',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );
	$wp_customize->add_setting( 'business_magna_nine_about_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_nine_about_post',
		array(
			'label'      => __( 'About', 'business-magna' ),
			'description' => __( 'Select a post/page you want to show in about section', 'business-magna' ),
			'settings'   => 'business_magna_nine_about_post',
			'priority'   => 50,
			'section'    => 'business_magna_layout_nine',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );
	
	$wp_customize->add_setting(
		'business_magna_nine_award_one', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url',
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'business_magna_nine_award_one',
			array(
				'label'    => __( 'Award One', 'business-magna' ),
				'description' => '',
				'section'  => 'business_magna_layout_nine',
				'priority'   => 60,
			)
		)
	);
	$wp_customize->add_setting(
		'business_magna_nine_award_two', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url',
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'business_magna_nine_award_two',
			array(
				'label'    => __( 'Award Two', 'business-magna' ),
				'description' => '',
				'section'  => 'business_magna_layout_nine',
				'priority'   => 70,
			)
		)
	);
	$wp_customize->add_setting(
		'business_magna_nine_award_three', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url',
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'business_magna_nine_award_three',
			array(
				'label'    => __( 'Award Three', 'business-magna' ),
				'description' => '',
				'section'  => 'business_magna_layout_nine',
				'priority'   => 80,
			)
		)
	);
	$wp_customize->add_setting(
		'business_magna_nine_award_four', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url',
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'business_magna_nine_award_four',
			array(
				'label'    => __( 'Award Four', 'business-magna' ),
				'description' => '',
				'section'  => 'business_magna_layout_nine',
				'priority'   => 90,
			)
		)
	);	


	$wp_customize->add_section( 'business_magna_quote', array(
		'priority'       => 110,
		'capability'     => 'edit_theme_options',
		'title'      => __('Quote Settings', 'business-magna'),
		'active_callback' => '',
		'panel'  => 'business_magna_general',
	) );
	$wp_customize->add_setting( 'business_magna_show_quote',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_yes_no_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_show_quote',
		array(
			'label'      => __( 'Show quote?', 'business-magna' ),
			'settings'   => 'business_magna_show_quote',
			'priority'   => 10,
			'section'    => 'business_magna_quote',
			'type'    => 'select',
			'choices' => $business_magnaYesNo,
		)
	) );
	$wp_customize->add_setting( 'business_magna_quote_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_quote_post',
		array(
			'label'      => __( 'Select post', 'business-magna' ),
			'description' => __( 'Select a post/page you want to show in quote section', 'business-magna' ),
			'settings'   => 'business_magna_quote_post',
			'priority'   => 11,
			'section'    => 'business_magna_quote',
			'type'    => 'select',
			'choices' => $business_magnaPostsPagesArray,
		)
	) );	
	
	$wp_customize->add_section( 'business_magna_social', array(
		'priority'       => 120,
		'capability'     => 'edit_theme_options',
		'title'      => __('Social Settings', 'business-magna'),
		'active_callback' => '',
		'panel'  => 'business_magna_general',
	) );	
	$wp_customize->add_setting( 'business_magna_show_social',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'business_magna_sanitize_yes_no_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'business_magna_show_social',
		array(
			'label'      => __( 'Show social?', 'business-magna' ),
			'settings'   => 'business_magna_show_social',
			'priority'   => 10,
			'section'    => 'business_magna_social',
			'type'    => 'select',
			'choices' => $business_magnaYesNo,
		)
	) );
	$wp_customize->add_setting( 'business_magna_facebook',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_magna_facebook', array(
	  'type' => 'text',
	  'section' => 'business_magna_social', // Add a default or your own section
	  'label' => __( 'Facebook', 'business-magna' ),
	  'description' => __( 'Enter your facebook url.', 'business-magna' ),
	) );
	$wp_customize->add_setting( 'business_magna_flickr',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_magna_flickr', array(
	  'type' => 'text',
	  'section' => 'business_magna_social', // Add a default or your own section
	  'label' => __( 'Flickr', 'business-magna' ),
	  'description' => __( 'Enter your flickr url.', 'business-magna' ),
	) );
	$wp_customize->add_setting( 'business_magna_gplus',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_magna_gplus', array(
	  'type' => 'text',
	  'section' => 'business_magna_social', // Add a default or your own section
	  'label' => __( 'Gplus', 'business-magna' ),
	  'description' => __( 'Enter your gplus url.', 'business-magna' ),
	) );
	$wp_customize->add_setting( 'business_magna_linkedin',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_magna_linkedin', array(
	  'type' => 'text',
	  'section' => 'business_magna_social', // Add a default or your own section
	  'label' => __( 'Linkedin', 'business-magna' ),
	  'description' => __( 'Enter your linkedin url.', 'business-magna' ),
	) );
	$wp_customize->add_setting( 'business_magna_reddit',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_magna_reddit', array(
	  'type' => 'text',
	  'section' => 'business_magna_social', // Add a default or your own section
	  'label' => __( 'Reddit', 'business-magna' ),
	  'description' => __( 'Enter your reddit url.', 'business-magna' ),
	) );
	$wp_customize->add_setting( 'business_magna_stumble',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_magna_stumble', array(
	  'type' => 'text',
	  'section' => 'business_magna_social', // Add a default or your own section
	  'label' => __( 'Stumble', 'business-magna' ),
	  'description' => __( 'Enter your stumble url.', 'business-magna' ),
	) );
	$wp_customize->add_setting( 'business_magna_twitter',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_magna_twitter', array(
	  'type' => 'text',
	  'section' => 'business_magna_social', // Add a default or your own section
	  'label' => __( 'Twitter', 'business-magna' ),
	  'description' => __( 'Enter your twitter url.', 'business-magna' ),
	) );	
	
}
add_action( 'customize_register', 'business_magna_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function business_magna_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function business_magna_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function business_magna_customize_preview_js() {
	wp_enqueue_script( 'business_magna-customizer', esc_url( get_template_directory_uri() ) . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'business_magna_customize_preview_js' );

require get_template_directory() . '/inc/variables.php';

function business_magna_sanitize_yes_no_setting( $value ){
	global $business_magnaYesNo;
    if ( ! array_key_exists( $value, $business_magnaYesNo ) ){
        $value = 'select';
	}
    return $value;	
}

function business_magna_sanitize_post_selection( $value ){
	global $business_magnaPostsPagesArray;
    if ( ! array_key_exists( $value, $business_magnaPostsPagesArray ) ){
        $value = 'select';
	}
    return $value;	
}

function business_magna_front_page_sections(){
	
	$value = false;
	
	if( 'page' == get_option( 'show_on_front' ) ){
		$value = true;
	}
	
	return $value;
	
}

function business_magna_show_wp_header_control(){
	
	$value = false;
	
	if( 'header' == get_theme_mod( 'business_magna_header_type' ) ){
		$value = true;
	}
	
	return $value;
	
}

function business_magna_show_header_one_control(){
	
	$value = false;
	
	if( 'header-one' == get_theme_mod( 'business_magna_header_type' ) ){
		$value = true;
	}
	
	return $value;
	
}

function business_magna_show_owl_control(){
	
	$value = false;
	
	if( 'owl' == get_theme_mod( 'business_magna_header_type' ) || 'select' == get_theme_mod( 'business_magna_header_type' ) || '' == get_theme_mod( 'business_magna_header_type' ) ){
		$value = true;
	}
	
	return $value;
	
}

function business_magna_sanitize_slider_type_setting( $value ){

	global $business_magnaSliderType;
    if ( ! array_key_exists( $value, $business_magnaSliderType ) ){
        $value = 'select';
	}
    return $value;	
	
}

function business_magna_sanitize_cat_setting( $value ){
	
	global $business_magnaAvailableCats;
	
	if( ! array_key_exists( $value, $business_magnaAvailableCats ) ){
		
		$value = 'select';
		
	}
	return $value;
	
}

function business_magna_sanitize_layout_type( $value ){
	
	global $business_magnaBusinessLayoutType;
	
	if( ! array_key_exists( $value, $business_magnaBusinessLayoutType ) ){
		
		$value = 'select';
		
	}
	return $value;
	
}

add_action( 'customize_register', 'business_magna_load_customize_classes', 0 );
function business_magna_load_customize_classes( $wp_customize ) {
	
	class business_magna_Customize_Control_Upgrade extends WP_Customize_Control {

		public $type = 'business_magna-upgrade';
		
		public function enqueue() {

		}

		public function to_json() {
			
			parent::to_json();

			$this->json['link']    = $this->get_link();
			$this->json['value']   = $this->value();
			$this->json['id']      = $this->id;
			//$this->json['default'] = $this->default;
			
		}	
		
		public function render_content() {}
		
		public function content_template() { ?>

			<div id="business_magna-upgrade-container" class="business_magna-upgrade-container">

				<ul>
					<li><?php _e( 'More sliders', 'business-magna' ) ?></li>
					<li><?php _e( 'More layouts', 'business-magna' ) ?></li>
					<li><?php _e( 'Color customization', 'business-magna' ) ?></li>
					<li><?php _e( 'Font customization', 'business-magna' ) ?></li>
				</ul>

				<p>
					<a href="https://www.themealley.com/business/"><?php _e( 'Upgrade', 'business-magna' ) ?></a>
				</p>
									
			</div><!-- .business_magna-upgrade-container -->
			
		<?php }	
		
	}
	
	class business_magna_Customize_Control_Guide extends WP_Customize_Control {

		public $type = 'business_magna-guide';
		
		public function enqueue() {

		}

		public function to_json() {
			
			parent::to_json();

			$this->json['link']    = $this->get_link();
			$this->json['value']   = $this->value();
			$this->json['id']      = $this->id;
			//$this->json['default'] = $this->default;
			
		}	
		
		public function render_content() {}
		
		public function content_template() { ?>

			<div id="business_magna-upgrade-container" class="business_magna-upgrade-container">

				<ol>
					<li><?php _e( 'Select \'A static page\' for "your homepage displays" in \'select frontpage type\' section of \'Home/Front Page settings\' tab.', 'business-magna' ) ?></li>
					<li><?php _e( 'Enter details for various section like header, welcome, services, quote, social sections.', 'business-magna' ) ?></li>
				</ol>
									
			</div><!-- .business_magna-upgrade-container -->
			
		<?php }	
		
	}

	$wp_customize->register_control_type( 'business_magna_Customize_Control_Upgrade' );
	$wp_customize->register_control_type( 'business_magna_Customize_Control_Guide' );
	
	
}