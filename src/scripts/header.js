const headerContact = document.querySelector('.header__contact');
const copyBlocks = headerContact.querySelectorAll('.header__copy');

copyBlocks.forEach(copyBlock => Copy(headerContact, copyBlock));