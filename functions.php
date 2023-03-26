<?php

/**
 * Theme Support
 */
 
 add_theme_support( 'post-thumbnails' );


/**
 * Register Navigation Locations
 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
 * 
 * Register our locations for our header and sidebar menu.
 * This will add a link to Menus under Appearance.
 */

 if ( ! function_exists( 'bdocs_register_nav_menu' ) ) {

	function bdocs_register_nav_menu(){
		register_nav_menus( array(
	    	'header_menu' => __( 'Header Menu', 'bdocs_domain' ),
	    	'siderbar_menu'  => __( 'Siderbar Menu', 'bdocs_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'bdocs_register_nav_menu', 0 );
}