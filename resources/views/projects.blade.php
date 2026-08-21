@extends('layouts.app')

@section('body-class', 'projects-page')
@section('navbar-class', 'projects-navbar')

@push('styles')
    <link rel="stylesheet" href="assets/css/projects-premium.css">
@endpush

@section('content')
    <main>
        <section class="projects-hero" aria-labelledby="projectsHeroTitle">
            <div class="projects-hero-media" aria-hidden="true"></div>
            <div class="projects-hero-grid" aria-hidden="true"></div>
            <div class="container projects-hero-shell">
                <div class="projects-hero-copy" data-project-reveal>
                    <p class="projects-eyebrow">Project Portfolio / Industrial Delivery</p>
                    <h1 id="projectsHeroTitle">Engineering ambition.<br><span>Delivered with discipline.</span></h1>
                    <p class="projects-hero-lead">From early engineering and procurement to fabrication, construction,
                        commissioning, and lifecycle support—our project capabilities are built around safe execution
                        and accountable delivery.</p>
                    <div class="projects-hero-actions">
                        <a class="projects-primary-cta" href="#project-portfolio">
                            Explore our work <i class="fas fa-arrow-down" aria-hidden="true"></i>
                        </a>
                        <a class="projects-text-link" href="/contact">
                            Discuss a project <i class="fas fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="projects-hero-rail" aria-label="Core project disciplines" data-project-reveal>
                    <div><span>01</span><strong>EPC Delivery</strong></div>
                    <div><span>02</span><strong>Fabrication</strong></div>
                    <div><span>03</span><strong>Asset Support</strong></div>
                </div>
            </div>
            <a class="projects-scroll-cue" href="#project-portfolio" aria-label="Scroll to project portfolio">
                <span>View portfolio</span><i class="fas fa-arrow-down" aria-hidden="true"></i>
            </a>
        </section>

        <section class="projects-intro" aria-labelledby="projectsIntroTitle">
            <div class="container">
                <div class="projects-intro-grid">
                    <p class="projects-section-label" data-project-reveal>Built for complex environments</p>
                    <div data-project-reveal>
                        <h2 id="projectsIntroTitle">One delivery mindset across every project interface.</h2>
                        <p>Our teams connect engineering decisions, supply-chain control, field execution, and
                            operational readiness. The result is a coordinated project journey with fewer gaps between
                            design intent and site reality.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects-portfolio" id="project-portfolio" aria-labelledby="portfolioTitle">
            <div class="container">
                <div class="projects-heading-row">
                    <div data-project-reveal>
                        <p class="projects-section-label">Selected capabilities</p>
                        <h2 id="portfolioTitle">Project portfolio</h2>
                    </div>
                    <p class="projects-heading-note" data-project-reveal>Explore the industrial sectors and delivery
                        packages supported by Eirecon Energy.</p>
                </div>

                <div class="projects-filter" role="group" aria-label="Filter project portfolio" data-project-reveal>
                    <button type="button" class="is-active" data-project-filter="all" aria-pressed="true">All</button>
                    <button type="button" data-project-filter="epc" aria-pressed="false">EPC</button>
                    <button type="button" data-project-filter="infrastructure" aria-pressed="false">Infrastructure</button>
                    <button type="button" data-project-filter="fabrication" aria-pressed="false">Fabrication</button>
                    <button type="button" data-project-filter="maintenance" aria-pressed="false">Maintenance</button>
                    <button type="button" data-project-filter="power" aria-pressed="false">Power &amp; Automation</button>
                </div>

                <div class="projects-grid" aria-live="polite">
                    <article class="project-card project-card-featured" data-project-card data-category="epc">
                        <a href="/services-EPC-Projects" aria-label="Explore integrated EPC project delivery">
                            <img src="assets/img/services/1.png" alt="Large industrial energy facility" loading="eager">
                            <div class="project-card-shade"></div>
                            <div class="project-card-top"><span>01</span><span>EPC / Energy</span></div>
                            <div class="project-card-copy">
                                <p>End-to-end delivery</p>
                                <h3>Integrated EPC Projects</h3>
                                <span class="project-card-link">Explore capability <i class="fas fa-arrow-right"
                                        aria-hidden="true"></i></span>
                            </div>
                        </a>
                    </article>

                    <article class="project-card" data-project-card data-category="infrastructure">
                        <a href="/services-Infrastructure-Projects" aria-label="Explore infrastructure and utilities projects">
                            <img src="assets/img/services/6.png" alt="Industrial infrastructure development viewed from above"
                                loading="lazy">
                            <div class="project-card-shade"></div>
                            <div class="project-card-top"><span>02</span><span>Infrastructure</span></div>
                            <div class="project-card-copy">
                                <p>Connected systems</p>
                                <h3>Infrastructure &amp; Utilities</h3>
                                <span class="project-card-link">Explore capability <i class="fas fa-arrow-right"
                                        aria-hidden="true"></i></span>
                            </div>
                        </a>
                    </article>

                    <article class="project-card" data-project-card data-category="maintenance">
                        <a href="/services-Plant-Maintenance-Turnarounds" aria-label="Explore plant maintenance and turnaround projects">
                            <img src="assets/img/services/8.png" alt="Industrial maintenance team working at a plant"
                                loading="lazy">
                            <div class="project-card-shade"></div>
                            <div class="project-card-top"><span>03</span><span>Asset Support</span></div>
                            <div class="project-card-copy">
                                <p>Reliability under pressure</p>
                                <h3>Plant Turnarounds</h3>
                                <span class="project-card-link">Explore capability <i class="fas fa-arrow-right"
                                        aria-hidden="true"></i></span>
                            </div>
                        </a>
                    </article>

                    <article class="project-card project-card-wide" data-project-card data-category="fabrication">
                        <a href="/services-Design-Manufacturing" aria-label="Explore steel structure fabrication projects">
                            <img src="assets/img/services/11.png" alt="Steel structure fabrication and industrial piping"
                                loading="lazy">
                            <div class="project-card-shade"></div>
                            <div class="project-card-top"><span>04</span><span>Fabrication</span></div>
                            <div class="project-card-copy">
                                <p>Engineered for assembly</p>
                                <h3>Steel Structures</h3>
                                <span class="project-card-link">Explore capability <i class="fas fa-arrow-right"
                                        aria-hidden="true"></i></span>
                            </div>
                        </a>
                    </article>

                    <article class="project-card" data-project-card data-category="power">
                        <a href="/services-Power-Automation-Projects" aria-label="Explore power and automation projects">
                            <img src="assets/img/services/10.png" alt="Industrial process and automation installation"
                                loading="lazy">
                            <div class="project-card-shade"></div>
                            <div class="project-card-top"><span>05</span><span>Power &amp; Control</span></div>
                            <div class="project-card-copy">
                                <p>Smarter operations</p>
                                <h3>Power &amp; Automation</h3>
                                <span class="project-card-link">Explore capability <i class="fas fa-arrow-right"
                                        aria-hidden="true"></i></span>
                            </div>
                        </a>
                    </article>

                    <article class="project-card" data-project-card data-category="fabrication epc">
                        <a href="/services-Design-Manufacturing" aria-label="Explore process equipment and piping projects">
                            <img src="assets/img/services/12.png" alt="Process piping installed across an industrial facility"
                                loading="lazy">
                            <div class="project-card-shade"></div>
                            <div class="project-card-top"><span>06</span><span>Process Systems</span></div>
                            <div class="project-card-copy">
                                <p>Precision packages</p>
                                <h3>Process Equipment &amp; Piping</h3>
                                <span class="project-card-link">Explore capability <i class="fas fa-arrow-right"
                                        aria-hidden="true"></i></span>
                            </div>
                        </a>
                    </article>

                    <article class="project-card project-card-wide" data-project-card data-category="epc infrastructure">
                        <a href="/services-Rigging-Lifting-Projects" aria-label="Explore rigging and heavy lifting projects">
                            <img src="assets/img/services/13.png" alt="Complex industrial access and lifting structure"
                                loading="lazy">
                            <div class="project-card-shade"></div>
                            <div class="project-card-top"><span>07</span><span>Heavy Execution</span></div>
                            <div class="project-card-copy">
                                <p>Controlled critical moves</p>
                                <h3>Rigging &amp; Heavy Lift</h3>
                                <span class="project-card-link">Explore capability <i class="fas fa-arrow-right"
                                        aria-hidden="true"></i></span>
                            </div>
                        </a>
                    </article>

                    <article class="project-card" data-project-card data-category="maintenance infrastructure">
                        <a href="/services-Scaffolding" aria-label="Explore industrial scaffolding projects">
                            <img src="assets/img/services/14.png" alt="Industrial piping and access systems inside a plant"
                                loading="lazy">
                            <div class="project-card-shade"></div>
                            <div class="project-card-top"><span>08</span><span>Industrial Access</span></div>
                            <div class="project-card-copy">
                                <p>Safe access at scale</p>
                                <h3>Scaffolding Systems</h3>
                                <span class="project-card-link">Explore capability <i class="fas fa-arrow-right"
                                        aria-hidden="true"></i></span>
                            </div>
                        </a>
                    </article>
                </div>
                <p class="projects-empty" hidden>No portfolio items match this filter.</p>
            </div>
        </section>

        <section class="projects-delivery" aria-labelledby="deliveryTitle">
            <div class="projects-delivery-media" aria-hidden="true"></div>
            <div class="container">
                <div class="projects-delivery-grid">
                    <div data-project-reveal>
                        <p class="projects-section-label">The delivery system</p>
                        <h2 id="deliveryTitle">Control at every handover.</h2>
                        <p>Each phase is connected through disciplined planning, technical assurance, and transparent
                            coordination—from the first scope discussion through site completion.</p>
                    </div>
                    <ol class="projects-phases">
                        <li data-project-reveal><span>01</span><div><strong>Define</strong><p>Scope, interfaces, risks, and delivery strategy.</p></div></li>
                        <li data-project-reveal><span>02</span><div><strong>Engineer</strong><p>Coordinated design, constructability, and technical assurance.</p></div></li>
                        <li data-project-reveal><span>03</span><div><strong>Execute</strong><p>Procurement, fabrication, construction, and field control.</p></div></li>
                        <li data-project-reveal><span>04</span><div><strong>Deliver</strong><p>Testing, documentation, handover, and operational support.</p></div></li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="projects-cta" aria-labelledby="projectsCtaTitle">
            <div class="container">
                <div class="projects-cta-inner" data-project-reveal>
                    <p class="projects-section-label">Your next project</p>
                    <h2 id="projectsCtaTitle">Bring us the challenge.<br><span>We’ll build the delivery path.</span></h2>
                    <a href="/contact">Start a conversation <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script src="assets/js/projects-premium.js"></script>
@endpush
