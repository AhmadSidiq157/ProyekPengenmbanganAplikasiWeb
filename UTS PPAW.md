
---

# WEB Aplikasi Penjualan Sepatu "MlayuSports" menggunakan Laravel

## Fitur

### Fitur User

1. *Register & Login*
   - Halaman register untuk user baru.
   - Halaman login untuk user yang sudah memiliki akun.
   - Laravel Authentication digunakan untuk mengelola autentikasi.

2. *Menambahkan Barang ke Keranjang Belanja*
   - Di halaman produk, user bisa melihat detail produk dan tombol Tambah ke Keranjang.
   - Tombol Tambah ke Keranjang akan menambah produk beserta jumlah ke dalam tabel carts.

3. *Checkout Barang*
   - Halaman Keranjang menampilkan semua produk yang ditambahkan oleh user.
   - User dapat mengubah jumlah produk atau menghapusnya dari keranjang.
   - Tombol Checkout akan membuat pesanan baru di tabel orders dan memindahkan data dari carts ke order_items.

4. *Notifikasi Pembelian Barang*
   - Setelah checkout, user akan mendapatkan notifikasi bahwa pesanan mereka sedang diproses.
   - Notifikasi bisa berupa pesan di halaman atau email.

### Fitur Admin

1. *Register & Login*
   - Admin dapat mendaftar dan login melalui halaman yang sama dengan user, tetapi akan diarahkan ke dashboard admin jika role adalah admin.

2. *Menambahkan Barang ke Beranda Toko*
   - Di dashboard, admin dapat mengakses halaman Tambah Produk untuk menambahkan produk baru ke products.
   - Admin juga dapat mengedit atau menghapus produk yang sudah ada.

3. *Mengirim Notifikasi Proses Pesanan*
   - Di dashboard, admin dapat melihat daftar pesanan dengan status pending.
   - Admin dapat mengubah status pesanan ke processed, dan sistem akan mengirim notifikasi kepada user bahwa pesanan mereka sedang diproses.

4. *Mengetahui Barang Terbeli*
   - Admin dapat melihat riwayat pesanan yang sudah completed untuk mengetahui produk mana yang sudah terjual.

## Rencana Tabel

- Total jumlah tabel yang direncanakan: *8*

## Rencana Kegiatan

### Kegiatan ke-8 (12-18 Nov 2024)
- Menambahkan homepage atau halaman beranda dari sisi user.
- Menambahkan keranjang belanja dari sisi user.

### Kegiatan ke-9 (19-25 Nov 2024)
- Mengembangkan Fitur Checkout Barang.
- Mengembangkan Notifikasi Pembelian Barang.

### Kegiatan ke-10 (26 Nov - 2 Des 2024)
- Mengembangkan Fitur Menambahkan Barang ke Beranda Toko. 

### Kegiatan ke-11 (3 - 9 Des 2024)
- Mengembangkan Fitur Mengirim Notifikasi Proses Pesanan.

### Kegiatan ke-12 (10 - 16 Des 2024)
- Mengembangkan Fitur Mengetahui Barang Terbeli.

---
