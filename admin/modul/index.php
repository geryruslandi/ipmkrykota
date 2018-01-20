<?php 
include("include/koneksi.php");
$query_all_mssg 	= mysql_query("SELECT * FROM pesan;");
$query_unread_mssg 	= mysql_query("SELECT * FROM pesan where status = 'unread'");
$query_read_mssg 	= mysql_query("SELECT * FROM pesan where status = 'read'");
$query_new_member 	= mysql_query("SELECT * FROM anggota where status ='Pending';");
$query_all_member 	= mysql_query("SELECT * FROM anggota where status ='Accept';");

$all_mssg 			= mysql_num_rows($query_all_mssg);
$unread_mssg 		= mysql_num_rows($query_unread_mssg);
$read_mssg 			= mysql_num_rows($query_read_mssg);
$new_member 		= mysql_num_rows($query_new_member);
$all_member 		= mysql_num_rows($query_all_member);

?>
<div class="tab-content">
	<div class="tab-pane fade in active" id="home" style="padding-top:15px;">
		<div class="col-sm-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Information</h3>
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
							Keanggotaan Baru
							<a href="manajemen.php?keanggotaan=pending"><span class="badge alert-info pull-right"><?php echo $new_member; ?></span></a>
						</li>
						<li class="list-group-item">
							Pesan Baru
							<a href="manajemen.php?pesan=unread"><span class="badge alert-info pull-right"><?php echo $unread_mssg; ?></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th>Type</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Total Pesan Masuk</td>
						<td>
							<a href="manajemen.php?pesan"><?php echo $all_mssg; ?> pesan</a>
						</td>
					</tr>
					<tr>
						<td>Total Member</td>
						<td><a href="manajemen.php?keanggotaan"><?php echo $all_member ?> Orang</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>