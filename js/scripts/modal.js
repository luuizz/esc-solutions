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

const btnFaleConosco = document.querySelector('.js-btn-modal-fale-conosco');

btnFaleConosco.addEventListener('click', (e) => {
  e.preventDefault();
  const modal = document.getElementById('modal-abrir-esc');
  modal?.classList.add('show');
});
