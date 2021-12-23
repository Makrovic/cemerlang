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

const sw_legalitas = new Swiper('.sw-legalitas', {
    // Optional parameters
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
    },
});