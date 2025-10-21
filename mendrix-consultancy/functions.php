<?php
/**
 * Theme functions for Mendrix Consultancy.
 *
 * @package Mendrix_Consultancy
 */

define( 'MENDRIX_CONSULTANCY_VERSION', '1.0.0' );

define( 'MENDRIX_CONSULTANCY_PATH', trailingslashit( get_template_directory() ) );
define( 'MENDRIX_CONSULTANCY_URI', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'mendrix_consultancy_setup' ) ) {
function mendrix_consultancy_setup() {
load_theme_textdomain( 'mendrix-consultancy', MENDRIX_CONSULTANCY_PATH . 'languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'editor-styles' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'custom-logo', array(
'height'      => 48,
'width'       => 180,
'flex-width'  => true,
'flex-height' => true,
) );
register_nav_menus(
array(
'primary' => __( 'Primary Menu', 'mendrix-consultancy' ),
'footer'  => __( 'Footer Menu', 'mendrix-consultancy' ),
)
);
}
}
add_action( 'after_setup_theme', 'mendrix_consultancy_setup' );

function mendrix_consultancy_scripts() {
$fonts_url = 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap';
wp_enqueue_style( 'mendrix-consultancy-fonts', $fonts_url, array(), null );
wp_enqueue_style( 'mendrix-consultancy-style', MENDRIX_CONSULTANCY_URI . 'styles/theme.css', array(), MENDRIX_CONSULTANCY_VERSION );
wp_enqueue_style( 'mendrix-consultancy-aos', MENDRIX_CONSULTANCY_URI . 'assets/css/aos.css', array(), MENDRIX_CONSULTANCY_VERSION );
wp_enqueue_style( 'mendrix-consultancy-swiper', MENDRIX_CONSULTANCY_URI . 'assets/css/swiper.css', array(), MENDRIX_CONSULTANCY_VERSION );

wp_enqueue_script( 'mendrix-consultancy-aos', MENDRIX_CONSULTANCY_URI . 'assets/js/aos.js', array(), MENDRIX_CONSULTANCY_VERSION, true );
wp_enqueue_script( 'mendrix-consultancy-swiper', MENDRIX_CONSULTANCY_URI . 'assets/js/swiper.js', array(), MENDRIX_CONSULTANCY_VERSION, true );
wp_enqueue_script( 'mendrix-consultancy-theme', MENDRIX_CONSULTANCY_URI . 'assets/js/theme.js', array( 'mendrix-consultancy-aos', 'mendrix-consultancy-swiper' ), MENDRIX_CONSULTANCY_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'mendrix_consultancy_scripts' );

function mendrix_consultancy_editor_assets() {
wp_enqueue_style( 'mendrix-consultancy-editor-style', MENDRIX_CONSULTANCY_URI . 'styles/editor.css', array(), MENDRIX_CONSULTANCY_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'mendrix_consultancy_editor_assets' );

function mendrix_consultancy_register_pattern_categories() {
register_block_pattern_category( 'mendrix-hero', array( 'label' => __( 'Mendrix Hero', 'mendrix-consultancy' ) ) );
register_block_pattern_category( 'mendrix-sections', array( 'label' => __( 'Mendrix Sections', 'mendrix-consultancy' ) ) );
register_block_pattern_category( 'mendrix-cta', array( 'label' => __( 'Mendrix CTA', 'mendrix-consultancy' ) ) );
register_block_pattern_category( 'mendrix-lists', array( 'label' => __( 'Mendrix Lists & FAQs', 'mendrix-consultancy' ) ) );
register_block_pattern_category( 'mendrix-media', array( 'label' => __( 'Mendrix Media', 'mendrix-consultancy' ) ) );
register_block_pattern_category( 'mendrix-contact', array( 'label' => __( 'Mendrix Contact', 'mendrix-consultancy' ) ) );
}
add_action( 'init', 'mendrix_consultancy_register_pattern_categories' );

function mendrix_consultancy_skip_link() {
echo '<a class="skip-link screen-reader-text" href="#primary">' . esc_html__( 'Skip to content', 'mendrix-consultancy' ) . '</a>';
}
add_action( 'wp_body_open', 'mendrix_consultancy_skip_link', 5 );

require_once MENDRIX_CONSULTANCY_PATH . 'inc/demo-import.php';
require_once MENDRIX_CONSULTANCY_PATH . 'inc/template-tags.php';
