<?php
    // Melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");

    // Memilih database
    mysqli_select_db($conn, "tubes_193040149") or die ("Dtabase salah!");

    // query mengambbil objek dari tabel didalam database
    $result = mysqli_query($conn, "SELECT * FROM alat_musik")
?> 


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Latihan 5a</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    
    <body>
    
        <h3>Alat Musik</h3>

        <table border="1px">

            <tr>
                <th>Kode Barang</th>
                <th>Foto</th>
                <th>Merk Barang</th>
                <th>Jenis Barang</th>
                <th>Bahan Dasar Barang</th>
                <th>Harga Barang</th>
                

            </tr>
            <?php $i = 1 ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?> 
            <tr>
                <td><?= $i ?></td>
                <td><img width="100px" src="assets/img/<?= $row["foto"]; ?>"></td>
                <td><?= $row["merk_barang"] ?></td>
                <td><?= $row["jns_barang"] ?></td>
                <td><?= $row["bhn_dsr_barang"] ?></td>
                <td><?= $row["harga_barang"] ?></td>
                
            </tr>
            <?php $i++ ?>
            <?php  endwhile ?>
        </table>
		
		<h5 align="center"></h5>
    </body>
</html>