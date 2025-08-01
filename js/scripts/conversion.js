const whatsappLink = document.querySelector('.js-whatsapp-link');

if (whatsappLink) {
  whatsappLink.addEventListener('click', (e) => {
    e.preventDefault();
    const url = e.currentTarget.href;

    console.log(url);

    gtag_report_conversion(url);
  });
}
