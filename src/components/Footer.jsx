import React from 'react';
import { Link } from 'react-router-dom';

export default function Footer() {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="bg-dark text-light" style={{ position: 'relative' }}>
      <div className="container">
        <div className="f-items default-padding" style={{ paddingTop: '60px', paddingBottom: '50px' }}>
          <div className="row">
            {/* Column 1: Brand & Consortium Overview */}
            <div className="col-lg-4 col-md-6 single-item mb-4 mb-lg-0">
              <div className="f-item about">
                <img
                  src="/assets/img/omega-logo-light.png"
                  alt="Omega Group"
                  style={{ height: '48px', maxWidth: '100%', objectFit: 'contain', marginBottom: '20px' }}
                />
                <p
                  style={{
                    color: 'rgba(255, 255, 255, 0.75)',
                    fontSize: '14px',
                    lineHeight: '1.65',
                    marginBottom: '18px',
                  }}
                >
                  An established holding platform with roots since 2003, structured as a consortium of specialised
                  operating companies across EPC, renewable energy, infrastructure, commercial operations and international delivery.
                </p>
                <div
                  style={{
                    display: 'flex',
                    gap: '6px',
                    height: '4px',
                    width: '90px',
                    borderRadius: '2px',
                    overflow: 'hidden',
                  }}
                >
                  <span style={{ flex: 1, background: '#008ed6' }}></span>
                  <span style={{ flex: 1, background: '#cf2027' }}></span>
                  <span style={{ flex: 1, background: '#0b7b64' }}></span>
                </div>
              </div>
            </div>

            {/* Column 2: Head Office */}
            <div className="col-lg-3 col-md-6 single-item mb-4 mb-lg-0">
              <div className="f-item contact">
                <h4
                  className="widget-title"
                  style={{
                    color: '#ffffff',
                    fontSize: '18px',
                    fontWeight: 700,
                    marginBottom: '20px',
                    textTransform: 'uppercase',
                    letterSpacing: '0.5px',
                  }}
                >
                  Corporate Office
                </h4>
                <p
                  style={{
                    color: 'rgba(255, 255, 255, 0.78)',
                    fontSize: '14px',
                    lineHeight: '1.6',
                    marginBottom: '14px',
                  }}
                >
                  DPT 322, Okhla Prime Tower,<br />Phase-1, New Delhi &ndash; 110020
                </p>
                <ul style={{ listStyle: 'none', padding: 0, margin: 0 }}>
                  <li
                    style={{
                      display: 'flex',
                      alignItems: 'center',
                      gap: '10px',
                      marginBottom: '10px',
                      color: 'rgba(255, 255, 255, 0.78)',
                      fontSize: '13.5px',
                    }}
                  >
                    <i className="fas fa-phone-alt" style={{ color: '#008ed6', fontSize: '14px' }}></i>
                    <a href="tel:01141630318" style={{ color: 'inherit', textDecoration: 'none' }}>011-41630318</a>
                  </li>
                  <li
                    style={{
                      display: 'flex',
                      alignItems: 'center',
                      gap: '10px',
                      marginBottom: '10px',
                      color: 'rgba(255, 255, 255, 0.78)',
                      fontSize: '13.5px',
                    }}
                  >
                    <i className="fas fa-envelope" style={{ color: '#008ed6', fontSize: '14px' }}></i>
                    <a href="mailto:info@omegainfram.com" style={{ color: 'inherit', textDecoration: 'none' }}>info@omegainfram.com</a>
                  </li>
                  <li
                    style={{
                      display: 'flex',
                      alignItems: 'center',
                      gap: '10px',
                      color: 'rgba(255, 255, 255, 0.78)',
                      fontSize: '13.5px',
                    }}
                  >
                    <i className="fas fa-globe" style={{ color: '#008ed6', fontSize: '14px' }}></i>
                    <a href="https://www.omegainfram.com" target="_blank" rel="noopener noreferrer" style={{ color: 'inherit', textDecoration: 'none' }}>
                      www.omegainfram.com
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            {/* Column 3: Branch Network */}
            <div className="col-lg-3 col-md-6 single-item mb-4 mb-md-0">
              <div className="f-item branch">
                <h4
                  className="widget-title"
                  style={{
                    color: '#ffffff',
                    fontSize: '18px',
                    fontWeight: 700,
                    marginBottom: '20px',
                    textTransform: 'uppercase',
                    letterSpacing: '0.5px',
                  }}
                >
                  Branch Presence
                </h4>
                <p
                  style={{
                    color: 'rgba(255, 255, 255, 0.75)',
                    fontSize: '13.5px',
                    lineHeight: '1.6',
                    marginBottom: '15px',
                  }}
                >
                  Strategic hubs and operating presences across India and international markets:
                </p>
                <div style={{ display: 'flex', flexWrap: 'wrap', gap: '8px' }}>
                  {['Dubai', 'New Delhi', 'Bengaluru', 'Hyderabad', 'Mumbai', 'Pune'].map((city) => (
                    <span
                      key={city}
                      style={{
                        background: 'rgba(255, 255, 255, 0.08)',
                        border: '1px solid rgba(255, 255, 255, 0.15)',
                        padding: '5px 12px',
                        borderRadius: '6px',
                        fontSize: '12px',
                        color: '#e2e8f0',
                      }}
                    >
                      {city}
                    </span>
                  ))}
                </div>
              </div>
            </div>

            {/* Column 4: Quick Links (ONLY Home, About Us, Contact Us) */}
            <div className="col-lg-2 col-md-6 single-item">
              <div className="f-item link">
                <h4
                  className="widget-title"
                  style={{
                    color: '#ffffff',
                    fontSize: '18px',
                    fontWeight: 700,
                    marginBottom: '20px',
                    textTransform: 'uppercase',
                    letterSpacing: '0.5px',
                  }}
                >
                  Navigation
                </h4>
                <ul style={{ listStyle: 'none', padding: 0, margin: 0 }}>
                  <li style={{ marginBottom: '12px' }}>
                    <Link
                      to="/"
                      style={{
                        color: 'rgba(255, 255, 255, 0.75)',
                        textDecoration: 'none',
                        fontSize: '14px',
                        transition: 'color 0.2s',
                      }}
                    >
                      <i className="fas fa-chevron-right me-2" style={{ fontSize: '10px', color: '#008ed6' }}></i> Home
                    </Link>
                  </li>
                  <li style={{ marginBottom: '12px' }}>
                    <Link
                      to="/about-us"
                      style={{
                        color: 'rgba(255, 255, 255, 0.75)',
                        textDecoration: 'none',
                        fontSize: '14px',
                        transition: 'color 0.2s',
                      }}
                    >
                      <i className="fas fa-chevron-right me-2" style={{ fontSize: '10px', color: '#008ed6' }}></i> About Us
                    </Link>
                  </li>
                  <li style={{ marginBottom: '12px' }}>
                    <Link
                      to="/contact"
                      style={{
                        color: 'rgba(255, 255, 255, 0.75)',
                        textDecoration: 'none',
                        fontSize: '14px',
                        transition: 'color 0.2s',
                      }}
                    >
                      <i className="fas fa-chevron-right me-2" style={{ fontSize: '10px', color: '#008ed6' }}></i> Contact Us
                    </Link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        className="footer-bottom"
        style={{
          borderTop: '1px solid rgba(255, 255, 255, 0.1)',
          padding: '22px 0',
        }}
      >
        <div className="container">
          <div className="row align-items-center">
            <div className="col-lg-6 text-center text-lg-start mb-2 mb-lg-0">
              <p style={{ margin: 0, color: 'rgba(255, 255, 255, 0.6)', fontSize: '13.5px' }}>
                &copy; Copyright {currentYear}. All Rights Reserved by{' '}
                <Link to="/" style={{ color: '#008ed6', fontWeight: 600, textDecoration: 'none' }}>
                  Omega Group
                </Link>
              </p>
            </div>
            <div className="col-lg-6 text-center text-lg-end">
              <span style={{ color: 'rgba(255, 255, 255, 0.6)', fontSize: '13px' }}>
                Execution Discipline &bull; Technical Resilience &bull; Responsible Delivery
              </span>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
}
