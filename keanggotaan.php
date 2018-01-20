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
        Keanggotaan IPMKR-Y Kota bersifat terbuka bagi seluruh mahasiswa atau mahasiswi dari Kepulauan Riau di seluruh kawasan Yogyakarta. Hal ini bertujuan untuk mengumpulkan dan menjalin silaturahmi antar saudara se-daerah.
      </p>
      <p><button onclick="location.href='daftar_keanggotaan.php'" class="btn btn-default btn-block" >Daftar</button></p>
    </div>
    <div class="b-box" style="min-height:350px;overflow: scroll;height: 400px;">
      <h1>Daftar Anggota IPMKR-Y Kota</h1>
      <table class="table table-bordered" style="margin-top:-5px; color:#000; font-size:12px;">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Universitas</th>
            <th>Prodi</th>
            <th>Angkatan</th>
          </tr>
        </thead>
        <tbody>
          <?php $query_list_anggota = mysql_query("SELECT * FROM anggota where status= 'Accept' ORDER BY tanggal_bergabung ASC;");
          $i =1;
          while($data_anggota = mysql_fetch_assoc($query_list_anggota)):
           ?>
         <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $data_anggota['nama_anggota'] ?></td>
          <td><?php echo $data_anggota['universitas'] ?></td>
          <td><?php echo $data_anggota['prodi'] ?></td>
          <td><?php echo $data_anggota['tahun_masuk'] ?></td>
        </tr>
        <?php 
        $i++;
        endwhile; ?>
      </tbody>
    </table>
  </div>
</div>
</div>
<?php include("front/include/footer.php") ?>
</body>
</html>