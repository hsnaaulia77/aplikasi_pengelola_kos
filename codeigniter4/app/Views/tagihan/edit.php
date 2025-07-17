<!DOCTYPE html>
<html>
<head>
    <title>Edit Tagihan</title>
</head>
<body>
    <h1>Edit Tagihan</h1>
    <form method="post" action="/tagihan/update/<?= $tagihan['id'] ?>">
        Bulan (YYYY-MM): <input type="text" name="bulan" value="<?= esc($tagihan['bulan']) ?>" required><br>
        Relasi Kamar-Penghuni:
        <select name="id_kmr_penghuni" required>
            <?php foreach ($relasi as $r): ?>
                <option value="<?= $r['id'] ?>" <?= $tagihan['id_kmr_penghuni'] == $r['id'] ? 'selected' : '' ?>>ID <?= $r['id'] ?></option>
            <?php endforeach; ?>
        </select><br>
        Jumlah Tagihan: <input type="number" name="jml_tagihan" value="<?= esc($tagihan['jml_tagihan']) ?>" required><br>
        <button type="submit">Update</button>
    </form>
    <a href="/tagihan">Kembali</a>
</body>
</html>
