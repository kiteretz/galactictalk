import { gsap } from 'gsap';
import { Draggable } from 'gsap/Draggable';

gsap.registerPlugin(Draggable);

const draggableEl = document.querySelector<HTMLDivElement>(
  '.js-draggable-course',
);

export const checkAnchorsVisibility = () => {
  const anchors = draggableEl?.querySelectorAll('a');
  const parentSection = draggableEl?.closest('section');

  if (!parentSection) return;

  const sectionRect = parentSection.getBoundingClientRect();

  anchors?.forEach((anchor) => {
    const anchorRect = anchor.getBoundingClientRect();
    const relativeX = anchorRect.x - sectionRect.x;
    const relativeY = anchorRect.y - sectionRect.y;
    const relativeRight = relativeX + anchorRect.width;
    const relativeBottom = relativeY + anchorRect.height;

    const isOutOfSection =
      relativeX < 0 ||
      relativeRight > sectionRect.width ||
      relativeY < 0 ||
      relativeBottom > sectionRect.height;

    if (isOutOfSection) {
      anchor.setAttribute('tabindex', '-1');
    } else {
      anchor.removeAttribute('tabindex');
    }
  });
};

const draggableCourse = () => {
  if (!draggableEl) return;

  const draggable = Draggable.create(draggableEl, {
    type: 'rotation',
    trigger: draggableEl.parentElement,
    minimumMovement: 0.1,
    onDragEnd: function () {
      // Snap rotation by 6 degrees
      const roundedRotation = Math.round(this.rotation / 6) * 6;
      gsap.to(draggableEl, {
        rotation: roundedRotation,
        duration: 0.3,
        onComplete: checkAnchorsVisibility,
      });
    },
  });

  const disableDraggable = () => {
    draggableEl.style.transform = 'revert';
    draggable.forEach((draggable) => draggable.disable());
  };

  const toggleDraggable = () => {
    if (window.matchMedia('(min-width: 1280px)').matches) {
      draggable.forEach((draggable) => draggable.enable());
    } else {
      disableDraggable();
    }
  };

  const resizeObserver = new ResizeObserver(() => {
    toggleDraggable();
    checkAnchorsVisibility();
  });

  resizeObserver.observe(document.documentElement);
};

draggableCourse();

window.addEventListener('load', checkAnchorsVisibility);
