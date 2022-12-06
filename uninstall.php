<?php


// exit if file is called directly
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {

	exit;

}


// delete plugin options

delete_option( 'myplugin_options' )