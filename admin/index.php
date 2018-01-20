<?php 
session_start();
if (isset($_SESSION['IPMKR_LOGIN'])): 
	echo "<meta http-equiv='refresh' content='0;url=manajemen.php'>";
else:	
	?>
<html>
<head>
	<title>IPMKR-Y KOTA - Admin Login</title>
	<?php include('include/css.php'); ?>

</head>
<body style="margin-top:150px;">
	<div class="container">
		<div class="row" id="konten">
			<div class="col-sm-5 text-right" >
				<img src="../images/tnj.png" style="height:110px; margin-bottom:20px;">
				<h4 style="font-family:Arial; margin-top:-10px;">
					<p>
						IPMKR-Y KOTA
					</p>
					<p><small>
						Ikatan Pelajar Mahasiwa Kepulauan Riau,<br>Komisariat Kota Tanjungpinang Yogyakarta
					</small></p>
				</h4>
			</div>
			<form action="loginproses.php" method="POST" role="form">
				<div class="col-sm-5 text-left">
					<h3>Login</h3>
					<div class="form-group">
						<input class="form-control" placeholder="Username" type="text" name="username" autofocus required>
					</div>
					<div class="form-group">
						<input class="form-control" id="exampleInputEmail1" placeholder="Password" type="password" name="password" required>
					</div>
					<div class="form-group">
						<input class="btn btn-primary btn-sm" type="submit" value="Sign In"></input>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
<?php include('include/js.php'); ?>

</html>
<?php 
endif; ?>