<?php

function load_stylesheets()
{
    // loading main bootstrap 5.0.2 CDN
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");

    // loading font awsome css CDN
    wp_enqueue_style("font-awsome", "https://use.fontawesome.com/releases/v5.7.1/css/all.css");

    // loading google fonts CDN
    wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap");


    // load bootstrap.bundle.min.css 5.0.1 LOCAL
    wp_register_script("bootstrap-bundle-min-css", get_template_directory_uri() . "/assets/css/bootstrap-5.0.1/bootstarp.min.css", "", "5.0.1", false);
    wp_enqueue_style("bootstrap-bundle-min-css");


    // loading custom css
    wp_register_style("theme-css", get_template_directory_uri() . "/style.css", array(), false, "all");
    wp_enqueue_style("theme-css");

    wp_register_style("main-css", get_template_directory_uri() . "/assets/css/main.css", array(), false, "all");
    wp_enqueue_style("main-css");
}
add_action("wp_enqueue_scripts", "load_stylesheets");


function load_js()
{
    // load bootstrap.bundle.min.js scripts 5.0.1 CDN
    wp_enqueue_script("bootstrap-bundle-min-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js");

    // load custom scripts
    wp_enqueue_script("custom-js", get_theme_file_uri("/assets/js/scripts.js"), "", 1, true);
}
add_action("wp_enqueue_scripts", "load_js");


add_theme_support("menus");
add_theme_support("post-thumbnails");

// custom logo support
function qolzum_custom_logo_setup()
{
    [
        'header-text'          => ['site-title', 'site-description'],
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'unlink-homepage-logo' => true,
    ];

    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'qolzum_custom_logo_setup');

// menus support



register_nav_menus(
    array(
        "top-menu" => __("Top Menu", "theme"),
        "footer-menu" => __("Footer Menu", "theme"),
    )
);


add_image_size("smallest", 300, 300, true);
add_image_size("largest", 700, 700, true);
