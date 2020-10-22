
<?php
include '../koneksi.php';
    $id_pesan = $_GET['id_pesan'];
    $tampil = mysqli_query($db, "SELECT * FROM user JOIN pemesanan ON pemesanan.id_user=user.id_user JOIN produk ON produk.id_produk=pemesanan.id_produk JOIN bahan ON bahan.id_bahan=pemesanan.id_bahan WHERE pemesanan.id_pesan='$id_pesan'"); 
    $no = 1;
    while ($ambil = mysqli_fetch_array($tampil)) {
?>

    <div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h2 align="center">Lihat Pemesanan</h2>
                            <div class="form-group">
                <label for="tgl_kirim">Tanggal Pesan</label>
                    <input id="tgl_kirim" type="text" readonly="" class="form-control" name="produk" value="<?php echo $ambil['tgl_kirim']; ?>">
                </div>

            <div class="form-group">
                <label for="nama" >Nama Pemesan</label>
                     <input readonly="" id="nama" type="text" class="form-control" name="nama" value="<?php echo $ambil['nama']; ?>">
                </div>
            
            <div class="form-group ">
                <label for="alamat" >Alamat Kirim</label>
                    <input id="alamat" class="form-control" readonly="" type="text" value="<?php echo $ambil['alamat']; ?>">
                </div>
            
                <div class="form-group ">
                <label for="kota" >Kota</label>
                    <input id="kota" class="form-control" readonly="" type="text" value="<?php echo $ambil['kota']; ?>">
                </div>

                    <div class="form-group ">
                <label for="provinsi" >Provinsi</label>
                    <input id="provinsi" class="form-control" readonly="" type="text" value="<?php echo $ambil['provinsi']; ?>">
                </div>

            <div class="form-group">
                <label for="email" >Email</label>
                    <input id="email" class="form-control" readonly="" type="email" value="<?php echo $ambil['email']; ?>" >
                </div>
            
            <div class="form-group">
                <label for="telp" >No Hp</label>
                    <input id="telp" type="text" readonly="" class="form-control" name="telp" value="<?php echo $ambil['telp']; ?>">
                </div>

                <div class="form-group ">
                <label for="kodepos" >Kode Pos</label>
                    <input id="kodepos" class="form-control" readonly="" type="text" value="<?php echo $ambil['kodepos']; ?>">
                </div>


                <div class="form-group">
                <label for="produk">Produk</label>
                    <input id="produk" type="text" readonly="" class="form-control" name="produk" value="<?php echo $ambil['nama_produk']; ?>">
                </div>
            
            <div class="form-group">
                <label for="bahan">Bahan</label>
                    <input id="bahan" type="text" readonly="" class="form-control" name="bahan" value="<?php echo $ambil['nama_bahan']; ?>">
                </div>
            
            <div class="form-group">
                <label for="gambar">Gambar</label>
                    <img src="../../gambar/<?php echo $ambil['gambar']; ?>" width="200">
                </div>
            <div class="form-group">
                <label for="ket" >Keterangan</label>
                    <input id="ket" type="text" readonly="" class="form-control" name="ket" value="<?php echo $ambil['ket']; ?>">
                </div>
            </div>  
    </div>
    <?php } ?>
</div>

<br/>

<div class="col-lg-6 col-ml-12">
<div class="row">
<div class="col-12 mt-5">
<div class="card">
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered first">
            <thead class="bg-light">
              <tr class="border-0">
                <th class="border-0">Ukuran S</th>
                <th class="border-0">Ukuran M</th>
                <th class="border-0">Ukuran L</th>
                <th class="border-0">Ukuran XL</th>
                <th class="border-0">Ukuran XXL</th>
              </tr>
            </thead>                  
            <tbody>
            <?php
              include '../koneksi.php';
              $tampil = mysqli_query($db, "SELECT * FROM user JOIN pemesanan ON pemesanan.id_user=user.id_user JOIN ukuran ON pemesanan.id_ukuran=ukuran.id_ukuran where pemesanan.id_pesan='$id_pesan'");
              while ($ambil = mysqli_fetch_array($tampil)) {
                $id_pesan = $ambil['id_pesan'];
                $small = $ambil['small'];
                $medium = $ambil['medium'];
                $large = $ambil['large'];
                $exlarge = $ambil['exlarge'];
                $exexlarge = $ambil['exexlarge'];
              ?>
              <tr>
                <td><?php echo $small; ?></td>
                <td><?php echo $medium; ?> </td>
                <td><?php echo $large; ?> </td>
                <td><?php echo $exlarge; ?> </td>
                <td><?php echo $exexlarge; ?> </td>
              </tr> 
            <?php } ?>
            </tbody>  
          </table>     
      </div>
  </div>
</div>
</div>
</div>
</div>

