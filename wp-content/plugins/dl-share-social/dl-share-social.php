<?php
/*
Plugin Name: Share social
Plugin URI: dulich-amthuc.com.vn
Description: Share into facebook and google + used shortcode: [share-box]
Version: 1.0.0
Author: ThongDang
Author URI: http://dulich-amthuc.com.vn
License: GPL
Copyright: Du lịch ẩm thực
*/

function share_shorcode($atts) {
    $url = $atts['url'];
    wp_enqueue_script( 'google-plug', 'https://apis.google.com/js/platform.js', '', '1.0.0' );
    wp_enqueue_script( 'my-plugin-script', plugins_url( 'js/fb.js', __FILE__ ) );
    // TODO: create option for size of button
    $size = array();
    $size['fb'] = 'button';
    $size['gg'] = 'none';
    if (is_single()) {
        $size['fb'] = 'button_count';
        $size['gg'] = 'inline';
    }
    include 'template.php';
}

add_shortcode('share-box', 'share_shorcode');
