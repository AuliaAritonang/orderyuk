<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
</head>
<body>
 
    <!-- <h1>Login</h1> -->

    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>
 
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan Registrasi</p>
 
        <form action="kirim_registrasi.php" method="post">

            <label>Username</label>
            <input type="text" name="username" class="form_login" required="required">

            <label>Password</label>
            <input type="password" name="password" class="form_login" required="required">

            <input type="submit" class="tombol_login" value="REGISTRASI">
 
            <br/>
            <br/>
            <center>
                <a class="link" href="index.php">kembali</a>
            </center>

        </form>
        
    </div>
 
 
</body>
</html>