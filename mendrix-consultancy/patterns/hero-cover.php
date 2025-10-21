<?php
/**
 * Title: Hero Cover
 * Slug: mendrix-consultancy/hero-cover
 * Categories: mendrix-hero
 * Keywords: hero, cover, banner
 * Block Types: core/cover
 * Description: Bold hero cover with dual call to action.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-1920x1080.png' ); ?>","dimRatio":60,"overlayColor":"dark","className":"is-style-mendrix-hero","minHeight":640,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}}} -->
<div class="wp-block-cover is-style-mendrix-hero" style="padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Malaysia city skyline" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-1920x1080.png' ); ?>" data-object-fit="cover" /><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"animate-on-scroll","layout":{"type":"constrained","contentSize":"780px"},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-group"><!-- wp:heading {"textColor":"background","fontSize":"4xl"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-4xl-font-size">Confident Pathways to Malaysia</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"background","fontSize":"lg"} -->
<p class="has-background-color has-text-color has-lg-font-size">From student visas to market entry, Mendrix Consultancy engineers approvals with precision and Malaysia-specific insight.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/book-consultation/">Book Consultation</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","backgroundColor":"background","textColor":"primary"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-background-color has-primary-color has-text-color has-background wp-element-button" href="/services/">See Services</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
<div class="wp-block-group"><!-- wp:image {"id":1,"width":48,"height":48,"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon-shield.png' ); ?>" alt="Shield icon" width="48" height="48"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"background","fontSize":"sm"} -->
<p class="has-background-color has-text-color has-sm-font-size">Licensed consultants aligned with Malaysian Immigration and Education Malaysia Global Services.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
<div class="wp-block-group"><!-- wp:image {"id":2,"width":48,"height":48,"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon-clock.png' ); ?>" alt="Clock icon" width="48" height="48"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"background","fontSize":"sm"} -->
<p class="has-background-color has-text-color has-sm-font-size">Turnaround tracking with transparent milestones and WhatsApp status alerts.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
