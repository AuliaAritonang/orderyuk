<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
    <h2>Data Pemesanan</h2>
    <br>
<!-- 
        <button class="btn btn-info btn-xs" onclick="window.location = 'index.php?p=pemesanan/tambah.php'"> Tambah Pemesanan
                </button>
                <br> <br> -->

<table id="dataTable3" class="table">
    <thead class="bg-light">
        <tr class="border-0">
            <th class="card-body">No</th>
            <th class="card-body">Nama</th>
            <th class="card-body">No HP</th>
            <th class="card-body">Tanggal Kirim</th>
            <th class="card-body">Gambar</th>
            <th class="card-body">Keterangan</th>
            <th class="card-body">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include '../koneksi.php';
            $tampil = mysqli_query($db, "SELECT * FROM user JOIN pemesanan ON pemesanan.id_user=user.id_user ");
            $no = 1;
            while ($ambil = mysqli_fetch_array($tampil)) {
                $id_pesan = $ambil['id_pesan'];
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $ambil['nama']; ?> </td>
            <td><?php echo substr ($ambil['telp'],0,5). '...'; ?></td>
            <td><?php echo $ambil['tgl_kirim']; ?></td>
            <!-- <td><img src="../../gambar/<?php echo $ambil[gambar]; ?>" width="200"></td> -->
            <td>
                <img src="../../gambar/<?php echo $ambil['gambar']; ?>" width="100">
            </td>
            <td><?php echo substr($ambil['ket'],0, 5). '...'; ?></td>
            <td>
                <a class="btn btn-info btn-xs" onclick="window.location='index.php?p=pemesanan/lihat.php&id_pesan=<?php echo $id_pesan;?>'">  <i class="fa fa-md fa-eye"></i>
                </a>
                <button class="btn btn-warning btn-xs" onclick="window.location = 'index.php?p=pemesanan/edit.php&id_pesan=<?php echo $id_pesan; ?>'"> <i class="fa fa-md fa-edit"></i> 
                </button>
                <a href = 'index.php?p=pemesanan/hapus.php&id_pesan=<?php echo $id_pesan;?>' class="btn btn-danger btn-xs" onclick = "return confirm ('Yakin ingin mengapus pemesanan ?')"><i class="fa fa-md fa-trash "></i></a>
                </button>
            </td>
        </tr>
        <?php 
        $no++;
    } ?>
    
    </tbody>
</table>