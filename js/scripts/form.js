const form = document.querySelector('form');
const selectEscStatus = document.getElementById('escStatus');
const cnpjInput = document.getElementById('cnpj');
const emailInput = document.querySelector('input[type="email"]');

if (form && selectEscStatus && cnpjInput && emailInput) {
  cnpjInput.addEventListener('input', () => {
    let value = cnpjInput.value.replace(/\D/g, '');

    if (value.length > 14) value = value.slice(0, 14);

    value = value.replace(/^(\d{2})(\d)/, '$1.$2');
    value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
    value = value.replace(/\.(\d{3})(\d)/, '.$1/$2');
    value = value.replace(/(\d{4})(\d)/, '$1-$2');

    cnpjInput.value = value;
  });

  function isValidEmail(email) {
    const regex = /^[\w-.]+@([\w-]+\.)+[\w-]{2,}$/;
    return regex.test(email);
  }

  function isValidCNPJ(cnpj) {
    const regex = /^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/;
    return regex.test(cnpj);
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const escStatus = selectEscStatus.value;
    const cnpj = cnpjInput.value;
    const email = emailInput.value;

    if (!escStatus) {
      alert('Selecione uma opção de ESC.');
      return;
    }

    if (!isValidCNPJ(cnpj)) {
      alert('CNPJ inválido.');
      return;
    }

    if (!isValidEmail(email)) {
      alert('Email inválido.');
      return;
    }

    const formData = {
      escStatus,
      cnpj,
      email,
    };

    localStorage.setItem('formData', JSON.stringify(formData));

    alert('Dados salvos com sucesso!');
  });
}
