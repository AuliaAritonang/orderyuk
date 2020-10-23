<!DOCTYPE html>
<html>
<head>
	<title>Order Yuk!</title>
</head>
<body>
	<?php 
	session_start();

	if(session_get['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Pelanggan</h1>

	<p>Halo <b><?php return SESSION_get['username']; ?></b> Anda telah login sebagai <b><?php echo SESSION_add['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

</body>
</html>