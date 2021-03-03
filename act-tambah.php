<?php 

require 'koneksi.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

$sql = "INSERT INTO jurnal (judul, deskripsi) VALUES ('$judul', '$deskripsi')";

$result = $conn->query($sql);

if ($result === TRUE) {
	header('Location: index.php');
} else {
	die("insert gagal");
}