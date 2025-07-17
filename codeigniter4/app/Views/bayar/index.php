<!DOCTYPE html>
<html>
<head>
    <title>Data Pembayaran</title>
</head>
<body>
    <h1>Data Pembayaran</h1>
    <a href="/bayar/create">Tambah Pembayaran</a>
    <table border="1">
        <tr>
            <th>Bulan Tagihan</th>
            <th>Jumlah Bayar</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($bayar as $b): ?>
        <tr>
            <td><?= esc($b['tagihan_bulan']) ?></td>
            <td><?= esc($b['jml_bayar']) ?></td>
            <td><?= esc($b['status']) ?></td>
            <td>
                <a href="/bayar/edit/<?= $b['id'] ?>">Edit</a> | 
                <a href="/bayar/delete/<?= $b['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
