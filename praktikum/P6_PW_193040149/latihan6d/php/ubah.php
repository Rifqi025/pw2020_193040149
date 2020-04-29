<?php
require 'function.php';

$kode_barang = $_GET['kode_barang'];
$musik = query("SELECT * FROM alat_musik WHERE kode_barang = $kode_barang")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil diubah!');
          document.location.href = 'admin.php';
        </script>";
  } else {
    echo "<script>
          alert('Data Gagal diubah!');
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
  <title>Ubah Data</title>
</head>

<body>
  <h3>Form Ubah Data Barang</h3>
  <form action="" method="post">
  <input type="hidden" name="kode_barang" id="kode_barang" value="<?= $musik['kode_barang']; ?>">
    <ul>
    <li>
        <label for="foto">Foto : </label><br>
        <input type="text" name="foto" id="foto" required value="<?= $musik['foto']; ?>" ><br><br>
      </li>
      <li>
        <label for="merk_barang">Merk Barang : </label><br>
        <input type="text" name="merk_barang" id="merk_barang" required value="<?= $musik['merk_barang']; ?>" ><br><br>
      </li>
      <li>
        <label for="merk_barang">Jenis Barang : </label><br>
        <input type="text" name="jns_barang" id="jns_barang" required  value="<?= $musik['jns_barang']; ?>" ><br><br>
      </li>
      <li>
        <label for="bhn_dsr_barang">Bahan Dasar Barang : </label><br>
        <input type="text" name="bhn_dsr_barang" id="bhn_dsr_barang"  required  value="<?= $musik['bhn_dsr_barang']; ?>"><br><br>
      </li>
      <li>
        <label for="harga_barang">Harga Barang : </label><br>
        <input type="text" name="harga_barang" id="harga_barang"  required value="<?= $musik['harga_barang']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="button">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>