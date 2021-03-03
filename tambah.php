<!DOCTYPE html>
<html>
<head>
	<title>Tambah Jurnal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="app">
		<h1>Tambah Jurnal</h1>
		<form action="act-tambah.php" method="POST">
			<table>
				<tbody>
					<tr>
						<td>Judul</td>
						<td>
							<input type="text" name="judul">
						</td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td>
							<textarea name="deskripsi"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<button type="submit">SIMPAN</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</body>
</html>