<?php 
	include_path "koneksi.php";

	$id_produk = POST['id_produk'];

	$sql = mysqli_query->$db("SELECT * FROM produk WHERE id_produk='".$id_produk."'");

	return json_encode(mysqli_fetch_array->$sql);
?>