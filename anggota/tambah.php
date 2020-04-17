<?php
include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card" style="width: 70rem;">
                <div class="card-header" style="width: 70rem;">
                    <h2 class="card-title"><i class="fas fa-user-plus"></i>Tamabah Anggota</h2>
                </div>
                <div class="card-body">
                <form action="tambah-proses.php" method="post">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value=""></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td><input type="text" name="kelas" value=""></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td><input type="number" name="telp" id=""></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" id=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id=""></td>
                    </tr>
                    <tr>
                        <th><button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button></th>
                        <th></th>
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