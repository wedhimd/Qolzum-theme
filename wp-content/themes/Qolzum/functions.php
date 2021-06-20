<?php

function load_stylesheets()
{
    // loading main bootstrap 5.0.1 LOCAL
    wp_enqueue_style("bootstrap", get_template_directory_uri() . "/css/bootstrap/bootstrap.min.css", array(), false, "all");

    // loading custom css
    wp_enqueue_style("main-css", get_template_directory_uri() . "/style.css", array(), false, "all");
    ("main-css");
}
add_action("wp_enqueue_scripts", "load_stylesheets");


function load_js()
{
    // load bootstrap.bundle.min.js scripts 5.0.1 LOCAL
    wp_enqueue_script("bootstrap-bundle-min-js", get_template_directory_uri() . "/js/bootstrap/bootstrap.bundle.min.js", "", "5.0.1", true);

    // load bootstrap.esm.min.js scripts 5.0.1 LOCAL
    wp_enqueue_script("bootstrap-esm-min-js", get_template_directory_uri() . "/js/bootstrap/bootstrap.esm.min.js", "", "5.0.1", true);

    // load bootstrap.min.js scripts 5.0.1 LOCAL
    wp_enqueue_script("bootstrap-min-js", get_template_directory_uri() . "/js/bootstrap/bootstrap.min.js", "", "5.0.1", true);

    // load custom scripts
    wp_enqueue_script("custom-js", get_template_directory_uri() . "/js/scripts.js", "", 1, true);
}
add_action("wp_enqueue_scripts", "load_js");


add_theme_support("menus");
add_theme_support("post-thumbnails");

register_nav_menus(
    array(
        "top-menu" => __("Top Menu", "theme"),
        "footer-menu" => __("Footer Menu", "theme"),
    )
);


add_image_size("smallest", 300, 300, true);
add_image_size("largest", 700, 700, true);
