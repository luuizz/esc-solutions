const menuMobile = document.querySelector('#js-btn-menu');
const header = document.querySelector('header');

menuMobile.addEventListener('click', () => {
  menuMobile.classList.toggle('active');
});

window.addEventListener('scroll', () => {
  window.scrollY > 50 ? header.classList.add('fixed') : header.classList.remove('fixed');
});
