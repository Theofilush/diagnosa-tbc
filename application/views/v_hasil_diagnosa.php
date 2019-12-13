			<div class="right-content">
				<div class="title-hasil">
					<h5>Hasil Diagnosa</h5>
				</div>
				<div class="hasil">
					<table class="table table-bordered table-hover">
				   
				  	<tbody>
				  		<?php foreach($listKonsultasi as $row){ ?>
				    <tr>
				      <td>Nama Pasien</td>  
				      <td><?php echo $row->nama_lengkap;?></td>   
				    </tr>
				    <tr>
				      <td>Tanggal Diagnosa</td>   
				      <td><?php echo date_format( new DateTime($row->tgl_konsultasi) ,"d - m - Y "); ?></td>   
				    </tr>
				    <tr>
				      <td>Hasil Diagnosa</td>  
				      <td>Terdiagnosa <?php echo $row->hasil_konsultasi;?></td>   
				    </tr>
				    <?php
					}
				    ?>
				    </tbody>
					</table>
				</div>

				<div class="riwayat-jawaban">
					<table class="table table-bordered table-hover">
				  <thead>
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Status</th>
				      <th scope="col">Pertanyaan</th>
				      <th scope="col">Jawaban</th>

				 
				    </tr>
				 	 </thead>
				  	<tbody>
				  							<?php 
												$no=0;
												foreach($listPertanyaan as $row){
												$no++;
											?>
				    <tr>
				      <td class="middle"><?php echo $no;?> </td>
				      <td class="middle">G<?php echo $row->id_gejala; ?></td>
				      <td class="middle"><?php echo $row->pertanyaan; ?></td>   
				      <td class="middle"><?php ;
				       foreach($listPengetahuan2 as $rowa){$abc = 'r'.$no; echo ($rowa->$abc) ;} ?>
				       	
				       </td>   
				    </tr>
				    						<?php
												 }
											?>  
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
						<span style="display: block">* Rifampicin 450mg</span>
						<span style="display: block">* Ethambutol</span>
						<span style="display: block">* Pyrazinamide</span>
						<span style="display: block">* INH / Izonaid</span>
						<span style="display: block">* Vitamin B1</span>
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