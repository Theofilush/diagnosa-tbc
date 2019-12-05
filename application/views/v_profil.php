<!DOCTYPE html>
<html>
<head>
	<title>SIDITU</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="container">
		<div class="top-menu">
			<div class="left">
				<img src="<?php echo base_url() ?>assett/img/logo.png" alt="">
			</div>
			<div class="right">
				<ul>
					<li><a href="<?php echo site_url() ?>beranda"><i class="fa fa-home"></i> Beranda</a></li>
					<li><a href="<?php echo site_url() ?>profil"><i class="fas fa-user"></i> Profil</a></li>
					<li><a href="<?php echo site_url() ?>riwayat"><i class="fas fa-business-time"></i> Riwayat</a></li>
					<li class="list"><a href="<?php echo site_url() ?>login/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item" aria-current="page"><i class="fa fa-sitemap"></i> Siditu</li>
				<li class="breadcrumb-item active" aria-current="page" style="color: #2D4468;"><i class="fas fa-user"></i> Profil</li>
			</ol>
		</nav>
			<div class="title-create">
				<h5><i class="fas fa-user"></i> Profil</h5>				
			</div>
			<div class="input">
				<span>Username</span>
				<input type="text">
				<span>Nama Lengkap</span>
				<input type="text">
				<span>Password</span>
				<input type="password">
				<br>
				<input type="submit" class="btn btn-danger" value="Update">
				 
				<div class="clear"></div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

			<span class="copyright">Sistem Diagnosa Tuberkulosis (SIDITU)</span>
			<span class="copyright">©2019</span>
		</div>
	</div>

</body>
</html>