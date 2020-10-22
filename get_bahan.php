<?php 
	include("koneksi.php");

	$id_bahan = POST['id_bahan'];

	$sql = mysqli_query($db,"SELECT id_bahan, nama_bahan, CAST(harga_bahan AS INT) AS harga_bahan FROM bahan WHERE id_bahan='".$id_bahan."'");

	echo json_encode(mysqli_fetch_array($sql));
?>