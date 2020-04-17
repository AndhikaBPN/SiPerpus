<?php
include '../koneksi.php';
include '../aset/header.php';
$id_anggota = $_GET['id_anggota'];
$sql = mysqli_query($kon, "SELECT * FROM anggota WHERE id_anggota=$id_anggota");
$ang = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
</head>
<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card" style="width: 70rem;">
                <div class="card-header" style="width: 70rem;">
                    <h2 class="card-title"><i class="fas fa-plus-square"></i></i>Edit Anggota</h2>
                </div>
                <div class="card-body">
                <form action="edit-proses.php" method="post">
                <table class="table">
                <input type="hidden" name="id_anggota" value="<?= $ang['id_anggota'];?>">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?= $ang['nama'];?>" required></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td><input type="text" name="kelas" value="<?= $ang['kelas'];?>" required></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td><input type="number" name="telp" value="<?= $ang['telp'];?>" required></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" style="width: 100%;" value="<?= $ang['username'];?>" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="<?= $ang['password'];?>" required></td>
                    </tr>
                    <tr>
                        <th></th>
                        <th><button type="submit" class="btn btn-primary" name="simpan" style="width: 100%; height: 70px">EDIT</button>
                </form> &nbsp
                <form action="index.php">
                            <button type="submit" class="btn btn-primary" name="kembali" style="width: 100%; height: 70px">KEMBALI</button>
                </form> </th>
                    </tr>
                </table>
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