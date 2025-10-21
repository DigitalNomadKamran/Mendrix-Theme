<?php
/**
 * Asset handling and conditional loading.
 *
 * @package Mendrix_Consultancy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Helper to resolve asset metadata with optional minified variants.
 *
 * @param string $relative Relative path from the theme root.
 * @return array
 */
function mendrix_consultancy_get_asset_meta( $relative ) {
    $relative = ltrim( $relative, '/' );
    $env      = wp_get_environment_type();
    $uri      = MENDRIX_CONSULTANCY_URI . $relative;

    $candidates = array( $relative );
    if ( in_array( $env, array( 'production', 'staging' ), true ) ) {
        $min_relative = preg_replace( '/\.([^.]+)$/', '.min.$1', $relative );
        if ( $min_relative && file_exists( MENDRIX_CONSULTANCY_PATH . $min_relative ) ) {
            array_unshift( $candidates, $min_relative );
        }
    }

    foreach ( $candidates as $candidate ) {
        $path = MENDRIX_CONSULTANCY_PATH . $candidate;
        if ( file_exists( $path ) ) {
            return array(
                'uri'     => MENDRIX_CONSULTANCY_URI . $candidate,
                'version' => (string) filemtime( $path ),
            );
        }
    }

    // Fallback to provided relative path even if missing on disk.
    return array(
        'uri'     => $uri,
        'version' => MENDRIX_CONSULTANCY_VERSION,
    );
}

/**
 * Determine whether current view includes animation cues.
 *
 * @return bool
 */
function mendrix_consultancy_should_load_animation() {
    static $should_load = null;

    if ( null !== $should_load ) {
        return $should_load;
    }

    $content = mendrix_consultancy_collect_markup_fragments();

    $should_load = (bool) preg_match( '/data-anim=|class="[^"]*anim-/i', $content );

    return $should_load;
}

/**
 * Determine whether slider assets are required.
 *
 * @return bool
 */
function mendrix_consultancy_should_load_slider() {
    static $should_load = null;

    if ( null !== $should_load ) {
        return $should_load;
    }

    $content = mendrix_consultancy_collect_markup_fragments();

    if ( false !== stripos( $content, 'js-slider' ) || false !== stripos( $content, 'testimonial-slider' ) ) {
        $should_load = true;
        return $should_load;
    }

    if ( function_exists( 'parse_blocks' ) && ! empty( $content ) ) {
        $blocks       = parse_blocks( $content );
        $should_load  = mendrix_consultancy_block_list_contains_pattern( $blocks, 'mendrix-consultancy/testimonial-slider' );
        return $should_load;
    }

    $should_load = false;
    return $should_load;
}

/**
 * Recursively inspect blocks for a given pattern slug.
 *
 * @param array  $blocks Parsed blocks.
 * @param string $slug   Pattern slug to match.
 * @return bool
 */
function mendrix_consultancy_block_list_contains_pattern( $blocks, $slug ) {
    foreach ( $blocks as $block ) {
        if ( isset( $block['blockName'], $block['attrs'] ) && 'core/pattern' === $block['blockName'] ) {
            if ( isset( $block['attrs']['slug'] ) && $slug === $block['attrs']['slug'] ) {
                return true;
            }
        }

        if ( ! empty( $block['innerBlocks'] ) && mendrix_consultancy_block_list_contains_pattern( $block['innerBlocks'], $slug ) ) {
            return true;
        }
    }

    return false;
}

/**
 * Gather markup fragments from the current request context.
 *
 * @return string
 */
function mendrix_consultancy_collect_markup_fragments() {
    if ( is_admin() || wp_doing_ajax() ) {
        return '';
    }

    $content = '';

    if ( is_singular() ) {
        $post = get_queried_object();
        if ( $post instanceof WP_Post ) {
            $content .= (string) $post->post_content;
        }
    }

    if ( is_front_page() && 'page' === get_option( 'show_on_front' ) ) {
        $front_page_id = (int) get_option( 'page_on_front' );
        if ( $front_page_id && ( ! is_singular() || get_queried_object_id() !== $front_page_id ) ) {
            $content .= (string) get_post_field( 'post_content', $front_page_id );
        }
    }

    global $wp_query;
    if ( $wp_query instanceof WP_Query && ! is_singular() && ! empty( $wp_query->posts ) ) {
        foreach ( $wp_query->posts as $loop_post ) {
            if ( $loop_post instanceof WP_Post ) {
                $content .= (string) $loop_post->post_content;
            }
        }
    }

    return $content;
}

