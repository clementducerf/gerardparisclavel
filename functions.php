<?php
// Scripts and Styles

function gpc_assets() {
wp_enqueue_style('customStylesheet', get_stylesheet_uri());
wp_enqueue_script('jQuery', "https://code.jquery.com/jquery-3.2.1.min.js");
wp_enqueue_script('jqueryMousewheel', "https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js", array(), '1.0.0', true);
wp_enqueue_script( 'customJavascript', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'gpc_assets' );

// Thumbnaill support
add_theme_support( 'post-thumbnails' );