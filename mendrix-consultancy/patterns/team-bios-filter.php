<?php
/**
 * Title: Team Bios with Filter Tags
 * Slug: mendrix-consultancy/team-bios-filter
 * Categories: mendrix-business
 * Keywords: team, bios, filter
 * Description: Team grid with category chips to visually filter expertise areas (no JS required).
 * Viewport Width: 1100
 *
 * Usage: Update team content but keep data-team attributes for future enhancements.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)"},"blockGap":"var(--wp--preset--spacing--lg)"}},"layout":{"type":"constrained","contentSize":"var(--wp--custom--layout--wide)"},"lock":{"move":false,"remove":false},"className":"anim-fade-up"} -->
<div class="wp-block-group anim-fade-up" style="padding-top:var(--wp--preset--spacing--2xl);padding-bottom:var(--wp--preset--spacing--2xl)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"720px"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--sm)"}},"lock":{"move":false,"remove":false}} -->
<div class="wp-block-group" style="gap:var(--wp--preset--spacing--sm)"><!-- wp:heading {"textAlign":"center","fontSize":"3xl"} -->
<h2 class="wp-block-heading has-text-align-center has-3xl-font-size"><?php echo esc_html__( 'Meet the Mendrix leadership collective', 'mendrix-consultancy' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Specialists across immigration law, business expansion, and compliance partner with you end-to-end.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"anim-slide-l","style":{"spacing":{"blockGap":"0.75rem"}}} -->
<div class="wp-block-group anim-slide-l" data-team-filter style="gap:0.75rem"><span class="filter-chip" data-team="all"><?php echo esc_html__( 'All', 'mendrix-consultancy' ); ?></span><span class="filter-chip" data-team="immigration"><?php echo esc_html__( 'Immigration', 'mendrix-consultancy' ); ?></span><span class="filter-chip" data-team="expansion"><?php echo esc_html__( 'Business Expansion', 'mendrix-consultancy' ); ?></span><span class="filter-chip" data-team="compliance"><?php echo esc_html__( 'Compliance', 'mendrix-consultancy' ); ?></span></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mendrix-team-grid anim-fade-up","layout":{"type":"default"},"lock":{"move":false,"remove":false}} -->
<div class="wp-block-group mendrix-team-grid anim-fade-up"><!-- wp:group {"className":"team-card","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group team-card" data-team="immigration" style="gap:0.75rem"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Farah Rahman', 'mendrix-consultancy' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><?php echo esc_html__( 'Principal Immigration Strategist', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Former EMGS officer guiding student and employment pass strategies with risk mitigation baked in.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"team-meta","layout":{"type":"flex"},"style":{"spacing":{"blockGap":"0.35rem"}}} -->
<div class="wp-block-group team-meta" style="gap:0.35rem"><span class="team-chip"><?php echo esc_html__( 'EMGS', 'mendrix-consultancy' ); ?></span><span class="team-chip"><?php echo esc_html__( 'Visa Appeals', 'mendrix-consultancy' ); ?></span></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-card","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group team-card" data-team="expansion" style="gap:0.75rem"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Daniel Lim', 'mendrix-consultancy' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><?php echo esc_html__( 'Head of Expansion &amp; Banking', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Architects market entry playbooks across licensing, treasury, and talent for high-growth fintech and SaaS teams.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"team-meta","layout":{"type":"flex"},"style":{"spacing":{"blockGap":"0.35rem"}}} -->
<div class="wp-block-group team-meta" style="gap:0.35rem"><span class="team-chip"><?php echo esc_html__( 'Banking', 'mendrix-consultancy' ); ?></span><span class="team-chip"><?php echo esc_html__( 'GTM', 'mendrix-consultancy' ); ?></span></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-card","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group team-card" data-team="compliance" style="gap:0.75rem"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Nur Aina Hassan', 'mendrix-consultancy' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><?php echo esc_html__( 'Compliance &amp; Payroll Lead', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Ensures payroll, statutory filings, and SOCSO/EPF obligations run on-time with auditable documentation.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"team-meta","layout":{"type":"flex"},"style":{"spacing":{"blockGap":"0.35rem"}}} -->
<div class="wp-block-group team-meta" style="gap:0.35rem"><span class="team-chip"><?php echo esc_html__( 'Payroll', 'mendrix-consultancy' ); ?></span><span class="team-chip"><?php echo esc_html__( 'Statutory Filings', 'mendrix-consultancy' ); ?></span></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-card","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group team-card" data-team="expansion" style="gap:0.75rem"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Sanjay Kulkarni', 'mendrix-consultancy' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><?php echo esc_html__( 'Licensing Advisor', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Guides regulated industries through Bank Negara, MCMC, and Halal certification pathways with stakeholder briefings.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"team-meta","layout":{"type":"flex"},"style":{"spacing":{"blockGap":"0.35rem"}}} -->
<div class="wp-block-group team-meta" style="gap:0.35rem"><span class="team-chip"><?php echo esc_html__( 'Licensing', 'mendrix-consultancy' ); ?></span><span class="team-chip"><?php echo esc_html__( 'Regulatory', 'mendrix-consultancy' ); ?></span></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-card","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group team-card" data-team="immigration" style="gap:0.75rem"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Melissa Tan', 'mendrix-consultancy' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><?php echo esc_html__( 'Client Success Director', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Owns high-touch communications with HR leaders to keep dependent passes and renewals aligned to hiring plans.', 'mendrix-consultancy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"team-meta","layout":{"type":"flex"},"style":{"spacing":{"blockGap":"0.35rem"}}} -->
<div class="wp-block-group team-meta" style="gap:0.35rem"><span class="team-chip"><?php echo esc_html__( 'Client Success', 'mendrix-consultancy' ); ?></span><span class="team-chip"><?php echo esc_html__( 'Dependents', 'mendrix-consultancy' ); ?></span></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
