
window.addEventListener('load', () => {
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false
    });
});

AOS.init();

const sw_testi = new Swiper('.sw-testi', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    pagination: {
      el: '.swiper-pagination',
    }
  });

  const sw_dokumentasi = new Swiper('.sw-dokumentasi', {
    // Optional parameters
    slidesPerView: 3,
    spaceBetween: 30,
  
    pagination: {
      el: '.swiper-pagination',
    }
  });