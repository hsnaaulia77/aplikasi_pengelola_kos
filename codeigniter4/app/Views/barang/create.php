<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form method="post" action="/barang/store">
        Nama: <input type="text" name="nama" required><br>
        Harga: <input type="number" name="harga" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="/barang">Kembali</a>
</body>
</html>
