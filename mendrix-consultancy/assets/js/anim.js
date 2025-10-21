(function () {
  const animatedSelector = '[data-anim], .anim-fade-up, .anim-slide-l, .anim-slide-r, .anim-scale';
  let observer;

  function setStaggerIndices(element) {
    if (!element.classList || !element.classList.contains('stagger')) {
      return;
    }

    Array.from(element.children).forEach((child, index) => {
      child.style.setProperty('--stagger-index', index);
    });
  }

  function revealElement(element) {
    if (!element.classList.contains('in-view')) {
      element.classList.add('in-view');
      setStaggerIndices(element);
    }
  }

  function getCandidates(scope) {
    return Array.from(scope.querySelectorAll(animatedSelector)).filter((element) => {
      if (element.dataset.animReady === 'true') {
        return false;
      }
      element.dataset.animReady = 'true';
      if (element.classList.contains('stagger')) {
        setStaggerIndices(element);
      }
      return true;
    });
  }

  function initAnimations(scope) {
    const root = scope || document;
    const mediaQuery = typeof window.matchMedia === 'function' ? window.matchMedia('(prefers-reduced-motion: reduce)') : null;
    const prefersReduced = mediaQuery ? mediaQuery.matches : false;
    const elements = getCandidates(root);

    if (!elements.length) {
      return;
    }

    if (prefersReduced || typeof IntersectionObserver === 'undefined') {
      elements.forEach(revealElement);
      return;
    }

    if (!observer) {
      observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              revealElement(entry.target);
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.2,
          rootMargin: '0px 0px -10%',
        }
      );
    }

    elements.forEach((element) => observer.observe(element));
  }

  window.addEventListener('DOMContentLoaded', () => initAnimations(document));

  window.mendrixInitAnimations = initAnimations;
})();
