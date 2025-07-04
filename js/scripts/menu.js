const menuMobile = document.querySelector('#js-btn-menu');
const header = document.querySelector('header');
const submenuPointer = document.querySelector('.has-submenu .menu-top-level');
const submenu = document.querySelector('.has-submenu .submenu');
const linkAnchorInner = document.querySelectorAll('a[href^="#"]');
const menuHeight = header.getBoundingClientRect().height;
const sections = document.querySelectorAll('section');

linkAnchorInner.forEach((link) => {
  link.addEventListener('click', function (e) {
    e.preventDefault();
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

submenuPointer.addEventListener('click', (e) => {
  e.stopPropagation();
  submenu.classList.toggle('active');
  submenuPointer.closest('.has-submenu').classList.toggle('active');
});

document.addEventListener('click', (e) => {
  if (!submenu.contains(e.target) && !submenuPointer.contains(e.target)) {
    submenu.classList.remove('active');
    submenuPointer.closest('.has-submenu').classList.remove('active');
  }
});

menuMobile.addEventListener('click', () => {
  menuMobile.classList.toggle('active');
});

window.addEventListener('scroll', () => {
  window.scrollY > 50 ? header.classList.add('fixed') : header.classList.remove('fixed');
});
