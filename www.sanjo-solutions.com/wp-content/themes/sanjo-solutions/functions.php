<?php

function sanjo_solutions_wp_enqueue_styles() {
    wp_enqueue_style( 'sanjo-solutions-bootstrap',
		get_stylesheet_directory_uri() . '/bootstrap.min.css',
		array(),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
	wp_enqueue_style( 'sanjo-solutions-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}

add_action( 'wp_enqueue_scripts', 'sanjo_solutions_wp_enqueue_styles' );

function sanjo_solutions_after_setup_theme() {
	add_editor_style(array(
		get_stylesheet_directory_uri() . '/bootstrap.min.css',
		get_stylesheet_uri()
	));
}

add_action( 'after_setup_theme', 'sanjo_solutions_after_setup_theme' );
