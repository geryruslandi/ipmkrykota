<?php 
include("../include/koneksi.php");
$judul 	= $_POST['judul'];
$id_category = $_POST['id_category'];
$lokasi	= $_POST['lokasi'];
$isi 	= $_POST['isi'];

$query_new_anggota = mysql_query("INSERT INTO `ipmkr`.`artikel` (`id`, `id_category`, `judul`, `tgl_post`, `lokasi`, `isi`) VALUES (NULL, '$id_category', '$judul', curdate(), '$lokasi', '$isi')");


if($query_new_anggota){
	echo "<script>alert('Agenda berhasil disimpan');</script>";
}else{
	echo "<script>alert('Agenda gagal disimpan');</script>";
}
echo "<meta http-equiv='refresh' content='0;url=../manajemen.php?artikel'>";
?>