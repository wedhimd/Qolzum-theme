<?php

add_action("rest_api_init", "qolzumSearchApi");

function qolzumSearchApi(){
    register_rest_route("qz/v1", "search", array(
        "methods" => WP_REST_SERVER::READABLE,
        "callback" => "qolzumSearchResults"
    ));
}

function qolzumSearchResults($data) {
  $mainQuery = new WP_Query(array(
    'post_type' => array('post', 'page'),
    's' => sanitize_text_field($data['term'])
  ));

  $results = array(
    'generalInfo' => array()
  );

  while($mainQuery->have_posts()) {
    $mainQuery->the_post();

    if (get_post_type() == 'post' OR get_post_type() == 'page') {
      array_push($results['generalInfo'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'postType' => get_post_type(),
        'authorName' => get_the_author()
      ));
    }
  }


  return $results;

}