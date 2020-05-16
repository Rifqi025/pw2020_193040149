<?php
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
// fungsi untuk menghapus data
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM alat_musik WHERE kode_barang = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();
  
  $kode_barang = $data['kode_barang'];
  $foto = htmlspecialchars($data['foto']);
  $merk_barang = htmlspecialchars($data['merk_barang']);
  $jns_barang = htmlspecialchars($data['jns_barang']);
  $bhn_dsr_barang = htmlspecialchars($data['bhn_dsr_barang']);
  $harga_barang = htmlspecialchars($data['harga_barang']);

  $query = "UPDATE alat_musik SET
            foto = '$foto',
            merk_barang = '$merk_barang', 
            jns_barang = '$jns_barang', 
            bhn_dsr_barang = '$bhn_dsr_barang', 
            harga_barang = '$harga_barang'
            WHERE kode_barang = $kode_barang";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah digunakan!');
          </script>";
    return false;      
  }
  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambah user baru 
  $query_tambah = "INSERT INTO user 
                  VALUES
                  ('', '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}

?>