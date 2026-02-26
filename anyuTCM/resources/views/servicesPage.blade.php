<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Services – An Yu TCM Healthcare Centre</title>
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
    body::before { content: ''; position: fixed; inset: 0; background-image: radial-gradient(ellipse at 20% 10%, rgba(180,120,60,0.07) 0%, transparent 50%), radial-gradient(ellipse at 80% 80%, rgba(123,63,26,0.06) 0%, transparent 50%); pointer-events: none; z-index: 0; }

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
    .page-hero-bg { position: absolute; inset: 0; background: linear-gradient(160deg, #4a2010 0%, var(--brown) 60%, var(--brown-mid) 100%); z-index: 0; }
    .page-hero-bg::before { content: '治'; position: absolute; font-family: 'Noto Serif SC', serif; font-size: 380px; font-weight: 700; color: rgba(255,255,255,0.03); right: -20px; bottom: -80px; line-height: 1; }
    .page-hero-deco { position: absolute; border-radius: 50%; border: 1px solid rgba(255,255,255,0.06); }
    .phd-1 { width: 500px; height: 500px; top: -150px; right: -100px; }
    .phd-2 { width: 300px; height: 300px; top: -80px; right: -20px; }
    .page-hero-content { position: relative; z-index: 2; max-width: 1100px; margin: 0 auto; width: 100%; }
    .page-breadcrumb { font-size: 12px; font-weight: 500; letter-spacing: 3px; text-transform: uppercase; color: rgba(255,255,255,0.4); margin-bottom: 20px; }
    .page-breadcrumb a { color: rgba(255,255,255,0.4); text-decoration: none; }
    .page-hero h1 { font-family: 'Playfair Display', serif; font-size: clamp(44px, 6vw, 72px); font-weight: 700; color: white; line-height: 1.1; margin-bottom: 16px; }
    .page-hero h1 em { font-style: italic; color: var(--brown-pale); }
    .page-hero-desc { font-size: 19px; font-weight: 300; color: rgba(255,255,255,0.6); max-width: 560px; line-height: 1.8; }
    .page-hero-cn { position: absolute; right: 48px; bottom: 40px; font-family: 'Noto Serif SC', serif; font-size: 14px; font-weight: 300; color: rgba(255,255,255,0.2); writing-mode: vertical-rl; letter-spacing: 8px; }

    .main-content { position: relative; z-index: 1; }
    .container { max-width: 1100px; margin: 0 auto; padding: 0 48px; }
    .section-label { font-size: 11px; font-weight: 500; letter-spacing: 4px; text-transform: uppercase; color: var(--gold); margin-bottom: 16px; display: block; }
    .section-divider { width: 60px; height: 1px; background: var(--gold); opacity: 0.6; }

    /* ── IMAGE PLACEHOLDER ── */
    .img-box { width: 100%; background: var(--cream-dark); border: 2px dashed rgba(123,63,26,0.2); border-radius: 4px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; cursor: pointer; transition: border-color 0.2s, background 0.2s; position: relative; overflow: hidden; }
    .img-box:hover { border-color: var(--brown-light); background: rgba(123,63,26,0.04); }
    .img-box-icon { width: 36px; height: 36px; color: rgba(123,63,26,0.25); }
    .img-box-label { font-size: 12px; font-weight: 500; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(123,63,26,0.3); }
    .img-box-hint { font-size: 11px; color: rgba(123,63,26,0.2); }
    .img-box img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: none; }
    .img-box.has-image .img-box-icon, .img-box.has-image .img-box-label, .img-box.has-image .img-box-hint { display: none; }
    .img-box.has-image img { display: block; }
    .img-upload-input { display: none; }

    /* ── SERVICES OVERVIEW ── */
    .overview-section { padding: 100px 0 60px; }
    .overview-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; margin-top: 64px; }
    .overview-text {}
    .overview-text h2 { font-family: 'Playfair Display', serif; font-size: clamp(28px, 3vw, 42px); font-weight: 700; color: var(--brown); line-height: 1.2; margin-bottom: 24px; }
    .overview-text h2 em { font-style: italic; color: var(--brown-mid); }
    .overview-text p { font-size: 17px; font-weight: 300; color: var(--brown-mid); line-height: 1.9; margin-bottom: 18px; }

    /* ── INDIVIDUAL SERVICE SECTIONS ── */
    .service-section { padding: 80px 0; border-top: 1px solid rgba(123,63,26,0.1); }
    .service-section:first-of-type { border-top: none; }

    .service-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 72px; align-items: start; }
    .service-layout.reverse { direction: rtl; }
    .service-layout.reverse > * { direction: ltr; }

    .service-number { font-family: 'Playfair Display', serif; font-size: 80px; font-weight: 700; color: rgba(123,63,26,0.07); line-height: 1; margin-bottom: -16px; }
    .service-cn-icon { font-family: 'Noto Serif SC', serif; font-size: 52px; color: var(--brown); opacity: 0.7; margin-bottom: 16px; display: block; }
    .service-title { font-family: 'Playfair Display', serif; font-size: clamp(26px, 3vw, 38px); font-weight: 700; color: var(--brown); margin-bottom: 8px; }
    .service-cn-name { font-family: 'Noto Serif SC', serif; font-size: 14px; font-weight: 300; color: var(--brown-light); letter-spacing: 4px; margin-bottom: 20px; }
    .service-desc { font-size: 17px; font-weight: 300; color: var(--brown-mid); line-height: 1.9; margin-bottom: 28px; }

    .service-benefits { margin-bottom: 32px; }
    .service-benefits-title { font-size: 12px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: var(--gold); margin-bottom: 14px; }
    .benefit-row { display: flex; align-items: flex-start; gap: 12px; margin-bottom: 10px; font-size: 15px; color: var(--brown-mid); line-height: 1.6; }
    .benefit-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--gold); flex-shrink: 0; margin-top: 7px; }

    .service-duration { display: inline-flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 500; letter-spacing: 1px; color: var(--brown); background: rgba(123,63,26,0.07); padding: 8px 16px; border-radius: 2px; margin-bottom: 28px; }

    .btn-book-service { display: inline-block; background: var(--brown); color: var(--cream); padding: 16px 40px; font-family: 'Cormorant Garamond', serif; font-size: 15px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase; text-decoration: none; border-radius: 2px; border: 2px solid var(--brown); transition: all 0.3s; }
    .btn-book-service:hover { background: transparent; color: var(--brown); }

    /* Image area for each service */
    .service-image-wrap { position: relative; }
    .service-main-img { width: 100%; aspect-ratio: 4/3; }
    .service-thumb-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 12px; }
    .service-thumb { aspect-ratio: 16/9; }
    .img-caption { font-size: 12px; color: rgba(123,63,26,0.4); text-align: center; margin-top: 8px; font-style: italic; }

    /* ── DARK SERVICES OVERVIEW STRIP ── */
    .services-strip { background: var(--brown); padding: 80px 0; position: relative; overflow: hidden; }
    .services-strip::before { content: '康'; position: absolute; font-family: 'Noto Serif SC', serif; font-size: 400px; font-weight: 700; color: rgba(255,255,255,0.025); left: 50%; top: 50%; transform: translate(-50%,-50%); pointer-events: none; }
    .services-strip .section-label { color: var(--brown-pale); }
    .strip-heading { font-family: 'Playfair Display', serif; font-size: clamp(26px, 3vw, 38px); font-weight: 700; color: white; margin-bottom: 48px; }
    .strip-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 2px; }
    .strip-item { background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.07); padding: 40px 28px; text-align: center; transition: background 0.3s; cursor: pointer; text-decoration: none; display: block; }
    .strip-item:hover { background: rgba(255,255,255,0.1); }
    .strip-icon { font-family: 'Noto Serif SC', serif; font-size: 36px; color: var(--brown-pale); opacity: 0.7; margin-bottom: 14px; display: block; }
    .strip-name { font-family: 'Playfair Display', serif; font-size: 19px; color: white; margin-bottom: 8px; }
    .strip-desc { font-size: 13px; color: rgba(255,255,255,0.45); line-height: 1.7; }

    /* ── BOOK CTA ── */
    .book-cta { padding: 100px 0; }
    .book-cta-inner { background: var(--cream-dark); border: 1px solid rgba(123,63,26,0.12); border-radius: 4px; padding: 80px 64px; text-align: center; position: relative; overflow: hidden; }
    .book-cta-inner::before { content: '预约'; position: absolute; font-family: 'Noto Serif SC', serif; font-size: 200px; font-weight: 700; color: rgba(123,63,26,0.04); left: 50%; top: 50%; transform: translate(-50%,-50%); pointer-events: none; }
    .book-cta-inner .section-label { justify-content: center; display: flex; }
    .book-cta h2 { font-family: 'Playfair Display', serif; font-size: clamp(28px, 3.5vw, 48px); font-weight: 700; color: var(--brown); margin-bottom: 20px; line-height: 1.2; }
    .book-cta h2 em { font-style: italic; color: var(--brown-mid); }
    .book-cta p { font-size: 18px; font-weight: 300; color: var(--brown-mid); line-height: 1.8; max-width: 520px; margin: 0 auto 40px; }
    .cta-btn-group { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
    .btn-primary { background: var(--brown); color: var(--cream); padding: 16px 40px; font-family: 'Cormorant Garamond', serif; font-size: 15px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase; text-decoration: none; border-radius: 2px; border: 2px solid var(--brown); transition: all 0.3s; display: inline-block; }
    .btn-primary:hover { background: transparent; color: var(--brown); }
    .btn-secondary { background: transparent; color: var(--brown); padding: 16px 40px; font-family: 'Cormorant Garamond', serif; font-size: 15px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase; text-decoration: none; border-radius: 2px; border: 2px solid rgba(123,63,26,0.3); transition: all 0.3s; display: inline-block; }
    .btn-secondary:hover { border-color: var(--brown); }

    /* ── FOOTER ── */
    footer { background: var(--ink); color: rgba(255,255,255,0.5); padding: 48px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px; }
    .footer-logo { display: flex; align-items: center; gap: 14px; }
    .footer-logo-circle { width: 40px; height: 40px; border: 2px solid rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Noto Serif SC', serif; font-size: 14px; color: rgba(255,255,255,0.5); }
    .footer-name { font-family: 'Playfair Display', serif; font-size: 15px; color: rgba(255,255,255,0.6); }
    .footer-links { display: flex; gap: 28px; list-style: none; }
    .footer-links a { text-decoration: none; font-size: 13px; color: rgba(255,255,255,0.35); letter-spacing: 0.5px; transition: color 0.2s; }
    .footer-links a:hover { color: rgba(255,255,255,0.65); }
    .footer-copy { font-size: 12px; }

    @media (max-width: 900px) {
      nav { padding: 16px 24px; }
      .nav-links { display: none; }
      .page-hero { padding: 130px 24px 60px; }
      .container { padding: 0 24px; }
      .overview-grid, .service-layout, .service-layout.reverse { grid-template-columns: 1fr; gap: 40px; direction: ltr; }
      .service-thumb-row { grid-template-columns: 1fr 1fr; }
      .strip-grid { grid-template-columns: 1fr 1fr; }
      .book-cta-inner { padding: 48px 28px; }
      footer { padding: 32px 24px; flex-direction: column; }
      .footer-links { display: none; }
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
    <div class="page-breadcrumb"><a href="index.html">Home</a> &nbsp;/&nbsp; Our Services</div>
    <h1>Our <em>Treatments</em><br>& Services</h1>
    <p class="page-hero-desc">Explore the full range of Traditional Chinese Medicine treatments offered across our Kepong and Bukit Jalil clinics.</p>
  </div>
  <div class="page-hero-cn">针灸 · 拔罐 · 中药 · 推拿</div>
</section>

<main class="main-content">

  <!-- SERVICES QUICK STRIP -->
  <section class="services-strip">
    <div class="container">
      <span class="section-label">What We Offer</span>
      <h2 class="strip-heading">Four Pillars of TCM Healing</h2>
      <div class="strip-grid">
        <a href="#acupuncture" class="strip-item">
          <span class="strip-icon">针</span>
          <div class="strip-name">Acupuncture</div>
          <div class="strip-desc">Restore qi flow and relieve pain through precision needle therapy</div>
        </a>
        <a href="#cupping" class="strip-item">
          <span class="strip-icon">拔</span>
          <div class="strip-name">Cupping</div>
          <div class="strip-desc">Enhance circulation and reduce muscle tension with cupping therapy</div>
        </a>
        <a href="#herbal" class="strip-item">
          <span class="strip-icon">药</span>
          <div class="strip-name">Herbal Medicine</div>
          <div class="strip-desc">Personalised herbal prescriptions for your unique constitution</div>
        </a>
        <a href="#tuina" class="strip-item">
          <span class="strip-icon">推</span>
          <div class="strip-name">Tui Na Massage</div>
          <div class="strip-desc">Therapeutic Chinese massage to unblock meridians and ease tension</div>
        </a>
      </div>
    </div>
  </section>

  <!-- OVERVIEW -->
  <section class="overview-section">
    <div class="container">
      <div style="max-width:680px;">
        <span class="section-label">Our Approach</span>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(28px,3vw,42px);font-weight:700;color:var(--brown);line-height:1.2;margin-bottom:20px;">Treatments Rooted in <em style="font-style:italic;color:var(--brown-mid);">Thousands of Years</em></h2>
        <div class="section-divider" style="margin-bottom:24px;"></div>
        <p style="font-size:17px;font-weight:300;color:var(--brown-mid);line-height:1.9;">Every treatment at An Yu TCM is guided by the foundational principles of Traditional Chinese Medicine: balance, harmony, and the flow of vital energy (qi). Our physicians take time to understand your constitution before recommending any therapy — ensuring each treatment is precisely right for you.</p>
      </div>
    </div>
  </section>

  <!-- ═══ SERVICE 1: ACUPUNCTURE ═══ -->
  <section class="service-section" id="acupuncture">
    <div class="container">
      <div class="service-layout">
        <div>
          <div class="service-number">01</div>
          <span class="service-cn-icon">针</span>
          <div class="service-title">Acupuncture</div>
          <div class="service-cn-name">针灸疗法</div>
          <div class="service-duration">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"/></svg>
            30 – 60 minutes per session
          </div>
          <p class="service-desc">Acupuncture is one of the oldest and most recognised TCM therapies, involving the gentle insertion of ultra-fine needles into specific meridian points on the body to restore the flow of qi. At An Yu TCM, our physicians are trained to identify the precise points relevant to your condition and deliver a treatment that is both therapeutic and deeply relaxing.</p>
          <div class="service-benefits">
            <div class="service-benefits-title">Conditions Treated</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Chronic and acute pain (back, neck, joints)</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Stress, anxiety, and insomnia</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Headaches and migraines</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Digestive disorders and nausea</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Fertility support and hormonal balance</div>
          </div>
          <a href="index.html#outlets" class="btn-book-service">Book Acupuncture</a>
        </div>
        <div class="service-image-wrap">
          <div class="service-main-img">
            <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:4/3;">
              <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
              <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
              <div class="img-box-label">Acupuncture Treatment Photo</div>
              <div class="img-box-hint">Click to upload</div>
              <img src="" alt="Acupuncture" />
            </div>
          </div>
          <div class="service-thumb-row">
            <div class="service-thumb">
              <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:16/9;">
                <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
                <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                <div class="img-box-label">Detail Photo</div><div class="img-box-hint">Upload</div>
                <img src="" alt="" />
              </div>
            </div>
            <div class="service-thumb">
              <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:16/9;">
                <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
                <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                <div class="img-box-label">Detail Photo</div><div class="img-box-hint">Upload</div>
                <img src="" alt="" />
              </div>
            </div>
          </div>
          <p class="img-caption">Our physicians perform acupuncture in a calm, private treatment room</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ SERVICE 2: CUPPING ═══ -->
  <section class="service-section" id="cupping">
    <div class="container">
      <div class="service-layout reverse">
        <div>
          <div class="service-number">02</div>
          <span class="service-cn-icon">拔</span>
          <div class="service-title">Cupping Therapy</div>
          <div class="service-cn-name">拔罐疗法</div>
          <div class="service-duration">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"/></svg>
            20 – 40 minutes per session
          </div>
          <p class="service-desc">Cupping therapy uses specially designed cups placed on the skin to create gentle suction, stimulating blood flow, loosening connective tissue, and promoting the healing of stagnant areas. It is particularly effective for musculoskeletal tension, respiratory conditions, and detoxification support.</p>
          <div class="service-benefits">
            <div class="service-benefits-title">Benefits & Uses</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Muscle tension and back pain relief</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Improved blood and lymphatic circulation</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Respiratory conditions (cough, asthma)</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Stress relief and detoxification</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Skin health and cellulite reduction</div>
          </div>
          <a href="index.html#outlets" class="btn-book-service">Book Cupping</a>
        </div>
        <div class="service-image-wrap">
          <div class="service-main-img">
            <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:4/3;">
              <input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)">
              <svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
              <div class="img-box-label">Cupping Therapy Photo</div>
              <div class="img-box-hint">Click to upload</div>
              <img src="" alt="Cupping" />
            </div>
          </div>
          <div class="service-thumb-row">
            <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:16/9;"><input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)"><svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg><div class="img-box-label">Detail</div><div class="img-box-hint">Upload</div><img src="" alt="" /></div>
            <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:16/9;"><input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)"><svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg><div class="img-box-label">Detail</div><div class="img-box-hint">Upload</div><img src="" alt="" /></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ SERVICE 3: HERBAL MEDICINE ═══ -->
  <section class="service-section" id="herbal">
    <div class="container">
      <div class="service-layout">
        <div>
          <div class="service-number">03</div>
          <span class="service-cn-icon">药</span>
          <div class="service-title">Herbal Medicine</div>
          <div class="service-cn-name">中草药处方</div>
          <div class="service-duration">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"/></svg>
            30 – 45 minute consultation
          </div>
          <p class="service-desc">TCM herbal medicine involves the prescription of carefully selected natural herbs — roots, flowers, leaves, and minerals — combined into customised formulas that address your unique pattern of imbalance. Our physicians draw on thousands of classical formulas and adapt them to your modern health needs.</p>
          <div class="service-benefits">
            <div class="service-benefits-title">Conditions Treated</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Chronic fatigue and energy deficiency</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Immune system support</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Hormonal imbalance and menstrual issues</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Skin conditions (eczema, acne, psoriasis)</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Digestive and gastrointestinal conditions</div>
          </div>
          <a href="index.html#outlets" class="btn-book-service">Book Herbal Consultation</a>
        </div>
        <div class="service-image-wrap">
          <div class="service-main-img">
            <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:4/3;"><input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)"><svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg><div class="img-box-label">Herbal Medicine Photo</div><div class="img-box-hint">Click to upload</div><img src="" alt="Herbal Medicine" /></div>
          </div>
          <div class="service-thumb-row">
            <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:16/9;"><input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)"><svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg><div class="img-box-label">Herbs</div><div class="img-box-hint">Upload</div><img src="" alt="" /></div>
            <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:16/9;"><input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)"><svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg><div class="img-box-label">Dispensary</div><div class="img-box-hint">Upload</div><img src="" alt="" /></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ SERVICE 4: TUI NA ═══ -->
  <section class="service-section" id="tuina">
    <div class="container">
      <div class="service-layout reverse">
        <div>
          <div class="service-number">04</div>
          <span class="service-cn-icon">推</span>
          <div class="service-title">Tui Na Massage</div>
          <div class="service-cn-name">推拿按摩</div>
          <div class="service-duration">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"/></svg>
            45 – 60 minutes per session
          </div>
          <p class="service-desc">Tui Na is a form of therapeutic Chinese massage that works along the body's meridian pathways to unblock stagnation, ease tension, and promote the free circulation of qi and blood. Unlike conventional massage, Tui Na targets specific acupressure points and uses a variety of hand techniques to treat both the physical and energetic body.</p>
          <div class="service-benefits">
            <div class="service-benefits-title">Benefits & Uses</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Musculoskeletal pain and stiffness</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Post-injury recovery and rehabilitation</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Stress reduction and mental fatigue</div>
            <div class="benefit-row"><div class="benefit-dot"></div>Improved range of motion and flexibility</div>
            <div class="benefit-row"><div class="benefit-dot"></div>General wellbeing and relaxation</div>
          </div>
          <a href="index.html#outlets" class="btn-book-service">Book Tui Na</a>
        </div>
        <div class="service-image-wrap">
          <div class="service-main-img">
            <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:4/3;"><input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)"><svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg><div class="img-box-label">Tui Na Massage Photo</div><div class="img-box-hint">Click to upload</div><img src="" alt="Tui Na" /></div>
          </div>
          <div class="service-thumb-row">
            <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:16/9;"><input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)"><svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg><div class="img-box-label">Detail</div><div class="img-box-hint">Upload</div><img src="" alt="" /></div>
            <div class="img-box" onclick="triggerUpload(this)" style="aspect-ratio:16/9;"><input type="file" class="img-upload-input" accept="image/*" onchange="loadImage(event, this.parentElement)"><svg class="img-box-icon" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg><div class="img-box-label">Detail</div><div class="img-box-hint">Upload</div><img src="" alt="" /></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BOOK CTA -->
  <section class="book-cta">
    <div class="container">
      <div class="book-cta-inner">
        <span class="section-label">Get Started</span>
        <h2>Ready to Begin Your<br><em>Healing Journey?</em></h2>
        <p>Book an appointment at your nearest An Yu TCM outlet in Kepong or Bukit Jalil. Our physicians are ready to welcome you.</p>
        <div class="cta-btn-group">
          <a href="index.html#outlets" class="btn-primary">Book at Kepong</a>
          <a href="index.html#outlets" class="btn-secondary">Book at Bukit Jalil</a>
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
</script>
</body>
</html>