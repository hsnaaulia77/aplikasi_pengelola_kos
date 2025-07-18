<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kamar</title>
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
        input[type="text"], input[type="number"] {
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
        body.dark-mode input, body.dark-mode input[type="text"], body.dark-mode input[type="number"] { background: #2d323b !important; color: #FFD700 !important; border-color: #388e3c !important; }
        body.dark-mode .btn, body.dark-mode .dark-toggle { background: #388e3c !important; color: #fff !important; }
        body.dark-mode .btn:hover { background: #FFD700 !important; color: #23272f !important; }
        body.dark-mode .dark-toggle { background: #23272f !important; color: #FFD700 !important; }
        .form-container {
            background: #fff;
            border-radius: 28px;
            box-shadow: 0 4px 32px #bfa18122;
            max-width: 380px;
            margin: 48px auto;
            padding: 36px 32px 28px 32px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
        .form-container h2 {
            color: #4F6F52;
            font-size: 1.7rem;
            font-weight: 800;
            margin-bottom: 24px;
            text-align: center;
            letter-spacing: 1px;
        }
        .form-group {
            margin-bottom: 18px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
        .form-group label {
            font-weight: 600;
            color: #8d7b6a;
            margin-bottom: 6px;
        }
        .form-group input[type="text"] {
            border: 1.5px solid #A8D5BA;
            border-radius: 12px;         /* Lebih proporsional, tidak terlalu bulat */
            padding: 12px 16px;
            font-size: 1.08rem;
            background: #f9f6f2;
            font-family: 'Nunito', Arial, sans-serif;
            transition: border 0.2s, box-shadow 0.2s;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 2px;
            color: #4F6F52;
        }
        .form-group input[type="text"]:focus {
            border-color: #bfa181;
            box-shadow: 0 0 0 2px #A8D5BA33;
            outline: none;
        }
        .form-group input[type="text"].is-invalid {
            border-color: #e57373 !important;   /* Warna merah soft untuk error */
            background: #fff6f6;
        }
        .form-actions {
            display: flex;
            gap: 12px;
            align-items: center;
            margin-top: 8px;
        }
        .btn-primary {
            background: linear-gradient(90deg, #A8D5BA 70%, #bfa181 100%);
            color: #fff;
            border: none;
            border-radius: 18px;
            padding: 10px 28px;
            font-size: 1.08rem;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 2px 8px #A8D5BA22;
            transition: background 0.2s, color 0.2s, transform 0.2s;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #bfa181 70%, #A8D5BA 100%);
            color: #fffbe9;
            transform: scale(1.04);
        }
        .btn-link {
            background: none;
            border: none;
            color: #bfa181;
            font-size: 1rem;
            text-decoration: underline;
            cursor: pointer;
            padding: 0;
        }
        .btn-link:hover {
            color: #8d7b6a;
        }
        @media (max-width: 600px) {
            .form-container {
                max-width: 98vw;
                padding: 18px 6vw;
            }
            .form-container h2 { font-size: 1.2rem; }
            .form-group input[type="text"] {
                font-size: 1rem;
                padding: 10px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="dark-toggle" id="darkModeToggle" title="Dark Mode"><span id="darkModeIcon">🌙</span></button>
        <h1>Tambah Kamar</h1>
        <form method="post" action="/kamar/store" autocomplete="off" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="nomor">Nomor</label>
                <input type="text" id="nomor" name="nomor" required placeholder="Masukkan nomor kamar" autofocus aria-label="Nomor Kamar">
                <div class="error" id="err-nomor" style="display:none;">Nomor kamar wajib diisi</div>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" id="harga" name="harga" placeholder="Masukkan harga kamar (Rp)" 
                    class="<?= isset($validation) && $validation->hasError('harga') ? 'is-invalid' : '' ?>" 
                    required>
                <?php if (isset($validation) && $validation->hasError('harga')): ?>
                    <div class="invalid-feedback" style="color:#e57373; font-size:0.95em; margin-top:2px;">
                        <?= $validation->getError('harga') ?>
                    </div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn" id="btnSubmit">Simpan</button>
        </form>
        <a href="/kamar" class="back-link">&larr; Kembali</a>
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
        const nomor = document.getElementById('nomor');
        const harga = document.getElementById('harga');
        const errNomor = document.getElementById('err-nomor');
        const errHarga = document.getElementById('err-harga');
        if (!nomor.value.trim()) {
            errNomor.style.display = 'block';
            nomor.style.borderColor = '#d32f2f';
            valid = false;
        } else {
            errNomor.style.display = 'none';
            nomor.style.borderColor = '#388e3c';
        }
        if (!harga.value.trim() || isNaN(harga.value) || Number(harga.value) < 0) {
            errHarga.style.display = 'block';
            harga.style.borderColor = '#d32f2f';
            valid = false;
        } else {
            errHarga.style.display = 'none';
            harga.style.borderColor = '#388e3c';
        }
        if (!valid) return false;
        document.getElementById('btnSubmit').disabled = true;
        document.getElementById('btnSubmit').innerHTML = 'Menyimpan...';
        return true;
    }
    document.getElementById('nomor').focus();
    </script>
</body>
</html>
