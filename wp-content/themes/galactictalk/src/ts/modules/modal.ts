/**
 * Modal
 *
 */
import MicroModal from 'micromodal';

const triggers = document.querySelectorAll('.js-modal-trigger');
triggers.forEach((trigger) => {
  const target = trigger.getAttribute('href')?.match(/^#(.*)/)?.[1];

  if (!target) {
    return;
  }

  const targetElement = document.getElementById(target);

  if (!targetElement) {
    return;
  }

  trigger.addEventListener('click', () => {
    if (targetElement.getAttribute('aria-hidden') === 'true') {
      MicroModal.show(target);
    } else {
      MicroModal.close(target);
    }
  });
});
