<?php
include("include/koneksi.php"); ?>
<div class="tab-content">
	<div class="tab-pane fade in active" id="home" style="padding-top:15px;">
		<div class="col-md-12" style="overflow: scroll;height: 550px;">
			<div class="btn-group" style="margin-bottom:20px;">
				<a type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalTambahAnggota">Tambah Anggota Baru</a>
				<?php if($_GET['keanggotaan']=="pending"): 
				?>
				<a type="button" class="btn btn-primary btn-sm" data-toggle="modal" href="manajemen.php?keanggotaan">Lihat Seluruh Anggota</a>
				<?php else: 
				$listpending = mysql_query("SELECT * FROM anggota where status ='Pending'");
				$jumlah_pending = mysql_num_rows($listpending);
				?>
				<a type="button" class="btn btn-warning btn-sm" data-toggle="modal" href="manajemen.php?keanggotaan=pending"><i><?php echo $jumlah_pending; ?> Anggota Pending</i></a>
				<?php endif;
				?>
			</div>
			<?php if ($_GET['keanggotaan'] == "pending"):
			?>
			<div class="col-sm-12">
				<?php 
				$list_anggota = mysql_query("SELECT * FROM anggota where status ='Pending'");
				if(mysql_num_rows($list_anggota) == 0):
					echo "<i>Tidak ada anggota pending</i>";
				else:
					while($data_pending = mysql_fetch_assoc($list_anggota)):
						?>
					<div class="col-sm-3">
						<div class="col-sm-12 well" style="background-color:#fff; border-color:#ccc;">
							<h4 style="margin-top:-5px;"><?php echo $data_pending['nama_anggota'] ?></h4>
							<p><?php echo $data_pending['universitas'] ?></p>
							<p>Alamat Asal : <?php echo $data_pending['alamat_asal'] ?></p>
							<div class="btn-group">
								<a onclick="return confirm('Kamu yakin akan menghapus anggota ini?');" href="modul/hapus_anggota.php?id=<?php echo $data_pending['id_anggota'] ?>&&pending" class="btn btn-sm btn-default">Hapus</a>
								<a href="modul/terima_anggota.php?id=<?php echo $data_pending['id_anggota'] ?>" class="btn btn-sm btn-info">Terima</a>
							</div>
						</div>
					</div>
					<?php 
					endwhile;
					endif; ?>

				</div>
				<?php
				else:
					?>
				<?php 
				$list_anggota = mysql_query("SELECT * FROM anggota where status ='Accept'");
				if(mysql_num_rows($list_anggota) ==0):
					echo "<br><i>Opps, tidak ada anggota terdaftar.</i>";
				else:
					?>
				<table class=" table table-bordered  table-hover">
					<thead>
						<tr class="success">
							<th>#</th>
							<th>Nama</th>
							<th>Universitas</th>
							<th>Prodi</th>
							<th>Tahun Masuk</th>
							<th>Nomor Kontak</th>
							<th>Tanggal Gabung</th>
							<th>Alamat Jogja</th>
							<th>Alamat Asal</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>	
						<?php 
						$i = 1;
						$list_anggota = mysql_query("SELECT * FROM anggota where status ='Accept' ORDER BY tanggal_bergabung DESC");
						while($data_anggota = mysql_fetch_assoc($list_anggota)):
							?>
						<tr class="info">
							<td><?php echo $i ?></td>
							<td><?php echo $data_anggota['nama_anggota'] ?></td>
							<td><?php echo $data_anggota['universitas'] ?></td>
							<td><?php echo $data_anggota['prodi'] ?></td>
							<td><?php echo $data_anggota['tahun_masuk'] ?></td>
							<td><?php echo $data_anggota['nomor_kontak'] ?></td>
							<td><?php echo date('j F Y, g:i  A', strtotime($data_anggota['tanggal_bergabung'])); ?></td>
							<td><?php echo $data_anggota['alamat_jogja'] ?></td>
							<td><?php echo $data_anggota['alamat_asal'] ?></td>
							<td><a onclick="return confirm('Kamu yakin akan menghapus anggota ini?');" href="modul/hapus_anggota.php?id=<?php echo $data_anggota['id_anggota'] ?>" class="btn btn-danger btn-sm">Hapus</a></td>
						</tr>
						<?php 
						$i++;
						endwhile;
						?>
					</tbody>
				</table>
				<?php 
				endif; 
				endif; 
				?>
			</div>
		</div>
	</div>

	<div class="modal fade" id="ModalTambahAnggota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content modal-largest" style="width:900px; margin-left:-120px; margin-top:50px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Tambah Keanggotaan Baru</h4>
				</div>
				<form action="modul/tambah_anggota.php" method="POST">
					<div class="modal-body">
						<div class="col-sm-12">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Nama</label>
									<input required autofocus="true" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama">
								</div>
								<div class="form-group">
									<label>Nomor Kontak</label>
									<input required onkeypress="return isNumberKey(event)" class="form-control" placeholder="ex:08213456789" name="no_kontak">
								</div>
								<div class="form-group">
									<label>Alamat Jogja</label>
									<input class="form-control" id="exampleInputEmail1" placeholder="Tuliskan Alamat Di Jogja" name="alamat_jogja">
								</div>
								<div class="form-group">
									<label>Alamat Asal</label>
									<input class="form-control" id="exampleInputEmail1" placeholder="Tuliskan Alamat Asal" name="alamat_asal">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Universitas</label>
									<select required name="universitas" class="form-control">
										<option value="">Pilih Universitas</option>
                  <option value="Universitas Gadjah Mada">Universitas Gadjah Mada</option>
                  <option value="Universitas Islam Indonesia">Universitas Islam Indonesia</option>
                  <option value="Universitas Islam Negeri Sunan Kalijaga">Universitas Islam Negeri Sunan Kalijaga</option>
                  <option value="Universitas Negeri Yogyakarta">Universitas Negeri Yogyakarta</option>
                  <option value="Universitas Ahmad Dahlan">Universitas Ahmad Dahlan</option>
                  <option value="Universitas Atma Jaya">Universitas Atma Jaya</option>
                  <option value="Universitas Cokroaminoto">Universitas Cokroaminoto</option>
                  <option value="Universitas Janabadra">Universitas Janabadra</option>
                  <option value="Universitas Kristen Duta Wacana">Universitas Kristen Duta Wacana</option>
                  <option value="Universitas Mercu Buana Yogyakarta">Universitas Mercu Buana Yogyakarta</option>
                  <option value="Universitas Muhammadiyah Yogyakarta">Universitas Muhammadiyah Yogyakarta</option>
                  <option value="Universitas PGRI Yogyakarta">Universitas PGRI Yogyakarta</option>
                  <option value="Universitas Pembangunan Nasional">Universitas Pembangunan Nasional</option>
                  <option value="Universitas Respati Yogyakarta">Universitas Respati Yogyakarta</option>
                  <option value="Universitas Sanata Dharma">Universitas Sanata Dharma</option>
                  <option value="Universitas Teknologi Yogyakarta">Universitas Teknologi Yogyakarta</option>
                  <option value="Institut Seni Indonesia Yogyakarta">Institut Seni Indonesia Yogyakarta</option>
                  <option value="Institut Keguruan dan Ilmu Pengetahuan PGRI">Institut Keguruan dan Ilmu Pengetahuan PGRI</option>
                  <option value="Institut Pertanian STIPER (INSTIPER), Sleman">Institut Pertanian STIPER (INSTIPER), Sleman</option>
                  <option value="Institut Pertanian Yogyakarta">Institut Pertanian Yogyakarta</option>
                  <option value="Institut Sains & Teknologi AKPRIND">Institut Sains & Teknologi AKPRIND</option>
                  <option value="Institut Seni Indonesia Yogyakarta">Institut Seni Indonesia Yogyakarta</option>
                  <option value="Sekolah Tinggi Bahasa Asing LIA">Sekolah Tinggi Bahasa Asing LIA</option>
                  <option value="Sekolah Tinggi Ilmu Ekonomi Bank">Sekolah Tinggi Ilmu Ekonomi Bank</option>
                  <option value="Sekolah Tinggi Ilmu Ekonomi Pariwisata API">Sekolah Tinggi Ilmu Ekonomi Pariwisata API</option>
                  <option value="Sekolah Tinggi Ilmu Ekonomi YKPN (STIE YKPN), Sleman">Sekolah Tinggi Ilmu Ekonomi YKPN (STIE YKPN), Sleman</option>
                  <option value="Sekolah Tinggi Ilmu Kesehatan Ahmad Yani">Sekolah Tinggi Ilmu Kesehatan Ahmad Yani</option>
                  <option value="Sekolah Tinggi Ilmu Kesehatan Aisyiyah">Sekolah Tinggi Ilmu Kesehatan Aisyiyah</option>
                  <option value="Sekolah Tinggi Ilmu Kesehatan Bhetesda YAKKUM">Sekolah Tinggi Ilmu Kesehatan Bhetesda YAKKUM</option>
                  <option value="Sekolah Tinggi Ilmu Kesehatan Yogyakarta">Sekolah Tinggi Ilmu Kesehatan Yogyakarta</option>
                  <option value="Sekolah Tinggi Ilmu Manajemen YKPN">Sekolah Tinggi Ilmu Manajemen YKPN</option>
                  <option value="Sekolah Tinggi Manajemen Informatika dan Komputer AKAKOM">Sekolah Tinggi Manajemen Informatika dan Komputer AKAKOM</option>
                  <option value="Sekolah Tinggi Manajemen Informatika dan Komputer AMIKOM">Sekolah Tinggi Manajemen Informatika dan Komputer AMIKOM</option>
                  <option value="Sekolah Tinggi Psikologi Yogyakarta">Sekolah Tinggi Psikologi Yogyakarta</option>
                  <option value="Sekolah Tinggi Teknologi Nasional">Sekolah Tinggi Teknologi Nasional</option>
                  <option value="Politeknik API">Politeknik API</option>
                  <option value="Politeknik Kesehatan Bhakti Setya Indonesia">Politeknik Kesehatan Bhakti Setya Indonesia</option>
                  <option value="Politeknik LPP, Yogyakarta">Politeknik LPP, Yogyakarta</option>
                  <option value="Politeknik Muhammadiyah Yogyakarta, Yogyakarta">Politeknik Muhammadiyah Yogyakarta, Yogyakarta</option>
                  <option value="Politeknik Seni Yogyakarta">Politeknik Seni Yogyakarta</option>
                  <option value="Akademi Akuntansi YKPN">Akademi Akuntansi YKPN</option>
                  <option value="Akademi Farmasi Indonesia">Akademi Farmasi Indonesia</option>
                  <option value="Akademi Kebidanan Yogyakarta, Bantul">Akademi Kebidanan Yogyakarta, Bantul</option>
                  <option value="Akademi Keperawatan Karya Bakti Husada">Akademi Keperawatan Karya Bakti Husada</option>
                  <option value="Akademi Keperawatan Notokusumo">Akademi Keperawatan Notokusumo</option>
                  <option value="Akademi Keperawatan Panti Rapih">Akademi Keperawatan Panti Rapih</option>
                  <option value="Akademi Komunikasi Indonesia">Akademi Komunikasi Indonesia</option>
                  <option value="Akademi Komunikasi Yogyakarta">Akademi Komunikasi Yogyakarta</option>
                  <option value="Akademi Manajemen Informatika dan Komputer BSI Yogyakarta">Akademi Manajemen Informatika dan Komputer BSI Yogyakarta</option>
                  <option value="Akademi Pariwisata BSI Yogyakarta">Akademi Pariwisata BSI Yogyakarta</option>
                  <option value="Akademi Pariwisata Yogyakarta">Akademi Pariwisata Yogyakarta</option>
                  <option value="Akademi Perikanan Yogyakarta">Akademi Perikanan Yogyakarta</option>
                  <option value="Akademi Pertanian Yogyakarta">Akademi Pertanian Yogyakarta</option>
                  <option value="Akademi Peternakan Brahmaputra">Akademi Peternakan Brahmaputra</option>
                  <option value="Akademi Teknik YKPN">Akademi Teknik YKPN</option>
									</select>
								</div>
								<div class="form-group">
									<label>Prodi</label>
									<input class="form-control" id="exampleInputEmail1" placeholder="Tuliskan Nama Prodi" name="prodi">
								</div>
								<div class="form-group">
									<label>Tahun Masuk Kuliah</label>
									<select required name="tahun_masuk" class="form-control">
										<?php 
										$year = date('Y'); 
										for($start = 1999; $start <= $year; $start++):
											if($start == $year){$select = "selected";}else{$select = "";}
										echo "<option value='".$start."'".$select.">".$start."</option>";
										endfor; 
										?>
									</select>
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
