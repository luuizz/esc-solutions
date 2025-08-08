const cnpjInput = document.getElementById('cnpj');
const emailInput = document.getElementById('email');
const selectEscStatus = document.getElementById('escStatus');
const cnpjField = document.getElementById('cnpj-field');
const submitButton = document.getElementById('submit-button');
const form = document.querySelector('#form-account');
const wpButton = document.querySelector('#wpforms-submit-25');

if (wpButton) {
  wpButton.addEventListener('click', function () {
    gtag_report_conversion();
  });
}

// Máscara CNPJ
if (cnpjInput) {
  cnpjInput.addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, '');
    value = value.replace(/^(\d{2})(\d)/, '$1.$2');
    value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
    value = value.replace(/\.(\d{3})(\d)/, '.$1/$2');
    value = value.replace(/(\d{4})(\d)/, '$1-$2');
    e.target.value = value;
  });
}

function isValidCNPJ(cnpj) {
  const cleaned = cnpj.replace(/\D/g, '');
  return cleaned.length === 14;
}

function isValidEmail(email) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
}

if (form) {
  // Envio do formulário
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    gtag_report_conversion();

    const escStatus = selectEscStatus?.value;
    const cnpj = cnpjInput?.value || '';
    const email = emailInput?.value || '';

    if (!escStatus) {
      alert('Selecione uma opção de ESC.');
      return;
    }

    if (!isValidEmail(email)) {
      alert('E-mail inválido.');
      return;
    }

    if (escStatus === 'possui-esc') {
      if (!isValidCNPJ(cnpj)) {
        alert('CNPJ inválido.');
        return;
      }
    }

<<<<<<< HEAD
    if (escStatus === 'nao-possui-esc') {
      if (!name.trim()) {
        alert('Nome é obrigatório.');
        return;
      }

      if (!telefone.trim()) {
        alert('Telefone é obrigatório.');
        return;
      }

      if (!isValidTelefone(telefone)) {
        alert('Telefone inválido.');
        return;
      }
    }

    const formData = {
      escStatus,
      ...(escStatus === 'possui-esc' ? { cnpj } : { name, telefone }),
      email,
    };

    localStorage.setItem('formData', JSON.stringify(formData));

    window.location.href = `https://system.escsolutions.ai/admin/register?cnpj=${cnpj}&email=${email}`
=======
    window.location.href = `https://system.escsolutions.ai/admin/register?cnpj=${cnpj}&email=${email}`;
>>>>>>> 87bc057 (feat: removido linhas desnecessárias e implementado a lógica para redirecionamento e conexão com a plataforma)
  });
}
