 <!--Box Artikel -->
				<?php 
					$temporary=($halaman-1)*5;
					if(isset($_GET['id'])):
						$id = $_GET['id'];
					if($id == ""){
						echo "<meta http-equiv='refresh' content='0;url=agenda.php'>";
					}else{
                
					}
					$selected_artikel = mysql_query("SELECT * FROM {$selecttb} where id={$id}");
					while($detail_artikel = mysql_fetch_assoc($selected_artikel)):
					?>
					<h1><?php echo $detail_artikel['judul'] ?></h1>
					<p style="text-align:justify;"><?php echo "Di Posting Pada Tanggal: <b>".$detail_artikel['tgl_post']."</b> | Tempat: <b>". $detail_artikel['lokasi']."</b>" ?></p>
					<p><?php echo $detail_artikel['isi'] ?></p>
				<?php 
					endwhile; ?>
				<?php 
				else:
					$query2 = mysql_query("select * from {$selecttb} order by tgl_post desc limit {$temporary},5"); 
					while ($data_artikel = mysql_fetch_assoc($query2)):
				?>
				<h1><a href="
				<?php	if($data_artikel['id_category']==1)
						{
							echo "agenda.php";
						}
						else if($data_artikel['id_category'] == 2)
						{
							echo "berita.php";
						}
						?>?id=<?php echo $data_artikel['id'] ?>"><?php echo $data_artikel['judul'] ?></a></h1>
				<p style="text-align:justify;"><?php echo "Di Posting Pada Tanggal: <b>".$data_artikel['tgl_post']."</b> | Tempat: <b>". $data_artikel['lokasi']."</b>" ?></p>
				<p><?php echo $data_artikel['isi'] ?></p>
				<?php 
					endwhile;
					endif; 
				?>
				<br/>
				<br/>
				<br/>
				
			
		