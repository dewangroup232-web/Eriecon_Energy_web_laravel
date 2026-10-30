import React, { useEffect, useState } from 'react';
import { useLocation } from 'react-router-dom';
import Header from '../components/Header';
import Footer from '../components/Footer';
import { useScrollReveal } from '../hooks/useScrollReveal';
import '../styles/layout.css';

export default function Layout({ children }) {
  const location = useLocation();
  const [loading, setLoading] = useState(false);

  // Scroll to top on path change
  useEffect(() => {
    window.scrollTo(0, 0);
  }, [location.pathname]);

  // Hook for reveal animations
  useScrollReveal([location.pathname]);

  return (
    <div className="omega-app-wrapper">
      {loading && <div className="se-pre-con" />}
      <Header />
      <main id="main-content">{children}</main>
      <Footer />
    </div>
  );
}

