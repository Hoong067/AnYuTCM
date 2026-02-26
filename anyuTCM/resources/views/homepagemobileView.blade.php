<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>An Yu TCM – Book a Visit</title>
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

    html, body {
      height: 100%;
      width: 100%;
      overflow: hidden;
    }

    body {
      font-family: 'Cormorant Garamond', serif;
      background: var(--cream);
      color: var(--ink);
      display: flex;
      flex-direction: column;
      max-width: 430px;
      margin: 0 auto;
      box-shadow: 0 0 60px rgba(0,0,0,0.15);
      position: relative;
    }

    /* ── TOP NAV ── */
    .top-nav {
      position: fixed;
      top: 0; left: 50%; transform: translateX(-50%);
      width: 100%; max-width: 430px;
      height: var(--nav-h);
      background: rgba(245,240,232,0.95);
      backdrop-filter: blur(16px);
      border-bottom: 1px solid rgba(123,63,26,0.1);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 100;
    }

    .top-nav-logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo-seal {
      width: 38px; height: 38px;
      border: 2px solid var(--brown);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-family: 'Noto Serif SC', serif;
      font-size: 13px; font-weight: 600;
      color: var(--brown);
    }

    .logo-text-wrap {
      line-height: 1.2;
    }

    .logo-en {
      font-family: 'Playfair Display', serif;
      font-size: 15px; font-weight: 600;
      color: var(--brown);
    }

    .logo-sub {
      font-size: 10px;
      font-weight: 400;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--brown-light);
    }

    .top-nav-bell {
      width: 38px; height: 38px;
      border-radius: 50%;
      background: rgba(123,63,26,0.06);
      display: flex; align-items: center; justify-content: center;
      cursor: pointer;
      position: relative;
    }

    .top-nav-bell svg { width: 20px; height: 20px; color: var(--brown); }

    .notif-dot {
      position: absolute;
      top: 8px; right: 8px;
      width: 8px; height: 8px;
      background: var(--gold);
      border-radius: 50%;
      border: 1.5px solid var(--cream);
    }

    /* ── SCROLL CONTAINER ── */
    .scroll-body {
      position: fixed;
      top: var(--nav-h);
      bottom: var(--bottom-h);
      left: 50%; transform: translateX(-50%);
      width: 100%; max-width: 430px;
      overflow-y: auto;
      overflow-x: hidden;
      -webkit-overflow-scrolling: touch;
      scroll-behavior: smooth;
    }

    .scroll-body::-webkit-scrollbar { display: none; }

    /* ── HERO CARD ── */
    .hero-card {
      background: var(--brown);
      margin: 16px 16px 0;
      border-radius: 20px;
      padding: 28px 24px 24px;
      position: relative;
      overflow: hidden;
    }

    .hero-card::before {
      content: '安鈺';
      position: absolute;
      font-family: 'Noto Serif SC', serif;
      font-size: 120px;
      font-weight: 700;
      color: rgba(255,255,255,0.04);
      right: -10px; bottom: -20px;
      line-height: 1;
      pointer-events: none;
    }

    .hero-deco-ring {
      position: absolute;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.07);
      pointer-events: none;
    }

    .ring-1 { width: 180px; height: 180px; top: -60px; right: -40px; }
    .ring-2 { width: 120px; height: 120px; top: -30px; right: -10px; }
    .ring-3 { width: 80px; height: 80px; bottom: 10px; left: 20px; }

    .hero-greeting {
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: rgba(255,255,255,0.5);
      margin-bottom: 8px;
    }

    .hero-title {
      font-family: 'Playfair Display', serif;
      font-size: 26px;
      font-weight: 700;
      color: white;
      line-height: 1.25;
      margin-bottom: 4px;
    }

    .hero-title em {
      font-style: italic;
      color: var(--brown-pale);
    }

    .hero-cn {
      font-family: 'Noto Serif SC', serif;
      font-size: 12px;
      font-weight: 300;
      color: rgba(255,255,255,0.4);
      letter-spacing: 4px;
      margin-bottom: 24px;
    }

    .hero-book-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: white;
      color: var(--brown);
      padding: 12px 22px;
      border-radius: 50px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 14px;
      font-weight: 600;
      letter-spacing: 1px;
      text-decoration: none;
      cursor: pointer;
      border: none;
      transition: transform 0.15s, box-shadow 0.15s;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }

    .hero-book-btn:active { transform: scale(0.97); }

    .hero-book-btn svg { width: 16px; height: 16px; }

    .hero-stats {
      display: flex;
      gap: 0;
      margin-top: 24px;
      padding-top: 20px;
      border-top: 1px solid rgba(255,255,255,0.08);
    }

    .hero-stat {
      flex: 1;
      text-align: center;
    }

    .hero-stat + .hero-stat {
      border-left: 1px solid rgba(255,255,255,0.08);
    }

    .hero-stat-num {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      font-weight: 700;
      color: white;
    }

    .hero-stat-label {
      font-size: 11px;
      color: rgba(255,255,255,0.45);
      letter-spacing: 0.5px;
      margin-top: 2px;
    }

    /* ── SECTION LABELS ── */
    .section-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 24px 20px 12px;
    }

    .section-heading {
      font-family: 'Playfair Display', serif;
      font-size: 19px;
      font-weight: 600;
      color: var(--brown);
    }

    .section-link {
      font-size: 13px;
      color: var(--gold);
      text-decoration: none;
      font-weight: 500;
    }

    /* ── OUTLET CARDS (horizontal scroll) ── */
    .outlets-scroll {
      display: flex;
      gap: 14px;
      padding: 4px 20px 4px;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none;
    }
    .outlets-scroll::-webkit-scrollbar { display: none; }

    .outlet-pill {
      flex-shrink: 0;
      width: 260px;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 24px rgba(123,63,26,0.1);
      background: white;
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;
      border: 1px solid rgba(123,63,26,0.07);
    }

    .outlet-pill:active { transform: scale(0.98); }

    .outlet-pill-header {
      padding: 20px 20px 16px;
      background: var(--brown);
      position: relative;
      overflow: hidden;
    }

    .outlet-pill-header.bj { background: var(--brown-mid); }

    .outlet-pill-header::after {
      content: '';
      position: absolute;
      top: -20px; right: -20px;
      width: 80px; height: 80px;
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 50%;
    }

    .outlet-pill-tag {
      font-size: 9px;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: rgba(255,255,255,0.55);
      background: rgba(255,255,255,0.1);
      padding: 3px 9px;
      border-radius: 20px;
      display: inline-block;
      margin-bottom: 8px;
    }

    .outlet-pill-name {
      font-family: 'Playfair Display', serif;
      font-size: 18px;
      font-weight: 700;
      color: white;
      line-height: 1.2;
    }

    .outlet-pill-cn {
      font-family: 'Noto Serif SC', serif;
      font-size: 11px;
      color: rgba(255,255,255,0.4);
      margin-top: 4px;
      letter-spacing: 3px;
    }

    .outlet-pill-body {
      padding: 16px 20px 18px;
    }

    .outlet-pill-info {
      display: flex;
      align-items: flex-start;
      gap: 8px;
      font-size: 13px;
      color: var(--brown-mid);
      margin-bottom: 8px;
      line-height: 1.5;
    }

    .outlet-pill-info svg {
      width: 14px; height: 14px;
      flex-shrink: 0;
      margin-top: 2px;
      color: var(--gold);
    }

    .outlet-pill-hours {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: rgba(123,63,26,0.04);
      border-radius: 8px;
      padding: 8px 12px;
      margin: 12px 0;
    }

    .outlet-pill-hours span { font-size: 12px; color: var(--brown-mid); }
    .outlet-pill-hours strong { font-size: 12px; color: var(--ink); font-weight: 600; }

    .outlet-open-badge {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      font-size: 11px;
      font-weight: 600;
      color: #2d7a47;
      background: #e8f5ee;
      padding: 3px 10px;
      border-radius: 20px;
    }

    .outlet-open-badge::before {
      content: '';
      width: 6px; height: 6px;
      border-radius: 50%;
      background: #2d7a47;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.4; }
    }

    .btn-book-pill {
      width: 100%;
      background: var(--brown);
      color: white;
      border: none;
      border-radius: 10px;
      padding: 12px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 14px;
      font-weight: 600;
      letter-spacing: 1px;
      cursor: pointer;
      transition: background 0.2s;
      margin-top: 4px;
    }

    .btn-book-pill.bj { background: var(--brown-mid); }
    .btn-book-pill:active { opacity: 0.85; }

    /* ── QUICK SERVICES ── */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
      padding: 4px 20px 0;
    }

    .service-chip {
      background: white;
      border-radius: 14px;
      padding: 16px 8px 14px;
      text-align: center;
      border: 1px solid rgba(123,63,26,0.07);
      box-shadow: 0 2px 12px rgba(123,63,26,0.06);
      cursor: pointer;
      transition: transform 0.15s, box-shadow 0.15s;
    }

    .service-chip:active { transform: scale(0.95); }

    .service-chip-icon {
      font-family: 'Noto Serif SC', serif;
      font-size: 24px;
      color: var(--brown);
      display: block;
      margin-bottom: 6px;
    }

    .service-chip-name {
      font-size: 11px;
      font-weight: 500;
      color: var(--brown-mid);
      line-height: 1.3;
    }

    /* ── HOW TO BOOK ── */
    .steps-list {
      padding: 4px 20px 0;
      display: flex;
      flex-direction: column;
      gap: 0;
    }

    .step-item {
      display: flex;
      gap: 16px;
      align-items: flex-start;
      position: relative;
    }

    .step-item:not(:last-child)::after {
      content: '';
      position: absolute;
      left: 18px;
      top: 44px;
      bottom: -16px;
      width: 1px;
      background: repeating-linear-gradient(
        to bottom,
        rgba(123,63,26,0.2) 0, rgba(123,63,26,0.2) 4px,
        transparent 4px, transparent 10px
      );
    }

    .step-circle {
      width: 36px; height: 36px;
      border-radius: 50%;
      border: 2px solid var(--brown);
      display: flex; align-items: center; justify-content: center;
      font-family: 'Noto Serif SC', serif;
      font-size: 14px;
      font-weight: 600;
      color: var(--brown);
      flex-shrink: 0;
      background: var(--cream);
      z-index: 1;
    }

    .step-content {
      padding-bottom: 24px;
    }

    .step-title {
      font-family: 'Playfair Display', serif;
      font-size: 16px;
      font-weight: 600;
      color: var(--brown);
      margin-bottom: 4px;
    }

    .step-desc {
      font-size: 14px;
      color: var(--brown-mid);
      line-height: 1.6;
    }

    /* ── PROMO BANNER ── */
    .promo-banner {
      margin: 8px 16px 0;
      background: linear-gradient(135deg, var(--gold) 0%, var(--brown-light) 100%);
      border-radius: 16px;
      padding: 20px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      overflow: hidden;
      position: relative;
    }

    .promo-banner::before {
      content: '福';
      position: absolute;
      font-family: 'Noto Serif SC', serif;
      font-size: 100px;
      font-weight: 700;
      color: rgba(255,255,255,0.08);
      right: -10px; bottom: -20px;
    }

    .promo-text .promo-label {
      font-size: 10px;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: rgba(255,255,255,0.7);
      margin-bottom: 4px;
    }

    .promo-text .promo-title {
      font-family: 'Playfair Display', serif;
      font-size: 16px;
      font-weight: 700;
      color: white;
      line-height: 1.3;
    }

    .promo-cta {
      background: white;
      color: var(--brown);
      border: none;
      padding: 10px 16px;
      border-radius: 50px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
      white-space: nowrap;
      flex-shrink: 0;
    }

    /* ── FOOTER SPACE ── */
    .scroll-footer {
      height: 24px;
    }

    /* ── BOTTOM TAB BAR ── */
    .bottom-nav {
      position: fixed;
      bottom: 0; left: 50%; transform: translateX(-50%);
      width: 100%; max-width: 430px;
      height: var(--bottom-h);
      background: rgba(245,240,232,0.97);
      backdrop-filter: blur(20px);
      border-top: 1px solid rgba(123,63,26,0.1);
      display: flex;
      align-items: center;
      justify-content: space-around;
      padding: 0 8px;
      z-index: 100;
    }

    .tab-item {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 4px;
      padding: 8px 4px;
      cursor: pointer;
      border-radius: 12px;
      transition: background 0.2s;
    }

    .tab-item:active { background: rgba(123,63,26,0.05); }
    a.tab-item { text-decoration: none; }

    .tab-item svg { width: 22px; height: 22px; color: rgba(123,63,26,0.35); }
    .tab-item .tab-label { font-size: 10px; color: rgba(123,63,26,0.4); font-weight: 500; letter-spacing: 0.3px; }

    .tab-item.active svg { color: var(--brown); }
    .tab-item.active .tab-label { color: var(--brown); font-weight: 600; }

    /* Centre book tab */
    .tab-book {
      flex-shrink: 0;
      margin: 0 4px;
    }

    .tab-book-btn {
      width: 52px; height: 52px;
      background: var(--brown);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      box-shadow: 0 4px 18px rgba(123,63,26,0.35);
      cursor: pointer;
      transition: transform 0.15s;
    }

    .tab-book-btn:active { transform: scale(0.93); }
    .tab-book-btn svg { width: 22px; height: 22px; color: white; }

    /* ── BOOKING SHEET (slide up) ── */
    .sheet-overlay {
      position: fixed;
      inset: 0;
      background: rgba(46,26,14,0.55);
      backdrop-filter: blur(4px);
      z-index: 200;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s;
    }

    .sheet-overlay.active {
      opacity: 1;
      pointer-events: all;
    }

    .booking-sheet {
      position: fixed;
      bottom: 0; left: 50%; transform: translateX(-50%) translateY(100%);
      width: 100%; max-width: 430px;
      background: var(--cream);
      border-radius: 24px 24px 0 0;
      z-index: 201;
      transition: transform 0.4s cubic-bezier(0.32, 0.72, 0, 1);
      max-height: 92vh;
      overflow-y: auto;
    }

    .booking-sheet.active {
      transform: translateX(-50%) translateY(0);
    }

    .sheet-handle {
      width: 40px; height: 4px;
      background: rgba(123,63,26,0.2);
      border-radius: 2px;
      margin: 14px auto 0;
    }

    .sheet-header {
      background: var(--brown);
      margin: 16px 16px 0;
      border-radius: 16px;
      padding: 20px 20px;
    }

    .sheet-title {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      font-weight: 700;
      color: white;
    }

    .sheet-subtitle {
      font-size: 13px;
      color: rgba(255,255,255,0.55);
      margin-top: 4px;
      letter-spacing: 0.5px;
    }

    .sheet-body {
      padding: 20px 20px 32px;
    }

    .form-label {
      display: block;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--brown);
      margin-bottom: 8px;
    }

    .form-group { margin-bottom: 20px; }

    .form-input, .form-select {
      width: 100%;
      padding: 14px 16px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 17px;
      color: var(--ink);
      background: white;
      border: 1.5px solid rgba(123,63,26,0.15);
      border-radius: 12px;
      outline: none;
      transition: border-color 0.2s;
      -webkit-appearance: none;
    }

    .form-input:focus, .form-select:focus {
      border-color: var(--brown);
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }

    /* Outlet toggle */
    .outlet-toggle {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
    }

    .outlet-toggle-btn {
      padding: 14px 12px;
      border-radius: 12px;
      border: 1.5px solid rgba(123,63,26,0.15);
      background: white;
      text-align: center;
      cursor: pointer;
      transition: all 0.2s;
    }

    .outlet-toggle-btn .ot-label {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: rgba(123,63,26,0.4);
      margin-bottom: 4px;
    }

    .outlet-toggle-btn .ot-name {
      font-family: 'Playfair Display', serif;
      font-size: 15px;
      font-weight: 600;
      color: var(--brown);
    }

    .outlet-toggle-btn.selected {
      background: var(--brown);
      border-color: var(--brown);
    }

    .outlet-toggle-btn.selected .ot-label { color: rgba(255,255,255,0.55); }
    .outlet-toggle-btn.selected .ot-name { color: white; }

    /* Time slots */
    .time-slots {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 8px;
    }

    .time-slot {
      padding: 10px 4px;
      border-radius: 10px;
      border: 1.5px solid rgba(123,63,26,0.12);
      background: white;
      text-align: center;
      font-family: 'Cormorant Garamond', serif;
      font-size: 13px;
      font-weight: 500;
      color: var(--brown);
      cursor: pointer;
      transition: all 0.2s;
    }

    .time-slot.selected {
      background: var(--brown);
      border-color: var(--brown);
      color: white;
    }

    .time-slot.unavailable {
      opacity: 0.35;
      cursor: not-allowed;
      text-decoration: line-through;
    }

    .form-submit-btn {
      width: 100%;
      background: var(--brown);
      color: white;
      border: none;
      border-radius: 14px;
      padding: 17px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 16px;
      font-weight: 600;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      cursor: pointer;
      transition: background 0.2s;
      margin-top: 8px;
    }

    .form-submit-btn:active { background: var(--brown-mid); }

    /* ── SUCCESS STATE ── */
    .success-screen {
      display: none;
      text-align: center;
      padding: 40px 20px 32px;
    }

    .success-screen.visible { display: block; }
    .sheet-body.hidden { display: none; }

    .success-icon {
      width: 72px; height: 72px;
      background: var(--brown);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 20px;
      font-family: 'Noto Serif SC', serif;
      font-size: 30px;
      color: white;
    }

    .success-title {
      font-family: 'Playfair Display', serif;
      font-size: 24px;
      font-weight: 700;
      color: var(--brown);
      margin-bottom: 10px;
    }

    .success-desc {
      font-size: 15px;
      color: var(--brown-mid);
      line-height: 1.7;
      margin-bottom: 28px;
    }

    .success-close {
      width: 100%;
      background: var(--brown);
      color: white;
      border: none;
      border-radius: 14px;
      padding: 17px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 16px;
      font-weight: 600;
      letter-spacing: 1px;
      cursor: pointer;
    }

    /* page load animations */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(16px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .anim-1 { animation: fadeUp 0.5s 0.1s both; }
    .anim-2 { animation: fadeUp 0.5s 0.2s both; }
    .anim-3 { animation: fadeUp 0.5s 0.3s both; }
    .anim-4 { animation: fadeUp 0.5s 0.4s both; }
    .anim-5 { animation: fadeUp 0.5s 0.5s both; }
    .anim-6 { animation: fadeUp 0.5s 0.6s both; }
  </style>
</head>
<body>

<!-- TOP NAV -->
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

<!-- MAIN SCROLL BODY -->
<div class="scroll-body">

  <!-- HERO -->
  <div class="hero-card anim-1">
    <div class="hero-deco-ring ring-1"></div>
    <div class="hero-deco-ring ring-2"></div>
    <div class="hero-deco-ring ring-3"></div>
    <div class="hero-greeting">Traditional Chinese Medicine</div>
    <div class="hero-title">Restore <em>Balance,</em><br>Renew Wellness</div>
    <div class="hero-cn">安鈺中医保健中心</div>
    <button class="hero-book-btn" onclick="openSheet('')">
      <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>
      </svg>
      Book an Appointment
    </button>
    <div class="hero-stats">
      <div class="hero-stat">
        <div class="hero-stat-num">2</div>
        <div class="hero-stat-label">Outlets</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">4+</div>
        <div class="hero-stat-label">Treatments</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">TCM</div>
        <div class="hero-stat-label">Certified</div>
      </div>
    </div>
  </div>

  <!-- PROMO -->
  <div class="promo-banner anim-2">
    <div class="promo-text">
      <div class="promo-label">New Patient</div>
      <div class="promo-title">First Consultation<br>Special Offer</div>
    </div>
    <button class="promo-cta" onclick="openSheet('')">Book Now</button>
  </div>

  <!-- OUTLETS -->
  <div class="section-row anim-3">
    <div class="section-heading">Our Outlets</div>
    <a href="#" class="section-link">View all</a>
  </div>

  <div class="outlets-scroll anim-3">

    <!-- Kepong -->
    <div class="outlet-pill" onclick="openSheet('Kepong')">
      <div class="outlet-pill-header">
        <div class="outlet-pill-tag">Kepong</div>
        <div class="outlet-pill-name">An Yu TCM<br>Kepong</div>
        <div class="outlet-pill-cn">安鈺中医 · 甲洞</div>
      </div>
      <div class="outlet-pill-body">
        <div class="outlet-pill-info">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
          </svg>
          Jalan Kepong, 52100 KL
        </div>
        <div class="outlet-pill-hours">
          <span>Mon – Fri</span>
          <strong>9 AM – 6 PM</strong>
          <div class="outlet-open-badge">Open</div>
        </div>
        <button class="btn-book-pill" onclick="openSheet('Kepong')">Book Kepong →</button>
      </div>
    </div>

    <!-- Bukit Jalil -->
    <div class="outlet-pill" onclick="openSheet('Bukit Jalil')">
      <div class="outlet-pill-header bj">
        <div class="outlet-pill-tag">Bukit Jalil</div>
        <div class="outlet-pill-name">An Yu TCM<br>Bukit Jalil</div>
        <div class="outlet-pill-cn">安鈺中医 · 武吉加里尔</div>
      </div>
      <div class="outlet-pill-body">
        <div class="outlet-pill-info">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
          </svg>
          Bukit Jalil, 57000 KL
        </div>
        <div class="outlet-pill-hours">
          <span>Mon – Fri</span>
          <strong>9 AM – 6 PM</strong>
          <div class="outlet-open-badge">Open</div>
        </div>
        <button class="btn-book-pill bj" onclick="openSheet('Bukit Jalil')">Book Bukit Jalil →</button>
      </div>
    </div>

  </div>

  <!-- SERVICES -->
  <div class="section-row anim-4">
    <div class="section-heading">Our Services</div>
    <a href="#" class="section-link">See all</a>
  </div>

  <div class="services-grid anim-4">
    <div class="service-chip" onclick="openSheetWithService('Acupuncture')">
      <span class="service-chip-icon">针</span>
      <div class="service-chip-name">Acupuncture</div>
    </div>
    <div class="service-chip" onclick="openSheetWithService('Cupping Therapy')">
      <span class="service-chip-icon">拔</span>
      <div class="service-chip-name">Cupping</div>
    </div>
    <div class="service-chip" onclick="openSheetWithService('Herbal Medicine Consultation')">
      <span class="service-chip-icon">药</span>
      <div class="service-chip-name">Herbal Medicine</div>
    </div>
    <div class="service-chip" onclick="openSheetWithService('Tui Na Massage')">
      <span class="service-chip-icon">推</span>
      <div class="service-chip-name">Tui Na</div>
    </div>
  </div>

  <!-- HOW TO BOOK -->
  <div class="section-row anim-5">
    <div class="section-heading">How It Works</div>
  </div>

  <div class="steps-list anim-5">
    <div class="step-item">
      <div class="step-circle">一</div>
      <div class="step-content">
        <div class="step-title">Choose Your Outlet</div>
        <div class="step-desc">Select either Kepong or Bukit Jalil — whichever is nearest to you.</div>
      </div>
    </div>
    <div class="step-item">
      <div class="step-circle">二</div>
      <div class="step-content">
        <div class="step-title">Pick a Treatment</div>
        <div class="step-desc">Browse our range of TCM treatments and choose what you need.</div>
      </div>
    </div>
    <div class="step-item">
      <div class="step-circle">三</div>
      <div class="step-content">
        <div class="step-title">Select Date & Time</div>
        <div class="step-desc">Choose an available slot that suits your schedule.</div>
      </div>
    </div>
    <div class="step-item">
      <div class="step-circle">四</div>
      <div class="step-content">
        <div class="step-title">Confirm & Attend</div>
        <div class="step-desc">Receive confirmation and arrive at your chosen clinic.</div>
      </div>
    </div>
  </div>

  <div class="scroll-footer"></div>
</div>

<!-- BOTTOM NAV -->
<nav class="bottom-nav">
  <a class="tab-item active" href="{{ route('home') }}">
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

  <!-- Centre book button -->
  <div class="tab-book">
    <div class="tab-book-btn" onclick="openSheet('')">
      <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
      </svg>
    </div>
  </div>

  <a class="tab-item" href="{{ route('mobile.services') }}">
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

<!-- BOOKING SHEET OVERLAY -->
<div class="sheet-overlay" id="sheetOverlay" onclick="closeSheet()"></div>

<!-- BOOKING SHEET -->
<div class="booking-sheet" id="bookingSheet">
  <div class="sheet-handle"></div>
  <div class="sheet-header">
    <div class="sheet-title">Book an Appointment</div>
    <div class="sheet-subtitle" id="sheet-subtitle">An Yu TCM Healthcare Centre</div>
  </div>

  <div class="sheet-body" id="sheetBody">

    <!-- Outlet toggle -->
    <div class="form-group">
      <label class="form-label">Select Outlet</label>
      <div class="outlet-toggle">
        <div class="outlet-toggle-btn" id="ot-kepong" onclick="selectOutlet('Kepong')">
          <div class="ot-label">Outlet 1</div>
          <div class="ot-name">Kepong</div>
        </div>
        <div class="outlet-toggle-btn" id="ot-bj" onclick="selectOutlet('Bukit Jalil')">
          <div class="ot-label">Outlet 2</div>
          <div class="ot-name">Bukit Jalil</div>
        </div>
      </div>
    </div>

    <!-- Service -->
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

    <!-- Date -->
    <div class="form-group">
      <label class="form-label">Date</label>
      <input type="date" class="form-input" id="date-input" />
    </div>

    <!-- Time slots -->
    <div class="form-group">
      <label class="form-label">Preferred Time</label>
      <div class="time-slots" id="time-slots">
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

    <!-- Name & Phone -->
    <div class="form-row">
      <div class="form-group">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-input" placeholder="Your name" />
      </div>
      <div class="form-group">
        <label class="form-label">Phone</label>
        <input type="tel" class="form-input" placeholder="+60 1X-XXX" />
      </div>
    </div>

    <button class="form-submit-btn" onclick="submitBooking()">Confirm Reservation</button>
  </div>

  <!-- SUCCESS -->
  <div class="success-screen" id="successScreen">
    <div class="success-icon">安</div>
    <div class="success-title">You're All Set!</div>
    <div class="success-desc">Your appointment has been received.<br>We'll confirm via WhatsApp or call shortly.</div>
    <button class="success-close" onclick="closeSheet()">Back to Home</button>
  </div>
</div>

<script>
  // ── Set today as min date
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('date-input').min = today;
  document.getElementById('date-input').value = today;

  // ── Sheet open/close
  let selectedOutlet = '';

  function openSheet(outlet) {
    selectedOutlet = outlet || '';
    const overlay = document.getElementById('sheetOverlay');
    const sheet = document.getElementById('bookingSheet');
    const subtitle = document.getElementById('sheet-subtitle');

    // reset success state
    document.getElementById('successScreen').classList.remove('visible');
    document.getElementById('sheetBody').classList.remove('hidden');

    // Set outlet if passed
    if (outlet) {
      selectOutlet(outlet);
      subtitle.textContent = 'An Yu TCM – ' + outlet;
    } else {
      subtitle.textContent = 'An Yu TCM Healthcare Centre';
      document.getElementById('ot-kepong').classList.remove('selected');
      document.getElementById('ot-bj').classList.remove('selected');
    }

    overlay.classList.add('active');
    setTimeout(() => sheet.classList.add('active'), 10);
  }

  function openSheetWithService(service) {
    openSheet('');
    setTimeout(() => {
      document.getElementById('service-select').value = service;
    }, 100);
  }

  function closeSheet() {
    const overlay = document.getElementById('sheetOverlay');
    const sheet = document.getElementById('bookingSheet');
    sheet.classList.remove('active');
    setTimeout(() => overlay.classList.remove('active'), 300);
  }

  function selectOutlet(outlet) {
    selectedOutlet = outlet;
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

  // ── Swipe down to close sheet
  let startY = 0;
  const sheet = document.getElementById('bookingSheet');
  sheet.addEventListener('touchstart', e => { startY = e.touches[0].clientY; }, { passive: true });
  sheet.addEventListener('touchend', e => {
    const dy = e.changedTouches[0].clientY - startY;
    if (dy > 80) closeSheet();
  }, { passive: true });
</script>
</body>
</html>