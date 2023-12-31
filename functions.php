<?php

function theme_styles () {
    wp_enqueue_style('main-trx', get_template_directory_uri() . '/css/trx_addons_full.css' );
    wp_enqueue_style('settings-grid', get_template_directory_uri() . '/js/vendor/essential-grid/css/settings.css' );
    wp_enqueue_style('essential-grid', get_template_directory_uri() . '/css/essential-grid.css' );
    

    // file above not being read ???
    
    wp_enqueue_style('trx-addons-animation', get_template_directory_uri() . '/css/trx_addons.animation.css' );

    wp_enqueue_style('color', get_template_directory_uri() . '/css/colors.css ');
    
    wp_enqueue_style('style-file', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style('general-file', get_template_directory_uri() . '/css/general.css' );
    // just like media queries go after inital stylying - media query files need to go after reguarly css files
    wp_enqueue_style('responsive-file', get_template_directory_uri() . '/css/responsive.css');
    
    // does not like underscores in name
    // font awesome
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css' );

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

    wp_enqueue_style('revslider', get_template_directory_uri() . '/css/revslider.css' );


    // js
    wp_enqueue_style('settings', get_template_directory_uri() . '/js/vendor/revslider/css/settings.css' );
    wp_enqueue_style('swiper', get_template_directory_uri() . '/js/vendor/swiper/swiper.min.css' );
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/js/vendor/magnific/magnific-popup.min.css' );


}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action('admin_enqueue_scripts', 'theme_styles');

function theme_scripts_my () {

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery/jquery.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery/jquery-migrate.min.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'core', get_template_directory_uri() . '/js/jquery/ui/core.min.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'widget', get_template_directory_uri() . '/js/jquery/ui/widget.min.js', array( 'jquery' ));
    wp_enqueue_script( 'accordian', get_template_directory_uri() . '/js/jquery/ui/accordion.min.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/_main.js', array( 'jquery' ), 1.1, true);


    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/vendor/essential-grid/js/lightbox.js', array( 'jquery' ));
    wp_enqueue_script( 'themepunch', get_template_directory_uri() . '/js/vendor/essential-grid/js/jquery.themepunch.tools.min.js', array( 'jquery' ));
    wp_enqueue_script( 'themepunch-essential', get_template_directory_uri() . '/js/vendor/essential-grid/js/jquery.themepunch.essential.min.js', array( 'jquery' ));
    wp_enqueue_script( 'themepunch-revolution', get_template_directory_uri() . '/js/vendor/revslider/jquery.themepunch.revolution.min.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'themepunch-grid', get_template_directory_uri() . '/js/eg-gallery-grid.js', array( 'jquery' ));
    // contact us form
    wp_enqueue_script( 'form', get_template_directory_uri() . '/js/form.js', array( 'jquery' ));


    wp_enqueue_script( 'eg-projects', get_template_directory_uri() . '/js/eg-projects.js', array( 'jquery' ), 1.1, true);

    // slider
    wp_enqueue_script( 'rev-extension-slider', get_template_directory_uri() . '/js/vendor/revslider/revsliderextensions/revolution.extension.slideanims.min.js');
    wp_enqueue_script( 'rev-extension-action', get_template_directory_uri() . '/js/vendor/revslider/revsliderextensions/revolution.extension.actions.min.js');
    wp_enqueue_script( 'rev-extension-layeranimation', get_template_directory_uri() . '/js/vendor/revslider/revsliderextensions/revolution.extension.layeranimation.min.js');
    wp_enqueue_script( 'rev-extension-nav', get_template_directory_uri() . '/js/vendor/revslider/revsliderextensions/revolution.extension.navigation.min.js');

    wp_enqueue_script( 'revslider-homepage', get_template_directory_uri() . '/js/revslider-homepage.js');
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/vendor/swiper/swiper.jquery.min.js');
    wp_enqueue_script( 'popup', get_template_directory_uri() . '/js/vendor/magnific/jquery.magnific-popup.min.js');
    // wp_enqueue_script( 'trx-addons-js', get_template_directory_uri() . '/js/trx_addons.js');
    wp_enqueue_script( 'trx-addons-js', get_template_directory_uri() . '/js/trx_addons.js', array( 'jquery' ), 1.1, true);
    // wp_enqueue_script( 'superfish', get_template_directory_uri() . 'js/superfish.js');
    wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'eg-projects', get_template_directory_uri() . '/js/eg-projects.js');
    wp_enqueue_script( 'scripts-file', get_template_directory_uri() . '/js/scripts.js');


}
add_action( 'wp_enqueue_scripts', 'theme_scripts_my' );

?>

<?php
// add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

// function your_prefix_register_meta_boxes( $meta_boxes ) {
//     $prefix = '';

//     $meta_boxes[] = [
//         'title'      => esc_html__( 'Main Meta Boxes for Homepage', 'online-generator' ),
//         'id'         => 'untitled',
//         'context'    => 'normal',
//         'post_types' => ['page'] ,
        
//         'fields'     => [
//             [
//                 'type' => 'text',
//                 'name' => esc_html__( 'Title', 'online-generator' ),
//                 'id'   => $prefix . 'title',
//                 'desc' => esc_html__( 'Main Banner Title', 'online-generator' ),
//             ],
//             [
//                 'type' => 'text',
//                 'name' => esc_html__( 'Concept to Print Text', 'online-generator' ),
//                 'id'   => $prefix . 'concept_to_print_text',
//                 'desc' => esc_html__( 'paragraph under concept to print', 'online-generator' ),
//             ],
//             [
//                 'type' => 'text',
//                 'name' => esc_html__( 'Sentence under title', 'online-generator' ),
//                 'id'   => $prefix . 'sentence_under_title',
//             ],
//         ],
//     ];

//     return $meta_boxes;
// }


add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Untitled Field Group', 'online-generator' ),
        'id'      => 'untitled',
        'context' => 'normal',
        'post_types' => ['page'],
        'visible' => [ 'page_template', 'page-contacts.php' ],
        'fields'  => [
            [
                'type' => 'text',
                'name' => esc_html__( 'title', 'online-generator' ),
                'id'   => $prefix . 'title',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'small text under title', 'online-generator' ),
                'id'   => $prefix . 'small_text_under_title',
            ],
            [
                'type' => 'image',
                'name' => esc_html__( 'what we do img1', 'online-generator' ),
                'id'   => $prefix . 'what_we_do_img1',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'what we do text1', 'online-generator' ),
                'id'   => $prefix . 'what_we_do_text1',
            ],
            [
                'type' => 'image',
                'name' => esc_html__( 'what we do img2', 'online-generator' ),
                'id'   => $prefix . 'what_we_do_img2',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'what we do text2', 'online-generator' ),
                'id'   => $prefix . 'what_we_do_text2',
            ],
            [
                'type' => 'image',
                'name' => esc_html__( 'what we do img3', 'online-generator' ),
                'id'   => $prefix . 'what_we_do_img3',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'what we do text3', 'online-generator' ),
                'id'   => $prefix . 'what_we_do_text3',
            ],
            [
                'type' => 'image',
                'name' => esc_html__( 'what we do img4', 'online-generator' ),
                'id'   => $prefix . 'what_we_do_img4',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'what we do text4', 'online-generator' ),
                'id'   => $prefix . 'what_we_do_text4',
            ],
            [
                'type' => 'image',
                'name' => esc_html__( 'we work with img1', 'online-generator' ),
                'id'   => $prefix . 'we_work_with_img1',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'we work with text1', 'online-generator' ),
                'id'   => $prefix . 'we_work_with_text1',
            ],
            [
                'type' => 'image',
                'name' => esc_html__( 'we work with img2', 'online-generator' ),
                'id'   => $prefix . 'we_work_with_img2',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'we work with text2', 'online-generator' ),
                'id'   => $prefix . 'we_work_with_text2',
            ],
            [
                'type' => 'image',
                'name' => esc_html__( 'we work with img3', 'online-generator' ),
                'id'   => $prefix . 'we_work_with_img3',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'we work with text3', 'online-generator' ),
                'id'   => $prefix . 'we_work_with_text3',
            ],
            [
                'type' => 'image',
                'name' => esc_html__( 'we work with img4', 'online-generator' ),
                'id'   => $prefix . 'we_work_with_img4',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'we work with text4', 'online-generator' ),
                'id'   => $prefix . 'we_work_with_text4',
            ],
        ],
    ];

    return $meta_boxes;
}

?>