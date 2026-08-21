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
        style="background-image: url(assets/img/services/5.png);">
        <div class="container">
            <div class="service-hero-shell">
                <div class="service-hero-content">
                    <div class="service-hero-eyebrow">Planning / Engineering / Delivery</div>
                    <h1 class="service-hero-title">
                        <span>Infrastructure</span>
                        <!-- <strong>Projects &amp; Utilities</strong> -->
                    </h1>
                    <!-- <p class="service-hero-description">Integrated infrastructure delivery across civil works, utility networks, electrical systems, and intelligent control—from early planning to site completion.</p> -->
                    <div class="service-hero-actions">
                        <!-- <a class="service-hero-button" href="#service-capabilities">
                                <span>Explore Capabilities</span>
                                <i class="fas fa-arrow-down" aria-hidden="true"></i>
                            </a> -->
                        <div class="service-hero-tags" aria-label="Service capabilities">
                            <span class="service-hero-tag">Civil Works</span>
                            <span class="service-hero-tag">Utilities</span>
                            <span class="service-hero-tag">Smart Systems</span>
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
                    <div class="service-badge">Infrastructure Projects</div>
                    <div class="service-meta-text">PROJECT DEVELOPMENT & PLANNING</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>PROJECT DEVELOPMENT & PLANNING
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FEASIBILITY STUDIES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SITE SURVEYS AND INVESTIGATIONS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TOPOGRAPHICAL SURVEY </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> GEOTECHNICAL INVESTIGATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ENVIRONMENTAL IMPACT ASSESSMENT (EIA)
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TRAFFIC STUDIES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LAND ACQUISITION SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COST ESTIMATION AND BUDGETING </li>

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROJECT SCHEDULING AND PLANNING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RISK ASSESSMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> REGULATORY APPROVALS AND PERMITS </li>
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
                    <div class="service-badge">Infrastructure Projects</div>
                    <div class="service-meta-text">PROJECT DEVELOPMENT & PLANNING</div>




                    <h4 class="service-sub-title"><i class="fas fa-bolt"></i> CIVIL & STRUCTURAL DESIGN</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Master planning </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Bridge and flyover design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pavement design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tunnel design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Structural analysis and modeling</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Road and highway design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Drainage system design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Retaining wall design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Culvert design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Foundation design</li>
                    </ul>


                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> UTILITY & INFRASTRUCTURE DESIGN</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Water supply network design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Storm water drainage design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pipeline network design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Smart utility integration </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Sewerage system design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Irrigation system design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Underground utility coordination </li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> ELECTRICAL INFRASTRUCTURE DESIGN</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Power distribution systems </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Substation design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable routing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Street lighting design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical load calculations</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Earthing and lightning protection
                        </li>

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
                    <div class="service-badge">Infrastructure Projects</div>
                    <div class="service-meta-text">ENGINEERING & DESIGN</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>INSTRUMENTATION & ICT SYSTEMS
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCADA systems </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Traffic control systems</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CCTV systems </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Communication networks </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Fiber optic systems</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Smart city automation </li>

                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> PROCUREMENT </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VENDOR QUALIFICATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TENDERING AND BID EVALUATION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL PROCUREMENT</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT PROCUREMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LOGISTICS PLANNING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SUPPLIER COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INSPECTION AND EXPEDITING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CONTRACT MANAGEMENT </li>

                    </ul>
                </div>
            </div>

            <!-- Row 4: Core Construction -->
            <div class="row align-items-stretch service-details-row alt-bg">
                <div class="col-lg-6 order-lg-2">
                    <div class="service-image-container">
                        <img src="assets/img/services/14.png" alt="Infrastructure earthworks, roads and structures"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="service-badge">Infrastructure Projects</div>
                    <div class="service-meta-text">CONSTRUCTION</div>

                    <h4 class="service-sub-title"><i class="fas fa-mountain"></i> EARTHWORKS</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Excavation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Backfilling</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Grading and leveling</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Soil stabilization</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Compaction</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-road"></i> ROAD &amp; HIGHWAY WORKS</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Subgrade preparation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Asphalt paving</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Concrete paving</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Kerb stone installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Road marking</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Signage installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Guardrail installation</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-archway"></i> BRIDGE &amp; STRUCTURAL WORKS</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pile foundation works</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pier and abutment construction</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Girder erection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Segment launching</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Precast installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Structural steel erection</li>
                    </ul>
                </div>
            </div>

            <!-- Row 5: Utilities, Urban Works and MEP -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/15.png" alt="Infrastructure utilities, urban works and MEP"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">Infrastructure Projects</div>
                    <div class="service-meta-text">CONSTRUCTION</div>

                    <h4 class="service-sub-title"><i class="fas fa-water"></i> WATER &amp; UTILITY WORKS</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pipeline laying</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Sewer installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Manhole construction</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pump station installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Water treatment facilities</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Utility duct installation</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-city"></i> BUILDING &amp; URBAN INFRASTRUCTURE</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Buildings and stations</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Parking structures</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Landscaping works</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Urban beautification</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Sidewalk and pedestrian facilities</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-tools"></i> MECHANICAL, ELECTRICAL &amp; PLUMBING (MEP)
                    </h4>
                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> MECHANICAL</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HVAC installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pump installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Firefighting systems</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Plumbing systems</li>
                    </ul>
                    <h4 class="service-sub-title"><i class="fas fa-bolt"></i> ELECTRICAL</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable laying</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transformer installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Substation erection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Street lighting installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Power distribution</li>
                    </ul>
                </div>
            </div>

            <!-- Row 6: Instrumentation, ICT and Quality -->
            <div class="row align-items-stretch service-details-row alt-bg">
                <div class="col-lg-6 order-lg-2">
                    <div class="service-image-container">
                        <img src="assets/img/services/6.png" alt="Infrastructure instrumentation, ICT and quality assurance"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="service-badge">Infrastructure Projects</div>
                    <div class="service-meta-text">MECHANICAL, ELECTRICAL &amp; PLUMBING (MEP)</div>

                    <h4 class="service-sub-title"><i class="fas fa-network-wired"></i> INSTRUMENTATION &amp; ICT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCADA installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Traffic signal installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Fiber optic cable laying</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CCTV installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Smart monitoring systems</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-check-double"></i> QUALITY ASSURANCE &amp; QUALITY
                        CONTROL (QA/QC)</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Material inspection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Concrete testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Soil testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Asphalt testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Welding inspection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Survey verification</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Dimensional checks</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QA documentation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Third-party inspections</li>
                    </ul>
                </div>
            </div>

            <!-- Row 7: HSE and Commissioning -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/9.png" alt="Infrastructure HSE, testing and commissioning"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">Infrastructure Projects</div>
                    <div class="service-meta-text">DELIVERY ASSURANCE</div>

                    <h4 class="service-sub-title"><i class="fas fa-hard-hat"></i> HEALTH, SAFETY &amp; ENVIRONMENT (HSE)
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Safety planning</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Traffic management plans</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Work permit system</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Excavation safety</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Heavy equipment safety</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Environmental monitoring</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Waste management</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Emergency response planning</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-vial"></i> TESTING &amp; COMMISSIONING</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Road quality testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Utility pressure testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical energization</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> System integration testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Functional testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCADA commissioning</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Performance testing</li>
                    </ul>
                </div>
            </div>

            <!-- Row 8: Operations Support and Sectors -->
            <div class="row align-items-stretch service-details-row alt-bg">
                <div class="col-lg-6 order-lg-2">
                    <div class="service-image-container">
                        <img src="assets/img/services/10.png" alt="Infrastructure operation support and sectors"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="service-badge">Infrastructure Projects</div>
                    <div class="service-meta-text">LIFECYCLE SUPPORT</div>

                    <h4 class="service-sub-title"><i class="fas fa-tools"></i> OPERATION &amp; MAINTENANCE SUPPORT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Defect liability management</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Preventive maintenance planning</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Asset management</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Facility management</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Road maintenance</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Utility maintenance</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-globe"></i> COMMON INFRASTRUCTURE SECTORS</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Highways &amp; expressways</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Railways &amp; metro</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Airports</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Ports &amp; marine</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Smart cities</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Industrial infrastructure</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Water &amp; wastewater</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Power transmission &amp; distribution</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Urban development</li>
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