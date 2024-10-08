<?php
include 'db.php';

$sql = "SELECT * FROM PRODUK";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Daftar Produk</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Ukuran</th>
                <th>Warna</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id_produk"]."</td>
                <td>".$row["nama_produk"]."</td>
                <td>".$row["harga"]."</td>
                <td>".$row["ukuran"]."</td>
                <td>".$row["warna"]."</td>
                <td>".$row["kategori"]."</td>
                <td>".$row["stok"]."</td>
                <td>".$row["deskripsi"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
