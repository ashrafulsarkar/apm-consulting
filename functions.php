<?php
/**
 * APM Consulting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package APM Consulting
 */

/**=======================================
 * THEME VERSION CONTROL
=======================================*/
define( 'APM_VERSION', wp_get_theme()->get( 'Version' ) );

/**=======================================
 * DEFINE FILE FOLDER ROOT
=======================================*/
define( 'APM_ROOT', get_template_directory() );
define( 'APM_ROOT_URI', get_template_directory_uri() );
define( 'APM_ROOT_CSS', APM_ROOT_URI . '/assets/css' );
define( 'APM_ROOT_JS', APM_ROOT_URI . '/assets/js' );
define( 'APM_ROOT_IMG', APM_ROOT_URI . '/assets/images' );
define( 'APM_ROOT_FONTS', APM_ROOT_URI . '/assets/fonts' );

/**======================================
 * ADD THEME AFTER SETUP FUNCTIONALITY
=======================================*/
if ( file_exists( APM_ROOT . '/inc/setup.php' ) ) {
	require_once APM_ROOT . '/inc/setup.php';
}

/**==============================
 * Enqueue scripts and styles.
===============================*/
if ( file_exists( APM_ROOT . '/inc/scripts.php' ) ) {
	require_once APM_ROOT . '/inc/scripts.php';
}

/**======================================
 * Codestar framework.
======================================*/
if ( file_exists( APM_ROOT . '/inc/csf/codestar-framework.php' ) ) {
	require_once APM_ROOT . '/inc/csf/codestar-framework.php';
}

/**======================================
 * Codestar framework Custom Option.
======================================*/
if ( file_exists( APM_ROOT . '/inc/csf_customize/codestar.php' ) ) {
	require_once APM_ROOT . '/inc/csf_customize/codestar.php';
}

/**======================================
 * Custom Functions.
======================================*/
if ( file_exists( APM_ROOT . '/inc/custom-functions.php' ) ) {
	require_once APM_ROOT . '/inc/custom-functions.php';
}

/**==============================================================
 * TGM plugin installer.
==============================================================*/
if ( file_exists( APM_ROOT . '/inc/installer.php' ) ) {
	require_once APM_ROOT . '/inc/installer.php';
}

/**============================
 * Customizer additions.
============================*/
if ( file_exists( APM_ROOT . '/inc/customizer.php' ) ) {
	require_once APM_ROOT . '/inc/customizer.php';
}

/**=====================================
 * Load Jetpack compatibility file.
=====================================*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require APM_ROOT . '/inc/jetpack.php';
}