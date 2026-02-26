<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>An Yu TCM Healthcare Centre – Reserve Your Visit</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Cormorant+Garamond:wght@300;400;500&family=Noto+Serif+SC:wght@300;400;600&display=swap" rel="stylesheet" />
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

    /* ── BACKGROUND TEXTURE ── */
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
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 100;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 48px;
      background: rgba(245,240,232,0.92);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(123,63,26,0.12);
    }

    .nav-logo {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .nav-logo-circle {
      width: 44px; height: 44px;
      border: 2.5px solid var(--brown);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Noto Serif SC', serif;
      font-size: 15px;
      font-weight: 600;
      color: var(--brown);
      letter-spacing: 1px;
    }

    .nav-logo-text {
      font-family: 'Playfair Display', serif;
      font-size: 17px;
      color: var(--brown);
      font-weight: 600;
      line-height: 1.2;
    }

    .nav-logo-text span {
      display: block;
      font-size: 11px;
      font-family: 'Cormorant Garamond', serif;
      font-weight: 400;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--brown-mid);
      opacity: 0.8;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 36px;
      list-style: none;
    }

    .nav-links a {
      text-decoration: none;
      font-family: 'Cormorant Garamond', serif;
      font-size: 15px;
      font-weight: 500;
      color: var(--brown);
      letter-spacing: 0.5px;
      transition: color 0.2s;
      position: relative;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -3px; left: 0; right: 0;
      height: 1px;
      background: var(--brown-light);
      transform: scaleX(0);
      transition: transform 0.3s;
    }

    .nav-links a:hover { color: var(--brown-mid); }
    .nav-links a:hover::after { transform: scaleX(1); }

    .nav-cta {
      background: var(--brown);
      color: var(--cream) !important;
      padding: 10px 24px;
      border-radius: 2px;
      letter-spacing: 1px;
      font-size: 13px !important;
      text-transform: uppercase;
      transition: background 0.25s !important;
    }
    .nav-cta::after { display: none !important; }
    .nav-cta:hover { background: var(--brown-mid) !important; }

    /* ── HERO ── */
    .hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 120px 48px 80px;
      overflow: hidden;
    }

    /* Decorative brushstroke circles */
    .hero-deco {
      position: absolute;
      border-radius: 50%;
      border: 1px solid rgba(123,63,26,0.08);
      pointer-events: none;
    }
    .hero-deco-1 {
      width: 600px; height: 600px;
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      animation: rotateSlow 60s linear infinite;
    }
    .hero-deco-2 {
      width: 440px; height: 440px;
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      border-color: rgba(123,63,26,0.05);
      animation: rotateSlow 40s linear infinite reverse;
    }
    .hero-deco-3 {
      width: 220px; height: 220px;
      top: 12%; right: 8%;
      border-color: rgba(184,138,68,0.12);
    }
    .hero-deco-4 {
      width: 120px; height: 120px;
      bottom: 18%; left: 6%;
      border-color: rgba(184,138,68,0.1);
    }

    @keyframes rotateSlow { to { transform: translate(-50%,-50%) rotate(360deg); } }

    /* Vertical Chinese text decorations */
    .hero-chinese-deco {
      position: absolute;
      font-family: 'Noto Serif SC', serif;
      font-size: 13px;
      font-weight: 300;
      color: rgba(123,63,26,0.15);
      writing-mode: vertical-rl;
      letter-spacing: 8px;
      user-select: none;
    }
    .hero-chinese-deco-left { left: 32px; top: 50%; transform: translateY(-50%); }
    .hero-chinese-deco-right { right: 32px; top: 50%; transform: translateY(-50%); }

    .hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
      max-width: 800px;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 32px;
      opacity: 0;
      animation: fadeUp 0.8s 0.2s forwards;
    }

    .hero-badge::before, .hero-badge::after {
      content: '';
      width: 40px; height: 1px;
      background: var(--gold);
      opacity: 0.5;
    }

    .hero-logo-main {
      margin: 0 auto 28px;
      width: 110px; height: 110px;
      border: 3px solid var(--brown);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Noto Serif SC', serif;
      font-size: 36px;
      font-weight: 600;
      color: var(--brown);
      letter-spacing: 4px;
      position: relative;
      opacity: 0;
      animation: fadeUp 0.9s 0.35s forwards;
    }

    .hero-logo-main::before {
      content: '';
      position: absolute;
      inset: -8px;
      border-radius: 50%;
      border: 1px dashed rgba(123,63,26,0.2);
    }

    h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(40px, 6vw, 70px);
      font-weight: 700;
      color: var(--brown);
      line-height: 1.1;
      margin-bottom: 10px;
      opacity: 0;
      animation: fadeUp 0.9s 0.5s forwards;
    }

    h1 em {
      font-style: italic;
      color: var(--brown-mid);
    }

    .hero-subtitle-chinese {
      font-family: 'Noto Serif SC', serif;
      font-size: 20px;
      font-weight: 300;
      color: var(--brown-mid);
      letter-spacing: 8px;
      margin-bottom: 24px;
      opacity: 0;
      animation: fadeUp 0.9s 0.65s forwards;
    }

    .hero-desc {
      font-size: 18px;
      font-weight: 300;
      color: var(--brown-mid);
      line-height: 1.8;
      max-width: 560px;
      margin: 0 auto 52px;
      opacity: 0;
      animation: fadeUp 0.9s 0.8s forwards;
    }

    .hero-actions {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
      opacity: 0;
      animation: fadeUp 0.9s 0.95s forwards;
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
      cursor: pointer;
      display: inline-block;
    }

    .btn-primary:hover {
      background: transparent;
      color: var(--brown);
    }

    .btn-secondary {
      background: transparent;
      color: var(--brown);
      padding: 16px 40px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 15px;
      font-weight: 500;
      letter-spacing: 2px;
      text-transform: uppercase;
      text-decoration: none;
      border-radius: 2px;
      border: 2px solid rgba(123,63,26,0.35);
      transition: all 0.3s;
      cursor: pointer;
      display: inline-block;
    }

    .btn-secondary:hover {
      border-color: var(--brown);
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* ── OUTLETS SECTION ── */
    .outlets {
      padding: 80px 48px 100px;
      position: relative;
      z-index: 1;
    }

    .section-header {
      text-align: center;
      margin-bottom: 64px;
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

    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(28px, 4vw, 44px);
      font-weight: 600;
      color: var(--brown);
      line-height: 1.2;
    }

    .section-divider {
      width: 60px;
      height: 1px;
      background: var(--gold);
      margin: 20px auto 0;
      opacity: 0.6;
    }

    .outlets-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
      gap: 32px;
      max-width: 900px;
      margin: 0 auto;
    }

    .outlet-card {
      background: white;
      border: 1px solid rgba(123,63,26,0.1);
      border-radius: 4px;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
      position: relative;
    }

    .outlet-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 60px rgba(123,63,26,0.12);
    }

    .outlet-card-header {
      background: var(--brown);
      padding: 36px 36px 28px;
      position: relative;
      overflow: hidden;
    }

    .outlet-card-header::before {
      content: '';
      position: absolute;
      top: -30px; right: -30px;
      width: 120px; height: 120px;
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 50%;
    }

    .outlet-card-header::after {
      content: '';
      position: absolute;
      bottom: -20px; right: 20px;
      width: 70px; height: 70px;
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 50%;
    }

    .outlet-tag {
      display: inline-block;
      background: rgba(255,255,255,0.15);
      color: rgba(255,255,255,0.8);
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 3px;
      text-transform: uppercase;
      padding: 5px 12px;
      border-radius: 1px;
      margin-bottom: 16px;
    }

    .outlet-name {
      font-family: 'Playfair Display', serif;
      font-size: 26px;
      font-weight: 700;
      color: white;
      line-height: 1.2;
    }

    .outlet-name-cn {
      font-family: 'Noto Serif SC', serif;
      font-size: 14px;
      font-weight: 300;
      color: rgba(255,255,255,0.55);
      margin-top: 6px;
      letter-spacing: 4px;
    }

    .outlet-body {
      padding: 32px 36px;
    }

    .outlet-info-row {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      margin-bottom: 18px;
      font-size: 15px;
      color: var(--brown-mid);
      line-height: 1.6;
    }

    .outlet-info-icon {
      width: 20px;
      height: 20px;
      flex-shrink: 0;
      margin-top: 2px;
      color: var(--gold);
    }

    .outlet-divider {
      height: 1px;
      background: rgba(123,63,26,0.08);
      margin: 24px 0;
    }

    .outlet-hours {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 8px;
      font-size: 13px;
      color: var(--brown-mid);
      margin-bottom: 28px;
    }

    .outlet-hours .day { font-weight: 500; color: var(--ink); }

    .btn-book {
      width: 100%;
      background: var(--brown);
      color: var(--cream);
      padding: 14px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: 2px;
      text-transform: uppercase;
      border: 2px solid var(--brown);
      border-radius: 2px;
      cursor: pointer;
      transition: all 0.3s;
      display: block;
      text-align: center;
      text-decoration: none;
    }

    .btn-book:hover {
      background: transparent;
      color: var(--brown);
    }

    /* ── SERVICES ── */
    .services {
      padding: 80px 48px 100px;
      background: var(--brown);
      position: relative;
      overflow: hidden;
    }

    .services::before {
      content: '安鈺';
      position: absolute;
      font-family: 'Noto Serif SC', serif;
      font-size: 280px;
      font-weight: 700;
      color: rgba(255,255,255,0.03);
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      pointer-events: none;
      user-select: none;
    }

    .services .section-label { color: var(--brown-pale); }
    .services .section-title { color: white; }
    .services .section-divider { background: var(--brown-pale); }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 2px;
      max-width: 960px;
      margin: 0 auto;
    }

    .service-item {
      background: rgba(255,255,255,0.04);
      padding: 40px 32px;
      text-align: center;
      border: 1px solid rgba(255,255,255,0.06);
      transition: background 0.3s;
    }

    .service-item:hover {
      background: rgba(255,255,255,0.08);
    }

    .service-icon {
      font-family: 'Noto Serif SC', serif;
      font-size: 32px;
      color: var(--brown-pale);
      margin-bottom: 16px;
      display: block;
    }

    .service-name {
      font-family: 'Playfair Display', serif;
      font-size: 18px;
      color: white;
      margin-bottom: 10px;
    }

    .service-desc {
      font-size: 13px;
      color: rgba(255,255,255,0.5);
      line-height: 1.7;
    }

    /* ── HOW IT WORKS ── */
    .how {
      padding: 80px 48px 100px;
    }

    .steps {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 0;
      max-width: 900px;
      margin: 0 auto;
      position: relative;
    }

    .steps::before {
      content: '';
      position: absolute;
      top: 36px;
      left: calc(12.5% + 36px);
      right: calc(12.5% + 36px);
      height: 1px;
      background: repeating-linear-gradient(
        to right,
        rgba(123,63,26,0.2) 0,
        rgba(123,63,26,0.2) 6px,
        transparent 6px,
        transparent 14px
      );
    }

    .step {
      text-align: center;
      padding: 0 24px;
      position: relative;
      z-index: 1;
    }

    .step-num {
      width: 72px; height: 72px;
      border-radius: 50%;
      border: 2px solid var(--brown);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Playfair Display', serif;
      font-size: 24px;
      font-weight: 700;
      color: var(--brown);
      margin: 0 auto 24px;
      background: var(--cream);
    }

    .step-title {
      font-family: 'Playfair Display', serif;
      font-size: 18px;
      font-weight: 600;
      color: var(--brown);
      margin-bottom: 10px;
    }

    .step-desc {
      font-size: 14px;
      color: var(--brown-mid);
      line-height: 1.7;
    }

    /* ── FOOTER ── */
    footer {
      background: var(--ink);
      color: rgba(255,255,255,0.5);
      padding: 48px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: gap;
      gap: 24px;
    }

    .footer-logo {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .footer-logo-circle {
      width: 40px; height: 40px;
      border: 2px solid rgba(255,255,255,0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Noto Serif SC', serif;
      font-size: 14px;
      color: rgba(255,255,255,0.5);
    }

    .footer-name {
      font-family: 'Playfair Display', serif;
      font-size: 15px;
      color: rgba(255,255,255,0.6);
    }

    .footer-copy {
      font-size: 12px;
      letter-spacing: 0.5px;
    }

    /* ── MODAL ── */
    .modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(46,26,14,0.7);
      backdrop-filter: blur(6px);
      z-index: 200;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s;
    }

    .modal-overlay.active {
      opacity: 1;
      pointer-events: all;
    }

    .modal {
      background: var(--cream);
      width: 90%;
      max-width: 520px;
      border-radius: 4px;
      overflow: hidden;
      transform: translateY(30px);
      transition: transform 0.3s;
    }

    .modal-overlay.active .modal { transform: translateY(0); }

    .modal-header {
      background: var(--brown);
      padding: 28px 36px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .modal-title {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      color: white;
      font-weight: 600;
    }

    .modal-subtitle {
      font-size: 13px;
      color: rgba(255,255,255,0.6);
      margin-top: 4px;
    }

    .modal-close {
      background: none;
      border: none;
      color: rgba(255,255,255,0.6);
      font-size: 24px;
      cursor: pointer;
      line-height: 1;
      padding: 0;
      transition: color 0.2s;
    }

    .modal-close:hover { color: white; }

    .modal-body {
      padding: 36px;
    }

    .form-group {
      margin-bottom: 24px;
    }

    .form-label {
      display: block;
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--brown);
      margin-bottom: 8px;
    }

    .form-input, .form-select {
      width: 100%;
      padding: 12px 16px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 16px;
      color: var(--ink);
      background: white;
      border: 1px solid rgba(123,63,26,0.2);
      border-radius: 2px;
      outline: none;
      transition: border-color 0.2s;
    }

    .form-input:focus, .form-select:focus {
      border-color: var(--brown);
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    .form-submit {
      width: 100%;
      background: var(--brown);
      color: var(--cream);
      padding: 16px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 15px;
      font-weight: 500;
      letter-spacing: 2px;
      text-transform: uppercase;
      border: none;
      border-radius: 2px;
      cursor: pointer;
      transition: background 0.3s;
      margin-top: 8px;
    }

    .form-submit:hover { background: var(--brown-mid); }

    @media (max-width: 640px) {
      nav { padding: 16px 24px; }
      .nav-links { display: none; }
      .hero { padding: 100px 24px 60px; }
      .outlets, .services, .how { padding: 60px 24px; }
      .steps::before { display: none; }
      footer { padding: 32px 24px; flex-direction: column; text-align: center; }
      .form-row { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo">
    <div class="nav-logo-circle">安鈺</div>
    <div class="nav-logo-text">
      An Yu TCM
      <span>Healthcare Centre</span>
    </div>
  </div>
  <ul class="nav-links">
    <li><a href="{{ route('outlets') }}">Outlets</a></li>
    <li><a href="{{ route('services') }}">Services</a></li>
    <li><a href="{{ route('physicians') }}">Our Physicians</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="#" class="nav-cta" onclick="openModal(event,'')">Book Now</a></li>
  </ul>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-deco hero-deco-1"></div>
  <div class="hero-deco hero-deco-2"></div>
  <div class="hero-deco hero-deco-3"></div>
  <div class="hero-deco hero-deco-4"></div>
  <div class="hero-chinese-deco hero-chinese-deco-left">平衡 · 和谐 · 健康 · 自然</div>
  <div class="hero-chinese-deco hero-chinese-deco-right">传统中医 · 现代护理</div>

  <div class="hero-content">
    <div class="hero-badge">Traditional Chinese Medicine</div>
    <div class="hero-logo-main">安鈺</div>
    <h1>Restore <em>Balance,</em><br>Renew Wellness</h1>
    <div class="hero-subtitle-chinese">安鈺中医保健中心</div>
    <p class="hero-desc">
      Experience the ancient wisdom of Traditional Chinese Medicine
      at our two Kuala Lumpur clinics. Reserve your consultation with
      our certified physicians today.
    </p>
    <div class="hero-actions">
      <a href="#outlets" class="btn-primary">Reserve a Visit</a>
      <a href="#services" class="btn-secondary">Our Services</a>
    </div>
  </div>
</section>

<!-- OUTLETS -->
<section class="outlets" id="outlets">
  <div class="section-header">
    <span class="section-label">Our Locations</span>
    <h2 class="section-title">Choose Your Nearest Outlet</h2>
    <div class="section-divider"></div>
  </div>

  <div class="outlets-grid">

    <!-- Kepong -->
    <div class="outlet-card">
      <div class="outlet-card-header">
        <div class="outlet-tag">Kepong</div>
        <div class="outlet-name">An Yu TCM<br>Kepong</div>
        <div class="outlet-name-cn">安鈺中医 · 甲洞</div>
      </div>
      <div class="outlet-body">
        <div class="outlet-info-row">
          <svg class="outlet-info-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
          </svg>
          <span>Jalan Kepong, 52100 Kuala Lumpur, Wilayah Persekutuan</span>
        </div>
        <div class="outlet-info-row">
          <svg class="outlet-info-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
          </svg>
          <span>+60 3-XXXX XXXX</span>
        </div>
        <div class="outlet-divider"></div>
        <div class="outlet-hours">
          <span class="day">Mon – Fri</span><span>9:00 AM – 6:00 PM</span>
          <span class="day">Saturday</span><span>9:00 AM – 5:00 PM</span>
          <span class="day">Sunday</span><span>10:00 AM – 3:00 PM</span>
          <span class="day">Public Holiday</span><span>Closed</span>
        </div>
        <a href="#" class="btn-book" onclick="openModal(event,'Kepong')">Book at Kepong →</a>
      </div>
    </div>

    <!-- Bukit Jalil -->
    <div class="outlet-card">
      <div class="outlet-card-header" style="background: var(--brown-mid);">
        <div class="outlet-tag">Bukit Jalil</div>
        <div class="outlet-name">An Yu TCM<br>Bukit Jalil</div>
        <div class="outlet-name-cn">安鈺中医 · 武吉加里尔</div>
      </div>
      <div class="outlet-body">
        <div class="outlet-info-row">
          <svg class="outlet-info-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
          </svg>
          <span>Bukit Jalil, 57000 Kuala Lumpur, Wilayah Persekutuan</span>
        </div>
        <div class="outlet-info-row">
          <svg class="outlet-info-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
          </svg>
          <span>+60 3-XXXX XXXX</span>
        </div>
        <div class="outlet-divider"></div>
        <div class="outlet-hours">
          <span class="day">Mon – Fri</span><span>9:00 AM – 6:00 PM</span>
          <span class="day">Saturday</span><span>9:00 AM – 5:00 PM</span>
          <span class="day">Sunday</span><span>10:00 AM – 3:00 PM</span>
          <span class="day">Public Holiday</span><span>Closed</span>
        </div>
        <a href="#" class="btn-book" onclick="openModal(event,'Bukit Jalil')" style="background: var(--brown-mid); border-color: var(--brown-mid);">Book at Bukit Jalil →</a>
      </div>
    </div>

  </div>
</section>

<!-- SERVICES -->
<section class="services" id="services">
  <div class="section-header">
    <span class="section-label">What We Offer</span>
    <h2 class="section-title">Our Treatments</h2>
    <div class="section-divider"></div>
  </div>

  <div class="services-grid">
    <div class="service-item">
      <span class="service-icon">针</span>
      <div class="service-name">Acupuncture</div>
      <div class="service-desc">Restore qi flow and relieve pain through precision needle therapy</div>
    </div>
    <div class="service-item">
      <span class="service-icon">拔</span>
      <div class="service-name">Cupping</div>
      <div class="service-desc">Enhance circulation and reduce muscle tension with cupping therapy</div>
    </div>
    <div class="service-item">
      <span class="service-icon">药</span>
      <div class="service-name">Herbal Medicine</div>
      <div class="service-desc">Personalised herbal prescriptions crafted for your unique constitution</div>
    </div>
    <div class="service-item">
      <span class="service-icon">推</span>
      <div class="service-name">Tui Na Massage</div>
      <div class="service-desc">Therapeutic Chinese massage to unblock meridians and ease tension</div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="how" id="how">
  <div class="section-header">
    <span class="section-label">Simple Process</span>
    <h2 class="section-title">How to Book Your Visit</h2>
    <div class="section-divider"></div>
  </div>

  <div class="steps">
    <div class="step">
      <div class="step-num">一</div>
      <div class="step-title">Choose Outlet</div>
      <div class="step-desc">Select either our Kepong or Bukit Jalil clinic</div>
    </div>
    <div class="step">
      <div class="step-num">二</div>
      <div class="step-title">Pick a Service</div>
      <div class="step-desc">Browse our range of TCM treatments and select what you need</div>
    </div>
    <div class="step">
      <div class="step-num">三</div>
      <div class="step-title">Set Date & Time</div>
      <div class="step-desc">Choose your preferred appointment slot from available times</div>
    </div>
    <div class="step">
      <div class="step-num">四</div>
      <div class="step-title">Confirm & Arrive</div>
      <div class="step-desc">Receive your confirmation and come in for your treatment</div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-logo">
    <div class="footer-logo-circle">安鈺</div>
    <div class="footer-name">An Yu TCM Healthcare Centre</div>
  </div>
  <div class="footer-copy">© 2025 An Yu TCM. All rights reserved.</div>
</footer>

<!-- RESERVATION MODAL -->
<div class="modal-overlay" id="modal" onclick="closeModalOutside(event)">
  <div class="modal">
    <div class="modal-header">
      <div>
        <div class="modal-title">Book an Appointment</div>
        <div class="modal-subtitle" id="modal-subtitle">An Yu TCM Healthcare Centre</div>
      </div>
      <button class="modal-close" onclick="closeModal()">×</button>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <label class="form-label">Outlet</label>
        <select class="form-select" id="outlet-select">
          <option value="">Select an outlet...</option>
          <option value="Kepong">An Yu TCM – Kepong</option>
          <option value="Bukit Jalil">An Yu TCM – Bukit Jalil</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label">Service</label>
        <select class="form-select">
          <option value="">Select a service...</option>
          <option>Acupuncture</option>
          <option>Cupping Therapy</option>
          <option>Herbal Medicine Consultation</option>
          <option>Tui Na Massage</option>
          <option>General TCM Consultation</option>
        </select>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Date</label>
          <input type="date" class="form-input" />
        </div>
        <div class="form-group">
          <label class="form-label">Time</label>
          <select class="form-select">
            <option>9:00 AM</option>
            <option>10:00 AM</option>
            <option>11:00 AM</option>
            <option>12:00 PM</option>
            <option>2:00 PM</option>
            <option>3:00 PM</option>
            <option>4:00 PM</option>
            <option>5:00 PM</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-input" placeholder="Your name" />
        </div>
        <div class="form-group">
          <label class="form-label">Phone Number</label>
          <input type="tel" class="form-input" placeholder="+60 1X-XXX XXXX" />
        </div>
      </div>
      <button class="form-submit" onclick="submitBooking()">Confirm Reservation</button>
    </div>
  </div>
</div>

<script>
  function openModal(e, outlet) {
    e.preventDefault();
    const modal = document.getElementById('modal');
    const subtitle = document.getElementById('modal-subtitle');
    const select = document.getElementById('outlet-select');
    modal.classList.add('active');
    if (outlet) {
      select.value = outlet;
      subtitle.textContent = 'An Yu TCM – ' + outlet;
    } else {
      subtitle.textContent = 'An Yu TCM Healthcare Centre';
    }
  }

  function closeModal() {
    document.getElementById('modal').classList.remove('active');
  }

  function closeModalOutside(e) {
    if (e.target === document.getElementById('modal')) closeModal();
  }

  function submitBooking() {
    alert('Thank you! Your appointment request has been received. We will confirm via WhatsApp or call shortly.');
    closeModal();
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    if (a.getAttribute('href').length > 1) {
      a.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(a.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
    }
  });
</script>
</body>
</html>