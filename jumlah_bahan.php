<?php 
	include("koneksi.php");

	$id_bahan = json_encode($_POST['id_bahan']);
	$id_bahan = str_replace('[', '(', $id_bahan);
	$id_bahan = str_replace(']', ')', $id_bahan);

	$sql = mysqli_query($db,"SELECT SUM(harga_bahan) AS harga_bahan FROM bahan WHERE id_bahan IN ".$id_bahan."");

	echo json_encode(mysqli_fetch_array($sql));
?>