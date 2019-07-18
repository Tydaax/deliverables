// JavaScript Document
jQuery(document).ready(function() {
	
	var business_magnaViewPortWidth = '',
		business_magnaViewPortHeight = '';

	function business_magnaViewport(){

		business_magnaViewPortWidth = jQuery(window).width(),
		business_magnaViewPortHeight = jQuery(window).outerHeight(true);	
		
		if( business_magnaViewPortWidth > 1200 ){
			
			jQuery('.main-navigation').removeAttr('style');
			
			var business_magnaSiteHeaderHeight = jQuery('.site-header').outerHeight();
			var business_magnaSiteHeaderWidth = jQuery('.site-header').width();
			var business_magnaSiteHeaderPadding = ( business_magnaSiteHeaderWidth * 2 )/100;
			var business_magnaMenuHeight = jQuery('.menu-container').height();
			
			var business_magnaMenuButtonsHeight = jQuery('.site-buttons').height();
			
			var business_magnaMenuPadding = ( business_magnaSiteHeaderHeight - ( (business_magnaSiteHeaderPadding * 2) + business_magnaMenuHeight ) )/2;
			var business_magnaMenuButtonsPadding = ( business_magnaSiteHeaderHeight - ( (business_magnaSiteHeaderPadding * 2) + business_magnaMenuButtonsHeight ) )/2;
		
			
			jQuery('.menu-container').css({'padding-top':business_magnaMenuPadding});
			jQuery('.site-buttons').css({'padding-top':business_magnaMenuButtonsPadding});
			
			
		}else{

			jQuery('.menu-container, .site-buttons, .header-container-overlay, .site-header').removeAttr('style');

		}	
	
	}

	jQuery(window).on("resize",function(){
		
		business_magnaViewport();
		
	});
	
	business_magnaViewport();


	jQuery('.site-branding .menu-button').on('click', function(){
				
		if( business_magnaViewPortWidth > 1200 ){

		}else{
			jQuery('.main-navigation').slideToggle();
		}				
		
				
	});	

    var owl = jQuery("#business_magna-owl-basic");
         
    owl.owlCarousel({
             
      	slideSpeed : 300,
      	paginationSpeed : 400,
      	singleItem:true,
		navigation : true,
      	pagination : false,
      	navigationText : false,
         
    });			
	
});		