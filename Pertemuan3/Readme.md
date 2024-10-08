<img src="gambar/database.png">

```sql
Table users {
  id_user INT [pk, increment]  // Primary Key dan auto increment
  nama_user VARCHAR(50)
  email VARCHAR(50) [unique]
  password VARCHAR(50)
  alamat VARCHAR(50)
  nomor_telepon VARCHAR(20)
}

Table produk {
id_produk INT [pk, increment] // Primary Key dan auto increment
nama_produk VARCHAR(50)
harga DECIMAL(10, 2)
ukuran VARCHAR(10)
warna VARCHAR(50)
kategori VARCHAR(50)
stok INT
deskripsi TEXT
}

Table transaksi {
id_transaksi INT [pk, increment] // Primary Key dan auto increment
id_user INT // Foreign Key ke users
tanggal_transaksi DATE
total DECIMAL(10, 2)
}

Table detail_transaksi {
id_transaksi INT // Foreign Key ke transaksi
id_produk INT // Foreign Key ke produk
jumlah INT
subtotal DECIMAL(10, 2)
primary key (id_transaksi, id_produk) // Composite Primary Key
}

Table ulasan {
id_ulasan INT [pk, increment] // Primary Key dan auto increment
id_produk INT // Foreign Key ke produk
id_user INT // Foreign Key ke users
rating INT
komentar TEXT
tanggal_ulasan DATE
}

Table admin {
id_admin INT [pk, increment] // Primary Key dan auto increment
nama_admin VARCHAR(50)
email_admin VARCHAR(50) [unique]
password_admin VARCHAR(50)
}

// Relasi antar tabel
Ref: transaksi.id_user > users.id_user // Satu user bisa memiliki banyak transaksi
Ref: detail_transaksi.id_transaksi > transaksi.id_transaksi // Relasi detail transaksi ke transaksi
Ref: detail_transaksi.id_produk > produk.id_produk // Relasi detail transaksi ke produk
Ref: ulasan.id_produk > produk.id_produk // Relasi ulasan ke produk
Ref: ulasan.id_user > users.id_user // Relasi ulasan ke user

```

<img src="gambar/beranda.png">
<img src="gambar/registrasi.png">
<img src="gambar/detailproduk.png">
<img src="gambar/chekout.png">
