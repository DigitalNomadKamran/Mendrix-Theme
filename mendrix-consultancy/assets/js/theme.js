(function(){
  window.addEventListener('DOMContentLoaded', function(){
    document.querySelectorAll('.animate-on-scroll').forEach((el) => {
      if (!el.dataset.aos) {
        el.dataset.aos = 'fade-up';
      }
    });
    if (window.AOS) {
      window.AOS.init({ once: true, offset: 100 });
    }
  });
})();
