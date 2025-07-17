<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin Kost</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>Dashboard Admin Kost</h1>
    <ul>
        <li>Jumlah Penghuni Aktif: <b><?= $jml_penghuni_aktif ?></b></li>
        <li>Jumlah Kamar: <b><?= $jml_kamar ?></b></li>
        <li>Jumlah Kamar Kosong: <b><?= $jml_kamar_kosong ?></b></li>
        <li>Jumlah Tagihan Bulan Ini: <b><?= $jml_tagihan_bulan_ini ?></b></li>
        <li>Jumlah Tagihan Belum Lunas Bulan Ini: <b><?= $jml_tagihan_belum_lunas ?></b></li>
    </ul>
    <a href="/penghuni">Kelola Penghuni</a> |
    <a href="/kamar">Kelola Kamar</a> |
    <a href="/barang">Kelola Barang</a> |
    <a href="/relasi">Kelola Relasi</a> |
    <a href="/tagihan">Kelola Tagihan</a> |
    <a href="/bayar">Kelola Pembayaran</a>
</body>
</html>
