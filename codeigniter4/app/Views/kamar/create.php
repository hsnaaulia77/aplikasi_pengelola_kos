<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kamar</title>
</head>
<body>
    <h1>Tambah Kamar</h1>
    <form method="post" action="/kamar/store">
        Nomor: <input type="text" name="nomor" required><br>
        Harga: <input type="number" name="harga" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="/kamar">Kembali</a>
</body>
</html>
