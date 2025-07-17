<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
</head>
<body>
    <h1>Edit Barang</h1>
    <form method="post" action="/barang/update/<?= $barang['id'] ?>">
        Nama: <input type="text" name="nama" value="<?= esc($barang['nama']) ?>" required><br>
        Harga: <input type="number" name="harga" value="<?= esc($barang['harga']) ?>" required><br>
        <button type="submit">Update</button>
    </form>
    <a href="/barang">Kembali</a>
</body>
</html>
