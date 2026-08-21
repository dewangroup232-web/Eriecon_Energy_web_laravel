@props(['partners' => []])

@php
    $partnerItems = collect($partners)
        ->filter(fn ($partner) => filled(data_get($partner, 'logo')))
        ->values();
@endphp

@if ($partnerItems->isNotEmpty())
    <section class="about-partners" aria-labelledby="about-partners-title" data-partner-section>
        <div class="about-partners-glow about-partners-glow-one" aria-hidden="true"></div>
        <div class="about-partners-glow about-partners-glow-two" aria-hidden="true"></div>

        <div class="container about-partners-container">
            <div class="about-partners-heading" data-partner-heading>
                <div class="about-partners-copy">
                    <span class="about-partners-badge">
                        <i class="fas fa-handshake" aria-hidden="true"></i>
                        Our Partners
                    </span>
                    <h2 id="about-partners-title">Trusted partnerships.<br><span>Shared standards.</span></h2>
                    <p>
                        We collaborate with trusted enterprises and specialist partners to deliver dependable,
                        technology-led solutions across the energy and infrastructure sectors.
                    </p>
                    <span class="about-partners-heading-line" aria-hidden="true"></span>
                </div>
            </div>

            <div class="about-partners-marquee-shell" data-partner-marquee>
                <div class="about-partners-columns" aria-label="Eirecon Energy partner logos">
                    @foreach (range(0, 2) as $columnIndex)
                        @php
                            $columnPartners = $partnerItems
                                ->filter(fn ($partner, $index) => $index % 3 === $columnIndex)
                                ->values();
                        @endphp

                        <div class="about-partners-column about-partners-column-{{ $columnIndex + 1 }}">
                            <div class="about-partners-column-track">
                                @foreach ([false, true] as $isDuplicate)
                                    <div class="about-partners-column-group"
                                        @if ($isDuplicate) aria-hidden="true" @endif>
                                        @foreach ($columnPartners as $partnerIndex => $partner)
                                            @php
                                                $name = data_get(
                                                    $partner,
                                                    'name',
                                                    'Eirecon Energy Partner ' . ($partnerIndex + 1)
                                                );
                                                $logo = data_get($partner, 'logo');
                                                $url = data_get($partner, 'url');
                                            @endphp

                                            <article class="about-partner-logo-card">
                                                @if ($url && !$isDuplicate)
                                                    <a class="about-partner-logo-canvas" href="{{ $url }}"
                                                        aria-label="Visit {{ $name }} website">
                                                        <img src="{{ asset($logo) }}" alt="{{ $name }} logo"
                                                            loading="lazy">
                                                    </a>
                                                @else
                                                    <div class="about-partner-logo-canvas">
                                                        <img src="{{ asset($logo) }}"
                                                            alt="{{ $isDuplicate ? '' : $name . ' logo' }}" loading="lazy">
                                                    </div>
                                                @endif
                                            </article>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="about-partners-mobile-column" aria-label="Eirecon Energy partner logos">
                    <div class="about-partners-column-track">
                        @foreach ([false, true] as $isDuplicate)
                            <div class="about-partners-column-group" @if ($isDuplicate) aria-hidden="true" @endif>
                                @foreach ($partnerItems as $index => $partner)
                                    @php
                                        $name = data_get($partner, 'name', 'Eirecon Energy Partner ' . ($index + 1));
                                        $logo = data_get($partner, 'logo');
                                    @endphp
                                    <article class="about-partner-logo-card">
                                        <div class="about-partner-logo-canvas">
                                            <img src="{{ asset($logo) }}" alt="{{ $isDuplicate ? '' : $name . ' logo' }}"
                                                loading="lazy">
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    @once
        <style>
            .about-partners {
                --partners-navy: #07111f;
                --partners-surface: #0b192c;
                --partners-blue: #2d6be4;
                --partners-blue-light: #8fbdff;
                --partners-orange: #e8921a;
                position: relative;
                isolation: isolate;
                overflow: hidden;
                padding: clamp(82px, 8vw, 124px) 0;
                color: #fff;
                background:
                    linear-gradient(125deg, rgba(7, 17, 31, .98), rgba(11, 25, 44, .96)),
                    var(--partners-navy);
            }

            .about-partners::before {
                position: absolute;
                z-index: -2;
                inset: 0;
                content: "";
                opacity: .42;
                background-image:
                    linear-gradient(rgba(143, 189, 255, .055) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(143, 189, 255, .055) 1px, transparent 1px);
                background-size: 68px 68px;
                -webkit-mask-image: linear-gradient(180deg, transparent, #000 15%, #000 85%, transparent);
                mask-image: linear-gradient(180deg, transparent, #000 15%, #000 85%, transparent);
            }

            .about-partners-glow {
                position: absolute;
                z-index: -1;
                border-radius: 50%;
                pointer-events: none;
                filter: blur(5px);
            }

            .about-partners-glow-one {
                width: 540px;
                height: 540px;
                top: -330px;
                right: -180px;
                background: radial-gradient(circle, rgba(45, 107, 228, .26), transparent 69%);
            }

            .about-partners-glow-two {
                width: 360px;
                height: 360px;
                left: -190px;
                bottom: -230px;
                background: radial-gradient(circle, rgba(232, 146, 26, .16), transparent 70%);
            }

            .about-partners-container {
                position: relative;
                z-index: 2;
            }

            .about-partners-heading {
                --heading-pointer-x: 50%;
                --heading-pointer-y: 50%;
                --heading-rotate-x: 0deg;
                --heading-rotate-y: 0deg;
                position: relative;
                max-width: 940px;
                margin: 0 auto clamp(50px, 6vw, 78px);
                text-align: center;
                perspective: 1000px;
            }

            .about-partners-copy {
                position: relative;
                z-index: 1;
                max-width: 900px;
                margin: 0 auto;
                padding: clamp(20px, 3vw, 34px);
                transform: rotateX(var(--heading-rotate-x)) rotateY(var(--heading-rotate-y));
                transform-style: preserve-3d;
                transition: transform 220ms ease;
            }

            .about-partners-copy::before {
                position: absolute;
                z-index: -1;
                inset: -22px;
                content: "";
                opacity: .22;
                pointer-events: none;
                border-radius: 38px;
                background:
                    radial-gradient(circle 230px at var(--heading-pointer-x) var(--heading-pointer-y), rgba(45, 107, 228, .26), transparent 72%),
                    radial-gradient(circle 160px at calc(100% - var(--heading-pointer-x)) 80%, rgba(232, 146, 26, .12), transparent 74%);
                filter: blur(2px);
                transition: opacity 240ms ease;
            }

            .about-partners-heading:hover .about-partners-copy::before {
                opacity: .72;
            }

            .about-partners-badge {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                min-height: 34px;
                margin-bottom: 22px;
                padding: 7px 14px;
                color: #dceaff;
                border: 1px solid rgba(143, 189, 255, .24);
                border-radius: 999px;
                background: rgba(255, 255, 255, .055);
                backdrop-filter: blur(14px);
                -webkit-backdrop-filter: blur(14px);
                font-size: 11px;
                font-weight: 800;
                line-height: 1;
                letter-spacing: .16em;
                text-transform: uppercase;
            }

            .about-partners-badge i {
                color: var(--partners-orange);
                font-size: 14px;
            }

            .about-partners-copy h2 {
                margin: 0;
                color: #fff;
                font-size: clamp(40px, 5.6vw, 72px);
                font-weight: 900;
                line-height: 1;
                letter-spacing: -.055em;
                text-wrap: balance;
            }

            .about-partners-copy h2 span {
                color: #70aaff;
                background: linear-gradient(90deg, #70aaff 15%, #9cc7ff 58%, #e8921a 115%);
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
                text-shadow: 0 0 32px rgba(45, 107, 228, .18);
            }

            .about-partners-copy p {
                max-width: 690px;
                margin: 26px auto 0;
                color: rgba(229, 239, 255, .7);
                font-size: clamp(15px, 1.35vw, 18px);
                font-weight: 500;
                line-height: 1.7;
            }

            .about-partners-heading-line {
                position: relative;
                display: block;
                width: 150px;
                height: 2px;
                margin: 28px auto 0;
                overflow: hidden;
                border-radius: 999px;
                background: rgba(143, 189, 255, .14);
            }

            .about-partners-heading-line::after {
                position: absolute;
                inset: 0;
                content: "";
                border-radius: inherit;
                background: linear-gradient(90deg, #2d6be4, #70aaff 58%, #e8921a);
                transform: scaleX(.42);
                transform-origin: center;
                transition: transform 420ms cubic-bezier(.2, .75, .2, 1);
            }

            .about-partners-heading:hover .about-partners-heading-line::after {
                transform: scaleX(1);
            }

            .about-partners-marquee-shell {
                position: relative;
            }

            .about-partners-columns {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 20px;
                height: clamp(530px, 58vw, 650px);
                overflow: hidden;
                -webkit-mask-image: linear-gradient(180deg, transparent, #000 8%, #000 92%, transparent);
                mask-image: linear-gradient(180deg, transparent, #000 8%, #000 92%, transparent);
            }

            .about-partners-column,
            .about-partners-mobile-column {
                min-width: 0;
                height: 100%;
                overflow: hidden;
            }

            .about-partners-column-track {
                display: flex;
                flex-direction: column;
                width: 100%;
                will-change: transform;
                animation: about-partners-up var(--partner-scroll-speed, 28s) linear infinite;
            }

            .about-partners-column-1 { --partner-scroll-speed: 27s; }
            .about-partners-column-2 { --partner-scroll-speed: 31s; }
            .about-partners-column-3 { --partner-scroll-speed: 29s; }

            .about-partners-column-2 .about-partners-column-track {
                animation-name: about-partners-down;
            }

            .about-partners-column-group {
                display: flex;
                flex-direction: column;
                gap: 18px;
                padding-bottom: 18px;
            }

            .about-partner-logo-card {
                position: relative;
                display: grid;
                min-width: 0;
                min-height: 174px;
                margin: 0;
                padding: 16px;
                place-items: center;
                overflow: hidden;
                border: 1px solid rgba(111, 139, 255, .24);
                border-radius: 22px;
                background: linear-gradient(145deg, rgba(32, 42, 92, .72), rgba(10, 18, 39, .9) 72%), rgba(13, 24, 48, .86);
                box-shadow: 0 22px 52px rgba(0, 0, 0, .25), inset 0 1px rgba(255, 255, 255, .065);
                backdrop-filter: blur(16px);
                -webkit-backdrop-filter: blur(16px);
                transition: border-color 260ms ease, background 260ms ease, box-shadow 260ms ease;
            }

            .about-partner-logo-card::before {
                position: absolute;
                inset: 0 0 auto;
                height: 2px;
                content: "";
                opacity: .92;
                background: linear-gradient(90deg, transparent, #2d6be4 28%, #70aaff 70%, transparent);
            }

            .about-partner-logo-card::after {
                position: absolute;
                width: 180px;
                height: 180px;
                top: -125px;
                right: -95px;
                content: "";
                border-radius: 50%;
                pointer-events: none;
                background: radial-gradient(circle, rgba(45, 107, 228, .24), transparent 70%);
            }

            .about-partner-logo-card:hover,
            .about-partner-logo-card:focus-within {
                border-color: rgba(112, 170, 255, .58);
                background: linear-gradient(145deg, rgba(39, 66, 126, .84), rgba(10, 19, 42, .94) 72%), rgba(13, 24, 48, .9);
                box-shadow: 0 28px 65px rgba(0, 0, 0, .34), inset 0 1px rgba(255, 255, 255, .09);
            }

            .about-partner-logo-canvas {
                position: relative;
                z-index: 2;
                display: grid;
                width: 100%;
                height: 140px;
                padding: clamp(22px, 2.6vw, 34px);
                place-items: center;
                overflow: hidden;
                border: 1px solid rgba(255, 255, 255, .78);
                border-radius: 15px;
                background: rgba(255, 255, 255, .97);
                box-shadow: 0 13px 32px rgba(0, 0, 0, .2), inset 0 1px rgba(255, 255, 255, .96);
            }

            a.about-partner-logo-canvas:focus-visible {
                outline: 3px solid var(--partners-blue-light);
                outline-offset: 4px;
            }

            .about-partner-logo-canvas img {
                display: block;
                width: auto;
                max-width: 100%;
                height: auto;
                max-height: 82px;
                object-fit: contain;
                opacity: .84;
                filter: grayscale(1);
                transition: opacity 220ms ease, filter 220ms ease, transform 220ms ease;
            }

            .about-partner-logo-card:hover .about-partner-logo-canvas img,
            .about-partner-logo-card:focus-within .about-partner-logo-canvas img {
                opacity: 1;
                filter: grayscale(0);
                transform: scale(1.045);
            }

            .about-partners-mobile-column {
                display: none;
            }

            .about-partners-marquee-shell:hover .about-partners-column-track,
            .about-partners-marquee-shell:focus-within .about-partners-column-track {
                animation-play-state: paused;
            }

            @keyframes about-partners-up {
                from { transform: translateY(0); }
                to { transform: translateY(-50%); }
            }

            @keyframes about-partners-down {
                from { transform: translateY(-50%); }
                to { transform: translateY(0); }
            }

            @media (max-width: 991px) {
                .about-partners-heading {
                    grid-template-columns: 1fr;
                }


                .about-partners-columns {
                    gap: 14px;
                    height: 570px;
                }

                .about-partner-logo-card {
                    min-height: 154px;
                    padding: 12px;
                    border-radius: 18px;
                }

                .about-partner-logo-canvas {
                    height: 128px;
                    padding: 20px;
                }
            }

            @media (max-width: 767px) {
                .about-partners-columns {
                    display: none;
                }

                .about-partners-mobile-column {
                    display: block;
                    width: min(100%, 420px);
                    height: 540px;
                    margin: 0 auto;
                    -webkit-mask-image: linear-gradient(180deg, transparent, #000 7%, #000 93%, transparent);
                    mask-image: linear-gradient(180deg, transparent, #000 7%, #000 93%, transparent);
                }

                .about-partners-mobile-column .about-partners-column-track {
                    --partner-scroll-speed: 48s;
                }
            }

            @media (max-width: 575px) {
                .about-partners {
                    padding: 72px 0;
                }

                .about-partners-copy h2 {
                    font-size: clamp(38px, 12vw, 52px);
                }

            }

            @media (prefers-reduced-motion: reduce) {
                .about-partners-column,
                .about-partners-mobile-column {
                    overflow-y: auto;
                    -webkit-mask-image: none;
                    mask-image: none;
                    scrollbar-width: thin;
                }

                .about-partners-column-track {
                    animation: none;
                }

                .about-partner-logo-card,
                .about-partner-logo-canvas img,
                .about-partners-copy,
                .about-partners-heading-line::after {
                    transition: none;
                }

                .about-partners-copy {
                    transform: none;
                }

            }
        </style>


        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

                document.querySelectorAll('[data-partner-heading]').forEach(function (heading) {
                    if (reducedMotion.matches) return;

                    let frame = 0;
                    heading.addEventListener('pointermove', function (event) {
                        if (frame) cancelAnimationFrame(frame);
                        frame = requestAnimationFrame(function () {
                            const bounds = heading.getBoundingClientRect();
                            const x = Math.min(Math.max(event.clientX - bounds.left, 0), bounds.width);
                            const y = Math.min(Math.max(event.clientY - bounds.top, 0), bounds.height);
                            const xPercent = (x / Math.max(bounds.width, 1)) * 100;
                            const yPercent = (y / Math.max(bounds.height, 1)) * 100;
                            const rotateY = ((xPercent - 50) / 50) * 1.8;
                            const rotateX = ((50 - yPercent) / 50) * 1.4;

                            heading.style.setProperty('--heading-pointer-x', xPercent + '%');
                            heading.style.setProperty('--heading-pointer-y', yPercent + '%');
                            heading.style.setProperty('--heading-rotate-x', rotateX + 'deg');
                            heading.style.setProperty('--heading-rotate-y', rotateY + 'deg');
                            frame = 0;
                        });
                    });

                    heading.addEventListener('pointerleave', function () {
                        if (frame) cancelAnimationFrame(frame);
                        heading.style.setProperty('--heading-pointer-x', '50%');
                        heading.style.setProperty('--heading-pointer-y', '50%');
                        heading.style.setProperty('--heading-rotate-x', '0deg');
                        heading.style.setProperty('--heading-rotate-y', '0deg');
                        frame = 0;
                    });
                });
            });
        </script>

    @endonce
@endif
