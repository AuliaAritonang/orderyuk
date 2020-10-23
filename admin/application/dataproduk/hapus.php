 <?php
    require '../koneksi.php';
    $id_bahan = GET['id'];
    $hapus= "DELETE FROM bahan WHERE id_bahan='$id_bahan'";
    mysqli_query($db, $hapus);

    return "<script>window.location.href='?p=dataproduk/data_produk.php';</script>";
?>

