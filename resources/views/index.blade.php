@extends('layouts.app')

@push('styles')
    <style>
        /* Hero Banner Subheading Font Style matching Years Work Experience in Delivery Excellence */
        .banner-area .content h3 {
            font-family: var(--font-heading, "Lexend", "Poppins", sans-serif) !important;
            font-size: clamp(17px, 2.1vw, 23px) !important;
            font-weight: 600 !important;
            line-height: 1.4 !important;
            letter-spacing: 0 !important;
            font-style: normal !important;
            color: #ffffff !important;
            text-transform: none !important;
            margin: 16px auto 26px !important;
            max-width: 820px !important;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6) !important;
        }

        .home-ceo-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px 24px;
            margin-top: 6px;
        }

        .home-ceo-signature {
            color: #0b4aa2;
            font-size: 17px;
            font-style: normal;
            font-weight: 600;
            line-height: 1.4;
        }

        .home-ceo-signature strong {
            font-weight: 800;
        }

        .home-ceo-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 5px 0;
            color: #1e63c6;
            font-size: 13px;
            font-style: normal;
            font-weight: 750;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            border-bottom: 1px solid currentColor;
            transition: color 180ms ease, gap 180ms ease;
        }

        .home-ceo-link:hover,
        .home-ceo-link:focus-visible {
            gap: 12px;
            color: #0a3474;
        }

        /* Sectors Marquee Bar */
        .sectors-marquee-area {
            position: relative;
            background: linear-gradient(180deg, #09172c 0%, #061122 100%);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 16px 0;
            overflow: hidden;
            width: 100%;
            z-index: 10;
        }

        .sectors-marquee-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
            display: flex;
        }

        .sectors-marquee-inner::before,
        .sectors-marquee-inner::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 90px;
            z-index: 2;
            pointer-events: none;
        }

        .sectors-marquee-inner::before {
            left: 0;
            background: linear-gradient(90deg, #09172c 0%, rgba(9, 23, 44, 0) 100%);
        }

        .sectors-marquee-inner::after {
            right: 0;
            background: linear-gradient(270deg, #061122 0%, rgba(6, 17, 34, 0) 100%);
        }

        .sectors-marquee-track {
            display: flex;
            width: max-content;
            animation: sectorsScroll 30s linear infinite;
            will-change: transform;
        }

        .sectors-marquee-area:hover .sectors-marquee-track {
            animation-play-state: paused;
        }

        .sectors-marquee-group {
            display: flex;
            align-items: center;
            gap: 16px;
            padding-right: 16px;
            flex-shrink: 0;
        }

        .sector-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #ffffff !important;
            font-size: 15px;
            font-weight: 700;
            line-height: 1;
            padding: 11px 24px;
            border-radius: 50px;
            white-space: nowrap;
            letter-spacing: 0.2px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.28);
            transition: transform 0.22s ease, filter 0.22s ease, box-shadow 0.22s ease;
            user-select: none;
            cursor: default;
        }

        .sector-pill:hover {
            transform: translateY(-2px);
            filter: brightness(1.12);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.38);
        }

        .sector-pill.pill-renewable {
            background-color: #008ed6;
        }

        .sector-pill.pill-infrastructure {
            background-color: #0b7b64;
        }

        .sector-pill.pill-telecom {
            background-color: #2b68af;
        }

        .sector-pill.pill-mining {
            background-color: #cf2027;
        }

        .sector-pill.pill-oil-gas {
            background-color: #009fe3;
        }

        .sector-pill.pill-trading {
            background-color: #008b59;
        }

        @keyframes sectorsScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @media (max-width: 768px) {
            .sectors-marquee-area {
                padding: 12px 0;
            }

            .sectors-marquee-inner::before,
            .sectors-marquee-inner::after {
                width: 40px;
            }

            .sectors-marquee-group {
                gap: 10px;
                padding-right: 10px;
            }

            .sector-pill {
                font-size: 13px;
                padding: 8px 18px;
            }

            .sectors-marquee-track {
                animation-duration: 22s;
            }
        }

        /* Home Work With Us - Wide Single Line & Proper Counter Styles */
        .home-work-with-us {
            padding: 70px 0;
            background-color: #f7f9fc;
        }

        .home-work-with-us .work-with-us-header .heading-info h5 {
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #0b4aa2;
            margin-bottom: 6px;
        }

        .home-work-with-us .work-with-us-header .heading-info h2 {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.25;
            color: #0f172a;
            margin: 0;
        }

        .home-work-with-us .fun-facts-single-line {
            display: flex !important;
            flex-wrap: nowrap !important;
            gap: 24px;
            width: 100%;
            margin-top: 15px;
        }

        .home-work-with-us .fun-fact-col {
            flex: 1 1 0 !important;
            min-width: 0 !important;
        }

        .home-work-with-us .fun-fact {
            background: #ffffff;
            border-radius: 12px;
            padding: 34px 22px 28px;
            height: 100%;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            border: 1px solid rgba(11, 74, 162, 0.08);
            border-bottom: 4px solid #0b4aa2;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
            transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
        }

        .home-work-with-us .fun-fact:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 36px rgba(11, 74, 162, 0.12);
            border-bottom-color: #1e63c6;
        }

        .home-work-with-us .fun-fact h4 {
            font-size: 15px;
            line-height: 1.45;
            font-weight: 600;
            color: #475569;
            margin: 0 0 16px 0;
            min-height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: none;
        }

        .home-work-with-us .fun-fact .timer-value {
            font-size: 46px;
            line-height: 1;
            font-weight: 800;
            color: #0b4aa2;
            display: inline-flex;
            align-items: baseline;
            justify-content: center;
            letter-spacing: -0.5px;
            font-family: inherit;
        }

        .home-work-with-us .fun-fact .timer-value .timer {
            font-size: 46px;
            line-height: 1;
            font-weight: 800;
            color: #0b4aa2;
        }

        .home-work-with-us .fun-fact .timer-value .timer-prefix,
        .home-work-with-us .fun-fact .timer-value .timer-suffix {
            font-size: 46px;
            line-height: 1;
            font-weight: 800;
            color: #0b4aa2;
        }

        @media (max-width: 991px) {
            .home-work-with-us .fun-facts-single-line {
                flex-wrap: wrap;
                gap: 16px;
            }

            .home-work-with-us .fun-fact-col {
                flex: 0 0 calc(50% - 8px);
                max-width: calc(50% - 8px);
            }

            .home-work-with-us .work-with-us-header .heading-info h2 {
                font-size: 26px;
            }

            .home-work-with-us .fun-fact {
                padding: 26px 18px;
                min-height: 175px;
            }

            .home-work-with-us .fun-fact .timer-value,
            .home-work-with-us .fun-fact .timer-value .timer,
            .home-work-with-us .fun-fact .timer-value .timer-prefix,
            .home-work-with-us .fun-fact .timer-value .timer-suffix {
                font-size: 38px;
            }
        }

        @media (max-width: 575px) {
            .home-work-with-us .fun-fact h4 {
                min-height: auto;
            }
        }

        /* Omega Brand Showcase (Left side of About Section) */
        .omega-brand-showcase {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px 15px;
        }

        .omega-emblem-wrap {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 22px;
        }

        .omega-showcase-emblem {
            max-height: 140px;
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 12px 24px rgba(0, 0, 0, 0.14));
            transition: transform 0.3s ease;
        }

        .omega-showcase-emblem:hover {
            transform: scale(1.05);
        }

        .omega-brand-card {
            width: 100%;
            max-width: 440px;
            background: #08162b;
            border-radius: 14px;
            padding: 38px 36px 36px;
            color: #ffffff;
            box-shadow: 0 16px 38px rgba(8, 22, 43, 0.24);
            border: 1px solid rgba(255, 255, 255, 0.08);
            position: relative;
            overflow: hidden;
            text-align: left;
        }

        .omega-brand-card::after {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 142, 214, 0.16), transparent 70%);
            pointer-events: none;
        }

        .omega-card-title {
            font-size: 44px;
            font-weight: 800;
            line-height: 1.05;
            color: #ffffff;
            margin: 0 0 16px;
            display: flex;
            flex-direction: column;
            letter-spacing: -0.5px;
            font-family: inherit;
        }

        .omega-card-divider {
            display: flex;
            gap: 4px;
            width: 100%;
            max-width: 160px;
            height: 5px;
            margin: 0 0 18px;
            border-radius: 3px;
            overflow: hidden;
        }

        .omega-card-divider .bar {
            flex: 1;
            height: 100%;
        }

        .omega-card-divider .bar-cyan {
            background-color: #008ed6;
        }

        .omega-card-divider .bar-teal {
            background-color: #0b7b64;
        }

        .omega-card-divider .bar-blue {
            background-color: #2b68af;
        }

        .omega-card-divider .bar-red {
            background-color: #cf2027;
        }

        .omega-card-subtitle {
            font-size: 17px;
            font-weight: 600;
            line-height: 1.4;
            color: #ffffff;
            margin: 0;
            letter-spacing: 0.2px;
        }

        @media (max-width: 991px) {
            .omega-brand-showcase {
                margin-bottom: 45px;
            }

            .omega-showcase-emblem {
                max-height: 110px;
            }

            .omega-brand-card {
                padding: 30px 28px;
                max-width: 380px;
            }

            .omega-card-title {
                font-size: 36px;
            }
        }

        /* Overlay Left Logo & Brand Card over Content Side */
        @media (min-width: 992px) {
            .about-area .thumb-left {
                position: relative;
                z-index: 10;
                margin-right: -45px;
            }

            .about-area .omega-brand-showcase {
                position: relative;
                z-index: 12;
            }

            .about-area .omega-showcase-emblem {
                position: relative;
                z-index: 15;
                margin-right: -30px;
                filter: drop-shadow(0 18px 30px rgba(0, 0, 0, 0.22));
            }

            .about-area .omega-brand-card {
                position: relative;
                z-index: 14;
                margin-right: -35px;
                box-shadow: 0 22px 50px rgba(6, 18, 36, 0.35);
            }

            .about-area .info {
                position: relative;
                z-index: 5;
                padding-left: 50px;
            }
        }

        /* ============================================================== 
                                                           # Platform Scale & Impact Section (Before Services)
                                                        ================================================================= */
        .platform-scale-area {
            position: relative;
            background: radial-gradient(circle at 85% 15%, rgba(0, 142, 214, 0.12) 0%, transparent 45%),
                radial-gradient(circle at 15% 85%, rgba(11, 123, 100, 0.12) 0%, transparent 45%),
                #061122;
            color: #ffffff;
            padding: clamp(65px, 6.5vw, 90px) 0 clamp(32px, 3.2vw, 46px);
            overflow: hidden;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .platform-scale-area::before {
            content: '';
            position: absolute;
            inset: 0;
            opacity: 0.35;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
            background-size: 48px 48px;
            pointer-events: none;
        }

        .platform-scale-header {
            max-width: 860px;
            margin: 0 auto 48px;
            position: relative;
            z-index: 2;
        }

        .platform-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 18px;
            background: rgba(0, 142, 214, 0.12);
            border: 1px solid rgba(0, 142, 214, 0.35);
            border-radius: 50px;
            color: #38bdf8;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 18px;
        }

        .platform-title {
            font-size: clamp(30px, 3.8vw, 46px);
            font-weight: 800;
            line-height: 1.2;
            color: #ffffff;
            margin-bottom: 18px;
            letter-spacing: -0.5px;
        }

        .platform-title-highlight {
            background: linear-gradient(135deg, #38bdf8 0%, #008ed6 50%, #22d3ee 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .platform-subtitle {
            font-size: 17px;
            line-height: 1.7;
            color: #94a3b8;
            margin-bottom: 32px;
            max-width: 780px;
            margin-left: auto;
            margin-right: auto;
        }

        .platform-filter-tabs {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            padding: 6px;
            background: rgba(15, 30, 54, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            backdrop-filter: blur(12px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        }

        .platform-tab {
            background: transparent;
            border: none;
            outline: none;
            padding: 8px 20px;
            border-radius: 50px;
            color: #94a3b8;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .platform-tab:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.08);
        }

        .platform-tab.active {
            background: #008ed6;
            color: #ffffff;
            box-shadow: 0 4px 16px rgba(0, 142, 214, 0.45);
        }

        .platform-metrics-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
            position: relative;
            z-index: 2;
        }

        .platform-metric-card {
            background: rgba(10, 24, 46, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            padding: 28px 24px 26px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 210px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.28);
            backdrop-filter: blur(12px);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .platform-metric-card:hover {
            transform: translateY(-8px);
            border-color: rgba(56, 189, 248, 0.45);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.45), 0 0 25px rgba(0, 142, 214, 0.2);
        }

        .platform-metric-card .card-accent-bar {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3.5px;
        }

        .platform-metric-card .bar-cyan {
            background: linear-gradient(90deg, #008ed6, #38bdf8);
        }

        .platform-metric-card .bar-teal {
            background: linear-gradient(90deg, #0b7b64, #10b981);
        }

        .platform-metric-card .bar-blue {
            background: linear-gradient(90deg, #2b68af, #60a5fa);
        }

        .platform-metric-card .bar-red {
            background: linear-gradient(90deg, #cf2027, #f87171);
        }

        .platform-metric-card .bar-gold {
            background: linear-gradient(90deg, #d97706, #fbbf24);
        }

        .card-top-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
        }

        .card-category-tag {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #94a3b8;
            background: rgba(255, 255, 255, 0.06);
            padding: 3px 10px;
            border-radius: 4px;
        }

        .card-meta-icon {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.3);
            transition: color 0.25s ease, transform 0.25s ease;
        }

        .platform-metric-card:hover .card-meta-icon {
            color: #38bdf8;
            transform: scale(1.15);
        }

        .card-number-wrap {
            font-size: 36px;
            font-weight: 800;
            line-height: 1;
            color: #ffffff;
            margin-bottom: 14px;
            display: flex;
            align-items: baseline;
            gap: 4px;
            letter-spacing: -0.5px;
            font-family: inherit;
        }

        .card-number-wrap .metric-num {
            color: #ffffff;
        }

        .card-number-wrap .metric-prefix {
            font-size: 18px;
            font-weight: 700;
            color: #38bdf8;
            margin-right: 2px;
        }

        .card-number-wrap .metric-suffix,
        .card-number-wrap .metric-unit {
            font-size: 22px;
            font-weight: 700;
            color: #38bdf8;
        }

        .platform-metric-card .card-desc {
            font-size: 14px;
            line-height: 1.55;
            color: #94a3b8;
            margin: 0;
            transition: color 0.25s ease;
        }

        .platform-metric-card:hover .card-desc {
            color: #e2e8f0;
        }

        @media (max-width: 1199px) {
            .platform-metrics-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 575px) {
            .platform-tab {
                font-size: 12px;
                padding: 6px 14px;
            }
        }

        /* 3-Cards Services Layout */
        .home-services-grid.services-3-cols {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
            grid-auto-rows: clamp(340px, 28vw, 420px) !important;
            gap: 28px !important;
        }

        .home-services-grid.services-3-cols .home-service-card {
            grid-column: span 1 !important;
            border-radius: 14px;
            overflow: hidden;
            transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
        }

        .home-services-grid.services-3-cols .home-service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 50px rgba(0, 0, 0, 0.45);
            border-color: rgba(0, 142, 214, 0.6);
        }

        .service-sector-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 4px 12px;
            border-radius: 50px;
            background: rgba(0, 142, 214, 0.85);
            color: #ffffff;
            z-index: 3;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .home-services-grid.services-3-cols {
                grid-template-columns: repeat(2, 1fr) !important;
                grid-auto-rows: 320px !important;
                gap: 20px !important;
            }
        }

        /* ============================================================== 
                                                   # Omega Story Split Auto-Scroll Showcase (Slide 8)
                                                ================================================================= */
        .omega-story-section {
            background: linear-gradient(180deg, #071224 0%, #0a182e 100%);
            padding: 90px 0 80px;
            position: relative;
            overflow: hidden;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .omega-story-section::before {
            content: '';
            position: absolute;
            top: -150px;
            left: -100px;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(0, 142, 214, 0.15) 0%, transparent 70%);
            pointer-events: none;
        }

        .omega-story-brand-card {
            background: rgba(13, 27, 46, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 18px;
            padding: 40px 32px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
        }

        .omega-story-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 14px;
            background: rgba(0, 142, 214, 0.15);
            border: 1px solid rgba(0, 142, 214, 0.3);
            border-radius: 50px;
            color: #38bdf8;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 18px;
        }

        .omega-story-badge .badge-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #38bdf8;
            box-shadow: 0 0 8px #38bdf8;
        }

        .omega-story-title {
            font-family: var(--font-heading, "Lexend", "Poppins", sans-serif);
            color: #ffffff;
            font-size: 34px;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 24px;
        }

        .omega-story-title span {
            color: #008ed6;
        }

        .omega-brand-box {
            background: #08162b;
            /* border: 1px solid rgba(255, 255, 255, 0.15); */
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 22px;
        }

        .omega-box-emblem {
            width: 48px;
            height: 48px;
            object-fit: contain;
        }

        .omega-box-name {
            font-size: 24px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1;
            margin: 0 0 6px 0;
            letter-spacing: -0.5px;
        }

        .omega-color-bars {
            display: flex;
            height: 4px;
            width: 80px;
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 4px;
        }

        .omega-color-bars .bar-cyan {
            flex: 1;
            background: #008ed6;
        }

        .omega-color-bars .bar-red {
            flex: 1;
            background: #cf2027;
        }

        .omega-color-bars .bar-green {
            flex: 1;
            background: #0b7b64;
        }

        .omega-box-tagline {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 500;
            margin: 0;
            letter-spacing: 0.3px;
        }

        .omega-story-desc {
            color: rgba(255, 255, 255, 0.75);
            font-size: 14.5px;
            line-height: 1.65;
            margin-bottom: 26px;
        }

        .scroll-indicator-pill {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
        }

        .scroll-indicator-pill .pulse-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #22c55e;
            box-shadow: 0 0 8px #22c55e;
            animation: pulseGreen 2s infinite;
        }

        @keyframes pulseGreen {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.4;
                transform: scale(0.85);
            }
        }

        /* Continuous Auto-Scroll Carousel Track */
        .omega-scroll-wrapper {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding: 10px 0;
            mask-image: linear-gradient(to right, transparent 0%, black 3%, black 97%, transparent 100%);
            -webkit-mask-image: linear-gradient(to right, transparent 0%, black 3%, black 97%, transparent 100%);
        }

        .omega-scroll-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: omegaAutoScroll 40s linear infinite;
        }

        .omega-scroll-wrapper:hover .omega-scroll-track {
            animation-play-state: paused;
        }

        @keyframes omegaAutoScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Portrait Story Card */
        .omega-story-card {
            width: 270px;
            height: 420px;
            flex-shrink: 0;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            background: #0d1b2e;
            box-shadow: 0 14px 35px rgba(0, 0, 0, 0.45);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.4s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.4s ease, border-color 0.4s ease;
            cursor: pointer;
            text-decoration: none !important;
            display: block;
        }

        .omega-story-card:hover {
            transform: translateY(-8px) scale(1.02);
            border-color: rgba(0, 142, 214, 0.6);
            box-shadow: 0 22px 50px rgba(0, 142, 214, 0.25);
        }

        .omega-story-card .card-bg-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s cubic-bezier(0.2, 0.8, 0.2, 1);
            display: block;
            z-index: 1;
        }

        .omega-story-card:hover .card-bg-img {
            transform: scale(1.08);
        }

        .omega-story-card .card-gradient-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(8, 22, 43, 0.1) 0%, rgba(8, 22, 43, 0.5) 45%, rgba(6, 17, 34, 0.96) 92%);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 22px;
            z-index: 2;
        }

        .omega-story-card .card-top-tag {
            align-self: flex-start;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            padding: 4px 10px;
            border-radius: 4px;
            background: rgba(0, 0, 0, 0.65);
            backdrop-filter: blur(8px);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .omega-story-card .card-bottom-info h4 {
            font-family: var(--font-heading, "Lexend", "Poppins", sans-serif);
            color: #ffffff;
            font-size: 19px;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 8px;
        }

        .omega-story-card .card-bottom-info p {
            font-family: var(--font-body, "Source Sans 3", sans-serif);
            color: rgba(255, 255, 255, 0.78);
            font-size: 13px;
            line-height: 1.45;
            margin: 0;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* ============================================================== 
                                                   # Group Roadmap 2025 – 2030 (Slide 6)
                                                ================================================================= */
        .omega-roadmap-section {
            background: #061122;
            padding: 95px 0 85px;
            position: relative;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .omega-roadmap-header {
            max-width: 860px;
            margin-bottom: 48px;
        }

        .omega-section-tag {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .omega-section-tag .accent-bar {
            width: 30px;
            height: 4px;
            background: #008ed6;
            border-radius: 2px;
        }

        .omega-section-tag span {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #008ed6;
        }

        .omega-roadmap-header h2 {
            font-family: var(--font-heading, "Lexend", "Poppins", sans-serif);
            font-size: 42px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: -0.5px;
            margin-bottom: 14px;
        }

        .omega-roadmap-header p {
            font-size: 17px;
            color: rgba(255, 255, 255, 0.75);
            margin: 0;
            line-height: 1.6;
        }

        .omega-pillars-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-bottom: 48px;
        }

        .omega-pillar-row {
            background: #0b1a30;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 22px 30px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .omega-pillar-row:hover {
            background: #0f2240;
            border-color: rgba(0, 142, 214, 0.4);
            transform: translateX(6px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        }

        .omega-pillar-num {
            font-size: 26px;
            font-weight: 800;
            min-width: 58px;
            letter-spacing: -0.5px;
        }

        .omega-pillar-num.c-renewables {
            color: #00a3ff;
        }

        .omega-pillar-num.c-infrastructure {
            color: #f25538;
        }

        .omega-pillar-num.c-retail {
            color: #00c48c;
        }

        .omega-pillar-num.c-global {
            color: #3b82f6;
        }

        .omega-pillar-name {
            font-size: 20px;
            font-weight: 700;
            color: #ffffff;
            min-width: 230px;
            margin: 0;
        }

        .omega-pillar-desc {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.78);
            margin: 0;
            line-height: 1.5;
            flex: 1;
        }

        /* Roadmap Targets KPI Strip */
        .omega-targets-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .omega-target-card {
            background: #08172c;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 24px 22px;
            transition: all 0.3s ease;
        }

        .omega-target-card:hover {
            border-color: rgba(0, 142, 214, 0.4);
            background: #0b1f3c;
            transform: translateY(-4px);
        }

        .omega-target-val {
            font-size: 36px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1.1;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .omega-target-val span {
            color: #00a3ff;
            font-size: 20px;
        }

        .omega-target-label {
            font-size: 13.5px;
            color: rgba(255, 255, 255, 0.65);
            line-height: 1.45;
            margin: 0;
        }

        /* ============================================================== 
                                                   # Major Clients & Institutional Partners (Slide 7)
                                                ================================================================= */
        .omega-clients-section {
            background: #08162b;
            padding: 95px 0 90px;
            position: relative;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .omega-clients-header {
            max-width: 900px;
            margin-bottom: 50px;
        }

        .omega-clients-header h2 {
            font-size: 40px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: -0.5px;
            margin-bottom: 14px;
        }

        .omega-clients-header p {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.75);
            margin: 0;
            line-height: 1.6;
        }

        .omega-client-category-block {
            margin-bottom: 42px;
        }

        .omega-category-badge {
            display: inline-block;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 6px 14px;
            border-radius: 4px;
            color: #ffffff;
            margin-bottom: 22px;
        }

        .badge-telecom {
            background: #008ed6;
        }

        .badge-power {
            background: #0b7b64;
        }

        .badge-epc {
            background: #2563eb;
        }

        .badge-steel {
            background: #cf2027;
        }

        .omega-client-logos-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 24px 28px;
        }

        .omega-client-item {
            width: 96px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .omega-client-item:hover {
            transform: translateY(-5px);
        }

        .omega-client-circle {
            width: 82px;
            height: 82px;
            border-radius: 50%;
            background: #ffffff;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            border: 2px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            overflow: hidden;
            padding: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .omega-client-item:hover .omega-client-circle {
            border-color: #008ed6;
            box-shadow: 0 12px 30px rgba(0, 142, 214, 0.4);
            transform: scale(1.06);
        }

        .omega-client-name {
            font-size: 12px;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.82);
            line-height: 1.3;
            margin: 0;
            text-align: center;
        }

        /* Responsive rules */
        @media (max-width: 991px) {
            .omega-pillar-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
                padding: 18px 20px;
            }

            .omega-pillar-name {
                min-width: auto;
            }

            .omega-targets-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .omega-story-brand-card {
                margin-bottom: 24px;
            }

            .omega-roadmap-header h2,
            .omega-clients-header h2 {
                font-size: 32px;
            }
        }

        @media (max-width: 575px) {
            .omega-targets-grid {
                grid-template-columns: 1fr;
            }

            .omega-client-item {
                width: 78px;
            }

            .omega-client-circle {
                width: 68px;
                height: 68px;
            }

            .omega-story-card {
                width: 240px;
                height: 380px;
            }
        }


        /* ============================================================== 
               # COMPREHENSIVE MOBILE-ONLY HORIZONTAL SCROLL & ALIGNMENT (max-width: 767px)
               ============================================================== */
        @media (max-width: 767px) {

            /* 1. Principles Section (Core Values #pillar-values) */
            #pillar-values .pillar-values-header {
                padding: 40px 0 24px !important;
            }

            #pillar-values .pillar-values-grid {
                display: flex !important;
                flex-direction: row !important;
                flex-wrap: nowrap !important;
                overflow-x: auto !important;
                overflow-y: hidden !important;
                -webkit-overflow-scrolling: touch !important;
                scroll-snap-type: x mandatory !important;
                gap: 16px !important;
                padding: 10px 15px 30px !important;
                margin-left: -15px !important;
                margin-right: -15px !important;
                border-top: none !important;
                border-bottom: none !important;
                scrollbar-width: none !important;
                touch-action: pan-x pan-y !important;
            }

            #pillar-values .pillar-values-grid::-webkit-scrollbar {
                display: none !important;
            }

            #pillar-values .value-card {
                flex: 0 0 280px !important;
                max-width: 280px !important;
                min-width: 280px !important;
                scroll-snap-align: start !important;
                border: 1px solid #E2E8F0 !important;
                border-radius: 14px !important;
                background: #ffffff !important;
                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06) !important;
                padding: 30px 24px !important;
                margin: 0 !important;
            }

            /* 2. Major Clients: Client icons in horizontal scrollable rail */
            .omega-client-category-block {
                margin-bottom: 30px !important;
            }

            .omega-client-logos-grid {
                display: flex !important;
                flex-direction: row !important;
                flex-wrap: nowrap !important;
                overflow-x: auto !important;
                overflow-y: hidden !important;
                -webkit-overflow-scrolling: touch !important;
                scroll-snap-type: x mandatory !important;
                padding: 6px 15px 18px !important;
                margin-left: -15px !important;
                margin-right: -15px !important;
                gap: 16px !important;
                scrollbar-width: none !important;
                touch-action: pan-x pan-y !important;
            }

            .omega-client-logos-grid::-webkit-scrollbar {
                display: none !important;
            }

            .omega-client-item {
                flex: 0 0 84px !important;
                max-width: 84px !important;
                min-width: 84px !important;
                scroll-snap-align: start !important;
            }

            /* 3. Work with Us Header: Proper alignment of heading and button */
            .home-work-with-us {
                padding: 50px 0 !important;
            }

            .home-work-with-us .work-with-us-header {
                margin-bottom: 22px !important;
                padding-bottom: 0 !important;
            }

            .home-work-with-us .work-with-us-header .row {
                display: flex !important;
                flex-direction: row !important;
                justify-content: space-between !important;
                align-items: center !important;
                margin: 0 !important;
            }

            .home-work-with-us .work-with-us-header .heading-info {
                text-align: left !important;
                margin: 0 !important;
            }

            .home-work-with-us .work-with-us-header .heading-info h5 {
                font-size: 18px !important;
                font-weight: 800 !important;
                margin: 0 !important;
                letter-spacing: 0.8px !important;
                color: #0b4aa2 !important;
            }

            .home-work-with-us .work-with-us-header [class*="col-"] {
                padding: 0 !important;
                width: auto !important;
                flex: 0 0 auto !important;
                margin: 0 !important;
            }

            .home-work-with-us .work-with-us-header .btn {
                padding: 9px 18px !important;
                font-size: 13px !important;
                letter-spacing: 0.3px !important;
                margin: 0 !important;
                white-space: nowrap !important;
            }

            /* 4. Fun-Facts Metric Boxes */
            .home-work-with-us .fun-facts-single-line {
                display: flex !important;
                flex-direction: row !important;
                flex-wrap: nowrap !important;
                overflow-x: auto !important;
                overflow-y: hidden !important;
                -webkit-overflow-scrolling: touch !important;
                scroll-snap-type: x mandatory !important;
                padding: 4px 15px 18px !important;
                margin-left: -15px !important;
                margin-right: -15px !important;
                gap: 14px !important;
                scrollbar-width: none !important;
                touch-action: pan-x pan-y !important;
            }

            .home-work-with-us .fun-facts-single-line::-webkit-scrollbar {
                display: none !important;
            }

            .home-work-with-us .fun-fact-col {
                flex: 0 0 260px !important;
                max-width: 260px !important;
                min-width: 260px !important;
                scroll-snap-align: start !important;
            }

            /* 5. Diversified Platform Filter Tabs / Heading Scrollable */
            .platform-tabs-scroll-wrapper {
                width: calc(100% + 30px) !important;
                margin-left: -15px !important;
                margin-right: -15px !important;
                overflow-x: auto !important;
                overflow-y: hidden !important;
                -webkit-overflow-scrolling: touch !important;
                scrollbar-width: none !important;
                padding: 4px 15px 12px !important;
                touch-action: pan-x pan-y !important;
            }

            .platform-tabs-scroll-wrapper::-webkit-scrollbar {
                display: none !important;
            }

            .platform-filter-tabs {
                display: inline-flex !important;
                flex-direction: row !important;
                flex-wrap: nowrap !important;
                max-width: none !important;
                width: max-content !important;
                padding: 5px !important;
                border-radius: 50px !important;
            }

            .platform-tab {
                flex: 0 0 auto !important;
                white-space: nowrap !important;
                font-size: 13px !important;
                padding: 8px 16px !important;
            }

            /* 6. Platform Scale & Impact 8 Metric Cards */
            .platform-metrics-grid {
                display: flex !important;
                flex-direction: row !important;
                flex-wrap: nowrap !important;
                overflow-x: auto !important;
                overflow-y: hidden !important;
                -webkit-overflow-scrolling: touch !important;
                scroll-snap-type: x mandatory !important;
                padding: 6px 15px 22px !important;
                margin-left: -15px !important;
                margin-right: -15px !important;
                gap: 16px !important;
                grid-template-columns: none !important;
                scrollbar-width: none !important;
                touch-action: pan-x pan-y !important;
            }

            .platform-metrics-grid::-webkit-scrollbar {
                display: none !important;
            }

            .platform-metric-card {
                flex: 0 0 270px !important;
                max-width: 270px !important;
                min-width: 270px !important;
                scroll-snap-align: start !important;
            }

            /* 7. Our Services 3 Cards */
            .home-services-grid.services-3-cols {
                display: flex !important;
                flex-direction: row !important;
                flex-wrap: nowrap !important;
                overflow-x: auto !important;
                overflow-y: hidden !important;
                -webkit-overflow-scrolling: touch !important;
                scroll-snap-type: x mandatory !important;
                padding: 6px 15px 22px !important;
                margin-left: -15px !important;
                margin-right: -15px !important;
                gap: 16px !important;
                grid-template-columns: none !important;
                scrollbar-width: none !important;
                touch-action: pan-x pan-y !important;
            }

            .home-services-grid.services-3-cols::-webkit-scrollbar {
                display: none !important;
            }

            .home-services-grid.services-3-cols .home-service-card {
                flex: 0 0 285px !important;
                max-width: 285px !important;
                min-width: 285px !important;
                height: 380px !important;
                scroll-snap-align: start !important;
            }

            /* 8. Roadmap Target KPI Cards */
            .omega-targets-grid {
                display: flex !important;
                flex-direction: row !important;
                flex-wrap: nowrap !important;
                overflow-x: auto !important;
                overflow-y: hidden !important;
                -webkit-overflow-scrolling: touch !important;
                scroll-snap-type: x mandatory !important;
                padding: 6px 15px 18px !important;
                margin-left: -15px !important;
                margin-right: -15px !important;
                gap: 14px !important;
                grid-template-columns: none !important;
                scrollbar-width: none !important;
                touch-action: pan-x pan-y !important;
            }

            .omega-targets-grid::-webkit-scrollbar {
                display: none !important;
            }

            .omega-target-card {
                flex: 0 0 240px !important;
                max-width: 240px !important;
                min-width: 240px !important;
                scroll-snap-align: start !important;
            }
        }
    </style>
