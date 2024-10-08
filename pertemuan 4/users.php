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
