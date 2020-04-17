<?php

include '../koneksi.php';
include '../aset/header.php';

$id_anggota = $_GET['id_anggota'];

$sql = mysqli_query($kon, "SELECT * FROM anggota WHERE id_anggota = $id_anggota");
$ang = mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Anggota</title>
</head>
<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card" style="width: 70rem;">
                <div class="card-header" style="width: 70rem;">
                    <h2 class="card-title"><i class="fas fa-plus-square"></i></i>Detail Anggota</h2>
                </div>
                <div class="card-body">
                <form action="index.php" method="post">
                <table class="table">
                <input type="hidden" name="id_anggota" value="<?= $ang['id_anggota'];?>">
                    <tr>
                        <td>Nama</td>
                        <td><?= $ang['nama'];?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td><?= $ang['kelas'];?></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td><?= $ang['telp'];?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><?= $ang['username'];?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><?= $ang['password'];?></td>
                    </tr>
                    <tr>
                        <th></th>
                        <th>
                            <button type="submit" class="btn btn-primary" name="kembali" style="width: 100%; height: 70px">KEMBALI</button>
                        </th>
                    </tr>
                </table>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
include '../aset/footer.php';
?>