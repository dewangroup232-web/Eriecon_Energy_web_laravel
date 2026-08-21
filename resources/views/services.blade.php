@extends('layouts.app')
@section('content')

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center"
        style="background-image: url({{ asset('assets/img/services/1.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-area icon-only text-light text-center bg-dark default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>What We Do</h2>
                        <p>
                            We provide specialized engineering design, safety compliance, and Power Automate workflows
                            tailored for the energy sector. Our solutions optimize asset performance and streamline
                            production data, ensuring maximum efficiency with zero compromise on safety.
                        </p>
                    </div>
                </div>
            </div>
            <div class="services-box">
                <div class="row justify-content-center">
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6 mb-4">
                        <div class="item h-100 px-2 py-4">
                            <div class="bottom-info">
                                <i class="flaticon-factory mt-0"></i>
                                <h4 class="mt-3">
                                    <a href="{{ url('/services-EPC-Projects') }}">EPC Projects</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6 mb-4">
                        <div class="item h-100 px-2 py-4">
                            <div class="bottom-info">
                                <i class="flaticon-turbine mt-0"></i>
                                <h4 class="mt-3">
                                    <a href="{{ url('/services-Plant-Maintenance-Turnarounds') }}">Plant Maintenance &amp; Turnarounds</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6 mb-4">
                        <div class="item h-100 px-2 py-4">
                            <div class="bottom-info">
                                <i class="flaticon-ruler mt-0"></i>
                                <h4 class="mt-3">
                                    <a href="{{ url('/services-Design-Manufacturing') }}">Design &amp; Manufacturing of Steel Structure, Piping &amp; Process Equipment</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6 mb-4">
                        <div class="item h-100 px-2 py-4">
                            <div class="bottom-info">
                                <i class="flaticon-power-plant mt-0"></i>
                                <h4 class="mt-3">
                                    <a href="{{ url('/services-Power-Automation-Projects') }}">Power &amp; Automation Projects &amp; Services</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6 mb-4">
                        <div class="item h-100 px-2 py-4">
                            <div class="bottom-info">
                                <i class="flaticon-crane mt-0"></i>
                                <h4 class="mt-3">
                                    <a href="{{ url('/services-Rigging-Lifting-Projects') }}">Rigging &amp; Lifting Projects &amp; Services</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6 mb-4">
                        <div class="item h-100 px-2 py-4">
                            <div class="bottom-info">
                                <i class="flaticon-building mt-0"></i>
                                <h4 class="mt-3">
                                    <a href="{{ url('/services-Infrastructure-Projects') }}">Infrastructure</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6 mb-4">
                        <div class="item h-100 px-2 py-4">
                            <div class="bottom-info">
                                <i class="flaticon-helmet mt-0"></i>
                                <h4 class="mt-3">
                                    <a href="{{ url('/services-Scaffolding') }}">Scaffolding</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6 mb-4">
                        <div class="item h-100 px-2 py-4">
                            <div class="bottom-info">
                                <i class="flaticon-excavator mt-0"></i>
                                <h4 class="mt-3">
                                    <a href="{{ url('/services-Equipmen-Rental') }}">Equipment Rental &amp; Services</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6 mb-4">
                        <div class="item h-100 px-2 py-4">
                            <div class="bottom-info">
                                <i class="flaticon-process mt-0"></i>
                                <h4 class="mt-3">
                                    <a href="{{ url('/services-Project-Support') }}">Project Support Services</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6 mb-4">
                        <div class="item h-100 px-2 py-4">
                            <div class="bottom-info">
                                <i class="flaticon-creativity mt-0"></i>
                                <h4 class="mt-3">
                                    <a href="{{ url('/services-Procurement') }}">Procurement Services</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start FAQ 
    ============================================= -->
    <div class="faq-area default-padding bg-gray">
        <div class="container">
            <div class="faqs">
                <div class="row">
                    <!-- Start Faq -->
                    <div class="col-lg-7 faq-area">
                        <!-- Start Accordion -->
                        <div class="faq-style-one-items">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <span>01</span> What specific Oil &amp; Gas engineering services do you provide?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                We offer end-to-end technical solutions, focusing primarily on Front-End
                                                Engineering Design (FEED), detailed piping and instrumentation design
                                                (P&amp;IDs), safety compliance studies (like HAZOP), and modular equipment
                                                sourcing. We specialize in optimizing onshore and offshore production
                                                workflows to ensure maximum asset efficiency.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02</span> How do your digital automation solutions (like Power
                                            Automate) apply to the energy sector?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                We integrate Power Automate, SCADA networks, and cloud infrastructure to
                                                eliminate slow, manual workflows. By automating field inspection
                                                tracking, production reporting, and safety compliance alerts, we reduce
                                                administrative friction and prevent costly data-entry errors.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            <span>03</span> Can you integrate modern automation tools with our existing
                                            legacy production systems?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Yes. We specialize in bridging the gap between legacy field
                                                infrastructure and modern cloud platforms. We design custom middleware
                                                and data pipelines that extract critical metrics from older systems,
                                                feeding them securely into modern dashboards and automated reporting
                                                tools.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <span>04</span> What is your standard project timeline from discovery to
                                            final commissioning?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Project timelines vary depending on complexity, but a standard cycle
                                                spans from initial assessment to final handover. We operate under a
                                                highly structured framework—spanning Planning, FEED, Fabrication, and
                                                Final Pre-Commissioning Hydrotesting—ensuring every milestone is
                                                delivered on schedule without sacrificing quality.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion -->
                    </div>
                    <!-- End Faq -->
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/img/illustration/2.png') }}" alt="FAQ Illustration">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ -->

@endsection
