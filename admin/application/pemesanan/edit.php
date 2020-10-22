<div class="col-lg-6 col-ml-12">
         <div class="row">
    <div class="col-12 mt-5">
    <div class="card">
<div class="card-body">
    <h2 align="center">Edit Pemesanan</h2>
    <br>
  <form action="index.php?p=pemesanan/proses_edit.php" method="post"> 
<?php 
include '../koneksi.php'; 
$id_pesan = GET['id_pesan'];
$d = mysqli_query($db, "SELECT * FROM pemesanan JOIN produk ON pemesanan.id_produk=produk.id_produk JOIN bahan ON pemesanan.id_bahan=bahan.id_bahan JOIN ukuran ON pemesanan.id_ukuran=ukuran.id_ukuran WHERE pemesanan.id_pesan=$id_pesan");
while ($data = mysqli_fetch_array($d)) {
  ?>
  <input type="hidden" name="id_pesan" value="<?php echo id_pesan; ?>">
  <input type="hidden" name="id_ukuran" value="<?php echo data['id_ukuran']; ?>">
  <input type="hidden" name="id_user" value="<?php echo data['id_user']; ?>">
  <input type="hidden" name="id_produk" value="<?php echo data['id_produk']; ?>">
  <input type="hidden" name="id_bahan" value="<?php echo data['id_bahan']; ?>">
  
            <div class="form-group">
                <label for="nama" class="col-form-label">Nama Pelanggan</label>
                     <input id="nama" type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
                </div>
            
            <div class="form-group ">
                <label for="alamat" class="col-form-label">Alamat Kirim</label>
                    <input id="alamat" type="text" value="<?php echo $data['alamat']; ?>" name="alamat" class="form-control">
                </div>

                <div class="form-group ">
                <label for="kota" class="col-form-label">Kota</label>
                    <input id="kota" type="text" value="<?php echo $data['kota']; ?>" name="kota" class="form-control">
                </div>

                <div class="form-group ">
                <label for="provinsi" class="col-form-label">Provinsi</label>
                    <input id="provinsi" type="text" value="<?php echo $data['provinsi']; ?>" name="provinsi" class="form-control">
                </div>

                <div class="form-group ">
                <label for="kodepos" class="col-form-label">Kode Pos</label>
                    <input id="kodepos" type="text" value="<?php echo $data['kodepos']; ?>" name="kodepos" class="form-control">
                </div>
            
            <div class="form-group">
                <label for="email" class="col-form-label">Email</label>
                    <input id="email" type="email" value="<?php echo $data['email']; ?>" name="email" class="form-control">
                </div>
            
            <div class="form-group">
                <label for="telp" class="col-form-label">No Telepon</label>
                    <input id="telp" type="text" class="form-control" name="telp" value="<?php echo $data['telp']; ?>">
                </div>

            <div class="form-group">
                <label for="telp" class="col-form-label">Produk</label>
                    <input id="produk" type="text" class="form-control" name="nama_produk" value="<?php echo $data['nama_produk']; ?>">
                </div>

            <div class="form-group">
                <label for="telp" class="col-form-label">Bahan</label>
                    <input id="bahan" type="text" class="form-control" name="nama_bahan" readonly value="<?php echo $data['nama_bahan']; ?>">
                </div>

            <div class="form-group ">
             <label class="col-form-label">Ukuran S </label>
                  <input type="text" class="form-control" id="small" placeholder="Jumlah Ukuran S" required="required" data-validation-required-message="Please enter your sent order." name="small" value="<?php echo $data['small'] ?>" /> 
                </div>
                  <div class="form-group ">
             <label class="col-form-label">Ukuran M </label>
                  <input type="text" class="form-control" id="medium" placeholder="Jumlah Ukuran M" required="required" data-validation-required-message="Please enter your sent order." name="medium" value="<?php echo $data['medium'] ?>" />  </div>

            <div class="form-group">
              <label class="col-form-label">Ukuran L</label>
                  <input type="text" class="form-control" id="large" placeholder="Jumlah Ukuran L" required="required" data-validation-required-message="Please enter your sent order." name="large" value="<?php echo $data['large'] ?>" />
              </div>
            
            <div class="form-group">
               <label class="col-form-label">Ukuran XL</label>
                  <input type="text" class="form-control" id="exlarge" placeholder="Jumlah Ukuran XL" required="required" data-validation-required-message="Please enter your sent order." name="exlarge" value="<?php echo $data['exlarge'] ?>" /> 
                  </div>
                

                   <div class="form-group">
               <label class="col-form-label">Ukuran XXL</label>
                  <input type="text" class="form-control" id="exexlarge" placeholder="Jumlah Ukuran XXL"required="required" data-validation-required-message="Please enter your sent order." name="exexlarge" value="<?php echo $data['exexlarge'] ?>" />
              </div>
          
        
<!--             <div class="form-group">
                <label for="gambar" class="col-form-label">Gambar</label>
                <?php
                $id_pesan = GET['id_pesan'];
                $d = mysqli_query($db, "UPDATE * FROM user JOIN pemesanan ON pemesanan.id_user=user.id_user JOIN bahan ON pemesanan.id_bahan=bahan.id_bahan JOIN ukuran ON pemesanan.id_ukuran=ukuran.id_ukuran WHERE pemesanan.id_pesan=$id_pesan");
                while ($data = mysqli_fetch_array($d)) {
                    $gambar=explode(" ", $data[gambar]);
                    $hitung= count($gambar);
                    for ($i=0; $i < $hitung-1 ; $i++) {?>
                    <img src="../../gambar/<?php echo $gambar[$i]; ?>" width="200">
                    <?php }
                    ?>
                    <?php }
                    ?>
                </div> -->
            
            <div class="form-group ">
                <label for="ket" class="col-form-label">Keterangan</label>
                    <input id="ket" type="text" class="form-control" name="ket" value="<?php echo $data['ket']; ?>"/  >
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




































