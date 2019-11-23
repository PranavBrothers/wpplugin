<?php
/**
 * Plugin Name: B2C Wodpress Plugin
 * Plugin URI: https://www.b2cwordpresssplugindemo.com
 * Description: Embed b2c pages in wordpress
 * Version: 0.1
 * Text Domain: b2c-wordpress-plugin-demo
 * Author: Rajkumar
 * Author URI: https://www.b2cwordpresssplugindemo.com
 */
if (!function_exists('add_action')) die();
?>
<?php include 'config.php';?>
<?php
function b2c_wordpress_plugin_flight($atts) {
    return getIncludeContents('flight.html');
}

add_shortcode('b2c-wordpress-plugin-flight', 'b2c_wordpress_plugin_flight');

function b2c_wordpress_plugin_hotel($atts) {
    return getIncludeContents('hotel.html');
}

add_shortcode('b2c-wordpress-plugin-hotel', 'b2c_wordpress_plugin_hotel');
?>