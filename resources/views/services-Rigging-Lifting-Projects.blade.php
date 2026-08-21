@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="assets/css/service-stack.css">
    <style>
        .service-details-row {
            background: #ffffff;
            border: 1px solid #eceff4;
            border-radius: 16px;
            padding: 60px 40px;
            margin-bottom: 50px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
        }

        .service-details-row:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border-color: #dbe1ec;
        }

        .service-details-row.alt-bg {
            background: #f8fafd;
            border-color: #e5eaf4;
        }

        .service-details-row.alt-bg:hover {
            border-color: #c9d5ed;
        }

        .service-details-row:last-child {
            margin-bottom: 0;
        }

        /*
             * IMAGE SPEC — service-image-container
             * Source image size : 800 × 600 px  (4 : 3 ratio)
             * Desktop: height grows to match adjacent content column (no crop).
             *          min-height: 400px prevents collapse when content is short.
             * Mobile:  Columns stack → image reverts to natural 4:3 crop.
             */
        .service-image-container {
            min-height: 400px;
            height: 100%;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08) !important;
            transition: all 0.4s ease;
        }

        .service-image-container img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .service-details-row:hover .service-image-container img {
            transform: scale(1.05);
        }

        .service-badge {
            display: inline-block;
            padding: 6px 16px;
            background: rgba(59, 122, 250, 0.1);
            color: var(--color-primary);
            border-radius: 30px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .service-main-title {
            font-size: 42px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 8px;
            color: #1a1a1a;
        }

        .service-meta-text {
            font-size: 16px;
            color: #777;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 35px;
            font-weight: 600;
            border-left: 3px solid var(--color-primary);
            padding-left: 12px;
        }

        .service-sub-title {
            font-size: 13px;
            font-weight: 700;
            margin-top: 30px;
            margin-bottom: 20px;
            color: #222;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-sub-title i {
            color: var(--color-primary);
            font-size: 18px;
        }

        .service-list {
            padding: 0;
            margin: 0;
        }

        .service-list li {
            font-size: 15px;
            color: #555;
            position: relative;
            padding-left: 26px;
            margin-bottom: 12px;
            list-style: none;
            line-height: 1.5;
            font-weight: 500;
        }

        .service-list li i {
            position: absolute;
            left: 0;
            top: 4px;
            color: var(--color-primary);
            font-size: 14px;
            transition: transform 0.3s ease;
        }

        .service-list li:hover i {
            transform: translateX(4px);
        }

        @media (max-width: 991px) {
            .service-details-row {
                margin-bottom: 40px;
                padding: 30px 20px;
            }

            .service-image-container {
                height: auto;
                min-height: unset;
                aspect-ratio: 4 / 3;
                margin-bottom: 30px;
            }

            .service-main-title {
                font-size: 28px;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Start Service Hero
        ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light service-editorial-hero service-hero-ready"
        style="background-image: url(assets/img/services/11.png);">
        <div class="container">
            <div class="service-hero-shell">
                <div class="service-hero-content">
                    <div class="service-hero-eyebrow">Engineering / Rigging / Heavy Lift</div>
                    <h1 class="service-hero-title">
                        <span>Rigging &amp; Lifting</span>
                        <strong>Projects &amp; Services</strong>
                    </h1>
                    <!-- <p class="service-hero-description">Engineered lift planning, certified rigging teams, crane operations, and heavy-load logistics delivered with strict control of safety and execution.</p> -->
                    <div class="service-hero-actions">
                        <!-- <a class="service-hero-button" href="#service-capabilities">
                                <span>Explore Capabilities</span>
                                <i class="fas fa-arrow-down" aria-hidden="true"></i>
                            </a> -->
                        <div class="service-hero-tags" aria-label="Service capabilities">
                            <span class="service-hero-tag">Lift Planning</span>
                            <span class="service-hero-tag">Heavy Rigging</span>
                            <span class="service-hero-tag">Crane Operations</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Hero -->

    <!-- Start Services Details 
        ============================================= -->
    <div class="services-details-area default-padding">
        <div class="container">

            <!-- Row 1: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/11.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">RIGGING & LIFTING PROJECTS & SERVICES</div>
                    <div class="service-meta-text">Rigging & Lifting Projects & Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>LIFTING ENGINEERING & PLANNING
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LIFTING REQUIREMENT ANALYSIS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PREPARATION OF LIFTING PLANS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HEAVY LIFT ENGINEERING STUDIES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LOAD CALCULATIONS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CENTER OF GRAVITY CALCULATIONS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CRANE SELECTION AND SIZING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> GROUND BEARING PRESSURE ANALYSIS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ROUTE AND ACCESS STUDY </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RISK ASSESSMENT AND HAZID </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> METHOD STATEMENT PREPARATION </li>


                    </ul>

                </div>
            </div>

            <!-- Row 2: Data Block 2 (Text Left, Image Right on desktop, Image top on mobile) -->
            <div class="row align-items-stretch service-details-row alt-bg">
                <div class="col-lg-6 order-lg-2">
                    <div class="service-image-container">
                        <img src="assets/img/services/12.png" alt="EPC Projects - Electrical & Instrumentation"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <div class="service-badge">RIGGING & LIFTING PROJECTS & SERVICES</div>
                    <div class="service-meta-text">RIGGING ACTIVITIES</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>BASIC RIGGING WORKS</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Slinging and unslinging </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Load balancing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Rigging gear inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Hooking and unhooking</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tag line handling </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Rigging hardware installation </li>



                    </ul>


                </div>
            </div>

            <!-- Row 3: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/13.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">RIGGING & LIFTING PROJECTS & SERVICES</div>
                    <div class="service-meta-text">RIGGING</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>HEAVY RIGGING</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Heavy equipment positioning </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tank erection support </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pipe rack lifting </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Machinery shifting </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Vessel upending </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Structural module handling </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Skid moving and positioning </li>


                    </ul>


                </div>
            </div>

            <!-- Row 4: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">RIGGING & LIFTING PROJECTS & SERVICES</div>
                    <div class="service-meta-text">CRANE & LIFTING OPERATIONS</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>MOBILE CRANE OPERATIONS</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Crane setup and outrigger positioning
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tandem lifting operations </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Night lifting operations </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Load lifting and placement </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Blind lifting operations </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> </li>


                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> SPECIALIZED LIFTING </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Crawler crane operations </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Gantry lifting systems </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Strand jack lifting </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SPMT operations (Self-Propelled
                            Modular Transporter) </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tower crane operations </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Hydraulic jack lifting </li>


                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/14.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- Row 5: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/15.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">RIGGING & LIFTING PROJECTS & SERVICES</div>
                    <div class="service-meta-text">Rigging & Lifting Projects & Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>TRANSPORTATION & LOAD-OUT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT LOADING AND UNLOADING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HEAVY HAUL TRANSPORTATION SUPPORT
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ROUTE SURVEY </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CARGO SECURING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SEA FASTENING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BARGE LOADING OPERATIONS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PORT HANDLING ACTIVITIES </li>


                    </ul>
                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> INSTALLATION </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MECHANICAL EQUIPMENT ERECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> STRUCTURAL STEEL ERECTION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TRANSFORMER INSTALLATION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HEAT EXCHANGER INSTALLATION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> REACTOR AND COLUMN INSTALLATION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TURBINE AND COMPRESSOR INSTALLATION
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MODULE INSTALLATION </li>


                    </ul>

                </div>
            </div>

            <!-- Row 6: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">RIGGING & LIFTING PROJECTS & SERVICES</div>
                    <div class="service-meta-text">Rigging & Lifting Projects & Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>SHUTDOWN & TURNAROUND LIFTING
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CRANE SUPPORT DURING SHUTDOWNS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EMERGENCY LIFTING SERVICES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT REPLACEMENT LIFTING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CONFINED AREA LIFTING</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> 24/7 LIFTING SUPPORT</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RAPID MOBILIZATION SUPPORT </li>


                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/1.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Row 6-2: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/2.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-badge">RIGGING & LIFTING PROJECTS & SERVICES</div>
                    <div class="service-meta-text">RIGGING EQUIPMENT INSPECTION & MAINTENANCE</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>RIGGING GEAR INSPECTION</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Sling inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Hook inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Spreader beam inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Shackle inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Wire rope inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Chain block inspection </li>


                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>CRANE MAINTENANCE</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Preventive maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Hydraulic system inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Certification renewal </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Load testing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Safety device testing </li>

                    </ul>

                </div>

            </div>


            <!-- Row 6-3: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">RIGGING & LIFTING PROJECTS & SERVICES</div>
                    <div class="service-meta-text">Rigging & Lifting Projects & Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>SAFETY & HSE</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TOOLBOX TALKS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LIFT PERMIT MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CRITICAL LIFT ASSESSMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EXCLUSION ZONE SETUP </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CRANE STABILITY CHECKS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WIND SPEED MONITORING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COMMUNICATION AND SIGNALING CONTROL
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EMERGENCY RESCUE PLANNING </li>



                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/4.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Row 6-4: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/5.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-badge">POWER & AUTOMATION PROJECTS & SERVICES</div>
                    <div class="service-meta-text">Power & Automation Projects & Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>QA/QC </h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LIFT PLAN APPROVAL </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT CERTIFICATION VERIFICATION
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> THIRD-PARTY INSPECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PRE-LIFT INSPECTION CHECKLISTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LOAD TEST DOCUMENTATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CRANE INSPECTION REPORTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RIGGING GEAR CERTIFICATION </li>


                    </ul>


                </div>


            </div>

            <!-- Row 6-5: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">POWER & AUTOMATION PROJECTS & SERVICES</div>
                    <div class="service-meta-text">Power & Automation Projects & Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>SPECIALIZED RIGGING & LIFTING
                        SERVICES</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> JACKING AND SKIDDING SYSTEMS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HEAVY MACHINERY RELOCATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MODULAR ASSEMBLY LIFTING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> OFFSHORE LIFTING OPERATIONS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PLANT RELOCATION SERVICES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INDUSTRIAL DISMANTLING SERVICES </li>


                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/6.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>


            <!-- Row 6-6: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/8.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-badge">POWER & AUTOMATION PROJECTS & SERVICES</div>
                    <div class="service-meta-text">Power & Automation Projects & Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>COMMON RIGGING & LIFTING
                        EQUIPMENT</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MOBILE, CRAWLER, TOWER CRANES, </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SLINGS, SHACKLES, HOOKS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CHAIN BLOCKS, LEVER HOISTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SPMT, TRAILERS, JACKS, </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> STRAND JACKS SPREADER BEAMS, </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LIFTING FRAMES </li>

                    </ul>


                </div>


            </div>

            <!-- Row 6-7: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">Power & Automation Projects & Services</div>
                    <div class="service-meta-text">POWER & AUTOMATION PROJECTS & SERVICES</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>COMMON STANDARDS &
                        CERTIFICATIONS</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> OSHA </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LOLER </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> API STANDARDS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ASME B30 </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BS STANDARDS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LEEA GUIDELINES</li>


                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/9.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Services Details -->

    <!-- Start Footer 
        ============================================= -->
@endsection

@push('scripts')
    <script src="assets/js/service-stack.js"></script>
@endpush