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
	<title>Edit Jurnal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="app">
		<h1>Edit Jurnal</h1>
		<form action="act-edit.php?id=<?php echo $data['id'] ?>" method="POST">
			<table>
				<tbody>
					<tr>
						<td>Tanggal</td>
						<td>
							<?php echo date('d/m/Y H:i', strtotime($data['tanggal'])) ?>
						</td>
					</tr>
					<tr>
						<td>Judul</td>
						<td>
							<input type="text" name="judul" value="<?php echo $data['judul'] ?>">
						</td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td>
							<textarea name="deskripsi"><?php echo $data['deskripsi'] ?></textarea>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
		<br>
		<div>
			<a href="index.php">Kembali</a>
			<button type="submit">UPDATE</button>
		</div>
	</div>
</body>
</html>