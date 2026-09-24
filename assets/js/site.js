(() => {
  'use strict';
  const toggle = document.querySelector('.nav-toggle');
  const menu = document.querySelector('.nav-links');
  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      const open = menu.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }
  document.addEventListener('click', (event) => {
    document.querySelectorAll('.nav-more[open]').forEach((details) => {
      if (!details.contains(event.target)) details.removeAttribute('open');
    });
  });
})();
