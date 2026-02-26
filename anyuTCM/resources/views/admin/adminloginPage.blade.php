<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>An Yu TCM — Admin Login</title>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@300;400;600;700&family=Lora:ital,wght@0,400;0,500;0,600;1,400;1,500&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap" rel="stylesheet">
<style>
  :root {
    --brown:        #7a3b1e;
    --brown-light:  #a05030;
    --brown-pale:   #c8905a;
    --brown-deep:   #3e1c0a;
    --brown-mid:    #5c2a12;
    --cream:        #f5f0e8;
    --cream-dark:   #ede5d8;
    --cream-darker: #ddd3c0;
    --white:        #fdfaf5;
    --text:         #3a2010;
    --text-light:   #7a5a40;
    --green:        #4a7c59;
    --red:          #9c3a2a;
    --shadow:       rgba(40, 15, 5, 0.18);
  }

  *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

  html, body {
    height: 100%;
    font-family: 'DM Sans', sans-serif;
    background: var(--brown-deep);
    overflow: hidden;
  }

  /* ═══════════════════════════════
     LAYOUT — two-column split
  ═══════════════════════════════ */
  .page {
    display: flex;
    height: 100vh;
    width: 100vw;
    overflow: hidden;
  }

  /* ── LEFT PANEL ── */
  .left {
    flex: 1.1;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 52px;
  }

  /* Rich layered background */
  .left-bg {
    position: absolute;
    inset: 0;
    z-index: 0;
    background:
      radial-gradient(ellipse 90% 70% at 20% 10%, #c07840 0%, transparent 60%),
      radial-gradient(ellipse 70% 90% at 80% 80%, #8b4520 0%, transparent 55%),
      linear-gradient(145deg, #5c2a12 0%, #3e1c0a 50%, #2a1008 100%);
  }

  /* Ink-brush circular motif */
  .brush-circle {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(200, 144, 90, 0.18);
    pointer-events: none;
  }

  .bc-1 { width: 520px; height: 520px; top: -140px; right: -120px; animation: slowSpin 60s linear infinite; }
  .bc-2 { width: 340px; height: 340px; top: -30px; right: 20px; animation: slowSpin 40s linear infinite reverse; border-color: rgba(255,255,255,0.07); }
  .bc-3 { width: 200px; height: 200px; top: 80px; right: 120px; border-color: rgba(200,144,90,0.1); }
  .bc-4 { width: 680px; height: 680px; bottom: -240px; left: -200px; animation: slowSpin 80s linear infinite; border-color: rgba(200,144,90,0.06); }

  @keyframes slowSpin { to { transform: rotate(360deg); } }

  /* Subtle noise */
  .left-noise {
    position: absolute;
    inset: 0;
    z-index: 1;
    opacity: 0.03;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
    background-size: 256px;
  }

  /* Diagonal accent line */
  .left-accent {
    position: absolute;
    top: 0; bottom: 0; right: 0;
    width: 1px;
    background: linear-gradient(to bottom, transparent 0%, rgba(200,144,90,0.25) 30%, rgba(200,144,90,0.4) 60%, transparent 100%);
    z-index: 2;
  }

  .left-content {
    position: relative;
    z-index: 3;
    animation: fadeUp 0.8s 0.1s ease both;
  }

  .left-logo {
    display: flex;
    align-items: center;
    gap: 18px;
    margin-bottom: 48px;
  }

  .logo-emblem {
    width: 72px; height: 72px;
    border-radius: 50%;
    border: 2px solid rgba(255,255,255,0.3);
    background: rgba(255,255,255,0.07);
    backdrop-filter: blur(12px);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    position: relative;
    box-shadow: 0 8px 32px rgba(0,0,0,0.3), inset 0 1px 0 rgba(255,255,255,0.15);
  }

  .logo-emblem::before {
    content: '';
    position: absolute;
    inset: 7px;
    border-radius: 50%;
    border: 1px solid rgba(200,144,90,0.35);
  }

  .logo-chars {
    font-family: 'Noto Serif SC', serif;
    font-size: 22px;
    font-weight: 600;
    color: white;
    letter-spacing: 2px;
  }

  .logo-info {}

  .logo-name {
    font-family: 'Noto Serif SC', serif;
    font-size: 20px;
    font-weight: 600;
    color: white;
    letter-spacing: 0.04em;
    line-height: 1.2;
  }

  .logo-cn {
    font-family: 'Noto Serif SC', serif;
    font-size: 13px;
    color: var(--brown-pale);
    letter-spacing: 0.12em;
    margin-top: 2px;
  }

  .left-tagline {
    font-family: 'Lora', serif;
    font-style: italic;
    font-size: 32px;
    line-height: 1.35;
    color: white;
    margin-bottom: 20px;
    text-shadow: 0 2px 20px rgba(0,0,0,0.3);
    max-width: 420px;
  }

  .left-tagline em {
    font-style: normal;
    color: var(--brown-pale);
  }

  .left-desc {
    font-size: 14px;
    color: rgba(200, 150, 100, 0.75);
    line-height: 1.7;
    max-width: 380px;
    margin-bottom: 40px;
  }

  /* Outlet indicators */
  .outlet-pills {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
  }

  .outlet-pill {
    display: flex;
    align-items: center;
    gap: 7px;
    padding: 8px 16px;
    border-radius: 30px;
    border: 1px solid rgba(200,144,90,0.3);
    background: rgba(255,255,255,0.06);
    backdrop-filter: blur(8px);
    cursor: pointer;
    transition: all 0.22s;
  }

  .outlet-pill:hover {
    border-color: rgba(200,144,90,0.6);
    background: rgba(255,255,255,0.1);
  }

  .outlet-pill.active {
    border-color: var(--brown-pale);
    background: rgba(200,144,90,0.15);
  }

  .pill-dot {
    width: 7px; height: 7px;
    border-radius: 50%;
    background: rgba(200,144,90,0.5);
    transition: background 0.2s;
  }

  .outlet-pill.active .pill-dot {
    background: var(--brown-pale);
    box-shadow: 0 0 6px var(--brown-pale);
  }

  .pill-text {
    font-size: 12px;
    font-weight: 500;
    color: rgba(255,255,255,0.65);
    letter-spacing: 0.04em;
    transition: color 0.2s;
  }

  .outlet-pill.active .pill-text { color: var(--brown-pale); }

  .pill-loc {
    font-size: 10px;
    color: rgba(200,144,90,0.45);
  }
  .outlet-pill.active .pill-loc { color: rgba(200,144,90,0.7); }

  /* ── RIGHT PANEL ── */
  .right {
    width: 480px;
    flex-shrink: 0;
    background: var(--white);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 52px 48px;
    position: relative;
    overflow: hidden;
  }

  /* Decorative corner motif */
  .right::before {
    content: '';
    position: absolute;
    top: 0; right: 0;
    width: 160px; height: 160px;
    background: radial-gradient(ellipse at top right, rgba(200,144,90,0.08) 0%, transparent 70%);
    pointer-events: none;
  }

  .right::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 140px; height: 140px;
    background: radial-gradient(ellipse at bottom left, rgba(122,59,30,0.06) 0%, transparent 70%);
    pointer-events: none;
  }

  .form-wrap {
    width: 100%;
    max-width: 360px;
    position: relative;
    z-index: 1;
  }

  .form-eyebrow {
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.14em;
    color: var(--brown-pale);
    margin-bottom: 10px;
    animation: fadeUp 0.6s 0.2s ease both;
  }

  .form-heading {
    font-family: 'Noto Serif SC', serif;
    font-size: 30px;
    font-weight: 700;
    color: var(--brown);
    line-height: 1.2;
    margin-bottom: 6px;
    animation: fadeUp 0.6s 0.28s ease both;
  }

  .form-subheading {
    font-size: 14px;
    color: var(--text-light);
    margin-bottom: 36px;
    line-height: 1.5;
    animation: fadeUp 0.6s 0.35s ease both;
  }

  /* ── INPUT GROUPS ── */
  .input-group {
    margin-bottom: 20px;
    animation: fadeUp 0.6s ease both;
  }

  .input-group:nth-child(1) { animation-delay: 0.42s; }
  .input-group:nth-child(2) { animation-delay: 0.49s; }
  .input-group:nth-child(3) { animation-delay: 0.56s; }

  .input-label {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    margin-bottom: 8px;
  }

  .label-text {
    font-size: 11.5px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: var(--text-light);
  }

  .label-link {
    font-size: 12px;
    color: var(--brown);
    font-weight: 500;
    cursor: pointer;
    transition: opacity 0.15s;
    text-decoration: none;
  }

  .label-link:hover { opacity: 0.7; }

  .input-field {
    position: relative;
    display: flex;
    align-items: center;
  }

  .field-icon {
    position: absolute;
    left: 15px;
    font-size: 15px;
    pointer-events: none;
    z-index: 2;
    opacity: 0.45;
    display: flex;
    align-items: center;
  }

  .field-input {
    width: 100%;
    padding: 13px 16px 13px 45px;
    border: 1.5px solid var(--cream-darker);
    border-radius: 12px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14.5px;
    color: var(--text);
    background: var(--cream);
    outline: none;
    transition: all 0.22s;
    position: relative;
    z-index: 1;
  }

  .field-input::placeholder { color: var(--cream-darker); }

  .field-input:hover { border-color: var(--brown-pale); }

  .field-input:focus {
    border-color: var(--brown);
    background: var(--white);
    box-shadow: 0 0 0 4px rgba(122, 59, 30, 0.08);
  }

  .field-input.has-error {
    border-color: var(--red);
    background: #fff8f7;
    box-shadow: 0 0 0 4px rgba(156, 58, 42, 0.08);
    animation: fieldShake 0.35s ease;
  }

  @keyframes fieldShake {
    0%,100% { transform: translateX(0); }
    20% { transform: translateX(-7px); }
    40% { transform: translateX(7px); }
    60% { transform: translateX(-4px); }
    80% { transform: translateX(4px); }
  }

  .eye-toggle {
    position: absolute;
    right: 13px;
    z-index: 2;
    background: none;
    border: none;
    cursor: pointer;
    padding: 5px;
    font-size: 16px;
    opacity: 0.4;
    transition: opacity 0.15s;
  }

  .eye-toggle:hover { opacity: 0.8; }

  .field-error {
    font-size: 11.5px;
    color: var(--red);
    margin-top: 6px;
    padding-left: 2px;
    display: none;
  }

  .field-error.visible { display: block; animation: fadeIn 0.2s ease; }

  @keyframes fadeIn { from { opacity: 0; transform: translateY(-4px); } to { opacity: 1; transform: none; } }

  /* ── OPTIONS ROW ── */
  .options-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 28px;
    animation: fadeUp 0.6s 0.62s ease both;
  }

  .remember {
    display: flex;
    align-items: center;
    gap: 9px;
    cursor: pointer;
    user-select: none;
  }

  .check-box {
    width: 18px; height: 18px;
    border: 1.5px solid var(--cream-darker);
    border-radius: 5px;
    background: var(--cream);
    display: flex; align-items: center; justify-content: center;
    font-size: 10px;
    font-weight: 700;
    color: white;
    transition: all 0.18s;
    flex-shrink: 0;
  }

  .check-box.checked {
    background: var(--brown);
    border-color: var(--brown);
  }

  .check-box.checked::after { content: '✓'; }

  .remember-text {
    font-size: 13px;
    color: var(--text-light);
  }

  /* ── SIGN IN BUTTON ── */
  .signin-btn {
    width: 100%;
    padding: 15px 24px;
    background: var(--brown);
    color: white;
    border: none;
    border-radius: 12px;
    font-family: 'Noto Serif SC', serif;
    font-size: 15.5px;
    font-weight: 600;
    letter-spacing: 0.05em;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition: all 0.22s;
    box-shadow: 0 4px 18px rgba(122,59,30,0.3);
    margin-bottom: 8px;
    animation: fadeUp 0.6s 0.68s ease both;
  }

  .signin-btn::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255,255,255,0.08) 0%, transparent 60%);
    pointer-events: none;
  }

  .signin-btn:hover {
    background: var(--brown-light);
    box-shadow: 0 8px 28px rgba(122,59,30,0.38);
    transform: translateY(-1px);
  }

  .signin-btn:active {
    transform: scale(0.98) translateY(0);
    box-shadow: 0 3px 12px rgba(122,59,30,0.25);
  }

  .signin-btn.loading {
    pointer-events: none;
    opacity: 0.85;
  }

  .btn-content { display: flex; align-items: center; justify-content: center; gap: 10px; transition: opacity 0.2s; }
  .btn-loader { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.2s; }
  .signin-btn.loading .btn-content { opacity: 0; }
  .signin-btn.loading .btn-loader { opacity: 1; }

  .spin {
    width: 20px; height: 20px;
    border: 2px solid rgba(255,255,255,0.3);
    border-top-color: white;
    border-radius: 50%;
    animation: spin 0.7s linear infinite;
  }

  @keyframes spin { to { transform: rotate(360deg); } }

  /* ── DEMO CREDENTIALS ── */
  .demo-block {
    margin-top: 28px;
    padding: 14px 16px;
    background: var(--cream);
    border-radius: 12px;
    border: 1px solid var(--cream-darker);
    border-left: 3px solid var(--brown-pale);
    animation: fadeUp 0.6s 0.75s ease both;
  }

  .demo-title {
    font-size: 10.5px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--brown);
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .demo-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 5px;
  }

  .demo-row:last-child { margin-bottom: 0; }

  .demo-key { font-size: 12px; color: var(--text-light); }

  .demo-val {
    font-size: 12px;
    font-weight: 600;
    color: var(--text);
    background: var(--cream-dark);
    padding: 3px 10px;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.15s;
    border: 1px solid transparent;
    font-family: 'DM Sans', monospace;
  }

  .demo-val:hover {
    background: var(--cream-darker);
    border-color: var(--brown-pale);
    color: var(--brown);
  }

  .demo-val:active { transform: scale(0.96); }

  /* ── COPYRIGHT ── */
  .copyright {
    position: absolute;
    bottom: 24px;
    font-size: 11px;
    color: var(--cream-darker);
    text-align: center;
    animation: fadeIn 1s 1s ease both;
  }

  /* ── SUCCESS OVERLAY ── */
  .success-screen {
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: var(--brown-deep);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.45s ease;
  }

  .success-screen.visible {
    opacity: 1;
    pointer-events: all;
  }

  .success-ring {
    width: 90px; height: 90px;
    border-radius: 50%;
    border: 2px solid rgba(200,144,90,0.4);
    display: flex; align-items: center; justify-content: center;
    font-size: 38px;
    margin-bottom: 24px;
    background: rgba(255,255,255,0.05);
    animation: ringIn 0.6s 0.3s cubic-bezier(0.34,1.56,0.64,1) both;
    box-shadow: 0 0 40px rgba(200,144,90,0.15);
  }

  @keyframes ringIn {
    from { transform: scale(0.3) rotate(-20deg); opacity: 0; }
    to { transform: none; opacity: 1; }
  }

  .success-title {
    font-family: 'Noto Serif SC', serif;
    font-size: 24px;
    color: white;
    margin-bottom: 8px;
    animation: fadeUp 0.5s 0.55s ease both;
  }

  .success-msg {
    font-size: 14px;
    color: var(--brown-pale);
    animation: fadeUp 0.5s 0.65s ease both;
  }

  .success-bar-wrap {
    width: 200px;
    height: 3px;
    background: rgba(255,255,255,0.1);
    border-radius: 10px;
    margin-top: 28px;
    overflow: hidden;
    animation: fadeIn 0.3s 0.7s ease both;
  }

  .success-bar {
    height: 100%;
    width: 0%;
    background: var(--brown-pale);
    border-radius: 10px;
    transition: width 1.6s ease;
  }

  /* ── FORGOT MODAL ── */
  .modal-bg {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 500;
    background: rgba(40,15,5,0.55);
    backdrop-filter: blur(6px);
    align-items: center;
    justify-content: center;
  }

  .modal-bg.open { display: flex; }

  .modal-box {
    background: var(--white);
    border-radius: 20px;
    padding: 36px;
    width: 420px;
    max-width: 92vw;
    box-shadow: 0 24px 64px rgba(40,15,5,0.3);
    animation: modalIn 0.3s cubic-bezier(0.34,1.2,0.64,1);
    border: 1px solid rgba(200,144,90,0.15);
  }

  @keyframes modalIn {
    from { transform: scale(0.92) translateY(20px); opacity: 0; }
    to { transform: none; opacity: 1; }
  }

  .modal-logo {
    width: 48px; height: 48px;
    border-radius: 50%;
    background: var(--cream);
    border: 1.5px solid var(--cream-darker);
    display: flex; align-items: center; justify-content: center;
    font-family: 'Noto Serif SC', serif;
    font-size: 14px;
    color: var(--brown);
    margin-bottom: 18px;
  }

  .modal-title {
    font-family: 'Noto Serif SC', serif;
    font-size: 22px;
    color: var(--brown);
    margin-bottom: 6px;
  }

  .modal-sub {
    font-size: 13.5px;
    color: var(--text-light);
    line-height: 1.55;
    margin-bottom: 24px;
  }

  .modal-input {
    width: 100%;
    padding: 13px 16px;
    border: 1.5px solid var(--cream-darker);
    border-radius: 10px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    color: var(--text);
    background: var(--cream);
    outline: none;
    transition: border-color 0.2s;
    margin-bottom: 18px;
  }

  .modal-input:focus { border-color: var(--brown); background: var(--white); }

  .modal-btns { display: flex; gap: 10px; }

  .modal-btn {
    flex: 1;
    padding: 13px;
    border-radius: 10px;
    border: none;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.15s;
  }

  .modal-btn.primary {
    background: var(--brown);
    color: white;
    box-shadow: 0 4px 14px rgba(122,59,30,0.28);
  }

  .modal-btn.primary:hover { background: var(--brown-light); }

  .modal-btn.ghost {
    background: var(--cream-dark);
    color: var(--text);
    border: 1px solid var(--cream-darker);
  }

  .modal-btn.ghost:hover { background: var(--cream-darker); }

  /* ── SHARED ANIMATIONS ── */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(18px); }
    to { opacity: 1; transform: none; }
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 860px) {
    .left { display: none; }
    .right {
      width: 100%;
      padding: 40px 28px;
    }
  }

  @media (max-width: 480px) {
    .right { padding: 32px 20px; }
    .form-heading { font-size: 26px; }
  }
