import React from 'react';

export default function ClientsSection() {
  return (
    <section className="omega-clients-section" id="omega-clients" data-reveal="fade-up">
      <div className="container">
        <div className="omega-clients-header">
          <div className="omega-section-tag">
            <span className="accent-bar"></span>
            <span>Our Clients</span>
          </div>
          <h2>Major clients and institutional partners</h2>
          <p>
            Public sector undertakings, telecom operators, EPC majors and industrial groups the group has delivered
            for, past and present &mdash; directly or as an appointed contractor and service provider.
          </p>
        </div>

        {/* Category 1: Telecom & Communications */}
        <div className="omega-client-category-block">
          <span className="omega-category-badge badge-telecom">Telecom &amp; Communications</span>
          <div className="omega-client-logos-grid">
            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <circle cx="50" cy="50" r="46" fill="#0077c8" />
                  <text x="50" y="58" fontFamily="'Poppins', sans-serif" fontWeight="900" fontSize="28" fill="#ffffff" textAnchor="middle">Jio</text>
                  <circle cx="43" cy="38" r="4" fill="#cf2027" />
                </svg>
              </div>
              <p className="omega-client-name">Reliance Jio</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <path d="M22 68 Q18 32 50 24 Q78 30 76 56 Q74 74 54 74 Q38 74 38 60 Q38 48 50 48" fill="none" stroke="#e11900" strokeWidth="7" strokeLinecap="round" />
                  <text x="50" y="86" fontFamily="'Poppins', sans-serif" fontWeight="800" fontSize="13" fill="#e11900" textAnchor="middle">airtel</text>
                </svg>
              </div>
              <p className="omega-client-name">Bharti Airtel</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle" style={{ background: '#e60000' }}>
                <svg viewBox="0 0 100 100" width="56" height="56">
                  <circle cx="50" cy="50" r="44" fill="#e60000" />
                  <path d="M50 26 C36 26 26 37 26 51 C26 65 37 76 51 76 C65 76 75 66 75 51 C75 42 70 34 62 29 L54 42 C57 44 59 47 59 51 C59 56 55 60 50 60 C45 60 41 56 41 51 C41 46 45 42 50 42 Z" fill="#ffffff" />
                </svg>
              </div>
              <p className="omega-client-name">Vodafone</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle" style={{ background: '#ffdb00' }}>
                <svg viewBox="0 0 100 100" width="58" height="58">
                  <text x="50" y="60" fontFamily="'Arial Black', sans-serif" fontWeight="900" fontSize="26" fill="#000000" textAnchor="middle">!dea</text>
                </svg>
              </div>
              <p className="omega-client-name">Idea</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <path d="M50 16 L80 68 L20 68 Z" fill="#cf2027" />
                  <path d="M26 68 Q50 48 74 68" stroke="#00529b" strokeWidth="6" fill="none" />
                  <text x="50" y="85" fontFamily="'Poppins', sans-serif" fontWeight="800" fontSize="10" fill="#00529b" textAnchor="middle">RCOM</text>
                </svg>
              </div>
              <p className="omega-client-name">Reliance Comm.</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle" style={{ background: '#0f6c52' }}>
                <svg viewBox="0 0 100 100" width="58" height="58">
                  <circle cx="50" cy="50" r="42" fill="none" stroke="#38bdf8" strokeWidth="3" strokeDasharray="8 4" />
                  <text x="50" y="58" fontFamily="'Poppins', sans-serif" fontWeight="900" fontSize="20" fill="#ffffff" textAnchor="middle">BSNL</text>
                </svg>
              </div>
              <p className="omega-client-name">BSNL</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <circle cx="50" cy="50" r="38" fill="none" stroke="#0077c8" strokeWidth="3" />
                  <circle cx="50" cy="50" r="32" fill="none" stroke="#cf2027" strokeWidth="1.5" />
                  <text x="50" y="58" fontFamily="'Poppins', sans-serif" fontWeight="900" fontSize="20" fill="#0077c8" textAnchor="middle">TCIL</text>
                </svg>
              </div>
              <p className="omega-client-name">TCIL</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <path d="M30 30 L50 70 L70 30" stroke="#004d80" strokeWidth="5" fill="none" strokeLinecap="round" />
                  <circle cx="50" cy="30" r="6" fill="#008ed6" />
                  <text x="50" y="85" fontFamily="'Poppins', sans-serif" fontWeight="700" fontSize="9" fill="#004d80" textAnchor="middle">VINDHYA</text>
                </svg>
              </div>
              <p className="omega-client-name">Vindhya Telelinks</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <circle cx="36" cy="46" r="14" fill="#008ed6" opacity="0.8" />
                  <circle cx="54" cy="46" r="14" fill="#cf2027" opacity="0.8" />
                  <text x="50" y="78" fontFamily="'Poppins', sans-serif" fontWeight="800" fontSize="10" fill="#1e293b" textAnchor="middle">TELESONIC</text>
                </svg>
              </div>
              <p className="omega-client-name">Telesonic</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle" style={{ background: '#e51937' }}>
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <text x="50" y="56" fontFamily="'Impact', 'Arial Black', sans-serif" fontWeight="900" fontSize="13" letterSpacing="1" fill="#ffffff" textAnchor="middle">HONEYWELL</text>
                </svg>
              </div>
              <p className="omega-client-name">Honeywell</p>
            </div>
          </div>
        </div>

        {/* Category 2: Power, Energy & Utilities */}
        <div className="omega-client-category-block">
          <span className="omega-category-badge badge-power">Power, Energy &amp; Utilities</span>
          <div className="omega-client-logos-grid">
            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <path d="M50 20 L40 75 L60 75 Z" fill="#cf2027" />
                  <line x1="28" y1="42" x2="72" y2="42" stroke="#1e3a8a" strokeWidth="4" />
                  <line x1="32" y1="58" x2="68" y2="58" stroke="#1e3a8a" strokeWidth="4" />
                  <text x="50" y="88" fontFamily="'Poppins', sans-serif" fontWeight="800" fontSize="8" fill="#1e3a8a" textAnchor="middle">POWERGRID</text>
                </svg>
              </div>
              <p className="omega-client-name">Power Grid Corp.</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle" style={{ background: '#00569e' }}>
                <svg viewBox="0 0 100 100" width="58" height="58">
                  <circle cx="50" cy="50" r="42" fill="none" stroke="rgba(255,255,255,0.4)" strokeWidth="2" />
                  <text x="50" y="58" fontFamily="'Poppins', sans-serif" fontWeight="900" fontSize="21" fill="#ffffff" textAnchor="middle">BHEL</text>
                </svg>
              </div>
              <p className="omega-client-name">BHEL</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle" style={{ background: '#009fe3' }}>
                <svg viewBox="0 0 100 100" width="58" height="58">
                  <text x="50" y="57" fontFamily="'Poppins', sans-serif" fontWeight="900" fontSize="15" fill="#ffffff" textAnchor="middle">MSEDCL</text>
                </svg>
              </div>
              <p className="omega-client-name">MSEDCL</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle" style={{ background: '#0d6848' }}>
                <svg viewBox="0 0 100 100" width="58" height="58">
                  <circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.3)" strokeWidth="2" />
                  <text x="50" y="58" fontFamily="'Poppins', sans-serif" fontWeight="900" fontSize="20" fill="#ffffff" textAnchor="middle">MCL</text>
                </svg>
              </div>
              <p className="omega-client-name">Mahanadi Coalfields</p>
            </div>
          </div>
        </div>

        {/* Category 3: EPC & Infrastructure Majors */}
        <div className="omega-client-category-block">
          <span className="omega-category-badge badge-epc">EPC &amp; Infrastructure Majors</span>
          <div className="omega-client-logos-grid">
            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <circle cx="50" cy="46" r="28" fill="none" stroke="#003e7e" strokeWidth="4" />
                  <text x="50" y="54" fontFamily="'Poppins', sans-serif" fontWeight="900" fontSize="16" fill="#003e7e" textAnchor="middle">L&amp;T</text>
                  <text x="50" y="85" fontFamily="'Poppins', sans-serif" fontWeight="700" fontSize="8" fill="#003e7e" textAnchor="middle">CONSTRUCTION</text>
                </svg>
              </div>
              <p className="omega-client-name">L&amp;T Construction</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <rect x="20" y="38" width="60" height="4" fill="#cf2027" />
                  <text x="50" y="56" fontFamily="'Poppins', sans-serif" fontWeight="900" fontSize="13" fill="#1e293b" textAnchor="middle">SIMPLEX</text>
                  <rect x="20" y="62" width="60" height="4" fill="#cf2027" />
                </svg>
              </div>
              <p className="omega-client-name">Simplex Infra</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <path d="M35 30 L65 48 L35 66 Z" fill="#cf2027" />
                  <path d="M50 30 L75 48 L50 66 Z" fill="#008ed6" opacity="0.8" />
                  <text x="50" y="84" fontFamily="'Poppins', sans-serif" fontWeight="800" fontSize="9" fill="#004d80" textAnchor="middle">NAVAYUGA</text>
                </svg>
              </div>
              <p className="omega-client-name">Navayuga</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <path d="M30 35 L50 65 L70 35" stroke="#cf2027" strokeWidth="5" fill="none" strokeLinecap="round" />
                  <text x="50" y="82" fontFamily="'Poppins', sans-serif" fontWeight="800" fontSize="9" fill="#1e293b" textAnchor="middle">VIHAN</text>
                </svg>
              </div>
              <p className="omega-client-name">Vihan Associates</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle" style={{ background: '#0f274a' }}>
                <svg viewBox="0 0 100 100" width="58" height="58">
                  <text x="50" y="58" fontFamily="'Poppins', sans-serif" fontWeight="900" fontSize="21" fill="#ffffff" textAnchor="middle">M3M</text>
                </svg>
              </div>
              <p className="omega-client-name">M3M India</p>
            </div>
          </div>
        </div>

        {/* Category 4: Steel, Mining & Industry */}
        <div className="omega-client-category-block mb-0">
          <span className="omega-category-badge badge-steel">Steel, Mining &amp; Industry</span>
          <div className="omega-client-logos-grid">
            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <path d="M30 45 Q50 25 70 45" stroke="#0d6848" strokeWidth="5" fill="none" />
                  <path d="M35 55 Q50 35 65 55" stroke="#f59e0b" strokeWidth="4" fill="none" />
                  <text x="50" y="78" fontFamily="'Poppins', sans-serif" fontWeight="800" fontSize="10" fill="#0d6848" textAnchor="middle">JINDAL</text>
                </svg>
              </div>
              <p className="omega-client-name">Jindal Steel &amp; Power</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle">
                <svg viewBox="0 0 100 100" width="60" height="60">
                  <circle cx="50" cy="45" r="16" fill="none" stroke="#ea580c" strokeWidth="4" />
                  <line x1="50" y1="22" x2="50" y2="68" stroke="#ea580c" strokeWidth="3" />
                  <line x1="27" y1="45" x2="73" y2="45" stroke="#ea580c" strokeWidth="3" />
                  <text x="50" y="82" fontFamily="'Poppins', sans-serif" fontWeight="800" fontSize="9" fill="#1e293b" textAnchor="middle">SANSON</text>
                </svg>
              </div>
              <p className="omega-client-name">Sanson Engineers</p>
            </div>

            <div className="omega-client-item">
              <div className="omega-client-circle" style={{ background: '#cf2027' }}>
                <svg viewBox="0 0 100 100" width="58" height="58">
                  <text x="50" y="58" fontFamily="'Poppins', sans-serif" fontWeight="900" fontSize="22" fill="#ffffff" textAnchor="middle">SB</text>
                </svg>
              </div>
              <p className="omega-client-name">Sensa Bhavan</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}

