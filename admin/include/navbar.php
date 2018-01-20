<style type="text/css">
#logo{
	background-image: url(../images/logo_typo.png);
	background-size: 169px 50px;
	background-repeat: no-repeat;
}

body{margin-top: 30px;}
</style>
<div class="container">
	<div class="row" style="margin-bottom:10px;">
		<div class="col-sm-12">
			<div class="col-sm-12">
				<div class="col-sm-8"><!-- logo -->
					<div id="logo" style="margin-left:-15px; width:169px;height:50px;"> 
					</div>
				</div>
				<div class="col-sm-3"><!-- preview Web -->
					<a href="/ipmkr" target="_blank"><button style="margin-right:10px" type="button" class="btn btn-default btn-sm pull-right">Preview Website</button></a>
				</div>
				<div class="col-sm-1"><!-- User -->
				<div class="btn-group pull-right">
					<button style="margin-right:-15px;" type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
						<?php echo $userdata['nama']; ?>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="logout.php">Sign Out</a></li>
					</ul>
				</div>
				</div>
			</div>
		</div>
	</div>
	<ul class="nav nav-tabs">
		<li <?php if($themes['active'] == 'Home'){echo 'class="active"';} ?>><a href="manajemen.php">Home</a></li>
		<li <?php if($themes['active'] == 'artikel'){echo 'class="active"';} ?>><a href="manajemen.php?artikel">Artikel</a></li>
		<li <?php if($themes['active'] == 'Keanggotaan'){echo 'class="active"';} ?>><a href="manajemen.php?keanggotaan">Keanggotaan</a></li>
		<li <?php if($themes['active'] == 'Kepengurusan'){echo 'class="active"';} ?>><a href="manajemen.php?kepengurusan">Kepengurusan</a></li>
		<li <?php if($themes['active'] == 'Pesan'){echo 'class="active"';} ?>><a href="manajemen.php?pesan">Pesan</a></li>
		<!--<li <?php if($themes['active'] == 'Pengaturan'){echo 'class="active"';} ?>><a href="manajemen.php?pengaturan">Pengaturan</a></li>-->
	</ul>
</div>