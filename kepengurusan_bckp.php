<!DOCTYPE HTML>
<html>
<head>
    <title>IPMKR-Y KOTA</title>
    <link href="css/additional.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
 <?php include("front/include/navbar.php") ?>
 <div class="wrap">
    <div class="content">
        <div class="sidebar">
            <h1>Kepengurusan</h1>
            <p>
                Struktur organisasi IPMKR-Y Kota ini merupakan struktur organisasi dengan periode tahunan. 
                Struktur organisasi ini terdiri dari kepengurusan inti, koordinator setiap departemen beserta masing-masing staff-nya.
            </p>
        </div>
        <div class="b-box">
            <?php include("front/include/koneksi.php") ?>
            <?php 
            $query_pengurus = mysql_query("SELECT periode FROM kepengurusan LIMIT 1;");
            $data_pengurus = mysql_fetch_assoc($query_pengurus);
            ?>
            <h1>STRUKTUR ORGANISASI IPMKR - Y KOTA Periode <?php echo $data_pengurus['periode'] ?></h1>
            <h2 class="original-size">KEPENGURUSAN INTI</h2>
            <table width="400px;" style="margin-bottom:30px;">
                <?php 
                $query_inti = mysql_query("SELECT * FROM kepengurusan where departemen = 1;");
                while($data_inti = mysql_fetch_assoc($query_inti)): ?>
                <tr>
                    <td><?php echo $data_inti['jabatan'] ?></td>
                    <td>:</td>
                    <td><?php echo $data_inti['nama'] ?></td>
                </tr>
                <?php 
                endwhile; ?>
            </table>
            <h2 class="original-size">Dep. Sumber Daya Manusia</h2>
            <table width="400px;" style="margin-bottom:30px;">
                <?php 
                $query_inti = mysql_query("SELECT * FROM kepengurusan where departemen = 2;");
                while($data_inti = mysql_fetch_assoc($query_inti)): ?>
                <tr>
                    <td><?php echo $data_inti['jabatan'] ?></td>
                    <td>:</td>
                    <td><?php echo $data_inti['nama'] ?></td>
                </tr>
                <?php 
                endwhile; ?>
            </table>
            <h2 class="original-size">Dep. INFOKOM</h2>
            <table width="400px;" style="margin-bottom:30px;">
                <?php 
                $query_inti = mysql_query("SELECT * FROM kepengurusan where departemen = 3;");
                while($data_inti = mysql_fetch_assoc($query_inti)): ?>
                <tr>
                    <td><?php echo $data_inti['jabatan']; ?></td>
                    <td>:</td>
                    <td><?php echo $data_inti['nama'] ?></td>
                </tr>
                <?php 
                endwhile; ?>
            </table>
            <h2 class="original-size">Kewirausahaan</h2>
            <table width="400px;" style="margin-bottom:30px;">
                <?php 
                $query_inti = mysql_query("SELECT * FROM kepengurusan where departemen = 4;");
                while($data_inti = mysql_fetch_assoc($query_inti)): ?>
                <tr>
                    <td><?php echo $data_inti['jabatan']; ?></td>
                    <td>:</td>
                    <td><?php echo $data_inti['nama'] ?></td>
                </tr>
                <?php 
                endwhile; ?>
            </table>
            <h2 class="original-size">Dep. Agama</h2>
            <table width="400px;" style="margin-bottom:30px;">
                <?php 
                $query_inti = mysql_query("SELECT * FROM kepengurusan where departemen = 5;");
                while($data_inti = mysql_fetch_assoc($query_inti)): ?>
                <tr>
                    <td><?php echo $data_inti['jabatan']; ?></td>
                    <td>:</td>
                    <td><?php echo $data_inti['nama'] ?></td>
                </tr>
                <?php 
                endwhile; ?>
            </table>
            <h2 class="original-size">Dep. Olahraga</h2>
            <table width="400px;" style="margin-bottom:30px;">
                <?php 
                $query_inti = mysql_query("SELECT * FROM kepengurusan where departemen = 6;");
                while($data_inti = mysql_fetch_assoc($query_inti)): ?>
                <tr>
                    <td><?php echo $data_inti['jabatan']; ?></td>
                    <td>:</td>
                    <td><?php echo $data_inti['nama'] ?></td>
                </tr>
                <?php 
                endwhile; ?>
            </table>
            <h2 class="original-size">Dep. Seni dan Budaya</h2>
            <table width="400px;" style="margin-bottom:30px;">
                <?php 
                $query_inti = mysql_query("SELECT * FROM kepengurusan where departemen = 7;");
                while($data_inti = mysql_fetch_assoc($query_inti)): ?>
                <tr>
                    <td><?php echo $data_inti['jabatan']; ?></td>
                    <td>:</td>
                    <td><?php echo $data_inti['nama'] ?></td>
                </tr>
                <?php 
                endwhile; ?>
            </table>
            <h2 class="original-size">Lembaga Asrama</h2>
            <table width="400px;" style="margin-bottom:30px;">
                <?php 
                $query_inti = mysql_query("SELECT * FROM kepengurusan where departemen = 8;");
                while($data_inti = mysql_fetch_assoc($query_inti)): ?>
                <tr>
                    <td><?php echo $data_inti['jabatan']; ?></td>
                    <td>:</td>
                    <td><?php echo $data_inti['nama'] ?></td>
                </tr>
                <?php 
                endwhile; ?>
            </table>
        </div>
    </div>
</div>
<?php include("front/include/footer.php") ?>
</body>
</html>