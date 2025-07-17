<!DOCTYPE html>
<html>
<head>
    <title>Tambah Relasi Penghuni & Kamar</title>
</head>
<body>
    <h1>Tambah Relasi Penghuni & Kamar</h1>
    <form method="post" action="/relasi/store">
        Kamar:
        <select name="id_kamar" required>
            <?php foreach ($kamar as $k): ?>
                <option value="<?= $k['id'] ?>"><?= esc($k['nomor']) ?></option>
            <?php endforeach; ?>
        </select><br>
        Penghuni:
        <select name="id_penghuni" required>
            <?php foreach ($penghuni as $p): ?>
                <option value="<?= $p['id'] ?>"><?= esc($p['nama']) ?></option>
            <?php endforeach; ?>
        </select><br>
        Tgl Masuk: <input type="date" name="tgl_masuk" required><br>
        Tgl Keluar: <input type="date" name="tgl_keluar"><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="/relasi">Kembali</a>
</body>
</html>
