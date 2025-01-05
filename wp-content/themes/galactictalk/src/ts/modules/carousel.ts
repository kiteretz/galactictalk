import Splide from '@splidejs/splide';

Splide.defaults = {
  type: 'loop',
  arrows: false,
  pagination: false,
  focus: 'center',
  autoWidth: true,
  flickPower: 200,
  mediaQuery: 'min',
};

document.querySelectorAll<HTMLElement>('.js-news-carousel').forEach((el) => {
  new Splide(el, {
    type: 'fade',
    arrows: true,
  }).mount();
});

document.querySelectorAll<HTMLElement>('.js-course-carousel').forEach((el) => {
  new Splide(el, {
    gap: '1.5rem',
    breakpoints: {
      1280: {
        destroy: true,
      },
    },
  }).mount();
});
