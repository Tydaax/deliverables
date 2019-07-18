<div class="businessMagnaOneContainer">
	
	<?php if( '' != get_theme_mod('business_magna_one_welcome_post') && 'select' != get_theme_mod('business_magna_one_welcome_post') ) : 

			$business_magna_OneWelcomePostTitle = '';
			$business_magna_OneWelcomePostDesc = '';
			$business_magna_OneWelcomePostContent = '';


			$business_magna_OneWelcomePostId = get_theme_mod('business_magna_one_welcome_post');

			if( ctype_alnum($business_magna_OneWelcomePostId) ){

				$business_magna_OneWelcomePost = get_post( $business_magna_OneWelcomePostId );

				$business_magna_OneWelcomePostTitle = $business_magna_OneWelcomePost->post_title;
				$business_magna_OneWelcomePostDesc = $business_magna_OneWelcomePost->post_excerpt;
				$business_magna_OneWelcomePostContent = $business_magna_OneWelcomePost->post_content;

			}			

	?>

	<div class="businessMagnaOneWelcome">

		<h2><?php echo esc_html($business_magna_OneWelcomePostTitle); ?></h2>
		<p>
		<?php 

			if( '' != $business_magna_OneWelcomePostDesc ){

				echo esc_html($business_magna_OneWelcomePostDesc);

			}else{

				echo esc_html($business_magna_OneWelcomePostContent);

			}

		?>			
		</p>

	</div>	
	
	<?php endif; ?>
	
	<?php
		if( '' != get_theme_mod('business_magna_one_services_cat') && 'select' != get_theme_mod('business_magna_one_services_cat') ):
	?>
	<div class="businessMagnaOneServices">
		
		<?php

			$business_magna_one_cat = '';

			if(get_theme_mod('business_magna_one_services_cat')){
					$business_magna_one_cat = get_theme_mod('business_magna_one_services_cat');
			}else{
					$business_magna_one_cat = 0;
			}
		
			if(get_theme_mod('business_magna_one_services_num')){
					$business_magna_one_cat_num = get_theme_mod('business_magna_one_services_num');
			}else{
					$business_magna_one_cat_num = 4;
			}		

			$business_magna_one_args = array(
				   // Change these category SLUGS to suit your use.
				   'ignore_sticky_posts' => 1,
				   'post_type' => array('post'),
				   'posts_per_page'=> $business_magna_one_cat_num,
				   'cat' => $business_magna_one_cat
			);

			$business_magna_one = new WP_Query($business_magna_one_args);		

			if ( $business_magna_one->have_posts() ) : while ( $business_magna_one->have_posts() ) : $business_magna_one->the_post();
		
   		?>		
	
		<div class="businessMagnaOneServicesItem">
			
			<div class="businessMagnaOneServicesItemImage">
			
				<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('business_magna-home-posts');
						}else{
							echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/frontsix.png" />';
						}						
				?>
				
			</div>
			
			<div class="businessMagnaOneServicesItemContent">
			
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