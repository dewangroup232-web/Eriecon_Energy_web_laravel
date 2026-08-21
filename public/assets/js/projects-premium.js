(function () {
    "use strict";

    document.addEventListener("DOMContentLoaded", function () {
        const filters = Array.from(document.querySelectorAll("[data-project-filter]"));
        const cards = Array.from(document.querySelectorAll("[data-project-card]"));
        const emptyState = document.querySelector(".projects-empty");
        const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

        filters.forEach(function (button) {
            button.addEventListener("click", function () {
                const filter = button.dataset.projectFilter || "all";
                let visibleCount = 0;

                filters.forEach(function (current) {
                    const active = current === button;
                    current.classList.toggle("is-active", active);
                    current.setAttribute("aria-pressed", active ? "true" : "false");
                });

                cards.forEach(function (card) {
                    const categories = (card.dataset.category || "").split(/\s+/);
                    const visible = filter === "all" || categories.includes(filter);
                    card.classList.toggle("is-filtered-out", !visible);
                    card.setAttribute("aria-hidden", visible ? "false" : "true");
                    if (visible) visibleCount += 1;
                });

                if (emptyState) emptyState.hidden = visibleCount > 0;
            });
        });

        const revealItems = Array.from(document.querySelectorAll("[data-project-reveal]"));
        if (reduceMotion || !("IntersectionObserver" in window)) {
            revealItems.forEach(function (item) { item.classList.add("is-visible"); });
            return;
        }

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            });
        }, {
            threshold: 0.12,
            rootMargin: "0px 0px -48px 0px"
        });

        revealItems.forEach(function (item) { observer.observe(item); });
    });
})();
