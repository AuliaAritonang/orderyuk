 <?php
    include '../koneksi.php';
    $id_bahan = $_GET['id'];
    $hapus= "DELETE FROM bahan WHERE id_bahan='$id_bahan'";
    mysqli_query($db, $hapus);

    echo "<script>window.location.href='?p=dataproduk/data_produk.php';</script>";
?>

