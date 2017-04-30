<?php
// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

function socialnerds_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script(
		'jquery',
		get_stylesheet_directory_uri() . '/libs/jquery/dist/jquery.min.js'
	);
	wp_enqueue_script(
		'jquery'
	);
	wp_enqueue_script(
		'bootstrap',
		get_stylesheet_directory_uri() . '/libs/bootstrap/dist/js/bootstrap.min.js'
	);
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}

// Add scripts and styles to theme.
add_action('wp_enqueue_scripts', 'socialnerds_scripts');

register_nav_menus( array(
	'socialnerds' => __('SocialNerds'),
) );
