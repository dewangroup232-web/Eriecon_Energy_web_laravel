@extends('layouts.app')

@push('styles')
    <style>
        /* .about-certificates {
                                position: relative;
                                overflow: hidden;
                                padding: clamp(50px, 6vw, 80px) 0 20px 0;
                                background: #071525;
                            } */

        .about-certificates-grid {
            margin-bottom: 0 !important;
        }

        .about-partners {
            padding: clamp(35px, 4vw, 50px) 0 !important;
        }
    </style>
@endpush

@section('content')
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center"
        style="background-image: url(assets/img/abbbb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About Us</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Our About
                                ============================================= -->
    <div class="about-area overflow-hidden shape-box default-padding-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 info-content">
                    <!-- <h2 style="font-size: clamp(32px, 4vw, 42px); font-weight: 800; margin-bottom: 8px; color: #0D1B2E;">About Us</h2> -->
                    <h4
                        style="color: #1B4FA8; font-style: italic; font-weight: 600; font-size: clamp(26px, 2.2vw, 26px); margin-bottom: 22px;">
                        “Energy That Drives the World”</h4>
                    <p style="font-size: 15.5px; line-height: 1.75; color: #444444; margin-bottom: 16px;">
                        EIRECON ENERGY COMPANY is a leader in industrial services, providing integrated EPC solutions across
                        the civil, mechanical, and electrical fields. We specialize in the Oil &amp; Gas and Petrochemical
                        sectors, delivering high-pressure piping, specialized steel manufacturing, and mechanical
                        maintenance. From upstream flowlines to downstream refinery turnarounds, we ensure the reliability
                        and integrity of critical energy infrastructure.
                    </p>
                    <p style="font-size: 15.5px; line-height: 1.75; color: #444444; margin-bottom: 16px;">
                        Our operations offer a “single-window” experience, combining high-tier equipment rental with expert
                        rigging, scaffolding, and procurement. This streamlined approach minimizes project risk and
                        maximizes efficiency, allowing us to support complex industrial projects with technical precision
                        and a robust supply chain.
                    </p>
                    <p style="font-size: 15.5px; line-height: 1.75; color: #444444; margin-bottom: 0;">
                        Committed to Saudi Vision 2030, EIRECON drives industrial localization and economic growth through
                        the highest QHSE standards and advanced automation. By investing in local talent and sustainable
                        engineering, we actively contribute to the Kingdom's transformation into a global industrial
                        powerhouse.
                    </p>
                </div>
                <div class="col-lg-6 thumb-box">
                    <div class="thumb">
                        <img src="assets/img/ab2222.jpg" alt="Eirecon Energy About Us"
                            style="border-radius: 12px; width: 100%; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape-bg">
            <img src="assets/img/shape.png" alt="Shape">
        </div>
        <!-- End Shape -->
    </div>
    <!-- End Our About -->

    <!-- Start Work With Us 
                                ============================================= -->
    <!-- <div class="work-with-us-area home-work-with-us bg-gray">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <h2 style="margin: 0; font-size: clamp(22px, 3vw, 36px); font-weight: 800; color: #0D1B2E;">Aligned with
                        Saudi Vision 2030</h2>
                    <a href="{{ url('/contact') }}" class="btn angle btn-theme effect btn-md"
                        style="margin: 0; white-space: nowrap;">Get a Quote</a>
                </div>
            </div>
        </div> -->
    <!-- End Work With Us -->

    <!-- Start Certificates Area
                                ============================================= -->
    <section class="about-certificates" aria-labelledby="certificates-title">
        <div class="container">
            <div class="about-certificates-heading">
                <span class="about-certificates-eyebrow">Our Accreditations</span>
                <h2 id="certificates-title">Certified Standards.<br><span>Proven Commitment.</span></h2>
                <p>
                    Our certifications reflect the standards of quality, safety, and responsible delivery that guide every
                    Eirecon Energy project.
                </p>
            </div>

            <div class="about-certificates-grid" aria-label="Eirecon Energy certificate gallery">
                <a class="about-certificate-card" href="assets/img/Certificate_1.png" aria-label="View certificate 1 of 3">
                    <img src="assets/img/Certificate_1.png" alt="Eirecon Energy certificate of registration 1"
                        loading="lazy">
                </a>
                <a class="about-certificate-card" href="assets/img/Certificate_2.png" aria-label="View certificate 2 of 3">
                    <img src="assets/img/Certificate_2.png" alt="Eirecon Energy certificate of registration 2"
                        loading="lazy">
                </a>
                <a class="about-certificate-card" href="assets/img/Certificate_3.png" aria-label="View certificate 3 of 3">
                    <img src="assets/img/Certificate_3.png" alt="Eirecon Energy certificate of registration 3"
                        loading="lazy">
                </a>
            </div>
        </div>
    </section>
    <!-- End Certificates Area -->



    <!-- Start Partners Area
                                ============================================= -->
    <!-- @php
            $partners = [
                ['name' => 'Eirecon Energy Partner 01', 'logo' => 'assets/img/clients/1.png'],
                ['name' => 'Eirecon Energy Partner 02', 'logo' => 'assets/img/clients/2.png'],
                ['name' => 'Eirecon Energy Partner 03', 'logo' => 'assets/img/clients/3.png'],
                ['name' => 'Eirecon Energy Partner 04', 'logo' => 'assets/img/clients/4.png'],
                ['name' => 'Eirecon Energy Partner 05', 'logo' => 'assets/img/clients/5.png'],

                // Duplicate placeholders ? replace these logo paths with the final partner assets later.
                ['name' => 'Eirecon Energy Partner 06', 'logo' => 'assets/img/clients/1.png'],
                ['name' => 'Eirecon Energy Partner 07', 'logo' => 'assets/img/clients/2.png'],
                ['name' => 'Eirecon Energy Partner 08', 'logo' => 'assets/img/clients/3.png'],
                ['name' => 'Eirecon Energy Partner 09', 'logo' => 'assets/img/clients/4.png'],
            ];
        @endphp

        <x-partner-section :partners="$partners" /> -->
    <!-- End Partners Area -->



    <!-- Start Footer 
                                ============================================= -->

@endsection