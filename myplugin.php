<?php
/*
Plugin Name:  MyPlugin
Description:  Example plugin for the video tutorial series, "WordPress: Plugin Development", available at webaiid.com.
Plugin URI:   https://profiles.wordpress.org/myplugin
Author:       Khaled
Version:      1.0
Text Domain:  myplugin
Domain Path:  /lang
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/



// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



if(is_admin()){
	

// include plugin dependencies
require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';

}

// Include dependency: admin and public

require_once plugin_dir_path( __FILE__ ) . 'inc/core-functions.php';



// default plugin options
function myplugin_options_default() {

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}
 