/**
 * Register and enqueue front-end assets.
 */
function mendrix_consultancy_enqueue_theme_assets() {
    $fonts_url = 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap';
    wp_enqueue_style( 'mendrix-consultancy-fonts', $fonts_url, array(), null );

    $theme_css = mendrix_consultancy_get_asset_meta( 'styles/theme.css' );
    wp_enqueue_style( 'mendrix-consultancy-style', $theme_css['uri'], array(), $theme_css['version'] );

    $theme_js = mendrix_consultancy_get_asset_meta( 'assets/js/theme.js' );
    wp_enqueue_script( 'mendrix-consultancy-theme', $theme_js['uri'], array(), $theme_js['version'], true );

    if ( mendrix_consultancy_should_load_animation() ) {
        $anim_css = mendrix_consultancy_get_asset_meta( 'assets/css/anim.css' );
        wp_enqueue_style( 'mendrix-consultancy-anim', $anim_css['uri'], array(), $anim_css['version'] );

        $aos_css = mendrix_consultancy_get_asset_meta( 'assets/css/aos.css' );
        wp_enqueue_style( 'mendrix-consultancy-aos', $aos_css['uri'], array(), $aos_css['version'] );

        $aos_js  = mendrix_consultancy_get_asset_meta( 'assets/js/aos.js' );
        $anim_js = mendrix_consultancy_get_asset_meta( 'assets/js/anim.js' );

        wp_enqueue_script( 'mendrix-consultancy-aos', $aos_js['uri'], array(), $aos_js['version'], true );
        wp_enqueue_script( 'mendrix-consultancy-anim', $anim_js['uri'], array(), $anim_js['version'], true );
    }

    if ( mendrix_consultancy_should_load_slider() ) {
        $slider_css = mendrix_consultancy_get_asset_meta( 'assets/css/sliders.css' );
        $swiper_css = mendrix_consultancy_get_asset_meta( 'assets/css/swiper.css' );
        $swiper_js  = mendrix_consultancy_get_asset_meta( 'assets/js/swiper.js' );

        wp_enqueue_style( 'mendrix-consultancy-sliders', $slider_css['uri'], array(), $slider_css['version'] );
        wp_enqueue_style( 'mendrix-consultancy-swiper', $swiper_css['uri'], array( 'mendrix-consultancy-sliders' ), $swiper_css['version'] );
        wp_enqueue_script( 'mendrix-consultancy-swiper', $swiper_js['uri'], array(), $swiper_js['version'], true );
    }
}
add_action( 'wp_enqueue_scripts', 'mendrix_consultancy_enqueue_theme_assets' );

/**
 * Enqueue editor styles for awareness of animations and sliders.
 */
function mendrix_consultancy_enqueue_editor_styles() {
    $editor_style = mendrix_consultancy_get_asset_meta( 'styles/editor.css' );
    wp_enqueue_style( 'mendrix-consultancy-editor-style', $editor_style['uri'], array(), $editor_style['version'] );

    $anim_css   = mendrix_consultancy_get_asset_meta( 'assets/css/anim.css' );
    $slider_css = mendrix_consultancy_get_asset_meta( 'assets/css/sliders.css' );

    wp_enqueue_style( 'mendrix-consultancy-editor-anim', $anim_css['uri'], array( 'mendrix-consultancy-editor-style' ), $anim_css['version'] );
    wp_enqueue_style( 'mendrix-consultancy-editor-slider', $slider_css['uri'], array( 'mendrix-consultancy-editor-style' ), $slider_css['version'] );
}
add_action( 'enqueue_block_editor_assets', 'mendrix_consultancy_enqueue_editor_styles' );

/**
 * Defer non-critical scripts for performance.
 *
 * @param string $tag    Script tag HTML.
 * @param string $handle Script handle.
 * @param string $src    Source URL.
 * @return string
 */
function mendrix_consultancy_add_defer_attribute( $tag, $handle, $src ) {
    $handles = array(
        'mendrix-consultancy-theme',
        'mendrix-consultancy-aos',
        'mendrix-consultancy-anim',
        'mendrix-consultancy-swiper',
    );

    if ( in_array( $handle, $handles, true ) ) {
        return sprintf( '<script defer src="%1$s" id="%2$s-js"></script>' . "\n", esc_url( $src ), esc_attr( $handle ) );
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'mendrix_consultancy_add_defer_attribute', 10, 3 );
