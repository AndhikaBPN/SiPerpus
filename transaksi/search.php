<?php
include '../koneksi.php';

$hasil=$_POST['cari'];
if ($hasil==1 or $hasil==3 or $hasil==7) {
    $waktu = date('Y-m-d', strtotime("-$hasil day", strtotime(date("Y-m-d"))));
    $sql = "SELECT * FROM peminjaman INNER JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota
            INNER JOIN detail_pinjam dp USING (id_pinjam)
            INNER JOIN petugas ON peminjaman.id_petugas = petugas.id_petugas 
            WHERE peminjaman.tgl_pinjam='$waktu' or peminjaman.tgl_jatuh_tempo = '$waktu' ORDER BY peminjaman.id_pinjam";
}else{
    $sql = "SELECT * FROM peminjaman INNER JOIN peminjaman.id_petugas=petugas.id_petugas
            WHERE anggota.nama like '%hasil%' or petugas.nama_petugas like '%hasil%' or dp.status like '%hasil%'
            ORDER BY peminjaman.tgl_pinjam";

    $res = mysqli_query($kon, $sql);
    $pinjam = array();

    while ($data = mysqli_fetch_assoc($res)) {
        $pinjam[] = $data;
    }
?>

    <table class="">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Peminjaman</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Petugas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        $no=1;
        foreach($pinjam as $p) { ?>
            <tr>
                <th scope="row"><?= $no;?></th>
                <td><?= $p['nama'];?></td>
                <td><?= date('d F Y', strtotime($p['tgl_pinjam']));?></td>
                <td><?= date('d F Y', strtotime($p['tgl_jatuh_tempo']));?></td>
                <td><?= $p['nama_petugas'];?></td>
                <td>
                    <?php
                    if ($p['status'] == "Dipinjam") {
                        echo "<h5><span class='badge badge-info'>Dipinjam</span></h5>";
                    } else {
                        echo "<h5><span class='badge badge-success'>Kembali</span></h5>";
                    }
                    ?>
                </td>
                <td>
                    <a href="detail.php?id_pinjam=<?= $p['id_pinjam'];?>" class="badge badge-success">Detail</a>
                    <a href="form-edit?id_pinjam=<?= $p['id_pinjam'];?>" class="badge badge-warning">Edit</a>
                    <a href="hapus.php?id_pinjam=<?= $p['id_pinjam'];?>" class="badge badge-danger">Hapus</a>
                </td>
            </tr>
            <?php
            $no++;
        }
        ?>
    </table>
?>