// question-list.js

const accordions = document.querySelectorAll('.accordion');

accordions.forEach(accordion => {
  const header = accordion.querySelector('.accordion-header');
  const body = accordion.querySelector('.accordion-body');

  header.addEventListener('click', () => {
    accordion.classList.toggle('active');

    if (accordion.classList.contains('active')) {
      body.style.maxHeight = body.scrollHeight + 'px';
    } else {
      body.style.maxHeight = 0;
    }
  });
});

