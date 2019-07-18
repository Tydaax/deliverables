<?php

$business_magnaPostsPagesArray = array(
	'select' => __('Select a post/page', 'business-magna'),
);

$business_magnaPostsPagesArgs = array(
	
	// Change these category SLUGS to suit your use.
	'ignore_sticky_posts' => 1,
	'post_type' => array('post', 'page'),
	'orderby' => 'date',
	'posts_per_page' => -1,
	'post_status' => 'publish',
	
);
$business_magnaPostsPagesQuery = new WP_Query( $business_magnaPostsPagesArgs );
	
if ( $business_magnaPostsPagesQuery->have_posts() ) :
							
	while ( $business_magnaPostsPagesQuery->have_posts() ) : $business_magnaPostsPagesQuery->the_post();
			
		$business_magnaPostsPagesId = get_the_ID();
		if(get_the_title() != ''){
				$business_magnaPostsPagesTitle = get_the_title();
		}else{
				$business_magnaPostsPagesTitle = get_the_ID();
		}
		$business_magnaPostsPagesArray[$business_magnaPostsPagesId] = $business_magnaPostsPagesTitle;
	   
	endwhile; wp_reset_postdata();
							
endif;

$business_magnaYesNo = array(
	'select' => __('Select', 'business-magna'),
	'yes' => __('Yes', 'business-magna'),
	'no' => __('No', 'business-magna'),
);

$business_magnaSliderType = array(
	'select' => __('Select', 'business-magna'),
	'header' => __('WP Custom Header', 'business-magna'),
	'owl' => __('Owl Slider', 'business-magna'),
);

$business_magnaServiceLayouts = array(
	'select' => __('Select', 'business-magna'),
	'one' => __('One', 'business-magna'),
	'two' => __('Two', 'business-magna'),
);

$business_magnaAvailableCats = array( 'select' => __('Select', 'business-magna') );

$business_magna_categories_raw = get_categories( array( 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => 0, ) );

foreach( $business_magna_categories_raw as $business_magna_categoryy ){
	
	$business_magnaAvailableCats[$business_magna_categoryy->term_id] = $business_magna_categoryy->name;
	
}

$business_magnaBusinessLayoutType = array( 
	'select' => __('Select', 'business-magna'),
	'one' => __('One', 'business-magna'),
	'two' => __('Two', 'business-magna'),
	'seven' => __('Seven', 'business-magna'),
	'nine' => __('Nine', 'business-magna'),
	'woo-one' => __('Woocommerce One', 'business-magna'),
);
