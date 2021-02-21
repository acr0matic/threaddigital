const mobileButton = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const mobileItems = mobileMenu.querySelectorAll('.nav-mobile__link');
const mobileForm = document.getElementById('modal-callback');
const animatedMobile = mobileMenu.querySelectorAll('[data-aos]');

mobileButton.addEventListener('click', () => {

  mobileButton.classList.toggle('is-active')
  mobileMenu.classList.toggle('mobile-menu--open');

  if (mobileForm.classList.contains('is-open'))
    MicroModal.close('modal-callback');

  if (mobileMenu.classList.contains('mobile-menu--open')) {
    animatedMobile.forEach(item => {
      item.classList.add('aos-animate');
    });
  }

  else {
    animatedMobile.forEach(item => {
      item.classList.remove('aos-animate');
    });
  }
});

mobileItems.forEach(item => {
  item.addEventListener('click', () => {
    mobileButton.classList.toggle('is-active')
    mobileMenu.classList.toggle('mobile-menu--open');
  });
});

setTimeout(() => animatedMobile.forEach(item => {
  item.classList.remove('aos-animate');
}), 100);
