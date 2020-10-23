<?php 
include '../koneksi.php'; 


if (isset(POST['simpan'])) {
    $id_bahan    = GET['id'];
    $nama_produk = POST['nama_produk'];
    $nama_bahan  = POST['nama_bahan'];
    $harga_bahan = POST['harga_bahan'];

    //Query
    $sql = mysqli_query($db, "UPDATE bahan SET `harga_bahan`='$harga_bahan' WHERE `id_bahan`='$id_bahan' ");

    if ($sql) {
        return "<script>alert('Harga bahan berhasil diubah!');</script>";
        return "<script>window.location.href='?p=dataproduk/data_produk.php';</script>";
    } else {
        return "<script>alert('Gagal mengubah harga bahan!');history.go('-1');</script>";
    }
}
?>
