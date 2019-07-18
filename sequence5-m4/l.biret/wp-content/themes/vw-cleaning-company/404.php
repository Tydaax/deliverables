<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Cleaning Company
 */

get_header(); ?>

<div class="container">
	<main id="maincontent">
    	<h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404','vw-cleaning-company' ), esc_html__( 'Not Found', 'vw-cleaning-company' ) ) ?></h1>
		<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip', 'vw-cleaning-company' ); ?></p>
		<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vw-cleaning-company' ); ?></p>
		<div class="more-btn">
	        <a href="<?php echo esc_url(home_url()); ?>" alt="<?php esc_html_e( 'Home link', 'vw-cleaning-company' ); ?>"><i class="fas fa-angle-right"></i><?php esc_html_e( 'Go Back', 'vw-cleaning-company' ); ?></a>
	    </div>
		<div class="clearfix"></div>
	</main>
</div>

<?php get_footer(); ?>