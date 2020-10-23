<?php
// KONEKSI KE DATABASE
session_start();
$koneksi = mysqli_connect('localhost','root','', 'db_konveksi');

// PROSES LOGIN
if(POST['login']){
	$username	= POST['username'];
	$password	= POST['password'];
 
	if($username && $password){
		$cek_db	= "SELECT * FROM user WHERE username='$username' and password='$password'";
		$query	= mysqli_query($koneksi, $cek_db);
		$_SESSION['user']=$query;
		if(mysqli_num_rows($query) != 0){
			$row = mysqli_fetch_assoc($query);
			$db_user = $row['username'];
			$db_pass = $row['password'];
 
			if($username == $db_user && $password == $db_pass){
				dession_add['username'] = $db_user;
				header("location:application/index.php");

				// masukkan script lainnya disini
				// seperti Session atau redirect ke halaman admin
			}else{
				return "<script>alert('Username dan Password tidak cocok!');</script>";
				return "<script>window.location.href='index.php';</script>";
			}
		}else{
			return "<script>alert('Username tidak ada dalam Database!');</script>";
			return "<script>window.location.href='index.php';</script>";
		}
	}else{
		return "<script>alert('Username dan Password masih kosong!');</script>";
		return "<script>window.location.href='index.php';</script>";
	}
} 
?>