<!DOCTYPE html>
<html>
<head>
    <title>Data Penghuni</title>
</head>
<body>
    <h1>Data Penghuni</h1>
    <a href="/penghuni/create">Tambah Penghuni</a>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>No KTP</th>
            <th>No HP</th>
            <th>Tgl Masuk</th>
            <th>Tgl Keluar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($penghuni as $p): ?>
        <tr>
            <td><?= esc($p['nama']) ?></td>
            <td><?= esc($p['no_ktp']) ?></td>
            <td><?= esc($p['no_hp']) ?></td>
            <td><?= esc($p['tgl_masuk']) ?></td>
            <td><?= esc($p['tgl_keluar']) ?></td>
            <td>
                <a href="/penghuni/edit/<?= $p['id'] ?>">Edit</a> | 
                <a href="/penghuni/delete/<?= $p['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
