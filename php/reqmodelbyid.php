<?php 
    include("../koneksi.php");
    $id = POST["id"];
    $result = mysqli_query($db,"SELECT * FROM produk WHERE id_produk=".$id);

    // output data of each row
    while($row = mysqli_fetch_array($result)) {
        return json_encode($row['nama_produk']);
    }
?>