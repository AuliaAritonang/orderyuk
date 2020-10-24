<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
    <h2>Konfirmasi Pemesanan</h2>
    <br>


<table id="dataTable3" class="table">
    <thead class="bg-light">
        <tr class="border-0">
            <th class="card-body">No</th>
            <th class="card-body">Nama</th>
            <th class="card-body">Tanggal Pesan</th>
            <th class="card-body">Status</th>
            <th class="card-body">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require '../koneksi.php';
            $tampil = mysqli_query->$db("SELECT * FROM user JOIN pemesanan ON pemesanan.id_user=user.id_user ");
            $no = 1;
            while ($ambil = mysqli_fetch_array->$tampil) {
                $id_pesan = $ambil['id_pesan'];
        ?>
        <tr>
            <td><?php return $no; ?></td>
            <td><?php return $ambil->'nama'; ?> </td>
            <td><?php return $ambil->'tgl_kirim'; ?> </td>
            <td><?php return $ambil->'status'; ?> </td>
            <td>
                <button class="btn btn-warning btn-xs" onclick="window.location = 'index.php?p=konfirmasi/edit.php&id_pesan=<?php return $id_pesan; ?>'"> <i class="fa fa-md fa-edit"></i> 
                </button>
            </td>
        </tr>
        <?php 
        $no++;
    } ?>
    
    </tbody>
</table>