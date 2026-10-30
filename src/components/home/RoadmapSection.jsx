import React from 'react';

const pillars = [
  {
    num: '01',
    name: 'Renewables',
    numClass: 'c-renewables',
    desc: 'Expand solar, wind and hybrid energy projects, targeting 3 GW of renewable capacity by 2030.',
  },
  {
    num: '02',
    name: 'Infrastructure',
    numClass: 'c-infrastructure',
    desc: 'Scale transportation, urban mobility, HDD and water infrastructure programmes.',
  },
  {
    num: '03',
    name: 'Retail growth',
    numClass: 'c-retail',
    desc: 'Enter new markets with tailored end-user solutions through e-commerce and retail platforms.',
  },
  {
    num: '04',
    name: 'Global expansion',
    numClass: 'c-global',
    desc: 'Extend exports and operations into wider geographies across the GCC, Africa and Asia.',
  },
];

const targets = [
  {
    val: <>3 <span>GW</span></>,
    label: 'Renewable capacity targeted under the 2030 roadmap',
  },
  {
    val: <>USD 500<span>M</span></>,
    label: 'Group turnover milestone under the roadmap',
  },
  {
    val: '2025-26',
    label: 'Near-term focus on strengthening renewables and core infrastructure',
  },
  {
    val: <>10<span>+</span></>,
    label: 'Countries targeted for continued international expansion',
  },
];

export default function RoadmapSection() {
  return (
    <section className="omega-roadmap-section" id="group-roadmap" data-reveal="fade-up">
      <div className="container">
        <div className="omega-roadmap-header">
          <div className="omega-section-tag">
            <span className="accent-bar"></span>
            <span>Strategy</span>
          </div>
          <h2>Group roadmap 2025 &ndash; 2030</h2>
          <p>
            The roadmap strengthens renewables, retail growth, infrastructure diversification and global expansion.
          </p>
        </div>

        <div className="omega-pillars-list">
          {pillars.map((p, idx) => (
            <div key={idx} className="omega-pillar-row">
              <div className={`omega-pillar-num ${p.numClass}`}>{p.num}</div>
              <h3 className="omega-pillar-name">{p.name}</h3>
              <p className="omega-pillar-desc">{p.desc}</p>
            </div>
          ))}
        </div>

        <div className="omega-targets-grid">
          {targets.map((t, idx) => (
            <div key={idx} className="omega-target-card">
              <div className="omega-target-val">{t.val}</div>
              <p className="omega-target-label">{t.label}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}

