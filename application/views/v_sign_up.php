<!DOCTYPE html>
<html>
<head>
	<title>SIDITU</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="top-menu">
			<div class="left">
				<img src="<?php echo base_url() ?>assett/img/logo.png" alt="">
			</div>
		</div>
		<div class="content">
			<br>
			<div class="notice">
				<p>
					Siditu (Sistem diagnosa tuberkulosis) merupakan aplikasi sistem pakar yang dapat membantu dalam mendiagnosa penyakit tuberkulosis. Sistem ini dikembangkan dengan dukungan pakar - pakar yang ahli dalam mendiagnosa penyakit tuberkulosis, dan juga dengan jurnal yang dapat dipertanggungjawabkan.
				</p>
			</div>
			<div class="title-create">
				<h5>Daftar Akun</h5>				
			</div>
			<div class="input">
				<?php
                    echo form_open('signup/add_user');
                ?>
				<span>Username</span>
				<input type="text" name="username">
				<span>Nama Lengkap</span>
				<input type="text" name="nama_lengkap">
				<span>Password</span>
				<input type="password" name="password">
				<br>
				<input type="submit" class="btn btn-primary" value="Daftar" name="btnDaftar">
				<span class="talk">Sudah punya akun? <a href="<?php echo site_url() ?>login">Login</a></span>
				<div class="clear"></div>
				<?php
                echo form_close();
                ?>
			</div>
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