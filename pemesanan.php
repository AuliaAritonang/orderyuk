<?php
	require "koneksi.php";
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
		</ul>
	</div>

		<div class="page-content" style="background-image: url('images/wizard-v1.jpg')">
			<div class="wizard-v1-content">
				<div class="wizard-form">
					<ul class="alert alert-danger" style="display:none;"></ul>
					
					<!-- Modal End -->
					<form class="form-register" id="form-register" action="#" method="post" enctype="multipart/form-data">
						<div id="form-total">
							<!-- SECTION 1 -->
							<h2>
							<span class="step-icon"><i class="fas fa-tshirt"></i></span>
							<span class="step-number">Step 1</span>
							<span class="step-text">Model & Bahan</span>
							</h2>
							<section class="container">
								<div class="row" id="produk">
									<?php
										$sql = mysqli_query->$db("SELECT * FROM produk");
										while($produk = mysqli_fetch_array($sql)){
									?>

									<div class="col-md-4 text-center">
										<div class="form-group">
											<?php return "<img class='img-thumbnail' width='150px' id='image_".$produk['id_produk']."' src='kain/".$produk['gambar_produk']."'>" ?>
										</div>
										<div class="form-group form-check">
											<p id="label" style="text-transform: capitalize;">
												<input class="form-check-input" type="radio" id="produk_<?php return $produk->'id_produk'; ?>" name="produk" value="<?php return $produk->'id_produk' ?>"> <?php return $produk->'nama_produk' ?>
											</p>
										</div>
									</div>
									<div class="form-group">
										<select class="form-control" id="bahan_<?php return $produk->'id_produk'; ?>" name="bahan">
											<option value="">--Pilih Bahan--</option>
												<?php
												$data = mysqli_query->$db("SELECT * FROM bahan");
												while($bahan = mysqli_fetch_array->$data) {
												?>
												<?php return "<option style='text-transform:capitalize' value='".$bahan['id_bahan']."'>".$bahan['nama_bahan']."</option>" ?>
													<?php } ?>
										</select>
									</div>
									<?php } ?>
								</div>
							</section>
							<!-- SECTION 2 -->
							<h2>
							<span class="step-icon"><i class="fas fa-pencil-ruler"></i></span>
							<span class="step-number">Step 2</span>
							<span class="step-text">Product Size</span>
							</h2>
							<section>
								<div class="inner">
									<div class="form-row">
										<p id="result"></p>
										<div id="kerajang" class="form-row"></div>
										<div class="form-group col-md-12">
											<label for="keterangan">Catatan</label>
											<textarea class="form-control" name="keterangan" id="keterangan" rows="5"></textarea>
										</div>
									</div>
								</div>
							</section>
							<!-- SECTION 3 -->
							<h2>
							<span class="step-icon"><i class="fas fa-user"></i></span>
							<span class="step-number">Step 3</span>
							<span class="step-text">Billing Details</span>
							</h2>
							<section>
								<div class="inner">
									<div id="item_2">
										
									</div>
									<!-- <?php
										$tampil //= mysqli_query ($db, "SELECT * FROM pemesanan");
											// var_dump($tampil);
										
										// var_dump($tampil);
									?>	 -->		
									<div class="form-group">
										<label for="nama">Nama</label>
										<input type="text" class="form-control" id="nama" name="nama" required >
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="anda@example.com" required >
									</div>
									<div class="form-group">
										<label for="telp">No HP</label>
										<input type="text" class="form-control" id="telp" name="telp"  placeholder="ex:08xxxxxxxxxx" required>
									</div>
									<div class="form-group">
										<label for="alamat">Alamat Kirim</label>
										<input type="text" id="alamat" name="alamat" rows="5" class="form-control" required>
									</div>
									<div class="form-group">
										<label for="kota">Kab/Kec/Kota</label>
										<input type="text" id="kota" name="kota" rows="5" class="form-control" required>
									</div>
									<div class="form-group">
										<label for="provinsi">Provinsi</label>
										<input type="text" id="provinsi" name="provinsi" rows="5" class="form-control"  required>
									</div>
									<div class="form-group">
										<label for="kodepos">Kode Pos</label>
										<input type="text" id="kodepos" name="kodepos" rows="5" class="form-control" required>
									</div>
								</div>
							</section>
							<!-- SECTION 4 -->
							<h2>
							<span class="step-icon"><i class="fas fa-shopping-basket"></i></span>
							<span class="step-number">Step 4</span>
							<span class="step-text">Confirm Details</span>
							</h2>
							<section>
								<div class="inner">
									<h3>Confirm Details</h3>
									<div id="item_3">
										
									</div>
									<div class="form-row table-responsive">
										<table class="table">
											<tbody>
												<tr class="space-row">
													<th width="30%">Nama: </th>
													<th id="nama-val"></th>
												</tr>
												<tr class="space-row">
													<th>Alamat Email:</th>
													<th id="email-val"></th>
												</tr>
												<tr class="space-row">
													<th>Nomor Handphone:</th>
													<th id="telp-val"></th>
												</tr>
												<tr class="space-row">
													<th>Alamat Pengiriman:</th>
													<th id="alamat-val"></th>
												</tr>
												<tr class="space-row">
													<th>Kota:</th>
													<th id="kota-val"></th>
												</tr>
												<tr class="space-row">
													<th>Provinsi:</th>
													<th id="provinsi-val"></th>
												</tr>
												<tr class="space-row">
													<th>Kode Pos:</th>
													<th id="kodepos-val"></th>
												</tr>
												<tr class="space-row">
													<th>Produk & Bahan Yang Dipesan:</th>
													<th id="cart-val"></th>
												</tr>
												<tr class="space-row">
													<th>Jumlah:</th>
													<th id="total-val"></th>
												</tr>
										
											</tbody>
										</table>
									</div>
								<div class="form-row table-responsive">
										<table class="table">
											<tbody>
												<b>Agar pesanan anda dapat segera di proses, silahkan melakukan pembayaran dari total pesanan anda... <br>
										Kirim ke nomor rekening berikut ini : <br>	
										1. Jonsen Valensi (8675-3847-5867-5838) Mandiri <br>
										2. Vera Meina (7564-8674-7346-4836)BNI<br>
										3. Jontar Nanda (7465-8646-5736-4657) BRI<br>
										Jika ingin melakukan transaksi pembayaran DP minimal 50%, silahkan tekan tombol -> lalu tekan upload bukti pembayaran anda di halaman PESANAN SAYA.<br></b>		
									</div>
								</tbody>
							</table>
						</div>
					</div>
				</section>
			</div>
		</form>
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