<?php 
	require "koneksi.php";
	session_start();

	$id_produk = POST['id_produk_1'];
	$id_bahan = POST['id_bahan_1'];

	//section 1
	$produk = POST['produk']; //array
	$bahan = POST['id_bahan_1']; //array

	//section 2
	$desain=FILES['desain']; //array
	$ukurans = POST['new_s']; //array //tabel: ukuran
	$ukuranm = POST['new_m']; //array //tabel: ukuran
	$ukuranl = POST['new_l']; //array //tabel: ukuran
	$ukuranxl = POST['new_xl']; //array //tabel: ukuran
	$ukuranxxl = POST['new_xxl']; //array //tabel: ukuran
	$keterangan = POST['keterangan'];

	//section 3
	$nama = POST['nama']; //tabel user
	$email = POST['email']; //tabel user
	$telp = POST['telp']; //tabel user
	$nama = POST['nama'];
	$email = POST['email'];
	$telp = POST['telp'];
	$alamat = POST['alamat'];
	$kota = POST['kota'];
	$provinsi = POST['provinsi'];
	$kodepos = POST['kodepos'];
	$tgl_kirim = date('Y-m-d H:i:s');
	$tgl_selesai = date('Y-m-d H:i:s');
	//$ket= $_POST['ket'];
	//$status= $_POST['status'];

	//misc
	$username = SESSION_add['username'];
	$namadesain = uniqid();
	$fileextension = pathinfo(FILES['desain']['name'], PATHINFO_EXTENSION);
	$new_gambar = FILES->'desain';
	

	$char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
	$string = '';
	for ($i = 0; $i < 25; $i++) {
		$pos = rand(0, strlen($char) - 1);
		$string .= $char{$pos};
	}

	// //myaqli_query($db,"INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `alamat`, `email`, `telp`, `level`) VALUES ('".$id_user."', '".$username."','".$password."', '".$nama."', '".$alamat."', '".$email."', '".$telp."', '".$level."')");
	// mysqli_query($db,"UPDATE `user` SET `nama`='".$nama."', `email`='".$email."', `telp`='".$telp."' WHERE `username`='".$username."'");

	$ukuranid = uniqid();

	mysqli_query($db,"INSERT INTO `ukuran` (`id_ukuran`, `small`, `medium`, `large`, `exlarge`, `exexlarge`) VALUES ('".$ukuranid."','".$ukurans."','".$ukuranm."', '".$ukuranl."', '".$ukuranxl."', '".$ukuranxxl."')");

	$users = mysqli_query($db,"SELECT `id_user` FROM `user` WHERE `username`='".$username."'");
	$user =  mysqli_fetch_array($users);
	$userid = $user["id_user"];

	mysqli_query($db,"INSERT INTO `pemesanan` (`id_user`,`id_produk`, `id_bahan`, `id_ukuran`,`nama`,`email`,`telp`,`alamat`, `kota`, `provinsi`,`kodepos`, `gambar`, `tgl_kirim`,`tgl_selesai`, `ket`, `gambar_dp`, `gambar_lunas`) VALUES ('".$userid."','".$produk."','".implode($id_bahan)."', '".$ukuranid."','".$nama."','".$email."','".$telp."','".$alamat."','".$kota."', '".$provinsi."','".$kodepos."', '".$namadesain.".".$fileextension."', '".$tgl_kirim."', '".$tgl_selesai."','".$keterangan."','Belum mengirim dp','Belum melakukan pelunasan')");

	move_uploaded_file(FILES['desain']['tmp_name'],'gambar/'.$namadesain.'.'.$fileextension);


	// $i = 0; 
	// foreach ($id_produk as $id)
	// {
	// 	$s = $_POST['new_s_'.$id];
	// 	$m = $_POST['new_m_'.$id];
	// 	$l = $_POST['new_l_'.$id];
	// 	$xl = $_POST['new_xl_'.$id];
	// 	$xxl = $_POST['new_xxl_'.$id];

	// 	$new_gambar = $_FILES['desain_'.$id_produk[$i]];

		// $img = array();

		// $name = $_FILES['desain_'.$id_produk[$i]]['name'];
		// $tmp = $_FILES['desain_'.$id_produk[$i]]['tmp_name'];

		// for ($j = 0; $j < count($name); $j++) {
		// 	$ext = pathinfo($name[$j], PATHINFO_EXTENSION);
		// 	move_uploaded_file($tmp[$j], 'gambar/'.$string.$i.$j.'.'.$ext);
		// 	$img[] = $string.$i.$j.'.'.$ext.' ';
		// }

	// 	$max_pesan = mysqli_query($db,"SELECT IFNULL(MAX(id_pesan),0) AS id_pesan FROM pemesanan ORDER BY id_pesan DESC");
	// 	$id_pesan = mysqli_fetch_array($max_pesan);
	// 	$id_pesan = $id_pesan['id_pesan'];

	// 	$max_size = mysqli_query($db,"SELECT IFNULL(MAX(id_ukuran),0) AS id_ukuran FROM ukuran ORDER BY id_ukuran DESC");
	// 	$id_ukuran = mysqli_fetch_array($max_size);
	// 	$id_ukuran = $id_ukuran['id_ukuran']+1;

	// 	mysqli_query($db,"INSERT INTO `ukuran` (`id_ukuran`, `small`, `medium`, `large`, `exlarge`, `exexlarge`) VALUES ('".$id_ukuran."', '".$s."', '".$m."', '".$l."', '".$xl."', '".$xxl."')");

	// 	mysqli_query($db,"INSERT INTO `item_pemesanan` (`id_item_pemesanan`, `id_pesan`, `id_produk`, `id_bahan`, `id_ukuran`, `gambar`) VALUES ('".date('Ymshis').$i."', '".$id_pesan."', '".$id_produk[$i]."', '".$id_bahan[$i]."', '".$id_ukuran."', '".implode($img)."')");

	// 	$i++;
	// }


	$json = array(
		'produk' => $produk,
		'bahan' => $id_bahan
	);

	return json_encode($json);
?>