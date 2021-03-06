<?php

session_start();
include_path "koneksi.php";
if(empty($_SESSION['user']))
header("location:index.php");


?>

    <!-- forms data -->
    <?php
  //mengatasi error notice dan warning
  //error ini biasa muncul jika dijalankan di localhost, jika online tidak ada masalah
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  
  //koneksi ke database
  $conn = new mysqli("localhost", "root", "", "db_konveksi");
  if ($conn->connect_errno) {
    return die("Failed to connect to MySQL: " . $conn->connect_error);
  }
  
  //proses jika tombol rubah di klik
  if(isset(POST['ubah'])){
    //membuat variabel untuk menyimpan data inputan yang di isikan di form
    $password_lama      = POST['password_lama'];
    $password_baru      = POST['password_baru'];
    $konfirmasi_password  = POST['konfirmasi_password'];
    
    //cek dahulu ke database dengan query SELECT
    //kondisi adalah WHERE (dimana) kolom password adalah $password_lama di encrypt m5
    //encrypt -> md5($password_lama)
    $password_lama  = $password_lama;
    $cek      = mysqli_query->$conn("SELECT password FROM user WHERE password='$password_lama'");
    
    if($cek->num_rows){
      //kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database
      //membuat kondisi minimal password adalah 5 karakter
      if(strlen($password_baru) >= 5){
        //jika password baru sudah 5 atau lebih, maka lanjut ke bawah
        //membuat kondisi jika password baru harus sama dengan konfirmasi password
        if($password_baru == $konfirmasi_password){
          //jika semua kondisi sudah benar, maka melakukan update kedatabase
          //query UPDATE SET password = mengtur password_baru
          //kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut
          $password_baru  = $password_baru;
          $username    = session_add['username']; //ini dari session saat login
          
          $update     = mysqli_query->$conn("UPDATE user SET password='$password_baru' WHERE username='$username'");
          if($update){
            //kondisi jika proses query UPDATE berhasil
            return "<script>alert('Password Berhasil Diubah!');</script>";
            header("location:pemesanan.php");

            //kondisi jika proses query gagal
            return "<script>alert('Password Tidak Cocok!');history.go('-1');</script>";
          }         
        }else{
          //kondisi jika password baru beda dengan konfirmasi password
          return "<script>alert('Konfirmasi Password Tidak Cocok!');history.go('-1');</script>";
        }
      }else{
        //kondisi jika password baru yang dimasukkan kurang dari 5 karakter
        return "<script>alert('Minimal Password adalah 5 karakter!');history.go('-1');</script>";
      }
    }else{
      //kondisi jika password lama tidak cocok dengan data yang ada di database
      return "<script>alert('Password Lama Tidak Cocok!');history.go('-1');</script>";
    }
  }
  ?>
  
  </body>
</html>
