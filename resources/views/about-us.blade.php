@extends('layouts.app')

@section('title', 'About Us & Group Profile | Omega Group')
@section('meta_description', 'Learn about Omega Group: a visionary consortium of ten specialised operating companies delivering excellence in renewable energy, EPC, infrastructure, and international trade.')

@push('styles')
    <style>
        /* ============================================================== 
               # Omega Group About Us Custom Design System
            ================================================================= */
        :root {
            --om-navy-bg: #06101e;
            --om-navy-card: #09172b;
            --om-navy-hover: #0e223d;
            --om-cyan: #008ed6;
            --om-cyan-glow: rgba(0, 142, 214, 0.25);
            --om-green: #0b7b64;
            --om-green-glow: rgba(11, 123, 100, 0.25);
            --om-red: #cf2027;
            --om-blue: #2563eb;
        }

        /* Hero Banner */
        .omega-about-hero {
            position: relative;
            background-color: #06101e;
            background-image:
                linear-gradient(180deg, rgba(5, 13, 24, 0.82) 0%, rgba(9, 23, 43, 0.92) 65%, #06101e 100%),
                url("assets/img/ab2222.jpg");
            background-size: cover;
            background-position: center 25%;
            background-attachment: fixed;
            padding: 155px 0 100px;
            overflow: hidden;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .omega-about-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(0, 142, 214, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 142, 214, 0.05) 1px, transparent 1px);
            background-size: 54px 54px;
            pointer-events: none;
        }

        .omega-about-hero::after {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(0, 142, 214, 0.18) 0%, transparent 70%);
            pointer-events: none;
        }

        .omega-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 6px 16px;
            border-radius: 50px;
            background: rgba(0, 142, 214, 0.15);
            border: 1px solid rgba(0, 142, 214, 0.35);
            color: #38bdf8;
            font-size: 11.5px;
            font-weight: 700;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            margin-bottom: 22px;
        }

        .omega-hero-badge .hero-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #38bdf8;
            box-shadow: 0 0 10px #38bdf8;
        }

        .omega-about-hero h1 {
            font-family: var(--font-heading, "Lexend", "Poppins", sans-serif);
            font-size: 50px;
            font-weight: 800;
            letter-spacing: -0.5px;
            margin-bottom: 18px;
            color: #ffffff;
            line-height: 1.15;
        }

        .omega-about-hero h1 span {
            color: #008ed6;
        }

        .omega-about-hero p.lead-text {
            font-family: var(--font-body, "Source Sans 3", sans-serif);
            font-size: 18px;
            color: rgba(255, 255, 255, 0.85);
            max-width: 820px;
            line-height: 1.65;
            margin-bottom: 0;
        }

        /* Generic Section Headings */
        .omega-sec-header {
            max-width: 880px;
            margin-bottom: 44px;
        }

        .omega-eyebrow {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .omega-eyebrow .accent-bar {
            width: 28px;
            height: 4px;
            background: #008ed6;
            border-radius: 2px;
        }

        .omega-eyebrow span {
            font-size: 11.5px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #008ed6;
        }

        .omega-sec-header h2 {
            font-size: 38px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: -0.5px;
            margin-bottom: 12px;
            line-height: 1.25;
        }

        .omega-sec-header p {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.75);
            margin: 0;
            line-height: 1.6;
        }

        /* SECTION 1: WHO WE ARE */
        .omega-who-section {
            background: #061122;
            padding: 95px 0 90px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .omega-brand-presentation-card {
            background: #09172b;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 16px;
            padding: 38px 34px;
            box-shadow: 0 16px 45px rgba(0, 0, 0, 0.35);
            height: 100%;
        }

        .omega-brand-presentation-card .card-emblem {
            width: 48px;
            height: 48px;
            object-fit: contain;
            margin-bottom: 16px;
        }

        .omega-brand-presentation-card h3 {
            font-size: 26px;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 16px;
        }

        .omega-brand-presentation-card p {
            color: rgba(255, 255, 255, 0.78);
            font-size: 15px;
            line-height: 1.65;
            margin-bottom: 18px;
        }

        .omega-val-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 24px;
        }

        .omega-val-pill {
            font-size: 11.5px;
            font-weight: 700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            padding: 6px 14px;
            border-radius: 50px;
            background: rgba(0, 142, 214, 0.15);
            border: 1px solid rgba(0, 142, 214, 0.3);
            color: #38bdf8;
        }

        /* Who We Are: 4 Numbered Foundations */
        .omega-pillars-grid {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .omega-pillar-item {
            background: #09172b;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 22px 26px;
            display: flex;
            align-items: center;
            gap: 20px;
            transition: all 0.3s ease;
        }

        .omega-pillar-item:hover {
            background: #0d223f;
            border-color: rgba(0, 142, 214, 0.45);
            transform: translateX(6px);
        }

        .omega-pillar-item .p-num {
            font-size: 26px;
            font-weight: 800;
            letter-spacing: -0.5px;
            min-width: 50px;
        }

        .omega-pillar-item:nth-child(1) .p-num {
            color: #00a3ff;
        }

        .omega-pillar-item:nth-child(2) .p-num {
            color: #cf2027;
        }

        .omega-pillar-item:nth-child(3) .p-num {
            color: #00b894;
        }

        .omega-pillar-item:nth-child(4) .p-num {
            color: #3b82f6;
        }

        .omega-pillar-item .p-body h4 {
            font-size: 17.5px;
            font-weight: 700;
            color: #ffffff;
            margin: 0 0 6px 0;
            line-height: 1.35;
        }

        .omega-pillar-item .p-body p {
            font-size: 13.5px;
            color: rgba(255, 255, 255, 0.72);
            margin: 0;
            line-height: 1.5;
        }

        .omega-summary-alert {
            margin-top: 36px;
            background: rgba(207, 32, 39, 0.12);
            border: 1px solid rgba(207, 32, 39, 0.35);
            border-left: 4px solid #cf2027;
            padding: 16px 22px;
            border-radius: 8px;
            color: rgba(255, 255, 255, 0.88);
            font-size: 14.5px;
            line-height: 1.6;
        }

        /* SECTION 2: FROM THE VICE CHAIRMAN'S DESK */
        .omega-chairman-section {
            background: #08162b;
            padding: 95px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .chairman-quote-card {
            background: linear-gradient(135deg, rgba(11, 28, 52, 0.95) 0%, rgba(15, 36, 68, 0.95) 100%);
            border: 1px solid rgba(0, 142, 214, 0.35);
            border-left: 5px solid #008ed6;
            border-radius: 14px;
            padding: 36px 38px;
            color: #ffffff;
            margin-bottom: 30px;
            position: relative;
            box-shadow: 0 16px 45px rgba(0, 0, 0, 0.35), 0 0 25px rgba(0, 142, 214, 0.12);
            overflow: hidden;
        }

        .chairman-quote-card::before {
            content: "";
            position: absolute;
            top: -60px;
            right: -60px;
            width: 180px;
            height: 180px;
            background: radial-gradient(circle, rgba(0, 142, 214, 0.22) 0%, transparent 70%);
            pointer-events: none;
        }

        .chairman-quote-card .quote-icon {
            font-size: 26px;
            color: #008ed6;
            margin-bottom: 12px;
            display: inline-block;
            opacity: 0.9;
        }

        .chairman-quote-card p {
            font-family: var(--font-heading, "Lexend", "Poppins", sans-serif);
            font-size: 21px;
            font-weight: 600;
            line-height: 1.5;
            margin: 0 0 14px 0;
            color: #f1f5f9;
            letter-spacing: -0.2px;
            font-style: italic;
        }

        .chairman-quote-author {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 14px;
            padding-top: 14px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .chairman-quote-author .author-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #008ed6;
            box-shadow: 0 0 8px #008ed6;
        }

        .chairman-quote-author span {
            font-size: 13px;
            color: #94a3b8;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .chairman-letter-body {
            background: #0b1c34;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            padding: 42px 38px;
        }

        .chairman-letter-body p {
            color: rgba(255, 255, 255, 0.82);
            font-size: 15.5px;
            line-height: 1.75;
            margin-bottom: 22px;
        }

        .chairman-letter-body p:last-child {
            margin-bottom: 0;
        }

        .chairman-signature-block {
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
        }

        .chairman-signature-block .sig-name {
            font-size: 20px;
            font-weight: 800;
            color: #ffffff;
            margin: 0 0 2px 0;
        }

        .chairman-signature-block .sig-role {
            font-size: 13px;
            font-weight: 600;
            color: #008ed6;
            margin: 0;
            letter-spacing: 0.5px;
        }

        /* SECTION 3: MANAGEMENT TEAM */
        .omega-team-section {
            background: #061122;
            padding: 95px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .omega-team-card {
            border-radius: 14px;
            padding: 34px 28px;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .omega-team-card:hover {
            transform: translateY(-6px);
        }

        .omega-team-card.team-blue {
            background: #008ed6;
            box-shadow: 0 16px 40px rgba(0, 142, 214, 0.25);
        }

        .omega-team-card.team-green {
            background: #0b7b64;
            box-shadow: 0 16px 40px rgba(11, 123, 100, 0.25);
        }

        .team-avatar-box {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 22px;
        }

        .team-initials-badge {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(8px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 800;
            color: #ffffff;
            border: 2px solid rgba(255, 255, 255, 0.3);
            flex-shrink: 0;
        }

        .team-header-info h4 {
            font-size: 21px;
            font-weight: 800;
            color: #ffffff;
            margin: 0 0 4px 0;
            line-height: 1.25;
        }

        .team-header-info span {
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.85);
            display: block;
        }

        .omega-team-card p.team-bio {
            color: rgba(255, 255, 255, 0.92);
            font-size: 14.5px;
            line-height: 1.65;
            margin: 0;
            flex-grow: 1;
        }

        /* SECTION 4: TEN OPERATING ENTITIES */
        .omega-entities-section {
            background: #08162b;
            padding: 95px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .omega-entities-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .omega-entity-card {
            border-radius: 12px;
            padding: 24px 26px;
            transition: all 0.3s ease;
            position: relative;
        }

        .omega-entity-card:hover {
            transform: translateY(-4px);
        }

        .omega-entity-card.card-blue {
            background: #008ed6;
            box-shadow: 0 10px 30px rgba(0, 142, 214, 0.2);
        }

        .omega-entity-card.card-green {
            background: #0b7b64;
            box-shadow: 0 10px 30px rgba(11, 123, 100, 0.2);
        }

        .omega-entity-card .ent-num {
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1px;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 6px;
            text-transform: uppercase;
        }

        .omega-entity-card h4 {
            font-size: 19px;
            font-weight: 800;
            color: #ffffff;
            margin: 0 0 10px 0;
            line-height: 1.3;
        }

        .omega-entity-card p {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.88);
            line-height: 1.5;
            margin: 0;
        }

        .omega-entity-card p.jv-note {
            font-size: 12.5px;
            color: rgba(255, 255, 255, 0.75);
            font-style: italic;
            margin-top: 6px;
        }

        /* SECTION 5: OPERATING SCOPE */
        .omega-scope-section {
            background: #06101e;
            padding: 95px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .omega-stages-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .omega-stage-card {
            background: #0a182d;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            display: flex;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .omega-stage-card:hover {
            border-color: rgba(0, 142, 214, 0.4);
            transform: translateX(6px);
            background: #0e223f;
        }

        .stage-num-badge {
            width: 72px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: 800;
            color: #ffffff;
            flex-shrink: 0;
        }

        .stage-num-badge.stage-cyan {
            background: #00a3ff;
        }

        .stage-num-badge.stage-teal {
            background: #00c48c;
        }

        .stage-num-badge.stage-blue {
            background: #2563eb;
        }

        .stage-num-badge.stage-skyblue {
            background: #008ed6;
        }

        .stage-num-badge.stage-navy {
            background: #1e3a8a;
        }

        .stage-num-badge.stage-red {
            background: #cf2027;
        }

        .stage-content {
            padding: 20px 24px;
            flex: 1;
        }

        .stage-content h4 {
            font-size: 18px;
            font-weight: 700;
            color: #ffffff;
            margin: 0 0 6px 0;
        }

        .stage-content p {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.72);
            margin: 0;
            line-height: 1.5;
        }

        /* SECTION 6: STATUTORY CREDENTIALS */
        .omega-cred-section {
            background: #08162b;
            padding: 95px 0 100px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .omega-cred-table-wrapper {
            background: #0a182d;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 16px 45px rgba(0, 0, 0, 0.35);
            margin-bottom: 40px;
        }

        .omega-cred-table {
            width: 100%;
            border-collapse: collapse;
            margin: 0;
        }

        .omega-cred-table tr {
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .omega-cred-table tr:last-child {
            border-bottom: none;
        }

        .omega-cred-table td.col-label {
            width: 32%;
            background: #008ed6;
            color: #ffffff;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 18px 24px;
            vertical-align: middle;
            border-right: 1px solid rgba(255, 255, 255, 0.15);
        }

        .omega-cred-table td.col-val {
            background: #0b1c34;
            color: #ffffff;
            font-size: 15px;
            font-weight: 600;
            padding: 18px 24px;
            vertical-align: middle;
        }

        /* Certificate Visuals Grid */
        .cert-mockups-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .cert-mockup-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            color: #111111;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.4);
            border: 2px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }

        .cert-mockup-card:hover {
            transform: translateY(-5px);
        }

        .cert-card-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 18px;
            padding-bottom: 14px;
            border-bottom: 2px solid #e2e8f0;
        }

        .cert-card-header .emblem-seal {
            width: 42px;
            height: 42px;
            object-fit: contain;
        }

        .cert-card-header h5 {
            margin: 0;
            font-size: 15px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.25;
        }

        .cert-card-header span {
            font-size: 11px;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: block;
        }

        .cert-body-specs {
            font-size: 13px;
            line-height: 1.6;
            color: #334155;
        }

        .cert-spec-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
            padding-bottom: 6px;
            border-bottom: 1px dashed #cbd5e1;
        }

        .cert-spec-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .cert-spec-label {
            font-weight: 600;
            color: #64748b;
        }

        .cert-spec-value {
            font-weight: 700;
            color: #0f172a;
            text-align: right;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .omega-about-hero h1 {
                font-size: 38px;
            }

            .omega-entities-grid {
                grid-template-columns: 1fr;
            }

            .cert-mockups-grid {
                grid-template-columns: 1fr;
            }

            .omega-cred-table td.col-label {
                width: 38%;
            }
        }

        @media (max-width: 767px) {
            .omega-about-hero {
                padding: 110px 0 60px;
            }

            .omega-about-hero h1 {
                font-size: 32px;
            }

            .omega-sec-header h2 {
                font-size: 28px;
            }

            .omega-pillar-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .chairman-quote-card {
                padding: 26px 20px;
            }

            .chairman-quote-card p {
                font-size: 18px;
            }

            .chairman-letter-body {
                padding: 26px 20px;
            }

            .omega-cred-table td.col-label,
            .omega-cred-table td.col-val {
                display: block;
                width: 100%;
                border-right: none;
            }

            .omega-cred-table td.col-label {
                padding: 12px 18px;
            }

            .omega-cred-table td.col-val {
                padding: 14px 18px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            }
        }

        /* Mobile-Only Horizontal Scrollable Cards */
        @media (max-width: 767px) {
            /* 10 Specialised Entities Horizontal Touch Carousel on Mobile */
            .omega-entities-grid {
                display: flex !important;
                flex-wrap: nowrap !important;
                overflow-x: auto !important;
                overflow-y: hidden !important;
                -webkit-overflow-scrolling: touch !important;
                scroll-snap-type: x mandatory !important;
                padding: 10px 16px 24px !important;
                margin-left: -15px !important;
                margin-right: -15px !important;
                gap: 16px !important;
                grid-template-columns: none !important;
                scrollbar-width: none !important;
                touch-action: pan-x pan-y !important;
            }
            .omega-entities-grid::-webkit-scrollbar {
                display: none !important;
            }
            .omega-entities-grid .omega-entity-card,
            .omega-entities-grid .entity-card {
                flex: 0 0 290px !important;
                max-width: 290px !important;
                min-width: 290px !important;
                scroll-snap-align: start !important;
                box-sizing: border-box !important;
                white-space: normal !important;
                word-break: normal !important;
                overflow-wrap: break-word !important;
            }

            /* Management Team Cards */
            .omega-team-section .row {
                display: flex !important;
                flex-wrap: nowrap !important;
                overflow-x: auto !important;
                -webkit-overflow-scrolling: touch;
                scroll-snap-type: x mandatory;
                padding: 6px 14px 18px !important;
                margin-left: -15px !important;
                margin-right: -15px !important;
                gap: 16px !important;
                scrollbar-width: none;
            }
            .omega-team-section .row::-webkit-scrollbar {
                display: none;
            }
            .omega-team-section .row > [class*="col-"] {
                flex: 0 0 290px !important;
                max-width: 290px !important;
                min-width: 290px !important;
                scroll-snap-align: start;
            }
        }

    </style>
@endpush

@section('content')

    <!-- =====================================================
             # 0. ABOUT US HERO SECTION
        ====================================================== -->
    <div class="omega-about-hero" data-reveal="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <!-- <div class="omega-hero-badge">
                            <span class="hero-dot"></span>
                            <span>Consortium Profile &bull; Established 2003</span>
                        </div> -->
                    <h1>Who We Are &mdash; <span>Omega Group</span></h1>
                    <p class="lead-text">
                        A multidisciplinary consortium of ten specialised operating companies executing turnkey EPC,
                        renewable energy generation, telecom networks, mining, civil infrastructure, and cross-border trade.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- =====================================================
             # 1. WHO WE ARE (Image 1 - Panel 1)
        ====================================================== -->
    <section class="omega-who-section" id="who-we-are" data-reveal="fade-up">
        <div class="container">
            <div class="omega-sec-header">
                <div class="omega-eyebrow">
                    <span class="accent-bar"></span>
                    <span>Executive Overview</span>
                </div>
                <h2>A Diversified Holding Platform Built For Scale</h2>
                <p>Structured to execute parallel, high-complexity work packages across national programmes and
                    international markets.</p>
            </div>

            <div class="row g-4 align-items-stretch">
                <!-- Left: Brand Presentation Block -->
                <div class="col-lg-5">
                    <div class="omega-brand-presentation-card" data-reveal="slide-right">
                        <img src="{{ asset('assets/img/omega-emblem.png') }}" alt="Omega Group Emblem" class="card-emblem">
                        <h3>Omega Group</h3>
                        <p>
                            An established holding platform with roots since 2003, structured as a consortium of specialised
                            operating companies across EPC, renewable energy, infrastructure, commercial operations and
                            international delivery.
                        </p>
                        <p>
                            Teams are organised for multiple geographies and parallel work packages, allowing the group to
                            run large renewable programmes alongside civil, telecom and mining contracts.
                        </p>

                        <div class="omega-val-pills">
                            <span class="omega-val-pill">Execution Discipline</span>
                            <span class="omega-val-pill">Technical Resilience</span>
                            <span class="omega-val-pill">Responsible Delivery</span>
                        </div>
                    </div>
                </div>

                <!-- Right: 4 Strategic Pillars -->
                <div class="col-lg-7">
                    <div class="omega-pillars-grid" data-reveal="slide-left">
                        <div class="omega-pillar-item">
                            <div class="p-num">01</div>
                            <div class="p-body">
                                <h4>One of India&rsquo;s largest non-listed diversified EPC platforms</h4>
                                <p>Capability spanning design, engineering, procurement, construction, commissioning and
                                    long-term maintenance, delivered on a turnkey basis.</p>
                            </div>
                        </div>

                        <div class="omega-pillar-item">
                            <div class="p-num">02</div>
                            <div class="p-body">
                                <h4>Renewable energy as the primary growth engine</h4>
                                <p>Solar, hybrid and storage-linked projects form the core of the current order book and
                                    forward pipeline.</p>
                            </div>
                        </div>

                        <div class="omega-pillar-item">
                            <div class="p-num">03</div>
                            <div class="p-body">
                                <h4>Deep public-sector and blue chip credentials</h4>
                                <p>Work delivered for BSNL, TCIL, Power Grid, MSEDCL, BHEL, L&amp;T Construction, Simplex,
                                    Jindal Steel &amp; Power and leading telecom operators.</p>
                            </div>
                        </div>

                        <div class="omega-pillar-item">
                            <div class="p-num">04</div>
                            <div class="p-body">
                                <h4>India and international delivery</h4>
                                <p>Operations across multiple Indian states with hubs and entities serving the UAE, wider
                                    GCC and export markets.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Red Alert -->
                    <div class="omega-summary-alert">
                        <strong>Group Core Commitment:</strong> The group combines execution discipline, technical
                        resilience and responsible infrastructure delivery to create durable value for clients and the
                        communities around its projects.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
             # 2. FROM THE VICE CHAIRMAN'S DESK (Image 1 - Panel 2)
        ====================================================== -->
    <section class="omega-chairman-section" id="chairman-desk">
        <div class="container">
            <div class="omega-sec-header">
                <div class="omega-eyebrow">
                    <span class="accent-bar"></span>
                    <span>Leadership Message</span>
                </div>
                <h2>From the Vice Chairman&rsquo;s desk</h2>
                <p>Principles of execution integrity and long-term infrastructure partnership.</p>
            </div>

            <!-- Executive Quote Highlight Card -->
            <div class="chairman-quote-card" data-reveal="fade-up">
                <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                <p>&ldquo;Infrastructure is a promise you make to people who will use it long after you have left the site.
                    That is the standard we hold ourselves to.&rdquo;</p>
                <div class="chairman-quote-author">
                    <span class="author-dot"></span>
                    <span>Executive Commitment &bull; Mr. Shadab Ansari, Vice Chairman</span>
                </div>
            </div>

            <!-- Letter Content -->
            <div class="chairman-letter-body">
                <p>
                    Omega Group has grown from a single contracting business into a consortium of ten companies working
                    across renewable energy, infrastructure, telecom, mining and international trade. What has not changed
                    in that time is how we win work &mdash; by finishing what we start, to the specification we agreed, on
                    the date we committed to.
                </p>

                <p>
                    Our clients have been demanding ones. BSNL and TCIL held us to national programme timelines in hill
                    terrain. BHEL and Simplex expected us to work safely inside a live 2 &times; 660 MW power project.
                    Jindal Steel &amp; Power trusted us with three lakh tonnes of coal and with moving their finished steel
                    across the country. Each of those contracts was completed, and each opened the next one.
                </p>

                <p>
                    Renewable energy is now where the group is putting its weight. Under PM-KUSUM we are delivering 200 MW
                    in Rajasthan and, under the Prime Minister Surya Kiran Yojana, residential rooftop solarisation across
                    Odisha, with storage-linked capacity following in Sindhudurg and Jodhpur. This is not a change of
                    direction so much as the same discipline applied to the sector that will define India&rsquo;s next two
                    decades.
                </p>

                <p>
                    To our clients, lenders and partners &mdash; thank you for the confidence. To our engineers and site
                    teams &mdash; the reputation in these pages is yours. We intend to keep earning it.
                </p>

                <div class="chairman-signature-block">
                    <div>
                        <h4 class="sig-name">Mr. Shadab Ansari</h4>
                        <p class="sig-role">Vice Chairman &bull; Omega Group</p>
                    </div>
                    <div>
                        <span
                            style="font-family: 'Georgia', serif; font-style: italic; font-size: 22px; color: #38bdf8;">Shadab
                            Ansari</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
             # 3. MANAGEMENT TEAM (Image 1 - Panel 3)
        ====================================================== -->
    <section class="omega-team-section" id="management-team">
        <div class="container">
            <div class="omega-sec-header">
                <div class="omega-eyebrow">
                    <span class="accent-bar"></span>
                    <span>Executive Governance</span>
                </div>
                <h2>Omega Group management team</h2>
                <p>The group is directed by a small executive team accountable for strategy, delivery and governance across
                    every operating company.</p>
            </div>

            <div class="row g-4">
                <!-- Leader 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="omega-team-card team-blue">
                        <div class="team-avatar-box">
                            <div class="team-initials-badge">SA</div>
                            <div class="team-header-info">
                                <h4>Mr. Shadab Ansari</h4>
                                <span>Vice Chairman</span>
                            </div>
                        </div>
                        <p class="team-bio">
                            Sets group strategy and leads business development, client and institutional relationships
                            across the renewable energy, infrastructure and international verticals, and chairs the
                            group&rsquo;s investment and major contract decisions.
                        </p>
                    </div>
                </div>

                <!-- Leader 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="omega-team-card team-green">
                        <div class="team-avatar-box">
                            <div class="team-initials-badge">AA</div>
                            <div class="team-header-info">
                                <h4>Mr. Afroz Akhtar</h4>
                                <span>Director</span>
                            </div>
                        </div>
                        <p class="team-bio">
                            Twenty years of experience as a contractor across government and non-government sectors. Leads
                            project delivery and site execution across the group&rsquo;s contracting businesses, with
                            responsibility for execution planning, resourcing and site performance.
                        </p>
                    </div>
                </div>

                <!-- Leader 3 -->
                <div class="col-lg-4 col-md-12">
                    <div class="omega-team-card team-blue">
                        <div class="team-avatar-box">
                            <div class="team-initials-badge">DM</div>
                            <div class="team-header-info">
                                <h4>Mr. Dinesh Kumar Mishra</h4>
                                <span>Director</span>
                            </div>
                        </div>
                        <p class="team-bio">
                            Fifteen years of experience applying nanotechnology in road construction. Leads material
                            innovation, technical specification and quality control for the group&rsquo;s road and highway
                            works.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
             # 4. TEN OPERATING ENTITIES (Image 2 - Panel 4)
        ====================================================== -->
    <section class="omega-entities-section" id="operating-entities" data-reveal="fade-up">
        <div class="container">
            <div class="omega-sec-header">
                <div class="omega-eyebrow">
                    <span class="accent-bar"></span>
                    <span>Consortium Architecture</span>
                </div>
                <h2>Ten specialised operating entities</h2>
                <p>Each company carries its own execution teams, client base and technical focus, while drawing on shared
                    procurement, engineering and financial capability across the group.</p>
            </div>

            <div class="omega-entities-grid">
                <!-- Entity 01 -->
                <div class="omega-entity-card card-blue">
                    <div class="ent-num">01 Operating Entity</div>
                    <h4>Path Found Biogas Pvt. Ltd.</h4>
                    <p>Solar energy, compressed biogas and clean-energy delivery.</p>
                    <p class="jv-note">In joint venture with A &amp; T Billionaire Pte. Ltd., Singapore</p>
                </div>

                <!-- Entity 02 -->
                <div class="omega-entity-card card-green">
                    <div class="ent-num">02 Operating Entity</div>
                    <h4>DS Buildwell Engineers Pvt. Ltd.</h4>
                    <p>Building construction and civil contracting.</p>
                </div>

                <!-- Entity 03 -->
                <div class="omega-entity-card card-blue">
                    <div class="ent-num">03 Operating Entity</div>
                    <h4>Kalka Green Energy Pvt. Ltd.</h4>
                    <p>Green power generation and renewable energy solutions.</p>
                </div>

                <!-- Entity 04 -->
                <div class="omega-entity-card card-green">
                    <div class="ent-num">04 Operating Entity</div>
                    <h4>Omega Infra Mining Co. LLP</h4>
                    <p>Mining services, coal handling and aggregates.</p>
                </div>

                <!-- Entity 05 -->
                <div class="omega-entity-card card-blue">
                    <div class="ent-num">05 Operating Entity</div>
                    <h4>Omega Infrastructure Commercial LLC, Dubai</h4>
                    <p>Oil &amp; gas, HDD and commercial trading.</p>
                </div>

                <!-- Entity 06 -->
                <div class="omega-entity-card card-green">
                    <div class="ent-num">06 Operating Entity</div>
                    <h4>Ashvi Capital LLC, Dubai</h4>
                    <p>Financial trading and investment.</p>
                </div>

                <!-- Entity 07 -->
                <div class="omega-entity-card card-blue">
                    <div class="ent-num">07 Operating Entity</div>
                    <h4>Banna Infratech LLP</h4>
                    <p>Public infrastructure projects.</p>
                </div>

                <!-- Entity 08 -->
                <div class="omega-entity-card card-green">
                    <div class="ent-num">08 Operating Entity</div>
                    <h4>Samaira Shadab Infrastructure LLP</h4>
                    <p>Urban and civic development.</p>
                </div>

                <!-- Entity 09 -->
                <div class="omega-entity-card card-blue">
                    <div class="ent-num">09 Operating Entity</div>
                    <h4>SB Enterprises</h4>
                    <p>Procurement and contracting.</p>
                </div>

                <!-- Entity 10 -->
                <div class="omega-entity-card card-green">
                    <div class="ent-num">10 Operating Entity</div>
                    <h4>Progressive Pharma Corporation</h4>
                    <p>Healthcare and pharmaceuticals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
             # 5. WHAT THE GROUP DELIVERS (Image 2 - Panel 5)
        ====================================================== -->
    <section class="omega-scope-section" id="operating-scope">
        <div class="container">
            <div class="omega-sec-header">
                <div class="omega-eyebrow">
                    <span class="accent-bar"></span>
                    <span>Operating Scope</span>
                </div>
                <h2>What the group delivers</h2>
                <p>A single platform covering the full project lifecycle &mdash; from development and engineering through
                    construction, commissioning, compliance and long-term maintenance.</p>
            </div>

            <div class="omega-stages-list">
                <!-- Stage 01 -->
                <div class="omega-stage-card">
                    <div class="stage-num-badge stage-cyan">01</div>
                    <div class="stage-content">
                        <h4>Development &amp; Engineering</h4>
                        <p>Project development, system design, detailed engineering, surveys, approvals and technical due
                            diligence.</p>
                    </div>
                </div>

                <!-- Stage 02 -->
                <div class="omega-stage-card">
                    <div class="stage-num-badge stage-teal">02</div>
                    <div class="stage-content">
                        <h4>Procurement &amp; Supply</h4>
                        <p>Equipment procurement, in-house supply through group trading entities, logistics and vendor
                            management.</p>
                    </div>
                </div>

                <!-- Stage 03 -->
                <div class="omega-stage-card">
                    <div class="stage-num-badge stage-blue">03</div>
                    <div class="stage-content">
                        <h4>Construction &amp; Civil Works</h4>
                        <p>Earthworks, foundations, superstructures, roads, trenching, ducting and finishing works.</p>
                    </div>
                </div>

                <!-- Stage 04 -->
                <div class="omega-stage-card">
                    <div class="stage-num-badge stage-skyblue">04</div>
                    <div class="stage-content">
                        <h4>Installation &amp; Commissioning</h4>
                        <p>Erection, installation, testing, commissioning and handover across solar, telecom and civil
                            packages.</p>
                    </div>
                </div>

                <!-- Stage 05 -->
                <div class="omega-stage-card">
                    <div class="stage-num-badge stage-navy">05</div>
                    <div class="stage-content">
                        <h4>Regulatory &amp; Compliance</h4>
                        <p>Statutory approvals, regulatory support, safety systems and documentation for public and private
                            clients.</p>
                    </div>
                </div>

                <!-- Stage 06 -->
                <div class="omega-stage-card">
                    <div class="stage-num-badge stage-red">06</div>
                    <div class="stage-content">
                        <h4>Operations &amp; Maintenance</h4>
                        <p>Long-term maintenance programmes protecting asset performance over the project life.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
             # 6. STATUTORY CREDENTIALS (Image 3)
        ====================================================== -->
    <section class="omega-cred-section" id="statutory-credentials">
        <div class="container">
            <div class="omega-sec-header">
                <div class="omega-eyebrow">
                    <span class="accent-bar"></span>
                    <span>Statutory Credentials</span>
                </div>
                <h2>Registrations on record</h2>
                <p>Statutory particulars for Path Found Biogas Private Limited, the group&rsquo;s clean-energy delivery
                    company. Registrations for the other group entities are issued with tender submissions.</p>
            </div>

            <!-- Credentials Table -->
            <div class="omega-cred-table-wrapper">
                <table class="omega-cred-table">
                    <tbody>
                        <tr>
                            <td class="col-label">Legal Name</td>
                            <td class="col-val">Path Found Biogas Private Limited</td>
                        </tr>
                        <tr>
                            <td class="col-label">Constitution</td>
                            <td class="col-val">Private Limited Company</td>
                        </tr>
                        <tr>
                            <td class="col-label">Date of Incorporation</td>
                            <td class="col-val">10 September 2025</td>
                        </tr>
                        <tr>
                            <td class="col-label">PAN</td>
                            <td class="col-val" style="letter-spacing: 1px; font-family: monospace; font-size: 16px;">
                                AAQCP1779A</td>
                        </tr>
                        <tr>
                            <td class="col-label">GSTIN</td>
                            <td class="col-val" style="letter-spacing: 1px; font-family: monospace; font-size: 16px;">
                                07AAQCP1779A1Z9</td>
                        </tr>
                        <tr>
                            <td class="col-label">GST Registration</td>
                            <td class="col-val">Regular &bull; Form GST REG-06, Issued 24 April 2026</td>
                        </tr>
                        <tr>
                            <td class="col-label">Principal Place of Business</td>
                            <td class="col-val">Third Floor, 79-80, DPT-322, DLF Prime, Okhla Industrial Estate Phase 1, New
                                Delhi &ndash; 110020</td>
                        </tr>
                        <tr>
                            <td class="col-label">Directors on Record</td>
                            <td class="col-val">Mr. Shadab Ansari</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Official Certificate Cards Matching Slide 5 Mockups -->
            <div class="cert-mockups-grid">
                <!-- GST Certificate Card -->
                <div class="cert-mockup-card">
                    <div class="cert-card-header">
                        <div
                            style="width: 44px; height: 44px; border-radius: 50%; background: #f1f5f9; display: flex; align-items: center; justify-content: center; font-size: 20px; color: #0b7b64;">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div>
                            <h5>Government of India &bull; GST Registration</h5>
                            <span>Form GST REG-06 &bull; Government of National Capital Territory of Delhi</span>
                        </div>
                    </div>
                    <div class="cert-body-specs">
                        <div class="cert-spec-row">
                            <span class="cert-spec-label">Registration Number:</span>
                            <span class="cert-spec-value">07AAQCP1779A1Z9</span>
                        </div>
                        <div class="cert-spec-row">
                            <span class="cert-spec-label">Legal Name:</span>
                            <span class="cert-spec-value">PATH FOUND BIOGAS PRIVATE LIMITED</span>
                        </div>
                        <div class="cert-spec-row">
                            <span class="cert-spec-label">Trade Name:</span>
                            <span class="cert-spec-value">PATH FOUND BIOGAS PRIVATE LIMITED</span>
                        </div>
                        <div class="cert-spec-row">
                            <span class="cert-spec-label">Constitution:</span>
                            <span class="cert-spec-value">Private Limited Company</span>
                        </div>
                        <div class="cert-spec-row">
                            <span class="cert-spec-label">Jurisdictional Office:</span>
                            <span class="cert-spec-value">Ward 94, Zone 8, Delhi</span>
                        </div>
                    </div>
                </div>

                <!-- PAN Card -->
                <div class="cert-mockup-card">
                    <div class="cert-card-header">
                        <div
                            style="width: 44px; height: 44px; border-radius: 50%; background: #f1f5f9; display: flex; align-items: center; justify-content: center; font-size: 20px; color: #008ed6;">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <div>
                            <h5>Income Tax Department &bull; Govt. of India</h5>
                            <span>Permanent Account Number (PAN Card)</span>
                        </div>
                    </div>
                    <div class="cert-body-specs">
                        <div class="cert-spec-row">
                            <span class="cert-spec-label">Permanent Account Number:</span>
                            <span class="cert-spec-value">AAQCP1779A</span>
                        </div>
                        <div class="cert-spec-row">
                            <span class="cert-spec-label">Name of Entity:</span>
                            <span class="cert-spec-value">PATH FOUND BIOGAS PRIVATE LIMITED</span>
                        </div>
                        <div class="cert-spec-row">
                            <span class="cert-spec-label">Date of Incorporation:</span>
                            <span class="cert-spec-value">10/09/2025</span>
                        </div>
                        <div class="cert-spec-row">
                            <span class="cert-spec-label">Category:</span>
                            <span class="cert-spec-value">Company (Private Limited)</span>
                        </div>
                        <div class="cert-spec-row">
                            <span class="cert-spec-label">Issuing Authority:</span>
                            <span class="cert-spec-value">Income Tax Department, GOI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection