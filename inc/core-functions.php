<?php // MyPlugin core functionality 

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// custom login logo url
function myplugin_custom_login_url( $url ) {
	
	$options = get_option( 'myplugin_options', myplugin_options_default() );
	
	if ( isset( $options['custom_url'] ) && ! empty( $options['custom_url'] ) ) {
		
		$url = esc_url( $options['custom_url'] );
		
	}
	
	return $url;
	
}
add_filter( 'login_headerurl', 'myplugin_custom_login_url' );



// custom login styles
function myplugin_custom_login_styles() {
	
	$styles = false;
	
	$options = get_option( 'myplugin_options', myplugin_options_default() );
	
	if ( isset( $options['custom_style'] ) && ! empty( $options['custom_style'] ) ) {
		
		$styles = sanitize_text_field( $options['custom_style'] );
		
	}
	
	if ( 'enable' === $styles ) {
		
		/*
		
		wp_enqueue_style( 
			string           $handle, 
			string           $src = '', 
			array            $deps = array(), 
			string|bool|null $ver = false, 
			string           $media = 'all' 
		)
		
		wp_enqueue_script( 
			string           $handle, 
			string           $src = '', 
			array            $deps = array(), 
			string|bool|null $ver = false, 
			bool             $in_footer = false 
		)
		
		*/
		
		wp_enqueue_style( 'myplugin', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/myplugin.css', array(), null, 'screen' );
		
		wp_enqueue_script( 'myplugin', plugin_dir_url( dirname( __FILE__ ) ) . 'public/js/myplugin.js', array(), null, true );
		
	}
	
}
add_action( 'login_enqueue_scripts', 'myplugin_custom_login_styles' );