/* Wow, tellement un beau spot pour écrire du JS */
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    speed: 900,
    parallax: true,
    loop: true,
    pagination: {
          el: '.swiper-pagination',
        },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });