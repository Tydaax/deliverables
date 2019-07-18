<div class="businessMagnaNineContainer">
	
	<div class="businessMagnaNineServicesContainer">
	
		<?php
		
			business_magna_nine_service('business_magna_nine_service_one_post');
			business_magna_nine_service('business_magna_nine_service_two_post');
			business_magna_nine_service('business_magna_nine_service_three_post');
		
		?>
	
	</div>	
	
	<?php

		$business_magnaNineQuoteTitle = '';
		$business_magnaNineQuoteDesc = '';
		$business_magnaNineQuoteContent = '';

		if( '' != get_theme_mod('business_magna_nine_quote_post') && 'select' != get_theme_mod('business_magna_nine_quote_post') ){

			$business_magnaNineQuoteId = get_theme_mod('business_magna_nine_quote_post');

			if( ctype_alnum($business_magnaNineQuoteId) ){

				$business_magnaNineQuote = get_post( $business_magnaNineQuoteId );

				$business_magnaNineQuoteTitle = $business_magnaNineQuote->post_title;
				$business_magnaNineQuoteDesc = $business_magnaNineQuote->post_excerpt;
				$business_magnaNineQuoteContent = $business_magnaNineQuote->post_content;

			}

		}

	?>		
	<div class="businessMagnaNineQuote">
				
			<p>
			<?php 

				if( '' != $business_magnaNineQuoteDesc ){

					echo esc_html($business_magnaNineQuoteDesc);

				}else{

					echo esc_html(business_magna_limitedstring($business_magnaNineQuoteContent, 150));

				}

			?>			
			</p>
			<p><span><?php echo esc_html($business_magnaNineQuoteTitle); ?></span></p>
			
	</div><!-- .frontQuoteContainer -->
	
	<?php

		$business_magnaNineAboutTitle = '';
		$business_magnaNineAboutDesc = '';
		$business_magnaNineAboutContent = '';

		if( '' != get_theme_mod('business_magna_nine_about_post') && 'select' != get_theme_mod('business_magna_nine_about_post') ){

			$business_magnaNineAboutId = get_theme_mod('business_magna_nine_about_post');

			if( ctype_alnum($business_magnaNineAboutId) ){

				$business_magnaNineAbout = get_post( $business_magnaNineAboutId );

				$business_magnaNineAboutTitle = $business_magnaNineAbout->post_title;
				$business_magnaNineAboutDesc = $business_magnaNineAbout->post_excerpt;
				$business_magnaNineAboutContent = $business_magnaNineAbout->post_content;

			}

		}

	?>	
	<div class="businessMagnaNineAbout">
	
		<h3><?php echo esc_html($business_magnaNineAboutTitle); ?></h3>
		<p>
		<?php 

				if( '' != $business_magnaNineAboutDesc ){

					echo esc_html($business_magnaNineAboutDesc);

				}else{

					echo esc_html(business_magna_limitedstring($business_magnaNineAboutContent, 150));

				}

		?>			
		</p>		
		
	</div>	
	
	<div class="businessMagnaNineAwards">
	
		<?php if( '' != get_theme_mod('business_magna_nine_award_one')  ): ?>
		<img src="<?php echo esc_url(get_theme_mod('business_magna_nine_award_one')); ?>" />
		<?php endif; ?>
		
		<?php if( '' != get_theme_mod('business_magna_nine_award_two')  ): ?>
		<img src="<?php echo esc_url(get_theme_mod('business_magna_nine_award_two')); ?>" />
		<?php endif; ?>	
		
		<?php if( '' != get_theme_mod('business_magna_nine_award_three')  ): ?>
		<img src="<?php echo esc_url(get_theme_mod('business_magna_nine_award_three')); ?>" />
		<?php endif; ?>
		
		<?php if( '' != get_theme_mod('business_magna_nine_award_four')  ): ?>
		<img src="<?php echo esc_url(get_theme_mod('business_magna_nine_award_four')); ?>" />
		<?php endif; ?>			
		
	</div>
	
</div>