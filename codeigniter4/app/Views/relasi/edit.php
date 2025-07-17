<!DOCTYPE html>
<html>
<head>
    <title>Edit Relasi Penghuni & Kamar</title>
</head>
<body>
    <h1>Edit Relasi Penghuni & Kamar</h1>
    <form method="post" action="/relasi/update/<?= $relasi['id'] ?>">
        Kamar:
        <select name="id_kamar" required>
            <?php foreach ($kamar as $k): ?>
                <option value="<?= $k['id'] ?>" <?= $relasi['id_kamar'] == $k['id'] ? 'selected' : '' ?>><?= esc($k['nomor']) ?></option>
            <?php endforeach; ?>
        </select><br>
        Penghuni:
        <select name="id_penghuni" required>
            <?php foreach ($penghuni as $p): ?>
                <option value="<?= $p['id'] ?>" <?= $relasi['id_penghuni'] == $p['id'] ? 'selected' : '' ?>><?= esc($p['nama']) ?></option>
            <?php endforeach; ?>
        </select><br>
        Tgl Masuk: <input type="date" name="tgl_masuk" value="<?= esc($relasi['tgl_masuk']) ?>" required><br>
        Tgl Keluar: <input type="date" name="tgl_keluar" value="<?= esc($relasi['tgl_keluar']) ?>"><br>
        <button type="submit">Update</button>
    </form>
    <a href="/relasi">Kembali</a>
</body>
</html>
