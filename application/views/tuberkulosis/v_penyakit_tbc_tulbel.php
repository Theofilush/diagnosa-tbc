			<div class="right-content">
				<div class="title-hasil">
					<h5>Gejala Penyakit TBC Tulang Belakang</h5>
				</div>
				<div class="hasil">
					<table class="table table-bordered table-hover">
				   
				  	<tbody>
				  		<?php 
							foreach($listGejalaTulbel as $row){
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
			</div>