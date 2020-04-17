<?php
include '../koneksi.php';
include '../aset/header.php';
$id_buku = $_GET['id_buku'];
$sql = mysqli_query($kon, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku = $id_buku");
$buku = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
</head>
<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card" style="width: 70rem;">
                <div class="card-header" style="width: 70rem;">
                    <h2 class="card-title"><i class="fas fa-plus-square"></i></i>Edit Buku</h2>
                </div>
                <div class="card-body">
                <form action="edit-proses.php" method="post">
                <table class="table">
                <input type="hidden" name="id_buku" value="<?= $buku['id_buku'];?>">
                    <tr>
                        <td>Judul</td>
                        <td><input type="text" name="judul" value="<?= $buku['judul'];?>"></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td><input type="text" name="penerbit" value="<?= $buku['penerbit'];?>"></td>
                    </tr>
                    <tr>
                        <td>Pengarang</td>
                        <td><input type="text" name="pengarang" value="<?= $buku['pengarang'];?>"></td>
                    </tr>
                    <tr>
                        <td>Ringkasan</td>
                        <td><textarea name="ringkasan" style="width: 100%; height: 100px;" value="<?= $buku['cover'];?>" type="textarea" required>
                                <?= $buku['ringkasan'];?>
                            </textarea></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><input type="number" name="stok" style="width: 100%;" value="<?= $buku['stok'];?>" required></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td><select name="id_kategori" style="width: 100%" required>
                                <?php
                                    $sql1 = mysqli_query($kon, "SELECT * FROM kategori");
                                    while ($query_kategori = mysqli_fetch_assoc($sql1)) : ?>
                                        <option value="<?= $query_kategori['id_kategori'];?>"><?= $query_kategori['kategori'];?></option>
                                <?php
                                    endwhile;
                                ?>
                            </select></td>
                    </tr>
                    <tr>
                        <th></th>
                        <th><button type="submit" class="btn btn-primary" name="simpan" style="width: 100%; height: 70px">EDIT</button></form> &nbsp
                            <form action="index.php"><button type="submit" class="btn btn-primary" name="kembali" style="width: 100%; height: 70px">KEMBALI</button></form></th>
                    </tr>
                </table>
                <!-- </form> -->
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