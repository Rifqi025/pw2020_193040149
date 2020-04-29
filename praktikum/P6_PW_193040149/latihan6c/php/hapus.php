<?php
require 'function.php';

$kode_barang = $_GET["kode_barang"];

if (hapus($kode_barang) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = 'admin.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = 'admin.php';
        </script>";
}
?>