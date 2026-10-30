import React from 'react';
import { Link } from 'react-router-dom';

const storyCards = [
  {
    image: '/assets/img/diversity_equity_inclusion.jpg',
    tag: 'People & Culture',
    title: 'Diversity, Equity & Inclusion',
    desc: 'Fostering an inclusive and collaborative workplace where diverse minds drive engineering innovation.',
    link: '/about-us',
  },
  {
    image: '/assets/img/learning_development.jpg',
    tag: 'Capability',
    title: 'Learning & Development',
    desc: 'Empowering multidisciplinary crews with ongoing technical masterclasses and safety certifications.',
    link: '/about-us',
  },
  {
    image: '/assets/img/leadership_blocks.jpg',
    tag: 'Leadership',
    title: 'People Experiences',
    desc: 'Creating an inspiring, high-performance ecosystem that nurtures tomorrow’s industrial leaders.',
    link: '/about-us',
  },
  {
    image: '/assets/img/services/16.jpeg',
    tag: 'Since 2003',
    title: 'About Us & Group Heritage',
    desc: 'Over two decades of established industry delivery across essential and high-growth sectors.',
    link: '/about-us',
  },
  {
    image: '/assets/img/banner/epc_service_1.jpg',
    tag: 'EPC Excellence',
    title: 'We Delivers',
    desc: 'End-to-end turnkey engineering, procurement, and construction for critical national programmes.',
    link: '/about-us',
  },
  {
    image: '/assets/img/specialized_operating_entities.jpg',
    tag: 'Consortium',
    title: 'Specialised Operating Entities',
    desc: '10 coordinated operating companies executing in synergy under unified group strategy.',
    link: '/about-us',
  },
  {
    image: '/assets/img/partners_handshake.jpg',
    tag: 'Partnerships',
    title: 'Our Clients & Partners',
    desc: 'Trusted supplier and partner to premier PSUs, telecom majors, and global infrastructure giants.',
    link: '#omega-clients',
  },
  {
    image: '/assets/img/csr_sustainability.jpg',
    tag: 'Impact',
    title: 'SR Initiatives & Sustainability',
    desc: 'Active corporate social responsibility and community upliftment across all operating geographies.',
    link: '/about-us',
  },
];

export default function StorySection() {
  return (
    <section className="omega-story-section" id="omega-story" data-reveal="fade-up">
      <div className="container-fluid px-lg-5 px-3">
        <div className="row align-items-center g-4">
          {/* Left Column: Brand Box */}
          <div className="col-xl-4 col-lg-5">
            <div className="omega-brand-box">
              <div className="d-flex align-items-center gap-3 mb-2">
                <img
                  src="/assets/img/omega-emblem.png"
                  alt="Omega Group Emblem"
                  className="omega-box-emblem"
                />
                <div>
                  <h3 className="omega-box-name">Omega Group</h3>
                  <div className="omega-color-bars">
                    <span className="bar-cyan"></span>
                    <span className="bar-red"></span>
                    <span className="bar-green"></span>
                  </div>
                </div>
              </div>
              <p className="omega-box-tagline">A Visionary Consortium Delivering Excellence</p>
            </div>
          </div>

          {/* Right Column: Continuous Horizontal Auto-Scroll Track */}
          <div className="col-xl-8 col-lg-7">
            <div className="omega-scroll-wrapper" title="Hover to pause auto-scroll">
              <div className="omega-scroll-track" id="omegaScrollTrack">
                {/* Original Set */}
                {storyCards.map((card, idx) => (
                  <Link key={`set1-${idx}`} to={card.link} className="omega-story-card">
                    <img src={card.image} alt={card.title} className="card-bg-img" />
                    <div className="card-gradient-overlay">
                      <span className="card-top-tag">{card.tag}</span>
                      <div className="card-bottom-info">
                        <h4>{card.title}</h4>
                        <p>{card.desc}</p>
                      </div>
                    </div>
                  </Link>
                ))}

                {/* Duplicate Set for Seamless Loop */}
                {storyCards.map((card, idx) => (
                  <Link
                    key={`set2-${idx}`}
                    to={card.link}
                    className="omega-story-card"
                    aria-hidden="true"
                    tabIndex="-1"
                  >
                    <img src={card.image} alt={card.title} className="card-bg-img" />
                    <div className="card-gradient-overlay">
                      <span className="card-top-tag">{card.tag}</span>
                      <div className="card-bottom-info">
                        <h4>{card.title}</h4>
                        <p>{card.desc}</p>
                      </div>
                    </div>
                  </Link>
                ))}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
