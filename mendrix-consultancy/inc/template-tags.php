<?php
/**
 * Helper template tags.
 *
 * @package Mendrix_Consultancy
 */

function mendrix_consultancy_posted_on() {
$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
}

$time_string = sprintf(
$time_string,
esc_attr( get_the_date( DATE_W3C ) ),
esc_html( get_the_date() ),
esc_attr( get_the_modified_date( DATE_W3C ) ),
esc_html( get_the_modified_date() )
);
echo '<span class="posted-on">' . esc_html__( 'Published on', 'mendrix-consultancy' ) . ' ' . $time_string . '</span>';
}

function mendrix_consultancy_posted_by() {
printf(
'<span class="byline">' . esc_html__( 'By %s', 'mendrix-consultancy' ) . '</span>',
'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
);
}

function mendrix_consultancy_entry_footer() {
if ( 'post' === get_post_type() ) {
$categories_list = get_the_category_list( esc_html__( ', ', 'mendrix-consultancy' ) );
if ( $categories_list ) {
echo '<span class="cat-links">' . esc_html__( 'Filed under', 'mendrix-consultancy' ) . ' ' . $categories_list . '</span>';
}
}
if ( comments_open() ) {
comments_popup_link( esc_html__( 'Leave a comment', 'mendrix-consultancy' ), esc_html__( '1 Comment', 'mendrix-consultancy' ), esc_html__( '% Comments', 'mendrix-consultancy' ) );
}
}
