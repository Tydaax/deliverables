<div class="businessMagnaSevenContainer">

	<?php if( '' != get_theme_mod('business_magna_seven_welcome_post') && 'select' != get_theme_mod('business_magna_seven_welcome_post') ) : 

			$business_magna_SevenWelcomePostTitle = '';
			$business_magna_SevenWelcomePostDesc = '';
			$business_magna_SevenWelcomePostContent = '';


			$business_magna_SevenWelcomePostId = get_theme_mod('business_magna_seven_welcome_post');

			if( ctype_alnum($business_magna_SevenWelcomePostId) ){

				$business_magna_SevenWelcomePost = get_post( $business_magna_SevenWelcomePostId );

				$business_magna_SevenWelcomePostTitle = $business_magna_SevenWelcomePost->post_title;
				$business_magna_SevenWelcomePostDesc = $business_magna_SevenWelcomePost->post_excerpt;
				$business_magna_SevenWelcomePostContent = $business_magna_SevenWelcomePost->post_content;

			}			

	?>

	<div class="businessMagnaSevenWelcome">

		<h2><?php echo esc_html($business_magna_SevenWelcomePostTitle); ?></h2>
		<p>
		<?php 

			if( '' != $business_magna_SevenWelcomePostDesc ){

				echo esc_html($business_magna_SevenWelcomePostDesc);

			}else{

				echo esc_html($business_magna_SevenWelcomePostContent);

			}

		?>			
		</p>

	</div>	
	
	<?php endif; ?>
	
	<div class="businessMagnaSevenWork">
	
		<?php if( '' != get_theme_mod('business_magna_seven_work_post') && 'select' != get_theme_mod('business_magna_seven_work_post') ) : 

				$business_magna_SevenWorkPostTitle = '';
				$business_magna_SevenWorkPostDesc = '';
				$business_magna_SevenWorkPostContent = '';


				$business_magna_SevenWorkPostId = get_theme_mod('business_magna_seven_work_post');

				if( ctype_alnum($business_magna_SevenWorkPostId) ){

					$business_magna_SevenWorkPost = get_post( $business_magna_SevenWorkPostId );

					$business_magna_SevenWorkPostTitle = $business_magna_SevenWorkPost->post_title;
					$business_magna_SevenWorkPostDesc = $business_magna_SevenWorkPost->post_excerpt;
					$business_magna_SevenWorkPostContent = $business_magna_SevenWorkPost->post_content;

				}			

		?>

		<div class="businessMagnaSevenWorkPost">

			<h2><?php echo esc_html($business_magna_SevenWorkPostTitle); ?></h2>
			<p>
			<?php 

				if( '' != $business_magna_SevenWorkPostDesc ){

					echo esc_html($business_magna_SevenWorkPostDesc);

				}else{

					echo esc_html($business_magna_SevenWorkPostContent);

				}

			?>			
			</p>

		</div>	

		<?php endif; ?>
		
		<?php if( '' != get_theme_mod('business_magna_seven_portfolio_cat') && 'select' != get_theme_mod('business_magna_seven_portfolio_cat') ) : 
		?>
		<div class="businessMagnaSevenWorkItems">
		
			<?php 
			
				$business_magna_Seven_cat = '';

				if(get_theme_mod('business_magna_seven_portfolio_cat')){
						$business_magna_Seven_cat = get_theme_mod('business_magna_seven_portfolio_cat');
				}else{
						$business_magna_Seven_cat = 0;
				}

				if(get_theme_mod('business_magna_seven_work_num')){
						$business_magna_Seven_cat_num = get_theme_mod('business_magna_seven_work_num');
				}else{
						$business_magna_Seven_cat_num = 8;
				}		

				$business_magna_Seven_args = array(
					   // Change these category SLUGS to suit your use.
					   'ignore_sticky_posts' => 1,
					   'post_type' => array('post'),
					   'posts_per_page'=> $business_magna_Seven_cat_num,
					   'cat' => $business_magna_Seven_cat
				);

				$business_magna_Seven = new WP_Query($business_magna_Seven_args);		

				if ( $business_magna_Seven->have_posts() ) : while ( $business_magna_Seven->have_posts() ) : $business_magna_Seven->the_post();			
			
			?>
			<div class="businessMagnaSevenWorkItem">
			
				<a href="<?php echo esc_url( get_permalink() ); ?>">
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('business_magna-home-posts');
					}else{
						echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/frontsix.png" />';
					}						
				?>
				</a>
				
			</div>
			<?php endwhile; wp_reset_postdata(); endif;?>
		
		</div>
		<?php endif; ?>
	
	</div>
	
	<?php if( '' != get_theme_mod('business_magna_seven_about_post') && 'select' != get_theme_mod('business_magna_seven_about_post') ) : 

			$business_magna_SevenAboutPostTitle = '';
			$business_magna_SevenAboutPostDesc = '';
			$business_magna_SevenAboutPostContent = '';


			$business_magna_SevenAboutPostId = get_theme_mod('business_magna_seven_about_post');

			if( ctype_alnum($business_magna_SevenAboutPostId) ){

				$business_magna_SevenAboutPost = get_post( $business_magna_SevenAboutPostId );

				$business_magna_SevenAboutPostTitle = $business_magna_SevenAboutPost->post_title;
				$business_magna_SevenAboutPostDesc = $business_magna_SevenAboutPost->post_excerpt;
				$business_magna_SevenAboutPostContent = $business_magna_SevenAboutPost->post_content;

			}			

	?>

	<div class="businessMagnaSevenAbout">

		<h2><?php echo esc_html($business_magna_SevenAboutPostTitle); ?></h2>
		<p>
		<?php 

			if( '' != $business_magna_SevenAboutPostDesc ){

				echo esc_html($business_magna_SevenAboutPostDesc);

			}else{

				echo esc_html($business_magna_SevenAboutPostContent);

			}

		?>			
		</p>

	</div>	
	
	<?php endif; ?>	
	
</div>	