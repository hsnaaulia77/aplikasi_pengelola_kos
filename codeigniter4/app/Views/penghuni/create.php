<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penghuni</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Form Tambah Penghuni -->
    <div class="form-container">
        <h2>Tambah Penghuni</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="ktp">No KTP:</label>
                <input type="text" id="ktp" name="ktp" required>
            </div>
            <div class="form-group">
                <label for="hp">No HP:</label>
                <input type="text" id="hp" name="hp" required>
            </div>
            <div class="form-group">
                <label for="tgl_masuk">Tgl Masuk:</label>
                <input type="date" id="tgl_masuk" name="tgl_masuk" required>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-primary">Simpan</button>
                <a href="<?= base_url('penghuni') ?>" class="btn-link">Kembali</a>
            </div>
        </form>
    </div>

    <style>
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
        color: #bfa181;
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
    .form-group input[type="text"],
    .form-group input[type="date"] {
        border: 1.5px solid #A8D5BA;
        border-radius: 12px;
        padding: 10px 14px;
        font-size: 1rem;
        background: #f9f6f2;
        font-family: 'Nunito', Arial, sans-serif;
        transition: border 0.2s;
    }
    .form-group input:focus {
        border-color: #bfa181;
        outline: none;
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
    }
    </style>
</body>
</html>
