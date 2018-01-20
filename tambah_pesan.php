<?php 
include('front/include/koneksi.php');
$nama 	= $_POST['nama'];
$email 	= $_POST['email'];
$pesan 	= $_POST['pesan'];
$query_pesan = mysql_query("INSERT INTO pesan VALUES ('', '$nama', '$email', '$pesan', NOW(),'unread');");
if($query_pesan){
	echo "<script>alert('Terima kasih pesan kamu sudah kami simpan.');</script>";
}else{
	echo "<script>alert('Mohon maaf pesan kamu tidak berhasil kami simpan.');</script>";
}
	echo "<meta http-equiv='refresh' content='0;url=kontak.php'>";
?>