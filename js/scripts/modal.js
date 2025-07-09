document.querySelectorAll('.js-btn-modal').forEach((btn) => {
  btn.addEventListener('click', () => {
    const modalId = btn.dataset.modalId;
    const modal = document.getElementById(modalId);
    modal?.classList.add('show');
  });
});

document.querySelectorAll('.js-btn-close').forEach((btn) => {
  btn.addEventListener('click', () => {
    const modal = btn.closest('.modal');
    modal?.classList.remove('show');
  });
});

// Fecha o modal ao clicar no fundo
document.querySelectorAll('.modal-overlay').forEach((overlay) => {
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) {
      overlay.closest('.modal')?.classList.remove('show');
    }
  });
});

//Download da revista ao preencher o formulário
document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('#wpforms-form-29');
  if (form) {
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      const pdfUrl =
        'https://stage-escsolutions.doizz.com.br/wp-content/uploads/2025/07/1711976423145Plano20de20AC3A7C3A3o20para20Contruir20Futuros20de20Grandes20Empresas.pdf';
      const link = document.createElement('a');
      link.href = pdfUrl;
      link.download = 'YourCustomPDF.pdf'; //
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    });
  }
});

const btnFaleConosco = document.querySelector('.js-btn-modal-fale-conosco');

btnFaleConosco.addEventListener('click', (e) => {
  e.preventDefault();
  const modal = document.getElementById('modal-abrir-esc');
  modal?.classList.add('show');
});
