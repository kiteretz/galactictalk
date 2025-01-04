import Splide from '@splidejs/splide';

document.querySelectorAll<HTMLElement>('.js-news-carousel').forEach((el) => {
  new Splide(el, {
    type: 'fade',
    arrows: true,
  }).mount();
});
