<?php
/**
 * Title: Testimonial Slider
 * Slug: mendrix-consultancy/testimonial-slider
 * Categories: mendrix-media
 * Description: Swiper slider for testimonials.
 */
?>
<!-- wp:group {"className":"animate-on-scroll","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"},"blockGap":"2rem"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:heading {"textAlign":"center","fontSize":"xl"} -->
<h2 class="wp-block-heading has-text-align-center has-xl-font-size">Clients on working with Mendrix</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<div class="swiper" data-swiper="testimonials">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <blockquote>
        <p>“Their structured onboarding made relocating our fintech leadership team incredibly smooth.”</p>
        <cite>Amelia Wong, COO, FinLab KL</cite>
      </blockquote>
    </div>
    <div class="swiper-slide">
      <blockquote>
        <p>“From dependent passes to payroll setup, Mendrix coordinated every stakeholder flawlessly.”</p>
        <cite>Rajesh Patel, HR Director, APAC Logistics</cite>
      </blockquote>
    </div>
    <div class="swiper-slide">
      <blockquote>
        <p>“We launched our Malaysian entity in record time thanks to their licensing expertise.”</p>
        <cite>Linda Sørensen, Founder, Nordics4Asia</cite>
      </blockquote>
    </div>
  </div>
  <div class="swiper-pagination" aria-label="Testimonials pagination"></div>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->