</style>
</head>
<body>

<div class="page">

  <!-- ══════════════════════════════
       LEFT — branding panel
  ══════════════════════════════ -->
  <div class="left">
    <div class="left-bg"></div>
    <div class="brush-circle bc-1"></div>
    <div class="brush-circle bc-2"></div>
    <div class="brush-circle bc-3"></div>
    <div class="brush-circle bc-4"></div>
    <div class="left-noise"></div>
    <div class="left-accent"></div>

    <div class="left-content">
      <div class="left-logo">
        <div class="logo-emblem">
          <span class="logo-chars">安钰</span>
        </div>
        <div class="logo-info">
          <div class="logo-name">An Yu TCM</div>
          <div class="logo-cn">安钰中医保健中心</div>
        </div>
      </div>

      <div class="left-tagline">
        Healing through<br>
        <em>ancient wisdom,</em><br>
        modern care.
      </div>

      <div class="left-desc">
        Manage appointments, practitioners, and patient records across all An Yu TCM clinics from one unified admin portal.
      </div>

      <div class="outlet-pills">
        <div class="outlet-pill active" onclick="setOutlet(this,'kepong')">
          <div class="pill-dot"></div>
          <div>
            <div class="pill-text">Kepong</div>
            <div class="pill-loc">Jalan Kepong Baru</div>
          </div>
        </div>
        <div class="outlet-pill" onclick="setOutlet(this,'bukitjalil')">
          <div class="pill-dot"></div>
          <div>
            <div class="pill-text">Bukit Jalil</div>
            <div class="pill-loc">Jalan Jalil Perkasa</div>
          </div>
        </div>
        <div class="outlet-pill" onclick="setOutlet(this,'all')">
          <div class="pill-dot"></div>
          <div>
            <div class="pill-text">All Outlets</div>
            <div class="pill-loc">Super Admin</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════
       RIGHT — login form
  ══════════════════════════════ -->
  <div class="right">

    <div class="form-wrap">

      <div class="form-eyebrow">Admin Portal</div>
      <div class="form-heading">Sign in</div>
      <div class="form-subheading">Access your clinic management dashboard</div>

      <!-- Email -->
      <div class="input-group">
        <div class="input-label">
          <span class="label-text">Email address</span>
        </div>
        <div class="input-field">
          <span class="field-icon">
            <svg width="15" height="15" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 5.5A1.5 1.5 0 013.5 4h13A1.5 1.5 0 0118 5.5v9A1.5 1.5 0 0116.5 16h-13A1.5 1.5 0 012 14.5v-9z" stroke="#7a5a40" stroke-width="1.5"/>
              <path d="M2 6l8 5 8-5" stroke="#7a5a40" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </span>
          <input
            class="field-input"
            type="email"
            id="email"
            placeholder="admin@anyutcm.com.my"
            autocomplete="email"
            oninput="clearErr('email')"
            onkeydown="if(event.key==='Enter') document.getElementById('password').focus()"
          >
        </div>
        <div class="field-error" id="email-err">Please enter a valid email address.</div>
      </div>

      <!-- Password -->
      <div class="input-group">
        <div class="input-label">
          <span class="label-text">Password</span>
          <a class="label-link" onclick="openForgot()">Forgot password?</a>
        </div>
        <div class="input-field">
          <span class="field-icon">
            <svg width="14" height="15" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="2" y="9" width="14" height="10" rx="2" stroke="#7a5a40" stroke-width="1.5"/>
              <path d="M6 9V6a3 3 0 016 0v3" stroke="#7a5a40" stroke-width="1.5" stroke-linecap="round"/>
              <circle cx="9" cy="14" r="1.5" fill="#7a5a40"/>
            </svg>
          </span>
          <input
            class="field-input"
            type="password"
            id="password"
            placeholder="Enter your password"
            autocomplete="current-password"
            oninput="clearErr('password')"
            onkeydown="if(event.key==='Enter') handleLogin()"
          >
          <button class="eye-toggle" id="eye-btn" onclick="togglePw()" type="button" tabindex="-1">
            <svg id="eye-show" width="17" height="17" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 11s4-7 10-7 10 7 10 7-4 7-10 7S1 11 1 11z" stroke="#7a5a40" stroke-width="1.5"/>
              <circle cx="11" cy="11" r="3" stroke="#7a5a40" stroke-width="1.5"/>
            </svg>
            <svg id="eye-hide" width="17" height="17" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:none">
              <path d="M17.94 17.94A10.07 10.07 0 0111 20c-7 0-11-9-11-9a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0111 4c7 0 11 9 11 9a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24" stroke="#7a5a40" stroke-width="1.5" stroke-linecap="round"/>
              <line x1="1" y1="1" x2="21" y2="21" stroke="#7a5a40" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </button>
        </div>
        <div class="field-error" id="password-err">Incorrect password. Please try again.</div>
      </div>

      <!-- Remember + options -->
      <div class="options-row">
        <div class="remember" onclick="toggleRemember()">
          <div class="check-box" id="check"></div>
          <span class="remember-text">Keep me signed in</span>
        </div>
      </div>

      <!-- Submit -->
      <button class="signin-btn" id="signin-btn" onclick="handleLogin()">
        <div class="btn-content">
          Sign In to Dashboard
          <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
            <path d="M4 10h12M12 6l4 4-4 4" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="btn-loader"><div class="spin"></div></div>
      </button>

      <!-- Demo credentials -->
      <div class="demo-block">
        <div class="demo-title">
          <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7" stroke="#c8905a" stroke-width="1.4"/><path d="M8 7v4M8 5v1" stroke="#c8905a" stroke-width="1.4" stroke-linecap="round"/></svg>
          Demo Credentials — click to fill
        </div>
        <div class="demo-row">
          <span class="demo-key">Email</span>
          <span class="demo-val" onclick="fill('email','admin@anyutcm.com.my')">admin@anyutcm.com.my</span>
        </div>
        <div class="demo-row">
          <span class="demo-key">Password</span>
          <span class="demo-val" onclick="fill('password','admin123')">admin123</span>
        </div>
      </div>

    </div><!-- /form-wrap -->

    <div class="copyright">© 2025 An Yu TCM Healthcare Centre · All rights reserved</div>

  </div><!-- /right -->

