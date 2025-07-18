<!DOCTYPE html>
<html>
<head>
    <title>Edit Penghuni</title>
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
        .container {
            width: auto;
            max-width: 98vw;
            min-width: 0;
            margin: 40px auto;
            background: #fff;
            border-radius: 28px;
            box-shadow: 0 8px 32px #BFA18122;
            padding: 36px 4vw 28px 4vw;
            position: relative;
            transition: max-width 0.2s, padding 0.2s;
        }
        @media (min-width: 500px) {
            .container { max-width: 480px; padding: 36px 28px 28px 28px; }
        }
        h1 {
            color: #4F6F52;
            font-size: 1.4rem;
            font-weight: 800;
            margin-bottom: 24px;
            letter-spacing: 1px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            font-weight: 700;
            color: #BFA181;
            margin-bottom: 6px;
            display: block;
        }
        input[type="text"], input[type="date"], input[type="tel"] {
            width: 100%;
            padding: 10px 16px;
            border: 1.5px solid #A8D5BA;
            border-radius: 16px;
            font-size: 1rem;
            background: #FFF8F0;
            font-family: 'Nunito', Arial, sans-serif;
            margin-bottom: 4px;
            transition: border 0.2s;
        }
        input:focus {
            border-color: #4F6F52;
            outline: none;
        }
        .btn {
            background: linear-gradient(90deg, #A8D5BA 70%, #BFA181 100%);
            color: #fff;
            border: none;
            border-radius: 22px;
            padding: 12px 28px;
            font-size: 1.08rem;
            font-weight: 700;
            box-shadow: 0 2px 8px #A8D5BA22;
            cursor: pointer;
            transition: background 0.2s, color 0.2s, transform 0.2s;
            width: 100%;
            margin-top: 8px;
        }
        .btn:hover {
            background: linear-gradient(90deg, #BFA181 70%, #A8D5BA 100%);
            color: #FFF8F0;
            transform: scale(1.04);
        }
        .back-link {
            display: block;
            margin: 18px auto 0 auto;
            text-align: center;
            color: #A8D5BA;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: color 0.2s;
        }
        .back-link:hover { color: #388e3c; }
        .dark-toggle {
            position: absolute;
            top: 18px;
            right: 24px;
            background: #F5E9DA;
            color: #4F6F52;
            border: none;
            border-radius: 50%;
            width: 38px;
            height: 38px;
            box-shadow: 0 2px 8px #A8D5BA33;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .error {
            color: #d32f2f;
            font-size: 0.95rem;
            margin-top: 2px;
            margin-bottom: 2px;
        }
        input:invalid {
            border-color: #d32f2f;
        }
        input:valid {
            border-color: #388e3c;
        }
        @media (max-width: 600px) {
            .container { padding: 12px 2vw; }
            h1 { font-size: 1.1rem; }
        }
        body.dark-mode {
            background: linear-gradient(120deg, #23272f 60%, #3a4d3f 100%) !important;
            color: #e6e6e6 !important;
        }
        body.dark-mode .container { background: #23272f !important; color: #e6e6e6 !important; }
        body.dark-mode input, body.dark-mode input[type="text"], body.dark-mode input[type="date"], body.dark-mode input[type="tel"] { background: #2d323b !important; color: #FFD700 !important; border-color: #388e3c !important; }
        body.dark-mode .btn, body.dark-mode .dark-toggle { background: #388e3c !important; color: #fff !important; }
        body.dark-mode .btn:hover { background: #FFD700 !important; color: #23272f !important; }
        body.dark-mode .dark-toggle { background: #23272f !important; color: #FFD700 !important; }
    </style>
</head>
<body>
    <div class="container">
        <button class="dark-toggle" id="darkModeToggle" title="Dark Mode"><span id="darkModeIcon">🌙</span></button>
        <h1>Edit Penghuni</h1>
        <form method="post" action="/penghuni/update/<?= $penghuni['id'] ?>" autocomplete="off" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="<?= esc($penghuni['nama']) ?>" required placeholder="Masukkan nama penghuni" autofocus aria-label="Nama Penghuni">
                <div class="error" id="err-nama" style="display:none;">Nama wajib diisi</div>
            </div>
            <div class="form-group">
                <label for="no_ktp">No KTP</label>
                <input type="text" id="no_ktp" name="no_ktp" value="<?= esc($penghuni['no_ktp']) ?>" required pattern="\d{16}" maxlength="16" placeholder="Masukkan 16 digit No KTP" aria-label="No KTP">
                <div class="error" id="err-ktp" style="display:none;">No KTP wajib 16 digit angka</div>
            </div>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="tel" id="no_hp" name="no_hp" value="<?= esc($penghuni['no_hp']) ?>" required pattern="\d{10,15}" maxlength="15" placeholder="Masukkan No HP" aria-label="No HP">
                <div class="error" id="err-hp" style="display:none;">No HP wajib diisi (10-15 digit angka)</div>
            </div>
            <div class="form-group">
                <label for="tgl_masuk">Tgl Masuk</label>
                <input type="date" id="tgl_masuk" name="tgl_masuk" value="<?= esc($penghuni['tgl_masuk']) ?>" required aria-label="Tanggal Masuk">
                <div class="error" id="err-masuk" style="display:none;">Tanggal masuk wajib diisi</div>
            </div>
            <div class="form-group">
                <label for="tgl_keluar">Tgl Keluar</label>
                <input type="date" id="tgl_keluar" name="tgl_keluar" value="<?= esc($penghuni['tgl_keluar']) ?>" aria-label="Tanggal Keluar">
            </div>
            <button type="submit" class="btn" id="btnSubmit">Update</button>
        </form>
        <a href="/penghuni" class="back-link">&larr; Kembali</a>
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
    // Validasi visual
    function validateForm() {
        let valid = true;
        const nama = document.getElementById('nama');
        const ktp = document.getElementById('no_ktp');
        const hp = document.getElementById('no_hp');
        const masuk = document.getElementById('tgl_masuk');
        const errNama = document.getElementById('err-nama');
        const errKtp = document.getElementById('err-ktp');
        const errHp = document.getElementById('err-hp');
        const errMasuk = document.getElementById('err-masuk');
        if (!nama.value.trim()) {
            errNama.style.display = 'block';
            nama.style.borderColor = '#d32f2f';
            valid = false;
        } else {
            errNama.style.display = 'none';
            nama.style.borderColor = '#388e3c';
        }
        if (!ktp.value.match(/^\d{16}$/)) {
            errKtp.style.display = 'block';
            ktp.style.borderColor = '#d32f2f';
            valid = false;
        } else {
            errKtp.style.display = 'none';
            ktp.style.borderColor = '#388e3c';
        }
        if (!hp.value.match(/^\d{10,15}$/)) {
            errHp.style.display = 'block';
            hp.style.borderColor = '#d32f2f';
            valid = false;
        } else {
            errHp.style.display = 'none';
            hp.style.borderColor = '#388e3c';
        }
        if (!masuk.value) {
            errMasuk.style.display = 'block';
            masuk.style.borderColor = '#d32f2f';
            valid = false;
        } else {
            errMasuk.style.display = 'none';
            masuk.style.borderColor = '#388e3c';
        }
        if (!valid) return false;
        document.getElementById('btnSubmit').disabled = true;
        document.getElementById('btnSubmit').innerHTML = 'Menyimpan...';
        return true;
    }
    document.getElementById('nama').focus();
    </script>
</body>
</html>
