const mobileButton = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const mobileItems = mobileMenu.querySelectorAll('.nav-mobile__link');
const mobileForm = document.getElementById('modal-callback');

mobileButton.addEventListener('click', () => {
  mobileButton.classList.toggle('is-active')
  mobileMenu.classList.toggle('mobile-menu--open');

  if (mobileForm.classList.contains('is-open'))
    MicroModal.close('modal-callback');
});

mobileItems.forEach(item => {
  item.addEventListener('click', () => {
    mobileButton.classList.toggle('is-active')
    mobileMenu.classList.toggle('mobile-menu--open');
  });
});