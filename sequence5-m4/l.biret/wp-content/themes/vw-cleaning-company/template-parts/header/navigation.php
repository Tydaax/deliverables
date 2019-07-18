<?php
/**
 * The template part for header
 *
 * @package VW Cleaning Company 
 * @subpackage vw-cleaning-company
 * @since vw-cleaning-company 1.0
 */
?>

<button class="toggleMenu toggle"><?php esc_html_e('Menu','vw-cleaning-company'); ?></button>
<div id="header" class="menubar">
	<div class="row">
		<div class="<?php if(get_theme_mod('vw_cleaning_company_header_search')) { ?>col-lg-11 col-md-11" <?php } else { ?>col-lg-12 col-md-12" <?php } ?> >
      <nav>
  			<div class="nav">
  				<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
  			</div>
      </nav>
		</div>
		<?php if( get_theme_mod( 'vw_cleaning_company_header_search') != '') { ?>
        	<div class="col-lg-1 col-md-1">
          		<div class="search-box">
            		<span><i class="fas fa-search"></i></span>
          		</div>
        	</div>
      	<?php }?>
	</div>
	<div class="serach_outer">
      	<div class="closepop"><i class="far fa-window-close"></i></div>
      	<div class="serach_inner">
        	<?php get_search_form(); ?>
      	</div>
    </div>
</div>