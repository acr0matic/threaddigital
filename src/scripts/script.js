const projectSlider = new Swiper('.project-slider', {
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

const feedbackSlider = new Swiper('.feedback-slider', {
  slidesPerView: 1,
  grabCursor: true,

  navigation: {
    nextEl: '.feedback-slider__next',
    prevEl: '.feedback-slider__prev',
  },
})

scrollTo();

const modalParams = {
  awaitCloseAnimation: true,
  disableScroll: true,
  disableFocus: true,
};

MicroModal.init(modalParams);
AOS.init({ once: true, offset: 240 });

const callbackButton = document.getElementById('callback-button');
const callbackModal = document.getElementById('modal-callback');

callbackButton.addEventListener('click', () => {
  const animated = callbackModal.querySelectorAll('.aos-animate');

  // Анимация
  animated.forEach(item => {
    item.classList.remove('aos-animate');
    setTimeout(() => item.classList.add('aos-animate'), 100);
  });
});
