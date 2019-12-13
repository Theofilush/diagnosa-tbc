			<div class="right-content">
				<p style="border: black 1px solid; background-color: white;padding: 5px;">Keterangan: Jika ada pertanyaan tidak dijawab, maka sama saja dengan Anda memilih jawaban SALAH (Tidak).</p>
				<?php
                    echo form_open('diagnosaBaru/add_diagnosa');
                ?>
											<?php 
											$no=0;
												foreach($listPertanyaan as $row){
													$no++;
												echo $no;
											?>
											<!-- <option><?php echo $row->tahun; ?></option>-->
				<div class="question">
					<div class="quest">
						<p><?php echo $row->pertanyaan; ?></p>
					</div>
					<div class="answer">
						<div class="radio-right">
						 	 <span>Tidak</span>
						 	 <input name="tanya<?php echo $no;?>" type="radio" value="0"> 
						</div>
						<div class="radio-left">
							<span>Iya</span>
							<input name="tanya<?php echo $no;?>" type="radio" value="1">
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