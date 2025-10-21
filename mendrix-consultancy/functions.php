<?php
/**
 * Theme functions for Mendrix Consultancy.
 *
 * @package Mendrix_Consultancy
 */

define( 'MENDRIX_CONSULTANCY_VERSION', '1.0.0' );

define( 'MENDRIX_CONSULTANCY_PATH', trailingslashit( get_template_directory() ) );
define( 'MENDRIX_CONSULTANCY_URI', trailingslashit( get_template_directory_uri() ) );

global $mendrix_consultancy_skip_link_part_present;
$mendrix_consultancy_skip_link_part_present = false;

if ( ! function_exists( 'mendrix_consultancy_setup' ) ) {
    function mendrix_consultancy_setup() {
        load_theme_textdomain( 'mendrix-consultancy', MENDRIX_CONSULTANCY_PATH . 'languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 48,
                'width'       => 180,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
        register_nav_menus(
            array(
                'primary' => __( 'Primary Menu', 'mendrix-consultancy' ),
                'footer'  => __( 'Footer Menu', 'mendrix-consultancy' ),
            )
        );
    }
}
add_action( 'after_setup_theme', 'mendrix_consultancy_setup' );

function mendrix_consultancy_register_pattern_categories() {
    register_block_pattern_category( 'mendrix-hero', array( 'label' => __( 'Mendrix Hero', 'mendrix-consultancy' ) ) );
    register_block_pattern_category( 'mendrix-sections', array( 'label' => __( 'Mendrix Sections', 'mendrix-consultancy' ) ) );
    register_block_pattern_category( 'mendrix-cta', array( 'label' => __( 'Mendrix CTA', 'mendrix-consultancy' ) ) );
    register_block_pattern_category( 'mendrix-lists', array( 'label' => __( 'Mendrix Lists & FAQs', 'mendrix-consultancy' ) ) );
    register_block_pattern_category( 'mendrix-media', array( 'label' => __( 'Mendrix Media', 'mendrix-consultancy' ) ) );
    register_block_pattern_category( 'mendrix-contact', array( 'label' => __( 'Mendrix Contact', 'mendrix-consultancy' ) ) );
    register_block_pattern_category( 'mendrix-business', array( 'label' => __( 'Mendrix – Business', 'mendrix-consultancy' ) ) );
}
add_action( 'init', 'mendrix_consultancy_register_pattern_categories' );

function mendrix_consultancy_reset_skip_link_flag() {
    $GLOBALS['mendrix_consultancy_skip_link_part_present'] = false;
}
add_action( 'wp', 'mendrix_consultancy_reset_skip_link_flag' );

function mendrix_consultancy_detect_skip_link_part( $block_content, $block ) {
    if ( isset( $block['blockName'], $block['attrs'] ) && 'core/template-part' === $block['blockName'] ) {
        if ( isset( $block['attrs']['slug'] ) && 'skip-link' === $block['attrs']['slug'] ) {
            $GLOBALS['mendrix_consultancy_skip_link_part_present'] = true;
        }
    }
    return $block_content;
}
add_filter( 'render_block', 'mendrix_consultancy_detect_skip_link_part', 10, 2 );

function mendrix_consultancy_skip_link() {
    if ( ! empty( $GLOBALS['mendrix_consultancy_skip_link_part_present'] ) ) {
        return;
    }

    echo '<a class="skip-link screen-reader-text" href="#primary">' . esc_html__( 'Skip to content', 'mendrix-consultancy' ) . '</a>';
}
add_action( 'wp_body_open', 'mendrix_consultancy_skip_link', 5 );

require_once MENDRIX_CONSULTANCY_PATH . 'inc/assets.php';
require_once MENDRIX_CONSULTANCY_PATH . 'inc/seo-schema.php';
require_once MENDRIX_CONSULTANCY_PATH . 'inc/demo-import.php';
require_once MENDRIX_CONSULTANCY_PATH . 'inc/template-tags.php';
