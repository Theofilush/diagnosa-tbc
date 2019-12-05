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
					<li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
					<li><a href="#"><i class="fas fa-user"></i> Profil</a></li>
					<li><a href="#"><i class="fas fa-business-time"></i> Riwayat</a></li>
					<li class="list"><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item" aria-current="page"><i class="fa fa-sitemap"></i> Siditu</li>
				<li class="breadcrumb-item" aria-current="page" style="color: #2D4468;"><i class="far fa-plus-square"></i> Diagnosa Baru</li>
				<li class="breadcrumb-item active" aria-current="page" style="color: #2D4468;">
			<i class="far fa-calendar"></i> Hasil Diagnosa</li>

			</ol>

		</nav>
			<div class="left-content">
				<div class="card" id="card" style="width: 18rem;">
					  <div class="card-header">
					   <i class="fa fa-navicon"></i> Menu Pasien
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item"><a href="#"> <i class="far fa-plus-square"></i> Diagnosa Baru</a></li>
					    <li class="list-group-item"><a href="#"><i class="fas fa-pills"></i> Daftar Obat</a></li>
					  </ul>
				</div>

				<br>
				<div class="card" id="card" style="width: 18rem;">
					  <div class="card-header card-hover">
					   <i class="fas fa-clipboard-list"></i> Penyakit
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item"><a href="#"> TBC Paru - paru</a></li>
					    <li class="list-group-item"><a href="#">TBC Payudara</a></li>
					    <li class="list-group-item"><a href="#">TBC Getah Bening</a></li>
					    <li class="list-group-item"><a href="#">TBC Tulang Belakang</a></li>
					    <li class="list-group-item"><a href="#">TBC Ginjal</a></li>
					    <li class="list-group-item"><a href="#">TBC Saluran kemih</a></li>
					  </ul>
				</div>
			</div>

			<div class="right-content">
				<div class="title-hasil">
					<h5>Hasil Diagnosa</h5>
				</div>
				<div class="hasil">
					<table class="table table-bordered table-hover">
				   
				  	<tbody>
				    <tr>
				      <td>Nama Pasien</td>  
				      <td>Dino Kurniawan</td>   
				    </tr>
				    <tr>
				      <td>Tanggal Diagnosa</td>   
				      <td>29-November-2019</td>   
				    </tr>
				    <tr>
				      <td>Hasil Diagnosa</td>  
				      <td>Terdiagnosa TBC Paru-paru</td>   
				    </tr>
				    </tbody>
					</table>
				</div>

				<div class="riwayat-jawaban">
					<table class="table table-bordered table-hover">
				  <thead>
				    <tr>
				      
				      <th scope="col">Status</th>
				      <th scope="col">Pertanyaan</th>
				      <th scope="col">Jawaban</th>

				 
				    </tr>
				 	 </thead>
				  	<tbody>
				    <tr>
				      <td class="middle">Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores veniam deserunt deleniti, molestias laudantium assumenda aut magnam nulla necessitatibus itaque vitae ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    <tr>
				      <td class="middle">Tidak Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    <tr>
				      <td class="middle">Tidak Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores veniam deserunt deleniti, molestias laudantium assumenda aut magnam nulla necessitatibus itaque vitae ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    <tr>
				      <td class="middle">Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores veniam deserunt deleniti, molestias laudantium assumenda aut magnam nulla necessitatibus itaque vitae ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    <tr>
				      <td class="middle">Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    <tr>
				      <td class="middle">Tidak Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores veniam deserunt deleniti, molestias laudantium assumenda aut magnam nulla necessitatibus itaque vitae ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    <tr>
				      <td class="middle">Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores veniam deserunt deleniti, molestias laudantium assumenda aut magnam nulla necessitatibus itaque vitae ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    <tr>
				      <td class="middle">Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    <tr>
				      <td class="middle">Tidak Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores veniam deserunt deleniti, molestias laudantium assumenda aut magnam nulla necessitatibus itaque vitae ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    <tr>
				      <td class="middle">Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores veniam deserunt deleniti, molestias laudantium assumenda aut magnam nulla necessitatibus itaque vitae ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    <tr>
				      <td class="middle">Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    <tr>
				      <td class="middle">Tidak Terindikasi</td>
				      <td class="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores veniam deserunt deleniti, molestias laudantium assumenda aut magnam nulla necessitatibus itaque vitae ?</td>   
				      <td class="middle">Iya</td>   
				    </tr>
				    </tbody>
					</table>
				</div>
				<div class="solusi">
					<table class="table table-bordered table-hover">
				  <thead>
				    <tr>
				      
				      <th scope="col">Solusi</th>
				 
				    </tr>
				 	 </thead>
				  	<tbody>
				    <tr>
				      <td>Penanganan Medis</td>   
				    </tr>
				    <tr>
				      <td>Konsumsi Obat
						<span style="display: block">* Lorem</span>
						<span style="display: block">* Lorem</span>
						<span style="display: block">* Lorem</span>

						
				      </td>   
				    </tr>
				    <tr>
				      <td>Gunakan Masker</td>   
				    </tr>
				    </tbody>
					</table>
				</div>
				<a href="" class="btn btn-danger">Kembali</a>

			</div>
			<div class="clear"></div>
			<br>
			<span class="copyright">Sistem Diagnosa Tuberkulosis (SIDITU)</span>
			<span class="copyright">©2019</span>
			
		</div>

	</div>

</body>
</html>