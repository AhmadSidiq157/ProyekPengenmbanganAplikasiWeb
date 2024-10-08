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
