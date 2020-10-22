<?php 
include '../koneksi.php'; 


if (isset(POST['simpan'])) {
    $id_bahan    = $_GET['id'];
    $nama_produk = $_POST['nama_produk'];
    $nama_bahan  = $_POST['nama_bahan'];
    $harga_bahan = $_POST['harga_bahan'];

    //Query
    $sql = mysqli_query($db, "UPDATE bahan SET `harga_bahan`='$harga_bahan' WHERE `id_bahan`='$id_bahan' ");

    if ($sql) {
        echo "<script>alert('Harga bahan berhasil diubah!');</script>";
        echo "<script>window.location.href='?p=dataproduk/data_produk.php';</script>";
    } else {
        echo "<script>alert('Gagal mengubah harga bahan!');history.go('-1');</script>";
    }
}
?>
