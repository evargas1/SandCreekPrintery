<?php

function theme_styles () {
    // font awesome
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

    // font icons css
    wp_enqueue_style('animation', get_template_directory_uri() . '/css/font-icons/css/animation.css' );
    wp_enqueue_style('trx_addons_icons-codes', get_template_directory_uri() . '/css/font-icons/css/trx_addons_icons-codes.css' );
    wp_enqueue_style('trx_addons_icons-embedded', get_template_directory_uri() . '/css/font-icons/css/trx_addons_icons-embedded.css');
    wp_enqueue_style('trx_addons_icons-ie7-codes', get_template_directory_uri() . '/css/font-icons/css/trx_addons_icons-ie7-codes.css' );
    wp_enqueue_style('trx_addons_icons-ie7.css', get_template_directory_uri() . '/css/font-icons/css/trx_addons_icons-ie7.css' );
    wp_enqueue_style('trx_addons_icons', get_template_directory_uri() . '/css/font-icons/css/trx_addons_icons.css' );


    // fontello css
    wp_enqueue_style('animation', get_template_directory_uri() . '/css/fontello/css/animation.css' );
    wp_enqueue_style('fontello-codes', get_template_directory_uri() . '/css/fontello/css/fontello-codes.css' );
    wp_enqueue_style('fontello-embedded', get_template_directory_uri() . '/css/fontello/css/fontello-embedded.css' );
    wp_enqueue_style('fontello-ie7-codes', get_template_directory_uri() . '/css/fontello/css/fontello-ie7-codes.css' );
    wp_enqueue_style('fontello-ie7', get_template_directory_uri() . '/css/fontello/css/fontello-ie7.css' );
    wp_enqueue_style('fontello', get_template_directory_uri() . '/css/fontello/css/fontello.css' );

    

    // main files
    wp_enqueue_style('colors', get_template_directory_uri() . '/css/colors.css');
    wp_enqueue_style('essential-grid', get_template_directory_uri() . '/css/essential-grid.css' );
    wp_enqueue_style('general', get_template_directory_uri() . '/css/general.css' );
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css' );
    wp_enqueue_style('revslider', get_template_directory_uri() . '/css/revslider.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style('trx_addons_full', get_template_directory_uri() . '/css/trx_addons_full.css' );
    wp_enqueue_style('trx-addons', get_template_directory_uri() . '/css/trx-addons.animation.css' );

    // js
    wp_enqueue_style('settings', get_template_directory_uri() . '/js/vendor/essential-grid/css/settings.css' );
    wp_enqueue_style('settings', get_template_directory_uri() . '/js/vendor/revslider/css/settings.css' );
    wp_enqueue_style('swiper', get_template_directory_uri() . '/js/vendor/swiper/swiper.min.css' );
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/js/vendor/magnific/magnific-popup.min.css' );


}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action('admin_enqueue_scripts', 'theme_styles');
?>