<div class="wooOneContainer">

	<div class="wooOneWelcomeContainer">
		
			<?php
			
				$business_magnaWelcomePostTitle = '';
				$business_magnaWelcomePostDesc = '';
				$business_magnaWelcomePostContent = '';

				if( '' != get_theme_mod('business_magna_wooone_welcome_post') && 'select' != get_theme_mod('business_magna_wooone_welcome_post') ){

					$business_magnaWelcomePostId = get_theme_mod('business_magna_wooone_welcome_post');

					if( ctype_alnum($business_magnaWelcomePostId) ){

						$business_magnaWelcomePost = get_post( $business_magnaWelcomePostId );

						$business_magnaWelcomePostTitle = $business_magnaWelcomePost->post_title;
						$business_magnaWelcomePostDesc = $business_magnaWelcomePost->post_excerpt;
						$business_magnaWelcomePostContent = $business_magnaWelcomePost->post_content;

					}

				}			
			
			?>
			
			<h1><?php echo esc_html($business_magnaWelcomePostTitle); ?></h1>
			<div class="wooOneWelcomeContent">
				<p>
					<?php 
					
						if( '' != $business_magnaWelcomePostDesc ){
							
							echo esc_html($business_magnaWelcomePostDesc);
							
						}else{
							
							echo esc_html($business_magnaWelcomePostContent);
							
						}
					
					?>
				</p>
			</div><!-- .wooOneWelcomeContent -->	
		
	</div><!-- .wooOneWelcomeContainer -->
	
	
	<div class="new-arrivals-container">
		
		<?php 
					
			if( 'no' != get_theme_mod('business_magna_show_wooone_heading') ): 
			
				$business_magnaWooOneLatestHeading = __('Latest Products', 'business-magna');	
				$business_magnaWooOneLatestText = __('Some of our latest products', 'business-magna');
			
					
				if( '' != get_theme_mod('business_magna_wooone_latest_heading') ){
					$business_magnaWooOneLatestHeading = get_theme_mod('business_magna_wooone_latest_heading');
				}
				
				if( '' != get_theme_mod('business_magna_wooone_latest_text') ){
					$business_magnaWooOneLatestText = get_theme_mod('business_magna_wooone_latest_text');
				}				
			
					
		?>
		<div class="new-arrivals-title">
		
			<h3><?php echo esc_html($business_magnaWooOneLatestHeading); ?></h3>
			<p><?php echo esc_html($business_magnaWooOneLatestText); ?></p>
		
		</div><!-- .new-arrivals-title -->
		<?php endif; ?>
		
		<?php
			
			$business_magnaWooOnePaged = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;
			
			$business_magna_front_page_ecom = array(
				'post_type' => 'product',
				'paged' => $business_magnaWooOnePaged
			);
			$business_magna_front_page_ecom_the_query = new WP_Query( $business_magna_front_page_ecom );
			
			$business_magna_front_page_temp_query = $wp_query;
			$wp_query   = NULL;
			$wp_query   = $business_magna_front_page_ecom_the_query;
			
		?>		
		
		<div class="new-arrivals-content">
		<?php if ( have_posts() && post_type_exists('product') ) : ?>
		
		
			<div class="business_magna-woocommerce-content">
			
				<ul class="products">
			
					<?php /* Start the Loop */ ?>
					<?php while ( $business_magna_front_page_ecom_the_query->have_posts() ) : $business_magna_front_page_ecom_the_query->the_post(); ?>			
					<?php wc_get_template_part( 'content', 'product' ); ?>
					<?php endwhile; ?>
				
				</ul><!-- .products -->
				
				<?php //the_posts_navigation(); ?>
				
				<?php business_magna_pagination( $business_magnaWooOnePaged, $business_magna_front_page_ecom_the_query->max_num_pages); // Pagination Function ?>
				
			</div><!-- .business_magna-woocommerce-content -->
			
		<?php else : ?>
		
			<p><?php echo __('Please install wooCommerce and add products.', 'business-magna') ?></p>

		<?php 
			
			endif; 
			wp_reset_postdata();
			$wp_query = NULL;
			$wp_query = $business_magna_front_page_temp_query;
		?>			
		
		
		</div><!-- .new-arrivals-content -->		
	
	</div><!-- .new-arrivals-container -->	

</div>