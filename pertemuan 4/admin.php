<?php
include 'db.php'; // Pastikan file ini menghubungkan ke database

$sql = "SELECT * FROM ADMIN";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Daftar Admin</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id_admin"]."</td>
                <td>".$row["nama_admin"]."</td>
                <td>".$row["email_admin"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
