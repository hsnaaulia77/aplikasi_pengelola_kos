<!DOCTYPE html>
<html>
<head>
    <title>Data Kamar</title>
</head>
<body>
    <h1>Data Kamar</h1>
    <a href="/kamar/create">Tambah Kamar</a>
    <table border="1">
        <tr>
            <th>Nomor</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($kamar as $k): ?>
        <tr>
            <td><?= esc($k['nomor']) ?></td>
            <td><?= esc($k['harga']) ?></td>
            <td>
                <a href="/kamar/edit/<?= $k['id'] ?>">Edit</a> | 
                <a href="/kamar/delete/<?= $k['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
