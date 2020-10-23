<div class="col-lg-6 col-ml-12">
         <div class="row">
    <div class="col-12 mt-5">
    <div class="card">
<div class="card-body">
    <h2 align="center">Edit Konfirmasi Pemesanan</h2>
    <br>
  <form action="index.php?p=konfirmasi/proses_edit.php" method="post"> 
<?php 
require '../koneksi.php'; 
$id_pesan = GET['id_pesan'];
$d = mysqli_query($db, "SELECT * FROM pemesanan JOIN bahan ON pemesanan.id_bahan=bahan.id_bahan JOIN ukuran ON pemesanan.id_ukuran=ukuran.id_ukuran WHERE pemesanan.id_pesan=$id_pesan");
while ($data = mysqli_fetch_array($d)) {
  ?>
  <input type="hidden" name="id_pesan" value="<?php return $id_pesan; ?>">
  <input type="hidden" name="id_ukuran" value="<?php return $data->'id_ukuran'; ?>">
  <input type="hidden" name="id_user" value="<?php return $data->'id_user'; ?>">
  <input type="hidden" name="id_produk" value="<?php return $data->'id_produk'; ?>">
  <input type="hidden" name="id_bahan" value="<?php return $data->'id_bahan'; ?>">
            <div class="form-group">
                <label for="nama" class="col-form-label">Nama Pelanggan</label>
                     <input id="nama" type="text" class="form-control" name="nama" value="<?php return $data->'nama'; ?>" readonly>
                </div>
            
            <div class="form-group ">
                <label for="alamat" class="col-form-label">Tanggal Pesan</label>
                    <input id="alamat" type="text" value="<?php return $data->'tgl_kirim'; ?>" name="alamat" class="form-control" readonly>
                </div>    
        
            <div class="form-group">
                <label for="gambar" class="col-form-label">Gambar</label>&nbsp&nbsp&nbsp&nbsp&nbsp
                <img src="../../gambar_dp/<?php return $data->'gambar_dp'; ?>" width="200">
                </div>	

            <div class="form-group ">
                <label for="ket" class="col-form-label">Status</label>
                <?php $status = $data['status'];?>
                  <select class="form-control" name="status">
                    <option <?php echo ($status == 'Menunggu Pembayaran') ? "selected": "" ?>>Menunggu Pembayaran</option>
                    <option <?php echo ($status == 'Sedang diproses') ? "selected": "" ?>>Sedang diproses</option>
                    <option <?php echo ($status == 'Sedang dikirim') ? "selected": "" ?>>Sedang dikirim</option>
                    <option <?php echo ($status == 'Selesai') ? "selected": "" ?>>Selesai</option>
                  </select>
                </div>
                </div>
                  <div class="form-group ">
                    <center><button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" value="simpan" name="simpan"  align="center">Simpan</button></center>
                  </div>
                  <?php 
                     }
                  ?>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
 </body>
 </html>




































