<?php
/**
 * Title: Results Metrics Wall
 * Slug: mendrix-consultancy/results-metrics-wall
 * Categories: mendrix-business
 * Keywords: metrics, results, impact
 * Description: Grid of results tiles with supporting copy for credibility highlights.
 * Viewport Width: 1100
 *
 * Usage: Adjust metrics text but keep .mendrix-metrics-grid for consistent layout.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)"},"blockGap":"var(--wp--preset--spacing--lg)"}},"layout":{"type":"constrained","contentSize":"var(--wp--custom--layout--wide)"},"className":"anim-fade-up","lock":{"move":false,"remove":false}} -->
<div class="wp-block-group anim-fade-up" style="padding-top:var(--wp--preset--spacing--2xl);padding-bottom:var(--wp--preset--spacing--2xl)"><!-- wp:heading {"textAlign":"center","fontSize":"3xl"} -->
<h2 class="wp-block-heading has-text-align-center has-3xl-font-size"><?php echo esc_html__( 'Numbers that reflect real approvals and launches', 'mendrix-consultancy' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Each metric is audited quarterly so you can evaluate Mendrix like a board would—on outcomes.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"mendrix-metrics-grid anim-scale","layout":{"type":"default"},"lock":{"move":false,"remove":false}} -->
<div class="wp-block-group mendrix-metrics-grid anim-scale"><!-- wp:group {"className":"metric"} -->
<div class="wp-block-group metric"><!-- wp:paragraph -->
<p><strong>95%</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size"><?php echo esc_html__( 'Visa approvals on complete Mendrix-managed files', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"metric"} -->
<div class="wp-block-group metric"><!-- wp:paragraph -->
<p><strong>200+</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size"><?php echo esc_html__( 'Market entries launched across ASEAN and GCC clients', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"metric"} -->
<div class="wp-block-group metric"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( '14 days', 'mendrix-consultancy' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size"><?php echo esc_html__( 'Average time to produce compliance-ready project plan', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"metric"} -->
<div class="wp-block-group metric"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( '4.9/5', 'mendrix-consultancy' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size"><?php echo esc_html__( 'Client satisfaction score across post-project surveys', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"metric"} -->
<div class="wp-block-group metric"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( '10+', 'mendrix-consultancy' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size"><?php echo esc_html__( 'Jurisdictions supported through our partner network', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"metric"} -->
<div class="wp-block-group metric"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( '7 hrs', 'mendrix-consultancy' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size"><?php echo esc_html__( 'Average response time on compliance escalations', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
