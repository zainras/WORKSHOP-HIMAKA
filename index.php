<?php 
	require 'koneksi.php';
	$sql = "SELECT * FROM jurnal";
	$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buku Jurnal Harian</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="app">
		<h1>Buku Jurnal Harian</h1>
		<div class="text-kanan">
			<a href="tambah.php" class="act act-tambah">Tambah Jurnal</a>
		</div>
		<br>
		<table>
			<thead>
				<tr>
					<th>No</th>
					<th>Tgl</th>
					<th>Judul</th>
					<th>Deskripsi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				if ($result->num_rows > 0) {
					$i = 1;
					while ($row = $result->fetch_assoc()) {
						echo '<tr>';
							echo '<td>' . $i . '</td>';
							echo '<td>' . date('Y/m/d H:i', strtotime($row['tanggal'])) . '</td>';
							echo '<td>' . $row['judul'] . '</td>';
							echo '<td>' . substr($row['deskripsi'], 0, 50) . '</td>';
							echo '<td>';
									echo '<a href="lihat.php?id='. $row['id'] .'" class="act act-lihat">Lihat</a>';
									echo '<a href="edit.php?id='. $row['id'] .'" class="act act-edit">Edit</a>';
									echo '<a href="act-hapus.php?id='. $row['id'] .'" class="act act-hapus">Hapus</a>';
								echo '</td>';
							echo '</tr>';
						$i++;
					}
				}
				?>
			</tbody>
		</table>

	</div>
</body>
</html>