<?php
include 'db.php';

// Menampilkan transaksi
$sql = "SELECT * FROM TRANSAKSI";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Daftar Transaksi</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID Transaksi</th>
                <th>ID User</th>
                <th>Tanggal</th>
                <th>Total</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id_transaksi"]."</td>
                <td>".$row["id_user"]."</td>
                <td>".$row["tanggal_transaksi"]."</td>
                <td>".$row["total"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Menampilkan detail transaksi
$sql_detail = "SELECT * FROM DETAIL_TRANSAKSI";
$result_detail = $conn->query($sql_detail);

if ($result_detail->num_rows > 0) {
    echo "<h2>Detail Transaksi</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Produk</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>";
    while($row = $result_detail->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id_transaksi"]."</td>
                <td>".$row["id_produk"]."</td>
                <td>".$row["jumlah"]."</td>
                <td>".$row["subtotal"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
