<div class="col-12 mt-5">
<div class="card">
<div class="card-body">

<form action="index.php?p=pemesanan/proses_tambah.php " method="post" enctype="multipart/form-data">
<h2 align="center">Tambah Pemesanan</h2>
    <table id="dataTable3" class="table">
        <tr>
            <td>Nama Pelanggan</td>
            <td>
                <input type="text" class="form-control" name="nama_pelanggan" required>
            </td>
        </tr> 
        <tr>
            <td>Alamat</td>
            <td>
                <input type="text" class="form-control" name="alamat" required>
            </td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>
                <input type="text" class="form-control" name="kota" required>
            </td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>
                <input type="text" class="form-control" name="provinsi" required>
            </td>
        </tr>
        <tr>
            <td>No HP</td>
            <td>
                <input type="text" class="form-control" name="telp" required>
            </td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td>
                <input type="text" class="form-control" name="kodepos" required>
            </td>
        </tr>
        <tr>
            <td>Tanggal Kirim</td>
            <td>
                <input type="datetime-local" class="form-control" name="tgl_kirim" required>
            </td>
        </tr> 
        <tr>
            <td>Gambar Desain</td>
            <td>
                <input type="file" class="form-control" name="gambar" required>
            </td>
        </tr>
        <tr>
            <td>Ukuran S</td>
            <td>
                <input type="text" class="form-control" name="small" required>
            </td>
        </tr>
        <tr>
            <td>Ukuran M</td>
            <td>
                <input type="text" class="form-control" name="medium" required>
            </td>
        </tr>
        <tr>
            <td>Ukuran L</td>
            <td>
                <input type="text" class="form-control" name="large" required>
            </td>
        </tr>
        <tr>
            <td>Ukuran XL</td>
            <td>
                <input type="text" class="form-control" name="exlarge" required>
            </td>
        </tr>
        <tr>
            <td>Ukuran XXL</td>
            <td>
                <input type="text" class="form-control" name="exexlarge" required>
            </td>
        </tr>
        <tr>
            <td></td> 
            <td>
                <center><input type="submit" name="upload" value="Tambah" class="btn btn-info btn-xs"> 
                    </center>
            </td>
        </tr>    
    </table>
</form>
</div>
</div>
</div>