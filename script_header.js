let hamburger = document.getElementById('hamburger');
let menuWrapper = document.querySelector('.menu-wrapper');

hamburger.addEventListener('click', () => {
    if (menuWrapper.classList.contains('menu-visible')) {
        menuWrapper.classList.remove('menu-visible', 'transition');
        menuWrapper.classList.add('menu-wrapper', 'transition');
      } else {
        menuWrapper.classList.remove('menu-wrapper', 'transition');
        menuWrapper.classList.add('menu-visible', 'transition');
      }
    }
);