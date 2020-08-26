<?php
	
if(!function_exists("my_acf_settings_path")){
	// 1. customize ACF path
	add_filter('infrastructure/resources/plugins/acf/plugin/settings/path', 'my_acf_settings_path');
	 
	function my_acf_settings_path( $path ) {
	 
		// update path
		$path = plugin_dir_path( __FILE__ ). 'infrastructure/resources/plugins/acf/plugin/';
		
		// return
		return $path;
	}
}

if(!function_exists("my_acf_settings_dir")){
	// 2. customize ACF dir
	add_filter('infrastructure/resources/plugins/acf/plugin/settings/dir', 'my_acf_settings_dir');
 
	function my_acf_settings_dir( $dir ) {
	 
		// update path
		$dir = plugin_dir_url( __FILE__ ). 'infrastructure/resources/plugins/acf/plugin/';
		
		// return
		return $dir;
		
	}
}


// 3. Hide ACF field group menu item
// add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( plugin_dir_path( __FILE__ ).'plugin/acf.php' );
?>