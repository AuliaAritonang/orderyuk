	<?php
  include_path "koneksi.php" ;
  session_start();
  $id_pesan = GET['id_pesan'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Order Yuk!</title>
        <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/raleway-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/style1.css"/>
    <link rel="stylesheet" href="css/style2.css"/>
    <link rel="stylesheet" href="vendor/bootrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
  </head>
  <body>
    
      <div class="menu">
    <ul>
      <li><a href="logout_customer.php">Logout</a></li>
      <li><a href="ubah_pass.php">Pengaturan</a></li>
      <li><a href="pesanansaya.php">Pesanan Saya</a></li>
      <li><a href="pemesanan.php">Buat Pesanan Baru</a></li>
    </ul>
  </div>
        <div class="page-content" >
      <div class="wizard-v1-content">
        <div class="wizard-form">

          
	<h3 align="center">Upload Bukti Transaksi</h3>
	<br>
	<form action="aksi_upload.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_pesan" value="<?php return $id_pesan; ?>">
    <center><input type="file" name="file">
		<input type="submit" name="upload" value="Upload"></center>
		<br>
	</form>
	<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.steps.js"></script>
<script src="js/main_backup.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="vendor/bootrap/js/bootstrap.min.js"></script>
</html>
