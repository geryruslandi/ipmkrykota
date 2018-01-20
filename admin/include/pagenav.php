<div class="pagenav">

	<?php 
	$query_hitung=mysql_query("select count(*) as hitung from {$selecttb}");
	$data_hitung_artikel=mysql_fetch_assoc($query_hitung);
	$jumlah_page=ceil($data_hitung_artikel['hitung']/10);
	if($jumlah_page <= 5) /*Jika Page tidak lebih sama dengan 5*/
	{
		?>
		<ul>
		<?php
		for($temp=1;$temp<= $jumlah_page;$temp++ )
		{ ?>
			<li><a
			<?php
			if($halaman==$temp)
			{
			echo "class=\"active\"";
			}
			?> href="/ipmkr/<?php echo $selectartikel;?>&hlmn=<?php echo $temp?>"><?php echo $temp ?></a></li>
		<?php
		}
		?>
			</ul>
			<?php	
	}
	elseif($jumlah_page > 5 ) /*Jika Page lebih dari 5*/
	{
		
		?>
		<ul>
			
			<?php 
				if($halaman==1 || $halaman==2 || $halaman==3)
				{
					for($temp=1;$temp<= 5;$temp++ )
					{ ?>
						<li><a
					<?php
					if($halaman==$temp)
					{
						echo "class=\"active\"";
					}
					?> href="/ipmkr/<?php echo $selectartikel ?>&hlmn=<?php echo $temp?>"><?php echo $temp ?></a></li>
					<?php
					}
					?>
					<li style="margin-top:20px;">......</li>
					<li><a href="/ipmkr/<?php echo $selectartikel ?>&hlmn=<?php echo $jumlah_page;?>"><?php echo $jumlah_page; ?></a></li>
					<?php
				}
				elseif($halaman == $jumlah_page || $halaman + 1 == $jumlah_page || $halaman + 2 == $jumlah_page)
				{
					?>
					<li><a href="/ipmkr/<?php echo $selectartikel ?>&hlmn=<?php echo ($jumlah_page/$jumlah_page);?>">1</a></li>
					<li style="margin-top:20px;">......</li>
					<?php
					for($temp=$jumlah_page-4;$temp <= $jumlah_page; $temp ++)
					{
					?>
					<li><a 						
					<?php
						if($halaman==$temp)
					{
						echo "class=\"active\"";
					}
					?> 	href="/ipmkr/<?php echo $selectartikel ?>&hlmn=<?php echo $temp?>"><?php echo $temp ?></a></li>
					<?php
					}
				}
				elseif($halaman <= $jumlah_page-3)
				{
					?>
					<li><a href="/ipmkr/<?php echo $selectartikel ?>&hlmn=<?php echo ($jumlah_page/$jumlah_page);?>">1</a></li>
					<li style="margin-top:20px;">......</li>
					<?php
					for($temp=$halaman-2;$temp <= $halaman+2;$temp++)
					{
					?>
					<li><a 		
					<?php
					if($temp==$halaman)
					{
						echo "class=\"active\"";
					}
					?> 	href="/ipmkr/<?php echo $selectartikel ?>&hlmn=<?php echo $temp?>"><?php echo $temp ?></a></li>
					<?php
				}
				?>
				<li style="margin-top:20px;">......</li>
				<li><a href="/ipmkr/<?php echo $selectartikel ?>&hlmn=<?php echo $jumlah_page;?>"><?php echo $jumlah_page; ?></a></li>
				<?php
				}
				else /* DIRECT KE HALAMAN INDEX JIKA HLMN MELEBIHI HLMN YANG TERSEDIA */
				{
					echo "<meta http-equiv='refresh' content='0;url=http://localhost/ipmkr/admin/manajemen.php?artikel'	>";
				}

				?>
		
		</ul>
		<?php
	}
	?>
	<hr/>
</div>