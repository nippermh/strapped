<?php
/**
 * Enqueue scripts and styles.
 */
function strapped_scripts() {
	wp_enqueue_style( 'strapped-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'bootstrap-styles', get_stylesheet_uri() . 'bower_components/dist/css/boostrap.min.css', array(), '3.3.7', 'all' );

    wp_enqueue_script( 'strapped-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), '1.0.0', true );
    
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . 'bower_components/fontawesome/css/font-awesome.min.css', array(), '4.7.0', 'all' );
    
    wp_enqueue_style( 'google-body', '//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i');

	wp_enqueue_style( 'google-heading', '//fonts.googleapis.com/css?family=Raleway:400,300,700');
    
	wp_enqueue_script( 'strapped-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'strapped-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'strapped_scripts' );
