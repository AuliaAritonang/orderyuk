<?php 
	require_once 'koneksi.php';

	$username = REQUEST['username'];
	$password = REQUEST['password'];

	if ($id_user!="") {
		if ($kode !="") {
            $sql = mysqli_query($db, "INSERT INTO user(username,password) VALUES ('$username', '$password')");

            return "Sukses";
        } else {
            return "Gagal";
        }
    } else {
        return "gagal upload";
    }
	}
?>