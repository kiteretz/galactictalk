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

document.querySelectorAll<HTMLElement>('.js-tutor-carousel').forEach((el) => {
  new Splide(el, {
    type: 'slide',
    padding: '3.625rem',
    gap: 'var(--gutter)',
    breakpoints: {
      1280: {
        destroy: true,
      },
    },
  }).mount();
});

document
  .querySelectorAll<HTMLElement>('.js-testimonial-carousel')
  .forEach((el) => {
    new Splide(el, {
      gap: '1rem',
      speed: 1000,
      autoplay: true,
      updateOnMove: true,
    }).mount();
  });

document
  .querySelectorAll<HTMLElement>('.js-magazine-carousel')
  .forEach((el) => {
    new Splide(el, {
      gap: '2.5rem',
      breakpoints: {
        1280: {
          destroy: true,
        },
      },
    }).mount();
  });
