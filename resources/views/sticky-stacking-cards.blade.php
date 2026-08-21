<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Sticky Stacking Cards — EIRECON ENERGY</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Source+Sans+3:wght@400;600&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --font-heading: "Poppins", sans-serif;
            --font-body: "Source Sans 3", sans-serif;
            --color-primary: #1B4FA8;
            --color-primary-dark: #0D1B2E;
            --color-accent: #E8921A;
            --bg-gray: #F7F9FC;
            --white: #ffffff;
            --text-dark: #0D1B2E;
            --text-muted: #718096;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-body);
            background-color: var(--white);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* ── Demo Spacers ────────────────────────────────────────── */
        .header-spacer {
            height: 80px;
            background: var(--color-primary-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-family: var(--font-heading);
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 0.1em;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        .hero-spacer {
            height: 60vh;
            background: linear-gradient(135deg, #1B4FA8 0%, #0D1B2E 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-align: center;
            padding: 20px;
            margin-top: 80px;
        }

        .hero-spacer h1 {
            font-family: var(--font-heading);
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            line-height: 1.1;
            margin-bottom: 15px;
        }

        .hero-spacer p {
            font-size: 1.2rem;
            max-width: 600px;
            opacity: 0.9;
        }

        .footer-spacer {
            height: 100vh;
            background: var(--color-primary-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-family: var(--font-heading);
            font-size: 1.5rem;
        }

        /* ── Stacking Section ────────────────────────────────────── */
        .stacking-section {
            background-color: var(--bg-gray);
            padding: 100px 0;
            position: relative;
        }

        .stacking-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 60px;
            position: relative;
        }

        /* ── Left Column (Sticky Panel) ──────────────────────────── */
        .sticky-left-panel {
            padding-right: 20px;
        }

        .sticky-intro-card {
            background: var(--white);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(13, 27, 46, 0.05);
            border-left: 4px solid var(--color-primary);
        }

        .eyebrow-label {
            display: inline-block;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--color-primary);
            background: rgba(27, 79, 168, 0.08);
            padding: 6px 14px;
            border-radius: 100px;
            margin-bottom: 20px;
        }

        .sticky-left-panel h2 {
            font-family: var(--font-heading);
            font-size: clamp(2rem, 3.5vw, 2.75rem);
            font-weight: 800;
            color: var(--color-primary-dark);
            line-height: 1.15;
            letter-spacing: -0.03em;
            margin-bottom: 20px;
        }

        .sticky-left-panel p {
            font-size: 1.0625rem;
            color: var(--text-muted);
            line-height: 1.7;
            margin-bottom: 24px;
        }

        .scroll-indicator {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--color-primary);
            font-weight: 700;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .scroll-indicator i {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-6px); }
            60% { transform: translateY(-3px); }
        }

        /* ── Right Column (Cards List) ───────────────────────────── */
        .cards-list {
            display: flex;
            flex-direction: column;
            gap: 40px; /* Space between cards when scrolling normally */
            position: relative;
        }

        .stacking-card {
            background-color: var(--white);
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 15px 45px rgba(13, 27, 46, 0.08);
            border: 1px solid rgba(13, 27, 46, 0.03);
            display: flex;
            flex-direction: column;
            gap: 20px;
            transform-origin: top center;
            will-change: transform;
            position: relative;
        }

        /* Give cards unique gradient top bars */
        .stacking-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            background: linear-gradient(90deg, var(--color-primary) 0%, var(--color-accent) 100%);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-num {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--color-accent);
            background: rgba(232, 146, 26, 0.1);
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .stacking-card h3 {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--color-primary-dark);
            letter-spacing: -0.02em;
        }

        .stacking-card p {
            font-size: 1rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        .card-features {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 10px;
            padding-top: 20px;
            border-top: 1px solid rgba(13, 27, 46, 0.06);
        }

        .card-features li {
            font-size: 0.9rem;
            color: var(--text-dark);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card-features li i {
            color: var(--color-primary);
        }

        /* ── Spacer to mark end of pinning ───────────────────────── */
        .process-end {
            height: 1px;
            width: 100%;
            visibility: hidden;
        }

        /* ── Responsive Styling ──────────────────────────────────── */
        @media (max-width: 767px) {
            .stacking-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .sticky-left-panel {
                padding-right: 0;
            }

            .stacking-section {
                padding: 60px 0;
            }

            .cards-list {
                gap: 24px;
            }

            .stacking-card {
                padding: 30px 20px;
            }

            .card-features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Fake Header -->
    <div class="header-spacer">
        EIRECON ENERGY COMPANY
    </div>

    <!-- Hero Spacer Section -->
    <div class="hero-spacer">
        <h1>Our Process &amp; Standards</h1>
        <p>Scroll down to see the sticky stacking card layout effect in action.</p>
    </div>

    <!-- Stacking Cards Section -->
    <section class="stacking-section" id="stacking-trigger">
        <div class="stacking-container">
            
            <!-- Left Sticky Panel -->
            <div class="sticky-left-panel" id="sticky-panel">
                <div class="sticky-intro-card">
                    <span class="eyebrow-label">How we deliver</span>
                    <h2>Engineered for Excellence</h2>
                    <p>We execute projects through highly disciplined and structured stages to ensure the highest standards of safety, quality, and regulatory compliance.</p>
                    <div class="scroll-indicator">
                        <i class="fa-solid fa-arrow-down"></i>
                        <span>Scroll to Stack Cards</span>
                    </div>
                </div>
            </div>

            <!-- Right Cards List -->
            <div class="cards-list">
                
                <!-- Card 1 -->
                <div class="stacking-card">
                    <div class="card-header">
                        <h3>01. Detailed Engineering</h3>
                        <span class="card-num">1</span>
                    </div>
                    <p>Our expert team performs structural analyses, load calculations, and generates full 3D models using Tekla and Staad Pro to guarantee structural integrity.</p>
                    <ul class="card-features">
                        <li><i class="fa-solid fa-circle-check"></i> Connection Design</li>
                        <li><i class="fa-solid fa-circle-check"></i> Load Calculations</li>
                        <li><i class="fa-solid fa-circle-check"></i> GA Drawings</li>
                        <li><i class="fa-solid fa-circle-check"></i> Stress Analysis</li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="stacking-card">
                    <div class="card-header">
                        <h3>02. CNC Fabrication</h3>
                        <span class="card-num">2</span>
                    </div>
                    <p>Using advanced CNC plasma cutting, automatic rolling, and high-precision welding, raw structural steel is transformed into accurate engineering elements.</p>
                    <ul class="card-features">
                        <li><i class="fa-solid fa-circle-check"></i> CNC Plasma Cutting</li>
                        <li><i class="fa-solid fa-circle-check"></i> Fit-up & Assembly</li>
                        <li><i class="fa-solid fa-circle-check"></i> Certified Welding</li>
                        <li><i class="fa-solid fa-circle-check"></i> Nesting Optimization</li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div class="stacking-card">
                    <div class="card-header">
                        <h3>03. Surface Prep & Coat</h3>
                        <span class="card-num">3</span>
                    </div>
                    <p>All fabricated materials undergo automated shot blasting to reach SA 2.5 standards followed by multi-coat industrial primer and paint application.</p>
                    <ul class="card-features">
                        <li><i class="fa-solid fa-circle-check"></i> Blasting to SA 2.5</li>
                        <li><i class="fa-solid fa-circle-check"></i> Primer Coating</li>
                        <li><i class="fa-solid fa-circle-check"></i> Epoxy Painting</li>
                        <li><i class="fa-solid fa-circle-check"></i> DFT Checking</li>
                    </ul>
                </div>

                <!-- Card 4 -->
                <div class="stacking-card">
                    <div class="card-header">
                        <h3>04. QA/QC & Erection</h3>
                        <span class="card-num">4</span>
                    </div>
                    <p>Rigorous non-destructive testing (UT, RT, PT, MT) and inspection prior to lifting, alignment, and final torque bolt tightening at the industrial site.</p>
                    <ul class="card-features">
                        <li><i class="fa-solid fa-circle-check"></i> Visual & NDT Testing</li>
                        <li><i class="fa-solid fa-circle-check"></i> Alignment Checks</li>
                        <li><i class="fa-solid fa-circle-check"></i> Torque Control</li>
                        <li><i class="fa-solid fa-circle-check"></i> Site Sign-Off</li>
                    </ul>
                </div>

                <!-- Spacer marking the end of the section -->
                <div class="process-end" id="process-end"></div>

            </div>

        </div>
    </section>

    <!-- Footer Spacer Section -->
    <div class="footer-spacer">
        Footer Section Spacing
    </div>

    <!-- GSAP CDN Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        // Register ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Responsive MatchMedia (only run on desktop screens 768px and up)
        let mm = gsap.matchMedia();

        mm.add("(min-width: 768px)", () => {
            
            const cards = gsap.utils.toArray(".stacking-card");
            const headerHeight = 80; // height of fixed top navbar
            const startOffset = headerHeight + 20; // 80px + 20px buffer = 100px from top
            const cardSpacing = 70; // cumulative stacking offset per card

            // Pin the Left Column Panel
            ScrollTrigger.create({
                trigger: "#stacking-trigger",
                start: `top ${startOffset}px`,
                endTrigger: "#process-end",
                end: `top ${startOffset + 180}px`, // releases when last card finishes
                pin: "#sticky-panel",
                pinSpacing: false,
                scrub: true
            });

            // Loop through each Right-Side Card and set up stacking ScrollTriggers
            cards.forEach((card, index) => {
                const targetPinTop = startOffset + (index * cardSpacing);

                ScrollTrigger.create({
                    trigger: card,
                    start: `top ${targetPinTop}px`,
                    endTrigger: "#process-end",
                    // The end trigger determines when the card releases from its pinned state.
                    // By matching the target pin top, all cards release at the exact same moment.
                    end: `top ${targetPinTop}px`,
                    pin: true,
                    pinSpacing: false, // cards stack over each other
                    id: `card-pin-${index + 1}`,
                    // Add subtle scaling/opacity effect on stack depth if desired:
                    // scrub: true
                });
            });

        });
    </script>
</body>
</html>
