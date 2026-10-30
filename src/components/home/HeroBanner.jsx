import React, { useState, useEffect, useRef } from 'react';
import { Link } from 'react-router-dom';

const slides = [
  {
    image: '/assets/img/banner/renewable_solar_wind.jpg',
    title: 'Renewable Energy & Solar',
    subtitle: 'Solar, hybrid and storage-linked generation is the groupʼs primary growth engine',
    ctaText: 'About Our Consortium',
    ctaLink: '/about-us',
  },
  {
    image: '/assets/img/banner/banner_2.jpeg',
    title: 'Infrastructure & Civil Works',
    subtitle: 'Road construction, urban development, civil and structural works, utilities and real estate infrastructure',
    ctaText: 'Contact Us',
    ctaLink: '/contact',
  },
  {
    image: '/assets/img/services/telecom_network.jpg',
    title: 'Telecom & OFC Infrastructure',
    subtitle: 'Optical fiber backbone and access network construction',
    ctaText: 'Get In Touch',
    ctaLink: '/contact',
  },
];

export default function HeroBanner() {
  const [currentSlide, setCurrentSlide] = useState(0);
  const [isPaused, setIsPaused] = useState(false);
  const timerRef = useRef(null);

  useEffect(() => {
    if (!isPaused) {
      timerRef.current = setInterval(() => {
        setCurrentSlide((prev) => (prev + 1) % slides.length);
      }, 4500);
    }
    return () => {
      if (timerRef.current) clearInterval(timerRef.current);
    };
  }, [isPaused]);

  const prevSlide = () => {
    setCurrentSlide((prev) => (prev === 0 ? slides.length - 1 : prev - 1));
  };

  const nextSlide = () => {
    setCurrentSlide((prev) => (prev + 1) % slides.length);
  };

  return (
    <div className="banner-area inc-content text-medium top-pad-60 position-relative">
      <div id="bootcarousel" className="carousel text-center slide text-light carousel-fade animate_text">
        <div className="carousel-inner carousel-zoom position-relative" style={{ minHeight: '620px', overflow: 'hidden' }}>
          {slides.map((slide, index) => {
            const active = index === currentSlide;
            return (
              <div
                key={index}
                className={`carousel-item ${active ? 'active' : ''}`}
                style={{
                  display: active ? 'block' : 'none',
                  opacity: active ? 1 : 0,
                  transition: 'opacity 0.8s ease-in-out',
                  position: 'relative',
                  minHeight: '620px',
                }}
              >
                <div
                  className="slider-thumb bg-cover"
                  style={{
                    backgroundImage: `url(${slide.image})`,
                    position: 'absolute',
                    inset: 0,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                    transform: active ? 'scale(1.05)' : 'scale(1)',
                    transition: 'transform 6s ease-out',
                  }}
                />
                <div
                  className="box-table shadow dark"
                  style={{
                    position: 'relative',
                    zIndex: 2,
                    background: 'rgba(5, 14, 28, 0.65)',
                    minHeight: '620px',
                    display: 'flex',
                    alignItems: 'center',
                    justifyContent: 'center',
                    width: '100%',
                  }}
                >
                  <div className="box-cell w-100 py-5">
                    <div className="container">
                      <div className="row">
                        <div className="col-lg-10 offset-lg-1">
                          <div className="content">
                            <h2
                              style={{
                                color: '#ffffff',
                                fontSize: 'clamp(32px, 4.5vw, 56px)',
                                fontWeight: 800,
                                textShadow: '0 4px 20px rgba(0, 0, 0, 0.7)',
                              }}
                            >
                              {slide.title}
                            </h2>
                            <h3
                              style={{
                                color: '#ffffff',
                                textShadow: '0 2px 10px rgba(0, 0, 0, 0.6)',
                              }}
                            >
                              {slide.subtitle}
                            </h3>
                            <Link className="btn circle btn-light effect btn-md angle mt-3" to={slide.ctaLink}>
                              {slide.ctaText}
                            </Link>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            );
          })}

          {/* Left and right controls */}
          <button
            className="carousel-control-prev"
            type="button"
            onClick={prevSlide}
            aria-label="Previous slide"
            style={{
              position: 'absolute',
              top: '50%',
              left: '20px',
              transform: 'translateY(-50%)',
              zIndex: 10,
              background: 'rgba(0, 0, 0, 0.35)',
              border: 'none',
              width: '46px',
              height: '46px',
              borderRadius: '50%',
              color: '#fff',
              cursor: 'pointer',
            }}
          >
            <i className="fa fa-chevron-left" />
          </button>
          <button
            className="carousel-control-next"
            type="button"
            onClick={nextSlide}
            aria-label="Next slide"
            style={{
              position: 'absolute',
              top: '50%',
              right: '20px',
              transform: 'translateY(-50%)',
              zIndex: 10,
              background: 'rgba(0, 0, 0, 0.35)',
              border: 'none',
              width: '46px',
              height: '46px',
              borderRadius: '50%',
              color: '#fff',
              cursor: 'pointer',
            }}
          >
            <i className="fa fa-chevron-right" />
          </button>
        </div>

        {/* Play/Pause Rotation Toggle */}
        <button
          className="banner-cycle-toggle"
          type="button"
          aria-label={isPaused ? 'Start banner rotation' : 'Pause banner rotation'}
          aria-pressed={isPaused}
          onClick={() => setIsPaused(!isPaused)}
        >
          <i className={`fas ${isPaused ? 'fa-play' : 'fa-pause'}`} aria-hidden="true" />
        </button>
      </div>
    </div>
  );
}
