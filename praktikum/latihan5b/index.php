<?php
   // menghubungkan dengan file php lainnya
   require 'php/function.php';

   // melakukan query
   $alat_musik = query("SELECT * FROM alat_musik")
?> 


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Latihan 5b</title>
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
            <?php foreach ($alat_musik as $musik) : ?> 
            <tr>
                <td><?= $i ?></td>
                <td><img width="100px" src="assets/img/<?= $musik["foto"]; ?>"></td>
                <td><?= $musik["merk_barang"] ?></td>
                <td><?= $musik["jns_barang"] ?></td>
                <td><?= $musik["bhn_dsr_barang"] ?></td>
                <td><?= $musik["harga_barang"] ?></td>
            </tr>
            <?php $i++ ?>
            <?php  endforeach ?>
        </table>
		
		<h5 align="center"></h5>
    </body>
</html>