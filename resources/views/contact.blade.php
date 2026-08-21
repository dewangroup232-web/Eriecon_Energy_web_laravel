@extends('layouts.app')

@push('styles')
    <style>
        .global-presence-section {
            position: relative;
            padding: 80px 0;
            background-color: #f7f9fc;
            background-image: url('assets/img/map.svg');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: contain;
        }

        .global-presence-title {
            margin-bottom: 40px;
            color: #3b7afa;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .presence-card {
            height: 100%;
            padding: 40px 30px;
            text-align: center;
            background: #ffffff;
            border: 1.5px solid #3b7afa;
            border-radius: 4px;
            box-shadow:
                0 18px 42px rgba(22, 63, 121, 0.14),
                0 5px 14px rgba(59, 122, 250, 0.10);
            transition: all 0.3s ease;
        }

        .presence-card:hover {
            transform: translateY(-5px);
            border-color: #2a5ebf;
            box-shadow:
                0 26px 58px rgba(22, 63, 121, 0.20),
                0 8px 20px rgba(59, 122, 250, 0.14);
        }

        .presence-card .flag-container {
            display: inline-block;
            margin-bottom: 25px;
        }

        .presence-card h3 {
            margin-bottom: 20px;
            color: #232323;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .presence-card .info-row {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 25px;
            text-align: left;
        }

        .presence-card .info-row:last-child {
            margin-bottom: 0;
        }

        .presence-card .info-row i {
            display: inline-flex;
            flex: 0 0 45px;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            margin: 0;
            color: var(--color-primary, #3f78e0);
            font-size: 16px;
            line-height: 1;
            text-align: center;
            background: transparent;
            border: 1px solid rgba(63, 120, 224, 0.3);
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .presence-card .info-row p {
            flex: 1 1 auto;
            min-width: 0;
            padding-top: 9px;
            margin: 0;
            color: #444444;
            font-size: 15px;
            font-weight: 500;
            line-height: 1.6;
        }

        .presence-card .info-row a {
            color: #444444;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .presence-card .info-row a:hover {
            color: #3b7afa;
        }

        .contact-area .contact-items .left-item {
            padding: 50px !important;
            background: #eef5ff;
        }

        .contact-area .contact-items {
            background: #eef5ff;
        }

        .contact-area .contact-items .content input,
        .contact-area .contact-items .content textarea {
            box-sizing: border-box;
            padding-right: 18px !important;
            padding-left: 18px !important;
            background: #ffffff;
            border-radius: 12px !important;
        }

        .contact-form .contact-feedback {
            margin: 0 0 24px;
            padding: 15px 18px;
            border: 1px solid transparent;
            border-radius: 12px;
            font-size: 15px;
            line-height: 1.55;
        }

        .contact-form .contact-feedback.success {
            color: #14532d;
            background: #ecfdf3;
            border-color: #86efac;
        }

        .contact-form .contact-feedback.error {
            color: #8a1c1c;
            background: #fff1f1;
            border-color: #fecaca;
        }

        .contact-form .field-error {
            display: block;
            padding: 7px 4px 0;
            color: #b42318;
            font-size: 13px;
            font-weight: 600;
        }

        @media (max-width: 767px) {
            .contact-area .contact-items .left-item {
                padding: 30px 20px !important;
            }

            .presence-card .info-row {
                gap: 12px;
            }
        }
    </style>
@endpush

@section('content')

    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center" style="background-image: url(assets/img/contactus.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Contact Us</h1>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Global Presence Area
    ============================================= -->
    <div class="global-presence-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="global-presence-title">Global Presence</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- Saudi Arabia Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="presence-card">
                        <div class="flag-container">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200" width="50" height="35" class="rounded border shadow-sm">
                                <rect width="300" height="200" fill="#006C35"/>
                                <path d="M 240 135 L 60 135 M 75 125 L 60 135 L 75 145 M 220 125 L 220 145" stroke="#FFFFFF" stroke-width="4" stroke-linecap="round"/>
                                <text x="150" y="95" fill="#FFFFFF" font-size="18" font-family="sans-serif" text-anchor="middle" font-weight="bold">لا إله إلا الله</text>
                                <text x="150" y="115" fill="#FFFFFF" font-size="12" font-family="sans-serif" text-anchor="middle" font-weight="bold">محمد رسول الله</text>
                            </svg>
                        </div>
                        <h3>Saudi Arabia</h3>
                        
                        <div class="info-row">
                            <i class="fas fa-building"></i>
                            <p>EIRECON ENERGY COMPANY</p>
                        </div>
                        
                        <div class="info-row">
                            <i class="fas fa-phone-alt"></i>
                            <p><a href="tel:+966544002954">+966 54 400 2954</a></p>
                        </div>
                        
                        <div class="info-row">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Prince Faisal Ibn Fahad Rd.<br>Al Hizam Al Akhdar Dist.<br>Al Khobar, KSA</p>
                        </div>
                        
                        <div class="info-row">
                            <i class="fas fa-envelope"></i>
                            <p><a href="mailto:info@eireconenergy.com">info@eireconenergy.com</a></p>
                        </div>
                    </div>
                </div>

                <!-- India Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="presence-card">
                        <div class="flag-container">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 600" width="50" height="35" class="rounded border shadow-sm">
                                <rect width="900" height="200" fill="#FF9933"/>
                                <rect y="200" width="900" height="200" fill="#FFFFFF"/>
                                <rect y="400" width="900" height="200" fill="#138808"/>
                                <circle cx="450" cy="300" r="80" fill="none" stroke="#000080" stroke-width="6"/>
                                <circle cx="450" cy="300" r="15" fill="#000080"/>
                                <g stroke="#000080" stroke-width="4">
                                    <line x1="450" y1="220" x2="450" y2="380"/>
                                    <line x1="370" y1="300" x2="530" y2="300"/>
                                    <line x1="393" y1="243" x2="507" y2="357"/>
                                    <line x1="393" y1="357" x2="507" y2="243"/>
                                    <line x1="420" y1="225" x2="480" y2="375"/>
                                    <line x1="480" y1="225" x2="420" y2="375"/>
                                    <line x1="450" y1="300" x2="375" y2="275"/>
                                    <line x1="450" y1="300" x2="525" y2="325"/>
                                    <line x1="450" y1="300" x2="375" y2="325"/>
                                    <line x1="450" y1="300" x2="525" y2="275"/>
                                    <line x1="450" y1="300" x2="425" y2="225"/>
                                    <line x1="450" y1="300" x2="475" y2="375"/>
                                    <line x1="450" y1="300" x2="475" y2="225"/>
                                    <line x1="450" y1="300" x2="425" y2="375"/>
                                </g>
                            </svg>
                        </div>
                        <h3>India</h3>
                        
                        <div class="info-row">
                            <i class="fas fa-building"></i>
                            <p>EIRECON ENERGY COMPANY</p>
                        </div>
                        
                        <div class="info-row">
                            <i class="fas fa-phone-alt"></i>
                            <p><a href="tel:+917462828583">+91 7462 828583</a></p>
                        </div>
                        
                        <div class="info-row">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>3 Rd, Okhla Phase III<br>Delhi, India, 110020</p>
                        </div>
                        
                        <div class="info-row">
                            <i class="fas fa-envelope"></i>
                            <p><a href="mailto:info@eireconenergy.com">info@eireconenergy.com</a></p>
                        </div>
                    </div>
                </div>
                
                <!-- Ireland Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="presence-card">
                        <div class="flag-container">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 300" width="50" height="35" class="rounded border shadow-sm">
                                <rect width="200" height="300" fill="#169B62"/>
                                <rect x="200" width="200" height="300" fill="#FFFFFF"/>
                                <rect x="400" width="200" height="300" fill="#FF883E"/>
                            </svg>
                        </div>
                        <h3>Ireland</h3>
                        
                        <div class="info-row">
                            <i class="fas fa-building"></i>
                            <p>EIRECON ENERGY COMPANY</p>
                        </div>
                        
                        <div class="info-row">
                            <i class="fas fa-phone-alt"></i>
                            <p><a href="tel:+353899646486">+353 89 964 6486</a></p>
                        </div>
                        
                        <div class="info-row">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Athlone<br>Co. Westmeath<br>Ireland</p>
                        </div>
                        
                        <div class="info-row">
                            <i class="fas fa-envelope"></i>
                            <p><a href="mailto:info@eireconenergy.com">info@eireconenergy.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Global Presence Area -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding">
        <!-- Fixed BG -->
        <div class="fixed-bg">
            <img src="assets/img/illustration/1.png" alt="Thumb">
        </div>
        <!-- End Fixed BG -->
        <div class="container">
            <div class="contact-items">
                <div class="row align-center justify-content-center">
                    
                    <div class="col-lg-8 left-item">
                        <div class="content">
                            <h2>Let's Talk About Your Idea</h2>
                            <form action="{{ route('contact.store') }}" method="POST" class="contact-form" data-laravel-contact>
                                @csrf
                                @if (session('contact_success'))
                                    <div class="contact-feedback success" role="status">{{ session('contact_success') }}</div>
                                @endif
                                @if (session('contact_error'))
                                    <div class="contact-feedback error" role="alert">{{ session('contact_error') }}</div>
                                @endif
                                @if ($errors->any())
                                    <div class="contact-feedback error" role="alert">Please check the highlighted fields and try again.</div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name*" type="text" value="{{ old('name') }}" maxlength="100" autocomplete="name" required>
                                            @error('name')<span class="field-error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email" value="{{ old('email') }}" maxlength="255" autocomplete="email" required>
                                            @error('email')<span class="field-error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="tel" value="{{ old('phone') }}" maxlength="30" autocomplete="tel">
                                            @error('phone')<span class="field-error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *" minlength="10" maxlength="5000" required>{{ old('comments') }}</textarea>
                                            @error('comments')<span class="field-error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Send Message <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

  

    <!-- Start Footer 
    ============================================= -->
    
@endsection
