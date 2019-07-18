<?php

	$vw_cleaning_company_first_color = get_theme_mod('vw_cleaning_company_first_color');
	$vw_cleaning_company_second_color = get_theme_mod('vw_cleaning_company_second_color');

	$custom_css= "";

	/*------------------------------ Global First Color -----------*/
	if($vw_cleaning_company_first_color != false){
		$custom_css .='.top-btn a,.menu a:before, .menu a::after,.more-btn a:hover,.scrollup,#sidebar .custom-social-icons i:hover, #footer .custom-social-icons i:hover,.pagination span, .pagination a,#sidebar .tagcloud a:hover,#comments input[type="submit"]:hover,#header .nav ul.sub-menu li a:hover, #header .nav ul.children li a:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,#header .menu a:before, #header .menu a::after{';
			$custom_css .='background-color: '.esc_html($vw_cleaning_company_first_color).';';
		$custom_css .='}';
	}
	if($vw_cleaning_company_first_color != false){
		$custom_css .='a,.logo h1 a,.middle-header i.fas.fa-phone,#header .nav ul li a:hover,.service-sec h3:hover, .service-content h4 a:hover,.post-main-box:hover h3,#sidebar ul li a:hover,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title{';
			$custom_css .='color: '.esc_html($vw_cleaning_company_first_color).';';
		$custom_css .='}';
	}	
	if($vw_cleaning_company_first_color != false){
		$custom_css .='#sidebar .tagcloud a:hover{';
			$custom_css .='border-color: '.esc_html($vw_cleaning_company_first_color).';';
		$custom_css .='}';
	}
	if($vw_cleaning_company_first_color != false){
		$custom_css .='nav.woocommerce-MyAccount-navigation ul li{';
			$custom_css .='box-shadow: 2px 2px 0 0 '.esc_html($vw_cleaning_company_first_color).';';
		$custom_css .='}';
	}

	/*------------------------------ Global Second Color -----------*/
	if($vw_cleaning_company_second_color != false){
		$custom_css .='.middle-header .custom-social-icons i:hover,.search-box i,.top-btn a:hover,.more-btn a,input[type="submit"],#sidebar h3,#sidebar .custom-social-icons i, #footer .custom-social-icons i,.pagination .current,.pagination a:hover,#footer .tagcloud a:hover,#footer-2,#comments input[type="submit"],nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon{';
			$custom_css .='background-color: '.esc_html($vw_cleaning_company_second_color).';';
		$custom_css .='}';
	}
	if($vw_cleaning_company_second_color != false){
		$custom_css .='.top-bar i,#footer li a:hover{';
			$custom_css .='color: '.esc_html($vw_cleaning_company_second_color).';';
		$custom_css .='}';
	}	
	if($vw_cleaning_company_second_color != false){
		$custom_css .='.middle-header .custom-social-icons i:hover,.scrollup,#footer .tagcloud a:hover{';
			$custom_css .='border-color: '.esc_html($vw_cleaning_company_second_color).';';
		$custom_css .='}';
	}