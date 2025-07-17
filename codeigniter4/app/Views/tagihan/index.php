<!DOCTYPE html>
<html>
<head>
    <title>Data Tagihan</title>
</head>
<body>
    <h1>Data Tagihan</h1>
    <a href="/tagihan/create">Tambah Tagihan</a>
    <table border="1">
        <tr>
            <th>Bulan</th>
            <th>ID Relasi Kamar-Penghuni</th>
            <th>Jumlah Tagihan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($tagihan as $t): ?>
        <tr>
            <td><?= esc($t['bulan']) ?></td>
            <td><?= esc($t['id_kmr_penghuni']) ?></td>
            <td><?= esc($t['jml_tagihan']) ?></td>
            <td>
                <a href="/tagihan/edit/<?= $t['id'] ?>">Edit</a> | 
                <a href="/tagihan/delete/<?= $t['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
