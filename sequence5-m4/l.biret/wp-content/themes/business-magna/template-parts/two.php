<div class="businessMagnaTwoContainer">
	
	<div class="businessMagnaTwoServices">
		
		<?php if( '' != get_theme_mod('business_magna_two_welcome_post') && 'select' != get_theme_mod('business_magna_two_welcome_post') ) : 

				$business_magna_TwoWelcomePostTitle = '';
				$business_magna_TwoWelcomePostDesc = '';
				$business_magna_TwoWelcomePostContent = '';


				$business_magna_TwoWelcomePostId = get_theme_mod('business_magna_two_welcome_post');

				if( ctype_alnum($business_magna_TwoWelcomePostId) ){

					$business_magna_TwoWelcomePost = get_post( $business_magna_TwoWelcomePostId );

					$business_magna_TwoWelcomePostTitle = $business_magna_TwoWelcomePost->post_title;
					$business_magna_TwoWelcomePostDesc = $business_magna_TwoWelcomePost->post_excerpt;
					$business_magna_TwoWelcomePostContent = $business_magna_TwoWelcomePost->post_content;

				}			

		?>

		<div class="businessMagnaTwoWelcome">

			<h2><?php echo esc_html($business_magna_TwoWelcomePostTitle); ?></h2>
			<p>
			<?php 

				if( '' != $business_magna_TwoWelcomePostDesc ){

					echo esc_html($business_magna_TwoWelcomePostDesc);

				}else{

					echo esc_html($business_magna_TwoWelcomePostContent);

				}

			?>			
			</p>

		</div>
		
		<?php endif; ?>
		
		<?php
			if( '' != get_theme_mod('business_magna_two_services_cat') && 'select' != get_theme_mod('business_magna_two_services_cat') ):
		?>
		<div class="businessMagnaTwoServicesItems">

			<?php

				$business_magna_Two_cat = '';

				if(get_theme_mod('business_magna_two_services_cat')){
						$business_magna_Two_cat = get_theme_mod('business_magna_two_services_cat');
				}else{
						$business_magna_Two_cat = 0;
				}

				if(get_theme_mod('business_magna_two_services_num')){
						$business_magna_Two_cat_num = get_theme_mod('business_magna_two_services_num');
				}else{
						$business_magna_Two_cat_num = 4;
				}		

				$business_magna_Two_args = array(
					   // Change these category SLUGS to suit your use.
					   'ignore_sticky_posts' => 1,
					   'post_type' => array('post'),
					   'posts_per_page'=> $business_magna_Two_cat_num,
					   'cat' => $business_magna_Two_cat
				);

				$business_magna_Two = new WP_Query($business_magna_Two_args);		

				if ( $business_magna_Two->have_posts() ) : while ( $business_magna_Two->have_posts() ) : $business_magna_Two->the_post();

			?>		

			<div class="businessMagnaTwoServicesItem">

				<div class="businessMagnaTwoServicesItemImage">

					<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('business_magna-home-posts');
							}else{
								echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/frontsix.png" />';
							}						
					?>

				</div>

				<div class="businessMagnaTwoServicesItemContent">

					<?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
					<p>
						<?php  

							//$frontPostExcerpt = '';
							//$frontPostExcerpt = get_the_excerpt();

							if( has_excerpt() ){
								echo esc_html(get_the_excerpt());
							}else{
								echo esc_html(business_magna_limitedstring(get_the_content(), 50));
							}

						?>
					</p>

				</div>			

			</div>
			<?php endwhile; wp_reset_postdata(); endif;?>

		</div>
		<?php endif; ?>		
		
	</div>
	
	<div class="businessMagnaTwoPortfolio">
		
		<div class="businessMagnaTwoPortfolioHeading">
			
			<?php 

				$business_magna_Two_PortfolioHeading = __('Portfolio', 'business-magna');	


				if( '' != get_theme_mod('business_magna_two_portfolio_title') ){
					$business_magna_Two_PortfolioHeading = get_theme_mod('business_magna_two_portfolio_title');
				}			

			?>
			<h3><?php echo esc_html($business_magna_Two_PortfolioHeading); ?></h3>
			
		</div>
		
		<div class="businessMagnaTwoPortfolioItems">

			<?php

				$business_magna_Two_port = '';

				if(get_theme_mod('business_magna_two_portfolio_cat')){
						$business_magna_Two_port = get_theme_mod('business_magna_two_portfolio_cat');
				}else{
						$business_magna_Two_port = 0;
				}

				if(get_theme_mod('business_magna_two_portfolio_num')){
						$business_magna_Two_port_num = get_theme_mod('business_magna_two_portfolio_num');
				}else{
						$business_magna_Two_port_num = 4;
				}		

				$business_magna_Two_port_args = array(
					   // Change these category SLUGS to suit your use.
					   'ignore_sticky_posts' => 1,
					   'post_type' => array('post'),
					   'posts_per_page'=> $business_magna_Two_port_num,
					   'cat' => $business_magna_Two_port
				);

				$business_magna_TwoPort = new WP_Query($business_magna_Two_port_args);		

				if ( $business_magna_TwoPort->have_posts() ) : while ( $business_magna_TwoPort->have_posts() ) : $business_magna_TwoPort->the_post();

			?>
			<div class="businessMagnaTwoPortfolioItem">
			
				<div class="businessMagnaTwoPortfolioItemImage">

				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('business_magna-home-posts');
					}else{
						echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/frontsix.png" />';
					}						
				?>

				</div>
				
				<?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
				
			</div>
			<?php endwhile; wp_reset_postdata(); endif;?>
		
		</div>		
		
	</div>	
	
</div>