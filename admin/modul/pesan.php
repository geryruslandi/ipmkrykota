<div class="tab-content">
	<div class="tab-pane fade in active" id="home" style="padding-top:15px;">
		<div class="col-md-12">
			<div class="btn-group" style="margin-bottom:20px;">
				<a href="manajemen.php?pesan=all" type="button" class="btn <?php if($_GET['pesan'] == "unread"){echo "btn-default";} else {echo "btn-info";} ?> btn-sm">All</a>
				<a href="manajemen.php?pesan=unread" type="button" class="btn <?php if($_GET['pesan'] == "unread"){echo "btn-info";} else {echo "btn-default";} ?> btn-sm">Unread</a>
			</div>

			<table class="table table-condensed table-responsive">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>	
					<?php 
					if($_GET['pesan'] == "unread"):
						$query_unread = mysql_query("SELECT * FROM pesan where status ='unread' ORDER BY tanggal DESC;");
					$row = mysql_num_rows($query_unread);
					if($row == 0):
						echo "<tr><td class='text-center' colspan='6'>Tidak ada pesan yang belum terbaca</td></tr>";
					else:
						$i = 1;
					while($data_unread = mysql_fetch_assoc($query_unread)):
						?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $data_unread['nama']; ?></td>
						<td><?php echo $data_unread['email']; ?></td>
						<td><?php echo date('j F Y, g:i  A', strtotime($data_unread['tanggal'])); ?></td>
						<td><?php if($data_unread['status'] == 'unread'){echo 'Belum Dibaca';}else{echo 'Sudah Dibaca';} ?></td>
						<td><a data-tooltip="true" title="" class="btn btn-default btn-sm" href="modul/lihatpesan.php?id=<?php echo $data_unread['id_pesan']; ?>" data-toggle="modal" data-target="#ModalPesan">
							Lihat Pesan</a></td>
						</tr>
						<?php
						$i++;
						endwhile;
						endif;
						elseif($_GET['pesan'] == "all"):
							$query_all = mysql_query("SELECT * FROM pesan ORDER BY tanggal DESC;");
						$row = mysql_num_rows($query_all);
						if($row == 0):
							echo "<tr><td class='text-center' colspan='6'>Belum ada pesan masuk</td></tr>";
						else:
							$i = 1;
						while($data_all = mysql_fetch_assoc($query_all)):
							?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $data_all['nama']; ?></td>
							<td><?php echo $data_all['email']; ?></td>
							<td><?php echo date('j F Y, g:i  A', strtotime($data_all['tanggal'])); ?></td>
							<td><?php if($data_all['status'] == 'unread'){echo 'Belum Dibaca';}else{echo 'Sudah Dibaca';} ?></td>
							<td>
								<a data-tooltip="true" title="" class="btn btn-default btn-sm" href="modul/lihatpesan.php?id=<?php echo $data_all['id_pesan']; ?>" data-toggle="modal" data-target="#ModalPesan">
									Lihat Pesan</a>
								</td>
							</tr>
							<?php
							$i++;
							endwhile;
							endif;
							?>
							<?php
							else:
								$query_all = mysql_query("SELECT * FROM pesan ORDER BY tanggal DESC;");
							$row = mysql_num_rows($query_all);
							if($row == 0):
								echo "<tr><td class='text-center' colspan='6'>Belum ada pesan masuk</td></tr>";
							else:
								$i = 1;
							while($data_all = mysql_fetch_assoc($query_all)):
								?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $data_all['nama']; ?></td>
								<td><?php echo $data_all['email']; ?></td>
								<td><?php echo date('j F Y, g:i  A', strtotime($data_all['tanggal'])); ?></td>
								<td><?php if($data_all['status'] == 'unread'){echo 'Belum Dibaca';}else{echo 'Sudah Dibaca';} ?></td>
								<td>
									<a data-tooltip="true" title="" class="btn btn-default btn-sm" href="modul/lihatpesan.php?id=<?php echo $data_all['id_pesan']; ?>" data-toggle="modal" data-target="#ModalPesan">
										Lihat Pesan</a>
									</td>
								</tr>
								<?php
								$i++;
								endwhile;
								endif;
								endif;
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="modal fade" id="ModalPesan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content modal-largest">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title"></h4>

						</div>
						<div class="modal-body"></div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<script>
			$('#ModalPesan').on('shown.bs.modal', function () {
				$(this).removeData('bs.modal');
			});
			</script>