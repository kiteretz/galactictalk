/**
 * Modal
 *
 */
import MicroModal from 'micromodal';

MicroModal.init();

const triggers = document.querySelectorAll('.js-modal-trigger');
triggers.forEach((trigger) => {
  const a = trigger.matches('a')
    ? trigger
    : trigger.querySelector('a[href^="#"]');

  const target = a?.getAttribute('href')?.match(/^#(.*)/)?.[1];

  if (!target) {
    return;
  }

  const targetElement = document.getElementById(target);

  if (!targetElement) {
    return;
  }

  trigger.addEventListener('click', (e) => {
    e.preventDefault();

    if (targetElement.getAttribute('aria-hidden') === 'true') {
      MicroModal.show(target);
    } else {
      MicroModal.close(target);
    }
  });
});
