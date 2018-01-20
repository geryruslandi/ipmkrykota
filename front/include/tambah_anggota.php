<?php 
include("koneksi.php");
$nama 			= ucwords(strtolower($_POST['nama']));
$no_kontak 		= ucwords(strtolower($_POST['no_kontak']));
$universitas 	= ucwords(strtolower($_POST['universitas']));
$prodi 			= ucwords(strtolower($_POST['prodi']));
$tahun_masuk 	= ucwords(strtolower($_POST['tahun_masuk']));
$alamat_jogja 	= ucwords(strtolower($_POST['alamat_jogja']));
$alamat_asal 	= ucwords(strtolower($_POST['alamat_asal']));
$query_new_anggota = mysql_query("INSERT INTO anggota values ('','$nama', '$universitas', '$prodi', '$tahun_masuk', '$no_kontak', NOW(), 'Pending','$alamat_jogja','$alamat_asal');");

if($query_new_anggota){
	echo "<script>alert('Data kamu sudah kami simpan.');</script>";
}else{
	echo "<script>alert('Data gagal disimpan');</script>";
}
echo "<meta http-equiv='refresh' content='0;url=../../daftar_keanggotaan.php'>";
?>