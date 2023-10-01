<?php
add_action( 'wp_enqueue_scripts', 'sanjo_solutions_enqueue_styles' );
function sanjo_solutions_enqueue_styles() {
	wp_enqueue_style( 'sanjo-solutions-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}

add_action('wp_head', 'sanjo_solutions_wp_head');
function sanjo_solutions_wp_head() {
	global $post;
  if ($post->ID == 31) {
		echo <<<EOT
<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
		crossorigin="anonymous"
>
EOT;
  }
}
