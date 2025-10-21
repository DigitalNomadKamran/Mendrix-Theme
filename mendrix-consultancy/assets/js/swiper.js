(function(){
  function initSwiper(container) {
    const wrapper = container.querySelector('.swiper-wrapper');
    const slides = Array.from(container.querySelectorAll('.swiper-slide'));
    const pagination = container.querySelector('.swiper-pagination');
    if (!wrapper || slides.length === 0) {
      return;
    }
    let index = 0;

    function render() {
      wrapper.style.transform = `translateX(-${index * 100}%)`;
      if (pagination) {
        pagination.querySelectorAll('button').forEach((btn, idx) => {
          btn.classList.toggle('is-active', idx === index);
        });
      }
    }

    if (pagination) {
      pagination.innerHTML = '';
      slides.forEach((_, idx) => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.setAttribute('aria-label', `Go to slide ${idx + 1}`);
        btn.addEventListener('click', () => {
          index = idx;
          render();
        });
        pagination.appendChild(btn);
      });
    }

    function autoSlide() {
      index = (index + 1) % slides.length;
      render();
    }

    render();
    const interval = setInterval(autoSlide, 7000);
    container.addEventListener('mouseenter', () => clearInterval(interval));
  }

  window.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.swiper').forEach(initSwiper);
  });
})();
