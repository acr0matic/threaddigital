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

jarallax(document.querySelectorAll('.jarallax'), {
  speed: 0.2
});