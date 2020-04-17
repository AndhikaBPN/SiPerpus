<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_buku = $_GET['id_buku'];

$sql = "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku = $id_buku";
$res = mysqli_query($kon,$sql);
$det = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Buku</h2>
			<hr class="bg-light">
			<table><tr><th>
				<table class="table table-bordered">
					<tr>
						<td><strong>Cover</strong></td>
						<td><?php echo "<img style='width: 10cm; height: 13cm;' src='$det[cover]'; alt='gambar'";?></td>
					</tr>
					<tr>
						<td><strong>Judul</strong></td>
						<td><?= $det['judul'] ?></td>
					</tr>
					<tr>
						<td><strong>Penerbit</strong></td>
						<td><?= $det['penerbit'] ?></td>
					</tr>
					<tr>
						<td><strong>Pengarang</strong></td>
						<td><?= $det['pengarang'] ?></td>
					</tr>
					<tr>
						<td><strong>Ringkasan</strong></td>
						<td><?= $det['ringkasan'] ?></td>
					</tr>
					<tr>
						<td><strong>Stok</strong></td>
						<td><?= $det['stok'] ?></td>
					</tr>
					<tr>
						<td><strong>Kategori</strong></td>
						<td><?= $det['kategori'] ?></td>
					</tr>
				</table>
				</th></tr></table>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>