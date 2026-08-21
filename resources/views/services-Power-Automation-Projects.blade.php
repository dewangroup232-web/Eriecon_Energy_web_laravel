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
        style="background-image: url(assets/img/services/8.png);">
        <div class="container">
            <div class="service-hero-shell">
                <div class="service-hero-content">
                    <div class="service-hero-eyebrow">Power / Control / Digitalization</div>
                    <h1 class="service-hero-title">
                        <span>Power &amp; Automation</span>
                        <strong>Projects &amp; Services</strong>
                    </h1>
                    <!-- <p class="service-hero-description">Engineering and integration for electrical power, automation, control, smart systems, and industrial digitalization across the complete project lifecycle.</p> -->
                    <div class="service-hero-actions">
                        <!-- <a class="service-hero-button" href="#service-capabilities">
                                <span>Explore Capabilities</span>
                                <i class="fas fa-arrow-down" aria-hidden="true"></i>
                            </a> -->
                        <div class="service-hero-tags" aria-label="Service capabilities">
                            <span class="service-hero-tag">Power Systems</span>
                            <span class="service-hero-tag">Automation</span>
                            <span class="service-hero-tag">Digital</span>
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
                    <div class="service-badge">Power & Automation Projects & Services</div>
                    <div class="service-meta-text">POWER SYSTEM ENGINEERING</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>ELECTRICAL DESIGN & ENGINEERING
                    </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Load flow calculations </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Relay coordination studies </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Single Line Diagram (SLD) preparation
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transformer sizing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Short circuit analysis</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Power system studies </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable sizing calculations</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Switchgear selection </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Earthing and lightning protection
                            design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical layout preparation</li>


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
                    <div class="service-badge">Power & Automation Projects & Services</div>
                    <div class="service-meta-text">POWER SYSTEM ENGINEERING</div>


                    <h4 class="service-sub-title"><i class="fas fa-bolt"></i> HIGH VOLTAGE (HV) & MEDIUM VOLTAGE (MV)
                        SYSTEMS</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Substation engineering </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transformer installation design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Busbar design</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HV/MV cable routing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> GIS/AIS system engineering</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Protection system engineering</li>

                    </ul>


                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> LOW VOLTAGE (LV) SYSTEMS</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MCC panel design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PCC panel engineering </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Lighting system design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> UPS system design </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DG synchronization systems </li>

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
                    <div class="service-badge">Power & Automation Projects & Services</div>
                    <div class="service-meta-text">AUTOMATION & CONTROL SYSTEM</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>PLC/DCS/SCADA ENGINEERING </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PLC programming </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCADA development </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Logic diagram preparation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Functional Design Specification (FDS)
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cause & effect matrix preparation
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DCS configuration </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> HMI development</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Alarm management</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Interlock logic design</li>



                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> INDUSTRIAL AUTOMATION</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Process automation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Conveyor automation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Motion control systems </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Servo system integration </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Machine automation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Robotics integration</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VFD programming</li>


                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> INSTRUMENTATION ENGINEERING </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument selection and sizing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Loop diagram development</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Field instrument installation design
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument index preparation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Hook-up drawing preparation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Control valve sizing</li>

                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> PROCUREMENT</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VENDOR EVALUATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TECHNICAL BID ANALYSIS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROCUREMENT OF ELECTRICAL EQUIPMENT
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PROCUREMENT OF AUTOMATION SYSTEMS
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FACTORY ACCEPTANCE TEST (FAT)
                            COORDINATION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATERIAL INSPECTION AND EXPEDITING
                        </li>


                    </ul>
                </div>
            </div>

            <!-- Row 4: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">Power & Automation Projects & Services</div>
                    <div class="service-meta-text">MANUFACTURING & PANEL ASSEMBLY </div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>ELECTRICAL PANEL MANUFACTURING
                    </h4>

                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PCC panel assembly</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Control panel assembly</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VFD panel integration</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MCC panel fabrication </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PLC panel assembly</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Relay panel manufacturing</li>


                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> WIRING & INTEGRATION </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Internal panel wiring</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Terminal dressing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Busbar installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PLC I/O wiring </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Communication network integration</li>


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
                    <div class="service-badge">Power & Automation Projects & Services</div>
                    <div class="service-meta-text">INSTALLATION</div>


                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>ELECTRICAL INSTALLATION </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable tray installation </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transformer installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Earthing installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable laying and termination </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Switchgear installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Lighting installation </li>


                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-cogs"></i> AUTOMATION INSTALLATION </h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PLC/DCS cabinet installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Junction box installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Network cable installation</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Field wiring and termination</li>


                    </ul>

                </div>
            </div>

            <!-- Row 6: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">Power & Automation Projects & Services</div>
                    <div class="service-meta-text">TESTING & COMMISSIONING</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>ELECTRICAL TESTING</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Insulation resistance testing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> High voltage testing </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Relay testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transformer testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Cable continuity testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Functional testing</li>


                    </ul>

                    <h4 class="service-sub-title"><i class="fas fa-microchip"></i> AUTOMATION COMMISSIONING</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PLC logic testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCADA testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Loop checking</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Interlock testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SAT (Site Acceptance Test)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Communication testing</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Performance testing</li>
                    </ul>

                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/1.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Row 6-3: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/2.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-badge">Power & Automation Projects & Services</div>
                    <div class="service-meta-text">OPERATION & MAINTENANCE SERVICES</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>ELECTRICAL MAINTENANCE</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Preventive maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Transformer maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Motor maintenance </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Breakdown maintenance</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Switchgear servicing </li>


                    </ul>


                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>AUTOMATION MAINTENANCE</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PLC troubleshooting </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Software backup and restoration </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Control loop optimization </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SCADA maintenance</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Instrument calibration </li>

                    </ul>

                </div>


            </div>

            <!-- Row 6-4: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">POWER & AUTOMATION PROJECTS & SERVICES</div>
                    <div class="service-meta-text">Power & Automation Projects & Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>SMART SYSTEMS & DIGITALIZATION
                    </h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SMART GRID INTEGRATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ENERGY MANAGEMENT SYSTEMS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> IOT INTEGRATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INDUSTRIAL CYBERSECURITY </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> REMOTE MONITORING SYSTEMS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> DATA ACQUISITION SYSTEMS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PREDICTIVE MAINTENANCE SYSTEMS </li>


                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/4.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Row 6-5: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/5.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-badge">POWER & AUTOMATION PROJECTS & SERVICES</div>
                    <div class="service-meta-text">Power & Automation Projects & Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>RENEWABLE ENERGY & ENERGY
                        EFFICIENCY</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SOLAR POWER SYSTEM INTEGRATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> BATTERY ENERGY STORAGE SYSTEMS (BESS)
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EV CHARGING SYSTEMS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ENERGY AUDITS</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> POWER FACTOR CORRECTION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ENERGY OPTIMIZATION</li>
                    </ul>

                </div>

            </div>


            <!-- Row 6-6: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">POWER & AUTOMATION PROJECTS & SERVICES</div>
                    <div class="service-meta-text">Power & Automation Projects & Services</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>QA/QC</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FAT AND SAT DOCUMENTATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> CALIBRATION CERTIFICATES </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> INSPECTION AND TEST PLANS (ITP) </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> QA DOCUMENTATION </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ELECTRICAL INSPECTION REPORTS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> AUTOMATION VALIDATION RECORDS </li>


                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/6.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Row 6-7: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/7.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-badge">Power & Automation Projects & Services</div>
                    <div class="service-meta-text">POWER & AUTOMATION PROJECTS & SERVICES</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>HSE</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ELECTRICAL SAFETY COMPLIANCE </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> LOCKOUT/TAGOUT (LOTO) </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ARC FLASH SAFETY</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PERMIT-TO-WORK SYSTEM</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> RISK ASSESSMENT </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> EMERGENCY SHUTDOWN PROCEDURES</li>


                    </ul>


                </div>


            </div>


            <!-- Row 6-8: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row alt-bg">

                <div class="col-lg-6">
                    <div class="service-badge">Power & Automation Projects & Services</div>
                    <div class="service-meta-text">SMART SYSTEMS & DIGITALIZATION</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>COMMON EQUIPMENT & SYSTEMS</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TRANSFORMERS, SWITCHGEAR, UPS </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> PLC, DCS, SCADA, HMI </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> VFD, SERVO DRIVES</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> TRANSMITTERS, CONTROL VALVES</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> FIBER OPTIC, ETHERNET SWITCHES</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SOLAR INVERTERS, BESS</li>


                    </ul>


                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/9.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Row 6-9: Data Block 1 (Image Left, Text Right) -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/10.png" alt="EPC Projects - Civil & Mechanical" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-badge">Power & Automation Projects & Services</div>
                    <div class="service-meta-text">SMART SYSTEMS & DIGITALIZATION</div>

                    <h4 class="service-sub-title"><i class="fas fa-drafting-compass"></i>COMMON SOFTWARE</h4>
                    <ul class="service-list row">

                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> ETAP, EPLAN, AUTOCAD ELECTRICAL </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> SIEMENS TIA PORTAL, RSLOGIX </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> WINCC, WONDERWARE, IGNITION</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> YOKOGAWA, EMERSON DELTAV, HONEYWELL
                        </li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> MATLAB, SIMULINK</li>


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