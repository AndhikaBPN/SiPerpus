<?php

// ambil buku
    function ambilBuku($kon) {
        $sql="SELECT id_buku, judul FROM buku";
        $res=mysqli_query($kon, $sql);

        $data_buku=array();

        while ($data=mysqli_fetch_assoc($res)) {
            $data_buku[]=$data;
        }

        return $data_buku;
    }
?>

<?php
//ambil anggota
    function ambilAnggota($kon){
        $sql="SELECT id_anggota, nama FROM anggota";
        $res=mysqli_query($kon, $sql);

        $data_anggota=array();

        while ($data=mysqli_fetch_assoc($res)) {
            $data_anggota[]=$data;
        }

        return $data_anggota;
    }
?>

<?php
//ambil petugas
    function ambilPetugas($kon){
        $sql = "SELECT id_petugas, nama_petugas FROM petugas";
        $res = mysqli_query($kon, $sql);

        $data_petugas = array();

        while ($data=mysqli_fetch_assoc($res)) {
            $data_petugas[]=$data;
        }

        return $data_petugas;
    }
?>

<?php
//ambil peminjaman
    function ambilPeminjaman($kon, $id_pinjam){
        $sql="SELECT * FROM peminjaman INNER JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota
                                       INNER JOIN detail_pinjam USING (id_pinjam)
                                       INNER JOIN buku ON detail_pinjam.id_buku = buku.id_buku
                                       WHERE id_pinjam = $id_pinjam";
        $res=mysqli_query($kon, $sql);

        $data=mysqli_fetch_assoc($res);

        return $data;
    }
?>

<?php
//ambil stok
    function ambilStok($kon, $id_buku){
        $sql="SELECT stok FROM buku WHERE id_buku = $id_buku";
        $res=mysqli_query($kon, $sql);

        $data=mysqli_fetch_assoc($res);

        return $data['stok'];
    }
?>

<?php
//cek pinjam
    function cekPinjam($kon, $id_anggota){
        $sql="SELECT * FROM peminjaman INNER JOIN detail_pinjam USING(id_pinjam) WHERE id_anggota = $id_anggota AND status = 'Dipinjam'";
        $res=mysqli_query($kon, $sql);

        $pinjam=mysqli_affected_rows($kon);

        if ($pinjam == 0) {
            return true;
        } else {
            return false;
        }
    }
?>

<?php
//update stok
    function updateStok($kon, $id_buku, $stok_buku){
        $sql="UPDATE buku SET stok = $stok_update WHERE id_buku = $id_buku";
        $res=mysqli_query($kon, $sql);
    }
?>

<?php
//hitung denda
    function hitungDenda($kon, $id_pinjam, $tgl_kembali){
        $denda=0;

        $sql="SELECT tgl_jatuh_tempo FROM peminjaman WHERE id_pinjam = $id_pinjam";
        $res=mysqli_query($kon, $sql);

        $data=mysqli_fetch_assoc($res);
        $tgl_jatuh_tempo=$data['tgl_jatuh_tempo'];

        $hari_denda=(strtotime($tgl_kembali) - strtotime($tgl_jatuh_tempo))/60/60/24;

        if ($hari_denda >= 0) {
            $denda=$hari_denda * 1000;
        }

        return $denda;
    }
?>