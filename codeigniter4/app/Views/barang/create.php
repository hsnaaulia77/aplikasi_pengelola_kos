<div class="form-container">
    <h2>Tambah Relasi Penghuni & Kamar</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="kamar">Kamar</label>
            <select id="kamar" name="kamar" class="form-input <?= isset($validation) && $validation->hasError('kamar') ? 'is-invalid' : (old('kamar') ? 'is-valid' : '') ?>" required>
                <option value="">Pilih kamar...</option>
                <?php foreach ($list_kamar as $id => $nama): ?>
                    <option value="<?= $id ?>" <?= set_select('kamar', $id) ?>><?= $nama ?></option>
                <?php endforeach; ?>
            </select>
            <?php if (isset($validation) && $validation->hasError('kamar')): ?>
                <div class="invalid-feedback"><?= $validation->getError('kamar') ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="penghuni">Penghuni</label>
            <select id="penghuni" name="penghuni" class="form-input <?= isset($validation) && $validation->hasError('penghuni') ? 'is-invalid' : (old('penghuni') ? 'is-valid' : '') ?>" required>
                <option value="">Pilih penghuni...</option>
                <?php foreach ($list_penghuni as $id => $nama): ?>
                    <option value="<?= $id ?>" <?= set_select('penghuni', $id) ?>><?= $nama ?></option>
                <?php endforeach; ?>
            </select>
            <?php if (isset($validation) && $validation->hasError('penghuni')): ?>
                <div class="invalid-feedback"><?= $validation->getError('penghuni') ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="tgl_masuk">Tgl Masuk</label>
            <input type="date" id="tgl_masuk" name="tgl_masuk" placeholder="dd/mm/yyyy"
                class="form-input <?= isset($validation) && $validation->hasError('tgl_masuk') ? 'is-invalid' : (old('tgl_masuk') ? 'is-valid' : '') ?>" required>
            <?php if (isset($validation) && $validation->hasError('tgl_masuk')): ?>
                <div class="invalid-feedback"><?= $validation->getError('tgl_masuk') ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="tgl_keluar">Tgl Keluar</label>
            <input type="date" id="tgl_keluar" name="tgl_keluar" placeholder="dd/mm/yyyy"
                class="form-input <?= isset($validation) && $validation->hasError('tgl_keluar') ? 'is-invalid' : (old('tgl_keluar') ? 'is-valid' : '') ?>">
            <?php if (isset($validation) && $validation->hasError('tgl_keluar')): ?>
                <div class="invalid-feedback"><?= $validation->getError('tgl_keluar') ?></div>
            <?php endif; ?>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-primary btn-block">Simpan</button>
        </div>
        <div class="form-actions-back">
            <a href="<?= base_url('relasi') ?>" class="btn-link">← Kembali</a>
        </div>
    </form>
</div>

<style>
.form-container {
    background: #fff;
    border-radius: 28px;
    box-shadow: 0 4px 32px #bfa18122;
    max-width: 420px;
    margin: 48px auto;
    padding: 36px 32px 28px 32px;
    display: flex;
    flex-direction: column;
    align-items: stretch;
}
.form-container h2 {
    color: #4F6F52;
    font-size: 1.35rem;
    font-weight: 800;
    margin-bottom: 24px;
    text-align: center;
    letter-spacing: 1px;
}
.form-group {
    margin-bottom: 18px;
    display: flex;
    flex-direction: column;
    align-items: stretch;
}
.form-group label {
    font-weight: 600;
    color: #8d7b6a;
    margin-bottom: 6px;
}
.form-input {
    border: 1.5px solid #A8D5BA;
    border-radius: 16px;
    padding: 13px 18px;
    font-size: 1.08rem;
    background: #f9f6f2;
    font-family: 'Nunito', Arial, sans-serif;
    transition: border 0.2s, box-shadow 0.2s;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 2px;
    color: #4F6F52;
    height: 48px;
    appearance: none;
}
.form-input:focus {
    border-color: #bfa181;
    box-shadow: 0 0 0 2px #A8D5BA33;
    outline: none;
}
.form-input.is-invalid {
    border-color: #e57373 !important;
    background: #fff6f6 !important;
    box-shadow: 0 0 0 2px #e5737322 !important;
}
.form-input.is-valid {
    border-color: #7ec77e !important;
    background: #f6fff6 !important;
    box-shadow: 0 0 0 2px #7ec77e22 !important;
}
.invalid-feedback {
    color: #e57373;
    font-size: 0.95em;
    margin-top: 2px;
}
.form-actions {
    display: flex;
    align-items: center;
    margin-top: 18px;
    justify-content: center;
}
.btn-primary {
    background: linear-gradient(90deg, #A8D5BA 70%, #bfa181 100%);
    color: #fff;
    border: none;
    border-radius: 28px;
    padding: 13px 0;
    font-size: 1.13rem;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 2px 8px #A8D5BA22;
    transition: background 0.2s, color 0.2s, transform 0.2s;
    width: 100%;
    max-width: 100%;
    display: block;
}
.btn-primary:hover {
    background: linear-gradient(90deg, #bfa181 70%, #A8D5BA 100%);
    color: #fffbe9;
    transform: scale(1.03);
}
.btn-block {
    width: 100%;
    display: block;
}
.form-actions-back {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}
.btn-link {
    background: none;
    border: none;
    color: #bfa181;
    font-size: 1rem;
    text-decoration: underline;
    cursor: pointer;
    padding: 0;
    margin-left: 0;
    transition: color 0.2s;
}
.btn-link:hover {
    color: #8d7b6a;
}
.form-input[type="date"]::-webkit-input-placeholder,
.form-input[type="time"]::-webkit-input-placeholder {
    color: #bfa181;
    opacity: 1;
}
.form-input[type="date"]::-webkit-calendar-picker-indicator,
.form-input[type="time"]::-webkit-calendar-picker-indicator {
    filter: invert(60%) sepia(10%) saturate(300%) hue-rotate(60deg);
    width: 22px;
    height: 22px;
    cursor: pointer;
    margin-right: 4px;
}
@media (max-width: 600px) {
    .form-container {
        max-width: 98vw;
        padding: 18px 6vw;
    }
    .form-container h2 { font-size: 1.1rem; }
    .form-input {
        font-size: 1rem;
        padding: 10px 10px;
        height: 38px;
    }
    .btn-primary { font-size: 1rem; padding: 10px 0; }
}
</style>
