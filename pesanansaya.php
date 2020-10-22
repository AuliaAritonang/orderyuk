<?php
  include("koneksi.php");
  session_start();
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
      <li><a href="pemesanan.php">Buat Pesanan Baru</a></li>
    </ul>
  </div>
        <div class="page-content"  style="background-image: url('images/background.jpg')">
      <div class="wizard-v1-content">
        <div class="wizard-form">
          <ul class="alert alert-danger" style="display:none;"></ul>

          <!-- tabel -->
          <div id="form-total">
          <h2 align="center"> Data Pesanan Saya</h2>
         <table class="zebra-table">
          <thead>
          <tr>
        <th>No</th>
        <th>Produk</th>
        <th>Bahan</th>
        <th>Tanggal Pesanan</th>
        <th colspan="2">Total Biaya</th>
        <th>Bukti Transaksi</th>
        <th>Status</th>
        </tr>
        </thead>
        <tbody>
<?php 
include'koneksi.php';

$username = $_SESSION['username'];
$tampil= mysqli_query($db,"SELECT * FROM user JOIN pemesanan ON pemesanan.id_user=user.id_user JOIN produk ON produk.id_produk=pemesanan.id_produk JOIN bahan ON bahan.id_bahan= pemesanan.id_bahan JOIN ukuran ON ukuran.id_ukuran=pemesanan.id_ukuran WHERE user.username='$username'");
  $no=1;
// $harga_total = ($ambil['small']+$ambil['medium']+$ambil['large']+$ambil['exlarge']+$ambil['exexlarge'])*$ambil['harga_bahan'];
while ($ambil = mysqli_fetch_array($tampil)) {
  $id_pesan=$ambil['id_pesan'];
  $small=$ambil['small'];
  $medium=$ambil['medium'];
  $large=$ambil['large'];
  $exlarge=$ambil['exlarge'];
  $exexlarge=$ambil['exexlarge'];
  $harga_bahan=$ambil['harga_bahan'];
  // $harga_total = ($ambil['small']+$ambil['medium']+$ambil['large']+$ambil['exlarge']+$ambil['exexlarge'])*$ambil['harga_bahan'];
  $harga_total = ($small+$medium+$large+$exlarge+$exexlarge)*$harga_bahan;
  // var_dump($harga_total);

  ?>
  <tr>
  <td><?php echo $no;?></td>
  <td><?php echo $ambil['nama_produk'];?></td>
  <td><?php echo $ambil['nama_bahan'];?></td>
  <td><?php echo ambil['tgl_kirim'];?></td>
  <td>Rp</td> 
  <td><?php echo number_format($harga_total);?></td> 
  <td>
    <?php
    
    if ($ambil['gambar_dp'] != 'Belum mengirim dp'){
      echo "<img src='gambar_dp/";
      echo ambil['gambar_dp'];
      echo " width='150'>";
    } else{
      echo "Bukti Transaksi belum di-upload";
    }
     ?>
    &emsp;
    <center><a class="btn btn-info btn-xs" href="bukti_transaksi.php?id_pesan=<?php echo $id_pesan;?>" type="file"><i class="fa fa-upload"></i> Upload</a></center>
      </td>
    <!-- <button class="btn btn-info btn-xs" href = 'bukti_transaksi.php?>'> <i class="fa fa-upload"></i> --> 
  <td><?php echo $ambil['status'];?></td>
  <td><!-- 
    <button class="btn btn-warning btn-xs" onclick="window.location = 'edit_pesanansaya.php?>'"> <i class="fa fa-md fa-edit"></i> --> 
        <!-- <button class="btn btn-danger btn-xs" onclick="window.location = 'hapus_pesanansaya.php?id_pesan=<?php //echo $id_pesan;?>'"> <i class="fa fa-trash"></i> -->
  </td>
</tr>
<?php 
$no ++;} ?>
</tbody>
</table>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.steps.js"></script>
<script src="js/main_backup.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="vendor/bootrap/js/bootstrap.min.js"></script>
</html>