@endpush

@section('content')

    <!-- End Header -->

    <!-- Start Banner 
                                                                                                                                                                                                    ============================================= -->
    <div class="banner-area inc-content text-medium top-pad-60">
        <div id="bootcarousel" class="carousel text-center slide text-light carousel-fade animate_text" data-ride="carousel"
            data-interval="4500" data-pause="false" data-wrap="true" data-bs-ride="carousel" data-bs-interval="4500"
            data-bs-pause="false" data-bs-wrap="true">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active" role="group" aria-label="Slide 1 of 3">
                    <div class="slider-thumb bg-cover"
                        style="background-image: url(assets/img/banner/renewable_solar_wind.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Renewable Energy & Solar</h2>
                                            <h3 data-animation="animated slideInRight">
                                                Solar, hybrid and storage-linked generation is the groupʼs primary growth
                                                engine
                                            </h3>
                                            <a data-animation="animated slideInUp"
                                                class="btn circle btn-light effect btn-md angle" href="projects.html">View
                                                Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" role="group" aria-label="Slide 2 of 3">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/banner_2.jpeg);">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Infrastructure & Civil Works</h2>
                                            <h3 data-animation="animated slideInRight">
                                                Road construction, urban development, civil and structural works, utilities
                                                and real estate infrastructure
                                            </h3>
                                            <a data-animation="animated slideInUp"
                                                class="btn circle btn-light effect btn-md angle" href="projects.html">View
                                                Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" role="group" aria-label="Slide 3 of 3">
                    <div class="slider-thumb bg-cover"
                        style="background-image: url(assets/img/services/telecom_network.jpg);">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Telecom & OFC Infrastructure</h2>
                                            <h3 data-animation="animated slideInRight">
                                                Optical fiber backbone and access network construction
                                            </h3>
                                            <a data-animation="animated slideInUp"
                                                class="btn circle btn-light effect btn-md angle" href="projects.html">View
                                                Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#bootcarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#bootcarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- End Wrapper for slides -->
            <button class="banner-cycle-toggle" type="button" aria-label="Pause banner rotation" aria-pressed="false">
                <i class="fas fa-pause" aria-hidden="true"></i>
            </button>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Sectors Marquee Bar
                                                                                                                                                                                    ============================================= -->
    <section class="sectors-marquee-area" aria-label="Core Business Sectors">
        <div class="sectors-marquee-inner">
            <div class="sectors-marquee-track">
                <!-- Group 1 -->
                <div class="sectors-marquee-group" aria-hidden="false">
                    <span class="sector-pill pill-renewable">Renewable Energy</span>
                    <span class="sector-pill pill-infrastructure">Infrastructure &amp; Civil</span>
                    <span class="sector-pill pill-telecom">Telecom &amp; OFC</span>
                    <span class="sector-pill pill-mining">Mining &amp; Logistics</span>
                    <span class="sector-pill pill-oil-gas">Oil &amp; Gas</span>
                    <span class="sector-pill pill-trading">Trading &amp; Retail</span>
                </div>
                <!-- Group 2 -->
                <div class="sectors-marquee-group" aria-hidden="true">
                    <span class="sector-pill pill-renewable">Renewable Energy</span>
                    <span class="sector-pill pill-infrastructure">Infrastructure &amp; Civil</span>
                    <span class="sector-pill pill-telecom">Telecom &amp; OFC</span>
                    <span class="sector-pill pill-mining">Mining &amp; Logistics</span>
                    <span class="sector-pill pill-oil-gas">Oil &amp; Gas</span>
                    <span class="sector-pill pill-trading">Trading &amp; Retail</span>
                </div>
                <!-- Group 3 -->
                <div class="sectors-marquee-group" aria-hidden="true">
                    <span class="sector-pill pill-renewable">Renewable Energy</span>
                    <span class="sector-pill pill-infrastructure">Infrastructure &amp; Civil</span>
                    <span class="sector-pill pill-telecom">Telecom &amp; OFC</span>
                    <span class="sector-pill pill-mining">Mining &amp; Logistics</span>
                    <span class="sector-pill pill-oil-gas">Oil &amp; Gas</span>
                    <span class="sector-pill pill-trading">Trading &amp; Retail</span>
                </div>
                <!-- Group 4 -->
                <div class="sectors-marquee-group" aria-hidden="true">
                    <span class="sector-pill pill-renewable">Renewable Energy</span>
                    <span class="sector-pill pill-infrastructure">Infrastructure &amp; Civil</span>
                    <span class="sector-pill pill-telecom">Telecom &amp; OFC</span>
                    <span class="sector-pill pill-mining">Mining &amp; Logistics</span>
                    <span class="sector-pill pill-oil-gas">Oil &amp; Gas</span>
                    <span class="sector-pill pill-trading">Trading &amp; Retail</span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sectors Marquee Bar -->

    <!-- Start Our About
                                                        ============================================= -->
    <div class="about-area overflow-hidden shape-box py-5">
        <div class="container">
            <div class="about-box">
                <div class="row align-items-center">
                    <div class="col-lg-6 thumb-left">
                        <div class="omega-brand-showcase">
                            <!-- Logo Here -->
                            <div class="omega-emblem-wrap">
                                <img src="{{ asset('assets/img/omega-emblem.png') }}" alt="Omega Group Logo"
                                    class="omega-showcase-emblem">
                            </div>
                            <!-- Omega Group Brand Card -->
                            <div class="omega-brand-card">
                                <div class="omega-brand-card-inner">
                                    <h2 class="omega-card-title">
                                        <span>Omega</span>
                                        <span>Group</span>
                                    </h2>
                                    <div class="omega-card-divider" aria-hidden="true">
                                        <span class="bar bar-cyan"></span>
                                        <span class="bar bar-teal"></span>
                                        <span class="bar bar-blue"></span>
                                        <span class="bar bar-red"></span>
                                    </div>
                                    <p class="omega-card-subtitle">
                                        A Visionary Consortium<br>Delivering Excellence
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 info">
                        <div class="experiecne" style="margin-bottom: 24px;">
                            <strong style="font-size: 85px; line-height: 70px;">24</strong>
                            <h5 style="font-size: 18px; line-height: 1.4;">Years Work experience in Delivery Excellence</h5>
                        </div>
                        <div class="about-content-text" style="padding-left: 10px;">
                            <p style="font-size: 16px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
                                An established holding platform with roots since 2003, structured as a consortium of
                                specialised operating companies across EPC, renewable energy, infrastructure, commercial
                                operations and international delivery.
                            </p>
                            <p style="font-size: 16px; line-height: 1.7; color: #475569; margin-bottom: 22px;">
                                Teams are organised for multiple geographies and parallel work packages, allowing the group
                                to run large renewable programmes alongside civil, telecom and mining contracts.
                            </p>
                            <div class="home-ceo-actions" style="margin-top: 12px;">
                                <a class="btn circle btn-theme angle effect btn-md" href="about-us.html">
                                    Know More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape-bg opacity-03">
            <img src="assets/img/shape/5.svg" alt="Shape">
        </div>
        <!-- End Shape -->
    </div>
    <!-- End Our About -->

    <!-- Start Platform Scale & Impact Section
                                                        ============================================= -->
    <section class="platform-scale-area" id="platform-scale" aria-labelledby="platformScaleTitle">
        <div class="container position-relative">
            <!-- Section Header -->
            <div class="platform-scale-header text-center" data-reveal="fade-up">
                <!-- <span class="platform-eyebrow">
                                                                    <i class="fas fa-network-wired"></i> Group Scale &amp; Performance
                                                                </span> -->
                <h2 id="platformScaleTitle" class="platform-title">
                    A diversified platform with<br>
                    <span class="platform-title-highlight">infrastructure and clean energy</span> at its core
                </h2>
                <p class="platform-subtitle">
                    Omega Group operates as a consortium of specialised companies spanning renewable energy, EPC and civil
                    works, telecom infrastructure, mining and logistics, oil &amp; gas, trading and retail.
                </p>

                <!-- Interactive Filter Tabs -->
                <div class="platform-filter-tabs" role="tablist" aria-label="Metric Filters">
                    <button class="platform-tab active" data-filter="all" type="button">All Indicators</button>
                    <button class="platform-tab" data-filter="scale" type="button">Operations &amp; Footprint</button>
                    <button class="platform-tab" data-filter="financial" type="button">Order Book &amp; Pipeline</button>
                    <button class="platform-tab" data-filter="clean-energy" type="button">Clean Energy 2030</button>
                </div>
            </div>
        </div>

        <!-- 8 Interactive Metric Cards Grid -->
        <div class="platform-metrics-grid">
            <!-- Metric 1: 2003 -->
            <div class="platform-metric-card" data-category="scale" data-reveal="fade-up" data-delay="0">
                <div class="card-accent-bar bar-teal"></div>
                <div class="card-top-meta">
                    <span class="card-category-tag">Heritage</span>
                    <i class="fas fa-calendar-check card-meta-icon"></i>
                </div>
                <div class="card-number-wrap">
                    <span class="metric-num">2003</span>
                </div>
                <p class="card-desc">Established roots, with more than two decades of continuous project delivery</p>
            </div>

            <!-- Metric 2: 50+ -->
            <div class="platform-metric-card" data-category="scale" data-reveal="fade-up" data-delay="60">
                <div class="card-accent-bar bar-cyan"></div>
                <div class="card-top-meta">
                    <span class="card-category-tag">Footprint</span>
                    <i class="fas fa-map-marker-alt card-meta-icon"></i>
                </div>
                <div class="card-number-wrap">
                    <span class="metric-num">50</span><span class="metric-suffix">+</span>
                </div>
                <p class="card-desc">Locations and active operating touchpoints across India and overseas</p>
            </div>

            <!-- Metric 3: 10+ -->
            <div class="platform-metric-card" data-category="scale" data-reveal="fade-up" data-delay="120">
                <div class="card-accent-bar bar-blue"></div>
                <div class="card-top-meta">
                    <span class="card-category-tag">Global Reach</span>
                    <i class="fas fa-globe-americas card-meta-icon"></i>
                </div>
                <div class="card-number-wrap">
                    <span class="metric-num">10</span><span class="metric-suffix">+</span>
                </div>
                <p class="card-desc">Countries covered through international operations and export networks</p>
            </div>

            <!-- Metric 4: USD 250M -->
            <div class="platform-metric-card" data-category="financial" data-reveal="fade-up" data-delay="180">
                <div class="card-accent-bar bar-gold"></div>
                <div class="card-top-meta">
                    <span class="card-category-tag">Order Book</span>
                    <i class="fas fa-file-contract card-meta-icon"></i>
                </div>
                <div class="card-number-wrap">
                    <span class="metric-prefix">USD</span> <span class="metric-num">250</span><span
                        class="metric-suffix">M</span>
                </div>
                <p class="card-desc">Order book position reported for FY25-28</p>
            </div>

            <!-- Metric 5: USD 300M+ -->
            <div class="platform-metric-card" data-category="financial" data-reveal="fade-up" data-delay="240">
                <div class="card-accent-bar bar-gold"></div>
                <div class="card-top-meta">
                    <span class="card-category-tag">Pipeline</span>
                    <i class="fas fa-layer-group card-meta-icon"></i>
                </div>
                <div class="card-number-wrap">
                    <span class="metric-prefix">USD</span> <span class="metric-num">300</span><span
                        class="metric-suffix">M+</span>
                </div>
                <p class="card-desc">Value of current and pipeline projects under execution and development</p>
            </div>

            <!-- Metric 6: 1.25 GW -->
            <div class="platform-metric-card" data-category="clean-energy" data-reveal="fade-up" data-delay="300">
                <div class="card-accent-bar bar-cyan"></div>
                <div class="card-top-meta">
                    <span class="card-category-tag">Clean Energy</span>
                    <i class="fas fa-solar-panel card-meta-icon"></i>
                </div>
                <div class="card-number-wrap">
                    <span class="metric-num">1.25</span><span class="metric-unit">GW</span>
                </div>
                <p class="card-desc">Renewable capacity pipeline across solar, hybrid and storage</p>
            </div>

            <!-- Metric 7: 3 GW -->
            <div class="platform-metric-card" data-category="clean-energy" data-reveal="fade-up" data-delay="360">
                <div class="card-accent-bar bar-teal"></div>
                <div class="card-top-meta">
                    <span class="card-category-tag">2030 Roadmap</span>
                    <i class="fas fa-bolt card-meta-icon"></i>
                </div>
                <div class="card-number-wrap">
                    <span class="metric-num">3</span><span class="metric-unit">GW</span>
                </div>
                <p class="card-desc">Renewable capacity targeted under the 2030 roadmap</p>
            </div>

            <!-- Metric 8: USD 500M -->
            <div class="platform-metric-card" data-category="financial" data-reveal="fade-up" data-delay="420">
                <div class="card-accent-bar bar-red"></div>
                <div class="card-top-meta">
                    <span class="card-category-tag">Turnover Milestone</span>
                    <i class="fas fa-chart-pie card-meta-icon"></i>
                </div>
                <div class="card-number-wrap">
                    <span class="metric-prefix">USD</span> <span class="metric-num">500</span><span
                        class="metric-suffix">M</span>
                </div>
                <p class="card-desc">Group turnover milestone targeted under the 2025-2030 roadmap</p>
            </div>
        </div>
        </div>
    </section>
    <!-- End Platform Scale & Impact Section -->

    <!-- Start Homepage Services ====================================== -->
    <section class="home-services" id="home-services" aria-labelledby="homeServicesTitle">
        <div class="container">
            <div class="home-services-heading" data-reveal="fade-up">
                <span class="home-services-eyebrow">Our Services</span>
                <h2 id="homeServicesTitle">Built for Industry.<br><span>Ready for Every Challenge.</span></h2>
                <p class="home-services-subheading">
                    <span>We deliver engineering, construction, and end-to-end support across critical sectors.</span>
                    <span>Every project is backed by specialist crews committed to safety, speed, and precision.</span>
                </p>
            </div>

            <div class="home-services-grid services-3-cols">
                <!-- Card 1: Renewable Energy & Solar -->
                <a class="home-service-card" href="projects.html" aria-label="Renewable Energy & Solar"
                    data-reveal="fade-up" data-delay="0">
                    <!-- <span class="service-sector-badge">Sector 01</span> -->
                    <img src="{{ asset('assets/img/banner/renewable_solar_wind.jpg') }}" alt="Renewable Energy & Solar"
                        loading="lazy">
                    <h3 class="home-service-name">Renewable Energy &amp; Solar</h3>
                </a>

                <!-- Card 2: Infrastructure & Civil Works -->
                <a class="home-service-card" href="services-Infrastructure-Projects.html"
                    aria-label="Infrastructure & Civil Works" data-reveal="fade-up" data-delay="80">
                    <!-- <span class="service-sector-badge">Sector 02</span> -->
                    <img src="{{ asset('assets/img/services/Infrastructure.png') }}" alt="Infrastructure & Civil Works"
                        loading="lazy">
                    <h3 class="home-service-name">Infrastructure &amp; Civil Works</h3>
                </a>

                <!-- Card 3: Telecom & OFC Infrastructure -->
                <a class="home-service-card" href="services.html" aria-label="Telecom & OFC Infrastructure"
                    data-reveal="fade-up" data-delay="160">
                    <!-- <span class="service-sector-badge">Sector 03</span> -->
                    <img src="{{ asset('assets/img/services/telecom_network.jpg') }}" alt="Telecom & OFC Infrastructure"
                        loading="lazy">
                    <h3 class="home-service-name">Telecom &amp; OFC Infrastructure</h3>
                </a>
            </div>
        </div>
    </section>
    <!-- End Homepage Services -->

    <!-- Start Work With Us 
                                                            ============================================= -->
    <div class="work-with-us-area home-work-with-us bg-gray">
        <div class="container">
            <div class="content-box">
                <!-- Header: Title on Left, Button on Right -->
                <div class="work-with-us-header mb-4 pb-2">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <div class="heading-info">
                                <h5>Work with Us</h5>
                                <!-- <h2>Aligned with Saudi Vision 2030</h2> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 text-md-end text-start mt-3 mt-md-0">
                            <a href="contact.html" class="btn angle btn-theme effect btn-md">Get a Quote</a>
                        </div>
                    </div>
                </div>

                <!-- 4 Wide Fun-Fact Boxes in a Single Line -->
                <div class="fun-facts-items text-center">
                    <div class="fun-facts-single-line">
                        <div class="fun-fact-col">
                            <div class="fun-fact">
                                <h4>Operating entities under group direction</h4>
                                <div class="timer-value">
                                    <span class="timer" data-from="0" data-to="10" data-speed="1500"
                                        data-refresh-interval="30">10</span>
                                </div>
                            </div>
                        </div>
                        <div class="fun-fact-col">
                            <div class="fun-fact">
                                <h4>Business verticals from renewables to trading</h4>
                                <div class="timer-value">
                                    <span class="timer-prefix">0</span><span class="timer" data-from="0" data-to="6"
                                        data-speed="1500" data-refresh-interval="30">6</span>
                                </div>
                            </div>
                        </div>
                        <div class="fun-fact-col">
                            <div class="fun-fact">
                                <h4>Established roots, over two decades of delivery</h4>
                                <div class="timer-value">
                                    <span class="timer" data-from="1980" data-to="2003" data-speed="1500"
                                        data-refresh-interval="30">2003</span>
                                </div>
                            </div>
                        </div>
                        <div class="fun-fact-col">
                            <div class="fun-fact">
                                <h4>Locations and active operating touchpoints</h4>
                                <div class="timer-value">
                                    <span class="timer" data-from="0" data-to="50" data-speed="1500"
                                        data-refresh-interval="30">50</span><span class="timer-suffix">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work With Us -->

    <!-- =====================================================
                                                 # 1. SPLIT AUTO-SCROLL STORY SECTION (Slide 8)
                                                 Left: Sticky Brand Block | Right: Continuous Auto-Scroll Carousel
                                            ====================================================== -->
    <section class="omega-story-section" id="omega-story" data-reveal="fade-up">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row align-items-center g-4">
                <!-- Left Column: Sticky/Prominent Brand Card -->
                <div class="col-xl-4 col-lg-5">
                    <div class="omega-brand-box">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <img src="{{ asset('assets/img/omega-emblem.png') }}" alt="Omega Group Emblem"
                                class="omega-box-emblem">
                            <div>
                                <h3 class="omega-box-name">Omega Group</h3>
                                <div class="omega-color-bars">
                                    <span class="bar-cyan"></span>
                                    <span class="bar-red"></span>
                                    <span class="bar-green"></span>
                                </div>
                            </div>
                        </div>
                        <p class="omega-box-tagline">A Visionary Consortium Delivering Excellence</p>
                    </div>
                </div>

                <!-- Right Column: Continuous Horizontal Auto-Scroll Track -->
                <div class="col-xl-8 col-lg-7">
                    <div class="omega-scroll-wrapper" title="Hover to pause auto-scroll">
                        <div class="omega-scroll-track" id="omegaScrollTrack">
                            <!-- SET 1 -->
                            <a href="{{ url('about-us') }}" class="omega-story-card">
                                <img src="{{ asset('assets/img/diversity_equity_inclusion.jpg') }}"
                                    alt="Diversity, Equity & Inclusion" class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">People &amp; Culture</span>
                                    <div class="card-bottom-info">
                                        <h4>Diversity, Equity &amp; Inclusion</h4>
                                        <p>Fostering an inclusive and collaborative workplace where diverse minds drive
                                            engineering innovation.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ url('services') }}" class="omega-story-card">
                                <img src="{{ asset('assets/img/learning_development.jpg') }}" alt="Learning & Development"
                                    class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Capability</span>
                                    <div class="card-bottom-info">
                                        <h4>Learning &amp; Development</h4>
                                        <p>Empowering multidisciplinary crews with ongoing technical masterclasses and
                                            safety certifications.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ url('about-us') }}" class="omega-story-card">
                                <img src="{{ asset('assets/img/leadership_blocks.jpg') }}" alt="People Experiences"
                                    class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Leadership</span>
                                    <div class="card-bottom-info">
                                        <h4>People Experiences</h4>
                                        <p>Creating an inspiring, high-performance ecosystem that nurtures tomorrow’s
                                            industrial leaders.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ url('about-us') }}" class="omega-story-card">
                                <img src="{{ asset('assets/img/services/16.jpeg') }}" alt="About Us & Heritage"
                                    class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Since 2003</span>
                                    <div class="card-bottom-info">
                                        <h4>About Us &amp; Group Heritage</h4>
                                        <p>Over two decades of established industry delivery across essential and
                                            high-growth sectors.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="projects.html" class="omega-story-card">
                                <img src="{{ asset('assets/img/banner/epc_service_1.jpg') }}" alt="We Delivers: Turnkey EPC"
                                    class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">EPC Excellence</span>
                                    <div class="card-bottom-info">
                                        <h4>We Delivers</h4>
                                        <p>End-to-end turnkey engineering, procurement, and construction for critical
                                            national programmes.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ url('services') }}" class="omega-story-card">
                                <img src="{{ asset('assets/img/specialized_operating_entities.jpg') }}"
                                    alt="Specialised Operating Entities" class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Consortium</span>
                                    <div class="card-bottom-info">
                                        <h4>Specialised Operating Entities</h4>
                                        <p>10 coordinated operating companies executing in synergy under unified group
                                            strategy.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#omega-clients" class="omega-story-card">
                                <img src="{{ asset('assets/img/partners_handshake.jpg') }}" alt="Our Clients & Partners"
                                    class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Partnerships</span>
                                    <div class="card-bottom-info">
                                        <h4>Our Clients &amp; Partners</h4>
                                        <p>Trusted supplier and partner to premier PSUs, telecom majors, and global
                                            infrastructure giants.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ url('about-us') }}" class="omega-story-card">
                                <img src="{{ asset('assets/img/csr_sustainability.jpg') }}"
                                    alt="SR Initiatives & Sustainability" class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Impact</span>
                                    <div class="card-bottom-info">
                                        <h4>SR Initiatives &amp; Sustainability</h4>
                                        <p>Active corporate social responsibility and community upliftment across all
                                            operating geographies.</p>
                                    </div>
                                </div>
                            </a>

                            <!-- DUPLICATE SET FOR SEAMLESS 100% INFINITE MARQUEE LOOP -->
                            <a href="{{ url('about-us') }}" class="omega-story-card" aria-hidden="true" tabindex="-1">
                                <img src="{{ asset('assets/img/diversity_equity_inclusion.jpg') }}"
                                    alt="Diversity, Equity & Inclusion" class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">People &amp; Culture</span>
                                    <div class="card-bottom-info">
                                        <h4>Diversity, Equity &amp; Inclusion</h4>
                                        <p>Fostering an inclusive and collaborative workplace where diverse minds drive
                                            engineering innovation.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ url('services') }}" class="omega-story-card" aria-hidden="true" tabindex="-1">
                                <img src="{{ asset('assets/img/learning_development.jpg') }}" alt="Learning & Development"
                                    class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Capability</span>
                                    <div class="card-bottom-info">
                                        <h4>Learning &amp; Development</h4>
                                        <p>Empowering multidisciplinary crews with ongoing technical masterclasses and
                                            safety certifications.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ url('about-us') }}" class="omega-story-card" aria-hidden="true" tabindex="-1">
                                <img src="{{ asset('assets/img/leadership_blocks.jpg') }}" alt="People Experiences"
                                    class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Leadership</span>
                                    <div class="card-bottom-info">
                                        <h4>People Experiences</h4>
                                        <p>Creating an inspiring, high-performance ecosystem that nurtures tomorrow’s
                                            industrial leaders.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ url('about-us') }}" class="omega-story-card" aria-hidden="true" tabindex="-1">
                                <img src="{{ asset('assets/img/services/16.jpeg') }}" alt="About Us & Heritage"
                                    class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Since 2003</span>
                                    <div class="card-bottom-info">
                                        <h4>About Us &amp; Group Heritage</h4>
                                        <p>Over two decades of established industry delivery across essential and
                                            high-growth sectors.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="projects.html" class="omega-story-card" aria-hidden="true" tabindex="-1">
                                <img src="{{ asset('assets/img/banner/epc_service_1.jpg') }}" alt="We Delivers: Turnkey EPC"
                                    class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">EPC Excellence</span>
                                    <div class="card-bottom-info">
                                        <h4>We Delivers</h4>
                                        <p>End-to-end turnkey engineering, procurement, and construction for critical
                                            national programmes.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ url('services') }}" class="omega-story-card" aria-hidden="true" tabindex="-1">
                                <img src="{{ asset('assets/img/specialized_operating_entities.jpg') }}"
                                    alt="Specialised Operating Entities" class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Consortium</span>
                                    <div class="card-bottom-info">
                                        <h4>Specialised Operating Entities</h4>
                                        <p>10 coordinated operating companies executing in synergy under unified group
                                            strategy.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#omega-clients" class="omega-story-card" aria-hidden="true" tabindex="-1">
                                <img src="{{ asset('assets/img/partners_handshake.jpg') }}" alt="Our Clients & Partners"
                                    class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Partnerships</span>
                                    <div class="card-bottom-info">
                                        <h4>Our Clients &amp; Partners</h4>
                                        <p>Trusted supplier and partner to premier PSUs, telecom majors, and global
                                            infrastructure giants.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ url('about-us') }}" class="omega-story-card" aria-hidden="true" tabindex="-1">
                                <img src="{{ asset('assets/img/csr_sustainability.jpg') }}"
                                    alt="SR Initiatives & Sustainability" class="card-bg-img">
                                <div class="card-gradient-overlay">
                                    <span class="card-top-tag">Impact</span>
                                    <div class="card-bottom-info">
                                        <h4>SR Initiatives &amp; Sustainability</h4>
                                        <p>Active corporate social responsibility and community upliftment across all
                                            operating geographies.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
                                                 # 2. STRATEGY: GROUP ROADMAP 2025 – 2030 (Slide 6)
                                                 4 Strategic Pillars + Target Milestones
                                            ====================================================== -->
    <section class="omega-roadmap-section" id="group-roadmap" data-reveal="fade-up">
        <div class="container">
            <!-- Header -->
            <div class="omega-roadmap-header">
                <div class="omega-section-tag">
                    <span class="accent-bar"></span>
                    <span>Strategy</span>
                </div>
                <h2>Group roadmap 2025 &ndash; 2030</h2>
                <p>The roadmap strengthens renewables, retail growth, infrastructure diversification and global expansion.
                </p>
            </div>

            <!-- 4 Strategic Pillars -->
            <div class="omega-pillars-list">
                <!-- Pillar 01 -->
                <div class="omega-pillar-row">
                    <div class="omega-pillar-num c-renewables">01</div>
                    <h3 class="omega-pillar-name">Renewables</h3>
                    <p class="omega-pillar-desc">Expand solar, wind and hybrid energy projects, targeting 3 GW of renewable
                        capacity by 2030.</p>
                </div>

                <!-- Pillar 02 -->
                <div class="omega-pillar-row">
                    <div class="omega-pillar-num c-infrastructure">02</div>
                    <h3 class="omega-pillar-name">Infrastructure</h3>
                    <p class="omega-pillar-desc">Scale transportation, urban mobility, HDD and water infrastructure
                        programmes.</p>
                </div>

                <!-- Pillar 03 -->
                <div class="omega-pillar-row">
                    <div class="omega-pillar-num c-retail">03</div>
                    <h3 class="omega-pillar-name">Retail growth</h3>
                    <p class="omega-pillar-desc">Enter new markets with tailored end-user solutions through e-commerce and
                        retail platforms.</p>
                </div>

                <!-- Pillar 04 -->
                <div class="omega-pillar-row">
                    <div class="omega-pillar-num c-global">04</div>
                    <h3 class="omega-pillar-name">Global expansion</h3>
                    <p class="omega-pillar-desc">Extend exports and operations into wider geographies across the GCC, Africa
                        and Asia.</p>
                </div>
            </div>

            <!-- Target KPI Metrics Grid -->
            <div class="omega-targets-grid">
                <div class="omega-target-card">
                    <div class="omega-target-val">3 <span>GW</span></div>
                    <p class="omega-target-label">Renewable capacity targeted under the 2030 roadmap</p>
                </div>
                <div class="omega-target-card">
                    <div class="omega-target-val">USD 500<span>M</span></div>
                    <p class="omega-target-label">Group turnover milestone under the roadmap</p>
                </div>
                <div class="omega-target-card">
                    <div class="omega-target-val">2025-26</div>
                    <p class="omega-target-label">Near-term focus on strengthening renewables and core infrastructure</p>
                </div>
                <div class="omega-target-card">
                    <div class="omega-target-val">10<span>+</span></div>
                    <p class="omega-target-label">Countries targeted for continued international expansion</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
                                                 # 3. MAJOR CLIENTS & INSTITUTIONAL PARTNERS (Slide 7)
                                                 Categorized Corporate & PSU Client Chips
                                            ====================================================== -->
    <section class="omega-clients-section" id="omega-clients" data-reveal="fade-up">
        <div class="container">
            <!-- Header -->
            <div class="omega-clients-header">
                <div class="omega-section-tag">
                    <span class="accent-bar"></span>
                    <span>Our Clients</span>
                </div>
                <h2>Major clients and institutional partners</h2>
                <p>Public sector undertakings, telecom operators, EPC majors and industrial groups the group has delivered
                    for, past and present &mdash; directly or as an appointed contractor and service provider.</p>
            </div>

            <!-- Category 1: Telecom & Communications -->
            <div class="omega-client-category-block">
                <span class="omega-category-badge badge-telecom">Telecom &amp; Communications</span>
                <div class="omega-client-logos-grid">
                    <!-- Reliance Jio -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <circle cx="50" cy="50" r="46" fill="#0077c8" />
                                <text x="50" y="58" font-family="'Poppins', sans-serif" font-weight="900" font-size="28"
                                    fill="#ffffff" text-anchor="middle">Jio</text>
                                <circle cx="43" cy="38" r="4" fill="#cf2027" />
                            </svg>
                        </div>
                        <p class="omega-client-name">Reliance Jio</p>
                    </div>

                    <!-- Bharti Airtel -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <path d="M22 68 Q18 32 50 24 Q78 30 76 56 Q74 74 54 74 Q38 74 38 60 Q38 48 50 48"
                                    fill="none" stroke="#e11900" stroke-width="7" stroke-linecap="round" />
                                <text x="50" y="86" font-family="'Poppins', sans-serif" font-weight="800" font-size="13"
                                    fill="#e11900" text-anchor="middle">airtel</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Bharti Airtel</p>
                    </div>

                    <!-- Vodafone -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle" style="background: #e60000;">
                            <svg viewBox="0 0 100 100" width="56" height="56">
                                <circle cx="50" cy="50" r="44" fill="#e60000" />
                                <path
                                    d="M50 26 C36 26 26 37 26 51 C26 65 37 76 51 76 C65 76 75 66 75 51 C75 42 70 34 62 29 L54 42 C57 44 59 47 59 51 C59 56 55 60 50 60 C45 60 41 56 41 51 C41 46 45 42 50 42 Z"
                                    fill="#ffffff" />
                            </svg>
                        </div>
                        <p class="omega-client-name">Vodafone</p>
                    </div>

                    <!-- Idea -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle" style="background: #ffdb00;">
                            <svg viewBox="0 0 100 100" width="58" height="58">
                                <text x="50" y="60" font-family="'Arial Black', sans-serif" font-weight="900" font-size="26"
                                    fill="#000000" text-anchor="middle">!dea</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Idea</p>
                    </div>

                    <!-- Reliance Communications -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <path d="M50 16 L80 68 L20 68 Z" fill="#cf2027" />
                                <path d="M26 68 Q50 48 74 68" stroke="#00529b" stroke-width="6" fill="none" />
                                <text x="50" y="85" font-family="'Poppins', sans-serif" font-weight="800" font-size="10"
                                    fill="#00529b" text-anchor="middle">RCOM</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Reliance Comm.</p>
                    </div>

                    <!-- BSNL -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle" style="background: #0f6c52;">
                            <svg viewBox="0 0 100 100" width="58" height="58">
                                <circle cx="50" cy="50" r="42" fill="none" stroke="#38bdf8" stroke-width="3"
                                    stroke-dasharray="8 4" />
                                <text x="50" y="58" font-family="'Poppins', sans-serif" font-weight="900" font-size="20"
                                    fill="#ffffff" text-anchor="middle">BSNL</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">BSNL</p>
                    </div>

                    <!-- TCIL -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <circle cx="50" cy="50" r="38" fill="none" stroke="#0077c8" stroke-width="3" />
                                <circle cx="50" cy="50" r="32" fill="none" stroke="#cf2027" stroke-width="1.5" />
                                <text x="50" y="58" font-family="'Poppins', sans-serif" font-weight="900" font-size="20"
                                    fill="#0077c8" text-anchor="middle">TCIL</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">TCIL</p>
                    </div>

                    <!-- Vindhya Telelinks -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <path d="M30 30 L50 70 L70 30" stroke="#004d80" stroke-width="5" fill="none"
                                    stroke-linecap="round" />
                                <circle cx="50" cy="30" r="6" fill="#008ed6" />
                                <text x="50" y="85" font-family="'Poppins', sans-serif" font-weight="700" font-size="9"
                                    fill="#004d80" text-anchor="middle">VINDHYA</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Vindhya Telelinks</p>
                    </div>

                    <!-- Telesonic -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <circle cx="36" cy="46" r="14" fill="#008ed6" opacity="0.8" />
                                <circle cx="54" cy="46" r="14" fill="#cf2027" opacity="0.8" />
                                <text x="50" y="78" font-family="'Poppins', sans-serif" font-weight="800" font-size="10"
                                    fill="#1e293b" text-anchor="middle">TELESONIC</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Telesonic</p>
                    </div>

                    <!-- Honeywell -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle" style="background: #e51937;">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <text x="50" y="56" font-family="'Impact', 'Arial Black', sans-serif" font-weight="900"
                                    font-size="13" letter-spacing="1" fill="#ffffff" text-anchor="middle">HONEYWELL</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Honeywell</p>
                    </div>
                </div>
            </div>

            <!-- Category 2: Power, Energy & Utilities -->
            <div class="omega-client-category-block">
                <span class="omega-category-badge badge-power">Power, Energy &amp; Utilities</span>
                <div class="omega-client-logos-grid">
                    <!-- Power Grid Corporation -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <path d="M50 20 L40 75 L60 75 Z" fill="#cf2027" />
                                <line x1="28" y1="42" x2="72" y2="42" stroke="#1e3a8a" stroke-width="4" />
                                <line x1="32" y1="58" x2="68" y2="58" stroke="#1e3a8a" stroke-width="4" />
                                <text x="50" y="88" font-family="'Poppins', sans-serif" font-weight="800" font-size="8"
                                    fill="#1e3a8a" text-anchor="middle">POWERGRID</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Power Grid Corp.</p>
                    </div>

                    <!-- BHEL -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle" style="background: #00569e;">
                            <svg viewBox="0 0 100 100" width="58" height="58">
                                <circle cx="50" cy="50" r="42" fill="none" stroke="rgba(255,255,255,0.4)"
                                    stroke-width="2" />
                                <text x="50" y="58" font-family="'Poppins', sans-serif" font-weight="900" font-size="21"
                                    fill="#ffffff" text-anchor="middle">BHEL</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">BHEL</p>
                    </div>

                    <!-- MSEDCL -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle" style="background: #009fe3;">
                            <svg viewBox="0 0 100 100" width="58" height="58">
                                <text x="50" y="57" font-family="'Poppins', sans-serif" font-weight="900" font-size="15"
                                    fill="#ffffff" text-anchor="middle">MSEDCL</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">MSEDCL</p>
                    </div>

                    <!-- Mahanadi Coalfields -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle" style="background: #0d6848;">
                            <svg viewBox="0 0 100 100" width="58" height="58">
                                <circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.3)"
                                    stroke-width="2" />
                                <text x="50" y="58" font-family="'Poppins', sans-serif" font-weight="900" font-size="20"
                                    fill="#ffffff" text-anchor="middle">MCL</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Mahanadi Coalfields</p>
                    </div>
                </div>
            </div>

            <!-- Category 3: EPC & Infrastructure Majors -->
            <div class="omega-client-category-block">
                <span class="omega-category-badge badge-epc">EPC &amp; Infrastructure Majors</span>
                <div class="omega-client-logos-grid">
                    <!-- L&T Construction -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <circle cx="50" cy="46" r="28" fill="none" stroke="#003e7e" stroke-width="4" />
                                <text x="50" y="54" font-family="'Poppins', sans-serif" font-weight="900" font-size="16"
                                    fill="#003e7e" text-anchor="middle">L&amp;T</text>
                                <text x="50" y="85" font-family="'Poppins', sans-serif" font-weight="700" font-size="8"
                                    fill="#003e7e" text-anchor="middle">CONSTRUCTION</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">L&amp;T Construction</p>
                    </div>

                    <!-- Simplex Infrastructures -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <rect x="20" y="38" width="60" height="4" fill="#cf2027" />
                                <text x="50" y="56" font-family="'Poppins', sans-serif" font-weight="900" font-size="13"
                                    fill="#1e293b" text-anchor="middle">SIMPLEX</text>
                                <rect x="20" y="62" width="60" height="4" fill="#cf2027" />
                            </svg>
                        </div>
                        <p class="omega-client-name">Simplex Infra</p>
                    </div>

                    <!-- Navayuga -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <path d="M35 30 L65 48 L35 66 Z" fill="#cf2027" />
                                <path d="M50 30 L75 48 L50 66 Z" fill="#008ed6" opacity="0.8" />
                                <text x="50" y="84" font-family="'Poppins', sans-serif" font-weight="800" font-size="9"
                                    fill="#004d80" text-anchor="middle">NAVAYUGA</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Navayuga</p>
                    </div>

                    <!-- Vihan Associates -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <path d="M30 35 L50 65 L70 35" stroke="#cf2027" stroke-width="5" fill="none"
                                    stroke-linecap="round" />
                                <text x="50" y="82" font-family="'Poppins', sans-serif" font-weight="800" font-size="9"
                                    fill="#1e293b" text-anchor="middle">VIHAN</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Vihan Associates</p>
                    </div>

                    <!-- M3M India -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle" style="background: #0f274a;">
                            <svg viewBox="0 0 100 100" width="58" height="58">
                                <text x="50" y="58" font-family="'Poppins', sans-serif" font-weight="900" font-size="21"
                                    fill="#ffffff" text-anchor="middle">M3M</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">M3M India</p>
                    </div>
                </div>
            </div>

            <!-- Category 4: Steel, Mining & Industry -->
            <div class="omega-client-category-block mb-0">
                <span class="omega-category-badge badge-steel">Steel, Mining &amp; Industry</span>
                <div class="omega-client-logos-grid">
                    <!-- Jindal Steel & Power -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <path d="M30 45 Q50 25 70 45" stroke="#0d6848" stroke-width="5" fill="none" />
                                <path d="M35 55 Q50 35 65 55" stroke="#f59e0b" stroke-width="4" fill="none" />
                                <text x="50" y="78" font-family="'Poppins', sans-serif" font-weight="800" font-size="10"
                                    fill="#0d6848" text-anchor="middle">JINDAL</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Jindal Steel &amp; Power</p>
                    </div>

                    <!-- Sanson Engineers -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle">
                            <svg viewBox="0 0 100 100" width="60" height="60">
                                <circle cx="50" cy="45" r="16" fill="none" stroke="#ea580c" stroke-width="4" />
                                <line x1="50" y1="22" x2="50" y2="68" stroke="#ea580c" stroke-width="3" />
                                <line x1="27" y1="45" x2="73" y2="45" stroke="#ea580c" stroke-width="3" />
                                <text x="50" y="82" font-family="'Poppins', sans-serif" font-weight="800" font-size="9"
                                    fill="#1e293b" text-anchor="middle">SANSON</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Sanson Engineers</p>
                    </div>

                    <!-- Sensa Bhavan -->
                    <div class="omega-client-item">
                        <div class="omega-client-circle" style="background: #cf2027;">
                            <svg viewBox="0 0 100 100" width="58" height="58">
                                <text x="50" y="58" font-family="'Poppins', sans-serif" font-weight="900" font-size="22"
                                    fill="#ffffff" text-anchor="middle">SB</text>
                            </svg>
                        </div>
                        <p class="omega-client-name">Sensa Bhavan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Omega Group 3 New Sections -->

    <!-- =====================================================
                                                                                                                                                                                                         PREMIUM PILLARS SECTION — Vision · Mission · Values · Standards
                                                                                                                                                                                                         Each pillar = full-width scroll section, alternating layout
                                                                                                                                                                                                    ====================================================== -->
    <section class="pillars-wrapper" id="pillars">

        <!-- ── 03 CORE VALUES ──────────────────────────────────── -->
        <div class="pillar-section pillar-light" id="pillar-values">
            <div class="container">
                <div class="pillar-values-header" data-reveal="fade-up">
                    <!-- <div class="pillar-number">03</div> -->
                    <span class="eyebrow-label">Core Values</span>
                    <h2>The Principles<br>We Stand By</h2>
                    <div class="pillar-divider"></div>
                </div>
                <div class="pillar-values-grid">
                    <div class="value-card" data-reveal="fade-up" data-delay="0">
                        <div class="value-card-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Integrity</h4>
                        <p>We uphold the highest ethical standards in every contract and partnership, building trust
                            through transparent and honest dealings.</p>
                        <div class="value-card-line"></div>
                    </div>
                    <div class="value-card" data-reveal="fade-up" data-delay="100">
                        <div class="value-card-icon">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                        <h4>Safety</h4>
                        <p>We maintain a "Zero Harm" culture to protect our workforce, our clients, and the environment
                            on every single project.</p>
                        <div class="value-card-line"></div>
                    </div>
                    <div class="value-card" data-reveal="fade-up" data-delay="200">
                        <div class="value-card-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h4>Quality</h4>
                        <p>We ensure precision in our manufacturing and excellence in our project delivery — no
                            compromise, no exceptions.</p>
                        <div class="value-card-line"></div>
                    </div>
                    <div class="value-card" data-reveal="fade-up" data-delay="300">
                        <div class="value-card-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Reliability</h4>
                        <p>We are a dependable partner, delivering on our promises every time — on schedule, within
                            budget, and to specification.</p>
                        <div class="value-card-line"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Pillars Section -->

    <style>
        /* =============================================================
                               PILLARS SECTION — Premium Stacked Scroll Design
                               ============================================================= */

        .pillars-wrapper {
            overflow: hidden;
        }

        /* ── Eyebrow Label ───────────────────────────────────────── */
        .eyebrow-label {
            display: inline-block;
            align-self: flex-start;
            width: max-content;
            font-size: 0.8125rem;
            font-weight: 700;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: #1B4FA8;
            background: rgba(27, 79, 168, 0.08);
            padding: 6px 18px;
            border-radius: 100px;
            margin-bottom: 20px;
        }

        .eyebrow-light {
            color: rgba(255, 255, 255, 0.85);
            background: rgba(255, 255, 255, 0.12);
        }

        /* ── Individual Pillar Sections ──────────────────────────── */
        .pillar-section {
            position: relative;
            overflow: hidden;
        }

        .pillar-light {
            background: #ffffff;
        }

        .pillar-dark {
            background: #0D1B2E;
        }

        .pillar-navy {
            background: #0A1628;
        }

        .pillar-container {
            padding: 0;
        }

        .pillar-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 540px;
        }

        .row-reverse .pillar-text {
            order: 2;
        }

        .row-reverse .pillar-image {
            order: 1;
        }

        /* ── Pillar Text Pane ────────────────────────────────────── */
        .pillar-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 50px 60px 60px;
        }

        .row-reverse .pillar-text {
            padding: 60px 60px 60px 50px;
        }

        .pillar-number {
            font-family: "Poppins", sans-serif;
            font-size: 5rem;
            font-weight: 900;
            color: rgba(27, 79, 168, 0.08);
            line-height: 1;
            letter-spacing: -0.05em;
            margin-bottom: -10px;
            transition: color 0.4s ease;
        }

        .pillar-number-white {
            color: rgba(255, 255, 255, 0.07);
        }

        .pillar-text h2 {
            font-size: clamp(2.25rem, 4vw, 3.5rem);
            font-weight: 800;
            color: #0D1B2E;
            line-height: 1.1;
            letter-spacing: -0.04em;
            margin: 8px 0 0;
        }

        .pillar-dark .pillar-text h2,
        .pillar-navy .pillar-text h2 {
            color: #ffffff;
        }

        .pillar-divider {
            width: 48px;
            height: 3px;
            background: #1B4FA8;
            border-radius: 3px;
            margin: 28px 0;
            transition: width 0.6s ease;
        }

        .pillar-divider-accent {
            background: #E8921A;
        }

        .pillar-section:hover .pillar-divider {
            width: 80px;
        }

        .pillar-text p {
            font-size: 1.125rem;
            color: #4A5568;
            line-height: 1.8;
            max-width: 540px;
            margin-bottom: 0;
        }

        .text-light-para {
            color: rgba(255, 255, 255, 0.72) !important;
            margin-bottom: 16px !important;
        }

        /* ── CTA Links ───────────────────────────────────────────── */
        .pillar-cta {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 36px;
            font-family: "Poppins", sans-serif;
            font-size: 0.875rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #1B4FA8;
            text-decoration: none;
            position: relative;
            transition: gap 0.3s ease, color 0.3s ease;
        }

        .pillar-cta::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: #1B4FA8;
            transition: width 0.35s ease;
        }

        .pillar-cta:hover::after {
            width: 100%;
        }

        .pillar-cta:hover {
            gap: 16px;
            color: #1B4FA8;
        }

        .pillar-cta-light {
            color: rgba(255, 255, 255, 0.9);
        }

        .pillar-cta-light::after {
            background: rgba(255, 255, 255, 0.9);
        }

        .pillar-cta-light:hover {
            color: #ffffff;
        }

        /* ── Image Pane ──────────────────────────────────────────── */
        .pillar-image {
            position: relative;
            overflow: hidden;
            min-height: 540px;
        }

        .pillar-img-wrap {
            position: absolute;
            inset: 0;
        }

        .pillar-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            display: block;
        }

        .pillar-image:hover .pillar-img-wrap img {
            transform: scale(1.05);
        }

        /* Overlay on images */
        .pillar-img-wrap::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(27, 79, 168, 0.25) 0%, rgba(13, 27, 46, 0.35) 100%);
        }

        .pillar-dark .pillar-img-wrap::after,
        .pillar-navy .pillar-img-wrap::after {
            background: linear-gradient(135deg, rgba(13, 27, 46, 0.5) 0%, rgba(27, 79, 168, 0.3) 100%);
        }

        /* ── Image Badge ─────────────────────────────────────────── */
        .pillar-img-badge {
            position: absolute;
            bottom: 32px;
            right: 32px;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 10px;
            background: #1B4FA8;
            color: #fff;
            padding: 12px 22px;
            border-radius: 100px;
            font-family: "Poppins", sans-serif;
            font-size: 0.8125rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            box-shadow: 0 8px 32px rgba(27, 79, 168, 0.4);
            transform: translateY(8px);
            opacity: 0;
            transition: opacity 0.5s ease 0.3s, transform 0.5s ease 0.3s;
        }

        .pillar-image.is-visible .pillar-img-badge {
            opacity: 1;
            transform: translateY(0);
        }

        .pillar-img-badge i {
            font-size: 14px;
        }

        .pillar-img-badge-light {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .pillar-img-badge-accent {
            background: #E8921A;
            box-shadow: 0 8px 32px rgba(232, 146, 26, 0.4);
        }

        /* ── Core Values Grid ────────────────────────────────────── */
        .pillar-values-header {
            text-align: center;
            padding: 60px 0 40px;
            max-width: 640px;
            margin: 0 auto;
        }

        .pillar-values-header h2 {
            font-size: clamp(2rem, 3.5vw, 3rem);
            font-weight: 800;
            color: #0D1B2E;
            letter-spacing: -0.04em;
            line-height: 1.1;
            margin: 8px 0 0;
        }

        .pillar-values-header .pillar-divider {
            margin: 28px auto;
        }

        .pillar-values-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            border-top: 1px solid #E2E8F0;
            padding-bottom: 60px;
        }

        .value-card {
            padding: 48px 36px 44px;
            border-right: 1px solid #E2E8F0;
            position: relative;
            overflow: hidden;
            transition: background 0.35s ease, transform 0.35s ease;
            cursor: default;
        }

        .value-card:last-child {
            border-right: none;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: #1B4FA8;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .value-card:hover::before {
            transform: scaleX(1);
        }

        .value-card:hover {
            background: #F7F9FC;
            transform: translateY(-4px);
        }

        .value-card-icon {
            width: 56px;
            height: 56px;
            background: rgba(27, 79, 168, 0.08);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            transition: background 0.35s ease, transform 0.35s ease;
        }

        .value-card:hover .value-card-icon {
            background: #1B4FA8;
            transform: rotate(-6deg) scale(1.08);
        }

        .value-card-icon i {
            font-size: 22px;
            color: #1B4FA8;
            transition: color 0.35s ease;
        }

        .value-card:hover .value-card-icon i {
            color: #ffffff;
        }

        .value-card h4 {
            font-family: "Poppins", sans-serif;
            font-size: 1.125rem;
            font-weight: 700;
            color: #0D1B2E;
            letter-spacing: -0.02em;
            margin-bottom: 14px;
        }

        .value-card p {
            font-size: 0.9375rem;
            color: #4A5568;
            line-height: 1.7;
            margin: 0;
        }

        /* ── Scroll-Reveal Animations ────────────────────────────── */
        [data-reveal] {
            opacity: 0;
            transition-property: opacity, transform;
            transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transition-duration: 0.75s;
        }

        [data-reveal="fade-up"] {
            transform: translateY(48px);
        }

        [data-reveal="slide-right"] {
            transform: translateX(-64px);
        }

        [data-reveal="slide-left"] {
            transform: translateX(64px);
        }

        [data-reveal].is-visible {
            opacity: 1;
            transform: translate(0, 0);
        }

        @media (prefers-reduced-motion: reduce) {

            [data-reveal],
            [data-reveal].is-visible {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }

        /* ── Responsive ──────────────────────────────────────────── */
        @media (max-width: 1024px) {
            .pillar-text {
                padding: 60px 40px;
            }

            .row-reverse .pillar-text {
                padding: 60px 40px;
            }

            .pillar-values-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .value-card {
                border-bottom: 1px solid #E2E8F0;
            }
        }

        @media (max-width: 767px) {
            .pillar-row {
                grid-template-columns: 1fr;
            }

            .row-reverse .pillar-text {
                order: 1;
            }

            .row-reverse .pillar-image {
                order: 2;
            }

            .pillar-image {
                min-height: 320px;
            }

            .pillar-text {
                padding: 60px 24px;
            }

            .row-reverse .pillar-text {
                padding: 60px 24px;
            }

            .pillar-values-grid {
                grid-template-columns: 1fr;
            }

            .pillar-values-header {
                padding: 70px 0 40px;
            }

            .value-card {
                border-right: none;
            }
        }
    </style>

    <script>
        /* Scroll-Reveal using Intersection Observer */
        (function () {
            function initReveal() {
                var items = document.querySelectorAll('[data-reveal]');
                var images = document.querySelectorAll('.pillar-image');

                if (!items.length) return;

                var observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            var el = entry.target;
                            var delay = parseInt(el.getAttribute('data-delay') || '0', 10);
                            setTimeout(function () {
                                el.classList.add('is-visible');
                            }, delay);
                            observer.unobserve(el);
                        }
                    });
                }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });

                var imgObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            imgObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.3 });

                items.forEach(function (el) { observer.observe(el); });
                images.forEach(function (el) { imgObserver.observe(el); });
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initReveal);
            } else {
                initReveal();
            }
        })();
    </script>

    <!-- End Pillars Section -->

    <!-- Start Footer 
                            ============================================= -->

@endsection