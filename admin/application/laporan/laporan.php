<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
    <h2>Laporan</h2>
    <br>
<table id="dataTable3" class="table">
    <thead class="bg-light">
        <tr class="border-0">
            <th class="card-body">No</th>
            <th class="card-body">IdPemesanan</th>
            <th class="card-body">Nama</th>
            <th class="card-body">Tanggal Pesan</th>
            <th class="card-body">Download Laporan</th>
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
            <td><?php echo $id_pesan; ?></td>
            <td><?php echo $ambil['nama']; ?> </td>
            <td><?php echo $ambil['tgl_kirim']; ?></td>
            <td>
                <a class="btn btn-info btn-xs" onclick="window.location='laporan/print_laporan.php?id_pesan=<?php echo $id_pesan;?>'"><i class="fa fa-md fa-print"></i>
                </a>
            </td>
        </tr>
        <?php 
        $no++;
    } ?>
    
    </tbody>
</table>