<?php 
include('../include/koneksi.php');
$id_anggota = $_GET['id'];
$query_delete = mysql_query("DELETE FROM anggota WHERE id_anggota = $id_anggota;");
if($query_delete){
	echo "<script>alert('Data telah dihapus');</script>";
} else{
	echo "<script>alert('Data gagal dihapus');</script>";
}
if(isset($_GET['pending'])){
	echo "<meta http-equiv='refresh' content='0;url=../manajemen.php?keanggotaan=pending'>";
}else{
	echo "<meta http-equiv='refresh' content='0;url=../manajemen.php?keanggotaan'>";
}

?>