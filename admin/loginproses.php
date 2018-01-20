<?php 
include('include/koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT username, nama FROM users where username = '$username' and password = '$password'";
$num_rows = mysql_num_rows(mysql_query($query));
if($num_rows == 1){
	$data = mysql_fetch_assoc(mysql_query($query));
	session_start();
	$_SESSION["IPMKR_LOGIN"] = $data;
	echo "<meta http-equiv='refresh' content='0;url=manajemen.php'>";
} else{
	echo "
	<script>alert('Woops Username & Password kamu salah');</script>
	<meta http-equiv='refresh' content='0;url=index.php'>
	";
}
 ?>