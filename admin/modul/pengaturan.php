<?php
include("include/koneksi.php"); ?>
<div class="tab-content">
	<div class="tab-pane fade in active" id="home" style="padding-top:15px;">
		<div class="col-sm-12">
			<a class="btn btn-sm btn-primary">Tambah Admin</a>
			<div class="col-sm-12" style="margin-bottom:10px;"></div>
		</div>
		<span style=""></span>	
		<div class="col-sm-6">
			<form action="modul/update_kepengurusan.php" method="POST">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Detail Akun Kamu</h3>
					</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td>Username</td>
									<td>sunupermana</td>
								</tr>
								<tr>
									<td>Nama</td>
									<td>Sunu Permanajati</td>
								</tr>
								<tr>
									<td>Password</td>
									<td><i>Password Kamu</i></td>
								</tr>
							</tbody>
						</table>
						<center><button class="btn-default btn btn-sm">Ganti Password</button></center>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-6">
			<form action="modul/update_kepengurusan.php" method="POST">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Admin Lainnya</h3>
					</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Username</th>
									<th>Nama</th>
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>sunupermana</td>
									<td>Sunu Permanajati</td>
									<td class="text-center">
										<button class="btn btn-xs btn-danger">Hapus</button>
										<button class="btn btn-xs btn-default">Reset Password</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>