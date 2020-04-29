<?php
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
</head>

<body>
  <h3>Form Tambah Data Barang</h3>
  <form action="" method="post">
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
        <label for="jns_barang">Jenis Barang : </label><br>
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
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>