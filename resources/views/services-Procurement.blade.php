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
        style="background-image: url(assets/img/services/9.png);">
        <div class="container">
            <div class="service-hero-shell">
                <div class="service-hero-content">
                    <div class="service-hero-eyebrow">Sourcing / Expediting / Delivery</div>
                    <h1 class="service-hero-title">
                        <span>Strategic Procurement</span>
                        <strong>&amp; Supply Chain</strong>
                    </h1>
                    <p class="service-hero-description">Disciplined sourcing, vendor management, inspection, expediting, and logistics that keep critical industrial materials compliant and on schedule.</p>
                    <div class="service-hero-actions">
                        <a class="service-hero-button" href="#service-capabilities">
                            <span>Explore Capabilities</span>
                            <i class="fas fa-arrow-down" aria-hidden="true"></i>
                        </a>
                        <div class="service-hero-tags" aria-label="Service capabilities">
                            <span class="service-hero-tag">Sourcing</span>
                            <span class="service-hero-tag">Vendor Control</span>
                            <span class="service-hero-tag">Logistics</span>
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
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">PROCUREMENT PLANNING</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>PROCUREMENT PLANNING</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL REQUIREMENT PLANNING (MRP)
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROCUREMENT STRATEGY DEVELOPMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BUDGET ALLOCATION AND COST ESTIMATION
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VENDOR SOURCING STRATEGY </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LONG-LEAD ITEM IDENTIFICATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROCUREMENT SCHEDULE PREPARATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RISK ASSESSMENT IN SUPPLY CHAIN </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MAKE-OR-BUY ANALYSIS </li>

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
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">VENDOR MANAGEMENT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>VENDOR MANAGEMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VENDOR IDENTIFICATION AND
                            PREQUALIFICATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VENDOR DATABASE MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VENDOR EVALUATION AND GRADING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FACTORY AUDITS AND ASSESSMENTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VENDOR PERFORMANCE MONITORING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> APPROVED VENDOR LIST (AVL) MANAGEMENT
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VENDOR DEVELOPMENT PROGRAMS </li>


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
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">TENDERING & BIDDING </div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>TENDERING & BIDDING </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PREPARATION OF RFQ (REQUEST FOR
                            QUOTATION) </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ISSUANCE OF RFP / RFQ DOCUMENTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TECHNICAL BID EVALUATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COMMERCIAL BID EVALUATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BID COMPARISON AND ANALYSIS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> NEGOTIATION WITH SUPPLIERS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PURCHASE RECOMMENDATION PREPARATION
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CONTRACT AWARD PROCESS </li>


                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i></h4>
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
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">PURCHASE ORDER (PO) MANAGEMENT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>PURCHASE ORDER (PO) MANAGEMENT
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PURCHASE ORDER PREPARATION AND
                            ISSUANCE </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PO AMENDMENT AND REVISION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CONTRACT NEGOTIATION AND FINALIZATION
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DELIVERY TERM (INCOTERMS) MANAGEMENT
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PAYMENT TERM MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PO TRACKING AND CONTROL </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ORDER CONFIRMATION FOLLOW-UP </li>



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
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">EXPEDITING & INSPECTION</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>EXPEDITING & INSPECTION</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PRODUCTION MONITORING AT VENDOR WORKS
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EXPEDITING SUPPLIER DELIVERIES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROGRESS REPORTING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FACTORY ACCEPTANCE TEST (FAT)
                            COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> THIRD-PARTY INSPECTION COORDINATION
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QUALITY INSPECTION AT MANUFACTURER
                            SITE </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SHIPMENT READINESS VERIFICATION </li>


                    </ul>
                </div>
            </div>

            <!-- Row 6: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">LOGISTICS & SUPPLY CHAIN</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>LOGISTICS & SUPPLY CHAIN</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TRANSPORTATION PLANNING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FREIGHT FORWARDING COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CUSTOMS CLEARANCE SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> IMPORT/EXPORT DOCUMENTATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WAREHOUSE COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL HANDLING AND STORAGE </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DELIVERY TRACKING AND SCHEDULING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SITE DELIVERY COORDINATION </li>


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
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">MATERIAL MANAGEMENT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>MATERIAL MANAGEMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL RECEIVING INSPECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> GRN (GOODS RECEIPT NOTE) PROCESSING
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INVENTORY CONTROL AND TRACKING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WAREHOUSE MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL ISSUE AND RETURN SYSTEM </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> STOCK RECONCILIATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PRESERVATION OF MATERIALS (COATING,
                            PACKAGING) </li>


                    </ul>
                </div>

            </div>


            <!-- Row 6-3: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">SUBCONTRACTING & SERVICE PROCUREMENT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>SUBCONTRACTING & SERVICE
                        PROCUREMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SUBCONTRACTOR IDENTIFICATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SERVICE CONTRACT PREPARATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MANPOWER SUBCONTRACTING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT RENTAL PROCUREMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CONSTRUCTION SERVICE AGREEMENTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MAINTENANCE SERVICE CONTRACTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SLA (SERVICE LEVEL AGREEMENT)
                            MANAGEMENT </li>


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
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">DOCUMENTATION</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>DOCUMENTATION</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROCUREMENT STATUS REPORTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL TRACKING REPORTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VENDOR DOCUMENTATION REVIEW</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TECHNICAL SUBMITTAL REVIEW </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COMPLIANCE DOCUMENTATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROCUREMENT AUDIT RECORDS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CLOSE-OUT DOCUMENTATION </li>


                    </ul>


                </div>


            </div>

            <!-- Row 6-5: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">COST CONTROL & FINANCIAL</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>COST CONTROL & FINANCIAL</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COST COMPARISON AND BENCHMARKING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BUDGET VS ACTUAL ANALYSIS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INVOICE VERIFICATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PAYMENT PROCESSING COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TAX AND DUTY CALCULATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COST-SAVING INITIATIVES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VARIATION ORDER HANDLING </li>


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
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">QUALITY ASSURANCE IN PROCUREMENT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>QUALITY ASSURANCE IN
                        PROCUREMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL SPECIFICATION COMPLIANCE
                            CHECK </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QUALITY CERTIFICATION VERIFICATION
                            (MTC, COA) </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INSPECTION AND TEST PLAN (ITP)
                            COMPLIANCE </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SUPPLIER QUALITY AUDITS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> NON-CONFORMANCE REPORTING (NCR) </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CORRECTIVE ACTION TRACKING </li>


                    </ul>


                </div>

            </div>

            <!-- Row 6-7: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">RISK MANAGEMENT </div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>RISK MANAGEMENT </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SUPPLY CHAIN RISK ANALYSIS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VENDOR FAILURE RISK MITIGATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LEAD TIME RISK MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PRICE FLUCTUATION MONITORING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> GEOPOLITICAL RISK ASSESSMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ALTERNATIVE SOURCING PLANNING </li>

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
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">DIGITAL PROCUREMENT </div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>DIGITAL PROCUREMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ERP SYSTEMS (SAP, ORACLE) </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> E-PROCUREMENT PLATFORMS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SUPPLIER PORTALS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> AUTOMATED PROCUREMENT WORKFLOWS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DIGITAL CONTRACT MANAGEMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROCUREMENT DASHBOARDS AND ANALYTICS
                        </li>


                    </ul>


                </div>


            </div>


            <!-- Row 6-9: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">PROCUREMENT SERVICES</div>
                    <div class="service-meta-text">COMMON MATERIALS & SERVICES PROCURED</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>COMMON MATERIALS & SERVICES
                        PROCURED</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i>CATEGORY -------------- ITEMS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Civil -------------- Cement, steel,
                            aggregates</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Mechanical -------------- Pumps,
                            valves, piping</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical --------------
                            Transformers, cables, switchgear</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrumentation --------------
                            Sensors, transmitters, PLCs</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Construction -------------- Equipment
                            rental, scaffolding</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Services -------------- Manpower,
                            fabrication, maintenance</li>


                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/10.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
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
