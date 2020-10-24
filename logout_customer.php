<?php 
// mengaktifkan session php
session_register();

// menghapus semua session
session_destroy();

// mengalihkan halaman ke halaman login
header("location:index.php");
?>