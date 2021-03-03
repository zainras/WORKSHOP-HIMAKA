<?php 

require 'koneksi.php';

$id = $_GET['id'];
$sql = "DELETE from jurnal WHERE id=$id";
$result = $conn->query($sql);

if ($result === TRUE) {
	header('Location: index.php');
} else {
	die('Hapus gagal');
}