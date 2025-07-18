<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin Kost</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');
        body {
            background: linear-gradient(120deg, #F5E9DA 60%, #A8D5BA 100%);
            font-family: 'Nunito', Arial, sans-serif;
            color: #4F6F52;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            transition: background 0.3s;
        }
        .admin-header {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 24px;
        }
        .admin-logo {
            width: 54px;
            height: 54px;
            border-radius: 16px;
            box-shadow: 0 2px 8px #A8D5BA33;
        }
        .admin-greeting {
            font-size: 1.15rem;
            color: #BFA181;
            margin-bottom: 2px;
        }
        .admin-container {
            max-width: 700px;
            margin: 48px auto;
            background: #fff;
            border-radius: 32px;
            box-shadow: 0 8px 32px #BFA18122;
            padding: 40px 32px 32px 32px;
            position: relative;
        }
        .dark-toggle {
            position: absolute;
            top: 24px;
            right: 32px;
            background: #F5E9DA;
            color: #4F6F52;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            box-shadow: 0 2px 8px #A8D5BA33;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 18px;
            margin-bottom: 32px;
            margin-top: 18px;
        }
        .stat-card {
            background: #F5E9DA;
            border-radius: 18px;
            box-shadow: 0 2px 8px #A8D5BA11;
            padding: 18px 18px 14px 18px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            animation: fadeInUp 0.7s;
            min-height: 90px;
        }
        .stat-icon {
            font-size: 1.7rem;
            margin-bottom: 6px;
            color: #A8D5BA;
        }
        .stat-label {
            font-size: 1.01rem;
            color: #BFA181;
        }
        .stat-value {
            font-size: 1.25rem;
            font-weight: 800;
            color: #388e3c;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .admin-menu {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 18px;
            margin-bottom: 8px;
        }
        .admin-menu a {
            background: linear-gradient(90deg, #A8D5BA 70%, #BFA181 100%);
            color: #fff;
            border-radius: 22px;
            padding: 12px 24px;
            font-size: 1.05rem;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 2px 8px #A8D5BA22;
            transition: background 0.2s, color 0.2s, transform 0.2s;
        }
        .admin-menu a:hover {
            background: linear-gradient(90deg, #BFA181 70%, #A8D5BA 100%);
            color: #FFF8F0;
            transform: scale(1.06) translateY(-2px);
        }
        @media (max-width: 700px) {
            .admin-container { padding: 16px 4vw; }
            .admin-header { flex-direction: column; gap: 8px; }
            .stat-grid { grid-template-columns: 1fr; gap: 10px; }
            h1 { font-size: 1.3rem; }
            .admin-menu { flex-direction: column; gap: 8px; }
            .dark-toggle { right: 12px; top: 12px; }
        }
        body.dark-mode {
            background: linear-gradient(120deg, #23272f 60%, #3a4d3f 100%) !important;
            color: #e6e6e6 !important;
        }
        body.dark-mode .admin-container { background: #23272f !important; color: #e6e6e6 !important; }
        body.dark-mode .stat-card, body.dark-mode .admin-menu a, body.dark-mode .dark-toggle { background: #2d323b !important; color: #FFD700 !important; }
        body.dark-mode .stat-value { color: #FFD700 !important; }
        body.dark-mode .admin-menu a:hover { background: #FFD700 !important; color: #23272f !important; }
        body.dark-mode .dark-toggle { background: #23272f !important; color: #FFD700 !important; }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="https://img.icons8.com/color/96/000000/home--v2.png" alt="Logo Kost"/>
            <span class="navbar-title">Kost Harmoni</span>
        </div>
        <button class="navbar-toggle" id="navbarToggle" aria-label="Toggle menu">&#9776;</button>
        <ul class="navbar-menu" id="navbarMenu">
            <li><a href="/landing"><span class="nav-icon">🏠</span> Landing</a></li>
            <li><a href="/admin"><span class="nav-icon">📊</span> Dashboard</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle"><span class="nav-icon">📁</span> Data Master <span class="caret">▼</span></a>
                <ul class="dropdown-menu">
                    <li><a href="/penghuni"><span class="nav-icon">👤</span> Penghuni</a></li>
                    <li><a href="/kamar"><span class="nav-icon">🛏️</span> Kamar</a></li>
                    <li><a href="/barang"><span class="nav-icon">📦</span> Barang</a></li>
                    <li><a href="/relasi"><span class="nav-icon">🔗</span> Relasi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle"><span class="nav-icon">💼</span> Transaksi <span class="caret">▼</span></a>
                <ul class="dropdown-menu">
                    <li><a href="/tagihan"><span class="nav-icon">💸</span> Tagihan</a></li>
                    <li><a href="/bayar"><span class="nav-icon">💳</span> Pembayaran</a></li>
                </ul>
            </li>
            <li><a href="/profil"><span class="nav-icon">🙍‍♂️</span> Profil</a></li>
            <li><a href="/logout"><span class="nav-icon">🚪</span> Logout</a></li>
        </ul>
    </nav>
    <style>
        .navbar { width: 100%; background: #fffbe9; box-shadow: 0 4px 24px rgba(191,161,129,0.10); display: flex; align-items: center; justify-content: space-between; padding: 0 36px; position: sticky; top: 0; z-index: 100; min-height: 68px; transition: background 0.3s, box-shadow 0.3s; }
        .navbar-logo { display: flex; align-items: center; gap: 14px; margin-right: 32px; }
        .navbar-logo img { width: 40px; height: 40px; border-radius: 12px; box-shadow: 0 2px 8px #A8D5BA33; background: #fff; }
        .navbar-title { font-family: 'Nunito', Arial, sans-serif; font-weight: 800; font-size: 1.22rem; color: #7c5e2c; letter-spacing: 1px; }
        .navbar-menu { display: flex; gap: 18px; list-style: none; margin: 0; padding: 0; align-items: center; transition: max-height 0.3s; }
        .navbar-menu li { position: relative; }
        .navbar-menu li a { display: flex; align-items: center; gap: 8px; text-decoration: none; color: #4F6F52; font-weight: 700; font-size: 1.08rem; padding: 12px 18px 10px 18px; border-radius: 18px; transition: background 0.22s, color 0.22s, box-shadow 0.22s; position: relative; overflow: hidden; outline: none; }
        .navbar-menu li a .nav-icon { font-size: 1.18rem; margin-right: 2px; filter: grayscale(0.2) brightness(0.95); }
        .navbar-menu li a.active, .navbar-menu li a:focus { background: #A8D5BA; color: #fff; box-shadow: 0 2px 12px #A8D5BA33; }
        .navbar-menu li a:focus { outline: 2px solid #388e3c; outline-offset: 2px; }
        .navbar-menu li a::after { content: ''; display: block; height: 3px; width: 0; background: #A8D5BA; border-radius: 2px; transition: width 0.25s; position: absolute; left: 18px; bottom: 7px; }
        .navbar-menu li a:hover::after { width: 70%; }
        .navbar-menu li a:hover { background: #A8D5BA; color: #fff; box-shadow: 0 2px 12px #A8D5BA33; transition: background 0.2s, color 0.2s; }
        .navbar-toggle { display: none; background: none; border: none; font-size: 2.1rem; color: #7c5e2c; cursor: pointer; margin-left: 12px; padding: 8px 12px; border-radius: 12px; transition: background 0.2s; }
        .navbar-toggle:focus { outline: 2px solid #388e3c; }
        /* Dropdown */
        .dropdown { position: relative; }
        .dropdown-toggle { cursor: pointer; }
        .caret { font-size: 0.8em; margin-left: 2px; }
        .dropdown-menu { display: none; position: absolute; left: 0; top: 100%; min-width: 180px; background: #fffbe9; box-shadow: 0 4px 18px #A8D5BA22; border-radius: 14px; padding: 8px 0; z-index: 200; flex-direction: column; animation: fadeInDropdown 0.25s; }
        .dropdown-menu li a { padding: 10px 22px; font-size: 1.04rem; border-radius: 10px; border-bottom: none; box-shadow: none; }
        .dropdown-menu li a:hover, .dropdown-menu li a:focus { background: #A8D5BA; color: #fff; }
        .dropdown.open > .dropdown-menu { display: flex; }
        @keyframes fadeInDropdown { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        @media (max-width: 900px) {
            .navbar { flex-direction: column; align-items: flex-start; padding: 0 10px; min-height: 56px; }
            .navbar-menu { flex-direction: column; width: 100%; max-height: 0; overflow: hidden; background: #fffbe9; gap: 0; }
            .navbar-menu.open { max-height: 700px; padding-bottom: 10px; }
            .navbar-menu > li > a { padding: 14px 18px 12px 18px; font-size: 1.08rem; border-radius: 0; border-bottom: 1px solid #f0e6d2; }
            .navbar-toggle { display: block; }
            .navbar-logo { margin-right: 0; }
            .dropdown-menu { position: static; min-width: 100%; box-shadow: none; border-radius: 0; padding: 0; }
            .dropdown-menu li a { padding: 12px 24px; }
        }
        body.dark-mode .navbar { background: #23272f; box-shadow: 0 4px 24px rgba(56,142,60,0.10); }
        body.dark-mode .navbar-menu li a, body.dark-mode .navbar-title { color: #FFD700; }
        body.dark-mode .navbar-menu li a.active, body.dark-mode .navbar-menu li a:focus, body.dark-mode .navbar-menu li a:hover { background: #388e3c; color: #fff; box-shadow: 0 2px 12px #388e3c33; }
        body.dark-mode .navbar-logo img { background: #23272f; }
        body.dark-mode .dropdown-menu { background: #23272f; box-shadow: 0 4px 18px #388e3c22; }
        body.dark-mode .dropdown-menu li a { color: #FFD700; }
        body.dark-mode .dropdown-menu li a:hover, body.dark-mode .dropdown-menu li a:focus { background: #388e3c; color: #fff; }
    </style>
    <div class="admin-container">
        <button class="dark-toggle" id="darkModeToggle" title="Dark Mode"><span id="darkModeIcon">🌙</span></button>
        <div class="admin-header">
            <img src="https://img.icons8.com/color/96/000000/home--v2.png" alt="Logo Kost" class="admin-logo">
            <div>
                <div class="admin-greeting">Selamat datang, Admin!</div>
                <h1>Dashboard Kost Harmoni</h1>
            </div>
        </div>
        <div class="stat-grid">
            <div class="stat-card"><span class="stat-icon">👤</span><span class="stat-label">Penghuni Aktif</span><span class="stat-value"><?= $jml_penghuni_aktif ?></span></div>
            <div class="stat-card"><span class="stat-icon">🏠</span><span class="stat-label">Total Kamar</span><span class="stat-value"><?= $jml_kamar ?></span></div>
            <div class="stat-card"><span class="stat-icon">🛏️</span><span class="stat-label">Kamar Kosong</span><span class="stat-value"><?= $jml_kamar_kosong ?></span></div>
            <div class="stat-card"><span class="stat-icon">💸</span><span class="stat-label">Tagihan Bulan Ini</span><span class="stat-value"><?= $jml_tagihan_bulan_ini ?></span></div>
            <div class="stat-card"><span class="stat-icon">⏰</span><span class="stat-label">Tagihan Belum Lunas</span><span class="stat-value"><?= $jml_tagihan_belum_lunas ?></span></div>
        </div>
        <div class="admin-menu">
            <a href="/penghuni">Kelola Penghuni</a>
            <a href="/kamar">Kelola Kamar</a>
            <a href="/barang">Kelola Barang</a>
            <a href="/relasi">Kelola Relasi</a>
            <a href="/tagihan">Kelola Tagihan</a>
            <a href="/bayar">Kelola Pembayaran</a>
        </div>
    </div>
    <script>
    // Dark Mode Toggle
    const darkBtn = document.getElementById('darkModeToggle');
    const darkIcon = document.getElementById('darkModeIcon');
    function setDarkMode(on) {
        document.body.classList.toggle('dark-mode', on);
        darkIcon.textContent = on ? '☀️' : '🌙';
        localStorage.setItem('darkMode', on ? '1' : '0');
    }
    darkBtn.onclick = () => setDarkMode(!document.body.classList.contains('dark-mode'));
    if(localStorage.getItem('darkMode') === '1') setDarkMode(true);
    // Hamburger menu
    const toggle = document.getElementById('navbarToggle');
    const menu = document.getElementById('navbarMenu');
    toggle.onclick = () => menu.classList.toggle('open');
    // Dropdown logic
    const dropdowns = document.querySelectorAll('.navbar .dropdown');
    dropdowns.forEach(drop => {
        // Desktop: show on hover
        drop.addEventListener('mouseenter', () => { if(window.innerWidth > 900) drop.classList.add('open'); });
        drop.addEventListener('mouseleave', () => { if(window.innerWidth > 900) drop.classList.remove('open'); });
        // Mobile: show on click
        drop.querySelector('.dropdown-toggle').onclick = function(e) {
            if(window.innerWidth <= 900) {
                e.preventDefault();
                drop.classList.toggle('open');
            }
        };
    });
    // Close dropdown on outside click (mobile)
    document.addEventListener('click', function(e) {
        dropdowns.forEach(drop => {
            if(!drop.contains(e.target) && window.innerWidth <= 900) drop.classList.remove('open');
        });
    });
    // Highlight menu aktif
    const links = document.querySelectorAll('.navbar-menu > li > a');
    const path = window.location.pathname;
    links.forEach(link => { if(link.getAttribute('href') === path) link.classList.add('active'); });
    </script>
</body>
</html>
