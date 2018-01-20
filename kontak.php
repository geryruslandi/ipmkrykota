<!DOCTYPE HTML>
<html>
<head>
    <title>IPMKR-Y KOTA</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <?php include("front/include/navbar.php") ?>
    <div class="wrap">
        <div class="content">
            <div class="sidebar">
                <h1>Hubungi Kami</h1>
                <p>
                    Isi pesan kamu dapat berupa kritik dan saran untuk kami.
                    Kamu juga bisa menghubungi kami melalui:</p>
                    <p>Telp : 0822-2508-9153 <br>Email : ipmkryk@email.com</p>
            </div>
            <div class="b-box">
                <h1>Hubungi Kami</h1>
                <div class="form">
                    <form class="cmxform" action="tambah_pesan.php" id="contactForm" method="post" >
                        <div>
                            <span><label for="name">Nama</label></span>
                            <span><input type="text" id="name" name="nama" placeholder="Masukkan nama kamu"required/></span>
                        </div>
                        <div>
                            <span><label for="email">Email</label></span>
                            <span><input type="text" id="email" name="email" placeholder="your@mail.com" required/></span>
                        </div>
                        <div>
                            <span><label for="subject">Pesan</label></span>
                            <span><textarea id="subject" name="pesan" placeholder="Isi pesan kamu"required></textarea></span>
                        </div>
                        <div>
                            <span><input class="submit" name="btn_pesan" type="submit" value="Kirim"/></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include("front/include/footer.php") ?>
</div>
</body>
</html>
