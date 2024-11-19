<?php
include 'CONECT.php'; // Sertakan file connect.php

// Buka koneksi ke database
$con = openConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username dan password cocok
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password
        if ($password == $user['password']) { // Cocokkan langsung dengan password di database
            // Login berhasil, arahkan ke halaman dashboard
            echo "<script>
                alert('Login berhasil!');
                document.location = 'HOMEPAGES.php';
            </script>";
        } else {
            echo "<script>
                alert('Password salah.');
                document.location = 'LOGIN.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Username tidak ditemukan.');
            document.location = 'LOGIN.php';
        </script>";
    }
}

// Tutup koneksi ke database
closeConnection($con);

?>
