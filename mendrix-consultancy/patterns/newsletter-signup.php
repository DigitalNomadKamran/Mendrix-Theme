<?php
/**
 * Title: Newsletter Signup
 * Slug: mendrix-consultancy/newsletter-signup
 * Categories: mendrix-cta
 * Description: Newsletter form section.
 */
?>
<!-- wp:group {"className":"animate-on-scroll","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"},"blockGap":"1.5rem"}},"layout":{"type":"constrained","contentSize":"780px"},"backgroundColor":"muted","className":"card-shadow"} -->
<div class="wp-block-group card-shadow has-muted-background-color has-background" style="padding-top:3rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:3rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","fontSize":"xl"} -->
<h2 class="wp-block-heading has-text-align-center has-xl-font-size">Stay ahead of Malaysia immigration updates</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Monthly digest with regulatory changes, processing times, and best practices.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-group"><!-- wp:html -->
<form action="#" method="post" class="mendrix-newsletter-form" aria-label="Newsletter signup">
  <div class="mendrix-newsletter-fields">
    <label class="screen-reader-text" for="mendrix-newsletter-email">Email</label>
    <input type="email" id="mendrix-newsletter-email" name="email" required placeholder="Email address" />
    <button type="submit">Subscribe</button>
  </div>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
