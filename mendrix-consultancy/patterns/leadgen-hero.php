<?php
/**
 * Title: Lead Generation Hero
 * Slug: mendrix-consultancy/leadgen-hero
 * Categories: mendrix-business
 * Keywords: lead, form, hero
 * Description: Split hero with copy, form placeholder, trust badges, and sticky CTA for long pages.
 * Viewport Width: 1200
 *
 * Usage: Replace the HTML form block with your form plugin shortcode; keep .mendrix-sticky-cta for optional sticky behaviour.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--3xl)","bottom":"var(--wp--preset--spacing--3xl)"}}},"layout":{"type":"constrained","contentSize":"var(--wp--custom--layout--wide)"},"lock":{"move":false,"remove":false}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)"><!-- wp:columns {"verticalAlignment":"center","className":"anim-fade-up","lock":{"move":false,"remove":false}} -->
<div class="wp-block-columns alignwide anim-fade-up"><!-- wp:column {"lock":{"move":false,"remove":false}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--sm)"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="gap:var(--wp--preset--spacing--sm)"><!-- wp:heading {"level":1,"fontSize":"4xl"} -->
<h1 class="wp-block-heading has-4xl-font-size"><?php echo esc_html__( 'Secure your Malaysian launch plan in one call', 'mendrix-consultancy' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size"><?php echo esc_html__( 'Tell us where you are in the visa or expansion journey and we will map the documentation, stakeholders, and timeline in 48 hours.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"icon-inline","style":{"typography":{"fontSize":"1rem"}}} -->
<ul class="icon-inline" style="font-size:1rem"><li><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-check"></use></svg> <?php echo esc_html__( 'Licensed visa strategists', 'mendrix-consultancy' ); ?></li><li><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-check"></use></svg> <?php echo esc_html__( 'Banking &amp; payroll onboarding support', 'mendrix-consultancy' ); ?></li><li><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-check"></use></svg> <?php echo esc_html__( 'Compliance-first project plans', 'mendrix-consultancy' ); ?></li></ul>
<!-- /wp:list -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"0.75rem"}},"className":"mendrix-trust-badges"} -->
<div class="wp-block-group mendrix-trust-badges" style="gap:0.75rem"><!-- wp:group {"className":"badge","layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"0.4rem"}}} -->
<div class="wp-block-group badge" style="gap:0.4rem"><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-star"></use></svg><span><?php echo esc_html__( '95% approval on complete files', 'mendrix-consultancy' ); ?></span></div>
<!-- /wp:group --><!-- wp:group {"className":"badge","layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"0.4rem"}}} -->
<div class="wp-block-group badge" style="gap:0.4rem"><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-calendar"></use></svg><span><?php echo esc_html__( 'Average response under 24h', 'mendrix-consultancy' ); ?></span></div>
<!-- /wp:group --><!-- wp:group {"className":"badge","layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"0.4rem"}}} -->
<div class="wp-block-group badge" style="gap:0.4rem"><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-phone"></use></svg><span><?php echo esc_html__( 'WhatsApp updates for every milestone', 'mendrix-consultancy' ); ?></span></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"lock":{"move":false,"remove":false}} -->
<div class="wp-block-column"><!-- wp:group {"className":"mendrix-form-shell mendrix-sticky-cta anim-scale","style":{"spacing":{"blockGap":"var(--wp--preset--spacing--sm)"}},"layout":{"type":"default"},"lock":{"move":false,"remove":false}} -->
<div class="wp-block-group mendrix-form-shell mendrix-sticky-cta anim-scale" style="gap:var(--wp--preset--spacing--sm)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Request your readiness call', 'mendrix-consultancy' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><?php echo esc_html__( 'Share your details. We will confirm your consultation slot and send a pre-call checklist tailored to your pathway.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="mendrix-form" action="#" method="post" aria-label="<?php echo esc_attr__( 'Lead form placeholder', 'mendrix-consultancy' ); ?>">
  <div class="wp-block-columns" style="row-gap:1rem;column-gap:1rem">
    <div class="wp-block-column"><label for="lead-name" class="screen-reader-text"><?php echo esc_html__( 'Name', 'mendrix-consultancy' ); ?></label><input id="lead-name" name="name" type="text" placeholder="<?php echo esc_attr__( 'Full name', 'mendrix-consultancy' ); ?>" required /></div>
    <div class="wp-block-column"><label for="lead-email" class="screen-reader-text"><?php echo esc_html__( 'Email', 'mendrix-consultancy' ); ?></label><input id="lead-email" name="email" type="email" placeholder="<?php echo esc_attr__( 'Work email', 'mendrix-consultancy' ); ?>" required /></div>
  </div>
  <label for="lead-phone" class="screen-reader-text"><?php echo esc_html__( 'Phone or WhatsApp', 'mendrix-consultancy' ); ?></label>
  <input id="lead-phone" name="phone" type="tel" placeholder="<?php echo esc_attr__( 'Phone or WhatsApp', 'mendrix-consultancy' ); ?>" required />
  <label for="lead-focus" class="screen-reader-text"><?php echo esc_html__( 'Primary focus', 'mendrix-consultancy' ); ?></label>
  <select id="lead-focus" name="focus">
    <option value="study"><?php echo esc_html__( 'Study Visa Planning', 'mendrix-consultancy' ); ?></option>
    <option value="immigration"><?php echo esc_html__( 'Immigration Compliance', 'mendrix-consultancy' ); ?></option>
    <option value="expansion"><?php echo esc_html__( 'Business Expansion', 'mendrix-consultancy' ); ?></option>
  </select>
  <label for="lead-notes" class="screen-reader-text"><?php echo esc_html__( 'Project notes', 'mendrix-consultancy' ); ?></label>
  <textarea id="lead-notes" name="notes" rows="4" placeholder="<?php echo esc_attr__( 'Share timelines, stakeholders, or urgent needs…', 'mendrix-consultancy' ); ?>"></textarea>
  <button type="submit" class="wp-block-button__link btn--pill"><?php echo esc_html__( 'Submit &amp; Schedule', 'mendrix-consultancy' ); ?></button>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size"><?php echo esc_html__( 'We respect your inbox. Mendrix only emails updates relevant to your consultation.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
