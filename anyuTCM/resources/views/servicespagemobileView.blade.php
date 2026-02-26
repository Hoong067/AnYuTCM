<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>An Yu TCM – Our Services</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Cormorant+Garamond:wght@300;400;500;600&family=Noto+Serif+SC:wght@300;400;600&display=swap" rel="stylesheet" />
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
      --white: #ffffff;
      --nav-h: 64px;
      --bottom-h: 72px;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html, body { height: 100%; width: 100%; overflow: hidden; }

    body {
      font-family: 'Cormorant Garamond', serif;
      background: var(--cream); color: var(--ink);
      display: flex; flex-direction: column;
      max-width: 430px; margin: 0 auto;
      box-shadow: 0 0 60px rgba(0,0,0,0.15);
      position: relative;
    }

    /* ── TOP NAV ── */
    .top-nav {
      position: fixed; top: 0; left: 50%; transform: translateX(-50%);
      width: 100%; max-width: 430px; height: var(--nav-h);
      background: rgba(245,240,232,0.95); backdrop-filter: blur(16px);
      border-bottom: 1px solid rgba(123,63,26,0.1);
      display: flex; align-items: center; justify-content: space-between;
      padding: 0 20px; z-index: 100;
    }

    .top-nav-logo { display: flex; align-items: center; gap: 10px; }
    .logo-seal { width: 38px; height: 38px; border: 2px solid var(--brown); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Noto Serif SC', serif; font-size: 13px; font-weight: 600; color: var(--brown); }
    .logo-text-wrap { line-height: 1.2; }
    .logo-en { font-family: 'Playfair Display', serif; font-size: 15px; font-weight: 600; color: var(--brown); }
    .logo-sub { font-size: 10px; font-weight: 400; letter-spacing: 1.5px; text-transform: uppercase; color: var(--brown-light); }
    .top-nav-bell { width: 38px; height: 38px; border-radius: 50%; background: rgba(123,63,26,0.06); display: flex; align-items: center; justify-content: center; cursor: pointer; position: relative; }
    .top-nav-bell svg { width: 20px; height: 20px; color: var(--brown); }
    .notif-dot { position: absolute; top: 8px; right: 8px; width: 8px; height: 8px; background: var(--gold); border-radius: 50%; border: 1.5px solid var(--cream); }

    /* ── SCROLL CONTAINER ── */
    .scroll-body {
      position: fixed; top: var(--nav-h); bottom: var(--bottom-h);
      left: 50%; transform: translateX(-50%);
      width: 100%; max-width: 430px;
      overflow-y: auto; overflow-x: hidden;
      -webkit-overflow-scrolling: touch; scroll-behavior: smooth;
    }
    .scroll-body::-webkit-scrollbar { display: none; }

    /* ── PAGE HEADER ── */
    .page-header {
      background: var(--brown); margin: 16px 16px 0;
      border-radius: 20px; padding: 28px 24px 24px;
      position: relative; overflow: hidden;
    }

    .page-header::before {
      content: '療';
      position: absolute; font-family: 'Noto Serif SC', serif;
      font-size: 120px; font-weight: 700;
      color: rgba(255,255,255,0.04);
      right: -10px; bottom: -20px; line-height: 1; pointer-events: none;
    }

    .page-header-deco { position: absolute; border-radius: 50%; border: 1px solid rgba(255,255,255,0.07); pointer-events: none; }
    .ring-1 { width: 180px; height: 180px; top: -60px; right: -40px; }
    .ring-2 { width: 120px; height: 120px; top: -30px; right: -10px; }

    .page-header-label { font-size: 11px; font-weight: 600; letter-spacing: 2.5px; text-transform: uppercase; color: rgba(255,255,255,0.5); margin-bottom: 6px; }
    .page-header-title { font-family: 'Playfair Display', serif; font-size: 26px; font-weight: 700; color: white; line-height: 1.2; margin-bottom: 6px; }
    .page-header-sub { font-size: 14px; color: rgba(255,255,255,0.55); line-height: 1.5; }

    /* ── SEARCH BAR ── */
    .search-wrap { padding: 16px 16px 0; }
    .search-bar {
      display: flex; align-items: center; gap: 10px;
      background: white; border-radius: 14px; padding: 12px 16px;
      border: 1.5px solid rgba(123,63,26,0.1);
      box-shadow: 0 2px 12px rgba(123,63,26,0.05);
    }
    .search-bar svg { width: 18px; height: 18px; color: var(--brown-light); flex-shrink: 0; }
    .search-bar input { flex: 1; border: none; outline: none; font-family: 'Cormorant Garamond', serif; font-size: 16px; color: var(--ink); background: transparent; }
    .search-bar input::placeholder { color: rgba(123,63,26,0.3); }

    /* ── FILTER CHIPS ── */
    .filter-scroll { display: flex; gap: 8px; padding: 14px 16px 0; overflow-x: auto; scrollbar-width: none; }
    .filter-scroll::-webkit-scrollbar { display: none; }
    .filter-chip { flex-shrink: 0; padding: 7px 16px; border-radius: 50px; font-family: 'Cormorant Garamond', serif; font-size: 13px; font-weight: 600; letter-spacing: 0.3px; cursor: pointer; border: 1.5px solid rgba(123,63,26,0.15); background: white; color: var(--brown-mid); transition: all 0.2s; white-space: nowrap; }
    .filter-chip.active { background: var(--brown); color: white; border-color: var(--brown); }

    /* ── SERVICE CARDS ── */
    .services-list { padding: 14px 16px 0; }

    .service-card {
      background: white; border-radius: 18px; margin-bottom: 14px;
      border: 1px solid rgba(123,63,26,0.07);
      box-shadow: 0 2px 16px rgba(123,63,26,0.06); overflow: hidden;
      cursor: pointer; transition: transform 0.15s;
    }

    .service-card:active { transform: scale(0.99); }

    .service-card-header {
      background: var(--brown); padding: 20px 20px 16px;
      display: flex; align-items: center; justify-content: space-between;
      position: relative; overflow: hidden;
    }

    .service-card-header.gold { background: linear-gradient(135deg, var(--gold), var(--brown-light)); }
    .service-card-header.mid { background: var(--brown-mid); }
    .service-card-header.light { background: linear-gradient(135deg, var(--brown-light), var(--brown-pale)); }

    .service-card-header::after {
      content: '';
      position: absolute; top: -16px; right: -16px;
      width: 70px; height: 70px;
      border: 1px solid rgba(255,255,255,0.1); border-radius: 50%;
    }

    .service-icon-big {
      font-family: 'Noto Serif SC', serif;
      font-size: 36px; color: white;
      line-height: 1;
    }

    .service-card-header-info { text-align: right; }

    .service-duration {
      font-size: 10px; font-weight: 500; letter-spacing: 1.5px;
      text-transform: uppercase; color: rgba(255,255,255,0.55); margin-bottom: 2px;
    }

    .service-price {
      font-family: 'Playfair Display', serif;
      font-size: 20px; font-weight: 700; color: white;
    }

    .service-card-body { padding: 18px 20px 20px; }

    .service-name {
      font-family: 'Playfair Display', serif;
      font-size: 18px; font-weight: 600; color: var(--ink);
      margin-bottom: 2px;
    }

    .service-cn {
      font-family: 'Noto Serif SC', serif;
      font-size: 11px; color: var(--gold);
      letter-spacing: 3px; margin-bottom: 10px;
    }

    .service-desc {
      font-size: 14px; color: var(--brown-mid);
      line-height: 1.65; margin-bottom: 14px;
    }

    .service-tags { display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 16px; }

    .service-tag {
      font-size: 11px; font-weight: 500;
      padding: 4px 10px; border-radius: 20px;
      background: rgba(123,63,26,0.06); color: var(--brown-mid);
      letter-spacing: 0.3px;
    }

    .service-card-footer {
      display: flex; align-items: center;
      justify-content: space-between; padding-top: 14px;
      border-top: 1px solid rgba(123,63,26,0.07);
    }

    .service-avail { font-size: 12px; color: var(--brown-light); }

    .btn-book-service {
      background: var(--brown); color: white;
      border: none; border-radius: 10px; padding: 10px 20px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 14px; font-weight: 600; letter-spacing: 0.5px; cursor: pointer;
    }

    .btn-book-service:active { opacity: 0.8; }

    /* ── TCM INFO BANNER ── */
    .info-banner {
      margin: 4px 16px 0;
      background: linear-gradient(135deg, rgba(123,63,26,0.08), rgba(184,138,68,0.08));
      border: 1px solid rgba(123,63,26,0.1);
      border-radius: 16px; padding: 18px 20px;
      display: flex; align-items: center; gap: 14px;
    }

    .info-banner-icon {
      font-family: 'Noto Serif SC', serif;
      font-size: 28px; color: var(--gold); flex-shrink: 0;
    }

    .info-banner-text { font-size: 13px; color: var(--brown-mid); line-height: 1.55; }
    .info-banner-text strong { color: var(--brown); }

    /* ── SCROLL FOOTER ── */
    .scroll-footer { height: 24px; }

    /* ── BOTTOM NAV ── */
    .bottom-nav {
      position: fixed; bottom: 0; left: 50%; transform: translateX(-50%);
      width: 100%; max-width: 430px; height: var(--bottom-h);
      background: rgba(245,240,232,0.97); backdrop-filter: blur(20px);
      border-top: 1px solid rgba(123,63,26,0.1);
      display: flex; align-items: center; justify-content: space-around;
      padding: 0 8px; z-index: 100;
    }

    .tab-item { flex: 1; display: flex; flex-direction: column; align-items: center; gap: 4px; padding: 8px 4px; cursor: pointer; border-radius: 12px; transition: background 0.2s; text-decoration: none; }
    .tab-item:active { background: rgba(123,63,26,0.05); }
    .tab-item svg { width: 22px; height: 22px; color: rgba(123,63,26,0.35); }
    .tab-item .tab-label { font-size: 10px; color: rgba(123,63,26,0.4); font-weight: 500; letter-spacing: 0.3px; }
    .tab-item.active svg { color: var(--brown); }
    .tab-item.active .tab-label { color: var(--brown); font-weight: 600; }
    .tab-book { flex-shrink: 0; margin: 0 4px; }
    .tab-book-btn { width: 52px; height: 52px; background: var(--brown); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 18px rgba(123,63,26,0.35); cursor: pointer; transition: transform 0.15s; }
    .tab-book-btn:active { transform: scale(0.93); }
    .tab-book-btn svg { width: 22px; height: 22px; color: white; }

    /* ── BOOKING SHEET ── */
    .sheet-overlay { position: fixed; inset: 0; background: rgba(46,26,14,0.55); backdrop-filter: blur(4px); z-index: 200; opacity: 0; pointer-events: none; transition: opacity 0.3s; }
    .sheet-overlay.active { opacity: 1; pointer-events: all; }
    .booking-sheet { position: fixed; bottom: 0; left: 50%; transform: translateX(-50%) translateY(100%); width: 100%; max-width: 430px; background: var(--cream); border-radius: 24px 24px 0 0; z-index: 201; transition: transform 0.4s cubic-bezier(0.32, 0.72, 0, 1); max-height: 92vh; overflow-y: auto; }
    .booking-sheet.active { transform: translateX(-50%) translateY(0); }
    .sheet-handle { width: 40px; height: 4px; background: rgba(123,63,26,0.2); border-radius: 2px; margin: 14px auto 0; }
    .sheet-header { background: var(--brown); margin: 16px 16px 0; border-radius: 16px; padding: 20px 20px; }
    .sheet-title { font-family: 'Playfair Display', serif; font-size: 22px; font-weight: 700; color: white; }
    .sheet-subtitle { font-size: 13px; color: rgba(255,255,255,0.55); margin-top: 4px; }
    .sheet-body { padding: 20px 20px 32px; }
    .form-label { display: block; font-size: 11px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: var(--brown); margin-bottom: 8px; }
    .form-group { margin-bottom: 20px; }
    .form-input, .form-select { width: 100%; padding: 14px 16px; font-family: 'Cormorant Garamond', serif; font-size: 17px; color: var(--ink); background: white; border: 1.5px solid rgba(123,63,26,0.15); border-radius: 12px; outline: none; -webkit-appearance: none; }
    .form-input:focus, .form-select:focus { border-color: var(--brown); }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
    .outlet-toggle { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
    .outlet-toggle-btn { padding: 14px 12px; border-radius: 12px; border: 1.5px solid rgba(123,63,26,0.15); background: white; text-align: center; cursor: pointer; }
    .outlet-toggle-btn .ot-label { font-size: 10px; font-weight: 500; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(123,63,26,0.4); margin-bottom: 4px; }
    .outlet-toggle-btn .ot-name { font-family: 'Playfair Display', serif; font-size: 15px; font-weight: 600; color: var(--brown); }
    .outlet-toggle-btn.selected { background: var(--brown); border-color: var(--brown); }
    .outlet-toggle-btn.selected .ot-label { color: rgba(255,255,255,0.55); }
    .outlet-toggle-btn.selected .ot-name { color: white; }
    .time-slots { display: grid; grid-template-columns: repeat(4, 1fr); gap: 8px; }
    .time-slot { padding: 10px 4px; border-radius: 10px; border: 1.5px solid rgba(123,63,26,0.12); background: white; text-align: center; font-family: 'Cormorant Garamond', serif; font-size: 13px; color: var(--brown); cursor: pointer; }
    .time-slot.selected { background: var(--brown); border-color: var(--brown); color: white; }
    .time-slot.unavailable { opacity: 0.35; cursor: not-allowed; text-decoration: line-through; }
    .form-submit-btn { width: 100%; background: var(--brown); color: white; border: none; border-radius: 14px; padding: 17px; font-family: 'Cormorant Garamond', serif; font-size: 16px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase; cursor: pointer; margin-top: 8px; }
    .success-screen { display: none; text-align: center; padding: 40px 20px 32px; }
    .success-screen.visible { display: block; }
    .sheet-body.hidden { display: none; }
    .success-icon { width: 72px; height: 72px; background: var(--brown); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-family: 'Noto Serif SC', serif; font-size: 30px; color: white; }
    .success-title { font-family: 'Playfair Display', serif; font-size: 24px; font-weight: 700; color: var(--brown); margin-bottom: 10px; }
    .success-desc { font-size: 15px; color: var(--brown-mid); line-height: 1.7; margin-bottom: 28px; }
    .success-close { width: 100%; background: var(--brown); color: white; border: none; border-radius: 14px; padding: 17px; font-family: 'Cormorant Garamond', serif; font-size: 16px; font-weight: 600; cursor: pointer; }

    @keyframes fadeUp { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
    .anim-1 { animation: fadeUp 0.5s 0.1s both; }
    .anim-2 { animation: fadeUp 0.5s 0.2s both; }
    .anim-3 { animation: fadeUp 0.5s 0.3s both; }
  </style>
</head>
<body>

<nav class="top-nav">
  <div class="top-nav-logo">
    <div class="logo-seal">安鈺</div>
    <div class="logo-text-wrap">
      <div class="logo-en">An Yu TCM</div>
      <div class="logo-sub">Healthcare Centre</div>
    </div>
  </div>
  <div class="top-nav-bell">
    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
    </svg>
    <div class="notif-dot"></div>
  </div>
</nav>

<div class="scroll-body">

  <!-- PAGE HEADER -->
  <div class="page-header anim-1">
    <div class="page-header-deco ring-1"></div>
    <div class="page-header-deco ring-2"></div>
    <div class="page-header-label">Traditional Chinese Medicine</div>
    <div class="page-header-title">Our Services</div>
    <div class="page-header-sub">Holistic treatments rooted in centuries of wisdom</div>
  </div>

  <!-- SEARCH -->
  <div class="search-wrap anim-2">
    <div class="search-bar">
      <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
      </svg>
      <input type="text" placeholder="Search treatments…" />
    </div>
  </div>

  <!-- FILTER CHIPS -->
  <div class="filter-scroll anim-2">
    <div class="filter-chip active">All</div>
    <div class="filter-chip">Pain Relief</div>
    <div class="filter-chip">Wellness</div>
    <div class="filter-chip">Respiratory</div>
    <div class="filter-chip">Digestive</div>
    <div class="filter-chip">Women's Health</div>
  </div>

  <!-- TCM INFO BANNER -->
  <div class="info-banner anim-3">
    <div class="info-banner-icon">道</div>
    <div class="info-banner-text"><strong>First consultation?</strong> Our physicians will conduct a full TCM assessment before recommending a treatment plan.</div>
  </div>

  <!-- SERVICES LIST -->
  <div class="services-list">

    <!-- Acupuncture -->
    <div class="service-card anim-3">
      <div class="service-card-header">
        <div class="service-icon-big">针</div>
        <div class="service-card-header-info">
          <div class="service-duration">45 – 60 min</div>
          <div class="service-price">From RM 80</div>
        </div>
      </div>
      <div class="service-card-body">
        <div class="service-name">Acupuncture</div>
        <div class="service-cn">针灸治疗</div>
        <div class="service-desc">Fine needles are inserted at specific meridian points to restore the flow of Qi, alleviate pain, and promote the body's natural healing response.</div>
        <div class="service-tags">
          <span class="service-tag">Pain Relief</span>
          <span class="service-tag">Stress</span>
          <span class="service-tag">Insomnia</span>
          <span class="service-tag">Fertility</span>
        </div>
        <div class="service-card-footer">
          <div class="service-avail">Both outlets</div>
          <button class="btn-book-service" onclick="openSheetWithService('Acupuncture')">Book Now</button>
        </div>
      </div>
    </div>

    <!-- Cupping Therapy -->
    <div class="service-card">
      <div class="service-card-header mid">
        <div class="service-icon-big">拔</div>
        <div class="service-card-header-info">
          <div class="service-duration">30 – 45 min</div>
          <div class="service-price">From RM 60</div>
        </div>
      </div>
      <div class="service-card-body">
        <div class="service-name">Cupping Therapy</div>
        <div class="service-cn">拔罐疗法</div>
        <div class="service-desc">Suction cups are applied to the skin to improve blood circulation, release muscle tension, and draw out toxins, leaving you feeling refreshed.</div>
        <div class="service-tags">
          <span class="service-tag">Muscle Pain</span>
          <span class="service-tag">Circulation</span>
          <span class="service-tag">Detox</span>
        </div>
        <div class="service-card-footer">
          <div class="service-avail">Both outlets</div>
          <button class="btn-book-service" onclick="openSheetWithService('Cupping Therapy')">Book Now</button>
        </div>
      </div>
    </div>

    <!-- Herbal Medicine -->
    <div class="service-card">
      <div class="service-card-header gold">
        <div class="service-icon-big">药</div>
        <div class="service-card-header-info">
          <div class="service-duration">30 min + herbs</div>
          <div class="service-price">From RM 50</div>
        </div>
      </div>
      <div class="service-card-body">
        <div class="service-name">Herbal Medicine</div>
        <div class="service-cn">中草药调理</div>
        <div class="service-desc">Our physicians prescribe personalised herbal formulas based on your body constitution and health concerns, addressing root causes rather than symptoms.</div>
        <div class="service-tags">
          <span class="service-tag">Immunity</span>
          <span class="service-tag">Digestive</span>
          <span class="service-tag">Energy</span>
          <span class="service-tag">Hormonal</span>
        </div>
        <div class="service-card-footer">
          <div class="service-avail">Both outlets</div>
          <button class="btn-book-service" onclick="openSheetWithService('Herbal Medicine Consultation')">Book Now</button>
        </div>
      </div>
    </div>

    <!-- Tui Na -->
    <div class="service-card">
      <div class="service-card-header light">
        <div class="service-icon-big" style="color: var(--brown);">推</div>
        <div class="service-card-header-info">
          <div class="service-duration">45 – 60 min</div>
          <div class="service-price">From RM 70</div>
        </div>
      </div>
      <div class="service-card-body">
        <div class="service-name">Tui Na Massage</div>
        <div class="service-cn">推拿按摩</div>
        <div class="service-desc">A therapeutic Chinese massage technique using rhythmic compression along energy channels to address musculo-skeletal issues, tension, and fatigue.</div>
        <div class="service-tags">
          <span class="service-tag">Back Pain</span>
          <span class="service-tag">Neck & Shoulders</span>
          <span class="service-tag">Relaxation</span>
        </div>
        <div class="service-card-footer">
          <div class="service-avail">Both outlets</div>
          <button class="btn-book-service" onclick="openSheetWithService('Tui Na Massage')" style="background: var(--brown-mid);">Book Now</button>
        </div>
      </div>
    </div>

    <!-- General Consultation -->
    <div class="service-card">
      <div class="service-card-header">
        <div class="service-icon-big">診</div>
        <div class="service-card-header-info">
          <div class="service-duration">20 – 30 min</div>
          <div class="service-price">From RM 30</div>
        </div>
      </div>
      <div class="service-card-body">
        <div class="service-name">General TCM Consultation</div>
        <div class="service-cn">中医问诊</div>
        <div class="service-desc">A comprehensive TCM assessment including pulse diagnosis, tongue examination, and health history review to create your personalised wellness plan.</div>
        <div class="service-tags">
          <span class="service-tag">Diagnosis</span>
          <span class="service-tag">Wellness Plan</span>
          <span class="service-tag">First Visit</span>
        </div>
        <div class="service-card-footer">
          <div class="service-avail">Both outlets</div>
          <button class="btn-book-service" onclick="openSheetWithService('General TCM Consultation')">Book Now</button>
        </div>
      </div>
    </div>

  </div>

  <div class="scroll-footer"></div>
</div>

<!-- BOTTOM NAV -->
<nav class="bottom-nav">
  <a class="tab-item" href="{{ route('home') }}">
    <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
    </svg>
    <span class="tab-label">Home</span>
  </a>
  <a class="tab-item" href="{{ route('mobile.bookings') }}">
    <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"/>
    </svg>
    <span class="tab-label">Bookings</span>
  </a>
  <div class="tab-book">
    <div class="tab-book-btn" onclick="openSheet('')">
      <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
      </svg>
    </div>
  </div>
  <a class="tab-item active" href="{{ route('mobile.services') }}">
    <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/>
    </svg>
    <span class="tab-label">Services</span>
  </a>
  <a class="tab-item" href="{{ route('mobile.profile') }}">
    <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
    </svg>
    <span class="tab-label">Profile</span>
  </a>
</nav>

<!-- BOOKING SHEET -->
<div class="sheet-overlay" id="sheetOverlay" onclick="closeSheet()"></div>
<div class="booking-sheet" id="bookingSheet">
  <div class="sheet-handle"></div>
  <div class="sheet-header">
    <div class="sheet-title">Book an Appointment</div>
    <div class="sheet-subtitle" id="sheet-subtitle">An Yu TCM Healthcare Centre</div>
  </div>
  <div class="sheet-body" id="sheetBody">
    <div class="form-group">
      <label class="form-label">Select Outlet</label>
      <div class="outlet-toggle">
        <div class="outlet-toggle-btn" id="ot-kepong" onclick="selectOutlet('Kepong')"><div class="ot-label">Outlet 1</div><div class="ot-name">Kepong</div></div>
        <div class="outlet-toggle-btn" id="ot-bj" onclick="selectOutlet('Bukit Jalil')"><div class="ot-label">Outlet 2</div><div class="ot-name">Bukit Jalil</div></div>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label">Treatment</label>
      <select class="form-select" id="service-select">
        <option value="">Select a treatment…</option>
        <option>Acupuncture</option>
        <option>Cupping Therapy</option>
        <option>Herbal Medicine Consultation</option>
        <option>Tui Na Massage</option>
        <option>General TCM Consultation</option>
      </select>
    </div>
    <div class="form-group">
      <label class="form-label">Date</label>
      <input type="date" class="form-input" id="date-input" />
    </div>
    <div class="form-group">
      <label class="form-label">Preferred Time</label>
      <div class="time-slots">
        <div class="time-slot" onclick="selectTime(this)">9:00 AM</div>
        <div class="time-slot" onclick="selectTime(this)">10:00 AM</div>
        <div class="time-slot unavailable">11:00 AM</div>
        <div class="time-slot" onclick="selectTime(this)">12:00 PM</div>
        <div class="time-slot" onclick="selectTime(this)">2:00 PM</div>
        <div class="time-slot" onclick="selectTime(this)">3:00 PM</div>
        <div class="time-slot unavailable">4:00 PM</div>
        <div class="time-slot" onclick="selectTime(this)">5:00 PM</div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group"><label class="form-label">Full Name</label><input type="text" class="form-input" placeholder="Your name" /></div>
      <div class="form-group"><label class="form-label">Phone</label><input type="tel" class="form-input" placeholder="+60 1X-XXX" /></div>
    </div>
    <button class="form-submit-btn" onclick="submitBooking()">Confirm Reservation</button>
  </div>
  <div class="success-screen" id="successScreen">
    <div class="success-icon">安</div>
    <div class="success-title">You're All Set!</div>
    <div class="success-desc">Your appointment has been received.<br>We'll confirm via WhatsApp or call shortly.</div>
    <button class="success-close" onclick="closeSheet()">Back to Services</button>
  </div>
</div>

<script>
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('date-input').min = today;
  document.getElementById('date-input').value = today;

  function openSheet(outlet) {
    document.getElementById('successScreen').classList.remove('visible');
    document.getElementById('sheetBody').classList.remove('hidden');
    if (outlet) {
      selectOutlet(outlet);
      document.getElementById('sheet-subtitle').textContent = 'An Yu TCM – ' + outlet;
    } else {
      document.getElementById('sheet-subtitle').textContent = 'An Yu TCM Healthcare Centre';
      document.getElementById('ot-kepong').classList.remove('selected');
      document.getElementById('ot-bj').classList.remove('selected');
    }
    document.getElementById('sheetOverlay').classList.add('active');
    setTimeout(() => document.getElementById('bookingSheet').classList.add('active'), 10);
  }

  function openSheetWithService(service) {
    openSheet('');
    setTimeout(() => { document.getElementById('service-select').value = service; }, 100);
  }

  function closeSheet() {
    document.getElementById('bookingSheet').classList.remove('active');
    setTimeout(() => document.getElementById('sheetOverlay').classList.remove('active'), 300);
  }

  function selectOutlet(outlet) {
    document.getElementById('ot-kepong').classList.toggle('selected', outlet === 'Kepong');
    document.getElementById('ot-bj').classList.toggle('selected', outlet === 'Bukit Jalil');
    document.getElementById('sheet-subtitle').textContent = 'An Yu TCM – ' + outlet;
  }

  function selectTime(el) {
    if (el.classList.contains('unavailable')) return;
    document.querySelectorAll('.time-slot').forEach(t => t.classList.remove('selected'));
    el.classList.add('selected');
  }

  function submitBooking() {
    document.getElementById('sheetBody').classList.add('hidden');
    document.getElementById('successScreen').classList.add('visible');
  }

  let startY = 0;
  const sheet = document.getElementById('bookingSheet');
  sheet.addEventListener('touchstart', e => { startY = e.touches[0].clientY; }, { passive: true });
  sheet.addEventListener('touchend', e => { if (e.changedTouches[0].clientY - startY > 80) closeSheet(); }, { passive: true });
</script>
</body>
</html>
