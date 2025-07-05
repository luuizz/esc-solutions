const form = document.querySelector('form');
const selectEscStatus = document.getElementById('escStatus');
const cnpjInput = document.getElementById('cnpj');
const emailInput = document.querySelector('input[type="email"]');

cnpjInput.addEventListener('input', () => {
  let value = cnpjInput.value.replace(/\D/g, '');

  if (value.length > 14) value = value.slice(0, 14);

  value = value.replace(/^(\d{2})(\d)/, '$1.$2');
  value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
  value = value.replace(/\.(\d{3})(\d)/, '.$1/$2');
  value = value.replace(/(\d{4})(\d)/, '$1-$2');

  cnpjInput.value = value;
});

// Validação de e-mail com regex
function isValidEmail(email) {
  const regex = /^[\w-.]+@([\w-]+\.)+[\w-]{2,}$/;
  return regex.test(email);
}

// Validação básica de CNPJ (regex — formato, não autenticidade)
function isValidCNPJ(cnpj) {
  const regex = /^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/;
  return regex.test(cnpj);
}

form.addEventListener('submit', function (e) {
  e.preventDefault();

  const escStatus = selectEscStatus.value;
  const cnpj = cnpjInput.value;
  const email = emailInput.value;

  // Validação básica
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const cnpjRegex = /^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/;

  if (!escStatus) {
    alert('Selecione uma opção de ESC.');
    return;
  }

  if (!cnpjRegex.test(cnpj)) {
    alert('CNPJ inválido.');
    return;
  }

  if (!emailRegex.test(email)) {
    alert('Email inválido.');
    return;
  }

  // Salvar no localStorage
  const formData = {
    escStatus,
    cnpj,
    email,
  };

  localStorage.setItem('formData', JSON.stringify(formData));

  alert('Dados salvos com sucesso!');
});
