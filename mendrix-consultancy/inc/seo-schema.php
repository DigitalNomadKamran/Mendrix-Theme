<?php
/**
 * JSON-LD helpers for Mendrix Consultancy.
 *
 * @package Mendrix_Consultancy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Collect FAQ items from the current request content.
 *
 * @return array
 */
function mendrix_consultancy_extract_faq_items() {
    if ( ! function_exists( 'parse_blocks' ) ) {
        return array();
    }

    if ( ! function_exists( 'mendrix_consultancy_collect_markup_fragments' ) ) {
        return array();
    }

    $content = mendrix_consultancy_collect_markup_fragments();

    if ( empty( $content ) ) {
        return array();
    }

    $blocks = parse_blocks( $content );

    $items = mendrix_consultancy_walk_blocks_for_faq( $blocks );

    return $items;
}

/**
 * Recursive helper to locate core/details blocks and map them to FAQ entries.
 *
 * @param array $blocks Parsed blocks.
 * @return array
 */
function mendrix_consultancy_walk_blocks_for_faq( $blocks ) {
    $items = array();

    foreach ( $blocks as $block ) {
        if ( isset( $block['blockName'] ) && 'core/details' === $block['blockName'] ) {
            $question = '';
            if ( isset( $block['attrs']['summary'] ) ) {
                $question = wp_strip_all_tags( $block['attrs']['summary'] );
            }

            if ( ! $question && isset( $block['innerBlocks'][0]['innerHTML'] ) ) {
                $question = wp_strip_all_tags( $block['innerBlocks'][0]['innerHTML'] );
            }

            $answer_content = '';
            if ( isset( $block['innerBlocks'] ) ) {
                foreach ( $block['innerBlocks'] as $inner_block ) {
                    if ( isset( $inner_block['blockName'] ) && 'core/paragraph' === $inner_block['blockName'] ) {
                        $answer_content .= ' ' . wp_strip_all_tags( render_block( $inner_block ) );
                    } elseif ( isset( $inner_block['innerHTML'] ) ) {
                        $answer_content .= ' ' . wp_strip_all_tags( $inner_block['innerHTML'] );
                    }
                }
            }

            $answer_content = trim( $answer_content );

            if ( $question && $answer_content ) {
                $items[] = array(
                    '@type' => 'Question',
                    'name'  => $question,
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => $answer_content,
                    ),
                );
            }
        }

        if ( ! empty( $block['innerBlocks'] ) ) {
            $items = array_merge( $items, mendrix_consultancy_walk_blocks_for_faq( $block['innerBlocks'] ) );
        }
    }

    return $items;
}

/**
 * Build breadcrumb items.
 *
 * @return array
 */
function mendrix_consultancy_build_breadcrumb_list() {
    if ( is_front_page() ) {
        return array();
    }

    $items   = array();
    $position = 1;
    $home_url = home_url( '/' );

    $items[] = array(
        '@type'    => 'ListItem',
        'position' => $position++,
        'name'     => get_bloginfo( 'name' ),
        'item'     => $home_url,
    );

    if ( is_singular() ) {
        $ancestors = array_reverse( get_post_ancestors( get_queried_object_id() ) );
        foreach ( $ancestors as $ancestor_id ) {
            $items[] = array(
                '@type'    => 'ListItem',
                'position' => $position++,
                'name'     => get_the_title( $ancestor_id ),
                'item'     => get_permalink( $ancestor_id ),
            );
        }

        $items[] = array(
            '@type'    => 'ListItem',
            'position' => $position++,
            'name'     => get_the_title(),
            'item'     => get_permalink(),
        );
    } elseif ( is_archive() ) {
        $archive_url = is_post_type_archive() ? get_post_type_archive_link( get_post_type() ) : get_term_link( get_queried_object() );
        if ( ! is_wp_error( $archive_url ) ) {
            $items[] = array(
                '@type'    => 'ListItem',
                'position' => $position++,
                'name'     => wp_get_document_title(),
                'item'     => esc_url( $archive_url ),
            );
        }
    } elseif ( is_search() ) {
        $items[] = array(
            '@type'    => 'ListItem',
            'position' => $position++,
            'name'     => sprintf( /* translators: %s: search query */ esc_html__( 'Search results for "%s"', 'mendrix-consultancy' ), get_search_query() ),
            'item'     => home_url( add_query_arg( array( 's' => get_search_query() ), '' ) ),
        );
    } elseif ( is_404() ) {
        $items[] = array(
            '@type'    => 'ListItem',
            'position' => $position++,
            'name'     => esc_html__( '404 Not Found', 'mendrix-consultancy' ),
            'item'     => home_url( $_SERVER['REQUEST_URI'] ?? '' ),
        );
    }

    return $items;
}

/**
 * Print schema.org graphs for the front end.
 */
function mendrix_consultancy_output_schema_graph() {
    if ( is_admin() || ! apply_filters( 'mendrix_enable_schema', true ) ) {
        return;
    }

    $graph    = array();
    $site_url = home_url( '/' );
    $site_name = get_bloginfo( 'name' );
    $site_description = get_bloginfo( 'description' );

    $organization = array(
        '@type' => 'Organization',
        '@id'   => $site_url . '#organization',
        'name'  => $site_name,
        'url'   => $site_url,
    );

    $logo_id = get_theme_mod( 'custom_logo' );
    if ( $logo_id ) {
        $logo = wp_get_attachment_image_src( $logo_id, 'full' );
        if ( $logo ) {
            $organization['logo'] = array(
                '@type' => 'ImageObject',
                'url'   => $logo[0],
                'width' => $logo[1],
                'height'=> $logo[2],
            );
        }
    }

    $contact_phone = get_theme_mod( 'mendrix_phone', '' );
    if ( $contact_phone ) {
        $organization['telephone'] = $contact_phone;
    }

    $contact_email = get_theme_mod( 'mendrix_email', get_option( 'admin_email' ) );
    if ( $contact_email ) {
        $organization['email'] = $contact_email;
    }

    if ( $site_description ) {
        $organization['description'] = $site_description;
    }

    $graph[] = $organization;

    $website = array(
        '@type' => 'WebSite',
        '@id'   => $site_url . '#website',
        'name'  => $site_name,
        'url'   => $site_url,
        'publisher' => array( '@id' => $site_url . '#organization' ),
        'potentialAction' => array(
            '@type'       => 'SearchAction',
            'target'      => esc_url( home_url( '?s={search_term_string}' ) ),
            'query-input' => 'required name=search_term_string',
        ),
    );

    $graph[] = $website;

    $breadcrumbs = mendrix_consultancy_build_breadcrumb_list();
    if ( ! empty( $breadcrumbs ) ) {
        $graph[] = array(
            '@type'            => 'BreadcrumbList',
            '@id'              => $site_url . '#breadcrumb',
            'itemListElement'  => $breadcrumbs,
        );
    }

    $faq_items = mendrix_consultancy_extract_faq_items();
    if ( ! empty( $faq_items ) ) {
        $graph[] = array(
            '@type'       => 'FAQPage',
            '@id'         => $site_url . '#faq-' . md5( wp_json_encode( $faq_items ) ),
            'mainEntity'  => $faq_items,
        );
    }

    $graph = apply_filters( 'mendrix_schema_graph', $graph );

    if ( empty( $graph ) ) {
        return;
    }

    $payload = array(
        '@context' => 'https://schema.org',
        '@graph'   => $graph,
    );

    echo '<script type="application/ld+json">' . wp_json_encode( $payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
add_action( 'wp_head', 'mendrix_consultancy_output_schema_graph', 20 );
