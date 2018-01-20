<!DOCTYPE HTML>
<html>
<head>
    <title>IPMKR-Y KOTA</title>
    <link href="css/additional.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/gallery.css" rel="stylesheet" type="text/css" />
	<?php include("front/include/koneksi.php")?>
</head>
<body>
 <?php include("front/include/navbar.php") ?>
 <div class="wrap">
    <div class="content">
        <div class="b-box" style="width:910px;margin-bottom:20px">
            <h1 align="center" >Kepengurusan</h1>
            <p>
                Struktur organisasi IPMKR-Y Kota ini merupakan struktur organisasi dengan periode tahunan. 
                Struktur organisasi ini terdiri dari kepengurusan inti, koordinator setiap departemen beserta masing-masing staff-nya.
            </p>
        </div>
        <div class="b-box" style="width:910px;margin-bottom:20px">
            <?php
				$query_departmen=mysql_query("select * from departemen");
				$i=1;
				while($deskripsi_departmen=mysql_fetch_assoc($query_departmen))
				{
			?>
			<div class="gallery">
				<h1 align="center" style="color:white;padding:8px;border-bottom:none">
				<?php
					echo $deskripsi_departmen['nama_dep'];
				?> 
				</h1>
				<ul>
				<?php
				$query_pengurus=mysql_query("select * from kepengurusan where departemen = $i");
				while($data_pengurus=mysql_fetch_assoc($query_pengurus))
				{
				?>
					<li>
						<div class="image">
							<img <?php
									if($data_pengurus['jk']=='L')
									{
									
									}
								?>
									src="images/default_pengurus_m.jpg" /><p><?php echo $data_pengurus['nama'],"<br/>(",$data_pengurus['jabatan'],")"; ?></p>
								
					</div>
					</li>
				<?php
				}
				?>
				</ul>
				<div style="clear:both"></div>
			</div>
			<?php
				$i++;
			}
			?>
        </div>
    </div>
</div>
<?php include("front/include/footer.php") ?>
</body>
</html>