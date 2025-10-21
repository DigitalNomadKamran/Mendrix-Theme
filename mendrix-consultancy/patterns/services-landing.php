<?php
/**
 * Title: Services Landing
 * Slug: mendrix-consultancy/services-landing
 * Categories: mendrix-business
 * Keywords: services, hero, cards, lead
 * Description: Full landing layout with hero, six service cards, and a closing CTA strip.
 * Viewport Width: 1200
 *
 * Usage: Keep the structural classes (.anim-*, .mendrix-service-grid) for conditional animations.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--3xl)","bottom":"var(--wp--preset--spacing--3xl)"},"blockGap":"var(--wp--preset--spacing--lg)"}},"layout":{"type":"constrained","contentSize":"var(--wp--custom--layout--wide)"},"lock":{"move":false,"remove":false},"className":"anim-fade-up"} -->
<div class="wp-block-group anim-fade-up" style="padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--sm)"}},"lock":{"move":false,"remove":false}} -->
<div class="wp-block-group" style="gap:var(--wp--preset--spacing--sm)"><!-- wp:heading {"textAlign":"center","fontSize":"3xl"} -->
<h2 class="wp-block-heading has-text-align-center has-3xl-font-size"><?php echo esc_html__( 'Consultancy built for Malaysian market entry and mobility', 'mendrix-consultancy' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"lg"} -->
<p class="has-text-align-center has-lg-font-size"><?php echo esc_html__( 'Our experts orchestrate every document, stakeholder, and milestone so your visa or expansion plan lands smoothly the first time.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#mendrix-services-grid"><?php echo esc_html__( 'Explore Services', 'mendrix-consultancy' ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"btn--ghost"} -->
<div class="wp-block-button btn--ghost"><a class="wp-block-button__link wp-element-button" href="/book-consultation/">
<?php echo esc_html__( 'Book Consultation', 'mendrix-consultancy' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--xl)"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xl)"><!-- wp:columns {"className":"mendrix-service-grid stagger","lock":{"move":false,"remove":false}} -->
<div class="wp-block-columns mendrix-service-grid stagger" id="mendrix-services-grid"><!-- wp:column {"className":"service-card anim-fade-up","lock":{"move":false,"remove":false}} -->
<div class="wp-block-column service-card anim-fade-up"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-group" style="gap:0.5rem"><!-- wp:html -->
<span class="icon-circle" aria-hidden="true"><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-check"></use></svg></span>
<!-- /wp:html --><h3 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Study Visa Strategy', 'mendrix-consultancy' ); ?></h3></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Program curation, SOP copy refinement, and EMGS submission support tailored to Malaysian universities.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li><?php echo esc_html__( 'Document audit &amp; sponsor vetting', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'Timeline dashboard for applicants', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'Post-arrival concierge welcome', 'mendrix-consultancy' ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"service-card anim-fade-up","lock":{"move":false,"remove":false}} -->
<div class="wp-block-column service-card anim-fade-up"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-group" style="gap:0.5rem"><!-- wp:html -->
<span class="icon-circle" aria-hidden="true"><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-calendar"></use></svg></span>
<!-- /wp:html --><h3 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Immigration Compliance', 'mendrix-consultancy' ); ?></h3></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Employment passes, dependent passes, renewals, and payroll onboarding with zero shortcuts.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li><?php echo esc_html__( 'Licensed sponsor liaison', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'Regulatory calendar reminders', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'Quarterly compliance reviews', 'mendrix-consultancy' ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"service-card anim-fade-up","lock":{"move":false,"remove":false}} -->
<div class="wp-block-column service-card anim-fade-up"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-group" style="gap:0.5rem"><!-- wp:html -->
<span class="icon-circle" aria-hidden="true"><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-arrow-right"></use></svg></span>
<!-- /wp:html --><h3 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Business Expansion', 'mendrix-consultancy' ); ?></h3></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Entity setup, multi-bank onboarding, and tax registrations orchestrated for regional HQs.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li><?php echo esc_html__( 'Company secretary coordination', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'Banking introductions &amp; KYC prep', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'License tracker for sector approvals', 'mendrix-consultancy' ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"service-card anim-fade-up","lock":{"move":false,"remove":false}} -->
<div class="wp-block-column service-card anim-fade-up"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-group" style="gap:0.5rem"><!-- wp:html -->
<span class="icon-circle" aria-hidden="true"><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-phone"></use></svg></span>
<!-- /wp:html --><h3 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Relocation Concierge', 'mendrix-consultancy' ); ?></h3></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Housing, schooling, and local onboarding experiences that keep your team focused on outcomes.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li><?php echo esc_html__( 'Short-term housing &amp; tenancy vetting', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'School advisory for dependents', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'Arrival briefings with cultural tips', 'mendrix-consultancy' ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"service-card anim-fade-up","lock":{"move":false,"remove":false}} -->
<div class="wp-block-column service-card anim-fade-up"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-group" style="gap:0.5rem"><!-- wp:html -->
<span class="icon-circle" aria-hidden="true"><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-mail"></use></svg></span>
<!-- /wp:html --><h3 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Regulatory Filings', 'mendrix-consultancy' ); ?></h3></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Monthly payroll, income tax, and immigration filings filed on time with internal quality checks.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li><?php echo esc_html__( 'IRB &amp; SOCSO registration support', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'Deadline alerts &amp; compliance review', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'Secure document repository access', 'mendrix-consultancy' ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"service-card anim-fade-up","lock":{"move":false,"remove":false}} -->
<div class="wp-block-column service-card anim-fade-up"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-group" style="gap:0.5rem"><!-- wp:html -->
<span class="icon-circle" aria-hidden="true"><svg class="icon icon--sm" aria-hidden="true"><use href="#icon-star"></use></svg></span>
<!-- /wp:html --><h3 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Expansion Playbooks', 'mendrix-consultancy' ); ?></h3></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Investor-ready strategies for licensing, hiring, and marketing once you land in Kuala Lumpur.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li><?php echo esc_html__( 'Route-to-market milestones', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'Stakeholder alignment workshops', 'mendrix-consultancy' ); ?></li><li><?php echo esc_html__( 'Local vendor &amp; advisor roster', 'mendrix-consultancy' ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--3xl)"},"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"}},"border":{"radius":"var(--wp--custom--radius--2xl)"},"shadow":"var(--wp--custom--shadow--soft)"},"backgroundColor":"muted","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"},"className":"mendrix-sticky-bar anim-slide-r","lock":{"move":false,"remove":false}} -->
<div class="wp-block-group mendrix-sticky-bar anim-slide-r has-muted-background-color has-background" style="margin-top:var(--wp--preset--spacing--3xl);padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)"><!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-group" style="gap:0.5rem"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Ready for a project plan within 48 hours?', 'mendrix-consultancy' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Book a consultation and receive a compliance-first roadmap, draft timeline, and investment estimate.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"btn--pill"} -->
<div class="wp-block-button btn--pill"><a class="wp-block-button__link wp-element-button" href="/book-consultation/">
<?php echo esc_html__( 'Book Consultation', 'mendrix-consultancy' ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"btn--ghost btn--pill"} -->
<div class="wp-block-button btn--ghost btn--pill"><a class="wp-block-button__link wp-element-button" href="/contact/">
<?php echo esc_html__( 'Talk to Client Success', 'mendrix-consultancy' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
