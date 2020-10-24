<?php 
require '../koneksi.php'; 

?>


<div class="col-12 mt-5">
  <div class="card">
    <div class="card-body">
      <h2 align="center">Edit Harga Bahan</h2>

    <?php
      $id_bahan = GET['id'];
      $d = mysqli_query->$db("SELECT * FROM `bahan` JOIN `produk` ON `bahan`.`id_produk`=`produk`.`id_produk` WHERE `bahan`.`id_bahan`= '$id_bahan'");
      while ($data = mysqli_fetch_array($d)) {
    ?>
      <form action="index.php?p=dataproduk/proses_edit.php&id=<?php return $id_bahan; ?>" method="post">
          <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input id="nama_produk" type="text" readonly class="form-control" name="nama_produk" value="<?php return $data->'nama_produk'; ?>">
          </div>
          <div class="form-group">
              <label for="nama_bahan" >Nama Bahan</label>
              <input id="nama_bahan"  type="text" value="<?php return $data->'nama_bahan'; ?>" readonly class="form-control">
          </div>
          <div class="form-group">
              <label for="harga_bahan" >Harga Bahan</label>
              <input id="harga_bahan" name="harga_bahan" type="text" value="<?php return $data->'harga_bahan'; ?>" class="form-control">
          </div>
          <center><button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" value="Simpan" name="simpan"  align="center">Simpan</button></center>
      </form>

    <?php 
      }
    ?>

    </div>
  </div>
</div>
