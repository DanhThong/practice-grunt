<?php
/*
Plugin Name: Menu by category id
Plugin URI: dulich-amthuc.com.vn
Description: Used shortcode: [menu_category]
Version: 1.0.0
Author: ThongDang
Author URI: http://dulich-amthuc.com.vn
License: GPL
Copyright: Du lịch ẩm thực
*/

function display_menu($atts) {
    extract($atts);
    $data = get_menu_by_category_id($cat);
    wp_enqueue_style( 'dl-menu-style', plugins_url('css/styles.css', __FILE__) );
    require ('template.php');
}

add_shortcode('menu_category', 'display_menu');

function get_menu_by_category_id($cat) {
    global $wpdb;
    $sql = "SELECT T.term_id, T.name, T.slug
        FROM  $wpdb->terms T
        LEFT JOIN $wpdb->term_taxonomy TT ON T.`term_id` = TT.`term_id`
        WHERE  `taxonomy` =  'category'
        AND  `parent` = ".$cat;
    $results = $wpdb->get_results($sql);
    return $results;
}
