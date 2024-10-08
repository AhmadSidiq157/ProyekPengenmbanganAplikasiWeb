# Skema Basis Data untuk Toko Sepatu MlayuSports

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

### 2. Menampilkan Data dari Tabel USERS
```php
<?php
include 'db.php';

$sql = "SELECT * FROM USERS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Daftar Pengguna</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id_user"]."</td>
                <td>".$row["nama_user"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["alamat"]."</td>
                <td>".$row["nomor_telepon"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
```

## 3. Insert Data ke Tabel USERS
```php
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_user'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);  // Enkripsi password
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];

    $sql = "INSERT INTO USERS (nama_user, email, password, alamat, nomor_telepon)
            VALUES ('$nama', '$email', '$password', '$alamat', '$nomor_telepon')";

    if ($conn->query($sql) === TRUE) {
        echo "Pengguna berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengguna</title>
</head>
<body>
    <h2>Form Tambah Pengguna</h2>
    <form action="insert_user.php" method="POST">
        Nama: <input type="text" name="nama_user" required><br>
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        Alamat: <input type="text" name="alamat"><br>
        Nomor Telepon: <input type="text" name="nomor_telepon"><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
```

## 4. Menampilkan Data Produk
```php
<?php
include 'db.php';

$sql = "SELECT * FROM PRODUK";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Daftar Produk</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Ukuran</th>
                <th>Warna</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id_produk"]."</td>
                <td>".$row["nama_produk"]."</td>
                <td>".$row["harga"]."</td>
                <td>".$row["ukuran"]."</td>
                <td>".$row["warna"]."</td>
                <td>".$row["kategori"]."</td>
                <td>".$row["stok"]."</td>
                <td>".$row["deskripsi"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
```

## 5. Menampilkan Transaksi dan Detail Transaksi
```php
<?php
include 'db.php';

// Menampilkan transaksi
$sql = "SELECT * FROM TRANSAKSI";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Daftar Transaksi</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID Transaksi</th>
                <th>ID User</th>
                <th>Tanggal</th>
                <th>Total</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id_transaksi"]."</td>
                <td>".$row["id_user"]."</td>
                <td>".$row["tanggal_transaksi"]."</td>
                <td>".$row["total"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Menampilkan detail transaksi
$sql_detail = "SELECT * FROM DETAIL_TRANSAKSI";
$result_detail = $conn->query($sql_detail);

if ($result_detail->num_rows > 0) {
    echo "<h2>Detail Transaksi</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Produk</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>";
    while($row = $result_detail->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id_transaksi"]."</td>
                <td>".$row["id_produk"]."</td>
                <td>".$row["jumlah"]."</td>
                <td>".$row["subtotal"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
```

# Kesimpulan :

### 1. **Struktur dan Relasi**
Database ini didesain untuk mendukung operasi sebuah toko online, dengan fokus pada manajemen pengguna, produk, transaksi, ulasan, dan admin. Struktur tabel telah dirancang untuk mencakup:

- **Tabel USERS**: Menyimpan data pengguna yang terdaftar, seperti nama, email, alamat, dan nomor telepon. Password pengguna disimpan dalam bentuk hash untuk keamanan.
  
- **Tabel PRODUK**: Menyimpan informasi produk yang dijual, termasuk nama produk, harga, ukuran, warna, kategori, jumlah stok, dan deskripsi produk.

- **Tabel TRANSAKSI**: Mencatat setiap transaksi yang dilakukan oleh pengguna, meliputi ID pengguna, tanggal transaksi, dan total harga. Tabel ini terhubung dengan tabel **USERS** melalui foreign key `id_user`.

- **Tabel DETAIL_TRANSAKSI**: Menyimpan detail produk yang dibeli dalam setiap transaksi, seperti jumlah produk dan subtotal. Tabel ini terhubung dengan tabel **TRANSAKSI** dan **PRODUK**.

- **Tabel ULASAN**: Menyimpan ulasan yang diberikan oleh pengguna terhadap produk yang mereka beli, termasuk rating, komentar, dan tanggal ulasan. Tabel ini terhubung dengan tabel **PRODUK** dan **USERS**.

- **Tabel ADMIN**: Menyimpan informasi admin yang memiliki akses untuk mengelola sistem, termasuk nama, email, dan password admin.

### 2. **Keamanan Data**
- Password untuk pengguna dan admin disimpan dalam bentuk hash menggunakan fungsi `MD5()`. Ini adalah praktik dasar dalam menjaga keamanan data sensitif. Namun, dalam implementasi dunia nyata, disarankan menggunakan algoritma hash yang lebih kuat, seperti `bcrypt`, untuk keamanan yang lebih baik.

### 3. **Integritas Data**
- Setiap transaksi, ulasan, dan detail transaksi dihubungkan dengan tabel utama seperti **USERS**, **PRODUK**, dan **TRANSAKSI** melalui foreign key. Ini memastikan konsistensi dan integritas data, sehingga data yang tersimpan di berbagai tabel tetap terkoordinasi dengan baik.

### 4. **Kemudahan Manajemen Produk dan Transaksi**
- Dengan adanya tabel **PRODUK** dan **DETAIL_TRANSAKSI**, sistem dapat melacak ketersediaan stok dan detail pembelian secara efisien. Setiap transaksi bisa dicatat dengan rinci, termasuk produk yang dibeli dan jumlahnya.

### 5. **Fleksibilitas dalam Penambahan Fitur**
- Struktur database ini cukup fleksibel untuk dikembangkan lebih lanjut. Fitur tambahan, seperti manajemen kategori produk yang lebih kompleks atau sistem loyalitas pelanggan, bisa diintegrasikan tanpa banyak perubahan pada desain yang ada.

### Kesimpulan Utama:
Database toko ini dirancang secara efisien untuk mendukung operasi inti dari sebuah toko online, dengan fokus pada pengelolaan data pengguna, produk, dan transaksi. Desain ini juga telah memikirkan aspek keamanan dasar dan memastikan integritas data yang baik melalui relasi antar tabel.
