
---

# WEB Aplikasi Penjualan Baju Distro "Troy Company Shop" 

## 1 Fitur

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

## 2 Rencana Tabel

- Total jumlah tabel yang direncanakan: *8*

## 3 Rencana Kegiatan

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

## 4 Uraikan upaya serius dari  kelompok ini agar  proyek ini dapat diselesaikan 

### 1. Analisis dan Perencanaan Fitur
- *Upaya Serius*: Memastikan setiap fitur dirancang sesuai kebutuhan user dan admin, dengan analisis mendalam mengenai kebutuhan pengguna dan bagaimana mereka akan menggunakan fitur seperti keranjang belanja dan checkout.
- *Contoh Nyata*: Mengumpulkan feedback dari calon pengguna untuk fitur penting, seperti kemudahan checkout, dan mengintegrasikan kebutuhan tersebut dalam desain awal.

### 2. Implementasi Autentikasi User dan Admin
- *Upaya Serius*: Menggunakan Laravel Authentication yang dimodifikasi agar mendukung role-based access control, sehingga user dan admin dapat mengakses halaman sesuai peran mereka.
- *Contoh Nyata*: Menambahkan middleware untuk membedakan role user dan admin, serta menguji endpoint untuk mencegah akses tak sah.

### 3. Desain Database dan Pengelolaan Data
- *Upaya Serius*: Membuat desain database yang efisien dengan 8 tabel utama (users, products, carts, orders, order_items, dll) serta relasi antar tabel yang tepat, seperti many-to-many untuk produk dan pesanan.
- *Contoh Nyata*: Menggunakan migrasi Laravel untuk mendesain database yang konsisten dan mudah diperbarui di berbagai lingkungan pengembangan.

### 4. Pengembangan Fitur Keranjang Belanja dan Checkout
- *Upaya Serius*: Memastikan fitur keranjang belanja dan checkout bekerja dengan lancar, di mana data produk yang ditambahkan dalam tabel carts sesuai dan dipindahkan ke order_items saat checkout.
- *Contoh Nyata*: Menguji penambahan, pengurangan, dan penghapusan produk di keranjang, serta memastikan proses checkout memindahkan data dengan benar.

### 5. Pengiriman Notifikasi kepada User
- *Upaya Serius*: Mengintegrasikan notifikasi agar user tahu status pembelian mereka melalui email atau tampilan di halaman setelah checkout.
- *Contoh Nyata*: Membuat template email yang menarik dan mengirimkannya otomatis saat user checkout atau pesanan mereka diproses.

### 6. Pengelolaan Produk oleh Admin
- *Upaya Serius*: Mengembangkan dashboard admin untuk manajemen produk, termasuk validasi dan sanitasi input yang dilakukan pada setiap produk baru untuk menjaga kualitas data.
- *Contoh Nyata*: Memastikan perubahan produk oleh admin langsung tercermin di tampilan user dan mengatur pagination pada produk agar tetap responsif.

### 7. Pengembangan Sistem Notifikasi Proses Pesanan
- *Upaya Serius*: Memberikan admin akses untuk mengubah status pesanan dan mengirim notifikasi otomatis kepada user agar mereka selalu mendapatkan informasi terbaru.
- *Contoh Nyata*: Menambahkan tombol di dashboard admin untuk mengubah status pesanan dan mengirim notifikasi setelah perubahan status tersimpan.

### 8. Analisis Penjualan Produk untuk Admin
- *Upaya Serius*: Mengembangkan fitur riwayat penjualan agar admin bisa melihat produk yang paling banyak terjual.
- *Contoh Nyata*: Menambahkan filter tanggal dan kategori produk di riwayat pesanan sehingga admin dapat mengetahui statistik penjualan pada rentang waktu tertentu.

### 9. Pengujian Menyeluruh
- *Upaya Serius*: Melakukan pengujian unit dan pengujian fungsional untuk memastikan setiap fitur berfungsi dengan benar dan sesuai spesifikasi. Juga, melakukan uji pengguna (UAT) untuk memastikan kenyamanan penggunaan.
- *Contoh Nyata*: Menggunakan PHPUnit untuk pengujian unit serta tes pengguna langsung untuk mendapatkan umpan balik user.

### 10. Keamanan Aplikasi
- *Upaya Serius*: Melindungi aplikasi dari ancaman umum seperti SQL Injection, XSS, dan CSRF dengan mengamankan data sensitif.
- *Contoh Nyata*: Menggunakan hashing bcrypt untuk password, mengaktifkan CSRF token pada setiap form, dan melakukan validasi input yang ketat.

### 11. Deployment dan Pemeliharaan Aplikasi
- *Upaya Serius*: Merencanakan deployment yang aman serta memonitor aplikasi pasca-peluncuran dan memperbaiki bug sesuai umpan balik pengguna.
- *Contoh Nyata*: Menggunakan layanan deployment otomatis (seperti GitHub Actions) untuk update versi aplikasi dan memantau performa melalui Google Analytics atau alat monitoring lainnya.

---
