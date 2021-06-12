<?php

function qolzum_files(){
    wp_enqueue_style('qolzum_main.style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'qolzum_files');