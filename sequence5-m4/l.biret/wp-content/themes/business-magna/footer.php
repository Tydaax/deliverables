<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package business_magna
 */

?>

	</div><!-- #content -->

	<?php 

				if( 'no' != get_theme_mod('business_magna_show_quote') && "nine" != get_theme_mod('business_magna_layout_type') ): 

				$business_magnaQuoteTitle = '';
				$business_magnaQuoteDesc = '';
				$business_magnaQuoteContent = '';

				if( '' != get_theme_mod('business_magna_quote_post') && 'select' != get_theme_mod('business_magna_quote_post') ){

					$business_magnaQuoteId = get_theme_mod('business_magna_quote_post');

					if( ctype_alnum($business_magnaQuoteId) ){

						$business_magnaQuote = get_post( $business_magnaQuoteId );

						$business_magnaQuoteTitle = $business_magnaQuote->post_title;
						$business_magnaQuoteDesc = $business_magnaQuote->post_excerpt;
						$business_magnaQuoteContent = $business_magnaQuote->post_content;

					}

				}



		?>		
		<div class="frontQuoteContainer">
		
			<div class="frontQuoteInnerContainer">
				
				<p>
				<?php 

					if( '' != $business_magnaQuoteDesc ){

						echo esc_html($business_magnaQuoteDesc);

					}else{

						echo esc_html(business_magna_limitedstring($business_magnaQuoteContent, 300));

					}

				?>			
				</p>
				<p><span><?php echo esc_html($business_magnaQuoteTitle); ?></span></p>
				
			</div><!-- .frontQuoteInnerContainer -->
			
		</div><!-- .frontQuoteContainer -->
	<?php endif; ?>

	<?php if( 'no' != get_theme_mod('business_magna_show_social') ): ?>
	<div class="frontpage-social">

			<?php if( '' != get_theme_mod('business_magna_facebook') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_magna_facebook')); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/facebook.png'; ?>"></a>
			<?php endif; ?>
			
			<?php if( '' != get_theme_mod('business_magna_flickr') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_magna_flickr')); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/flickr.png'; ?>"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_magna_gplus') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_magna_gplus')); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/gplus.png'; ?>"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_magna_linkedin') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_magna_linkedin')); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/linkedin.png'; ?>"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_magna_reddit') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_magna_reddit')); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/reddit.png'; ?>"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_magna_stumble') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_magna_stumble')); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/stumble.png'; ?>"></a>
			<?php endif; ?>		

			<?php if( '' != get_theme_mod('business_magna_twitter') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_magna_twitter')); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/twitter.png'; ?>"></a>
			<?php endif; ?>				
					
	</div><!-- .frontpage-social -->	
	<?php endif; ?>

	<footer id="colophon" class="site-footer">

		<div class="site-logo">
		
			<?php
			
				$business_magna_custom_logo_id = get_theme_mod( 'custom_logo' );
				$business_magna_logo = wp_get_attachment_image_src( $business_magna_custom_logo_id , 'full' );
				if ( has_custom_logo() ) {
						echo '<a href="' . esc_url(get_site_url()) . '"><img src="'. esc_url( $business_magna_logo[0] ) .'"></a>';
				} else {
						echo '<h1>'. esc_html(get_bloginfo( 'name' )) .'</h1>';
				}			
			
			?>
			<p><?php esc_html_e( 'All rights reserved.', 'business-magna' ); ?></p>
			<p>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'business-magna' ), 'business magna', '<a href="https://themealley.com/">ThemeAlley</a>' );
			?>
			</a>
		</div><!-- .site-logo -->
		
		<div class="footer-widgets">
		
			<div class="footerWidgetContainer">
			<?php if ( dynamic_sidebar('footer-left') ){ } else { ?>
			
				<section class="widget">
					
					<div class="widgetContainerInner">
					
						<h2 class="widget-title"><span><?php _e( 'Pages', 'business-magna' ); ?></span></h2>
                        <ul>
                            <?php wp_list_pages('title_li='); ?>
                        </ul>						
					
					</div>
					
				</section>
			
			<?php } ?> 
			</div><!-- .footerWidgetContainer -->
			
			<div class="footerWidgetContainer">
			<?php if ( dynamic_sidebar('footer-middle') ){ } else { ?>
			
				<section class="widget">
					
					<div class="widgetContainerInner">
					
						<h2 class="widget-title"><span><?php _e( 'Meta', 'business-magna' ); ?></span></h2>
                        <ul>
                            <?php wp_register(); ?>
                            <li><?php wp_loginout(); ?></li>
                            <?php wp_meta(); ?>
                        </ul>						
					
					</div>
					
				</section>		
			
			<?php } ?> 			
			</div><!-- .footerWidgetContainer -->
			
			<div class="footerWidgetContainer">
			<?php if ( dynamic_sidebar('footer-right') ){ } else { ?>
			
				<section class="widget">
					
					<div class="widgetContainerInner">
					
						<h2 class="widget-title"><span><?php _e( 'Archives', 'business-magna' ); ?></span></h2>
                        <ul>
							 <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                        </ul>						
					
					</div>
					
				</section>			
			
			<?php } ?> 			
			</div><!-- .footerWidgetContainer -->			
		
		</div><!-- .footer-widgets -->
		
	
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- .outerContainer -->
<?php wp_footer(); ?>

</body>
</html>
