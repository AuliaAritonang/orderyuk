<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
<h2>Data Customer</h2>
<br>
<table id="dataTable3" class="table">
    <thead class="bg-light">
        <tr class="border-0">
                <th class="card-body">ID Pelanggan</th>
                <th class="card-body">Nama Pelanggan</th>
                <th class="card-body">Password</th>
                <th class="card-body">Aksi</th> 
              </tr>
            </thead>                  
            <tbody>
            <?php
              include '../koneksi.php';
              $tampil = mysqli_query($db, "SELECT * FROM user");
              while ($ambil = mysqli_fetch_array($tampil)) {
                $id = $ambil['id_user'];
              ?>
              <tr>
                <td><?php echo $ambil['id_user']; ?></td>
                <td><?php echo $ambil['username']; ?></td>
                <!-- <td>
                  <img src="../../kain/<?php //echo $ambil['gambar_produk'];?>">
                </td> -->
                <td><?php echo $ambil['password']; ?></td>
                <!-- <td><?php //echo $ambil['harga_bahan']; ?> </td> -->
                <td>
                  <button class="btn btn-warning btn-xs" onclick="window.location = 'index.php?p=daftar/rubahpass.php&id=<?php echo $id; ?>'"> <i class="fa fa-md fa-edit"></i> 
                  </button>
                  <!-- <button onClick="confirmDelete(<?php //echo $id; ?>)" class="btn btn-danger btn-xs"><i class="fa fa-md fa-trash "></i>
                  </button>
                </td> -->

              </tr> 
            <?php 
            } ?>
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