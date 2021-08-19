<?php

add_action("rest_api_init", "qolzumSearchApi");

function qolzumSearchApi(){
    register_rest_route("qz/v1", "search", array(
        "methods" => WP_REST_SERVER::READABLE,
        "callback" => "qolzumSearchResults"
    ));
}

function qolzumSearchResults() {
    return "first route";
}