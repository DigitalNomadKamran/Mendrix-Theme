(function () {
  function createPagination(slider, slidesLength, goToSlide) {
    const pagination = slider.querySelector('.js-slider__pagination');
    if (!pagination) {
      return null;
    }

    pagination.innerHTML = '';
    const buttons = Array.from({ length: slidesLength }).map((_, index) => {
      const button = document.createElement('button');
      button.type = 'button';
      button.setAttribute('aria-label', slider.dataset.paginationLabel ? `${slider.dataset.paginationLabel} ${index + 1}` : `Go to slide ${index + 1}`);
      button.addEventListener('click', () => goToSlide(index, true));
      pagination.appendChild(button);
      return button;
    });

    return buttons;
  }

  function initSlider(slider, index) {
    if (slider.dataset.sliderReady === 'true') {
      return;
    }

    const track = slider.querySelector('.js-slider__track');
    const slides = Array.from(slider.querySelectorAll('.js-slide'));

    if (!track || slides.length === 0) {
      return;
    }

    if (slides.length < 2) {
      const controlsWrapper = slider.querySelector('.js-slider__controls');
      if (controlsWrapper) {
        controlsWrapper.setAttribute('hidden', 'hidden');
      }
      slider.classList.add('is-static');
      return;
    }

    slider.dataset.sliderReady = 'true';
    slider.classList.add('is-enhanced');

    const controlsWrapper = slider.querySelector('.js-slider__controls');
    if (controlsWrapper) {
      controlsWrapper.removeAttribute('hidden');
    }

    const sliderId = slider.getAttribute('id') || `mendrix-slider-${index + 1}`;
    slider.setAttribute('id', sliderId);

    track.setAttribute('role', 'group');
    track.setAttribute('aria-live', 'polite');
    track.setAttribute('aria-atomic', 'false');

    const controls = {
      prev: slider.querySelector('.js-slider__prev'),
      next: slider.querySelector('.js-slider__next'),
    };
    const paginationButtons = createPagination(slider, slides.length, goToSlide);
    let current = 0;

    slides.forEach((slide, slideIndex) => {
      slide.setAttribute('role', 'group');
      slide.setAttribute('aria-roledescription', 'slide');
      slide.setAttribute('aria-label', `${slideIndex + 1} / ${slides.length}`);
      slide.setAttribute('aria-hidden', slideIndex === current ? 'false' : 'true');
      slide.setAttribute('tabindex', slideIndex === current ? '0' : '-1');
    });

    if (controls.prev) {
      controls.prev.setAttribute('aria-controls', sliderId);
    }
    if (controls.next) {
      controls.next.setAttribute('aria-controls', sliderId);
    }

    function updateSlides() {
      slides.forEach((slide, slideIndex) => {
        const isActive = slideIndex === current;
        slide.classList.toggle('is-active', isActive);
        slide.setAttribute('aria-hidden', isActive ? 'false' : 'true');
        slide.setAttribute('tabindex', isActive ? '0' : '-1');
      });

      if (paginationButtons) {
        paginationButtons.forEach((button, buttonIndex) => {
          button.classList.toggle('is-active', buttonIndex === current);
        });
      }
    }

    function goToSlide(targetIndex, focusActive) {
      current = (targetIndex + slides.length) % slides.length;
      track.style.transform = `translateX(-${current * 100}%)`;
      updateSlides();
      if (focusActive) {
        const focusable = slides[current].querySelector('a, button, input, textarea, select, [tabindex]:not([tabindex="-1"])');
        if (focusable) {
          focusable.focus();
        } else {
          slides[current].focus({ preventScroll: true });
        }
      }
    }

    track.style.transform = 'translateX(0%)';

    const goToSlideBound = (target, focusActive) => goToSlide(target, focusActive);

    if (controls.prev) {
      controls.prev.addEventListener('click', () => goToSlideBound(current - 1, false));
    }
    if (controls.next) {
      controls.next.addEventListener('click', () => goToSlideBound(current + 1, false));
    }

    slider.addEventListener('keydown', (event) => {
      if (event.key === 'ArrowRight') {
        event.preventDefault();
        goToSlideBound(current + 1, false);
      } else if (event.key === 'ArrowLeft') {
        event.preventDefault();
        goToSlideBound(current - 1, false);
      }
    });

    updateSlides();
  }

  function initMendrixSliders(scope) {
    const root = scope || document;
    const sliders = root.querySelectorAll('.js-slider');
    if (!sliders.length) {
      return false;
    }

    sliders.forEach((slider, index) => initSlider(slider, index));
    return true;
  }

  window.addEventListener('DOMContentLoaded', () => {
    initMendrixSliders(document);
  });

  window.initMendrixSliders = initMendrixSliders;
})();
