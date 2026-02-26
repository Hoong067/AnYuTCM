<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>An Yu TCM – My Bookings</title>
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

    .top-nav-logo { display: flex; align-items: center; gap: 10px; }

    .logo-seal {
      width: 38px; height: 38px;
      border: 2px solid var(--brown);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-family: 'Noto Serif SC', serif;
      font-size: 13px; font-weight: 600;
      color: var(--brown);
    }

    .logo-text-wrap { line-height: 1.2; }

    .logo-en {
      font-family: 'Playfair Display', serif;
      font-size: 15px; font-weight: 600;
      color: var(--brown);
    }

    .logo-sub {
      font-size: 10px; font-weight: 400;
      letter-spacing: 1.5px; text-transform: uppercase;
      color: var(--brown-light);
    }

    .top-nav-bell {
      width: 38px; height: 38px;
      border-radius: 50%;
      background: rgba(123,63,26,0.06);
      display: flex; align-items: center; justify-content: center;
      cursor: pointer; position: relative;
    }

    .top-nav-bell svg { width: 20px; height: 20px; color: var(--brown); }

    .notif-dot {
      position: absolute; top: 8px; right: 8px;
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
      overflow-y: auto; overflow-x: hidden;
      -webkit-overflow-scrolling: touch;
      scroll-behavior: smooth;
    }

    .scroll-body::-webkit-scrollbar { display: none; }

    /* ── PAGE HEADER ── */
    .page-header {
      background: var(--brown);
      margin: 16px 16px 0;
      border-radius: 20px;
      padding: 28px 24px 24px;
      position: relative;
      overflow: hidden;
    }

    .page-header::before {
      content: '約';
      position: absolute;
      font-family: 'Noto Serif SC', serif;
      font-size: 120px; font-weight: 700;
      color: rgba(255,255,255,0.04);
      right: -10px; bottom: -20px;
      line-height: 1; pointer-events: none;
    }

    .page-header-deco {
      position: absolute; border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.07);
      pointer-events: none;
    }

    .ring-1 { width: 180px; height: 180px; top: -60px; right: -40px; }
    .ring-2 { width: 120px; height: 120px; top: -30px; right: -10px; }

    .page-header-label {
      font-size: 11px; font-weight: 600;
      letter-spacing: 2.5px; text-transform: uppercase;
      color: rgba(255,255,255,0.5); margin-bottom: 6px;
    }

    .page-header-title {
      font-family: 'Playfair Display', serif;
      font-size: 26px; font-weight: 700;
      color: white; line-height: 1.2; margin-bottom: 16px;
    }

    .booking-count-row {
      display: flex; gap: 12px;
    }

    .booking-count-chip {
      background: rgba(255,255,255,0.12);
      border-radius: 50px;
      padding: 6px 14px;
      font-size: 12px; font-weight: 500;
      color: rgba(255,255,255,0.85);
      letter-spacing: 0.3px;
    }

    .booking-count-chip.upcoming { background: rgba(255,255,255,0.18); color: white; }

    /* ── TAB ROW ── */
    .tab-row {
      display: flex;
      margin: 20px 16px 4px;
      background: white;
      border-radius: 14px;
      padding: 4px;
      box-shadow: 0 2px 12px rgba(123,63,26,0.06);
    }

    .tab-btn {
      flex: 1; padding: 10px 12px;
      border: none; background: transparent;
      border-radius: 10px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 15px; font-weight: 600;
      color: rgba(123,63,26,0.4);
      cursor: pointer; transition: all 0.2s;
    }

    .tab-btn.active {
      background: var(--brown);
      color: white;
    }

    /* ── BOOKING CARD ── */
    .bookings-list { padding: 8px 16px 0; }

    .booking-card {
      background: white;
      border-radius: 16px;
      padding: 18px 20px;
      margin-bottom: 12px;
      border: 1px solid rgba(123,63,26,0.07);
      box-shadow: 0 2px 16px rgba(123,63,26,0.06);
      position: relative;
      overflow: hidden;
    }

    .booking-card::before {
      content: '';
      position: absolute;
      left: 0; top: 0; bottom: 0;
      width: 4px;
      background: var(--brown);
      border-radius: 4px 0 0 4px;
    }

    .booking-card.past::before { background: rgba(123,63,26,0.2); }

    .booking-card-top {
      display: flex; align-items: flex-start;
      justify-content: space-between; margin-bottom: 12px;
    }

    .booking-service-icon {
      width: 44px; height: 44px;
      background: rgba(123,63,26,0.06);
      border-radius: 12px;
      display: flex; align-items: center; justify-content: center;
      font-family: 'Noto Serif SC', serif;
      font-size: 20px; color: var(--brown);
      flex-shrink: 0;
    }

    .booking-info { flex: 1; margin-left: 12px; }

    .booking-service-name {
      font-family: 'Playfair Display', serif;
      font-size: 16px; font-weight: 600;
      color: var(--ink); margin-bottom: 3px;
    }

    .booking-outlet {
      font-size: 12px; color: var(--brown-light);
      font-weight: 500; letter-spacing: 0.3px;
    }

    .booking-status {
      font-size: 11px; font-weight: 600;
      padding: 4px 10px; border-radius: 20px;
    }

    .status-confirmed { background: #e8f5ee; color: #2d7a47; }
    .status-pending { background: #fff8e6; color: #b88a44; }
    .status-completed { background: rgba(123,63,26,0.06); color: var(--brown-mid); }
    .status-cancelled { background: #fde8e8; color: #c0392b; }

    .booking-card-divider {
      height: 1px; background: rgba(123,63,26,0.07);
      margin-bottom: 12px;
    }

    .booking-meta {
      display: flex; gap: 16px;
    }

    .booking-meta-item {
      display: flex; align-items: center; gap: 6px;
      font-size: 13px; color: var(--brown-mid);
    }

    .booking-meta-item svg {
      width: 14px; height: 14px;
      color: var(--gold); flex-shrink: 0;
    }

    .booking-card-actions {
      display: flex; gap: 8px; margin-top: 14px;
    }

    .btn-action {
      flex: 1; padding: 10px;
      border-radius: 10px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 14px; font-weight: 600;
      letter-spacing: 0.5px; cursor: pointer;
      border: none; transition: all 0.2s;
    }

    .btn-action-primary {
      background: var(--brown); color: white;
    }

    .btn-action-secondary {
      background: rgba(123,63,26,0.06);
      color: var(--brown); border: 1px solid rgba(123,63,26,0.15);
    }

    .btn-action:active { opacity: 0.8; transform: scale(0.98); }

    /* ── EMPTY STATE ── */
    .empty-state {
      text-align: center; padding: 48px 24px;
      display: none;
    }

    .empty-state.visible { display: block; }

    .empty-icon {
      width: 72px; height: 72px;
      background: rgba(123,63,26,0.06);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 20px;
      font-family: 'Noto Serif SC', serif;
      font-size: 30px; color: var(--brown-light);
    }

    .empty-title {
      font-family: 'Playfair Display', serif;
      font-size: 20px; font-weight: 600;
      color: var(--brown); margin-bottom: 8px;
    }

    .empty-desc {
      font-size: 14px; color: var(--brown-light);
      line-height: 1.7; margin-bottom: 24px;
    }

    .btn-book-now {
      display: inline-flex; align-items: center; gap: 8px;
      background: var(--brown); color: white;
      padding: 14px 28px; border-radius: 50px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 15px; font-weight: 600;
      letter-spacing: 1px; border: none; cursor: pointer;
    }

    /* ── SCROLL FOOTER ── */
    .scroll-footer { height: 24px; }

    /* ── BOTTOM NAV ── */
    .bottom-nav {
      position: fixed;
      bottom: 0; left: 50%; transform: translateX(-50%);
      width: 100%; max-width: 430px;
      height: var(--bottom-h);
      background: rgba(245,240,232,0.97);
      backdrop-filter: blur(20px);
      border-top: 1px solid rgba(123,63,26,0.1);
      display: flex; align-items: center; justify-content: space-around;
      padding: 0 8px; z-index: 100;
    }

    .tab-item {
      flex: 1; display: flex; flex-direction: column;
      align-items: center; gap: 4px;
      padding: 8px 4px; cursor: pointer;
      border-radius: 12px; transition: background 0.2s;
      text-decoration: none;
    }

    .tab-item:active { background: rgba(123,63,26,0.05); }
    .tab-item svg { width: 22px; height: 22px; color: rgba(123,63,26,0.35); }
    .tab-item .tab-label { font-size: 10px; color: rgba(123,63,26,0.4); font-weight: 500; letter-spacing: 0.3px; }
    .tab-item.active svg { color: var(--brown); }
    .tab-item.active .tab-label { color: var(--brown); font-weight: 600; }

    .tab-book { flex-shrink: 0; margin: 0 4px; }

    .tab-book-btn {
      width: 52px; height: 52px;
      background: var(--brown); border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      box-shadow: 0 4px 18px rgba(123,63,26,0.35);
      cursor: pointer; transition: transform 0.15s;
    }

    .tab-book-btn:active { transform: scale(0.93); }
    .tab-book-btn svg { width: 22px; height: 22px; color: white; }

    /* ── BOOKING SHEET ── */
    .sheet-overlay {
      position: fixed; inset: 0;
      background: rgba(46,26,14,0.55);
      backdrop-filter: blur(4px);
      z-index: 200; opacity: 0; pointer-events: none;
      transition: opacity 0.3s;
    }

    .sheet-overlay.active { opacity: 1; pointer-events: all; }

    .booking-sheet {
      position: fixed;
      bottom: 0; left: 50%; transform: translateX(-50%) translateY(100%);
      width: 100%; max-width: 430px;
      background: var(--cream);
      border-radius: 24px 24px 0 0;
      z-index: 201;
      transition: transform 0.4s cubic-bezier(0.32, 0.72, 0, 1);
      max-height: 92vh; overflow-y: auto;
    }

    .booking-sheet.active { transform: translateX(-50%) translateY(0); }
    .sheet-handle { width: 40px; height: 4px; background: rgba(123,63,26,0.2); border-radius: 2px; margin: 14px auto 0; }

    .sheet-header { background: var(--brown); margin: 16px 16px 0; border-radius: 16px; padding: 20px 20px; }
    .sheet-title { font-family: 'Playfair Display', serif; font-size: 22px; font-weight: 700; color: white; }
    .sheet-subtitle { font-size: 13px; color: rgba(255,255,255,0.55); margin-top: 4px; letter-spacing: 0.5px; }
    .sheet-body { padding: 20px 20px 32px; }
    .form-label { display: block; font-size: 11px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: var(--brown); margin-bottom: 8px; }
    .form-group { margin-bottom: 20px; }
    .form-input, .form-select { width: 100%; padding: 14px 16px; font-family: 'Cormorant Garamond', serif; font-size: 17px; color: var(--ink); background: white; border: 1.5px solid rgba(123,63,26,0.15); border-radius: 12px; outline: none; transition: border-color 0.2s; -webkit-appearance: none; }
    .form-input:focus, .form-select:focus { border-color: var(--brown); }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
    .outlet-toggle { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
    .outlet-toggle-btn { padding: 14px 12px; border-radius: 12px; border: 1.5px solid rgba(123,63,26,0.15); background: white; text-align: center; cursor: pointer; transition: all 0.2s; }
    .outlet-toggle-btn .ot-label { font-size: 10px; font-weight: 500; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(123,63,26,0.4); margin-bottom: 4px; }
    .outlet-toggle-btn .ot-name { font-family: 'Playfair Display', serif; font-size: 15px; font-weight: 600; color: var(--brown); }
    .outlet-toggle-btn.selected { background: var(--brown); border-color: var(--brown); }
    .outlet-toggle-btn.selected .ot-label { color: rgba(255,255,255,0.55); }
    .outlet-toggle-btn.selected .ot-name { color: white; }
    .time-slots { display: grid; grid-template-columns: repeat(4, 1fr); gap: 8px; }
    .time-slot { padding: 10px 4px; border-radius: 10px; border: 1.5px solid rgba(123,63,26,0.12); background: white; text-align: center; font-family: 'Cormorant Garamond', serif; font-size: 13px; font-weight: 500; color: var(--brown); cursor: pointer; transition: all 0.2s; }
    .time-slot.selected { background: var(--brown); border-color: var(--brown); color: white; }
    .time-slot.unavailable { opacity: 0.35; cursor: not-allowed; text-decoration: line-through; }
    .form-submit-btn { width: 100%; background: var(--brown); color: white; border: none; border-radius: 14px; padding: 17px; font-family: 'Cormorant Garamond', serif; font-size: 16px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase; cursor: pointer; margin-top: 8px; }
    .success-screen { display: none; text-align: center; padding: 40px 20px 32px; }
    .success-screen.visible { display: block; }
    .sheet-body.hidden { display: none; }
    .success-icon { width: 72px; height: 72px; background: var(--brown); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-family: 'Noto Serif SC', serif; font-size: 30px; color: white; }
    .success-title { font-family: 'Playfair Display', serif; font-size: 24px; font-weight: 700; color: var(--brown); margin-bottom: 10px; }
    .success-desc { font-size: 15px; color: var(--brown-mid); line-height: 1.7; margin-bottom: 28px; }
    .success-close { width: 100%; background: var(--brown); color: white; border: none; border-radius: 14px; padding: 17px; font-family: 'Cormorant Garamond', serif; font-size: 16px; font-weight: 600; letter-spacing: 1px; cursor: pointer; }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(16px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .anim-1 { animation: fadeUp 0.5s 0.1s both; }
    .anim-2 { animation: fadeUp 0.5s 0.2s both; }
    .anim-3 { animation: fadeUp 0.5s 0.3s both; }
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

  <!-- PAGE HEADER -->
  <div class="page-header anim-1">
    <div class="page-header-deco ring-1"></div>
    <div class="page-header-deco ring-2"></div>
    <div class="page-header-label">My Schedule</div>
    <div class="page-header-title">My Bookings</div>
    <div class="booking-count-row">
      <div class="booking-count-chip upcoming">2 Upcoming</div>
      <div class="booking-count-chip">3 Past</div>
    </div>
  </div>

  <!-- TABS -->
  <div class="tab-row anim-2">
    <button class="tab-btn active" id="tab-upcoming" onclick="switchTab('upcoming')">Upcoming</button>
    <button class="tab-btn" id="tab-past" onclick="switchTab('past')">Past Visits</button>
  </div>

  <!-- UPCOMING BOOKINGS -->
  <div class="bookings-list" id="list-upcoming">

    <!-- Booking Card 1 -->
    <div class="booking-card anim-3">
      <div class="booking-card-top">
        <div class="booking-service-icon">针</div>
        <div class="booking-info">
          <div class="booking-service-name">Acupuncture</div>
          <div class="booking-outlet">An Yu TCM — Kepong</div>
        </div>
        <div class="booking-status status-confirmed">Confirmed</div>
      </div>
      <div class="booking-card-divider"></div>
      <div class="booking-meta">
        <div class="booking-meta-item">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5"/>
          </svg>
          Fri, 28 Feb 2026
        </div>
        <div class="booking-meta-item">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          10:00 AM
        </div>
      </div>
      <div class="booking-card-actions">
        <button class="btn-action btn-action-secondary">Reschedule</button>
        <button class="btn-action btn-action-primary">View Details</button>
      </div>
    </div>

    <!-- Booking Card 2 -->
    <div class="booking-card anim-3">
      <div class="booking-card-top">
        <div class="booking-service-icon">拔</div>
        <div class="booking-info">
          <div class="booking-service-name">Cupping Therapy</div>
          <div class="booking-outlet">An Yu TCM — Bukit Jalil</div>
        </div>
        <div class="booking-status status-pending">Pending</div>
      </div>
      <div class="booking-card-divider"></div>
      <div class="booking-meta">
        <div class="booking-meta-item">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5"/>
          </svg>
          Mon, 3 Mar 2026
        </div>
        <div class="booking-meta-item">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          2:00 PM
        </div>
      </div>
      <div class="booking-card-actions">
        <button class="btn-action btn-action-secondary">Cancel</button>
        <button class="btn-action btn-action-primary">View Details</button>
      </div>
    </div>

  </div>

  <!-- PAST BOOKINGS -->
  <div class="bookings-list" id="list-past" style="display:none;">

    <div class="booking-card past anim-3">
      <div class="booking-card-top">
        <div class="booking-service-icon">推</div>
        <div class="booking-info">
          <div class="booking-service-name">Tui Na Massage</div>
          <div class="booking-outlet">An Yu TCM — Kepong</div>
        </div>
        <div class="booking-status status-completed">Completed</div>
      </div>
      <div class="booking-card-divider"></div>
      <div class="booking-meta">
        <div class="booking-meta-item">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5"/>
          </svg>
          Wed, 12 Feb 2026
        </div>
        <div class="booking-meta-item">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          3:00 PM
        </div>
      </div>
      <div class="booking-card-actions">
        <button class="btn-action btn-action-secondary">Leave Review</button>
        <button class="btn-action btn-action-primary" onclick="openSheet('')">Rebook</button>
      </div>
    </div>

    <div class="booking-card past">
      <div class="booking-card-top">
        <div class="booking-service-icon">药</div>
        <div class="booking-info">
          <div class="booking-service-name">Herbal Medicine</div>
          <div class="booking-outlet">An Yu TCM — Kepong</div>
        </div>
        <div class="booking-status status-completed">Completed</div>
      </div>
      <div class="booking-card-divider"></div>
      <div class="booking-meta">
        <div class="booking-meta-item">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5"/>
          </svg>
          Fri, 24 Jan 2026
        </div>
        <div class="booking-meta-item">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          9:00 AM
        </div>
      </div>
      <div class="booking-card-actions">
        <button class="btn-action btn-action-secondary">Leave Review</button>
        <button class="btn-action btn-action-primary" onclick="openSheet('')">Rebook</button>
      </div>
    </div>

    <div class="booking-card past">
      <div class="booking-card-top">
        <div class="booking-service-icon">针</div>
        <div class="booking-info">
          <div class="booking-service-name">Acupuncture</div>
          <div class="booking-outlet">An Yu TCM — Bukit Jalil</div>
        </div>
        <div class="booking-status status-cancelled">Cancelled</div>
      </div>
      <div class="booking-card-divider"></div>
      <div class="booking-meta">
        <div class="booking-meta-item">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5"/>
          </svg>
          Tue, 7 Jan 2026
        </div>
        <div class="booking-meta-item">
          <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          11:00 AM
        </div>
      </div>
      <div class="booking-card-actions">
        <button class="btn-action btn-action-primary" onclick="openSheet('')">Rebook</button>
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
  <a class="tab-item active" href="{{ route('mobile.bookings') }}">
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
  <div class="success-screen" id="successScreen">
    <div class="success-icon">安</div>
    <div class="success-title">You're All Set!</div>
    <div class="success-desc">Your appointment has been received.<br>We'll confirm via WhatsApp or call shortly.</div>
    <button class="success-close" onclick="closeSheet()">Back to Bookings</button>
  </div>
</div>

<script>
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('date-input').min = today;
  document.getElementById('date-input').value = today;

  function switchTab(tab) {
    document.getElementById('list-upcoming').style.display = tab === 'upcoming' ? 'block' : 'none';
    document.getElementById('list-past').style.display = tab === 'past' ? 'block' : 'none';
    document.getElementById('tab-upcoming').classList.toggle('active', tab === 'upcoming');
    document.getElementById('tab-past').classList.toggle('active', tab === 'past');
  }

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
  sheet.addEventListener('touchend', e => {
    if (e.changedTouches[0].clientY - startY > 80) closeSheet();
  }, { passive: true });
</script>
</body>
</html>
