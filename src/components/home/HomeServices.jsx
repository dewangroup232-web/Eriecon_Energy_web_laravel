import React from 'react';
import { Link } from 'react-router-dom';

const servicesList = [
  {
    name: 'Renewable Energy & Solar',
    image: '/assets/img/banner/renewable_solar_wind.jpg',
    link: '/about-us',
    delay: 0,
  },
  {
    name: 'Infrastructure & Civil Works',
    image: '/assets/img/services/Infrastructure.png',
    link: '/about-us',
    delay: 80,
  },
  {
    name: 'Telecom & OFC Infrastructure',
    image: '/assets/img/services/telecom_network.jpg',
    link: '/contact',
    delay: 160,
  },
];

export default function HomeServices() {
  return (
    <section className="home-services" id="home-services" aria-labelledby="homeServicesTitle">
      <div className="container">
        <div className="home-services-heading" data-reveal="fade-up">
          <span className="home-services-eyebrow">Our Services</span>
          <h2 id="homeServicesTitle">
            Built for Industry.<br />
            <span>Ready for Every Challenge.</span>
          </h2>
          <p className="home-services-subheading">
            <span>We deliver engineering, construction, and end-to-end support across critical sectors.</span>
            <span>Every project is backed by specialist crews committed to safety, speed, and precision.</span>
          </p>
        </div>

        <div className="home-services-grid services-3-cols">
          {servicesList.map((srv, idx) => (
            <Link
              key={idx}
              className="home-service-card"
              to={srv.link}
              aria-label={srv.name}
              data-reveal="fade-up"
              data-delay={srv.delay}
            >
              <img src={srv.image} alt={srv.name} loading="lazy" />
              <h3 className="home-service-name">{srv.name}</h3>
            </Link>
          ))}
        </div>
      </div>
    </section>
  );
}
