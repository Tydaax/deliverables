<?php
/**
 * The template for displaying search forms in vw-cleaning-company
 *
 * @package VW Cleaning Company
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="search" class="screen-reader-text"><?php esc_html_e('Search for a product:','vw-cleaning-company'); ?></label>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','vw-cleaning-company' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button','vw-cleaning-company' ); ?>">
</form>