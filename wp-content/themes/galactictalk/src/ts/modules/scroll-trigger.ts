import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { checkAnchorsVisibility } from './draggable-course';

gsap.registerPlugin(ScrollTrigger);

const mm = gsap.matchMedia();

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

document.querySelectorAll('.js-draggable-course').forEach((el) => {
  const listItems = el.querySelectorAll('li');

  mm.add('(max-width: 1279px)', () => {
    const tween = gsap.from(listItems, {
      opacity: 0,
      scale: 0.75,
      duration: 0.6,
      ease: 'back.out(2)',
      scrollTrigger: {
        trigger: el,
        start: 'top 70%',
      },
    });

    return () => {
      tween.kill();
    };
  });

  mm.add('(min-width: 1280px)', () => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: document.querySelector('.js-course-carousel'),
        start: 'top 60%',
      },
    });
    tl.from(el, {
      rotate: 60,
      duration: 1,
      ease: 'power3.out',
      onComplete: checkAnchorsVisibility,
    }).from(
      listItems,
      {
        opacity: 0,
        duration: 0.6,
        stagger: 0.02,
        ease: 'back.out(2)',
      },
      '<',
    );

    return () => {
      tl.kill();
    };
  });
});
