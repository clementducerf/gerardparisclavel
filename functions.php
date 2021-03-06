<?php
// Scripts and Styles

function gpc_assets() {
    wp_enqueue_style('flickitystyles', "https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.0/flickity.min.css");
    wp_enqueue_style('customStylesheet', get_stylesheet_uri());


    wp_enqueue_script('jQuery', "https://code.jquery.com/jquery-3.2.1.min.js");
    wp_enqueue_script('jqueryMousewheel', "https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js", array(), '1.0.0', true);
    //wp_enqueue_script( 'easySlider', get_template_directory_uri() . '/js/easySlider1.7.js', array(), '1.0.0', true );
    wp_enqueue_script('flickity', "https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.0/flickity.pkgd.min.js", array(), '1.0.0', true);

    wp_enqueue_script( 'customJavascript', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'gpc_assets' );

// Thumbnaill support
add_theme_support( 'post-thumbnails' );


// Check if page has children

function has_children(){
    global $post;

    $children = get_pages(array('child_of' => $post->ID));
    if (count($children) == 0) {
        return false;
    } else {
        return true;
    }
}


// Size for link images in chapitre template

add_image_size( 'links', 500, 170 );