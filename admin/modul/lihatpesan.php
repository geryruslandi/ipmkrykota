<?php 
include("../include/koneksi.php");
$id = $_GET['id'];
$query_to_read 	= mysql_query("UPDATE pesan SET status = 'read' where id_pesan = $id;");
$query_pesan 	= mysql_query("SELECT * FROM pesan where id_pesan = $id");
$data_pesan  	= mysql_fetch_assoc($query_pesan);
?>
<div class="modal-content modal-largest">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title">Detail Pesan</h4>
		<small>Pesan masuk pada: <?php echo date('j F Y, g:i  A', strtotime($data_pesan['tanggal'])); ?> | <a onclick="return confirm('Kamu yakin akan menghapus pesan ini?');" href="modul/hapus.php?id=<?php echo $data_pesan['id_pesan'] ?>" class="btn btn-xs btn-danger">Hapus Pesan</a></small>
	</div>
	<div class="modal-body">
		<div class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nama :</label>
				<div class="col-sm-10">
					<p class="form-control-static"><?php echo $data_pesan['nama'] ?></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email :</label>
				<div class="col-sm-10">
					<p class="form-control-static"><?php echo $data_pesan['email'] ?></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Pesan :</label>
				<div class="col-sm-10" style="padding-right:30px;">
					<p class="form-control-static text-justify"><?php echo $data_pesan['pesan'] ?></p>
				</div>
			</div>
		</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
		</div>
	</div>