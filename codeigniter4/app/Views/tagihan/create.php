<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tagihan</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: #f8f6f3;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            transition: background 0.3s;
        }
        .dark-mode { background: #232323; color: #f8f6f3; }
        .container {
            width: auto;
            max-width: 98vw;
            min-width: 0;
            margin: 40px auto;
            background: #fffbe9;
            border-radius: 22px;
            box-shadow: 0 6px 32px rgba(80,60,30,0.10);
            padding: 36px 4vw 24px 4vw;
            position: relative;
            transition: max-width 0.2s, padding 0.2s;
        }
        .dark-mode .container { background: #2d2d2d; color: #f8f6f3; }
        h1 {
            text-align: center;
            color: #7c5e2c;
            margin-bottom: 24px;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .dark-mode h1 { color: #e2c68d; }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
        }
        input, select {
            width: 100%;
            padding: 12px 14px;
            margin-bottom: 18px;
            border: 2px solid #e2c68d;
            border-radius: 16px;
            background: #fff;
            font-size: 1rem;
            transition: border 0.2s, background 0.3s;
            outline: none;
        }
        input:focus, select:focus {
            border-color: #7fc29b;
            background: #f4f9f6;
        }
        .dark-mode input, .dark-mode select {
            background: #232323;
            color: #f8f6f3;
            border-color: #7c5e2c;
        }
        .dark-mode input:focus, .dark-mode select:focus {
            background: #2d2d2d;
            border-color: #7fc29b;
        }
        .error {
            border-color: #e57373 !important;
        }
        .success {
            border-color: #7fc29b !important;
        }
        .notif-success {
            background: #d0f5e8;
            color: #2e7d32;
            border-radius: 12px;
            padding: 10px 16px;
            margin-bottom: 18px;
            text-align: center;
            font-weight: 600;
            display: none;
        }
        .dark-mode .notif-success {
            background: #355c47;
            color: #b6f2d6;
        }
        button[type="submit"] {
            width: 100%;
            background: linear-gradient(90deg,#7fc29b,#e2c68d);
            color: #fff;
            border: none;
            border-radius: 16px;
            padding: 14px 0;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(80,60,30,0.10);
            transition: background 0.2s, transform 0.2s;
        }
        button[type="submit"]:hover:not(:disabled) {
            background: linear-gradient(90deg,#e2c68d,#7fc29b);
            transform: translateY(-2px) scale(1.03);
        }
        button[disabled] {
            opacity: 0.6;
            cursor: not-allowed;
        }
        .toggle-dark {
            position: absolute;
            top: 18px;
            right: 18px;
            background: #e2c68d;
            border: none;
            border-radius: 50%;
            width: 38px;
            height: 38px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }
        .toggle-dark svg {
            width: 22px;
            height: 22px;
        }
        .dark-mode .toggle-dark { background: #7c5e2c; }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #7c5e2c;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }
        .back-link:hover { color: #7fc29b; }
        @media (max-width: 500px) {
            .container { padding: 18px 6vw 16px 6vw; }
        }
        @media (min-width: 500px) {
            .container { max-width: 440px; padding: 32px 28px 24px 28px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="toggle-dark" type="button" onclick="toggleDarkMode()" title="Toggle dark mode">
            <span id="darkIcon">🌙</span>
        </button>
        <h1>Tambah Tagihan</h1>
        <div class="notif-success" id="notifSuccess">Tagihan berhasil disimpan!</div>
        <form id="formTagihan" method="post" action="/tagihan/store" autocomplete="off" onsubmit="return handleSubmit(event)">
            <label for="bulan">Bulan</label>
            <input type="month" id="bulan" name="bulan" placeholder="Pilih bulan" required autofocus>
            <label for="id_kmr_penghuni">Relasi Kamar-Penghuni</label>
            <select id="id_kmr_penghuni" name="id_kmr_penghuni" required>
                <option value="">Pilih relasi kamar-penghuni</option>
                <?php foreach ($relasi as $r): ?>
                    <option value="<?= $r['id'] ?>">ID <?= $r['id'] ?></option>
                <?php endforeach; ?>
            </select>
            <label for="jml_tagihan">Jumlah Tagihan</label>
            <input type="number" id="jml_tagihan" name="jml_tagihan" placeholder="Masukkan jumlah tagihan" min="0" required>
            <button type="submit" id="btnSubmit">Simpan</button>
        </form>
        <a href="/tagihan" class="back-link">&larr; Kembali</a>
    </div>
    <script>
        // Dark mode toggle
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            document.getElementById('darkIcon').textContent = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
        }
        // Validasi visual
        const form = document.getElementById('formTagihan');
        const bulan = document.getElementById('bulan');
        const relasi = document.getElementById('id_kmr_penghuni');
        const jml = document.getElementById('jml_tagihan');
        [bulan, relasi, jml].forEach(input => {
            input.addEventListener('input', function() {
                if (this.checkValidity()) {
                    this.classList.remove('error');
                    this.classList.add('success');
                } else {
                    this.classList.remove('success');
                    this.classList.add('error');
                }
            });
        });
        // Disable submit saat proses
        function handleSubmit(e) {
            const btn = document.getElementById('btnSubmit');
            btn.disabled = true;
            setTimeout(() => { btn.disabled = false; }, 2000);
            // Notifikasi sukses simulasi (replace dengan flashdata jika backend)
            document.getElementById('notifSuccess').style.display = 'block';
            setTimeout(() => { document.getElementById('notifSuccess').style.display = 'none'; }, 2500);
            // Untuk demo, tetap submit form
            return true;
        }
    </script>
</body>
</html>
