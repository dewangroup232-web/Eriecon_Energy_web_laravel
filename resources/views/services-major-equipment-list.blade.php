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
            box-shadow: 0 4px 20px rgba(0,0,0,0.02);
            transition: all 0.3s ease;
        }
        .service-details-row:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
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
        .service-image-container {
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08) !important;
            border-radius: 8px;
        }
        .service-image-container img {
            transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
            object-fit: cover;
            width: 100%;
            height: auto;
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
            transform: scale(1.2);
        }
        @media (max-width: 991px) {
            .service-details-row {
                margin-bottom: 40px;
                padding: 30px 20px;
            }
            .service-image-container {
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
        style="background-image: url(assets/img/services/6.png);">
        <div class="container">
            <div class="service-hero-shell">
                <div class="service-hero-content">
                    <div class="service-hero-eyebrow">Capability / Fleet / Readiness</div>
                    <h1 class="service-hero-title">
                        <span>Major Equipment</span>
                        <strong>Ready for Delivery</strong>
                    </h1>
                    <p class="service-hero-description">A versatile fleet of lifting, earthmoving, power, transportation, and specialized industrial equipment prepared for demanding project environments.</p>
                    <div class="service-hero-actions">
                        <a class="service-hero-button" href="#service-capabilities">
                            <span>Explore Capabilities</span>
                            <i class="fas fa-arrow-down" aria-hidden="true"></i>
                        </a>
                        <div class="service-hero-tags" aria-label="Service capabilities">
                            <span class="service-hero-tag">Cranes</span>
                            <span class="service-hero-tag">Heavy Equipment</span>
                            <span class="service-hero-tag">Industrial Tools</span>
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
            
            <!-- Row 1: Heavy Lifting -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/11.png" alt="Heavy Lifting & Cranes" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">MAJOR EQUIPMENT LIST</div>
                    <div class="service-meta-text">HEAVY LIFTING & CRANES</div>
                                                          
                    <h4 class="service-sub-title"><i class="fas fa-truck-loading"></i> LIFTING EQUIPMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Crawler Cranes (up to 300 Tons)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Mobile Cranes (25 to 200 Tons)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Forklifts (3 to 15 Tons)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Boom Trucks</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Overhead Cranes</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Manlifts and Scissor Lifts</li>
                    </ul>
                </div>
            </div>
            
            <!-- Row 2: Earthmoving -->
            <div class="row align-items-stretch service-details-row alt-bg">
                <div class="col-lg-6 order-lg-2">
                    <div class="service-image-container">
                        <img src="assets/img/services/12.png" alt="Earthmoving & Civil Equipment" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="service-badge">MAJOR EQUIPMENT LIST</div>
                    <div class="service-meta-text">EARTHMOVING & CIVIL</div>
                                                          
                    <h4 class="service-sub-title"><i class="fas fa-snowplow"></i> CIVIL EQUIPMENT</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Excavators (Wheel & Track)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Bulldozers and Graders</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Wheel Loaders & Backhoe Loaders</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Skid Steer Loaders (Bobcats)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Vibratory Rollers & Compactors</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Trenchers and Dumpers</li>
                    </ul>
                </div>
            </div>
            
            <!-- Row 3: Power & Welding -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/13.png" alt="Power & Welding Equipment" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">MAJOR EQUIPMENT LIST</div>
                    <div class="service-meta-text">POWER & WELDING</div>
                                                          
                    <h4 class="service-sub-title"><i class="fas fa-bolt"></i> GENERATION & WELDING</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Diesel Generators (50 KVA to 1000 KVA)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tower Lights & Portable Lighting</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Welding Machines (Diesel & Electric)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Air Compressors (100 to 800 CFM)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Power Distribution Boards</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Plasma Cutting Machines</li>
                    </ul>
                </div>
            </div>

            <!-- Row 4: Transportation -->
            <div class="row align-items-stretch service-details-row alt-bg">
                <div class="col-lg-6 order-lg-2">
                    <div class="service-image-container">
                        <img src="assets/img/services/1.png" alt="Transportation & Logistics" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="service-badge">MAJOR EQUIPMENT LIST</div>
                    <div class="service-meta-text">TRANSPORTATION</div>
                                                          
                    <h4 class="service-sub-title"><i class="fas fa-truck"></i> LOGISTICS & VEHICLES</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Flatbed Trailers (40ft / 60ft)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Lowbed Trailers for Heavy Machineries</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Water & Fuel Tankers</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Dump Trucks & Tippers</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Crew Cabs and Buses</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Utility Vehicles and Pickups</li>
                    </ul>
                </div>
            </div>

            <!-- Row 5: Mechanical & Piping -->
            <div class="row align-items-stretch service-details-row">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="assets/img/services/2.png" alt="Mechanical & Piping Tools" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-badge">MAJOR EQUIPMENT LIST</div>
                    <div class="service-meta-text">MECHANICAL & PIPING</div>
                                                          
                    <h4 class="service-sub-title"><i class="fas fa-tools"></i> SPECIALIZED TOOLS</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Pipe Bending & Threading Machines</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Hydro-testing Pumps & Equipment</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Torque Wrenches and Tensioning Tools</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Flange Facing Machines</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Dewatering Pumps</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Industrial Vacuum Systems</li>
                    </ul>
                </div>
            </div>

            <!-- Company Profile Equipment Register -->
            <div class="row align-items-stretch service-details-row alt-bg">
                <div class="col-lg-6 order-lg-2">
                    <div class="service-image-container">
                        <img src="assets/img/services/8.png" alt="Company profile major equipment register"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="service-badge">MAJOR EQUIPMENT LIST</div>
                    <div class="service-meta-text">COMPANY PROFILE REGISTER</div>

                    <h4 class="service-sub-title"><i class="fas fa-truck-monster"></i> MAJOR EQUIPMENT LIST</h4>
                    <ul class="service-list row">
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tower Crane</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Dozer</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Excavator</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Jack Hammer</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Grader</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Bobcat</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Boom Truck</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Dyna</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Side Boom Crane</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Electrical Generator</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Loader</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Air Compressor</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> JCB (Backhoe)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Asphalt Cutter</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Low-bed Trailers</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Tower Light</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Forklift</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Water Tanker</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Compactor (Plate, Roller 05, 10,
                            20 Ton, Drum etc.)</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Surveying Total Station</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Welding Crawler</li>
                        <li class="col-md-6"><i class="fas fa-chevron-right"></i> Dewatering Pumps</li>
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
