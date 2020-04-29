<?php
   // menghubungkan dengan file php lainnya
   require 'php/function.php';

   // melakukan query
   $alat_musik = query("SELECT * FROM alat_musik")
?> 


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 6c</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    
    <body>
        <h2 align="center"> DAFTAR ALAT MUSIK </h2>
            <?php foreach ($alat_musik as $row) :?>
                <p class="merk_barang">
                    <a href="php/detail.php?id=<?= $row["kode_barang"] ?>">
                        <?= $row["merk_barang"] ?>
                    </a>
                </p>    
            <?php endforeach; ?>                
       
    </body>
</html>