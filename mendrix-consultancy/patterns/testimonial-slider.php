<?php
/**
 * Title: Testimonial Slider
 * Slug: mendrix-consultancy/testimonial-slider
 * Categories: mendrix-media
 * Description: Swiper slider for testimonials.
 */
?>
<!-- wp:group {"className":"anim-fade-up stagger","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"},"blockGap":"2rem"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group anim-fade-up stagger" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:heading {"textAlign":"center","fontSize":"xl"} -->
<h2 class="wp-block-heading has-text-align-center has-xl-font-size">Clients on working with Mendrix</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size">Every testimonial is a real Malaysian market expansion, immigration, or study visa win delivered with care.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="mendrix-slider js-slider" role="region" aria-label="Testimonial carousel" tabindex="0" data-pagination-label="Testimonial">
  <div class="js-slider__track">
    <article class="js-slide">
      <blockquote>
        <p>“Their structured onboarding made relocating our fintech leadership team incredibly smooth.”</p>
        <footer>
          <cite>Amelia Wong, COO, FinLab KL</cite>
        </footer>
      </blockquote>
    </article>
    <article class="js-slide">
      <blockquote>
        <p>“From dependent passes to payroll setup, Mendrix coordinated every stakeholder flawlessly.”</p>
        <footer>
          <cite>Rajesh Patel, HR Director, APAC Logistics</cite>
        </footer>
      </blockquote>
    </article>
    <article class="js-slide">
      <blockquote>
        <p>“We launched our Malaysian entity in record time thanks to their licensing expertise.”</p>
        <footer>
          <cite>Linda Sørensen, Founder, Nordics4Asia</cite>
        </footer>
      </blockquote>
    </article>
  </div>
  <div class="js-slider__controls" aria-label="Slider controls">
    <button type="button" class="js-slider__prev" aria-label="Previous testimonial">
      <span aria-hidden="true">‹</span>
    </button>
    <div class="js-slider__pagination" aria-label="Testimonial navigation"></div>
    <button type="button" class="js-slider__next" aria-label="Next testimonial">
      <span aria-hidden="true">›</span>
    </button>
  </div>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->
