const forms = document.querySelectorAll('form');

forms.forEach(form => {
  const formMessage = form.querySelector('.form__error');
  const formType = form.getAttribute('data-type');
  const checkbox = form.querySelector('input[type=checkbox]');
  const submit = form.querySelector('button');

  const fields = form.querySelectorAll('input, textarea');
  const requiredFields = form.querySelectorAll('[data-required]');

  let formData;

  phone = form.querySelector('input[type=tel]');

  IMask(phone, {
    mask: '+{7} (000) 000-00-00',
    prepare: (appended, masked) => (appended === '8' && masked.value === '') ? '' : appended
  });
});