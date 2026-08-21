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
        style="background-image: url(assets/img/services/10.png);">
        <div class="container">
            <div class="service-hero-shell">
                <div class="service-hero-content">
                    <div class="service-hero-eyebrow">People / Planning / Coordination</div>
                    <h1 class="service-hero-title">
                        <span>Integrated Project</span>
                        <strong>Support Services</strong>
                    </h1>
                    <p class="service-hero-description">Flexible engineering, manpower, QA/QC, HSE, logistics, and administrative support built to strengthen project teams at every delivery stage.</p>
                    <div class="service-hero-actions">
                        <a class="service-hero-button" href="#service-capabilities">
                            <span>Explore Capabilities</span>
                            <i class="fas fa-arrow-down" aria-hidden="true"></i>
                        </a>
                        <div class="service-hero-tags" aria-label="Service capabilities">
                            <span class="service-hero-tag">Manpower</span>
                            <span class="service-hero-tag">QA/QC</span>
                            <span class="service-hero-tag">Site Support</span>
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
                        <img src="assets/img/services/11.png" alt="EPC Projects - Civil & Mechanical"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">PROJECT MANAGEMENT SUPPORT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>PROJECT MANAGEMENT SUPPORT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROJECT COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PLANNING AND SCHEDULING SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROGRESS MONITORING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COST CONTROL SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BUDGET TRACKING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RESOURCE PLANNING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DOCUMENTATION MANAGEMENT</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RISK MANAGEMENT SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CONTRACT ADMINISTRATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CLIENT COORDINATION </li>


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
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">ENGINEERING SUPPORT SERVICES</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>CIVIL & STRUCTURAL SUPPORT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Drafting and detailing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> As-built drawing preparation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Technical documentation support </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Quantity take-off </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Design coordination</li>


                    </ul>


                </div>
            </div>

            <!-- Row 3: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/13.png" alt="EPC Projects - Civil & Mechanical"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">ENGINEERING SUPPORT SERVICES </div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>MECHANICAL SUPPORT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Equipment data management </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Technical submittal preparation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Piping isometric support </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Material tracking </li>

                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>ELECTRICAL & INSTRUMENTATION
                        SUPPORT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable schedule preparation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Testing documentation support </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Loop documentation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Panel documentation </li>

                    </ul>


                </div>
            </div>

            <!-- Row 4: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">PROCUREMENT & MATERIAL SUPPORT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>PROCUREMENT & MATERIAL SUPPORT
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VENDOR COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PURCHASE ORDER FOLLOW-UP </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL EXPEDITING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LOGISTICS COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WAREHOUSE SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INVENTORY MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL RECEIVING INSPECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SPARE PARTS TRACKING </li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/14.png" alt="EPC Projects - Civil & Mechanical"
                            class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- Row 5: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/15.png" alt="EPC Projects - Civil & Mechanical"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">CONSTRUCTION SUPPORT SERVICES</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>CONSTRUCTION SUPPORT SERVICES
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SITE SUPERVISION SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WORK PERMIT COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SITE ADMINISTRATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WORKFORCE COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DAILY PROGRESS REPORTING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CONSTRUCTION DOCUMENTATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SITE LOGISTICS MANAGEMENT </li>

                    </ul>
                </div>
            </div>

            <!-- Row 6: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">MANPOWER SUPPLY & WORKFORCE SUPPORT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>SKILLED WORKFORCE SUPPLY</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Welders </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electricians </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pipe fitters </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Riggers </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Fabricators </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument technicians </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Scaffolders </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Crane operators </li>


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
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">MANPOWER SUPPLY & WORKFORCE SUPPORT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>TECHNICAL & PROFESSIONAL STAFF
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Engineers </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QA/QC inspectors </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Planners </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Supervisors </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HSE officers </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Document controllers </li>

                    </ul>

                </div>

            </div>


            <!-- Row 6-3: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">Project Support Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>QA/QC SUPPORT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INSPECTION COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ITP DOCUMENTATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WELDING RECORD MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> NDT COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CALIBRATION TRACKING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL TRACEABILITY </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PUNCH LIST MANAGEMENT </li>


                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/3.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Row 6-4: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/4.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">Project Support Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>HSE SUPPORT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SAFETY SUPERVISION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PERMIT-TO-WORK ADMINISTRATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SAFETY TRAINING COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TOOLBOX TALK SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EMERGENCY RESPONSE SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SAFETY DOCUMENTATION MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INCIDENT REPORTING ASSISTANCE </li>


                    </ul>


                </div>

            </div>

            <!-- Row 6-5: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">SHUTDOWN & TURNAROUND SUPPORT SERVICES</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>SHUTDOWN & TURNAROUND SUPPORT
                        SERVICES</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TURNAROUND PLANNING SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RESOURCE MOBILIZATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TEMPORARY FACILITY SETUP </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL STAGING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ROUND-THE-CLOCK COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SHUTDOWN REPORTING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WORK PACK MANAGEMENT </li>


                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/5.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>


            <!-- Row 6-6: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/6.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">LOGISTICS & TRANSPORTATION SUPPORT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>LOGISTICS & TRANSPORTATION
                        SUPPORT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TRANSPORTATION COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT MOBILIZATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HEAVY HAUL COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DRIVER AND VEHICLE MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CUSTOMS CLEARANCE SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CAMP AND ACCOMMODATION LOGISTICS </li>


                    </ul>


                </div>

            </div>

            <!-- Row 6-7: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">IT & DIGITAL SUPPORT SERVICES</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>IT & DIGITAL SUPPORT SERVICES
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROJECT MANAGEMENT SOFTWARE SUPPORT
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DOCUMENT MANAGEMENT SYSTEMS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> NETWORK AND COMMUNICATION SUPPORT
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CCTV AND ACCESS CONTROL SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DATA MANAGEMENT AND REPORTING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BIM COORDINATION SUPPORT </li>


                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/7.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>


            <!-- Row 6-8: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/8.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">ADMINISTRATIVE & FACILITY SUPPORT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>ADMINISTRATIVE & FACILITY
                        SUPPORT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CAMP MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CATERING COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ACCOMMODATION MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> OFFICE ADMINISTRATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TIMEKEEPING AND PAYROLL SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SECURITY SERVICES COORDINATION </li>


                    </ul>


                </div>


            </div>


            <!-- Row 6-9: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">TESTING & COMMISSIONING SUPPORT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>TESTING & COMMISSIONING SUPPORT
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PRE-COMMISSIONING SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DOCUMENTATION SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PUNCH CLEARANCE TRACKING</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SYSTEM HANDOVER COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> OPERATIONAL READINESS SUPPORT </li>



                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/9.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Row 6-10: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/12.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">ASSET & MAINTENANCE SUPPORT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>ASSET & MAINTENANCE SUPPORT
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CMMS DATA MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PREVENTIVE MAINTENANCE SCHEDULING
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SPARE PARTS COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RELIABILITY SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT HISTORY MANAGEMENT </li>


                    </ul>


                </div>


            </div>


            <!-- Row 6-11: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROJECT SUPPORT SERVICES</div>
                    <div class="service-meta-text">COMMON SOFTWARE USED</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>FUNCTION / SOFTWARE </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Planning - Primavera P6, MS Project</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Documentation - Aconex, SharePoint</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Engineering - AutoCAD, Revit</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ERP - SAP, Oracle</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QA/QC - Procore, BIM 360</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Maintenance - Maximo, SAP PM</li>


                    </ul>



                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/14.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Manpower Profile: Management and Mechanical Craft -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/8.png" alt="Management team and mechanical craft manpower"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">MANPOWER</div>
                    <div class="service-meta-text">MANAGEMENT TEAM &amp; MECHANICAL CRAFT</div>

                    <h4 class="service-sub-title"><i class="fas fa-users-cog"></i> MANAGEMENT TEAM</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Operation Manager</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Project Manager</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Safety Manager</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QA/QC Manager</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Construction Manager</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Civil Engineers</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Mechanical Engineers</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical Engineers</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pipeline Engineers</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QA/QC Supervisor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QA/QC Engineers</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Safety Officers</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-tools"></i> MECHANICAL CRAFT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Mech. Supervisor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Piping Supervisor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QC Supervisor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QC-Inspector</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Safety Officer</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Foreman</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Welder</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pipe Fabricator</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pipe Fitter</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Welding Inspector</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Painting Inspector</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> NDT Co-ordinator</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WPR</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Surveyor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Document Controller</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Riggers</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Helpers</li>
                    </ul>
                </div>
            </div>

            <!-- Manpower Profile: Electrical, Instrument and Civil Craft -->
            <div class="row align-items-stretch service-details-row alt-bg">
                <div class="col-lg-6 order-lg-2">
                    <div class="service-image-container">
                        <img src="assets/img/services/9.png" alt="Electrical, instrument and civil craft manpower"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="service-badge">MANPOWER</div>
                    <div class="service-meta-text">ELECTRICAL &amp; INSTRUMENT CRAFT / CIVIL CRAFT</div>

                    <h4 class="service-sub-title"><i class="fas fa-bolt"></i> ELECTRICAL &amp; INSTRUMENT CRAFT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical Supervisor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Safety Officer</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical QC Supervisor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> E&amp;I Inspector</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument Supervisor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Inst. Foreman</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument Technician</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electricians</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Splicers</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Helpers</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-hard-hat"></i> CIVIL CRAFT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Civil Supervisor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QC Supervisor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QC-Inspector</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Safety Officer</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Foreman</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Mason</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Carpenter</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Finishing Carpenter</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Steel Fixer</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Painter</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Surveyor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Batching Inspector</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> NDT Co-ordinator</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WPR</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Document Controller</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Helpers</li>
                    </ul>
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
