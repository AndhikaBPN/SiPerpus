<?php
include '../koneksi.php';

$id_anggota=$_GET['id_anggota'];
mysqli_query($kon, "DELETE FROM anggota WHERE id_anggota=$id_anggota");

echo "<script> 
        alert('Data Berhasil Dihapus');
        window.location='index.php'
      </script>";
?>