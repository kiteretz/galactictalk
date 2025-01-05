/**
 * Accordion
 */
document.querySelectorAll('.js-accordion').forEach((item) => {
  const attr = item.getAttribute('aria-expanded') ? 'aria' : 'data';
  const trigger = item.querySelector('.js-accordion-trigger');

  trigger?.addEventListener('click', () => {
    const isExpanded = item.getAttribute(`${attr}-expanded`) === 'true';
    item.setAttribute(`${attr}-expanded`, `${!isExpanded}`);
    trigger.nextElementSibling?.setAttribute(`${attr}-hidden`, `${isExpanded}`);
  });
});
