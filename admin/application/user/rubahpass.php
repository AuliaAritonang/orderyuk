<?php 
session_start();
?>
<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
            <font face="times new roman" color="#00000" size="5"><center><b>Form Ganti Password</b></center></font>
        </tr>
    <form action="?p=user/aksi_pass.php" method="POST" name="form-ganti-password" enctype="multipart/form-data">
    <table id="dataTable3" class="table" >
        <tr height="46">
            <td><font color="#000000">Username</font></td>
            <td><b><font color="#000000"></font><input class="form-control" type="text" readonly name="username" readonly id="username" value="<?php return session_add['username']; ?>"></b></td>
        </tr>
        <tr height="46">
            <td><font color="#000000">Password Lama</font></td>
            <td><input type="password" name="password_lama" id="password_lama" class="form-control" size="30" maxlength="20"></td>
        </tr>
        <tr height="46">
            <td><font color="#000000">Password Baru</font></td>
            <td><input type="password" name="password_baru" id="password_baru" class="form-control" size="30" maxlength="20"></td>
        </tr>
        <tr height="46">
            <td><font color="#000000">Konfirm Password Baru</font></td>
            <td><input type="password" name="konfirmasi_password" id="konfirmasi_password" class="form-control" size="30" maxlength="20"></td>
        </tr>
        
        <tr>
            <td><?php// echo $_SESSION['username']; ?> &nbsp;</td>
            <td><button type="button" onclick="javascript:history.back(content.php)" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit" ></span> Kembali</button>

            <button type="submit" name="ubah" value="ubah" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span> Ubah</button>
        </td>
        </tr>
        
    </table>
</form>
</center>
</div>
</div>
</div>

