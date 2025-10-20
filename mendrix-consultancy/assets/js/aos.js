(function(){
  const AOS = {
    init(options = {}) {
      const offset = options.offset || 120;
      const elements = Array.from(document.querySelectorAll('[data-aos]'));
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('aos-animate');
            if (options.once !== false) {
              observer.unobserve(entry.target);
            }
          }
        });
      }, { rootMargin: `0px 0px -${offset}px 0px` });

      elements.forEach((el) => {
        el.classList.add('aos-init');
        observer.observe(el);
      });
    }
  };

  window.AOS = AOS;
})();
