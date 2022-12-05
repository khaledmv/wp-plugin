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

}