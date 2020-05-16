<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil ditambahkan!');
          document.location.href = 'admin.php';
        </script>";
  } else {
    echo "<script>
          alert('Data Gagal ditambahkan!');
          document.location.href = 'admin.php';
        </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <style>
    body {
        background-color: lightblue;
    }
    .container {
        background-color: white;
        width: 350px;
        padding: 20px;
        margin: auto;
        margin-top: 100px;
        border: 2px solid salmon;
        font-size: 18px;
        border-radius: 5px;
    }
    h3 {
        background-color: red;
        text-align: center;
        color: white;
        padding: 10px;
        border-radius: 7px;
    }

    table {
        width: 200px;
        padding: 12px 10px;
        box-sizing: border-box;
        font-size: 18px;
    }
    .tambah {
        background-color: dodgerblue;
        width: 60%;
        height: 40px;
        text-align: center;
        font-size: 20px;
        border-radius: 18px;
        color: white;

    }
    .kembali {
        background-color: white;
        width: 30%;
        height: 40px;
        text-align: center;
        font-size: 15px;
        border-radius: 8px;
    }
    </style>
</head>

<body>
<div class="container">
  <h3>Form Tambah Data Barang</h3>
  <form action="" method="POST">
    <ul>
    <li>
        <label for="foto">Foto : </label><br>
        <input type="text" name="foto" id="foto" required><br><br>
      </li>
      <li>
        <label for="merk_barang">Merk Barang : </label><br>
        <input type="text" name="merk_barang" id="merk_barang" required><br><br>
      </li>
      <li>
        <label for="merk_barang">Jenis Barang : </label><br>
        <input type="text" name="jns_barang" id="jns_barang" required><br><br>
      </li>
      <li>
        <label for="bhn_dsr_barang">Bahan Dasar Barang : </label><br>
        <input type="text" name="bhn_dsr_barang" id="bhn_dsr_barang" required><br><br>
      </li>
      <li>
        <label for="harga_barang">Harga Barang : </label><br>
        <input type="text" name="harga_barang" id="harga_barang" required><br><br>
      </li>
      <button type="submit" name="tambah" class="tambah">Tambah Data!</button>
      <button type="submit" class="kembali">
        <a href="admin.php">Kembali</a>
      </button>
    </ul>
  </form>
</div>  
</body>

</html>