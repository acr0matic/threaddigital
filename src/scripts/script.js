const swiper = new Swiper('.project-slider', {
  // Optional parameters
  loop: true,
  spaceBetween: 40,
  slidesPerView: 8,

  autoplay: {
    delay: 1000,
    disableOnInteraction: false
  },

  breakpoints: {
    1740: {
      slidesPerView: 10,
    }
  }
});