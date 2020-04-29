<?php
   // menghubungkan dengan file php lainnya
   require 'php/function.php';

   if (isset($_GET['cari'])) {
    $keyword    = $_GET['keyword'];
    $alat_musik = query("SELECT * FROM alat_musik WHERE
                  foto LIKE '%$keyword%' OR
                  merk_barang     LIKE '%$keyword%' OR
                  jns_barang      LIKE '%$keyword%' OR
                  bhn_dsr_barang  LIKE '%$keyword%' OR
                  harga_barang    LIKE '%$keyword%' ");
  } else {
    $alat_musik = query("SELECT * FROM alat_musik");
  }
  
?> 


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PW - 193040149</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    
    <body>
        <h2 align="center"> DAFTAR ALAT MUSIK </h2>
        <form action="" method="get">
            <input type="text" name="keyword">
                <button type="submit" name="cari">Cari!</button>
        </form>
        <?php if (empty($alat_musik)) : ?>
            <tr>
                <td colspan="7">
                    <h3>Data tidak ditemukan!</h3>
                </td>
            </tr>
        <?php else : ?>

            <?php foreach ($alat_musik as $row) :?>
                <p class="merk_barang">
                    <a href="php/detail.php?id=<?= $row["kode_barang"] ?>">
                        <?= $row["merk_barang"] ?>
                    </a>
                </p>    
            <?php endforeach; ?>
        <?php endif; ?> 

    <a href="php/admin.php">
        <button>Masuk ke halaman Admin</button>
    </a>

       
    </body>
</html>