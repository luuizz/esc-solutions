const menuMobile = document.querySelector('#js-btn-menu');
const header = document.querySelector('header');
const submenuPointers = document.querySelectorAll('.has-submenu .menu-top-level');
const submenus = document.querySelectorAll('.has-submenu .submenu');
const linkAnchorInner = document.querySelectorAll('a[href^="#"]');
const menuHeight = header.getBoundingClientRect().height;
const sections = document.querySelectorAll('section');

// Scroll suave para âncoras internas
linkAnchorInner.forEach((link) => {
  link.addEventListener('click', function (e) {
    const targetId = this.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      e.preventDefault();
      const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth',
      });
    }
  });
});

// Toggle de cada submenu
submenuPointers.forEach((pointer) => {
  pointer.addEventListener('click', (e) => {
    e.stopPropagation();
    const parent = pointer.closest('.has-submenu');
    parent.classList.toggle('active');
  });
});

// Fechar submenus ao clicar fora
document.addEventListener('click', (e) => {
  submenuPointers.forEach((pointer) => {
    const parent = pointer.closest('.has-submenu');
    if (!parent.contains(e.target)) {
      parent.classList.remove('active');
    }
  });
});

// Toggle menu mobile
menuMobile.addEventListener('click', function () {
  this.classList.toggle('is-active');
  document.documentElement.classList.toggle('menu-opened');
});

// Fecha o menu mobile ao clicar em um link
const menuLinks = document.querySelectorAll('#js-menu a');

menuLinks.forEach((link) => {
  link.addEventListener('click', () => {
    menuMobile.classList.remove('is-active');
    document.documentElement.classList.remove('menu-opened');
  });
});

// Fixar o header ao scrollar
window.addEventListener('scroll', () => {
  window.scrollY > 50 ? header.classList.add('fixed') : header.classList.remove('fixed');
});
