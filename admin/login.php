<?php
// KONEKSI KE DATABASE
session_start();
$koneksi = mysqli_connect('localhost','root','', 'db_konveksi');

// PROSES LOGIN
if($_POST['login']){
	$username	= $_POST['username'];
	$password	= $_POST['password'];
 
	if($username && $password){
		$cek_db	= "SELECT * FROM user WHERE username='$username' and password='$password'";
		$query	= mysqli_query($koneksi, $cek_db);
		$_SESSION['user']=$query;
		if(mysqli_num_rows($query) != 0){
			$row = mysqli_fetch_assoc($query);
			$db_user = $row['username'];
			$db_pass = $row['password'];
 
			if($username == $db_user && $password == $db_pass){
				$_SESSION['username'] = $db_user;
				header("location:application/index.php");

				// masukkan script lainnya disini
				// seperti Session atau redirect ke halaman admin
			}else{
				echo "<script>alert('Username dan Password tidak cocok!');</script>";
				echo "<script>window.location.href='index.php';</script>";
			}
		}else{
			echo "<script>alert('Username tidak ada dalam Database!');</script>";
			echo "<script>window.location.href='index.php';</script>";
		}
	}else{
		echo "<script>alert('Username dan Password masih kosong!');</script>";
		echo "<script>window.location.href='index.php';</script>";
	}
} 
?>