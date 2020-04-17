<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
	$id_anggota = $_POST['id_anggota'];
	$nama 		= $_POST['nama'];
	$kelas 		= $_POST['kelas'];
	$telp 		= $_POST['telp'];
	$password 	= $_POST['password'];
	$username 	= $_POST['username'];
	$id_level 	= 3;

	$query = mysqli_query($kon, "UPDATE anggota SET nama = '$nama',
													kelas = '$kelas',
													telp = '$telp',
													password = '$password',
													username = '$username',
													id_level = $id_level WHERE id_anggota=$id_anggota");
	// $res=mysqli_query($kon, $query);
	// $count = mysqli_affected_rows($kon);

	var_dump($query);
	// if ($res > 0) {
	// 	echo  "<script> alert('Data berhasil dihapus'); window.location='index.php'</script>";
	// }
	
}else{
	header("Location='edit.php'");
}
?>