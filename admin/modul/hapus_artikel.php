<?php 
include('../include/koneksi.php');
$id = $_GET['id'];
$query_delete = mysql_query("DELETE FROM `ipmkr`.`artikel` WHERE `artikel`.`id` = $id;");
if($query_delete){
	echo "<script>alert('Agenda telah dihapus');</script>";
} else{
	echo "<script>alert('Agenda gagal dihapus');</script>";
}
	echo "<meta http-equiv='refresh' content='0;url=../manajemen.php?artikel'>";
?>