<?php 
	//KONEKSI KE DB
$conn = mysqli_connect("localhost", "root", "", "dbpengunjung");

	//ambil data
$result = mysqli_query($conn, "SELECT * FROM tbpengunjung");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>chek in</title>
</head>
<body>
	<h1>Daftar Pengunjung</h1>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>No. Urut</th>
			<th>Aksi</th>
			<th>No. Pengunjung</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Tujuan</th>
		</tr>
		<?php $i = 1; ?>
		<?php while( $row = mysqli_fetch_assoc($result) ): ?>
		<tr>
			<td><?= $i;  ?></td>
			<td>
				<a href="">Ubah</a> /
				<a href="">Hapus</a>
			</td>
			<td><?= $row["no_pengunjung"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["alamat"]; ?></td>
			<td><?= $row["tujuan"];?></td>
		</tr>
		<?php $i++; ?>
		<?php endwhile; ?>
	</table>
</body>
</html>