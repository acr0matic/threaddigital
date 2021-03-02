const forms = document.querySelectorAll('form');

forms.forEach(form => {
  const formType = form.getAttribute('data-form');
  const checkbox = form.querySelector('input[type=checkbox]');
  const submit = form.querySelector('button');

  const fields = form.querySelectorAll('.input__field, textarea, .input__group input[type=checkbox]');
  const requiredFields = form.querySelectorAll('[data-required]');

  let formData;

  const userCallback = form.querySelector('[name=user_callback]');
  if (userCallback) userCallback.setAttribute('disabled', 'disabled');

  const phone = form.querySelector('input[type=tel]');
  if (phone) {
    IMask(phone, {
      mask: '+{7} (000) 000-00-00',
      prepare: (appended, masked) => (appended === '8' && masked.value === '') ? '' : appended
    });
  }

  if (userCallback) {
    phone.addEventListener('input', () => {
      if (phone.value == '') userCallback.setAttribute('disabled', 'disabled');
      else userCallback.removeAttribute('disabled');
    });
  }

  fields.forEach(field => {
    field.addEventListener('input', () => {
      if (field.value) field.classList.add('input__field--value');
      else field.classList.remove('input__field--value');
    });
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

      if (formType === 'callback') {
        const fieldsGroup = form.querySelectorAll('.input__group input[type=checkbox]');
        let selectedArray = [];

        fieldsGroup.forEach(field => {
          if (field.checked) selectedArray.push(field.parentElement.querySelector('.checkbox__label').innerHTML);
        });

        formData.append('user_select', selectedArray);
      }

      try {
        submit.setAttribute('disabled', 'disabled');
        submit.innerHTML = 'Отправляем...'

        let response = await fetch('/wp-content/themes/threaddigital/php/mail.php', {
          method: 'POST',
          body: formData,
        });

        let result = await response.json();
        if (response.ok) {
          submit.removeAttribute('disabled');
          submit.innerHTML = 'Отправить';
        }

        // console.log(result)

        if (document.getElementById('modal-callback').classList.contains('is-open')) MicroModal.close('modal-callback');
        MicroModal.show('modal-accept', modalParams);

        if (window.matchMedia("(max-width: 580px)").matches) {
          if (document.getElementById('modal-callback').classList.contains('is-open'))
            setTimeout(() => MicroModal.close('modal-accept'), 1500);
        }

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
    if (!field.value) field.classList.add('input__field--error');
    if (field.getAttribute('name') === 'user_phone')
      if (!field.value.match(/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){11}(\s*)?$/))
        field.classList.add('input__field--error');
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
  fields.forEach(field => {
    field.value = '';
    field.classList.remove('input__field--value');
  })
};
