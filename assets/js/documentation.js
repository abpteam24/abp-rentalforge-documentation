/**
 * ABP RentalForge - Documentation
 * Vanilla JS tab engine (prefix: abrf). No dependencies.
 * Handles: tab switching, nav group toggles, live search,
 * mobile drawer, deep links (#hash), scroll-to-top.
 */
(function () {
    'use strict';

    if (typeof document === 'undefined') {
        return;
    }

    function ready(fn) {
        if (document.readyState !== 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }

    ready(function () {
        const wrap = document.querySelector('.abrf-doc');
        if (!wrap) {
            return;
        }

        const nav = wrap.querySelector('.abrf-nav');
        const content = wrap.querySelector('.abrf-content');
        const links = Array.prototype.slice.call(nav.querySelectorAll('[data-abrf-target]'));
        const pages = Array.prototype.slice.call(content.querySelectorAll('[data-abrf-tab]'));
        const searchInput = wrap.querySelector('.abrf-search input');
        const burger = wrap.querySelector('.abrf-burger');
        const backdrop = wrap.querySelector('.abrf-backdrop');
        const topBtn = wrap.querySelector('.abrf-top');
        const prevBtn = wrap.querySelector('.abrf-page-nav .abrf-navbtn--prev');
        const nextBtn = wrap.querySelector('.abrf-page-nav .abrf-navbtn--next');
        const navInfo = wrap.querySelector('.abrf-page-nav .abrf-navinfo');

        let activeId = null;

        const order = links.map(function (l) {
            return l.getAttribute('data-abrf-target');
        });

        function updatePageNav() {
            const idx = order.indexOf(activeId);
            const total = order.length;
            if (prevBtn) {
                prevBtn.disabled = idx <= 0;
            }
            if (nextBtn) {
                nextBtn.disabled = idx === -1 || idx >= total - 1;
            }
            if (navInfo) {
                const label = (idx >= 0 && links[idx]) ? links[idx].textContent.replace(/\s+/g, ' ').trim() : '';
                navInfo.textContent = (idx + 1) + ' / ' + total + ' · ' + label;
            }
        }

        function showTab(id, updateHash) {
            const page = content.querySelector('[data-abrf-tab="' + id + '"]');
            if (!page) {
                return;
            }

            pages.forEach(function (p) { p.classList.remove('is-active'); });
            page.classList.add('is-active');

            links.forEach(function (l) {
                const hit = l.getAttribute('data-abrf-target') === id;
                l.classList.toggle('is-active', hit);
                if (hit) {
                    let group = l.closest('.abrf-nav-group');
                    while (group) {
                        group.classList.add('is-open');
                        group = group.parentElement ? group.parentElement.closest('.abrf-nav-group') : null;
                    }
                }
            });

            activeId = id;

            if (updateHash && history.replaceState) {
                history.replaceState(null, '', '#' + id.replace('#', ''));
            }

            const scroller = content;
            if (scroller) {
                scroller.scrollTop = 0;
            }
            window.scrollTo({ top: wrap.getBoundingClientRect().top + window.scrollY - 90, behavior: 'smooth' });

            updatePageNav();
        }

        /* click nav links */
        links.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const id = link.getAttribute('data-abrf-target');
                if (id) {
                    showTab(id, true);
                    closeDrawer();
                }
            });
        });

        /* nav group toggles (also open the group landing page) */
        Array.prototype.forEach.call(nav.querySelectorAll('[data-abrf-group]'), function (btn) {
            btn.addEventListener('click', function () {
                const group = btn.closest('.abrf-nav-group');
                if (group) {
                    group.classList.toggle('is-open');
                }
                const id = btn.getAttribute('data-abrf-target');
                if (id) {
                    showTab(id, true);
                    closeDrawer();
                }
            });
        });

        /* search filter */
        if (searchInput) {
            searchInput.addEventListener('input', function () {
                const q = searchInput.value.trim().toLowerCase();
                /* first pass: show / hide every nav link (top-level and grouped) */
                links.forEach(function (l) {
                    const id = l.getAttribute('data-abrf-target');
                    const visible = !q || l.textContent.toLowerCase().indexOf(q) !== -1;
                    l.style.display = visible ? '' : 'none';
                    /* while searching highlight the matches; when cleared restore the real active page */
                    l.classList.toggle('is-active', q ? visible : (id === activeId));
                });
                /* second pass: hide group headers that have no matching children */
                Array.prototype.forEach.call(nav.querySelectorAll('.abrf-nav-group'), function (group) {
                    const sub = group.querySelector('.abrf-nav-sub');
                    let anyVisible = false;
                    if (sub) {
                        Array.prototype.forEach.call(sub.querySelectorAll('.abrf-nav-link'), function (l) {
                            if (l.style.display !== 'none') {
                                anyVisible = true;
                            }
                        });
                        sub.style.display = anyVisible ? '' : 'none';
                    }
                    const toggle = group.querySelector('.abrf-nav-toggle');
                    if (toggle) {
                        toggle.style.display = anyVisible ? '' : 'none';
                    }
                });
            });
        }

        /* mobile drawer */
        function closeDrawer() {
            wrap.classList.remove('is-open');
        }
        if (burger) {
            burger.addEventListener('click', function () {
                wrap.classList.toggle('is-open');
            });
        }
        if (backdrop) {
            backdrop.addEventListener('click', closeDrawer);
        }
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeDrawer();
            }
        });

        /* prev / next page navigation */
        if (prevBtn) {
            prevBtn.addEventListener('click', function () {
                const idx = order.indexOf(activeId);
                if (idx > 0 && order[idx - 1]) {
                    showTab(order[idx - 1], true);
                }
            });
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', function () {
                const idx = order.indexOf(activeId);
                if (idx >= 0 && idx < order.length - 1 && order[idx + 1]) {
                    showTab(order[idx + 1], true);
                }
            });
        }

        /* scroll-to-top */
        if (topBtn) {
            topBtn.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            window.addEventListener('scroll', function () {
                const y = window.scrollY || document.documentElement.scrollTop;
                topBtn.classList.toggle('is-visible', y > 500);
            }, { passive: true });
        }

        /* deep link: open requested tab, else first visible one */
        const hash = window.location.hash;
        const requested = hash && pages.filter(function (p) {
            return p.getAttribute('data-abrf-tab') === hash;
        }).length ? hash : null;

        const firstTarget = links.length ? links[0].getAttribute('data-abrf-target') : null;
        showTab(requested || firstTarget, false);
    });
})();