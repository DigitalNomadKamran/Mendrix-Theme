<?php
/**
 * Title: Centered CTA
 * Slug: mendrix-consultancy/cta-banner
 * Categories: mendrix-cta
 * Description: Bold call-to-action section.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/cta-1920x1080.png' ); ?>","dimRatio":70,"overlayColor":"primary","minHeight":360,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}}} -->
<div class="wp-block-cover" style="padding-top:4rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Business skyline" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cta-1920x1080.png' ); ?>" data-object-fit="cover" /><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"animate-on-scroll","layout":{"type":"constrained","contentSize":"780px"},"style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"3xl"} -->
<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-3xl-font-size">Ready to unlock your Malaysia strategy?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"background"} -->
<p class="has-text-align-center has-background-color has-text-color">Book a 30-minute consultation to review eligibility, compliance requirements, and next steps.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-background-color has-primary-color has-text-color wp-element-button" href="/book-consultation/">Book Consultation</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","textColor":"background"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="/contact/">Talk to an Expert</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
