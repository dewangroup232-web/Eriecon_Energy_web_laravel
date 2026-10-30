import React, { useEffect } from 'react';
import HeroBanner from '../components/home/HeroBanner';
import SectorsMarquee from '../components/home/SectorsMarquee';
import AboutSection from '../components/home/AboutSection';
import PlatformScale from '../components/home/PlatformScale';
import HomeServices from '../components/home/HomeServices';
import WorkWithUs from '../components/home/WorkWithUs';
import StorySection from '../components/home/StorySection';
import RoadmapSection from '../components/home/RoadmapSection';
import ClientsSection from '../components/home/ClientsSection';
import ValuesSection from '../components/home/ValuesSection';
import '../styles/home.css';

export default function Home() {
  useEffect(() => {
    document.title = 'Omega Group - A Visionary Consortium Delivering Excellence';
  }, []);

  return (
    <div className="home-page-content">
      <HeroBanner />
      <SectorsMarquee />
      <AboutSection />
      <PlatformScale />
      <HomeServices />
      <WorkWithUs />
      <StorySection />
      <RoadmapSection />
      <ClientsSection />
      <ValuesSection />
    </div>
  );
}

