<?php 
include_path 'koneksi.php';
   if(POST['upload']){
   	$id_pesan = POST['id_pesan'];
	$ekstensi_diperbolehkan	= array('png','jpg');
	$gambar_dp = FILES['file']['name'];
	$x = explode('.', $gambar_dp);
	$ekstensi = strtolower(end($x));
	$ukuran	= FILES['file']['size'];
	$file_tmp = FILES['file']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 10440700){			
			move_uploaded_file($file_tmp, 'gambar_dp/'.$gambar_dp);

			$query = mysqli_query($db,"UPDATE pemesanan SET gambar_dp = '$gambar_dp' WHERE id_pesan = '$id_pesan'");

			//$query = mysql_query("INSERT INTO pemesanan(id_pesan,id_user,id_produk,id_bahan,id_ukuran,alamat,kota,provinsi,kodepos, gambar,tgl_kirim,tgl_selesai,ket,status,gambar_dp,gambar_lunas") VALUES ('$id_pesan','$id_user','$id_produk','$id_bahan','$id_ukuran','$alamat','$kota','$provinsi','$kodepos', '$gambar','$tgl_kirim','$tgl_selesai','$ket','$status','$gambar_dp','$gambar_lunas' )");
			if($query){
				return "<script>alert('FILE BERHASIL DI-UPLOAD')</script>";
				return "<script>window.location.href='pesanansaya.php';</script>";
			}else{
				return "<script>alert('GAGAL UPLOAD GAMBAR!');history.go('-1');</script>";
			}
		    }else{
		    	return "<script>alert('UKURAN FILE TERLALU BESAR!');history.go('-1');</script>";
		    }
	       }else{
			return "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');history.go('-1');</script>";
	       }
    }
?>
