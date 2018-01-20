<!DOCTYPE HTML>
<html>
	<head>
		<title>IPMKR-Y KOTA</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link type="text/css" rel="stylesheet" href="css/rhinoslider-1.05.css" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/rhinoslider-1.05.min.js"></script>
		<script type="text/javascript" src="js/mousewheel.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('#slider').rhinoslider({
				controlsMousewheel: false,
				controlsKeyboard: false,
				controlsPrevNext: false,
				controlsPlayPause: false,
				autoPlay: true
			});
		});
		</script>
		<link type="text/css" rel="stylesheet" href="css/page_nav.css" />
	</head>
	<body>
		<?php include("front/include/navbar.php") ?>
		<?php include("front/include/koneksi.php") ?>
		<div class="wrap"> <!-- Box Kata Sambutan -->
			<div class="content">
				<?php include("front/include/slider.php") ?>
				<div class="b-box" style="width:910px"> 
					<h1>Selamat Datang!</h1>
					IPMKR-Y Kota TanjungPinang
					<p><p>Website ini merupakan salah satu media informasi kedaerahan yang bertujuan untuk memudahkan pelajar dan mahasiswa kota Tanjungpinang yang sedang menempuh studi di kota yogyakarta dalam mengakses informasi terkait organisasi dan kegiatan - kegiatan keorganisasian yang rutin dilaksanakan dan sebagai wadah untuk memudahkan pendataan anggota kami.</p>  <a href="tentangkami.php">IPMKR-Y KOTA selengkapnya &raquo;</a></p>
				</div>
			</div>
		</div>
		<div class="wrap" style="margin-top:20px">
			<a></a>
			<div class="sidebar" style="float:right"><!-- Box Side Menu -->
				<h1>Artikel Terbaru</h1> 
				<ul>
				<?php 
				$query = mysql_query("SELECT * from sm_artikel order by id desc limit 5;"); 
				while($artikel = mysql_fetch_assoc($query)): ?>
					<li style="margin-bottom:5px; color:#000; font-size:15px;"><a href="<?php 
					if($artikel['id_category']==1)
					{
						echo "agenda.php";
					}
					else if($artikel['id_category']==2)
					{
						echo "berita.php";
					}
					?>?id=<?php echo $artikel['id'] ?>"><?php echo $artikel['judul'] ?></a>
					</li>
				<?php 
				endwhile; ?>
				</ul>
			</div>
				<?php /*php variable kontrol navigasi page */
					$halaman;
					$url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
					if($url=="localhost/ipmkr/index.php" || $url=="localhost/ipmkr/")
					{
						$halaman=1;
					}
					else
					{
						
						$halaman=$_GET['hlmn'];
					}
					if($halaman==0 || $halaman < 0 )
					{
						$halaman=1;
					}
				?>
				<div class="b-box" style="min-height:350px; width:650px;"> <!--Box Artikel dan navigasi page -->
					<?php $selecttb="daftar_artikel";$selectartikel="index.php";?>
					<?php include("artikel_list.php");?>
					<?php include("front/include/pagenav.php")?>
				</div>
			</div>
		<?php include("front/include/footer.php") ?>
		
	</body>
</html>
