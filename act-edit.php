<?php 

require 'koneksi.php';

$id = $_GET['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

$sql = "UPDATE jurnal SET judul='$judul', deskripsi='$deskripsi' WHERE id='$id'";
$result = $conn->query($sql);
if ($result === TRUE) {
	header('Location: index.php');
} else {
	die('Update gagal');
}