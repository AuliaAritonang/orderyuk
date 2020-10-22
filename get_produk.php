<?php 
	include("koneksi.php");

	$id_produk = $_POST['id_produk'];

	$sql = mysqli_query($db,"SELECT * FROM produk WHERE id_produk='".$id_produk."'");

	echo json_encode(mysqli_fetch_array($sql));
?>