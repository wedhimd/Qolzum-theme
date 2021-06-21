<?php

function load_stylesheets()
{
    // loading main bootstrap 5.0.1 CDN
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css");

    // loading font awsome css CDN
    wp_enqueue_style("font-awsome", "https://use.fontawesome.com/releases/v5.7.1/css/all.css");


    // load bootstrap.bundle.min.css 5.0.1 LOCAL
    wp_enqueue_style("bootstrap-bundle-min-js", get_template_directory_uri() . "/assets/css/bootstrap/bootstarp.min.css", array(), "5.0.1", false);


    // loading custom css
    wp_enqueue_style("main-css", get_template_directory_uri() . "/style.css", array(), false, "all");
    ("main-css");
}
add_action("wp_enqueue_scripts", "load_stylesheets");


function load_js()
{
    // load bootstrap.bundle.min.js scripts 5.0.1 CDN
    wp_enqueue_script("bootstrap-bundle-min-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js");

    // load bootstrap.bundle.min.js scripts 5.0.1 LOCAL
    wp_enqueue_script("bootstrap-bundle-min-js", get_template_directory_uri() . "assets/js/bootstrap/bootstrap.bundle.min.js", "", "5.0.1", true);

    // load bootstrap.esm.min.js scripts 5.0.1 LOCAL
    wp_enqueue_script("bootstrap-esm-min-js", get_template_directory_uri() . "assets/js/bootstrap/bootstrap.esm.min.js", "", "5.0.1", true);

    // load bootstrap.min.js scripts 5.0.1 LOCAL
    wp_enqueue_script("bootstrap-min-js", get_template_directory_uri() . "assets/js/bootstrap/bootstrap.min.js", "", "5.0.1", true);

    // load custom scripts
    wp_enqueue_script("custom-js", get_template_directory_uri() . "assets/js/scripts.js", "", 1, true);
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
