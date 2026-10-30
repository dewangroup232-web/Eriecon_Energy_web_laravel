@extends('layouts.app')

@section('title', 'Contact Omega Group | Corporate Headquarters & Regional Hubs')
@section('meta_description', 'Get in touch with Omega Group. Corporate headquarters in New Delhi, with branch operations across Dubai, Bengaluru, Hyderabad, Mumbai and Pune.')

@push('styles')
    <style>
        :root {
            --om-navy-bg: #06101e;
            --om-navy-card: #09172b;
            --om-cyan: #008ed6;
            --om-green: #0b7b64;
            --om-dark-green: #006859;
            --om-red: #cf2027;
        }

        /* Hero */
        .omega-contact-hero {
            position: relative;
            background-color: #06101e;
            background-image:
                linear-gradient(180deg, rgba(5, 13, 24, 0.84) 0%, rgba(9, 23, 43, 0.94) 70%, #06101e 100%),
                url("assets/img/contactus.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 155px 0 95px;
            overflow: hidden;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
        }

        .omega-contact-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(0, 142, 214, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 142, 214, 0.05) 1px, transparent 1px);
            background-size: 54px 54px;
            pointer-events: none;
        }

        .omega-contact-hero h1 {
            font-family: var(--font-heading, "Lexend", "Poppins", sans-serif);
            font-size: 50px;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 14px;
            line-height: 1.15;
            letter-spacing: -0.5px;
        }

        .omega-contact-hero h1 span {
            color: #008ed6;
        }

        .omega-contact-hero p {
            font-family: var(--font-body, "Source Sans 3", sans-serif);
            font-size: 18px;
            color: rgba(255, 255, 255, 0.85);
            max-width: 780px;
            margin: 0;
            line-height: 1.6;
        }

        /* Main Contact Section */
        .omega-contact-main {
            background: #061122;
            padding: 95px 0 100px;
            color: #ffffff;
        }

        /* Left Side: Brand Card & Teal Contact Blocks (Image 4) */
        .omega-brand-card-contact {
            background: #09182d;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 14px;
            padding: 34px 30px;
            margin-bottom: 24px;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.35);
        }

        .omega-brand-card-contact .brand-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 16px;
        }

        .omega-brand-card-contact .brand-header img {
            width: 48px;
            height: 48px;
            object-fit: contain;
        }

        .omega-brand-card-contact .brand-header h3 {
            font-size: 26px;
            font-weight: 800;
            color: #ffffff;
            margin: 0;
            line-height: 1;
        }

        .omega-brand-card-contact p.brand-hq-desc {
            font-size: 14.5px;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.65;
            margin-bottom: 20px;
        }

        .omega-cities-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .omega-city-chip {
            background: rgba(0, 142, 214, 0.15);
            border: 1px solid rgba(0, 142, 214, 0.35);
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 11.5px;
            font-weight: 700;
            color: #38bdf8;
            letter-spacing: 0.5px;
        }

        /* Teal Contact Detail Blocks */
        .omega-contact-blocks {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .omega-detail-block {
            background: #0b7b64;
            border-radius: 12px;
            padding: 22px 26px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(11, 123, 100, 0.25);
        }

        .omega-detail-block:hover {
            transform: translateX(4px);
            background: #0d8a70;
            box-shadow: 0 14px 35px rgba(11, 123, 100, 0.35);
        }

        .omega-detail-block .block-label {
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.75);
            margin-bottom: 6px;
            display: block;
        }

        .omega-detail-block .block-value {
            font-size: 17px;
            font-weight: 700;
            color: #ffffff;
            margin: 0;
            line-height: 1.45;
        }

        .omega-detail-block .block-value a {
            color: #ffffff;
            text-decoration: none;
            transition: opacity 0.2s;
        }

        .omega-detail-block .block-value a:hover {
            opacity: 0.85;
            text-decoration: underline;
        }

        .omega-detail-block .block-subtext {
            font-size: 12.5px;
            color: rgba(255, 255, 255, 0.82);
            margin-top: 4px;
            margin-bottom: 0;
        }

        /* Right Side: High-Tech Contact Form */
        .omega-form-card {
            background: #09182d;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 16px;
            padding: 44px 38px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.45);
        }

        .omega-form-header {
            margin-bottom: 30px;
        }

        .omega-form-header h3 {
            font-size: 28px;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .omega-form-header p {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.72);
            margin: 0;
            line-height: 1.55;
        }

        .omega-input-group {
            margin-bottom: 22px;
        }

        .omega-input-group label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 8px;
            letter-spacing: 0.3px;
        }

        .omega-input-group input,
        .omega-input-group select,
        .omega-input-group textarea {
            width: 100%;
            background: #061122 !important;
            border: 1.5px solid rgba(255, 255, 255, 0.15) !important;
            border-radius: 10px !important;
            padding: 14px 18px !important;
            color: #ffffff !important;
            font-size: 15px !important;
            transition: all 0.25s ease !important;
            outline: none !important;
        }

        .omega-input-group input:focus,
        .omega-input-group select:focus,
        .omega-input-group textarea:focus {
            border-color: #008ed6 !important;
            box-shadow: 0 0 15px rgba(0, 142, 214, 0.35) !important;
            background: #08162d !important;
        }

        .omega-input-group textarea {
            resize: vertical;
            min-height: 130px;
        }

        .omega-btn-submit {
            background: linear-gradient(135deg, #008ed6 0%, #006bb3 100%);
            color: #ffffff !important;
            border: none;
            padding: 16px 36px;
            font-size: 15px;
            font-weight: 700;
            border-radius: 50px;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(0, 142, 214, 0.35);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .omega-btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 35px rgba(0, 142, 214, 0.5);
            background: linear-gradient(135deg, #009fe3 0%, #0077c8 100%);
        }

        /* Form Feedback Alerts */
        .omega-alert {
            padding: 16px 20px;
            border-radius: 10px;
            margin-bottom: 24px;
            font-size: 14.5px;
            line-height: 1.55;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .omega-alert-success {
            background: rgba(34, 197, 94, 0.15);
            border: 1px solid rgba(34, 197, 94, 0.4);
            color: #86efac;
        }

        .omega-alert-error {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.4);
            color: #fca5a5;
        }

        .omega-field-error {
            color: #f87171;
            font-size: 12.5px;
            font-weight: 600;
            margin-top: 6px;
            display: block;
        }

        /* Map Section */
        .omega-map-section {
            background: #08162b;
            padding: 0 0 90px;
        }

        .omega-map-card {
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.12);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
            height: 420px;
        }

        .omega-map-card iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: invert(90%) hue-rotate(180deg) contrast(95%);
        }

        @media (max-width: 991px) {
            .omega-contact-hero h1 {
                font-size: 38px;
            }

            .omega-form-card {
                padding: 32px 24px;
            }
        }

        @media (max-width: 767px) {
            .omega-contact-hero {
                padding: 110px 0 60px;
            }

            .omega-contact-hero h1 {
                font-size: 32px;
            }

            .omega-brand-card-contact {
                padding: 26px 20px;
            }

            .omega-detail-block {
                padding: 18px 20px;
            }
        }
    </style>
