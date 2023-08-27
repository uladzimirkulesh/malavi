<?php
/**
 * Malavi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Malavi
 * @since Malavi 1.0
 */

if ( ! function_exists( 'silence_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Malavi 1.0
	 *
	 * @return void
	 */
	function silence_support() {

		// Enqueue editor styles.
		add_editor_style( array( 'style.css' ) );

	}

endif;

add_action( 'after_setup_theme', 'silence_support' );

if ( ! function_exists( 'silence_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Malavi 1.0
	 *
	 * @return void
	 */
	function silence_styles() {

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register main stylesheet.
		wp_register_style(
			'malavi-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue main stylesheet.
		wp_enqueue_style( 'malavi-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'silence_styles' );

if ( ! function_exists( 'silence_register_pattern_categories' ) ) :

	/**
	 * Registers pattern categories.
	 *
	 * @since Malavi 1.0
	 *
	 * @return void
	 */
	function silence_register_pattern_categories() {

		register_block_pattern_category(
			'malavi',
			array( 'label' => esc_html__( 'Malavi Theme', 'malavi' ) )
		);

	}

endif;

add_action( 'init', 'silence_register_pattern_categories', 9 );
