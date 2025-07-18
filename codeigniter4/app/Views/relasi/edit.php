<!DOCTYPE html>
<html>
<head>
    <title>Edit Relasi Penghuni & Kamar</title>
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
            .container { max-width: 440px; padding: 36px 28px 28px 28px; }
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
        select, input[type="date"] {
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
        select:focus, input:focus {
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
        select:invalid, input:invalid {
            border-color: #d32f2f;
        }
        select:valid, input:valid {
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
        body.dark-mode select, body.dark-mode input[type="date"] { background: #2d323b !important; color: #FFD700 !important; border-color: #388e3c !important; }
        body.dark-mode .btn, body.dark-mode .dark-toggle { background: #388e3c !important; color: #fff !important; }
        body.dark-mode .btn:hover { background: #FFD700 !important; color: #23272f !important; }
        body.dark-mode .dark-toggle { background: #23272f !important; color: #FFD700 !important; }
    </style>
</head>
<body>
    <div class="container">
        <button class="dark-toggle" id="darkModeToggle" title="Dark Mode"><span id="darkModeIcon">🌙</span></button>
        <h1>Edit Relasi Penghuni & Kamar</h1>
        <form method="post" action="/relasi/update/<?= $relasi['id'] ?>" autocomplete="off" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="id_kamar">Kamar</label>
                <select name="id_kamar" id="id_kamar" required aria-label="Kamar">
                    <option value="">Pilih kamar...</option>
                    <?php foreach ($kamar as $k): ?>
                        <option value="<?= $k['id'] ?>" <?= $relasi['id_kamar'] == $k['id'] ? 'selected' : '' ?>><?= esc($k['nomor']) ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="error" id="err-kamar" style="display:none;">Kamar wajib dipilih</div>
            </div>
            <div class="form-group">
                <label for="id_penghuni">Penghuni</label>
                <select name="id_penghuni" id="id_penghuni" required aria-label="Penghuni">
                    <option value="">Pilih penghuni...</option>
                    <?php foreach ($penghuni as $p): ?>
                        <option value="<?= $p['id'] ?>" <?= $relasi['id_penghuni'] == $p['id'] ? 'selected' : '' ?>><?= esc($p['nama']) ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="error" id="err-penghuni" style="display:none;">Penghuni wajib dipilih</div>
            </div>
            <div class="form-group">
                <label for="tgl_masuk">Tgl Masuk</label>
                <input type="date" id="tgl_masuk" name="tgl_masuk" value="<?= esc($relasi['tgl_masuk']) ?>" required aria-label="Tanggal Masuk">
                <div class="error" id="err-masuk" style="display:none;">Tanggal masuk wajib diisi</div>
            </div>
            <div class="form-group">
                <label for="tgl_keluar">Tgl Keluar</label>
                <input type="date" id="tgl_keluar" name="tgl_keluar" value="<?= esc($relasi['tgl_keluar']) ?>" aria-label="Tanggal Keluar">
            </div>
            <button type="submit" class="btn" id="btnSubmit">Update</button>
        </form>
        <a href="/relasi" class="back-link">&larr; Kembali</a>
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
        const kamar = document.getElementById('id_kamar');
        const penghuni = document.getElementById('id_penghuni');
        const masuk = document.getElementById('tgl_masuk');
        const errKamar = document.getElementById('err-kamar');
        const errPenghuni = document.getElementById('err-penghuni');
        const errMasuk = document.getElementById('err-masuk');
        if (!kamar.value) {
            errKamar.style.display = 'block';
            kamar.style.borderColor = '#d32f2f';
            valid = false;
        } else {
            errKamar.style.display = 'none';
            kamar.style.borderColor = '#388e3c';
        }
        if (!penghuni.value) {
            errPenghuni.style.display = 'block';
            penghuni.style.borderColor = '#d32f2f';
            valid = false;
        } else {
            errPenghuni.style.display = 'none';
            penghuni.style.borderColor = '#388e3c';
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
    document.getElementById('id_kamar').focus();
    </script>
</body>
</html>