@endpush

@section('content')

    <!-- =====================================================
                 # HERO BANNER
            ====================================================== -->
    <div class="omega-contact-hero" data-reveal="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <!-- <div class="omega-hero-badge" style="display: inline-flex; align-items: center; gap: 8px; padding: 6px 16px; border-radius: 50px; background: rgba(0, 142, 214, 0.15); border: 1px solid rgba(0, 142, 214, 0.35); color: #38bdf8; font-size: 11.5px; font-weight: 700; letter-spacing: 1.8px; text-transform: uppercase; margin-bottom: 20px;">
                                <span style="width: 8px; height: 8px; border-radius: 50%; background: #38bdf8; box-shadow: 0 0 10px #38bdf8;"></span>
                                <span>Get In Touch &bull; Global Operations</span>
                            </div> -->
                    <h1>Contact <span>Omega Group</span></h1>
                    <p>
                        Corporate headquarters in New Delhi, with branch operations and project hubs across Dubai,
                        Bengaluru, Hyderabad, Mumbai and Pune.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- =====================================================
                 # MAIN CONTACT GRID (Image 4)
            ====================================================== -->
    <section class="omega-contact-main" id="contact-info">
        <div class="container">
            <div class="row g-4 align-items-start">

                <!-- Left Column: Official Info Blocks Matching Slide 8 -->
                <div class="col-lg-5" data-reveal="slide-right">
                    <!-- Brand Hub Card -->
                    <div class="omega-brand-card-contact">
                        <div class="brand-header">
                            <img src="{{ asset('assets/img/omega-emblem.png') }}" alt="Omega Group Emblem">
                            <div>
                                <h3>Omega Group</h3>
                                <div
                                    style="display: flex; gap: 4px; height: 3px; width: 65px; margin-top: 4px; border-radius: 2px; overflow: hidden;">
                                    <span style="flex: 1; background: #008ed6;"></span>
                                    <span style="flex: 1; background: #cf2027;"></span>
                                    <span style="flex: 1; background: #0b7b64;"></span>
                                </div>
                            </div>
                        </div>
                        <p class="brand-hq-desc">
                            Corporate headquarters in New Delhi, with branch operations across Dubai, Bengaluru, Hyderabad,
                            Mumbai and Pune.
                        </p>
                        <div class="omega-cities-strip">
                            <span class="omega-city-chip">Dubai</span>
                            <span class="omega-city-chip">New Delhi</span>
                            <span class="omega-city-chip">Bengaluru</span>
                            <span class="omega-city-chip">Hyderabad</span>
                            <span class="omega-city-chip">Mumbai</span>
                            <span class="omega-city-chip">Pune</span>
                        </div>
                    </div>

                    <!-- 4 Styled Contact Detail Blocks (Green/Teal Theme) -->
                    <div class="omega-contact-blocks">
                        <!-- Head Office -->
                        <div class="omega-detail-block">
                            <span class="block-label">Head Office</span>
                            <p class="block-value">DPT 322, Okhla Prime Tower, Phase-1, New Delhi &ndash; 110020</p>
                        </div>

                        <!-- Telephone -->
                        <div class="omega-detail-block">
                            <span class="block-label">Telephone</span>
                            <p class="block-value">
                                <a href="tel:01141630318">011-41630318</a>
                            </p>
                            <!-- <p class="block-subtext">Corporate Switchboard &bull; Mon - Sat 9:30 AM to 6:30 PM IST</p> -->
                        </div>

                        <!-- Email -->
                        <div class="omega-detail-block">
                            <span class="block-label">Email</span>
                            <p class="block-value">
                                <a href="mailto:info@omegainfram.com">info@omegainfram.com</a>
                            </p>
                            <!-- <p class="block-subtext" style="color: rgba(255, 255, 255, 0.75);">Group Inquiries</p>

                                <p class="block-value" style="margin-top: 10px;">
                                    <a href="mailto:info@pathfoundbg.com">info@pathfoundbg.com</a>
                                </p>
                                <p class="block-subtext" style="color: rgba(255, 255, 255, 0.75);">Path Found Biogas</p> -->
                        </div>

                        <!-- Website -->
                        <div class="omega-detail-block">
                            <span class="block-label">Website</span>
                            <p class="block-value">
                                <a href="https://www.omegainfram.com" target="_blank" rel="noopener">www.omegainfram.com</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Inquiry Form -->
                <div class="col-lg-7">
                    <div class="omega-form-card">
                        <div class="omega-form-header">
                            <h3>Send an Executive Enquiry</h3>
                            <p>Connect with our technical planning and business development teams for tenders, partnerships,
                                and joint ventures.</p>
                        </div>

                        {{-- Alert Notifications --}}
                        @if(session('contact_success'))
                            <div class="omega-alert omega-alert-success">
                                <i class="fas fa-check-circle" style="font-size: 20px;"></i>
                                <span>{{ session('contact_success') }}</span>
                            </div>
                        @endif

                        @if(session('contact_error'))
                            <div class="omega-alert omega-alert-error">
                                <i class="fas fa-exclamation-triangle" style="font-size: 20px;"></i>
                                <span>{{ session('contact_error') }}</span>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="omega-input-group">
                                        <label for="name">Your Full Name <span style="color: #ef4444;">*</span></label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                                            placeholder="e.g. Rajesh Kumar" required>
                                        @error('name')
                                            <span class="omega-field-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="omega-input-group">
                                        <label for="email">Work Email Address <span style="color: #ef4444;">*</span></label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                                            placeholder="e.g. name@organization.com" required>
                                        @error('email')
                                            <span class="omega-field-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="omega-input-group">
                                        <label for="phone">Phone / Contact Number</label>
                                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                            placeholder="+91 98765 43210">
                                        @error('phone')
                                            <span class="omega-field-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="omega-input-group">
                                        <label for="vertical">Vertical / Sector of Interest</label>
                                        <select id="vertical" name="vertical">
                                            <option value="Renewable Energy & Solar">Renewable Energy &amp; Solar (PM-KUSUM
                                                / Rooftop)</option>
                                            <option value="EPC & Civil Infrastructure">EPC &amp; Civil Infrastructure
                                            </option>
                                            <option value="Telecom & OFC Networks">Telecom &amp; OFC Networks</option>
                                            <option value="Mining & Coal Logistics">Mining &amp; Coal Logistics</option>
                                            <option value="Commercial Trading & GCC">Commercial Trading &amp; GCC Operations
                                            </option>
                                            <option value="Tender / Partnership Inquiry" selected>Tender / Institutional
                                                Partnership</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="omega-input-group">
                                <label for="comments">Project Scope / Message <span style="color: #ef4444;">*</span></label>
                                <textarea id="comments" name="comments"
                                    placeholder="Please describe your requirements, project location, or inquiry details..."
                                    required>{{ old('comments') }}</textarea>
                                @error('comments')
                                    <span class="omega-field-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="omega-btn-submit">
                                <span>Submit Executive Enquiry</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =====================================================
                 # LOCATION MAP SECTION
            ====================================================== -->
    <div class="omega-map-section">
        <div class="container">
            <div class="omega-map-card" data-reveal="fade-up">
                <iframe title="Omega Group Corporate Office Location"
                    src="https://maps.google.com/maps?q=DLF%20Prime%20Tower%2C%20Okhla%20Phase%201%2C%20New%20Delhi&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>

@endsection