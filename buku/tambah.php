<?php
include '../koneksi.php';
include '../aset/header.php';
$query = mysqli_query($kon, "SELECT * FROM kategori");
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card" style="width: 70rem;">
                <div class="card-header" style="width: 70rem;">
                    <h2 class="card-title"><i class="fas fa-plus-square"></i></i>Tambah Buku</h2>
                </div>
                <div class="card-body">
                <form action="tambah-proses.php" method="post">
                <table class="table">
                    <tr>
                        <td>Judul</td>
                        <td><input type="text" name="judul" value=""></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td><input type="text" name="penerbit" id=""></td>
                    </tr>
                    <tr>
                        <td>Pengarang</td>
                        <td><input type="text" name="pengarang" value=""></td>
                    </tr>
                    <tr>
                        <td>Ringkasan</td>
                        <td><textarea name="ringkasan" type="textarea">
                        
                            </textarea></td>
                    </tr>
                    <tr>
                        <td>Cover</td>
                        <td><input type="file" name="cover" id=""></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><input type="number" name="stok" id=""></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td><select name="id_kategori" style="width: 200px">
                                <option value="">-- Pilih Kategori --</option>
                                <?php
                                    while ($kategori = mysqli_fetch_assoc($query)) { ?>
                                        <option value="<?= $kategori['id_kategori'];?>"><?= $kategori['kategori'];?></option>
                                <?php
                                    }
                                ?>
                            </select></td>
                    </tr>
                    <tr>
                        <th></th>
                        <th><button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button></th>
                    </tr>
                </table>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>