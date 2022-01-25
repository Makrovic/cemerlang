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
    slidesPerView: 1,
    spaceBetween: 30,

    pagination: {
        el: '.swiper-pagination',
    },
    breakpoints: {
    // when window width is >= 320px
    768: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 480px
    1024: {
      slidesPerView: 3,
      spaceBetween: 30
    },
  }
});

const sw_bannerpt = new Swiper('.sw-bannerpt', {
    // Optional parameters
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    autoplay: {
        delay: 3000,
    },
    direction: 'horizontal',
    loop: true,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

const sw_galeri = new Swiper('.sw-galeri', {
    autoplay: {
        delay: 3000,
    },
    direction: 'horizontal',

    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
});

const sw_oneslide = new Swiper('.sw-oneslide', {
    // Optional parameters
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
    },
});