<?php
include '../aset/header.php';
include '../koneksi.php';

$id_buku = $_GET['id_buku'];

$query = "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku = $id_buku";
$res = mysqli_query($kon, $query);
$det = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
			<center>
				<h2>Detail Buku</h2>
				<hr class="bg-light">
				<table><tr><th>
					<tr>
						<td>Cover</td>
						<td><?php echo "<img style='width:10cm; height: 13cm;' src='$det[cover]'; alt='gambar';"?></td>
					</tr>
					<tr>
						<td>Judul</td>
						<td><?= $det['judul'] ?></td>
					</tr>
					<tr>
						<td>Penerbit</td>
						<td><?= $det['penerbit'] ?></td>
					</tr>
					<tr>
						<td>Pengarang</td>
						<td><?= $det['pengarang'] ?></td>
					</tr>
					<tr>
						<td>Ringkasan</td>
						<td><?= $det['ringkasan'] ?></td>
					</tr>
					<tr>
						<td>Stok</td>
						<td><?= $det['stok'] ?></td>
					</tr>
					<tr>
						<td>Kategori</td>
						<td><?= $det['kategori'] ?></td>
					</tr>
				</table>
			</th></tr></table>
			</center>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>