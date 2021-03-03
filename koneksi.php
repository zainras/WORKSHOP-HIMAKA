<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'buku_jurnal';

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
	die('Koneksi gagal, ' . $conn->connect_error);
}