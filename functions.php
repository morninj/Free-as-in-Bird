<?php
// Redirect to post if search returns only one result
function redirect_to_single_search_result() {
  if( is_search() ){
    global $wp_query;
    if( $wp_query->post_count == 1 ){
      wp_redirect( get_permalink($wp_query->posts['0']->ID), 302 );
      exit;
    }
  }
}
add_action('template_redirect', 'redirect_to_single_search_result');

// Restrict search to post titles
function __search_by_title_only( $search, &$wp_query ) {
    global $wpdb;

    if ( empty( $search ) )
        return $search; // skip processing - no search term in query

    $q = $wp_query->query_vars;    
    $n = ! empty( $q['exact'] ) ? '' : '%';

    $search =
    $searchand = '';

    foreach ( (array) $q['search_terms'] as $term ) {
        $term = esc_sql( like_escape( $term ) );
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }

    if ( ! empty( $search ) ) {
        $search = " AND ({$search}) ";
        if ( ! is_user_logged_in() )
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }

    return $search;
}
add_filter( 'posts_search', '__search_by_title_only', 500, 2 );
?>
