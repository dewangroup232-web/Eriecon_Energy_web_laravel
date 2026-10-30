import React from 'react';

const sectors = [
  { name: 'Renewable Energy', className: 'pill-renewable' },
  { name: 'Infrastructure & Civil', className: 'pill-infrastructure' },
  { name: 'Telecom & OFC', className: 'pill-telecom' },
  { name: 'Mining & Logistics', className: 'pill-mining' },
  { name: 'Oil & Gas', className: 'pill-oil-gas' },
  { name: 'Trading & Retail', className: 'pill-trading' },
];

export default function SectorsMarquee() {
  return (
    <section className="sectors-marquee-area" aria-label="Core Business Sectors">
      <div className="sectors-marquee-inner">
        <div className="sectors-marquee-track">
          {[1, 2, 3, 4].map((groupNum) => (
            <div
              key={groupNum}
              className="sectors-marquee-group"
              aria-hidden={groupNum > 1}
            >
              {sectors.map((sec, idx) => (
                <span key={idx} className={`sector-pill ${sec.className}`}>
                  {sec.name}
                </span>
              ))}
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}

