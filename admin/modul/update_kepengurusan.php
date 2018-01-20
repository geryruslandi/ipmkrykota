<?php
include("../include/koneksi.php");
if(isset($_POST['btn_periode'])){
	$periode = $_POST['periode'];
	$query_periode = mysql_query("UPDATE kepengurusan set periode = '$periode';");
	if($query_periode){
		echo "<script>alert('Periode telah diperbarui.');</script>";
	} else{
		echo "<script>alert('Periode gagal diperbarui.');</script>";
	}
}
else if(isset($_POST['kepengurusan_inti'])){
	$nama_inti 		= $_POST['nama_inti'];
	$jabatan_inti 	= $_POST['jabatan_inti'];
	foreach ($nama_inti as $keyinti => $value) {
		$query_inti = mysql_query("UPDATE kepengurusan set nama = '$nama_inti[$keyinti]' WHERE jabatan = '$jabatan_inti[$keyinti]';");
	}
	echo "<script>alert('Kepengurusan inti berhasil diperbarui.');</script>";
} else if(isset($_POST['dep_sdm'])){
	$nama_sdm 		= $_POST['nama_sdm'];
	$jabatan_sdm 	= $_POST['jabatan_sdm'];
	$id 			= $_POST['id_sdm'];
	foreach ($nama_sdm as $keysdm => $value) {
		$query_sdm = mysql_query("UPDATE kepengurusan set nama = '$nama_sdm[$keysdm]' WHERE jabatan = '$jabatan_sdm[$keysdm]' and id = '$id[$keysdm]';");
	}
	echo "<script>alert('Kepengurusan SDM berhasil diperbarui.');</script>";
} else if(isset($_POST['dep_infokom'])){
	$nama_infokom 		= $_POST['nama_infokom'];
	$jabatan_infokom	= $_POST['jabatan_infokom'];
	$id 				= $_POST['id_infokom'];
	foreach ($nama_infokom as $keyinfokom => $value) {
		$query_infokom = mysql_query("UPDATE kepengurusan set nama = '$nama_infokom[$keyinfokom]' WHERE jabatan = '$jabatan_infokom[$keyinfokom]' and id = '$id[$keyinfokom]';");
	}
	echo "<script>alert('Kepengurusan Infokom berhasil diperbarui.');</script>";
} else if(isset($_POST['dep_kwu'])){
	$nama_kwu 			= $_POST['nama_kwu'];
	$jabatan_kwu		= $_POST['jabatan_kwu'];
	$id 				= $_POST['id_kwu'];
	foreach ($nama_kwu as $keykwu => $value) {
		$query_kwu = mysql_query("UPDATE kepengurusan set nama = '$nama_kwu[$keykwu]' WHERE jabatan = '$jabatan_kwu[$keykwu]' and id = '$id[$keykwu]';");
	}
	echo "<script>alert('Kepengurusan Kewirausahaan berhasil diperbarui.');</script>";
} else if(isset($_POST['dep_agama'])){
	$nama_agama 		= $_POST['nama_agama'];
	$jabatan_agama		= $_POST['jabatan_agama'];
	$id 				= $_POST['id_agama'];
	foreach ($nama_agama as $keyagama => $value) {
		$query_agama = mysql_query("UPDATE kepengurusan set nama = '$nama_agama[$keyagama]' WHERE jabatan = '$jabatan_agama[$keyagama]' and id = '$id[$keyagama]';");
	}
	echo "<script>alert('Kepengurusan Agama berhasil diperbarui.');</script>";
} else if(isset($_POST['dep_olahraga'])){
	$nama_olahraga 		= $_POST['nama_olahraga'];
	$jabatan_olahraga	= $_POST['jabatan_olahraga'];
	$id 				= $_POST['id_olahraga'];
	foreach ($nama_olahraga as $keyolahraga => $value) {
		$query_olahraga = mysql_query("UPDATE kepengurusan set nama = '$nama_olahraga[$keyolahraga]' WHERE jabatan = '$jabatan_olahraga[$keyolahraga]' and id = '$id[$keyolahraga]';");
	}
	echo "<script>alert('Kepengurusan Olahraga berhasil diperbarui.');</script>";
} else if(isset($_POST['dep_seni'])){
	$nama_seni 		= $_POST['nama_seni'];
	$jabatan_seni		= $_POST['jabatan_seni'];
	$id 				= $_POST['id_seni'];
	foreach ($nama_seni as $keyseni => $value) {
		$query_seni = mysql_query("UPDATE kepengurusan set nama = '$nama_seni[$keyseni]' WHERE jabatan = '$jabatan_seni[$keyseni]' and id = '$id[$keyseni]';");
	}
	echo "<script>alert('Kepengurusan Seni dan Budaya berhasil diperbarui.');</script>";
} else if(isset($_POST['dep_asrama'])){
	$nama_asrama 		= $_POST['nama_asrama'];
	$jabatan_asrama		= $_POST['jabatan_asrama'];
	$id 				= $_POST['id_asrama'];
	// print_r($nama_asrama);
	// die;
	foreach ($nama_asrama as $keyasrama => $value) {
		$query_asrama = mysql_query("UPDATE kepengurusan set nama = '$nama_asrama[$keyasrama]' WHERE jabatan = '$jabatan_asrama[$keyasrama]' and id = '$id[$keyasrama]';");
	}
	echo "<script>alert('Kepengurusan Asrama berhasil diperbarui.');</script>";
}
	echo "<meta http-equiv='refresh' content='0;url=../manajemen.php?kepengurusan'>";
?>