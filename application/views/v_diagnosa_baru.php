			<div class="right-content">
				<?php
                    echo form_open('diagnosaBaru/add_user');
                ?>
											<?php 
												foreach($listPertanyaan as $row){
											?>  
											<!-- <option><?php echo $row->tahun; ?></option>                       -->
				<div class="question">
					<div class="quest">
						<p><?php echo $row->pertanyaan; ?></p>
					</div>
					<div class="answer">
						<div class="radio-right">
						 	 <span>Tidak</span>
						 	<input type="radio" value="0">
						</div>
						<div class="radio-left">
							<span>Iya</span>
							<input type="radio" value="1">
						</div>

						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
											<?php
												 }
											?>   
				<input type="submit" class="btn btn-danger" value="Diagnosa" name="btnDiagnosa">
				<?php
                echo form_close();
                ?>
			</div>		