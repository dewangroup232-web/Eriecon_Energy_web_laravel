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
            <div class="row">
                <div class="col-lg-6 info-content">
                    <h2>
                        <strong>25</strong> <span>Years Work experience in construction</span>
                    </h2>
                    <p>
                        Committed to Saudi Vision 2030, EIRECON drives industrial localization
                        and economic growth through the highest QHSE standards and advanced automation. </p>
                    <blockquote>
                        <p>
                            To become the premier industrial partner in the region, recognized for setting the
                            benchmark in engineering excellence, safety, and reliability. </p>
                        <span>CEO OF <strong>Eirecon Energy</strong></span>
                    </blockquote>
                    <a href="#" class="btn btn-dark border btn-md" data-animation="animated slideInUp">Read More</a>
                </div>
                <div class="col-lg-6 thumb-box">
                    <div class="thumb">
                        <img src="assets/img/ab2222.jpg" alt="Thumb">
                        <div class="video bg-cover" style="background-image: url(assets/img/about/3.jpg);">
                            <a href="https://www.youtube.com" class="popup-youtube video-play-button">
                                <i class="ti-control-play"></i>
                            </a>
                        </div>
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
    <div class="work-with-us-area bg-gray default-padding">
        <div class="container">
            <div class="content-box">
                <div class="row align-center">
                    <div class="col-lg-5">
                        <div class="heading-info">
                            <h5>Work with Us</h5>
                            <h2> Eirecon Energy - Energy That Drives the World</h2>
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
                                    <h4>Delivered Project</h4>
                                    <div class="timer" data-to="56" data-speed="5000">56</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="fun-fact">
                                    <h4>Upcomming Project</h4>
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
    @php
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

    <x-partner-section :partners="$partners" />
    <!-- End Partners Area -->



    <!-- Start Footer 
                ============================================= -->

@endsection