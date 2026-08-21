<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Eirecon Energy Company - Energy that drives the world.')">

    <!-- ========== Page Title ========== -->
    <title>@yield('title', 'Eirecon Energy Company - Energy that drives the world.')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flaticon-set.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- ========== End Stylesheet ========== -->

    <style>
        /* Homepage services showcase */
        .home-services {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            padding: clamp(88px, 9vw, 132px) 0;
            background: #07111f;
            color: #ffffff;
        }

        .home-services::before,
        .home-services::after {
            content: '';
            position: absolute;
            pointer-events: none;
        }

        .home-services::before {
            z-index: -2;
            inset: 0;
            opacity: 0.45;
            background-image:
                linear-gradient(rgba(94, 156, 245, 0.055) 1px, transparent 1px),
                linear-gradient(90deg, rgba(94, 156, 245, 0.055) 1px, transparent 1px);
            background-size: 72px 72px;
            -webkit-mask-image: linear-gradient(180deg, transparent, #000 18%, #000 82%, transparent);
            mask-image: linear-gradient(180deg, transparent, #000 18%, #000 82%, transparent);
        }

        .home-services::after {
            z-index: -1;
            width: 680px;
            height: 680px;
            right: -260px;
            top: -300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(36, 103, 203, 0.22), transparent 68%);
        }

        .home-services-heading {
            max-width: 880px;
            margin: 0 auto clamp(44px, 6vw, 72px);
            text-align: center;
        }

        .home-services-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            color: #8fbdff;
            font-size: 11px;
            line-height: 1;
            font-weight: 800;
            letter-spacing: 0.24em;
            text-transform: uppercase;
        }

        .home-services-eyebrow::before,
        .home-services-eyebrow::after {
            content: '';
            width: 34px;
            height: 1px;
            background: rgba(143, 189, 255, 0.62);
        }

        .home-services-heading h2 {
            margin: 0;
            color: #ffffff;
            font-size: clamp(42px, 6vw, 76px);
            line-height: 0.98;
            font-weight: 900;
            letter-spacing: -0.05em;
            text-wrap: balance;
        }

        .home-services-heading h2 span {
            color: #70aaff;
        }

        .home-services-subheading {
            margin: 26px auto 0;
            color: rgba(229, 239, 255, 0.68);
            font-size: clamp(15px, 1.35vw, 18px);
            line-height: 1.65;
            font-weight: 500;
        }

        .home-services-subheading span {
            display: block;
        }

        .home-services-grid {
            display: grid;
            grid-template-columns: repeat(12, minmax(0, 1fr));
            grid-auto-rows: clamp(240px, 20vw, 290px);
            gap: 18px;
        }

        .home-service-card {
            position: relative;
            grid-column: span 3;
            min-width: 0;
            overflow: hidden;
            border: 1px solid rgba(144, 188, 255, 0.16);
            background: #0b192c;
            color: #ffffff;
            text-decoration: none;
            box-shadow: 0 18px 48px rgba(0, 0, 0, 0.2);
        }

        /* Keep the complete service catalogue to three balanced desktop rows: 4 / 4 / 3. */
        .home-service-card:nth-child(n + 9) {
            grid-column: span 4;
        }

        .home-service-card img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transform: scale(1.01);
            filter: saturate(0.82) contrast(1.04);
            transition: transform 650ms cubic-bezier(0.2, 0.7, 0.2, 1), filter 450ms ease;
        }

        .home-service-card::before,
        .home-service-card::after {
            content: '';
            position: absolute;
            inset: 0;
            pointer-events: none;
        }

        .home-service-card::before {
            z-index: 1;
            background:
                linear-gradient(180deg, rgba(3, 10, 22, 0.05) 28%, rgba(3, 10, 22, 0.88) 100%),
                linear-gradient(110deg, rgba(8, 31, 67, 0.16), rgba(16, 70, 151, 0.34));
            transition: background 400ms ease;
        }

        .home-service-card::after {
            z-index: 2;
            inset: auto 0 0;
            height: 3px;
            background: linear-gradient(90deg, #4f96ff, rgba(79, 150, 255, 0));
            transform: scaleX(0.18);
            transform-origin: left;
            transition: transform 420ms cubic-bezier(0.2, 0.7, 0.2, 1);
        }

        .home-service-name {
            position: absolute;
            z-index: 3;
            left: clamp(16px, 1.5vw, 24px);
            right: clamp(16px, 1.5vw, 24px);
            bottom: clamp(18px, 1.8vw, 26px);
            margin: 0;
            color: #ffffff;
            font-size: clamp(16px, 1.3vw, 20px);
            line-height: 1.2;
            font-weight: 800;
            letter-spacing: -0.025em;
            overflow-wrap: normal;
            word-break: normal;
            hyphens: none;
            text-wrap: balance;
            text-shadow: 0 4px 18px rgba(0, 0, 0, 0.5);
            transition: transform 350ms ease, color 350ms ease;
        }

        .home-service-name--design {
            font-size: 24px !important;
        }

        .home-service-card:hover,
        .home-service-card:focus-visible {
            color: #ffffff;
            border-color: rgba(139, 188, 255, 0.5);
        }

        .home-service-card:hover img,
        .home-service-card:focus-visible img {
            transform: scale(1.075);
            filter: saturate(1) contrast(1.05);
        }

        .home-service-card:hover::before,
        .home-service-card:focus-visible::before {
            background:
                linear-gradient(180deg, rgba(3, 10, 22, 0.02) 20%, rgba(3, 10, 22, 0.86) 100%),
                linear-gradient(110deg, rgba(12, 48, 103, 0.12), rgba(30, 105, 211, 0.42));
        }

        .home-service-card:hover::after,
        .home-service-card:focus-visible::after {
            transform: scaleX(1);
        }

        .home-service-card:hover .home-service-name,
        .home-service-card:focus-visible .home-service-name {
            color: #d9e9ff;
            transform: translateY(-6px);
        }

        .home-service-card:focus-visible {
            outline: 3px solid #8fbdff;
            outline-offset: 4px;
        }

        @media (max-width: 991px) {
            .home-services-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                grid-auto-rows: 250px;
            }

            .home-service-card,
            .home-service-card:nth-child(n + 9) {
                grid-column: span 1;
            }
        }

        @media (max-width: 575px) {
            .home-services {
                padding: 76px 0;
            }

            .home-services-heading {
                margin-bottom: 38px;
            }

            .home-services-heading h2 {
                font-size: clamp(38px, 12vw, 52px);
            }

            .home-services-subheading span {
                display: inline;
            }

            .home-services-grid {
                grid-template-columns: 1fr;
                grid-auto-rows: 220px;
                gap: 14px;
            }

            .home-service-card,
            .home-service-card:nth-child(n + 9) {
                grid-column: 1;
                grid-row: span 1;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .home-service-card img,
            .home-service-card::after,
            .home-service-name {
                transition: none !important;
            }
        }

        #bootcarousel {
            position: relative;
        }

        .banner-cycle-toggle {
            position: absolute;
            z-index: 20;
            right: 28px;
            bottom: 28px;
            width: 46px;
            height: 46px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, 0.48);
            border-radius: 50%;
            background: rgba(4, 18, 40, 0.54);
            color: #ffffff;
            backdrop-filter: blur(10px);
            transition: background 200ms ease, border-color 200ms ease;
        }

        .banner-cycle-toggle:hover,
        .banner-cycle-toggle:focus-visible {
            background: rgba(27, 79, 168, 0.9);
            border-color: #ffffff;
            color: #ffffff;
        }

        .banner-cycle-toggle:focus-visible {
            outline: 3px solid rgba(143, 189, 255, 0.85);
            outline-offset: 3px;
        }

        @media (max-width: 575px) {
            .banner-cycle-toggle {
                right: 18px;
                bottom: 18px;
                width: 42px;
                height: 42px;
            }
        }

        /* Balanced spacing for the homepage metrics section */
        .home-work-with-us {
            padding: clamp(76px, 7vw, 104px) 0 clamp(80px, 7.5vw, 112px) !important;
        }

        .home-work-with-us .content-box>.row {
            align-items: center;
        }

        .home-work-with-us .heading-info {
            padding-right: clamp(20px, 4vw, 58px);
        }

        .home-work-with-us .heading-info h5 {
            margin: 0 0 18px;
        }

        .home-work-with-us .heading-info h2 {
            max-width: 440px;
            margin-bottom: 32px;
        }

        .home-work-with-us .fun-facts-items>.row {
            --bs-gutter-x: 22px;
            --bs-gutter-y: 22px;
        }

        .home-work-with-us .fun-fact {
            min-height: 190px;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 36px 16px;
        }

        .home-work-with-us .fun-fact h4 {
            min-height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 0 14px;
        }

        @media (max-width: 991px) {
            .home-work-with-us .heading-info {
                max-width: 620px;
                margin: 0 auto 48px;
                padding-right: 0;
                text-align: center;
            }

            .home-work-with-us .heading-info h2 {
                margin-right: auto;
                margin-left: auto;
            }

            .home-work-with-us .fun-facts-items {
                margin-top: 0 !important;
            }
        }

        @media (max-width: 767px) {
            .home-work-with-us {
                padding: 64px 0 72px !important;
            }

        /* Mobile Navigation Drawer Header - iOS Safari & Chrome Compatibility */
        .mobile-menu-header {
            display: -webkit-flex !important;
            display: flex !important;
            -webkit-box-align: center !important;
            -webkit-align-items: center !important;
            align-items: center !important;
            -webkit-box-pack: justify !important;
            -webkit-justify-content: space-between !important;
            justify-content: space-between !important;
            width: 100% !important;
            padding-bottom: 15px !important;
            margin-bottom: 20px !important;
            border-bottom: 1px solid rgba(0, 0, 0, 0.08) !important;
            position: relative !important;
            box-sizing: border-box !important;
        }

        nav.navbar.validnavs .navbar-collapse.collapse .mobile-menu-header img.mobile-nav-logo {
            display: block !important;
            height: 38px !important;
            max-height: 38px !important;
            width: auto !important;
            margin: 0 !important;
            float: none !important;
            vertical-align: middle !important;
        }

        nav.navbar.validnavs .navbar-collapse.collapse button.mobile-menu-close {
            position: relative !important;
            top: auto !important;
            right: auto !important;
            left: auto !important;
            bottom: auto !important;
            margin: 0 !important;
            height: 36px !important;
            width: 36px !important;
            min-width: 36px !important;
            line-height: 34px !important;
            text-align: center !important;
            border: 1px solid #dcdcdc !important;
            border-radius: 50% !important;
            color: #222222 !important;
            background-color: #f5f5f5 !important;
            font-size: 16px !important;
            display: -webkit-inline-flex !important;
            display: inline-flex !important;
            -webkit-align-items: center !important;
            align-items: center !important;
            -webkit-justify-content: center !important;
            justify-content: center !important;
            -webkit-appearance: none !important;
            box-sizing: border-box !important;
            cursor: pointer !important;
            padding: 0 !important;
            outline: none !important;
        }

        nav.navbar.validnavs .navbar-collapse.collapse button.mobile-menu-close i {
            font-size: 16px !important;
            line-height: 1 !important;
            font-weight: 700 !important;
        }

        /* Mobile Navigation Side Drawer - Fail-safe Chrome & iOS Fix */
        @media (max-width: 1023px) {
            header,
            nav.navbar.validnavs {
                z-index: 99995 !important;
            }

            nav.navbar.validnavs.mobile-sidenav .navbar-collapse {
                position: fixed !important;
                left: -100% !important;
                top: 0 !important;
                width: 320px !important;
                max-width: 85vw !important;
                height: 100vh !important;
                min-height: 100vh !important;
                background: #ffffff !important;
                overflow-y: auto !important;
                -webkit-overflow-scrolling: touch !important;
                z-index: 100000 !important;
                transition: left 0.35s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
                display: block !important;
                visibility: visible !important;
                padding: 25px 20px !important;
                box-shadow: 4px 0 25px rgba(0, 0, 0, 0.15) !important;
                pointer-events: auto !important;
            }

            nav.navbar.validnavs.mobile-sidenav .navbar-collapse * {
                pointer-events: auto !important;
            }

            nav.navbar.validnavs.mobile-sidenav .navbar-collapse.show,
            nav.navbar.validnavs.mobile-sidenav .navbar-collapse.in,
            nav.navbar.validnavs.mobile-sidenav .navbar-collapse.site-mobile-open {
                left: 0 !important;
            }

            .overlay-screen {
                position: fixed !important;
                top: 0 !important;
                left: 0 !important;
                width: 100vw !important;
                height: 100vh !important;
                background: rgba(0, 0, 0, 0.6) !important;
                z-index: 99990 !important;
                opacity: 0 !important;
                visibility: hidden !important;
                transition: opacity 0.3s ease, visibility 0.3s ease !important;
                pointer-events: none !important;
            }

            .overlay-screen.opened,
            .overlay-screen.show {
                opacity: 1 !important;
                visibility: visible !important;
                pointer-events: auto !important;
            }

            .navbar-header .navbar-toggle {
                cursor: pointer !important;
                pointer-events: auto !important;
                z-index: 100 !important;
                display: inline-block !important;
            }
        }

        /* Blog Section Formatting Fix - Single Line Meta & Tight Card Layout */
        .blog-area .blog-items .item {
            display: flex !important;
            flex-direction: column !important;
            height: 100% !important;
            border-radius: 8px !important;
            overflow: hidden !important;
            background: #ffffff !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05) !important;
        }

        .blog-area .blog-items .item .info {
            display: flex !important;
            flex-direction: column !important;
            flex: 1 1 auto !important;
            padding: 18px 12px 22px !important;
        }

        .blog-area .blog-items .item .info .meta {
            margin-bottom: 12px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            width: 100% !important;
        }

        .blog-area .blog-items .item .info .meta ul {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            list-style: none !important;
            flex-wrap: nowrap !important;
        }

        .blog-area .blog-items .item .info .meta ul li {
            font-size: 11.5px !important;
            white-space: nowrap !important;
            color: #666666 !important;
            font-weight: 500 !important;
            margin-right: 0 !important;
            padding-right: 0 !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 4px !important;
        }

        .blog-area .blog-items .item .info .meta ul li::after {
            display: none !important;
        }

        .blog-area .blog-items .item .info .meta ul li a span,
        .blog-area .blog-items .item .info .meta ul li span {
            font-size: 11.5px !important;
            white-space: nowrap !important;
            color: #555555 !important;
            font-weight: 600 !important;
        }

        .blog-area .blog-items .item .info .content {
            display: flex !important;
            flex-direction: column !important;
            flex: 1 1 auto !important;
            justify-content: space-between !important;
            text-align: left !important;
        }

        .blog-area .blog-items .item .info .content h4 {
            font-size: 16.5px !important;
            line-height: 1.4 !important;
            font-weight: 700 !important;
            margin-top: 0 !important;
            margin-bottom: 15px !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            text-align: left !important;
        }

        .blog-area .blog-items .item .info .content h4 a {
            color: #111111 !important;
            text-align: left !important;
            display: block !important;
        }

        .blog-area .blog-items .item .info .content a.btn {
            margin-top: auto !important;
            align-self: flex-start !important;
        }

        /* Services Page - Optimal Card Padding & Line Flow */
        .services-area.icon-only .services-box .item {
            padding: 28px 12px !important;
        }

        .services-area.icon-only .services-box .item h4 {
            padding: 0 4px !important;
        }

        .services-area.icon-only .services-box .item h4 a {
            font-size: 15.5px !important;
            line-height: 1.4 !important;
            word-wrap: break-word !important;
        }
    </style>

    @stack('styles')
</head>

<body class="@yield('body-class')">

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Overlay Screen for Mobile Navigation -->
    <div class="overlay-screen"></div>

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav
            class="navbar mobile-sidenav nav-border navbar-sticky navbar-default validnavs white no-background navbar-fixed nav-border @yield('navbar-class')">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container-xl">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container d-flex justify-content-between align-items-center">


                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle open-mobile-menu" aria-label="Open navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="assets/img/logo-light.png" class="logo logo-display" alt="Logo">
                        <img src="assets/img/logo_aa.png" class="logo logo-scrolled" alt="Eirecon Energy Company">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <div class="mobile-menu-header d-lg-none">
                        <a href="{{ url('/') }}" class="mobile-logo-link">
                            <img src="assets/img/logo_aa.png" alt="Eirecon Energy Company" class="mobile-nav-logo">
                        </a>
                        <button type="button" class="navbar-toggle mobile-menu-close close-mobile-menu" aria-label="Close navigation">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="{{ url('/') }}"
                                class="{{ request()->is('/') || request()->is('index*') ? 'active' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/about-us') }}"
                                class="{{ request()->is('about-us*') ? 'active' : '' }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ url('/projects') }}"
                                class="{{ request()->is('projects*') ? 'active' : '' }}">Projects</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('/services') }}" class="dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}">Services</a>
                            <ul class="dropdown-menu dropdown-services bg-dark-transparent">
                                <li><a href="{{ url('/services') }}">All Services</a></li>
                                <li><a href="{{ url('/services-EPC-Projects') }}">EPC Projects</a></li>
                                <li><a href="{{ url('/services-Plant-Maintenance-Turnarounds') }}">Plant Maintenance & Turnarounds</a></li>
                                <li><a href="{{ url('/services-Design-Manufacturing') }}">Design & Manufacturing of Steel Structure, Piping & Process Equipment</a></li>
                                <li><a href="{{ url('/services-Power-Automation-Projects') }}">Power & Automation Projects & Services</a></li>
                                <li><a href="{{ url('/services-Rigging-Lifting-Projects') }}">Rigging & Lifting Projects & Services</a></li>
                                <li><a href="{{ url('/services-Infrastructure-Projects') }}">Infrastructure</a></li>
                                <li><a href="{{ url('/services-Scaffolding') }}">Scaffolding</a></li>
                                <li><a href="{{ url('/services-Equipmen-Rental') }}">Equipment Rental & Services</a></li>
                                <li><a href="{{ url('/services-Project-Support') }}">Project Support Services</a></li>
                                <li><a href="{{ url('/services-Procurement') }}">Procurement Services</a></li>
                                <li><a href="{{ url('/services-major-equipment-list') }}">Major Equipment List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/blog') }}" class="{{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}" class="{{ request()->is('contact*') ? 'active' : '' }}">Contact Us</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="far fa-search"></i></a></li>
                            <li class="button">
                                <a href="{{ url('/contact') }}">Consult Us</a>
                            </li>

                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Side Menu -->
                    <div class="side">
                        <a href="#" class="close-side"><i class="icon_close"></i></a>
                        <div class="widget">
                            <div class="logo">
                                <img src="assets/img/logo-light.png" alt="Logo">
                            </div>
                            <p>
                                Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now
                                easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may
                                purse means few blind.
                            </p>
                        </div>
                        <div class="widget address">
                            <div>
                                <ul>
                                    <li>
                                        <div class="content">
                                            <p>Address</p>
                                            <strong>Saudi Arabia</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <p>Email</p>
                                            <strong>support@validtheme.com</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <p>Contact</p>
                                            <strong>+44-20-7328-4499</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget newsletter">
                            <h4 class="title">Get Subscribed!</h4>
                            <form action="#">
                                <div class="input-group stylish-input-group">
                                    <input type="email" placeholder="Enter your e-mail" class="form-control"
                                        name="email">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <i class="arrow_right"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="widget social">
                            <ul class="link">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Side Menu -->
                </div>

                <!-- Main Nav -->

            </div>



        </nav>
        <!-- End Navigation -->
    </header>
    @yield('content')
    <footer class="bg-dark text-light">
        <!-- Footer Top -->
        <div class="footer-top text-center bg-dark text-light">
            <div class="container">
                <!-- <div class="row align-center">
                    <div class="logo col-lg-3 text-start">
                        <a href="#"><img src="assets/img/logo-light.png" alt="Logo"></a>
                    </div>
                    <div class="subscribe-form col-lg-6">
                        <form action="#">
                            <input type="email" name="email" class="form-control" placeholder="Enter your e-mail here">
                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                    <div class="col-lg-3 phone text-end">
                        <h4><i class="fas fa-phone"></i> +966 123 456 78</h4>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- End Footer Top -->

        <div class="container">
            <div class="f-items default-padding">
                <div class="row">

                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="f-item contact">
                            <h4 class="widget-title">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200" width="50" height="35"
                                    class="rounded"
                                    style="display:inline-block; vertical-align:middle; margin-right:8px; margin-top:-4px; border:1px solid rgba(255,255,255,0.2);">
                                    <rect width="300" height="200" fill="#006C35" />
                                    <path d="M 240 135 L 60 135 M 75 125 L 60 135 L 75 145 M 220 125 L 220 145"
                                        stroke="#FFFFFF" stroke-width="4" stroke-linecap="round" /><text x="150" y="95"
                                        fill="#FFFFFF" font-size="18" font-family="sans-serif" text-anchor="middle"
                                        font-weight="bold">لا إله إلا الله</text><text x="150" y="115" fill="#FFFFFF"
                                        font-size="12" font-family="sans-serif" text-anchor="middle"
                                        font-weight="bold">محمد رسول الله</text>
                                </svg> Saudi Arabia
                            </h4>
                            <p>
                                Prince Faisal Ibn Fahad Rd. Al Hizam Al Akhdar Dist.
                            </p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Al Khobar, KSA
                                </li>
                                <li
                                    style="white-space: nowrap; display: flex; align-items: center; gap: 8px; font-size: 13.5px;">
                                    <i class="fas fa-envelope-open" style="margin-top: 0; flex-shrink: 0;"></i>
                                    <span>info@eireconenergy.com</span>
                                </li>
                                <li
                                    style="white-space: nowrap; display: flex; align-items: center; gap: 8px; margin-top: 10px; font-size: 13.5px;">
                                    <i class="fas fa-phone" style="margin-top: 0; flex-shrink: 0;"></i>
                                    <span>+966 123 456 78</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="f-item contact">
                            <h4 class="widget-title">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 600" width="50" height="35"
                                    class="rounded"
                                    style="display:inline-block; vertical-align:middle; margin-right:8px; margin-top:-4px; border:1px solid rgba(255,255,255,0.2);">
                                    <rect width="900" height="200" fill="#FF9933" />
                                    <rect y="200" width="900" height="200" fill="#FFFFFF" />
                                    <rect y="400" width="900" height="200" fill="#138808" />
                                    <circle cx="450" cy="300" r="80" fill="none" stroke="#000080" stroke-width="6" />
                                    <circle cx="450" cy="300" r="15" fill="#000080" />
                                    <g stroke="#000080" stroke-width="4">
                                        <line x1="450" y1="220" x2="450" y2="380" />
                                        <line x1="370" y1="300" x2="530" y2="300" />
                                        <line x1="393" y1="243" x2="507" y2="357" />
                                        <line x1="393" y1="357" x2="507" y2="243" />
                                        <line x1="420" y1="225" x2="480" y2="375" />
                                        <line x1="480" y1="225" x2="420" y2="375" />
                                        <line x1="450" y1="300" x2="375" y2="275" />
                                        <line x1="450" y1="300" x2="525" y2="325" />
                                        <line x1="450" y1="300" x2="375" y2="325" />
                                        <line x1="450" y1="300" x2="525" y2="275" />
                                        <line x1="450" y1="300" x2="425" y2="225" />
                                        <line x1="450" y1="300" x2="475" y2="375" />
                                        <line x1="450" y1="300" x2="475" y2="225" />
                                        <line x1="450" y1="300" x2="425" y2="375" />
                                    </g>
                                </svg> India
                            </h4>
                            <p>
                                3 Rd, Okhla Phase III, Delhi, India, 110020
                            </p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Delhi, India - 110020
                                </li>
                                <li
                                    style="white-space: nowrap; display: flex; align-items: center; gap: 8px; font-size: 13.5px;">
                                    <i class="fas fa-envelope-open" style="margin-top: 0; flex-shrink: 0;"></i>
                                    <span>info@eireconenergy.com</span>
                                </li>
                                <li
                                    style="white-space: nowrap; display: flex; align-items: center; gap: 8px; margin-top: 10px; font-size: 13.5px;">
                                    <i class="fas fa-phone" style="margin-top: 0; flex-shrink: 0;"></i>
                                    <span>+966 123 456 78</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="f-item contact">
                            <h4 class="widget-title">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 300" width="50" height="35"
                                    class="rounded"
                                    style="display:inline-block; vertical-align:middle; margin-right:8px; margin-top:-4px; border:1px solid rgba(255,255,255,0.2);">
                                    <rect width="200" height="300" fill="#169B62" />
                                    <rect x="200" width="200" height="300" fill="#FFFFFF" />
                                    <rect x="400" width="200" height="300" fill="#FF883E" />
                                </svg> Ireland
                            </h4>
                            <p>
                                Athlone, Co. Westmeath,<br>Ireland
                            </p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Ireland
                                </li>
                                <li
                                    style="white-space: nowrap; display: flex; align-items: center; gap: 8px; font-size: 13.5px;">
                                    <i class="fas fa-envelope-open" style="margin-top: 0; flex-shrink: 0;"></i>
                                    <span>info@eireconenergy.com</span>
                                </li>
                                <li
                                    style="white-space: nowrap; display: flex; align-items: center; gap: 8px; margin-top: 10px; font-size: 13.5px;">
                                    <i class="fas fa-phone" style="margin-top: 0; flex-shrink: 0;"></i>
                                    <span>+966 123 456 78</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Know More</h4>
                            <ul>
                                <li>
                                    <a href="/about-us">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Teams</a>
                                </li>
                                <li>
                                    <a href="/services">Services</a>
                                </li>
                                <li>
                                    <a href="/services-Infrastructure-Projects">Infrastructure</a>
                                </li>
                                <li>
                                    <a href="/projects">Projects</a>
                                </li>
                                <li>
                                    <a href="/blog">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->

                </div>
            </div>
        </div>
        <!-- Fixed Shape -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2026. All Rights Reserved by <a href="#">EireconEnergy</a></p>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->

        <div class="fixed-shape">
            <img src="assets/img/shape/3.svg" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
    </footer>
    <!-- End Footer -->


    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        (function () {
            var carouselElement = document.getElementById("bootcarousel");
            var toggleButton = document.querySelector(".banner-cycle-toggle");
            if (!carouselElement || !toggleButton || !window.bootstrap || !window.bootstrap.Carousel) return;

            var carousel = window.bootstrap.Carousel.getOrCreateInstance(carouselElement, {
                interval: 4500,
                pause: false,
                ride: "carousel",
                wrap: true,
                touch: true
            });

            var isPaused = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
            var icon = toggleButton.querySelector("i");

            function updateToggle() {
                toggleButton.setAttribute("aria-pressed", String(isPaused));
                toggleButton.setAttribute("aria-label", isPaused ? "Start banner rotation" : "Pause banner rotation");
                icon.classList.toggle("fa-play", isPaused);
                icon.classList.toggle("fa-pause", !isPaused);
            }

            if (isPaused) carousel.pause();
            else carousel.cycle();
            updateToggle();

            toggleButton.addEventListener("click", function () {
                isPaused = !isPaused;
                if (isPaused) carousel.pause();
                else carousel.cycle();
                updateToggle();
            });
        })();

        /* Fail-safe Mobile Side Navbar Drawer Controller */
        (function () {
            "use strict";
            document.addEventListener("DOMContentLoaded", function () {
                function openMobileMenu(e) {
                    if (e) {
                        e.stopPropagation();
                    }
                    var navMenu = document.getElementById("navbar-menu");
                    var overlay = document.querySelector(".overlay-screen");
                    var navbar = document.querySelector("nav.navbar");

                    if (navMenu) {
                        navMenu.classList.add("show");
                        navMenu.classList.add("in");
                        navMenu.classList.add("site-mobile-open");
                        navMenu.classList.add("collapse-mobile");
                    }
                    if (overlay) {
                        overlay.classList.add("opened");
                        overlay.classList.add("show");
                    }
                    if (navbar) {
                        navbar.classList.add("navbar-responsive");
                    }
                }

                function closeMobileMenu(e) {
                    if (e) {
                        e.stopPropagation();
                    }
                    var navMenu = document.getElementById("navbar-menu");
                    var overlay = document.querySelector(".overlay-screen");
                    var navbar = document.querySelector("nav.navbar");

                    if (navMenu) {
                        navMenu.classList.remove("show");
                        navMenu.classList.remove("in");
                        navMenu.classList.remove("site-mobile-open");
                    }
                    if (overlay) {
                        overlay.classList.remove("opened");
                        overlay.classList.remove("show");
                    }
                    if (navbar) {
                        navbar.classList.remove("navbar-responsive");
                    }
                }

                document.querySelectorAll(".navbar-header .navbar-toggle, .open-mobile-menu").forEach(function (btn) {
                    btn.addEventListener("click", openMobileMenu);
                });

                document.querySelectorAll(".close-mobile-menu, .overlay-screen").forEach(function (btn) {
                    btn.addEventListener("click", closeMobileMenu);
                });

                document.querySelectorAll("#navbar-menu ul.nav li a:not(.dropdown-toggle)").forEach(function (link) {
                    link.addEventListener("click", closeMobileMenu);
                });
            });
        })();
    </script>
    @stack('scripts')
</body>

</html>
