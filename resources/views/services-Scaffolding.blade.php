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
        style="background-image: url(assets/img/services/13.png);">
        <div class="container">
            <div class="service-hero-shell">
                <div class="service-hero-content">
                    <div class="service-hero-eyebrow">Access / Safety / Execution</div>
                    <h1 class="service-hero-title">
                        <span>Scaffolding</span>
                        <!-- <strong>Access Solutions</strong> -->
                    </h1>
                    <!-- <p class="service-hero-description">Engineered access systems, material management, erection, inspection, and shutdown support for safe work at height across complex industrial sites.</p> -->
                    <div class="service-hero-actions">
                        <!-- <a class="service-hero-button" href="#service-capabilities">
                                <span>Explore Capabilities</span>
                                <i class="fas fa-arrow-down" aria-hidden="true"></i>
                            </a> -->
                        <div class="service-hero-tags" aria-label="Service capabilities">
                            <span class="service-hero-tag">Engineering</span>
                            <span class="service-hero-tag">Erection</span>
                            <span class="service-hero-tag">Inspection</span>
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
                    <div class="service-badge">Scaffolding</div>
                    <div class="service-meta-text">SCAFFOLDING PLANNING & ENGINEERING</div>


                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>SCAFFOLDING PLANNING &
                        ENGINEERING</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SITE SURVEY AND ASSESSMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ACCESS REQUIREMENT STUDY </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCAFFOLDING DESIGN AND CALCULATION
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LOAD ANALYSIS AND CAPACITY CALCULATION
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PREPARATION OF SCAFFOLD DRAWINGS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL PLANNING AND ESTIMATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RISK ASSESSMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> METHOD STATEMENT PREPARATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WORK PERMIT COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COMPLIANCE WITH SAFETY STANDARDS </li>

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
                    <div class="service-badge">Scaffolding</div>
                    <div class="service-meta-text">SCAFFOLDING MATERIAL MANAGEMENT </div>


                    <h4 class="service-sub-title"><i class="fas fa-bolt"></i> SCAFFOLDING MATERIAL MANAGEMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCAFFOLDING MATERIAL INSPECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL IDENTIFICATION AND TAGGING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> STORAGE AND PRESERVATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INVENTORY MANAGEMENT</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL ISSUANCE AND RETURN</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INSPECTION OF DAMAGED MATERIALS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HOUSEKEEPING OF SCAFFOLD YARD</li>

                    </ul>



                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> SCAFFOLDING ERECTION</h4>
                    <ul class="service-list row">
                        <h4 class="service-sub-title"><i class="fas fa-microchip"></i> BASIC ERECTION WORKS</h4>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Base plate installation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Sole board placement</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Standard and ledger erection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transom installation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Bracing installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Platform installation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Guardrail installation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Toe board fixing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Ladder access installation</li>

                    </ul>


                    <ul class="service-list row">
                        <h4 class="service-sub-title"><i class="fas fa-microchip"></i> INDUSTRIAL SCAFFOLDING</h4>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pipe rack scaffolding </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Vessel scaffolding</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Boiler scaffolding</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tank scaffolding </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Column scaffolding</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Confined space scaffolding </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Heat exchanger access scaffolding
                        </li>



                    </ul>

                    <ul class="service-list row">
                        <h4 class="service-sub-title"><i class="fas fa-microchip"></i> CONSTRUCTION SCAFFOLDING</h4>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Building façade scaffolding </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Masonry scaffolding</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Formwork support scaffolding </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Bridge scaffolding </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cantilever scaffolding</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Suspended scaffolding </li>


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
                    <div class="service-badge">Scaffolding</div>
                    <div class="service-meta-text">SPECIALIZED SCAFFOLDING </div>


                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>SPECIALIZED SCAFFOLDING </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SUSPENDED SCAFFOLD INSTALLATION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MOBILE TOWER SCAFFOLD ERECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HANGING SCAFFOLD ERECTION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BIRDCAGE SCAFFOLD ERECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> STAIR TOWER INSTALLATION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HEAVY-DUTY SUPPORT SCAFFOLDING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TEMPORARY ACCESS PLATFORMS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SHORING AND FALSEWORK SYSTEMS</li>


                    </ul>


                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> INSPECTION & SAFETY</h4>
                    <ul class="service-list row">
                        <h4 class="service-sub-title"><i class="fas fa-microchip"></i> SCAFFOLD INSPECTION</h4>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pre-use inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Load capacity verification </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tagging system verification </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Compliance inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Daily inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Stability inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Green tag / red tag system </li>


                    </ul>
                    <ul class="service-list row">
                        <h4 class="service-sub-title"><i class="fas fa-microchip"></i> SAFETY</h4>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Fall protection installation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Barricading and signage </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Permit to work compliance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Emergency rescue planning </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Safety harness inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Toolbox talks </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Work-at-height monitoring </li>


                    </ul>
                </div>
            </div>

            <!-- Row 4: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">Scaffolding</div>
                    <div class="service-meta-text"> SCAFFOLDING DURING TURNAROUND/SHUTDOWN </div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>SCAFFOLDING DURING
                        TURNAROUND/SHUTDOWN</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RAPID SCAFFOLD ERECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MULTI-LOCATION ACCESS SETUP </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EMERGENCY SCAFFOLD MODIFICATIONS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ROUND-THE-CLOCK SCAFFOLD SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COORDINATION WITH MAINTENANCE TEAMS
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DISMANTLING AFTER COMPLETION </li>

                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> SCAFFOLDING DISMANTLING</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CONTROLLED DISMANTLING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL LOWERING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> AREA CLEARANCE </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL SEGREGATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INSPECTION AFTER DISMANTLING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RETURN TO SCAFFOLD YARD </li>

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
                    <div class="service-badge">Scaffolding</div>
                    <div class="service-meta-text">QA/QC ACTIVITIES IN SCAFFOLDING </div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>QA/QC ACTIVITIES IN SCAFFOLDING
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL CERTIFICATION VERIFICATION
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DIMENSIONAL CHECKS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INSPECTION RECORDS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCAFFOLD CHECKLIST DOCUMENTATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COMPLIANCE AUDITS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SAFETY AUDIT REPORTS </li>


                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> COMMON SCAFFOLDING STANDARDS </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> OSHA </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BS EN 12811 </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CISRS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SAIA </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ANSI </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LOCAL HSE REGULATIONS</li>

                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> TYPES OF SCAFFOLDING COMMONLY USED </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TUBE & CLAMP SCAFFOLDING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SYSTEM SCAFFOLDING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CUPLOCK SCAFFOLDING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RINGLOCK SCAFFOLDING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SUSPENDED SCAFFOLDING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MOBILE SCAFFOLDING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CANTILEVER SCAFFOLDING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BIRDCAGE SCAFFOLDING </li>


                    </ul>
                </div>
            </div>

            <!-- Row 6: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">Scaffolding</div>
                    <div class="service-meta-text">COMMON TOOLS & EQUIPMENT USED</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>COMMON TOOLS & EQUIPMENT USED
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TUBES AND PIPES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CLAMPS AND COUPLERS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BASE PLATES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SOLE BOARDS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> STEEL PLANKS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ALUMINUM TOWERS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SAFETY HARNESSES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LIFELINES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCAFFOLD TAGS </li>

                    </ul>

                </div>
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/6.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
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