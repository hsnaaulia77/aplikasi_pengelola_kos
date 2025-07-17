<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tagihan</title>
</head>
<body>
    <h1>Tambah Tagihan</h1>
    <form method="post" action="/tagihan/store">
        Bulan (YYYY-MM): <input type="text" name="bulan" required><br>
        Relasi Kamar-Penghuni:
        <select name="id_kmr_penghuni" required>
            <?php foreach ($relasi as $r): ?>
                <option value="<?= $r['id'] ?>">ID <?= $r['id'] ?></option>
            <?php endforeach; ?>
        </select><br>
        Jumlah Tagihan: <input type="number" name="jml_tagihan" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="/tagihan">Kembali</a>
</body>
</html>
