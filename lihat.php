<?php 
	require 'koneksi.php';
	$id = $_GET['id'];
	$sql = "SELECT * from jurnal WHERE id=$id";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lihat Jurnal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="app">
		<h1>Detail Jurnal</h1>
		<table>
			<tbody>
				<tr>
					<td>Tanggal</td>
					<td><?php echo $data['tanggal']; ?></td>
				</tr>
				<tr>
					<td>Judul</td>
					<td><?php echo $data['judul']; ?></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td><?php echo $data['deskripsi']; ?></td>
				</tr>
			</tbody>
		</table>
		<br>
		<a href="index.php">Kembali</a>
	</div>
</body>
</html>