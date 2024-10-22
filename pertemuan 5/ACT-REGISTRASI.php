<?php
include 'CONECT.php'; // Sertakan file connect.php

// Buka koneksi ke database
$con = openConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $username = $_POST['username']; // Tambahkan username
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telepon = $_POST['telepon'];

    // Validasi input
    if (empty($nama) || empty($username) || empty($email) || empty($password) || empty($telepon)) {
        echo "Semua field harus diisi.";
        exit;
    }

    // Cek apakah username atau email sudah ada
    $query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Username atau email sudah terdaftar!";
    } else {
        // Simpan data ke database tanpa hashing password
        $insertQuery = "INSERT INTO users (nama, username, email, password, telepon) VALUES ('$nama', '$username', '$email', '$password', '$telepon')";

        if (mysqli_query($con, $insertQuery)) {
            echo "Registrasi berhasil!";
            header("Location: LOGIN.php");
            exit;
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($con);
        }
    }
}

// Tutup koneksi ke database
closeConnection($con);

?>
