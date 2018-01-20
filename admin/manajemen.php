<?php 
session_start();
include("include/koneksi.php");
if (isset($_SESSION['IPMKR_LOGIN'])): 
	$userdata = $_SESSION['IPMKR_LOGIN'];
if(isset($_GET['home']) == 'home'):
	$themes['active'] = "Home";
elseif(isset($_GET['artikel']) == 'artikel'):
	$themes['active'] = "artikel";
elseif(isset($_GET['kepengurusan']) == 'kepengurusan'):
	$themes['active'] = "Kepengurusan";
elseif(isset($_GET['keanggotaan']) == 'keanggotaan'):
	$themes['active'] = "Keanggotaan";
elseif(isset($_GET['pesan'])):
	$themes['active'] = "Pesan";
elseif(isset($_GET['pengaturan'])):
	$themes['active'] = "Pengaturan";
else:
	$themes['active'] = "Home";
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manajemen IPMKR-Y KOTA</title>
	<?php include('include/css.php') ?>
	<?php include('include/js.php') ?>
</head>
<body>
	<?php include('include/navbar.php') ?>
	<div class="container">
		<div class="row" id="konten">
			<?php 
			if(isset($_GET['home']) == 'home'):
				include('modul/index.php');
			elseif(isset($_GET['artikel']) == 'artikel'):
				include('modul/artikel.php');
			elseif(isset($_GET['keanggotaan']) == 'keanggotaan'):
				include('modul/keanggotaan.php');
			elseif(isset($_GET['kepengurusan']) == 'kepengurusan'):
				include('modul/kepengurusan.php');
			elseif(isset($_GET['pesan'])):
				include('modul/pesan.php');
			elseif(isset($_GET['pengaturan']) == 'pengaturan'):
				include('modul/pengaturan.php');
			else:
				include('modul/index.php');
			endif;
			?>
		</div>
	</div>
</body>
</html>
<?php 
else: 
	echo "
<script>alert('Woops kamu harus login dulu.');</script>
<meta http-equiv='refresh' content='0;url=index.php'>
";
endif; 
?>