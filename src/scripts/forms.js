const forms = document.querySelectorAll('form');

forms.forEach(form => {
  const formType = form.getAttribute('data-type');
  const checkbox = form.querySelector('input[type=checkbox]');
  const submit = form.querySelector('button');

  const fields = form.querySelectorAll('input, textarea');
  const requiredFields = form.querySelectorAll('[data-required]');

  let formData;

  phone = form.querySelector('input[type=tel]');

  if (phone)
    IMask(phone, {
      mask: '+{7} (000) 000-00-00',
      prepare: (appended, masked) => (appended === '8' && masked.value === '') ? '' : appended
    });

  requiredFields.forEach(field => {
    field.addEventListener('click', () => {
      field.classList.remove('input__field--error')
      submit.classList.remove('form__button--error');
      submit.innerHTML = "Отправить";
    });
  });

  checkbox.addEventListener('change', () => {
    if (checkbox.checked) submit.removeAttribute('disabled');
    else submit.setAttribute('disabled', 'disabled');
  });

  form.onsubmit = async (e) => {
    e.preventDefault();

    if (InputValidation(requiredFields)) {
      formData = new FormData(form);
      formData.append('form_type', formType);

      try {
        let response = await fetch('php/mail.php', {
          method: 'POST',
          body: formData,
        });

        // let result = await response.json();
        // console.log(result)

        if (formType === 'question') MicroModal.show('modal-question', modalParams);
        else MicroModal.show('modal-accept', modalParams);

        ClearForm(fields);
      }

      catch {
        console.error('Ошибка на стороне сервера');
      }
    }

    else {
      submit.classList.add('form__button--error');
      submit.innerHTML = 'Вы ошиблись при вводе';
    }
  };
});

function InputValidation(inputs) {
  let isValide = false;

  inputs.forEach(field => {
    if (!field.value)
      field.classList.add('input__field--error')
  });

  var BreakException = {};
  inputs.forEach(field => {
    try {
      isValide = field.classList.contains('input__field--error') ? false : true;

      if (!isValide) throw BreakException;
    }

    catch (e) {
      if (e !== BreakException) throw e;
    }
  });

  return isValide;
}

function ClearForm(fields) {
  fields.forEach(field => field.value = '');
}