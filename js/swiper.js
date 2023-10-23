var swiper = new Swiper('.mySwiper', {
  slidesPerView: 2,
  spaceBetween: 15,
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  breakpoints: {
      768: {
          slidesPerView: 3,
          spaceBetween: 30,
      },
      475: {
        slidesPerView: 2,
          spaceBetween: 30,
      },
  },
});