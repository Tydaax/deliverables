<?php
if (!function_exists('default_mag_main_banner')) :
    /**
     * Main Banner Section
     *
     * @since default-mag 1.0.0
     *
     */
    function default_mag_main_banner()
    {
        if (1 != default_mag_get_option('show_main_banner_section')) {
            return null;
        }
        ?>
        
        <?php
    }   
endif;
add_action('default_mag_action_main_banner', 'default_mag_main_banner', 10);
