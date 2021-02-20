const footer = document.querySelector('footer');
const footerCopy = footer.querySelectorAll('.footer__copy');

footerCopy.forEach(copyBlock => Copy(footer, copyBlock));
