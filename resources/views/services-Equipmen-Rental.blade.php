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
        style="background-image: url(assets/img/services/4.png);">
        <div class="container">
            <div class="service-hero-shell">
                <div class="service-hero-content">
                    <div class="service-hero-eyebrow">Fleet / Logistics / Site Support</div>
                    <h1 class="service-hero-title">
                        <span>Equipment Rental</span>
                        <strong>&amp; Services</strong>
                    </h1>
                    <!-- <p class="service-hero-description">Reliable heavy equipment, certified operators, maintenance, and logistics support configured around demanding industrial and construction schedules.</p> -->
                    <div class="service-hero-actions">
                        <!-- <a class="service-hero-button" href="#service-capabilities">
                                <span>Explore Capabilities</span>
                                <i class="fas fa-arrow-down" aria-hidden="true"></i>
                            </a> -->
                        <div class="service-hero-tags" aria-label="Service capabilities">
                            <span class="service-hero-tag">Heavy Fleet</span>
                            <span class="service-hero-tag">Lifting</span>
                            <span class="service-hero-tag">24/7 Support</span>
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
                    <div class="service-badge">Equipment Rental and Services</div>
                    <div class="service-meta-text">EQUIPMENT RENTAL MANAGEMENT</div>


                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>EQUIPMENT RENTAL MANAGEMENT
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT REQUIREMENT ANALYSIS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FLEET PLANNING AND ALLOCATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RENTAL CONTRACT PREPARATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT SCHEDULING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MOBILIZATION AND DEMOBILIZATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COST ESTIMATION AND BILLING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT TRACKING AND MONITORING
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CLIENT COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RENTAL DOCUMENTATION MANAGEMENT </li>


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
                    <div class="service-badge">Equipment Rental and Services</div>
                    <div class="service-meta-text">HEAVY EQUIPMENT RENTAL</div>

                    <h4 class="service-sub-title"><i class="fas fa-bolt"></i> EARTHMOVING EQUIPMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Excavator rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Backhoe loader rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Bulldozer rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Motor grader rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Wheel loader rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Skid steer loader rental </li>

                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> LIFTING EQUIPMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Mobile crane rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Crawler crane rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tower crane rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Forklift rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Manlift / boom lift rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Telehandler rental </li>

                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> TRANSPORTATION EQUIPMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Trailer rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Low-bed trailer rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Dump truck rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Water tanker rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Fuel tanker rental </li>


                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> CONSTRUCTION EQUIPMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Concrete pump rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Batching plant rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Asphalt paver rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Compactor rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Generator rental </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Air compressor rental </li>


                    </ul>


                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> INDUSTRIAL EQUIPMENT RENTAL</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WELDING MACHINE RENTAL </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HYDROJETTING MACHINE RENTAL </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> POWER TOOLS RENTAL </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCAFFOLDING RENTAL </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DEWATERING PUMP RENTAL </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LIGHTING TOWER RENTAL </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> NITROGEN UNIT RENTAL </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PRESSURE TESTING EQUIPMENT RENTAL
                        </li>


                    </ul>



                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> OIL & GAS / SHUTDOWN SUPPORT
                        EQUIPMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CRANE SUPPORT FOR SHUTDOWNS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TEMPORARY POWER SUPPLY </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> AIR COMPRESSOR SYSTEMS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HYDROTESTING PUMPS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FLUSHING AND CLEANING EQUIPMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VACUUM TRUCKS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MANPOWER TRANSPORTATION EQUIPMENT
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
                    <div class="service-badge">Equipment Rental and Services</div>
                    <div class="service-meta-text">EQUIPMENT RENTAL MANAGEMENT</div>


                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>EQUIPMENT OPERATION SERVICES
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CERTIFIED OPERATOR DEPLOYMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CRANE OPERATION SERVICES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EXCAVATOR OPERATION SERVICES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FORKLIFT OPERATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HEAVY VEHICLE DRIVING SERVICES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> 24/7 OPERATIONAL SUPPORT </li>



                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> EQUIPMENT MAINTENANCE </h4>
                    <ul class="service-list row">
                        <h4 class="service-sub-title"><i class="fas fa-microchip"></i>PREVENTIVE MAINTENANCE</h4>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Routine inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Lubrication </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Filter replacement </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Battery maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tire inspection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Fluid level checks </li>


                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> EQUIPMENT MAINTENANCE </h4>
                    <ul class="service-list row">
                        <h4 class="service-sub-title"><i class="fas fa-microchip"></i>CORRECTIVE MAINTENANCE</h4>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Breakdown repair </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Hydraulic repair </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Engine overhaul </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical troubleshooting </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Welding and fabrication repair </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Spare parts replacement</li>
                    </ul>


                    <ul class="service-list row">
                        <h4 class="service-sub-title"><i class="fas fa-microchip"></i> INSPECTION & CERTIFICATION</h4>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> THIRD-PARTY INSPECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LOAD TESTING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT CERTIFICATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CALIBRATION OF LIFTING EQUIPMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SAFETY INSPECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FITNESS CERTIFICATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PREVENTIVE MAINTENANCE RECORDS </li>


                    </ul>
                </div>
            </div>

            <!-- Row 4: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">Equipment Rental and Services</div>
                    <div class="service-meta-text">EQUIPMENT RENTAL MANAGEMENT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>LOGISTICS & TRANSPORTATION
                        SUPPORT</h4>

                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT TRANSPORTATION PLANNING
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ROUTE SURVEY </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HEAVY HAUL TRANSPORTATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ESCORT VEHICLE COORDINATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CUSTOMS CLEARANCE SUPPORT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SITE DELIVERY COORDINATION</li>


                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> HSE </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT SAFETY INSPECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> OPERATOR SAFETY TRAINING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PERMIT-TO-WORK COMPLIANCE </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DAILY TOOLBOX TALKS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LIFTING PLAN PREPARATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RISK ASSESSMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EMERGENCY RESPONSE PLANNING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PPE COMPLIANCE </li>


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
                    <div class="service-badge">Equipment Rental and Services</div>
                    <div class="service-meta-text">EQUIPMENT RENTAL MANAGEMENT</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>QA/QC </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT PERFORMANCE VERIFICATION
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INSPECTION DOCUMENTATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MAINTENANCE RECORDS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CALIBRATION CERTIFICATES</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SERVICE REPORTS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CLIENT INSPECTION COORDINATION</li>


                    </ul>











                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> COMMON CONSTRUCTION EQUIPMENT </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EXCAVATORS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DOZERS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LOADERS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CRANES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FORKLIFTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MANLIFTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> GENERATORS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> COMPRESSORS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TRAILERS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TRUCKS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WELDING MACHINES</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PUMPS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCAFFOLDING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BOOM LIFTS </li>


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