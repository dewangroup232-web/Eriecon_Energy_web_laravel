/* ===================================================================
    
    Author          : Valid Theme
    Template Name   : Fatory - Factory, Industrial & Construction Template
    Version         : 1.0
    
* ================================================================= */

(function ($) {
    "use strict";

    $(document).ready(function () {


        /* ==================================================
            # Wow Init
         ===============================================*/
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();


        /* ==================================================
            # Smooth Scroll
         ===============================================*/
        $("body").scrollspy({
            target: ".navbar-collapse",
            offset: 200
        });
        $('a.smooth-menu[href^="#"]').on('click', function (event) {
            var $anchor = $(this);
            var headerH = '75';
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });


        /* ==================================================
            # Banner Animation
        ===============================================*/
        function doAnimations(elems) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';
            elems.each(function () {
                var $this = $(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function () {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $immortalCarousel = $('.animate_text'),
            $firstAnimatingElems = $immortalCarousel.find('.item:first').find("[data-animation ^= 'animated']");
        //Initialize carousel
        $immortalCarousel.carousel();
        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);
        //Other slides to be animated on carousel slide event
        $immortalCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });


        /* ==================================================
            # imagesLoaded active
        ===============================================*/
        $('#portfolio-grid,.blog-masonry').imagesLoaded(function () {

            /* Filter menu */
            $('.mix-item-menu').on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });

            /* filter menu active class  */
            $('.mix-item-menu button').on('click', function (event) {
                $(this).siblings('.active').removeClass('active');
                $(this).addClass('active');
                event.preventDefault();
            });

            /* Filter active */
            var $grid = $('#portfolio-grid').isotope({
                itemSelector: '.pf-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.pf-item',
                }
            });

            /* Filter active */
            $('.blog-masonry').isotope({
                itemSelector: '.blog-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.blog-item',
                }
            });

        });


        /* ==================================================
           # Fun Factor Init
       ===============================================*/
        $('.timer').countTo();
        $('.fun-fact').appear(function () {
            $('.timer').countTo();
        }, {
            accY: -100
        });


        /* ==================================================
            # Magnific popup init
         ===============================================*/
        $(".popup-link").magnificPopup({
            type: 'image',
            // other options
        });

        $(".popup-gallery").magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
            // other options
        });

        $(".about-certificates-grid").magnificPopup({
            delegate: ".about-certificate-card",
            type: "image",
            mainClass: "mfp-fade",
            removalDelay: 160,
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                tPrev: "Previous certificate (Left arrow key)",
                tNext: "Next certificate (Right arrow key)",
                tCounter: "%curr% of %total%"
            },
            zoom: {
                enabled: true,
                duration: 250
            }
        });

        $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        $('.magnific-mix-gallery').each(function () {
            var $container = $(this);
            var $imageLinks = $container.find('.item');

            var items = [];
            $imageLinks.each(function () {
                var $item = $(this);
                var type = 'image';
                if ($item.hasClass('magnific-iframe')) {
                    type = 'iframe';
                }
                var magItem = {
                    src: $item.attr('href'),
                    type: type
                };
                magItem.title = $item.data('title');
                items.push(magItem);
            });

            $imageLinks.magnificPopup({
                mainClass: 'mfp-fade',
                items: items,
                gallery: {
                    enabled: true,
                    tPrev: $(this).data('prev-text'),
                    tNext: $(this).data('next-text')
                },
                type: 'image',
                callbacks: {
                    beforeOpen: function () {
                        var index = $imageLinks.index(this.st.el);
                        if (-1 !== index) {
                            this.goTo(index);
                        }
                    }
                }
            });
        });


        /* ==================================================
            # Services Carousel
         ===============================================*/
        $('.services-carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: false,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });


        /* ==================================================
            # Portfolio Carousel
         ===============================================*/
        $('.portfolio-carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        });


        /* ==================================================
            # Clients Carousel
        ===============================================*/
        $('.clients-items').owlCarousel({
            loop: false,
            margin: 30,
            nav: false,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });


        /* ==================================================
            # Team Carousel
        ===============================================*/
        $('.team-carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });



        /* ==================================================
            # Projects Carousel
         ===============================================*/
        $('.projects-carousel').owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            items: 1,
            autoplay: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
        });

        /* ==================================================
            # Default One Colums Carousel
         ===============================================*/
        $('.default-one-col-carousel').owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            items: 1,
            autoplay: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
        });


        /* ==================================================
            # Testimonials Carousel
         ===============================================*/
        $('.testimonials-carousel').owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            items: 1,
            autoplay: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
        });


        /* ==================================================
            Contact Form Validations
        ================================================== */
        $('.contact-form:not([data-laravel-contact])').each(function () {
            var formInstance = $(this);
            formInstance.submit(function () {

                var action = $(this).attr('action');

                $("#message").slideUp(750, function () {
                    $('#message').hide();

                    $('#submit')
                        .after('<img src="assets/img/ajax-loader.gif" class="loader" />')
                        .attr('disabled', 'disabled');

                    $.post(action, {
                        name: $('#name').val(),
                        email: $('#email').val(),
                        phone: $('#phone').val(),
                        comments: $('#comments').val()
                    },
                        function (data) {
                            document.getElementById('message').innerHTML = data;
                            $('#message').slideDown('slow');
                            $('.contact-form img.loader').fadeOut('slow', function () {
                                $(this).remove()
                            });
                            $('#submit').removeAttr('disabled');
                        }
                    );
                });
                return false;
            });
        });

    }); // end document ready function
    /* ==================================================
        Preloader Init
    ===============================================*/
    $(window).on('load', function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
})(jQuery); // End jQuery

