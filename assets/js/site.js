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
    document.querySelectorAll('.nav-more[open], .lang-menu[open]').forEach((details) => {
      if (!details.contains(event.target)) details.removeAttribute('open');
    });
  });

  const platformGrid = document.querySelector('[data-platform-suggest]');
  if (platformGrid) {
    const rawPlatform = String(
      (navigator.userAgentData && navigator.userAgentData.platform) ||
      navigator.platform ||
      navigator.userAgent ||
      ''
    ).toLowerCase();

    let os = '';
    if (rawPlatform.includes('win')) os = 'windows';
    else if (rawPlatform.includes('mac')) os = 'macos';
    else if (rawPlatform.includes('linux') || rawPlatform.includes('x11')) os = 'linux';

    if (os) {
      const card = platformGrid.querySelector('.download-card[data-os="' + os + '"]');
      if (card) {
        card.classList.add('recommended');
        const badge = card.querySelector('.platform-recommended');
        if (badge) badge.hidden = false;
      }
    }
  }

  const storyStages = document.querySelectorAll('.story-stage[data-reveal]');
  if (storyStages.length) {
    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.14, rootMargin: '0px 0px -8% 0px' });
      storyStages.forEach((stage) => observer.observe(stage));
    } else {
      storyStages.forEach((stage) => stage.classList.add('is-visible'));
    }
  }

})();
