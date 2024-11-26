<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    require 'CONNECT.php';
    $sql = 'SELECT * FROM barang';
    $result = mysqli_query($con, $sql);
    ?>
    <div class="container">
        <h2 class="text-center my-4">Pilihan Barang</h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah (Stock)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($barang = mysqli_fetch_object($result)) { ?>
                    <tr>
                        <td><?php echo $barang->id; ?></td>
                        <td><?php echo $barang->nama; ?></td>
                        <td>Rp. <?php echo number_format($barang->harga, 2, ',', '.'); ?></td>
                        <td><?php echo $barang->jumlah; ?></td>
                        <td><a class="btn btn-primary" href="CART.php?id=<?php echo $barang->id; 
                        ?>&action=add">Beli</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="text-center">
            <a class="btn btn-danger" href="LOGOUT.php">Keluar</a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
