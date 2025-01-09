/**
 * Get the scrollbar width and set it as a CSS variable
 */
const resizeObserver = new ResizeObserver(() => {
  document.documentElement.style.setProperty(
    '--scrollbar-width',
    window.innerWidth - document.documentElement.clientWidth + 'px'
  );
});

resizeObserver.observe(document.documentElement);
