<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penghuni</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Penghuni</h1>
        <form method="post" action="/penghuni/store">
            Nama: <input type="text" name="nama" required><br>
            No KTP: <input type="text" name="no_ktp" required><br>
            No HP: <input type="text" name="no_hp" required><br>
            Tgl Masuk: <input type="date" name="tgl_masuk" required><br>
            <button type="submit">Simpan</button>
        </form>
        <a href="/penghuni">Kembali</a>
    </div>
    <style>
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
    </style>
</body>
</html>
