<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class diagnosaBaru extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$listPertanyaan = $this->M_sistem->list_pertanyaan(); 
		$dataHalaman = array(   		
		  'listPertanyaan' => $listPertanyaan,
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('v_diagnosa_baru');
		$this->load->view('dashboard/v_footer');
	}

	function add_diagnosa(){		
			if($this->input->post('btnDiagnosa') == "Diagnosa"){
				//$tanya = $this->input->post();
				$countParu=0;
				$countPayudara=0;
				$countGeBin=0;
				$countTurBel=0;
				$countKemih=0;
				$tanya1 = $this->input->post('tanya1', TRUE);
				$tanya2 = $this->input->post('tanya2', TRUE);
				$tanya3 = $this->input->post('tanya3', TRUE);
				$tanya4 = $this->input->post('tanya4', TRUE);
				$tanya5 = $this->input->post('tanya5', TRUE);
				$tanya6 = $this->input->post('tanya6', TRUE);
				$tanya7 = $this->input->post('tanya7', TRUE);
				$tanya8 = $this->input->post('tanya8', TRUE);
				$tanya9 = $this->input->post('tanya9', TRUE);
				$tanya10 = $this->input->post('tanya10', TRUE);
				$tanya11 = $this->input->post('tanya11', TRUE);
				$tanya12 = $this->input->post('tanya12', TRUE);
				$tanya13 = $this->input->post('tanya13', TRUE);
				$tanya14 = $this->input->post('tanya14', TRUE);
				$tanya15 = $this->input->post('tanya15', TRUE);
				$tanya16 = $this->input->post('tanya16', TRUE);
				$tanya17 = $this->input->post('tanya17', TRUE);
				$tanya18 = $this->input->post('tanya18', TRUE);
				$tanya19 = $this->input->post('tanya19', TRUE);
				$tanya20 = $this->input->post('tanya20', TRUE);
				$tanya21 = $this->input->post('tanya21', TRUE);
				$tanya22 = $this->input->post('tanya22', TRUE);
				$tanya23 = $this->input->post('tanya23', TRUE);
				$tanya24 = $this->input->post('tanya24', TRUE);
				$tanya25 = $this->input->post('tanya25', TRUE);
				$tanya26 = $this->input->post('tanya26', TRUE);
				$tanya27 = $this->input->post('tanya27', TRUE);
				$tanya28 = $this->input->post('tanya28', TRUE);
				$tanya29 = $this->input->post('tanya29', TRUE);
				$tanya30 = $this->input->post('tanya30', TRUE);
				$tanya31 = $this->input->post('tanya31', TRUE);
				$tanya32 = $this->input->post('tanya32', TRUE);
				$tanya33 = $this->input->post('tanya33', TRUE);
				$tanya34 = $this->input->post('tanya34', TRUE);
				$tanya35 = $this->input->post('tanya35', TRUE);
				$tanya36 = $this->input->post('tanya36', TRUE);
				$tanya37 = $this->input->post('tanya37', TRUE);
				$tanya38 = $this->input->post('tanya38', TRUE);
				if ($tanya1=="1") { $countParu++; $jawaban1='iya'; } else { $jawaban1=NULL; }
				if ($tanya2=="1") { $countParu++; $jawaban2='iya'; } else { $jawaban2=NULL; }
				if ($tanya3=="1") { $countParu++; $jawaban3='iya'; } else { $jawaban3=NULL; }
				if ($tanya4=="1") { $countParu++; $jawaban4='iya'; } else { $jawaban4=NULL; }
				if ($tanya5=="1") { $countParu++; $jawaban5='iya'; } else { $jawaban5=NULL; }
				if ($tanya6=="1") { $countParu++; $jawaban6='iya'; } else { $jawaban6=NULL; }
				if ($tanya7=="1") { $countParu++; $jawaban7='iya'; } else { $jawaban7=NULL; }
				if ($tanya8=="1") { $countParu++; $jawaban8='iya'; } else { $jawaban8=NULL; }
				if ($tanya9=="1") { $countParu++; $jawaban9='iya'; } else { $jawaban9=NULL; }
				if ($tanya10=="1") { $countParu++; $jawaban10='iya'; } else { $jawaban10=NULL; }
				if ($tanya11=="1") { $countParu++; $jawaban11='iya'; } else { $jawaban11=NULL; }
				if ($tanya12=="1") { $countGeBin++; $jawaban12='iya'; } else { $jawaban12=NULL; }
				if ($tanya13=="1") { $countGeBin++; $jawaban13='iya'; } else { $jawaban13=NULL; }
				if ($tanya14=="1") { $countGeBin++; $jawaban14='iya'; } else { $jawaban14=NULL; }
				if ($tanya15=="1") { $countGeBin++; $jawaban15='iya'; } else { $jawaban15=NULL; }
				if ($tanya16=="1") { $countGeBin++; $jawaban16='iya'; } else { $jawaban16=NULL; }
				if ($tanya17=="1") { $countGeBin++; $jawaban17='iya'; } else { $jawaban17=NULL; }
				if ($tanya18=="1") { $countGeBin++; $jawaban18='iya'; } else { $jawaban18=NULL; }
				if ($tanya19=="1") { $countPayudara++; $jawaban19='iya'; } else { $jawaban19=NULL; }
				if ($tanya20=="1") { $countPayudara++; $jawaban20='iya'; } else { $jawaban20=NULL; }
				if ($tanya21=="1") { $countPayudara++; $jawaban21='iya'; } else { $jawaban21=NULL; }
				if ($tanya22=="1") { $countTurBel++; $jawaban22='iya'; } else { $jawaban22=NULL; }
				if ($tanya23=="1") { $countTurBel++; $jawaban23='iya'; } else { $jawaban23=NULL; }
				if ($tanya24=="1") { $countTurBel++; $jawaban24='iya'; } else { $jawaban24=NULL; }
				if ($tanya25=="1") { $countTurBel++; $jawaban25='iya'; } else { $jawaban25=NULL; }
				if ($tanya26=="1") { $countTurBel++; $jawaban26='iya'; } else { $jawaban26=NULL; }
				if ($tanya27=="1") { $countTurBel++; $jawaban27='iya'; } else { $jawaban27=NULL; }
				if ($tanya28=="1") { $countTurBel++; $jawaban28='iya'; } else { $jawaban28=NULL; }
				if ($tanya29=="1") { $countTurBel++; $jawaban29='iya'; } else { $jawaban29=NULL; }
				if ($tanya30=="1") { $countTurBel++; $jawaban30='iya'; } else { $jawaban30=NULL; }
				if ($tanya31=="1") { $countTurBel++; $jawaban31='iya'; } else { $jawaban31=NULL; }
				if ($tanya32=="1") { $countTurBel++; $jawaban32='iya'; } else { $jawaban32=NULL; }
				if ($tanya33=="1") { $countKemih++; $jawaban33='iya'; } else { $jawaban33=NULL; }
				if ($tanya34=="1") { $countKemih++; $jawaban34='iya'; } else { $jawaban34=NULL; }
				if ($tanya35=="1") { $countKemih++; $jawaban35='iya'; } else { $jawaban35=NULL; }
				if ($tanya36=="1") { $countKemih++; $jawaban36='iya'; } else { $jawaban36=NULL; }
				if ($tanya37=="1") { $countKemih++; $jawaban37='iya'; } else { $jawaban37=NULL; }
				if ($tanya38=="1") { $countKemih++; $jawaban38='iya'; } else { $jawaban38=NULL; }

				echo $countParu."<br>";
				echo $countPayudara."<br>";
				echo $countGeBin."<br>";
				echo $countTurBel."<br>";
				echo $countKemih."<br>";

				if ($countParu > $countPayudara && $countParu > $countGeBin && $countParu >  $countTurBel &&  $countParu > $countKemih) {
					$hasilKonsultasi = "TBC Paru Paru";
				}
				if ($countPayudara > $countParu && $countPayudara > $countGeBin && $countPayudara >  $countTurBel &&  $countPayudara > $countKemih) {
					$hasilKonsultasi = "TBC Payudara";
				}
				if ($countGeBin > $countParu && $countGeBin > $countPayudara && $countGeBin >  $countTurBel &&  $countGeBin > $countKemih) {
					$hasilKonsultasi = "TBC Getah Bening";
				}
				if ($countTurBel > $countParu && $countTurBel > $countPayudara && $countTurBel >  $countGeBin &&  $countTurBel > $countKemih) {
					$hasilKonsultasi = "TBC Tulang Belakang";
				}
				if ($countKemih > $countParu && $countKemih > $countPayudara && $countKemih > $countGeBin && $countKemih >  $countTurBel ) {
					$hasilKonsultasi = "TBC Kantung Kemih";
				}
				
				$idUser = $this->session->userdata("id_user");
		        //exit();

				$data = array(
					'id_pasien' =>  $idUser,
					'tgl_konsultasi' => date("Y-m-d H:i:s"),
					'hasil_konsultasi' => $hasilKonsultasi
				);
				$query= $this->M_sistem->saveDiagnosa($data);

				$data1 = array(
					'id_user' => $idUser,
					'r1' => $jawaban1,
					'r2' => $jawaban2,
					'r3' => $jawaban3,
					'r4' => $jawaban4,
					'r5' => $jawaban5,
					'r6' => $jawaban6,
					'r7' => $jawaban7,
					'r8' => $jawaban8,
					'r9' => $jawaban9,
					'r10' => $jawaban10,
					'r11' => $jawaban11,
					'r12' => $jawaban12,
					'r13' => $jawaban13,
					'r14' => $jawaban14,
					'r15' => $jawaban15,
					'r16' => $jawaban16,
					'r17' => $jawaban17,
					'r18' => $jawaban18,
					'r19' => $jawaban19,
					'r20' => $jawaban20,
					'r21' => $jawaban21,
					'r22' => $jawaban22,
					'r23' => $jawaban23,
					'r24' => $jawaban24,
					'r25' => $jawaban25,
					'r26' => $jawaban26,
					'r27' => $jawaban27,
					'r28' => $jawaban28,
					'r29' => $jawaban29,
					'r30' => $jawaban30,
					'r31' => $jawaban31,
					'r32' => $jawaban32,
					'r33' => $jawaban33,
					'r34' => $jawaban34,
					'r35' => $jawaban35,
					'r36' => $jawaban36,
					'r37' => $jawaban37,
					'r38' => $jawaban38
				);
				$query1= $this->M_sistem->savePengetahuan2($data1);
				

				if ($query) {
					redirect(site_url('riwayat'));
				}
				else{
					redirect(site_url('riwayat'));
				}
			}	
	}

	
}
