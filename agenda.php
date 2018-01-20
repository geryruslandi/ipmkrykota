<!DOCTYPE HTML>
<html>
<head>
    <title>IPMKR-Y KOTA</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link type="text/css" rel="stylesheet" href="css/page_nav.css" />
</head>
<body>
 <?php include("front/include/navbar.php") ?>
 <?php include("front/include/koneksi.php") ?>
 <div class="wrap">
    <div class="content">
        <div class="sidebar"> <!--Side Menu Agenda -->
            <?php  
            $query = mysql_query("select * from sm_agenda"); 
            ?>
            <h1>Agenda Terbaru</h1>
            <ul>
                <?php 
                while($agenda = mysql_fetch_assoc($query)): ?>
                <li style="color:#000; font-size:15px;"><a href="agenda.php?id=<?php echo $agenda['id'] ?>"><?php echo $agenda['judul'] ?></a></li>
                <?php 
                endwhile; ?>
            </ul>
        </div>
		<?php /*php variable kontrol navigasi page */
			$halaman;
			$url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			if($url=="localhost/ipmkr/agenda.php" )
			{
				$halaman=1;
			}
			else
			{		
				if(isset($_GET['id']))
				{
					$halaman=null;
				}
				else
				{
				$halaman=$_GET['hlmn'];
				}
			}
			if($halaman==0 || $halaman < 0 )
			{
				$halaman=1;
			}
		?>		
        <div class="b-box" style="min-height:350px; width:650px;"> <!--Box Artikel dan navigasi page -->
         <?php $selecttb="daftar_agenda";$selectartikel="agenda.php";?>
		 <?php include("artikel_list.php");?>
		 
		 <?php
		 if(!strpos($url,"id="))
		 {
		 include("front/include/pagenav.php");
		 }
		 ?>
		 </div>
    </div>
</div>
<?php include("front/include/footer.php") ?>
</body>
</html>
