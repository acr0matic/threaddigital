const projectSlider = new Swiper('.project-slider', {
  // Optional parameters
  loop: true,
  spaceBetween: 40,
  slidesPerView: 6,

  autoplay: {
    delay: 1000,
    disableOnInteraction: false
  },

  breakpoints: {
    996: {
      slidesPerView: 8,
    },

    1740: {
      slidesPerView: 10,
    }
  }
});

const feedbackSlider = new Swiper('.feedback-slider', {
  slidesPerView: 1,
  grabCursor: true,

  navigation: {
    nextEl: '.feedback-slider__next',
    prevEl: '.feedback-slider__prev',
  },
})

const stagesSlider = new Swiper('.stages-slider', {
  slidesPerView: 2,
  grabCursor: true,
  spaceBetween: 30,

  navigation: {
    nextEl: '.stages-slider__next',
    prevEl: '.stages-slider__prev',
  },

  breakpoints: {
    991: {
      slidesPerView: 3,
    }
  }
});