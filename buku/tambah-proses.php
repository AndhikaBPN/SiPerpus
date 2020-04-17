<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $judul          =$_POST['judul'];
    $penerbit       =$_POST['penerbit'];
    $pengarang      =$_POST['pengarang'];
    $ringkasan      =$_POST['ringkasan'];
    $cover          =$_POST['cover'];
    $stok           =$_POST['stok'];
    $id_kategori    =$_POST['id_kategori'];

    $sql="INSERT INTO buku (judul, penerbit, pengarang, ringkasan, cover, stok, id_kategori) 
          VALUES ('$judul', '$penerbit','$pengarang', '$ringkasan', '$cover', '$stok', '$id_kategori')";

    $res = mysqli_query($kon, $sql);

    if ($res>0) {
        echo "<script>
                alert('Data Berhasil Ditambah'); document.location.href='index.php';
              </script>";
    }else {
        echo "tolol";
    }
}

include '../aset/header.php';
?>