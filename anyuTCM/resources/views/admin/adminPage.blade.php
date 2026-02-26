<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>An Yu TCM — Admin Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@400;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&display=swap" rel="stylesheet">
<style>
  :root {
    --brown: #7a3b1e;
    --brown-light: #a05030;
    --brown-pale: #c8905a;
    --cream: #f5f0e8;
    --cream-dark: #ede5d8;
    --cream-darker: #ddd3c0;
    --white: #fdfaf5;
    --text: #3a2010;
    --text-light: #7a5a40;
    --green: #4a7c59;
    --red: #9c3a2a;
    --amber: #b07020;
    --shadow: rgba(90, 40, 10, 0.12);
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--cream);
    color: var(--text);
    min-height: 100vh;
    display: flex;
  }

  /* SIDEBAR */
  .sidebar {
    width: 260px;
    min-height: 100vh;
    background: var(--brown);
    color: var(--cream);
    display: flex;
    flex-direction: column;
    position: fixed;
    top: 0; left: 0;
    z-index: 100;
    box-shadow: 4px 0 20px var(--shadow);
  }

  .sidebar-logo {
    padding: 28px 24px 20px;
    border-bottom: 1px solid rgba(255,255,255,0.12);
    display: flex;
    align-items: center;
    gap: 14px;
  }

  .logo-circle {
    width: 48px; height: 48px;
    border: 2px solid var(--cream-dark);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-family: 'Noto Serif SC', serif;
    font-size: 16px;
    color: var(--cream);
    flex-shrink: 0;
  }

  .logo-text { line-height: 1.2; }
  .logo-text .name {
    font-family: 'Noto Serif SC', serif;
    font-size: 15px;
    font-weight: 600;
    color: var(--cream);
  }
  .logo-text .subtitle {
    font-size: 10px;
    color: var(--brown-pale);
    letter-spacing: 0.08em;
    text-transform: uppercase;
  }

  .outlet-selector {
    margin: 16px 14px;
    background: rgba(255,255,255,0.08);
    border-radius: 10px;
    padding: 4px;
    display: flex;
    gap: 2px;
  }

  .outlet-btn {
    flex: 1;
    padding: 7px 8px;
    border: none;
    background: transparent;
    color: rgba(255,255,255,0.6);
    font-size: 11px;
    font-family: 'DM Sans', sans-serif;
    border-radius: 7px;
    cursor: pointer;
    transition: all 0.2s;
    text-align: center;
    line-height: 1.3;
  }

  .outlet-btn.active {
    background: var(--brown-light);
    color: white;
    font-weight: 500;
  }

  .nav-section {
    padding: 8px 14px 4px;
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: var(--brown-pale);
    margin-top: 8px;
  }

  .nav-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 11px 18px;
    margin: 2px 10px;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.18s;
    color: rgba(255,255,255,0.72);
    font-size: 14px;
    font-weight: 400;
    border: none;
    background: transparent;
    width: calc(100% - 20px);
    text-align: left;
  }

  .nav-item:hover { background: rgba(255,255,255,0.1); color: white; }
  .nav-item.active { background: rgba(255,255,255,0.18); color: white; font-weight: 500; }

  .nav-icon { font-size: 17px; width: 22px; text-align: center; }

  .badge {
    margin-left: auto;
    background: #d44;
    color: white;
    font-size: 10px;
    font-weight: 600;
    padding: 2px 7px;
    border-radius: 20px;
    min-width: 20px;
    text-align: center;
  }

  .sidebar-footer {
    margin-top: auto;
    padding: 16px;
    border-top: 1px solid rgba(255,255,255,0.1);
    font-size: 12px;
    color: var(--brown-pale);
    text-align: center;
  }

  /* MAIN CONTENT */
  .main {
    margin-left: 260px;
    flex: 1;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  .topbar {
    background: var(--white);
    padding: 16px 32px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid var(--cream-darker);
    position: sticky;
    top: 0;
    z-index: 50;
    box-shadow: 0 2px 12px rgba(90,40,10,0.06);
  }

  .topbar-left h1 {
    font-family: 'Noto Serif SC', serif;
    font-size: 20px;
    color: var(--brown);
    font-weight: 600;
  }

  .topbar-left p {
    font-size: 12px;
    color: var(--text-light);
    margin-top: 2px;
  }

  .topbar-right {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .outlet-badge {
    background: var(--cream-dark);
    color: var(--brown);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
    border: 1px solid var(--cream-darker);
  }

  .btn {
    padding: 9px 20px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.2s;
    display: inline-flex;
    align-items: center;
    gap: 7px;
  }

  .btn-primary {
    background: var(--brown);
    color: white;
  }
  .btn-primary:hover { background: var(--brown-light); transform: translateY(-1px); box-shadow: 0 4px 14px rgba(122,59,30,0.3); }

  .btn-outline {
    background: transparent;
    color: var(--brown);
    border: 1.5px solid var(--brown);
  }
  .btn-outline:hover { background: var(--cream-dark); }

  .btn-ghost {
    background: var(--cream-dark);
    color: var(--text);
    border: 1px solid var(--cream-darker);
  }
  .btn-ghost:hover { background: var(--cream-darker); }

  .btn-sm { padding: 6px 13px; font-size: 12px; border-radius: 6px; }

  /* CONTENT */
  .content { padding: 28px 32px; flex: 1; }

  /* STATS CARDS */
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-bottom: 28px;
  }

  .stat-card {
    background: var(--white);
    border-radius: 14px;
    padding: 22px 24px;
    border: 1px solid var(--cream-darker);
    position: relative;
    overflow: hidden;
    transition: transform 0.2s, box-shadow 0.2s;
  }

  .stat-card:hover { transform: translateY(-2px); box-shadow: 0 8px 24px var(--shadow); }

  .stat-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
  }

  .stat-card.blue::before { background: #5b8dd9; }
  .stat-card.green::before { background: var(--green); }
  .stat-card.amber::before { background: var(--amber); }
  .stat-card.red::before { background: var(--red); }

  .stat-icon {
    width: 40px; height: 40px;
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-size: 20px;
    margin-bottom: 14px;
  }

  .stat-card.blue .stat-icon { background: #e8f0fb; }
  .stat-card.green .stat-icon { background: #e8f4ec; }
  .stat-card.amber .stat-icon { background: #faf0e0; }
  .stat-card.red .stat-icon { background: #faebe8; }

  .stat-number {
    font-family: 'Noto Serif SC', serif;
    font-size: 30px;
    font-weight: 700;
    color: var(--text);
    line-height: 1;
    margin-bottom: 6px;
  }

  .stat-label { font-size: 13px; color: var(--text-light); }
  .stat-change { font-size: 11px; margin-top: 8px; }
  .stat-change.up { color: var(--green); }
  .stat-change.down { color: var(--red); }

  /* TWO COLUMN LAYOUT */
  .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px; }
  .three-col { display: grid; grid-template-columns: 2fr 1fr; gap: 20px; margin-bottom: 24px; }

  /* CARDS */
  .card {
    background: var(--white);
    border-radius: 14px;
    border: 1px solid var(--cream-darker);
    overflow: hidden;
  }

  .card-header {
    padding: 20px 24px 16px;
    border-bottom: 1px solid var(--cream-dark);
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .card-title {
    font-family: 'Noto Serif SC', serif;
    font-size: 15px;
    font-weight: 600;
    color: var(--brown);
  }

  .card-body { padding: 20px 24px; }

  /* RESERVATIONS TABLE */
  .table-wrap { overflow-x: auto; }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  thead th {
    text-align: left;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: var(--text-light);
    padding: 0 16px 12px;
    border-bottom: 1px solid var(--cream-dark);
  }

  tbody tr {
    border-bottom: 1px solid var(--cream);
    transition: background 0.15s;
    cursor: pointer;
  }

  tbody tr:hover { background: var(--cream); }

  tbody td {
    padding: 14px 16px;
    font-size: 13.5px;
    color: var(--text);
  }

  .patient-name { font-weight: 500; }
  .patient-phone { font-size: 12px; color: var(--text-light); }

  /* STATUS PILLS */
  .status {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.04em;
  }

  .status::before { content: ''; width: 6px; height: 6px; border-radius: 50%; }
  .status.confirmed { background: #e8f4ec; color: var(--green); }
  .status.confirmed::before { background: var(--green); }
  .status.pending { background: #faf0e0; color: var(--amber); }
  .status.pending::before { background: var(--amber); }
  .status.cancelled { background: #faebe8; color: var(--red); }
  .status.cancelled::before { background: var(--red); }
  .status.completed { background: #eef0f8; color: #4a5ab0; }
  .status.completed::before { background: #4a5ab0; }

  /* SERVICE TYPES */
  .service-tag {
    display: inline-block;
    padding: 3px 10px;
    border-radius: 6px;
    font-size: 11px;
    font-weight: 500;
    background: var(--cream-dark);
    color: var(--brown);
  }

  /* ACTION BUTTONS */
  .action-row { display: flex; gap: 6px; }
  .icon-btn {
    width: 30px; height: 30px;
    border-radius: 6px;
    border: 1px solid var(--cream-darker);
    background: var(--cream);
    cursor: pointer;
    font-size: 14px;
    display: flex; align-items: center; justify-content: center;
    transition: all 0.15s;
  }
  .icon-btn:hover { background: var(--cream-dark); transform: scale(1.05); }
  .icon-btn.danger:hover { background: #faeae8; border-color: #e0b0a8; }

  /* CALENDAR */
  .calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 4px;
    margin-top: 10px;
  }

  .cal-day-label {
    text-align: center;
    font-size: 11px;
    font-weight: 600;
    color: var(--text-light);
    padding: 4px 0;
    text-transform: uppercase;
  }

  .cal-day {
    aspect-ratio: 1;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    cursor: pointer;
    transition: all 0.15s;
    position: relative;
    padding: 2px;
  }

  .cal-day:hover { background: var(--cream-dark); }
  .cal-day.today { background: var(--brown); color: white; font-weight: 600; }
  .cal-day.has-booking::after {
    content: '';
    position: absolute;
    bottom: 3px;
    width: 4px; height: 4px;
    border-radius: 50%;
    background: var(--brown-pale);
  }
  .cal-day.today.has-booking::after { background: white; }
  .cal-day.other-month { color: var(--cream-darker); }
  .cal-day.selected { background: var(--cream-dark); outline: 2px solid var(--brown); }

  /* UPCOMING */
  .upcoming-list { display: flex; flex-direction: column; gap: 10px; }

  .upcoming-item {
    display: flex;
    gap: 14px;
    align-items: flex-start;
    padding: 14px;
    background: var(--cream);
    border-radius: 10px;
    border-left: 3px solid var(--brown-pale);
    transition: all 0.15s;
    cursor: pointer;
  }

  .upcoming-item:hover { background: var(--cream-dark); border-left-color: var(--brown); }

  .upcoming-time {
    font-family: 'Noto Serif SC', serif;
    font-size: 16px;
    font-weight: 700;
    color: var(--brown);
    white-space: nowrap;
    min-width: 50px;
  }

  .upcoming-time span { display: block; font-size: 10px; font-weight: 400; color: var(--text-light); font-family: 'DM Sans', sans-serif; }

  .upcoming-info .name { font-size: 13px; font-weight: 500; color: var(--text); }
  .upcoming-info .detail { font-size: 11px; color: var(--text-light); margin-top: 2px; }

  /* QUICK STATS */
  .outlet-compare {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }

  .outlet-stat {
    background: var(--cream);
    border-radius: 10px;
    padding: 16px;
    text-align: center;
    border: 1px solid var(--cream-darker);
  }

  .outlet-stat .outlet-name {
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: var(--text-light);
    margin-bottom: 8px;
  }

  .outlet-stat .num {
    font-family: 'Noto Serif SC', serif;
    font-size: 24px;
    font-weight: 700;
    color: var(--brown);
  }

  .outlet-stat .sub { font-size: 11px; color: var(--text-light); margin-top: 2px; }

  .progress-bar-wrap { margin-top: 14px; }
  .progress-label { display: flex; justify-content: space-between; font-size: 11px; color: var(--text-light); margin-bottom: 5px; }
  .progress-bar { height: 6px; background: var(--cream-darker); border-radius: 10px; overflow: hidden; }
  .progress-fill { height: 100%; background: var(--brown); border-radius: 10px; transition: width 1s ease; }
  .progress-fill.green { background: var(--green); }

  /* MODAL */
  .modal-overlay {
    display: none;
    position: fixed; inset: 0;
    background: rgba(40, 20, 10, 0.55);
    z-index: 200;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(3px);
  }
  .modal-overlay.open { display: flex; }

  .modal {
    background: var(--white);
    border-radius: 18px;
    width: 540px;
    max-width: 95vw;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 24px 64px rgba(40,20,10,0.25);
    animation: modalIn 0.25s ease;
  }

  @keyframes modalIn {
    from { transform: translateY(20px) scale(0.97); opacity: 0; }
    to { transform: none; opacity: 1; }
  }

  .modal-header {
    padding: 24px 28px 20px;
    border-bottom: 1px solid var(--cream-dark);
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .modal-title {
    font-family: 'Noto Serif SC', serif;
    font-size: 18px;
    color: var(--brown);
  }

  .modal-close {
    width: 32px; height: 32px;
    border-radius: 8px;
    border: 1px solid var(--cream-darker);
    background: var(--cream);
    cursor: pointer;
    font-size: 18px;
    display: flex; align-items: center; justify-content: center;
    transition: all 0.15s;
  }
  .modal-close:hover { background: var(--cream-dark); }

  .modal-body { padding: 24px 28px; }

  .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
  .form-group { margin-bottom: 16px; }

  label {
    display: block;
    font-size: 12px;
    font-weight: 600;
    color: var(--text-light);
    text-transform: uppercase;
    letter-spacing: 0.06em;
    margin-bottom: 6px;
  }

  input, select, textarea {
    width: 100%;
    padding: 10px 13px;
    border: 1.5px solid var(--cream-darker);
    border-radius: 8px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    color: var(--text);
    background: var(--cream);
    transition: border-color 0.2s;
    outline: none;
  }

  input:focus, select:focus, textarea:focus {
    border-color: var(--brown);
    background: var(--white);
  }

  textarea { resize: vertical; min-height: 80px; }

  .modal-footer {
    padding: 16px 28px 24px;
    display: flex;
    gap: 10px;
    justify-content: flex-end;
  }

  /* FILTER ROW */
  .filter-row {
    display: flex;
    gap: 10px;
    align-items: center;
    margin-bottom: 20px;
    flex-wrap: wrap;
  }

  .filter-row input, .filter-row select {
    width: auto;
    padding: 8px 13px;
    font-size: 13px;
  }

  .filter-row input { min-width: 220px; }

  /* TABS */
  .tabs {
    display: flex;
    gap: 4px;
    background: var(--cream-dark);
    padding: 4px;
    border-radius: 10px;
    margin-bottom: 20px;
  }

  .tab-btn {
    flex: 1;
    padding: 9px 16px;
    border: none;
    background: transparent;
    border-radius: 7px;
    cursor: pointer;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    color: var(--text-light);
    font-weight: 500;
    transition: all 0.2s;
  }

  .tab-btn.active {
    background: var(--white);
    color: var(--brown);
    font-weight: 600;
    box-shadow: 0 1px 6px var(--shadow);
  }

  /* SECTION VIEWS */
  .view { display: none; }
  .view.active { display: block; }

  /* NOTIFICATION TOAST */
  .toast {
    position: fixed;
    bottom: 28px; right: 28px;
    background: var(--brown);
    color: white;
    padding: 14px 20px;
    border-radius: 12px;
    font-size: 13px;
    font-weight: 500;
    box-shadow: 0 8px 28px rgba(40,20,10,0.3);
    transform: translateY(80px);
    opacity: 0;
    transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    z-index: 500;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .toast.show { transform: none; opacity: 1; }

  /* SCROLLBAR */
  ::-webkit-scrollbar { width: 6px; height: 6px; }
  ::-webkit-scrollbar-track { background: var(--cream-dark); }
  ::-webkit-scrollbar-thumb { background: var(--brown-pale); border-radius: 10px; }
</style>
</head>
<body>

<!-- SIDEBAR -->
<nav class="sidebar">
  <div class="sidebar-logo">
    <div class="logo-circle">安钰</div>
    <div class="logo-text">
      <div class="name">An Yu TCM</div>
      <div class="subtitle">Admin Dashboard</div>
    </div>
  </div>

  <div class="outlet-selector">
    <button class="outlet-btn active" onclick="switchOutlet(this, 'all')">All Outlets</button>
    <button class="outlet-btn" onclick="switchOutlet(this, 'kepong')">Kepong</button>
    <button class="outlet-btn" onclick="switchOutlet(this, 'bukitjalil')">Bukit Jalil</button>
  </div>

  <div class="nav-section">Menu</div>
  <button class="nav-item active" onclick="showView('dashboard', this)">
    <span class="nav-icon">🏠</span> Dashboard
  </button>
  <button class="nav-item" onclick="showView('reservations', this)">
    <span class="nav-icon">📋</span> Reservations
    <span class="badge">7</span>
  </button>
  <button class="nav-item" onclick="showView('calendar', this)">
    <span class="nav-icon">📅</span> Calendar
  </button>

  <div class="nav-section">Manage</div>
  <button class="nav-item" onclick="showView('practitioners', this)">
    <span class="nav-icon">👨‍⚕️</span> Practitioners
  </button>
  <button class="nav-item" onclick="showView('services', this)">
    <span class="nav-icon">🌿</span> Services
  </button>
  <button class="nav-item" onclick="showView('patients', this)">
    <span class="nav-icon">👥</span> Patients
  </button>

  <div class="nav-section">Reports</div>
  <button class="nav-item" onclick="showView('reports', this)">
    <span class="nav-icon">📊</span> Analytics
  </button>
  <button class="nav-item" onclick="showView('settings', this)">
    <span class="nav-icon">⚙️</span> Settings
  </button>

  <div class="sidebar-footer">
    安钰中医保健中心 © 2025<br>
    <a href="{{ route('admin.login') }}" style="color:var(--brown-pale);font-size:11px;text-decoration:none;margin-top:6px;display:inline-block;">⬅ Logout</a>
  </div>
</nav>

<!-- MAIN -->
<div class="main">
  <div class="topbar">
    <div class="topbar-left">
      <h1 id="page-title">Dashboard</h1>
      <p id="page-sub">Wednesday, 25 February 2026 — All Outlets</p>
    </div>
    <div class="topbar-right">
      <span class="outlet-badge" id="outlet-badge">🏥 All Outlets</span>
      <button class="btn btn-primary" onclick="openModal()">＋ New Reservation</button>
    </div>
  </div>

  <div class="content">

    <!-- DASHBOARD VIEW -->
    <div class="view active" id="view-dashboard">

      <div class="stats-grid">
        <div class="stat-card blue">
          <div class="stat-icon">📋</div>
          <div class="stat-number">42</div>
          <div class="stat-label">Today's Appointments</div>
          <div class="stat-change up">↑ 8% vs yesterday</div>
        </div>
        <div class="stat-card green">
          <div class="stat-icon">✅</div>
          <div class="stat-number">31</div>
          <div class="stat-label">Confirmed</div>
          <div class="stat-change up">↑ 74% confirmation rate</div>
        </div>
        <div class="stat-card amber">
          <div class="stat-icon">⏳</div>
          <div class="stat-number">7</div>
          <div class="stat-label">Pending Approval</div>
          <div class="stat-change">Needs attention</div>
        </div>
        <div class="stat-card red">
          <div class="stat-icon">❌</div>
          <div class="stat-number">4</div>
          <div class="stat-label">Cancellations</div>
          <div class="stat-change down">↑ 2 from yesterday</div>
        </div>
      </div>

      <div class="three-col">
        <!-- UPCOMING TODAY -->
        <div class="card">
          <div class="card-header">
            <span class="card-title">Today's Schedule</span>
            <div style="display:flex;gap:8px;align-items:center">
              <select style="width:auto;padding:5px 10px;font-size:12px;">
                <option>All Outlets</option>
                <option>Kepong</option>
                <option>Bukit Jalil</option>
              </select>
            </div>
          </div>
          <div class="card-body" style="padding:16px;">
            <div class="upcoming-list">
              <div class="upcoming-item">
                <div class="upcoming-time">9:00 <span>AM</span></div>
                <div class="upcoming-info">
                  <div class="name">Tan Wei Ming</div>
                  <div class="detail">Acupuncture · Dr. Lim · Kepong</div>
                </div>
                <span class="status confirmed" style="margin-left:auto;flex-shrink:0">Confirmed</span>
              </div>
              <div class="upcoming-item">
                <div class="upcoming-time">9:30 <span>AM</span></div>
                <div class="upcoming-info">
                  <div class="name">Siti Rahimah</div>
                  <div class="detail">Cupping · Dr. Wong · Bukit Jalil</div>
                </div>
                <span class="status confirmed" style="margin-left:auto;flex-shrink:0">Confirmed</span>
              </div>
              <div class="upcoming-item">
                <div class="upcoming-time">10:00 <span>AM</span></div>
                <div class="upcoming-info">
                  <div class="name">Ahmad Razif</div>
                  <div class="detail">Tuina Massage · Dr. Chen · Kepong</div>
                </div>
                <span class="status pending" style="margin-left:auto;flex-shrink:0">Pending</span>
              </div>
              <div class="upcoming-item">
                <div class="upcoming-time">10:30 <span>AM</span></div>
                <div class="upcoming-info">
                  <div class="name">Lee Hui Ling</div>
                  <div class="detail">Herbal Consult · Dr. Lim · Kepong</div>
                </div>
                <span class="status confirmed" style="margin-left:auto;flex-shrink:0">Confirmed</span>
              </div>
              <div class="upcoming-item">
                <div class="upcoming-time">11:00 <span>AM</span></div>
                <div class="upcoming-info">
                  <div class="name">Priya Nair</div>
                  <div class="detail">Acupuncture · Dr. Wong · Bukit Jalil</div>
                </div>
                <span class="status confirmed" style="margin-left:auto;flex-shrink:0">Confirmed</span>
              </div>
              <div class="upcoming-item">
                <div class="upcoming-time">2:00 <span>PM</span></div>
                <div class="upcoming-info">
                  <div class="name">David Chong</div>
                  <div class="detail">Moxibustion · Dr. Chen · Kepong</div>
                </div>
                <span class="status pending" style="margin-left:auto;flex-shrink:0">Pending</span>
              </div>
            </div>
          </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div style="display:flex;flex-direction:column;gap:20px;">
          <!-- OUTLET COMPARE -->
          <div class="card">
            <div class="card-header"><span class="card-title">Outlet Comparison</span></div>
            <div class="card-body">
              <div class="outlet-compare">
                <div class="outlet-stat">
                  <div class="outlet-name">Kepong</div>
                  <div class="num">24</div>
                  <div class="sub">appointments today</div>
                </div>
                <div class="outlet-stat">
                  <div class="outlet-name">Bukit Jalil</div>
                  <div class="num">18</div>
                  <div class="sub">appointments today</div>
                </div>
              </div>

              <div class="progress-bar-wrap" style="margin-top:16px;">
                <div class="progress-label"><span>Kepong occupancy</span><span>80%</span></div>
                <div class="progress-bar"><div class="progress-fill" style="width:80%"></div></div>
              </div>
              <div class="progress-bar-wrap">
                <div class="progress-label"><span>Bukit Jalil occupancy</span><span>60%</span></div>
                <div class="progress-bar"><div class="progress-fill green" style="width:60%"></div></div>
              </div>
            </div>
          </div>

          <!-- PENDING ACTION -->
          <div class="card">
            <div class="card-header">
              <span class="card-title">Pending Actions</span>
              <span class="badge" style="background:#b07020;">7</span>
            </div>
            <div class="card-body" style="padding:12px;">
              <div style="display:flex;flex-direction:column;gap:8px;">
                <div style="display:flex;align-items:center;justify-content:space-between;padding:10px 12px;background:var(--cream);border-radius:8px;">
                  <div>
                    <div style="font-size:13px;font-weight:500;">Farah Abdullah</div>
                    <div style="font-size:11px;color:var(--text-light);">Acupuncture · 3:00 PM · Kepong</div>
                  </div>
                  <div style="display:flex;gap:6px;">
                    <button class="btn btn-sm" style="background:#e8f4ec;color:var(--green);border:none;padding:5px 10px;border-radius:6px;cursor:pointer;" onclick="showToast('✅ Confirmed!')">✓</button>
                    <button class="btn btn-sm" style="background:#faeae8;color:var(--red);border:none;padding:5px 10px;border-radius:6px;cursor:pointer;" onclick="showToast('❌ Declined')">✕</button>
                  </div>
                </div>
                <div style="display:flex;align-items:center;justify-content:space-between;padding:10px 12px;background:var(--cream);border-radius:8px;">
                  <div>
                    <div style="font-size:13px;font-weight:500;">Jason Ong</div>
                    <div style="font-size:11px;color:var(--text-light);">Tuina · 4:30 PM · Bukit Jalil</div>
                  </div>
                  <div style="display:flex;gap:6px;">
                    <button class="btn btn-sm" style="background:#e8f4ec;color:var(--green);border:none;padding:5px 10px;border-radius:6px;cursor:pointer;" onclick="showToast('✅ Confirmed!')">✓</button>
                    <button class="btn btn-sm" style="background:#faeae8;color:var(--red);border:none;padding:5px 10px;border-radius:6px;cursor:pointer;" onclick="showToast('❌ Declined')">✕</button>
                  </div>
                </div>
                <div style="display:flex;align-items:center;justify-content:space-between;padding:10px 12px;background:var(--cream);border-radius:8px;">
                  <div>
                    <div style="font-size:13px;font-weight:500;">Nurul Ain</div>
                    <div style="font-size:11px;color:var(--text-light);">Herbal · 5:00 PM · Kepong</div>
                  </div>
                  <div style="display:flex;gap:6px;">
                    <button class="btn btn-sm" style="background:#e8f4ec;color:var(--green);border:none;padding:5px 10px;border-radius:6px;cursor:pointer;" onclick="showToast('✅ Confirmed!')">✓</button>
                    <button class="btn btn-sm" style="background:#faeae8;color:var(--red);border:none;padding:5px 10px;border-radius:6px;cursor:pointer;" onclick="showToast('❌ Declined')">✕</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- RESERVATIONS VIEW -->
    <div class="view" id="view-reservations">
      <div class="filter-row">
        <input type="text" placeholder="🔍 Search patient, phone...">
        <select>
          <option>All Outlets</option>
          <option>Kepong</option>
          <option>Bukit Jalil</option>
        </select>
        <select>
          <option>All Status</option>
          <option>Confirmed</option>
          <option>Pending</option>
          <option>Cancelled</option>
          <option>Completed</option>
        </select>
        <input type="date" value="2026-02-25" style="width:auto;">
        <button class="btn btn-primary" onclick="openModal()">＋ New Reservation</button>
      </div>

      <div class="card">
        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>Patient</th>
                <th>Date & Time</th>
                <th>Service</th>
                <th>Practitioner</th>
                <th>Outlet</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="reservations-tbody">
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- CALENDAR VIEW -->
    <div class="view" id="view-calendar">
      <div class="two-col">
        <div class="card">
          <div class="card-header">
            <button class="icon-btn" onclick="changeMonth(-1)">‹</button>
            <span class="card-title" id="cal-month-label">February 2026</span>
            <button class="icon-btn" onclick="changeMonth(1)">›</button>
          </div>
          <div class="card-body">
            <div class="calendar-grid">
              <div class="cal-day-label">Sun</div>
              <div class="cal-day-label">Mon</div>
              <div class="cal-day-label">Tue</div>
              <div class="cal-day-label">Wed</div>
              <div class="cal-day-label">Thu</div>
              <div class="cal-day-label">Fri</div>
              <div class="cal-day-label">Sat</div>
            </div>
            <div class="calendar-grid" id="calendar-days"></div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <span class="card-title" id="cal-selected-label">25 February 2026</span>
            <button class="btn btn-primary btn-sm" onclick="openModal()">＋ Add</button>
          </div>
          <div class="card-body" style="padding:14px;">
            <div class="upcoming-list" id="cal-day-list"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- PRACTITIONERS VIEW -->
    <div class="view" id="view-practitioners">
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;">
        <div class="card" style="text-align:center;padding:24px;">
          <div style="width:70px;height:70px;border-radius:50%;background:var(--cream-dark);display:flex;align-items:center;justify-content:center;font-size:30px;margin:0 auto 12px;">👨‍⚕️</div>
          <div style="font-family:'Noto Serif SC',serif;font-size:16px;font-weight:600;color:var(--brown);">Dr. Lim Kah Wai</div>
          <div style="font-size:12px;color:var(--text-light);margin:4px 0 12px;">Senior Physician · Kepong</div>
          <div style="display:flex;justify-content:center;gap:6px;flex-wrap:wrap;">
            <span class="service-tag">Acupuncture</span>
            <span class="service-tag">Herbal Medicine</span>
          </div>
          <div style="display:flex;justify-content:space-between;margin-top:14px;padding-top:14px;border-top:1px solid var(--cream-dark);">
            <div style="text-align:center;"><div style="font-size:18px;font-weight:700;color:var(--brown);">12</div><div style="font-size:11px;color:var(--text-light);">Today</div></div>
            <div style="text-align:center;"><div style="font-size:18px;font-weight:700;color:var(--brown);">86</div><div style="font-size:11px;color:var(--text-light);">This week</div></div>
            <div style="text-align:center;"><div style="font-size:18px;font-weight:700;color:var(--green);">●</div><div style="font-size:11px;color:var(--text-light);">Available</div></div>
          </div>
        </div>
        <div class="card" style="text-align:center;padding:24px;">
          <div style="width:70px;height:70px;border-radius:50%;background:var(--cream-dark);display:flex;align-items:center;justify-content:center;font-size:30px;margin:0 auto 12px;">👩‍⚕️</div>
          <div style="font-family:'Noto Serif SC',serif;font-size:16px;font-weight:600;color:var(--brown);">Dr. Wong Mei Ling</div>
          <div style="font-size:12px;color:var(--text-light);margin:4px 0 12px;">Physician · Bukit Jalil</div>
          <div style="display:flex;justify-content:center;gap:6px;flex-wrap:wrap;">
            <span class="service-tag">Cupping</span>
            <span class="service-tag">Acupuncture</span>
          </div>
          <div style="display:flex;justify-content:space-between;margin-top:14px;padding-top:14px;border-top:1px solid var(--cream-dark);">
            <div style="text-align:center;"><div style="font-size:18px;font-weight:700;color:var(--brown);">9</div><div style="font-size:11px;color:var(--text-light);">Today</div></div>
            <div style="text-align:center;"><div style="font-size:18px;font-weight:700;color:var(--brown);">61</div><div style="font-size:11px;color:var(--text-light);">This week</div></div>
            <div style="text-align:center;"><div style="font-size:18px;font-weight:700;color:var(--amber);">●</div><div style="font-size:11px;color:var(--text-light);">Busy</div></div>
          </div>
        </div>
        <div class="card" style="text-align:center;padding:24px;">
          <div style="width:70px;height:70px;border-radius:50%;background:var(--cream-dark);display:flex;align-items:center;justify-content:center;font-size:30px;margin:0 auto 12px;">👨‍⚕️</div>
          <div style="font-family:'Noto Serif SC',serif;font-size:16px;font-weight:600;color:var(--brown);">Dr. Chen Xiao Fang</div>
          <div style="font-size:12px;color:var(--text-light);margin:4px 0 12px;">Physician · Kepong</div>
          <div style="display:flex;justify-content:center;gap:6px;flex-wrap:wrap;">
            <span class="service-tag">Tuina</span>
            <span class="service-tag">Moxibustion</span>
          </div>
          <div style="display:flex;justify-content:space-between;margin-top:14px;padding-top:14px;border-top:1px solid var(--cream-dark);">
            <div style="text-align:center;"><div style="font-size:18px;font-weight:700;color:var(--brown);">8</div><div style="font-size:11px;color:var(--text-light);">Today</div></div>
            <div style="text-align:center;"><div style="font-size:18px;font-weight:700;color:var(--brown);">54</div><div style="font-size:11px;color:var(--text-light);">This week</div></div>
            <div style="text-align:center;"><div style="font-size:18px;font-weight:700;color:var(--green);">●</div><div style="font-size:11px;color:var(--text-light);">Available</div></div>
          </div>
        </div>
      </div>
    </div>

    <!-- SERVICES VIEW -->
    <div class="view" id="view-services">
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;">
        <div class="card">
          <div class="card-body">
            <div style="font-size:28px;margin-bottom:10px;">🪡</div>
            <div style="font-family:'Noto Serif SC',serif;font-size:15px;font-weight:600;color:var(--brown);margin-bottom:4px;">Acupuncture</div>
            <div style="font-size:12px;color:var(--text-light);margin-bottom:12px;">针灸 · 45-60 min</div>
            <div style="display:flex;justify-content:space-between;align-items:center;">
              <span style="font-size:16px;font-weight:600;color:var(--text);">RM 80 – 120</span>
              <span class="service-tag">Both outlets</span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div style="font-size:28px;margin-bottom:10px;">🫙</div>
            <div style="font-family:'Noto Serif SC',serif;font-size:15px;font-weight:600;color:var(--brown);margin-bottom:4px;">Cupping Therapy</div>
            <div style="font-size:12px;color:var(--text-light);margin-bottom:12px;">拔罐 · 30-45 min</div>
            <div style="display:flex;justify-content:space-between;align-items:center;">
              <span style="font-size:16px;font-weight:600;color:var(--text);">RM 60 – 90</span>
              <span class="service-tag">Both outlets</span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div style="font-size:28px;margin-bottom:10px;">🤲</div>
            <div style="font-family:'Noto Serif SC',serif;font-size:15px;font-weight:600;color:var(--brown);margin-bottom:4px;">Tuina Massage</div>
            <div style="font-size:12px;color:var(--text-light);margin-bottom:12px;">推拿 · 45-60 min</div>
            <div style="display:flex;justify-content:space-between;align-items:center;">
              <span style="font-size:16px;font-weight:600;color:var(--text);">RM 70 – 100</span>
              <span class="service-tag">Kepong only</span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div style="font-size:28px;margin-bottom:10px;">🌿</div>
            <div style="font-family:'Noto Serif SC',serif;font-size:15px;font-weight:600;color:var(--brown);margin-bottom:4px;">Herbal Consultation</div>
            <div style="font-size:12px;color:var(--text-light);margin-bottom:12px;">中药 · 30-45 min</div>
            <div style="display:flex;justify-content:space-between;align-items:center;">
              <span style="font-size:16px;font-weight:600;color:var(--text);">RM 50 – 80</span>
              <span class="service-tag">Both outlets</span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div style="font-size:28px;margin-bottom:10px;">🔥</div>
            <div style="font-family:'Noto Serif SC',serif;font-size:15px;font-weight:600;color:var(--brown);margin-bottom:4px;">Moxibustion</div>
            <div style="font-size:12px;color:var(--text-light);margin-bottom:12px;">艾灸 · 30 min</div>
            <div style="display:flex;justify-content:space-between;align-items:center;">
              <span style="font-size:16px;font-weight:600;color:var(--text);">RM 50 – 70</span>
              <span class="service-tag">Both outlets</span>
            </div>
          </div>
        </div>
        <div class="card" style="border:2px dashed var(--cream-darker);display:flex;align-items:center;justify-content:center;min-height:130px;cursor:pointer;" onclick="showToast('Service editor coming soon')">
          <div style="text-align:center;color:var(--text-light);">
            <div style="font-size:28px;margin-bottom:8px;">＋</div>
            <div style="font-size:13px;">Add New Service</div>
          </div>
        </div>
      </div>
    </div>

    <!-- PATIENTS VIEW -->
    <div class="view" id="view-patients">
      <div class="filter-row">
        <input type="text" placeholder="🔍 Search patient name or phone...">
        <select><option>All Outlets</option><option>Kepong</option><option>Bukit Jalil</option></select>
        <button class="btn btn-primary btn-sm">＋ Add Patient</button>
      </div>
      <div class="card">
        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>Patient Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Primary Outlet</th>
                <th>Total Visits</th>
                <th>Last Visit</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr><td><div class="patient-name">Tan Wei Ming</div></td><td>+60 12-345 6789</td><td>tanweiming@gmail.com</td><td>Kepong</td><td>14</td><td>25 Feb 2026</td><td><div class="action-row"><button class="icon-btn">👁</button><button class="icon-btn">✏️</button></div></td></tr>
              <tr><td><div class="patient-name">Siti Rahimah</div></td><td>+60 11-234 5678</td><td>siti.rahimah@yahoo.com</td><td>Bukit Jalil</td><td>8</td><td>24 Feb 2026</td><td><div class="action-row"><button class="icon-btn">👁</button><button class="icon-btn">✏️</button></div></td></tr>
              <tr><td><div class="patient-name">Ahmad Razif</div></td><td>+60 13-456 7890</td><td>ahmad.razif@hotmail.com</td><td>Kepong</td><td>3</td><td>25 Feb 2026</td><td><div class="action-row"><button class="icon-btn">👁</button><button class="icon-btn">✏️</button></div></td></tr>
              <tr><td><div class="patient-name">Lee Hui Ling</div></td><td>+60 16-567 8901</td><td>leehiling@gmail.com</td><td>Kepong</td><td>22</td><td>25 Feb 2026</td><td><div class="action-row"><button class="icon-btn">👁</button><button class="icon-btn">✏️</button></div></td></tr>
              <tr><td><div class="patient-name">Priya Nair</div></td><td>+60 17-678 9012</td><td>priya.nair@gmail.com</td><td>Bukit Jalil</td><td>6</td><td>25 Feb 2026</td><td><div class="action-row"><button class="icon-btn">👁</button><button class="icon-btn">✏️</button></div></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- REPORTS VIEW -->
    <div class="view" id="view-reports">
      <div class="stats-grid">
        <div class="stat-card blue"><div class="stat-icon">📅</div><div class="stat-number">312</div><div class="stat-label">This Month</div><div class="stat-change up">↑ 12% vs last month</div></div>
        <div class="stat-card green"><div class="stat-icon">💰</div><div class="stat-number">RM 28,460</div><div class="stat-label">Monthly Revenue</div><div class="stat-change up">↑ 9.3%</div></div>
        <div class="stat-card amber"><div class="stat-icon">👥</div><div class="stat-number">143</div><div class="stat-label">Unique Patients</div><div class="stat-change up">↑ 18 new</div></div>
        <div class="stat-card red"><div class="stat-icon">📉</div><div class="stat-number">6.4%</div><div class="stat-label">No-show Rate</div><div class="stat-change down">↑ 1.2%</div></div>
      </div>
      <div class="two-col">
        <div class="card">
          <div class="card-header"><span class="card-title">Revenue by Outlet — Feb 2026</span></div>
          <div class="card-body">
            <div style="display:flex;flex-direction:column;gap:16px;">
              <div>
                <div class="progress-label"><span>Kepong</span><span>RM 16,240 (57%)</span></div>
                <div class="progress-bar" style="height:10px;"><div class="progress-fill" style="width:57%"></div></div>
              </div>
              <div>
                <div class="progress-label"><span>Bukit Jalil</span><span>RM 12,220 (43%)</span></div>
                <div class="progress-bar" style="height:10px;"><div class="progress-fill green" style="width:43%"></div></div>
              </div>
            </div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-top:20px;">
              <div style="background:var(--cream);border-radius:10px;padding:14px;text-align:center;">
                <div style="font-family:'Noto Serif SC',serif;font-size:22px;font-weight:700;color:var(--brown);">RM 91</div>
                <div style="font-size:12px;color:var(--text-light);">Avg. transaction</div>
              </div>
              <div style="background:var(--cream);border-radius:10px;padding:14px;text-align:center;">
                <div style="font-family:'Noto Serif SC',serif;font-size:22px;font-weight:700;color:var(--brown);">93.6%</div>
                <div style="font-size:12px;color:var(--text-light);">Show-up rate</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header"><span class="card-title">Popular Services</span></div>
          <div class="card-body">
            <div style="display:flex;flex-direction:column;gap:12px;">
              <div><div class="progress-label"><span>🪡 Acupuncture</span><span>38%</span></div><div class="progress-bar"><div class="progress-fill" style="width:38%"></div></div></div>
              <div><div class="progress-label"><span>🤲 Tuina Massage</span><span>24%</span></div><div class="progress-bar"><div class="progress-fill" style="width:24%"></div></div></div>
              <div><div class="progress-label"><span>🫙 Cupping</span><span>20%</span></div><div class="progress-bar"><div class="progress-fill" style="width:20%;background:var(--amber)"></div></div></div>
              <div><div class="progress-label"><span>🌿 Herbal Consult</span><span>13%</span></div><div class="progress-bar"><div class="progress-fill green" style="width:13%"></div></div></div>
              <div><div class="progress-label"><span>🔥 Moxibustion</span><span>5%</span></div><div class="progress-bar"><div class="progress-fill" style="width:5%;background:var(--red)"></div></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SETTINGS VIEW -->
    <div class="view" id="view-settings">
      <div class="two-col">
        <div class="card">
          <div class="card-header"><span class="card-title">Outlet Settings</span></div>
          <div class="card-body">
            <div class="tabs">
              <button class="tab-btn active" onclick="switchTab(this)">An Yu TCM Kepong</button>
              <button class="tab-btn" onclick="switchTab(this)">An Yu TCM Bukit Jalil</button>
            </div>
            <div class="form-group"><label>Outlet Name</label><input type="text" value="An Yu TCM Healthcare Centre Kepong"></div>
            <div class="form-group"><label>Address</label><textarea>G-12, Jalan Kepong Baru, 52100 Kepong, Kuala Lumpur</textarea></div>
            <div class="form-row">
              <div class="form-group"><label>Opening Time</label><input type="time" value="09:00"></div>
              <div class="form-group"><label>Closing Time</label><input type="time" value="18:00"></div>
            </div>
            <div class="form-group"><label>Contact Phone</label><input type="text" value="+60 3-6250 1234"></div>
            <div class="form-group"><label>Email</label><input type="email" value="kepong@anyutcm.com.my"></div>

            <!-- Mobile View Toggle -->
            <div style="margin-top:20px;padding-top:20px;border-top:1px solid var(--cream-dark);">
              <div style="display:flex;align-items:center;justify-content:space-between;">
                <div>
                  <div style="font-size:13px;font-weight:600;color:var(--text);margin-bottom:3px;">Mobile View Mode</div>
                  <div style="font-size:12px;color:var(--text-light);">Switch homepage to mobile-optimised layout</div>
                </div>
                <label style="position:relative;display:inline-block;width:48px;height:26px;cursor:pointer;">
                  <input type="checkbox" id="mobile-view-toggle" style="opacity:0;width:0;height:0;position:absolute;" onchange="toggleMobileView(this)">
                  <span id="mobile-view-slider" style="position:absolute;inset:0;background:var(--cream-darker);border-radius:26px;transition:background 0.25s;"></span>
                  <span id="mobile-view-knob" style="position:absolute;top:3px;left:3px;width:20px;height:20px;background:white;border-radius:50%;transition:transform 0.25s;box-shadow:0 1px 4px rgba(0,0,0,0.2);"></span>
                </label>
              </div>
              <div id="mobile-view-status" style="font-size:11px;color:var(--text-light);margin-top:8px;">Status: <strong>Desktop View</strong></div>
            </div>

            <button class="btn btn-primary" style="margin-top:20px;" onclick="showToast('✅ Settings saved!')">Save Changes</button>
          </div>
        </div>
        <div class="card">
          <div class="card-header"><span class="card-title">Booking Rules</span></div>
          <div class="card-body">
            <div class="form-group"><label>Advance Booking (days)</label><input type="number" value="30"></div>
            <div class="form-group"><label>Min. Notice (hours)</label><input type="number" value="2"></div>
            <div class="form-group"><label>Appointment Slot Duration</label>
              <select>
                <option>30 minutes</option>
                <option selected>45 minutes</option>
                <option>60 minutes</option>
              </select>
            </div>
            <div class="form-group"><label>Max Appointments per Day per Practitioner</label><input type="number" value="15"></div>
            <div class="form-group"><label>Auto-confirm Reservations</label>
              <select>
                <option>No — Manual approval required</option>
                <option>Yes — Auto-confirm all</option>
              </select>
            </div>
            <button class="btn btn-primary" onclick="showToast('✅ Rules saved!')">Save Rules</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- NEW RESERVATION MODAL -->
<div class="modal-overlay" id="modal">
  <div class="modal">
    <div class="modal-header">
      <span class="modal-title">New Reservation</span>
      <button class="modal-close" onclick="closeModal()">×</button>
    </div>
    <div class="modal-body">
      <div class="form-row">
        <div class="form-group">
          <label>Patient Name</label>
          <input type="text" placeholder="Full name">
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="tel" placeholder="+60 12-345 6789">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label>Outlet</label>
          <select>
            <option>An Yu TCM Kepong</option>
            <option>An Yu TCM Bukit Jalil</option>
          </select>
        </div>
        <div class="form-group">
          <label>Service</label>
          <select>
            <option>Acupuncture (针灸)</option>
            <option>Cupping Therapy (拔罐)</option>
            <option>Tuina Massage (推拿)</option>
            <option>Herbal Consultation (中药)</option>
            <option>Moxibustion (艾灸)</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label>Practitioner</label>
          <select>
            <option>Dr. Lim Kah Wai</option>
            <option>Dr. Wong Mei Ling</option>
            <option>Dr. Chen Xiao Fang</option>
          </select>
        </div>
        <div class="form-group">
          <label>Status</label>
          <select>
            <option>Pending</option>
            <option>Confirmed</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label>Date</label>
          <input type="date" value="2026-02-25">
        </div>
        <div class="form-group">
          <label>Time</label>
          <input type="time" value="09:00">
        </div>
      </div>
      <div class="form-group">
        <label>Notes / Symptoms</label>
        <textarea placeholder="Any special requirements, symptoms or notes..."></textarea>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-ghost" onclick="closeModal()">Cancel</button>
      <button class="btn btn-primary" onclick="saveReservation()">Save Reservation</button>
    </div>
  </div>
</div>

<!-- TOAST -->
<div class="toast" id="toast"></div>

<script>
  // Sample data
  const reservations = [
    { id: 1, name: 'Tan Wei Ming', phone: '+60 12-345 6789', date: '25 Feb 2026', time: '9:00 AM', service: 'Acupuncture', practitioner: 'Dr. Lim', outlet: 'Kepong', status: 'confirmed' },
    { id: 2, name: 'Siti Rahimah', phone: '+60 11-234 5678', date: '25 Feb 2026', time: '9:30 AM', service: 'Cupping', practitioner: 'Dr. Wong', outlet: 'Bukit Jalil', status: 'confirmed' },
    { id: 3, name: 'Ahmad Razif', phone: '+60 13-456 7890', date: '25 Feb 2026', time: '10:00 AM', service: 'Tuina Massage', practitioner: 'Dr. Chen', outlet: 'Kepong', status: 'pending' },
    { id: 4, name: 'Lee Hui Ling', phone: '+60 16-567 8901', date: '25 Feb 2026', time: '10:30 AM', service: 'Herbal Consult', practitioner: 'Dr. Lim', outlet: 'Kepong', status: 'confirmed' },
    { id: 5, name: 'Priya Nair', phone: '+60 17-678 9012', date: '25 Feb 2026', time: '11:00 AM', service: 'Acupuncture', practitioner: 'Dr. Wong', outlet: 'Bukit Jalil', status: 'confirmed' },
    { id: 6, name: 'David Chong', phone: '+60 18-789 0123', date: '25 Feb 2026', time: '2:00 PM', service: 'Moxibustion', practitioner: 'Dr. Chen', outlet: 'Kepong', status: 'pending' },
    { id: 7, name: 'Farah Abdullah', phone: '+60 19-890 1234', date: '25 Feb 2026', time: '3:00 PM', service: 'Acupuncture', practitioner: 'Dr. Lim', outlet: 'Kepong', status: 'pending' },
    { id: 8, name: 'Jason Ong', phone: '+60 12-901 2345', date: '25 Feb 2026', time: '4:30 PM', service: 'Tuina Massage', practitioner: 'Dr. Wong', outlet: 'Bukit Jalil', status: 'pending' },
    { id: 9, name: 'Michelle Tan', phone: '+60 11-012 3456', date: '24 Feb 2026', time: '9:00 AM', service: 'Cupping', practitioner: 'Dr. Chen', outlet: 'Kepong', status: 'completed' },
    { id: 10, name: 'Rajesh Kumar', phone: '+60 13-123 4567', date: '24 Feb 2026', time: '11:00 AM', service: 'Acupuncture', practitioner: 'Dr. Lim', outlet: 'Bukit Jalil', status: 'cancelled' },
  ];

  // Render reservations table
  function renderTable() {
    const tbody = document.getElementById('reservations-tbody');
    tbody.innerHTML = reservations.map(r => `
      <tr onclick="showToast('Viewing ${r.name}\'s reservation')">
        <td>
          <div class="patient-name">${r.name}</div>
          <div class="patient-phone">${r.phone}</div>
        </td>
        <td>${r.date}<br><span style="font-size:12px;color:var(--text-light)">${r.time}</span></td>
        <td><span class="service-tag">${r.service}</span></td>
        <td>${r.practitioner}</td>
        <td>${r.outlet}</td>
        <td><span class="status ${r.status}">${r.status}</span></td>
        <td onclick="event.stopPropagation()">
          <div class="action-row">
            <button class="icon-btn" title="View" onclick="showToast('Viewing reservation #${r.id}')">👁</button>
            <button class="icon-btn" title="Edit" onclick="showToast('Editing reservation #${r.id}')">✏️</button>
            <button class="icon-btn danger" title="Cancel" onclick="showToast('Cancelled reservation #${r.id}')">🗑</button>
          </div>
        </td>
      </tr>
    `).join('');
  }

  renderTable();

  // NAVIGATION
  function showView(viewId, btn) {
    document.querySelectorAll('.view').forEach(v => v.classList.remove('active'));
    document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
    document.getElementById('view-' + viewId).classList.add('active');
    if (btn) btn.classList.add('active');

    const titles = { dashboard: 'Dashboard', reservations: 'Reservations', calendar: 'Calendar', practitioners: 'Practitioners', services: 'Services', patients: 'Patients', reports: 'Analytics', settings: 'Settings' };
    document.getElementById('page-title').textContent = titles[viewId] || viewId;
  }

  // OUTLET SWITCH
  function switchOutlet(btn, outlet) {
    document.querySelectorAll('.outlet-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const labels = { all: 'All Outlets', kepong: 'Kepong', bukitjalil: 'Bukit Jalil' };
    const badge = { all: '🏥 All Outlets', kepong: '📍 Kepong', bukitjalil: '📍 Bukit Jalil' };
    document.getElementById('outlet-badge').textContent = badge[outlet];
    document.getElementById('page-sub').textContent = `Wednesday, 25 February 2026 — ${labels[outlet]}`;
    showToast(`Switched to ${labels[outlet]}`);
  }

  // MODAL
  function openModal() {
    document.getElementById('modal').classList.add('open');
  }

  function closeModal() {
    document.getElementById('modal').classList.remove('open');
  }

  document.getElementById('modal').addEventListener('click', function(e) {
    if (e.target === this) closeModal();
  });

  function saveReservation() {
    closeModal();
    showToast('✅ Reservation saved successfully!');
  }

  // TOAST
  function showToast(msg) {
    const t = document.getElementById('toast');
    t.textContent = msg;
    t.classList.add('show');
    setTimeout(() => t.classList.remove('show'), 2500);
  }

  // TAB SWITCH
  function switchTab(btn) {
    btn.closest('.tabs').querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  }

  // CALENDAR
  let calDate = new Date(2026, 1, 1); // Feb 2026
  const bookedDays = [2, 5, 7, 8, 10, 12, 14, 15, 17, 19, 20, 22, 23, 24, 25, 26, 27, 28];

  function renderCalendar() {
    const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    document.getElementById('cal-month-label').textContent = `${months[calDate.getMonth()]} ${calDate.getFullYear()}`;

    const firstDay = new Date(calDate.getFullYear(), calDate.getMonth(), 1).getDay();
    const daysInMonth = new Date(calDate.getFullYear(), calDate.getMonth() + 1, 0).getDate();
    const prevDays = new Date(calDate.getFullYear(), calDate.getMonth(), 0).getDate();

    let html = '';
    for (let i = firstDay - 1; i >= 0; i--) {
      html += `<div class="cal-day other-month">${prevDays - i}</div>`;
    }
    for (let d = 1; d <= daysInMonth; d++) {
      const isToday = d === 25 && calDate.getMonth() === 1 && calDate.getFullYear() === 2026;
      const hasBooking = bookedDays.includes(d);
      html += `<div class="cal-day ${isToday ? 'today' : ''} ${hasBooking ? 'has-booking' : ''}" onclick="selectDay(${d})">${d}</div>`;
    }
    document.getElementById('calendar-days').innerHTML = html;
    selectDay(25);
  }

  function selectDay(d) {
    document.querySelectorAll('#calendar-days .cal-day').forEach(el => el.classList.remove('selected'));
    const days = document.querySelectorAll('#calendar-days .cal-day:not(.other-month)');
    if (days[d - 1]) days[d - 1].classList.add('selected');

    const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    document.getElementById('cal-selected-label').textContent = `${d} ${months[calDate.getMonth()]} ${calDate.getFullYear()}`;

    const dayRes = reservations.filter(r => r.date.startsWith(d + ' Feb'));
    const list = document.getElementById('cal-day-list');
    if (dayRes.length === 0) {
      list.innerHTML = `<div style="text-align:center;color:var(--text-light);padding:20px;font-size:13px;">No appointments</div>`;
    } else {
      list.innerHTML = dayRes.map(r => `
        <div class="upcoming-item">
          <div class="upcoming-time">${r.time.split(' ')[0]} <span>${r.time.split(' ')[1]}</span></div>
          <div class="upcoming-info">
            <div class="name">${r.name}</div>
            <div class="detail">${r.service} · ${r.practitioner} · ${r.outlet}</div>
          </div>
          <span class="status ${r.status}">${r.status}</span>
        </div>
      `).join('');
    }
  }

  function changeMonth(dir) {
    calDate.setMonth(calDate.getMonth() + dir);
    renderCalendar();
  }

  renderCalendar();

  // MOBILE VIEW TOGGLE
  (function initMobileToggle() {
    const enabled = {{ \Illuminate\Support\Facades\Cache::get('mobile_view_enabled', false) ? 'true' : 'false' }};
    const toggle = document.getElementById('mobile-view-toggle');
    const slider = document.getElementById('mobile-view-slider');
    const knob   = document.getElementById('mobile-view-knob');
    const status = document.getElementById('mobile-view-status');
    if (enabled) {
      toggle.checked = true;
      slider.style.background = 'var(--brown)';
      knob.style.transform = 'translateX(22px)';
      status.innerHTML = 'Status: <strong style="color:var(--green)">Mobile View Active</strong>';
    }
  })();

  function toggleMobileView(checkbox) {
    const slider = document.getElementById('mobile-view-slider');
    const knob   = document.getElementById('mobile-view-knob');
    const status = document.getElementById('mobile-view-status');
    const enabled = checkbox.checked;

    slider.style.background = enabled ? 'var(--brown)' : 'var(--cream-darker)';
    knob.style.transform = enabled ? 'translateX(22px)' : 'translateX(0)';
    status.innerHTML = enabled
      ? 'Status: <strong style="color:var(--green)">Mobile View Active</strong>'
      : 'Status: <strong>Desktop View</strong>';

    fetch('{{ route("admin.toggle-mobile-view") }}', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ enabled: enabled })
    })
    .then(r => r.json())
    .then(() => showToast(enabled ? '📱 Mobile view enabled!' : '🖥️ Desktop view enabled!'))
    .catch(() => showToast('❌ Failed to update view mode'));
  }
</script>
</body>
</html>