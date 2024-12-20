
# Laporan Proyek Pengembangan Aplikasi Web Toko Online Kaos Distro Troy Company Shop

<img src="logoutdi.png">

Penyusun :
Fahmi Al-Anshori / 225410090
Sidiq Imawan / 225410097
Muhammad Dafa Argara / 225410105

#
#
#
#
Program Studi Informatika Klas 1 
Fakultas Teknologi Informasi
Universitas Teknologi Digital Indonesia (UTDI)
2024


#### 1. Pendahuluan

Latar Belakang: 

Seiring dengan pesatnya perkembangan teknologi dan gaya hidup digital, masyarakat kini semakin cenderung berbelanja secara online, termasuk dalam hal pembelian pakaian dan produk distro. Hal ini menjadi tantangan bagi toko-toko pakaian konvensional yang perlu beradaptasi dengan kebutuhan pasar. Banyak pengusaha distro yang belum memanfaatkan platform online dengan optimal, padahal melalui platform tersebut, mereka dapat menjangkau lebih banyak konsumen dari berbagai daerah.

Troy Company Official Shop hadir untuk memenuhi kebutuhan tersebut dengan menyediakan platform belanja online untuk produk distro yang berkualitas. Website ini dirancang untuk memberikan pengalaman belanja yang mudah, cepat, dan aman bagi konsumen. Dengan konsep toko online, konsumen dapat dengan nyaman memilih produk sesuai dengan selera, melihat detail produk, serta melakukan transaksi secara online.



Tujuan: 

Tujuan utama dari pengembangan website Troy Company Official Shop adalah untuk:

Menyediakan platform toko online yang mudah diakses oleh konsumen di Yogyakarta, khususnya bagi mereka yang tertarik dengan produk distro berkualitas.

Meningkatkan jangkauan pemasaran produk distro, memungkinkan toko untuk menjangkau konsumen dari luar kota Yogyakarta.

Menyediakan pengalaman belanja yang menyenangkan dengan fitur-fitur seperti katalog produk, sistem keranjang belanja, dan sistem pembayaran yang aman.

Mengoptimalkan transaksi online dan mempercepat proses pemesanan produk dengan adanya sistem checkout dan pengelolaan pesanan yang efisien.



Batasan Masalah: Proyek ini dibatasi pada pengembangan website untuk penjualan produk pakaian distro dengan fitur-fitur dasar yang mendukung transaksi online. Beberapa batasan masalah yang ditetapkan dalam proyek ini adalah sebagai berikut:

Fitur yang Akan Dikembangkan:

Halaman utama yang menampilkan produk-produk yang tersedia.

Sistem manajemen produk yang memungkinkan admin untuk menambahkan, mengedit, dan menghapus produk.

Sistem keranjang belanja dan checkout untuk memudahkan konsumen dalam berbelanja.

Sistem autentikasi pengguna untuk mengelola akun pelanggan.

Halaman pembayaran yang mendukung beberapa metode pembayaran seperti transfer bank dan e-wallet.

Tampilan responsif yang dapat diakses dengan baik di perangkat desktop maupun mobile.

Fitur yang Tidak Akan Dikembangkan:

Fitur pengelolaan stok produk secara real-time.

Fitur pengiriman otomatis atau integrasi dengan kurir.

Pengelolaan sistem promo atau diskon yang rumit.

Fitur manajemen multi-admin atau multi-role.











































#### 2. Perancangan Sistem

Rancangan Semula/Awal

Rancangan Database : 

























Data flow diagram (DFD) level 0 : 







Realisasi

 

#### 3. Teknologi 

Kelompok kami dalam pembuatan website toko kaos online TROY COMPANY tersebut menggunakan PHP NATIVE karena kami masih mengalami kekusahan dan eror pada saat mengaplikasikan ke dalam framework Laravel.

#### 4. Implementasi

	Tampilan user halaman produk.php



Tampilan user keranjang.php



	

Tampilan admin halaman_utama.php

Tampilan admin daftar_produk.php





























#### 5. Langkah- langkah menjalankan aplikasi

user membuka  dan admin membuka .

Jika user belum memiliki akun maka harus registrasi daftar akun terlebih dahulu.

Admin akan masuk dengan cara login karena sudah dipatenkan hanya satu admin saja yang dapat masuk.

Setelah user daftar dan login maka user dapat langsung berbelanja, cara berbelanja dapat dilihat di ‘Cara Order’ pada bagian header website.

Setelah admin login, admin dapat  melihat orderan pada bagian dashboard dan admin dapat menambahkan produk yang akan di jual pada bagian ‘Data Produk dan Customer’ kemudian. pilih ‘Daftar Produk’ pada halaman tersebut admin dapat menginput atau menghapus barang yang dijual pada toko kaos distro.

#### 6. Kesimpulan dan Saran

Kesimpulan :

Proyek pengembangan website ini telah berhasil menyediakan platform toko online dengan fitur-fitur utama, seperti :

Halaman utama yang menampilkan produk secara terorganisir.

Sistem keranjang belanja yang memudahkan konsumen dalam bertransaksi.

Sistem manajemen produk yang efisien untuk admin.

Antarmuka pengguna yang cukup responsif, meskipun masih menggunakan PHP native karena adanya kendala dalam mengadopsi framework Laravel.

Website ini diharapkan mampu meningkatkan jangkauan pasar dan mempermudah konsumen dalam membeli produk distro secara online.

Masih terdapat beberapa keterbatasan seperti tidak adanya integrasi real-time untuk pengelolaan stok, pengiriman otomatis, dan pengelolaan promo.

Saran: 

Penggunaan Framework Modern : Pertimbangkan untuk menggunakan framework seperti Laravel pada pengembangan berikutnya untuk meningkatkan efisiensi, keamanan, dan kemudahan pengelolaan kode.

Fitur Pengelolaan Stok Real-Time : Tambahkan fitur untuk mengelola stok secara real-time agar konsumen mendapatkan informasi terkini tentang ketersediaan produk.

Integrasi dengan Layanan Pengiriman : Implementasikan integrasi dengan jasa kurir untuk memudahkan proses pengiriman barang.

Pengoptimalan Antarmuka Pengguna : Tingkatkan desain antarmuka untuk memberikan pengalaman pengguna yang lebih baik, terutama pada perangkat mobile.

Sistem Multi-Admin : Kembangkan fitur untuk memungkinkan beberapa admin mengelola website dengan pembagian tugas tertentu.

Pengelolaan Promo dan Diskon : Tambahkan sistem promo yang fleksibel untuk menarik lebih banyak konsumen.

### 
