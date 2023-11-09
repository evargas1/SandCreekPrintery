<?php
wp_enqueue_style( 'general', get_template_directory_uri('/css/general.css'));

function theme_styles(){ 
    // Load all of the styles that need to appear on all pages
    wp_enqueue_style( 'general', get_template_directory_uri() . 'css/general.css' );
    
    }
     add_action('wp_enqueue_scripts', 'theme_styles');
?>