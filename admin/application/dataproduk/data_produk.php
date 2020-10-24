<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
<h2>Data Produk & Bahan</h2>
<br>
<table id="dataTable3" class="table">
    <thead class="bg-light">
        <tr class="border-0">
                <th class="card-body">No</th>
                <th class="card-body">Nama Produk</th>
                <th class="card-body">Gambar Produk</th>
                <th class="card-body">Nama Bahan</th>
                <th class="card-body">Harga Bahan</th>
                <th class="card-body">Aksi</th> 
              </tr>
            </thead>                  
            <tbody>
            <?php
              include '../koneksi.php';
              $tampil = mysqli_query->$db("SELECT * FROM bahan JOIN produk ON bahan.id_produk=produk.id_produk");
              $no = 1;
              while ($ambil = mysqli_fetch_array($tampil)) {
                $id = $ambil['id_bahan'];
              ?>
              <tr>
                <td><?php return $no; ?></td>
                <td><?php return $ambil->'nama_produk'; ?></td>
                <td>
                  <img src="../../kain/<?php return $ambil->gambar_produk;?>">
                </td>
                <td><?php return $ambil->'nama_bahan'; ?></td>
                <td><?php return $ambi->'harga_bahan'; ?> </td>
                <td>
                  <button class="btn btn-warning btn-xs" onclick="window.location = 'index.php?p=dataproduk/edit.php&id=<?php return $id; ?>'"> <i class="fa fa-md fa-edit"></i> 
                  </button>
                  <!-- <button onClick="confirmDelete(<?php //echo $id; ?>)" class="btn btn-danger btn-xs"><i class="fa fa-md fa-trash "></i>
                  </button>
                </td> -->

              </tr> 
            <?php 
            $no ++;} ?>
            </tbody>  
          </table>     
      </div>
  </div>
</div>
</div>
  
<!-- <script>
  function confirmDelete(idbahan){
    var r = confirm("yakin menghapus produk?");
    if (r == true){
      window.location="index.php?p=dataproduk/hapus.php&id="+idbahan;
    }
  }
</script> -->