<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us – An Yu TCM Healthcare Centre</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Cormorant+Garamond:wght@300;400;500;600&family=Noto+Serif+SC:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    :root {
      --cream: #f5f0e8;
      --cream-dark: #ede5d5;
      --brown: #7b3f1a;
      --brown-mid: #9b5430;
      --brown-light: #c4845a;
      --brown-pale: #e8c9a8;
      --ink: #2e1a0e;
      --gold: #b88a44;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Cormorant Garamond', serif;
      background: var(--cream);
      color: var(--ink);
      overflow-x: hidden;
    }

    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image:
        radial-gradient(ellipse at 20% 10%, rgba(180,120,60,0.07) 0%, transparent 50%),
        radial-gradient(ellipse at 80% 80%, rgba(123,63,26,0.06) 0%, transparent 50%);
      pointer-events: none;
      z-index: 0;
    }

    /* ── NAV ── */
    nav {
      position: fixed; top: 0; left: 0; right: 0;
      z-index: 100;
      display: flex; align-items: center; justify-content: space-between;
      padding: 18px 48px;
      background: rgba(245,240,232,0.92);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(123,63,26,0.12);
    }
    .nav-logo { display: flex; align-items: center; gap: 14px; text-decoration: none; }
    .nav-logo-circle {
      width: 44px; height: 44px; border: 2.5px solid var(--brown); border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-family: 'Noto Serif SC', serif; font-size: 15px; font-weight: 600; color: var(--brown);
    }
    .nav-logo-text { font-family: 'Playfair Display', serif; font-size: 17px; color: var(--brown); font-weight: 600; line-height: 1.2; }
    .nav-logo-text span { display: block; font-size: 11px; font-family: 'Cormorant Garamond', serif; font-weight: 400; letter-spacing: 2px; text-transform: uppercase; color: var(--brown-mid); opacity: 0.8; }
    .nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
    .nav-links a { text-decoration: none; font-family: 'Cormorant Garamond', serif; font-size: 15px; font-weight: 500; color: var(--brown); letter-spacing: 0.5px; transition: color 0.2s; position: relative; }
    .nav-links a::after { content: ''; position: absolute; bottom: -3px; left: 0; right: 0; height: 1px; background: var(--brown-light); transform: scaleX(0); transition: transform 0.3s; }
    .nav-links a:hover { color: var(--brown-mid); }
    .nav-links a:hover::after, .nav-links a.active::after { transform: scaleX(1); }
    .nav-links a.active { color: var(--brown-mid); }
    .nav-cta { background: var(--brown); color: var(--cream) !important; padding: 10px 24px; border-radius: 2px; letter-spacing: 1px; font-size: 13px !important; text-transform: uppercase; transition: background 0.25s !important; }
    .nav-cta::after { display: none !important; }
    .nav-cta:hover { background: var(--brown-mid) !important; }

    /* ── PAGE HERO ── */
    .page-hero {
      position: relative;
      padding: 160px 48px 80px;
      overflow: hidden;
      min-height: 420px;
      display: flex;
      align-items: flex-end;
    }

    .page-hero-bg {
      position: absolute;
      inset: 0;
      background: var(--brown);
      z-index: 0;
    }

    .page-hero-bg::before {
      content: '安鈺';
      position: absolute;
      font-family: 'Noto Serif SC', serif;
      font-size: 380px;
      font-weight: 700;
      color: rgba(255,255,255,0.03);
      right: -40px; bottom: -80px;
      line-height: 1;
    }

    .page-hero-deco {
      position: absolute;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.06);
    }
    .phd-1 { width: 500px; height: 500px; top: -150px; right: -100px; }
    .phd-2 { width: 300px; height: 300px; top: -80px; right: -20px; }

    .page-hero-content {
      position: relative;
      z-index: 2;
      max-width: 1100px;
      margin: 0 auto;
      width: 100%;
    }

    .page-breadcrumb {
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: rgba(255,255,255,0.4);
      margin-bottom: 20px;
    }

    .page-breadcrumb a { color: rgba(255,255,255,0.4); text-decoration: none; }
    .page-breadcrumb a:hover { color: rgba(255,255,255,0.7); }

    .page-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(44px, 6vw, 72px);
      font-weight: 700;
      color: white;
      line-height: 1.1;
      margin-bottom: 16px;
    }

    .page-hero h1 em { font-style: italic; color: var(--brown-pale); }

    .page-hero-desc {
      font-size: 19px;
      font-weight: 300;
      color: rgba(255,255,255,0.6);
      max-width: 560px;
      line-height: 1.8;
    }

    .page-hero-cn {
      position: absolute;
      right: 48px;
      bottom: 40px;
      font-family: 'Noto Serif SC', serif;
      font-size: 14px;
      font-weight: 300;
      color: rgba(255,255,255,0.2);
      writing-mode: vertical-rl;
      letter-spacing: 8px;
    }

    /* ── MAIN CONTENT ── */
    .main-content {
      position: relative;
      z-index: 1;
    }

    .container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 48px;
    }

    /* ── STORY SECTION ── */
    .story-section {
      padding: 100px 0;
    }

    .story-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }

    .section-label {
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 16px;
      display: block;
    }

    .story-heading {
      font-family: 'Playfair Display', serif;
      font-size: clamp(30px, 3.5vw, 44px);
      font-weight: 700;
      color: var(--brown);
      line-height: 1.2;
      margin-bottom: 28px;
    }

    .story-heading em { font-style: italic; color: var(--brown-mid); }

    .story-body p {
      font-size: 17px;
      font-weight: 300;
      color: var(--brown-mid);
      line-height: 1.9;
      margin-bottom: 20px;
    }

    .story-body p:last-child { margin-bottom: 0; }

    .story-signature {
      margin-top: 36px;
      padding-top: 28px;
      border-top: 1px solid rgba(123,63,26,0.15);
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .signature-seal {
      width: 56px; height: 56px;
      border: 2px solid var(--brown);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-family: 'Noto Serif SC', serif;
      font-size: 18px; font-weight: 600; color: var(--brown);
      flex-shrink: 0;
    }

    .signature-text { font-family: 'Playfair Display', serif; font-size: 16px; color: var(--brown); font-weight: 600; }
    .signature-text span { display: block; font-family: 'Cormorant Garamond', serif; font-size: 13px; font-weight: 400; letter-spacing: 1px; color: var(--brown-mid); margin-top: 2px; }

    /* ── IMAGE PLACEHOLDER ── */
    .img-placeholder {
      border-radius: 4px;
      overflow: hidden;
      position: relative;
    }

    .img-box {
      width: 100%;
      aspect-ratio: 4/3;
      background: var(--cream-dark);
      border: 2px dashed rgba(123,63,26,0.2);
      border-radius: 4px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 12px;
      cursor: pointer;
      transition: border-color 0.2s, background 0.2s;
      position: relative;
      overflow: hidden;
    }

    .img-box:hover { border-color: var(--brown-light); background: rgba(123,63,26,0.04); }

    .img-box-icon {
      width: 48px; height: 48px;
      color: rgba(123,63,26,0.25);
    }

    .img-box-label {
      font-size: 13px;
      font-weight: 500;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: rgba(123,63,26,0.3);
    }

    .img-box-hint {
      font-size: 12px;
      color: rgba(123,63,26,0.2);
    }

    .img-box img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: none;
    }

    .img-box.has-image .img-box-icon,
    .img-box.has-image .img-box-label,
    .img-box.has-image .img-box-hint { display: none; }
    .img-box.has-image img { display: block; }

    /* Tall variant */
    .img-box.tall { aspect-ratio: 3/4; }
    .img-box.wide { aspect-ratio: 16/7; }
    .img-box.square { aspect-ratio: 1/1; }

    /* Image upload input (hidden) */
    .img-upload-input { display: none; }

    /* Caption below image */
    .img-caption {
      font-size: 12px;
      color: rgba(123,63,26,0.4);
      text-align: center;
      margin-top: 10px;
      letter-spacing: 0.5px;
      font-style: italic;
    }

    /* ── VALUES SECTION ── */
    .values-section {
      padding: 80px 0 100px;
      background: var(--brown);
      position: relative;
      overflow: hidden;
    }

    .values-section::before {
      content: '道';
      position: absolute;
      font-family: 'Noto Serif SC', serif;
      font-size: 400px;
      font-weight: 700;
      color: rgba(255,255,255,0.025);
      left: 50%; top: 50%;
      transform: translate(-50%,-50%);
      pointer-events: none;
    }

    .values-section .section-label { color: var(--brown-pale); }

    .values-heading {
      font-family: 'Playfair Display', serif;
      font-size: clamp(28px, 3vw, 40px);
      font-weight: 700;
      color: white;
      margin-bottom: 16px;
    }

    .values-intro {
      font-size: 17px;
      font-weight: 300;
      color: rgba(255,255,255,0.55);
      max-width: 540px;
      line-height: 1.8;
      margin-bottom: 60px;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2px;
    }

    .value-card {
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.07);
      padding: 44px 36px;
      transition: background 0.3s;
    }

    .value-card:hover { background: rgba(255,255,255,0.08); }

    .value-cn {
      font-family: 'Noto Serif SC', serif;
      font-size: 40px;
      color: var(--brown-pale);
      opacity: 0.6;
      margin-bottom: 20px;
      display: block;
    }

    .value-title {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      font-weight: 600;
      color: white;
      margin-bottom: 12px;
    }

    .value-desc {
      font-size: 15px;
      color: rgba(255,255,255,0.5);
      line-height: 1.8;
    }

    /* ── GALLERY SECTION ── */
    .gallery-section {
      padding: 100px 0;
    }

    .gallery-header {
      margin-bottom: 48px;
    }

    .gallery-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr;
      grid-template-rows: auto auto;
      gap: 16px;
    }

    .gallery-grid .img-box:nth-child(1) {
      grid-row: 1 / 3;
      aspect-ratio: 3/4;
    }

    /* ── MILESTONES ── */
    .milestones-section {
      padding: 0 0 100px;
    }

    .milestones-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 2px;
    }

    .milestone-item {
      background: white;
      border: 1px solid rgba(123,63,26,0.08);
      padding: 44px 32px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .milestone-item:hover {
      transform: translateY(-4px);
      box-shadow: 0 16px 48px rgba(123,63,26,0.1);
    }

    .milestone-num {
      font-family: 'Playfair Display', serif;
      font-size: 52px;
      font-weight: 700;
      color: var(--brown);
      line-height: 1;
      margin-bottom: 8px;
    }

    .milestone-unit {
      font-size: 20px;
      color: var(--gold);
    }

    .milestone-label {
      font-size: 14px;
      color: var(--brown-mid);
      font-weight: 500;
      letter-spacing: 0.5px;
      line-height: 1.5;
    }

    /* ── LOCATIONS CTA ── */
    .locations-cta {
      padding: 80px 0 100px;
    }

    .locations-cta-inner {
      background: var(--cream-dark);
      border: 1px solid rgba(123,63,26,0.12);
      border-radius: 4px;
      padding: 64px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 64px;
      align-items: center;
    }

    .cta-text .section-label { margin-bottom: 12px; }

    .cta-heading {
      font-family: 'Playfair Display', serif;
      font-size: clamp(26px, 3vw, 38px);
      font-weight: 700;
      color: var(--brown);
      line-height: 1.25;
      margin-bottom: 20px;
    }

    .cta-desc {
      font-size: 16px;
      font-weight: 300;
      color: var(--brown-mid);
      line-height: 1.8;
      margin-bottom: 32px;
    }

    .btn-primary {
      background: var(--brown);
      color: var(--cream);
      padding: 16px 40px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 15px;
      font-weight: 500;
      letter-spacing: 2px;
      text-transform: uppercase;
      text-decoration: none;
      border-radius: 2px;
      border: 2px solid var(--brown);
      transition: all 0.3s;
      display: inline-block;
    }

    .btn-primary:hover { background: transparent; color: var(--brown); }

    .cta-outlets {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .cta-outlet-row {
      display: flex;
      align-items: center;
      gap: 18px;
      padding: 20px 24px;
      background: white;
      border: 1px solid rgba(123,63,26,0.1);
      border-radius: 4px;
    }

    .cta-outlet-icon {
      width: 48px; height: 48px;
      border: 2px solid var(--brown);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-family: 'Noto Serif SC', serif;
      font-size: 16px; color: var(--brown);
      flex-shrink: 0;
    }

    .cta-outlet-name {
      font-family: 'Playfair Display', serif;
      font-size: 17px;
      font-weight: 600;
      color: var(--brown);
    }

    .cta-outlet-addr {
      font-size: 13px;
      color: var(--brown-mid);
      margin-top: 3px;
    }

    /* ── FOOTER ── */
    footer {
      background: var(--ink);
      color: rgba(255,255,255,0.5);
      padding: 48px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 24px;
    }

    .footer-logo { display: flex; align-items: center; gap: 14px; }
    .footer-logo-circle { width: 40px; height: 40px; border: 2px solid rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Noto Serif SC', serif; font-size: 14px; color: rgba(255,255,255,0.5); }
    .footer-name { font-family: 'Playfair Display', serif; font-size: 15px; color: rgba(255,255,255,0.6); }
    .footer-links { display: flex; gap: 28px; list-style: none; }
    .footer-links a { text-decoration: none; font-size: 13px; color: rgba(255,255,255,0.35); letter-spacing: 0.5px; transition: color 0.2s; }
    .footer-links a:hover { color: rgba(255,255,255,0.65); }
    .footer-copy { font-size: 12px; }

    /* ── SECTION DIVIDER ── */
    .section-divider { width: 60px; height: 1px; background: var(--gold); margin: 20px 0 0; opacity: 0.6; }

    @media (max-width: 900px) {
      nav { padding: 16px 24px; }
      .nav-links { display: none; }
      .page-hero { padding: 130px 24px 60px; }
      .container { padding: 0 24px; }
      .story-grid { grid-template-columns: 1fr; gap: 48px; }
      .values-grid { grid-template-columns: 1fr; gap: 2px; }
      .gallery-grid { grid-template-columns: 1fr 1fr; }
      .gallery-grid .img-box:nth-child(1) { grid-column: 1/3; grid-row: auto; aspect-ratio: 16/7; }
      .milestones-grid { grid-template-columns: 1fr 1fr; }
      .locations-cta-inner { grid-template-columns: 1fr; padding: 40px 28px; }
      footer { padding: 32px 24px; flex-direction: column; }
      .footer-links { display: none; }
    }
  </style>
</head>
<body>

<!-- NAV -->
<nav>
  <a href="{{ route('home') }}" class="nav-logo">
    <div class="nav-logo-circle">安鈺</div>
    <div class="nav-logo-text">An Yu TCM <span>Healthcare Centre</span></div>
  </a>
  <ul class="nav-links">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('outlets') }}">Outlets</a></li>
    <li><a href="{{ route('services') }}">Services</a></li>
    <li><a href="{{ route('physicians') }}">Our Physicians</a></li>
    <li><a href="{{ route('about') }}" class="active">About</a></li>
    <li><a href="{{ route('home') }}#outlets" class="nav-cta">Book Now</a></li>
  </ul>
</nav>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="page-hero-bg">
    <div class="page-hero-deco phd-1"></div>
    <div class="page-hero-deco phd-2"></div>
  </div>
  <div class="page-hero-content">
    <div class="page-breadcrumb"><a href="index.html">Home</a> &nbsp;/&nbsp; About Us</div>
    <h1>Our <em>Story</em> &<br>Our Mission</h1>
    <p class="page-hero-desc">Rooted in ancient wisdom, guided by modern care — An Yu TCM is dedicated to bringing balance and wellbeing to every patient we serve.</p>
  </div>
  <div class="page-hero-cn">传统中医 · 现代护理 · 平衡身心</div>
</section>

<main class="main-content">

  <!-- STORY SECTION -->
  <section class="story-section">
    <div class="container">
      <div class="story-grid">

        <!-- Text -->
        <div>
          <span class="section-label">Who We Are</span>
          <h2 class="story-heading">Healing Through <em>Tradition,</em><br>Care with Purpose</h2>
          <div class="section-divider" style="margin-bottom: 32px;"></div>
          <div class="story-body">
            <p>An Yu TCM Healthcare Centre was founded on the belief that true healing goes beyond treating symptoms — it is about restoring harmony between the body, mind, and spirit. Our name, 安鈺, reflects our commitment: 安 (peace & calm) and 鈺 (precious jade) — a centre where precious care meets peaceful healing.</p>
            <p>With two clinics serving the communities of Kepong and Bukit Jalil, we bring qualified TCM physicians and time-honoured treatments directly to where our patients live and work. Every treatment plan is personalised, every consultation unhurried.</p>
            <p>We blend thousands of years of Traditional Chinese Medicine knowledge with modern clinical standards to deliver care that is both effective and deeply respectful of each individual's unique constitution.</p>
          </div>
          <div class="story-signature">
            <div class="signature-seal">安鈺</div>
            <div class="signature-text">
              An Yu TCM Healthcare Centre
              <span>Kepong &amp; Bukit Jalil, Kuala Lumpur</span>
            </div>
          </div>
        </div>

        <!-- Image -->
        <div class="img-placeholder">
          <div class="img-box tall" onclick="triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
            </svg>
            <div class="img-box-label">Clinic / Interior Photo</div>
            <div class="img-box-hint">Click to upload image</div>
            <img src="" alt="Clinic photo" />
          </div>
          <div class="img-caption">An Yu TCM clinic interior — warm, calm, traditional</div>
        </div>

      </div>
    </div>
  </section>

  <!-- VALUES SECTION -->
  <section class="values-section">
    <div class="container">
      <span class="section-label">Our Philosophy</span>
      <h2 class="values-heading">The Principles That Guide Us</h2>
      <p class="values-intro">Every decision at An Yu TCM is shaped by three core values that have been the foundation of Traditional Chinese Medicine for millennia.</p>

      <div class="values-grid">
        <div class="value-card">
          <span class="value-cn">和</span>
          <div class="value-title">Harmony</div>
          <div class="value-desc">We believe in the interconnectedness of all body systems. Our treatments aim to restore the natural balance of qi, restoring the body's innate ability to heal itself.</div>
        </div>
        <div class="value-card">
          <span class="value-cn">精</span>
          <div class="value-title">Precision</div>
          <div class="value-desc">Every prescription and treatment protocol is tailored with meticulous attention to the individual patient — no two consultations are ever the same.</div>
        </div>
        <div class="value-card">
          <span class="value-cn">仁</span>
          <div class="value-title">Compassion</div>
          <div class="value-desc">We treat every patient as we would a family member — with patience, empathy, and a genuine commitment to their long-term wellbeing and recovery.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- GALLERY SECTION -->
  <section class="gallery-section">
    <div class="container">
      <div class="gallery-header">
        <span class="section-label">Our Clinics</span>
        <h2 class="story-heading" style="margin-bottom: 0;">A Glimpse Inside <em>An Yu</em></h2>
        <div class="section-divider"></div>
      </div>

      <div class="gallery-grid">
        <!-- Large left image -->
        <div class="img-box" style="grid-row: 1/3; aspect-ratio: 3/4;" onclick="triggerUpload(this)">
          <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
          <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
          </svg>
          <div class="img-box-label">Clinic Entrance / Exterior</div>
          <div class="img-box-hint">Click to upload</div>
          <img src="" alt="" />
        </div>
        <!-- Top right -->
        <div class="img-box" onclick="triggerUpload(this)">
          <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
          <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
          </svg>
          <div class="img-box-label">Treatment Room</div>
          <div class="img-box-hint">Click to upload</div>
          <img src="" alt="" />
        </div>
        <!-- Middle right -->
        <div class="img-box" onclick="triggerUpload(this)">
          <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
          <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
          </svg>
          <div class="img-box-label">Herbal Medicine Shelf</div>
          <div class="img-box-hint">Click to upload</div>
          <img src="" alt="" />
        </div>
        <!-- Bottom right 1 -->
        <div class="img-box" onclick="triggerUpload(this)">
          <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
          <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
          </svg>
          <div class="img-box-label">Reception / Waiting Area</div>
          <div class="img-box-hint">Click to upload</div>
          <img src="" alt="" />
        </div>
        <!-- Bottom right 2 -->
        <div class="img-box" onclick="triggerUpload(this)">
          <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
          <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
          </svg>
          <div class="img-box-label">Bukit Jalil Outlet</div>
          <div class="img-box-hint">Click to upload</div>
          <img src="" alt="" />
        </div>
      </div>
    </div>
  </section>

  <!-- MILESTONES -->
  <section class="milestones-section">
    <div class="container">
      <div class="milestones-grid">
        <div class="milestone-item">
          <div class="milestone-num">2<span class="milestone-unit">+</span></div>
          <div class="milestone-label">Clinic Outlets<br>in Kuala Lumpur</div>
        </div>
        <div class="milestone-item">
          <div class="milestone-num">4<span class="milestone-unit">+</span></div>
          <div class="milestone-label">Certified TCM<br>Treatments Offered</div>
        </div>
        <div class="milestone-item">
          <div class="milestone-num">100<span class="milestone-unit">%</span></div>
          <div class="milestone-label">Registered &amp; Qualified<br>TCM Physicians</div>
        </div>
        <div class="milestone-item">
          <div class="milestone-num">每<span class="milestone-unit" style="font-size:18px;font-family:'Noto Serif SC',serif;">日</span></div>
          <div class="milestone-label">Open 7 Days<br>a Week</div>
        </div>
      </div>
    </div>
  </section>

  <!-- LOCATIONS CTA -->
  <section class="locations-cta">
    <div class="container">
      <div class="locations-cta-inner">
        <div class="cta-text">
          <span class="section-label">Visit Us</span>
          <h2 class="cta-heading">Find Your Nearest<br>An Yu TCM Outlet</h2>
          <p class="cta-desc">We have two conveniently located clinics ready to welcome you. Walk-ins are welcome, but reserving in advance ensures your preferred physician and time slot.</p>
          <a href="index.html#outlets" class="btn-primary">Book an Appointment</a>
        </div>
        <div class="cta-outlets">
          <div class="cta-outlet-row">
            <div class="cta-outlet-icon">甲</div>
            <div>
              <div class="cta-outlet-name">An Yu TCM – Kepong</div>
              <div class="cta-outlet-addr">Jalan Kepong, 52100 Kuala Lumpur</div>
            </div>
          </div>
          <div class="cta-outlet-row">
            <div class="cta-outlet-icon">武</div>
            <div>
              <div class="cta-outlet-name">An Yu TCM – Bukit Jalil</div>
              <div class="cta-outlet-addr">Bukit Jalil, 57000 Kuala Lumpur</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- FOOTER -->
<footer>
  <div class="footer-logo">
    <div class="footer-logo-circle">安鈺</div>
    <div class="footer-name">An Yu TCM Healthcare Centre</div>
  </div>
  <ul class="footer-links">
    <li><a href="about.html">About</a></li>
    <li><a href="physicians.html">Physicians</a></li>
    <li><a href="services.html">Services</a></li>
    <li><a href="index.html#outlets">Book Now</a></li>
  </ul>
  <div class="footer-copy">© 2025 An Yu TCM. All rights reserved.</div>
</footer>

<script>
  function triggerUpload(el) {
    el.querySelector('.img-upload-input').click();
  }
  function loadImage(event, container) {
    const file = event.target.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = e => {
      container.querySelector('img').src = e.target.result;
      container.classList.add('has-image');
    };
    reader.readAsDataURL(file);
  }
</script>
</body>
</html>