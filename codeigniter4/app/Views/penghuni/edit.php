<!DOCTYPE html>
<html>
<head>
    <title>Edit Penghuni</title>
</head>
<body>
    <h1>Edit Penghuni</h1>
    <form method="post" action="/penghuni/update/<?= $penghuni['id'] ?>">
        Nama: <input type="text" name="nama" value="<?= esc($penghuni['nama']) ?>" required><br>
        No KTP: <input type="text" name="no_ktp" value="<?= esc($penghuni['no_ktp']) ?>" required><br>
        No HP: <input type="text" name="no_hp" value="<?= esc($penghuni['no_hp']) ?>" required><br>
        Tgl Masuk: <input type="date" name="tgl_masuk" value="<?= esc($penghuni['tgl_masuk']) ?>" required><br>
        Tgl Keluar: <input type="date" name="tgl_keluar" value="<?= esc($penghuni['tgl_keluar']) ?>"><br>
        <button type="submit">Update</button>
    </form>
    <a href="/penghuni">Kembali</a>
</body>
</html>
