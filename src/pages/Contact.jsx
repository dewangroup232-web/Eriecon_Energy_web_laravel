import React, { useState, useEffect } from 'react';
import '../styles/contact.css';

export default function Contact() {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
    vertical: 'Tender / Partnership Inquiry',
    comments: '',
  });

  const [submitted, setSubmitted] = useState(false);
  const [isSubmitting, setIsSubmitting] = useState(false);

  useEffect(() => {
    document.title = 'Contact Omega Group | Corporate Headquarters & Regional Hubs';
  }, []);

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData((prev) => ({ ...prev, [name]: value }));
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    setIsSubmitting(true);
    // Simulate API submission
    setTimeout(() => {
      setIsSubmitting(false);
      setSubmitted(true);
      setFormData({
        name: '',
        email: '',
        phone: '',
        vertical: 'Tender / Partnership Inquiry',
        comments: '',
      });
    }, 800);
  };

  return (
    <div className="omega-contact-page">
      {/* HERO BANNER */}
      <div className="omega-contact-hero" data-reveal="fade-up">
        <div className="container">
          <div className="row align-items-center">
            <div className="col-lg-10">
              <h1>
                Contact <span>Omega Group</span>
              </h1>
              <p>
                Corporate headquarters in New Delhi, with branch operations and project hubs across Dubai,
                Bengaluru, Hyderabad, Mumbai and Pune.
              </p>
            </div>
          </div>
        </div>
      </div>

      {/* MAIN CONTACT GRID */}
      <section className="omega-contact-main" id="contact-info">
        <div className="container">
          <div className="row g-4 align-items-start">
            {/* Left Column: Official Info Blocks */}
            <div className="col-lg-5" data-reveal="slide-right">
              {/* Brand Hub Card */}
              <div className="omega-brand-card-contact">
                <div className="brand-header">
                  <img src="/assets/img/omega-emblem.png" alt="Omega Group Emblem" />
                  <div>
                    <h3>Omega Group</h3>
                    <div
                      style={{
                        display: 'flex',
                        gap: '4px',
                        height: '3px',
                        width: '65px',
                        marginTop: '4px',
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
                <p className="brand-hq-desc">
                  Corporate headquarters in New Delhi, with branch operations across Dubai, Bengaluru, Hyderabad,
                  Mumbai and Pune.
                </p>
                <div className="omega-cities-strip">
                  {['Dubai', 'New Delhi', 'Bengaluru', 'Hyderabad', 'Mumbai', 'Pune'].map((city) => (
                    <span key={city} className="omega-city-chip">
                      {city}
                    </span>
                  ))}
                </div>
              </div>

              {/* 4 Styled Contact Detail Blocks */}
              <div className="omega-contact-blocks">
                <div className="omega-detail-block">
                  <span className="block-label">Head Office</span>
                  <p className="block-value">DPT 322, Okhla Prime Tower, Phase-1, New Delhi &ndash; 110020</p>
                </div>

                <div className="omega-detail-block">
                  <span className="block-label">Telephone</span>
                  <p className="block-value">
                    <a href="tel:01141630318">011-41630318</a>
                  </p>
                </div>

                <div className="omega-detail-block">
                  <span className="block-label">Email</span>
                  <p className="block-value">
                    <a href="mailto:info@omegainfram.com">info@omegainfram.com</a>
                  </p>
                </div>

                <div className="omega-detail-block">
                  <span className="block-label">Website</span>
                  <p className="block-value">
                    <a href="https://www.omegainfram.com" target="_blank" rel="noopener noreferrer">
                      www.omegainfram.com
                    </a>
                  </p>
                </div>
              </div>
            </div>

            {/* Right Column: Interactive Inquiry Form */}
            <div className="col-lg-7">
              <div className="omega-form-card">
                <div className="omega-form-header">
                  <h3>Send an Executive Enquiry</h3>
                  <p>
                    Connect with our technical planning and business development teams for tenders, partnerships,
                    and joint ventures.
                  </p>
                </div>

                {submitted && (
                  <div
                    className="omega-alert omega-alert-success"
                    style={{
                      display: 'flex',
                      alignItems: 'center',
                      gap: '12px',
                      padding: '16px 20px',
                      background: 'rgba(11, 123, 100, 0.15)',
                      border: '1px solid #0b7b64',
                      borderRadius: '8px',
                      color: '#34d399',
                      marginBottom: '20px',
                    }}
                  >
                    <i className="fas fa-check-circle" style={{ fontSize: '20px' }}></i>
                    <span>Thank you! Your executive enquiry has been submitted. Our team will contact you shortly.</span>
                  </div>
                )}

                <form onSubmit={handleSubmit}>
                  <div className="row">
                    <div className="col-md-6">
                      <div className="omega-input-group">
                        <label htmlFor="name">
                          Your Full Name <span style={{ color: '#ef4444' }}>*</span>
                        </label>
                        <input
                          type="text"
                          id="name"
                          name="name"
                          value={formData.name}
                          onChange={handleChange}
                          placeholder="e.g. Rajesh Kumar"
                          required
                        />
                      </div>
                    </div>

                    <div className="col-md-6">
                      <div className="omega-input-group">
                        <label htmlFor="email">
                          Work Email Address <span style={{ color: '#ef4444' }}>*</span>
                        </label>
                        <input
                          type="email"
                          id="email"
                          name="email"
                          value={formData.email}
                          onChange={handleChange}
                          placeholder="e.g. name@organization.com"
                          required
                        />
                      </div>
                    </div>
                  </div>

                  <div className="row">
                    <div className="col-md-6">
                      <div className="omega-input-group">
                        <label htmlFor="phone">Phone / Contact Number</label>
                        <input
                          type="tel"
                          id="phone"
                          name="phone"
                          value={formData.phone}
                          onChange={handleChange}
                          placeholder="+91 98765 43210"
                        />
                      </div>
                    </div>

                    <div className="col-md-6">
                      <div className="omega-input-group">
                        <label htmlFor="vertical">Vertical / Sector of Interest</label>
                        <select id="vertical" name="vertical" value={formData.vertical} onChange={handleChange}>
                          <option value="Renewable Energy & Solar">
                            Renewable Energy &amp; Solar (PM-KUSUM / Rooftop)
                          </option>
                          <option value="EPC & Civil Infrastructure">EPC &amp; Civil Infrastructure</option>
                          <option value="Telecom & OFC Networks">Telecom &amp; OFC Networks</option>
                          <option value="Mining & Coal Logistics">Mining &amp; Coal Logistics</option>
                          <option value="Commercial Trading & GCC">Commercial Trading &amp; GCC Operations</option>
                          <option value="Tender / Partnership Inquiry">Tender / Institutional Partnership</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div className="omega-input-group">
                    <label htmlFor="comments">
                      Project Scope / Message <span style={{ color: '#ef4444' }}>*</span>
                    </label>
                    <textarea
                      id="comments"
                      name="comments"
                      value={formData.comments}
                      onChange={handleChange}
                      placeholder="Please describe your requirements, project location, or inquiry details..."
                      required
                    ></textarea>
                  </div>

                  <button type="submit" className="omega-btn-submit" disabled={isSubmitting}>
                    <span>{isSubmitting ? 'Submitting...' : 'Submit Executive Enquiry'}</span>
                    <i className="fas fa-paper-plane"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* LOCATION MAP SECTION */}
      <div className="omega-map-section">
        <div className="container">
          <div className="omega-map-card" data-reveal="fade-up">
            <iframe
              title="Omega Group Corporate Office Location"
              src="https://maps.google.com/maps?q=DLF%20Prime%20Tower%2C%20Okhla%20Phase%201%2C%20New%20Delhi&t=&z=15&ie=UTF8&iwloc=&output=embed"
              loading="lazy"
              style={{ width: '100%', height: '420px', border: 0 }}
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  );
}

