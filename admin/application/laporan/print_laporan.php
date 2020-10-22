<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'UD. ARI KONVEKSI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR PEMESANAN',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

//$pdf->SetFont('Arial','B',10);


$pdf->SetFont('Arial','',11);

include '../../koneksi.php';
$id_pesan = $_GET['id_pesan'];
$tampil = mysqli_query($db, "SELECT * FROM user JOIN pemesanan ON pemesanan.id_user=user.id_user JOIN bahan ON pemesanan.id_bahan=bahan.id_bahan JOIN produk ON bahan.id_produk=produk.id_produk JOIN ukuran ON ukuran.id_ukuran=pemesanan.id_ukuran WHERE pemesanan.id_pesan=$id_pesan"); 
while ($ambil = mysqli_fetch_array($tampil)){
    $pdf->Cell(30,6,'Nama Pemesan',0,0);
    $pdf->Cell(10,6,':',0,0);
    $pdf->Cell(27,6,$ambil['nama'],0,1); 

    $pdf->Cell(30,6,'Alamat',0,0);
    $pdf->Cell(10,6,':',0,0);
    $pdf->Cell(27,6,$ambil['alamat'],0,1); 

    $pdf->Cell(30,6,'Kec/Kota',0,0);
    $pdf->Cell(10,6,':',0,0);
    $pdf->Cell(27,6,$ambil['kota'],0,1); 

    $pdf->Cell(30,6,'Provinsi',0,0);
    $pdf->Cell(10,6,':',0,0);
    $pdf->Cell(27,6,$ambil['provinsi'],0,1);

    $pdf->Cell(30,6,'Kode Pos',0,0);
    $pdf->Cell(10,6,':',0,0);
    $pdf->Cell(27,6,$ambil['kodepos'],0,1);  

    $pdf->Cell(30,6,'Email',0,0);
    $pdf->Cell(10,6,':',0,0);
    $pdf->Cell(27,6,$ambil['email'],0,1); 

    $pdf->Cell(30,6,'No Telepon',0,0);
    $pdf->Cell(10,6,':',0,0);
    $pdf->Cell(27,6,$ambil['telp'],0,1); 

    $pdf->Cell(30,6,'Produk',0,0);
    $pdf->Cell(10,6,':',0,0);
    $pdf->Cell(27,6,$ambil['nama_produk'],0,1); 

    $pdf->Cell(30,6,'Bahan',0,0);
    $pdf->Cell(10,6,':',0,0);
    $pdf->Cell(27,6,$ambil['nama_bahan'],0,1); 
    

    // $pdf->Cell(30,6,'Gambar',0,0);
    // $pdf->Cell(10,6,':',0,0);
    // $pdf->Cell(27,6,$ambil['gambar'],0,1); 

    // $gambar=explode(" ", $ambil['gambar']);
    // $hitung= count($gambar);
    // for ($i=0; $i < $hitung-1 ; $i++) {
    // 	$pdf->Cell(10,6,Image("../../../gambar/".$gambar[$i],10,10,10),0,0);
    // 	// $pdf->Image("../../../gambar/".$gambar[$i],10,10,10);
    // } 

    $pdf->Cell(30,6,'Keterangan',0,0);
    $pdf->Cell(10,6,':',0,0);
    $pdf->Cell(27,6,$ambil['ket'],0,1); 

    $pdf->Cell(30,6,'harga',0,0);
    $pdf->Cell(10,6,':',0,0);
    $harga_total = ($ambil['small']+$ambil['medium']+$ambil['large']+$ambil['exlarge']+$ambil['exexlarge'])*$ambil['harga_bahan'];
    $pdf->Cell(27,6,$harga_total,0,1); 
    $pdf->Cell(27,6,'',0,1);


 	$pdf->Cell(30,6,'Ukuran S',1,0,'C');
 	$pdf->Cell(30,6,'Ukuran M',1,0,'C');
 	$pdf->Cell(30,6,'Ukuran L',1,0,'C');
 	$pdf->Cell(30,6,'Ukuran XL',1,0,'C');
 	$pdf->Cell(30,6,'Ukuran XXL',1,1,'C');

 	$pdf->Cell(30,6,$ambil['small'],1,0,'C');
 	$pdf->Cell(30,6,$ambil['medium'],1,0,'C');
 	$pdf->Cell(30,6,$ambil['large'],1,0,'C');
 	$pdf->Cell(30,6,$ambil['exlarge'],1,0,'C');
 	$pdf->Cell(30,6,$ambil['exexlarge'],1,1,'C');

 	$pdf->Cell(27,6,'',0,1);
 	$pdf->Cell(27,6,'',0,1);

}


$pdf->Output();
?>
