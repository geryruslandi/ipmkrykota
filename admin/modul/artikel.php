<?php
include("include/koneksi.php"); ?>
<?php /*php variable kontrol navigasi page */
	$halaman;
	$url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if($url=="localhost/ipmkr/admin/manajemen.php?artikel" )
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
<?php
	$limit =($halaman-1)*10;
?>
<div class="tab-content">
	<div class="tab-pane fade in active" id="home" style="padding-top:15px;">
		<div class="col-md-12">
			<div class="btn-group" style="margin-bottom:20px;"> <!--Button Tambah Artikel -->
				<a type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalTambahAnggota">Tambah Artikel Baru</a>
			</div>

			<?php  //PHP Select data ke database
			$list_agenda = mysql_query("select * from artikel order by tgl_post desc limit $limit,10;");
			if(mysql_num_rows($list_agenda) ==0):
				echo "<br><i>Opps, tidak ada Agenda yang tersimpan.</i>";
			else:
				?>
			<table class="table table-hovered table-responsive">
				<thead>
					<tr>
						<th>#</th>
						<th>Kategori Artikel</th>
						<th>Judul Artikel</th>
						<th>Lokasi</th>
						<th>Tanggal Posting</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>	
					<?php 
					$i = 1;
					$nohlmn = 10*($halaman -1);
					while($data_agenda = mysql_fetch_assoc($list_agenda)):
						
						?>
					<tr>
						<td><?php echo $nohlmn+$i ?></td>
						<td><?php /*Pilih Kategory */
									$kategori;
									if($data_agenda['id_category']==1)
									{
										 $kategori='Agenda';
									}
									else if ($data_agenda['id_category']==2)
									{
										$kategori='Berita';
									}
									echo $kategori;
							?>
						</td>
						<td><?php echo $data_agenda['judul'] ?></td>
						<td><?php echo $data_agenda['lokasi'] ?></td>
						<td><?php echo date('j F Y', strtotime($data_agenda['tgl_post'])) ?></td>
						<td>
							<a onclick="return confirm('Kamu yakin akan menghapus agenda ini?');" href="modul/hapus_artikel.php?id=<?php echo $data_agenda['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
							<a href="../<?php /*Pilih Kategory */
											if($data_agenda['id_category']== 1)
											{
												echo "agenda.php";
											}
											elseif($data_agenda['id_category']== 2)
											{
												echo "berita.php";
											}
										?>?id=<?php echo $data_agenda['id'] ?>" class="btn btn-info btn-sm" target="_blank">Lihat</a>
							
						</td>
					</tr>
					<?php 
					$i++;
					endwhile;
					
					?>
					
				</tbody>
			</table>
			<?php 
			endif; 
			$selecttb="artikel";$selectartikel="admin/manajemen.php?artikel";
			include("include/pagenav.php");
			?>
		</div>
	</div>
</div>

<div class="modal fade" id="ModalTambahAnggota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content modal-largest" style="width:900px; margin-left:-120px; margin-top:50px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Agenda Baru</h4>
			</div>
			<form action="modul/tambah_agenda.php" method="POST">
				<div class="modal-body">
					<div class="col-sm-12">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Judul Artikel</label>
								<input required autofocus="true" class="form-control" placeholder="Masukkan judul artikel" name="judul">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Jenis Artikel</label>
								<input required class="form-control" placeholder="1 untuk agenda ,2 untuk berita .Eg : 1" name="id_category">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Lokasi / Tempat</label>
								<input required class="form-control" placeholder="eg: Gedung Serba Guna IPMKR-Y" name="lokasi">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label>Isi Artikel</label>
								<textarea class="form-control" name="isi" placeholder="Isi artikel berformat HTML ,Artikel akan di PAGEBREAK(READ MORE) ketika ada tag </p>" style="max-width:808px; min-height:200px; max-height:200px;"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer" style="border:none;">
					<input type="submit" class="btn btn-success btn-sm" value="Tambah" name="btn_tambah">
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">
	function isNumberKey(evt)
	{
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;

		return true;
	}
	</script>
</div>
