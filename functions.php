<?php

function theme_styles () {
    wp_enqueue_style('respon-file', get_template_directory_uri() . '/css/responsive.css');

    // file above not being read ???
    wp_enqueue_style('main-trx', get_template_directory_uri() . '/css/trx_addons_full.css' );
    wp_enqueue_style('trx-addon-anima', get_template_directory_uri() . '/css/trx-addons.animation.css' );

    wp_enqueue_style('color', get_template_directory_uri() . '/css/colors.css ');
    
    wp_enqueue_style('style-file', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style('general-file', get_template_directory_uri() . '/css/general.css' );
    
    // does not like underscores in name
    // font awesome
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

    // font icons css
    wp_enqueue_style('animation', get_template_directory_uri() . '/css/font-icons/css/animation.css' );
    wp_enqueue_style('trx-addons-icons-codes', get_template_directory_uri() . '/css/font-icons/css/trx_addons_icons-codes.css' );
    wp_enqueue_style('trx-addons-icons-embedded', get_template_directory_uri() . '/css/font-icons/css/trx_addons_icons-embedded.css');
    wp_enqueue_style('trx-addons-icons-ie7-codes', get_template_directory_uri() . '/css/font-icons/css/trx_addons_icons-ie7-codes.css' );
    wp_enqueue_style('trx-addons-icons-ie7', get_template_directory_uri() . '/css/font-icons/css/trx_addons_icons-ie7.css' );
    wp_enqueue_style('trx-addons-icons', get_template_directory_uri() . '/css/font-icons/css/trx_addons_icons.css' );


    // fontello css
    wp_enqueue_style('animation', get_template_directory_uri() . '/css/fontello/css/animation.css' );
    wp_enqueue_style('fontello-codes', get_template_directory_uri() . '/css/fontello/css/fontello-codes.css' );
    wp_enqueue_style('fontello-embedded', get_template_directory_uri() . '/css/fontello/css/fontello-embedded.css' );
    wp_enqueue_style('fontello-ie7-codes', get_template_directory_uri() . '/css/fontello/css/fontello-ie7-codes.css' );
    wp_enqueue_style('fontello-ie7', get_template_directory_uri() . '/css/fontello/css/fontello-ie7.css' );
    wp_enqueue_style('fontello', get_template_directory_uri() . '/css/fontello/css/fontello.css' );

    

    // main files
    wp_enqueue_style('essential-grid', get_template_directory_uri() . '/css/essential-grid.css' );
    wp_enqueue_style('revslider', get_template_directory_uri() . '/css/revslider.css' );


    // js
    wp_enqueue_style('settings-file', get_template_directory_uri() . '/js/vendor/essential-grid/css/settings.css' );
    wp_enqueue_style('settings', get_template_directory_uri() . '/js/vendor/revslider/css/settings.css' );
    wp_enqueue_style('swiper', get_template_directory_uri() . '/js/vendor/swiper/swiper.min.css' );
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/js/vendor/magnific/magnific-popup.min.css' );


}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action('admin_enqueue_scripts', 'theme_styles');

function theme_scripts_my () {

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery/jquery.js');
    wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery/jquery-migrate.min.js');
    wp_enqueue_script( 'core', get_template_directory_uri() . '/js/jquery/ui/core.min.js');
    wp_enqueue_script( 'widget', get_template_directory_uri() . '/js/jquery/ui/widget.min.js');
    wp_enqueue_script( 'accordion', get_template_directory_uri() . '/js/jquery/ui/accordion.min.js');
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/_main.js');
    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/vendor/essential-grid/js/lightbox.js');
    wp_enqueue_script( 'themepunch', get_template_directory_uri() . '/js/vendor/essential-grid/js/jquery.themepunch.tools.min.js');
    wp_enqueue_script( 'themepunch-essential', get_template_directory_uri() . '/js/vendor/essential-grid/js/jquery.themepunch.essential.min.js');
    wp_enqueue_script( 'themepunch-revolution', get_template_directory_uri() . '/js/vendor/revslider/jquery.themepunch.revolution.min.js');
    wp_enqueue_script( 'eg-projects', get_template_directory_uri() . '/js/eg-projects.js');

    // slider
    wp_enqueue_script( 'rev-extension-slider', get_template_directory_uri() . '/js/vendor/revslider/revsliderextensions/revolution.extension.slideanims.min.js');
    wp_enqueue_script( 'rev-extension-action', get_template_directory_uri() . '/js/vendor/revslider/revsliderextensions/revolution.extension.actions.min.js');
    wp_enqueue_script( 'rev-extension-layeranimation', get_template_directory_uri() . '/js/vendor/revslider/revsliderextensions/revolution.extension.layeranimation.min.js');
    wp_enqueue_script( 'rev-extension-nav', get_template_directory_uri() . '/js/vendor/revslider/revsliderextensions/revolution.extension.navigation.min.js');

    wp_enqueue_script( 'revslider-homepage', get_template_directory_uri() . '/js/revslider-homepage.js');
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/vendor/swiper/swiper.jquery.min.js');
    wp_enqueue_script( 'popup', get_template_directory_uri() . '/js/vendor/magnific/jquery.magnific-popup.min.js');
    wp_enqueue_script( 'trx-addons-js', get_template_directory_uri() . '/js/trx_addons.js');
    wp_enqueue_script( 'superfish', get_template_directory_uri() . 'js/superfish.js');
    wp_enqueue_script( 'eg-projects', get_template_directory_uri() . '/js/eg-projects.js');
    wp_enqueue_script( 'scripts-file', get_template_directory_uri() . '/js/scripts.js');


}
add_action( 'wp_enqueue_scripts', 'theme_scripts_my' );

?>