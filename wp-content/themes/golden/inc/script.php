<?php

function golden_scripts () {

	/*wp_enqueue_style( 'golden-font-lato', 'https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' );
	wp_enqueue_style( 'golden-font-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
	wp_enqueue_style( 'golden-bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');

	//Main Style
	wp_enqueue_style( 'golden-style', get_stylesheet_uri() );

	//Default Scripts
	wp_enqueue_script( 'golden-jquery-script', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', [], '1.0', true );
	wp_enqueue_script( 'golden-bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', [], '1.0', true );
	wp_enqueue_script( 'golden-script', get_template_directory_uri() . '/js/script.js', [], '1.0', true );*/


	wp_enqueue_style('bootstrapCSS', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('bootstrapGlyph', get_template_directory_uri() . '/css/bootstrap-glyphicons.css', [], '1.0.0', 'all');
	wp_enqueue_style('golden-style', get_stylesheet_uri());
	wp_enqueue_script('modernizerJs', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', [], '2.0.0', false);
	wp_enqueue_script('jquery', true);
	wp_enqueue_script('bootstrapJs', get_template_directory_uri() . '/js/bootstrap.min.js', [], '3.0.0', true);
	wp_enqueue_script('customJs', get_template_directory_uri() . '/js/script.js', [], '1.0.0', true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action('wp_enqueue_scripts', 'golden_scripts');

?>