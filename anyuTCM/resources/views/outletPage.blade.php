<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Outlets – An Yu TCM Healthcare Centre</title>
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
      position: fixed; inset: 0;
      background-image:
        radial-gradient(ellipse at 20% 10%, rgba(180,120,60,0.07) 0%, transparent 50%),
        radial-gradient(ellipse at 80% 80%, rgba(123,63,26,0.06) 0%, transparent 50%);
      pointer-events: none; z-index: 0;
    }

    /* ── NAV ── */
    nav {
      position: fixed; top: 0; left: 0; right: 0; z-index: 200;
      display: flex; align-items: center; justify-content: space-between;
      padding: 18px 48px;
      background: rgba(245,240,232,0.93);
      backdrop-filter: blur(14px);
      border-bottom: 1px solid rgba(123,63,26,0.12);
    }
    .nav-logo { display: flex; align-items: center; gap: 14px; text-decoration: none; }
    .nav-logo-circle { width: 44px; height: 44px; border: 2.5px solid var(--brown); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Noto Serif SC', serif; font-size: 15px; font-weight: 600; color: var(--brown); }
    .nav-logo-text { font-family: 'Playfair Display', serif; font-size: 17px; color: var(--brown); font-weight: 600; line-height: 1.2; }
    .nav-logo-text span { display: block; font-size: 11px; font-family: 'Cormorant Garamond', serif; font-weight: 400; letter-spacing: 2px; text-transform: uppercase; color: var(--brown-mid); opacity: 0.8; }
    .nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
    .nav-links a { text-decoration: none; font-family: 'Cormorant Garamond', serif; font-size: 15px; font-weight: 500; color: var(--brown); letter-spacing: 0.5px; transition: color 0.2s; position: relative; }
    .nav-links a::after { content: ''; position: absolute; bottom: -3px; left: 0; right: 0; height: 1px; background: var(--brown-light); transform: scaleX(0); transition: transform 0.3s; }
    .nav-links a:hover, .nav-links a.active { color: var(--brown-mid); }
    .nav-links a:hover::after, .nav-links a.active::after { transform: scaleX(1); }
    .nav-cta { background: var(--brown); color: var(--cream) !important; padding: 10px 24px; border-radius: 2px; letter-spacing: 1px; font-size: 13px !important; text-transform: uppercase; transition: background 0.25s !important; }
    .nav-cta::after { display: none !important; }
    .nav-cta:hover { background: var(--brown-mid) !important; }

    /* ── PAGE HERO ── */
    .page-hero {
      position: relative; padding: 160px 48px 80px;
      overflow: hidden; min-height: 440px; display: flex; align-items: flex-end;
    }
    .page-hero-bg {
      position: absolute; inset: 0;
      background: linear-gradient(150deg, #3a1a08 0%, var(--brown) 55%, var(--brown-mid) 100%);
      z-index: 0;
    }
    .page-hero-bg::before {
      content: '门诊';
      position: absolute; font-family: 'Noto Serif SC', serif; font-size: 320px; font-weight: 700;
      color: rgba(255,255,255,0.03); right: -20px; bottom: -60px; line-height: 1;
    }
    .hero-ring { position: absolute; border-radius: 50%; border: 1px solid rgba(255,255,255,0.06); }
    .hr1 { width: 520px; height: 520px; top: -170px; right: -120px; }
    .hr2 { width: 320px; height: 320px; top: -90px; right: -30px; }
    .hr3 { width: 160px; height: 160px; bottom: 20px; left: 8%; border-color: rgba(255,255,255,0.04); }
    .page-hero-content { position: relative; z-index: 2; max-width: 1100px; margin: 0 auto; width: 100%; }
    .page-breadcrumb { font-size: 12px; font-weight: 500; letter-spacing: 3px; text-transform: uppercase; color: rgba(255,255,255,0.4); margin-bottom: 20px; }
    .page-breadcrumb a { color: rgba(255,255,255,0.4); text-decoration: none; }
    .page-breadcrumb a:hover { color: rgba(255,255,255,0.7); }
    .page-hero h1 { font-family: 'Playfair Display', serif; font-size: clamp(44px, 6vw, 72px); font-weight: 700; color: white; line-height: 1.1; margin-bottom: 16px; }
    .page-hero h1 em { font-style: italic; color: var(--brown-pale); }
    .page-hero-desc { font-size: 19px; font-weight: 300; color: rgba(255,255,255,0.6); max-width: 560px; line-height: 1.8; }
    .page-hero-cn { position: absolute; right: 48px; bottom: 40px; font-family: 'Noto Serif SC', serif; font-size: 14px; font-weight: 300; color: rgba(255,255,255,0.2); writing-mode: vertical-rl; letter-spacing: 8px; }

    /* ── OUTLET SWITCHER TABS ── */
    .outlet-switcher {
      position: sticky; top: 73px; z-index: 99;
      background: rgba(245,240,232,0.97);
      backdrop-filter: blur(14px);
      border-bottom: 1px solid rgba(123,63,26,0.1);
    }
    .switcher-inner {
      max-width: 1100px; margin: 0 auto; padding: 0 48px;
      display: flex; align-items: center; justify-content: space-between; gap: 24px;
    }
    .switcher-tabs { display: flex; }
    .switcher-tab {
      padding: 20px 36px; font-family: 'Cormorant Garamond', serif;
      font-size: 15px; font-weight: 500; letter-spacing: 1px;
      color: rgba(123,63,26,0.45); background: none; border: none;
      cursor: pointer; position: relative; transition: color 0.25s;
    }
    .switcher-tab::after {
      content: ''; position: absolute; bottom: 0; left: 0; right: 0;
      height: 3px; background: var(--brown);
      transform: scaleX(0); transition: transform 0.3s; transform-origin: left;
    }
    .switcher-tab.active { color: var(--brown); font-weight: 600; }
    .switcher-tab.active::after { transform: scaleX(1); }
    .switcher-tab:hover { color: var(--brown-mid); }
    .switcher-book-btn {
      display: inline-block; background: var(--brown); color: var(--cream);
      padding: 11px 28px; border-radius: 2px; font-family: 'Cormorant Garamond', serif;
      font-size: 13px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase;
      text-decoration: none; transition: background 0.2s; white-space: nowrap; border: none; cursor: pointer;
    }
    .switcher-book-btn:hover { background: var(--brown-mid); }

    /* ── SHARED LAYOUT ── */
    .main-content { position: relative; z-index: 1; }
    .container { max-width: 1100px; margin: 0 auto; padding: 0 48px; }
    .section-label { font-size: 11px; font-weight: 500; letter-spacing: 4px; text-transform: uppercase; color: var(--gold); margin-bottom: 16px; display: block; }
    .gold-line { width: 60px; height: 1px; background: var(--gold); opacity: 0.6; margin: 18px 0 0; }

    /* ── OUTLET PANEL ── */
    .outlet-panel { display: none; }
    .outlet-panel.active { display: block; }

    /* ── HERO BANNER (inside outlet) ── */
    .outlet-hero-banner {
      width: 100%; position: relative; overflow: hidden;
    }
    .outlet-hero-img {
      width: 100%; aspect-ratio: 21/7;
      background: var(--cream-dark);
      border: 2px dashed rgba(123,63,26,0.18);
      display: flex; flex-direction: column; align-items: center; justify-content: center;
      gap: 12px; cursor: pointer; transition: border-color 0.2s;
      position: relative; overflow: hidden;
    }
    .outlet-hero-img:hover { border-color: var(--brown-light); }
    .outlet-hero-img img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: none; }
    .outlet-hero-img.has-image img { display: block; }
    .outlet-hero-img.has-image .ph-icon, .outlet-hero-img.has-image .ph-label, .outlet-hero-img.has-image .ph-hint { display: none; }
    .ph-icon { width: 52px; height: 52px; color: rgba(123,63,26,0.2); }
    .ph-label { font-size: 14px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase; color: rgba(123,63,26,0.25); }
    .ph-hint { font-size: 12px; color: rgba(123,63,26,0.18); }

    /* overlay badge on banner */
    .outlet-banner-badge {
      position: absolute; bottom: 28px; left: 48px;
      background: rgba(46,26,14,0.72); backdrop-filter: blur(8px);
      color: white; padding: 12px 22px; border-radius: 3px;
      pointer-events: none;
    }
    .outlet-banner-badge .obb-name { font-family: 'Playfair Display', serif; font-size: 20px; font-weight: 700; }
    .outlet-banner-badge .obb-cn { font-family: 'Noto Serif SC', serif; font-size: 12px; color: rgba(255,255,255,0.5); letter-spacing: 3px; margin-top: 3px; }

    /* ── OUTLET OVERVIEW ── */
    .outlet-overview {
      padding: 72px 0 60px;
    }
    .outlet-overview-grid {
      display: grid; grid-template-columns: 1fr 420px; gap: 72px; align-items: start;
    }

    .outlet-name-en {
      font-family: 'Playfair Display', serif;
      font-size: clamp(30px, 3.5vw, 46px); font-weight: 700; color: var(--brown);
      line-height: 1.15; margin-bottom: 8px;
    }
    .outlet-name-en em { font-style: italic; color: var(--brown-mid); }
    .outlet-name-cn {
      font-family: 'Noto Serif SC', serif; font-size: 17px; font-weight: 300;
      color: var(--brown-light); letter-spacing: 5px; margin-bottom: 28px;
    }
    .outlet-about-text {
      font-size: 17px; font-weight: 300; color: var(--brown-mid);
      line-height: 1.9; margin-bottom: 18px;
    }
    .outlet-about-text:last-of-type { margin-bottom: 32px; }

    /* Tags row */
    .outlet-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 36px; }
    .outlet-tag-item {
      font-size: 11px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase;
      color: var(--brown); background: rgba(123,63,26,0.08);
      padding: 6px 14px; border-radius: 2px;
    }

    .btn-book-outlet {
      display: inline-block; background: var(--brown); color: var(--cream);
      padding: 16px 44px; font-family: 'Cormorant Garamond', serif; font-size: 15px;
      font-weight: 500; letter-spacing: 2px; text-transform: uppercase;
      text-decoration: none; border-radius: 2px; border: 2px solid var(--brown);
      transition: all 0.3s; margin-right: 14px;
    }
    .btn-book-outlet:hover { background: transparent; color: var(--brown); }
    .btn-directions {
      display: inline-block; background: transparent; color: var(--brown);
      padding: 16px 32px; font-family: 'Cormorant Garamond', serif; font-size: 15px;
      font-weight: 500; letter-spacing: 2px; text-transform: uppercase;
      text-decoration: none; border-radius: 2px; border: 2px solid rgba(123,63,26,0.25);
      transition: all 0.3s;
    }
    .btn-directions:hover { border-color: var(--brown); }

    /* ── INFO CARD (sidebar) ── */
    .outlet-info-card {
      background: white; border: 1px solid rgba(123,63,26,0.1); border-radius: 4px;
      overflow: hidden; position: sticky; top: 140px;
    }
    .info-card-header {
      background: var(--brown); padding: 24px 28px;
      position: relative; overflow: hidden;
    }
    .info-card-header.bj { background: var(--brown-mid); }
    .info-card-header::after {
      content: ''; position: absolute; top: -20px; right: -20px;
      width: 90px; height: 90px; border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.1);
    }
    .info-card-label { font-size: 10px; font-weight: 600; letter-spacing: 3px; text-transform: uppercase; color: rgba(255,255,255,0.5); margin-bottom: 6px; }
    .info-card-name { font-family: 'Playfair Display', serif; font-size: 20px; font-weight: 700; color: white; }
    .open-badge {
      display: inline-flex; align-items: center; gap: 6px;
      font-size: 11px; font-weight: 600; color: #3a9e60;
      background: rgba(58,158,96,0.15); padding: 4px 12px; border-radius: 20px;
      margin-top: 10px;
    }
    .open-badge::before { content: ''; width: 7px; height: 7px; border-radius: 50%; background: #3a9e60; animation: pulse 2s infinite; }
    @keyframes pulse { 0%,100%{opacity:1} 50%{opacity:0.4} }

    .info-card-body { padding: 24px 28px; }
    .info-row {
      display: flex; align-items: flex-start; gap: 14px;
      padding: 14px 0; border-bottom: 1px solid rgba(123,63,26,0.07);
    }
    .info-row:last-child { border-bottom: none; padding-bottom: 0; }
    .info-row-icon { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; color: var(--gold); }
    .info-row-label { font-size: 10px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: rgba(123,63,26,0.4); margin-bottom: 4px; }
    .info-row-value { font-size: 15px; color: var(--ink); line-height: 1.6; }
    .info-row-value a { color: var(--brown); text-decoration: none; }
    .info-row-value a:hover { text-decoration: underline; }

    .hours-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 4px 12px; }
    .hours-day { font-size: 13px; font-weight: 500; color: var(--ink); }
    .hours-time { font-size: 13px; color: var(--brown-mid); }
    .hours-closed { color: rgba(123,63,26,0.35); }

    .info-card-cta { padding: 20px 28px; background: var(--cream-dark); }
    .info-cta-btn {
      display: block; width: 100%; text-align: center;
      background: var(--brown); color: var(--cream);
      padding: 14px; font-family: 'Cormorant Garamond', serif;
      font-size: 14px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase;
      text-decoration: none; border-radius: 2px; transition: background 0.2s;
    }
    .info-cta-btn:hover { background: var(--brown-mid); }
    .info-cta-btn.bj { background: var(--brown-mid); }
    .info-cta-btn.bj:hover { background: var(--brown); }

    /* ── PHOTO GALLERY ── */
    .gallery-section { padding: 20px 0 80px; }
    .gallery-section-header { margin-bottom: 32px; }
    .gallery-section-title { font-family: 'Playfair Display', serif; font-size: clamp(22px, 2.5vw, 32px); font-weight: 700; color: var(--brown); }

    /* Mosaic layout */
    .gallery-mosaic {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-template-rows: auto auto auto;
      gap: 14px;
    }

    /* Slot helpers */
    .g-big    { grid-column: 1 / 3; grid-row: 1 / 3; }
    .g-tall   { grid-column: 3 / 4; grid-row: 1 / 3; }
    .g-wide   { grid-column: 1 / 2; }
    .g-wide2  { grid-column: 2 / 3; }
    .g-wide3  { grid-column: 3 / 4; }
    .g-full   { grid-column: 1 / 4; }

    /* Img box */
    .img-box {
      width: 100%; background: var(--cream-dark);
      border: 2px dashed rgba(123,63,26,0.18); border-radius: 4px;
      display: flex; flex-direction: column; align-items: center; justify-content: center;
      gap: 10px; cursor: pointer; transition: border-color 0.2s, background 0.2s;
      position: relative; overflow: hidden; min-height: 140px;
    }
    .img-box:hover { border-color: var(--brown-light); background: rgba(123,63,26,0.04); }
    .img-box-icon { width: 32px; height: 32px; color: rgba(123,63,26,0.22); }
    .img-box-label { font-size: 11px; font-weight: 500; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(123,63,26,0.28); text-align: center; padding: 0 16px; }
    .img-box-hint { font-size: 11px; color: rgba(123,63,26,0.18); }
    .img-box img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: none; }
    .img-box.has-image img { display: block; }
    .img-box.has-image .img-box-icon,
    .img-box.has-image .img-box-label,
    .img-box.has-image .img-box-hint { display: none; }
    .img-upload-input { display: none; }

    /* aspect ratios */
    .ar-4-3  { aspect-ratio: 4/3; }
    .ar-3-4  { aspect-ratio: 3/4; }
    .ar-16-9 { aspect-ratio: 16/9; }
    .ar-1-1  { aspect-ratio: 1/1; }
    .ar-21-7 { aspect-ratio: 21/7; }

    /* Photo lightbox */
    .lightbox {
      position: fixed; inset: 0; background: rgba(15,8,3,0.92);
      z-index: 999; display: none; align-items: center; justify-content: center;
    }
    .lightbox.open { display: flex; }
    .lightbox img { max-width: 90vw; max-height: 90vh; object-fit: contain; border-radius: 2px; }
    .lightbox-close {
      position: absolute; top: 24px; right: 28px;
      color: rgba(255,255,255,0.6); font-size: 32px; cursor: pointer; line-height: 1;
      background: none; border: none; transition: color 0.2s;
    }
    .lightbox-close:hover { color: white; }
    .lightbox-caption {
      position: absolute; bottom: 28px; left: 50%; transform: translateX(-50%);
      font-size: 13px; color: rgba(255,255,255,0.4); letter-spacing: 1px;
    }

    /* ── FEATURES STRIP ── */
    .features-strip {
      background: var(--brown); padding: 72px 0; position: relative; overflow: hidden;
    }
    .features-strip.bj { background: var(--brown-mid); }
    .features-strip::before {
      content: '安'; position: absolute; font-family: 'Noto Serif SC', serif;
      font-size: 300px; font-weight: 700; color: rgba(255,255,255,0.03);
      right: 5%; top: 50%; transform: translateY(-50%); pointer-events: none;
    }
    .features-grid {
      display: grid; grid-template-columns: repeat(4, 1fr); gap: 2px;
    }
    .feature-item {
      padding: 36px 28px; background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.07); text-align: center;
      transition: background 0.3s;
    }
    .feature-item:hover { background: rgba(255,255,255,0.09); }
    .feature-icon { font-family: 'Noto Serif SC', serif; font-size: 28px; color: var(--brown-pale); opacity: 0.7; margin-bottom: 14px; display: block; }
    .feature-title { font-family: 'Playfair Display', serif; font-size: 17px; color: white; margin-bottom: 8px; }
    .feature-desc { font-size: 13px; color: rgba(255,255,255,0.45); line-height: 1.7; }

    /* ── MAP EMBED PLACEHOLDER ── */
    .map-section { padding: 80px 0; }
    .map-grid { display: grid; grid-template-columns: 1fr 360px; gap: 48px; align-items: start; }
    .map-frame {
      width: 100%; aspect-ratio: 16/9; background: var(--cream-dark);
      border: 2px dashed rgba(123,63,26,0.15); border-radius: 4px;
      display: flex; flex-direction: column; align-items: center; justify-content: center;
      gap: 12px; overflow: hidden; position: relative;
    }
    .map-frame-icon { width: 44px; height: 44px; color: rgba(123,63,26,0.22); }
    .map-frame-label { font-size: 13px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase; color: rgba(123,63,26,0.28); }
    .map-frame-hint { font-size: 12px; color: rgba(123,63,26,0.2); text-align: center; max-width: 280px; }
    .map-frame iframe { position: absolute; inset: 0; width: 100%; height: 100%; border: none; display: none; }
    .map-frame.has-map .map-frame-icon, .map-frame.has-map .map-frame-label, .map-frame.has-map .map-frame-hint { display: none; }
    .map-frame.has-map iframe { display: block; }

    .map-side-card { background: white; border: 1px solid rgba(123,63,26,0.1); border-radius: 4px; padding: 32px; }
    .map-side-title { font-family: 'Playfair Display', serif; font-size: 22px; font-weight: 700; color: var(--brown); margin-bottom: 20px; }
    .map-detail-row { display: flex; gap: 14px; margin-bottom: 18px; }
    .map-detail-icon { width: 20px; height: 20px; color: var(--gold); flex-shrink: 0; margin-top: 2px; }
    .map-detail-label { font-size: 11px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(123,63,26,0.4); margin-bottom: 4px; }
    .map-detail-value { font-size: 15px; color: var(--ink); line-height: 1.6; }
    .map-detail-value a { color: var(--brown); text-decoration: none; }
    .map-detail-value a:hover { text-decoration: underline; }
    .map-embed-input { margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(123,63,26,0.08); }
    .map-embed-label { font-size: 11px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(123,63,26,0.4); margin-bottom: 8px; }
    .map-embed-field {
      width: 100%; padding: 10px 14px; font-family: 'Cormorant Garamond', serif; font-size: 14px;
      color: var(--ink); background: var(--cream-dark); border: 1px solid rgba(123,63,26,0.15);
      border-radius: 3px; outline: none;
    }
    .map-embed-field:focus { border-color: var(--brown); }
    .map-embed-btn {
      margin-top: 8px; width: 100%; background: var(--brown); color: var(--cream);
      padding: 11px; font-family: 'Cormorant Garamond', serif; font-size: 13px;
      font-weight: 500; letter-spacing: 2px; text-transform: uppercase;
      border: none; border-radius: 2px; cursor: pointer; transition: background 0.2s;
    }
    .map-embed-btn:hover { background: var(--brown-mid); }

    /* ── BOTH OUTLETS MINI-CARDS ── */
    .compare-section { padding: 0 0 100px; }
    .compare-heading { font-family: 'Playfair Display', serif; font-size: clamp(24px, 2.5vw, 36px); font-weight: 700; color: var(--brown); margin-bottom: 36px; }
    .compare-heading em { font-style: italic; color: var(--brown-mid); }
    .compare-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
    .compare-card {
      background: white; border: 1px solid rgba(123,63,26,0.08); border-radius: 4px; overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;
    }
    .compare-card:hover { transform: translateY(-5px); box-shadow: 0 18px 52px rgba(123,63,26,0.11); }
    .compare-card-img { width: 100%; aspect-ratio: 16/7; background: var(--cream-dark); border: 2px dashed rgba(123,63,26,0.15); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 8px; cursor: pointer; position: relative; overflow: hidden; }
    .compare-card-img img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: none; }
    .compare-card-img.has-image img { display: block; }
    .compare-card-img.has-image .img-box-icon, .compare-card-img.has-image .img-box-label, .compare-card-img.has-image .img-box-hint { display: none; }
    .compare-card-body { padding: 24px 28px; }
    .compare-outlet-tag { font-size: 10px; font-weight: 600; letter-spacing: 2.5px; text-transform: uppercase; color: var(--gold); margin-bottom: 8px; }
    .compare-outlet-name { font-family: 'Playfair Display', serif; font-size: 22px; font-weight: 700; color: var(--brown); margin-bottom: 6px; }
    .compare-outlet-addr { font-size: 14px; color: var(--brown-mid); margin-bottom: 18px; }
    .compare-view-btn { font-size: 13px; font-weight: 500; letter-spacing: 1px; color: var(--brown); text-decoration: none; border-bottom: 1px solid rgba(123,63,26,0.3); padding-bottom: 1px; transition: border-color 0.2s; }
    .compare-view-btn:hover { border-color: var(--brown); }

    /* ── FOOTER ── */
    footer { background: var(--ink); color: rgba(255,255,255,0.5); padding: 48px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px; }
    .footer-logo { display: flex; align-items: center; gap: 14px; }
    .footer-logo-circle { width: 40px; height: 40px; border: 2px solid rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Noto Serif SC', serif; font-size: 14px; color: rgba(255,255,255,0.5); }
    .footer-name { font-family: 'Playfair Display', serif; font-size: 15px; color: rgba(255,255,255,0.6); }
    .footer-links { display: flex; gap: 28px; list-style: none; }
    .footer-links a { text-decoration: none; font-size: 13px; color: rgba(255,255,255,0.35); letter-spacing: 0.5px; transition: color 0.2s; }
    .footer-links a:hover { color: rgba(255,255,255,0.65); }
    .footer-copy { font-size: 12px; }

    /* ── BOOKING MODAL ── */
    .modal-overlay { position: fixed; inset: 0; background: rgba(46,26,14,0.7); backdrop-filter: blur(6px); z-index: 300; display: flex; align-items: center; justify-content: center; opacity: 0; pointer-events: none; transition: opacity 0.3s; }
    .modal-overlay.active { opacity: 1; pointer-events: all; }
    .modal { background: var(--cream); width: 90%; max-width: 520px; border-radius: 4px; overflow: hidden; transform: translateY(30px); transition: transform 0.3s; }
    .modal-overlay.active .modal { transform: translateY(0); }
    .modal-header { background: var(--brown); padding: 28px 36px; display: flex; align-items: center; justify-content: space-between; }
    .modal-header.bj { background: var(--brown-mid); }
    .modal-title { font-family: 'Playfair Display', serif; font-size: 22px; color: white; font-weight: 600; }
    .modal-subtitle { font-size: 13px; color: rgba(255,255,255,0.6); margin-top: 4px; }
    .modal-close { background: none; border: none; color: rgba(255,255,255,0.6); font-size: 26px; cursor: pointer; transition: color 0.2s; }
    .modal-close:hover { color: white; }
    .modal-body { padding: 32px 36px; }
    .form-group { margin-bottom: 20px; }
    .form-label { display: block; font-size: 11px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: var(--brown); margin-bottom: 8px; }
    .form-input, .form-select { width: 100%; padding: 12px 16px; font-family: 'Cormorant Garamond', serif; font-size: 16px; color: var(--ink); background: white; border: 1.5px solid rgba(123,63,26,0.2); border-radius: 2px; outline: none; transition: border-color 0.2s; -webkit-appearance: none; }
    .form-input:focus, .form-select:focus { border-color: var(--brown); }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
    .form-submit { width: 100%; background: var(--brown); color: var(--cream); padding: 16px; font-family: 'Cormorant Garamond', serif; font-size: 15px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase; border: none; border-radius: 2px; cursor: pointer; transition: background 0.3s; margin-top: 8px; }
    .form-submit:hover { background: var(--brown-mid); }

    @media (max-width: 1024px) {
      .outlet-overview-grid { grid-template-columns: 1fr; }
      .outlet-info-card { position: static; }
      .map-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 860px) {
      nav { padding: 16px 24px; }
      .nav-links { display: none; }
      .page-hero { padding: 130px 24px 60px; }
      .container { padding: 0 24px; }
      .switcher-inner { padding: 0 24px; }
      .outlet-banner-badge { left: 20px; bottom: 16px; }
      .gallery-mosaic { grid-template-columns: 1fr 1fr; }
      .g-big { grid-column: 1 / 3; grid-row: auto; }
      .g-tall { grid-column: 1 / 2; grid-row: auto; }
      .g-wide, .g-wide2, .g-wide3 { grid-column: auto; }
      .features-grid { grid-template-columns: 1fr 1fr; }
      .compare-grid { grid-template-columns: 1fr; }
      footer { padding: 32px 24px; flex-direction: column; }
      .footer-links { display: none; }
      .form-row { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<!-- ── NAV ── -->
<nav>
  <a href="index.html" class="nav-logo">
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

<!-- ── PAGE HERO ── -->
<section class="page-hero">
  <div class="page-hero-bg">
    <div class="hero-ring hr1"></div>
    <div class="hero-ring hr2"></div>
    <div class="hero-ring hr3"></div>
  </div>
  <div class="page-hero-content">
    <div class="page-breadcrumb"><a href="index.html">Home</a> &nbsp;/&nbsp; Our Outlets</div>
    <h1>Visit <em>An Yu TCM</em><br>Near You</h1>
    <p class="page-hero-desc">Two clinics, one standard of excellence. Find your nearest An Yu TCM outlet in Kuala Lumpur and book your appointment today.</p>
  </div>
  <div class="page-hero-cn">甲洞 · 武吉加里尔</div>
</section>

<!-- ── STICKY OUTLET SWITCHER ── -->
<div class="outlet-switcher">
  <div class="switcher-inner">
    <div class="switcher-tabs">
      <button class="switcher-tab active" onclick="switchOutlet('kepong', this)">
        An Yu TCM – Kepong
      </button>
      <button class="switcher-tab" onclick="switchOutlet('bukitjalil', this)">
        An Yu TCM – Bukit Jalil
      </button>
    </div>
    <button class="switcher-book-btn" id="switcher-book" onclick="openModal(event,'')">
      Reserve a Visit
    </button>
  </div>
</div>

<main class="main-content">

  <!-- ══════════════════════════════════════════
       OUTLET 1 — KEPONG
  ══════════════════════════════════════════ -->
  <div class="outlet-panel active" id="panel-kepong">

    <!-- Hero Banner Image -->
    <div class="outlet-hero-banner">
      <div class="outlet-hero-img ar-21-7" onclick="triggerUpload(this)" id="kepong-hero">
        <input type="file" class="img-upload-input" accept="image/*" onchange="loadBannerImage(event, this.parentElement)">
        <svg class="ph-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
        </svg>
        <div class="ph-label">Kepong Outlet — Hero / Exterior Photo</div>
        <div class="ph-hint">Click to upload a wide banner image (recommended: 1400×470px or wider)</div>
        <img src="" alt="An Yu TCM Kepong exterior" />
      </div>
      <div class="outlet-banner-badge">
        <div class="obb-name">An Yu TCM – Kepong</div>
        <div class="obb-cn">安鈺中医 · 甲洞</div>
      </div>
    </div>

    <!-- Overview -->
    <section class="outlet-overview">
      <div class="container">
        <div class="outlet-overview-grid">

          <!-- Left: Description -->
          <div>
            <span class="section-label">Outlet 01 · Kepong</span>
            <h2 class="outlet-name-en">An Yu TCM<br><em>Kepong</em></h2>
            <div class="outlet-name-cn">安鈺中医 · 甲洞</div>
            <div class="gold-line" style="margin-bottom: 28px;"></div>

            <p class="outlet-about-text">Our Kepong clinic was the first An Yu TCM outlet to open its doors, serving the Kepong community and surrounding neighbourhoods with Traditional Chinese Medicine care that is both accessible and deeply considered.</p>
            <p class="outlet-about-text">Located along Jalan Kepong, our clinic is easily reachable by car, public transport, and on foot from nearby residential areas. The clinic is designed as a calm sanctuary — warm timber tones, soft lighting, and an unhurried atmosphere that sets the tone for healing.</p>
            <p class="outlet-about-text">Our Kepong team of qualified physicians offers the full range of An Yu TCM services including acupuncture, cupping, herbal medicine consultations, and Tui Na massage.</p>

            <div class="outlet-tags">
              <span class="outlet-tag-item">Acupuncture</span>
              <span class="outlet-tag-item">Cupping</span>
              <span class="outlet-tag-item">Herbal Medicine</span>
              <span class="outlet-tag-item">Tui Na</span>
              <span class="outlet-tag-item">Walk-ins Welcome</span>
              <span class="outlet-tag-item">Parking Available</span>
            </div>

            <a href="#" onclick="openModal(event,'Kepong')" class="btn-book-outlet">Book at Kepong</a>
            <a href="#kepong-map" class="btn-directions">Get Directions ↓</a>
          </div>

          <!-- Right: Info Card -->
          <div class="outlet-info-card">
            <div class="info-card-header">
              <div class="info-card-label">Currently</div>
              <div class="info-card-name">An Yu TCM – Kepong</div>
              <div class="open-badge">Open Now</div>
            </div>
            <div class="info-card-body">
              <div class="info-row">
                <svg class="info-row-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                <div>
                  <div class="info-row-label">Address</div>
                  <div class="info-row-value">Jalan Kepong,<br>52100 Kuala Lumpur,<br>Wilayah Persekutuan</div>
                </div>
              </div>
              <div class="info-row">
                <svg class="info-row-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                <div>
                  <div class="info-row-label">Phone</div>
                  <div class="info-row-value"><a href="tel:+60312345678">+60 3-XXXX XXXX</a></div>
                </div>
              </div>
              <div class="info-row">
                <svg class="info-row-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                <div>
                  <div class="info-row-label">Email</div>
                  <div class="info-row-value"><a href="mailto:kepong@anyutcm.com">kepong@anyutcm.com</a></div>
                </div>
              </div>
              <div class="info-row">
                <svg class="info-row-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <div>
                  <div class="info-row-label">Operating Hours</div>
                  <div class="hours-grid" style="margin-top:6px;">
                    <span class="hours-day">Mon – Fri</span><span class="hours-time">9:00 AM – 6:00 PM</span>
                    <span class="hours-day">Saturday</span><span class="hours-time">9:00 AM – 5:00 PM</span>
                    <span class="hours-day">Sunday</span><span class="hours-time">10:00 AM – 3:00 PM</span>
                    <span class="hours-day">Public Holiday</span><span class="hours-time hours-closed">Closed</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="info-card-cta">
              <a href="#" onclick="openModal(event,'Kepong')" class="info-cta-btn">Book an Appointment</a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section class="gallery-section">
      <div class="container">
        <div class="gallery-section-header">
          <span class="section-label">Photo Gallery</span>
          <div class="gallery-section-title">Inside <em style="font-style:italic;color:var(--brown-mid);">An Yu TCM Kepong</em></div>
          <div class="gold-line"></div>
        </div>

        <div class="gallery-mosaic">

          <!-- Big left (2 col, 2 row) -->
          <div class="img-box ar-4-3 g-big" onclick="triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Clinic Interior / Reception</div>
            <div class="img-box-hint">Click to upload · Recommended: landscape photo</div>
            <img src="" alt="Kepong interior" />
          </div>

          <!-- Tall right (1 col, 2 row) -->
          <div class="img-box g-tall" style="aspect-ratio:3/4;" onclick="triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Treatment Room</div>
            <div class="img-box-hint">Click to upload · Portrait photo</div>
            <img src="" alt="Kepong treatment room" />
          </div>

          <!-- Bottom row: 3 equal -->
          <div class="img-box ar-16-9 g-wide" onclick="triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Herbal Shelf</div>
            <div class="img-box-hint">Click to upload</div>
            <img src="" alt="" />
          </div>
          <div class="img-box ar-16-9 g-wide2" onclick="triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Waiting Area</div>
            <div class="img-box-hint">Click to upload</div>
            <img src="" alt="" />
          </div>
          <div class="img-box ar-16-9 g-wide3" onclick="triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Exterior / Signage</div>
            <div class="img-box-hint">Click to upload</div>
            <img src="" alt="" />
          </div>

        </div>
      </div>
    </section>

    <!-- Features strip -->
    <section class="features-strip">
      <div class="container">
        <div class="features-grid">
          <div class="feature-item"><span class="feature-icon">针</span><div class="feature-title">Full TCM Services</div><div class="feature-desc">Acupuncture, cupping, herbal medicine, and Tui Na all available at this outlet</div></div>
          <div class="feature-item"><span class="feature-icon">停</span><div class="feature-title">Free Parking</div><div class="feature-desc">Convenient parking available for patients visiting the clinic</div></div>
          <div class="feature-item"><span class="feature-icon">公</span><div class="feature-title">Public Transport</div><div class="feature-desc">Easily accessible by bus and LRT from surrounding Kepong areas</div></div>
          <div class="feature-item"><span class="feature-icon">预</span><div class="feature-title">Walk-Ins Welcome</div><div class="feature-desc">No appointment needed, but booking ahead guarantees your preferred physician</div></div>
        </div>
      </div>
    </section>

    <!-- Map Section -->
    <section class="map-section" id="kepong-map">
      <div class="container">
        <span class="section-label">Find Us</span>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(22px,2.5vw,34px);font-weight:700;color:var(--brown);margin-bottom:36px;">Getting to <em style="font-style:italic;color:var(--brown-mid);">Kepong</em></h2>
        <div class="map-grid">
          <div class="map-frame" id="kepong-map-frame">
            <svg class="map-frame-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/></svg>
            <div class="map-frame-label">Google Maps Embed</div>
            <div class="map-frame-hint">Paste a Google Maps embed URL below to display the map for this outlet</div>
            <iframe id="kepong-iframe" src="" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="map-side-card">
            <div class="map-side-title">Kepong Clinic</div>
            <div class="map-detail-row">
              <svg class="map-detail-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
              <div>
                <div class="map-detail-label">Address</div>
                <div class="map-detail-value">Jalan Kepong, 52100 Kuala Lumpur,<br>Wilayah Persekutuan</div>
              </div>
            </div>
            <div class="map-detail-row">
              <svg class="map-detail-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <div>
                <div class="map-detail-label">Nearest Landmark</div>
                <div class="map-detail-value">Please update with nearest landmark or mall</div>
              </div>
            </div>
            <div class="map-detail-row">
              <svg class="map-detail-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
              <div>
                <div class="map-detail-label">Contact</div>
                <div class="map-detail-value"><a href="tel:+60312345678">+60 3-XXXX XXXX</a></div>
              </div>
            </div>
            <div class="map-embed-input">
              <div class="map-embed-label">Paste Google Maps Embed URL</div>
              <input type="text" class="map-embed-field" id="kepong-map-url" placeholder="https://maps.google.com/maps?..." />
              <button class="map-embed-btn" onclick="embedMap('kepong')">Load Map</button>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div><!-- /panel kepong -->


  <!-- ══════════════════════════════════════════
       OUTLET 2 — BUKIT JALIL
  ══════════════════════════════════════════ -->
  <div class="outlet-panel" id="panel-bukitjalil">

    <!-- Hero Banner -->
    <div class="outlet-hero-banner">
      <div class="outlet-hero-img ar-21-7" onclick="triggerUpload(this)" id="bj-hero">
        <input type="file" class="img-upload-input" accept="image/*" onchange="loadBannerImage(event, this.parentElement)">
        <svg class="ph-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
        </svg>
        <div class="ph-label">Bukit Jalil Outlet — Hero / Exterior Photo</div>
        <div class="ph-hint">Click to upload a wide banner image (recommended: 1400×470px or wider)</div>
        <img src="" alt="An Yu TCM Bukit Jalil exterior" />
      </div>
      <div class="outlet-banner-badge">
        <div class="obb-name">An Yu TCM – Bukit Jalil</div>
        <div class="obb-cn">安鈺中医 · 武吉加里尔</div>
      </div>
    </div>

    <!-- Overview -->
    <section class="outlet-overview">
      <div class="container">
        <div class="outlet-overview-grid">
          <div>
            <span class="section-label">Outlet 02 · Bukit Jalil</span>
            <h2 class="outlet-name-en">An Yu TCM<br><em>Bukit Jalil</em></h2>
            <div class="outlet-name-cn">安鈺中医 · 武吉加里尔</div>
            <div class="gold-line" style="margin-bottom: 28px;"></div>

            <p class="outlet-about-text">Our Bukit Jalil outlet brings An Yu TCM to one of Kuala Lumpur's most vibrant and growing residential communities. Designed with the same care and warmth as our Kepong clinic, the Bukit Jalil branch offers the full suite of Traditional Chinese Medicine services in a modern, welcoming environment.</p>
            <p class="outlet-about-text">Situated conveniently near Bukit Jalil's main commercial and residential zones, our clinic is easily accessible for residents of Bukit Jalil, Sri Petaling, Puchong, and surrounding areas.</p>
            <p class="outlet-about-text">Our experienced team of registered TCM physicians at Bukit Jalil is dedicated to providing personalised, evidence-informed TCM care that addresses each patient's unique needs and health goals.</p>

            <div class="outlet-tags">
              <span class="outlet-tag-item">Acupuncture</span>
              <span class="outlet-tag-item">Cupping</span>
              <span class="outlet-tag-item">Herbal Medicine</span>
              <span class="outlet-tag-item">Tui Na</span>
              <span class="outlet-tag-item">Walk-ins Welcome</span>
              <span class="outlet-tag-item">Ample Parking</span>
            </div>

            <a href="#" onclick="openModal(event,'Bukit Jalil')" class="btn-book-outlet" style="background:var(--brown-mid);border-color:var(--brown-mid);">Book at Bukit Jalil</a>
            <a href="#bj-map" class="btn-directions">Get Directions ↓</a>
          </div>

          <div class="outlet-info-card">
            <div class="info-card-header bj">
              <div class="info-card-label">Currently</div>
              <div class="info-card-name">An Yu TCM – Bukit Jalil</div>
              <div class="open-badge">Open Now</div>
            </div>
            <div class="info-card-body">
              <div class="info-row">
                <svg class="info-row-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                <div>
                  <div class="info-row-label">Address</div>
                  <div class="info-row-value">Bukit Jalil,<br>57000 Kuala Lumpur,<br>Wilayah Persekutuan</div>
                </div>
              </div>
              <div class="info-row">
                <svg class="info-row-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                <div>
                  <div class="info-row-label">Phone</div>
                  <div class="info-row-value"><a href="tel:+60312345679">+60 3-XXXX XXXX</a></div>
                </div>
              </div>
              <div class="info-row">
                <svg class="info-row-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                <div>
                  <div class="info-row-label">Email</div>
                  <div class="info-row-value"><a href="mailto:bukitjalil@anyutcm.com">bukitjalil@anyutcm.com</a></div>
                </div>
              </div>
              <div class="info-row">
                <svg class="info-row-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <div>
                  <div class="info-row-label">Operating Hours</div>
                  <div class="hours-grid" style="margin-top:6px;">
                    <span class="hours-day">Mon – Fri</span><span class="hours-time">9:00 AM – 6:00 PM</span>
                    <span class="hours-day">Saturday</span><span class="hours-time">9:00 AM – 5:00 PM</span>
                    <span class="hours-day">Sunday</span><span class="hours-time">10:00 AM – 3:00 PM</span>
                    <span class="hours-day">Public Holiday</span><span class="hours-time hours-closed">Closed</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="info-card-cta">
              <a href="#" onclick="openModal(event,'Bukit Jalil')" class="info-cta-btn bj">Book an Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section class="gallery-section">
      <div class="container">
        <div class="gallery-section-header">
          <span class="section-label">Photo Gallery</span>
          <div class="gallery-section-title">Inside <em style="font-style:italic;color:var(--brown-mid);">An Yu TCM Bukit Jalil</em></div>
          <div class="gold-line"></div>
        </div>
        <div class="gallery-mosaic">
          <div class="img-box ar-4-3 g-big" onclick="triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Clinic Interior / Reception</div>
            <div class="img-box-hint">Click to upload · Recommended: landscape photo</div>
            <img src="" alt="Bukit Jalil interior" />
          </div>
          <div class="img-box g-tall" style="aspect-ratio:3/4;" onclick="triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Treatment Room</div>
            <div class="img-box-hint">Click to upload · Portrait photo</div>
            <img src="" alt="Bukit Jalil treatment room" />
          </div>
          <div class="img-box ar-16-9 g-wide" onclick="triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Herbal Shelf</div>
            <div class="img-box-hint">Click to upload</div>
            <img src="" alt="" />
          </div>
          <div class="img-box ar-16-9 g-wide2" onclick="triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Waiting Area</div>
            <div class="img-box-hint">Click to upload</div>
            <img src="" alt="" />
          </div>
          <div class="img-box ar-16-9 g-wide3" onclick="triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Exterior / Signage</div>
            <div class="img-box-hint">Click to upload</div>
            <img src="" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- Features strip -->
    <section class="features-strip bj">
      <div class="container">
        <div class="features-grid">
          <div class="feature-item"><span class="feature-icon">针</span><div class="feature-title">Full TCM Services</div><div class="feature-desc">All four TCM treatment pillars available at this Bukit Jalil clinic</div></div>
          <div class="feature-item"><span class="feature-icon">停</span><div class="feature-title">Ample Parking</div><div class="feature-desc">Plenty of parking options in and around the Bukit Jalil area</div></div>
          <div class="feature-item"><span class="feature-icon">地</span><div class="feature-title">LRT Access</div><div class="feature-desc">Accessible via Bukit Jalil LRT station and nearby bus routes</div></div>
          <div class="feature-item"><span class="feature-icon">预</span><div class="feature-title">Walk-Ins Welcome</div><div class="feature-desc">Appointment booking ensures your preferred time slot and physician</div></div>
        </div>
      </div>
    </section>

    <!-- Map Section -->
    <section class="map-section" id="bj-map">
      <div class="container">
        <span class="section-label">Find Us</span>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(22px,2.5vw,34px);font-weight:700;color:var(--brown);margin-bottom:36px;">Getting to <em style="font-style:italic;color:var(--brown-mid);">Bukit Jalil</em></h2>
        <div class="map-grid">
          <div class="map-frame" id="bj-map-frame">
            <svg class="map-frame-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/></svg>
            <div class="map-frame-label">Google Maps Embed</div>
            <div class="map-frame-hint">Paste a Google Maps embed URL below to display the map for this outlet</div>
            <iframe id="bj-iframe" src="" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="map-side-card">
            <div class="map-side-title">Bukit Jalil Clinic</div>
            <div class="map-detail-row">
              <svg class="map-detail-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
              <div>
                <div class="map-detail-label">Address</div>
                <div class="map-detail-value">Bukit Jalil, 57000 Kuala Lumpur,<br>Wilayah Persekutuan</div>
              </div>
            </div>
            <div class="map-detail-row">
              <svg class="map-detail-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <div>
                <div class="map-detail-label">Nearest Landmark</div>
                <div class="map-detail-value">Please update with nearest landmark or mall</div>
              </div>
            </div>
            <div class="map-detail-row">
              <svg class="map-detail-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
              <div>
                <div class="map-detail-label">Contact</div>
                <div class="map-detail-value"><a href="tel:+60312345679">+60 3-XXXX XXXX</a></div>
              </div>
            </div>
            <div class="map-embed-input">
              <div class="map-embed-label">Paste Google Maps Embed URL</div>
              <input type="text" class="map-embed-field" id="bj-map-url" placeholder="https://maps.google.com/maps?..." />
              <button class="map-embed-btn" onclick="embedMap('bj')" style="background:var(--brown-mid);">Load Map</button>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div><!-- /panel bukitjalil -->


  <!-- ── COMPARE BOTH OUTLETS ── -->
  <section class="compare-section">
    <div class="container">
      <span class="section-label">Both Locations</span>
      <h2 class="compare-heading">Explore <em>Both</em> An Yu TCM Outlets</h2>
      <div class="compare-grid">

        <div class="compare-card" onclick="switchOutlet('kepong', document.querySelector('.switcher-tab:first-child')); window.scrollTo({top:0,behavior:'smooth'})">
          <div class="compare-card-img" onclick="event.stopPropagation(); triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Kepong Outlet Photo</div>
            <div class="img-box-hint">Click to upload</div>
            <img src="" alt="Kepong" />
          </div>
          <div class="compare-card-body">
            <div class="compare-outlet-tag">Outlet 01</div>
            <div class="compare-outlet-name">An Yu TCM – Kepong</div>
            <div class="compare-outlet-addr">Jalan Kepong, 52100 Kuala Lumpur</div>
            <a class="compare-view-btn" href="#">View Kepong Outlet →</a>
          </div>
        </div>

        <div class="compare-card" onclick="switchOutlet('bukitjalil', document.querySelectorAll('.switcher-tab')[1]); window.scrollTo({top:0,behavior:'smooth'})">
          <div class="compare-card-img" onclick="event.stopPropagation(); triggerUpload(this)">
            <input type="file" class="img-upload-input" accept="image/*" onchange="loadGalleryImage(event, this)">
            <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
            <div class="img-box-label">Bukit Jalil Outlet Photo</div>
            <div class="img-box-hint">Click to upload</div>
            <img src="" alt="Bukit Jalil" />
          </div>
          <div class="compare-card-body">
            <div class="compare-outlet-tag">Outlet 02</div>
            <div class="compare-outlet-name">An Yu TCM – Bukit Jalil</div>
            <div class="compare-outlet-addr">Bukit Jalil, 57000 Kuala Lumpur</div>
            <a class="compare-view-btn" href="#">View Bukit Jalil Outlet →</a>
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
    <li><a href="outlets.html">Outlets</a></li>
    <li><a href="#" onclick="openModal(event,'')">Book Now</a></li>
  </ul>
  <div class="footer-copy">© 2025 An Yu TCM. All rights reserved.</div>
</footer>

<!-- BOOKING MODAL -->
<div class="modal-overlay" id="bookModal" onclick="closeModalOutside(event)">
  <div class="modal">
    <div class="modal-header" id="modal-header-bar">
      <div>
        <div class="modal-title">Book an Appointment</div>
        <div class="modal-subtitle" id="modal-subtitle">An Yu TCM Healthcare Centre</div>
      </div>
      <button class="modal-close" onclick="closeModal()">×</button>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <label class="form-label">Outlet</label>
        <select class="form-select" id="outlet-select" onchange="updateModalHeader()">
          <option value="">Select an outlet…</option>
          <option value="Kepong">An Yu TCM – Kepong</option>
          <option value="Bukit Jalil">An Yu TCM – Bukit Jalil</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label">Service</label>
        <select class="form-select">
          <option value="">Select a treatment…</option>
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
          <input type="date" class="form-input" id="modal-date" />
        </div>
        <div class="form-group">
          <label class="form-label">Time</label>
          <select class="form-select">
            <option>9:00 AM</option><option>10:00 AM</option><option>11:00 AM</option>
            <option>12:00 PM</option><option>2:00 PM</option><option>3:00 PM</option>
            <option>4:00 PM</option><option>5:00 PM</option>
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

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
  <button class="lightbox-close" onclick="closeLightbox()">×</button>
  <img id="lightbox-img" src="" alt="" />
  <div class="lightbox-caption" id="lightbox-caption"></div>
</div>

<script>
  // ── Set today as min date
  document.getElementById('modal-date').min = new Date().toISOString().split('T')[0];
  document.getElementById('modal-date').value = new Date().toISOString().split('T')[0];

  // ── Outlet switcher
  function switchOutlet(id, btn) {
    document.querySelectorAll('.outlet-panel').forEach(p => p.classList.remove('active'));
    document.getElementById('panel-' + id).classList.add('active');
    document.querySelectorAll('.switcher-tab').forEach(t => t.classList.remove('active'));
    if (btn) btn.classList.add('active');
    // update book btn label
    const label = id === 'kepong' ? 'Book at Kepong' : 'Book at Bukit Jalil';
    document.getElementById('switcher-book').textContent = label;
  }

  // ── Image uploads: banner
  function triggerUpload(el) {
    el.querySelector('.img-upload-input').click();
  }

  function loadBannerImage(event, container) {
    const file = event.target.files[0]; if (!file) return;
    const reader = new FileReader();
    reader.onload = e => {
      container.querySelector('img').src = e.target.result;
      container.classList.add('has-image');
    };
    reader.readAsDataURL(file);
  }

  // ── Gallery images (also enable lightbox on click)
  function loadGalleryImage(event, container) {
    const file = event.target.files[0]; if (!file) return;
    const reader = new FileReader();
    reader.onload = e => {
      container.querySelector('img').src = e.target.result;
      container.classList.add('has-image');
      // attach lightbox on the img
      const img = container.querySelector('img');
      img.style.cursor = 'zoom-in';
      img.addEventListener('click', (ev) => {
        ev.stopPropagation();
        openLightbox(img.src, container.querySelector('.img-box-label')?.textContent || '');
      });
    };
    reader.readAsDataURL(file);
  }

  // ── Lightbox
  function openLightbox(src, caption) {
    document.getElementById('lightbox-img').src = src;
    document.getElementById('lightbox-caption').textContent = caption;
    document.getElementById('lightbox').classList.add('open');
  }
  function closeLightbox() {
    document.getElementById('lightbox').classList.remove('open');
  }

  // ── Map embed
  function embedMap(outlet) {
    const input = document.getElementById(outlet + '-map-url').value.trim();
    if (!input) return alert('Please paste a Google Maps embed URL first.');
    const frame = document.getElementById(outlet + '-map-frame');
    const iframe = document.getElementById(outlet + '-iframe');
    iframe.src = input;
    frame.classList.add('has-map');
  }

  // ── Booking modal
  let currentOutlet = '';
  function openModal(e, outlet) {
    if (e) e.preventDefault();
    currentOutlet = outlet;
    const modal = document.getElementById('bookModal');
    const subtitle = document.getElementById('modal-subtitle');
    const select = document.getElementById('outlet-select');
    const header = document.getElementById('modal-header-bar');
    modal.classList.add('active');
    if (outlet) {
      select.value = outlet;
      subtitle.textContent = 'An Yu TCM – ' + outlet;
      header.style.background = outlet === 'Bukit Jalil' ? 'var(--brown-mid)' : 'var(--brown)';
    } else {
      subtitle.textContent = 'An Yu TCM Healthcare Centre';
      header.style.background = 'var(--brown)';
    }
  }

  function updateModalHeader() {
    const val = document.getElementById('outlet-select').value;
    const subtitle = document.getElementById('modal-subtitle');
    const header = document.getElementById('modal-header-bar');
    subtitle.textContent = val ? 'An Yu TCM – ' + val : 'An Yu TCM Healthcare Centre';
    header.style.background = val === 'Bukit Jalil' ? 'var(--brown-mid)' : 'var(--brown)';
  }

  function closeModal() { document.getElementById('bookModal').classList.remove('active'); }
  function closeModalOutside(e) { if (e.target === document.getElementById('bookModal')) closeModal(); }
  function submitBooking() {
    alert('Thank you! Your appointment request has been received.\nWe will confirm via WhatsApp or phone shortly.');
    closeModal();
  }

  // ── Handle URL param ?outlet=bukitjalil
  const params = new URLSearchParams(window.location.search);
  if (params.get('outlet') === 'bukitjalil') {
    switchOutlet('bukitjalil', document.querySelectorAll('.switcher-tab')[1]);
  }
</script>
</body>
</html>