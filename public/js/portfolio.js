/* ============================================================
   PORTFOLIO — JavaScript
   Drop in public/js/portfolio.js
   Link before </body>: <script src="{{ asset('js/portfolio.js') }}"></script>
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {

  /* ── Scroll Reveal ─────────────────────────────────── */
  const reveals = document.querySelectorAll(
    '.project-card, .skill-group, .about-grid, .contact-inner, .tools-strip, .section-header'
  );
  reveals.forEach(el => el.classList.add('reveal'));

  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach((e, i) => {
      if (e.isIntersecting) {
        setTimeout(() => e.target.classList.add('visible'), i * 80);
        revealObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  reveals.forEach(el => revealObs.observe(el));

  /* ── Skill Bars ────────────────────────────────────── */
  const barObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.querySelectorAll('.skill-fill').forEach(bar => {
          bar.style.width = bar.dataset.width + '%';
        });
        barObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.3 });

  document.querySelectorAll('.skill-group').forEach(g => barObs.observe(g));

  /* ── Animated Counters ─────────────────────────────── */
  const counterObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.querySelectorAll('.counter-num').forEach(el => {
          const target = +el.dataset.count;
          const duration = 1800;
          const start = performance.now();
          const tick = (now) => {
            const p = Math.min((now - start) / duration, 1);
            const ease = 1 - Math.pow(1 - p, 3);
            el.textContent = Math.round(ease * target);
            if (p < 1) requestAnimationFrame(tick);
          };
          requestAnimationFrame(tick);
        });
        counterObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.5 });

  const heroCounter = document.querySelector('.hero-counter');
  if (heroCounter) counterObs.observe(heroCounter);

  /* ── Active Nav Link ───────────────────────────────── */
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('nav a[href^="#"], .navbar a[href^="#"]');

  const navObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        navLinks.forEach(a => {
          a.style.color = a.getAttribute('href') === '#' + e.target.id
            ? 'var(--accent)'
            : '';
        });
      }
    });
  }, { rootMargin: '-40% 0px -50% 0px' });

  sections.forEach(s => navObs.observe(s));

  /* ── Sticky Nav background ─────────────────────────── */
  const nav = document.querySelector('nav, .navbar, header');
  if (nav) {
    window.addEventListener('scroll', () => {
      nav.style.boxShadow = window.scrollY > 60
        ? '0 1px 32px rgba(0,0,0,0.5)'
        : '';
    }, { passive: true });
  }

});