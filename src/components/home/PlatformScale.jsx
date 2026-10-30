import React, { useState } from 'react';

const metricsData = [
  {
    id: 1,
    category: 'scale',
    tag: 'Heritage',
    icon: 'fa-calendar-check',
    barClass: 'bar-teal',
    number: '2003',
    desc: 'Established roots, with more than two decades of continuous project delivery',
  },
  {
    id: 2,
    category: 'scale',
    tag: 'Footprint',
    icon: 'fa-map-marker-alt',
    barClass: 'bar-cyan',
    number: '50',
    suffix: '+',
    desc: 'Locations and active operating touchpoints across India and overseas',
  },
  {
    id: 3,
    category: 'scale',
    tag: 'Global Reach',
    icon: 'fa-globe-americas',
    barClass: 'bar-blue',
    number: '10',
    suffix: '+',
    desc: 'Countries covered through international operations and export networks',
  },
  {
    id: 4,
    category: 'financial',
    tag: 'Order Book',
    icon: 'fa-file-contract',
    barClass: 'bar-gold',
    prefix: 'USD',
    number: '250',
    suffix: 'M',
    desc: 'Order book position reported for FY25-28',
  },
  {
    id: 5,
    category: 'financial',
    tag: 'Pipeline',
    icon: 'fa-layer-group',
    barClass: 'bar-gold',
    prefix: 'USD',
    number: '300',
    suffix: 'M+',
    desc: 'Value of current and pipeline projects under execution and development',
  },
  {
    id: 6,
    category: 'clean-energy',
    tag: 'Clean Energy',
    icon: 'fa-solar-panel',
    barClass: 'bar-cyan',
    number: '1.25',
    unit: 'GW',
    desc: 'Renewable capacity pipeline across solar, hybrid and storage',
  },
  {
    id: 7,
    category: 'clean-energy',
    tag: '2030 Roadmap',
    icon: 'fa-bolt',
    barClass: 'bar-teal',
    number: '3',
    unit: 'GW',
    desc: 'Renewable capacity targeted under the 2030 roadmap',
  },
  {
    id: 8,
    category: 'financial',
    tag: 'Turnover Milestone',
    icon: 'fa-chart-pie',
    barClass: 'bar-red',
    prefix: 'USD',
    number: '500',
    suffix: 'M',
    desc: 'Group turnover milestone targeted under the 2025-2030 roadmap',
  },
];

export default function PlatformScale() {
  const [activeFilter, setActiveFilter] = useState('all');

  const filteredMetrics =
    activeFilter === 'all'
      ? metricsData
      : metricsData.filter((item) => item.category === activeFilter);

  return (
    <section className="platform-scale-area" id="platform-scale" aria-labelledby="platformScaleTitle" style={{ scrollMarginTop: '110px' }}>
      <div className="container position-relative">
        <div className="platform-scale-header text-center" data-reveal="fade-up" style={{ position: 'relative', zIndex: 10 }}>
          <h2 id="platformScaleTitle" className="platform-title">
            A diversified platform with<br />
            <span className="platform-title-highlight">infrastructure and clean energy</span> at its core
          </h2>
          <p className="platform-subtitle">
            Omega Group operates as a consortium of specialised companies spanning renewable energy, EPC and civil
            works, telecom infrastructure, mining and logistics, oil &amp; gas, trading and retail.
          </p>

          {/* <div className="platform-filter-tabs-wrapper" style={{ position: 'relative', zIndex: 20 }}>
            <div className="platform-filter-tabs" role="tablist" aria-label="Metric Filters">
              {[
                { id: 'all', label: 'All Indicators' },
                { id: 'scale', label: 'Operations & Footprint' },
                { id: 'financial', label: 'Order Book & Pipeline' },
                { id: 'clean-energy', label: 'Clean Energy 2030' },
              ].map((tab) => (
                <button
                  key={tab.id}
                  className={`platform-tab ${activeFilter === tab.id ? 'active' : ''}`}
                  onClick={(e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    setActiveFilter(tab.id);
                  }}
                  type="button"
                  style={{ cursor: 'pointer', pointerEvents: 'auto', position: 'relative', zIndex: 25 }}
                >
                  {tab.label}
                </button>
              ))}
            </div>
          </div> */}
        </div>

        {/* Metric Cards inside container so they have proper gap from both left and right sides */}
        <div className="platform-metrics-grid">
          {filteredMetrics.map((item, idx) => (
            <div
              key={item.id}
              className="platform-metric-card"
              data-category={item.category}
              data-reveal="fade-up"
              data-delay={idx * 50}
            >
              <div className={`card-accent-bar ${item.barClass}`}></div>
              <div className="card-top-meta">
                <span className="card-category-tag">{item.tag}</span>
                <i className={`fas ${item.icon} card-meta-icon`}></i>
              </div>
              <div className="card-number-wrap">
                {item.prefix && <span className="metric-prefix">{item.prefix} </span>}
                <span className="metric-num">{item.number}</span>
                {item.suffix && <span className="metric-suffix">{item.suffix}</span>}
                {item.unit && <span className="metric-unit">{item.unit}</span>}
              </div>
              <p className="card-desc">{item.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
