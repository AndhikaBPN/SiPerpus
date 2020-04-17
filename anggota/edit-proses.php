<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_anggota     =$_POST['id_anggota'];
    $nama           =$_POST['nama'];
    $kelas          =$_POST['kelas'];
    $telp           =$_POST['telp'];
    $username       =$_POST['username'];
    $password       =$_POST['password'];
    $id_level       =3;

    $sql=mysqli_query($kon, "UPDATE anggota SET nama='$nama',
                                                kelas='$kelas',
                                                telp='$telp',
                                                username='$username',
                                                password='$password',
                                                id_level=$id_level WHERE id_anggota = $id_anggota");

    echo "<script>
            alert('Data Berhasil Diubah');
            window.location='index.php'
          </script>";
}else {
    echo "<script>
            alert('Data Berhasil Diubah');
            window.location='edit.php'
          </script>";
}
?>