-- app_kost.sql
-- Struktur database aplikasi pengelola kos

-- 1. Data Penghuni
CREATE TABLE tb_penghuni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    no_ktp VARCHAR(30) NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    tgl_masuk DATE NOT NULL,
    tgl_keluar DATE DEFAULT NULL
);

-- 2. Data Kamar
CREATE TABLE tb_kamar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomor VARCHAR(10) NOT NULL,
    harga DECIMAL(12,2) NOT NULL
);

-- 3. Data Barang Tambahan
CREATE TABLE tb_barang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    harga DECIMAL(12,2) NOT NULL
);

-- 4. Relasi Penghuni & Kamar
CREATE TABLE tb_kmr_penghuni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_kamar INT NOT NULL,
    id_penghuni INT NOT NULL,
    tgl_masuk DATE NOT NULL,
    tgl_keluar DATE DEFAULT NULL,
    FOREIGN KEY (id_kamar) REFERENCES tb_kamar(id),
    FOREIGN KEY (id_penghuni) REFERENCES tb_penghuni(id)
);

-- 5. Relasi Penghuni & Barang
CREATE TABLE tb_brng_bawaan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_penghuni INT NOT NULL,
    id_barang INT NOT NULL,
    FOREIGN KEY (id_penghuni) REFERENCES tb_penghuni(id),
    FOREIGN KEY (id_barang) REFERENCES tb_barang(id)
);

-- 6. Data Tagihan
CREATE TABLE tb_tagihan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bulan VARCHAR(7) NOT NULL, -- format: YYYY-MM
    id_kmr_penghuni INT NOT NULL,
    jml_tagihan DECIMAL(12,2) NOT NULL,
    FOREIGN KEY (id_kmr_penghuni) REFERENCES tb_kmr_penghuni(id)
);

-- 7. Data Pembayaran
CREATE TABLE tb_bayar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_tagihan INT NOT NULL,
    jml_bayar DECIMAL(12,2) NOT NULL,
    status ENUM('lunas','cicil') NOT NULL,
    FOREIGN KEY (id_tagihan) REFERENCES tb_tagihan(id)
); 