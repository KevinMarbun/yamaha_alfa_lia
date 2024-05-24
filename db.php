<?php 
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'toko_berta';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>