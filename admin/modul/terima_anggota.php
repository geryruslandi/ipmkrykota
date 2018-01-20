<?php 
include('../include/koneksi.php');
$id_anggota = $_GET['id'];
$query_terima = mysql_query("UPDATE anggota SET status='Accept' WHERE id_anggota = $id_anggota;");
if($query_terima){
	echo "<script>alert('1 Anggota telah ditambahkan');</script>";
} else{
	echo "<script>alert('1 Anggota gagal');</script>";
}
	echo "<meta http-equiv='refresh' content='0;url=../manajemen.php?keanggotaan=pending'>";
?>