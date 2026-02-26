<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Physicians – An Yu TCM Healthcare Centre</title>
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

    body { font-family: 'Cormorant Garamond', serif; background: var(--cream); color: var(--ink); overflow-x: hidden; }

    body::before {
      content: ''; position: fixed; inset: 0;
      background-image: radial-gradient(ellipse at 20% 10%, rgba(180,120,60,0.07) 0%, transparent 50%), radial-gradient(ellipse at 80% 80%, rgba(123,63,26,0.06) 0%, transparent 50%);
      pointer-events: none; z-index: 0;
    }

    nav { position: fixed; top: 0; left: 0; right: 0; z-index: 100; display: flex; align-items: center; justify-content: space-between; padding: 18px 48px; background: rgba(245,240,232,0.92); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(123,63,26,0.12); }
    .nav-logo { display: flex; align-items: center; gap: 14px; text-decoration: none; }
    .nav-logo-circle { width: 44px; height: 44px; border: 2.5px solid var(--brown); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Noto Serif SC', serif; font-size: 15px; font-weight: 600; color: var(--brown); }
    .nav-logo-text { font-family: 'Playfair Display', serif; font-size: 17px; color: var(--brown); font-weight: 600; line-height: 1.2; }
    .nav-logo-text span { display: block; font-size: 11px; font-family: 'Cormorant Garamond', serif; font-weight: 400; letter-spacing: 2px; text-transform: uppercase; color: var(--brown-mid); opacity: 0.8; }
    .nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
    .nav-links a { text-decoration: none; font-family: 'Cormorant Garamond', serif; font-size: 15px; font-weight: 500; color: var(--brown); letter-spacing: 0.5px; transition: color 0.2s; position: relative; }
    .nav-links a::after { content: ''; position: absolute; bottom: -3px; left: 0; right: 0; height: 1px; background: var(--brown-light); transform: scaleX(0); transition: transform 0.3s; }
    .nav-links a:hover, .nav-links a.active { color: var(--brown-mid); }
    .nav-links a:hover::after, .nav-links a.active::after { transform: scaleX(1); }
    .nav-cta { background: var(--brown); color: var(--cream) !important; padding: 10px 24px; border-radius: 2px; letter-spacing: 1px; font-size: 13px !important; text-transform: uppercase; }
    .nav-cta::after { display: none !important; }
    .nav-cta:hover { background: var(--brown-mid) !important; }

    /* ── PAGE HERO ── */
    .page-hero { position: relative; padding: 160px 48px 80px; overflow: hidden; min-height: 420px; display: flex; align-items: flex-end; }
    .page-hero-bg { position: absolute; inset: 0; background: linear-gradient(135deg, var(--brown) 0%, var(--brown-mid) 100%); z-index: 0; }
    .page-hero-bg::before { content: '医'; position: absolute; font-family: 'Noto Serif SC', serif; font-size: 360px; font-weight: 700; color: rgba(255,255,255,0.03); right: -20px; bottom: -80px; line-height: 1; }
    .page-hero-deco { position: absolute; border-radius: 50%; border: 1px solid rgba(255,255,255,0.06); }
    .phd-1 { width: 500px; height: 500px; top: -150px; right: -100px; }
    .phd-2 { width: 300px; height: 300px; top: -80px; right: -20px; }
    .page-hero-content { position: relative; z-index: 2; max-width: 1100px; margin: 0 auto; width: 100%; }
    .page-breadcrumb { font-size: 12px; font-weight: 500; letter-spacing: 3px; text-transform: uppercase; color: rgba(255,255,255,0.4); margin-bottom: 20px; }
    .page-breadcrumb a { color: rgba(255,255,255,0.4); text-decoration: none; }
    .page-breadcrumb a:hover { color: rgba(255,255,255,0.7); }
    .page-hero h1 { font-family: 'Playfair Display', serif; font-size: clamp(44px, 6vw, 72px); font-weight: 700; color: white; line-height: 1.1; margin-bottom: 16px; }
    .page-hero h1 em { font-style: italic; color: var(--brown-pale); }
    .page-hero-desc { font-size: 19px; font-weight: 300; color: rgba(255,255,255,0.6); max-width: 560px; line-height: 1.8; }
    .page-hero-cn { position: absolute; right: 48px; bottom: 40px; font-family: 'Noto Serif SC', serif; font-size: 14px; font-weight: 300; color: rgba(255,255,255,0.2); writing-mode: vertical-rl; letter-spacing: 8px; }

    .main-content { position: relative; z-index: 1; }
    .container { max-width: 1100px; margin: 0 auto; padding: 0 48px; }
    .section-label { font-size: 11px; font-weight: 500; letter-spacing: 4px; text-transform: uppercase; color: var(--gold); margin-bottom: 16px; display: block; }
    .section-divider { width: 60px; height: 1px; background: var(--gold); opacity: 0.6; margin: 20px 0 0; }

    /* ── IMAGE PLACEHOLDER ── */
    .img-box {
      width: 100%; background: var(--cream-dark); border: 2px dashed rgba(123,63,26,0.2); border-radius: 4px;
      display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px;
      cursor: pointer; transition: border-color 0.2s, background 0.2s; position: relative; overflow: hidden;
    }
    .img-box:hover { border-color: var(--brown-light); background: rgba(123,63,26,0.04); }
    .img-box-icon { width: 36px; height: 36px; color: rgba(123,63,26,0.25); }
    .img-box-label { font-size: 12px; font-weight: 500; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(123,63,26,0.3); }
    .img-box-hint { font-size: 11px; color: rgba(123,63,26,0.2); }
    .img-box img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: none; }
    .img-box.has-image .img-box-icon, .img-box.has-image .img-box-label, .img-box.has-image .img-box-hint { display: none; }
    .img-box.has-image img { display: block; }
    .img-upload-input { display: none; }

    /* ── INTRO STRIP ── */
    .intro-strip {
      padding: 80px 0 60px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }

    .intro-heading { font-family: 'Playfair Display', serif; font-size: clamp(28px, 3vw, 42px); font-weight: 700; color: var(--brown); line-height: 1.2; margin-bottom: 24px; }
    .intro-heading em { font-style: italic; color: var(--brown-mid); }
    .intro-body p { font-size: 17px; font-weight: 300; color: var(--brown-mid); line-height: 1.9; margin-bottom: 18px; }
    .intro-body p:last-child { margin-bottom: 0; }

    .credentials-list { display: flex; flex-direction: column; gap: 16px; }
    .credential-item { display: flex; align-items: flex-start; gap: 16px; padding: 20px 24px; background: white; border: 1px solid rgba(123,63,26,0.08); border-radius: 4px; }
    .credential-icon { width: 40px; height: 40px; border: 1.5px solid var(--brown); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Noto Serif SC', serif; font-size: 16px; color: var(--brown); flex-shrink: 0; }
    .credential-title { font-family: 'Playfair Display', serif; font-size: 16px; font-weight: 600; color: var(--brown); margin-bottom: 4px; }
    .credential-desc { font-size: 14px; color: var(--brown-mid); line-height: 1.6; }

    /* ── PHYSICIANS GRID ── */
    .physicians-section { padding: 20px 0 100px; }
    .physicians-header { margin-bottom: 56px; }
    .physicians-header h2 { font-family: 'Playfair Display', serif; font-size: clamp(28px, 3vw, 42px); font-weight: 700; color: var(--brown); }

    /* Outlet filter tabs */
    .outlet-filter { display: flex; gap: 0; margin-bottom: 48px; border: 1.5px solid rgba(123,63,26,0.15); border-radius: 4px; overflow: hidden; width: fit-content; }
    .filter-tab { padding: 12px 28px; font-family: 'Cormorant Garamond', serif; font-size: 14px; font-weight: 500; letter-spacing: 1px; text-transform: uppercase; color: var(--brown); background: white; cursor: pointer; border: none; transition: all 0.2s; }
    .filter-tab.active { background: var(--brown); color: var(--cream); }
    .filter-tab:hover:not(.active) { background: var(--cream-dark); }

    .physicians-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; }

    .physician-card { background: white; border: 1px solid rgba(123,63,26,0.08); border-radius: 4px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s; }
    .physician-card:hover { transform: translateY(-6px); box-shadow: 0 20px 60px rgba(123,63,26,0.12); }

    /* Photo slot */
    .physician-photo { width: 100%; aspect-ratio: 3/4; }
    .physician-photo .img-box { border-radius: 0; border: none; border-bottom: 2px dashed rgba(123,63,26,0.15); }

    .physician-body { padding: 28px 28px 24px; }

    .physician-outlet-tag { display: inline-block; font-size: 10px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: var(--gold); background: rgba(184,138,68,0.1); padding: 4px 10px; border-radius: 2px; margin-bottom: 12px; }

    .physician-name { font-family: 'Playfair Display', serif; font-size: 22px; font-weight: 700; color: var(--brown); margin-bottom: 4px; }
    .physician-name-cn { font-family: 'Noto Serif SC', serif; font-size: 13px; font-weight: 300; color: var(--brown-mid); letter-spacing: 3px; margin-bottom: 12px; }
    .physician-title { font-size: 14px; font-weight: 500; color: var(--brown-light); letter-spacing: 0.5px; margin-bottom: 16px; }

    .physician-divider { height: 1px; background: rgba(123,63,26,0.08); margin: 16px 0; }

    .physician-specialties { display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 16px; }
    .specialty-tag { font-size: 11px; font-weight: 500; letter-spacing: 0.5px; color: var(--brown-mid); background: var(--cream-dark); padding: 4px 10px; border-radius: 2px; }

    .physician-bio { font-size: 14px; font-weight: 300; color: var(--brown-mid); line-height: 1.7; margin-bottom: 20px; }

    .physician-footer { display: flex; align-items: center; justify-content: space-between; }
    .physician-outlet-label { font-size: 12px; color: rgba(123,63,26,0.4); letter-spacing: 0.5px; }
    .btn-book-physician { background: var(--brown); color: var(--cream); padding: 10px 20px; font-family: 'Cormorant Garamond', serif; font-size: 13px; font-weight: 500; letter-spacing: 1.5px; text-transform: uppercase; border: none; border-radius: 2px; cursor: pointer; text-decoration: none; display: inline-block; transition: background 0.2s; }
    .btn-book-physician:hover { background: var(--brown-mid); }

    /* ── JOIN SECTION ── */
    .join-section { background: var(--brown); padding: 80px 0; position: relative; overflow: hidden; }
    .join-section::before { content: '招'; position: absolute; font-family: 'Noto Serif SC', serif; font-size: 360px; font-weight: 700; color: rgba(255,255,255,0.025); left: 50%; top: 50%; transform: translate(-50%,-50%); pointer-events: none; }
    .join-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    .join-text .section-label { color: var(--brown-pale); }
    .join-heading { font-family: 'Playfair Display', serif; font-size: clamp(26px, 3vw, 40px); font-weight: 700; color: white; margin-bottom: 20px; }
    .join-desc { font-size: 17px; font-weight: 300; color: rgba(255,255,255,0.55); line-height: 1.8; margin-bottom: 32px; }
    .btn-join { display: inline-block; background: white; color: var(--brown); padding: 16px 40px; font-family: 'Cormorant Garamond', serif; font-size: 15px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase; text-decoration: none; border-radius: 2px; transition: opacity 0.2s; }
    .btn-join:hover { opacity: 0.85; }
    .join-image .img-box { aspect-ratio: 4/3; border: 2px dashed rgba(255,255,255,0.2); background: rgba(255,255,255,0.04); }
    .join-image .img-box-icon { color: rgba(255,255,255,0.2); }
    .join-image .img-box-label { color: rgba(255,255,255,0.2); }
    .join-image .img-box-hint { color: rgba(255,255,255,0.15); }
    .join-image .img-box:hover { border-color: rgba(255,255,255,0.35); }

    /* ── FOOTER ── */
    footer { background: var(--ink); color: rgba(255,255,255,0.5); padding: 48px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px; }
    .footer-logo { display: flex; align-items: center; gap: 14px; }
    .footer-logo-circle { width: 40px; height: 40px; border: 2px solid rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Noto Serif SC', serif; font-size: 14px; color: rgba(255,255,255,0.5); }
    .footer-name { font-family: 'Playfair Display', serif; font-size: 15px; color: rgba(255,255,255,0.6); }
    .footer-links { display: flex; gap: 28px; list-style: none; }
    .footer-links a { text-decoration: none; font-size: 13px; color: rgba(255,255,255,0.35); letter-spacing: 0.5px; transition: color 0.2s; }
    .footer-links a:hover { color: rgba(255,255,255,0.65); }
    .footer-copy { font-size: 12px; }

    /* hidden physicians for filter */
    .physician-card[data-outlet="Bukit Jalil"].hide,
    .physician-card[data-outlet="Kepong"].hide { display: none; }

    @media (max-width: 900px) {
      nav { padding: 16px 24px; }
      .nav-links { display: none; }
      .page-hero { padding: 130px 24px 60px; }
      .container { padding: 0 24px; }
      .intro-strip { grid-template-columns: 1fr; gap: 40px; }
      .physicians-grid { grid-template-columns: 1fr 1fr; }
      .join-inner { grid-template-columns: 1fr; gap: 40px; }
      footer { padding: 32px 24px; flex-direction: column; }
      .footer-links { display: none; }
    }
    @media (max-width: 600px) {
      .physicians-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

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

<section class="page-hero">
  <div class="page-hero-bg">
    <div class="page-hero-deco phd-1"></div>
    <div class="page-hero-deco phd-2"></div>
  </div>
  <div class="page-hero-content">
    <div class="page-breadcrumb"><a href="index.html">Home</a> &nbsp;/&nbsp; Our Physicians</div>
    <h1>Meet Our <em>Physicians</em></h1>
    <p class="page-hero-desc">Our registered TCM physicians bring years of clinical experience, deep traditional knowledge, and genuine compassion to every consultation.</p>
  </div>
  <div class="page-hero-cn">医者仁心 · 专业资格</div>
</section>

<main class="main-content">

  <!-- INTRO -->
  <section>
    <div class="container">
      <div class="intro-strip">
        <div>
          <span class="section-label">Our Team</span>
          <h2 class="intro-heading">Qualified, <em>Experienced</em><br>& Compassionate</h2>
          <div style="width:60px;height:1px;background:var(--gold);opacity:0.6;margin-bottom:28px;"></div>
          <div class="intro-body">
            <p>Every physician at An Yu TCM is fully registered and holds recognised qualifications in Traditional Chinese Medicine. We invest in continuous education and professional development to ensure our patients receive the highest standard of care.</p>
            <p>From acupuncture to herbal medicine, our physicians are specialists in their respective disciplines and take a holistic, patient-centred approach to every consultation.</p>
          </div>
        </div>
        <div class="credentials-list">
          <div class="credential-item">
            <div class="credential-icon">证</div>
            <div>
              <div class="credential-title">Registered TCM Practitioners</div>
              <div class="credential-desc">All our physicians are registered with the relevant Malaysian TCM regulatory authorities.</div>
            </div>
          </div>
          <div class="credential-item">
            <div class="credential-icon">学</div>
            <div>
              <div class="credential-title">Degree-Qualified</div>
              <div class="credential-desc">Holding Bachelor's or Master's degrees in TCM from accredited institutions in Malaysia or China.</div>
            </div>
          </div>
          <div class="credential-item">
            <div class="credential-icon">年</div>
            <div>
              <div class="credential-title">Years of Clinical Experience</div>
              <div class="credential-desc">Our physicians bring hands-on clinical experience across a wide range of TCM specialties.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PHYSICIANS GRID -->
  <section class="physicians-section">
    <div class="container">
      <div class="physicians-header">
        <span class="section-label">Meet the Team</span>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(28px,3vw,42px);font-weight:700;color:var(--brown);margin-bottom:24px;">Our <em style="font-style:italic;color:var(--brown-mid);">Physicians</em></h2>
        <div style="width:60px;height:1px;background:var(--gold);opacity:0.6;margin-bottom:40px;"></div>

        <!-- Filter tabs -->
        <div class="outlet-filter">
          <button class="filter-tab active" onclick="filterPhysicians('all', this)">All Outlets</button>
          <button class="filter-tab" onclick="filterPhysicians('Kepong', this)">Kepong</button>
          <button class="filter-tab" onclick="filterPhysicians('Bukit Jalil', this)">Bukit Jalil</button>
        </div>
      </div>

      <div class="physicians-grid" id="physicianGrid">

        <!-- Physician 1 -->
        <div class="physician-card" data-outlet="Kepong">
          <div class="physician-photo">
            <div class="img-box" onclick="triggerUpload(this)">
              <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
              <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
              <div class="img-box-label">Physician Photo</div>
              <div class="img-box-hint">Click to upload</div>
              <img src="" alt="Physician" />
            </div>
          </div>
          <div class="physician-body">
            <div class="physician-outlet-tag">Kepong</div>
            <div class="physician-name">Dr. [Name]</div>
            <div class="physician-name-cn">医师 [中文名]</div>
            <div class="physician-title">Senior TCM Physician</div>
            <div class="physician-specialties">
              <span class="specialty-tag">Acupuncture</span>
              <span class="specialty-tag">Pain Management</span>
              <span class="specialty-tag">Internal Medicine</span>
            </div>
            <div class="physician-divider"></div>
            <div class="physician-bio">Specialising in acupuncture and internal medicine with over [X] years of clinical experience. Graduated from [University] with a Bachelor of TCM.</div>
            <div class="physician-footer">
              <span class="physician-outlet-label">@ Kepong</span>
              <a href="index.html#outlets" class="btn-book-physician">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Physician 2 -->
        <div class="physician-card" data-outlet="Kepong">
          <div class="physician-photo">
            <div class="img-box" onclick="triggerUpload(this)">
              <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
              <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
              <div class="img-box-label">Physician Photo</div>
              <div class="img-box-hint">Click to upload</div>
              <img src="" alt="Physician" />
            </div>
          </div>
          <div class="physician-body">
            <div class="physician-outlet-tag">Kepong</div>
            <div class="physician-name">Dr. [Name]</div>
            <div class="physician-name-cn">医师 [中文名]</div>
            <div class="physician-title">TCM Physician</div>
            <div class="physician-specialties">
              <span class="specialty-tag">Herbal Medicine</span>
              <span class="specialty-tag">Women's Health</span>
              <span class="specialty-tag">Cupping</span>
            </div>
            <div class="physician-divider"></div>
            <div class="physician-bio">Experienced in herbal medicine prescriptions and women's health conditions. Dedicated to personalised care for every patient.</div>
            <div class="physician-footer">
              <span class="physician-outlet-label">@ Kepong</span>
              <a href="index.html#outlets" class="btn-book-physician">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Physician 3 -->
        <div class="physician-card" data-outlet="Bukit Jalil">
          <div class="physician-photo">
            <div class="img-box" onclick="triggerUpload(this)">
              <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
              <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
              <div class="img-box-label">Physician Photo</div>
              <div class="img-box-hint">Click to upload</div>
              <img src="" alt="Physician" />
            </div>
          </div>
          <div class="physician-body">
            <div class="physician-outlet-tag" style="color:var(--brown-mid);background:rgba(155,84,48,0.1);">Bukit Jalil</div>
            <div class="physician-name">Dr. [Name]</div>
            <div class="physician-name-cn">医师 [中文名]</div>
            <div class="physician-title">Senior TCM Physician</div>
            <div class="physician-specialties">
              <span class="specialty-tag">Tui Na</span>
              <span class="specialty-tag">Sports Injury</span>
              <span class="specialty-tag">Acupuncture</span>
            </div>
            <div class="physician-divider"></div>
            <div class="physician-bio">Expert in musculoskeletal conditions and sports rehabilitation using Tui Na massage and acupuncture techniques.</div>
            <div class="physician-footer">
              <span class="physician-outlet-label">@ Bukit Jalil</span>
              <a href="index.html#outlets" class="btn-book-physician" style="background:var(--brown-mid);">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Physician 4 -->
        <div class="physician-card" data-outlet="Bukit Jalil">
          <div class="physician-photo">
            <div class="img-box" onclick="triggerUpload(this)">
              <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
              <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
              <div class="img-box-label">Physician Photo</div>
              <div class="img-box-hint">Click to upload</div>
              <img src="" alt="Physician" />
            </div>
          </div>
          <div class="physician-body">
            <div class="physician-outlet-tag" style="color:var(--brown-mid);background:rgba(155,84,48,0.1);">Bukit Jalil</div>
            <div class="physician-name">Dr. [Name]</div>
            <div class="physician-name-cn">医师 [中文名]</div>
            <div class="physician-title">TCM Physician</div>
            <div class="physician-specialties">
              <span class="specialty-tag">Herbal Medicine</span>
              <span class="specialty-tag">Paediatrics</span>
              <span class="specialty-tag">Digestive Health</span>
            </div>
            <div class="physician-divider"></div>
            <div class="physician-bio">Focused on paediatric TCM care and digestive health, helping patients of all ages achieve better wellbeing through herbal remedies.</div>
            <div class="physician-footer">
              <span class="physician-outlet-label">@ Bukit Jalil</span>
              <a href="index.html#outlets" class="btn-book-physician" style="background:var(--brown-mid);">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Physician 5 — add more as needed -->
        <div class="physician-card" data-outlet="Kepong">
          <div class="physician-photo">
            <div class="img-box" onclick="triggerUpload(this)">
              <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
              <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
              <div class="img-box-label">Physician Photo</div>
              <div class="img-box-hint">Click to upload</div>
              <img src="" alt="Physician" />
            </div>
          </div>
          <div class="physician-body">
            <div class="physician-outlet-tag">Kepong</div>
            <div class="physician-name">Dr. [Name]</div>
            <div class="physician-name-cn">医师 [中文名]</div>
            <div class="physician-title">TCM Physician</div>
            <div class="physician-specialties">
              <span class="specialty-tag">Acupuncture</span>
              <span class="specialty-tag">Cupping</span>
              <span class="specialty-tag">Elderly Care</span>
            </div>
            <div class="physician-divider"></div>
            <div class="physician-bio">Committed to holistic elderly care and chronic pain management, offering gentle and effective TCM treatments.</div>
            <div class="physician-footer">
              <span class="physician-outlet-label">@ Kepong</span>
              <a href="index.html#outlets" class="btn-book-physician">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Physician 6 -->
        <div class="physician-card" data-outlet="Bukit Jalil">
          <div class="physician-photo">
            <div class="img-box" onclick="triggerUpload(this)">
              <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
              <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
              <div class="img-box-label">Physician Photo</div>
              <div class="img-box-hint">Click to upload</div>
              <img src="" alt="Physician" />
            </div>
          </div>
          <div class="physician-body">
            <div class="physician-outlet-tag" style="color:var(--brown-mid);background:rgba(155,84,48,0.1);">Bukit Jalil</div>
            <div class="physician-name">Dr. [Name]</div>
            <div class="physician-name-cn">医师 [中文名]</div>
            <div class="physician-title">TCM Physician</div>
            <div class="physician-specialties">
              <span class="specialty-tag">Tui Na</span>
              <span class="specialty-tag">Cupping</span>
              <span class="specialty-tag">Internal Medicine</span>
            </div>
            <div class="physician-divider"></div>
            <div class="physician-bio">Skilled in therapeutic massage techniques and cupping therapy for stress relief, circulation improvement, and general wellbeing.</div>
            <div class="physician-footer">
              <span class="physician-outlet-label">@ Bukit Jalil</span>
              <a href="index.html#outlets" class="btn-book-physician" style="background:var(--brown-mid);">Book Now</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- JOIN SECTION -->
  <section class="join-section">
    <div class="container">
      <div class="join-inner">
        <div class="join-text">
          <span class="section-label">Join Our Team</span>
          <h2 class="join-heading">Are You a Qualified<br>TCM Practitioner?</h2>
          <p class="join-desc">We are always looking for passionate, registered TCM physicians to join the An Yu family. If you share our commitment to patient-centred traditional medicine, we'd love to hear from you.</p>
          <a href="mailto:careers@anyutcm.com" class="btn-join">Get in Touch</a>
        </div>
        <div class="join-image">
          <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:4/3;">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Team Photo</div>
            <div class="img-box-hint">Click to upload</div>
            <img src="" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

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
  function triggerUpload(el) { el.querySelector('.img-upload-input').click(); }
  function loadImage(event, container) {
    const file = event.target.files[0]; if (!file) return;
    const reader = new FileReader();
    reader.onload = e => { container.querySelector('img').src = e.target.result; container.classList.add('has-image'); };
    reader.readAsDataURL(file);
  }
  function filterPhysicians(outlet, btn) {
    document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('.physician-card').forEach(card => {
      if (outlet === 'all' || card.dataset.outlet === outlet) card.classList.remove('hide');
      else card.classList.add('hide');
    });
  }
</script>
</body>
</html>