<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah Password</title>
	<link rel="stylesheet" type="text/css" href="css/style_login.css">
</head>
<body>
 
	<!-- <h1>Login</h1> -->

	<?php 
	if(GET('pesan')){
		if(GET('pesan')=="gagal"){
			echo "<div class='alert'>Password Gagal di Ubah !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Form Ubah Password</p>
 
		<form action="aksi_pass.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" readonly value="<?php return session_add['username']; ?>">
 
			<label>Password Lama</label>
			<input type="password" name="password_lama" class="form_login" placeholder="Password">

			<label>Password Baru</label>
			<input type="password" name="password_baru" class="form_login" placeholder="Password">

			<label>Konfirmasi Password Baru</label>
			<input type="password" name="konfirmasi_password" class="form_login" placeholder="Password">
 
			<input type="submit" name="ubah" class="tombol_login" value="UBAH">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="pemesanan.php">kembali</a>
			</center>
		
	</div>
 
 
</body>
</html>