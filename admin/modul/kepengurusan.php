<?php include("include/koneksi.php") ?>
<div class="tab-content">
	<div class="tab-pane fade in active" id="home" style="padding-top:15px;">
	<div class="col-md-12">
		<div class="row"> <!-- Periode -->
			<div class="col-sm-12">
				<span style="font-size:20px;">
					STRUKTUR ORGANISASI IPMKR - Y KOTA  : 
				</span>
			</div>
			<br><br>
			<div class="col-sm-4" style="margin-bottom:10px">
				<form action="modul/update_kepengurusan.php" method="POST">
					<?php 
					$query_periode = mysql_query("SELECT periode FROM kepengurusan LIMIT 1");
					$data_periode = mysql_fetch_assoc($query_periode);
					?>
					<div class="input-group input-group-sm">
						<span class="input-group-addon">Periode</span>
						<input type="text" name="periode" value="<?php echo $data_periode['periode'] ?>" autocomplete="off" class="form-control" placeholder="2014/2015">
						<span class="input-group-btn">
							<input type="submit" class="btn btn-success" value="SIMPAN" name="btn_periode">
						</span>
					</div>
				</form>
			</div>
		</div>
		<div class="row"> <!-- BPH & SDM -->
		<div class="col-sm-6">
			<form action="modul/update_kepengurusan.php" method="POST">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">KEPENGURUSAN INTI</h3>
					</div>
					<div class="panel-body">
						<?php 
						$query_inti = mysql_query("SELECT * FROM kepengurusan where departemen = 1;");
						while($data = mysql_fetch_assoc($query_inti)):
							?>
						<div class="input-group input-group-sm">
							<span class="input-group-addon"><?php echo strtoupper($data['jabatan']) ?></span>
							<input value="<?php echo $data['nama'] ?>" type="text" class="form-control" name="nama_inti[]" placeholder="Nama <?php echo $data['jabatan'] ?>">
							<input type="hidden" name="jabatan_inti[]" value="<?php echo $data['jabatan'] ?>">
						</div>
						<div style="margin-bottom:10px;"></div>
						<?php 
						endwhile; ?>

						<div style="margin-bottom:10px;"></div>
						<input type="submit" name="kepengurusan_inti" class="btn btn-primary btn-sm" value="SIMPAN"></input>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-6">
			<form action="modul/update_kepengurusan.php" method="POST">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">DEP. SUMBER DAYA MANUSIA</h3>
					</div>
					<div class="panel-body">
						<?php 
						$query_sdm = mysql_query("SELECT * FROM kepengurusan where departemen = 2;");
						while($data_sdm = mysql_fetch_assoc($query_sdm)):
							?>
						<div class="input-group input-group-sm">
							<span class="input-group-addon"><?php echo $data_sdm['jabatan'] ?></span>
							<input value="<?php echo $data_sdm['nama'] ?>" type="text" class="form-control" name="nama_sdm[]" placeholder="Nama <?php echo $data_sdm['jabatan'] ?> SDM">
							<input type="hidden" name="jabatan_sdm[]" value="<?php echo $data_sdm['jabatan'] ?>">
							<input type="hidden" name="id_sdm[]" value="<?php echo $data_sdm['id'] ?>">
						</div>
						<div style="margin-bottom:10px;"></div>
						<?php 
						endwhile;
						?>
						<input type="submit" name="dep_sdm" class="btn btn-primary btn-sm" value="SIMPAN"></input>
					</div>
				</div>
			</form>
		</div>
		</div>
		<div class="row"> <!-- INFOKOM & KWU -->
		<div class="col-sm-6">
			<form action="modul/update_kepengurusan.php" method="POST">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">DEP. INFOKOM</h3>
					</div>
					<div class="panel-body">
						<?php 
						$query_infokom = mysql_query("SELECT * FROM kepengurusan where departemen = 3;");
						while($data_infokom = mysql_fetch_assoc($query_infokom)):
							?>
						<div class="input-group input-group-sm">
							<span class="input-group-addon"><?php echo $data_infokom['jabatan'] ?></span>
							<input value="<?php echo $data_infokom['nama'] ?>" type="text" class="form-control" name="nama_infokom[]" placeholder="Nama <?php echo $data_infokom['jabatan'] ?> SDM">
							<input type="hidden" name="jabatan_infokom[]" value="<?php echo $data_infokom['jabatan'] ?>">
							<input type="hidden" name="id_infokom[]" value="<?php echo $data_infokom['id'] ?>">
						</div>
						<div style="margin-bottom:10px;"></div>
						<?php 
						endwhile;
						?>
						<input type="submit" name="dep_infokom" class="btn btn-primary btn-sm" value="SIMPAN"></input>
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-6">
			<form action="modul/update_kepengurusan.php" method="POST">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">DEP. KEWIRAUSAHAAN</h3>
					</div>
					<div class="panel-body">
						<?php 
						$query_kwu = mysql_query("SELECT * FROM kepengurusan where departemen = 4;");
						while($data_kwu = mysql_fetch_assoc($query_kwu)):
							?>
						<div class="input-group input-group-sm">
							<span class="input-group-addon"><?php echo $data_kwu['jabatan'] ?></span>
							<input value="<?php echo $data_kwu['nama'] ?>" type="text" class="form-control" name="nama_kwu[]" placeholder="Nama <?php echo $data_kwu['jabatan'] ?> Kewirausahaan">
							<input type="hidden" name="jabatan_kwu[]" value="<?php echo $data_kwu['jabatan'] ?>">
							<input type="hidden" name="id_kwu[]" value="<?php echo $data_kwu['id'] ?>">
						</div>
						<div style="margin-bottom:10px;"></div>
						<?php 
						endwhile;
						?>
						<input type="submit" name="dep_kwu" class="btn btn-primary btn-sm" value="SIMPAN"></input>
					</div>
				</div>
			</form>
		</div>
		</div>
		<div class="row"> <!-- Agama & OlhRG -->
		<div class="col-sm-6">
			<form action="modul/update_kepengurusan.php" method="POST">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">DEP. AGAMA</h3>
					</div>
					<div class="panel-body">
						<?php 
						$query_agama = mysql_query("SELECT * FROM kepengurusan where departemen = 5;");
						while($data_agama = mysql_fetch_assoc($query_agama)):
							?>
						<div class="input-group input-group-sm">
							<span class="input-group-addon"><?php echo $data_agama['jabatan'] ?></span>
							<input value="<?php echo $data_agama['nama'] ?>" type="text" class="form-control" name="nama_agama[]" placeholder="Nama <?php echo $data_agama['jabatan'] ?> Agama">
							<input type="hidden" name="jabatan_agama[]" value="<?php echo $data_agama['jabatan'] ?>">
							<input type="hidden" name="id_agama[]" value="<?php echo $data_agama['id'] ?>">
						</div>
						<div style="margin-bottom:10px;"></div>
						<?php 
						endwhile;
						?>
						<input type="submit" name="dep_agama" class="btn btn-primary btn-sm" value="SIMPAN"></input>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-6">
			<form action="modul/update_kepengurusan.php" method="POST">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">DEP. OLAHRAGA</h3>
					</div>
					<div class="panel-body">
						<?php 
						$query_or = mysql_query("SELECT * FROM kepengurusan where departemen = 6;");
						while($data_or = mysql_fetch_assoc($query_or)):
							?>
						<div class="input-group input-group-sm">
							<span class="input-group-addon"><?php echo $data_or['jabatan'] ?></span>
							<input value="<?php echo $data_or['nama'] ?>" type="text" class="form-control" name="nama_olahraga[]" placeholder="Nama <?php echo $data_or['jabatan'] ?> Olahraga">
							<input type="hidden" name="jabatan_olahraga[]" value="<?php echo $data_or['jabatan'] ?>">
							<input type="hidden" name="id_olahraga[]" value="<?php echo $data_or['id'] ?>">
						</div>
						<div style="margin-bottom:10px;"></div>
						<?php 
						endwhile;
						?>
						<input type="submit" name="dep_olahraga" class="btn btn-primary btn-sm" value="SIMPAN"></input>
					</div>
				</div>
			</form>
		</div>
		</div>
		<div class="row"> <!-- SenBud & Lembaga -->
		<div class="col-sm-6">
			<form action="modul/update_kepengurusan.php" method="POST">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">DEP. SENI DAN BUDAYA</h3>
					</div>
					<div class="panel-body">
						<?php 
						$query_seni = mysql_query("SELECT * FROM kepengurusan where departemen = 7;");
						while($data_seni = mysql_fetch_assoc($query_seni)):
							?>
						<div class="input-group input-group-sm">
							<span class="input-group-addon"><?php echo $data_seni['jabatan'] ?></span>
							<input value="<?php echo $data_seni['nama'] ?>" type="text" class="form-control" name="nama_seni[]" placeholder="Nama <?php echo $data_seni['jabatan'] ?> Seni dan Budaya">
							<input type="hidden" name="jabatan_seni[]" value="<?php echo $data_seni['jabatan'] ?>">
							<input type="hidden" name="id_seni[]" value="<?php echo $data_seni['id'] ?>">
						</div>
						<div style="margin-bottom:10px;"></div>
						<?php 
						endwhile;
						?>
						<input type="submit" name="dep_seni" class="btn btn-primary btn-sm" value="SIMPAN"></input>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-6">
			<form action="modul/update_kepengurusan.php" method="POST">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">LEMBAGA</h3>
					</div>
					<div class="panel-body">
						<?php 
						$query_asrama = mysql_query("SELECT * FROM kepengurusan where departemen = 8;");
						while($data_asrama = mysql_fetch_assoc($query_asrama)):
							?>
						<div class="input-group input-group-sm">
							<span class="input-group-addon"><?php echo $data_asrama['jabatan'] ?></span>
							<input value="<?php echo $data_asrama['nama'] ?>" type="text" class="form-control" name="nama_asrama[]" placeholder="Nama <?php echo $data_asrama['jabatan'] ?> Asrama">
							<input type="hidden" name="jabatan_asrama[]" value="<?php echo $data_asrama['jabatan'] ?>">
							<input type="hidden" name="id_asrama[]" value="<?php echo $data_asrama['id'] ?>">
						</div>
						<div style="margin-bottom:10px;"></div>
						<?php 
						endwhile;
						?>
						<input type="submit" name="dep_asrama" class="btn btn-primary btn-sm" value="SIMPAN"></input>
					</div>
				</div>
			</form>
		</div>
		</div>
	</div>
	</div>
</div>
</div>