import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.querySelectorAll('.js-staggered').forEach((el) => {
  const children = el.children;

  if (children.length === 0) return;

  gsap.from(children, {
    opacity: 0,
    scale: 0.75,
    duration: 0.6,
    stagger: 0.1,
    ease: 'back.out(2)',
    scrollTrigger: {
      trigger: el,
      start: 'top 70%',
    },
  });
});

document.querySelectorAll('.js-bounce-in').forEach((el) => {
  gsap.from(el, {
    opacity: 0,
    scale: 0.75,
    duration: 0.6,
    ease: 'back.out(2)',
    scrollTrigger: {
      trigger: el,
      start: 'top 70%',
    },
  });
});
