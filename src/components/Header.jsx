import React, { useState, useEffect } from 'react';
import { Link, useLocation } from 'react-router-dom';

export default function Header() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const location = useLocation();

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 30);
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  // Close mobile drawer when route changes
  useEffect(() => {
    setMobileMenuOpen(false);
  }, [location.pathname]);

  // Lock body scroll when mobile menu is open
  useEffect(() => {
    if (mobileMenuOpen) {
      document.body.style.overflow = 'hidden';
    } else {
      document.body.style.overflow = '';
    }
    return () => {
      document.body.style.overflow = '';
    };
  }, [mobileMenuOpen]);

  const isActive = (path) => {
    if (path === '/') {
      return location.pathname === '/' || location.pathname === '/index' || location.pathname === '/index.html';
    }
    return location.pathname.startsWith(path);
  };

  // Determine if navbar is in white background mode
  // It's white when scrolled, or on inner pages, or default
  const isWhiteNav = isScrolled || location.pathname !== '/';

  return (
    <>
      {/* Overlay Screen for Mobile Navigation */}
      <div
        className={`overlay-screen ${mobileMenuOpen ? 'opened show' : ''}`}
        onClick={() => setMobileMenuOpen(false)}
        aria-hidden="true"
      />

      <header>
        <nav
          className={`navbar mobile-sidenav nav-border navbar-sticky navbar-default validnavs navbar-fixed ${
            isWhiteNav ? 'navbar-white-mode sticked' : 'navbar-dark-mode no-background white'
          }`}
          style={{
            background: isWhiteNav ? '#ffffff' : 'transparent',
            boxShadow: isWhiteNav ? '0 4px 20px rgba(0, 0, 0, 0.08)' : 'none',
            borderBottom: isWhiteNav ? '1px solid rgba(0, 0, 0, 0.06)' : '1px solid rgba(255, 255, 255, 0.15)',
            transition: 'background 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease',
          }}
        >
          <div className="container d-flex justify-content-between align-items-center">
            {/* Header Navigation Brand & Mobile Toggle */}
            <div className="navbar-header">
              <button
                type="button"
                className="navbar-toggle open-mobile-menu"
                aria-label="Open navigation"
                onClick={() => setMobileMenuOpen(true)}
                style={{
                  color: isWhiteNav ? '#1e293b' : '#ffffff',
                }}
              >
                <i className="fa fa-bars" />
              </button>
              <Link className="navbar-brand" to="/">
                {isWhiteNav ? (
                  <img
                    src="/assets/img/omega-logo.png"
                    className="logo logo-scrolled"
                    alt="Omega Group"
                    style={{ maxHeight: '46px', width: 'auto', display: 'block' }}
                  />
                ) : (
                  <img
                    src="/assets/img/omega-logo-light.png"
                    className="logo logo-display"
                    alt="Omega Group"
                    style={{ maxHeight: '46px', width: 'auto', display: 'block' }}
                  />
                )}
              </Link>
            </div>

            {/* Nav Links: ONLY Home, About Us, Contact Us */}
            <div
              className={`collapse navbar-collapse ${mobileMenuOpen ? 'show in site-mobile-open collapse-mobile' : ''}`}
              id="navbar-menu"
            >
              <div className="mobile-menu-header d-lg-none">
                <Link to="/" className="mobile-logo-link" onClick={() => setMobileMenuOpen(false)}>
                  <img src="/assets/img/omega-logo.png" alt="Omega Group" className="mobile-nav-logo" />
                </Link>
                <button
                  type="button"
                  className="navbar-toggle mobile-menu-close close-mobile-menu"
                  aria-label="Close navigation"
                  onClick={() => setMobileMenuOpen(false)}
                >
                  <i className="fa-solid fa-xmark" />
                </button>
              </div>

              <ul className="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li>
                  <Link
                    to="/"
                    className={isActive('/') ? 'active' : ''}
                    style={{
                      color: isActive('/')
                        ? '#008ed6'
                        : isWhiteNav
                        ? '#1e293b'
                        : '#ffffff',
                      fontWeight: 600,
                      fontSize: '15px',
                    }}
                  >
                    Home
                  </Link>
                </li>
                <li>
                  <Link
                    to="/about-us"
                    className={isActive('/about-us') ? 'active' : ''}
                    style={{
                      color: isActive('/about-us')
                        ? '#008ed6'
                        : isWhiteNav
                        ? '#1e293b'
                        : '#ffffff',
                      fontWeight: 600,
                      fontSize: '15px',
                    }}
                  >
                    About Us
                  </Link>
                </li>
                <li>
                  <Link
                    to="/contact"
                    className={isActive('/contact') ? 'active' : ''}
                    style={{
                      color: isActive('/contact')
                        ? '#008ed6'
                        : isWhiteNav
                        ? '#1e293b'
                        : '#ffffff',
                      fontWeight: 600,
                      fontSize: '15px',
                    }}
                  >
                    Contact Us
                  </Link>
                </li>
              </ul>
            </div>

            {/* Right-side Action Button */}
            <div className="attr-right">
              <div className="attr-nav">
                <ul>
                  <li className="button">
                    <Link
                      to="/contact"
                      style={{
                        color: isWhiteNav ? '#008ed6' : '#ffffff',
                        borderColor: isWhiteNav ? '#008ed6' : 'rgba(255, 255, 255, 0.6)',
                        background: 'transparent',
                        fontWeight: 700,
                        padding: '10px 24px',
                        borderRadius: '50px',
                        borderWidth: '1.5px',
                        borderStyle: 'solid',
                        display: 'inline-block',
                        textTransform: 'uppercase',
                        letterSpacing: '0.8px',
                        fontSize: '13px',
                      }}
                    >
                      Contact Us
                    </Link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>
    </>
  );
}