</div><!-- /page -->

<!-- ══════════════════════════════
     SUCCESS OVERLAY
══════════════════════════════ -->
<div class="success-screen" id="success-screen">
  <div class="success-ring">✓</div>
  <div class="success-title">Signed in successfully</div>
  <div class="success-msg" id="success-msg">Redirecting to dashboard…</div>
  <div class="success-bar-wrap">
    <div class="success-bar" id="success-bar"></div>
  </div>
</div>

<!-- ══════════════════════════════
     FORGOT PASSWORD MODAL
══════════════════════════════ -->
<div class="modal-bg" id="modal-bg" onclick="closeForgotOutside(event)">
  <div class="modal-box">
    <div class="modal-logo">安钰</div>
    <div class="modal-title">Reset password</div>
    <div class="modal-sub">Enter the email address associated with your admin account and we'll send you a password reset link.</div>
    <input class="modal-input" type="email" id="reset-email" placeholder="admin@anyutcm.com.my">
    <div class="modal-btns">
      <button class="modal-btn ghost" onclick="closeForgot()">Cancel</button>
      <button class="modal-btn primary" onclick="sendReset()">Send Reset Link</button>
    </div>
  </div>
</div>

<script>
  let selectedOutlet = 'kepong';
  let remembered = false;
  let pwVisible = false;

  // Restore remembered session
  const savedEmail = localStorage.getItem('anyutcm_email');
  const savedOutlet = localStorage.getItem('anyutcm_outlet');
  if (savedEmail) {
    document.getElementById('email').value = savedEmail;
    remembered = true;
    document.getElementById('check').classList.add('checked');
  }
  if (savedOutlet) {
    // Activate correct pill
    document.querySelectorAll('.outlet-pill').forEach(p => p.classList.remove('active'));
    const map = { kepong: 0, bukitjalil: 1, all: 2 };
    const pills = document.querySelectorAll('.outlet-pill');
    if (pills[map[savedOutlet]]) pills[map[savedOutlet]].classList.add('active');
    selectedOutlet = savedOutlet;
  }

  /* ── Outlet selection ── */
  function setOutlet(el, outlet) {
    document.querySelectorAll('.outlet-pill').forEach(p => p.classList.remove('active'));
    el.classList.add('active');
    selectedOutlet = outlet;
  }

  /* ── Remember ── */
  function toggleRemember() {
    remembered = !remembered;
    document.getElementById('check').classList.toggle('checked', remembered);
  }

  /* ── Password visibility ── */
  function togglePw() {
    pwVisible = !pwVisible;
    document.getElementById('password').type = pwVisible ? 'text' : 'password';
    document.getElementById('eye-show').style.display = pwVisible ? 'none' : 'block';
    document.getElementById('eye-hide').style.display = pwVisible ? 'block' : 'none';
  }

  /* ── Error helpers ── */
  function clearErr(field) {
    document.getElementById(field).classList.remove('has-error');
    document.getElementById(field + '-err').classList.remove('visible');
  }

  function showErr(field, msg) {
    const input = document.getElementById(field);
    const err = document.getElementById(field + '-err');
    if (msg) err.textContent = msg;
    input.classList.add('has-error');
    err.classList.add('visible');
  }

  /* ── Fill demo ── */
  function fill(id, val) {
    document.getElementById(id).value = val;
    clearErr(id);
    // Brief highlight
    const el = document.getElementById(id);
    el.style.borderColor = 'var(--brown-pale)';
    setTimeout(() => el.style.borderColor = '', 600);
  }

  /* ── Login handler ── */
  function handleLogin() {
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const btn = document.getElementById('signin-btn');

    let hasError = false;
    if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      showErr('email', 'Please enter a valid email address.');
      hasError = true;
    }
    if (!password) {
      showErr('password', 'Please enter your password.');
      if (!hasError) document.getElementById('password').focus();
      hasError = true;
    }
    if (hasError) return;

    btn.classList.add('loading');

    setTimeout(() => {
      if (email === 'admin@anyutcm.com.my' && password === 'admin123') {
        // Save if remembered
        if (remembered) {
          localStorage.setItem('anyutcm_email', email);
          localStorage.setItem('anyutcm_outlet', selectedOutlet);
        } else {
          localStorage.removeItem('anyutcm_email');
          localStorage.removeItem('anyutcm_outlet');
        }

        btn.classList.remove('loading');

        const outletLabel = { kepong: 'Kepong Outlet', bukitjalil: 'Bukit Jalil Outlet', all: 'All Outlets' };
        document.getElementById('success-msg').textContent = `${outletLabel[selectedOutlet]} · Redirecting to dashboard…`;

        const screen = document.getElementById('success-screen');
        screen.classList.add('visible');

        // Animate progress bar
        setTimeout(() => {
          document.getElementById('success-bar').style.width = '100%';
        }, 100);

        setTimeout(() => {
          window.location.href = '{{ route("admin.dashboard") }}';
        }, 1900);

      } else {
        btn.classList.remove('loading');
        if (email !== 'admin@anyutcm.com.my') {
          showErr('email', 'No admin account found with this email.');
        } else {
          showErr('password', 'Incorrect password. Please try again.');
        }
      }
    }, 1500);
  }

  /* ── Forgot password ── */
  function openForgot() {
    const emailVal = document.getElementById('email').value;
    if (emailVal) document.getElementById('reset-email').value = emailVal;
    document.getElementById('modal-bg').classList.add('open');
    setTimeout(() => document.getElementById('reset-email').focus(), 300);
  }

  function closeForgot() {
    document.getElementById('modal-bg').classList.remove('open');
  }

  function closeForgotOutside(e) {
    if (e.target === document.getElementById('modal-bg')) closeForgot();
  }

  function sendReset() {
    const email = document.getElementById('reset-email').value.trim();
    if (!email) return;
    closeForgot();
    // Show brief success on the success screen
    document.getElementById('success-msg').textContent = 'Password reset link sent to ' + email;
    document.querySelector('.success-title').textContent = 'Email sent ✓';
    document.getElementById('success-bar').style.transition = 'none';
    document.getElementById('success-bar').style.width = '0';
    const screen = document.getElementById('success-screen');
    screen.classList.add('visible');
    setTimeout(() => {
      document.getElementById('success-bar').style.transition = 'width 2s ease';
      document.getElementById('success-bar').style.width = '100%';
    }, 100);
    setTimeout(() => {
      screen.classList.remove('visible');
      document.querySelector('.success-title').textContent = 'Signed in successfully';
      document.getElementById('success-bar').style.transition = 'none';
      document.getElementById('success-bar').style.width = '0';
    }, 2500);
  }

  // Keyboard shortcut
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeForgot();
  });
</script>
</body>
</html>