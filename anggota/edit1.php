<?php 

include "../koneksi.php";
include '../aset/header.php';
$id_anggota = $_GET['id_anggota'];
$query = mysqli_query($kon, "SELECT * FROM anggota WHERE id_anggota=$id_anggota");
$anggota = mysqli_fetch_assoc($query);

?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<center>
				<div class="card" style="width: 100%">
					<div class="card-header" style="width: 100%">
						<h2 class="card-tittle"><i class="fas fas fa-book"></i> Edit Data Anggota</h2>
					</div>
					<div class="card-body"></div>
					<form action="edit-proses.php" method="post">
						<table class="table">
							<input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota']; ?>">
							<tr>
								<td>Nama</td>
								<td><input style="width: 100%" type="text" name="nama" value="<?= $anggota['nama']; ?>" required></td>
							</tr>
							<tr>
								<td>Kelas</td>
								<td><input style="width: 100%" type="text" name="kelas" value="<?= $anggota['kelas']; ?>" required></td>
							</tr>
							<tr>
								<td>Telepon</td>
								<td><input style="width: 100%" type="number" name="telp" value="<?= $anggota['telp']; ?>" required></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input style="width: 100%" type="password" name="password" value="<?= $anggota['password']; ?>" required></td>
							</tr>
							<tr>
								<td>Username</td>
								<td><input style="width: 100%" type="text" name="username" value="<?= $anggota['username']; ?>" required></td>
							</tr>
							<tr>
								<th></th>
								<th><button type="submit" class="btn btn-primary" name="simpan" style="width: 100%; height: 70px">Edit
								</button></th>
							</tr>
						</table>
					</form>
				</div>
			</center>
		</div>
	</div>
</div>