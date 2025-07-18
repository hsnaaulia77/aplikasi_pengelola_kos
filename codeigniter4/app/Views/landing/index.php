<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang di Kost Harmoni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Quicksand:wght@400;700&display=swap');
        body {
            background: linear-gradient(120deg, #F5E9DA 60%, #A8D5BA 100%);
            font-family: 'Nunito', 'Quicksand', Arial, sans-serif;
            color: #4F6F52;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        .container {
            width: auto;
            max-width: 100%;
            margin: 0 auto;
            padding: 24px 8px;
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 4px 18px rgba(191, 161, 129, 0.10);
        }
        .header-flex {
            display: flex;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
            margin-bottom: 12px;
        }
        .logo {
            width: 90px;
            border-radius: 24px;
            box-shadow: 0 2px 12px rgba(191, 161, 129, 0.10);
        }
        .main-title {
            font-family: 'Nunito', 'Quicksand', Arial, sans-serif;
            color: #4F6F52;
            font-size: 2.8rem;
            margin-bottom: 0;
            letter-spacing: 1px;
            font-weight: 800;
        }
        .subtitle {
            color: #A8D5BA;
            font-size: 1.25rem;
            margin-top: 0;
            margin-bottom: 12px;
        }
        .gallery {
            display: flex;
            gap: 18px;
            margin-bottom: 24px;
        }
        .gallery img {
            width: 180px;
            height: 110px;
            object-fit: cover;
            border-radius: 24px;
            box-shadow: 0 4px 18px rgba(168, 213, 186, 0.18);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .gallery img:hover {
            transform: scale(1.04);
            box-shadow: 0 6px 24px rgba(191, 161, 129, 0.18);
        }
        .fasilitas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 18px;
            margin-bottom: 28px;
        }
        .fasilitas-card {
            background: #F5E9DA;
            border-radius: 24px;
            box-shadow: 0 4px 18px rgba(168, 213, 186, 0.13);
            padding: 18px 0 10px 0;
            text-align: center;
            transition: box-shadow 0.2s;
        }
        .fasilitas-card span {
            font-size: 2.2rem;
            display: block;
            margin-bottom: 6px;
        }
        .promo-card {
            background: linear-gradient(90deg, #A8D5BA 80%, #FFF8F0 100%);
            color: #4B3F2F;
            border-radius: 18px;
            padding: 18px 24px;
            margin-bottom: 24px;
            font-size: 1.15rem;
            font-weight: bold;
            box-shadow: 0 2px 12px rgba(168, 213, 186, 0.13);
            display: flex;
            align-items: center;
            gap: 16px;
            animation: fadeInDown 1s;
        }
        .promo-card span {
            font-size: 2rem;
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px);}
            to { opacity: 1; transform: translateY(0);}
        }
        .testimoni-card {
            background: #FFF8F0;
            border-left: 6px solid #A8D5BA;
            border-radius: 16px;
            padding: 18px 24px;
            margin: 24px 0 32px 0;
            font-style: italic;
            color: #5B4636;
            box-shadow: 0 2px 8px rgba(168, 213, 186, 0.08);
            display: flex;
            align-items: center;
            gap: 18px;
        }
        .testimoni-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #A8D5BA;
        }
        .fitur-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 28px;
            margin-top: 12px;
        }
        .fitur-card {
            background: var(--fitur-bg, #fff);
            border-radius: 24px;
            box-shadow: 0 4px 18px #A8D5BA22;
            padding: 22px 18px 16px 18px;
            color: #5B4636;
            text-align: center;
            text-decoration: none;
            transition: background 0.22s, color 0.22s, transform 0.22s, box-shadow 0.22s, border 0.22s;
            font-size: 1.08rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            border: 2px solid #F5F5F5;
            opacity: 0;
            animation: fadeInCard 0.7s forwards;
        }
        .fitur-card:nth-child(1) { --fitur-bg: #FFF8F0; animation-delay: 0.1s; }
        .fitur-card:nth-child(2) { --fitur-bg: #F0F7F4; animation-delay: 0.2s; }
        .fitur-card:nth-child(3) { --fitur-bg: #F7F5F0; animation-delay: 0.3s; }
        .fitur-card:nth-child(4) { --fitur-bg: #F0F5F7; animation-delay: 0.4s; }
        .fitur-card:nth-child(5) { --fitur-bg: #F7F0F5; animation-delay: 0.5s; }
        .fitur-card:nth-child(6) { --fitur-bg: #F5F7F0; animation-delay: 0.6s; }
        .fitur-card:hover {
            background: #F5E9DA;
            color: #4F6F52;
            border-color: #A8D5BA;
            transform: scale(1.045) translateY(-3px);
            box-shadow: 0 8px 32px rgba(168, 213, 186, 0.18);
        }
        @keyframes fadeInCard {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fitur-icon {
            width: 38px;
            height: 38px;
            margin-bottom: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.22s, filter 0.22s;
        }
        .fitur-card:hover .fitur-icon {
            transform: scale(1.13) rotate(-3deg);
            filter: drop-shadow(0 2px 6px #A8D5BA44);
        }
        .fitur-title {
            font-weight: 700;
            font-size: 1.13rem;
            margin-bottom: 2px;
            color: #4F6F52;
            letter-spacing: 0.5px;
        }
        .fitur-desc {
            font-size: 0.93rem;
            color: #BFA181;
            font-weight: 400;
        }
        .btn-group {
            display: flex;
            gap: 16px;
            margin-top: 12px;
            flex-wrap: wrap;
        }
        .btn, .form-kontak button {
            background: linear-gradient(90deg, #A8D5BA 70%, #4F6F52 100%);
            color: #fff;
            border: none;
            border-radius: 28px;
            padding: 14px 36px;
            font-size: 1.13rem;
            font-family: 'Nunito', 'Quicksand', Arial, sans-serif;
            cursor: pointer;
            transition: background 0.2s, color 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 18px #A8D5BA22;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
        }
        .btn:hover, .form-kontak button:hover {
            background: linear-gradient(90deg, #4F6F52 70%, #A8D5BA 100%);
            color: #F5E9DA;
            transform: scale(1.06) translateY(-2px);
            box-shadow: 0 6px 24px rgba(168, 213, 186, 0.18);
        }
        .btn:active {
            transform: scale(0.97);
            box-shadow: 0 1px 4px rgba(168, 213, 186, 0.10);
        }
        .card {
            background: #F5E9DA;
            border-radius: 24px;
            box-shadow: 0 4px 18px #A8D5BA22;
            padding: 24px;
            margin-bottom: 24px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            transition: box-shadow 0.2s;
        }
        .form-kontak label {
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
        }
        .form-kontak input, .form-kontak textarea {
            border: 1.5px solid #A8D5BA;
            border-radius: 12px;
            padding: 8px 14px;
            font-size: 1rem;
            margin-bottom: 12px;
            background: #FFF8F0;
            font-family: 'Nunito', 'Quicksand', Arial, sans-serif;
            width: 100%;
            box-sizing: border-box;
        }
        .form-kontak textarea {
            min-height: 80px;
        }
        .form-kontak button {
            background: #A8D5BA;
            color: #fff;
            border: none;
            border-radius: 24px;
            padding: 10px 28px;
            font-size: 1rem;
            font-family: 'Nunito', 'Quicksand', Arial, sans-serif;
            cursor: pointer;
            transition: background 0.2s;
            box-shadow: 0 2px 8px rgba(168, 213, 186, 0.10);
        }
        .form-kontak button:hover {
            background: #BFA181;
            color: #FFF8F0;
        }
        .form-kontak .success {
            color: #388e3c;
            background: #e8f5e9;
            border-radius: 8px;
            padding: 8px 12px;
            margin-bottom: 12px;
        }
        .faq-accordion {
            width: 100%;
        }
        .faq-item {
            background: #F5E9DA;
            border-radius: 18px;
            margin-bottom: 10px;
            box-shadow: 0 1px 4px rgba(168, 213, 186, 0.08);
        }
        .faq-question {
            padding: 14px 18px;
            cursor: pointer;
            font-weight: bold;
            color: #4F6F52;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            outline: none;
            font-size: 1.08rem;
            transition: background 0.2s;
        }
        .faq-question:hover {
            background: #A8D5BA11;
        }
        .faq-answer {
            padding: 0 18px 14px 18px;
            color: #4B3F2F;
            display: none;
            font-size: 1rem;
        }
        .faq-item.active .faq-answer {
            display: block;
        }
        .faq-item.active .faq-question {
            color: #A8D5BA;
        }
        .info-kontak {
            font-size: 1.05rem;
            line-height: 1.7;
        }
        footer {
            margin-top: 40px;
            text-align: center;
            color: #BFA181;
            font-size: 1rem;
            opacity: 0.8;
            letter-spacing: 1px;
        }
        @media (max-width: 700px) {
            .container { padding: 8px 0vw; }
            .header-flex { flex-direction: column; gap: 8px;}
            .logo { width: 60px;}
            .main-title { font-size: 1.3rem;}
            .gallery img { width: 100px; height: 70px;}
        }
        body.dark-mode {
            background: linear-gradient(120deg, #23272f 60%, #3a4d3f 100%);
            color: #e6e6e6;
        }
        body.dark-mode .container { background: #23272f; box-shadow: 0 8px 32px #1118; }
        body.dark-mode .card, body.dark-mode .fitur-card, body.dark-mode .promo-animated, body.dark-mode .testi-slide, body.dark-mode .fasilitas-card, body.dark-mode .faq-item, body.dark-mode .info-kontak { background: #2d323b !important; color: #e6e6e6; box-shadow: 0 2px 12px #1118; }
        body.dark-mode .fitur-card { border-color: #333; }
        body.dark-mode .fitur-card:hover { background: #3a4d3f !important; color: #FFD700; }
        body.dark-mode .fitur-title { color: #FFD700; }
        body.dark-mode .fitur-desc { color: #BFA181; }
        body.dark-mode .promo-gradient { opacity:0.5; }
        body.dark-mode .btn, body.dark-mode .form-kontak button { background: #388e3c !important; color: #fff !important; }
        body.dark-mode .btn:hover, body.dark-mode .form-kontak button:hover { background: #FFD700 !important; color: #23272f !important; }
        body.dark-mode .faq-question { color: #FFD700 !important; }
        body.dark-mode .faq-answer { color: #e6e6e6 !important; }
        body.dark-mode footer { color: #FFD700; border-top:1px solid #333; }
        body.dark-mode #darkModeToggle { background: #23272f; color: #FFD700; }
        body.dark-mode #testi-prev, body.dark-mode #testi-next { background: #23272f; color: #FFD700; }
        .section { opacity:0; transform:translateY(40px); transition:opacity 0.7s cubic-bezier(.4,2,.6,1), transform 0.7s cubic-bezier(.4,2,.6,1); }
        .section.visible { opacity:1; transform:translateY(0); }
        .section-title {
            font-size:1.35rem;
            font-weight:800;
            color:#BFA181;
            margin-bottom:22px;
            border-bottom:2px solid #F0F7F4;
            padding-bottom:8px;
            letter-spacing:0.5px;
            text-align:left;
        }
        .card, .fitur-card, .promo-animated, .testi-slide, .fasilitas-card, .faq-item, .info-kontak {
            box-shadow: 0 4px 24px #A8D5BA22 !important;
            border-radius: 22px !important;
            padding: 28px 22px !important;
            transition: box-shadow 0.22s, transform 0.22s, background 0.22s;
        }
        .card:hover, .fitur-card:hover, .promo-animated:hover, .testi-slide:hover, .fasilitas-card:hover, .faq-item:hover {
            box-shadow: 0 12px 36px #A8D5BA33 !important;
            transform: translateY(-4px) scale(1.02);
        }
        @media (max-width: 700px) {
            .container { padding: 8px 0vw; }
            .section { padding-left: 0; padding-right: 0; }
            .section-title { font-size:1.1rem; padding-bottom:4px; }
            .card, .fitur-card, .promo-animated, .testi-slide, .fasilitas-card, .faq-item, .info-kontak { padding: 16px 8px !important; border-radius: 14px !important; }
        }
        .footer-soft { background:#F5F5F5; border-radius:0 0 32px 32px; padding:24px 0 0 0; }
        body.dark-mode .footer-soft { background:#23272f; border-top:1px solid #333; }
        .fitur-card span[style*="Promo"] {
            background: #FFD700 !important;
            color: #4F6F52 !important;
            font-weight: 900 !important;
            border-radius: 12px !important;
            box-shadow: 0 2px 8px #FFD70044 !important;
        }
        #darkModeToggle {
            background: #F5E9DA !important;
            color: #4F6F52 !important;
            border-radius: 50% !important;
            box-shadow: 0 2px 8px #A8D5BA33 !important;
        }
    </style>
</head>
<body>
    <header class="soft-header">
        <div class="header-left">
            <img src="<?= base_url('images/logo_kos.png') ?>" alt="Logo" class="header-logo">
            <span class="header-title">Kos Harmoni</span>
        </div>
        <div class="header-right">
            <a href="/admin" class="header-btn">Login</a>
            <a href="/register" class="header-btn header-btn-primary">Register</a>
            <div class="header-dropdown">
                <button class="header-btn">Menu ▼</button>
            </div>
        </div>
    </header>
    <style>
        /* --- NAVBAR --- */
        .soft-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f9f6f2cc;
            padding: 0 36px;
            height: 64px;
            border-radius: 0 0 32px 32px;
            box-shadow: 0 2px 16px #bfa18122;
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(2px);
        }
        .header-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .header-logo {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 2px 8px #a8d5ba33;
            object-fit: contain;
        }
        .header-title {
            font-size: 1.22rem;
            font-weight: 800;
            color: #8d7b6a;
            letter-spacing: 1px;
        }
        .header-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .header-btn {
            background: #f3ede6;
            color: #8d7b6a;
            border: none;
            border-radius: 16px;
            padding: 7px 18px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 2px 8px #bfa18122;
            transition: background 0.18s, color 0.18s;
            text-decoration: none;
            height: 36px;
            display: flex;
            align-items: center;
        }
        .header-btn-primary {
            background: #bfa181;
            color: #fff;
        }
        .header-btn:hover, .header-btn:focus {
            background: #e2d3c1;
            color: #6d5c4a;
        }
        .header-btn-primary:hover, .header-btn-primary:focus {
            background: #a08a6a;
            color: #fff;
        }
        .header-dropdown { position: relative; }

        @media (max-width: 700px) {
            .soft-header {
                padding: 0 8px;
                height: 48px;
                border-radius: 0 0 18px 18px;
            }
            .header-title { font-size: 1rem; }
            .header-logo { width: 28px; height: 28px; }
            .header-btn { font-size: 0.95rem; padding: 5px 10px; height: 28px; }
            .header-right { gap: 6px; }
        }
    </style>
    <script>
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
    // Smooth scroll for anchor links
    const anchorLinks = document.querySelectorAll('.navbar-menu a[href^="#"]');
    anchorLinks.forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if(target) target.scrollIntoView({ behavior: 'smooth' });
        });
    });
    </script>
    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="main-title">Kost Harmoni</h1>
            <div class="subtitle">Cozy Stay — Hunian hangat, aman, dan ramah untuk keluarga & wanita</div>
            <div class="desc">Tempat nyaman, harga bersahabat, pengelolaan profesional.</div>
        </div>
    </section>

    <style>
    .hero-section {
        position: relative;
        min-height: 260px;
        display: flex;
        align-items: flex-start;
        background: transparent;
        border-radius: 0 0 40px 40px;
        box-shadow: 0 2px 16px #bfa18122;
        margin-bottom: 32px;
        overflow: hidden;
    }
    .hero-bg {
        position: absolute;
        inset: 0;
        background: url('/image/bg-kost.jpg') right center/cover no-repeat;
        opacity: 0.18; /* Soft background */
        z-index: 1;
    }
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, #fff 80%, #fffbe9cc 100%);
        z-index: 2;
        border-radius: 0 0 40px 40px;
    }
    .hero-content {
        position: relative;
        z-index: 3;
        text-align: left;
        max-width: 700px;
        padding: 48px 0 48px 56px;
    }
    .main-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #4F6F52;
        margin-bottom: 0.7rem;
        letter-spacing: 1px;
        background: none; /* Hapus highlight */
    }
    .subtitle {
        color: #A8D5BA;
        font-size: 1.15rem;
        margin-bottom: 0.4rem;
    }
    .desc {
        color: #BFA181;
        font-size: 1rem;
        font-weight: 400;
    }
    @media (max-width: 700px) {
        .hero-section {
            border-radius: 0 0 18px 18px;
            min-height: 140px;
        }
        .hero-content {
            padding: 24px 8px 24px 16px;
            max-width: 100%;
        }
        .main-title { font-size: 1.3rem; }
    }
    </style>
    <section class="section section-promo" style="margin-bottom: 36px;">
            <!-- PROMO -->
            <div class="promo-animated" style="position:relative; overflow:hidden; border-radius:22px; margin-bottom:28px;">
                <div class="promo-gradient"></div>
                <div style="position:relative; z-index:2; color:#4B3F2F; display:flex; align-items:center; gap:18px; padding:24px 28px;">
                    <span style="display:flex; align-items:center; justify-content:center; background:#fff; border-radius:50%; width:48px; height:48px; box-shadow:0 2px 8px #A8D5BA33;">
                        <svg width="32" height="32" fill="none" stroke="#A8D5BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2v20M2 12h20"/></svg>
                    </span>
                    <div>
                        <span style="font-size:1.3rem; color:#388e3c; font-weight:700;">PROMO SPESIAL!</span><br>
                        <span style="font-size:1.1rem; color:#4B3F2F;">Dapatkan diskon <span style="color:#388e3c;">10%</span> untuk 3 bulan pertama bagi penghuni baru yang mendaftar bulan ini!</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-fasilitas" style="margin-bottom: 36px;">
            <!-- FASILITAS -->
            <h3 class="section-title">Fasilitas Unggulan</h3>
            <div class="fasilitas-grid fadein-anim" style="display:grid; grid-template-columns:repeat(auto-fit,minmax(180px,1fr)); gap:16px; margin-bottom:28px;">
                <div class="fasilitas-card bounce-hover" style="background:#F5E9DA; border-radius:16px; display:flex; align-items:center; gap:12px; padding:14px 18px; box-shadow:0 1px 6px #A8D5BA11;">
                    <span style="font-size:2.1rem;">📶</span>
                    <div><div style="font-weight:700; color:#BFA181;">WiFi</div><div style="font-size:0.93rem; color:#A8A8A8;">Internet cepat</div></div>
                </div>
                <div class="fasilitas-card bounce-hover" style="background:#F0F7F4; border-radius:16px; display:flex; align-items:center; gap:12px; padding:14px 18px; box-shadow:0 1px 6px #A8D5BA11;">
                    <span style="font-size:2.1rem;">🧺</span>
                    <div><div style="font-weight:700; color:#BFA181;">Laundry</div><div style="font-size:0.93rem; color:#A8A8A8;">Fasilitas cuci baju</div></div>
                </div>
                <div class="fasilitas-card bounce-hover" style="background:#F7F5F0; border-radius:16px; display:flex; align-items:center; gap:12px; padding:14px 18px; box-shadow:0 1px 6px #A8D5BA11;">
                    <span style="font-size:2.1rem;">🍳</span>
                    <div><div style="font-weight:700; color:#BFA181;">Dapur</div><div style="font-size:0.93rem; color:#A8A8A8;">Dapur bersama</div></div>
                </div>
                <div class="fasilitas-card bounce-hover" style="background:#F0F5F7; border-radius:16px; display:flex; align-items:center; gap:12px; padding:14px 18px; box-shadow:0 1px 6px #A8D5BA11;">
                    <span style="font-size:2.1rem;">🛵</span>
                    <div><div style="font-weight:700; color:#BFA181;">Parkir</div><div style="font-size:0.93rem; color:#A8A8A8;">Parkir motor/sepeda</div></div>
                </div>
                <div class="fasilitas-card bounce-hover" style="background:#F7F0F5; border-radius:16px; display:flex; align-items:center; gap:12px; padding:14px 18px; box-shadow:0 1px 6px #A8D5BA11;">
                    <span style="font-size:2.1rem;">🛏️</span>
                    <div><div style="font-weight:700; color:#BFA181;">Kamar Nyaman</div><div style="font-size:0.93rem; color:#A8A8A8;">Kasur & lemari</div></div>
                </div>
                <div class="fasilitas-card bounce-hover" style="background:#F5F7F0; border-radius:16px; display:flex; align-items:center; gap:12px; padding:14px 18px; box-shadow:0 1px 6px #A8D5BA11;">
                    <span style="font-size:2.1rem;">🔒</span>
                    <div><div style="font-weight:700; color:#BFA181;">Keamanan</div><div style="font-size:0.93rem; color:#A8A8A8;">24 jam CCTV</div></div>
                </div>
            </div>
        </section>
        <section class="section section-gallery" style="margin-bottom: 36px;">
            <!-- GALERI FOTO -->
            <h3 class="section-title">Galeri Kost</h3>
            <div class="gallery fadein-anim" style="display:grid; grid-template-columns:repeat(auto-fit,minmax(180px,1fr)); gap:18px; margin-bottom:24px;">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Kamar 1" class="fadein-anim" style="height:120px; object-fit:cover; border-radius:22px; box-shadow:0 2px 12px #A8D5BA22; transition:transform 0.2s;">
                <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Kamar 2" class="fadein-anim" style="height:120px; object-fit:cover; border-radius:22px; box-shadow:0 2px 12px #A8D5BA22; transition:transform 0.2s;">
                <img src="https://images.unsplash.com/photo-1507089947368-19c1da9775ae?auto=format&fit=crop&w=400&q=80" alt="Ruang Tamu" class="fadein-anim" style="height:120px; object-fit:cover; border-radius:22px; box-shadow:0 2px 12px #A8D5BA22; transition:transform 0.2s;">
                <img src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=400&q=80" alt="Dapur" class="fadein-anim" style="height:120px; object-fit:cover; border-radius:22px; box-shadow:0 2px 12px #A8D5BA22; transition:transform 0.2s;">
            </div>
        </section>
        <section class="section section-testimoni" style="margin: 36px 0;">
            <!-- SLIDER TESTIMONI -->
            <h3 class="section-title">Testimoni Penghuni</h3>
            <div id="testi-slider" style="max-width:520px; margin:0 auto 32px auto; position:relative;">
                <div class="testi-slide" style="background:#F5E9DA; border-radius:18px; box-shadow:0 2px 12px #A8D5BA22; display:flex; align-items:center; gap:18px; padding:20px 24px; min-height:110px; transition:background 0.3s;">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sari" style="width:54px; height:54px; border-radius:50%; object-fit:cover; border:2px solid #A8D5BA;">
                    <div>
                        <div style="font-size:1.08rem; font-style:italic; color:#5B4636;">“Tempatnya nyaman, pengelolaan rapi, serasa di rumah sendiri!”</div>
                        <div style="font-size:0.95rem; color:#BFA181; margin-top:4px;">- Sari, penghuni sejak 2022</div>
                    </div>
                </div>
                <div class="testi-slide" style="background:#F0F7F4; border-radius:18px; box-shadow:0 2px 12px #A8D5BA22; display:flex; align-items:center; gap:18px; padding:20px 24px; min-height:110px; transition:background 0.3s; display:none;">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Budi" style="width:54px; height:54px; border-radius:50%; object-fit:cover; border:2px solid #A8D5BA;">
                    <div>
                        <div style="font-size:1.08rem; font-style:italic; color:#5B4636;">“Fasilitas lengkap, lokasi strategis, admin ramah!”</div>
                        <div style="font-size:0.95rem; color:#BFA181; margin-top:4px;">- Budi, penghuni sejak 2023</div>
                    </div>
                </div>
                <div class="testi-slide" style="background:#F7F0F5; border-radius:18px; box-shadow:0 2px 12px #A8D5BA22; display:flex; align-items:center; gap:18px; padding:20px 24px; min-height:110px; transition:background 0.3s; display:none;">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Maya" style="width:54px; height:54px; border-radius:50%; object-fit:cover; border:2px solid #A8D5BA;">
                    <div>
                        <div style="font-size:1.08rem; font-style:italic; color:#5B4636;">“Lingkungan tenang, cocok untuk belajar dan istirahat.”</div>
                        <div style="font-size:0.95rem; color:#BFA181; margin-top:4px;">- Maya, penghuni sejak 2021</div>
                    </div>
                </div>
                <button id="testi-prev" style="position:absolute; left:-18px; top:50%; transform:translateY(-50%); background:#fff; border:none; border-radius:50%; width:36px; height:36px; box-shadow:0 2px 8px #A8D5BA33; font-size:1.2rem; color:#BFA181; cursor:pointer; z-index:2;">&#8592;</button>
                <button id="testi-next" style="position:absolute; right:-18px; top:50%; transform:translateY(-50%); background:#fff; border:none; border-radius:50%; width:36px; height:36px; box-shadow:0 2px 8px #A8D5BA33; font-size:1.2rem; color:#BFA181; cursor:pointer; z-index:2;">&#8594;</button>
            </div>
        </section>
        <section class="section section-fitur" style="margin-bottom: 44px;">
            <!-- MENU FITUR -->
            <h3 class="section-title">Menu Fitur Aplikasi</h3>
            <div class="fitur-grid-modern" style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:32px; margin-bottom:32px;">
                <a class="fitur-card-modern" href="/penghuni" style="background:#F5E9DA;">
                    <span class="fitur-icon-modern" style="background:#fff3;">
                        <svg width="48" height="48" fill="none" stroke="#4F6F52" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="7" r="4"/><path d="M5.5 21v-2a4.5 4.5 0 0 1 9 0v2"/></svg>
                    </span>
                    <div class="fitur-title-modern">CRUD Penghuni</div>
                    <div class="fitur-desc-modern">Kelola data penghuni kost</div>
                </a>
                <a class="fitur-card-modern" href="/kamar" style="background:#F0F7F4;">
                    <span class="fitur-icon-modern" style="background:#fff3;">
                        <svg width="48" height="48" fill="none" stroke="#4F6F52" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect x="3" y="10" width="18" height="11" rx="2"/><path d="M7 21V7a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v14"/></svg>
                    </span>
                    <div class="fitur-title-modern">CRUD Kamar</div>
                    <div class="fitur-desc-modern">Kelola data kamar dan harga</div>
                </a>
                <a class="fitur-card-modern" href="/barang" style="background:#F7F5F0;">
                    <span class="fitur-icon-modern" style="background:#fff3;">
                        <svg width="48" height="48" fill="none" stroke="#4F6F52" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M16 3v4M8 3v4M3 11h18"/></svg>
                    </span>
                    <div class="fitur-title-modern">CRUD Barang</div>
                    <div class="fitur-desc-modern">Kelola barang bawaan penghuni</div>
                </a>
                <a class="fitur-card-modern" href="/relasi" style="background:#F0F5F7;">
                    <span class="fitur-icon-modern" style="background:#fff3;">
                        <svg width="48" height="48" fill="none" stroke="#4F6F52" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="7" cy="17" r="3"/><circle cx="17" cy="7" r="3"/><path d="M7 14v-4a4 4 0 0 1 4-4h4"/></svg>
                    </span>
                    <div class="fitur-title-modern">CRUD Relasi</div>
                    <div class="fitur-desc-modern">Relasi kamar & penghuni</div>
                </a>
                <a class="fitur-card-modern" href="/tagihan" style="background:#F7F0F5; position:relative;">
                    <span class="fitur-icon-modern" style="background:#fff3;">
                        <svg width="48" height="48" fill="none" stroke="#4F6F52" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 3v4M8 3v4M2 11h20"/></svg>
                    </span>
                    <div class="fitur-title-modern">CRUD Tagihan</div>
                    <div class="fitur-desc-modern">Kelola tagihan bulanan</div>
                    <span class="fitur-badge-promo" style="position:absolute; top:18px; right:22px; background:linear-gradient(90deg,#FFD700 60%,#FFF8F0 100%); color:#4F6F52; font-size:0.92rem; font-weight:900; border-radius:12px; padding:4px 16px; box-shadow:0 2px 8px #FFD70044; animation:shine 1.5s infinite linear alternate;">Promo</span>
                </a>
                <a class="fitur-card-modern" href="/bayar" style="background:#F5F7F0;">
                    <span class="fitur-icon-modern" style="background:#fff3;">
                        <svg width="48" height="48" fill="none" stroke="#4F6F52" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M16 12l-4 4-2-2"/></svg>
                    </span>
                    <div class="fitur-title-modern">CRUD Pembayaran</div>
                    <div class="fitur-desc-modern">Kelola pembayaran penghuni</div>
                </a>
            </div>
            <style>
            .fitur-grid-modern {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                gap: 32px;
                margin-bottom: 32px;
            }
            .fitur-card-modern {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                background: #fff;
                border-radius: 28px;
                box-shadow: 0 8px 32px #A8D5BA33;
                padding: 36px 18px 28px 18px;
                text-decoration: none;
                transition: box-shadow 0.22s, transform 0.22s, background 0.22s;
                position: relative;
                min-height: 240px;
                cursor: pointer;
                overflow: hidden;
            }
            .fitur-card-modern:hover {
                box-shadow: 0 16px 48px #A8D5BA55;
                transform: scale(1.045) translateY(-4px);
                background: #fffbe9;
            }
            .fitur-icon-modern {
                width: 72px;
                height: 72px;
                border-radius: 50%;
                background: #fff3;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 18px;
                transition: transform 0.22s;
            }
            .fitur-card-modern:hover .fitur-icon-modern {
                transform: scale(1.13) rotate(-6deg);
            }
            .fitur-title-modern {
                font-size: 1.22rem;
                font-weight: 800;
                color: #4F6F52;
                margin-bottom: 6px;
                text-align: center;
                letter-spacing: 0.5px;
            }
            .fitur-desc-modern {
                font-size: 1.01rem;
                color: #BFA181;
                text-align: center;
                font-weight: 500;
            }
            .fitur-badge-promo {
                background: linear-gradient(90deg,#FFD700 60%,#FFF8F0 100%);
                color: #4F6F52;
                font-size: 0.92rem;
                font-weight: 900;
                border-radius: 12px;
                padding: 4px 16px;
                box-shadow: 0 2px 8px #FFD70044;
                animation: shine 1.5s infinite linear alternate;
            }
            @keyframes shine {
                from { filter: brightness(1); }
                to { filter: brightness(1.18); }
            }
            @media (max-width: 700px) {
                .fitur-grid-modern {
                    grid-template-columns: 1fr;
                    gap: 18px;
                }
                .fitur-card-modern {
                    padding: 24px 8px 18px 8px;
                    min-height: 180px;
                }
                .fitur-icon-modern {
                    width: 54px; height: 54px;
                }
            }
            </style>
        </section>
        <section class="section section-kontak" style="margin: 44px 0 36px 0;">
            <!-- FORM KONTAK -->
            <h3 class="section-title">Form Kontak Cepat</h3>
            <div class="card" style="background: linear-gradient(120deg, #F0F7F4 60%, #FFF8F0 100%); box-shadow:0 2px 12px #A8D5BA22; border-radius:22px; padding:32px 24px; margin-bottom:32px;">
                <form class="form-kontak" method="post" action="">
                    <?php if (isset($_POST['nama'])): ?>
                        <div class="success">Pesan Anda sudah terkirim! Kami akan segera menghubungi Anda.</div>
                    <?php endif; ?>
                    <label for="nama" style="font-weight:700;">Nama</label>
                    <input type="text" id="nama" name="nama" required style="font-size:1.08rem;">
                    <label for="email" style="font-weight:700;">Email / No. HP</label>
                    <input type="text" id="email" name="email" required style="font-size:1.08rem;">
                    <label for="pesan" style="font-weight:700;">Pesan</label>
                    <textarea id="pesan" name="pesan" required style="font-size:1.08rem;"></textarea>
                    <button type="submit" style="background:#A8D5BA; color:#fff; border:none; border-radius:24px; padding:12px 32px; font-size:1.1rem; font-family:'Nunito','Quicksand',Arial,sans-serif; cursor:pointer; margin-top:8px; box-shadow:0 2px 8px #A8D5BA22;">Kirim Pesan</button>
                </form>
            </div>
        </section>
        <section class="section section-faq" style="margin: 44px 0 36px 0;">
            <!-- FAQ -->
            <h3 class="section-title">FAQ</h3>
            <div class="card" style="background:#F5E9DA; border-radius:18px; box-shadow:0 2px 12px #A8D5BA22; padding:28px 22px; margin-bottom:32px;">
                <div class="faq-accordion">
                    <div class="faq-item" style="margin-bottom:10px;">
                        <button class="faq-question" style="width:100%; background:none; border:none; text-align:left; font-weight:700; color:#4F6F52; font-size:1.08rem; display:flex; align-items:center; gap:8px; cursor:pointer; padding:12px 0; transition:background 0.2s;"><span style="transition:transform 0.2s;">&#9654;</span> Apakah bisa sewa bulanan?</button>
                        <div class="faq-answer" style="padding:0 0 12px 28px; color:#5B4636; display:none; font-size:1rem;">Ya, pembayaran dilakukan setiap bulan di awal bulan.</div>
                    </div>
                    <div class="faq-item" style="margin-bottom:10px;">
                        <button class="faq-question" style="width:100%; background:none; border:none; text-align:left; font-weight:700; color:#4F6F52; font-size:1.08rem; display:flex; align-items:center; gap:8px; cursor:pointer; padding:12px 0; transition:background 0.2s;"><span style="transition:transform 0.2s;">&#9654;</span> Apakah boleh membawa hewan peliharaan?</button>
                        <div class="faq-answer" style="padding:0 0 12px 28px; color:#5B4636; display:none; font-size:1rem;">Mohon maaf, untuk kenyamanan bersama, hewan peliharaan tidak diperbolehkan.</div>
                    </div>
                    <div class="faq-item" style="margin-bottom:10px;">
                        <button class="faq-question" style="width:100%; background:none; border:none; text-align:left; font-weight:700; color:#4F6F52; font-size:1.08rem; display:flex; align-items:center; gap:8px; cursor:pointer; padding:12px 0; transition:background 0.2s;"><span style="transition:transform 0.2s;">&#9654;</span> Bagaimana cara booking kamar?</button>
                        <div class="faq-answer" style="padding:0 0 12px 28px; color:#5B4636; display:none; font-size:1rem;">Silakan hubungi kontak di bawah atau datang langsung ke lokasi.</div>
                    </div>
        </div>
        </div>
        </section>
        <section class="section section-peta" style="margin: 44px 0 36px 0;">
            <!-- PETA LOKASI -->
            <h3 class="section-title" style="font-size:1.1rem;">Lokasi Kost</h3>
            <div class="card" style="background:#F5E9DA; border-radius:18px; box-shadow:0 2px 12px #A8D5BA22; padding:28px 22px; margin-bottom:32px;">
                <iframe src="https://www.google.com/maps?q=-6.200000,106.816666&hl=es;z=14&output=embed" width="100%" height="200" style="border:0; border-radius:12px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        </section>
        <footer class="footer-soft" style="margin-top:44px; text-align:center; color:#BFA181; font-size:0.92rem; opacity:0.8; letter-spacing:1px; background:#F5E9DA; padding:36px 0 0 0; border-top:1px solid #F0F7F4; border-radius:0 0 40px 40px;">&copy; <?= date('Y') ?> Kost Harmoni &middot; Cozy Stay for Everyone</footer>
    </div>
    <!-- DARK MODE TOGGLE -->
    <button id="darkModeToggle" style="position:fixed; top:24px; right:32px; z-index:100; background:#F5E9DA; color:#4F6F52; border:none; border-radius:50%; width:44px; height:44px; box-shadow:0 2px 8px #A8D5BA33; font-size:1.3rem; cursor:pointer; display:flex; align-items:center; justify-content:center; transition:background 0.2s, color 0.2s;"><span id="darkModeIcon">🌙</span></button>
    <script>
    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', function() {
            const item = this.parentElement;
            const answer = item.querySelector('.faq-answer');
            const arrow = this.querySelector('span');
            if (item.classList.contains('active')) {
                answer.style.display = 'none';
                arrow.style.transform = 'rotate(0deg)';
                item.classList.remove('active');
            } else {
                document.querySelectorAll('.faq-item').forEach(i => {
                    i.classList.remove('active');
                    i.querySelector('.faq-answer').style.display = 'none';
                    i.querySelector('span').style.transform = 'rotate(0deg)';
                });
                answer.style.display = 'block';
                arrow.style.transform = 'rotate(90deg)';
                item.classList.add('active');
            }
        });
    });
    // Slider Testimoni
    const slides = document.querySelectorAll('.testi-slide');
    let idx = 0;
    let testiTimer = null;
    function showTesti(i) {
        slides.forEach((s, j) => s.style.display = (i === j) ? 'flex' : 'none');
    }
    function nextTesti() {
        idx = (idx + 1) % slides.length;
        showTesti(idx);
    }
    function prevTesti() {
        idx = (idx - 1 + slides.length) % slides.length;
        showTesti(idx);
    }
    document.getElementById('testi-prev').onclick = function() { prevTesti(); resetTestiTimer(); };
    document.getElementById('testi-next').onclick = function() { nextTesti(); resetTestiTimer(); };
    function resetTestiTimer() {
        if (testiTimer) clearInterval(testiTimer);
        testiTimer = setInterval(nextTesti, 5000);
    }
    showTesti(idx);
    resetTestiTimer();
    // Pause on hover
    const slider = document.getElementById('testi-slider');
    slider.addEventListener('mouseenter', ()=>{ if(testiTimer) clearInterval(testiTimer); });
    slider.addEventListener('mouseleave', resetTestiTimer);
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
    // Fade-in anim
    window.addEventListener('DOMContentLoaded',()=>{
        document.querySelectorAll('.fadein-anim').forEach((el,i)=>{
            setTimeout(()=>el.style.opacity=1, 200+100*i);
        });
    });
    // Section fade-in on scroll
    const observer = new IntersectionObserver((entries)=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting) entry.target.classList.add('visible');
        });
    },{threshold:0.15});
    document.querySelectorAll('.section').forEach(sec=>observer.observe(sec));
    </script>
</body>
</html>
