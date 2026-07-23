/**
 * Morning Star Printing Press Co. — Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function () {

    // ── AOS Animations ──────────────────────────────────────────
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            offset: 100,
            once: true,
        });
    }

    // ── Navbar Scroll Effect ─────────────────────────────────────
    const navbar = document.getElementById('mainNavbar');
    if (navbar) {
        window.addEventListener('scroll', function () {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
    }

    // ── Back to Top Button ───────────────────────────────────────
    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', function () {
            backToTop.classList.toggle('show', window.scrollY > 300);
        });

        backToTop.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ── Smooth Scroll for Anchor Links ───────────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });

    // ── Scroll-Spy: Highlight Active Nav Link ────────────────────
    const navSectionMap = {
        'home':     document.getElementById('nav-home'),
        'about':    document.getElementById('nav-about'),
        'services': document.getElementById('nav-services'),
        'contact':  document.getElementById('nav-contact'),
    };

    const sections = document.querySelectorAll('section[id]');

    function setActiveNav(id) {
        Object.values(navSectionMap).forEach(function (link) {
            if (link) link.classList.remove('active');
        });
        if (navSectionMap[id]) {
            navSectionMap[id].classList.add('active');
        }
    }

    if (sections.length > 0) {
        const sectionObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    setActiveNav(entry.target.id);
                }
            });
        }, {
            rootMargin: '-40% 0px -55% 0px',
            threshold: 0
        });

        sections.forEach(function (section) {
            sectionObserver.observe(section);
        });
    }

    // Set active nav on page load based on URL hash
    (function () {
        const hash = window.location.hash.replace('#', '');
        if (hash && navSectionMap[hash]) {
            setActiveNav(hash);
        } else {
            setActiveNav('home');
        }
    })();

    // ── Animated Counters ────────────────────────────────────────
    function animateCounter(element) {
        const finalValue = parseInt(element.textContent);
        const increment = finalValue / 50;
        let currentValue = 0;

        const counter = setInterval(function () {
            currentValue += increment;
            if (currentValue >= finalValue) {
                element.textContent = finalValue.toLocaleString();
                clearInterval(counter);
            } else {
                element.textContent = Math.floor(currentValue).toLocaleString();
            }
        }, 30);
    }

    const countersSection = document.querySelector('.counters-section');
    if (countersSection) {
        const counterObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.counter-number');
                    counters.forEach(function (counter) {
                        if (!counter.classList.contains('animated')) {
                            animateCounter(counter);
                            counter.classList.add('animated');
                        }
                    });
                }
            });
        }, { threshold: 0.5 });

        counterObserver.observe(countersSection);
    }

    // ── Auto-dismiss Alerts ──────────────────────────────────────
    document.querySelectorAll('.alert').forEach(function (alert) {
        setTimeout(function () {
            alert.style.display = 'none';
        }, 5000);
    });

});
