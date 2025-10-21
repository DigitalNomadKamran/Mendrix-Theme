<?php
/**
 * Title: Sticky Consultation Bar
 * Slug: mendrix-consultancy/sticky-consultation-bar
 * Categories: mendrix-business
 * Keywords: sticky, consultation, cta
 * Description: Minimal sticky call-to-action bar for quick consultation booking.
 * Viewport Width: 900
 *
 * Usage: Appears near footer; keep .mendrix-sticky-bar for styling and reduced-motion behaviour.
 */
?>
<!-- wp:group {"className":"mendrix-sticky-bar anim-slide-r","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--md)","bottom":"var(--wp--preset--spacing--md)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}},"border":{"radius":"var(--wp--custom--radius--2xl)"},"shadow":"var(--wp--custom--shadow--soft)","background":{"color":"background"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"},"lock":{"move":false,"remove":false}} -->
<div class="wp-block-group mendrix-sticky-bar anim-slide-r has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--lg)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"constrained","contentSize":"520px"}} -->
<div class="wp-block-group" style="gap:0.35rem"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><?php echo esc_html__( 'Talk to a Malaysia-certified consultant', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Ready to map your immigration or expansion timeline?', 'mendrix-consultancy' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"btn--pill"} -->
<div class="wp-block-button btn--pill"><a class="wp-block-button__link wp-element-button" href="/book-consultation/">
<?php echo esc_html__( 'Book Consultation', 'mendrix-consultancy' ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"btn--ghost"} -->
<div class="wp-block-button btn--ghost"><a class="wp-block-button__link wp-element-button" href="tel:+60300000000">
<?php echo esc_html__( 'Call Our Team', 'mendrix-consultancy' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
