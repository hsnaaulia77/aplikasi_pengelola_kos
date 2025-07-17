<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penghuni</title>
</head>
<body>
    <h1>Tambah Penghuni</h1>
    <form method="post" action="/penghuni/store">
        Nama: <input type="text" name="nama" required><br>
        No KTP: <input type="text" name="no_ktp" required><br>
        No HP: <input type="text" name="no_hp" required><br>
        Tgl Masuk: <input type="date" name="tgl_masuk" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="/penghuni">Kembali</a>
</body>
</html>
