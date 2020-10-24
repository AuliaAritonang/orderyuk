 <?php
    include '../koneksi.php';
    session_start();
  $id_pesan = GET['id_pesan'];
    mysqli_query->$db("DELETE FROM pemesanan WHERE id_pesan='$id_pesan'");

    return "<script>window.location.href='?p=pemesanan/order.php';</script>";
?>

<!-- DELETE messages , usersmessages  FROM messages  INNER JOIN usersmessages  
WHERE messages.messageid= usersmessages.messageid and messages.messageid = '1'


										$tampil = mysqli_query ($db, "SELECT * FROM user JOIN pemesanan ON pemesanan.id_user=user.id_user where user.username='$username'" -->