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
        style="background-image: url(assets/img/services/2.png);">
        <div class="container">
            <div class="service-hero-shell">
                <div class="service-hero-content">
                    <div class="service-hero-eyebrow">Engineering / Procurement / Construction</div>
                    <h1 class="service-hero-title">
                        <span>EPC Projects</span>
                        <!-- <strong>Project Delivery</strong> -->
                    </h1>
                    <!-- <p class="service-hero-description">End-to-end civil, mechanical, electrical, and instrumentation solutions—from engineering and procurement through construction and commissioning.</p> -->
                    <div class="service-hero-actions">
                        <!-- <a class="service-hero-button" href="#service-capabilities">
                                        <span>Explore Capabilities</span>
                                        <i class="fas fa-arrow-down" aria-hidden="true"></i>
                                    </a> -->
                        <div class="service-hero-tags" aria-label="Service capabilities">
                            <span class="service-hero-tag">Civil</span>
                            <span class="service-hero-tag">Mechanical</span>
                            <span class="service-hero-tag">E&amp;I</span>
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
                        <img src="assets/img/services/6.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">EPC PROJECTS</div>
                    <div class="service-meta-text">CIVIL, MECHANICAL, ELECTRICAL, INSTRUMENTATION</div>


                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i> CIVIL & STRUCTURAL</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Site survey and soil investigation
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Topographical studies</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Foundation design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Structural steel design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RCC design and detailing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Drainage and road layout</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Underground utilities design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> 3D modeling and drafting</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Quantity estimation</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> MECHANICAL</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Equipment sizing and selection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Piping design and stress analysis</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HVAC design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Rotating and static equipment
                            engineering</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Material specification</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pipeline routing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Fabrication drawings</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Welding procedures</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Mechanical calculations</li>
                    </ul>
                </div>
            </div>

            <!-- Row 2: Data Block 2 (Text Left, Image Right on desktop, Image top on mobile) -->
            <div class="row align-items-stretch service-details-row alt-bg">
                <div class="col-lg-6 order-lg-2">
                    <div class="service-image-container">
                        <img src="assets/img/services/2.png" alt="EPC Projects - Electrical & Instrumentation"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="service-badge">EPC PROJECTS</div>
                    <div class="service-meta-text">CIVIL, MECHANICAL, ELECTRICAL, INSTRUMENTATION</div>

                    <h4 class="service-sub-title"><i class="fas fa-bolt"></i> ELECTRICAL</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Load calculations</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Single line diagrams (SLD)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transformer and switchgear sizing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable sizing and routing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Lighting system design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Earthing and lightning protection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical layouts</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Power distribution studies</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> INSTRUMENTATION & CONTROL</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument index preparation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Control philosophy</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PLC/DCS engineering</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable schedules</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Loop diagrams</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cause & effect charts</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument sizing and selection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Automation system integration</li>
                    </ul>
                </div>
            </div>

            <!-- Row 3: Procurement and Civil Construction -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/3.png" alt="EPC procurement and civil construction" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">EPC PROJECTS</div>
                    <div class="service-meta-text">PROCUREMENT &amp; CONSTRUCTION</div>

                    <h4 class="service-sub-title"><i class="fas fa-boxes"></i> PROCUREMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Vendor identification and qualification
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Preparation of RFQ/RFP</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Technical bid evaluation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Commercial bid evaluation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Purchase order placement</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Expediting and follow-up</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Inspection and quality checks</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Logistics and transportation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Material receiving and warehousing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Vendor document review</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-hard-hat"></i> CONSTRUCTION - CIVIL &amp; STRUCTURAL</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Excavation and grading</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Concrete works</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Foundation construction</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Structural steel erection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Buildings and infrastructure works</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Road and drainage construction</li>
                    </ul>
                </div>
            </div>

            <!-- Row 4: Discipline Construction -->
            <div class="row align-items-stretch service-details-row alt-bg">
                <div class="col-lg-6 order-lg-2">
                    <div class="service-image-container">
                        <img src="assets/img/services/4.png" alt="EPC discipline construction" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="service-badge">EPC PROJECTS</div>
                    <div class="service-meta-text">CONSTRUCTION</div>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> MECHANICAL CONSTRUCTION</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Equipment erection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Piping fabrication &amp; installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tank erection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Welding and NDT</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Hydro testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Insulation and painting</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-bolt"></i> ELECTRICAL CONSTRUCTION</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable laying and termination</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Switchgear installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transformer installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Lighting installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Earthing works</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Testing and commissioning</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> INSTRUMENTATION CONSTRUCTION</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tubing and impulse lines</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Junction box installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Marshalling panels</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Loop checking</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DCS/PLC commissioning</li>
                    </ul>
                </div>
            </div>

            <!-- Row 5: Project Management -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/5.png" alt="EPC project management" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">EPC PROJECTS</div>
                    <div class="service-meta-text">PROJECT MANAGEMENT</div>

                    <h4 class="service-sub-title"><i class="fas fa-project-diagram"></i> PROJECT MANAGEMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Project planning and scheduling</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cost estimation and budgeting</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Risk management</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Contract management</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Resource planning</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Progress monitoring</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HSE management</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Quality assurance and quality control
                            (QA/QC)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Client coordination</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Reporting and documentation</li>
                    </ul>
                </div>
            </div>

            <!-- Row 6: Commissioning and Startup -->
            <div class="row align-items-stretch service-details-row alt-bg">
                <div class="col-lg-6 order-lg-2">
                    <div class="service-image-container">
                        <img src="assets/img/services/6.png" alt="EPC commissioning and startup" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="service-badge">EPC PROJECTS</div>
                    <div class="service-meta-text">COMMISSIONING &amp; STARTUP</div>

                    <h4 class="service-sub-title"><i class="fas fa-play-circle"></i> COMMISSIONING &amp; STARTUP</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pre-commissioning checks</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Mechanical completion</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> System testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Energization</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Functional testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Performance testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Trial run</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Handover documentation</li>
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