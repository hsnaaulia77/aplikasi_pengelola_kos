<!DOCTYPE html>
<html>
<head>
    <title>Edit Pembayaran</title>
</head>
<body>
    <h1>Edit Pembayaran</h1>
    <form method="post" action="/bayar/update/<?= $bayar['id'] ?>">
        Tagihan:
        <select name="id_tagihan" required>
            <?php foreach ($tagihan as $t): ?>
                <option value="<?= $t['id'] ?>" <?= $bayar['id_tagihan'] == $t['id'] ? 'selected' : '' ?>>Bulan <?= esc($t['bulan']) ?> (ID <?= $t['id'] ?>)</option>
            <?php endforeach; ?>
        </select><br>
        Jumlah Bayar: <input type="number" name="jml_bayar" value="<?= esc($bayar['jml_bayar']) ?>" required><br>
        Status:
        <select name="status" required>
            <option value="lunas" <?= $bayar['status'] == 'lunas' ? 'selected' : '' ?>>Lunas</option>
            <option value="cicil" <?= $bayar['status'] == 'cicil' ? 'selected' : '' ?>>Cicil</option>
        </select><br>
        <button type="submit">Update</button>
    </form>
    <a href="/bayar">Kembali</a>
</body>
</html>
