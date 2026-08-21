(function () {
    "use strict";

    document.addEventListener("DOMContentLoaded", function () {
        const page = document.querySelector(".design-manufacturing-page");
        const panels = page ? Array.from(page.querySelectorAll(".svc-panel")) : [];
        const navbar = document.querySelector("nav.navbar");
        const hero = page ? page.querySelector(".dm-hero") : null;
        const footer = document.querySelector("footer");
        const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

        if (!page || !panels.length) return;

        function updateTopOffset() {
            const height = navbar ? Math.round(navbar.getBoundingClientRect().height) : 84;
            const stackTop = Math.max(height, 70);
            document.documentElement.style.setProperty("--service-stack-top", `${stackTop}px`);
            document.documentElement.style.setProperty("--page-stack-top", `${stackTop}px`);
        }

        updateTopOffset();
        window.addEventListener("resize", updateTopOffset, { passive: true });

        if (hero) {
            hero.style.setProperty("--service-outer-stack-index", "0");
            hero.style.zIndex = "10";
        }

        panels.forEach(function (panel, panelIndex) {
            const background = panel.querySelector(".svc-panel-bg");
            const inner = panel.querySelector(".svc-panel-inner");
            const items = Array.from(panel.querySelectorAll(".svc-accord-item"));
            if (!inner || !items.length) return;

            panel.classList.remove("page-stack-layer");
            panel.style.removeProperty("--page-stack-index");
            panel.classList.add("dm-service-scroll-group", "service-outer-stack-layer");
            panel.classList.toggle("is-layout-reversed", panelIndex % 2 === 1);
            panel.style.setProperty("--service-outer-stack-index", String(panelIndex + 1));
            panel.style.zIndex = String(20 + panelIndex);
            panel.dataset.stackCount = String(items.length);
            panel.style.setProperty("--dm-inner-distance", `${Math.max(items.length - 1, 0) * 72}svh`);

            const stage = document.createElement("div");
            stage.className = "dm-service-scroll-stage";
            if (background) stage.appendChild(background);
            stage.appendChild(inner);
            panel.insertBefore(stage, panel.firstChild);

            const image = panel.querySelector(".svc-img-frame img");
            if (image) stage.style.setProperty("--dm-panel-image", `url("${image.getAttribute("src")}")`);

            items.forEach(function (item, itemIndex) {
                const header = item.querySelector(".svc-accord-header");
                const body = item.querySelector(".svc-accord-body");
                const featureCount = item.querySelectorAll(".svc-feat-item").length;
                const active = itemIndex === 0;
                const bodyId = `dm-mobile-accord-${panel.dataset.panelIndex || "0"}-${itemIndex}`;

                item.classList.toggle("open", active);
                item.classList.toggle("is-active", active);
                item.classList.toggle("is-dense", featureCount > 8);
                item.classList.toggle("is-very-dense", featureCount > 12);
                item.dataset.stackIndex = String(itemIndex);
                item.setAttribute("aria-hidden", active ? "false" : "true");

                if (header) {
                    header.setAttribute("role", "button");
                    header.setAttribute("tabindex", "0");
                    header.setAttribute("aria-controls", bodyId);
                    header.setAttribute("aria-expanded", active ? "true" : "false");
                }
                if (body) {
                    body.id = bodyId;
                    body.style.height = "auto";
                }
            });

            function toggleMobileItem(targetItem) {
                if (window.innerWidth >= 992) return;

                items.forEach(function (item) {
                    const open = item === targetItem;
                    item.classList.toggle("open", open);
                    const header = item.querySelector(".svc-accord-header");
                    if (header) header.setAttribute("aria-expanded", open ? "true" : "false");
                });
            }

            items.forEach(function (item) {
                const header = item.querySelector(".svc-accord-header");
                if (!header) return;
                header.addEventListener("click", function () {
                    toggleMobileItem(item);
                });
                header.addEventListener("keydown", function (event) {
                    if (event.key === "Enter" || event.key === " ") {
                        event.preventDefault();
                        toggleMobileItem(item);
                    }
                });
            });

            const glow = document.createElement("span");
            glow.className = "service-pointer-glow";
            glow.setAttribute("aria-hidden", "true");
            stage.appendChild(glow);

            if (!reduceMotion) {
                let pointerFrame = 0;
                stage.addEventListener("pointerenter", function () {
                    panel.classList.add("is-pointer-active");
                });
                stage.addEventListener("pointerleave", function () {
                    panel.classList.remove("is-pointer-active");
                    stage.style.setProperty("--service-image-shift-x", "0px");
                    stage.style.setProperty("--service-image-shift-y", "0px");
                });
                stage.addEventListener("pointermove", function (event) {
                    if (pointerFrame) return;
                    pointerFrame = requestAnimationFrame(function () {
                        const bounds = stage.getBoundingClientRect();
                        const x = event.clientX - bounds.left;
                        const y = event.clientY - bounds.top;
                        const nx = x / Math.max(bounds.width, 1) - 0.5;
                        const ny = y / Math.max(bounds.height, 1) - 0.5;
                        stage.style.setProperty("--service-mouse-x", `${x}px`);
                        stage.style.setProperty("--service-mouse-y", `${y}px`);
                        stage.style.setProperty("--service-image-shift-x", `${nx * -8}px`);
                        stage.style.setProperty("--service-image-shift-y", `${ny * -8}px`);
                        pointerFrame = 0;
                    });
                });
            }
        });

        if (footer) {
            footer.classList.add("service-outer-stack-footer");
            footer.style.zIndex = String(30 + panels.length);
        }

        let updateFrame = 0;
        function updateStacks() {
            updateFrame = 0;
            const stackTop = parseFloat(getComputedStyle(document.documentElement)
                .getPropertyValue("--service-stack-top")) || 84;
            const stageHeight = Math.max(window.innerHeight - stackTop, 1);

            panels.forEach(function (panel) {
                const items = Array.from(panel.querySelectorAll(".svc-accord-item"));
                if (window.innerWidth < 992) {
                    items.forEach(function (item) {
                        item.classList.remove("is-past", "is-future");
                        item.setAttribute("aria-hidden", "false");
                    });
                    return;
                }

                const distance = Math.max(panel.offsetHeight - stageHeight, 1);
                const travelled = Math.min(Math.max(stackTop - panel.getBoundingClientRect().top, 0), distance);
                const progress = travelled / distance;
                const activeIndex = items.length > 1
                    ? Math.min(items.length - 1, Math.round(progress * (items.length - 1)))
                    : 0;

                items.forEach(function (item, itemIndex) {
                    const active = itemIndex === activeIndex;
                    item.classList.toggle("is-active", active);
                    item.classList.toggle("is-past", itemIndex < activeIndex);
                    item.classList.toggle("is-future", itemIndex > activeIndex);
                    item.setAttribute("aria-hidden", active ? "false" : "true");
                });
            });
        }

        function queueUpdate() {
            if (!updateFrame) updateFrame = requestAnimationFrame(updateStacks);
        }

        window.addEventListener("scroll", queueUpdate, { passive: true });
        window.addEventListener("resize", queueUpdate, { passive: true });
        requestAnimationFrame(updateStacks);
    });
})();
