/*
    Signal — the site's small behavior layer.

    - .js on <html> gates the reveal system (no JS, nothing hidden)
    - IntersectionObserver flips .is-visible on [data-reveal]
    - the header pill deepens its shadow once the page scrolls
    - the mobile menu toggles .menu-open on <html>
    - spotlight cards track the pointer into --mx / --my
*/
(function () {
    document.documentElement.classList.add('js');

    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Reveal on scroll
    var revealed = document.querySelectorAll('[data-reveal]');
    if (reduceMotion || !('IntersectionObserver' in window)) {
        revealed.forEach(function (el) { el.classList.add('is-visible'); });
    } else {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.05 });
        revealed.forEach(function (el) { observer.observe(el); });
    }

    // Header shadow once scrolled
    var header = document.getElementById('header');
    if (header) {
        var onScroll = function () {
            if (window.scrollY > 8) {
                header.setAttribute('data-scrolled', '');
            } else {
                header.removeAttribute('data-scrolled');
            }
        };
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });
    }

    // Mobile menu
    var menuButton = document.querySelector('[data-menu-button]');
    if (menuButton) {
        menuButton.addEventListener('click', function () {
            var open = document.documentElement.classList.toggle('menu-open');
            menuButton.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
        document.querySelectorAll('[data-mobile-panel] a').forEach(function (link) {
            link.addEventListener('click', function () {
                document.documentElement.classList.remove('menu-open');
                menuButton.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // Spotlight cards
    if (!reduceMotion) {
        document.querySelectorAll('.spotlight-card').forEach(function (card) {
            card.addEventListener('pointermove', function (event) {
                var rect = card.getBoundingClientRect();
                card.style.setProperty('--mx', (event.clientX - rect.left) + 'px');
                card.style.setProperty('--my', (event.clientY - rect.top) + 'px');
            });
        });
    }
})();
