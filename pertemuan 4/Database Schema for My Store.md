# Skema Basis Data untuk Toko Saya

## 1. Membuat Basis Data

```sql
-- Membuat database baru
CREATE DATABASE my_store;
USE my_store;

-- Membuat tabel USERS (untuk data pengguna)
CREATE TABLE USERS (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nama_user VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL, -- Simpan hash password
    alamat VARCHAR(50),
    nomor_telepon VARCHAR(20)
);

-- Membuat tabel PRODUK (untuk data produk)
CREATE TABLE PRODUK (
    id_produk INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(50) NOT NULL,
    harga DECIMAL(10, 2) NOT NULL,
    ukuran VARCHAR(10),
    warna VARCHAR(50),
    kategori VARCHAR(50),
    stok INT NOT NULL,
    deskripsi TEXT
);

-- Membuat tabel TRANSAKSI (untuk data transaksi)
CREATE TABLE TRANSAKSI (
    id_transaksi INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    tanggal_transaksi DATE NOT NULL,
    total DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_user) REFERENCES USERS(id_user) -- Relasi dengan tabel USERS
);

-- Membuat tabel DETAIL_TRANSAKSI (untuk detail transaksi per produk)
CREATE TABLE DETAIL_TRANSAKSI (
    id_transaksi INT,
    id_produk INT,
    jumlah INT NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (id_transaksi, id_produk), -- Composite Primary Key
    FOREIGN KEY (id_transaksi) REFERENCES TRANSAKSI(id_transaksi), -- Relasi dengan tabel TRANSAKSI
    FOREIGN KEY (id_produk) REFERENCES PRODUK(id_produk) -- Relasi dengan tabel PRODUK
);

-- Membuat tabel ULASAN (untuk ulasan produk oleh pengguna)
CREATE TABLE ULASAN (
    id_ulasan INT AUTO_INCREMENT PRIMARY KEY,
    id_produk INT,
    id_user INT,
    rating INT NOT NULL,
    komentar TEXT,
    tanggal_ulasan DATE NOT NULL,
    FOREIGN KEY (id_produk) REFERENCES PRODUK(id_produk), -- Relasi dengan tabel PRODUK
    FOREIGN KEY (id_user) REFERENCES USERS(id_user) -- Relasi dengan tabel USERS
);

-- Membuat tabel ADMIN (untuk data admin)
CREATE TABLE ADMIN (
    id_admin INT AUTO_INCREMENT PRIMARY KEY,
    nama_admin VARCHAR(50) NOT NULL,
    email_admin VARCHAR(50) NOT NULL UNIQUE,
    password_admin VARCHAR(50) NOT NULL -- Simpan hash password
);

-- Insert data contoh ke tabel USERS
INSERT INTO USERS (nama_user, email, password, alamat, nomor_telepon)
VALUES
('User Satu', 'user1@example.com', MD5('password1'), 'Jalan Satu', '08123456789'),
('User Dua', 'user2@example.com', MD5('password2'), 'Jalan Dua', '08123456788');

-- Insert data contoh ke tabel PRODUK
INSERT INTO PRODUK (nama_produk, harga, ukuran, warna, kategori, stok, deskripsi)
VALUES
('Produk A', 100000.00, 'M', 'Merah', 'Pakaian', 10, 'Deskripsi produk A'),
('Produk B', 150000.00, 'L', 'Biru', 'Aksesoris', 5, 'Deskripsi produk B');

-- Insert data contoh ke tabel TRANSAKSI
INSERT INTO TRANSAKSI (id_user, tanggal_transaksi, total)
VALUES
(1, '2024-10-08', 250000.00),
(2, '2024-10-08', 100000.00);

-- Insert data contoh ke tabel DETAIL_TRANSAKSI
INSERT INTO DETAIL_TRANSAKSI (id_transaksi, id_produk, jumlah, subtotal)
VALUES
(1, 1, 2, 200000.00),
(1, 2, 1, 50000.00),
(2, 1, 1, 100000.00);

-- Insert data contoh ke tabel ULASAN
INSERT INTO ULASAN (id_produk, id_user, rating, komentar, tanggal_ulasan)
VALUES
(1, 1, 5, 'Produk sangat bagus!', '2024-10-08'),
(2, 2, 4, 'Cukup memuaskan.', '2024-10-08');

-- Insert data contoh ke tabel ADMIN
INSERT INTO ADMIN (nama_admin, email_admin, password_admin)
VALUES
('Admin Satu', 'admin1@example.com', MD5('adminpassword1'));
```

## 1. Koneksi ke Database
```php
<?php
$servername = "localhost";
$username = "root";  // Sesuaikan dengan username MySQL kamu
$password = "";      // Sesuaikan dengan password MySQL kamu
$dbname = "my_store";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
```
