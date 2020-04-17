<?php
include '../koneksi.php';

$sql="SELECT * FROM anggota ORDER BY nama";

$res=mysqli_query($kon, $sql);
$anggota=array();

while ($data=mysqli_fetch_assoc($res)) {
    $anggota[]=$data;
}

include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card" style="width: 70rem;">
                <div class="card-header" style="width: 70rem;">
                    <h2 class="card-title"><i class="fas fa-user"></i>Data Anggota</h2>
                </div>
                <div class="card-body">
                <center><a href="tambah-proses.php" class="badge badge-info" style="width:125px">Tambah Data</a></center>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NO.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        foreach ($anggota as $a) { ?>
                            <tr>
                                <th scope="row"><?= $no;?></th>
                                <td><?= $a['nama'];?></td>
                                <td><?= $a['kelas'];?></td>
                                <td>
                                    <a href="detail.php?id_anggota=<?= $a['id_anggota'];?>" class="badge badge-success">Detail</a>
                                    <a href="edit.php?id_anggota=<?= $a['id_anggota'];?>" class="badge badge-warning">Edit</a>
                                    <a href="hapus.php?id_anggota=<?= $a['id_anggota'];?>" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                            }
                        ?>
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>