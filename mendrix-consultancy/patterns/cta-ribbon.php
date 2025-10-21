<?php
/**
 * Title: CTA Ribbon Accent
 * Slug: mendrix-consultancy/cta-ribbon
 * Categories: mendrix-business
 * Keywords: ribbon, cta, banner
 * Description: Bold diagonal ribbon CTA with Playfair headline and dual actions.
 * Viewport Width: 1100
 *
 * Usage: Keep .mendrix-ribbon for decorative accent; update text and links as needed.
 */
?>
<!-- wp:group {"className":"mendrix-ribbon anim-fade-up","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--xl)","right":"var(--wp--preset--spacing--xl)"},"blockGap":"var(--wp--preset--spacing--md)"}},"layout":{"type":"constrained","contentSize":"var(--wp--custom--layout--wide)"},"lock":{"move":false,"remove":false}} -->
<div class="wp-block-group mendrix-ribbon anim-fade-up" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><!-- wp:heading {"textAlign":"left","fontSize":"3xl","textColor":"background"} -->
<h2 class="wp-block-heading has-text-align-left has-3xl-font-size has-background-color has-text-color"><?php echo esc_html__( 'Launch with confidence. Stay compliant without the scramble.', 'mendrix-consultancy' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color"><?php echo esc_html__( 'From EMGS submissions to Bank Negara engagements, Mendrix pairs experienced strategists with your internal team.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"btn--pill"} -->
<div class="wp-block-button btn--pill"><a class="wp-block-button__link wp-element-button" href="/book-consultation/">
<?php echo esc_html__( 'Book Consultation', 'mendrix-consultancy' ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"btn--ghost"} -->
<div class="wp-block-button btn--ghost"><a class="wp-block-button__link wp-element-button" href="/services/">
<?php echo esc_html__( 'See all services', 'mendrix-consultancy' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
