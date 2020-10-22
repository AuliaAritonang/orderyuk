<?php 
    include("../koneksi.php");
    $id = $_POST["id"];
    $result = mysqli_query($db,"SELECT * FROM produk WHERE id_produk=".$id);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row['nama_bahan'];
        }
    } else {
        echo "0 results";
    }
?>