<!DOCTYPE html>
<html>
<head>
    <title>Edit Kamar</title>
</head>
<body>
    <h1>Edit Kamar</h1>
    <form method="post" action="/kamar/update/<?= $kamar['id'] ?>">
        Nomor: <input type="text" name="nomor" value="<?= esc($kamar['nomor']) ?>" required><br>
        Harga: <input type="number" name="harga" value="<?= esc($kamar['harga']) ?>" required><br>
        <button type="submit">Update</button>
    </form>
    <a href="/kamar">Kembali</a>
</body>
</html>
