const tabs = document.querySelectorAll('.btn-tab');
const contents = document.querySelectorAll('.content-area .tab');
const bg = document.getElementById('tab-bg');

function moveBgToTab(tab) {
  const tabRect = tab.getBoundingClientRect();
  const containerRect = tab.parentElement.getBoundingClientRect();
  const offsetLeft = tabRect.left - containerRect.left;
  const width = tabRect.width;

  bg.style.transform = `translateX(${offsetLeft}px)`;
  bg.style.width = `${width}px`;
}

tabs.forEach((tab, index) => {
  tab.addEventListener('click', () => {
    document.querySelector('.btn-tab.active')?.classList.remove('active');
    tab.classList.add('active');

    document.querySelector('.content-area .tab.active')?.classList.remove('active');
    contents[index].classList.add('active');

    // Move fundo
    moveBgToTab(tab);
  });
});

const activeTab = document.querySelector('.btn-tab.active');
if (activeTab) moveBgToTab(activeTab);

document.querySelectorAll('.js-questions .question .head-title').forEach((header) => {
  header.addEventListener('click', () => {
    const questionItem = header.parentElement;
    const isOpen = questionItem.classList.contains('active');

    document.querySelectorAll('.js-questions .question.active').forEach((item) => {
      item.classList.remove('active');
      item.querySelector('p').style.maxHeight = null;
    });

    if (!isOpen) {
      questionItem.classList.add('active');
      const paragraph = questionItem.querySelector('p');
      paragraph.style.maxHeight = paragraph.scrollHeight + 'px';
    }
  });
});

document.querySelectorAll('.js-questions').forEach((faqList) => {
  const firstItem = faqList.querySelectorAll('.question');
  const i = firstItem.length - 1;
  if (firstItem === i) {
    firstItem.classList.add('active');
  }
});
