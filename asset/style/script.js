var TrandingSlider = new Swiper('.trending-Slider', {
  effect:'coverflow',
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 3000,
},
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 10,
    stretch: 0,
    depth: 100,
    modifier: 2.5,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

