<?php 
include("../include/koneksi.php");
$id = $_GET['id'];
$query_to_delete 	= mysql_query("DELETE FROM pesan where id_pesan = $id;");
if($query_to_delete){
	echo "<script>alert('Pesan berhasil dihapus.');</script>";
}else{
	echo "<script>alert('Maaf pesan gagal dihapus.');</script>";	
}
echo "<meta http-equiv='refresh' content='0;url=../manajemen.php?pesan'>";

?>