let hamburger = document.getElementById('hamburger');
let menuWrapper = document.querySelector('.menu-wrapper');

hamburger.addEventListener('click', () => {
    if (menuWrapper.classList.contains('menu-visible')) {
        menuWrapper.classList.remove('menu-visible');
        menuWrapper.classList.add('menu-wrapper');
      } else {
        menuWrapper.classList.remove('menu-wrapper');
        menuWrapper.classList.add('menu-visible');
      }
    }
);