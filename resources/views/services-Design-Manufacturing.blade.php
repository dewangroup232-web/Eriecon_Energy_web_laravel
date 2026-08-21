@extends('layouts.app')

@section('navbar-class', 'design-manufacturing-navbar')
@section('body-class', 'design-manufacturing-page service-stack-page')

@push('styles')
    <link rel="stylesheet" href="assets/css/service-stack.css">
    <style>
        @media (min-width: 1024px) {
            nav.navbar.validnavs.design-manufacturing-navbar.no-background:not(.sticked) {
                background: transparent !important;
                box-shadow: none !important;
                position: absolute !important;
                top: 0 !important;
            }
        }

        /* =========================================================
               GSAP STACKING CARDS — PREMIUM INDUSTRIAL EXPERIENCE
            ========================================================= */

        /* ─── Base Reset for Section ─── */
        .svc-stack-section {
            background: #06090f;
            position: relative;
            overflow: hidden;
        }

        .svc-stack-section::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(27, 79, 168, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(27, 79, 168, 0.03) 1px, transparent 1px);
            background-size: 60px 60px;
            pointer-events: none;
            z-index: 0;
        }

        /* ─── Section Heading ─── */
        /* ─── Stack Container ─── */
        .svc-stack-wrap {
            position: relative;
        }

        /* ─── Progress Rail ─── */
        /* ─── Individual Stacking Panel ─── */
        .svc-panel {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        /* Panel background layers */
        .svc-panel-bg {
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .svc-panel-bg-img {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            transform-origin: center;
            will-change: transform;
        }

        .svc-panel-bg-overlay {
            position: absolute;
            inset: 0;
            z-index: 1;
        }

        /* Color themes per card */
        .svc-panel:nth-child(1) .svc-panel-bg-overlay {
            background: linear-gradient(105deg, rgba(6, 9, 15, 0.97) 40%, rgba(13, 27, 60, 0.88) 100%);
        }

        .svc-panel:nth-child(2) .svc-panel-bg-overlay {
            background: linear-gradient(105deg, rgba(6, 9, 15, 0.97) 40%, rgba(30, 15, 60, 0.88) 100%);
        }

        .svc-panel:nth-child(3) .svc-panel-bg-overlay {
            background: linear-gradient(105deg, rgba(6, 9, 15, 0.97) 40%, rgba(10, 40, 30, 0.88) 100%);
        }

        .svc-panel:nth-child(4) .svc-panel-bg-overlay {
            background: linear-gradient(105deg, rgba(6, 9, 15, 0.97) 40%, rgba(40, 20, 10, 0.88) 100%);
        }

        .svc-panel:nth-child(5) .svc-panel-bg-overlay {
            background: linear-gradient(105deg, rgba(6, 9, 15, 0.97) 40%, rgba(13, 27, 60, 0.88) 100%);
        }

        .svc-panel:nth-child(6) .svc-panel-bg-overlay {
            background: linear-gradient(105deg, rgba(6, 9, 15, 0.97) 40%, rgba(30, 15, 60, 0.88) 100%);
        }

        .svc-panel:nth-child(7) .svc-panel-bg-overlay {
            background: linear-gradient(105deg, rgba(6, 9, 15, 0.97) 40%, rgba(10, 40, 30, 0.88) 100%);
        }

        .svc-panel:nth-child(8) .svc-panel-bg-overlay {
            background: linear-gradient(105deg, rgba(6, 9, 15, 0.97) 40%, rgba(40, 20, 10, 0.88) 100%);
        }

        /* ─── Panel Inner Layout ─── */
        .svc-panel-inner {
            position: relative;
            z-index: 5;
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 80px 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        /* Alternate layout every other card */
        .svc-panel:nth-child(even) .svc-panel-inner {
            grid-template-columns: 1fr 1fr;
        }

        .svc-panel:nth-child(even) .svc-panel-img-col {
            order: 2;
        }

        .svc-panel:nth-child(even) .svc-panel-content-col {
            order: 1;
        }

        /* ─── Image Column ─── */
        .svc-panel-img-col {
            position: relative;
        }

        .svc-img-frame {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            aspect-ratio: 4/3;
        }

        .svc-img-frame::before {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: 22px;
            background: linear-gradient(135deg, rgba(77, 142, 240, 0.4) 0%, rgba(123, 92, 250, 0.2) 50%, transparent 100%);
            z-index: -1;
        }

        .svc-img-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            display: block;
        }

        /* Corner accent */
        .svc-img-corner {
            position: absolute;
            bottom: -12px;
            right: -12px;
            width: 80px;
            height: 80px;
            border-right: 3px solid rgba(77, 142, 240, 0.5);
            border-bottom: 3px solid rgba(77, 142, 240, 0.5);
            border-radius: 0 0 16px 0;
            z-index: 10;
        }

        /* ─── Content Column ─── */
        .svc-panel-content-col {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .svc-cat-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: #4d8ef0;
            margin-bottom: 16px;
        }

        .svc-cat-label::before {
            content: '';
            display: block;
            width: 24px;
            height: 2px;
            background: #4d8ef0;
            border-radius: 2px;
        }

        .svc-card-title {
            font-size: clamp(24px, 3vw, 36px);
            font-weight: 900;
            color: #ffffff;
            line-height: 1.1;
            letter-spacing: -0.02em;
            margin-bottom: 28px;
        }

        /* ─── Accordion-style feature tabs ─── */
        .svc-accord {
            display: flex;
            flex-direction: column;
            gap: 8px;
            overflow-anchor: none;
        }

        .svc-accord-item {
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 14px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            transition: border-color 0.3s ease, background 0.3s ease;
            cursor: pointer;
        }

        .svc-accord-item:hover {
            border-color: rgba(77, 142, 240, 0.3);
            background: rgba(77, 142, 240, 0.05);
        }

        .svc-accord-item.open {
            border-color: rgba(77, 142, 240, 0.4);
            background: rgba(77, 142, 240, 0.07);
        }

        .svc-accord-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 18px;
            gap: 12px;
            user-select: none;
        }

        .svc-accord-icon {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: linear-gradient(135deg, rgba(27, 79, 168, 0.3) 0%, rgba(77, 142, 240, 0.2) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .svc-accord-icon i {
            color: #4d8ef0;
            font-size: 13px;
        }

        .svc-accord-title {
            flex: 1;
            font-size: 12px;
            font-weight: 700;
            color: #e0e8ff;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin: 0;
        }

        .svc-accord-arrow {
            color: rgba(255, 255, 255, 0.3);
            font-size: 11px;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .svc-accord-item.open .svc-accord-arrow {
            transform: rotate(180deg);
            color: #4d8ef0;
        }

        .svc-accord-body {
            height: 0;
            overflow: hidden;
            transition: height 420ms cubic-bezier(0.4, 0, 0.2, 1);
            will-change: height;
        }

        .svc-accord-body-inner {
            padding: 0 18px 16px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6px 12px;
        }

        .svc-feat-item {
            display: flex;
            align-items: flex-start;
            gap: 7px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
            font-weight: 500;
            line-height: 1.4;
        }

        .svc-feat-item i {
            color: #4d8ef0;
            font-size: 9px;
            margin-top: 3px;
            flex-shrink: 0;
        }

        /* ─── Scroll Hint Strip ─── */
        .svc-scroll-hint {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            opacity: 0.5;
        }

        .svc-scroll-hint span {
            font-size: 10px;
            color: #fff;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .svc-scroll-line {
            width: 1px;
            height: 40px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.6), transparent);
            animation: scrollPulse 1.8s ease-in-out infinite;
        }

        @keyframes scrollPulse {

            0%,
            100% {
                opacity: 0.3;
                transform: scaleY(1);
            }

            50% {
                opacity: 1;
                transform: scaleY(1.3);
            }
        }

        /* ─── Responsive ─── */
        @media (max-width: 991px) {
            .svc-panel-inner {
                grid-template-columns: 1fr;
                gap: 32px;
                padding: 60px 20px;
            }

            .svc-panel:nth-child(even) .svc-panel-img-col,
            .svc-panel:nth-child(even) .svc-panel-content-col {
                order: unset;
            }

            .svc-accord-body-inner {
                grid-template-columns: 1fr;
            }

            .svc-panel {
                min-height: auto;
                padding: 20px 0;
            }

        }

        @media (max-width: 575px) {
            .svc-card-title {
                font-size: 22px;
            }

            .svc-panel-inner {
                padding: 40px 16px;
            }
        }

        /* ─── Services details area wrapper ─── */
        /* DESIGN & MANUFACTURING - FULL-SCREEN HERO */
        .dm-hero {
            --dm-mouse-x: 50%;
            --dm-mouse-y: 50%;
            --dm-shift-x: 0px;
            --dm-shift-y: 0px;
            position: relative;
            isolation: isolate;
            min-height: var(--dm-hero-height, 100svh);
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #061225;
            color: #ffffff;
        }

        .dm-hero-bg,
        .dm-hero-shade,
        .dm-hero-grid,
        .dm-hero-glow {
            position: absolute;
            inset: 0;
            pointer-events: none;
        }

        .dm-hero-bg {
            z-index: -5;
            inset: -3%;
            background: url('assets/img/services/3.png') center 52% / cover no-repeat;
            transform: translate3d(var(--dm-shift-x), var(--dm-shift-y), 0) scale(1.06);
            will-change: transform;
        }

        .dm-hero-shade {
            z-index: -4;
            background:
                linear-gradient(90deg, rgba(4, 13, 29, 0.96) 0%, rgba(5, 20, 43, 0.88) 48%, rgba(10, 38, 82, 0.58) 100%),
                linear-gradient(180deg, rgba(3, 11, 25, 0.15) 0%, rgba(3, 11, 25, 0.76) 100%);
        }

        .dm-hero-grid {
            z-index: -3;
            opacity: 0.34;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.055) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.055) 1px, transparent 1px);
            background-size: 72px 72px;
            -webkit-mask-image: linear-gradient(90deg, #000 0%, rgba(0, 0, 0, 0.55) 65%, transparent 100%);
            mask-image: linear-gradient(90deg, #000 0%, rgba(0, 0, 0, 0.55) 65%, transparent 100%);
        }

        .dm-hero-glow {
            z-index: -2;
            opacity: 0;
            background: radial-gradient(circle 280px at var(--dm-mouse-x) var(--dm-mouse-y), rgba(65, 143, 255, 0.25), rgba(65, 143, 255, 0.06) 42%, transparent 72%);
            transition: opacity 280ms ease;
        }

        .dm-hero.is-pointer-active .dm-hero-glow {
            opacity: 1;
        }

        .dm-hero::before,
        .dm-hero::after {
            content: '';
            position: absolute;
            pointer-events: none;
        }

        .dm-hero::before {
            z-index: -1;
            left: clamp(20px, 6vw, 90px);
            top: 0;
            bottom: 0;
            width: 1px;
            background: linear-gradient(180deg, transparent, rgba(77, 142, 240, 0.55) 28%, rgba(77, 142, 240, 0.18) 78%, transparent);
        }

        .dm-hero::after {
            z-index: 4;
            left: 0;
            right: 0;
            bottom: 0;
            height: 4px;
            background: linear-gradient(90deg, #1b4fa8 0%, #58a0ff 32%, rgba(88, 160, 255, 0.08) 75%, transparent 100%);
        }

        .dm-hero-inner {
            width: min(100% - 48px, 1240px);
            margin: 0 auto;
            padding: clamp(44px, 7vh, 80px) 0;
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .dm-hero-copy {
            max-width: 980px;
        }

        .dm-hero-kicker {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 0 0 16px;
            color: #8fbdff;
            font-size: 11px;
            line-height: 1;
            font-weight: 800;
            letter-spacing: 0.24em;
            text-transform: uppercase;
        }

        .dm-hero-kicker::before {
            content: '';
            width: 42px;
            height: 2px;
            background: #5b9dff;
            box-shadow: 0 0 18px rgba(91, 157, 255, 0.8);
        }

        .dm-hero h1 {
            max-width: 1000px;
            margin: 0;
            color: #ffffff;
            font-size: clamp(38px, 4.55vw, 68px);
            line-height: 0.98;
            font-weight: 900;
            letter-spacing: -0.045em;
            text-wrap: balance;
            text-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
        }

        .dm-hero h1 span {
            color: #80b5ff;
        }

        .dm-hero-summary {
            max-width: 720px;
            margin: 22px 0 0;
            color: rgba(236, 244, 255, 0.74);
            font-size: clamp(14px, 1.15vw, 17px);
            line-height: 1.65;
            font-weight: 500;
        }

        .dm-hero-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px 28px;
            margin-top: 28px;
        }

        .dm-hero-cta {
            min-height: 48px;
            display: inline-flex;
            align-items: center;
            gap: 16px;
            padding: 12px 18px 12px 22px;
            border: 1px solid rgba(139, 189, 255, 0.52);
            background: rgba(20, 71, 145, 0.28);
            color: #ffffff;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.17em;
            text-transform: uppercase;
            text-decoration: none;
            transition: background 220ms ease, border-color 220ms ease, box-shadow 220ms ease;
            backdrop-filter: blur(10px);
        }

        .dm-hero-cta:hover,
        .dm-hero-cta:focus-visible {
            color: #ffffff;
            background: rgba(42, 108, 205, 0.56);
            border-color: #9ec7ff;
            box-shadow: 0 12px 34px rgba(3, 17, 39, 0.35);
        }

        .dm-hero-cta i {
            font-size: 13px;
        }

        .dm-hero-tags {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
        }

        .dm-hero-tags span {
            padding: 7px 10px;
            border-left: 2px solid rgba(105, 167, 255, 0.72);
            background: rgba(255, 255, 255, 0.045);
            color: rgba(233, 243, 255, 0.72);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .dm-hero-cursor {
            position: absolute;
            z-index: 5;
            left: 0;
            top: 0;
            width: 42px;
            height: 42px;
            border: 1px solid rgba(167, 205, 255, 0.82);
            border-radius: 50%;
            opacity: 0;
            transform: translate3d(calc(var(--dm-mouse-x) - 50%), calc(var(--dm-mouse-y) - 50%), 0);
            transition: width 180ms ease, height 180ms ease, opacity 180ms ease, border-color 180ms ease;
            pointer-events: none;
            box-shadow: 0 0 24px rgba(78, 147, 248, 0.22), inset 0 0 16px rgba(78, 147, 248, 0.1);
        }

        .dm-hero-cursor::before,
        .dm-hero-cursor::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            background: #b7d6ff;
            transform: translate(-50%, -50%);
        }

        .dm-hero-cursor::before {
            width: 7px;
            height: 1px;
        }

        .dm-hero-cursor::after {
            width: 1px;
            height: 7px;
        }

        .dm-hero.is-pointer-active .dm-hero-cursor {
            opacity: 1;
        }

        .dm-hero.is-over-action .dm-hero-cursor {
            width: 58px;
            height: 58px;
            border-color: #ffffff;
        }

        @media (hover: hover) and (pointer: fine) {

            .dm-hero.dm-cursor-ready,
            .dm-hero.dm-cursor-ready a {
                cursor: none;
            }
        }

        @media (max-width: 991px) {
            .dm-hero {
                min-height: var(--dm-hero-height, calc(100svh - 80px));
            }

            .dm-hero-inner {
                grid-template-columns: 1fr;
                width: min(100% - 40px, 720px);
            }

            .dm-hero h1 {
                font-size: clamp(38px, 8vw, 60px);
            }
        }

        @media (max-width: 575px) {
            .dm-hero-inner {
                width: min(100% - 32px, 540px);
                padding: 48px 0;
            }

            .dm-hero h1 {
                font-size: clamp(34px, 10.5vw, 48px);
                line-height: 1.02;
            }

            .dm-hero-summary {
                margin-top: 18px;
            }

            .dm-hero-actions {
                align-items: flex-start;
                flex-direction: column;
                margin-top: 24px;
            }

            .dm-hero-tags {
                gap: 6px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .dm-hero-bg,
            .dm-hero-cta,
            .dm-hero-glow,
            .dm-hero-cursor {
                transition: none !important;
                transform: none !important;
            }

            .dm-hero-cursor,
            .dm-hero-glow {
                display: none;
            }
        }

        /* Full-page sticky stacking system */
        :root {
            --page-stack-top: 80px;
        }

        .page-stack-layer {
            --page-stack-scale: 1;
            --page-stack-brightness: 1;
            --stack-mouse-x: 50%;
            --stack-mouse-y: 50%;
            --stack-shift-x: 0px;
            --stack-shift-y: 0px;
        }

        .stack-pointer-glow,
        .stack-pointer-cursor {
            position: absolute;
            pointer-events: none;
        }

        .stack-pointer-glow {
            z-index: 4;
            inset: 0;
            opacity: 0;
            background: radial-gradient(circle 280px at var(--stack-mouse-x) var(--stack-mouse-y), rgba(65, 143, 255, 0.24), rgba(65, 143, 255, 0.055) 43%, transparent 72%);
            transition: opacity 280ms ease;
        }

        .stack-pointer-cursor {
            z-index: 1001;
            left: 0;
            top: 0;
            width: 42px;
            height: 42px;
            border: 1px solid rgba(167, 205, 255, 0.82);
            border-radius: 50%;
            opacity: 0;
            transform: translate3d(calc(var(--stack-mouse-x) - 50%), calc(var(--stack-mouse-y) - 50%), 0);
            transition: width 180ms ease, height 180ms ease, opacity 180ms ease, border-color 180ms ease;
            box-shadow: 0 0 24px rgba(78, 147, 248, 0.22), inset 0 0 16px rgba(78, 147, 248, 0.1);
        }

        .stack-pointer-cursor::before,
        .stack-pointer-cursor::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            background: #b7d6ff;
            transform: translate(-50%, -50%);
        }

        .stack-pointer-cursor::before {
            width: 7px;
            height: 1px;
        }

        .stack-pointer-cursor::after {
            width: 1px;
            height: 7px;
        }

        .page-stack-layer.is-pointer-active .stack-pointer-glow,
        .page-stack-layer.is-pointer-active .stack-pointer-cursor {
            opacity: 1;
        }

        .page-stack-layer.is-over-action .stack-pointer-cursor {
            width: 58px;
            height: 58px;
            border-color: #ffffff;
        }

        .page-stack-layer.is-over-field .stack-pointer-cursor {
            opacity: 0;
        }

        .svc-panel.stack-pointer-ready .svc-panel-bg {
            transform: translate3d(var(--stack-shift-x), var(--stack-shift-y), 0) scale(1.025);
            will-change: transform;
        }

        footer.stack-pointer-ready {
            overflow: hidden;
        }

        footer.stack-pointer-ready>.footer-top,
        footer.stack-pointer-ready>.container {
            position: relative;
            z-index: 5;
        }

        @media (hover: hover) and (pointer: fine) {

            .page-stack-layer.stack-pointer-ready,
            .page-stack-layer.stack-pointer-ready a,
            .page-stack-layer.stack-pointer-ready button {
                cursor: none;
            }

            .page-stack-layer.stack-pointer-ready input,
            .page-stack-layer.stack-pointer-ready textarea {
                cursor: text;
            }

            .page-stack-layer.stack-pointer-ready select {
                cursor: default;
            }
        }

        @media (min-width: 992px) {

            .services-details-area,
            .svc-stack-wrap {
                overflow: visible !important;
            }

            .page-stack-layer {
                position: sticky !important;
                top: var(--page-stack-top);
                min-height: calc(100svh - var(--page-stack-top));
                transform: translateZ(0) scale(var(--page-stack-scale));
                transform-origin: center top;
                filter: brightness(var(--page-stack-brightness));
                will-change: transform, filter;
                backface-visibility: hidden;
                box-shadow: 0 -18px 54px rgba(1, 7, 18, 0.34);
            }

            .dm-hero.page-stack-layer {
                top: 0 !important;
                height: 100svh !important;
                min-height: 100svh !important;
                margin: 0 !important;
            }

            .svc-panel.page-stack-layer {
                min-height: calc(100svh - var(--page-stack-top));
            }

            .svc-panel.page-stack-layer .svc-panel-inner {
                padding: clamp(28px, 5vh, 48px) 40px;
            }

            footer.page-stack-layer {
                background: #06101f;
                isolation: isolate;
            }

            .page-stack-layer::after {
                box-shadow: inset 0 1px 0 rgba(120, 176, 255, 0.12);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .page-stack-layer {
                --page-stack-scale: 1 !important;
                --page-stack-brightness: 1 !important;
                transform: none !important;
                filter: none !important;
                will-change: auto;
            }

            .stack-pointer-glow,
            .stack-pointer-cursor {
                display: none !important;
            }
        }

        .services-details-area {
            background: #06090f;
            padding: 0 !important;
        }
    </style>
@endpush

@section('content')
    <!-- Start Design & Manufacturing Hero ============================ -->
    <section class="dm-hero" id="dmHero" aria-labelledby="dmHeroTitle">
        <div class="dm-hero-bg" aria-hidden="true"></div>
        <div class="dm-hero-shade" aria-hidden="true"></div>
        <div class="dm-hero-grid" aria-hidden="true"></div>
        <div class="dm-hero-glow" aria-hidden="true"></div>

        <div class="dm-hero-inner">
            <div class="dm-hero-copy">
                <p class="dm-hero-kicker">Engineering / Fabrication / Delivery</p>
                <h1 id="dmHeroTitle">Design &amp; Manufacturing for <span>Steel Structures, Piping &amp; Process
                        Equipment</span></h1>
                <p class="dm-hero-summary">Integrated industrial solutions&mdash;from detailed engineering and precision
                    fabrication to quality-controlled delivery for complex energy and infrastructure projects.</p>
                <div class="dm-hero-actions">
                    <a class="dm-hero-cta" href="#sc-section">
                        Explore capabilities <i class="fas fa-arrow-down" aria-hidden="true"></i>
                    </a>
                    <div class="dm-hero-tags" aria-label="Core capabilities">
                        <span>Steel</span>
                        <span>Piping</span>
                        <span>Process Equipment</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="dm-hero-cursor" aria-hidden="true"></div>
    </section>
    <!-- End Design & Manufacturing Hero -->

    <!-- Start Services Details ============================================= -->
    <div class="services-details-area" id="sc-section">

        <!-- Stacking Panels Wrapper -->
        <div class="svc-stack-wrap" id="svcStackWrap">


            <!-- ═══ PANEL 1: Steel Structure Design ═══ -->
            <div class="svc-panel" id="svc-panel-0" data-panel-index="0">
                <div class="svc-panel-bg">
                    <div class="svc-panel-bg-img" style="background-image: url('assets/img/services/11.png');">
                    </div>
                    <div class="svc-panel-bg-overlay"></div>
                </div>
                <div class="svc-panel-inner">
                    <div class="svc-panel-img-col">
                        <div class="svc-img-frame">
                            <img src="assets/img/services/11.png" alt="Steel Structure Design">
                            <div class="svc-img-corner"></div>
                        </div>
                    </div>
                    <div class="svc-panel-content-col">
                        <div class="svc-cat-label">Design &amp; Manufacturing</div>
                        <h3 class="svc-card-title">Steel Structure<br>Design</h3>
                        <div class="svc-accord">
                            <div class="svc-accord-item open">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-drafting-compass"></i></div>
                                    <span class="svc-accord-title">Engineering &amp; Design</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Structural analysis
                                            &amp; calculations</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Load calculations
                                            (Dead, Live, Wind, Seismic)</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Connection design</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Foundation load
                                            analysis</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> STAAD Pro / ETABS
                                            modeling</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Tekla / Advance Steel
                                            modeling</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> General arrangement
                                            (GA) drawings</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Shop drawings
                                            preparation</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Material take-off
                                            (MTO)</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Bill of Materials
                                            (BOM)</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Design code compliance
                                            (AISC, IS, BS, Eurocode)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-microchip"></i></div>
                                    <span class="svc-accord-title">Detailing</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Fabrication detailing
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Bolt and weld detailing
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Erection drawings</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Assembly drawings</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> CNC data generation
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Nesting optimization
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="svc-scroll-hint"><span>Scroll</span>
                    <div class="svc-scroll-line"></div>
                </div>
            </div>

            <!-- ═══ PANEL 2: Steel Structure Manufacturing ═══ -->
            <div class="svc-panel" id="svc-panel-1" data-panel-index="1">
                <div class="svc-panel-bg">
                    <div class="svc-panel-bg-img" style="background-image: url('assets/img/services/12.png');">
                    </div>
                    <div class="svc-panel-bg-overlay"></div>
                </div>
                <div class="svc-panel-inner">
                    <div class="svc-panel-img-col">
                        <div class="svc-img-frame">
                            <img src="assets/img/services/12.png" alt="Steel Structure Manufacturing">
                            <div class="svc-img-corner"></div>
                        </div>
                    </div>
                    <div class="svc-panel-content-col">
                        <div class="svc-cat-label">Design &amp; Manufacturing</div>
                        <h3 class="svc-card-title">Steel Structure<br>Manufacturing</h3>
                        <div class="svc-accord">
                            <div class="svc-accord-item open">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-boxes"></i></div>
                                    <span class="svc-accord-title">Material Handling</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Raw material inspection
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Plate and section
                                            identification</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Material traceability
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Storage and
                                            preservation</div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-industry"></i></div>
                                    <span class="svc-accord-title">Fabrication</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Cutting (CNC, plasma,
                                            oxy-fuel)</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Drilling and punching
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Rolling and bending
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Fit-up and assembly
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Welding (SMAW, GTAW,
                                            GMAW, SAW)</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Grinding and finishing
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-spray-can"></i></div>
                                    <span class="svc-accord-title">Surface Preparation &amp; Painting</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Cutting (CNC, plasma,
                                            oxy-fuel)</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Drilling and punching</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Rolling and bending</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Fit-up and assembly</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Welding (SMAW, GTAW,
                                            GMAW, SAW)</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Grinding and finishing</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Dimensional inspection</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ═══ PANEL 3: Quality Control &amp; Erection ═══ -->
            <div class="svc-panel" id="svc-panel-2" data-panel-index="2">
                <div class="svc-panel-bg">
                    <div class="svc-panel-bg-img" style="background-image: url('assets/img/services/13.png');">
                    </div>
                    <div class="svc-panel-bg-overlay"></div>
                </div>
                <div class="svc-panel-inner">
                    <div class="svc-panel-img-col">
                        <div class="svc-img-frame">
                            <img src="assets/img/services/13.png" alt="Quality Control and Erection">
                            <div class="svc-img-corner"></div>
                        </div>
                    </div>
                    <div class="svc-panel-content-col">
                        <div class="svc-cat-label">Design &amp; Manufacturing</div>
                        <h3 class="svc-card-title">Quality Control<br>&amp; Erection</h3>
                        <div class="svc-accord">
                            <div class="svc-accord-item open">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-check-circle"></i></div>
                                    <span class="svc-accord-title">Quality Control</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Visual inspection</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> NDT inspection (UT, RT,
                                            PT, MT)</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Weld inspection</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Dimensional checks
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Material testing</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Final inspection and
                                            release</div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-building"></i></div>
                                    <span class="svc-accord-title">Erection</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Structural erection
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Alignment and leveling
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Bolt tightening</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Site welding</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Crane lifting
                                            operations</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Final structural
                                            inspection</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ═══ PANEL 4: Piping Design ═══ -->
            <div class="svc-panel" id="svc-panel-3" data-panel-index="3">
                <div class="svc-panel-bg">
                    <div class="svc-panel-bg-img" style="background-image: url('assets/img/services/14.png');">
                    </div>
                    <div class="svc-panel-bg-overlay"></div>
                </div>
                <div class="svc-panel-inner">
                    <div class="svc-panel-img-col">
                        <div class="svc-img-frame">
                            <img src="assets/img/services/14.png" alt="Piping Design">
                            <div class="svc-img-corner"></div>
                        </div>
                    </div>
                    <div class="svc-panel-content-col">
                        <div class="svc-cat-label">Design &amp; Manufacturing</div>
                        <h3 class="svc-card-title">Piping<br>Design</h3>
                        <div class="svc-accord">
                            <div class="svc-accord-item open">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-drafting-compass"></i></div>
                                    <span class="svc-accord-title">Engineering</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> PFD and P&amp;ID
                                            preparation</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Pipe sizing
                                            calculations</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Stress analysis</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Pipe routing</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Isometric drawing
                                            preparation</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> 3D modeling using PDMS /
                                            SP3D / E3D</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Support design</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Material specification</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Valve selection</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Line list preparation
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-file-alt"></i></div>
                                    <span class="svc-accord-title">Drafting &amp; Documentation</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> GA drawings</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Fabrication isometrics
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> As-built drawings</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Pipe support drawings
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> MTO generation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ═══ PANEL 5: Piping Manufacturing ═══ -->
            <div class="svc-panel" id="svc-panel-4" data-panel-index="4">
                <div class="svc-panel-bg">
                    <div class="svc-panel-bg-img" style="background-image: url('assets/img/services/15.png');">
                    </div>
                    <div class="svc-panel-bg-overlay"></div>
                </div>
                <div class="svc-panel-inner">
                    <div class="svc-panel-img-col">
                        <div class="svc-img-frame">
                            <img src="assets/img/services/15.png" alt="Piping Manufacturing">
                            <div class="svc-img-corner"></div>
                        </div>
                    </div>
                    <div class="svc-panel-content-col">
                        <div class="svc-cat-label">Design &amp; Manufacturing</div>
                        <h3 class="svc-card-title">Piping Manufacturing<br>&amp; Fabrication</h3>
                        <div class="svc-accord">
                            <div class="svc-accord-item open">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-wrench"></i></div>
                                    <span class="svc-accord-title">Pipe Fabrication</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Pipe cutting and
                                            beveling</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Pipe fit-up</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Welding</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Spool fabrication</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Flange alignment</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Branch connection
                                            fabrication</div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-microscope"></i></div>
                                    <span class="svc-accord-title">Inspection &amp; Testing</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Hydrotesting</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Pneumatic testing</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> PMI testing</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> NDT inspection</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Weld mapping</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Dimensional inspection
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-tools"></i></div>
                                    <span class="svc-accord-title">Installation</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Pipe rack installation
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Spool erection</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Valve installation
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Support installation
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Tie-in activities</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Stress relieving (PWHT)
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Flushing and cleaning</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ═══ PANEL 6: Process Equipment Design ═══ -->
            <div class="svc-panel" id="svc-panel-5" data-panel-index="5">
                <div class="svc-panel-bg">
                    <div class="svc-panel-bg-img" style="background-image: url('assets/img/services/6.png');"></div>
                    <div class="svc-panel-bg-overlay"></div>
                </div>
                <div class="svc-panel-inner">
                    <div class="svc-panel-img-col">
                        <div class="svc-img-frame">
                            <img src="assets/img/services/6.png" alt="Process Equipment Design">
                            <div class="svc-img-corner"></div>
                        </div>
                    </div>
                    <div class="svc-panel-content-col">
                        <div class="svc-cat-label">Design &amp; Manufacturing</div>
                        <h3 class="svc-card-title">Process Equipment<br>Design</h3>
                        <div class="svc-accord">
                            <div class="svc-accord-item open">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-cog"></i></div>
                                    <span class="svc-accord-title">Equipment Engineering</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Pressure vessel design
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Reactor design</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Column and separator
                                            design</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Mechanical design
                                            calculations</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Heat exchanger design
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Tank design</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Thermal calculations</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> ASME code compliance
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-laptop-code"></i></div>
                                    <span class="svc-accord-title">Design Software</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> PV Elite</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> HTRI</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> AutoCAD</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Compress</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Aspen HYSYS</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> SolidWorks</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ═══ PANEL 7: Process Equipment Manufacturing ═══ -->
            <div class="svc-panel" id="svc-panel-6" data-panel-index="6">
                <div class="svc-panel-bg">
                    <div class="svc-panel-bg-img" style="background-image: url('assets/img/services/9.png');"></div>
                    <div class="svc-panel-bg-overlay"></div>
                </div>
                <div class="svc-panel-inner">
                    <div class="svc-panel-img-col">
                        <div class="svc-img-frame">
                            <img src="assets/img/services/9.png" alt="Process Equipment Manufacturing">
                            <div class="svc-img-corner"></div>
                        </div>
                    </div>
                    <div class="svc-panel-content-col">
                        <div class="svc-cat-label">Design &amp; Manufacturing</div>
                        <h3 class="svc-card-title">Process Equipment<br>Manufacturing</h3>
                        <div class="svc-accord">
                            <div class="svc-accord-item open">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-hammer"></i></div>
                                    <span class="svc-accord-title">Equipment Manufacturing</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Plate rolling</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Nozzle fit-up</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Tube bundle fabrication
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Welding and cladding
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Shell fabrication</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Dish end forming</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Internal assembly</div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-fire"></i></div>
                                    <span class="svc-accord-title">Heat Treatment &amp; Testing</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> PWHT</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Hydrotest</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Pneumatic test</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Vacuum box test</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Helium leak test</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> NDT inspection</div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-spray-can"></i></div>
                                    <span class="svc-accord-title">Surface Treatment</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Internal coating</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> External painting</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Rubber lining</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Insulation preparation</div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-clipboard-check"></i></div>
                                    <span class="svc-accord-title">Quality Assurance &amp; Documentation</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> WPS/PQR qualification
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Welder qualification
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> ITP preparation</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Material certificates
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Inspection reports
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> FAT documentation</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> MDR preparation</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Client and third-party
                                            inspection</div>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-accord-item">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-book"></i></div>
                                    <span class="svc-accord-title">Common Codes &amp; Standards</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> ASME</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> API</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> ASTM</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> ANSI</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> AWS</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> AISC</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> BS / EN / IS Codes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ═══ PANEL 8: Packing, Dispatch & Site Support ═══ -->
            <div class="svc-panel" id="svc-panel-7" data-panel-index="7">
                <div class="svc-panel-bg">
                    <div class="svc-panel-bg-img" style="background-image: url('assets/img/services/10.png');"></div>
                    <div class="svc-panel-bg-overlay"></div>
                </div>
                <div class="svc-panel-inner">
                    <div class="svc-panel-img-col">
                        <div class="svc-img-frame">
                            <img src="assets/img/services/10.png" alt="Packing Dispatch and Site Support">
                            <div class="svc-img-corner"></div>
                        </div>
                    </div>
                    <div class="svc-panel-content-col">
                        <div class="svc-cat-label">Design &amp; Manufacturing</div>
                        <h3 class="svc-card-title">Packing, Dispatch<br>&amp; Site Support</h3>
                        <div class="svc-accord">
                            <div class="svc-accord-item open">
                                <div class="svc-accord-header">
                                    <div class="svc-accord-icon"><i class="fas fa-shipping-fast"></i></div>
                                    <span class="svc-accord-title">Packing, Dispatch &amp; Site Support</span>
                                    <i class="fas fa-chevron-down svc-accord-arrow"></i>
                                </div>
                                <div class="svc-accord-body">
                                    <div class="svc-accord-body-inner">
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Equipment preservation
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Packing and shipping
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Transportation planning
                                        </div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Site installation
                                            support</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Commissioning
                                            assistance</div>
                                        <div class="svc-feat-item"><i class="fas fa-circle"></i> Punch point closure
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.svc-stack-wrap -->
    </div>
    <!-- End Services Details -->

    <!-- Start Footer 
        ============================================= -->
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const hero = document.getElementById("dmHero");
            if (!hero) return;

            const navbar = document.querySelector("nav.navbar");
            const stackLayers = [hero].filter(Boolean);

            stackLayers.forEach(function (layer, index) {
                layer.classList.add("page-stack-layer");
                layer.style.zIndex = String(10 + index);
            });

            const fitHeroToViewport = () => {
                const desktopStack = window.matchMedia("(min-width: 992px)").matches;
                const navbarHeight = navbar ? Math.round(navbar.getBoundingClientRect().height) : 0;
                const stackOffset = Math.max(navbarHeight, desktopStack ? 70 : 0);
                const availableHeight = window.innerHeight - hero.offsetTop;

                document.documentElement.style.setProperty("--page-stack-top", stackOffset + "px");
                document.documentElement.style.setProperty("--service-stack-top", stackOffset + "px");

                if (desktopStack) {
                    hero.style.removeProperty("--dm-hero-height");
                } else {
                    hero.style.setProperty("--dm-hero-height", Math.max(420, availableHeight) + "px");
                }
            };

            fitHeroToViewport();
            window.addEventListener("resize", fitHeroToViewport, { passive: true });
            window.addEventListener("load", function () {
                fitHeroToViewport();
                if (window.ScrollTrigger) window.ScrollTrigger.refresh();
            }, { once: true });

            if (navbar && window.ResizeObserver) {
                new ResizeObserver(fitHeroToViewport).observe(navbar);
            }

            const finePointer = window.matchMedia("(hover: hover) and (pointer: fine)").matches;
            const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
            if (!finePointer || reduceMotion) return;

            hero.classList.add("dm-cursor-ready");

            let targetX = hero.clientWidth / 2;
            let targetY = hero.clientHeight / 2;
            let currentX = targetX;
            let currentY = targetY;
            let animationFrame = null;

            const renderPointer = () => {
                currentX += (targetX - currentX) * 0.2;
                currentY += (targetY - currentY) * 0.2;

                const normalizedX = (currentX / hero.clientWidth - 0.5) * 2;
                const normalizedY = (currentY / hero.clientHeight - 0.5) * 2;

                hero.style.setProperty("--dm-mouse-x", currentX + "px");
                hero.style.setProperty("--dm-mouse-y", currentY + "px");
                hero.style.setProperty("--dm-shift-x", normalizedX * -9 + "px");
                hero.style.setProperty("--dm-shift-y", normalizedY * -6 + "px");

                if (Math.abs(targetX - currentX) > 0.1 || Math.abs(targetY - currentY) > 0.1) {
                    animationFrame = requestAnimationFrame(renderPointer);
                } else {
                    animationFrame = null;
                }
            };

            const queuePointerRender = () => {
                if (!animationFrame) animationFrame = requestAnimationFrame(renderPointer);
            };

            hero.addEventListener("pointerenter", function () {
                hero.classList.add("is-pointer-active");
            });

            hero.addEventListener("pointermove", function (event) {
                const bounds = hero.getBoundingClientRect();
                targetX = event.clientX - bounds.left;
                targetY = event.clientY - bounds.top;
                queuePointerRender();
            });

            hero.addEventListener("pointerleave", function () {
                hero.classList.remove("is-pointer-active", "is-over-action");
                targetX = hero.clientWidth / 2;
                targetY = hero.clientHeight / 2;
                queuePointerRender();
            });

            hero.querySelectorAll("a").forEach(function (link) {
                link.addEventListener("pointerenter", function () {
                    hero.classList.add("is-over-action");
                });
                link.addEventListener("pointerleave", function () {
                    hero.classList.remove("is-over-action");
                });
            });

            // Apply the same pointer treatment to every service layer and the footer.
            stackLayers.slice(1).forEach(function (layer) {
                const glow = document.createElement("div");
                const cursor = document.createElement("div");
                glow.className = "stack-pointer-glow";
                cursor.className = "stack-pointer-cursor";
                glow.setAttribute("aria-hidden", "true");
                cursor.setAttribute("aria-hidden", "true");
                layer.appendChild(glow);
                layer.appendChild(cursor);
                layer.classList.add("stack-pointer-ready");

                let layerTargetX = layer.clientWidth / 2;
                let layerTargetY = layer.clientHeight / 2;
                let layerCurrentX = layerTargetX;
                let layerCurrentY = layerTargetY;
                let layerFrame = null;

                const renderLayerPointer = function () {
                    layerCurrentX += (layerTargetX - layerCurrentX) * 0.2;
                    layerCurrentY += (layerTargetY - layerCurrentY) * 0.2;

                    const normalizedX = (layerCurrentX / layer.clientWidth - 0.5) * 2;
                    const normalizedY = (layerCurrentY / layer.clientHeight - 0.5) * 2;

                    layer.style.setProperty("--stack-mouse-x", layerCurrentX + "px");
                    layer.style.setProperty("--stack-mouse-y", layerCurrentY + "px");
                    layer.style.setProperty("--stack-shift-x", normalizedX * -8 + "px");
                    layer.style.setProperty("--stack-shift-y", normalizedY * -5 + "px");

                    if (Math.abs(layerTargetX - layerCurrentX) > 0.1 ||
                        Math.abs(layerTargetY - layerCurrentY) > 0.1) {
                        layerFrame = requestAnimationFrame(renderLayerPointer);
                    } else {
                        layerFrame = null;
                    }
                };

                const queueLayerPointer = function () {
                    if (!layerFrame) layerFrame = requestAnimationFrame(renderLayerPointer);
                };

                layer.addEventListener("pointerenter", function () {
                    layer.classList.add("is-pointer-active");
                });

                layer.addEventListener("pointermove", function (event) {
                    const bounds = layer.getBoundingClientRect();
                    layerTargetX = event.clientX - bounds.left;
                    layerTargetY = event.clientY - bounds.top;
                    queueLayerPointer();
                });

                layer.addEventListener("pointerleave", function () {
                    layer.classList.remove("is-pointer-active", "is-over-action", "is-over-field");
                    layerTargetX = layer.clientWidth / 2;
                    layerTargetY = layer.clientHeight / 2;
                    queueLayerPointer();
                });

                layer.querySelectorAll("a, button, .svc-accord-header").forEach(function (control) {
                    control.addEventListener("pointerenter", function () {
                        layer.classList.add("is-over-action");
                    });
                    control.addEventListener("pointerleave", function () {
                        layer.classList.remove("is-over-action");
                    });
                });

                layer.querySelectorAll("input, textarea, select").forEach(function (field) {
                    field.addEventListener("pointerenter", function () {
                        layer.classList.add("is-over-field");
                    });
                    field.addEventListener("pointerleave", function () {
                        layer.classList.remove("is-over-field");
                    });
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            if (document.body.classList.contains("design-manufacturing-page") ||
                !window.gsap || !window.ScrollTrigger) return;

            gsap.registerPlugin(ScrollTrigger);

            const panels = document.querySelectorAll(".svc-panel");

            // ─── Accordion Toggle ───────────────────────────
            const reduceAccordionMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

            document.querySelectorAll(".svc-accord").forEach((accord, accordIndex) => {
                const items = Array.from(accord.querySelectorAll(".svc-accord-item"));

                items.forEach((item, itemIndex) => {
                    const header = item.querySelector(".svc-accord-header");
                    const body = item.querySelector(".svc-accord-body");
                    const bodyId = `svc-accord-${accordIndex}-${itemIndex}`;

                    body.id = bodyId;
                    body.style.height = item.classList.contains("open") ? "auto" : "0px";
                    header.setAttribute("role", "button");
                    header.setAttribute("tabindex", "0");
                    header.setAttribute("aria-controls", bodyId);
                    header.setAttribute("aria-expanded", item.classList.contains("open") ? "true" : "false");

                    body.addEventListener("transitionend", function (event) {
                        if (event.propertyName === "height" && item.classList.contains("open")) {
                            body.style.height = "auto";
                        }
                    });

                    const toggleItem = function () {
                        const shouldOpen = !item.classList.contains("open");

                        items.forEach(currentItem => {
                            const currentBody = currentItem.querySelector(".svc-accord-body");
                            currentBody.style.height = `${currentBody.getBoundingClientRect().height}px`;
                        });
                        accord.getBoundingClientRect();

                        items.forEach(currentItem => {
                            const isTarget = currentItem === item && shouldOpen;
                            const currentHeader = currentItem.querySelector(".svc-accord-header");
                            currentItem.classList.toggle("open", isTarget);
                            currentHeader.setAttribute("aria-expanded", isTarget ? "true" : "false");
                        });

                        if (reduceAccordionMotion) {
                            items.forEach(currentItem => {
                                const currentBody = currentItem.querySelector(".svc-accord-body");
                                currentBody.style.transition = "none";
                                currentBody.style.height = currentItem.classList.contains("open") ? "auto" : "0px";
                            });
                            return;
                        }

                        requestAnimationFrame(() => {
                            items.forEach(currentItem => {
                                const currentBody = currentItem.querySelector(".svc-accord-body");
                                currentBody.style.height = currentItem.classList.contains("open")
                                    ? `${currentBody.scrollHeight}px`
                                    : "0px";
                            });
                        });

                    };

                    header.addEventListener("click", toggleItem);
                    header.addEventListener("keydown", function (event) {
                        if (event.key === "Enter" || event.key === " ") {
                            event.preventDefault();
                            toggleItem();
                        }
                    });
                });
            });

            // ─── Only animate on desktop ─────────────────────
            if (window.innerWidth < 992 || document.body.classList.contains("design-manufacturing-page")) return;

            // Full-page sticky stack depth animation
            const pageStackLayers = Array.from(document.querySelectorAll(".page-stack-layer"));
            const reduceStackMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

            if (!reduceStackMotion) {
                pageStackLayers.slice(0, -1).forEach(function (layer, index) {
                    const nextLayer = pageStackLayers[index + 1];

                    gsap.to(layer, {
                        "--page-stack-scale": 0.965,
                        "--page-stack-brightness": 0.58,
                        ease: "none",
                        scrollTrigger: {
                            trigger: nextLayer,
                            start: "top bottom",
                            end: function () {
                                const stackTop = parseFloat(getComputedStyle(document.documentElement)
                                    .getPropertyValue("--page-stack-top")) || 80;
                                return "top " + stackTop + "px";
                            },
                            scrub: 0.45,
                            invalidateOnRefresh: true
                        }
                    });
                });
            }

            // ─── Per-panel: pin + content reveal + parallax ──
            panels.forEach((panel, i) => {

                // Content column entrance animation
                const contentCol = panel.querySelector(".svc-panel-content-col");
                const imgFrame = panel.querySelector(".svc-img-frame");
                const catLabel = panel.querySelector(".svc-cat-label");
                const cardTitle = panel.querySelector(".svc-card-title");
                const accordItems = panel.querySelectorAll(".svc-accord-item");
                const bgImg = panel.querySelector(".svc-panel-bg-img");

                // Initial states
                gsap.set(contentCol, { opacity: 0, x: i % 2 === 0 ? 60 : -60 });
                gsap.set(imgFrame, { opacity: 0, x: i % 2 === 0 ? -60 : 60, scale: 0.92 });
                gsap.set(accordItems, { opacity: 0, y: 30 });

                // Scroll-triggered entrance
                ScrollTrigger.create({
                    trigger: panel,
                    start: "top 70%",
                    once: true,
                    onEnter: () => {
                        const tl = gsap.timeline({ defaults: { ease: "power3.out" } });
                        tl.to(imgFrame, { opacity: 1, x: 0, scale: 1, duration: 0.8 })
                            .to(contentCol, { opacity: 1, x: 0, duration: 0.7 }, "-=0.5")
                            .to(accordItems, { opacity: 1, y: 0, stagger: 0.1, duration: 0.5 }, "-=0.3");
                    }
                });

                // Parallax on bg image
                if (bgImg) {
                    gsap.to(bgImg, {
                        yPercent: 20,
                        ease: "none",
                        scrollTrigger: {
                            trigger: panel,
                            start: "top bottom",
                            end: "bottom top",
                            scrub: true,
                        }
                    });
                }
            });

        });
    </script>
    <script src="assets/js/design-manufacturing-stack.js"></script>
@endpush
