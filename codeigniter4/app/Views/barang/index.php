<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    <a href="/barang/create">Tambah Barang</a>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($barang as $b): ?>
        <tr>
            <td><?= esc($b['nama']) ?></td>
            <td><?= esc($b['harga']) ?></td>
            <td>
                <a href="/barang/edit/<?= $b['id'] ?>">Edit</a> | 
                <a href="/barang/delete/<?= $b['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
