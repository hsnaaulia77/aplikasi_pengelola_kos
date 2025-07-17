<!DOCTYPE html>
<html>
<head>
    <title>Halaman Depan Kost</title>
</head>
<body>
    <h1>Selamat Datang di Aplikasi Kost</h1>

    <h2>Kamar Kosong</h2>
    <table border="1">
        <tr>
            <th>Nomor Kamar</th>
            <th>Harga</th>
        </tr>
        <?php foreach ($kamar_kosong as $k): ?>
        <tr>
            <td><?= esc($k['nomor']) ?></td>
            <td><?= esc($k['harga']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Kamar yang Harus Bayar Bulan Ini (<?= date('Y-m') ?>)</h2>
    <table border="1">
        <tr>
            <th>ID Relasi Kamar-Penghuni</th>
            <th>Jumlah Tagihan</th>
        </tr>
        <?php foreach ($tagihan_bulan_ini as $t): ?>
        <tr>
            <td><?= esc($t['id_kmr_penghuni']) ?></td>
            <td><?= esc($t['jml_tagihan']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Kamar yang Telat Bayar (<?= date('Y-m', strtotime('-1 month')) ?>)</h2>
    <table border="1">
        <tr>
            <th>ID Relasi Kamar-Penghuni</th>
            <th>Jumlah Tagihan</th>
        </tr>
        <?php foreach ($tagihan_telat as $t): ?>
        <tr>
            <td><?= esc($t['id_kmr_penghuni']) ?></td>
            <td><?= esc($t['jml_tagihan']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
