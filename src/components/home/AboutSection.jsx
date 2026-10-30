import React from 'react';
import { Link } from 'react-router-dom';

export default function AboutSection() {
  return (
    <div className="about-area overflow-hidden shape-box py-5">
      <div className="container">
        <div className="about-box">
          <div className="row align-items-center">
            {/* Left Brand Showcase Card */}
            <div className="col-lg-6 thumb-left">
              <div className="omega-brand-showcase">
                <div className="omega-emblem-wrap">
                  <img
                    src="/assets/img/omega-emblem.png"
                    alt="Omega Group Logo"
                    className="omega-showcase-emblem"
                  />
                </div>
                <div className="omega-brand-card">
                  <div className="omega-brand-card-inner">
                    <h2 className="omega-card-title">
                      <span>Omega</span>
                      <span>Group</span>
                    </h2>
                    <div className="omega-card-divider" aria-hidden="true">
                      <span className="bar bar-cyan"></span>
                      <span className="bar bar-teal"></span>
                      <span className="bar bar-blue"></span>
                      <span className="bar bar-red"></span>
                    </div>
                    <p className="omega-card-subtitle">
                      A Visionary Consortium<br />Delivering Excellence
                    </p>
                  </div>
                </div>
              </div>
            </div>

            {/* Right Information & Experience */}
            <div className="col-lg-6 info">
              <div className="experiecne" style={{ marginBottom: '24px' }}>
                <strong style={{ fontSize: '85px', lineHeight: '70px' }}>24</strong>
                <h5 style={{ fontSize: '18px', lineHeight: '1.4' }}>
                  Years Work experience in Delivery Excellence
                </h5>
              </div>
              <div className="about-content-text" style={{ paddingLeft: '10px' }}>
                <p style={{ fontSize: '16px', lineHeight: '1.7', color: '#475569', marginBottom: '14px' }}>
                  An established holding platform with roots since 2003, structured as a consortium of specialised
                  operating companies across EPC, renewable energy, infrastructure, commercial operations and international delivery.
                </p>
                <p style={{ fontSize: '16px', lineHeight: '1.7', color: '#475569', marginBottom: '22px' }}>
                  Teams are organised for multiple geographies and parallel work packages, allowing the group to run
                  large renewable programmes alongside civil, telecom and mining contracts.
                </p>
                <div className="home-ceo-actions" style={{ marginTop: '12px' }}>
                  <Link className="btn circle btn-theme angle effect btn-md" to="/about-us">
                    Know More
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className="shape-bg opacity-03">
        <img src="/assets/img/shape/5.svg" alt="Shape" />
      </div>
    </div>
  );
}

