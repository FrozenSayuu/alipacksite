<?php

if (!function_exists('alipacksite_setup')) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since CrazyMindTheme 1.0
*/
function alipacksite_setup()
{
    register_nav_menus( array(
        'primary'   => esc_html__( 'Main navigation', 'alipacksite' ),
        'footer' => esc_html__( 'Footer navigation', 'alipacksite' ),
    ) );

    add_theme_support( 'post-formats', [
        'gallery',
        'image',
        'quote',
        'video',
    ] );
    // Add theme support for Automatic Feed Links
    add_theme_support( 'automatic-feed-links' );

    // Add theme support for Featured Images
    add_theme_support( 'post-thumbnails' );

    // Add theme support for Custom Background
    $background_args = [
        'default-color'          => '',
        'default-image'          => '',
        'default-repeat'         => '',
        'default-position-x'     => '',
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    ];
    //add_theme_support( 'custom-background', $background_args );

    // Add theme support for Custom Header
    $header_args = [
        'default-image'      => '',
        'width'              => 0,
        'height'             => 0,
        'flex-width'         => true,
        'flex-height'        => true,
        'uploads'            => true,
        'random-default'     => false,
        'header-text'        => true,
        'default-text-color' => 'OOOO',
        'video'              => true,
    ];
    add_theme_support( 'custom-header', $header_args );

    // Add theme support for HTML5 Semantic Markup
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );

    // Add theme support for document Title tag
    add_theme_support( 'title-tag' );

    // Add theme support for gallery predetermined sizes
    add_image_size('alipacksite-gallery', '500', '300', true);
}

add_action('after_setup_theme', 'alipacksite_setup');

/**
 * Here is where we load in the css and scripts
 */
function add_theme_scripts()
{
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

/**
 * If footer nav has social links, they will be shown as icons
 */
function social_link_classes( $classes, $item, $args ) {
	if ( 'footer' === $args->theme_location ) {
		$classes[] = "social-link";
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'social_link_classes', 10, 4 );

endif;