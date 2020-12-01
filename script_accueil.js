gsap.timeline({})
.from('.mot1', {opacity: 0, delay: 0.3})
.from('.mot2', {opacity: 0, delay: 0.3}, ">")
.from('.mot3', {opacity: 0, delay: 0.3}, ">");


var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    speed: 900,
    effect: 'fade',
    parallax: true,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
      },
  });

