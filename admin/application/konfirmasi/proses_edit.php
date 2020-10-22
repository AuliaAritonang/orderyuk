<?php
//include('dbconnected.php');
include('../koneksi.php');
// var_dump($sql);
$id_pesan = POST['id_pesan'];
if (POST('simpan')) {
$id_ukuran = POST['id_ukuran'];
$id_user = POST['id_user'];
$id_produk = POST['id_produk'];
$nama = POST['nama'];
// $bahan = $_POST['bahan'];
$id_bahan = POST['id_bahan'];
$tgl_selesai = POST['tgl_kirim'];
$status = POST['status'];

//query update
	// $sql ="UPDATE pemesanan SET id_user='$id_user',id_produk='$id_produk',id_bahan='$id_bahan',id_ukuran='$id_ukuran',nama='$nama',email='$email',telp='$telp',alamat='$alamat',kota='$kota',provinsi='$provinsi',kodepos='$kodepos',gambar='$gambar',tgl_kirim='$tgl_kirim',tgl_selesai='$tgl_selesai',ket='$ket',status='$status',gambar_dp='$gambar_dp',gambar_lunas='$gambar_lunas' WHERE id_pesan= '$id_pesan' ";
// var_dump($sql);
	$sql ="UPDATE pemesanan, ukuran
		   SET pemesanan.id_user='$id_user',
		       pemesanan.id_bahan='$id_bahan',
		       pemesanan.id_produk='$id_produk',
		       pemesanan.nama='$nama',
		       pemesanan.tgl_selesai='$tgl_kirim',
		       pemesanan.status='$status'
		       

		    WHERE pemesanan.id_pesan='$id_pesan' AND ukuran.id_ukuran='$id_ukuran'

	";

        
        if(mysqli_query($db, $sql)){
			echo "<script>alert('Mengubah data berhasil');</script>";
			echo "<meta http-equiv='refresh' content='1 url=?p=konfirmasi/konfirmasi_pemesanan.php'>";
			// echo "<a href='?p=pemesanan/order.php'>Kembali Ke Halaman Depan</a>";
    } else {
        // jika gagal tampil ini
        echo "Gagal Melakukan Perubahan: " . $db->error;
    }
}
?>

