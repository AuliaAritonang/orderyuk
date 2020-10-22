<?php 
	include_once 'koneksi.php';

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if ($id_user!="") {
		if ($kode !="") {
            $sql = mysqli_query($db, "INSERT INTO user(username,password) VALUES ('$username', '$password')");

            echo "Sukses";
        } else {
            echo "Gagal";
        }
    } else {
        echo "gagal upload";
    }
	}
?>