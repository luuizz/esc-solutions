function initTabsSection(section) {
  const tabs = section.querySelectorAll('.btn-tab');
  const contents = section.querySelectorAll('.content-area .tab');
  const bg = section.querySelector('.tab-background');

  function moveBgToTab(tab) {
    const tabRect = tab.getBoundingClientRect();
    const offsetLeft = tab.offsetLeft;
    const width = tabRect.width;

    if (bg) {
      bg.style.transform = `translateX(${offsetLeft}px)`;
      bg.style.width = `${width}px`;
    }
  }

  tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      section.querySelector('.btn-tab.active')?.classList.remove('active');
      tab.classList.add('active');

      section.querySelector('.content-area .tab.active')?.classList.remove('active');
      contents[index].classList.add('active');

      moveBgToTab(tab);

      const isMobile = window.innerWidth <= 768;
      if (isMobile) {
        tab.scrollIntoView({
          behavior: 'smooth',
          inline: 'center',
          block: 'nearest',
        });
      }
    });
  });

  const activeTab = section.querySelector('.btn-tab.active');
  if (activeTab) moveBgToTab(activeTab);

  // Accordions (se existirem)
  section.querySelectorAll('.js-questions').forEach((faqList) => {
    const questions = faqList.querySelectorAll('.question');

    questions.forEach((item) => {
      const header = item.querySelector('.head-title');
      if (header) {
        header.addEventListener('click', () => {
          const isOpen = item.classList.contains('active');

          questions.forEach((el) => {
            el.classList.remove('active');
            const p = el.querySelector('p');
            if (p) p.style.maxHeight = null;
          });

          if (!isOpen) {
            item.classList.add('active');
            const p = item.querySelector('p');
            if (p) p.style.maxHeight = p.scrollHeight + 'px';
          }
        });
      }
    });
  });
}

document.querySelectorAll('.area-tabs').forEach(initTabsSection);
