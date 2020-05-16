<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// Menghubungkan dengan file php lainya
require 'function.php';

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
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <style>
    body {
      background-color: snow;
      
    }

    .container h3 {
      text-align: center;
      width: 100%;
      margin-top: 90px;
      margin-bottom: 30px;
    }
  </style>
</head>

<body>

<!-- Nabvar -->
<nav class="navbar navbar-dark bg-info fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../assets/img/klik.png" width="80" height="40" class="d-inline-block align-top" alt="">
        <strong> Klik Studio Music </strong>
      </a>
    </div>
  </nav>

<div class="container">
<h3><b> DAFTAR ALAT MUSIK </b></h3>
<div class="row">
      <div class="col">
        <div class="input-group mb-3">
          <a href="tambah.php" class="btn btn-outline-danger">+ Tambah Data!</a>
        </div>
      </div>
<div class="col-lg-5">
    <div class="input-group mb-3">
        <form action="" method="get" class="input-group">
            <input type="text" class="form-control mr-sm-2" name="keyword" placeholder="Search" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-outline-primary" type="submit" name="cari">Search!</button>
            </div>
          </form>
      </div>
    </div>
  </div>
  
  <table class="table table-bordered table-info">
      <thead class="text-uppercase text-center thead-dark">
  <tr>
    <th>#</th>
    <th>Opsi</th>
    <th>Foto</th>
    <th>Merk Barang</th>
    <th>Jenis Barang</th>
    <th>Bahan Dasar Barang</th>
    <th>Harga Barang</th>
  </tr>

  <?php if (empty($alat_musik)) : ?>
      <tr>
        <td colspan="7">
          <h3 style="color: red; font-style: italic;">Data tidak ditemukan!</h3>
        </td>
      </tr>
    <?php else : ?>

  <?php $i = 1; ?>
  <?php foreach ($alat_musik as $m) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="ubah.php?id=<?= $m['kode_barang']; ?>"><button>Ubah</button></a>
        <a href="hapus.php?id=<?= $m["kode_barang"]; ?>" onclick="return confirm('Hapus Data ?')"><button>Hapus</button></a>
      </td>
      <td><img src="../assets/img/<?= $m['foto']; ?>" width="100"></td>
      <td><?= $m['merk_barang']; ?></td>
      <td><?= $m['jns_barang']; ?></td>
      <td><?= $m['bhn_dsr_barang']; ?></td>
      <td><?= $m['harga_barang']; ?></td>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>
  <?php endif; ?>

</table>
<div class="col">
  <div class="input-group mb-3">
    <a href="logout.php" class="btn btn-danger">Logout</a>
  </div>
</div>

</body>
</html>