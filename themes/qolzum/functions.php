<?php

require get_theme_file_path("/inc/search-route.php");

function qolzum_custom_REST_Api(){
    register_rest_field("post", "authorName", array(
        'get_callback' => function() {return get_the_author();},
        'permission_callback' => '__return_true'
    ));
}
add_action('rest_api_init', 'qolzum_custom_REST_Api');



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

    wp_register_style("main-css", get_template_directory_uri() . "/build/index.css", array(), false, "all");
    wp_enqueue_style("main-css");
}
add_action("wp_enqueue_scripts", "load_stylesheets");


function load_js()
{
    // load bootstrap.bundle.min.js scripts 5.0.1 CDN
    wp_enqueue_script("bootstrap-bundle-min-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js");

    // load main script
    wp_enqueue_script("main-js", get_theme_file_uri("/build/index.js"), "", 1, true);

    // localize
    wp_localize_script("main-js", "dataObj", array(
        "root_url" => get_home_url()
    ));

}
add_action("wp_enqueue_scripts", "load_js");

// Posts per category counter
function count_cat_post($cat){
    $CategoryName = get_term_by('slug', $cat, 'category');
    if(!$CategoryName){
    return 0;
    }
    return $CategoryName->count;
}

// Qolzum theme support
function qolzum_features()
{
    register_nav_menus(
        array(
            "top-menu" => __("Top Menu", "qolzum"),
            "footer-menu" => __("Footer Menu", "qolzum"),
        )
    );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_image_size("smallest", 100, 100, true);
    add_image_size("small", 300, 300, true);
    add_image_size("large", 700, 440, true);

}

add_action('after_setup_theme', 'qolzum_features');



function filterd_title_separator() {
    return '|';
}
add_filter( 'document_title_separator', 'filterd_title_separator' );



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

add_action('after_setup_qolzum', 'qolzum_custom_logo_setup');



// function wpb_add_googleanalytics() {
 
// // Paste your Google Analytics tracking code from Step 4 here
 
// }
// add_action('wp_head', 'wpb_add_googleanalytics');

// set post views
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
// remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


//track post view
function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');


// get post views
function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 مشاهدات";
    }
    return $count.'  مشاهدات';
}

