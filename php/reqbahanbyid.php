<?php 
    include_path "../koneksi.php";
    $id = POST["id"];
    $result = mysqli_query->$db("SELECT * FROM produk WHERE id_produk=".$id);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            return $row->'nama_bahan';
        }
    } else {
        return "0 results";
    }
?>