/* Site-wide navigation and route reliability. */
(function () {
    "use strict";

    document.addEventListener("DOMContentLoaded", function () {
        const nav = document.querySelector("nav.navbar.validnavs");
        const menu = nav ? nav.querySelector("#navbar-menu") : null;
        const openButton = nav ? nav.querySelector(".navbar-header .navbar-toggle") : null;
        const closeButton = menu ? menu.querySelector(":scope > .navbar-toggle") : null;
        const overlay = document.createElement("button");
        const mobileQuery = window.matchMedia("(max-width: 1023px)");
        let returnFocus = null;

        function isMobile() {
            return mobileQuery.matches;
        }

        function setMenuState(open) {
            if (!menu || !nav) return;
            menu.classList.toggle("site-mobile-open", open);
            menu.classList.toggle("show", open);
            nav.classList.toggle("navbar-responsive", open);
            document.body.classList.toggle("site-menu-open", open);
            overlay.classList.toggle("is-visible", open);
            overlay.setAttribute("aria-hidden", open ? "false" : "true");
            if (openButton) openButton.setAttribute("aria-expanded", open ? "true" : "false");
            if (open) {
                returnFocus = document.activeElement;
                window.setTimeout(function () {
                    const firstLink = menu.querySelector("a[href]:not([href='#'])");
                    if (firstLink) firstLink.focus();
                }, 220);
            } else if (returnFocus && typeof returnFocus.focus === "function") {
                returnFocus.focus();
                returnFocus = null;
            }
        }

        if (nav && menu && openButton) {
            overlay.type = "button";
            overlay.className = "site-nav-overlay";
            overlay.setAttribute("aria-label", "Close navigation menu");
            overlay.setAttribute("aria-hidden", "true");
            document.body.appendChild(overlay);

            openButton.setAttribute("aria-controls", "navbar-menu");
            openButton.setAttribute("aria-expanded", "false");
            openButton.setAttribute("aria-label", "Open navigation menu");
            if (closeButton) closeButton.setAttribute("aria-label", "Close navigation menu");

            const serviceToggle = menu.querySelector("li.dropdown > a[href='services.html']");
            const serviceSubmenu = serviceToggle ? serviceToggle.nextElementSibling : null;
            if (serviceSubmenu && !serviceSubmenu.querySelector(".site-all-services")) {
                const allServicesItem = document.createElement("li");
                const allServicesLink = document.createElement("a");
                allServicesItem.className = "site-all-services";
                allServicesLink.href = "services.html";
                allServicesLink.textContent = "All Services";
                allServicesItem.appendChild(allServicesLink);
                serviceSubmenu.insertBefore(allServicesItem, serviceSubmenu.firstChild);
            }

            document.addEventListener("click", function (event) {
                if (!isMobile()) return;

                const toggle = event.target.closest(".navbar-toggle");
                if (toggle && nav.contains(toggle)) {
                    event.preventDefault();
                    event.stopImmediatePropagation();
                    setMenuState(toggle === openButton);
                    return;
                }

                const dropdownLink = event.target.closest("#navbar-menu li.dropdown > a.dropdown-toggle");
                if (dropdownLink) {
                    event.preventDefault();
                    event.stopImmediatePropagation();
                    const item = dropdownLink.parentElement;
                    const open = !item.classList.contains("site-submenu-open");
                    item.classList.toggle("site-submenu-open", open);
                    item.classList.toggle("on", open);
                    dropdownLink.setAttribute("aria-expanded", open ? "true" : "false");
                    return;
                }

                const menuLink = event.target.closest("#navbar-menu a[href]");
                if (menuLink && menuLink.getAttribute("href") !== "#") setMenuState(false);
            }, true);

            overlay.addEventListener("click", function () {
                setMenuState(false);
            });

            document.addEventListener("keydown", function (event) {
                if (event.key === "Escape" && menu.classList.contains("site-mobile-open")) {
                    setMenuState(false);
                }
            });

            window.addEventListener("resize", function () {
                if (!isMobile()) {
                    setMenuState(false);
                    menu.querySelectorAll(".site-submenu-open").forEach(function (item) {
                        item.classList.remove("site-submenu-open", "on");
                    });
                }
            }, { passive: true });
        }

        const projectsSection = document.querySelector(".portfolio-area");
        const newsSection = document.querySelector(".blog-area");
        if (projectsSection && !projectsSection.id) projectsSection.id = "projects";
        if (newsSection && !newsSection.id) newsSection.id = "latest-news";

        document.querySelectorAll("header .navbar-nav > li > a").forEach(function (link) {
            const label = link.textContent.trim().toLowerCase();
            if (label === "projects") link.href = "projects.html";
            if (label === "blog") link.href = "blog.html";
        });

        const footerRoutes = {
            "oil & gas": "services-EPC-Projects.html",
            "chemical research": "services-Procurement.html",
            "industrial": "services-Plant-Maintenance-Turnarounds.html",
            "construction": "services-Infrastructure-Projects.html",
            "energy": "services-Power-Automation-Projects.html",
            "mechanical": "services-Design-Manufacturing.html",
            "eireconenergy": "index.html",
            "terms of user": "contact.html",
            "license": "contact.html",
            "support": "contact.html"
        };

        document.querySelectorAll("footer a").forEach(function (link) {
            if (link.getAttribute("href") !== "#") return;
            const route = footerRoutes[link.textContent.trim().toLowerCase()];
            if (route) {
                link.href = route;
            } else if (link.querySelector("img")) {
                link.href = "index.html";
            }
        });

        const projectRoutes = {
            "oil and gass energy": "services-EPC-Projects.html",
            "industries & infrastructure sector": "services-Infrastructure-Projects.html",
            "plant maintenance": "services-Plant-Maintenance-Turnarounds.html",
            "power & automation projects": "services-Power-Automation-Projects.html"
        };

        document.querySelectorAll(".portfolio-area .info h5 a").forEach(function (link) {
            const route = projectRoutes[link.textContent.trim().toLowerCase()];
            if (route) link.href = route;
        });

        document.querySelectorAll("a.btn[href='#']").forEach(function (link) {
            const label = link.textContent.trim().toLowerCase();
            link.href = label.includes("service") ? "services.html" : "contact.html";
        });

        document.querySelectorAll(".breadcrumb-area a[href='#']").forEach(function (link) {
            link.href = link.textContent.trim().toLowerCase().includes("home")
                ? "index.html"
                : "services.html";
        });

        document.querySelectorAll(".blog-area a[href='#']").forEach(function (link) {
            link.href = "blog.html";
        });

        document.querySelectorAll(".clients-area a[href='#'], .clients-carousel a[href='#']").forEach(function (link) {
            link.href = "contact.html";
            link.setAttribute("aria-label", "Contact Eirecon Energy about this partnership");
        });

        document.querySelectorAll("form[action='#']").forEach(function (form) {
            form.action = "contact.html";
        });
    });
})();
