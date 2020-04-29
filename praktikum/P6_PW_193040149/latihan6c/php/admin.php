<?php
// Menghubungka dengan file php lainya
require 'function.php';

// melakukan query
$alat_musik = query("SELECT * FROM alat_musik");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="../css/index.css">
</head>

<body>

</body>
<div class="add"><a href="tambah.php"><button>Tambah Data</button></a>
</div>
<br>
<table border="1" cellpadding="13" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Opsi</th>
    <th>Foto</th>
    <th>Merk Barang</th>
    <th>Jenis Barang</th>
    <th>Bahan Dasar Barang</th>
    <th>Harga Barang</th>
  </tr>

  <?php $i = 1; ?>
  <?php foreach ($alat_musik as $m) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href=""><button>Ubah</button></a>
        <a href="hapus.php?id=<? $m["kode_barang"] ?>" onclick="return confirm('Hapus Data ?')"><button>Hapus</button></a>
      </td>
      <td><img src="../assets/img/<?= $m['foto']; ?>" width="100"></td>
      <td><?= $m['merk_barang']; ?></td>
      <td><?= $m['jns_barang']; ?></td>
      <td><?= $m['bhn_dsr_barang']; ?></td>
      <td><?= $m['harga_barang']; ?></td>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>

</table>

</html>