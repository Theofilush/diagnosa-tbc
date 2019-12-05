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
		//echo "beranda";
	}

	function add_user(){		
			if($this->input->post('btnDiagnosa') == "Diagnosa"){									
				$username = $this->input->post('username', TRUE);
				$nama_lengkap = $this->input->post('nama_lengkap', TRUE);
				$password = $this->input->post('password', TRUE);
				$data = array(
					'username' =>  $username,
					'nama_lengkap' =>  $nama_lengkap,
					'password' => md5($password),
					'author' => 'pasien'
				);       
				$query= $this->M_login->addUser($data);
				if ($query) {
					redirect(site_url('login'));
				}
				else{
					redirect(site_url('login'));
				}
			}	
	}

	
}
