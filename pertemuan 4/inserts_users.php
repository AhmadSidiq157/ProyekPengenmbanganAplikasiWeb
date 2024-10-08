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
