<<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("kodeksi ke DB gagal");
  mysqli_select_db($conn, "tubes_193040149") or die("Database salah!");

  return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sql);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
  $conn = koneksi();
  
  $foto = htmlspecialchars($data['foto']);
  $merk_barang = htmlspecialchars($data['merk_barang']);
  $jns_barang = htmlspecialchars($data['jns_barang']);
  $bhn_dsr_barang = htmlspecialchars($data['bhn_dsr_barang']);
  $harga_barang = htmlspecialchars($data['harga_barang']);
 
  $query = "INSERT INTO alat_musik
            VALUES
          ('','$foto', '$merk_barang', '$jns_barang', '$bhn_dsr_barang', '$harga_barang' ) ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}