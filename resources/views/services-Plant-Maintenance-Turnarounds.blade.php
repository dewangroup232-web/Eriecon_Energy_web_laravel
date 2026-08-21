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
             * ─────────────────────────────────────────────────────────────────
             * Source image size : 800 × 600 px  (4 : 3 ratio)
             * Export / supply   : 1600 × 1200 px at 2× for retina / HiDPI
             * Format            : JPG  |  quality ≥ 80 %
             * Focal point       : keep key subject in the centre 60 % of frame
             *
             * Desktop behaviour :
             *   • height grows to match the adjacent content column (no crop).
             *   • min-height: 400px prevents collapse when content is short.
             *     (At col-lg-6 ≈ 570 px wide, 4:3 natural height ≈ 427 px.)
             *   • Sections with heavy content (e.g. two sub-sections) will make
             *     the image stretch taller — object-fit:cover keeps it sharp.
             *
             * Mobile behaviour  :
             *   • Columns stack → image reverts to natural 4:3 crop
             *     via aspect-ratio: 4 / 3 (no min-height override needed).
             * ─────────────────────────────────────────────────────────────────
             */
        .service-image-container {
            min-height: 400px;
            /* 800×600 baseline; grows with content   */
            height: 100%;
            /* stretch to fill content-column height   */
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08) !important;
            transition: all 0.4s ease;
        }

        .service-image-container img {
            /* Absolute fill + object-fit keeps the image sharp at any height */
            position: absolute;
            inset: 0;
            /* top:0; right:0; bottom:0; left:0        */
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

            /* Mobile: columns stack — restore 800×600 (4:3) natural crop */
            .service-image-container {
                height: auto;
                min-height: unset;
                aspect-ratio: 4 / 3;
                /* 800 ÷ 600 = 4:3                  */
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
        style="background-image: url(assets/img/services/7.png);">
        <div class="container">
            <div class="service-hero-shell">
                <div class="service-hero-content">
                    <div class="service-hero-eyebrow">Reliability / Shutdown / Startup</div>
                    <h1 class="service-hero-title">
                        <span>Plant Maintenance</span>
                        <strong>&amp; Turnarounds</strong>
                    </h1>
                    <!-- <p class="service-hero-description">Planned maintenance, shutdown execution, inspection, and startup support that protect plant reliability while controlling schedule and operational risk.</p> -->
                    <div class="service-hero-actions">
                        <!-- <a class="service-hero-button" href="#service-capabilities">
                                <span>Explore Capabilities</span>
                                <i class="fas fa-arrow-down" aria-hidden="true"></i>
                            </a> -->
                        <div class="service-hero-tags" aria-label="Service capabilities">
                            <span class="service-hero-tag">Maintenance</span>
                            <span class="service-hero-tag">Turnarounds</span>
                            <span class="service-hero-tag">Asset Integrity</span>
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
                    <div class="service-badge">Plant Maintenance & Turnarounds</div>
                    <div class="service-meta-text">ROUTINE PLANT MAINTENANCE</div>


                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>MECHANICAL MAINTENANCE</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Preventive maintenance of rotating
                            equipment </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pump maintenance and alignment</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Compressor maintenance</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Turbine inspection and overhaul </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Valve maintenance and replacement
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Heat exchanger cleaning and
                            maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Boiler maintenance </li>

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Piping inspection and repair </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tank maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Mechanical seal replacement </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Bearing replacement </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Lubrication activities </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Vibration analysis </li>

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
                    <div class="service-badge">Plant Maintenance & Turnarounds</div>
                    <div class="service-meta-text">ROUTINE PLANT MAINTENANCE</div>


                    <h4 class="service-sub-title"><i class="fas fa-bolt"></i> ELECTRICAL MAINTENANCE</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transformer inspection and testing
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Switchgear maintenance</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Motor maintenance and rewinding</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Motor maintenance and rewinding</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Battery and UPS maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable inspection and megger testing
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Relay calibration and testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Earthing system inspection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Lighting system maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical panel servicing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Generator maintenance</li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> INSTRUMENTATION & CONTROL MAINTENANCE
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Calibration of instruments </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Control valve servicing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DCS/PLC troubleshooting</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Loop checking </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transmitter testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Analyzer maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Fire & gas system testing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument air system maintenance
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCADA system maintenance </li>
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
                    <div class="service-badge">Plant Maintenance & Turnarounds</div>
                    <div class="service-meta-text">ROUTINE PLANT MAINTENANCE</div>


                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>CIVIL & STRUCTURAL MAINTENANCE
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Structural inspection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Concrete repair works</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Painting and corrosion protection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Road and drainage maintenance</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Roofing repair</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Building maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Fireproofing repair n</li>

                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> PREDICTIVE & PREVENTIVE MAINTENANCE </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Condition Monitoring</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Thermography Inspection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Oil Analysis</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Ultrasonic Testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Vibration Monitoring </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RELIABILITY ANALYSIS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT HEALTH ASSESSMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PREVENTIVE MAINTENANCE SCHEDULING
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ASSET INTEGRITY MANAGEMENT </li>
                    </ul>
                </div>
            </div>

            <!-- Row 4: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">Plant Maintenance & Turnarounds</div>
                    <div class="service-meta-text">TURNAROUND / SHUTDOWN</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>PRE-TURNAROUND PLANNING</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Scope identification </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Resource planning </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Contractor mobilization</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HSE planning </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cost estimation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Work package preparation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Material procurement </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Risk assessment </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Schedule preparation </li>

                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> SHUTDOWN </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Plant isolation and decontamination
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Equipment shutdown</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Lockout/Tagout (LOTO)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Gas testing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Vessel opening and cleaning </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Scaffolding erection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Manpower deployment </li>

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
                    <div class="service-badge">Plant Maintenance & Turnarounds</div>
                    <div class="service-meta-text">TURNAROUND / SHUTDOWN</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>MECHANICAL TURNAROUND WORKS
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Static equipment inspection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Column and vessel internals
                            replacement </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Heat exchanger bundle pulling </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pump overhaul</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Compressor overhaul</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Valve replacement </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pipe spool replacement</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Welding and fabrication</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Hydrotesting</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Thickness measurement </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> NDT inspection</li>

                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> ELECTRICAL TURNAROUND WORKS </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transformer shutdown maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Switchgear inspection</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical testing and commissioning
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Motor overhauling </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Protection relay testing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable replacement </li>

                    </ul>
                </div>
            </div>

            <!-- Row 6: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">Plant Maintenance & Turnarounds</div>
                    <div class="service-meta-text">TURNAROUND / SHUTDOWN</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>INSTRUMENTATION TURNAROUND
                        WORKS</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument calibration </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Shutdown valve testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Control loop testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DCS logic verification </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Analyzer servicing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Emergency shutdown system (ESD)
                            testing </li>
                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> INSPECTION & QA/QC </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RBI INSPECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> API INSPECTION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WELDING INSPECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> NDT (RT, UT, PT, MT)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PRESSURE TESTING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PMI TESTING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CORROSION MONITORING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QA/QC DOCUMENTATION </li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/6.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Row 7: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/8.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">Plant Maintenance & Turnarounds</div>
                    <div class="service-meta-text">SAFETY MAINTENANCE</div>



                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>SAFETY DURING MAINTENANCE &
                        TURNAROUND</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i>PERMIT TO WORK (PTW) </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CONFINED SPACE ENTRY </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HOT WORK MONITORING</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WORK-AT-HEIGHT SAFETY</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FIRE WATCH </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HSE AUDITS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TOOLBOX TALKS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PPE COMPLIANCE </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EMERGENCY RESPONSE DRILLS </li>

                    </ul>

                </div>
            </div>

            <!-- Row 8: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">Plant Maintenance & Turnarounds</div>
                    <div class="service-meta-text">POST-TURNAROUND</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>POST-TURNAROUND & STARTUP
                        ACTIVITIES</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CONDITION MONITORING</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> THERMOGRAPHY INSPECTION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> OIL ANALYSIS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VIBRATION MONITORING </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RELIABILITY ANALYSIS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EQUIPMENT HEALTH ASSESSMENT</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PREVENTIVE MAINTENANCE SCHEDULING</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ASSET INTEGRITY MANAGEMENT</li>
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