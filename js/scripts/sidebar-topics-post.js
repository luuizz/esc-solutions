const listTopics = document.querySelector('.js-topics');
const topics = document.querySelectorAll('.s-content-post .container .right-content .content h2');
const parentDiv = document.querySelector('.s-content-post .container .left-content');

if (listTopics && parentDiv) {
  const filteredTopics = Array.from(topics).filter((topic) => topic.textContent.trim() !== '');
  topics.forEach((topic) => {
    if (topic.textContent.trim() === '') {
      topic.parentNode.removeChild(topic);
    }
  });
  filteredTopics.forEach((topic) => {
    let listElement = document.createElement('li');
    listTopics.appendChild(listElement);

    let ancorTopic = document.createElement('a');
    ancorTopic.setAttribute('href', '#');
    listElement.appendChild(ancorTopic);

    let textAncor = document.createElement('span');
    textAncor.textContent = topic.textContent;
    ancorTopic.appendChild(textAncor);
  });

  // Verifica a altura do elemento pai e adiciona a classe ao ul se necessário
  function checkParentHeight() {
    if (parentDiv && listTopics) {
      if (parentDiv.offsetHeight > 692) {
        listTopics.classList.add('scroll-active');
      } else {
        listTopics.classList.remove('scroll-active');
      }
    }
  }

  // Verifica a altura inicial
  checkParentHeight();

  // Adiciona um listener para redimensionamento da janela
  window.addEventListener('resize', checkParentHeight);

  // Manipulação de clique nos tópicos
  const allTopics = document.querySelectorAll('.js-topics li a');
  if (allTopics.length > 0) {
    allTopics[0].classList.add('active');
  }

  function offset(el) {
    const rect = el.getBoundingClientRect();
    const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return { top: rect.top + scrollTop, left: rect.left + scrollLeft };
  }

  function handleScrollTop(position) {
    const topics = document.querySelectorAll(
      '.s-content-post .container .right-content .content h2',
    )[position];
    window.scrollTo({
      behavior: 'smooth',
      left: 0,
      top: offset(topics).top - 90,
    });
  }

  allTopics.forEach((item, index) => {
    item.addEventListener('click', (event) => {
      event.preventDefault();
      allTopics.forEach((all) => all.classList.remove('active'));
      item.classList.add('active');
      handleScrollTop(index);
    });
  });
}
