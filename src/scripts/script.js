scrollTo();

const modalParams = {
  awaitCloseAnimation: true,
  disableScroll: true,
  disableFocus: true,
};

MicroModal.init(modalParams);
AOS.init({ once: true, offset: 240 });

const callbackButton = document.querySelectorAll('.header__button, .mobile-menu__button');
const callbackModal = document.getElementById('modal-callback');

callbackButton.forEach(button => {
  button.addEventListener('click', () => {
    const animated = callbackModal.querySelectorAll('.aos-animate');

    // Анимация
    animated.forEach(item => {
      item.classList.remove('aos-animate');
      setTimeout(() => item.classList.add('aos-animate'), 100);
    });
  });
});

jarallax(document.querySelectorAll('.jarallax'), {
  speed: 0.2
});

// Прелоадер
const preloader = document.getElementById('preloader');
document.addEventListener("DOMContentLoaded", function () {
  window.setTimeout(function () {
    preloader.classList.add('preloader--hide');
  }, 2500);
});
