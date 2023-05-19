<?php
/**
 * Silence functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Silence
 * @since Silence 1.0
 */

if ( ! function_exists( 'silence_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Silence 1.0
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
	 * @since Silence 1.0
	 *
	 * @return void
	 */
	function silence_styles() {

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register main stylesheet.
		wp_register_style(
			'silence-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue main stylesheet.
		wp_enqueue_style( 'silence-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'silence_styles' );

if ( ! function_exists( 'silence_register_pattern_categories' ) ) :

	/**
	 * Registers pattern categories.
	 *
	 * @since Silence 1.0
	 *
	 * @return void
	 */
	function silence_register_pattern_categories() {

		register_block_pattern_category(
			'silence',
			array( 'label' => esc_html__( 'Silence', 'silense' ) )
		);

	}

endif;

add_action( 'init', 'silence_register_pattern_categories', 9 );

if ( ! function_exists( 'silence_excerpt_more' ) ) :

	/**
	 * Replaces "[...]" (appended to automatically generated excerpts) with "...".
	 *
	 * @since Silence 1.0
	 *
	 * @return string Ellipsis.
	 */
	function silence_excerpt_more() {

		return '&hellip;';

	}

endif;

add_filter( 'excerpt_more', 'silence_excerpt_more' );

if ( ! function_exists( 'silence_custom_excerpt_length' ) ) :

	/**
	 * Filters the maximum number of words in a post excerpt.
	 *
	 * @since Silence 1.0
	 *
	 * @param int $length Maximum number of words in a post excerpt.
	 */
	function silence_custom_excerpt_length( $length ) {

		return 35;

	}

endif;

add_filter( 'excerpt_length', 'silence_custom_excerpt_length', 999 );
