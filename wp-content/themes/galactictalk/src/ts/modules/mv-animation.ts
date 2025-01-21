import gsap from 'gsap';

gsap.config({
  nullTargetWarn: false,
});

const mm = gsap.matchMedia();
const tl = gsap.timeline({
  defaults: {
    clearProps: true,
  },
});

// Prevent default events until animation is completed
const preventDefault = (e: Event) => e.preventDefault();
document.addEventListener('wheel', preventDefault, { passive: false });
document.addEventListener('touchmove', preventDefault, { passive: false });
document.addEventListener('keydown', preventDefault);

tl.to('.js-introduction', {
  autoAlpha: 0,
  clearProps: false,
  duration: 1,
  ease: 'power1.out',
});

tl.from(
  '.js-door',
  {
    duration: 1,
    ease: 'power3.inOut',
    scale: 10,
    filter: 'blur(20px)',
    opacity: 0,
    onComplete: () => {
      // Restore default events
      document.removeEventListener('wheel', preventDefault);
      document.removeEventListener('touchmove', preventDefault);
      document.removeEventListener('keydown', preventDefault);
    },
  },
  '-=0.6',
);

tl.from(
  '.js-another-world-mask',
  {
    duration: 1,
    ease: 'power3.inOut',
    maskSize: '52.739726em 55em',
  },
  '<',
);

mm.add(
  {
    isDesktop: `(min-width: 1024px)`,
    isMobile: `(max-width: 1023px)`,
  },
  ({ conditions }) => {
    const { isDesktop, isMobile } = conditions ?? {};
    tl.from(
      '.js-another-world',
      {
        duration: 1,
        ease: 'power3.inOut',
        scale: isDesktop ? 1.25 : 1.75,
      },
      '<',
    );
    if (isMobile) {
      tl.to(
        '.js-another-world',
        {
          yPercent: 45,
          clearProps: false,
          duration: 1,
          ease: 'power3.inOut',
        },
        '<',
      );
    }
  },
);

tl.from(
  '.js-staggered-mv',
  {
    duration: 0.6,
    ease: 'back.out(2)',
    opacity: 0,
    scale: 0.75,
    stagger: 0.04,
  },
  '-=0.3',
);

tl.from(
  '.js-tutor',
  {
    x: 0,
    y: '4em',
    duration: 0.6,
    ease: 'back.out(2)',
    stagger: 0.1,
  },
  '-=0.6',
);

tl.from(
  '.js-header',
  {
    autoAlpha: 0,
    duration: 0.5,
    ease: 'power3.out',
  },
  '<',
);

tl.from(
  '.js-split-text-mv [aria-hidden="true"] span',
  {
    duration: 0.5,
    ease: 'power3.out',
    stagger: 0.03,
    yPercent: 100,
  },
  '-=0.5',
);

tl.from(
  '.js-tagline',
  {
    duration: 0.5,
    ease: 'power3.out',
    opacity: 0,
    yPercent: 100,
  },
  '-=0.4',
);

tl.from(
  '.js-spaceship',
  {
    duration: 1,
    ease: 'power4.out',
    opacity: 0,
    scale: 0.75,
    stagger: 0.2,
    xPercent: 100,
    yPercent: -50,
  },
  '<0.15',
);

tl.from(
  '.js-ufo',
  {
    duration: 1,
    ease: 'power4.out',
    opacity: 0,
    scale: 0.75,
    stagger: 0.2,
    xPercent: -50,
    yPercent: -25,
  },
  '<0.15',
);

tl.from(
  '.js-news-mv',
  {
    duration: 0.5,
    ease: 'power3.out',
    opacity: 0,
  },
  '-=0.5',
);
