<?php
/**
 * APM Consulting Theme Style script
 *
 * @package APM Consulting
 */

function apm_scripts() {
	wp_enqueue_style( 'google-font-inter', '//fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap' );
	wp_enqueue_style( 'google-font-inter-tight', '//fonts.googleapis.com/css2?family=Inter+Tight:wght@600&display=swap' );
	
	wp_enqueue_style( 'bootstrap-grid', APM_ROOT_CSS . '/bootstrap-grid.min.css' );
	wp_enqueue_style( 'hc-offcanvas-nav', APM_ROOT_CSS . '/hc-offcanvas-nav.css' );
	wp_enqueue_style( 'fontawesome', APM_ROOT_CSS . '/fontawesome.min.css' );
	wp_enqueue_style( 'apm-main-style', APM_ROOT_CSS . '/style.css', [], APM_VERSION );
	wp_enqueue_style( 'apm-main-responsive', APM_ROOT_CSS . '/responsive.css', [], APM_VERSION );
	wp_enqueue_style( 'apm-style', get_stylesheet_uri(), [], APM_VERSION );

	wp_enqueue_script( 'hc-offcanvas-nav', APM_ROOT_JS . '/hc-offcanvas-nav.js', ['jquery'], '6.1.5', true );
	wp_enqueue_script( 'apm-script', APM_ROOT_JS . '/main.js', ['jquery'], APM_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'apm_scripts' );