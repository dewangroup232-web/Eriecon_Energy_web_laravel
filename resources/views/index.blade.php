@extends('layouts.app')

@push('styles')
    <style>
        .home-ceo-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px 24px;
            margin-top: 6px;
        }

        .home-ceo-signature {
            color: #0b4aa2;
            font-size: 17px;
            font-style: normal;
            font-weight: 600;
            line-height: 1.4;
        }

        .home-ceo-signature strong {
            font-weight: 800;
        }

        .home-ceo-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 5px 0;
            color: #1e63c6;
            font-size: 13px;
            font-style: normal;
            font-weight: 750;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            border-bottom: 1px solid currentColor;
            transition: color 180ms ease, gap 180ms ease;
        }

        .home-ceo-link:hover,
        .home-ceo-link:focus-visible {
            gap: 12px;
            color: #0a3474;
        }
    </style>
@endpush

@section('content')

    <!-- End Header -->

    <!-- Start Banner 
                        ============================================= -->
    <div class="banner-area inc-content text-medium top-pad-60">
        <div id="bootcarousel" class="carousel text-center slide text-light carousel-fade animate_text" data-ride="carousel"
            data-interval="4500" data-pause="false" data-wrap="true" data-bs-ride="carousel" data-bs-interval="4500"
            data-bs-pause="false" data-bs-wrap="true">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                @foreach($banners as $banner)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}" role="group"
                        aria-label="Slide {{ $loop->iteration }} of {{ $loop->count }}">
                        <div class="slider-thumb bg-cover"
                            style="background-image: url('{{ $banner->image_url }}');"></div>
                        <div class="box-table shadow dark">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-10 offset-lg-1">
                                            <div class="content">
                                                <h2 data-animation="animated slideInDown">{{ $banner->title }}</h2>
                                                @if($banner->subtitle)
                                                    <h3 data-animation="animated slideInRight">{{ $banner->subtitle }}</h3>
                                                @endif
                                                @if($banner->cta_text && $banner->cta_url)
                                                    <a data-animation="animated slideInUp"
                                                        class="btn circle btn-light effect btn-md angle"
                                                        href="{{ $banner->cta_url }}">{{ $banner->cta_text }}</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if($banners->isEmpty())
                <div class="carousel-item active" role="group" aria-label="Slide 1 of 4">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/13.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">EIRECON ENERGY COMPANY
                                            </h2>
                                            <h3 data-animation="animated slideInRight">
                                                "Energy That Drives the World" </h3>
                                            <a data-animation="animated slideInUp"
                                                class="btn circle btn-light effect btn-md angle" href="projects.html">View
                                                Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" role="group" aria-label="Slide 2 of 4">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/banner_2.jpeg);">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">EIRECON ENERGY COMPANY
                                            </h2>
                                            <h3 data-animation="animated slideInRight">
                                                "Energy That Drives the World" </h3>
                                            <a data-animation="animated slideInUp"
                                                class="btn circle btn-light effect btn-md angle" href="projects.html">View
                                                Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" role="group" aria-label="Slide 3 of 4">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/banner_3.jpeg);">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">EIRECON ENERGY COMPANY
                                            </h2>
                                            <h3 data-animation="animated slideInRight">
                                                "Energy That Drives the World" </h3>
                                            <a data-animation="animated slideInUp"
                                                class="btn circle btn-light effect btn-md angle" href="projects.html">View
                                                Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" role="group" aria-label="Slide 4 of 4">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/Banner4.jpeg);">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">EIRECON ENERGY COMPANY
                                            </h2>
                                            <h3 data-animation="animated slideInRight">
                                                "Energy That Drives the World" </h3>
                                            <a data-animation="animated slideInUp"
                                                class="btn circle btn-light effect btn-md angle" href="projects.html">View
                                                Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!-- Left and right controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#bootcarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#bootcarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- End Wrapper for slides -->
            <button class="banner-cycle-toggle" type="button" aria-label="Pause banner rotation" aria-pressed="false">
                <i class="fas fa-pause" aria-hidden="true"></i>
            </button>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our About
                        ============================================= -->
    <div class="about-area overflow-hidden shape-box py-5">
        <div class="container">
            <div class="about-box">
                <div class="row align-items-center">
                    <div class="col-lg-6 thumb-left">
                        <div class="thumb">
                            <img src="assets/img/about/home1.png" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-6 info">
                        <div class="experiecne" style="margin-bottom: 18px;">
                            <strong style="font-size: 85px; line-height: 70px;">25</strong>
                            <h5 style="font-size: 18px; line-height: 1.4;">Years Work experience in Oil &amp; gas
                                industry</h5>
                        </div>
                        <blockquote style="margin-top: 18px; padding-left: 18px;">
                            <p style="font-size: 16px; line-height: 1.7; margin-bottom: 12px;">
                                At EIRECON ENERGY COMPANY, our mission is to deliver excellence
                                across the energy and infrastructure sectors through technical
                                innovation and operational integrity. We pride ourselves on being a
                                trusted partner in the Oil &amp; Gas and Petrochemical industries,
                                providing specialized EPC solutions and maintenance services that
                                safeguard the Kingdom's critical industrial assets.
                            </p>
                            <div class="home-ceo-actions">
                                <span class="home-ceo-signature">CEO <strong>Manawar Khan</strong></span>
                                <a class="home-ceo-link" href="about-us.html">
                                    Know More <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape-bg opacity-03">
            <img src="assets/img/shape/5.svg" alt="Shape">
        </div>
        <!-- End Shape -->
    </div>
    <!-- End Our About -->

    <!-- Start Homepage Services ====================================== -->
    <section class="home-services" id="home-services" aria-labelledby="homeServicesTitle">
        <div class="container">
            <div class="home-services-heading" data-reveal="fade-up">
                <span class="home-services-eyebrow">Our Services</span>
                <h2 id="homeServicesTitle">Built for Industry.<br><span>Ready for Every Challenge.</span></h2>
                <p class="home-services-subheading">
                    <span>From engineering and construction to maintenance, lifting and project support.</span>
                    <span>Specialist teams deliver every scope with safety, precision and accountability.</span>
                </p>
            </div>

            <div class="home-services-grid">
                <a class="home-service-card" href="services-EPC-Projects.html" aria-label="EPC Projects"
                    data-reveal="fade-up" data-delay="0">
                    <img src="{{ asset('assets/img/services/EPC PROJECTS.png') }}" alt="EPC Projects" loading="lazy">
                    <h3 class="home-service-name">EPC Projects</h3>
                </a>

                <a class="home-service-card" href="services-Plant-Maintenance-Turnarounds.html"
                    aria-label="Plant Maintenance and Turnarounds" data-reveal="fade-up" data-delay="80">
                    <img src="{{ asset('assets/img/services/Plant Maintenance & Turnarounds.png') }}"
                        alt="Plant Maintenance and Turnarounds" loading="lazy">
                    <h3 class="home-service-name">Plant Maintenance &amp; Turnarounds</h3>
                </a>

                <a class="home-service-card" href="services-Design-Manufacturing.html"
                    aria-label="Design and Manufacturing of Steel Structure, Piping and Process Equipment"
                    data-reveal="fade-up" data-delay="120">
                    <img src="{{ asset('assets/img/services/Design and Manufacturing of Steel Structure, Piping & Process Equipment.png') }}"
                        alt="Design and Manufacturing of Steel Structure, Piping and Process Equipment" loading="lazy">
                    <h3 class="home-service-name home-service-name--design">Design &amp; Manufacturing of Steel Structure, Piping &amp; Process
                        Equipment</h3>
                </a>

                <a class="home-service-card" href="services-Power-Automation-Projects.html"
                    aria-label="Power and Automation Projects and Services" data-reveal="fade-up" data-delay="160">
                    <img src="{{ asset('assets/img/services/Power & Automation Projects & Services.png') }}"
                        alt="Power and Automation Projects and Services" loading="lazy">
                    <h3 class="home-service-name">Power &amp; Automation Projects &amp; Services</h3>
                </a>

                <a class="home-service-card" href="services-Rigging-Lifting-Projects.html"
                    aria-label="Rigging and Lifting Projects and Services" data-reveal="fade-up" data-delay="200">
                    <img src="{{ asset('assets/img/services/Rigging & Lifting Projects.png') }}"
                        alt="Rigging and Lifting Projects and Services" loading="lazy">
                    <h3 class="home-service-name">Rigging &amp; Lifting Projects &amp; Services</h3>
                </a>

                <a class="home-service-card" href="services-Infrastructure-Projects.html"
                    aria-label="Infrastructure" data-reveal="fade-up" data-delay="0">
                    <img src="{{ asset('assets/img/services/Infrastructure.png') }}" alt="Infrastructure" loading="lazy">
                    <h3 class="home-service-name">Infrastructure</h3>
                </a>

                <a class="home-service-card" href="services-Scaffolding.html" aria-label="Scaffolding" data-reveal="fade-up"
                    data-delay="80">
                    <img src="{{ asset('assets/img/services/Scaffolding.png') }}" alt="Scaffolding" loading="lazy">
                    <h3 class="home-service-name">Scaffolding</h3>
                </a>

                <a class="home-service-card" href="services-Equipmen-Rental.html" aria-label="Equipment Rental and Services"
                    data-reveal="fade-up" data-delay="120">
                    <img src="{{ asset('assets/img/services/Equipment Rental & Services.png') }}"
                        alt="Equipment Rental and Services" loading="lazy">
                    <h3 class="home-service-name">Equipment Rental &amp; Services</h3>
                </a>

                <a class="home-service-card" href="services-Project-Support.html"
                    aria-label="Project Support Services" data-reveal="fade-up" data-delay="160">
                    <img src="{{ asset('assets/img/services/Project Support Services.png') }}"
                        alt="Project Support Services" loading="lazy">
                    <h3 class="home-service-name">Project Support Services</h3>
                </a>

                <a class="home-service-card" href="services-Procurement.html" aria-label="Procurement Services"
                    data-reveal="fade-up" data-delay="200">
                    <img src="{{ asset('assets/img/services/Procurement Services.png') }}" alt="Procurement Services"
                        loading="lazy">
                    <h3 class="home-service-name">Procurement Services</h3>
                </a>

                <a class="home-service-card" href="services-major-equipment-list.html"
                    aria-label="Major Equipment List" data-reveal="fade-up" data-delay="240">
                    <img src="{{ asset('assets/img/services/1.png') }}" alt="Major Equipment List" loading="lazy">
                    <h3 class="home-service-name">Major Equipment List</h3>
                </a>
            </div>
        </div>
    </section>
    <!-- End Homepage Services -->

    <!-- Start Work With Us 
                        ============================================= -->
    <div class="work-with-us-area home-work-with-us bg-gray">
        <div class="container">
            <div class="content-box">
                <div class="row align-center">
                    <div class="col-lg-5">
                        <div class="heading-info">
                            <h5>Work with Us</h5>
                            <h2>Aligned with Saudi Vision 2030</h2>
                            <a href="#" class="btn angle btn-theme effect btn-md">Get a Quote</a>
                        </div>
                    </div>
                    <div class="col-lg-7 fun-facts-items text-center">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="fun-fact">
                                    <h4>Ongoing Projects</h4>
                                    <div class="timer" data-to="28" data-speed="5000">28</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="fun-fact">
                                    <h4>Delivered Projects</h4>
                                    <div class="timer" data-to="56" data-speed="5000">56</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="fun-fact">
                                    <h4>Upcoming Projects</h4>
                                    <div class="timer" data-to="20" data-speed="5000">20</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work With Us -->

    <!-- =====================================================
                             PREMIUM PILLARS SECTION — Vision · Mission · Values · Standards
                             Each pillar = full-width scroll section, alternating layout
                        ====================================================== -->
    <section class="pillars-wrapper" id="pillars">

        <!-- ── 01 VISION ───────────────────────────────────────── -->
        <div class="pillar-section pillar-light" id="pillar-vision">
            <div class="container-fluid pillar-container">
                <div class="pillar-row row-normal">
                    <div class="pillar-text" data-reveal="slide-right">
                        <!-- <div class="pillar-number">01</div> -->
                        <span class="eyebrow-label">Vision</span>
                        <h2>Our Vision,<br>Aligned with<br>Saudi Vision 2030</h2>
                        <div class="pillar-divider"></div>
                        <p>To become the premier industrial partner in the region, recognised for setting the benchmark
                            in engineering excellence, safety, and reliability. We strive to lead the energy transition
                            by delivering innovative infrastructure solutions that empower our clients and contribute to
                            a sustainable, technologically advanced industrial future.</p>
                        <a class="pillar-cta" href="about-us.html">
                            <span>Explore Our Story</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                    <div class="pillar-image" data-reveal="slide-left">
                        <div class="pillar-img-wrap">
                            <img src="assets/img/services/16.jpeg" alt="EIRECON Vision — industrial infrastructure">
                            <div class="pillar-img-badge">
                                <i class="fas fa-eye"></i>
                                <span>Vision</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── 02 MISSION ──────────────────────────────────────── -->
        <div class="pillar-section pillar-dark" id="pillar-mission">
            <div class="container-fluid pillar-container">
                <div class="pillar-row row-reverse">
                    <div class="pillar-text" data-reveal="slide-left">
                        <!-- <div class="pillar-number">02</div> -->
                        <span class="eyebrow-label">Mission</span>
                        <h2>Delivering<br>Excellence<br>Every Time</h2>
                        <div class="pillar-divider"></div>
                        <p>To deliver high-quality EPC, manufacturing, and support services through technical expertise
                            and disciplined project management. We are dedicated to providing our clients with
                            cost-effective and safe solutions while fostering a culture of continuous improvement,
                            professional integrity, and strict adherence to international quality standards.</p>
                        <a class="pillar-cta pillar-cta-light" href="about-us.html">
                            <span>Our Approach</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                    <div class="pillar-image" data-reveal="slide-right">
                        <div class="pillar-img-wrap">
                            <img src="assets/img/services/5.png" alt="EIRECON Mission — engineering excellence">
                            <div class="pillar-img-badge pillar-img-badge-light">
                                <i class="fas fa-bullseye"></i>
                                <span>Mission</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── 03 CORE VALUES ──────────────────────────────────── -->
        <div class="pillar-section pillar-light" id="pillar-values">
            <div class="container">
                <div class="pillar-values-header" data-reveal="fade-up">
                    <!-- <div class="pillar-number">03</div> -->
                    <span class="eyebrow-label">Core Values</span>
                    <h2>The Principles<br>We Stand By</h2>
                    <div class="pillar-divider"></div>
                </div>
                <div class="pillar-values-grid">
                    <div class="value-card" data-reveal="fade-up" data-delay="0">
                        <div class="value-card-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Integrity</h4>
                        <p>We uphold the highest ethical standards in every contract and partnership, building trust
                            through transparent and honest dealings.</p>
                        <div class="value-card-line"></div>
                    </div>
                    <div class="value-card" data-reveal="fade-up" data-delay="100">
                        <div class="value-card-icon">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                        <h4>Safety</h4>
                        <p>We maintain a "Zero Harm" culture to protect our workforce, our clients, and the environment
                            on every single project.</p>
                        <div class="value-card-line"></div>
                    </div>
                    <div class="value-card" data-reveal="fade-up" data-delay="200">
                        <div class="value-card-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h4>Quality</h4>
                        <p>We ensure precision in our manufacturing and excellence in our project delivery — no
                            compromise, no exceptions.</p>
                        <div class="value-card-line"></div>
                    </div>
                    <div class="value-card" data-reveal="fade-up" data-delay="300">
                        <div class="value-card-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Reliability</h4>
                        <p>We are a dependable partner, delivering on our promises every time — on schedule, within
                            budget, and to specification.</p>
                        <div class="value-card-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── 04 STANDARDS ────────────────────────────────────── -->
        <div class="pillar-section pillar-navy" id="pillar-standards">
            <div class="container-fluid pillar-container">
                <div class="pillar-row row-normal">
                    <div class="pillar-text" data-reveal="slide-right">
                        <!-- <div class="pillar-number pillar-number-white">04</div> -->
                        <span class="eyebrow-label eyebrow-light">Standards</span>
                        <h2 class="text-white">Quality Assurance<br>&amp; Control</h2>
                        <div class="pillar-divider pillar-divider-accent"></div>
                        <p class="text-light-para">We maintain a proactive approach to excellence by implementing a
                            systematic management framework that prevents defects before they occur. Our QA processes
                            ensure that every project phase — from procurement to final delivery — aligns with
                            international standards and client-specific technical requirements.</p>
                        <p class="text-light-para">Our QC team focuses on rigorous inspection and testing of all
                            fabrication and construction. By utilising advanced monitoring tools and stringent
                            verification protocols, we ensure that every weld, component, and installation meets precise
                            engineering tolerances.</p>
                        <a class="pillar-cta pillar-cta-light" href="about-us.html">
                            <span>Our Standards</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                    <div class="pillar-image" data-reveal="slide-left">
                        <div class="pillar-img-wrap">
                            <img src="assets/img/services/7.png" alt="EIRECON Standards — quality assurance">
                            <div class="pillar-img-badge pillar-img-badge-accent">
                                <i class="fas fa-certificate"></i>
                                <span>QA/QC</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Pillars Section -->

    <style>
        /* =============================================================
                           PILLARS SECTION — Premium Stacked Scroll Design
                           ============================================================= */

        .pillars-wrapper {
            overflow: hidden;
        }

        /* ── Eyebrow Label ───────────────────────────────────────── */
        .eyebrow-label {
            display: inline-block;
            align-self: flex-start;
            width: max-content;
            font-size: 0.8125rem;
            font-weight: 700;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: #1B4FA8;
            background: rgba(27, 79, 168, 0.08);
            padding: 6px 18px;
            border-radius: 100px;
            margin-bottom: 20px;
        }

        .eyebrow-light {
            color: rgba(255, 255, 255, 0.85);
            background: rgba(255, 255, 255, 0.12);
        }

        /* ── Individual Pillar Sections ──────────────────────────── */
        .pillar-section {
            position: relative;
            overflow: hidden;
        }

        .pillar-light {
            background: #ffffff;
        }

        .pillar-dark {
            background: #0D1B2E;
        }

        .pillar-navy {
            background: #0A1628;
        }

        .pillar-container {
            padding: 0;
        }

        .pillar-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 540px;
        }

        .row-reverse .pillar-text {
            order: 2;
        }

        .row-reverse .pillar-image {
            order: 1;
        }

        /* ── Pillar Text Pane ────────────────────────────────────── */
        .pillar-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 50px 60px 60px;
        }

        .row-reverse .pillar-text {
            padding: 60px 60px 60px 50px;
        }

        .pillar-number {
            font-family: "Poppins", sans-serif;
            font-size: 5rem;
            font-weight: 900;
            color: rgba(27, 79, 168, 0.08);
            line-height: 1;
            letter-spacing: -0.05em;
            margin-bottom: -10px;
            transition: color 0.4s ease;
        }

        .pillar-number-white {
            color: rgba(255, 255, 255, 0.07);
        }

        .pillar-text h2 {
            font-size: clamp(2.25rem, 4vw, 3.5rem);
            font-weight: 800;
            color: #0D1B2E;
            line-height: 1.1;
            letter-spacing: -0.04em;
            margin: 8px 0 0;
        }

        .pillar-dark .pillar-text h2,
        .pillar-navy .pillar-text h2 {
            color: #ffffff;
        }

        .pillar-divider {
            width: 48px;
            height: 3px;
            background: #1B4FA8;
            border-radius: 3px;
            margin: 28px 0;
            transition: width 0.6s ease;
        }

        .pillar-divider-accent {
            background: #E8921A;
        }

        .pillar-section:hover .pillar-divider {
            width: 80px;
        }

        .pillar-text p {
            font-size: 1.125rem;
            color: #4A5568;
            line-height: 1.8;
            max-width: 540px;
            margin-bottom: 0;
        }

        .text-light-para {
            color: rgba(255, 255, 255, 0.72) !important;
            margin-bottom: 16px !important;
        }

        /* ── CTA Links ───────────────────────────────────────────── */
        .pillar-cta {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 36px;
            font-family: "Poppins", sans-serif;
            font-size: 0.875rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #1B4FA8;
            text-decoration: none;
            position: relative;
            transition: gap 0.3s ease, color 0.3s ease;
        }

        .pillar-cta::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: #1B4FA8;
            transition: width 0.35s ease;
        }

        .pillar-cta:hover::after {
            width: 100%;
        }

        .pillar-cta:hover {
            gap: 16px;
            color: #1B4FA8;
        }

        .pillar-cta-light {
            color: rgba(255, 255, 255, 0.9);
        }

        .pillar-cta-light::after {
            background: rgba(255, 255, 255, 0.9);
        }

        .pillar-cta-light:hover {
            color: #ffffff;
        }

        /* ── Image Pane ──────────────────────────────────────────── */
        .pillar-image {
            position: relative;
            overflow: hidden;
            min-height: 540px;
        }

        .pillar-img-wrap {
            position: absolute;
            inset: 0;
        }

        .pillar-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            display: block;
        }

        .pillar-image:hover .pillar-img-wrap img {
            transform: scale(1.05);
        }

        /* Overlay on images */
        .pillar-img-wrap::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(27, 79, 168, 0.25) 0%, rgba(13, 27, 46, 0.35) 100%);
        }

        .pillar-dark .pillar-img-wrap::after,
        .pillar-navy .pillar-img-wrap::after {
            background: linear-gradient(135deg, rgba(13, 27, 46, 0.5) 0%, rgba(27, 79, 168, 0.3) 100%);
        }

        /* ── Image Badge ─────────────────────────────────────────── */
        .pillar-img-badge {
            position: absolute;
            bottom: 32px;
            right: 32px;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 10px;
            background: #1B4FA8;
            color: #fff;
            padding: 12px 22px;
            border-radius: 100px;
            font-family: "Poppins", sans-serif;
            font-size: 0.8125rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            box-shadow: 0 8px 32px rgba(27, 79, 168, 0.4);
            transform: translateY(8px);
            opacity: 0;
            transition: opacity 0.5s ease 0.3s, transform 0.5s ease 0.3s;
        }

        .pillar-image.is-visible .pillar-img-badge {
            opacity: 1;
            transform: translateY(0);
        }

        .pillar-img-badge i {
            font-size: 14px;
        }

        .pillar-img-badge-light {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .pillar-img-badge-accent {
            background: #E8921A;
            box-shadow: 0 8px 32px rgba(232, 146, 26, 0.4);
        }

        /* ── Core Values Grid ────────────────────────────────────── */
        .pillar-values-header {
            text-align: center;
            padding: 60px 0 40px;
            max-width: 640px;
            margin: 0 auto;
        }

        .pillar-values-header h2 {
            font-size: clamp(2rem, 3.5vw, 3rem);
            font-weight: 800;
            color: #0D1B2E;
            letter-spacing: -0.04em;
            line-height: 1.1;
            margin: 8px 0 0;
        }

        .pillar-values-header .pillar-divider {
            margin: 28px auto;
        }

        .pillar-values-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            border-top: 1px solid #E2E8F0;
            padding-bottom: 60px;
        }

        .value-card {
            padding: 48px 36px 44px;
            border-right: 1px solid #E2E8F0;
            position: relative;
            overflow: hidden;
            transition: background 0.35s ease, transform 0.35s ease;
            cursor: default;
        }

        .value-card:last-child {
            border-right: none;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: #1B4FA8;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .value-card:hover::before {
            transform: scaleX(1);
        }

        .value-card:hover {
            background: #F7F9FC;
            transform: translateY(-4px);
        }

        .value-card-icon {
            width: 56px;
            height: 56px;
            background: rgba(27, 79, 168, 0.08);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            transition: background 0.35s ease, transform 0.35s ease;
        }

        .value-card:hover .value-card-icon {
            background: #1B4FA8;
            transform: rotate(-6deg) scale(1.08);
        }

        .value-card-icon i {
            font-size: 22px;
            color: #1B4FA8;
            transition: color 0.35s ease;
        }

        .value-card:hover .value-card-icon i {
            color: #ffffff;
        }

        .value-card h4 {
            font-family: "Poppins", sans-serif;
            font-size: 1.125rem;
            font-weight: 700;
            color: #0D1B2E;
            letter-spacing: -0.02em;
            margin-bottom: 14px;
        }

        .value-card p {
            font-size: 0.9375rem;
            color: #4A5568;
            line-height: 1.7;
            margin: 0;
        }

        /* ── Scroll-Reveal Animations ────────────────────────────── */
        [data-reveal] {
            opacity: 0;
            transition-property: opacity, transform;
            transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transition-duration: 0.75s;
        }

        [data-reveal="fade-up"] {
            transform: translateY(48px);
        }

        [data-reveal="slide-right"] {
            transform: translateX(-64px);
        }

        [data-reveal="slide-left"] {
            transform: translateX(64px);
        }

        [data-reveal].is-visible {
            opacity: 1;
            transform: translate(0, 0);
        }

        @media (prefers-reduced-motion: reduce) {

            [data-reveal],
            [data-reveal].is-visible {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }

        /* ── Responsive ──────────────────────────────────────────── */
        @media (max-width: 1024px) {
            .pillar-text {
                padding: 60px 40px;
            }

            .row-reverse .pillar-text {
                padding: 60px 40px;
            }

            .pillar-values-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .value-card {
                border-bottom: 1px solid #E2E8F0;
            }
        }

        @media (max-width: 767px) {
            .pillar-row {
                grid-template-columns: 1fr;
            }

            .row-reverse .pillar-text {
                order: 1;
            }

            .row-reverse .pillar-image {
                order: 2;
            }

            .pillar-image {
                min-height: 320px;
            }

            .pillar-text {
                padding: 60px 24px;
            }

            .row-reverse .pillar-text {
                padding: 60px 24px;
            }

            .pillar-values-grid {
                grid-template-columns: 1fr;
            }

            .pillar-values-header {
                padding: 70px 0 40px;
            }

            .value-card {
                border-right: none;
            }
        }
    </style>

    <script>
        /* Scroll-Reveal using Intersection Observer */
        (function () {
            function initReveal() {
                var items = document.querySelectorAll('[data-reveal]');
                var images = document.querySelectorAll('.pillar-image');

                if (!items.length) return;

                var observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            var el = entry.target;
                            var delay = parseInt(el.getAttribute('data-delay') || '0', 10);
                            setTimeout(function () {
                                el.classList.add('is-visible');
                            }, delay);
                            observer.unobserve(el);
                        }
                    });
                }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });

                var imgObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            imgObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.3 });

                items.forEach(function (el) { observer.observe(el); });
                images.forEach(function (el) { imgObserver.observe(el); });
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initReveal);
            } else {
                initReveal();
            }
        })();
    </script>

    <!-- End Pillars Section -->





    <!-- Start Portfolio Area 
                        ============================================= -->
    <div class="portfolio-area half-bg-dark default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Portfolio</h4>
                        <h2>Latest Work</h2>
                        <p>
                            We deliver high-impact engineering, development, and consulting solutions across the
                            industrial and digital landscape. From scaling heavy infrastructure to building robust
                            enterprise applications, our focus remains on precision, safety, and seamless execution.
                        </p>
                    </div>
                </div>
            </div>
            <div class="portfolio-box text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolio-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/portfolio/1.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <a href="assets/img/portfolio/1.jpg" class="item popup-gallery"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <h5><a href="#">Oil and Gass Energy</a></h5>
                                    <span>industry, environment </span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/portfolio/2.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <a href="assets/img/portfolio/2.jpg" class="item popup-gallery"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <h5><a href="#">Industries & Infrastructure Sector</a></h5>
                                    <span>industry, environment </span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/portfolio/9.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <a href="assets/img/portfolio/9.jpg" class="item popup-gallery"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <h5><a href="#">Plant Maintenance</a></h5>
                                    <span>industry, Infrastructure </span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/portfolio/4.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <a href="assets/img/portfolio/4.jpg" class="item popup-gallery"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <h5><a href="#">Power & Automation Projects</a></h5>
                                    <span>industry, Services </span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio Area -->



    <!-- Start Testimonials Area 
                        ============================================= -->
    <div class="testimonials-area default-padding">
        <div class="container">
            <div class="testimonial-items">
                <div class="row">
                    <div class="col-lg-5 title">
                        <h2>What Customers Say</h2>
                        <p>
                            Real feedback from the enterprise clients and partners who trust us to deliver their
                            critical projects
                        </p>
                        <a class="btn circle btn-theme angle effect btn-md" href="#">View All</a>
                    </div>
                    <div class="col-lg-7 testimonial-box">
                        <div class="testimonial-content testimonials-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <p>
                                    Their Power Automate solution completely transformed our field inspection and
                                    compliance tracking, turning a tedious manual process into an automated, real-time
                                    system. It drastically reduced reporting delays while ensuring our high safety
                                    standards were strictly met
                                </p>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="assets/img/team/6.jpg" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>ABC client</h5>
                                        <span>Client post</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <p>
                                    By automating our production data workflows with Power Automate, they eliminated
                                    manual data entry errors across our facility reports. The resulting efficiency gain
                                    has saved our engineering team hours of administrative work each week</p>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="assets/img/team/7.jpg" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>QWERT client</h5>
                                        <span>Client post</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Blog Area 
                        ============================================= -->
    <div class="blog-area default-padding-bottom bg-gray-responsive">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Blog</h4>
                        <h2>Latest News</h2>
                        <p>
                            Explore our latest innovations, newly launched services, and recent technical updates </p>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">
                    @if($latestPosts->isNotEmpty())
                        @foreach($latestPosts as $post)
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{ $post->public_url }}"><img src="{{ $post->featured_image_url }}"
                                                alt="{{ $post->image_alt ?: $post->title }}" loading="lazy"></a>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li><a href="{{ $post->public_url }}"><span>{{ $post->author_name == 'Eirecon Engineering Team' ? 'Eirecon Team' : \Illuminate\Support\Str::limit($post->author_name, 16) }}</span></a></li>
                                                <li><i class="fas fa-calendar" aria-hidden="true"></i> {{ $post->published_at->format('d M, Y') }}</li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <h4><a href="{{ $post->public_url }}">{{ $post->title }}</a></h4>
                                            <a class="btn circle btn-theme angle effect btn-sm" href="{{ $post->public_url }}">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single.html"><img src="assets/img/services/1.png" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/team/1.jpg" alt="Thumb">
                                                <span>ABCD</span>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar"></i> 22 Jun, 2026
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="blog-single.html">Stay updated with our latest project rollouts,
                                            announcements.</a>
                                    </h4>
                                    <a class="btn circle btn-theme angle effect btn-sm" href="blog-single.html">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single.html"><img src="assets/img/services/2.png" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/team/2.jpg" alt="Thumb">
                                                <span>User</span>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar"></i> 23 JUn, 2026
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="blog-single.html">Stay updated with our latest project rollouts,
                                            announcements, and
                                            capabilities </a>
                                    </h4>
                                    <a class="btn circle btn-theme angle effect btn-sm" href="blog-single.html">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single.html"><img src="assets/img/services/8.png" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/team/3.jpg" alt="Thumb">
                                                <span>QWERTY</span>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar"></i> 25 Jun, 2026
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="blog-single.html">Stay updated with our latest project rollouts,
                                            announcements, and
                                            capabilities.</a>
                                    </h4>
                                    <a class="btn circle btn-theme angle effect btn-sm" href="blog-single.html">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Footer 
                        ============================================= -->

@endsection
