const serviceCards = document.querySelectorAll('.service-card');

serviceCards.forEach(card => {
  const button = card.querySelector('.service-card__more');
  const content = card.querySelector('.service-card__content');
  const arrow = card.querySelector('.service-card__arrow');

  button.addEventListener('mouseenter', () => content.classList.add('service-card__content--visible'));
  button.addEventListener('mouseleave', () => content.classList.remove('service-card__content--visible'));
  button.addEventListener('click', () => {
    content.classList.toggle('service-card__content--open');
    arrow.classList.toggle('service-card__arrow--open');
  });
});