<?php
if (!function_exists('default_mag_carousel_args')) :
    /**
     * Banner carousel Details
     *
     * @since Default Mag 1.0.0
     *
     * @return array $qargs carousel details.
     */
    function default_mag_carousel_args()
    {
        $default_mag_carousel_number = absint(default_mag_get_option('number_of_home_carousel'));
        $default_mag_carousel_category = esc_attr(default_mag_get_option('select_category_for_carousel'));
        $qargs = array(
            'posts_per_page' => esc_attr($default_mag_carousel_number),
            'post_type' => 'post',
            'cat' => $default_mag_carousel_category,
        );
        return $qargs;
        ?>
        <?php
    }
endif;


if (!function_exists('default_mag_carousel')) :
    /**
     * Banner carousel
     *
     * @since Default Mag 1.0.0
     *
     */
    function default_mag_carousel()
    {
        $default_mag_carousel_title_text = esc_html(default_mag_get_option('heading_text_on_carousel'));

        if (1 != default_mag_get_option('show_carousel_section')) {
            return null;
        }
        $default_mag_carousel_args = default_mag_carousel_args();
        $default_mag_carousel_query = new WP_Query($default_mag_carousel_args); ?>
        <?php $rtl_class_c = 'false';
        if(is_rtl()){ 
            $rtl_class_c = 'true';
        }?>
        <?php
    }
endif;
add_action('default_mag_action_carousel_post', 'default_mag_carousel', 10);