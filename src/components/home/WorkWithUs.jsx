import React from 'react';
import { Link } from 'react-router-dom';

const stats = [
  {
    title: 'Operating entities under group direction',
    value: '10',
  },
  {
    title: 'Business verticals from renewables to trading',
    prefix: '0',
    value: '6',
  },
  {
    title: 'Established roots, over two decades of delivery',
    value: '2003',
  },
  {
    title: 'Locations and active operating touchpoints',
    value: '50',
    suffix: '+',
  },
];

export default function WorkWithUs() {
  return (
    <div className="work-with-us-area home-work-with-us bg-gray">
      <div className="container">
        <div className="content-box">
          <div className="work-with-us-header mb-4 pb-2">
            <div className="row align-items-center">
              <div className="col-lg-8 col-md-7">
                <div className="heading-info">
                  <h5>Work with Us</h5>
                </div>
              </div>
              <div className="col-lg-4 col-md-5 text-md-end text-start mt-3 mt-md-0">
                <Link to="/contact" className="btn angle btn-theme effect btn-md">
                  Get a Quote
                </Link>
              </div>
            </div>
          </div>

          <div className="fun-facts-items text-center">
            <div className="fun-facts-single-line">
              {stats.map((st, idx) => (
                <div key={idx} className="fun-fact-col">
                  <div className="fun-fact">
                    <h4>{st.title}</h4>
                    <div className="timer-value">
                      {st.prefix && <span className="timer-prefix">{st.prefix}</span>}
                      <span className="timer">{st.value}</span>
                      {st.suffix && <span className="timer-suffix">{st.suffix}</span>}
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

