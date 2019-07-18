<?php
/**
 * VW Cleaning Company Theme Customizer
 *
 * @package VW Cleaning Company
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function vw_cleaning_company_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'vw_cleaning_company_custom_controls' );

function vw_cleaning_company_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/customize-homepage/class-customize-homepage.php' );

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_cleaning_company_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-cleaning-company' ),
	) );

	// Layout
	$wp_customize->add_section( 'vw_cleaning_company_left_right', array(
    	'title'      => __( 'General Settings', 'vw-cleaning-company' ),
		'panel' => 'vw_cleaning_company_panel_id'
	) );

	$wp_customize->add_setting('vw_cleaning_company_theme_options',array(
        'default' => __('Right Sidebar','vw-cleaning-company'),
        'sanitize_callback' => 'vw_cleaning_company_sanitize_choices'
	));
	$wp_customize->add_control('vw_cleaning_company_theme_options',array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','vw-cleaning-company'),
        'description' => __('Here you can change the sidebar layout for posts. ','vw-cleaning-company'),
        'section' => 'vw_cleaning_company_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-cleaning-company'),
            'Right Sidebar' => __('Right Sidebar','vw-cleaning-company'),
            'One Column' => __('One Column','vw-cleaning-company'),
            'Three Columns' => __('Three Columns','vw-cleaning-company'),
            'Four Columns' => __('Four Columns','vw-cleaning-company'),
            'Grid Layout' => __('Grid Layout','vw-cleaning-company')
        ),
	) );

	$wp_customize->add_setting('vw_cleaning_company_page_layout',array(
        'default' => __('One Column','vw-cleaning-company'),
        'sanitize_callback' => 'vw_cleaning_company_sanitize_choices'
	));
	$wp_customize->add_control('vw_cleaning_company_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','vw-cleaning-company'),
        'description' => __('Here you can change the sidebar layout for pages. ','vw-cleaning-company'),
        'section' => 'vw_cleaning_company_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-cleaning-company'),
            'Right Sidebar' => __('Right Sidebar','vw-cleaning-company'),
            'One Column' => __('One Column','vw-cleaning-company')
        ),
	) );

	//Top Bar
	$wp_customize->add_section( 'vw_cleaning_company_topbar', array(
    	'title'      => __( 'Top Bar Settings', 'vw-cleaning-company' ),
		'panel' => 'vw_cleaning_company_panel_id'
	) );

	$wp_customize->add_setting('vw_cleaning_company_location_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_cleaning_company_location_text',array(
		'label'	=> __('Add Location Text','vw-cleaning-company'),
		'input_attrs' => array(
            'placeholder' => __( 'ADDRESS', 'vw-cleaning-company' ),
        ),
		'section'=> 'vw_cleaning_company_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_cleaning_company_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_cleaning_company_location',array(
		'label'	=> __('Add Location','vw-cleaning-company'),
		'input_attrs' => array(
            'placeholder' => __( '123 Dunmmy street lorem ipsum, USA', 'vw-cleaning-company' ),
        ),
		'section'=> 'vw_cleaning_company_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_cleaning_company_email_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_cleaning_company_email_text',array(
		'label'	=> __('Add Email Text','vw-cleaning-company'),
		'input_attrs' => array(
            'placeholder' => __( 'MAIL', 'vw-cleaning-company' ),
        ),
		'section'=> 'vw_cleaning_company_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_cleaning_company_email',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_cleaning_company_email',array(
		'label'	=> __('Add Email Address','vw-cleaning-company'),
		'input_attrs' => array(
            'placeholder' => __( 'example@gmail.com', 'vw-cleaning-company' ),
        ),
		'section'=> 'vw_cleaning_company_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_cleaning_company_call_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_cleaning_company_call_text',array(
		'label'	=> __('Add Phone Text','vw-cleaning-company'),
		'input_attrs' => array(
            'placeholder' => __( 'PHONE', 'vw-cleaning-company' ),
        ),
		'section'=> 'vw_cleaning_company_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_cleaning_company_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_cleaning_company_call',array(
		'label'	=> __('Add Phone Number','vw-cleaning-company'),
		'input_attrs' => array(
            'placeholder' => __( '+00 1234 567 890', 'vw-cleaning-company' ),
        ),
		'section'=> 'vw_cleaning_company_topbar',
		'type'=> 'text'
	));
	
	$wp_customize->add_setting('vw_cleaning_company_top_btn_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_cleaning_company_top_btn_text',array(
		'label'	=> __('Add Button Text','vw-cleaning-company'),
		'input_attrs' => array(
            'placeholder' => __( 'BOOK AN APPOINTMENT', 'vw-cleaning-company' ),
        ),
		'section'=> 'vw_cleaning_company_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_cleaning_company_top_btn_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('vw_cleaning_company_top_btn_url',array(
		'label'	=> __('Add Button URL','vw-cleaning-company'),
		'input_attrs' => array(
            'placeholder' => __( 'https://example.com/', 'vw-cleaning-company' ),
        ),
		'section'=> 'vw_cleaning_company_topbar',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'vw_cleaning_company_header_search',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'vw_cleaning_company_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Cleaning_Company_Toggle_Switch_Custom_Control( $wp_customize, 'vw_cleaning_company_header_search',array(
      	'label' => esc_html__( 'Show / Hide Search','vw-cleaning-company' ),
      	'section' => 'vw_cleaning_company_topbar'
    )));
    
	//Slider
	$wp_customize->add_section( 'vw_cleaning_company_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'vw-cleaning-company' ),
		'panel' => 'vw_cleaning_company_panel_id'
	) );

	$wp_customize->add_setting( 'vw_cleaning_company_slider_arrows',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'vw_cleaning_company_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Cleaning_Company_Toggle_Switch_Custom_Control( $wp_customize, 'vw_cleaning_company_slider_arrows',array(
      	'label' => esc_html__( 'Show / Hide Slider','vw-cleaning-company' ),
      	'section' => 'vw_cleaning_company_slidersettings'
    )));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'vw_cleaning_company_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'vw_cleaning_company_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'vw_cleaning_company_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'vw-cleaning-company' ),
			'description' => __('Slider image size (1600 x 600)','vw-cleaning-company'),
			'section'  => 'vw_cleaning_company_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}
 
	//Services
	$wp_customize->add_section('vw_cleaning_company_services',array(
		'title'	=> __('Services Section','vw-cleaning-company'),
		'panel' => 'vw_cleaning_company_panel_id',
	));	

	$post_list = get_posts();
	$i = 0;
	$posts[]='Select';	
	foreach($post_list as $post){
		$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('vw_cleaning_company_services_post1',array(
		'sanitize_callback' => 'vw_cleaning_company_sanitize_choices',
	));
	$wp_customize->add_control('vw_cleaning_company_services_post1',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','vw-cleaning-company'),
		'section' => 'vw_cleaning_company_services',
	));

	$post_list = get_posts();
	$i = 0;
	$posts[]='Select';	
	foreach($post_list as $post){
		$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('vw_cleaning_company_services_post2',array(
		'sanitize_callback' => 'vw_cleaning_company_sanitize_choices',
	));
	$wp_customize->add_control('vw_cleaning_company_services_post2',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','vw-cleaning-company'),
		'section' => 'vw_cleaning_company_services',
	));

	$categories = get_categories();
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';	
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('vw_cleaning_company_services_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_cleaning_company_services_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display Latest Post','vw-cleaning-company'),
		'description'=> __('Size of image should be 80 x 80 ','vw-cleaning-company'),
		'section' => 'vw_cleaning_company_services',
	));

	//Content Craetion
	$wp_customize->add_section( 'vw_cleaning_company_content_section' , array(
    	'title' => __( 'Customize Home Page Settings', 'vw-cleaning-company' ),
		'priority' => null,
		'panel' => 'vw_cleaning_company_panel_id'
	) );

	$wp_customize->add_setting('vw_cleaning_company_content_creation_main_control', array(
		'sanitize_callback' => 'esc_html',
	) );

	$homepage= get_option( 'page_on_front' );

	$wp_customize->add_control(	new VW_Cleaning_Company_Content_Creation( $wp_customize, 'vw_cleaning_company_content_creation_main_control', array(
		'options' => array(
			esc_html__( 'First select static page in homepage setting for front page.Below given edit button is to customize Home Page. Just click on the edit option, add whatever elements you want to include in the homepage, save the changes and you are good to go.','vw-cleaning-company' ),
		),
		'section' => 'vw_cleaning_company_content_section',
		'button_url'  => admin_url( 'post.php?post='.$homepage.'&action=edit'),
		'button_text' => esc_html__( 'Edit', 'vw-cleaning-company' ),
	) ) );

	//Footer Text
	$wp_customize->add_section('vw_cleaning_company_footer',array(
		'title'	=> __('Footer Settings','vw-cleaning-company'),
		'panel' => 'vw_cleaning_company_panel_id',
	));	
	
	$wp_customize->add_setting('vw_cleaning_company_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_cleaning_company_footer_text',array(
		'label'	=> __('Copyright Text','vw-cleaning-company'),
		'input_attrs' => array(
            'placeholder' => __( 'Copyright 2019, .....', 'vw-cleaning-company' ),
        ),
		'section'=> 'vw_cleaning_company_footer',
		'type'=> 'text'
	));	
}

add_action( 'customize_register', 'vw_cleaning_company_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Cleaning_Company_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Cleaning_Company_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new VW_Cleaning_Company_Customize_Section_Pro( $manager,'example_1', array(
			'priority'   => 9,
			'title'    => esc_html__( 'Cleaning Company Pro', 'vw-cleaning-company' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'vw-cleaning-company' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/cleaning-services-wordpress-theme/'),
		) )	);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-cleaning-company-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-cleaning-company-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Cleaning_Company_Customize::get_instance();