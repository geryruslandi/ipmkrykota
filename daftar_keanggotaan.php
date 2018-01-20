<!DOCTYPE HTML>
<html>
<head>
  <title>IPMKR-Y KOTA</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/additional.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
 <?php include("front/include/navbar.php") ?>
 <?php include("front/include/koneksi.php") ?>

 <div class="wrap">
  <div class="content">
    <div class="sidebar">
      <h1>Keanggotaan</h1>
      <p style="text-style:justify;">
        Isikan data kamu sesuai dengan formulir yang tersedia kemudian klik kirim data akan masuk kesistem kami kemudian akan kami konfirmasi. Untuk pertanyaan silahkan hubungi kami melalui menu Hubungi Kami. Terimakasih
      </p>
    </div>
    <div class="b-box" style="min-height:350px;">
      <h1>Form Pendaftaran Anggota Baru IPMKR-Y Kota</h1>
      <form action="front/include/tambah_anggota.php" method="POST">
        <table class="table" style="margin-top:-5px; color:#000; font-size:14px;">
          <tbody>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><input required type="text" name="nama" placeholder="Nama Lengkap"></td>
            </tr>
            <tr>
              <td>Nomor Kontak</td>
              <td>:</td>
              <td><input required type="text" name="no_kontak" placeholder="eg: 08213456789"></td>
            </tr>
            <tr>
              <td>Universitas</td>
              <td>:</td>
              <td>
                <select required name="universitas">
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
              </td>
            </tr>
            <tr>
              <td>Prodi</td>
              <td>:</td>
              <td><input required type="text" name="prodi" placeholder="Tuliskan Nama Prodi"></td>
            </tr>
            <tr>
              <td>Tahun Masuk Kuliah</td>
              <td>:</td>
              <td>
                <select required name="tahun_masuk" class="form-control">
                  <?php 
                  $year = date('Y'); 
                  for($start = 1999; $start <= $year; $start++):
                    if($start == $year){$select = "selected";}else{$select = "";}
                  echo "<option value='".$start."'".$select.">".$start."</option>";
                  endfor; 
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td>Alamat Jogja</td>
              <td>:</td>
              <td><input required type="text" name="alamat_jogja" placeholder="Isikan Alamat Di Jogja" style="width:450px"></td>
            </tr>
            <tr>
              <td>Alamat Asal</td>
              <td>:</td>
              <td><input required type="text" name="alamat_asal" placeholder="Isikan Alamat Asal"style="width:450px"></td>
            </tr>
            <tr>
              <td colspan="3"><input style="float:right;" type="submit" class="btn btn-block btn-default" value="Kirim"></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>
<div class="footer">
  <div class="wrap">
    <div class="f-menu">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="tentangkami.html">Tentang Kami</a></li>
        <li><a href="#">Kepengurusan</a></li>
        <li><a href="#">Agenda</a></li>
        <li><a href="kontak.html">Kontak</a></li>
      </ul>
      <div class="copy">© 2015 All rights reserved.</div>
    </div>
  </div>
</div>
</body>
</html>
