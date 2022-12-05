<?php
function mg_enqueue() {
	//Fonts
	wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Poppins:100,300,400,400i,500,600,700,800,900' );
	
	if ( ! is_admin() ) {
		wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/dist/css/style.min.css');
    }
}
add_action( 'wp_enqueue_scripts', 'mg_enqueue' );