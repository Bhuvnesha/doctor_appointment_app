<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>MediCare</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
<style>
@import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600&display=swap');
*{box-sizing:border-box;margin:0;padding:0;}
:root{
  --teal:#0d6e6e;--teal-dark:#0a5252;--teal-light:#e0f4f4;--teal-mid:#1a9a9a;
  --amber:#c97d2e;--amber-light:#fdf3e3;
  --text:#1a1a2e;--muted:#5a6372;--surface:#f7f9fc;--border:#dee5ee;--white:#ffffff;
  --radius:14px;--shadow:0 4px 24px rgba(13,110,110,0.10);
}
html,body{font-family:'DM Sans',sans-serif;color:var(--text);background:var(--surface);min-height:100vh;}

.navbar{background:var(--white);border-bottom:1px solid var(--border);padding:0.75rem 0;}
.navbar-brand{font-family:'DM Serif Display',serif;font-size:1.5rem;color:var(--teal)!important;letter-spacing:-0.5px;}
.navbar-brand span{color:var(--amber);}
.nav-link{font-size:0.88rem;font-weight:500;color:var(--muted)!important;padding:0.4rem 0.85rem!important;border-radius:8px;transition:all .2s;}
.nav-link:hover,.nav-link.active{color:var(--teal)!important;background:var(--teal-light);}
.nav-link.admin-link{background:var(--text);color:var(--white)!important;border-radius:8px;}
.nav-link.admin-link:hover{background:var(--teal);color:var(--white)!important;}
.nav-link.logout-link{background:#fdecea;color:#b52b2b!important;border-radius:8px;font-size:0.82rem;}
.nav-link.logout-link:hover{background:#f7c1c1;}

.page{display:none;animation:fadeUp .35s ease;}
.page.active{display:block;}
@keyframes fadeUp{from{opacity:0;transform:translateY(12px);}to{opacity:1;transform:translateY(0);}}

/* HERO */
.hero{background:linear-gradient(135deg,#0d4f4f 0%,#0d6e6e 55%,#1a9a9a 100%);padding:90px 0 80px;position:relative;overflow:hidden;}
.hero::before{content:'';position:absolute;right:-100px;top:-80px;width:500px;height:500px;border-radius:50%;background:rgba(255,255,255,0.04);}
.hero::after{content:'';position:absolute;right:60px;bottom:-120px;width:300px;height:300px;border-radius:50%;background:rgba(255,255,255,0.05);}
.hero-label{display:inline-block;background:rgba(255,255,255,0.12);color:rgba(255,255,255,0.85);font-size:0.78rem;font-weight:500;letter-spacing:1.5px;text-transform:uppercase;padding:5px 14px;border-radius:30px;margin-bottom:1.2rem;}
.hero h1{font-family:'DM Serif Display',serif;font-size:clamp(2rem,5vw,3.4rem);color:#fff;line-height:1.18;margin-bottom:1.1rem;}
.hero h1 em{font-style:italic;color:#a8e6e6;}
.hero p{color:rgba(255,255,255,0.72);font-size:1.05rem;max-width:440px;line-height:1.7;margin-bottom:2rem;}
.btn-hero{background:var(--white);color:var(--teal);font-weight:600;font-size:0.92rem;padding:13px 28px;border-radius:10px;border:none;cursor:pointer;transition:all .2s;}
.btn-hero:hover{background:var(--amber-light);color:var(--amber);}
.btn-hero-outline{background:transparent;color:#fff;border:1.5px solid rgba(255,255,255,0.4);font-weight:500;font-size:0.92rem;padding:12px 24px;border-radius:10px;cursor:pointer;transition:all .2s;margin-left:10px;}
.btn-hero-outline:hover{background:rgba(255,255,255,0.1);}
.hero-card{background:var(--white);border-radius:20px;padding:28px;box-shadow:0 20px 60px rgba(0,0,0,0.18);}
.hero-card .stat{text-align:center;padding:14px 0;}
.hero-card .stat-num{font-family:'DM Serif Display',serif;font-size:2rem;color:var(--teal);}
.hero-card .stat-lbl{font-size:0.8rem;color:var(--muted);margin-top:2px;}
.hero-divider{width:1px;background:var(--border);}
.avail-badge{display:flex;align-items:center;gap:8px;background:var(--teal-light);color:var(--teal);font-size:0.82rem;font-weight:500;padding:10px 16px;border-radius:10px;margin-top:16px;}
.avail-dot{width:8px;height:8px;border-radius:50%;background:#2ecc71;flex-shrink:0;}

.section-label{font-size:0.78rem;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:var(--teal);margin-bottom:0.5rem;}
.section-title{font-family:'DM Serif Display',serif;font-size:clamp(1.6rem,3vw,2.2rem);color:var(--text);margin-bottom:0.6rem;}
.feature-card{background:var(--white);border:1px solid var(--border);border-radius:var(--radius);padding:28px 24px;transition:all .25s;}
.feature-card:hover{border-color:var(--teal);box-shadow:var(--shadow);transform:translateY(-3px);}
.feature-icon{width:50px;height:50px;border-radius:12px;background:var(--teal-light);display:flex;align-items:center;justify-content:center;font-size:1.35rem;color:var(--teal);margin-bottom:16px;}
.feature-card h5{font-weight:600;font-size:0.97rem;margin-bottom:7px;}
.feature-card p{font-size:0.85rem;color:var(--muted);line-height:1.6;}

.doctor-card{background:var(--white);border:1px solid var(--border);border-radius:var(--radius);overflow:hidden;transition:all .25s;}
.doctor-card:hover{box-shadow:var(--shadow);transform:translateY(-2px);}
.doctor-avatar{width:100%;height:160px;background:linear-gradient(135deg,var(--teal-light),#c8eded);display:flex;align-items:center;justify-content:center;font-family:'DM Serif Display',serif;font-size:3.5rem;color:var(--teal);}
.doctor-body{padding:18px;}
.doctor-body h6{font-weight:600;font-size:0.95rem;margin-bottom:3px;}
.doctor-spec{font-size:0.8rem;color:var(--teal);font-weight:500;margin-bottom:10px;}
.rating-row{display:flex;align-items:center;gap:6px;font-size:0.8rem;color:var(--muted);}
.rating-star{color:#f4c542;}
.avail-chip{display:inline-block;background:var(--teal-light);color:var(--teal);font-size:0.72rem;font-weight:600;padding:3px 10px;border-radius:20px;margin-top:10px;}

/* BOOK FORM */
.form-wrap{max-width:720px;margin:0 auto;}
.form-card{background:var(--white);border:1px solid var(--border);border-radius:20px;padding:40px;}
.form-label{font-size:0.85rem;font-weight:500;color:var(--muted);margin-bottom:5px;}
.form-control,.form-select{border:1px solid var(--border);border-radius:10px;font-size:0.9rem;padding:10px 14px;transition:border-color .2s,box-shadow .2s;}
.form-control:focus,.form-select:focus{border-color:var(--teal);box-shadow:0 0 0 3px rgba(13,110,110,0.12);outline:none;}
.btn-book{background:var(--teal);color:#fff;font-weight:600;padding:13px 36px;border-radius:10px;border:none;font-size:0.95rem;cursor:pointer;width:100%;transition:background .2s;}
.btn-book:hover{background:#0a5555;}
.form-section-title{font-family:'DM Serif Display',serif;font-size:1.1rem;color:var(--text);margin-bottom:6px;}
.step-badge{display:inline-flex;align-items:center;justify-content:center;width:26px;height:26px;border-radius:50%;background:var(--teal);color:#fff;font-size:0.75rem;font-weight:700;margin-right:8px;}
.success-banner{background:#e6f9f0;border:1px solid #7dd9aa;border-radius:12px;padding:18px 22px;display:none;align-items:center;gap:14px;margin-bottom:24px;}
.success-banner.show{display:flex;}

/* LOGIN PAGE */
.login-wrap{min-height:80vh;display:flex;align-items:center;justify-content:center;padding:40px 16px;}
.login-card{background:var(--white);border:1px solid var(--border);border-radius:20px;padding:44px 40px;width:100%;max-width:420px;}
.login-icon{width:64px;height:64px;border-radius:16px;background:var(--teal-light);display:flex;align-items:center;justify-content:center;font-size:1.7rem;color:var(--teal);margin:0 auto 20px;}
.login-card h3{font-family:'DM Serif Display',serif;font-size:1.6rem;text-align:center;margin-bottom:4px;}
.login-card .sub{font-size:0.85rem;color:var(--muted);text-align:center;margin-bottom:28px;}
.login-error{background:#fdecea;border:1px solid #f09595;color:#a32d2d;border-radius:9px;padding:10px 14px;font-size:0.84rem;margin-bottom:16px;display:none;}
.login-error.show{display:block;}
.hint-box{background:var(--teal-light);border-radius:9px;padding:10px 14px;font-size:0.8rem;color:var(--teal);margin-top:18px;text-align:center;}
.show-pw{position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;color:var(--muted);cursor:pointer;font-size:0.85rem;padding:0;}
.pw-wrap{position:relative;}

/* DASHBOARD */
.dash-stat{background:var(--white);border:1px solid var(--border);border-radius:14px;padding:22px 24px;}
.dash-stat-num{font-family:'DM Serif Display',serif;font-size:2.2rem;color:var(--teal);}
.dash-stat-lbl{font-size:0.82rem;color:var(--muted);margin-top:2px;}
.dash-stat-icon{width:44px;height:44px;border-radius:11px;display:flex;align-items:center;justify-content:center;font-size:1.2rem;}
.badge-status{font-size:0.74rem;font-weight:600;padding:4px 10px;border-radius:20px;}
.badge-confirmed{background:#e6f9f0;color:#1a7a4a;}
.badge-pending{background:#fff7e6;color:#a86500;}
.badge-cancelled{background:#fdecea;color:#b52b2b;}
.table-wrap{background:var(--white);border:1px solid var(--border);border-radius:14px;overflow:hidden;}
.table-wrap table{margin:0;font-size:0.875rem;}
.table-wrap th{background:#f0f5f5;font-weight:600;font-size:0.78rem;text-transform:uppercase;letter-spacing:.6px;color:var(--muted);border-bottom:1px solid var(--border)!important;padding:12px 16px!important;}
.table-wrap td{padding:13px 16px!important;vertical-align:middle;border-color:var(--border)!important;}
.table-wrap tr:last-child td{border-bottom:none!important;}
.doc-avatar-sm{width:34px;height:34px;border-radius:50%;background:var(--teal-light);color:var(--teal);font-weight:700;font-size:0.75rem;display:inline-flex;align-items:center;justify-content:center;margin-right:8px;}
.filter-row .form-select{font-size:0.83rem;border-radius:9px;padding:7px 12px;}
.search-box{position:relative;}
.search-box input{padding-left:36px;font-size:0.85rem;border-radius:9px;}
.search-box i{position:absolute;left:11px;top:50%;transform:translateY(-50%);color:var(--muted);font-size:0.9rem;}
.page-header{padding:32px 0 20px;}
.page-header h2{font-family:'DM Serif Display',serif;font-size:1.8rem;}
.admin-bar{background:linear-gradient(90deg,#0d4f4f,#0d6e6e);padding:8px 0;}
.admin-bar-inner{display:flex;align-items:center;justify-content:space-between;gap:12px;}
.admin-badge{display:inline-flex;align-items:center;gap:7px;background:rgba(255,255,255,0.12);color:rgba(255,255,255,0.9);font-size:0.8rem;font-weight:500;padding:5px 12px;border-radius:20px;}

footer{background:var(--text);color:rgba(255,255,255,0.55);text-align:center;padding:24px;font-size:0.82rem;margin-top:60px;}
footer span{color:var(--teal-mid);}
@media(max-width:768px){.hero{padding:60px 0;}.form-card,.login-card{padding:24px;}.hero .col-lg-5{display:none;}}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#" onclick="showPage('home')">Medi<span>Care</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav me-auto gap-1">
        <li class="nav-item"><a class="nav-link" href="{{route('home')}}" >Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('booking')}}" >Book Appointment</a></li>
        <li class="nav-item"><a class="nav-link" href="#" onclick="scrollToSec('doctors')">Our Doctors</a></li>
        <li class="nav-item"><a class="nav-link" href="#" onclick="scrollToSec('services')">Services</a></li>
      </ul>
      <ul class="navbar-nav gap-2 align-items-center">
        <li class="nav-item"><a class="nav-link" href="{{route('booking')}}"><i class="bi bi-calendar-plus me-1"></i>Book Now</a></li>
        <li id="nav-admin-btn" class="nav-item">
          <a class="nav-link admin-link" href="#" onclick="showPage('login')"><i class="bi bi-shield-lock me-1"></i>Admin Dashboard</a>
        </li>
        <li id="nav-logout-btn" class="nav-item" style="display:none;">
          <a class="nav-link logout-link" href="#" onclick="doLogout()"><i class="bi bi-box-arrow-right me-1"></i>Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- ══════════ LOGIN ══════════ -->
<div id="page-login" class="page-active">
  <div class="login-wrap">
    <div class="login-card">
      <div class="login-icon"><i class="bi bi-shield-lock-fill"></i></div>
      <h3>Admin Login</h3>
      <p class="sub">Enter your credentials to access the dashboard</p>

      <div class="login-error" id="loginError"><i class="bi bi-exclamation-triangle me-2"></i><span id="loginErrorMsg">Invalid username or password.</span></div>

      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" id="l-user" placeholder="admin" autocomplete="username"/>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <div class="pw-wrap">
          <input type="password" class="form-control" id="l-pass" placeholder="••••••••" autocomplete="current-password" onkeydown="if(event.key==='Enter')doLogin()"/>
          <button class="show-pw" onclick="togglePw()" id="eyeBtn"><i class="bi bi-eye" id="eyeIcon"></i></button>
        </div>
      </div>
      <div class="mb-4 d-flex align-items-center justify-content-between">
        <label style="font-size:0.83rem;color:var(--muted);display:flex;align-items:center;gap:6px;cursor:pointer;">
          <input type="checkbox" id="rememberMe" style="accent-color:var(--teal);"/> Remember me
        </label>
        <a href="#" style="font-size:0.83rem;color:var(--teal);">Forgot password?</a>
      </div>
      <button class="btn-book" onclick="doLogin()"><i class="bi bi-box-arrow-in-right me-2"></i>Sign In</button>
      <div class="hint-box"><i class="bi bi-info-circle me-1"></i>Demo credentials — username: <strong>admin</strong> &nbsp;|&nbsp; password: <strong>admin123</strong></div>
    </div>
  </div>
</div>


<footer>
  &copy; 2025 <span>MediCare</span> · Built for better health · All rights reserved
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function showPage(name) {
        document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
        document.getElementById('page-' + name).classList.add('active');
        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
        const nl = document.getElementById('nav-' + name);
        if (nl) nl.classList.add('active');
        window.scrollTo(0, 0);
    }

    function scrollToSec(id) {
        showPage('home');
        setTimeout(() => { const el = document.getElementById(id); if (el) el.scrollIntoView({behavior:'smooth',block:'start'}); }, 120);
    }
</script>
</body>
</html>
