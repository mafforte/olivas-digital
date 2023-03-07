<?php

	function theme_scripts() {
		wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/main.min.css', array(), wp_get_theme()->get( 'Version' )  );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/aseets/js/app.min.js', array(), false, true );
	}
	add_action( 'wp_enqueue_scripts', 'theme_scripts' );

	function register_my_menus() {
	  register_nav_menus(
	    array(
	      'header-menu' => __( 'Header Menu' ),
	      'extra-menu' => __( 'Extra Menu' )
	     )
	   );
	 }
	 add_action( 'init', 'register_my_menus' );
?>