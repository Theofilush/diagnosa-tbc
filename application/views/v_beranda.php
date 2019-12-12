
			<div class="right-content">
				<table class="table table-bordered table-hover">
				  <thead>
				    <tr>
				      <th scope="col" class="modify">Kode</th>
				      <th scope="col">Gejala Penyakit</th>
				 
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
							foreach($listGejala as $row){
						?> 
				    <tr>
				      <th scope="row">G<?php echo $row->id_gejala; ?></th>
				      <td><?php echo $row->pertanyaan; ?></td>
				   
				    </tr>
				    <?php
					 }
					?>
				  </tbody>
				</table>
			</div>
			