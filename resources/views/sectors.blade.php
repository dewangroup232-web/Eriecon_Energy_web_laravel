@extends('layouts.app')

@push('styles')
    <style>
        .sectors-hero {
            padding: clamp(60px, 8vw, 100px) 0 clamp(40px, 5vw, 60px);
            background: linear-gradient(135deg, #071322 0%, #0d213a 100%);
            position: relative;
            overflow: hidden;
        }

        .sectors-hero::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 45%;
            height: 100%;
            background: radial-gradient(circle at 70% 30%, rgba(27, 79, 168, 0.25) 0%, transparent 70%);
            pointer-events: none;
        }

        .sectors-section {
            padding: clamp(50px, 6vw, 85px) 0;
            background: #f8fafc;
        }

        .sectors-header-title {
            font-size: clamp(28px, 3.8vw, 42px);
            font-weight: 800;
            color: #0d1b2e;
            margin-bottom: 28px;
            position: relative;
            display: inline-block;
        }

        .sectors-header-title::after {
            content: "";
            display: block;
            width: 60px;
            height: 4px;
            background: #1b4fa8;
            border-radius: 2px;
            margin-top: 8px;
        }

        .sector-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            height: 100%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
        }

        .sector-card:hover {
            transform: translateY(-4px);
            border-color: #1b4fa8;
            box-shadow: 0 12px 28px rgba(27, 79, 168, 0.12);
        }

        .sector-icon-box {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(27, 79, 168, 0.08);
            color: #1b4fa8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .sector-card:hover .sector-icon-box {
            background: #1b4fa8;
            color: #ffffff;
        }

        .sector-name {
            font-size: 16px;
            font-weight: 700;
            color: #1e293b;
            margin: 0;
            line-height: 1.35;
        }

        .dept-section {
            padding: clamp(50px, 6vw, 85px) 0;
            background: #ffffff;
        }

        .dept-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            height: 100%;
        }

        .dept-card:hover {
            transform: translateY(-4px);
            background: #ffffff;
            border-color: #4f96ff;
            box-shadow: 0 12px 28px rgba(13, 27, 46, 0.1);
        }

        .dept-icon-box {
            width: 46px;
            height: 46px;
            border-radius: 10px;
            background: #0d1b2e;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .dept-card:hover .dept-icon-box {
            background: #1b4fa8;
        }

        .dept-name {
            font-size: 16px;
            font-weight: 700;
            color: #0d1b2e;
            margin: 0;
            line-height: 1.35;
        }

        .sectors-tagline-bar {
            background: #0d1b2e;
            padding: 28px 0;
            text-align: center;
            border-top: 3px solid #1b4fa8;
        }

        .sectors-tagline-text {
            color: #ffffff;
            font-size: clamp(20px, 2.5vw, 28px);
            font-weight: 700;
            font-style: italic;
            margin: 0;
            letter-spacing: 0.02em;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcrumb / Hero -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center"
        style="background-image: url(assets/img/abbbb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Sectors</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 1: Industries & Infrastructure Sector -->
    <section class="sectors-section">
        <div class="container">
            <h2 class="sectors-header-title">Industries &amp; Infrastructure Sector</h2>

            <div class="row g-4">
                @php
                    $sectors = [
                        ['name' => 'Oil & Gas', 'icon' => 'fas fa-gas-pump'],
                        ['name' => 'Petrochemical', 'icon' => 'fas fa-flask'],
                        ['name' => 'Refineries', 'icon' => 'fas fa-industry'],
                        ['name' => 'Power Plants', 'icon' => 'fas fa-bolt'],
                        ['name' => 'Water Treatment', 'icon' => 'fas fa-tint'],
                        ['name' => 'Infrastructure', 'icon' => 'fas fa-city'],
                        ['name' => 'Renewable Energy', 'icon' => 'fas fa-solar-panel'],
                        ['name' => 'Fertilizer Plants', 'icon' => 'fas fa-seedling'],
                        ['name' => 'Steel & Cement Plants', 'icon' => 'fas fa-building'],
                        ['name' => 'Highways & Expressways', 'icon' => 'fas fa-road'],
                        ['name' => 'Railways & Metro', 'icon' => 'fas fa-train'],
                        ['name' => 'Airports', 'icon' => 'fas fa-plane-departure'],
                        ['name' => 'Ports & Marine', 'icon' => 'fas fa-ship'],
                        ['name' => 'Smart Cities', 'icon' => 'fas fa-network-wired'],
                        ['name' => 'Industrial Infrastructure', 'icon' => 'fas fa-warehouse'],
                        ['name' => 'Water & Wastewater', 'icon' => 'fas fa-water'],
                        ['name' => 'Power Transmission & Distribution', 'icon' => 'fas fa-tower-cell'],
                        ['name' => 'Urban Development', 'icon' => 'fas fa-archway'],
                    ];
                @endphp

                @foreach ($sectors as $sector)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="sector-card">
                            <div class="sector-icon-box">
                                <i class="{{ $sector['icon'] }}"></i>
                            </div>
                            <h3 class="sector-name">{{ $sector['name'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section 2: Common Departments -->
    <section class="dept-section">
        <div class="container">
            <h2 class="sectors-header-title">Common Departments</h2>

            <div class="row g-4">
                @php
                    $departments = [
                        ['name' => 'Maintenance', 'icon' => 'fas fa-wrench'],
                        ['name' => 'Operations', 'icon' => 'fas fa-cogs'],
                        ['name' => 'Inspection', 'icon' => 'fas fa-magnifying-glass'],
                        ['name' => 'Reliability', 'icon' => 'fas fa-shield-halved'],
                        ['name' => 'QA/QC', 'icon' => 'fas fa-award'],
                        ['name' => 'HSE', 'icon' => 'fas fa-hard-hat'],
                        ['name' => 'Planning & Scheduling', 'icon' => 'fas fa-calendar-days'],
                        ['name' => 'Procurement', 'icon' => 'fas fa-truck-ramp-box'],
                        ['name' => 'Construction', 'icon' => 'fas fa-hammer'],
                        ['name' => 'Commissioning Team', 'icon' => 'fas fa-clipboard-check'],
                    ];
                @endphp

                @foreach ($departments as $dept)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="dept-card">
                            <div class="dept-icon-box">
                                <i class="{{ $dept['icon'] }}"></i>
                            </div>
                            <h3 class="dept-name">{{ $dept['name'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection