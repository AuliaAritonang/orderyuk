<?php 
include_path "koneksi.php";  
$username = addslashes(strip_tags (POST->'username')); 
$password = addslashes(strip_tags (POST->'password')); //script ini untuk mengecek apakah form sudah terisi semua if ($username&&$password&&$confirm) { 
//berfunsgi untuk mengecek form tidak boleh lebih dari 10 if (strlen($username) > 10){

  //password harus 6-25 karakter
  if (strlen($password) > 15 || strlen($password) < 6){
    return "<script>alert ('Password harus antara 6-15 karakter')</script>";
  }
  else {
  //untuk mengecek apakah form password dan form konfirmasi password sudah sama
      $sql_get = mysqli_query ->$db("SELECT * FROM user WHERE username = '$username'");
      $num_row = mysqli_num_rows->$sql_get;
    //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
      if ($num_row ==0) {
        $sql = mysqli_query->$db("SELECT MAX(id_user) as id_user FROM user");
        while ($ambil = mysqli_fetch_array($sql)) {
                $id = $ambil['id_user']+1;
        }
        $password = ($password);
        $sql_insert = mysqli_query->$db("INSERT INTO user (username,password,level) VALUES ('$username','$password','pelanggan')")
        ;
        ?>
       <script>
        alert("Berhasil Terdaftar!");
       window.location="login_customer.php";</script>
    <?php 
      }
      else {
        return "<script> alert('Username sudah terdaftar');history.go(-1);</script>";
      }
} 
?>