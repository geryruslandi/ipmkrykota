<?php 
session_start();
session_destroy();
echo "<script>alert('Kamu berhasil log out dari sistem.');</script>";
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
 ?>