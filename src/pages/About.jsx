import React, { useEffect } from 'react';
import '../styles/about.css';

export default function About() {
  useEffect(() => {
    document.title = 'About Us & Group Profile | Omega Group';
  }, []);

  return (
    <div className="omega-about-page">
      {/* 0. ABOUT US HERO SECTION */}
      <div className="omega-about-hero" data-reveal="fade-up">
        <div className="container">
          <div className="row align-items-center">
            <div className="col-lg-10">
              <h1>
                Who We Are &mdash; <span>Omega Group</span>
              </h1>
              <p className="lead-text">
                A multidisciplinary consortium of ten specialised operating companies executing turnkey EPC,
                renewable energy generation, telecom networks, mining, civil infrastructure, and cross-border trade.
              </p>
            </div>
          </div>
        </div>
      </div>

      {/* 1. WHO WE ARE */}
      <section className="omega-who-section" id="who-we-are" data-reveal="fade-up">
        <div className="container">
          <div className="omega-sec-header">
            <div className="omega-eyebrow">
              <span className="accent-bar"></span>
              <span>Executive Overview</span>
            </div>
            <h2>A Diversified Holding Platform Built For Scale</h2>
            <p>
              Structured to execute parallel, high-complexity work packages across national programmes and
              international markets.
            </p>
          </div>

          <div className="row g-4 align-items-stretch">
            {/* Left: Brand Presentation Block */}
            <div className="col-lg-5">
              <div className="omega-brand-presentation-card" data-reveal="slide-right">
                <img
                  src="/assets/img/omega-emblem.png"
                  alt="Omega Group Emblem"
                  className="card-emblem"
                />
                <h3>Omega Group</h3>
                <p>
                  An established holding platform with roots since 2003, structured as a consortium of specialised
                  operating companies across EPC, renewable energy, infrastructure, commercial operations and
                  international delivery.
                </p>
                <p>
                  Teams are organised for multiple geographies and parallel work packages, allowing the group to
                  run large renewable programmes alongside civil, telecom and mining contracts.
                </p>

                <div className="omega-val-pills">
                  <span className="omega-val-pill">Execution Discipline</span>
                  <span className="omega-val-pill">Technical Resilience</span>
                  <span className="omega-val-pill">Responsible Delivery</span>
                </div>
              </div>
            </div>

            {/* Right: 4 Strategic Pillars */}
            <div className="col-lg-7">
              <div className="omega-pillars-grid" data-reveal="slide-left">
                <div className="omega-pillar-item">
                  <div className="p-num">01</div>
                  <div className="p-body">
                    <h4>One of India&rsquo;s largest non-listed diversified EPC platforms</h4>
                    <p>
                      Capability spanning design, engineering, procurement, construction, commissioning and
                      long-term maintenance, delivered on a turnkey basis.
                    </p>
                  </div>
                </div>

                <div className="omega-pillar-item">
                  <div className="p-num">02</div>
                  <div className="p-body">
                    <h4>Renewable energy as the primary growth engine</h4>
                    <p>
                      Solar, hybrid and storage-linked projects form the core of the current order book and
                      forward pipeline.
                    </p>
                  </div>
                </div>

                <div className="omega-pillar-item">
                  <div className="p-num">03</div>
                  <div className="p-body">
                    <h4>Deep public-sector and blue chip credentials</h4>
                    <p>
                      Work delivered for BSNL, TCIL, Power Grid, MSEDCL, BHEL, L&amp;T Construction, Simplex,
                      Jindal Steel &amp; Power and leading telecom operators.
                    </p>
                  </div>
                </div>

                <div className="omega-pillar-item">
                  <div className="p-num">04</div>
                  <div className="p-body">
                    <h4>India and international delivery</h4>
                    <p>
                      Operations across multiple Indian states with hubs and entities serving the UAE, wider
                      GCC and export markets.
                    </p>
                  </div>
                </div>
              </div>

              <div className="omega-summary-alert">
                <strong>Group Core Commitment:</strong> The group combines execution discipline, technical
                resilience and responsible infrastructure delivery to create durable value for clients and the
                communities around its projects.
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* 2. FROM THE VICE CHAIRMAN'S DESK */}
      <section className="omega-chairman-section" id="chairman-desk">
        <div className="container">
          <div className="omega-sec-header">
            <div className="omega-eyebrow">
              <span className="accent-bar"></span>
              <span>Leadership Message</span>
            </div>
            <h2>From the Vice Chairman&rsquo;s desk</h2>
            <p>Principles of execution integrity and long-term infrastructure partnership.</p>
          </div>

          <div className="chairman-quote-card" data-reveal="fade-up">
            <div className="quote-icon">
              <i className="fas fa-quote-left"></i>
            </div>
            <p>
              &ldquo;Infrastructure is a promise you make to people who will use it long after you have left the site.
              That is the standard we hold ourselves to.&rdquo;
            </p>
            <div className="chairman-quote-author">
              <span className="author-dot"></span>
              <span>Executive Commitment &bull; Mr. Shadab Ansari, Vice Chairman</span>
            </div>
          </div>

          <div className="chairman-letter-body">
            <p>
              Omega Group has grown from a single contracting business into a consortium of ten companies working
              across renewable energy, infrastructure, telecom, mining and international trade. What has not changed
              in that time is how we win work &mdash; by finishing what we start, to the specification we agreed, on
              the date we committed to.
            </p>

            <p>
              Our clients have been demanding ones. BSNL and TCIL held us to national programme timelines in hill
              terrain. BHEL and Simplex expected us to work safely inside a live 2 &times; 660 MW power project.
              Jindal Steel &amp; Power trusted us with three lakh tonnes of coal and with moving their finished steel
              across the country. Each of those contracts was completed, and each opened the next one.
            </p>

            <p>
              Renewable energy is now where the group is putting its weight. Under PM-KUSUM we are delivering 200 MW
              in Rajasthan and, under the Prime Minister Surya Kiran Yojana, residential rooftop solarisation across
              Odisha, with storage-linked capacity following in Sindhudurg and Jodhpur. This is not a change of
              direction so much as the same discipline applied to the sector that will define India&rsquo;s next two
              decades.
            </p>

            <p>
              To our clients, lenders and partners &mdash; thank you for the confidence. To our engineers and site
              teams &mdash; the reputation in these pages is yours. We intend to keep earning it.
            </p>

            <div className="chairman-signature-block">
              <div>
                <h4 className="sig-name">Mr. Shadab Ansari</h4>
                <p className="sig-role">Vice Chairman &bull; Omega Group</p>
              </div>
              <div>
                <span
                  style={{
                    fontFamily: "'Georgia', serif",
                    fontStyle: 'italic',
                    fontSize: '22px',
                    color: '#38bdf8',
                  }}
                >
                  Shadab Ansari
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* 3. MANAGEMENT TEAM */}
      <section className="omega-team-section" id="management-team">
        <div className="container">
          <div className="omega-sec-header">
            <div className="omega-eyebrow">
              <span className="accent-bar"></span>
              <span>Executive Governance</span>
            </div>
            <h2>Omega Group management team</h2>
            <p>
              The group is directed by a small executive team accountable for strategy, delivery and governance across
              every operating company.
            </p>
          </div>

          <div className="row g-4">
            <div className="col-lg-4 col-md-6">
              <div className="omega-team-card team-blue">
                <div className="team-avatar-box">
                  <div className="team-initials-badge">SA</div>
                  <div className="team-header-info">
                    <h4>Mr. Shadab Ansari</h4>
                    <span>Vice Chairman</span>
                  </div>
                </div>
                <p className="team-bio">
                  Sets group strategy and leads business development, client and institutional relationships
                  across the renewable energy, infrastructure and international verticals, and chairs the
                  group&rsquo;s investment and major contract decisions.
                </p>
              </div>
            </div>

            <div className="col-lg-4 col-md-6">
              <div className="omega-team-card team-green">
                <div className="team-avatar-box">
                  <div className="team-initials-badge">AA</div>
                  <div className="team-header-info">
                    <h4>Mr. Afroz Akhtar</h4>
                    <span>Director</span>
                  </div>
                </div>
                <p className="team-bio">
                  Twenty years of experience as a contractor across government and non-government sectors. Leads
                  project delivery and site execution across the group&rsquo;s contracting businesses, with
                  responsibility for execution planning, resourcing and site performance.
                </p>
              </div>
            </div>

            <div className="col-lg-4 col-md-12">
              <div className="omega-team-card team-blue">
                <div className="team-avatar-box">
                  <div className="team-initials-badge">DM</div>
                  <div className="team-header-info">
                    <h4>Mr. Dinesh Kumar Mishra</h4>
                    <span>Director</span>
                  </div>
                </div>
                <p className="team-bio">
                  Fifteen years of experience applying nanotechnology in road construction. Leads material
                  innovation, technical specification and quality control for the group&rsquo;s road and highway
                  works.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* 4. TEN OPERATING ENTITIES */}
      <section className="omega-entities-section" id="operating-entities" data-reveal="fade-up">
        <div className="container">
          <div className="omega-sec-header">
            <div className="omega-eyebrow">
              <span className="accent-bar"></span>
              <span>Consortium Architecture</span>
            </div>
            <h2>Ten specialised operating entities</h2>
            <p>
              Each company carries its own execution teams, client base and technical focus, while drawing on shared
              procurement, engineering and financial capability across the group.
            </p>
          </div>

          <div className="omega-entities-grid">
            <div className="omega-entity-card card-blue">
              <div className="ent-num">01 Operating Entity</div>
              <h4>Path Found Biogas Pvt. Ltd.</h4>
              <p>Solar energy, compressed biogas and clean-energy delivery.</p>
              <p className="jv-note">In joint venture with A &amp; T Billionaire Pte. Ltd., Singapore</p>
            </div>

            <div className="omega-entity-card card-green">
              <div className="ent-num">02 Operating Entity</div>
              <h4>DS Buildwell Engineers Pvt. Ltd.</h4>
              <p>Building construction and civil contracting.</p>
            </div>

            <div className="omega-entity-card card-blue">
              <div className="ent-num">03 Operating Entity</div>
              <h4>Kalka Green Energy Pvt. Ltd.</h4>
              <p>Green power generation and renewable energy solutions.</p>
            </div>

            <div className="omega-entity-card card-green">
              <div className="ent-num">04 Operating Entity</div>
              <h4>Omega Infra Mining Co. LLP</h4>
              <p>Mining services, coal handling and aggregates.</p>
            </div>

            <div className="omega-entity-card card-blue">
              <div className="ent-num">05 Operating Entity</div>
              <h4>Omega Infrastructure Commercial LLC, Dubai</h4>
              <p>Oil &amp; gas, HDD and commercial trading.</p>
            </div>

            <div className="omega-entity-card card-green">
              <div className="ent-num">06 Operating Entity</div>
              <h4>Ashvi Capital LLC, Dubai</h4>
              <p>Financial trading and investment.</p>
            </div>

            <div className="omega-entity-card card-blue">
              <div className="ent-num">07 Operating Entity</div>
              <h4>Banna Infratech LLP</h4>
              <p>Public infrastructure projects.</p>
            </div>

            <div className="omega-entity-card card-green">
              <div className="ent-num">08 Operating Entity</div>
              <h4>Samaira Shadab Infrastructure LLP</h4>
              <p>Urban and civic development.</p>
            </div>

            <div className="omega-entity-card card-blue">
              <div className="ent-num">09 Operating Entity</div>
              <h4>SB Enterprises</h4>
              <p>Procurement and contracting.</p>
            </div>

            <div className="omega-entity-card card-green">
              <div className="ent-num">10 Operating Entity</div>
              <h4>Progressive Pharma Corporation</h4>
              <p>Healthcare and pharmaceuticals.</p>
            </div>
          </div>
        </div>
      </section>

      {/* 5. WHAT THE GROUP DELIVERS */}
      <section className="omega-scope-section" id="operating-scope">
        <div className="container">
          <div className="omega-sec-header">
            <div className="omega-eyebrow">
              <span className="accent-bar"></span>
              <span>Operating Scope</span>
            </div>
            <h2>What the group delivers</h2>
            <p>
              A single platform covering the full project lifecycle &mdash; from development and engineering through
              construction, commissioning, compliance and long-term maintenance.
            </p>
          </div>

          <div className="omega-stages-list">
            <div className="omega-stage-card">
              <div className="stage-num-badge stage-cyan">01</div>
              <div className="stage-content">
                <h4>Development &amp; Engineering</h4>
                <p>Project development, system design, detailed engineering, surveys, approvals and technical due diligence.</p>
              </div>
            </div>

            <div className="omega-stage-card">
              <div className="stage-num-badge stage-teal">02</div>
              <div className="stage-content">
                <h4>Procurement &amp; Supply</h4>
                <p>Equipment procurement, in-house supply through group trading entities, logistics and vendor management.</p>
              </div>
            </div>

            <div className="omega-stage-card">
              <div className="stage-num-badge stage-blue">03</div>
              <div className="stage-content">
                <h4>Construction &amp; Civil Works</h4>
                <p>Earthworks, foundations, superstructures, roads, trenching, ducting and finishing works.</p>
              </div>
            </div>

            <div className="omega-stage-card">
              <div className="stage-num-badge stage-skyblue">04</div>
              <div className="stage-content">
                <h4>Installation &amp; Commissioning</h4>
                <p>Erection, installation, testing, commissioning and handover across solar, telecom and civil packages.</p>
              </div>
            </div>

            <div className="omega-stage-card">
              <div className="stage-num-badge stage-navy">05</div>
              <div className="stage-content">
                <h4>Regulatory &amp; Compliance</h4>
                <p>Statutory approvals, regulatory support, safety systems and documentation for public and private clients.</p>
              </div>
            </div>

            <div className="omega-stage-card">
              <div className="stage-num-badge stage-red">06</div>
              <div className="stage-content">
                <h4>Operations &amp; Maintenance</h4>
                <p>Long-term maintenance programmes protecting asset performance over the project life.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* 6. STATUTORY CREDENTIALS */}
      <section className="omega-cred-section" id="statutory-credentials">
        <div className="container">
          <div className="omega-sec-header">
            <div className="omega-eyebrow">
              <span className="accent-bar"></span>
              <span>Statutory Credentials</span>
            </div>
            <h2>Registrations on record</h2>
            <p>
              Statutory particulars for Path Found Biogas Private Limited, the group&rsquo;s clean-energy delivery
              company. Registrations for the other group entities are issued with tender submissions.
            </p>
          </div>

          <div className="omega-cred-table-wrapper">
            <table className="omega-cred-table">
              <tbody>
                <tr>
                  <td className="col-label">Legal Name</td>
                  <td className="col-val">Path Found Biogas Private Limited</td>
                </tr>
                <tr>
                  <td className="col-label">Constitution</td>
                  <td className="col-val">Private Limited Company</td>
                </tr>
                <tr>
                  <td className="col-label">Date of Incorporation</td>
                  <td className="col-val">10 September 2025</td>
                </tr>
                <tr>
                  <td className="col-label">PAN</td>
                  <td className="col-val" style={{ letterSpacing: '1px', fontFamily: 'monospace', fontSize: '16px' }}>
                    AAQCP1779A
                  </td>
                </tr>
                <tr>
                  <td className="col-label">GSTIN</td>
                  <td className="col-val" style={{ letterSpacing: '1px', fontFamily: 'monospace', fontSize: '16px' }}>
                    07AAQCP1779A1Z9
                  </td>
                </tr>
                <tr>
                  <td className="col-label">GST Registration</td>
                  <td className="col-val">Regular &bull; Form GST REG-06, Issued 24 April 2026</td>
                </tr>
                <tr>
                  <td className="col-label">Principal Place of Business</td>
                  <td className="col-val">
                    Third Floor, 79-80, DPT-322, DLF Prime, Okhla Industrial Estate Phase 1, New Delhi &ndash; 110020
                  </td>
                </tr>
                <tr>
                  <td className="col-label">Directors on Record</td>
                  <td className="col-val">Mr. Shadab Ansari</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div className="cert-mockups-grid">
            {/* GST Certificate Card */}
            <div className="cert-mockup-card">
              <div className="cert-card-header">
                <div
                  style={{
                    width: '44px',
                    height: '44px',
                    borderRadius: '50%',
                    background: '#f1f5f9',
                    display: 'flex',
                    alignItems: 'center',
                    justifyContent: 'center',
                    fontSize: '20px',
                    color: '#0b7b64',
                  }}
                >
                  <i className="fas fa-file-contract"></i>
                </div>
                <div>
                  <h5>Government of India &bull; GST Registration</h5>
                  <span>Form GST REG-06 &bull; Government of National Capital Territory of Delhi</span>
                </div>
              </div>
              <div className="cert-body-specs">
                <div className="cert-spec-row">
                  <span className="cert-spec-label">Registration Number:</span>
                  <span className="cert-spec-value">07AAQCP1779A1Z9</span>
                </div>
                <div className="cert-spec-row">
                  <span className="cert-spec-label">Legal Name:</span>
                  <span className="cert-spec-value">PATH FOUND BIOGAS PRIVATE LIMITED</span>
                </div>
                <div className="cert-spec-row">
                  <span className="cert-spec-label">Trade Name:</span>
                  <span className="cert-spec-value">PATH FOUND BIOGAS PRIVATE LIMITED</span>
                </div>
                <div className="cert-spec-row">
                  <span className="cert-spec-label">Constitution:</span>
                  <span className="cert-spec-value">Private Limited Company</span>
                </div>
                <div className="cert-spec-row">
                  <span className="cert-spec-label">Jurisdictional Office:</span>
                  <span className="cert-spec-value">Ward 94, Zone 8, Delhi</span>
                </div>
              </div>
            </div>

            {/* PAN Card */}
            <div className="cert-mockup-card">
              <div className="cert-card-header">
                <div
                  style={{
                    width: '44px',
                    height: '44px',
                    borderRadius: '50%',
                    background: '#f1f5f9',
                    display: 'flex',
                    alignItems: 'center',
                    justifyContent: 'center',
                    fontSize: '20px',
                    color: '#008ed6',
                  }}
                >
                  <i className="fas fa-id-card"></i>
                </div>
                <div>
                  <h5>Income Tax Department &bull; Govt. of India</h5>
                  <span>Permanent Account Number (PAN Card)</span>
                </div>
              </div>
              <div className="cert-body-specs">
                <div className="cert-spec-row">
                  <span className="cert-spec-label">Permanent Account Number:</span>
                  <span className="cert-spec-value">AAQCP1779A</span>
                </div>
                <div className="cert-spec-row">
                  <span className="cert-spec-label">Name of Entity:</span>
                  <span className="cert-spec-value">PATH FOUND BIOGAS PRIVATE LIMITED</span>
                </div>
                <div className="cert-spec-row">
                  <span className="cert-spec-label">Date of Incorporation:</span>
                  <span className="cert-spec-value">10/09/2025</span>
                </div>
                <div className="cert-spec-row">
                  <span className="cert-spec-label">Category:</span>
                  <span className="cert-spec-value">Company (Private Limited)</span>
                </div>
                <div className="cert-spec-row">
                  <span className="cert-spec-label">Issuing Authority:</span>
                  <span className="cert-spec-value">Income Tax Department, GOI</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}

