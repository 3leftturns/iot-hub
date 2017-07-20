<?php
/*
Plugin Name: IoT Hub
Plugin URI: http://wordpress.org/#
Description: Internet of Things (IoT) & Smart Device plugin for WordPress. Allows your devices to post to your WordPress blog feed as individual authors. Use a dark minimalistic theme on a Raspberry Pi in Kiosk mode as a Smart Mirror.
Author: Andy Johnson
Version: 0.0
Author URI: http://andrewtjohnson.me
*/

function get_weather() {
  echo "<p>Hello World!</p>";
}

add_action( 'wp_loaded', 'get_weather' );
?>