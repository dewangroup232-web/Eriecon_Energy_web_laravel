(function () {
    "use strict";

    document.addEventListener("DOMContentLoaded", function () {
        const details = document.querySelector(".services-details-area");
        const hero = document.querySelector(".breadcrumb-area");
        if (!details || !hero) return;

        document.body.classList.add("service-stack-page");

        const rows = Array.from(details.querySelectorAll(".service-details-row"));
        const footer = document.querySelector("footer");
        const navbar = document.querySelector("nav.navbar");
        const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

        const heroContent = {
            "services-epc-projects.html": {
                eyebrow: "Engineering / Procurement / Construction",
                lead: "Integrated EPC",
                accent: "Project Delivery",
                description: "End-to-end civil, mechanical, electrical, and instrumentation solutions—from engineering and procurement through construction and commissioning.",
                tags: ["Civil", "Mechanical", "E&I"]
            },
            "services-equipmen-rental.html": {
                eyebrow: "Fleet / Logistics / Site Support",
                lead: "Equipment Rental",
                accent: "& Industrial Support",
                description: "Reliable heavy equipment, certified operators, maintenance, and logistics support configured around demanding industrial and construction schedules.",
                tags: ["Heavy Fleet", "Lifting", "24/7 Support"]
            },
            "services-infrastructure-projects.html": {
                eyebrow: "Planning / Engineering / Delivery",
                lead: "Infrastructure",
                accent: "Projects & Utilities",
                description: "Integrated infrastructure delivery across civil works, utility networks, electrical systems, and intelligent control—from early planning to site completion.",
                tags: ["Civil Works", "Utilities", "Smart Systems"]
            },
            "services-plant-maintenance-turnarounds.html": {
                eyebrow: "Reliability / Shutdown / Startup",
                lead: "Plant Maintenance",
                accent: "& Turnarounds",
                description: "Planned maintenance, shutdown execution, inspection, and startup support that protect plant reliability while controlling schedule and operational risk.",
                tags: ["Maintenance", "Turnarounds", "Asset Integrity"]
            },
            "services-power-automation-projects.html": {
                eyebrow: "Power / Control / Digitalization",
                lead: "Power & Automation",
                accent: "Projects & Services",
                description: "Engineering and integration for electrical power, automation, control, smart systems, and industrial digitalization across the complete project lifecycle.",
                tags: ["Power Systems", "Automation", "Digital"]
            },
            "services-procurement.html": {
                eyebrow: "Sourcing / Expediting / Delivery",
                lead: "Strategic Procurement",
                accent: "& Supply Chain",
                description: "Disciplined sourcing, vendor management, inspection, expediting, and logistics that keep critical industrial materials compliant and on schedule.",
                tags: ["Sourcing", "Vendor Control", "Logistics"]
            },
            "services-project-support.html": {
                eyebrow: "People / Planning / Coordination",
                lead: "Integrated Project",
                accent: "Support Services",
                description: "Flexible engineering, manpower, QA/QC, HSE, logistics, and administrative support built to strengthen project teams at every delivery stage.",
                tags: ["Manpower", "QA/QC", "Site Support"]
            },
            "services-rigging-lifting-projects.html": {
                eyebrow: "Engineering / Rigging / Heavy Lift",
                lead: "Rigging & Lifting",
                accent: "Projects & Services",
                description: "Engineered lift planning, certified rigging teams, crane operations, and heavy-load logistics delivered with strict control of safety and execution.",
                tags: ["Lift Planning", "Heavy Rigging", "Crane Operations"]
            },
            "services-scaffolding.html": {
                eyebrow: "Access / Safety / Execution",
                lead: "Industrial Scaffolding",
                accent: "Access Solutions",
                description: "Engineered access systems, material management, erection, inspection, and shutdown support for safe work at height across complex industrial sites.",
                tags: ["Engineering", "Erection", "Inspection"]
            },
            "services-major-equipment-list.html": {
                eyebrow: "Capability / Fleet / Readiness",
                lead: "Major Equipment",
                accent: "Ready for Delivery",
                description: "A versatile fleet of lifting, earthmoving, power, transportation, and specialized industrial equipment prepared for demanding project environments.",
                tags: ["Cranes", "Heavy Equipment", "Industrial Tools"]
            }
        };

        const pageName = decodeURIComponent(window.location.pathname.split("/").pop() || "").toLowerCase();
        const currentHero = heroContent[pageName];

        if (currentHero && !hero.querySelector(".service-hero-shell")) {
            const container = hero.querySelector(".container");
            details.id = "service-capabilities";
            hero.classList.add("service-editorial-hero");
            container.innerHTML = `
                <div class="service-hero-shell">
                    <div class="service-hero-content">
                        <div class="service-hero-eyebrow">${currentHero.eyebrow}</div>
                        <h1 class="service-hero-title">
                            <span>${currentHero.lead}</span>
                            <strong>${currentHero.accent}</strong>
                        </h1>
                        <p class="service-hero-description">${currentHero.description}</p>
                        <div class="service-hero-actions">
                            <a class="service-hero-button" href="#service-capabilities">
                                <span>Explore Capabilities</span>
                                <i class="fas fa-arrow-down" aria-hidden="true"></i>
                            </a>
                            <div class="service-hero-tags" aria-label="Service capabilities">
                                ${currentHero.tags.map(tag => `<span class="service-hero-tag">${tag}</span>`).join("")}
                            </div>
                        </div>
                    </div>
                </div>`;
            hero.classList.add("service-hero-ready");
        }

        function updateStackTop() {
            const height = navbar ? Math.round(navbar.getBoundingClientRect().height) : 84;
            document.documentElement.style.setProperty("--service-stack-top", `${Math.max(height, 70)}px`);
        }

        updateStackTop();
        window.addEventListener("resize", updateStackTop, { passive: true });

        rows.forEach(function (row, rowIndex) {
            row.classList.toggle("is-layout-reversed", rowIndex % 2 === 1);
            const image = row.querySelector(".service-image-container img");
            if (image) row.style.setProperty("--service-panel-image", `url("${image.getAttribute("src")}")`);

            const imageColumn = row.querySelector(".service-image-container")?.closest('[class*="col-"]');
            const contentColumn = row.querySelector(".service-badge")?.closest('[class*="col-"]');
            if (!contentColumn) return;
            if (imageColumn) imageColumn.classList.add("service-stage-image");
            contentColumn.classList.add("service-stage-content");

            // Repair legacy lists that contain subsection headings inside the UL.
            // Each embedded heading becomes its own clean heading/list pair.
            Array.from(contentColumn.querySelectorAll("ul.service-list")).forEach(function (list) {
                const embeddedHeadings = Array.from(list.children)
                    .filter(child => child.matches("h4.service-sub-title"));
                if (!embeddedHeadings.length) return;

                const fragment = document.createDocumentFragment();
                embeddedHeadings.forEach(function (embeddedHeading) {
                    const separatedList = document.createElement("ul");
                    separatedList.className = list.className;
                    let sibling = embeddedHeading.nextElementSibling;

                    while (sibling && !sibling.matches("h4.service-sub-title")) {
                        const next = sibling.nextElementSibling;
                        separatedList.appendChild(sibling);
                        sibling = next;
                    }

                    fragment.appendChild(embeddedHeading);
                    fragment.appendChild(separatedList);
                });

                list.parentNode.insertBefore(fragment, list.nextSibling);
                if (!list.querySelector("li")) list.remove();
            });

            Array.from(contentColumn.querySelectorAll(".service-sub-title")).forEach(function (heading) {
                if (!heading.nextElementSibling || !heading.nextElementSibling.classList.contains("service-list")) {
                    heading.remove();
                }
            });

            // Keep every desktop capability card within the fixed-height stage.
            // Lists longer than nine points become two balanced, sequential cards.
            Array.from(contentColumn.querySelectorAll(".service-sub-title")).forEach(function (heading) {
                const list = heading.nextElementSibling;
                if (!list || !list.classList.contains("service-list")) return;

                const points = Array.from(list.children).filter(function (child) {
                    return child.matches("li");
                });
                if (points.length <= 9) return;

                const baseTitle = heading.textContent.replace(/\s+/g, " ").trim();
                const splitAt = Math.ceil(points.length / 2);
                const firstHeading = heading.cloneNode(true);
                const secondHeading = heading.cloneNode(true);
                const secondList = list.cloneNode(false);

                [firstHeading, secondHeading].forEach(function (partHeading, partIndex) {
                    const partLabel = document.createElement("span");
                    partHeading.dataset.serviceBaseTitle = baseTitle;
                    partLabel.className = "service-part-label";
                    partLabel.textContent = `Part ${partIndex + 1} of 2`;
                    partHeading.appendChild(partLabel);
                });

                points.slice(splitAt).forEach(function (point) {
                    secondList.appendChild(point);
                });

                heading.replaceWith(firstHeading);
                list.after(secondHeading, secondList);
            });

            const headings = Array.from(contentColumn.querySelectorAll(".service-sub-title"));
            if (!headings.length) return;

            function formatMobileTitle(value) {
                const compact = value.replace(/\s+/g, " ").trim();
                if (compact !== compact.toUpperCase()) return compact;
                return compact.split(" ").map(function (word) {
                    if (!/[A-Z]/.test(word) || word.includes("/") || /\d/.test(word) || word.length <= 3) return word;
                    return word.charAt(0) + word.slice(1).toLowerCase();
                }).join(" ");
            }

            const mobileTitleText = formatMobileTitle(
                headings[0].dataset.serviceBaseTitle || headings[0].textContent
            );

            const accordion = document.createElement("div");
            accordion.className = "service-shared-accordion";
            headings[0].parentNode.insertBefore(accordion, headings[0]);

            headings.forEach(function (heading, index) {
                const list = heading.nextElementSibling;
                if (!list || !list.classList.contains("service-list")) return;

                const item = document.createElement("div");
                const body = document.createElement("div");
                const bodyId = `service-accord-${rows.indexOf(row)}-${index}`;
                const arrow = document.createElement("i");

                item.className = `service-shared-accord-item${index === 0 ? " open" : ""}`;
                body.className = "service-shared-accord-body";
                body.id = bodyId;
                arrow.className = "fas fa-chevron-down service-shared-arrow";
                heading.classList.add("service-shared-accord-header");
                heading.setAttribute("role", "button");
                heading.setAttribute("tabindex", "0");
                heading.setAttribute("aria-controls", bodyId);
                heading.setAttribute("aria-expanded", index === 0 ? "true" : "false");
                heading.appendChild(arrow);

                accordion.appendChild(item);
                item.appendChild(heading);
                item.appendChild(body);
                body.appendChild(list);
                body.style.height = index === 0 ? "auto" : "0px";

                body.addEventListener("transitionend", function (event) {
                    if (event.propertyName === "height" && item.classList.contains("open")) {
                        body.style.height = "auto";
                    }
                });
            });

            const mobileTitle = document.createElement("h3");
            mobileTitle.className = "service-mobile-card-title";
            mobileTitle.textContent = mobileTitleText;
            accordion.parentNode.insertBefore(mobileTitle, accordion);

            const items = Array.from(accordion.querySelectorAll(".service-shared-accord-item"));
            items.forEach(function (item, index) {
                const heading = item.querySelector(".service-shared-accord-header");
                const body = item.querySelector(".service-shared-accord-body");
                const active = index === 0;

                item.classList.toggle("open", active);
                item.classList.toggle("is-active", active);
                item.dataset.stackIndex = String(index);
                const featureCount = body.querySelectorAll("li").length;
                item.dataset.featureCount = String(featureCount);
                item.classList.toggle("is-dense", featureCount > 8);
                item.classList.toggle("is-very-dense", featureCount > 12);
                heading.removeAttribute("role");
                heading.removeAttribute("tabindex");
                heading.removeAttribute("aria-controls");
                heading.setAttribute("aria-expanded", "true");
                body.style.height = "auto";
            });

            const mobileAccordion = window.matchMedia("(max-width: 991px)");

            function syncAccordionMode() {
                const isMobile = mobileAccordion.matches;
                items.forEach(function (item) {
                    const heading = item.querySelector(".service-shared-accord-header");
                    const body = item.querySelector(".service-shared-accord-body");
                    if (!heading || !body) return;
                    if (isMobile) {
                        const open = item.classList.contains("open");
                        heading.setAttribute("role", "button");
                        heading.setAttribute("tabindex", "0");
                        heading.setAttribute("aria-controls", body.id);
                        heading.setAttribute("aria-expanded", open ? "true" : "false");
                    } else {
                        heading.removeAttribute("role");
                        heading.removeAttribute("tabindex");
                        heading.removeAttribute("aria-controls");
                        heading.setAttribute("aria-expanded", "true");
                    }
                });
            }

            function activateMobileItem(targetItem) {
                if (!mobileAccordion.matches) return;
                items.forEach(function (item) {
                    const open = item === targetItem && !item.classList.contains("open");
                    const heading = item.querySelector(".service-shared-accord-header");
                    item.classList.toggle("open", open);
                    if (heading) heading.setAttribute("aria-expanded", open ? "true" : "false");
                });
            }

            items.forEach(function (item) {
                const heading = item.querySelector(".service-shared-accord-header");
                if (!heading) return;
                heading.addEventListener("click", function () { activateMobileItem(item); });
                heading.addEventListener("keydown", function (event) {
                    if (event.key === "Enter" || event.key === " ") {
                        event.preventDefault();
                        activateMobileItem(item);
                    }
                });
            });

            syncAccordionMode();
            if (typeof mobileAccordion.addEventListener === "function") {
                mobileAccordion.addEventListener("change", syncAccordionMode);
            }

            const stage = document.createElement("div");
            stage.className = "service-scroll-stage";

            Array.from(row.children).forEach(function (child) {
                stage.appendChild(child);
            });
            row.appendChild(stage);
            row.classList.add("service-scroll-group");
            row.dataset.stackCount = String(items.length);
            row.style.setProperty("--service-inner-distance", `${Math.max(items.length - 1, 0) * 72}svh`);
        });

        const nestedGroups = Array.from(details.querySelectorAll(".service-scroll-group"));
        let nestedFrame = 0;

        function updateNestedStacks() {
            nestedFrame = 0;
            const stackTop = parseFloat(getComputedStyle(document.documentElement)
                .getPropertyValue("--service-stack-top")) || 84;
            const stageHeight = Math.max(window.innerHeight - stackTop, 1);

            nestedGroups.forEach(function (group) {
                const items = Array.from(group.querySelectorAll(".service-shared-accord-item"));
                if (window.innerWidth < 992) {
                    items.forEach(function (item) {
                        item.classList.remove("is-past", "is-future");
                        item.setAttribute("aria-hidden", "false");
                    });
                    return;
                }
                const scrollDistance = Math.max(group.offsetHeight - stageHeight, 1);
                const travelled = Math.min(Math.max(stackTop - group.getBoundingClientRect().top, 0), scrollDistance);
                const progress = travelled / scrollDistance;
                const activeIndex = items.length > 1
                    ? Math.min(items.length - 1, Math.round(progress * (items.length - 1)))
                    : 0;

                group.style.setProperty("--service-inner-progress", String(progress));
                items.forEach(function (item, index) {
                    const active = index === activeIndex;
                    item.classList.toggle("is-active", active);
                    item.classList.toggle("is-past", index < activeIndex);
                    item.classList.toggle("is-future", index > activeIndex);
                    item.setAttribute("aria-hidden", active ? "false" : "true");
                });
            });
        }

        function queueNestedUpdate() {
            if (!nestedFrame) nestedFrame = requestAnimationFrame(updateNestedStacks);
        }

        window.addEventListener("scroll", queueNestedUpdate, { passive: true });
        window.addEventListener("resize", queueNestedUpdate, { passive: true });
        requestAnimationFrame(updateNestedStacks);

        const layers = [hero].concat(rows, footer ? [footer] : []).filter(Boolean);
        layers.forEach(function (layer, index) {
            layer.classList.add("service-stack-layer");
            layer.style.setProperty("--service-outer-stack-index", String(index));
            layer.style.zIndex = String(10 + index);

            const pointerSurface = layer.querySelector(".service-scroll-stage") || layer;
            const glow = document.createElement("span");
            glow.className = "service-pointer-glow";
            glow.setAttribute("aria-hidden", "true");
            pointerSurface.appendChild(glow);

            if (reduceMotion) return;

            let frame = 0;
            layer.addEventListener("pointerenter", function () {
                layer.classList.add("is-pointer-active");
            });
            layer.addEventListener("pointerleave", function () {
                layer.classList.remove("is-pointer-active");
                layer.style.setProperty("--service-image-shift-x", "0px");
                layer.style.setProperty("--service-image-shift-y", "0px");
            });
            layer.addEventListener("pointermove", function (event) {
                if (frame) return;
                frame = requestAnimationFrame(function () {
                    const bounds = pointerSurface.getBoundingClientRect();
                    const x = event.clientX - bounds.left;
                    const y = event.clientY - bounds.top;
                    const nx = x / Math.max(bounds.width, 1) - 0.5;
                    const ny = y / Math.max(bounds.height, 1) - 0.5;
                    layer.style.setProperty("--service-mouse-x", `${x}px`);
                    layer.style.setProperty("--service-mouse-y", `${y}px`);
                    layer.style.setProperty("--service-image-shift-x", `${nx * -8}px`);
                    layer.style.setProperty("--service-image-shift-y", `${ny * -8}px`);
                    frame = 0;
                });
            });
        });
    });
})();
