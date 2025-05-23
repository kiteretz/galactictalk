import Splide, {
  EventInterface,
  Components,
  TransitionComponent,
  EVENT_MOUNTED,
  EVENT_REFRESH,
} from '@splidejs/splide';

Splide.defaults = {
  type: 'loop',
  arrows: false,
  pagination: false,
  focus: 'center',
  autoWidth: true,
  flickPower: 200,
  mediaQuery: 'min',
};

const resetTabindex = (el: HTMLElement) => {
  el.querySelectorAll('[tabindex="-1"]').forEach((element) => {
    element.removeAttribute('tabindex');
  });
};

const CardTransition = (
  Splide: Splide,
  Components: Components,
): TransitionComponent => {
  const { on } = EventInterface(Splide);
  const { Controller, Slides } = Components;
  const { slides } = Components.Elements;

  const setSlideStyles = (index: number, direction: 'left' | 'right') => {
    const currentSlide = slides[index];
    const prevSlide =
      (slides[index].previousElementSibling as HTMLElement) ??
      slides[slides.length - 1];
    const nextSlide =
      (slides[index].nextElementSibling as HTMLElement) ?? slides[0];
    const movingSlide = direction === 'left' ? prevSlide : nextSlide;

    slides.forEach((slide) => {
      slide.style.zIndex = '1';
    });
    movingSlide.style.zIndex = '4';
    currentSlide.style.zIndex = '3';

    const translateValue = direction === 'left' ? '-100%' : '100%';
    movingSlide.style.transform = `translateX(${translateValue})`;

    setTimeout(() => {
      if (direction === 'left') {
        movingSlide.style.zIndex = '0';
      } else {
        movingSlide.style.zIndex = '2';
      }
      movingSlide.style.transform = 'translateX(0)';
    }, 250);
  };

  const init = (): void => {
    Slides.forEach((Slide) => {
      Slide.style('translate', `-${100 * Slide.index}%`);
      Slide.style('opacity', '1');
    });
  };

  const mount = (): void => {
    on([EVENT_MOUNTED, EVENT_REFRESH], init);
  };

  let currentIndex = 0;

  const start = (index: number, done: () => void): void => {
    const newIndex = Controller.getIndex();

    if (newIndex > currentIndex) {
      setSlideStyles(index, 'left');
    } else {
      setSlideStyles(index, 'right');
    }
    setTimeout(done);

    currentIndex = Controller.getIndex();
  };

  return {
    mount,
    start,
    cancel: (): void => {}, // eslint-disable-line no-empty-function, @typescript-eslint/no-empty-function
  };
};

document.querySelectorAll<HTMLElement>('.js-news-carousel').forEach((el) => {
  new Splide(el, {
    type: 'fade',
    arrows: true,
  }).mount({}, CardTransition);
});

document.querySelectorAll<HTMLElement>('.js-course-carousel').forEach((el) => {
  new Splide(el, {
    gap: '1.5rem',
    autoplay: true,
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
  })
    .on('ready', () => {
      if (window.matchMedia('(min-width: 1280px)').matches) {
        resetTabindex(el);
      }
    })
    .on('destroy', () => {
      resetTabindex(el);
    })
    .mount();
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
    })
      .on('ready', () => {
        if (window.matchMedia('(min-width: 1280px)').matches) {
          resetTabindex(el);
        }
      })
      .on('destroy', () => {
        resetTabindex(el);
      })
      .mount();
  });

document.querySelectorAll<HTMLElement>('.js-service-carousel').forEach((el) => {
  new Splide(el, {
    gap: '1rem',
    speed: 1000,
    autoplay: true,
    updateOnMove: true,
  }).mount();
});
