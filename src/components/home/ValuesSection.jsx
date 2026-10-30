import React from 'react';

const values = [
  {
    icon: 'fa-shield-alt',
    title: 'Integrity',
    desc: 'We uphold the highest ethical standards in every contract and partnership, building trust through transparent and honest dealings.',
    delay: 0,
  },
  {
    icon: 'fa-hard-hat',
    title: 'Safety',
    desc: 'We maintain a "Zero Harm" culture to protect our workforce, our clients, and the environment on every single project.',
    delay: 100,
  },
  {
    icon: 'fa-medal',
    title: 'Quality',
    desc: 'We ensure precision in our manufacturing and excellence in our project delivery — no compromise, no exceptions.',
    delay: 200,
  },
  {
    icon: 'fa-handshake',
    title: 'Reliability',
    desc: 'We are a dependable partner, delivering on our promises every time — on schedule, within budget, and to specification.',
    delay: 300,
  },
];

export default function ValuesSection() {
  return (
    <section className="pillars-wrapper" id="pillars">
      <div className="pillar-section pillar-light" id="pillar-values">
        <div className="container">
          <div className="pillar-values-header" data-reveal="fade-up">
            <span className="eyebrow-label">Core Values</span>
            <h2>
              The Principles<br />
              We Stand By
            </h2>
            <div className="pillar-divider"></div>
          </div>

          <div className="pillar-values-grid">
            {values.map((val, idx) => (
              <div
                key={idx}
                className="value-card"
                data-reveal="fade-up"
                data-delay={val.delay}
              >
                <div className="value-card-icon">
                  <i className={`fas ${val.icon}`} />
                </div>
                <h4>{val.title}</h4>
                <p>{val.desc}</p>
                <div className="value-card-line"></div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
}

