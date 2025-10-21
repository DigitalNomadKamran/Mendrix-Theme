<?php
/**
 * One Click Demo Import integration.
 *
 * @package Mendrix_Consultancy
 */

if ( ! function_exists( 'mendrix_consultancy_ocdi_import_files' ) ) {
function mendrix_consultancy_ocdi_import_files() {
return array(
array(
'import_file_name'           => __( 'Mendrix Consultancy Demo', 'mendrix-consultancy' ),
'categories'                  => array( 'Consultancy' ),
'import_file_url'             => '',
'import_file_path'            => MENDRIX_CONSULTANCY_PATH . 'demo/content.xml',
'import_preview_image_url'    => MENDRIX_CONSULTANCY_URI . 'demo/preview-home.png',
'import_notice'               => __( 'Ensure the required plugins such as Contact Form 7 are activated before importing.', 'mendrix-consultancy' ),
'import_widget_file_url'      => '',
'import_widget_file_path'     => MENDRIX_CONSULTANCY_PATH . 'demo/widgets.json',
'import_customizer_file_url'  => '',
'import_customizer_file_path' => MENDRIX_CONSULTANCY_PATH . 'demo/customizer.dat',
),
);
}
}

add_filter( 'ocdi/import_files', 'mendrix_consultancy_ocdi_import_files' );

if ( ! function_exists( 'mendrix_consultancy_ocdi_after_import' ) ) {
function mendrix_consultancy_ocdi_after_import( $selected_import ) {
// Set menus.
$primary_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
$footer_menu  = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

if ( $primary_menu ) {
set_theme_mod( 'nav_menu_locations', array(
'primary' => $primary_menu->term_id,
'footer'  => $footer_menu ? $footer_menu->term_id : 0,
) );
}

// Set front and blog pages.
$front_page = get_page_by_title( 'Home' );
$blog_page  = get_page_by_title( 'Blog' );

if ( $front_page && $blog_page ) {
update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $front_page->ID );
update_option( 'page_for_posts', $blog_page->ID );
}

// Assign logo if imported.
$logo = get_page_by_title( 'Mendrix Logo', OBJECT, 'attachment' );
if ( $logo ) {
set_theme_mod( 'custom_logo', $logo->ID );
}
}
}
add_action( 'ocdi/after_import', 'mendrix_consultancy_ocdi_after_import' );
