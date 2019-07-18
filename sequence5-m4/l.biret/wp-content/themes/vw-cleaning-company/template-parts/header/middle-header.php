<?php
/**
 * The template part for top header
 *
 * @package VW Cleaning Company 
 * @subpackage vw-cleaning-company
 * @since vw-cleaning-company 1.0
 */
?>

<div class="middle-header">
  <div class="row">
    <div class="col-lg-3 col-md-3">
      <div class="logo">
        <?php if( has_custom_logo() ){ vw_cleaning_company_the_custom_logo();
          }else{ ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" alt="<?php bloginfo( 'name' ); ?>" ><?php bloginfo( 'name' ); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo esc_html($description); ?></p>
        <?php endif; } ?>
      </div>
    </div>
    <div class="col-lg-3 col-md-3">
      <?php if( get_theme_mod( 'vw_cleaning_company_call_text') != '' || get_theme_mod( 'vw_cleaning_company_call') != '') { ?>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-3">
            <i class="fas fa-phone"></i>
          </div>
          <div class="col-lg-9 col-md-9 col-9">
            <h6><?php echo esc_html(get_theme_mod('vw_cleaning_company_call_text',''));?></h6>
            <p><?php echo esc_html(get_theme_mod('vw_cleaning_company_call',''));?></p>
          </div>
        </div>        
      <?php }?>
    </div>
    <div class="col-lg-3 col-md-3">
      <?php dynamic_sidebar('social-links'); ?>
    </div>
    <div class="col-lg-3 col-md-3">
      <?php if( get_theme_mod( 'vw_cleaning_company_top_btn_url') != '' || get_theme_mod( 'vw_cleaning_company_top_btn_text') != '') { ?>
      <div class="top-btn">
        <a href="<?php echo esc_url(get_theme_mod('vw_cleaning_company_top_btn_url',''));?>"><i class="fas fa-calendar-alt"></i><?php echo esc_html(get_theme_mod('vw_cleaning_company_top_btn_text',''));?></a>
      </div>
      <?php }?>
    </div>
  </div>
</div>