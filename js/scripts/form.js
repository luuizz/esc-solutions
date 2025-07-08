const cnpjInput = document.getElementById('cnpj');
const emailInput = document.getElementById('email');
const selectEscStatus = document.getElementById('escStatus');
const nomeTelefoneFields = document.getElementById('nome-telefone-fields');
const cnpjField = document.getElementById('cnpj-field');
const submitButton = document.getElementById('submit-button');
const form = document.querySelector('form');
const titleForm = document.querySelector('.js-form-title');
const telefoneInput = document.getElementById('telefone');

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

// Máscara Telefone
if (telefoneInput) {
  telefoneInput.addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, '');

    if (value.length <= 10) {
      value = value.replace(/^(\d{2})(\d)/, '($1) $2');
      value = value.replace(/(\d{4})(\d)/, '$1-$2');
    } else {
      value = value.replace(/^(\d{2})(\d)/, '($1) $2');
      value = value.replace(/(\d{5})(\d)/, '$1-$2');
    }

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

function isValidTelefone(telefone) {
  const cleaned = telefone.replace(/\D/g, '');
  return /^(\d{10}|\d{11})$/.test(cleaned);
}

function toggleFieldsBasedOnESC(status) {
  if (!cnpjField || !nomeTelefoneFields || !submitButton || !emailInput || !titleForm) return;

  if (status === 'possui-esc') {
    cnpjField.style.display = 'flex';
    nomeTelefoneFields.style.display = 'none';
    submitButton.textContent = 'Comece agora';
    emailInput.placeholder = 'E-mail';
    titleForm.textContent = 'Comece hoje mesmo! Gratuito para o cadastro de até 5 contratos';
  } else if (status === 'nao-possui-esc') {
    cnpjField.style.display = 'none';
    nomeTelefoneFields.style.display = 'block';
    submitButton.textContent = 'Agendar reunião';
    emailInput.placeholder = 'E-mail';
    titleForm.textContent =
      'Ainda não possui ESC? Preencha abaixo e agende uma reunião com um consultor';
  } else {
    cnpjField.style.display = 'none';
    nomeTelefoneFields.style.display = 'none';
    submitButton.textContent = 'Enviar';
    emailInput.placeholder = 'Insira seu e-mail';
    titleForm.textContent = '';
  }
}

if (form) {
  // Inicializa estado inicial do formulário
  if (cnpjField) cnpjField.style.display = 'flex';
  if (nomeTelefoneFields) nomeTelefoneFields.style.display = 'none';

  // Escuta mudança no select
  if (selectEscStatus) {
    selectEscStatus.addEventListener('change', function () {
      toggleFieldsBasedOnESC(this.value);
    });
  }

  // Envio do formulário
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const escStatus = selectEscStatus?.value;
    const cnpj = cnpjInput?.value || '';
    const email = emailInput?.value || '';
    const name = document.getElementById('name')?.value || '';
    const telefone = telefoneInput?.value || '';

    if (!escStatus) {
      alert('Selecione uma opção de ESC.');
      return;
    }

    if (escStatus === 'possui-esc') {
      if (!isValidCNPJ(cnpj)) {
        alert('CNPJ inválido.');
        return;
      }
    }

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
    alert('Dados salvos com sucesso!');
  });
}
