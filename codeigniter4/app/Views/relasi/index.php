<!DOCTYPE html>
<html>
<head>
    <title>Data Relasi Penghuni & Kamar</title>
</head>
<body>
    <h1>Data Relasi Penghuni & Kamar</h1>
    <a href="/relasi/create">Tambah Relasi</a>
    <table border="1">
        <tr>
            <th>Kamar</th>
            <th>Penghuni</th>
            <th>Tgl Masuk</th>
            <th>Tgl Keluar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($relasi as $r): ?>
        <tr>
            <td><?= esc($r['kamar_nomor']) ?></td>
            <td><?= esc($r['penghuni_nama']) ?></td>
            <td><?= esc($r['tgl_masuk']) ?></td>
            <td><?= esc($r['tgl_keluar']) ?></td>
            <td>
                <a href="/relasi/edit/<?= $r['id'] ?>">Edit</a> | 
                <a href="/relasi/delete/<?= $r['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
