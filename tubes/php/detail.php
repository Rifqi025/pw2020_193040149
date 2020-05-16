<?php
// Mengecek apakah ada id yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require 'function.php';

// Mengambil id dari url
$kode_barang = $_GET["id"];

// melakukan query dengan parameter id yang diambil dari url
$alat_musik = query("SELECT * FROM alat_musik WHERE kode_barang = $kode_barang")[0]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubes</title>

</head>
<body>
    <div class="container">
        <div class="foto">
            <img src="../assets/img/<?= $alat_musik['foto']; ?>" width="120">
        </div>
        <div class="keterangan">
            <p><?= $alat_musik["kode_barang"]; ?></p>
            <p><?= $alat_musik["merk_barang"]; ?></p>
            <p><?= $alat_musik["jns_barang"]; ?></p>
            <p><?= $alat_musik["bhn_dsr_barang"]; ?></p>
            <p><?= $alat_musik["harga_barang"]; ?></p> 
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>          
    
</body>
</html>